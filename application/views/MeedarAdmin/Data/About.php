            <!-- Right side column. Contains the navbar and content of the page -->
            
            <?php echo validation_errors(); ?>
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
                            <div class="box col-lg-12 box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Add Data</h3>
                                </div><!-- /.box-header -->
                                
                                <!-- form start -->
                                    <form role="form" method="post" action="<?php echo base_url(); ?>index.php/Data/add">
                                            
                                            <div class="form-group">
                                                <label>Section Name</label>
                                                <select class="form-control" onchange="change()" id="sectionName" name="sectionName">
                                                    <option value="who"> Who We Are </option>
                                                    <option value="mission"> Mission </option>
                                                    <option value="vision"> Vision </option>
                                                     <option value="ceo"> CEO Message </option>
                                                   
                                                   
                                                </select>
                                               
                                            </div>
                                           
                                            <div class="form-group">
                                                <label>Data</label>
                                                <textarea class="form-control" id="data" name="data" type="text" placeholder=""></textarea>
                                            </div>
                                        


                                            <div align="right">
                                                <button type="submit" class="btn btn-success">Add Data</button>
                                               
                                                
                                            </div>
                                        </form>
                                 <br>
                            </div><!-- /.box -->

                            
                        </div><!--/.col (right) -->
                    </div>   <!-- /.row -->
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
           