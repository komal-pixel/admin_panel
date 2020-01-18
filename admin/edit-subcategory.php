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
                <button class="btn btn-default  ml-3 mb-3"  data-toggle="modal" data-target="#myModal">Add category</button>
                <div class="container">             
                      <!-- Modal -->
                      <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog modal-md">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title">Add Sub-category</h4>
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
                                   <input class="form-control"  type="text" name="price" placeholder="Enter author Price">

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
                                if(isset($_GET['id'])){
                                    $id=$_GET['id'];
                                    $sql=mysqli_query($con,"SELECT * FROM book_subcategory WHERE id='$id'");
                                 while($row=mysqli_fetch_array($sql)){
                                    $cat= $row['book_id'];
                                    $q1=mysqli_query($con,"SELECT * FROM book_category WHERE
                                     book_id='$cat'");
                                    $res=mysqli_fetch_array($q1);      
                                ?>     
                                <tr> 
                                <form action="" method="post">                 
                                    <td><input class="form-control" type="text" name="book_id" value="<?php echo $row['book_id'];?>"></td>
                                    <td><input class="form-control" type="" name="bname" value="<?php echo $res['bname'];?>"></td>
                                    <td><input class="form-control" type="" name="edition" value="<?php echo $row['edition'];?>"></td>
                                    <td> <input class="form-control" type="" name="price" value="<?php echo $row['price'];?>"></td>
                                    <td>
                                      
                                 <button class="btn btn-default btn-sm" type="submit" name="update">Update</button>
                                   </form>
                               <?php } }
                               if(isset($_POST['update'])){
                                $id=$_GET['id'];
                                $book_id=$_POST['book_id'];
                                $bname=$_POST['bname'];
                                $edition=$_POST['edition'];
                                $price=$_POST['price'];
                                    $q1=mysqli_query($con,"UPDATE book_category SET bname='$bname' WHERE book_id='$book_id'"); //for book name update from other table
                                    $sql=mysqli_query($con,"UPDATE book_subcategory SET book_id='$book_id', edition='$edition',price='$price' WHERE id=$id") or die(mysqli_error($con));
                                if($sql){
                                echo '<script>alert("Data Updated Successfully");
                                window.location="subcategory.php";</script>';
                                }
                               }



                               ?> 
                        </table>
                    </div>
                    
                </div>
                
            </div>
             
         </div>

<!-------------------------Social Media form------------------->
                
             
            </div>
            <!-- #/ container -->
        </div>

        <!--**********************************
            Content body end
        ***********************************-->
        
        
       <?php include('Includers/footer.php')  ?>