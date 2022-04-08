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

    <title>Document</title>
</head>
<body>
    <div class="container-fluid">
        <div class="parent shadow-sm">
            <div class="card card-body">
    
                <div class="cont">
                    <a href="/" class="navbar-brand">
                        <p class="headiee">THE ROYAL MUSEUM, SCOTLAND</p>
                    </a>
                </div>
                <div class="headie">
                    <h4> User Login</h4>
                </div>
                <form action="{{route('login')}}" method="post">
                    @if($su=Session::get('error'))
                        <div class="alert alert-danger  alert-dismissible fade show"  role="alert">
                            <strong>{{$su}}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                    @endif  
                    <div>
                        <label for="">Email</label>
                        <input type="text" name="email" value="{{old('emaill')}}" class="form-control {{$errors->has('email') ? 'is-inavlid' : '' }}">
                        @error('email')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div>
                        <label for="">Password</label>
                        <input type="password" value="{{old('passwordd')}}"  name="password" class="form-control @error('password') is-inavlid @enderror">
                        @error('password')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
    
                    <div>
                        <input type="checkbox" id="remember">
                        <label for="remember">Remember me</label for="remember">
                    </div>
                    @csrf
                    <div class="logg">
                        <button type="submit">LOGIN</button>
                    </div>
                </form>
                <div class="fig">
                    <p>Don't have an account? <span><a href="./signup">signup</a></span></p>
                </div>
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
        .fig{
            text-align: center;
            padding-top: 5px;
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

        @media(max-width:760px){
            .parent{
                width: 100%;
            }
        }
    </style>
</body>
</html>