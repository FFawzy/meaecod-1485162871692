
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

                        <li <?php if ($pagename==="Events"){ echo'class="active"'; }else{ echo'class=""'; }?>>
                             <a href="<?php echo base_url(); ?>Events"><i class="fa fa-home"></i>Events</a> 
                         </li>

                       <li <?php if ($pagename==="Cases"){ echo'class="active"'; }else{ echo'class=""'; }?>>
                             <a href="#" onclick="cs();"><i class="fa  fa-building-o "></i>Case Studies</a> 
                         </li>

                        <li <?php if ($pagename==="Contact"){ echo'class="active"'; }else{ echo'class=""'; }?> >
                             <a href="<?php echo base_url(); ?>Contact"><i class="fa fa-users"></i>New Requests </a> 
                         </li>
                         <?php if ($this->session->userdata('user_data')['type']==="admin"){ ?>
                          <li >
                             <a href="<?php echo base_url(); ?>User"><i class="fa fa-users"></i>Users </a> 
                         </li><?php }?>

                        
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>
