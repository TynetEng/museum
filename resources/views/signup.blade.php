<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container-fluid">
        <div class="parent">
            <div class="card card-body shadow-sm">
    
                <div class="cont">
                    <a href="#" class="navbar-brand">
                        <h4>THE ROYAL MUSEUM,SCOTLAND</h4>
                    </a>
                </div>
                <div class="headie">
                    <h4> User Signup</h4>
                </div>
                <form action="{{route('signup')}}" method="post">
                    @if($su=Session::get('error'))
                        <div class="alert alert-danger">
                            <strong>{{$su}}</strong>
                        </div>
                    @endif
    
                    <div>
                        <label for="">Name</label>
                        <input type="text" name="name" value="{{old('name')}}" class="form-control {{$errors->has('name') ? 'is-inavlid' : '' }}">
                        @error('name')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div>
                        <label for="">Email</label>
                        <input type="text" name="email" value="{{old('email')}}" class="form-control {{$errors->has('email') ? 'is-inavlid' : '' }}">
                        @error('email')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div>
                        <label for="">Phone Number</label>
                        <input type="text" name="phone" value="{{old('phone')}}" class="form-control {{$errors->has('phone') ? 'is-inavlid' : '' }}">
                        @error('phone')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div>
                        <label for="">Password</label>
                        <input type="password" value="{{old('password')}}"  name="password" class="form-control @error('password') is-inavlid @enderror">
                        @error('password')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    @csrf
                    <div class="logg">
                        <button type="submit">Register</button>
                    </div>
                    <div class="cage">
                        <span>OR</span>
                    </div>
                    <div class="google">
                        <a href="{{url('/auth/redirect')}}">
                            <span><i class="fa fa-google"></i></span>
                            <span>Continue with Google</span>
                        </a>
                    </div>
                </form>
    
                
                <div class="pat1">
                    <p>Already a user? <span><a href="./login">Login</a></span></p>
                </div>
    
                <div class="pat2">
                    <p>By continuing, you agree to the app <span class="pat3">Term of Service</span> and <span class="pat3">Privacy Policy.</span></p>
                </div>
            </div>
        </div>
        
    </div>
    <style>
        .container-fluid{
            margin: 0px;
            padding: 0px;
        }
        .parent{
            margin: auto;
            width: 30%;
            margin-top: 5%;
            animation: animatezoom 0.6s;
        }
        @keyframes animatezoom{
            from{
                transform: scale(0);
            }
            to{
                transform: scale(1);
            }
        }
        .navbar-brand{
            text-align: center;
        }
        .cont{
            display: flex;
            justify-content: center;
        }
        .logg{
            text-align: center;
            padding-top: 10px;
            margin-bottom: -5px;
        }
        .logg button{
            border: 0px;
            background-color: #0061AB;
            color: white;
            border-radius: 5px;
            padding: 2px 10px;
            font-weight: bold;
        }
        .cage{
            text-align: center;
            padding: 10px 0px 10px 0px;
            
        }
        .google{
            text-align: center;
        }
        .google a{
            background-color: black;
            color: white;
            border: 0px;
            border-radius: 5px;
            padding: 10px 15px;
            text-decoration: none;
        }
        .pat1{
            text-align: center;
            font-size: 12px;
            padding-top: 10px;
        }
        .pat2{
            text-align: center;
            font-size: 12px;
        }
        .pat3{
            color:#0061AB;
        }
        .navbar-brand{
            color: #0061AB;
            text-decoration: none;
        }
        .headie{
            text-align: center;
        }

        @media(max-width:760px){
            .parent{
                width: 100%;
            }
        }
    </style>
</body>
</html>