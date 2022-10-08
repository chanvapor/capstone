<?php 
include('includes/header.php');
include('includes/navbar.php');
?>

       
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

            <?php include 'includes/topbar.php';?>
                
<!-- Modal -->

<!------------Add New Staff Modal----------------->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addModalLabel">Add New Staff</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" autocomplete="off" placeholder="Enter Username">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" autocomplete="off" placeholder="Enter Password">
        </div>
        <div class="form-group">
            <label for="mail">Email Address</label>
            <input type="email" class="form-control" id="mail" autocomplete="off" placeholder="Enter Email">
        </div>
        <div class="form-group">
            <label for="contact">Contact Number</label>
            <input type="text" class="form-control" id="contact" autocomplete="off" placeholder="Enter Contact Number">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark">Submit</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div> 
    </div>
  </div>
</div>
<!------------------------------------------------>


<!------------Update Staff Modal----------------->
<div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="updateModalLabel">Add New Staff</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label for="username">Update Username</label>
            <input type="text" class="form-control" id="username" autocomplete="off" placeholder="Enter Username">
        </div>
        <div class="form-group">
            <label for="password">Update Password</label>
            <input type="password" class="form-control" id="password" autocomplete="off" placeholder="Enter Password">
        </div>
        <div class="form-group">
            <label for="mail">Update Email Address</label>
            <input type="email" class="form-control" id="mail" autocomplete="off" placeholder="Enter Email">
        </div>
        <div class="form-group">
            <label for="contact">Update Contact Number</label>
            <input type="text" class="form-control" id="contact" autocomplete="off" placeholder="Enter Contact Number">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark">Submit</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div> 
    </div>
  </div>
</div>
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Staff</h1>


                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-dark my-3" data-toggle="modal" data-target="#addModal">
                    Add New Staff
                    </button>
                    <!-- Table -->
                    <div class="table-responsive-sm">
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Username</th>
                                <th scope="col">Password</th>
                                <th scope="col">Email</th>
                                <th scope="col">Contact Number</th>
                                <th scope="col">Operations</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <th scope="row">1</th>
                                    <td>admin</td>
                                    <td>123</td>
                                    <td>admin@gmail.com</td>
                                    <td>09123123123</td>
                                    <td>
                                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#updateModal">Update</button>
                                        <button class="btn btn-secondary">Archive</button>
                                        <button class="btn btn-danger">Delete</button>
                                    </td>
                                </tr>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>


                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

<?php 
include('includes/scripts.php');
include('includes/footer.php');
?>