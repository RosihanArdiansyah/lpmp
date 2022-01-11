<header id="header" class="header" style="width: auto;">
    
        <!-- <div class="row">
			<img src="https://lpmpsulsel.kemdikbud.go.id/assets/images/cover.jpg" width="100%">
		</div> -->
        <!--/ .row-->
    <!--/ .header-top-->
    


    <!-- header bottom -->
    <!-- menu navigation -->
    <div class="header-bottom">

        <div class="row">

            <div class="large-12 columns">
                

                <nav id="navigation" class="navigation top-bar" data-topbar>

                    <div class="menu-primary-menu-container">
                     

                    <ul id="icon-menu">
                        <img src="lpmp.png" width="48px">
                    </ul>
                    <ul id="icon-name">
                        <H5 style="padding-top: 8px ; color:#14b3e4;">LPMP Sul-Sel</H5>
                    </ul>
                        <ul id="menu-primary-menu" class="menu">
                        
                        <?php

                            $query_menu_navbar = $this->db->query("SELECT *FROM tbl_navbar WHERE navbar_parent_id = '0' ORDER BY urutan ASC")->result();
                            foreach($query_menu_navbar as $row_parent) {
                                $id_navbar = $row_parent->navbar_id;
                                if ($row_parent->navbar_slug == "") {
                                    ?>
                                    <li><a href="<?=site_url()?>"><?=$row_parent->navbar_name?></a>
                                    <?php 
                                } else {
                                    if ($row_parent->navbar_direct == 'Y') {
                                        ?>
                                            <li ><a href="<?=$row_parent->navbar_slug?>" target="_blank"><?=$row_parent->navbar_name?> </a>
                                        <?php 
                                    } else {
                                        ?>
                                            <li><a href="#"><?=$row_parent->navbar_name?></a>
                                        <?php 
                                    }
                                    
                                }
                                
                                    $query_menu_child = $this->db->query("SELECT *FROM tbl_navbar WHERE navbar_parent_id = '$id_navbar' ORDER BY urutan ASC");
                                    $nums_child = $query_menu_child->num_rows();
                                    if ($nums_child > 0)
                                    {
                                        ?>
                                        <ul class="sub-menu">
                                        <?php
                                        foreach($query_menu_child->result() as $row_child) {
                                            if ($row_child->navbar_direct == 'Y')
                                            {
                                                ?>
                                                    <li><a href="<?=$row_child->navbar_slug?>"><?=$row_child->navbar_name?></a></li>
                                                <?php
                                            }
                                            else
                                            {
                                                ?>
                                                    <li><a href="<?=site_url().$row_child->navbar_slug?>"><?=$row_child->navbar_name?></a></li>
                                                <?php
                                            }
                                            
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


                           
                        </ul>

                    </div>
                    <!--<div class="search-form-nav">-->
                    <!--	<form method="get" action="#">-->
                    <!--		<fieldset>-->
                    <!--			<input placeholder="Search" type="text" name="s" autocomplete="off" value=""-->
                    <!--				   class="advanced_search"/>-->
                    <!--			<button type="submit" class="submit-search">Search</button>-->
                    <!--		</fieldset>-->
                    <!--	</form>-->
                    <!--</div>-->


                </nav>
                <!--/ .navigation-->
            </div>

        </div>
        <!--/ .row-->

    </div>
    <!--/ .header-bottom-->
    <!--/ .menu navigation -->
    <!-- / .header bottom -->

    <!-- menu navigation -->
    <?php
			#include "content_menu.php";
		?>
    <!--/ .menu navigation -->
</header>