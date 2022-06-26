<?php 
    $id=$_SESSION['user_id'];
    $query=mysqli_query($con,"SELECT * from user where id=$id");
    while ($row=mysqli_fetch_array($query)) {
        $userrol = $row['rol'];
    }


?>

        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu"><!-- sidebar menu -->
            <div class="menu_section">
                <ul class="nav side-menu">
                    <li class="<?php if(isset($active1)){echo $active1;}?>">
                        <a href="dashboard.php"><i><img src="images/menu.svg" width="20"
     height="20"></i>  Dashboard</a>
                    </li>
<?php
    if($userrol == 0)
    {
?>
                    <li class="<?php if(isset($active2)){echo $active2;}?>">
                        <a href="tickets.php"><i><img src="images/ticketw.svg" width="25"
     height="25"></i> Mis Transacciones</a>
                    </li>

<?php
    }
    elseif($userrol == 1)
    {
?>

                    <li class="<?php if(isset($active2)){echo $active2;}?>">
                        <a href="tickets.php"><i><img src="images/ticketw.svg" width="25"
     height="25"></i> Mis Transacciones</a>
                    </li>
                    
                    <li class="<?php if(isset($active3)){echo $active3;}?>">
                        <a href="projects.php"><i><img src="images/analyticsw.svg" width="25"
     height="25"></i>  Sucursales</a>
                    </li>

                    <li class="<?php if(isset($active4)){echo $active4;}?>">
                        <a href="categories.php"><i><img src="images/convertw.svg" width="25"
     height="25"></i> Elementos</a>
                    </li>

                    <li class="<?php if(isset($active5)){echo $active5;}?>">
                        <a href="reports.php"><i><img src="images/statistics.svg" width="20"
     height="20"></i> Reportes</a>
                    </li>

                    <li class="<?php if(isset($active6)){echo $active6;}?>">
                        <a href="users.php"><i><img src="images/groupw.svg" width="25"
     height="25"></i> Usuarios</a>
                    </li>

<?php
    }
?>
                    <li class="<?php if(isset($active8)){echo $active8;}?>">
                        <a href="about.php"><i class="fa fa-child"></i> Información </a>
                    </li>

                </ul>
            </div>
        </div><!-- /sidebar menu -->
    </div>
</div> 
     
    <div class="top_nav"><!-- top navigation -->
        <div class="nav_menu">
            <nav>
                <div class="nav toggle">
                    <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <li class="">
                        <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            <img src="images/profiles/<?php echo $profile_pic;?>" alt=""><?php echo $name;?>
                            <span class=" fa fa-angle-down"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-usermenu pull-right">
                            <li><a href="dashboard.php"><i class="fa fa-user"></i> Mi cuenta</a></li>
                            <li><a href="action/logout.php"><i class="fa fa-sign-out pull-right"></i> Cerrar Sesión</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div><!-- /top navigation -->    