<?php
include "includes/connection.php";
include "includes/header.php";

?>

      <li class="nav-item active mt-2 mb-1">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUser"
          aria-expanded="true" aria-controls="collapseUser">
          <i class="far fa-fw fa-user"></i>
          <span>Users</span>
        </a>
        <div id="collapseUser" class="collapse" style="margin-top: 0.50px;" aria-labelledby="headingUser" data-parent="#accordionSidebar">
          <div class="bg-primary2-b py-2 collapse-inner rounded">
            <a class="collapse-item active mb-1" href="View_User.php">View Users</a>
            <a class="collapse-item" href="Add_user.php">Add Users</a>
          </div>
        </div>
      </li>
      <li class="nav-item my-1">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFruits" aria-expanded="true"
          aria-controls="collapseFruits">
          <i class="fa fa-fw fa-percentage"></i>
          <span>Discounted Fruits</span>
        </a>
        <div id="collapseFruits" class="collapse" style="margin-top: 0.50px;" aria-labelledby="collapseFruits" data-parent="#accordionSidebar">
          <div class="bg-primary2-b py-2 collapse-inner rounded">
            <a class="collapse-item mb-1" href="View_Discounted_Fruits.php">View Discounted Fruits</a>
            <a class="collapse-item" href="Add_Discounted_Fruits.php">Add Discounted Fruits</a>
          </div>
        </div>
      </li>
      <li class="nav-item my-1">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseNFRUITS"
          aria-expanded="true" aria-controls="collapseNFRUITS">
          <i class="fa fa-fw fa-plus"></i>
          <span>New Fruits</span>
        </a>
        <div id="collapseNFRUITS" class="collapse" style="margin-top: 0.50px;" aria-labelledby="headingNFRUITS" data-parent="#accordionSidebar">
          <div class="bg-primary2-b py-2 collapse-inner rounded">
            <a class="collapse-item mb-1" href="View_New_Fruits.php">View New Fruits</a>
            <a class="collapse-item" href="Add_New_Fruits.php">Add New Fruits</a>
          </div>
        </div>
      </li>
      <li class="nav-item my-1">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSFRUITS"
          aria-expanded="true" aria-controls="collapseSFRUITS">
          <i class="far fa-fw fa-sun"></i>
          <span>Summer Fruits</span>
        </a>
        <div id="collapseSFRUITS" class="collapse" style="margin-top: 0.50px;" aria-labelledby="headingSFRUITS" data-parent="#accordionSidebar">
          <div class="bg-primary2-b py-2 collapse-inner rounded">
            <a class="collapse-item mb-1" href="View_Summer_Fruits.php">View Summer Fruits</a>
            <a class="collapse-item" href="Add_Summer_Fruits.php">Add Summer Fruits</a>
          </div>
        </div>
      </li>
      <li class="nav-item my-1">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseGFRUITS"
          aria-expanded="true" aria-controls="collapseGFRUITS">
          <i class="fa fa-fw fa-leaf"></i>
          <span>Green Fruits</span>
        </a>
        <div id="collapseGFRUITS" class="collapse" style="margin-top: 0.50px;" aria-labelledby="headingGFRUITS" data-parent="#accordionSidebar">
          <div class="bg-primary2-b py-2 collapse-inner rounded">
            <a class="collapse-item mb-1" href="View_Green_Fruits.php">View Green Fruits</a>
            <a class="collapse-item" href="Add_Green_Fruits.php">Add Green Fruits</a>
          </div>
        </div>
      </li>
      <li class="nav-item my-1">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOrders"
          aria-expanded="true" aria-controls="collapseOrders">
          <i class="far fa-fw fa-window-maximize"></i>
          <span>Orders</span>
        </a>
        <div id="collapseOrders" class="collapse" style="margin-top: 0.50px;" aria-labelledby="headingOrders" data-parent="#accordionSidebar">
          <div class="bg-primary2-b py-2 collapse-inner rounded">
            <a class="collapse-item mb-1" href="View_Orders.php">View Orders</a>
            <a class="collapse-item" href="Add_Orders.php">Add Order</a>
          </div>
        </div>
      </li>
    </ul>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">

        <?php include "includes/nav.php"; ?>

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="row">
            <div class="col-xl-12 col-md-12 mb-12">
              <h1 class="h3 mb-4 text-gray-800">View Users :</h1>
              <div class="table-responsive">
                <table class="table align-items-center table-flush">
                  <thead class="thead-light">
                    <tr>
                      <th>ID</th>
                      <th>Full Name</th>
                      <th>Email</th>
                      <th>User Name</th>
                      <th>Phone Number</th>
                      <th>Payment</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                      $select="SELECT * FROM `users`";
                      $query=mysqli_query($conn , $select);
                      while($row=mysqli_fetch_assoc($query)):
                    ?>
                    <tr>
                      <td style="padding-top: 10px;"><?php echo $row['id_user']; ?></td>
                      <td style="padding-top: 10px;"><?php echo $row['FullName_user']; ?></td>
                      <td style="padding-top: 10px;"><?php echo $row['email_user']; ?></td>
                      <td style="padding-top: 10px;"><?php echo $row['username_user']; ?></td>
                      <td style="padding-top: 10px;"><?php echo $row['phone_user']; ?></td>
                      <td style="padding-top: 10px;"><?php echo $row['Payment_user']; ?></td>
                      <td style="padding-top: 10px;">
                        <a href="Add_user.php?edit_users=<?php echo $row['all_id_user']; ?>"><li class="fa fa-edit"></li></a> 
                        <span class="text-primary font-weight-bolder"> | </span>  
                        <a href="Add_user.php?delete_users=<?php echo $row['all_id_user']; ?>"><li class="fa fa-trash"></li></a>
                      </td>
                    </tr>
                    <?php endwhile; ?>                      
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <!---Container Fluid-->
      </div>

<?php include "includes/footer.php"; ?>