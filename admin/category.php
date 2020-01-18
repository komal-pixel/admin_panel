<?php 

 session_start(); 
 include('includers/session_check.php');

include('Includers/header.php');

?>          
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <br>
           
                <button class="btn btn-info  ml-3 mb-3"  data-toggle="modal" data-target="#myModal">Add category</button>
                <div class="container">                     
                      <!-- Modal -->
                      <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog modal-md">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title">Add category</h4>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title"></h4>
                            </div>
                            <div class="modal-body">
                              <form class="form-group" method="post" action="category-db.php">
                                <div class="form-group">
                                    <label><b>Book Name :-</b></label>
                                    <input class="form-control"  type="text" name="bname" placeholder="Enter book name">
                                </div>
                                <div class="form-group">
                                    <label><b>Author Name :-</b></label>
                                    <input class="form-control"  type="text" name="author" placeholder="Enter author Name">
                                </div>                                 
                             
                            </div>
                            <div class="modal-footer">
                             <button type="submit" class="btn btn-success" name="save">save</button>
                              <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                            </div>
                             </form>
                          </div>
                        </div>
                      </div>
                </div>
                
                <div class="container">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <table class="table table-light table-hover">
                                    <thead>
                                        <tr>
                                            <th>Book-id</th>
                                            <th>Book Name</th>      
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        include('config.php');
                                        $sql=mysqli_query($con,"SELECT * from book_category");

                                        while ($row=mysqli_fetch_array($sql)) {
                                        ?>
                                            <tr>
                                                <td><?php echo $row['book_id'];?></td>
                                                <td><?php echo ucfirst($row['bname']);?></td> 
                                                 <td> 
                                      <a href="category-edit.php?book_id=<?php echo $row['book_id'];?>">  <button class="btn btn-info"><i class="fa fa-pencil"></button></i>
                                      </a>
                                     <button class="btn btn-danger" data-toggle="modal" data-target="#confirmModal<?php echo $row['book_id'];?>"><i class="fa fa-trash"></button></i>
                                    <?php 
                                    if($row['status'] == 'Active'){
                                    ?>

                                  <a class="btn btn-md btn-success" href="category_update.php?book_id=<?php echo $row['book_id']?>&status=<?php echo $row['status']; ?>">Active</a>
                               <?php  }
                               else{ ?>
                                <a class="btn btn-danger" href="category_update.php?book_id=<?php echo $row['book_id'];?>&status=<?php echo $row['status'];?>">Inactive</a>


                             <?php       }  ?>
                                                </td>
                                            </tr>


    <div class="container">
     <div class="modal fade" id="confirmModal<?php echo $row['book_id'];?>" role="dialog">
     <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <p>Are You Sure Want To Delete <?php  echo $row['bname'];?> Book? </p>
        </div>
        <div class="modal-footer">
        <a href="category-delete.php?book_id=<?php echo $row['book_id'];?>"><button type="button" class="btn btn-danger">Delete</button></a>    
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
                                             <?php   } ?>
                                    </tbody>                                    
                                </table>                              
                            </div>                           
                        </div>                       
                    </div>                   
                </div>


<!-------------------------Social Media form------------------->
                
                <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="social-graph-wrapper widget-facebook">
                                    <span class="s-icon"><i class="fa fa-facebook"></i></span>
                                </div>
                                <div class="row">
                                    <div class="col-6 border-right">
                                        <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                                            <h4 class="m-1">89k</h4>
                                            <p class="m-0">Friends</p>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                                            <h4 class="m-1">119k</h4>
                                            <p class="m-0">Followers</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="social-graph-wrapper widget-linkedin">
                                    <span class="s-icon"><i class="fa fa-linkedin"></i></span>
                                </div>
                                <div class="row">
                                    <div class="col-6 border-right">
                                        <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                                            <h4 class="m-1">89k</h4>
                                            <p class="m-0">Friends</p>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                                            <h4 class="m-1">119k</h4>
                                            <p class="m-0">Followers</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="social-graph-wrapper widget-googleplus">
                                    <span class="s-icon"><i class="fa fa-google-plus"></i></span>
                                </div>
                                <div class="row">
                                    <div class="col-6 border-right">
                                        <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                                            <h4 class="m-1">89k</h4>
                                            <p class="m-0">Friends</p>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                                            <h4 class="m-1">119k</h4>
                                            <p class="m-0">Followers</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="social-graph-wrapper widget-twitter">
                                    <span class="s-icon"><i class="fa fa-twitter"></i></span>
                                </div>
                                <div class="row">
                                    <div class="col-6 border-right">
                                        <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                                            <h4 class="m-1">89k</h4>
                                            <p class="m-0">Friends</p>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                                            <h4 class="m-1">119k</h4>
                                            <p class="m-0">Followers</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <!-- #/ container -->
        </div>

        <!--**********************************
            Content body end
        ***********************************-->
        
        
       <?php include('Includers/footer.php')  ?>