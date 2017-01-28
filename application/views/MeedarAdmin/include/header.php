<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sooma Admin Panel</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        
        
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="//code.ionicframework.com/ionicons/1.5.2/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Morris chart -->
        <link href="<?php echo base_url(); ?>Assets/MeedarAdmin/css/morris/morris.css" rel="stylesheet" type="text/css" />
        <!-- jvectormap -->
        <link href="<?php echo base_url(); ?>Assets/MeedarAdmin/css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <!-- Date Picker -->
        <link href="<?php echo base_url(); ?>Assets/MeedarAdmin/css/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
        <!-- Daterange picker -->
        <link href="<?php echo base_url(); ?>Assets/MeedarAdmin/css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="<?php echo base_url(); ?>Assets/MeedarAdmin/css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="<?php echo base_url(); ?>Assets/MeedarAdmin/css/AdminLTE.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>Assets/MeedarAdmin/css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
        
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>Assets/MeedarAdmin/datatables/css/jquery.dataTables.css">
        <script type="text/javascript" charset="utf8" src="//code.jquery.com/jquery-1.10.2.min.js"></script>

        <script src="<?php echo base_url(); ?>Assets/MeedarAdmin/src-noconflict/ace.js" type="text/javascript" charset="utf-8"></script>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
        <script type="text/javascript">
        function cs(){
            alert('Coming soon!');
        }
        </script>

       <Style>

       #img-box img{
        border-radius: 9px;
       }

       #img-box img:hover{

        border: 1px solid #00a65a;
        border-radius: 9px;

       }



       </style>
    </head>
    <body class="skin-blue">

        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="<?php echo base_url(); ?>index.php" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                MEA ECOD
            </a>
            <!-- Header Navbar: style can be found in header.less -->


            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>

                                <!--  Echo the user name from the database -->
                                <span><?php
                           $e= $this->session->userdata('user_data');
                             echo($e['username']);?><i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                   
                                    <p>
                                        <?php
                           $e= $this->session->userdata('user_data');
                             echo($e['username']);?> - Sales
                                        
                                    </p>
                                </li>
                                <!-- Menu Body -->
                               
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat"></a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="<?php echo base_url().'index.php/Login/logout'?>" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

<div class="wrapper row-offcanvas row-offcanvas-left">