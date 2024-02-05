<?php

use App\Models\Loan;
use App\Models\Speak;
use App\Models\Tourist;
use App\Models\User;
use App\Models\Visit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// HOME
Route::get('/', function () {
    return view('home');
});

Route::get('/run-migration', function () {
    Artisan::call('optimize:clear');
    Artisan::call('migrate:fresh --seed');
    return "migration executed successfully";
});

// LOGIN
Route::get('/login', function () {
    return view('login');
});

Route::post('/login', function (Request $request) {
    $request->validate([
        'email'=>"required|email",
        'password'=>"required"
    ]);

    try {
        $token = auth()->attempt(['email'=>$request->email, 'password'=>$request->password],true);
        
        if(!$token){
            session()->flash('error', 'Invalid Login Details');
            return redirect()->back();
        }
        $user = auth()->user();
        return redirect()->to('/');
     
    } catch (\Throwable $th) {
        session()->flash('error', 'Invalid Login Details');
        return redirect()->back();
    }   
})->name('login');

// SIGNUP
Route::get('/signup', function () {
    return view('signup');
});

Route::post('/signup', function (Request $request) {
    $request->validate([
        'email'=>"email|required|unique:users",
        'name'=>"required",
        'password'=>'required|min:5|confirmed',
        'password_confirmation'=>'required',
        "phone"=>"required"
    ]);

    try {
        $user= User::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'phoneNumber'=> $request->phone,
            'password'=>Hash::make($request->password),
        ]);
        
        Auth::loginUsingId($user->id);
        return redirect('/login');
    } catch (\Throwable $th) {
        return "error";
    }

})->name('signup');

// FORGET PASSWORD --RESET PASSWORD
Route::get('/password/request', function(){
    return view('password.request');
})->name('userRequest');

Route::post('/password/request', function(Request $request){
    $request->validate([
        'email'=> 'required|email|exists:users,email'
    ]);

    $token = Str::random(64);
    DB::table('password_resets')->insert([
        'email'=> $request->email,
        'token'=>$token,
        'created_at'=> Carbon::now()
    ]);

    $action_link= route('password.reset', ['token'=>$token, 'email'=>$request->email]);
    $body= "We have received a request to reset the password for <b> The Royal Museum, Scotland</b> account associated with
    ".$request->email.". You can reset your password by clicking the link below";

    Mail::send('email_forgot', ['action_link'=>$action_link, 'body'=>$body], function($message) use ($request){
        $message->from('agbesuaoluwatoyin96@gmail.com', 'The Royal Museum, Scotland');
        $message->to($request->email, 'Your name')
                ->subject('Reset Password');
    });
    

    return back()->with('success', 'We have e-mailed your password reset link!');
})->name('send_password');

Route::get('/password/reset/{token}', function(Request $request, $token=null){
    return view('password.reset')->with(['token'=>$token, 'email'=>$request->email]);
})->name('password.reset');

Route::post('/password/reset', function(Request $request){
    $request->validate([
        'email'=>'required|email|exists:users,email',
        'password'=>'required|min:5|confirmed',
        'password_confirmation'=>'required'
    ]);

    $check_token = DB::table('password_resets')->where([
        'email'=>$request->email,
        'token'=>$request->token,
    ])->first();

    if(!$check_token){
        return back()->withInput()->with('fail', 'Invalid Token');
    }else{
        User::where('email', $request->email)->update([
            'password'=> Hash::make($request->password)
        ]);

        DB::table('password_resets')->where([
            'email'=>$request->email
        ])->delete();
        
        return redirect()->to('/login')
        ->with('info', 'Your password has been changed! You can now login with the new password')
        ->with(['verifiedEmail'=>$request->email]);
    }
})->name('resetPassword');

// END FORGET PASSWORD --RESET PASSWORD

// USER LOGOUT
Route::get('/logout', function(Request $request){
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/login')
    ->with('log', "You've successfully logout! Enter your details to login");
})->name('logout');

