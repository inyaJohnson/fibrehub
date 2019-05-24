<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8" content="width=device-width" name="viewport" initial-scale=1.0 >
        <title>Fibre Hub</title>
       
        <link rel="stylesheet" type="text/css" href="bootstrap-3.3.7/dist/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css"> 
        <link rel="stylesheet" type="text/css" href="index.css">
        <link rel="stylesheet" type="text/css" href="index2.css">
    </head>

    <body id ="home" class="body">
    <header id="my-header" class="header">
            <div class="navbar navbar-default row" role="banner" style="margin: 0px;">
                <div class="navbar-header responsive-logo col-md-8">
                    <button type="button" class="navbar-toggle col-xs-2 pull-right" data-toggle="collapse" data-target="#nav-menu">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="navbar-brand col-xs-8">
                        <a href="fibrehub.html"><img src="image/fibrehublogo.jpg" alt="FibreHub" class="img-responsive" /></a>
                    </div> 
                </div>
                <nav class="collapse navbar-collapse col-md-4" id="nav-menu" role="navigation" >
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
           
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-offset-0 col-xs-12  col-md-offset-2 col-md-8">
                <form class="form-horizontal " id="signup" name="signup"
                action="action.php" method="POST" role="form">
                    
                    <div class="panel panel-default">
                        <div class="panel heading" style="background-color:rgb(51, 122, 183);">
                            <h3 class="panel-title">CLIENT'S DETAILS</h3>
                        </div>
                        <div class="panel-body">
                            <div class="col-xs-12 col-md-6">
                                <div class="input-group input-index" >
                                    <div class="input-group-addon"><i class="glyphicon glyphicon-user"></i></div>
                                    <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name" />
                                </div>
                            </div>

                            <div class="col-xs-12 col-md-6">
                                    <div class="input-group input-index">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user "></i></span>
                                        <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name" />
                                    </div>
                            </div>

                            <div class="col-xs-12 col-md-6">
                                    <div class="input-group input-index">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="E-mail" />
                                    </div>
                            </div>

                            <div class="col-xs-12 col-md-6">
                                    <div class="input-group input-index">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" />
                                    </div>
                            </div>
                            <div class="col-xs-12 col-md-6">
                                    <div class="input-group input-index">
                                        <span class="input-group-addon"><i class="fa fa-home "></i></span>
                                        <input type="text" class="form-control" id="address" name="address" placeholder="Address" />
                                    </div>
                            </div>

                            
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel heading" style="background-color:rgb(51, 122, 183);"> 
                            <h3 class="panel-title">ADDITIONAL INFO (FOR ORGANISATIONS)</h3>
                        </div>
                        <div class="panel-body">
                            <div class="col-xs-12 col-md-6">
                                <div class="input-group input-index">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input type="text" class="form-control" id="organisationname" name="organisationname" placeholder="Organisation Name" />
                                </div>
                            </div>
        
                            <div class="col-xs-12 col-md-6">
                                <div class="input-group input-index">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input type="text" class="form-control" id="organisationtelephone" name="organisationtelephone" placeholder="Organisation Telephone" />
                                </div>
                            </div>
        
                            <div class="col-xs-12 col-md-6">
                                <div class="input-group input-index">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                    <input type="email" class="form-control" id="organisationemail" name="organisationemail" placeholder="Organisation E-mail" />
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <div class="panel panel-default">
                        <div class="panel heading" style="background-color:rgb(51, 122, 183);"> 
                            <h3 class="panel-title">DECLARATION (BY CUSTOMER)</h3>
                        </div>
                        <div class="panel-body">
                            <div class="col-xs-12">
                                <div class="input-group checkbox input-index ">
                                    <label class="legal-body">
                                        <input type="checkbox" id="declaration" name="declaration" value="YES" required />
                                        This confirms that all the information supplied is accurate and valid. I also Agree to pay Fibre Hub the
                                        agreed cost of installation plus additional cost attached to the installation. I agree that Fibre Hub 
                                        will not be liable for any illegal activities or business which the service offered used is used for.
                                    </label>
                                </div>
                                <div class="input-group col-xs-6 col-md-3 info">
                                    <input type="submit" class="btn btn-success btn-block" id="signup" name="signup" value="Submit">
                                </div>

                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="row">
                <div class="col-xs-12 signup-footer">
                    <div class=" col-xs-12 col-md-7 quick-links">
                        <div class="col-xs-12 col-md-2 signup-contact"><a class="footer-link" href="index.php#about">About Us</a></div>
                        <div class="col-xs-12 col-md-2 signup-contact"><a class="footer-link" href="index.php#service">Services</a></div>
                        <div class="col-xs-12 col-md-3 signup-contact">Tel: +1(267) 527-9488 </div>
                        <div class="col-xs-12 col-md-5 signup-contact">#68/72 Allen Avenue Lagos, Nigeria.</div>
                    </div>
                    <div class="col-xs-offset-0 col-xs-12 col-md-offset-1 col-md-4 ">
                        <div class="col-xs-12">
                            <div class="social-handle">
                                Follow Fibrehub
                                <a  href="#"><span class="fa fa-facebook-square comm-links"></span></a>
                                <a href="#"><span class=" fa fa-linkedin-square comm-links"></span></a>
                                <a href="https://twitter.com/fibrehubng"><span class="fa fa-twitter-square comm-links"></span> </a> 
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-xs-12 rights">
                        &copy;FibreHub - All Rights Reserved
                    </div>
                </div>
                </div>   
            
        </div>
            <?php
               
            ?>
        <script src="jquery-3.3.1.min.js"></script>
        <script src="bootstrap-3.3.7/dist/js/bootstrap.min.js"></script>
        <script src="bootbox.min.js"></script>
        <script src="jquery-validation-1.17.0/dist/jquery.validate.min.js"></script>
        <script>
           $(document).ready(function () {
               $("form[name='signup']").validate({
                    //RULES
                    rules :{
                        //RULES FOR PERSONAL DETAILS
                        firstname: {
                            required : true,
                            minlength: 2
                        },

                        email:{
                            required : true
                        },

                        phone:{
                            required : true
                        },

                        lastname: {
                            required : true,
                            minlength: 2
                        },
                        address: {
                            required : true
                        }
                        // //RULES FOR ORGANISATION DETAILS
                        // organisationname:{
                        //     required : true
                        // },

                        // organisationemail: {
                        //     required : true
                        //  },

                        // organisationtelephone:{
                        //     required : true
                        // }

                    },
                    //ERROR MEASSAGES
                    messages:{
                        //MESSAGES FOR PERSONAL DETAILS
                        firstname: {
                           required : "Please enter your first name",
                          minlength: "Your first name should contain atleast 2 letters"
                        },
                       
                        lastname:{
                             required: "PLease enter your last name",
                            minlength: "Your last name should contain atleast 2 letters"
                        }

                        // //MESSAGES FOR LOGIN DETAILS
                        // organisationname:{
                        //     required: "Please enter your organisation's name"
                        // },


                        // //MESSAGES FOR ADDRESS DETAILS
                        // organisationemail:{
                        //     required: "Please enter your organisation's address"
                        // },

                        // organisationtelephone:{
                        //     required: "Please enter your organisation's telephone"
                        // }
                    },

                    submitHandler: function(form) {
                       //console.log($("#signup").attr("action"));
                        $.ajax({
                            type: 'POST',
                            url: $("#signup").attr("action"),
                            data: $("#signup").serialize(),
                            // console.log($("#signup").serialize());
                            // exit();
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
    </body>
</html>