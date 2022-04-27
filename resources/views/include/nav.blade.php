<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
         integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
    <nav class="">
        <div class="container-fluid">
            <div class="header shadow-bg">
                <div class="nav navbar-expand-sm container">
                    <div class="pro">
                        <div class="left">
                            <a href="/" class="navbar-brand">
                                <h4> THE ROYAL MUSEUM, SCOTLAND</h4>
                            </a>
    
                            <button class="navbar-toggler bell"  id="openSideBar">
                               <i class="fa fa-bars"></i>
                            </button>
                        </div>
                        <div>
                            <div class="show">
                                <ul class="navbar-nav">
                                    <li class="nav-items">
                                        <a href="/" class="nav-link">
                                            <span></span>
                                            <span>HOME</span>
                                        </a>
                                    </li>
                                    <li class="nav-items drop">
                                        <a href="#" class="nav-link">
                                            EXPLORE
                                        </a>
                                        <div class="ex">
                                            <div class="tin">
                                                <a href="/book-a-tourist">
                                                    BOOK A TOURIST
                                                </a>
                                            </div>
                                            <div class="tin">
                                                <a href="/book-a-visit">
                                                    BOOK A VISIT
                                                </a>
                                            </div>
                                            <div class="tin">
                                                <a href="/speak">
                                                    SPEAK TO A CULTURE STRATEGIST
                                                </a>
                                            </div>
                                            <div class="tin2">
                                                <a href="/loan">
                                                    LOAN AN OBJECT
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    {{-- <li class="nav-items">
                                        <a href="/admin" class="nav-link">
                                            <span></span>
                                            <span>ADMIN</span>
                                        </a>
                                    </li> --}}
                                    <li class="nav-items">
                                        <a href="/login" class="nav-link">
                                            <span></span>
                                            <span>LOGIN</span>
                                        </a>
                                    </li>
                                    <li class="nav-items">
                                        <a href="{{route('logout')}}" class="nav-link">
                                            <span></span>
                                            <span>LOGOUT</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="sideBar">
                        <ul class="navbar-nav">
                            <li class="nav-items">
                                <a href="/" class="nav-link">
                                    <span></span>
                                    <span>HOME</span>
                                </a>
                            </li>
                            <li class="nav-items">
                                <a href="/book-a-tourist" class="nav-link">
                                    BOOK A TOURIST
                                </a>
                            </li>
                            <li class="nav-items">
                                <a href="/book-a-visit" class="nav-link">
                                    BOOK A VISIT
                                </a>
                            </li>
                            <li class="nav-items">
                                <a href="/speak" class="nav-link">
                                    SPEAK TO A CULTURE STRATEGIST
                                </a>
                            </li>
                            <li class="nav-items">
                                <a href="/loan" class="nav-link">
                                    LOAN AN OBJECT
                                </a>
                            </li>
                            {{-- <li class="nav-items">
                                <a href="/admin" class="nav-link">
                                    <span></span>
                                    <span>ADMIN</span>
                                </a>
                            </li> --}}
                            <li class="nav-items">
                                <a href="/login" class="nav-link">
                                    <span></span>
                                    <span>LOGIN</span>
                                </a>
                            </li>
                            <li class="nav-items">
                                <a href="{{route('logout')}}" class="nav-link">
                                    <span></span>
                                    <span>LOGOUT</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <script>
        $(document).ready(function(){
         $('.sideBar').hide()
         $('#openSideBar').click(function(){
             $('.sideBar').toggle()   
         })
        })
    </script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Fira+Sans&family=Playball&family=Source+Sans+Pro&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap');
        html,body{ 
            margin: 0px;
        }
        .container-fluid{
            padding: 0px;
            margin: 0px;
        }

        /* NAVBAR */
        .header{
            display: flex;
            align-items: center;
            position: fixed;
            top: 0;
            padding: 0px !important;
            margin: 0px !important;
            width: 100%;
            z-index: 1000;
            margin: 0;
            justify-content: space-between;
            color: #0061AB !important;
            background-color: white;
            box-shadow: 0px 0px 10px rgba(black, black, black, 0.4);
            border-bottom: 4px solid #0061AB;
        }
        h4{
            color: #0061AB !important;
            font-family: 'Playball';
            font-weight: bolder;
        }
        .nav{
            padding: 0px !important;
        }
        .left{
            display: flex;
            align-items: center;;
            padding: 0px
        }
        .show a{
            font-weight: bold;
            color: #0061AB;
        }
        .show a:hover{
            color: rgb(226, 223, 223);
        }
        .sideBar{
            display: none;
        }
        .navbar{
            display: flex;
            justify-content: space-between !important;
        }
       .navbar-nav{
            display: flex;
            align-items: center;
        }
        .pro{
            width: 100% !important;
            padding: 0px;
            z-index: 1000;
            margin: 0px;
            display: flex;
            align-items: center !important;
            justify-content: space-between !important;
        }
        .ex{
            background-color: white;
            border-radius: 3%;
            width: 18% !important;
            padding: 0% 5px;
            line-height: 3.0;
            padding-top: 5px;
            padding-bottom: 5px;
            height: 250px;
            min-height: fit-content;
            max-height: fit-content;
            position: absolute ;
            border: 1px solid lightgray;
            z-index: 5000 !important;
            display: none;
            font-size: 15px;
        }
        .tin{
            border-bottom: 1px solid lightgray;
            font-weight: bold;
            text-align: center;
        }
        .tin2{
            font-weight: bold;
            text-align: center;
        }
        .tin a{
            color: black;
            text-decoration: none;
        }
        .tin2 a{
            color: black;
            text-decoration: none;
        }
        .drop:hover .ex{
            display: inherit;
        }
       
        /* @MEDIA */
        @media(max-width:760px){
            .left{
                display: flex;
                align-items: center;;
                padding: 0px
            }
            .navbar-brand{
                padding-top: 15px !important;
            }
            .sideBar{
                top: 0;
                background-color: #0061AB;
                text-align: center;
                left: -3% !important;
                width: 55%;
                height: 100vh;
                position: absolute !important;
                z-index: 1000 !important;
                box-shadow: 0px 0px 2px black;
                padding: 4% 6%;
                font-size: 15px;
                line-height: 2.5;
                overflow-y: scroll;
            }
            h4{
                font-size: 17px;
            }
            .sideBar a{
                color: white;
                font-family: 'Source Sans Pro';
                font-weight: bold;
            }
            .left{
                display: flex;
                justify-content: space-around !important;
                align-items: center;
                width: 100% !important;
            }
            .bell{
                color: #0061A;
            }
            /* .bell:focus{
            
                border-radius: 1%;
                transform: rotate(180deg);
                transform: 0.5s;
            } */
            
            .collapse{
                display: none;
            }
            nav{
                width: 100% !important;
            }
            #openSideBar{
                border: 0 !important;
                outline: 0 !important;
            }
            .show{
                display: none;
            }
        }
        
    
    </style>
</body>
</html>