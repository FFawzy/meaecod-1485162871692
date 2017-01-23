            <!-- Right side column. Contains the navbar and content of the page -->
            <!-- DataTables CSS -->

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
                        <div class="col-md-6" style="width:100%;">
                            <!-- general form elements -->
                            <div class="box box-primary" style="overflow-x:scroll; ">
                                <div class="box-header">
                                    <h3 class="box-title">Logs</h3>
                                </div><!-- /.box-header -->
                                    <table id="example" border="1" style="margin-left:1%; " class="display" cellspacing="0" width="98%">
                                        <thead>
                                            <tr>
                                                <th>Actions</th>
                                                <th>Date</th>
                                                <th>Admin</th>
                                                <th>Current</th>
                                                <th>Original</th>
                                                <th>table</th>
                                            </tr>
                                        </thead>
                                     
                                        <tbody>
                                            <?php
                                                foreach($logs as $log){
                                                    echo '<tr>';
                                                    echo '<td>'.$log->action.'</td>';
                                                    echo '<td>'.$log->date.'</td>';
                                                    echo '<td>'.$log->admin.'</td>';
                                                    echo '<td>'.$log->current.'</td>';
                                                    echo '<td>'.$log->original.'</td>';
                                                    echo '<td>'.$log->table.'</td>';
                                                    echo '</tr>';
                                                }
                                            ?>                                           
                                        </tbody>
                                    </table>
                               
                            </div><!-- /.box -->

                            
                        </div><!--/.col (right) -->
                    </div>   <!-- /.row -->
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
            
          
        <!-- DataTables -->
        <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.js"></script>
            <script type="text/javascript">
             $(document).ready(function() {
                    $('#example').DataTable();
                } );
             </script>