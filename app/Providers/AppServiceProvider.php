<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Blade;

use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Facades\Lang;

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
        Schema::defaultStringLength(191);
        Blade::directive('currency_format', function ($expression) {
            return "<?php echo number_format($expression) . 'đ'; ?>";
        });

        ResetPassword::toMailUsing(function ($notifiable, $token) {
            // 'level' => $this->level,
            // 'subject' => $this->subject,
            // 'greeting' => $this->greeting,
            // 'salutation' => $this->salutation,
            // 'introLines' => $this->introLines,
            // 'outroLines' => $this->outroLines,
            // 'actionText' => $this->actionText,
            // 'actionUrl' => $this->actionUrl,
            // 'displayableActionUrl' => str_replace(['mailto:', 'tel:'], '', $this->actionUrl),

            return (new MailMessage)
                ->subject(Lang::get('Đổi mật khẩu'))
                ->greeting(Lang::get('Xin chào!'))
                ->salutation(Lang::get('Thân ái.'))
                ->line(Lang::get('Ai đó đã yêu cầu truy cập vào đường link để thay đổi password của bạn tại TOEIC MAX. Bạn có thể thực hiện bằng đường link bên dưới'))
                ->action(Lang::get('Đổi Password'), url(route('appuser.password.reset', ['token' => $token, 'email' => $notifiable->getEmailForPasswordReset()], false)))
                ->line(Lang::get('Đường dẫn này sẽ hết hạn trong :count phút.', ['count' => config('auth.passwords.'.config('auth.defaults.passwords').'.expire')]))
                ->line(Lang::get('Nếu yêu cầu này không phải của bạn, vui lòng bỏ qua email này nhé. Password của bạn sẽ không thay đổi cho đến khi bạn truy cập vào đường link phía trên và tạo một password mới.'));
        });
    }
}
