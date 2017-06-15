<?php
 include('user_session.php');
?>
<!DOCTYPE HTML>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Home | Alumni Association 2016</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    
    <script src="https://use.fontawesome.com/7de8fbdfda.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <style>
        ul.nav-tabs li a {
            border-bottom-color: #FECC0A;
            border-top: 0px transparent;
            border-left: 0px;
            border-bottom: 0px;
            border-right: 0px;
        }
        
        ul.nav-tabs li a:hover {
            background-color: transparent;
            border: 1px #FECC0A;
        }
        
        p, h1, h2, h3, h4, h5, h6 {
            color: #1E344C;
        }
        
        /* BEGIN PROPREITARY STYLES*/
        html, body {
    font-family: 'Lato', sans-serif;
}

h1, h2, h4, h5, h6 {
    font-family: 'Lato' !important;
    font-weight: 800; 
     }

body {
    padding: 0px 0px 0px 0px !important;
    margin: 0px 0px 0px 0px !important;
}



.navbar-default {
    background-color: #FFF;
    border-color: #FFF;
}

@media (max-width: 425px) {
    .navbar-default {
         background-color: #fff !important;
    }
    .change {
        color: #000 !important;
    }
} 

.navbar {
    border-radius: 0px;
    margin-bottom: 0px;
    border: 1px solid transparent;
    
    -webkit-box-shadow: 0 0px 2px 0px #999;
    -moz-box-shadow: 0 0px 2px 0px #999;
    box-shadow: 0 0px 2px 0px #999;
    
    margin: 0px 0px 0px 0px;
}

.navbar-default .navbar-header .navbar-brand {
    color: #FECC0A !important;
    text-transform: uppercase;
    font-weight: 300;
}

.navbar-default .navbar-nav>li>a {
    color: #1E344C;
    text-transform: uppercase;
    font-weight: 300;
    font-size: 16px;
}

.navbar-default .navbar-nav>li>a:hover {
    color: #1E344C !important;
}

.navbar-default .navbar-nav>li>a:active {
    color: #1E344C !important;
}

.navbar-default .navbar-nav>li>a.here {
    color: #FECC0A !important;
}


span.icon-bar {
    background: #FECC0A !important;
}

.rounded {
    border-radius: 10px;
}

p {
    font-size: 16px !important;
}


/*FOR INDEX PAGE*/

.header {
    height: 580px;
    background: 
    /* top, transparent red, faked with gradient */ 
    linear-gradient(
      rgba(0, 0, 0, 0.25), 
      rgba(0, 0, 0, 0.25)
    ),
    url(../img/school.png);
    background-size: cover;
    background-repeat: no-repeat;
}

.welcome_note {
    position: relative;
    top: 250px;
    left: 12.5%;
    min-height: auto;
}

@media (max-width: 425px) {
    .welcome_note {
        position: relative;
        top: 200px;
        left: auto;
    }
    .welcome_note button {
        padding: 4px 12px;
        font-size: 16px;
    }
}

@media (max-width: 768px) {
    .welcome_note {
        left: auto;
    }
}


.welcome_note h3 {
    color: #fff;
    text-transform: uppercase;
    letter-spacing: 4px;
    display: inline-block;
    line-height: 1.25;
}

.welcome_note button {
    background-color: #FECC0A !important;
    height: 45px;
    min-width: 150px;
    text-transform: uppercase;
    margin: 10px 10px 10px 0px;
    border-radius: 0px;
    font-weight: 500;
    border-color: #FECC0A !important;
}

.welcome_note button:hover {
    background-color: transparent;
}

.welcome_note button:active {
    background: transparent;
}

.welcome_note button a {
    color: rgb(30, 52, 76);
    text-decoration: none;
    font-weight: 700;
}


.talk3 .row button {
    background-color: #FECC0A !important;
    height: 45px;
    min-width: 150px;
    text-transform: uppercase;
    margin: 10px 10px 10px 0px;
    border-radius: 0px;
    font-weight: 500;
    border-color: #FECC0A !important;
}

.talk3 .row button:hover {
    background-color: transparent;
}

.talk3 .row button:active {
    background: transparent;
}

