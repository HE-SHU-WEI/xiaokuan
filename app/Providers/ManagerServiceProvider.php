<?php
namespace App\Providers;

use Illuminate\Contracts\Auth\UserProvider;
use Illuminate\Support\ServiceProvider;
use App\Models\Managerlist;

class ManagerServiceProvider extends ServiceProvider implements UserProvider
{
    // 根據給定的主鍵檢索使用者
    public function retrieveById($identifier)
    {
        return Managerlist::find($identifier);
    }

    // 根據憑證檢索使用者
    public function retrieveByCredentials(array $credentials)
    {
        return Managerlist::where('account', $credentials['account'])->first();
    }

    // 驗證使用者的憑證
    public function validateCredentials($user, array $credentials)
    {
        return $user->password === $credentials['password'];
    }

    // 根據憑證和「「「記住我」」」令牌檢索使用者
    // 如果您的應用程序支持「「「記住我」」」功能，可以實現這個方法
    public function retrieveByToken($identifier, $token)
    {
        // Implementation
    }

    // 更新「「「記住我」」」令牌
    // 如果您的應用程序支持「「「記住我」」」功能，可以實現這個方法
    public function updateRememberToken($user, $token)
    {
        // Implementation
    }

}
