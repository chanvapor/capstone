<?php 
include('includes/header.php');
include('includes/navbar.php');
?>

       
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

            <?php include 'includes/topbar.php';?>
            
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Reservations</h1>

<nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <a class="nav-item nav-link active" id="nav-pending-tab" data-toggle="tab" href="#nav-pending" role="tab" aria-controls="nav-pending" aria-selected="true">Pending</a>
        <a class="nav-item nav-link" id="nav-approve-tab" data-toggle="tab" href="#nav-approve" role="tab" aria-controls="nav-approve" aria-selected="false">Approve</a>
        <a class="nav-item nav-link" id="nav-disapprove-tab" data-toggle="tab" href="#nav-disapprove" role="tab" aria-controls="nav-disapprove" aria-selected="false">Disapprove</a>
    </div>
</nav>
<div class="tab-content" id="nav-tabContent">
    <div class="tab-pane fade show active" id="nav-pending" role="tabpanel" aria-labelledby="nav-pending-tab">
        
        <div class="table-responsive-sm">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Appointment ID</th>
                        <th scope="col">Tracking Code</th>
                        <th scope="col">Time</th>
                        <th scope="col">Date</th>
                        <th scope="col">Email</th>
                        <th scope="col">Type</th>
                        <th scope="col">Status</th>
                        <th scope="col">Operations</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                            <td>#</td>
                            <td>#</td>
                            <td>#</td>
                            <td>#</td>
                            <td>#</td>
                            <td>#</td>
                            <td>
                                <button class="btn btn-info">Approve</button>
                                <button class="btn btn-danger">Disapprove</button>
                            </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>

    <div class="tab-pane fade" id="nav-approve" role="tabpanel" aria-labelledby="nav-approve-tab">
        
        <div class="table-responsive-sm">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Appointment ID</th>
                        <th scope="col">Tracking Code</th>
                        <th scope="col">Time</th>
                        <th scope="col">Date</th>
                        <th scope="col">Email</th>
                        <th scope="col">Type</th>
                        <th scope="col">Status</th>
                        <th scope="col">Operations</th>
                    </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">2</th>
                                    <td>#</td>
                                    <td>#</td>
                                    <td>#</td>
                                    <td>#</td>
                                    <td>#</td>
                                    <td>#</td>
                                    <td>
                                        <button class="btn btn-secondary">Pending</button>
                                        <button class="btn btn-danger">Disapprove</button>
                                    </td>
                                </tr>
                        </tbody>
            </table>
        </div>

    </div>

    <div class="tab-pane fade" id="nav-disapprove" role="tabpanel" aria-labelledby="nav-disapprove-tab">

        <div class="table-responsive-sm">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Appointment ID</th>
                        <th scope="col">Tracking Code</th>
                        <th scope="col">Time</th>
                        <th scope="col">Date</th>
                        <th scope="col">Email</th>
                        <th scope="col">Type</th>
                        <th scope="col">Status</th>
                        <th scope="col">Operations</th>
                    </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">3</th>
                                    <td>#</td>
                                    <td>#</td>
                                    <td>#</td>
                                    <td>#</td>
                                    <td>#</td>
                                    <td>#</td>
                                    <td>
                                        <button class="btn btn-info">Approve</button>
                                        <button class="btn btn-secondary">Pending</button>
                                    </td>
                                </tr>
                        </tbody>
            </table>
        </div>

    </div>
</div>
                    

                </div>

                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

<?php 
include('includes/scripts.php');
include('includes/footer.php');
?>