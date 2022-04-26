<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class UserSocialController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callback()
    {
        try {
            
            $user = Socialite::driver('google')->stateless()->user();
            
            $findUser = User::where('google_id', $user->id)->first();
            

            $duplicateEmail = User::where('email', $user->email)->first(); // to 
            $duplicateId = User::where('email', $user->email)->get('id'); // to check and use duplicate id to login

            
            if($findUser){
                Auth::loginUsingId($findUser);
                $user = auth()->user();
                return redirect('/');
            }
            elseif($duplicateEmail){
                Auth::loginUsingId($duplicateId);
                $user = auth()->user();
                return redirect('/');
            }else{
                    
                $newUser = User::insert([
                    'name' => $user->user['given_name'],
                    'email' => $user->user['email'],
                    'google_id'=> $user->id,
                    'phoneNumber'=>'',
                    'password' => Hash::make('123456dummy'),
                    'remember_token'=>'',
                    'created_at'=>now()
                ]);
                
                Auth::loginUsingId($newUser);
                $user = auth()->user();
                return redirect('/');
            }
        } catch (Exception $e) {
            // dd($e->getMessage());
            return "error";
        }
    }
}



