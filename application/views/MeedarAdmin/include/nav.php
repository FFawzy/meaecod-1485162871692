
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="https://htmlsigs.s3.amazonaws.com/logos/files/000/200/250/landscape/bs.png" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <br/>
                            <p>Hello, <?php
                           $e= $this->session->userdata('user_data');
                             echo($e['username']);?></p>

                            
                        </div>
                    </div>
                    <!-- search form -->
                    
                    <!-- /.search form -->



                    <!-- sidebar menu: : style can be found in sidebar.less -->
                     <ul class="sidebar-menu">
                        <li <?php if ($pagename==="Dashboard"){ echo'class="active"'; }else{ echo'class=""'; }?>>
                            <a href="<?php echo base_url(); ?>index.php/Dashboard">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>

                        <li <?php if ($pagename==="Data"){ echo'class="active"'; }else{ echo'class=""'; }?>>
                             <a href="<?php echo base_url(); ?>index.php/Data"><i class="fa fa-home"></i>Front Page Data</a> 
                         </li>

                       <li <?php if ($pagename==="property"){ echo'class="active"'; }else{ echo'class=""'; }?>>
                             <a href="<?php echo base_url(); ?>index.php/Properties"><i class="fa  fa-building-o "></i>Properties</a> 
                         </li>

                        <li <?php if ($pagename==="users"){ echo'class="active"'; }else{ echo'class=""'; }?> >
                             <a href="<?php echo base_url(); ?>index.php/User"><i class="fa fa-users"></i>Users </a> 
                         </li>

                        
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>
