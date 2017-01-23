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

                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="box box-success" >
                                <div class="box-header">
                                    <h3 class="box-title">Pick a Template</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body" id="img-box">
                                    <img src="<?php echo base_url(); ?>Assets/MeedarAdmin/Sample.PNG" alt="" style="width:200px;margin:15px;"/>
                                    <img src="<?php echo base_url(); ?>Assets/MeedarAdmin/Sample.PNG" alt="" style="width:200px;margin:15px;"/>
                                    <img src="<?php echo base_url(); ?>Assets/MeedarAdmin/Sample.PNG" alt="" style="width:200px;margin:15px;"/>
                                    <img src="<?php echo base_url(); ?>Assets/MeedarAdmin/Sample.PNG" alt="" style="width:200px;margin:15px;"/>
                                </div>
                                <div class="box-footer text-right ">
                                        <button type="submit" onclick="ShowCode();" class="btn btn-success">Pick this Template</button>
                                </div>
                            </div><!-- /.box -->

                            
                        </div><!--/.col (right) -->


                        
                        <!-- left column -->
                        <div class="col-md-6">

                        <!-- general form elements -->
                            <div class="box box-primary " >
                                <div class="box-header" >
                                    <h3 class="box-title">HTML5 Code</h3>

                                </div><!-- /.box-header -->

                                <div class="box-body">
                                    <form action="" method="">
                                        <div class="form-group">
                                            <label >Newsletter Name</label>
                                            <input type="text"  placeholder="Newsletter Name" class="form-control" id="news_name" name="news_name" required >
                                        </div>

                                        <div class="form-group">
                                            <label >Newsletter Subject</label>
                                            <input type="text"  placeholder="Newsletter Subject" class="form-control" id="news_sub" name="news_sub" required >
                                        </div>
                                    </form>
                                
                            <h5 style="padding-left:10px;">Write your Code here:</h5>
                                <div   style="overflow: hidden;position: relative; padding-top:350px;">

                                    <pre id="editor" STYLE="margin: 0;position: absolute;top: 0;bottom: 0;left: 0;right: 0;"><br/>
    Hello World ..





</pre>

                                    <script>
                                        var editor = ace.edit("editor");
                                        editor.setTheme("ace/theme/chrome");
                                        editor.getSession().setTabSize(2);
                                        editor.getSession().setMode("ace/mode/html");
                                        function ShowCode(){
                                            document.getElementById("myoutput").innerHTML = editor.getValue();
                                         
                                        }
                                    </script>
                                    </div>
                                </div>
margin-top:-350px; transform:scale(0.70);
                                <div class="box-footer text-right ">
                                        <button type="submit" onclick="ShowCode();" class="btn btn-success">Live View</button>
                                </div>

                            </div><!-- /.box -->

                            
                            
                        </div><!--/.col (right) -->


                        <div class="col-md-6">
                            <!-- general form elements -->
                            <div class="box box-success" >
                                <div class="box-header">
                                    <h3 class="box-title">Live Demo</h3>
                                </div><!-- /.box-header -->
                                <div id="myoutput" contenteditable="true" style="">
                                    </div>
                            </div><!-- /.box -->

                            
                        </div><!--/.col (right) -->


                    </div>   <!-- /.row -->
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
