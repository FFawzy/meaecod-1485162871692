            <!-- Right side column. Contains the navbar and content of the page -->
            
            <?php echo validation_errors(); ?>
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Properties Content
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
                                    <h3 class="box-title">Add New Property</h3>
                                </div><!-- /.box-header -->

                                <!-- form start -->
                                <div class="box-body">
                                <form role="form" method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>index.php/Properties/add">
                                        
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input class="form-control" id="name" name="name" type="text" placeholder="Name">
                                        </div>
                                        <div class="form-group">
                                            <label>Active</label>
                                            <select name="active">
                                                <option value="Active">Active</option>
                                                <option value="Not Active">Not Active</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Bedrooms</label>
                                            <input class="form-control" id="bedrooms" name="bedrooms" type="number" placeholder="0">
                                        </div>
                                        <div class="form-group">
                                            <label>baths</label>
                                            <input class="form-control" id="baths" name="baths" type="number" placeholder="0">
                                        </div>
                                        <div class="form-group">
                                            <label>Half Baths</label>
                                            <input class="form-control" id="halfbaths" name="halfBaths" type="number" placeholder="0">
                                        </div>
                                        <div class="form-group">
                                            <label>Area</label>
                                            <input class="form-control" id="area" name="area" type="number" placeholder="0">
                                        </div>
                                        <div class="form-group">
                                            <label>price</label>
                                            <input class="form-control" id="price" name="price" type="number" placeholder="0">
                                        </div>
                                        <div class="form-group">
                                            <label>About</label>
                                            <input class="form-control" id="about" name="about" type="text" placeholder="About">
                                        </div>
                                        <div class="form-group">
                                            <label>Picture</label>
                                            <input class="form-control" id="file" name="file" type="file" placeholder="Username">
                                        </div>

                                        <div align="right">
                                            <button type="submit" class="btn btn-success">Add Properties</button>
                                            
                                        </div>
                                    </form>
                                </div>
                            
                            </div><!-- /.box -->

                            
                        </div><!--/.col (right) -->
                    </div>   <!-- /.row -->
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
