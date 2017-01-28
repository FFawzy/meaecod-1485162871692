<!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Sooma Real Estate
                        <small>Admin Panel</small>
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
                                    <h3 class="box-title">Edit Rental Property</h3>
                                </div><!-- /.box-header -->

                                <!-- form start -->
                                <form role="form" method="POST" action="<?php echo base_url(); ?>index.php/Agents/EditAgent">
                                    <div class="box-body">
                                        

                                        <div class="form-group">
                                            <label >Agent ID</label>
                                            <input  value="<?php echo $agents->agent_id ?>" type="text"  placeholder="ID" class="form-control" id="agent_id" name="agent_id" readonly >
                                        </div>

                                        <div class="form-group">
                                            <label>First Name</label>
                                            <input value="<?php echo $agents->first_name ?>" type="text" class="form-control" id="first_name" name="first_name" placeholder="City" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Last Name</label>
                                            <input value="<?php echo $agents->last_name ?>" type="text" class="form-control" id="last_name" name="last_name" placeholder="country" required>
                                        </div>

                                        
                                        
                                    </div><!-- /.box-body -->

                                    <div class="box-footer ">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </form>
                            </div><!-- /.box -->

                            
                        </div><!--/.col (right) -->
                    </div>   <!-- /.row -->
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
