<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Classlist;
use App\Models\Userlist;
use Illuminate\Support\Facades\Storage;
use Google_Client;
use Google_Service_YouTube;
use Google_Service_YouTube_Video;
use Google\Service\YouTube;
use Illuminate\Support\Facades\Log;


class ManagerController extends Controller
{
    public function index()
    {
        return view('manager.index');
    }

    public function uploadYoutubeLink(Request $request)
    {
        $request->validate([
            'youtube_link' => 'required|url',
        ]);

        $class = new Classlist();
        $class->link = $request->input('youtube_link');
        $class->save();

        return redirect()->route('manager.index')->with('success', 'YouTube link uploaded successfully!');
    }

    public function uploadTeacherInfo(Request $request)
{
    try {
        // 檢驗請求資料
        $request->validate([
            'teacher_name' => 'required|string',
            'youtube_link' => 'required|url',
            'introduction' => 'required|string',
            'know' => 'required|string',
            'for_who' => 'required|string',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'money' => 'required|numeric',
        ]);

        // 取得老師名字
        $teacherName = $request->input('teacher_name');

        $teacherId = Userlist::where('name', $teacherName)->value('id');

        // 上傳圖片到 storage
        $photoPath = $request->file('photo')->store('photos');

        // 取得 YouTube 影片長度
        $youtubeLink = $request->input('youtube_link');
        $videoLength = $this->getYouTubeVideoLength($youtubeLink);

        // 確保 $videoLength 是數字，否則設置為預設值
        $videoLength = is_numeric($videoLength) ? $videoLength : 0;

        // 處理時間格式，確保是 H:i:s 格式
        $videoTimeFormatted = gmdate('H:i:s', $videoLength);

        // 新增資料到 classlist
        $newClass = Classlist::create([
            'teacherid' => $teacherId,
            'teachername' => $teacherName,
            'link' => $youtubeLink,
            'videotime' => $videoTimeFormatted,
            'introduction' => $request->input('introduction'),
            'know' => $request->input('know'),
            'forwho' => $request->input('for_who'),
            'photo' => $photoPath,
            'money' => $request->input('money'),
            'classtype' => '一般課程',  // 請替換成您的預設值
        ]);

        // 返回成功或重定向至某頁面，包含 videotime
        return response()->json(['message' => 'Teacher information uploaded successfully', 'videotime' => $newClass->videotime], 200);

    } catch (\Exception $e) {
        // 處理錯誤，例如日誌記錄或返回錯誤訊息
        Log::error('Error in uploadTeacherInfo: ' . $e->getMessage());
        return response()->json(['error' => 'An error occurred during teacher information upload.'], 500);
    }
}





private function getYouTubeVideoLength($youtubeLink)
{
    try {
        // 初始化 Google API 客戶端
        $googleClient = new Google_Client();
        $googleClient->setDeveloperKey(env('YOUTUBE_API_KEY')); // 設定您的 Google API 金鑰

        // 初始化 YouTube 服務
        $youtube = new YouTube($googleClient);

        // 解析 YouTube 影片 ID
        $videoId = $this->getYouTubeVideoId($youtubeLink);

        if (!$videoId) {
            throw new \Exception('Invalid YouTube link. Unable to get video ID.');
        }

        // 使用 YouTube Data API 獲取影片詳細資訊
        $videoInfo = $youtube->videos->listVideos('contentDetails', ['id' => $videoId]);

        if (empty($videoInfo) || empty($videoInfo[0]->contentDetails->duration)) {
            throw new \Exception('Unable to get video information from YouTube API.');
        }

        // 提取影片的持續時間（持續時間以 PT 格式返回）
        $duration = $videoInfo[0]->contentDetails->duration;

        // 轉換 PT 格式成 H:i:s
        $videoLength = $this->convertYouTubeDurationToHMS($duration);

        return $videoLength;
    } catch (\Exception $e) {
        // 處理錯誤，例如日誌記錄或返回預設值
        Log::error('Error in getYouTubeVideoLength: ' . $e->getMessage());
        return '00:00:00'; // 或者返回其他預設值
    }
}

private function convertYouTubeDurationToHMS($duration)
{
    $interval = new \DateInterval($duration);

    // 格式化成 H:i:s
    $hms = sprintf('%02d:%02d:%02d', $interval->h + ($interval->d * 24), $interval->i, $interval->s);

    return $hms;
}





    public function getYouTubeVideoId($youtubeLink)
    {
        try {
            // 匹配 YouTube 連結中的影片 ID
            $pattern = '/(?:https?:\/\/)?(?:www\.)?(?:youtube\.com\/(?:[^\/\n\s]+\/\S+\/|(?:v|e(?:mbed)?)\/|\S*?[?&]v=)|youtu\.be\/)([a-zA-Z0-9_-]{11})/';

            // 使用正則表達式匹配
            if (preg_match($pattern, $youtubeLink, $matches)) {
                return $matches[1]; // 返回匹配到的第一個子模式（影片 ID）
            }

            throw new \Exception('Invalid YouTube link. Unable to get video ID.');
        } catch (\Exception $e) {
            // 處理錯誤，例如日誌記錄或返回預設值
            Log::error('Error in getYouTubeVideoId: ' . $e->getMessage());
            return null; // 或者返回其他預設值
        }
    }

}