.talk3 .row button a {
    color: rgb(30, 52, 76);
    text-decoration: none;
    font-weight: 700;
}




.showcase .row {
    padding: 25px 25px 25px 25px;
    text-align: justify; 
}

.talk0 .row {    
    padding: 25px 25px 25px 25px;
    text-align: justify; 
}

.talk1 .row {
    padding: 25px 25px 25px 25px;
    text-align: justify;  
}

.talk2 .row {
    padding: 25px 25px 25px 25px;
    text-align: justify; 
}

.talk3 .row {
    text-align: center; 
}




.talk0 .row p {    
    margin-bottom: 20px;
}

.talk1 .row p {
    margin-bottom: 20px;
}

.talk2 .row p {
    margin-bottom: 20px;
}

.talk3 .row p {
    margin-bottom: 20px;
}


/*Index page footer area*/
.footer .row {
    padding: 40px 0px 40px 0px;
}

/*END INDEX PAGE*/


/*iOS SCROLLBAR*/
/* Let's get this party started */
::-webkit-scrollbar {
    width: 5px;
}
 
/* Track */
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.25); 
    -webkit-border-radius: 10px;
    border-radius: 10px;
}
 
/* Handle */
::-webkit-scrollbar-thumb {
    -webkit-border-radius: 10px;
    border-radius: 10px;
    background: #1E344C; 
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.5); 
}
::-webkit-scrollbar-thumb:window-inactive {
	background: #1E344C; 
}


.text {
    color: #1E344C;
}


/*ABOUT US PAGE*/
.jumbotron {
    height: 425px;
    background: linear-gradient(
      rgba(0, 0, 0, 0.25), 
      rgba(0, 0, 0, 0.25)
    ),
    url(../img/Membership_Quote2-2.jpg);
    background-size: cover;
    background-repeat: no-repeat;
}

.top_bar1 h1 {
    text-transform: uppercase;
    font-weight: 700;
    color: #fff;
    line-height: 50px;
    
}

.top_bar1 p {
    color: #e5e5e5;
}

.copy hr {
    border: 2px solid #FECC0A;
    width: 75px;
}

hr.short {
    border: 2px solid #FECC0A !important;
    width: 50px;
    display: inline-block!important;
    margin-top: 5px;
}

.top_bar1 .copy {
    position: relative;
    top: 100px;
    text-align: center;
}

.team img {
    width: 300px;
    height: 300px;
}




/*PEOPLE PAGE*/
.p2 {
    height: 425px;
    background: linear-gradient(
      rgba(0, 0, 0, 0.25), 
      rgba(0, 0, 0, 0.25)
    ),
    url(../img/Minority-Student-Hero-1.jpg);
    background-size: cover;
    background-repeat: no-repeat;
}






/*EVENTS PAGE*/
.p3 {
    height: 425px;
    background: linear-gradient(
      rgba(0, 0, 0, 0.25), 
      rgba(0, 0, 0, 0.25)
    ),
    url(../img/Volunteer-Landing-Page-Hero.jpg);
    background-size: cover;
    background-repeat: no-repeat;
}

/*JOIN PAGE*/
.p4 {
    height: 425px;
    background: linear-gradient(
      rgba(0, 0, 0, 0.25), 
      rgba(0, 0, 0, 0.25)
    ),
    url(../img/Student-Recruitment-Hero.jpg);
    background-size: cover;
    background-repeat: no-repeat;
}

/*CONTACT US PAGE*/
.p5 {
    height: 425px;
    background: linear-gradient(
      rgba(0, 0, 0, 0.25), 
      rgba(0, 0, 0, 0.25)
    ),
    url(../img/street.jpg);
    background-size: cover;
    background-repeat: no-repeat;
}

