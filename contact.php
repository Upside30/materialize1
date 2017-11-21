<?php	
session_start();	
require 'dbconnect.php';
if(isset($_POST['btn-submit']))
{
    $conn    = Connect();
    $name    = $conn->real_escape_string($_POST['contact_name']);
    $email   = $conn->real_escape_string($_POST['contact_email']);
    $subject   = $conn->real_escape_string($_POST['contact_subject']);
    $message = $conn->real_escape_string($_POST['contact_message']);
    $query   = "INSERT into Contact (Name,Email,Subject,Message) VALUES('" . $name . "','" . $email . "','" .$subject . "','" . $message . "')";
    $success = $conn->query($query);
    
    if (!$success) {
    die("Couldn't enter data: ".$conn->error);
 
}
}

?>

<!DOCTYPE html>
<html style="background-image: url()">

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <!-- My StyleSheet-->
    <link type="text/css" rel="stylesheet" href="css/stylesheet.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css?family=Architects+Daughter" rel="stylesheet">
    </head>

<body>
    <div class="navbar-fixed">
        <nav class="cyan">
            <div class="container nav-wrapper"> <a href="home.html" class="brand-logo black-text">Lakes</a> <a href="#" data-activates="mobile-demo" class="button-collapse "><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down black-text black-text">
                    <li><a class="black-text" href="photo1.html">| Photo Gallery |</a></li>
                    <li><a class="black-text" href="map.html">| Interactive Map |</a></li>
                    <li><a class="black-text" href="contact.php">| Contact me? |</a></li>
                </ul>
                <ul class="side-nav" id="mobile-demo">
                    <li><a class="black-text" href="photo1.html">Photo Gallery</a></li>
                    <li><a class="black-text" href="map.html">Interactive Map</a></li>
                    <li><a class="black-text" href="contact.php">Contact me?</a></li>
                </ul>
            </div>
        </nav>
    </div> <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
    
    
    
    
    
    <div class="container card-content">                    
            <div class="section">
                <p class="caption">Have a question? Don't hesitate to send us a message. I will be happy to help.</p>
                    <div class="row">
                   
                      <div class="col s12 m6">
                        <form class="contact-form">
                          <div class="row">
                            <div class="input-field col s12">
                              <input id="contact_name" name="contact_name" type="text">
                              <label for="first_name">Name</label>
                            </div>
                          </div>
                          <div class="row">
                            <div class="input-field col s12">
                              <input id="contact_email" name="contact_email" type="email">
                              <label for="email" class="">Email</label>
                            </div>
                          </div>
                          <div class="row">
                            <div class="input-field col s12">
                              <input id="contact_subject" name="contact_subject" type="text">
                              <label for="website">Subject</label>
                            </div>
                          </div>
                          <div class="row">
                            <div class="input-field col s12">
                              <textarea id="contact_message" name="contact_message" class="materialize-textarea"></textarea>
                              <label for="message">Message</label>
                            </div>
                            <div class="row">
                              <div class="input-field col s12">
                                <button class="btn cyan waves-effect waves-light right" type="submit" name="btn-submit" id="submitbutton")>Send
                                  <i class="mdi-content-send right"></i>
              
                                </button>
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>                      
                      <div class="col s12 m6">
                        <ul class="collapsible collapsible-accordion" data-collapsible="accordion">
                          <li class="active">
                            <div class="collapsible-header active"><i class="material-icons">question_answer</i> FAQ</div>
                            <div class="collapsible-body" style="display: block;">
                                <p class="Question flow-text">Question 1 : What was the camera used in the taking of the photos? </p>
                                <p class="Answer flow-text">Answer = A shiny one</p> 
                                <p class="Question flow-text">Question 2 : What was the camera used in the taking of the photos? </p>
                                <p class="Answer flow-text">Answer = A shiny one</p> 
                            </div>
                          </li>
                             <li >
                            <div class="collapsible-header"><i class="material-icons">account_circle</i> About Me?</div>
                            <div class="collapsible-body" style="display: none;">
                              <p class="flow-text" >I am a level 5 HND student currently studying computing science at Stafford University.</p>
                            </div>
                          </li>
                          <li >
                            <div class="collapsible-header"><i class="material-icons">help</i> Need Help?</div>
                            <div class="collapsible-body" style="display: none;">
                              <p class="flow-text" >I welcome your inquiries at the email address <a href="mailto:naturelakes123@gmail.com">naturelakes123@gmail.com</a>. I will get in touch with you soon.</p>
                                <p class="flow-text">Or feel free to get into contact via one of the social media links below!</p>
                            </div>
                          </li>
                           
                        </ul>
                      </div>
                
                    </div>
                  </div>
<div class="row">
    <div class="col s12 m6 l3 center-align">
        <a class="btn-floating btn-large waves-effect waves-light" href="https://www.facebook.com/ethan.williams.35574"><img src="assets/facebook.png" class="circle responsive-img">Facebook</a>
        <p>Facebook</p>
    </div>
    <div class="col s12 m6 l3 center-align">
        <a class="btn-floating btn-large waves-effect waves-light" href="https://twitter.com/WilliamsEthan30"><img src="assets/twitter.png" class="circle responsive-img">Twitter</a>
         <p>Twitter</p>
    </div>
    <div class="col s12 m6 l3 center-align">
        <a class="btn-floating btn-large waves-effect waves-light" href="https://www.linkedin.com/in/ethanwilliams30/"><img src="assets/linkedin.png" class="circle responsive-img">LinkedIn</a>
         <p>LinkedIn</p>
    </div>
    <div class="col s12 m6 l3 center-align">
        <a class="btn-floating btn-large waves-effect waves-light" href="https://www.instagram.com/?hl=en"><img src="assets/instagram.png" class="circle responsive-img">Instagram</a>
         <p>Instagram</p>
    </div>
</div>     
</div>
    
    
    <!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.materialboxed').materialbox();
            $('.button-collapse').sideNav({
                draggable: true
            , });
        });
        
    </script>
</body>

</html>