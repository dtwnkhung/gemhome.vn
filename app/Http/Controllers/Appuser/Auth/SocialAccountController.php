<?php

namespace App\Http\Controllers\Appuser\Auth;

use App\Models\AppUser;
use App\Models\SocialAccount;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Socialite;
use Illuminate\Support\Str;

class SocialAccountController extends Controller
{
    public function redirectToProvider($provider = null)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function handleProviderCallback($provider = null)
    {
        try {
            $appuser = Socialite::driver($provider)->user();
        } catch (Exception $e) {            
            return redirect(route('appuser.loginform'));
        }
        
        $authUser = $this->findOrCreateUser($appuser, $provider);
        auth('appuser')->login($authUser, true);
        return redirect('/');
    }

    public function findOrCreateUser($socialUser, $provider)
    {
        $account = SocialAccount::where('provider_name', $provider)->where('provider_id', $socialUser->getId())->first();

        if ($account) {
            return $account->user;
        } else {
            $user = AppUser::where('email', $socialUser->getEmail())->first();

            if (! $user) {
                $user = AppUser::create([
                    'email' => $socialUser->getEmail(),
                    'name' => $socialUser->getName(),
                    'image' => $socialUser->getAvatar(),
                    'password' => bcrypt(Str::random(8)),
                ]);
            }

            $user->accounts()->create([
                'provider_name' => $provider,
                'provider_id' => $socialUser->getId(),
            ]);

            return $user;
        }
    }
}
