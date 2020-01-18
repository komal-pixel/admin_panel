
<?php 

 session_start(); 
  include('includers/session_check.php');
 include ("../config.php");
 if(isset($_POST['submit'])){

      $file=$_FILES["file"]["name"];
      $temp_name=$_FILES["file"]["tmp_name"];
      $path="gallery/".$file;
      $caption=$_POST['caption'];
      $_SESSION['submit']="submit";


      move_uploaded_file($temp_name,$path);
      mysqli_query($con,"insert into gallery(image,caption)value('$file','$caption')");
 } 


      if(isset($_GET['id'])) {
        $id=$_GET['id'];
        mysqli_query($con,"DELETE FROM gallery WHERE id=$id ");
        // mysqli_query ($con,"DELETE FROM `admin` WHERE `id` = $id") ;

        header('index.php');
 }
include('Includers/header.php');
?>

        <div class="content-body">
                <div class="row">
                    <div class="col-lg-6">
                        <br>
                        <div class="card">
                            <div class="card-body">
                               <form method="post" enctype="multipart/form-data"> 
                                <input type="hidden" name="img_id" id="img_id">
                                <label>Add Image</label>
                                <input class= "form-control" type="file" name="file">
                                <label>Image Caption</label>
                                <input class= "form-control" type="text" name="caption" placeholder="caption">                         
                                <button type="submit" name= "submit" class="btn btn-info mt-2" onclick="add();">Add</button>
                                <button type= "cancel" class="btn btn-info mt-2">Cancel</button>
                   <script>
                     function add(){
                        swal('Done','good job', 'success');
                     }
                 </script>
                               </form>
                         </div>
                    </div>                        
                 </div>

                   <div class="col-lg-6">
                        <br>
                        <div class="card">
                            <div class="card-body"> <!-- class table responsive -->
                               <table class="table table-xs mb-0">
                                   <thead>
                                    <tr>
                                       <th>Image name</th>
                                       <th>Image </th>
                                       <th>Image Caption </th>
                                       <th>Delete</th>
                                    </tr>
                                   </thead>
                                   <?php 
                                  $query= mysqli_query($con,"select * from gallery");
                                   while($row=mysqli_fetch_array($query)){
                                   ?>
                                   <tbody>
                                       <tr>
                                          <td><?php echo $row['image']?></td>
                                       
                                        <td><img class="thumbnail bg-white rounded" 
                            src="gallery/<?php echo $row['image']; ?> "></td>
                             <td class="text-center"><?php echo $row['caption']?></td>
                            <td><a href="gallery.php?id=<?php echo $row['id']?>"class="text-white">
                              <button class="btn btn-warning sweet-success-cancel" onclick="trash();">Delete</button></a>
                         
                                    <?php
                                     }
                                      ?>
                                       </tr>
                                   </tbody>
                               </table>
                         </div>
                    </div>                        
                 </div>
            </div>
            <script>
               function trash(){
                 swal('',"good job",'success');
               }
           </script>     
                 <br>                 
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
         <!-- <script type='text/javascript' src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/0.4.2/sweet-alert.min.js"></script> 
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/0.4.2/sweet-alert.css">-->