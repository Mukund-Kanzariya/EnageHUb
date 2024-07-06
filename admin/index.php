<?php

if (!isset($_SESSION['username']) || $_SESSION['username'] == "") {
  header("Location: ./pages/login.php");
}

require './includes/config.php';

include ('./includes/sidebar.php');
include ('./includes/header.php');

$sql = "SELECT * FROM `users`";
$result = mysqli_query($connection, $sql);
$data = mysqli_fetch_all($result);

?>
      <div class="container-fluid">    
          <div class="col-lg-12 d-flex align-items-stretch">
            <div class="card w-100">
              <div class="card-body p-4">
                <h5 class="card-title fw-semibold mb-4">Active Users</h5>
                <div class="table-responsive">
                  <table class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                      <tr>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">No.</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Name</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Email</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Gender</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Age</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Location</h6>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php for($i = 0; $i < count($data); $i++) { ?>

                      <tr>
                        <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-1"><?= $i + 1  ?></h6>                               
                        </td>
                        <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-1"><?= $data[$i][1] ?></h6>                               
                        </td>
                        <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-1"><?= $data[$i][4] ?></h6>                               
                        </td>
                        <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-1"><?= $data[$i][2] ?></h6>                               
                        </td>
                        <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-1"><?= $data[$i][3] ?></h6>                               
                        </td>
                        <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-1"><?= $data[$i][7] ?></h6>                               
                        </td>
                      </tr>  
                      <?php } ?>                     
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        
        <?php include ('./includes/footer.php'); ?>

</html>