<?php 
include('includes/header.php');
include('includes/navbar.php');
?>

       
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

            <?php include 'includes/topbar.php';?>
                
                <!-- Add Modal -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addModalLabel">Add News</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" autocomplete="off" placeholder="Enter Title">
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea type="text" class="form-control" id="content" autocomplete="off" placeholder="Enter Content"></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark">Submit</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div> 
    </div>
  </div>
</div>

               <!-- Edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel">Edit News</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label for="title">Edit Title</label>
            <input type="text" class="form-control" id="title" autocomplete="off" placeholder="Enter Title">
        </div>
        <div class="form-group">
            <label for="content">Edit Content</label>
            <textarea type="text" class="form-control" id="content" autocomplete="off" placeholder="Enter Content"></textarea>
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
                    <h1 class="h3 mb-4 text-gray-800">News</h1>

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-dark my-3" data-toggle="modal" data-target="#addModal">
                    Add New Post
                    </button>

                    <div class="col-lg-4">
                            <!-- Dropdown Card-->
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h5 class="m-0 font-weight-bold text-primary">Title</h5>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="settings"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-600"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                            aria-labelledby="settings">
                                            <div class="dropdown-header">Dropdown Header:</div>
                                            <a class="dropdown-item" data-toggle="modal" data-target="#editModal">Update</a>
                                            <a class="dropdown-item" href="#">Archive</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Delete</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                Lorem ipsum dolor sit amet. Sit eaque necessitatibus sit doloremque adipisci a ipsam omnis eos consequatur dignissimos 33 reprehenderit fugit. Sed beatae voluptas aut excepturi voluptatum eum dignissimos consequuntur aut inventore sint et assumenda consequatur est voluptatem deserunt ut praesentium pariatur.
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