
<?php echo validation_errors(); ?>
<?php echo $this->session->flashdata('error'); ?>

<!DOCTYPE html>
<html class="locksrceen">
    <head>
        <meta charset="UTF-8">
        <title>AdminPanel | Log in</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="<?php echo base_url(); ?>Assets/MeedarAdmin/css/AdminLTE.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <style>
            
            html { 
              background: url(http://www.worldpropertyjournal.com/news-assets/Abu-Dhabi-skyline-united-arab-emirates.jpg) no-repeat center center fixed; 
              -webkit-background-size: cover;
              -moz-background-size: cover;
              -o-background-size: cover;
              background-size: cover;
            }

            body {
              background-color: rgba(0,0,0,0.5);
              width: 100%;
              height:100%;
              position: absolute;

            }

        </style>
    </head>
    <body>

        <div class="center">
            

        <div class="form-box" id="login-box">
            <div class="header" style="background: #136CAD;">Sign In</div>
            <form method="post" action="<?php echo base_url().'index.php/Login/login';?>">
                <div class="body bg-gray">
                    <img src="<?php echo base_url(); ?>Assets/assets/Logo1W.png" style="width:60%; margin-left:19%;" alt="">
                    <div class="form-group">
                        <input type="text" name="username" class="form-control" placeholder="User ID"/>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Password"/>
                    </div>
                    
                </div>
                <div class="footer">
                    <button type="submit" style="background: #136CAD; color:white;"class="btn btn-block">Sign me in</button>

                    
                </div>
            </form>

        
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js" type="text/javascript"></script>

    </body>
</html>
