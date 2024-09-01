<?php
include "connection.php";

$query="SELECT `order_name_order` FROM `orders`";
$result=mysqli_query($conn , $query);
$r_n=mysqli_num_rows($result);
?>
<!-- TopBar -->
<nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
          <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                aria-labelledby="searchDropdown">
                <div class="navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-primary border-1 small" placeholder="What do you want to look for?"
                      aria-label="Search" aria-describedby="basic-addon2" id="search" value="" style="border-color: #1acbcc;">
                    <div class="input-group-append">
                      <button class="btn btn-primary2" onclick="return search();">
                        <i class="fas fa-search fa-sm text-primary"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <span class="badge badge-info badge-counter"> <?php echo $r_n; ?> </span>
              </a>
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">  notification Center </h6>
                <?php while($row=mysqli_fetch_assoc($result)): ?>
                  <a class="dropdown-item d-flex align-items-center" href="View_Orders.php">
                    <div class="mr-3">
                      <div class="icon-circle bg-primary">
                        <i class="fas fa-bell text-secondary"></i>
                      </div>
                    </div>
                    <div>
                      <div class="small text-secondary">December 12, 2023</div>
                        New order : <?php echo $row['order_name_order']; ?>
                    </div>
                  </a>
                <?php endwhile; ?>
              </div>
            </li>
            <div class="topbar-divider d-none d-sm-block"></div>
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <img class="img-profile rounded-circle" src="img/Website Logo.png" style="max-width: 60px">
                <span class="ml-2 d-none d-lg-inline text-secondary small">Clever Mind</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="javascript:void(0);" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-dark"></i>
                  Logout
                </a>
              </div>
            </li>
          </ul>
        </nav>
<script src="js/search.js"></script>
<!-- Topbar -->