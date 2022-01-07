<div class="page-sidebar sidebar">
                <div class="page-sidebar-inner slimscroll">
                    <div class="sidebar-header">
                        <div class="sidebar-profile">
                            <?php
                                $user_id=$this->session->userdata('id');
                                $query=$this->db->get_where('tbl_user', array('user_id' => $user_id));
                                if($query->num_rows() > 0):
                                $row = $query->row_array();
                            ?>
                            <a href="javascript:void(0);">
                                <div class="sidebar-profile-image">
                                    <img src="<?php echo base_url().'assets/images/'.$row['user_photo'];?>" class="img-circle img-responsive" alt="">
                                </div>
                                <div class="sidebar-profile-details">
                                    <span><?php echo $this->session->userdata('name');?><br>
                                    <?php if($row['user_level']=='1'):?>
                                    <small>Administrator</small>
                                    <?php else:?>
                                    <small>Author</small>
                                    <?php endif;?>
                                </span>
                                </div>
                            </a>
                            <?php else:?>
                            <a href="javascript:void(0);">
                                <div class="sidebar-profile-image">
                                    <img src="<?php echo base_url().'assets/images/user_blank.png';?>" class="img-circle img-responsive" alt="">
                                </div>
                                <div class="sidebar-profile-details">
                                    <span><?php echo $this->session->userdata('name');?><br>
                                    <?php if($row['user_level']=='1'):?>
                                    <small>Administrator</small>
                                    <?php else:?>
                                    <small>Author</small>
                                    <?php endif;?>
                                </span>
                                </div>
                            </a>
                            <?php endif;?>
                        </div>
                    </div>



                    <ul class="menu accordion-menu">

                        <?php
                        $query_menu = $this->db->query("SELECT *FROM tbl_navbar_admin WHERE navbar_parent_id = '0'");
                        foreach($query_menu->result() as $rows) {
                            $id_menu = $rows->navbar_id;
                            if ($rows->navbar_is_droplink == 'Y') {
                                $dropLink = ' droplink';
                                $spanArrow = '<span class="arrow"></span>';
                            } else {
                                $dropLink = '';
                                $spanArrow = '';
                            }
                            
                            if ($this->uri->segment(2) == $rows->navbar_slug){
                                $activeOpen = 'active open';
                            } 
                            else {
                                $activeOpen = '';
                            }
                                
                            ?>
                            <!-- link aktif ditambahkan class="active" -->
                            <li class="<?=$dropLink?> <?=$activeOpen?>"><a href="<?php echo site_url('halamanbelakang/'.$rows->navbar_slug);?>" class="waves-effect waves-button">
                                <span class="menu-icon <?=$rows->navbar_icon?>"></span><p><?=$rows->navbar_name?></p><?=$spanArrow?></a>
                            
                            <?php
                            //check query untuk submenu
                            $query_submenu = $this->db->query("SELECT *FROM tbl_navbar_admin WHERE navbar_parent_id = '$id_menu'");
                            $check_num_rows = $query_submenu->num_rows();
                            if ($check_num_rows > 0)
                            {
                                ?>
                                <ul class="sub-menu">
                                <?php
                                    foreach($query_submenu->result() as $row_sub)
                                    {
                                        ?>
                                            <li><a href="<?=site_url('halamanbelakang/'.$row_sub->navbar_slug)?>"><?=$row_sub->navbar_name?></a></li>
                                        <?php
                                    }
                                ?>
                                    
                                </ul>
                                <?php
                            }
                            ?>
                            
                            </li>
                            <?php
                        }
                        ?>
                        <li><a href="<?php echo site_url('logout');?>" class="waves-effect waves-button"><span class="menu-icon icon-logout"></span><p>Log Out</p></a></li>
                        
                    </ul>
                </div><!-- Page Sidebar Inner -->
            </div><!-- Page Sidebar -->