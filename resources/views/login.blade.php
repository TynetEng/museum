<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <title>LOGIN</title>
</head>
<body>
    <div class="container-fluid">
        <div class="parent shadow-sm">
            <div class="card card-body">
    
                <div class="cont text-center">
                    <a href="/" class="navbar-brand">
                        <p class="headiee">THE ROYAL MUSEUM, SCOTLAND</p>
                    </a>
                </div>
                <div class="headie">
                    <h4> User Login</h4>
                </div>
                <form action="{{route('login')}}" method="post">
                    @if($su=Session::get('error'))
                        <div class="alert alert-danger  alert-dismissible fade show d-flex justify-content-between"  role="alert">
                            <strong>{{$su}}</strong>
                            <button type="button" class="close border-0" data-dismiss="alert" aria-label="Close" style="background-color: transparent">
                                <span aria-hidden="true" style="font-weight: bolder">×</span>
                            </button>
                        </div>
                    @endif 

                    {{-- ALERT FOR SUCCESSFUL RESET PASSWORD --}}
                    @if (session('info'))
                        <div class="alert alert-success" role="alert">
                            {{session('info')}}
                        </div>
                    @endif
                    
                    {{-- ALERT FOR LOGOUT --}}
                    @if (session('log'))
                        <div class="alert alert-success" role="alert">
                            {{session('log')}}
                        </div>
                    @endif
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" name="email" value="{{$verifiedEmail ?? old('emaill')}}"  placeholder="mail@website.com" class="form-control {{$errors->has('email') ? 'is-inavlid' : '' }}">
                        @error('email')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" value="{{old('password')}}" placeholder="Min. 5 characters" name="password" class="form-control @error('password') is-inavlid @enderror">
                        @error('password')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
    
                    <div class="d-flex justify-content-between">
                        <div>
                            <input type="checkbox" id="remember">
                            <label for="remember" class="rmb">Remember me</label for="remember">
                        </div>
                        <div>
                            <a href="{{route('userRequest')}}" class="text-decoration-none">Forgot password?</a>
                        </div>
                    </div>
                    @csrf
                    <div class="logg">
                        <button type="submit">LOGIN</button>
                    </div>
                </form>
                <footer class="text-center py-2">
                    <p>Not registered yet? <span><a href="./signup" class="text-decoration-none">Create an account</a></span></p>
                </footer>
            </div>
            
        </div>    
    </div>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Fira+Sans&family=Playball&family=Source+Sans+Pro&display=swap');
        .parent{
            margin: auto;
            width: 30%;
            margin-top: 10%;
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
        .container-fluid{
            margin: 0px;
            padding: 0px;
        }
        .navbar-brand{
            text-align: center;
        }
        .cont{
            display: flex;
            justify-content: center;
            text-align: center;
        }
        .logg{
            text-align: center;
            padding-top: 10px;
        }
        .logg button{
            border: 0px;
            background-color: #0061AB;
            color: white;
            border-radius: 5px;
            padding: 2px 10px;
            font-weight: bold;
        }
        .navbar-brand{
            text-decoration: none;
            text-align: center; 
        }
        .headiee{
            font-family: 'Playball';
            font-weight: bold;
            color: #0061AB;
        }
    
        .headie{
            text-align: center;
        }
        label{
            font-weight: bold;
        }
        .rmb{
            font-weight: 400
        }

        @media(max-width:760px){
            .parent{
                width: 100%;
            }
        }
    </style>
</body>
</html>