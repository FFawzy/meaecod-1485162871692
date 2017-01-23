            <!-- Right side column. Contains the navbar and content of the page -->
            <!-- DataTables CSS -->

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
                         <div class=" text-right"style="margin-bottom:10px;margin-right:5px;">    
                    <a href="<?php echo base_url(); ?>index.php/Properties/add">
                        <button type="button"  style="margin-right:5px;padding: 3px" class="btn btn-outline btn-primary"  style="margin-right:2px;">
                            <div class="col-lg-6">
                                <div class="col-xs-3">
                                    <span  style="margin-left:32px;"> <i class="fa fa-plus fa-2x"></i> </span>
                                    <div>Add Properties </div>
                                </div>
                            </div>
                        </button>
                    </a>
                </div>
                        <!-- left column -->
                        <div class="col-md-6" style="width:100%;">
                            <!-- general form elements -->
                            <div class="box box-primary" style="overflow-x:scroll; ">
                                <div class="box-header">
                                    <h3 class="box-title">Properties</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
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
                                            $link= base_url()."index.php/".$controller."/";
                                            foreach($Data as $data){
                                                echo '<tr>';
                                                $edit = '<button type="button" class="btn btn-default btn-circle" style="margin-right:3px;"  name="'.$data->id.'e"><a href="'.$link.'edit/'.$data->id.'"><i class="fa fa-edit"></i></a></button>';
                                                $delete = '<button type="button" class="btn btn-default btn-circle"  name="'.$data->id.'d"><a href="'.$link.'delete/'.$data->id.'"><i class="fa fa-trash-o"></i></a></button>';
                                                echo '<td>'.$delete.'</td>';
                                                $vararray = get_object_vars($data);
                                                foreach($vararray as $key=>$value){
                                                    if($key == 'password')echo '<td>****</td>';
                                                    else if($key != 'id'){
                                                        echo '<td>'.$value.'</td>';
                                                    }
                                                }
                                                echo '</tr>';
                                            }
                                        ?>                                           
                                    </tbody>
                                </table>
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
             </script>