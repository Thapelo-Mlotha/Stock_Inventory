<?php include('includes/header.php'); ?>
    <div class="sidebar">
        <div class="logo_details">
            <i class="bx bx-bot icon"></i>
            <div class="logo_name">EMPLOYEE</div>
            <i class="bx bx-menu" id="btn"></i>
        </div>

        <!--Navigation list-->
        <ul class="nav-list">
            <li>
                <i class="bx bx-search"></i>
                <input type="text" placeholder="Search...">
                <span class="tooltip">Search</span>
            </li>
            <li>
                <a href="dashboard.php">
                    <i class="bx bxs-dashboard"></i>
                    <span class="link_name">Dashboard</span>
                </a>
                <span class="tooltip">Dashboard</span>
            </li>
            <li>
                <a href="alarm.php">
                    <i class="bx bx-cart"></i>
                    <span class="link_name">Sales</span>
                </a>
                <span class="tooltip">Sales</span>
            </li>
            <li>
                <a href="reminder.php">
                    <i class="bx bx-package"></i>
                    <span class="link_name">Products</span>
                </a>
                <span class="tooltip">Products</span>
            </li>
            
            <li>
                <a href="profilePage.php">
                    <i class="bx bxs-user-rectangle"></i>
                    <span class="link_name">My Profile</span>
                </a>
                <span class="tooltip">My Profile</span>
            </li>

            <li class="profile">
                <div class="profile_details">
                    <img src="assets/images/shop_icon.png" alt="profile image">
                    <div class="profile_content">
                        <div class="name">Employee1<?php //echo $username ?></div>
                        <div class="designation"><p>employee@gmail.com</p><?php // echo $email ?></div>
                    </div>
                </div>
                
                <i onclick="gotoHome()" class="bx bx-log-out" id="log_out"></i>
            </li>
        </ul>
    </div>