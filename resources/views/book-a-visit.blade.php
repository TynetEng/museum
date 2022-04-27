<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>BOOK A VISIT</title>
</head>
<body>
    <div>
        @include('include.nav')
    </div>
    <div class="container-fluid">
        <div class="parent">
            <div class="card card-body shadow-sm">
    
                <div class="cont text-center">
                    <a href="#" class="navbar-brand">
                        <h5>THE ROYAL MUSEUM, SCOTLAND</h5>
                    </a>
                </div>
                <div class="con text-center">
                    <h6> BOOK A VISIT</h6>
                </div>
                <form action="{{route('visit')}}" method="post">
                    @if($su=Session::get('error'))
                        <div class="alert alert-danger">
                            <strong>{{$su}}</strong>
                        </div>
                    @endif
    
                    <div class="part">
                        <label for="">DATE OF VISIT</label>
                        <input type="date" name="date" placeholder="DATE OF VISIT" value="{{old('date')}}" class="form-control {{$errors->has('date') ? 'is-inavlid' : '' }}">
                        @error('date')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="part">
                        <input type="code" value="{{old('code')}}"  name="number" class="form-control tagNumber @error('code') is-inavlid @enderror">
                        @error('number')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="part">
                        <label for="">TRMS CODE</label>
                        <div class="fillCode">
                            <input type="code" value="{{old('code')}}"  name="code" class="form-control till @error('code') is-inavlid @enderror">
                            <span onclick="generateCode()" class="generate">GENERATE</span>
                        </div>
                        @error('code')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    @csrf
                    <div class="logg">
                        <button type="submit">BOOK</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Fira+Sans&family=Playball&family=Source+Sans+Pro&display=swap');
        .container-fluid{
            margin: 0px;
            padding: 0px;
        }
        .parent{
            margin: auto;
            width: 30%;
            margin-top: 9%;
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
            color: #0061AB !important;
            text-decoration: none;
        }
        h5{
            color: #0061AB !important;
            font-family: 'Playball';
            font-weight: bold;
        }
        .part{
            margin-bottom: 10px;
            padding-top: 5px;
        }
        .cont{
            display: flex;
            justify-content: center;
        }
        label{
            font-weight: bold;
        }
        .con{
            text-align: center;
        }
        h6{
            color: black;

        }
        .tagNumber{
            font-weight: bold;
        }
        .till{
            border: 0 !important;
            outline: 0 !important;
            font-weight: bold;
        }

        .till:focus{
            border: 0 !important;
            outline: 0 !important;
        }
        .generate{
            font-size: 12px;
            background-color: #0061AB !important;
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
        }
        .fillCode{
            display: flex;
            align-items: center;
            justify-content: space-around;
            width: 100%;
            border: 1px solid lightgray;
            padding: 1%;
            border-radius: 6px;
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
        @media(max-width:760px){
            .parent{
                width: 100%;
                margin-top: 20% !important;
            }
        }
    </style>

    <script>
        let genNumber = @json($user);
        document.querySelector('.tagNumber').value = `TAG-${genNumber}`;
        function generateCode(){
            let code = Math.floor(Math.random() * 100000);
            document.querySelector('.till').value = `TRMS-${code}BV`;
        }
    </script>
</body>
</html>