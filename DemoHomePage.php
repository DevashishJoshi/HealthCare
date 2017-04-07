<?php
  session_start();
  if(isset($_POST['Locality']) && isset($_POST['Specialization'])) {
    $_SESSION['locality1']=$_POST['Locality'];
    $_SESSION['specialization1']=$_POST['Specialization'];
    //echo $locality1 . $specialization1;
    header('Location:searchresult_loggedin.php');
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!--<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
    <style>
      input
      {
        -moz-border-radius: 8px;
        border-radius: 8px;
        border:solid 0.3px black;
        padding:5px;
        background-color: white;
        height:45px
      }
      .letter{
        font-size: 20px;
        font-weight: bold;
        font-family: ariel;
        background-color: black;
      }
      /*.s
      {
        color:blue;
        font-size:0px;
        display:none;
      }*/
      /*.header-content > .header-content-{
        background: black;
      }*/

      .form-control {
        width:450px;
        height:45px;


      }

body{
  background-color: black;
  /*background-image: url(../img/abcd.jpg);*/
}
.dropbtn {
    position: relative;
    top: 0px;
    left: 900px;
    width: 160px;
    height: 40px;
    background-color: #4CAF50;
    color: white;
    padding: 10px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
    background-color: #3e8e41;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: relative;
    top: 0px;
    left: 900px;
    background-color: #f9f9f9;
    min-width: 160px;
    overflow: auto;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown a:hover {background-color: #f1f1f1}

.show {display:block;}

    </style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>DiDoc</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!--<link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
  -->
    <!-- Plugin CSS -->
    <!--
    *********************************************************************************
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">-->

    <!-- Theme CSS -->
    <link href="css/creative.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">DiDoc</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#">My Appointments</a>
                    </li>
                    <li>
                        <a href="patientprofile.php">Profile</a>
                    </li>
                    <li>
                        <a href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>


        <div class="container-fluid">
        <div class="header-content">
            <div class="header-content-inner">
              <div class="row">
              <p>Find doctor near you !</p>
            </div>

              <div class="row">

              <form action="<?php 'index.php'; ?>" method="post">
                <div class="col-sm-4">
                <input type="text" name="Locality" placeholder="Locality..." size="40px" style="color: black;">



              </div>
              <div class="col-sm-4">
                <select name="Specialization" style ="height:45px"  class="form-control">
                  <option value="" disabled selected hidden>Specialization</option>
                  <option value="Dentist">Dentist</option>
                  <option value="Gynecologist/Obstetrician">Gynecologist/Obstetrician</option>
                  <option value="General Physician">General Physician</option>
                  <option value="Dermatologist">Dermatologist</option>
                  <option value="Ear-Nose-Throat (ENT) Specialist">Ear-Nose-Throat (ENT) Specialist</option>
                  <option value="Homeopath">Homeopath</option>
                  <option value="Ayurveda">Ayurveda</option>
                </select>
              </div>
              <div class="col-sm-2">
                <input type="submit" class='letter' size="45px" value="Search">
              </div>
              </form>
            </div>
            </div>
        </div>
      </div>

    </header>

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Let's Get In Touch!</h2>
                    <hr class="primary">
                    <p>Ready to start your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p>
                </div>
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-phone fa-3x sr-contact"></i>
                    <p>123-456-6789</p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-envelope-o fa-3x sr-contact"></i>
                    <p><a href="mailto:your-email@your-domain.com">feedback@startbootstrap.com</a></p>
                </div>
            </div>
        </div>
    </section>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>-->
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/creative.min.js"></script>

</body>

</html>
