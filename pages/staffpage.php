<?php include("../config/route.php") ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo __WEBSITE__TITLE__; ?>
    </title>
    <link rel="stylesheet" href="../css/internal/dashboard.css">
    <link rel="stylesheet" href="../css/internal/dashboard_index.css">
	<script src="../../js/loaderhandler.js"></script>
</head>

<body>



    <!-- Dashboard -->
    <div class="d-flex flex-column flex-lg-row h-lg-full bg-surface-secondary">
        <!-- Vertical Navbar -->
        <?php include("compoent/adminnav.php") ?>


        <!-- Main content -->
        <div class="h-screen flex-grow-1 overflow-y-lg-auto">
            <!-- Header -->
            <header class="bg-surface-primary border-bottom pt-6">
                <div class="container-fluid">
                    <div class="mb-npx">
                        <div class="row align-items-center">
                            <div class="col-sm-6 col-12 mb-4 mb-sm-0">
                                <!-- Title -->
                                <h1 class="h2 mb-0 ls-tight">Admin Pannel</h1>
                            </div>
                            <!-- Actions -->
                            <div class="col-sm-6 col-12 text-sm-end">
                                <div class="mx-n1">

                                </div>
                            </div>
                        </div>
                        <!-- Nav -->
                        <ul class="nav nav-tabs mt-4 overflow-x border-0">
                            <li class="nav-item ">
                                <a href="#" class="nav-link active">All files</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </header>
            <!-- Main -->
            <main class="py-6 bg-surface-secondary">
                <div class="container-fluid">
                    <!-- Card stats -->
                    <div class="row g-6 mb-6">


                    </div>
                    <div class="card shadow border-0 mb-7">
                        <div class="card-header">
                            <h5 class="mb-0">Applications</h5>
                        </div>

                        <form>

                            <div class="row mt-5">

                                <div class="form-outline col-sm-6">
                                    <input type="text" id="staff_sf_name" class="form-control form-control-lg"
                                        placeholder="First Name">
                                </div>
                                <div class="form-outline col-sm-6">
                                    <input type="text" id="staff_sf_name" class="form-control form-control-lg"
                                        placeholder="Last Name">
                                </div>

                            </div>
                            <div class="row mt-5">
                                <div class="form-outline col-sm-6">
                                    <input type="text" id="staff_sf_email" class="form-control form-control-lg"
                                        placeholder="Email">
                                </div>
                                <div class="form-outline col-sm-6">
                                    <input type="text" id="staff_sf_mobile" class="form-control form-control-lg"
                                        placeholder="Mobile">
                                </div>
                            </div>

                            <br>
                            <div class="form-outline col-sm-6">
                                <button id="btn_update_staff" value="Update" class="btn btn-primary">Update</button>
                            </div>
                        </form>


                    </div>

                </div>
            </main>
        </div>
    </div>
</body>

</html>