.msg {
    height: 150px;
    display: block;
    width: 100%;
    resize: none;
}








        
        /* END PROPREITARY STYLES*/
        
        
    </style>
    
    
  </head>
  
  
  <body>
    
        <nav class="navbar navbar-default navbar-fixed-top">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"                             aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand change" href="index.html">PBGS Ewohimi</i> </a>
            </div>
            

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                    <li><a class="change" href="index.html">Home</a></li>
                    <!-- <li><a class="change" href="about.html">About</a></li>
                    <li><a class="change" href="people.html">People</a></li>
                    <li><a class="change" href="#">Events</a></li>
                    <li><a class="change" href="join.php">Join</a></li>
                    <li><a class="change" href="contactus.php">Contact Us</a></li> -->
              </ul> 

                  <div id="welcome">
                   <b id="welcome">Welcome : <i><?php echo $row['username']; ?></i></b><br/>
                    <b id="logout"><a href="logout.php">Log Out</a></b>
                  </div>

            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav> 
    
    
     <div class="log_content">
         <div class="container" style="margin-top: 85px; margin-bottom: 35px;">
             <div class="row">
                
                 <div class="col-xs-12 col-sm-4 col-md-3">
                     <div class="longCard">
                         <img src="img/c.jpg" alt="" height="262.5" width="100%" style="border-radius: 5px;" class="img-responsive">
                         <div class="persona" style="text-align: left">
                             <h2><strong>Emmanuel Yusufu</strong></h2>
                             <span style="font-size: 18px;">Full Stack Web Developer | JavaScript Dev | MEAN | Ionic &amp; Cordova dev<span>
                         </div>
                         <p style="margin-bottom: 10px;"></p>
                         <u><a href="#" style="color: #1E344C">Edit profile</a></u>
                         <hr>
                         <p><i class="fa fa-map-marker"></i> Ikorodu, Nigeria</p>
                         <p><i class="fa fa-envelope-open"></i> <?php echo $email; ?> </p>
                         <p><i class="fa fa-calendar"></i> Graduated ...</p>
                     </div>
                 </div>
                 
                 <div class="col-xs-12 col-sm-8 col-md-9">
                 
                 <p style="margin-bottom: 20px;"></p>
                 
<ul class="nav nav-tabs" id="myTabs">
  <li role="presentation" class="active"><a href="#first" data-toggle="tab">Basic Information</a></li>
  <li role="presentation"><a href="#second" data-toggle="tab">Contact Information</a></li>
  <li role="presentation"><a href="#third" data-toggle="tab">Details</a></li>
</ul>

<div class="tab-content">
  <div id="first" class="tab-pane fade in active">
    <div style="border: 1px solid #ddd; padding: 10px 10px 10px 10px; border-radius: 5px; margin: 10px 0px 10px 0px;">
    <h3>Bio</h3>
    <p>Rapidiously productize resource maximizing methods of empowerment with customized architectures. Proactively negotiate enterprise initiatives for market-driven e-business. Uniquely aggregate process-centric internal or "organic" sources via bleeding-edge architectures. Completely synthesize equity invested infrastructures before intuitive meta-services.</p>
    </div>
    <div style="border: 1px solid #ddd; padding: 10px 10px 10px 10px; border-radius: 5px; margin: 10px 0px 10px 0px;">
    <h3>Work Description</h3>
    <p>Rapidiously productize resource maximizing methods of empowerment with customized architectures. Proactively negotiate enterprise initiatives for market-driven e-business. Uniquely aggregate process-centric internal or "organic" sources via bleeding-edge architectures. Completely synthesize equity invested infrastructures before intuitive meta-services.</p>
    </div>
  </div>
  <div id="second" class="tab-pane fade">
    <h3>Menu 1</h3>
    <p>Some content in menu 1.</p>
  </div>
  <div id="third" class="tab-pane fade">
    <h3>Menu 1</h3>
    <p>Some content in menu 1.</p>
  </div>
</div>


                 </div>
                 
             </div>
         </div>
     </div>    
    
    
     <div class="footer" style="background-color: #1E344C;">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <p style="color: #fff; text-align: center; text-decoration: none;">Copyright &copy; Pilgrim Baptist Grammar School, Ewohimi 2016 | Designed and developed by <a href="https://twitter.com/emmyyusufu">Yusufu Emmanuel </a>and supervised by Dr. A. U. Adoghe</p>
                </div>
            </div>
        </div>
    </div>
    
    
   
    
    
    
    
    
    
    
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="scripts/jquery-3.1.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="css/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <script src="scripts/custom.js"></script>
        
  </body>
</html>
