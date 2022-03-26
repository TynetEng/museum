<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>
    <div>
        @include('include.nav')
    </div>
    <div class="parent">
        <div class="card card-body">
            <div>
                <div class="alert alert-success">
                    <strong>Successful</strong>
                </div>
                <div>
                    <p>You can print your receipt here.</p>
                </div>
                <div class="print">
                    <button>PRINT</button>
                </div>
            </div>
        
        </div>
    </div>
    <style>
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
        p{
            text-align: center;
        }
        .print{
            text-align: center;
        }
        .print button{
            color: white;
            background-color: #0061AB;
            border: 0;
            padding: 5px 15px;
            border-radius: 5px;
            font-weight: bold;
        }
        @media(max-width:760px){
            .parent{
                width: 100%;
                margin-top: 20% !important;
            }
        }

        
    </style>
</body>
</html>