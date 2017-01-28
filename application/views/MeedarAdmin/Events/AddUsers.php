            <!-- Right side column. Contains the navbar and content of the page -->
            <script src="//cdn.ckeditor.com/4.6.2/full/ckeditor.js"></script>
            <?php echo validation_errors(); ?>
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Administrators
                        
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
                                    <h3 class="box-title">Add New Events</h3>
                                </div><!-- /.box-header -->

                                <div class="box-body">
                                <!-- form start -->
                                <form role="form" method="post" action="<?php echo base_url(); ?>Events/add" enctype="multipart/form-data">
                                        
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input class="form-control" id="name" name="name" type="text" placeholder="name of event">
                                        </div>
                                        <div class="form-group">
                                            <label>Description</label>
                                           
                                            <textarea class="form-control"  id="description" name="description"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>image</label>
                                            <input class="form-control" id="image" name="image" type="file" placeholder="Confirm Password">
                                        </div>
                                         <div class="form-group">
                                            <label>Location</label>
                                            <input class="form-control" id="location" name="location" type="text" placeholder="Address of the Venue">
                                        </div>
                                         <div class="form-group">
                                            <label>Date</label>
                                            <input class="form-control" id="date" name="date" type="date" >
                                        </div>
                                         <div class="form-group">
                                            <label>Time</label>
                                            <input class="form-control" id="time" name="time" type="time" >
                                        </div>
                                         <div class="form-group">
                                            <label>Country</label>
                                            <select class="form-control" id="country" name="country" >
                                            <option value="UAE">UAE</option>
                                            <option value="EG">EGYPT</option>
                                            <option value="SA"> SAUDI ARABIA</option>
                                            <option value="SAF"> South Africa</option>
                                            <option value="TK"> Turkey</option>
                                            </select>

                                        </div>

                                        

                                       
                                        
                                    


                                        <div align="right">
                                            <button type="submit" class="btn btn-success">Add Event</button>
                                            
                                        </div>
                                    </form>
                                </div>
                            
                            </div><!-- /.box -->

                            
                        </div><!--/.col (right) -->
                    </div>   <!-- /.row -->
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
             <script>
            CKEDITOR.replace( 'description' );
        </script>
