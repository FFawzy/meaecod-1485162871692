            <!-- Right side column. Contains the navbar and content of the page -->
            
            <?php echo validation_errors(); ?>
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Administrators
                        <small>Content Management panel for <a href="www.sooma.ae">Sooma Real Estate</a> Website</small>
                    </h1>
                    
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-6">
                            <!-- general form elements -->
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Add New Administrator</h3>
                                </div><!-- /.box-header -->

                                <div class="box-body">
                                <!-- form start -->
                                <form role="form" method="post" action="<?php echo base_url(); ?>index.php/User/add">
                                        
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input class="form-control" id="username" name="username" type="text" placeholder="Username">
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control" id="password" name="password" type="password" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <label>Confirm Password</label>
                                            <input class="form-control" id="confpassword" name="confpassword" type="password" placeholder="Confirm Password">
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" id="email" name="email" type="Email" placeholder="example@domain.com">
                                        </div>
                                        
                                    


                                        <div align="right">
                                            <button type="submit" class="btn btn-success">Add User</button>
                                            
                                        </div>
                                    </form>
                                </div>
                            
                            </div><!-- /.box -->

                            
                        </div><!--/.col (right) -->
                    </div>   <!-- /.row -->
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
