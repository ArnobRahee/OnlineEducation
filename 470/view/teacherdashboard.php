<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edmin</title>
        <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="css/theme.css" rel="stylesheet">
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
    </head>
    <style>
        
    </style>
    <body>
       
        <!-- /navbar -->
        <div class="wrapper">
        <h1>Welcome 
            <?php session_start(); 
                  echo $_SESSION["name"];
                  ?>
         </h1>
            <div class="container">
                <div class="row">
                    <div class="span3">
                       
                        <!--/.sidebar-->
                    </div>
                    <!--/.span3-->
                    <div class="span12">
                        <div class="content">
                            <div class="btn-controls">
                            <div class="btn-box-row row-fluid">
                                    <div class="span12">
                                        <div class="row-fluid">
                                            <div class="span12">
                                                <a href="?link=1" name="link1" class="btn-box big span4"><i class="icon-envelope"></i><b>Physics</b>
                                                </a><a href="?link=2" name="link2" class="btn-box big span4"><i class="icon-envelope"></i><b>Chemistry</b>
                                                </a><a href="?link=3" name="link3" class="btn-box big span4"><i class="icon-envelope"></i><b>Maths</b>
                                                </a>
                                            </div>
                                <div class="btn-box-row row-fluid">
                                    <div class="span12">
                                        <div class="row-fluid">
                                            <div class="span12">
                                                <a href="?link=4" name="link4" class="btn-box big span4"><i class="icon-envelope"></i><b>Accounting</b>
                                                </a><a href="?link=5" name="link5" class="btn-box big span4"><i class="icon-envelope"></i><b>Biology</b>
                                                </a><a href="?link=6" name="link6"class="btn-box big span4"><i class="icon-envelope"></i><b>English</b>
                                                </a>
                                            </div>
                                        </div>
                                        
                                    </div>
                               
                                </div>
                            </div>
                            <!--/#btn-controls-->
                         
                            <!--/.module-->
                        </div>
                        <!--/.content-->
                    </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.wrapper-->
        <?php
        $link=$_GET['link'];
        if ($link == '1'){
            $_SESSION["subject"]="Physics";
            header("Location:uploadcontent.php");
        }
        if ($link == '2'){
            $_SESSION["subject"]="Chemistry";
            header("Location:uploadcontent.php");
        }
        if ($link == '3'){
            $_SESSION["subject"]="Maths";
            header("Location:uploadcontent.php");
        }
        if ($link == '4'){
            $_SESSION["subject"]="Accounting";
            header("Location:uploadcontent.php");
        }
        if ($link == '5'){
            $_SESSION["subject"]="Biology";
            header("Location:uploadcontent.php");
        }
        if ($link == '6'){
            $_SESSION["subject"]="English";
            header("Location:uploadcontent.php");
        }
            ?>  
        <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="scripts/common.js" type="text/javascript"></script>
      
    </body>