// BOOK-A-VISIT
Route::get('/book-a-visit', function () {
    $visit = DB::table('visits')->get();
    $user =  auth()->user()->id;

    return view('book-a-visit')->with(['visit'=>$visit, 'user'=>$user]);
});
Route::post('/book-a-visit', function (Request $request) {
    $validateUser = auth()->user()->id;;
    
    $request->validate([
        'date'=>"required",
        'number'=>"required",
        "code"=>"required",
    ]);
            
    try {        
        if($validateUser){
            $visit = Visit::create([
                'date'=> $request->date,
                'number'=> $request->number,
                'code'=> $request->code,
                'user_id'=>$validateUser
            ]);
            return redirect('/print');
        }
    } catch (\Throwable $th) {
        session()->flash('error', 'ERROR');
        return redirect('/login');
    }

})->name('visit');

// BOOK-A-TOURIST
Route::get('/book-a-tourist', function () {
    return view('book-a-tourist');
});
Route::post('/book-a-tourist', function (Request $request) {
    $validateUser = auth()->user()->id;

    $request->validate([
        'date'=>"required",
        'name'=>"required",
        "code"=>"required",
        
    ]);

    try {
        if($validateUser){
            $tourist= Tourist::create([
                'date'=> $request->date,
                'name'=> $request->name,
                'code'=> $request->code,
                'user_id'=>$validateUser
            ]);
        }
        
        return redirect('/print');
    } catch (\Throwable $th) {
        session()->flash('error', 'ERROR');
        return redirect('/login');
    }

})->name('tourist');

// SPEAK TO A CULTURE STRATEGIST
Route::get('/speak', function () {
    return view('speak');
});
Route::post('/speak', function (Request $request) {
    $validateUser = auth()->user()->id;

    $request->validate([
        'date'=>"required",
        'name'=>"required",
        "code"=>"required",
    ]);

    try {
        if($validateUser){
            $speak= Speak::create([
                'date'=> $request->date,
                'name'=> $request->name,
                'code'=> $request->code,
                'user_id'=>$validateUser
            ]);
            return redirect('/print');
        }
    } catch (\Throwable $th) {
        session()->flash('error', 'ERROR');
        return redirect('/login');
    }

})->name('speak');

// LOAN AN OBJECT
Route::get('/loan', function () {
    return view('loan');
});
Route::post('/loan', function (Request $request) {
    $validateUser = auth()->user()->id;

    $request->validate([
        'dateBorrow'=>"required",
        'dateReturn'=>"required",
        'name'=>"required",
        "code"=>"required",
    ]);
    
    try {
        if($validateUser){
            $loan= Loan::create([
                'dateBorrow'=> $request->dateBorrow,
                'dateReturn'=> $request->dateReturn,
                'name'=> $request->name,
                'code'=> $request->code,
                'user_id'=>$validateUser
            ]);
            return redirect('/print');
        }
    } catch (\Throwable $th) {
        session()->flash('error', 'ERROR');
        return redirect('/login');
    }

})->name('loan');

// ADMIN
Route::get('/admin', function () {

    $validateUser = auth()->user()->id;

    $user = User::where('id', $validateUser)->get();
    $speak = Speak::where('user_id', $validateUser)->get();
    $loan = Loan::where('user_id', $validateUser)->get();
    $tourist = Tourist::where('user_id', $validateUser)->get();
    $visit = Visit::where('user_id', $validateUser)->get();
    
    return view('admin')->with(['visit'=>$visit, 'speak'=>$speak, 
    'loan'=>$loan, 'tourist'=>$tourist, 'user'=>$user]);
});

// PRINT RECEIPT
Route::get('/print', function(){
    return view('print');
});

// USER GOOGLE LOGIN
Route::get('/auth/redirect', 'App\Http\Controllers\UserSocialController@redirect');
Route::get('/auth/google/callback', 'App\Http\Controllers\UserSocialController@callback');

