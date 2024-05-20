<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;

class Social extends Controller
{
    function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    function callback()
    {
        $socialUser = Socialite::driver('google')->stateless()->user();
        // dd($socialUser);
        $registeredUser = User::where("email", $socialUser->email)->first();
        // var_dump($registeredUser->id);
        if(!$registeredUser)
        {
            $user = User::updateOrCreate([
                'google_id' => $socialUser->id,
            ], [
                'name' => $socialUser->name,
                'password' => md5($socialUser->email),
                'email' => $socialUser->email,
                'avatar' => $socialUser->avatar,
                'google_token' => $socialUser->token,
                'google_refresh_token' => $socialUser->refreshToken,
                'role' => '3',
                'statusakun' => '1',
                'editakundefault' => '0',
            ]);
            // Menyimpan data ke session
            session([
                'id' => $user->id,
                'google_id' => $socialUser->id,
                'name' => $user->name,
                'email' => $user->email,
                'avatar' => $user->avatar,
                'role' =>  $user->role,
            ]);
            return redirect('/beranda')->with('message', 'Berhasil login dengan registered');
        }else
        {
            $user = User::where('id', $registeredUser->id)->update([
                'google_id' => $socialUser->id,
            ], [
                'name' => $socialUser->name,
                'avatar' => $socialUser->avatar,
                'google_token' => $socialUser->token,
                'google_refresh_token' => $socialUser->refreshToken,
            ]);
            session([
                'id' => $registeredUser->id,
                'role' =>  $registeredUser->role,
                'google_id' => $socialUser->id,
                'name' => $socialUser->name,
                'email' => $socialUser->email,
                'avatar' => $socialUser->avatar,
            ]);
            return redirect('/beranda')->with('message', 'Berhasil login');
        }
    }
}
