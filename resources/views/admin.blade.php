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
    <div>
        @include('include.nav')
    </div>
    <div class="container-fluid">
        <div class="parent container">
            <div class="">
                <h3>Admin</h3>
            </div>

            {{-- TABLE FOR BOOK A VISIT --}}
            <div class="fill">
                <h6>BOOK A VISIT</h6>
                <table>
                    <tr>
                        <th>NAME</th>
                        <th>TAG NUMBER</th>
                        <th>TAG CODE</th>
                        <th>VISIT DATE</th>
                    </tr>
                    @foreach ($visit as $i)
                        @foreach ($user as $b)
                            <tr>
                                <td>{{$b->name}}</td>
                                <td>{{$i->number}}</td>
                                <td>{{$i->code}}</td>
                                <td>{{$i->date}}</td>
                            </tr>
                        @endforeach
                    @endforeach
                </table>
                
            </div>

            {{-- TABLE FOR BOOK A TOURIST --}}
            <div class="fill">
                <h6>BOOK A TOURIST</h6>
                <table>
                    <tr>
                        <th>NAME</th>
                        <th>TOURIST'S NAME</th>
                        <th>TAG CODE</th>
                        <th>VISIT DATE</th>
                    </tr>
                    @foreach ($tourist as $i)
                        @foreach ($user as $b)
                            <tr>
                                <td>{{$b->name}}</td>
                                <td>{{$i->name}}</td>
                                <td>{{$i->code}}</td>
                                <td>{{$i->date}}</td>
                            </tr>
                        @endforeach
                    @endforeach
                </table>
                
            </div>

            {{-- TABLE FOR SPEAK TO A CULTURE STRATEGIST --}}
            <div class="fill">
                <h6>SPEAK TO A CULTURE STRATEGIST</h6>
                <table>
                    <tr>
                        <th>NAME</th>
                        <th>CULTURE STRATEGIST'S NAME</th>
                        <th>TAG CODE</th>
                        <th>VISIT DATE</th>
                    </tr>
                    @foreach ($speak as $i)
                        @foreach ($user as $b)
                            <tr>
                                <td>{{$b->name}}</td>
                                <td>{{$i->name}}</td>
                                <td>{{$i->code}}</td>
                                <td>{{$i->date}}</td>
                            </tr>
                        @endforeach
                    @endforeach
                </table>
                
            </div>

            {{-- TABLE FOR LOAN AN OBJECT --}}
            <div class="fill">
                <h6>LOAN AN OBJECT</h6>
                <table>
                    <tr>
                        <th>NAME</th>
                        <th>NAME OF OBJECT</th>
                        <th>TAG CODE</th>
                        <th>BORROW DATE</th>
                        <th>RETURN DATE</th>
                    </tr>
                    @foreach ($loan as $i)
                        @foreach ($user as $b)
                            <tr>
                                <td>{{$b->name}}</td>
                                <td>{{$i->name}}</td>
                                <td>{{$i->code}}</td>
                                <td>{{$i->dateBorrow}}</td>
                                <td>{{$i->dateReturn}}</td>
                            </tr>
                        @endforeach
                    @endforeach
                </table>
                
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
            width: 100%;
            margin-top: 8%;
            animation: animatezoom 0.6s;
        }
        .fill{
            margin-top: 20px;
        }
        table{
            width: 100%;
        }
        table, tr,td,th{
            border: 1px solid black;
            padding: 5px 10px;
        }
        h6{
            text-align: center;
            font-weight: bolder;
        }
        h3{
            text-align: center;
            color: black;
            font-weight: bolder;
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
            color: #0061AB;
            text-decoration: none;
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
        h5{
            color:#0061AB;
        }
        h6{
            color: black !important;

        }

        @media(max-width:760px){
            .parent{
                width: 100%;
                margin-top: 20% !important;
            }
        }
    </style>

    <script>
    </script>
</body>
</html>