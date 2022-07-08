<link rel="stylesheet" href="./css/cutom.css">

<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">

            <a href="#" class="d-block">User: <?php echo $_SESSION['name']?></a>
            <a href="logout.php">Logout</a>
        </div>
    </div>

    <!-- SidebarSearch Form -->
    <!-- <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div> -->

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

            <li class="nav-item">
                <a href="index.php" class="nav-link">
                    <i class="nav-icon far fa-envelope"></i>
                    <p>
                        Dashboard
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon far fa-envelope"></i>
                    <p>
                        Properties
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">

                    <li class="nav-item">
                        <a href="all-propeties.php" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>All Properties</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="add-property.php" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Add Property</p>
                        </a>
                    </li>
                    <!-- <li class="nav-item">
                        <a href="features.php" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>All Features</p>
                        </a>
                    </li> -->
                    <!-- <li class="nav-item">
                        <a href="" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Published</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Pending Review</p>
                        </a>
                    </li> -->
                </ul>
            </li>
            <?php  
                if(isset($_SESSION['user_type']) && $_SESSION['user_type'] == 0)
                {
                    echo '<li class="nav-item">
                        <a href="users.php" class="nav-link">
                            <i class="nav-icon far fa-user"></i>
                            <p>Agents</p>
                        </a>
                    </li>';
                }  

                ?>

            <li class="nav-item">
                        <a href="features.php" class="nav-link">
                            <i class="nav-icon far fa-image"></i>
                            <p>Features</p>
                        </a>
            </li>
            <li class="nav-item">
                        <a href="feature-details.php" class="nav-link">
                            <i class="nav-icon far fa-image"></i>
                            <p>Feature Details</p>
                        </a>
            </li>
            <li class="nav-item">
                        <a href="cities.php" class="nav-link">
                            <i class="nav-icon far fa-image"></i>
                            <p>Cities</p>
                        </a>
            </li>
            <li class="nav-item">
                        <a href="enquiry.php" class="nav-link">
                            <i class="nav-icon far fa-file"></i>
                            <p>Enquires</p>
                        </a>
            </li>

            <!-- <li class="nav-item">
                <a href="myprofile.php" class="nav-link">
                    <i class="nav-icon far fa-user"></i>
                    <p>
                        My Profile
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="" class="nav-link">
                    <i class="nav-icon far fa-image"></i>
                    <p>
                        Save Searches
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="login.php" class="nav-link">
                    <i class="nav-icon far fa-image"></i>
                    <p>
                        Logout
                    </p>
                </a>
            </li> -->



        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>