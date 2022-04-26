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
        "password"=>"required",
        "phone"=>"required|min:8|max:12"
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

