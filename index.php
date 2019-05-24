<?php
//START SESSION
session_start();
//HTTPS REQUIRED
if($_SERVER['HTTPS'] != "on"){
$url = "https://". $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
header("Location:$url");
exit;
 }

require('template.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" content="width=device-width" name="viewport" initial-scale=1.0 >
        <title>Fibre Hub</title>
        <link rel="stylesheet" type="text/css" href="bootstrap-3.3.7/dist/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
        <link href='animate.css' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="index.css">
        <link rel="stylesheet" type="text/css" href="index2.css">
    </head>

    <body id ="home" class="body">
        <header id="my-header" class="header">
            <div class="navbar navbar-default row" role="banner" style="margin: 0px;">
                <div class="navbar-header responsive-logo col-xs-8">
                    <button type="button" class="navbar-toggle col-xs-2 pull-right" data-toggle="collapse" data-target="#nav-menu">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="navbar-brand col-xs-8">
                        <a href="fibrehub.html"><img src="image/fibrehublogo.jpg" alt="FibreHub" class="img-responsive" /></a>
                    </div> 
                </div>
                <nav class="collapse navbar-collapse col-xs-4" id="nav-menu" role="navigation" >
                    <ul class="nav navbar-nav">
                        <li class="menu"><a class="menu-element " href ="index.php">Home</a></li>
                        <li class="menu"><a class="menu-element" href ="#service">Service</a></li>
                        <li class="menu"><a class="menu-element" href ="#about">About</a></li>
                        <li class="menu"><a class="menu-element" href ="#contact">Contact</a></li>
                        <li class="menu"><a class="menu-element" href ="signup.php">SignUp</a></li>
                    </ul>
                </nav>  
            </div> 
        </header>
        <div class="container-fluid" > 
            <div class="row" >
                <div class="bg intro-div fadeInUp wow">
                    <h1 class="intro intro-main">STAY CONNECTED 24/7</h1>
                    <h4 class= "intro">...Cost Effective Internet Services For Business.</h4>
                    <p class="intro">
                        <a  href="#services">
                            <button type="button" class="btn btn-success btn-lg" style="text-align:center;" id="service-button" name="service">Services</button>
                        </a>
                    </p>    
                </div> 
            </div>
            
            <div class="row" id="service">
                <div class="col-xs-12 service-group">
                    <h2 class="sub-header" >SERVICES</h2> 
                    Reliable services to meet your needs
                </div><span >&nbsp;</span>

                <div class="col-xs-12">
                    <div class="col-xs-12 col-md-3 service-border">
                        <h5 class="caption service-caption">CARRIER ETHERNET</h5>

                        <p class="detail">
                            With Our Carrier Ethernet service, you can forget everything about translation of IP addresses, security breaches, 
                            tedious waiting times for reconfigurations and below-standard quality. Carrier Ethernet
                            is born for fibre. This means that the technology works perfectly on Our powerful fibre network. 

                        </p>
                    </div>
                    
                    <div class="col-xs-12 col-md-3 service-border">
                        <h5 class="caption service-caption">FTTP</h5>
                        <p class="detail">
                            FTTP is the fastest fibre-optic broadband available to any business. This is an end-to-end pure 
                            fibre-optic cable system wholly owned and managed by Fibre Hub and offers the highest available 
                            bandwidth when compared to any available service in Nigeria today, in both downstream
                            and upstream directions.
                        </p>
                    </div>

                    <div class="col-xs-12 col-md-3 service-border">
                        <h5 class="caption service-caption">DARK FIBRE</h5>
                        <p class="detail">
                            Dark fiber solutions provide network extension and swift deployment, delivered
                            with speed, simplicity and confidence. Fibre Hub
                            specialising in dark fiber and Laying of fibre cables to enable you to be in business for your customers.
                            
                            Fibre Hub offers a variety of connectivity options
                        </p>       
                    </div>
                    
                    <div class="col-xs-12 col-md-3 service-border">
                        <h5 class="caption service-caption">IP TELEPHONY (VoIP)</h5>
                        <p class="detail">
                            We provide IP Telephony solutions. This technology transmits voice applications over an IP network 
                            as in traditional PBX.
                            With Fibre Hub VoIP and IP Telephony solution, our customers are guaranteed business communications systems that integrate 
                            multiple technologies into comprehensive systems to address their individual needs.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row" id="about">
                <div class="col-xs-12 	service-group">
                    <h2 class="sub-header">ABOUT US</h2>
                    <span id="about-summary">
                        Fibre Hub is a new generation Internet Service provider with high level of Reliablity
                        and Quality Service.
                    </span>  
                </div>
                <span >&nbsp;</span>
                <div class="col-xs-12">
    
                    <div class="col-xs-12 col-md-4 fadeInLeft wow">
                        <p class="mantra">We provide high quality service that you expect 24/7.</p>
                    </div>
                    <div class="col-xs-12 col-md-4">
                        <p class="detail">
                            Fibre Hub is a telecommunication and Information Technology service company. We offer a combination of business 
                            solutions designed to enhance the efficiency and productivity of our clients.
                            Over the years we have been able to identify and develop a competence for analyzing and understanding business
                            operations, the cost drivers and operational hiccups that create inefficiencies and challenges in organizations. 
                            We have numerous customized business solutions designed to address our clients'
                            specific telecommunication challenges; giving the organization the required edge in today’s highly competitive market.
                        </p>
                    </div>
                    <div class="col-xs-12 col-md-4 why-fibrehub">
                        <div class="col-xs-12">
                            <span class="fa fa-wifi col-md-2 col-xs-1 about-icon" style="font-size:40px; color: white;"></span>
                            <div class="col-xs-11 col-md-10">
                                <h5 class="caption">Fast Internet, Reliable Internet.</h5>
                                <p class="detail">
                                    We utilises  optical cables  for its internet broadband service ,
                                    which makes it the fastest internet you can get.  
                                </p>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <span class="glyphicon glyphicon-ok col-md-2 col-xs-1 about-icon"></span>
                            <div class="col-xs-11 col-md-10">
                                <h5 class="caption">Flexibility</h5>
                                <p class="detail"> 
                                    Fibre Hub drives on the policy to make efficient changes that are necessary to respond effectively to client needs,
                                    as quickly as possible 
                                </p>
                            </div>
                        </div>
                        
                        <div class="col-xs-12">
                            <span class=" col-md-2 col-xs-1 about-icon fa fa-handshake-o"  style="font-size:40px; color:rgb(238, 54, 22);"></span>
                            <div class="col-xs-11 col-md-10">
                                <h5 class="caption">Awesome Support</h5>
                                <p class="detail">
                                    Each client has a dedicated service technician to create a personable relationship.
                                </p> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
            <?php
                echo footer();
            ?>
        </div>
            
        <script src="jquery-3.3.1.min.js"></script>
        <script src="bootstrap-3.3.7/dist/js/bootstrap.min.js"></script>
        <script src="wow.js"></script>
		<script src="wow.min.js"></script>
        <script src="bootbox.min.js"></script>
        <script src="jquery-validation-1.17.0/dist/jquery.validate.min.js"></script>
        <script>
            $(document).ready(function(){
                var fibre = '<div class="test intro-div">' +
                                '<h1 class="intro intro-main">OUR GOAL</h1>' +
                                '<h4 class="intro intro2" >' +
                                    'To offer innovative, world class, independent Telecommunication and Information Technology <br />'+
                                    'solutions through consulting coupled with integrated services to enable <br />'+
                                    'our clients fulfill their business needs.'+
                                    ' <p class="intro">'+
                                        '<a  href="signup.php">'+
                                            '<button type="button" class="btn btn-primary btn-lg" style="text-align:center;" id="service-button" name="signup">Sign Up</button>'+
                                        '</a>'+
                                    '</p>'+
                                '</h4>'+
                                
                                '<h4 class="intro intro2 small-device" >' +
                                    'To offer innovative, world class, independent Telecommunication and Information Technology to our clients'+
                                    ' <p class="intro">'+
                                        '<a  href="signup.php">'+
                                            '<button type="button" class="btn btn-primary btn-lg" style="text-align:center;" id="service-button" name="signup">Sign Up</button>'+
                                        '</a>'+
                                    '</p>'+
                                '</h4>'+
                                
                            '</div>';

                $(window).scroll(function(){
                   $(".navbar-brand").css("height", "75px");
                    var scroll = $(window).scrollTop();
                    if(scroll <= 10){
                        $(".navbar-brand").css("height", "100px");
                    }
                });
                $("#home").scrollspy({target: ".navbar", offset: 50});
                $(".bg").delay("5000").fadeOut("slow" , function(){
                    $(this).replaceWith(fibre);
                });

                $("form[name='contactform']").validate({
                    rules: {
                        name: "required",
                        email: {
                            required: true,
                            email: true
                        }
                    },
                    messages: {
                        name: "Please enter your Name",
                        email: {
                            required: "Please enter your email address",
                            email: "Please enter a valid email address"
                        }
                    },
                    submitHandler: function(form) {
                       //console.log($("#contactform").attr("action"));
                       
                    //    var test = $("#contactform").serialize();
                    //    console.log(test)                    ;
                    
                        $.ajax({
                            type: 'POST',
                            url: $("#contactform").attr("action"),
                            data: $("#contactform").serialize(),
                            success: function (response) {
                                if(response.status == 1)
                                {
                                    bootbox.alert(response.message);
                                    
                                }else{
                                    bootbox.alert(response.message);
                                }
                            }
                            
                        });
                    }
                });

               
            });
        </script>
        <script>
              new WOW().init();
        </script>	
    </body>

</html>


