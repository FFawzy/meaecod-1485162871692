            <!-- Right side column. Contains the navbar and content of the page -->


       

            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Dashboard
                        
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Dashboard</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">


                <div class="col-lg-12" >
                    <div class="row" >
                        <div class="col-lg-6 col-md-12" >
                            <div class="panel " style=" background-color:#09384C;">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i style="color:white;"class="fa fa-users fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div style="color:white;font-size: 60px;font-family: sans-serif;margin-top: -4%;"><?php echo $users?></div>
                                            <div style="font-family: sans-serif; font-size: x-large; margin-top: -4%;"><a href="#"style="decorations:none; color:white;" >Users</a></div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="panel " style=" background-color:#09384C;">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i style="color:white;" class="fa  fa-building-o fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div style="color:white;font-size: 60px;font-family: sans-serif;margin-top: -4%;"><?php echo $contact?></div>
                                            <div style="font-family: sans-serif; font-size: x-large; margin-top: -4%;"><a href="#" style="decorations:none; color:white;">New Requests</a></div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                        <div class="col-lg-12 col-md-12">
                            
                                        <iframe id="frame" src="<?php echo base_url();?>" style="width:100%;height:700px; border:0px white solid;" >
                                        </iframe>
                                       
                                  

                    </div><!-- /.row (main row) -->

                </div>

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        
