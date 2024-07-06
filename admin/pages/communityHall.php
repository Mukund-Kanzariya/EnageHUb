<?php
include ("../includes/config.php");
require pathOf('admin/includes/sidebar.php');
require pathOf('admin/includes/header.php');

$sql = "SELECT * FROM communityhall";
$result = mysqli_query($connection, $sql);
$data = mysqli_fetch_all($result);

?>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 d-flex align-items-stretch">
            <div class="card w-100">
                <div class="card-body p-4">
                    <div class="row">
                        <h5 class="card-title fw-semibold mb-4 col">Add Community Halls
                            <svg xmlns="http://www.w3.org/2000/svg" class="col icon icon-tabler icon-tabler-plus" onclick="showInsertModal()" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M12 5l0 14"></path>
                                <path d="M5 12l14 0"></path>
                            </svg>
                        </h5>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-nowrap mb-0 align-middle">
                            <thead class="text-dark fs-4 align-middle">
                                <tr>
                                    <th class="border-bottom-0 align-middle">
                                        <h6 class="fw-semibold mb-0 align-middle">No.</h6>
                                    </th>
                                    <th class="border-bottom-0 align-middle">
                                        <h6 class="fw-semibold mb-0 align-middle">Hall Name</h6>
                                    </th>
                                    <th class="border-bottom-0 align-middle">
                                        <h6 class="fw-semibold mb-0 align-middle">Address</h6>
                                    </th>
                                    <th class="border-bottom-0 align-middle">
                                        <h6 class="fw-semibold mb-0 align-middle">City</h6>
                                    </th>
                                    <th class="border-bottom-0 align-middle">
                                        <h6 class="fw-semibold mb-0 align-middle">State</h6>
                                    </th>
                                    <th class="border-bottom-0 align-middle">
                                        <h6 class="fw-semibold mb-0 align-middle">Contact Person</h6>
                                    </th>
                                    <th class="border-bottom-0 align-middle">
                                        <h6 class="fw-semibold mb-0 align-middle">Phone Number</h6>
                                    </th>
                                    <th class="border-bottom-0 align-middle">
                                        <h6 class="fw-semibold mb-0 align-middle">Edit</h6>
                                    </th>
                                    <th class="border-bottom-0 align-middle">
                                        <h6 class="fw-semibold mb-0 align-middle">Delete</h6>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for ($i = 0; $i < count($data); $i++) { ?>
                                    <tr>
                                        <td class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0"><?= $i + 1  ?></h6>
                                        </td>
                                        <td class="border-bottom-0">
                                            <h6 class="fw-semibold mb-1"><?= $data[$i][1] ?></h6>
                                        </td>
                                        <td class="border-bottom-0">
                                            <h6 class="fw-semibold mb-1"><?= $data[$i][2] ?></h6>
                                        </td>
                                        <td class="border-bottom-0">
                                            <h6 class="fw-semibold mb-1"><?= $data[$i][4] ?></h6>
                                        </td>
                                        <td class="border-bottom-0">
                                            <h6 class="fw-semibold mb-1"><?= $data[$i][3] ?></h6>
                                        </td>
                                        <td class="border-bottom-0">
                                            <h6 class="fw-semibold mb-1"><?= $data[$i][6] ?></h6>
                                        </td>
                                        <td class="border-bottom-0">
                                            <h6 class="fw-semibold mb-1"><?= $data[$i][7] ?></h6>
                                        </td>
                                        <td class="border-bottom-0">
                                            <a class="mb-0 fw-normal align-middle" onclick="showUpdateModal(<?= $data[$i][0] ?>">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" onclick="showUpdateModal(<?= $data[$i][0] ?>)" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"></path>
                                                    <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z"></path>
                                                    <path d="M16 5l3 3"></path>
                                                </svg>
                                            </a>
                                        </td>
                                        <td class="border-bottom-0">
                                            <a class="mb-0 fw-normal align-middle" href="<?= urlOf("api/deletecommunityhall.php?id=") . $data[$i][0] ?>">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-eraser" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M19 20h-10.5l-4.21 -4.3a1 1 0 0 1 0 -1.41l10 -10a1 1 0 0 1 1.41 0l5 5a1 1 0 0 1 0 1.41l-9.2 9.3"></path>
                                                    <path d="M18 13.3l-6.3 -6.3"></path>
                                                </svg>
                                            </a>
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

    <!-- Insert Modal -->
    <dialog id="insertTableModal" style="top: 50%;left: 50%;border:0px;border-radius:10px; height: 50%;width: 30%;-webkit-transform: translateX(-50%) translateY(-50%);-moz-transform: translateX(-50%) translateY(-50%);-ms-transform: translateX(-50%) translateY(-50%);transform: translateX(-50%) translateY(-50%);">
        <form method="POST" action="<?= urlOf("api/insertcommunityhall.php") ?>">
            <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label mb-3">Hall Name : </label>
                        <input type="text" id="name" class="form-control" name="hallName" placeholder="Enter Hall Name : ">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label mb-3">Address : </label>
                        <input type="text" id="address" class="form-control" name="address" placeholder="Enter Adress : ">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label mb-3">State : </label>
                        <input type="text" id="state" class="form-control" name="state" placeholder="Enter State Name : ">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label mb-3">City : </label>
                        <input type="text" id="city" class="form-control" name="city" placeholder="Enter City Name : ">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label mb-3">Pin Code : </label>
                        <input type="text" id="pincode" class="form-control" name="pincode" placeholder="Enter Pin Code : ">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label mb-3">Contact Person : </label>
                        <input type="text" id="contactPersonName" class="form-control" name="contactPerson" placeholder="Enter Contact Person  Name : ">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label mb-3">Mobile Number : </label>
                        <input type="text" id="contactPersonNo" class="form-control" name="contactNumber" placeholder="Enter Mobile Number : ">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </dialog>

    <!-- Update Modal -->
    <dialog id="updateTableModal" style="top: 50%;left: 50%;border:0px;border-radius:10px; height: 50%;width: 30%;-webkit-transform: translateX(-50%) translateY(-50%);-moz-transform: translateX(-50%) translateY(-50%);-ms-transform: translateX(-50%) translateY(-50%);transform: translateX(-50%) translateY(-50%);">
        <form method="POST" action="<?= urlOf("api/updatecommunityhall.php") ?>">
            <div class="card">
                <div class="card-body">
                <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label mb-3">ID: </label>
                        <input type="text" class="form-control" name="Id" id="Id" readonly>
                        <!-- <input type="hidden" class="form-control" name="Id" id="Id"> -->
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label mb-3">Update Hall Name : </label>
                        <input type="text" class="form-control" name="updateHallName" id="hallName">
                        
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label mb-3">Update Address : </label>
                        <input type="text" class="form-control" name="updateAddress" id="Address">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label mb-3">Update State : </label>
                        <input type="text" class="form-control" name="updateState" id="state">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label mb-3">Update City: </label>
                        <input type="text" class="form-control" name="updateCity" id="city">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </dialog>

    <script>
        function showInsertModal() {
            insertTableModal.showModal();
        }

        function showUpdateModal(Id, hallName, Address, city, state) {
            updateTableModal.showModal();
            $("#Id").val(Id);
            $("#hallName").val(hallName);
            $("#Address").val(Address);
            $("#city").val(city);
            $("#state").val(state);
        }
    </script>

    <?php require pathOf('admin/includes/footer.php'); ?>
