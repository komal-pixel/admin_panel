<?php 
session_start();
//if(empty $_SESSION['email']) or
if (!isset ($_SESSION ['login'])) {
        header ("location:page-login.php" );
}
else{   //end at the end of this page
    time();
    if(time() > $_SESSION['expire']){
        session_destroy();
        // header('location:page-login.php');
        echo"your session hase been expired ! <a href='page-login.php'>log in</a>";
        } 

    else{   //end at the end of this page
include('includers/header.php');
?>
        <!--**********************************
            Content body start
        ***********************************-->        
        <div class="content-body">
            <div class="container-fluid mt-3">
                  <div class="alert alert-success ml-5" role="alert" style="width:50%;">
                      <h5 class="text-center">Welcome <?php echo $_SESSION['login']; ?></h5>
                  </div>
    
                <button class="btn" onclick="myfun();">Add Admin</button>

             <?php 
             if(isset($_SESSION['success']) && $_SESSION['success'] != '')
             {
                 echo '<h2>'.$_SESSION['success'].'</h2>'; 
                 unset($_SESSION['success']);
             }

             //need when password and confirmed password used.
             // if(isset($_SESSION['status']) && $_SESSION['status'] != '')
             // {
             //     echo '<h2>'.$_SESSION['status'].'</h2>'; 
             //     unset($_SESSION['status']);
             // }

             ?>
                <script>
                 function myfun() {
                      var x = document.getElementById("myDIV");
                      if (x.style.display === "none") {
                        x.style.display = "block";
                       }
                       // else {
                      //   x.style.display = "none";
                      // }
                    }
                </script>

            <div id="myDIV" class="row" style="display:none;">
                <div class="col-lg-5 col-sm-6">
                    <div class="card-body">
                        <form action="page-register-db.php" method="post">                
                            <br>
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Name" required>
                                
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Email" required>
                             </div>
                             <div class="form-group">
                                <input type="password" name="password" class="form-control" placeholder="password" required>
                             </div>

                             <button class="btn" type="submit" name="submit">ADD</button>
                             <button class="btn" onclick="myfunct();">Cancel</button>
                        </form>
                        <script>

                       function myfunct() {
                      var x = document.getElementById("myDIV");
                      if (x.style.display === "none") {
                        x.style.display = "block";
                       }
                       else {
                        x.style.display = "none";
                      }

                    }
                        </script>
                    </div>
                </div>
                
            </div>



            <!--     <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-1">
                            <div class="card-body">
                                <h3 class="card-title text-white">Products Sold</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">4565</h2>
                                    <p class="text-white mb-0">Jan - March 2019</p>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-shopping-cart"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-2">
                            <div class="card-body">
                                <h3 class="card-title text-white">Net Profit</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">$ 8541</h2>
                                    <p class="text-white mb-0">Jan - March 2019</p>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-money"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-3">
                            <div class="card-body">
                                <h3 class="card-title text-white">New Customers</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">4565</h2>
                                    <p class="text-white mb-0">Jan - March 2019</p>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-users"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-4">
                            <div class="card-body">
                                <h3 class="card-title text-white">Customer Satisfaction</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">99%</h2>
                                    <p class="text-white mb-0">Jan - March 2019</p>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-heart"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
 -->
                <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Order Summary</h4>
                                    <div id="morris-bar-chart"></div>
                                </div>
                            </div>
                            
                        </div>    
                        <div class="col-lg-3 col-md-6">
                            <div class="card card-widget">
                                <div class="card-body">
                                    <h5 class="text-muted">Order Overview </h5>
                                    <h2 class="mt-4">5680</h2>
                                    <span>Total Revenue</span>
                                    <div class="mt-4">
                                        <h4>30</h4>
                                        <h6>Online Order <span class="pull-right">30%</span></h6>
                                        <div class="progress mb-3" style="height: 7px">
                                            <div class="progress-bar bg-primary" style="width: 30%;" role="progressbar"><span class="sr-only">30% Order</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <h4>50</h4>
                                        <h6 class="m-t-10 text-muted">Offline Order <span class="pull-right">50%</span></h6>
                                        <div class="progress mb-3" style="height: 7px">
                                            <div class="progress-bar bg-success" style="width: 50%;" role="progressbar"><span class="sr-only">50% Order</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <h4>20</h4>
                                        <h6 class="m-t-10 text-muted">Cash On Develery <span class="pull-right">20%</span></h6>
                                        <div class="progress mb-3" style="height: 7px">
                                            <div class="progress-bar bg-warning" style="width: 20%;" role="progressbar"><span class="sr-only">20% Order</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body px-0">
                                    <h4 class="card-title px-4 mb-3">To do</h4>
                                    <div class="todo-list">
                                        <div class="tdl-holder">
                                            <div class="tdl-content">
                                                <ul id="todo_list">
                                                    <li><label><input type="checkbox"><i></i><span>Get up</span><a href='#' class="ti-trash"></a></label></li>
                                                    <li><label><input type="checkbox" checked><i></i><span>Stand up</span><a href='#' class="ti-trash"></a></label></li>
                                                    <li><label><input type="checkbox"><i></i><span>Don't give up the fight.</span><a href='#' class="ti-trash"></a></label></li>
                                                    <li><label><input type="checkbox" checked><i></i><span>Do something else</span><a href='#' class="ti-trash"></a></label></li>
                                                </ul>
                                            </div>
                                            <div class="px-4">
                                                <input type="text" class="tdl-new form-control" placeholder="Write and Enter...">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Admin Table -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="active-member">
                                    <div class="table-responsive">
                                        <table class="table table-xs mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Sr. No.</th>
                                                    <th>Admin Name</th>
                                                    <th>Email</th>
                                                    <th>Delete</th>
                                                    <th>Edit</th>
                                                    <th>Activity</th>
                                                </tr>
                                            </thead>
                                            <?php
                                            
                                            include ("../config.php");
                                            $q="SELECT * FROM ADMIN"; 
                                            $query=mysqli_query($con,$q);
                                            while($res=mysqli_fetch_array($query)){
                                            ?>
                                            <tbody>
                                              
                                                <tr>
                                                    <td><?php echo $res['id'];?></td>
                                                    <td><?php echo $res['name'];?></td>
                                                    <td><?php echo $res['email'];?></td>
                                                    <td>                   
                                                     <button class="btn btn-warning"  data-toggle="modal" data-target="#confirmModal<?php echo $res['id']?>" class="text-white">Delete</button>
                                                    </td>
                                                    <td> 
                                                    <button class="btn btn-warnin"><a href="adminupdate.php?id=<?php echo $res['id']?>" class="text-white">Update</button></td>
                                                    <td>
                                                    <span class="m-0 pl-3">
                                                     <?php  //echo  $t=strtotime(time_ago(date('Y-m-d h:i:sa')));
                                                       // $dates=strtotime($res['date'])-$t;
                                                      //echo date('Y/m/d H:i:s', $dates);
                                                     date_default_timezone_set('Asia/Calcutta');
                                                      $dates=time()- strtotime($res['date']);
                                                          $seconds=$dates;
                                                          $minutes=round($dates /60);
                                                          $hours=round($seconds/3600);
                                                          $days=round($seconds /86400);
                                                          $weeks=round($seconds/604800);
                                                          $months=round($seconds/2629440);
                                                          $years=round($seconds/31553280);

                                                  if($seconds<=60){
                                                    echo "just now";
                                                  }
                                                  elseif($minutes<=60){
                                                            if($minutes<=1){
                                                            echo "1 minute ago";
                                                         }
                                                          else{
                                                            echo "$minutes minute ago";
                                                            }
                                                         }
                                                        elseif($hours<=24){
                                                            if($hours<=1){
                                                            echo "1 hour ago";
                                                            }
                                                            else{
                                                                echo "$hours hour ago";
                                                              }
                                                            }
                                                            elseif($days <=7){
                                                                if($days <=1){
                                                                    echo "1 Day ago";
                                                                }
                                                                else{
                                                                    echo "$days day ago";
                                                                    }
                                                                }
                                                             elseif($weeks<=4.3){
                                                                if($weeks==1){
                                                                    echo "1 week ago";
                                                                }
                                                                else{
                                                                    echo "$weeks week ago";
                                                                    }
                                                                }
                                                                elseif($months<=12){
                                                                    if($months<=1){
                                                                     
                                                                        echo "1 month ago";
                                                                    }
                                                                    else{
                                                                        echo "$months month ago";
                                                                        }
                                                                    }
                                                                    elseif($years==1){
                                                                        echo "1 year ago";
                                                                    }
                                                                        else{
                                                                            echo "$years year ago";
                                                                        }
                                                         ?>                                           
                                                     </span>
                                                 </td>
                                                  </tr>
                                             <!-- Modal -->
                            <div class="modal fade" id="confirmModal<?php echo $res['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                  <p>Are you sure want to delete <?php echo $res['name'];?> ?</p>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <a class="text-white" href="admindelete.php?id=<?php echo $res['id']?>"><button type="button" class="btn btn-danger" style="background-color: red;">Delete</button></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                                                <?php } ?>
                                             

<!-------------------------------------------display from database---------------------->
                                             
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>                        
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-sm-6 col-xxl-6">

                        <div class="card">
                            <div class="chart-wrapper mb-4">
                                <div class="px-4 pt-4 d-flex justify-content-between">
                                    <div>
                                        <h4>Sales Activities</h4>
                                        <p>Last 6 Month</p>
                                    </div>
                                    <div>
                                        <span><i class="fa fa-caret-up text-success"></i></span>
                                        <h4 class="d-inline-block text-success">720</h4>
                                        <p class=" text-danger">+120.5(5.0%)</p>
                                    </div>
                                </div>
                                <div>
                                        <canvas id="chart_widget_3"></canvas>
                                </div>
                            </div>
                            <div class="card-body border-top pt-4">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <ul>
                                            <li>5% Negative Feedback</li>
                                            <li>95% Positive Feedback</li>
                                        </ul>
                                        <div>
                                            <h5>Customer Feedback</h5>
                                            <h3>385749</h3>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div id="chart_widget_3_1"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-sm-6 col-xxl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Activity</h4>
                                <div id="activity">
                                    <div class="media border-bottom-1 pt-3 pb-3">
                                        <img width="35" src="./images/avatar/1.jpg" class="mr-3 rounded-circle">
                                        <div class="media-body">
                                            <h5>Received New Order</h5>
                                            <p class="mb-0">I shared this on my fb wall a few months back,</p>
                                        </div><span class="text-muted ">April 24, 2018</span>
                                    </div>
                                    <div class="media border-bottom-1 pt-3 pb-3">
                                        <img width="35" src="./images/avatar/2.jpg" class="mr-3 rounded-circle">
                                        <div class="media-body">
                                            <h5>iPhone develered</h5>
                                            <p class="mb-0">I shared this on my fb wall a few months back,</p>
                                        </div><span class="text-muted ">April 24, 2018</span>
                                    </div>
                                    <div class="media border-bottom-1 pt-3 pb-3">
                                        <img width="35" src="./images/avatar/2.jpg" class="mr-3 rounded-circle">
                                        <div class="media-body">
                                            <h5>3 Order Pending</h5>
                                            <p class="mb-0">I shared this on my fb wall a few months back,</p>
                                        </div><span class="text-muted ">April 24, 2018</span>
                                    </div>
                                    <div class="media border-bottom-1 pt-3 pb-3">
                                        <img width="35" src="./images/avatar/2.jpg" class="mr-3 rounded-circle">
                                        <div class="media-body">
                                            <h5>Join new Manager</h5>
                                            <p class="mb-0">I shared this on my fb wall a few months back,</p>
                                        </div><span class="text-muted ">April 24, 2018</span>
                                    </div>
                                    <div class="media border-bottom-1 pt-3 pb-3">
                                        <img width="35" src="./images/avatar/2.jpg" class="mr-3 rounded-circle">
                                        <div class="media-body">
                                            <h5>Branch open 5 min Late</h5>
                                            <p class="mb-0">I shared this on my fb wall a few months back,</p>
                                        </div><span class="text-muted ">April 24, 2018</span>
                                    </div>
                                    <div class="media border-bottom-1 pt-3 pb-3">
                                        <img width="35" src="./images/avatar/2.jpg" class="mr-3 rounded-circle">
                                        <div class="media-body">
                                            <h5>New support ticket received</h5>
                                            <p class="mb-0">I shared this on my fb wall a few months back,</p>
                                        </div><span class="text-muted ">April 24, 2018</span>
                                    </div>
                                    <div class="media pt-3 pb-3">
                                        <img width="35" src="./images/avatar/3.jpg" class="mr-3 rounded-circle">
                                        <div class="media-body">
                                            <h5>Facebook Post 30 Comments</h5>
                                            <p class="mb-0">I shared this on my fb wall a few months back,</p>
                                        </div><span class="text-muted ">April 24, 2018</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12 col-sm-12 col-xxl-12">
                        <div class="card">
                            <div class="card-body">
                                    <h4 class="card-title mb-0">Store Location</h4>
                                <div id="world-map" style="height: 470px;"></div>
                            </div>        
                        </div>
                    </div>
                </div>

                

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
      
       <?php include('includers/footer.php')  ?>
          <?php }
    }?> <!-- code end for session expire else block -->