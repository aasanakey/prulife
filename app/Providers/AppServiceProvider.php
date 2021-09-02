<?php

namespace App\Providers;

use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        ResetPassword::createUrlUsing(function ($notifiable, $token) {
            if ($notifiable instanceof \App\Models\User) {
                return url(route('password.reset', [
                    'token' => $token,
                    'email' => $notifiable->getEmailForPasswordReset(),
                ], false));
            } else if ($notifiable instanceof \App\Models\Agent) {
                return url(route('agent.password.reset', [
                    'token' => $token,
                    'email' => $notifiable->getEmailForPasswordReset(),
                ], false));
            } else if ($notifiable instanceof \App\Models\Admin) {
                return url(route('admin.password.reset', [
                    'token' => $token,
                    'email' => $notifiable->getEmailForPasswordReset(),
                ], false));
            }
        });

        VerifyEmail::createUrlUsing(function ($notifiable) {
            if ($notifiable instanceof \App\Models\Agent) {
                return URL::temporarySignedRoute(
                    'agent.verification.verify',
                    \Carbon\Carbon::now()->addMinutes(Config::get('auth.verification.expire', 60)),
                    [
                        'id' => $notifiable->getKey(),
                        'hash' => sha1($notifiable->getEmailForVerification()),
                    ]
                );
            }if ($notifiable instanceof \App\Models\Admin) {
                return URL::temporarySignedRoute(
                    'admin.verification.verify',
                    \Carbon\Carbon::now()->addMinutes(Config::get('auth.verification.expire', 60)),
                    [
                        'id' => $notifiable->getKey(),
                        'hash' => sha1($notifiable->getEmailForVerification()),
                    ]
                );
            } else {
                return URL::temporarySignedRoute(
                    'verification.verify',
                    \Carbon\Carbon::now()->addMinutes(Config::get('auth.verification.expire', 60)),
                    [
                        'id' => $notifiable->getKey(),
                        'hash' => sha1($notifiable->getEmailForVerification()),
                    ]
                );
            }
        });
    }
}
