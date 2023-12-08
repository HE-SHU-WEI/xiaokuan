


<?php

$apiKey = 'AIzaSyDKJrFNYU1pjEWCs7xbWynnVT9GdPCnW98';
$videoId = 'Lm4SOMUKGE8';

$url = "https://www.googleapis.com/youtube/v3/videos?key={$apiKey}&part=contentDetails&id={$videoId}";

// 使用 file_get_contents 函式發送 HTTP GET 請求
$response = file_get_contents($url);

// 將 JSON 回應解碼成陣列
$data = json_decode($response, true);

// 檢查是否成功取得回應
if ($data && isset($data['items'][0]['contentDetails']['duration'])) {
    // 取得影片持續時間
    $duration = $data['items'][0]['contentDetails']['duration'];

    // 轉換 PT 格式成 H:i:s
    $videoLength = convertYouTubeDurationToHMS($duration);

    // 輸出影片持續時間
    echo 'Video Length: ' . $videoLength;
} else {
    // 未成功取得影片資訊
    echo 'Unable to get video information from YouTube API.';
}

// 轉換 YouTube 持續時間格式為 H:i:s
function convertYouTubeDurationToHMS($duration)
{
    $interval = new DateInterval($duration);

    // 格式化成 H:i:s
    $hms = sprintf('%02d:%02d:%02d', $interval->h + ($interval->d * 24), $interval->i, $interval->s);

    return $hms;
}
?>
