<header id="header" class="header type-3">
    <div class="header-top">
        <div class="row">
        </div>
        <!--/ .row-->
    </div>
    <!--/ .header-top-->
    <div class="header-middle">
        <div class="row">
            <div class="large-7 columns">
                <div class="header-middle-entry">
                    <div class="logo">
                        <span class="tmm_logo">
                            <a title="Lembaga Penjaminan Mutu Pendidikan Sulawesi Selatan" href="<?=site_url()?>"><b>LPMP</b>
                                Sulawesi Selatan</a>
                        </span>
                    </div>
                </div>
            </div>
            <div class="large-5 columns">
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <img src="<?php echo base_url()?>assets/images/62271382_309387903304541_8276620932529782784_n.png"
                            height="100px" width="100px" />
                    </div>
                    <div class="item">
                        <img src="<?php echo base_url()?>assets/images/62349149_1301048116737641_6535889727051005952_n.png"
                            height="100px" width="100px" />
                    </div>
                    <div class="item">
                        <img src="<?php echo base_url()?>assets/images/62367765_339343303420402_7255454602064035840_n.png"
                            height="100px" width="100px" />
                    </div>
                    <div class="item">
                        <img src="<?php echo base_url()?>assets/images/62435256_684603595328455_1932972799186436096_n.png"
                            height="100px" width="100px" />
                    </div>
                    <div class="item">
                        <img src="<?php echo base_url()?>assets/images/62455144_2267503506664162_6662244877465550848_n.png"
                            height="100px" width="100px" />
                    </div>
                    <div class="item">
                        <img src="<?php echo base_url()?>assets/images/62597374_341932056426862_4493209697754546176_n.png"
                            height="100px" width="100px" />
                    </div>
                    <div class="item">
                        <img src="<?php echo base_url()?>assets/images/62611324_466701294095511_8900396917171683328_n.png"
                            height="100px" width="100px" />
                    </div>
                    <div class="item">
                        <img src="<?php echo base_url()?>assets/images/64223098_822844961421471_280726368205930496_n.png"
                            height="100px" width="100px" />
                    </div>
                </div>
                <script>
                    $(document).ready(function () {
                        var owl = $('.owl-carousel');
                        owl.owlCarousel({
                            items: 4,
                            dots: false,
                            loop: true,
                            margin: 10,
                            autoplay: true,
                            autoplayTimeout: 1500,
                            autoplayHoverPause: true
                        });
                        $('.play').on('click', function () {
                            owl.trigger('play.owl.autoplay', [1500])
                        })
                        $('.stop').on('click', function () {
                            owl.trigger('stop.owl.autoplay')
                        })
                    })
                </script>
            </div>
        </div>
        <!--/ .row-->
    </div>
    <!--/ .header-middle-->


    <!-- header bottom -->
    <!-- menu navigation -->
    <div class="header-bottom">

        <div class="row">

            <div class="large-12 columns">

                <nav id="navigation" class="navigation top-bar" data-topbar>

                    <div class="menu-primary-menu-container">

                        <ul id="menu-primary-menu" class="menu">
                        <?php

                            $query_menu_navbar = $this->db->query("SELECT *FROM tbl_navbar WHERE navbar_parent_id = '0'")->result();
                            foreach($query_menu_navbar as $row_parent) {
                                $id_navbar = $row_parent->navbar_id;
                                if ($row_parent->navbar_slug == "") {
                                    ?>
                                    <li><a href="<?=site_url()?>"><?=$row_parent->navbar_name?></a>
                                    <?php 
                                } else {
                                    if ($row_parent->navbar_direct == 'Y') {
                                        ?>
                                            <li><a href="<?=$row_parent->navbar_slug?>" target="_blank"><?=$row_parent->navbar_name?></a>
                                        <?php 
                                    } else {
                                        ?>
                                            <li><a href="#"><?=$row_parent->navbar_name?></a>
                                        <?php 
                                    }
                                    
                                }
                                
                                    $query_menu_child = $this->db->query("SELECT *FROM tbl_navbar WHERE navbar_parent_id = '$id_navbar'");
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