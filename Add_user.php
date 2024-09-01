<?php
include "includes/connection.php";
include "includes/Process.php";
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
            <a class="collapse-item mb-1" href="View_User.php">View Users</a>
            <a class="collapse-item active" href="Add_user.php">Add Users</a>
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
          <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="all_id_user" value="<?php echo $all_id_user; ?>">
            <div class="row m-2">
              <div class="col-xl-12 col-lg-12">
                <?php if($update==true): ?>
                  <h1 class="h3 text-gray-800 mb-3">
                    Update User :
                  </h1>
                <?php else: ?>
                  <h1 class="h3 text-gray-800 mb-3">
                    Add User :
                  </h1>
                <?php endif; ?>
              </div>
            </div>
            <div class="row m-2">
              <div class="col-xl-6 col-lg-6 mb-4">
                <div class="card h-100">
                  <div class="card-body pb-2">
                    <div class="row align-items-center">
                      <div class="col mr-2">
                        <div class="form-group">
                          <label class="font-weight-bold" for="InputID">User ID :</label>
                          <input type="text" name="id_user" id="InputID" class="form-control" value="<?php echo htmlspecialchars($id_user); ?>" placeholder="Enter ID User ...">
                          <div class="text-secondary mt-2"><?php echo $errors['id_user'] ?></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-6 col-lg-6 mb-4">
                <div class="card h-100">
                  <div class="card-body pb-2">
                    <div class="row align-items-center">
                      <div class="col mr-2">
                      <div class="form-group">
                          <label class="font-weight-bold" for="InputFullName">Full Name :</label>
                          <input type="text" name="FullName_user" id="InputFullName" class="form-control" value="<?php echo htmlspecialchars($FullName_user); ?>" placeholder="Enter Full Name ...">
                          <div class="text-secondary mt-2"><?php echo $errors['FullName_user'] ?></div>
                        </div>                      
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row m-2">
              <div class="col-xl-6 col-lg-6 mb-4">
                <div class="card h-100">
                  <div class="card-body pb-2">
                    <div class="row align-items-center">
                      <div class="col mr-2">
                      <div class="form-group">
                          <label class="font-weight-bold" for="InputEmail">Email :</label>
                          <input type="email" name="email_user" id="InputEmail" class="form-control" value="<?php echo htmlspecialchars($email_user); ?>" placeholder="Enter Email ...">
                          <div class="text-secondary mt-2"><?php echo $errors['email_user'] ?></div>
                        </div>                      
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-6 col-lg-6 mb-4">
                <div class="card h-100">
                  <div class="card-body pb-2">
                    <div class="row align-items-center">
                      <div class="col mr-2">
                        <div class="form-group">
                          <label class="font-weight-bold" for="InputUserName">Name User :</label>
                          <input type="text" name="username_user" id="InputUserName" class="form-control" value="<?php echo htmlspecialchars($username_user); ?>" placeholder="Enter User Name ...">
                          <div class="text-secondary mt-2"><?php echo $errors['username_user'] ?></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>          
            </div>
            <div class="row m-2">
              <div class="col-xl-6 col-lg-6 mb-4">
                <div class="card h-100">
                  <div class="card-body pb-2">
                    <div class="row align-items-center">
                      <div class="col mr-2">
                        <div class="form-group">
                          <label class="font-weight-bold" for="InputPhoneNumber">Phone Number :</label>
                          <input type="text" name="phone_user" id="InputPhoneNumber" class="form-control" value="<?php echo htmlspecialchars($phone_user); ?>" placeholder="Enter Phone Number ...">
                          <div class="text-secondary mt-2"><?php echo $errors['phone_user'] ?></div>
                        </div>                      
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-6 col-lg-6 mb-4">
                <div class="card h-100">
                  <div class="card-body pb-2">
                    <div class="row align-items-center">
                      <div class="col mr-2">
                        <div class="form-group">
                          <label class="font-weight-bold">Payment :</label>
                          <div class="d-flex flex-row mt-2">
                            <div class="custom-control mr-5 custom-radio d-inline">
                              <input type="radio" id="customRadio1" name="Payment_user" value="Cash" <?php if ($Payment_user == 'Cash') echo 'checked="checked"'; ?> class="custom-control-input">
                              <label class="custom-control-label" for="customRadio1">Cash</label>
                            </div>
                            <div class="custom-control ml-5 custom-radio">
                              <input type="radio" id="customRadio2" name="Payment_user" value="Visa" <?php if ($Payment_user == 'Visa') echo 'checked="checked"'; ?> class="custom-control-input">
                              <label class="custom-control-label" for="customRadio2">Visa</label>
                            </div>                          
                          </div>
                        </div>
                        <div class="text-secondary mt-2"><?php echo $errors['Payment_user'] ?></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>          
            </div>
            <div class="row justify-content-around m-2">
              <div class="col-lg-2 col-xl-2">
                <?php if($update==true): ?>
                  <button name="update_user" class="btn btn-primary m-2 w-100 h-100 font-weight-bold">Update</button>
                <?php else: ?>
                  <button name="save_user" class="btn btn-primary m-2 w-100 h-100 font-weight-bold">Save</button>
                <?php endif; ?>
              </div>
              <div class="col-lg-2 col-xl-2 bc">
                <button name="cansel_user" class="btn btn-primary m-2 w-100 h-100 font-weight-bold">Cancel</button>
              </div>
            </div>
          </form> <br><br>   
        </div>
        <!---Container Fluid-->
      </div>

<?php include "includes/footer.php"; ?>