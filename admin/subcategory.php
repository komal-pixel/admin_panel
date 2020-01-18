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
                <button class="btn btn-default  ml-3 mb-3"  data-toggle="modal" data-target="#myModal">Add Sub-category</button>
                <div class="container">             
                      <!-- Modal -->
                      <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog modal-md">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title">Sub-category</h4>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title"></h4>
                            </div>
                            <div class="modal-body">
                              <form class="form-group" method="post" action="subcategory-db.php">
                                <label><b>Book Name :-</b></label>
                                 <select class="form-control" name="bname" required>
                                    <?php 
                                    include('config.php');
                                    $sql=mysqli_query($con,"SELECT * FROM book_category");
                                    ?>
                                     <option value="" >choose One</option>
                                     <?php
                                     while ($row=mysqli_fetch_array($sql)) {
                                      ?>
                                     <option value="<?php echo $row['book_id']; ?>"><?php echo $row['bname']; ?></option>
                                    <?php } ?>

                                 </select>
                                    <label><b>Edition :-</b></label>
                                    <input class="form-control"  type="text" name="edition" placeholder="Enter book Edition">
                                    <label><b>Price :-</b></label>
                                   <input class="form-control"  type="text" name="price" placeholder="Enter Price">

                                   <div class="modal-footer">
                                   <button type="submit" class="btn btn-success" name="submit">Add</button>
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                                  </div>  
                              </form>
                             </div>       
                          </div>
                        </div>
                      </div>
                </div>

         <div class="container">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-light">
                            <thead>
                                <tr>
                                    <th>Book-Id</th>
                                    <th>Book Name</th>
                                    <th>Book-Edition</th>
                                    <th>Book-Price</th>
                                    <th>Actions</th>  
                                </tr>
                            </thead>
                            <tbody>
                            
                                      <?php 
                                include('config.php');
                                     $sql=mysqli_query($con,"SELECT * FROM book_subcategory");
                                 while($row=mysqli_fetch_array($sql)){
                                        $cat= $row['book_id'];
                                    $q1=mysqli_query($con,"SELECT * FROM book_category WHERE
                                     book_id='$cat'");
                                    $res=mysqli_fetch_array($q1);      
                                ?>     
                                <tr>                  
                                    <td><?php echo $row['book_id'];?></td>
                                    <td><?php echo ucfirst($res['bname']);?></td>
                                    <td><?php echo $row['edition'];?></td>
                                    <td><?php echo $row['price'];?></td>
                                    <td>
                                       <a href="edit-subcategory.php?id=<?php echo $row['id']; ?>"> <button class="btn btn-default btn-sm"><i class="fa fa-pencil"></i></button></a>
                                  <a onClick="return confirm('are you sure want to delete?');" href="delete_subcat.php?id=<?php echo $row['id']?>"><button class="btn btn-default btn-sm"><i class="fa fa-trash"></i></button> </a>
                                    <?php
                                    if($row ['status'] == 'active') {?>
                                    <a class="btn btn-sm btn-success" href="subcat_status.php?id=<?php echo $row['id'];?>&status=<?php echo $row['status']; ?>">Active</a>
                                    <?php }
                                    else{  ?>
                                    <a class="btn btn-sm btn-danger" href="subcat_status.php?id=<?php echo $row['id'];?>&status=<?php echo $row['status'];?>">Inactive</a>
                                    <?php  } ?>
                                 </td>
                                </tr>
                                     <?php  } ?>
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