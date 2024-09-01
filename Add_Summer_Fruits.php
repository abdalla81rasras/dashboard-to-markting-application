<?php
include "includes/connection.php";
include "includes/Process.php";
include "includes/header.php";

?>

      <li class="nav-item mt-2 mb-1">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUser"
          aria-expanded="true" aria-controls="collapseUser">
          <i class="far fa-fw fa-user"></i>
          <span>Users</span>
        </a>
        <div id="collapseUser" class="collapse" style="margin-top: 0.50px;" aria-labelledby="headingUser" data-parent="#accordionSidebar">
          <div class="bg-primary2-b py-2 collapse-inner rounded">
            <a class="collapse-item mb-1" href="View_User.php">View Users</a>
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
      <li class="nav-item active my-1">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSFRUITS"
          aria-expanded="true" aria-controls="collapseSFRUITS">
          <i class="far fa-fw fa-sun"></i>
          <span>Summer Fruits</span>
        </a>
        <div id="collapseSFRUITS" class="collapse" style="margin-top: 0.50px;" aria-labelledby="headingSFRUITS" data-parent="#accordionSidebar">
          <div class="bg-primary2-b py-2 collapse-inner rounded">
            <a class="collapse-item mb-1" href="View_Summer_Fruits.php">View Summer Fruits</a>
            <a class="collapse-item active" href="Add_Summer_Fruits.php">Add Summer Fruits</a>
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
            <input type="hidden" name="id_summer" value="<?php echo $id_summer; ?>">
            <div class="row m-2">
              <div class="col-xl-12 col-lg-12">
                <?php if($update==true): ?>
                  <h1 class="h3 text-gray-800 mb-3">
                    Update Summer Fruit :
                  </h1>
                <?php else: ?>
                  <h1 class="h3 text-gray-800 mb-3">
                    Add Summer Fruit :
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
                          <label class="font-weight-bold" for="InputName">Name Summer Fruit :</label>
                          <input type="text" name="name_summer" id="InputName" class="form-control" value="<?php echo htmlspecialchars($name_summer); ?>" placeholder="Enter Name ...">
                          <div class="text-secondary pt-3"><?php echo $errors['name_summer'] ?></div>
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
                          <label class="font-weight-bold" for="InputPrice">Price Summer Fruit :</label>
                          <input type="number" name="price_summer" id="InputPrice" class="form-control" min="0" step="0.00001" value="<?php echo htmlspecialchars($price_summer); ?>" placeholder="Enter Price ...">
                          <div class="text-secondary pt-3"><?php echo $errors['price_summer'] ?></div>
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
                          <label class="font-weight-bold">Select Image Summer Fruit :</label>
                          <div class="input-group">
                            <input type="file" name="img_summer" accept="Image/*">
                            <div class="text-secondary pt-3"><?php echo $errors['img_summer'] ?></div>
                            <div class="d-flex flex-column">
                              <?php if($edit==true): ?>
                                <p class="text-secondary pt-3 mb-0"><?php echo $errors['edit_img_summer'] ?></p> <br>
                                <div class="d-flex align-items-center">
                                  <p class="text-secondary font-weight-bold mr-3 ">Old Image :  </p>
                                  <img src="Upload/<?php echo $img_summer ?>" alt="Image" style="width:100px; height: 100px;">
                                </div>
                              <?php endif; ?>
                            </div>
                          </div>
                        </div>                      
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row justify-content-around bs m-2">
              <div class="col-lg-2 col-xl-2">
                <?php if($update==true): ?>
                  <button name="update_summer" class="btn btn-primary m-2 w-100 h-100 font-weight-bold">Update</button>
                <?php else: ?>
                  <button name="save_summer" class="btn btn-primary m-2 w-100 h-100 font-weight-bold">Save</button>
                <?php endif; ?>
              </div>
              <div class="col-lg-2 col-xl-2 bc">
                <button name="cansel_summer" class="btn btn-primary m-2 w-100 h-100 font-weight-bold">Cansel</button>
              </div>
            </div>
          </form> <br><br>
        </div>
        <!---Container Fluid-->
      </div>

<?php include "includes/footer.php"; ?>