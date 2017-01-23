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
                                <form role="form" method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>index.php/Properties/edit">
                                        
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input class="form-control" id="name" name="name" type="text" value="<?php echo $prop->name?>" placeholder="Name">
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
                                        <input class="form-control" id="bedrooms" name="bedrooms" type="number" value="<?php echo $prop->bedrooms?>" placeholder="0">
                                    </div>
                                    <div class="form-group">
                                        <label>baths</label>
                                        <input class="form-control" id="baths" name="baths" type="number" value="<?php echo $prop->baths?>" placeholder="0">
                                    </div>
                                    <div class="form-group">
                                        <label>Half Baths</label>
                                        <input class="form-control" id="halfbaths" name="halfBaths" type="number" value="<?php echo $prop->halfBaths?>" placeholder="0">
                                    </div>
                                    <div class="form-group">
                                        <label>Area</label>
                                        <input class="form-control" id="area" name="area" type="number" value="<?php echo $prop->area?>" placeholder="0">
                                    </div>
                                    <div class="form-group">
                                        <label>price</label>
                                        <input class="form-control" id="price" name="price" type="number" value="<?php echo $prop->price?>" placeholder="0">
                                    </div>
                                    <div class="form-group">
                                        <label>About</label>
                                        <input class="form-control" id="about" name="about" type="text" value="<?php echo $prop->about?>" placeholder="About">
                                    </div>
                                    <div class="form-group">
                                        <label>Picture</label>
                                        <img src="<?php echo base_url().$prop->link?>">
                                        <input class="form-control" id="file" name="file" type="file" placeholder="Username">
                                    </div>

                                    <div align="right">
                                        <button type="submit" class="btn btn-success">Edit Properties</button>

                                    </div>
                                </form>
                            </div><!-- /.box -->

                            
                        </div><!--/.col (right) -->
                    </div>   <!-- /.row -->
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
