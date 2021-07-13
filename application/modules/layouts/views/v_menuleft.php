        <div class="col-md-3 left_col menu_fixed">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="<?php echo base_url('/'); ?>" class="site_title"><i class="fa fa-users"></i> <span>MAIMPIS-BIMS</span>
                <sup><?php echo 'v'.VERSION; ?></sup>
              </a>
            </div>

            <div class="clearfix"></div>
            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>&nbsp;</h3>
                <ul class="nav side-menu">
                <li><a><i class="fa fa-users"></i>RESIDENT<span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="<?php echo base_url('resident/'); ?>"> Encoding</a></li>
                    <li><a href="<?php echo base_url('resident/residentslist'); ?>"> Issuance</a></li>
                    <li><a href="<?php echo base_url('blotter/index'); ?>"> Blotter</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-users"></i>BUSINESS<span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="<?php echo base_url('permit/encode'); ?>"> Encode a business</a></li>
                    <li><a href="<?php echo base_url('permit/list'); ?>"> List of businesses</a></li>
                  </ul>
                </li>
                </ul>

              </div>
             </div>
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?php echo base_url('images/maimpislogo.png'); ?>" alt=""><?php echo $this->session->userdata('u_username'); ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li class="btn-profile"><a href="<?php echo base_url('account/profile'); ?>"> Change Password</a></li>
                    <li><a href="<?php echo base_url('account/logout'); ?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown dropdown-notify hidden">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-bell-o"></i>
                    <span class="badge bg-red"></span>
                  </a>
                  <ul id="menu1" class="menu-notify dropdown-menu list-unstyled msg_list scrollbar" role="menu">
                  </ul>
                </li>

              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->
