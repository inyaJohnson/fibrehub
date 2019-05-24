<?php

//INPUT FUNCTION
function input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return ($data);
}

function footer(){
    ?>
        <div class="row" id="contact">
            <div class="col-xs-12 footer">
                <h2  class="sub-header" > GET IN TOUCH</h2>
                
                <div class="col-xs-12 col-md-1 col-md-offset-1 contact">
                    <div class="col-xs-12">
                    </div>
                </div>

                <form id="contactform" name="contactform" action="customerfeedback.php"  class="form col-xs-12 col-md-7 form-horizontal " role="form"> 
                    <div class="form-style col-xs-12 col-md-6">
                        <input type="text" class="form-control" placeholder="Your Name*" id="name" name="name" required/>
                    </div>
                    <div class=" form-style col-xs-12 col-md-6">
                        <input type="email" class="form-control " placeholder="Your Email*" id="email" name="email" required />   
                    </div>
                    <div class=" form-style col-xs-12">
                        <input type="text" class="form-control " placeholder="Subject*" id="subject" name="subject" required/>
                    </div>
                    <div class=" form-style col-xs-12">
                            <textarea type="text" class="form-control " placeholder="Your Message*"  id="message" name="message" rows="5" required></textarea>
                    </div>
                    <div class=" form-style col-xs-5 col-xs-offset-7 col-md-3 col-md-offset-9">
                        <input type="submit" name="submit" id="submit" class="btn btn-success btn-block" value="Send" />
                    </div>
                    
                </form>
                
            
                <div class="col-xs-12 col-md-3 contact">
                    <div class="col-xs-12">
                        <!--Contact info-->
                        <span class="glyphicon glyphicon-map-marker"></span>Lagos<br />
                        Tel: +234 8090 506 310<br />

                        #68/72 Allen Avenue<br />
                        Lagos, Nigeria.<br />
                        fibrehub.com<br />
                    </div>
                    <div class="col-xs-12">
                        <a href="#"><span class="fa fa-facebook-square comm-links"></span></a>
                        <a href="#"><span class="fa fa-linkedin-square comm-links"></span></a>
                        <a href="https://twitter.com/fibrehubng"><span class="fa fa-twitter-square comm-links"></span> </a> 
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
}

?>