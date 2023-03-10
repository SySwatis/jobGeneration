            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <img src="img/logo_small.png" alt="Logo" srcset="">

                    <div class="dropdown profile-element">
                        <!-- <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="block m-t-xs font-bold">Example user</span>
                            <span class="text-muted text-xs block">menu <b class="caret"></b></span>
                        </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a class="dropdown-item" href="login.html">Logout</a></li>
                        </ul> -->
                    </div>
                    <div class="logo-element">
                        JG+
                    </div>
                </li>
                <?php $menu = get_menu() ?>
                <?php foreach ($menu as $item) : ?>
                <li class="<?php // echo get_active() ?>">
                    <a href="<?php echo $item[2] ?>.php"><i class="fa fa-<?php echo $item[1] ?>"></i> <span class="nav-label"><?php echo $item[0] ?></span></a>
                </li>
                <?php endforeach ?>
            </ul>