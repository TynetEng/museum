<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
         integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{url('/css/home.css')}}">
    <title>HOME</title>
</head>
<body>
    <div>
        @include('include.nav')
    </div>
    <div class="container-fluid">
        {{--INTRODUCTORY IMAGE --}}
        <div class="join">
            <div class="intro"></div>
            <div class="over"></div>
        </div>
        <div class="container">
            <div class="parent">
               
                {{-- PART 1 --}}
                <div class="row part1">
                    <div class="col-sm-6">
                        <img src="../image/m1.jpg" alt="">
                    </div>
                    <div class="col-sm-6">
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                            Perferendis necessitatibus sit sed distinctio id, 
                            pariatur nam labore recusandae ab officia rem tempore 
                            ipsum consequuntur doloremque nihil aspernatur tempora dolor nesciunt?
                        </p>
                    </div>
                </div>

                {{-- PART 2 --}}
                <div class="row part2">
                    <div class="col-sm-6">
                        <img src="../image/m8.jpg" alt="">
                    </div>
                    <div class="col-sm-6">
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                            Perferendis necessitatibus sit sed distinctio id, 
                            pariatur nam labore recusandae ab officia rem tempore 
                            ipsum consequuntur doloremque nihil aspernatur tempora dolor nesciunt?
                        </p>
                    </div>
                </div>

                {{-- PART 3 --}}
                <div class="row part3">
                    <div class="col-sm-6">
                        <img src="../image/m3.jpg" alt="">
                    </div>
                    
                    <div class="col-sm-6">
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                            Perferendis necessitatibus sit sed distinctio id, 
                            pariatur nam labore recusandae ab officia rem tempore 
                            ipsum consequuntur doloremque nihil aspernatur tempora dolor nesciunt?
                        </p>
                    </div>
                </div>

                {{-- PART 4 --}}
                <div class="row part4">
                    <div class="col-sm-6">
                        <img src="../image/m4.jpg" alt="">
                    </div>
                    <div class="col-sm-6">
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                            Perferendis necessitatibus sit sed distinctio id, 
                            pariatur nam labore recusandae ab officia rem tempore 
                            ipsum consequuntur doloremque nihil aspernatur tempora dolor nesciunt?
                        </p>
                    </div>
                </div>
                {{-- DOWNLOAD APP --}}
                <div class="row app">
                    <div class=" col-sm-6">
                        <h3> Download The Royal Musuem, Scotland<br>
                            Mobile App
                        </h3>
                        <p>
                            Make your next experience one smooth tourism with The Royal 
                            Museum, Scotland app. Use it to book a visit, to book a tourist
                            , speak to a culture strategist and loan an object.
                        </p>
                        <div>
                            <button class="down">DOWNLOAD</button>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <img src="../image/mobile.png" alt="">
                    </div>
                </div>


                <div class="fourth-part row">
                    <h3>Today's Offers</h3>
                    <div class="pear">
                        <div class="pear1 col-sm-3">
                            <div>
                                <img src="../image/m9.jpg" alt="">
                                <div>
                                    <button class="pear-butt1">See Deal</button>
                                </div>
                            </div>
                            <div class="sub-pear1">
                                <h5> Trip to Sculpture Room </h5>
                                <p> From heroes sculpture to activist sculpture, find more ways to culture and save when
                                    you book them!</p>
                            </div>
                            <div>
                                <button class="pear-button">See Deal</button>
                            </div>
                        </div>
                        <div class="pear1 col-sm-3">
                            <div>
                                <img src="../image/ma.jpg" alt="">
                                <div>
                                    <button class="pear-butt">See Deal</button>
                                </div>
                            </div>
                            <div class="sub-pear1">
                                <h5> Trip to Acurium </h5>
                                <p> From seasonal deals to early-bird discounts, find more ways to culture and save when
                                    you book them!</p>
                            </div>
                            <div>
                                <button class="pear-button">See Deal</button>
                            </div>
                        </div>
                        <div class="pear1 col-sm-3">
                            <div>
                                <img src="../image/m6.jpg" alt="">
                                <div>
                                    <button class="pear-butt">See Deal</button>
                                </div>
                            </div>
                            <div class="sub-pear1">
                                <h5> Trip to Acurium </h5>
                                <p> From seasonal deals to early-bird discounts, find more ways to culture and save when
                                    you book them!</p>
                            </div>
                            <div>
                                <button class="pear-button">See Deal</button>
                            </div>
                        </div>
                    </div>
                    <div>
                        <button class="pear-button2">VIEW ALL DEALS</button>
                    </div>
                </div>

                {{-- MAP --}}
                <div class="row map">
                    <div class="col-sm-6">
                        <p>
                            The Royal Museum is located at Edinburgh, Scotland
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                            Sint labore unde exercitationem nesciunt asperiores earum ea, 
                            ullam maxime. Ullam nihil veniam quos tempore reiciendis dolores quam nobis 
                            est ipsum praesentium!
                        </p>
                    </div>
                    <div class="col-sm-6">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2234.136878018377!2d-3.192755284061918!3d55.946999480605704!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4887c784d1bae421%3A0x88cc2703f2beb5c3!2sNational%20Museum%20of%20Scotland!5e0!3m2!1sen!2sng!4v1648218840426!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

                {{-- LAST PART --}}

                <div class="second">
                    <div class=" row rain">
                        <div class="team col-sm-3">
                            <h6>About The Royal Musuem, Scotland </h6>
                            <a
                                href="/home">
                                <p> About us</p>
                            </a>
                            <a href="#">
                                <p> Career</p>
                            </a>
                            <a href="#">
                                <p> Investor relations</p>
                            </a>
                            <a href="#">
                                <p> Newsroom</p>
                            </a>
                            <a href="#">
                                <p> Legal, privacy, copyrights</p>
                            </a>
                            <a href="#">
                                <p> Envitonmental, social and goverance</p>
                            </a>
                            <a href="#">
                                <p> Combacting human trafficking</p>
                            </a>
                            <a href="#">
                                <p> Browser compability</p>
                            </a>
                            <a href="#">
                                <p> Web accessibility</p>
                            </a>
                        </div>
                        <div class="team col-sm-3">
                            <h6>Help</h6>
                            <a
                                href="/home">
                                <p> Contact The Royal Musueum, Scotland</p>
                            </a>
                            <a href="#">
                                <p> Receipts and refunds</p>
                            </a>
                            <a href="#">
                                <p> FAQs</p>
                            </a>
                            <a href="#">
                                <p> Bag and optional fees</p>
                            </a>
                            <a href="#">
                                <p> Customer service and contingency plans</p>
                            </a>
                            <a href="#">
                                <p> Conditions of carriage</p>
                            </a>
                        </div>
                        <div class="team col-sm-3">
                            <h6>Extra</h6>
                            <a href="#">
                                <p> Festive Bonus</p>
                            </a>
                            <a href="#">
                                <p> Gift cards</p>
                            </a>
                            <a href="#">
                                <p> Trip insurance</p>
                            </a>
                        </div>
                    </div>
                    <div class="ream">
                        <a href="#">
                            <p>Receipts and refunds</p>
                        </a>
                        <a href="#">
                            <p>Bag and optional fees</p>
                        </a>
                        <a href="#">
                            <p>Customer service and contingency plans</p>
                        </a>
                        <a href="#">
                            <p>FAQs</p>
                        </a>
                    </div>
                </div>
                <div class="third row shadow-sm">
                    <div class="part">
                        <div class="cent">
                            <p>@2022 THE ROYAL MUSEUM, SCOTLAND</p>
                        </div>
                        <div class="third-end">
                            <a href="#">
                                <div>
                                    <i class="fa fa-facebook bay1"></i>
                                </div>
                            </a>
                            <a href="#">
                                <i class="fa fa-twitter bay2"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-play bay3"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>