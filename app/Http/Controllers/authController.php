<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Laravel\Socialite\Facades\Socialite;
use Laravel\Socialite\Two\InvalidStateException;

class authController extends Controller
{
    function index() {
        return view('auth.index');
    }

    function redirect() {
        return Socialite::driver('google')->redirect();
    }

    function callback() {
        try {
            $user = Socialite::driver('google')->user();
        } catch (InvalidStateException $e) {
            return redirect()->to('/oauth2')->with('error', 'Sesi login Google kedaluwarsa. Silakan coba lagi.');
        } catch (\Throwable $e) {
            return redirect()->to('/oauth2')->with('error', 'Gagal menyelesaikan login Google.');
        }

        $id = $user->id;
        $email = $user->email;
        $name = $user->name;
        $avatar = $user->avatar;

        $cek = User::where('email', $email)->count();
        if($cek > 0) {
            $avatar_file = $id . ".jpg";
            $fileContent = file_get_contents($avatar);
            File::put(public_path("admin/images/faces/$avatar_file"),$fileContent);

            $user = User::updateOrCreate(
                ['email'=>$email],
                [
                    'name'=> $name,
                    'google_id' => $id,
                    'avatar' =>$avatar_file
                ]
            );
            Auth::login($user);
            return redirect()->to('/dashboard');
        }
        else{
            return redirect()->to('/oauth2')->with('error','Email tidak terdaftar.');
        }

    }

    public function logout()
    {
        Auth::logout();
        return redirect()->to('/oauth2');
    }
}
