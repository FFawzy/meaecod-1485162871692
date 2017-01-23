            <!-- Right side column. Contains the navbar and content of the page -->
            <!-- DataTables CSS -->

            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                       Home Page Content
                        <small>Content Management panel for <a href="www.sooma.ae">Sooma Real Estate</a> Website</small>
                    </h1>
                    
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
               
                        <!-- left column -->
                        <div class="col-md-6" style="width:100%;">
                            <!-- general form elements -->
                            <div class="box box-primary" style="overflow-x:scroll; ">
                                <div class="box-header">
                                    <h3 class="box-title">Home Page Content</h3>
                                </div><!-- /.box-header -->
                                <div class="col-lg-12">
                                    <table id="table"  class="table table-striped table-bordered table-hover" >
                                    <thead>
                                        <tr>
                                            <th>Actions</th>
                                            <?php
                                                foreach($headers as $header){
                                                    echo '<th>'.$header.'</th>';
                                                }
                                            ?>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php
                                        $EditCounter = 0;
                                        $index = 0;
                                        ?>


                                        
                                        <?php

                                            $link= base_url()."index.php/".$controller."/";
                                            foreach($Data as $data){
                                                echo '<tr id="'.$EditCounter.'"> ';

                                                #$edit = '<button type="button" class="btn btn-default btn-circle" style="margin-right:3px;"  name="'.$data->id.'e"><a href="'.$link.'edit/'.$data->id.'"><i class="fa fa-edit"></i></a></button>';
                                                $edit = '<button type="button" class="btn btn-default btn-circle"  name="'.$EditCounter.'"  onclick="myFunction('.$EditCounter.')"  data-toggle="modal" data-target="#modal_add" data-whatever="@getbootstrap"><i style="color:#3c8dbc;"class="fa fa-pencil"></i></button>';
                                                $EditCounter++;
                                                ?>

                                        <?php
                                                $delete = '<button type="button" class="btn btn-default btn-circle"  name="'.$data->id.'d"><a href="'.$link.'delete/'.$data->id.'"><i class="fa fa-trash-o"></i></a></button>';

                                                echo '<td>'.$delete.' '.$edit.'</td>';

                                                $vararray = get_object_vars($data);
                                                foreach($vararray as $key=>$value){
                                                    if($key == 'password')echo '<td>****</td>';
                                                    else if($key != 'id'){
                                                        #if($key == 'data')
                                                            #echo '<td> <input type="text" name="data" value="'.$value.'"> </td>';
                                                        #else

                                                       echo '<td>'.$value.'</td>';

                                                    }
                                                }
                                                echo '</tr>';
                                            }
                                        $linkUpdate = base_url().'index.php/Data/update';
                                        ?>                                           
                                    </tbody>
                                </table>
                            </div>

                                <!--Edit Data-->
                                <div class="modal fade" id="modal_add" tabindex="-1" name="1" role="dialog" aria-labelledby="modal_add">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h3 class="modal-title" id="modal_add"><i style="color:#3c8dbc;padding-right:5px"class="fa fa-pencil"></i>Home Page Content Edit</h3>
                                            </div>
                                            <div class="modal-body">

                                                <form id="addform" method="post" action = "<?php echo($linkUpdate); ?>" >
                                                    <div class="form-group">
                                                        <label for="name" class="control-label"> Editable Content </label>
                                                        <textarea type="text" class="form-control" style="height:200px" id="data" name="data">
                                                        </textarea>
                                                        <input  style="visibility: hidden" type="text" class="form-control" id="dataID" name="dataID">
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                                        <button type="submit"  id="submit" name="add" class="btn theme-btn">Save</button>
                                                    </div>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.box -->

                            
                        </div><!--/.col (right) -->
                    </div>   <!-- /.row -->
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
            
          
        <!-- DataTables -->
        <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.js"></script>
            <script type="text/javascript">
             $(document).ready(function() {
                    $('#table').DataTable();
                } );
             function myFunction(BID)
             {
                 <?php #$index = 3; ?>
                 data = [];
                 id=0;
                 $('#' + BID + ' td').each(function() {
                     data[id++]=this.innerText;

                     // var customerId = $(this).find(".customerIDCell").html();
                 });

                 $("#data").val(data[2]);
                 $("#dataID").val(data[1]);


             }
             </script>

