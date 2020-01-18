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
               <div class="row">
                        <div class="col-lg-12 col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-center">
                                        <form class="example" method="post">
                             <input class="bg-white" type="text" placeholder="Search.." name="valueToSearch">
                            <button class="btn" type="submit" name="search" value="filter"><i class="fa fa-search"></i></button>
                            </form>      
                                    </div>       
                                </div>        
                            </div>                
                        </div>       
                    </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="active-member">
                                    <div class="table-responsive">
                                        <table id="data_table" class="table table-xs col-12 mb-0">
                                            <thead>
                                                <tr class="text-center">
                                                    <th>Id</th>
                                                    <th>Name</th>
                                                    <th>last name</th>
                                                    <th>mobile number</th>
                                                    <th>address</th>
                                                    <th>Designation</th>
                                                    <th>Salary</th>                  
                                                    <th>Activity</th>
                                                </tr>
                                            </thead>
                                            <?php
                                             include('config.php');
                          
                                //  if
                                    if(isset($_POST['search']))
                                          {
                                            // echo"in  new if";


                              $valueToSearch = $_POST['valueToSearch'];
                        // search in all table columns
                        // using concat mysqli function
                             $query = "SELECT * FROM `users` WHERE CONCAT(`id`, `name`, `lname`, `mobile`,`address`,`designation`,`salary`) LIKE '%".$valueToSearch."%'";
                             $searchResult = filterTable($query);      
                          }
                            // if end

                            else{
            //result per page is 10
                            // echo"in else";
                            $results_per_page=10;
            //fetch all record from table
                            $sql="SELECT * FROM users";
                            $result=mysqli_query($con,$sql);
            //display the number of row values
                            $num_of_rows=mysqli_num_rows($result);
            //caluculate number of pages &display number of row per page
                            $num_of_pages=ceil($num_of_rows/$results_per_page);
                    
                            if (!isset($_GET['page'])) {
                              $page = 1;
                            } else {
                              $page = $_GET['page'];
                            }
                           
                            $Previous = $page - 1;
                            $Next = $page + 1;


  // determine the sql LIMIT starting number for the results on the displaying page
$this_page_first_result = ($page-1)*$results_per_page;
// retrieve selected results from database and display them on page
$sql='SELECT * FROM users LIMIT ' . $this_page_first_result . ',' .  $results_per_page;

$searchResult=filterTable($sql);
   }  

    function filterTable($query){
        include('config.php');

        $filterResult=mysqli_query($con,$query);
        return $filterResult;

    }                                    
                    while($res=mysqli_fetch_array($searchResult)){

                                            ?>
                         <tbody>               
                         <tr class="text-center">
                              <td><?php echo $res['id']?></td>
                              <td><?php echo $res['name']?></td>
                              <td><?php echo $res['lname']?></td>
                              <td><?php echo $res['mobile']?></td>
                              <td><?php echo $res['address']?></td>
                              <td><?php echo $res['designation']?></td>
                             <td><?php echo $res['salary']?></td>
                            <td>
                             <span class="m-0 pl-3">10 sec ago</span>
                            </td>
                         </tr>
                    </div>
                 </div>

                     <?php } ?>           
<!-------------------------------------------display from database---------------------->
                                             
                                        </tbody>
                                    </table>
                                 </div>
        <ul class="pagination">
            <?php 
            if($Previous >= 1 && $Previous<=$num_of_pages)
                { ?>
                     <li class="page-item">
                        <a class="page-link" href="user-info.php?page=<?=$Previous;?>"> 
                             <span aria-hidden="true">&laquo;previous</span>
                         </a>
                    </li>
             <?php } ?>
            <?php
                   for ($page=1;$page<=$num_of_pages;$page++) 
                { ?>
                    <li class="page-item">
                        <a class="page-link" href="user-info.php?page=<?= $page; ?>">
                                  <?= $page; ?>    
                      </a>
                    </li> 

            <?php } 
            if($Next >= 1 && $Next<=$num_of_pages)
            
                {?>
                  <li class="page-item"><a class="page-link" href="user-info.php?page=<?= $Next;?>">Next &raquo;</a></li>
              <?php } ?>
       </ul>
                             </div>
                         </div>
                    </div>                        
                 </div>
            </div>
            <?php 
            include('../config.php');
            $sql=mysqli_query($con,"SELECT * FROM book_category");
            ?>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <form class="form-group example" method="post">
                                    <div class="form-group">
                                        <select class="form-control" name="bname" id="category">
                                            <option value="">Select a book</option>
                                            <?php 
                                            while ($row=mysqli_fetch_array($sql)){
                                            ?>
                                            <option value="<?php echo $row['book_id'];?>"><?php echo $row['bname'];?></option>
                                        <?php  } ?>
                                         
                                        </select>            
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" id="sub_category">
                                        </select>
                                    </div>
                              
                                    <button class="btn btn-info" type="submit" name="submit">submit</button>  
                                </form>  
                            </div>    
                        </div>
                    </div>
                    <div class="col-md-6">
                      
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
             <script>
               $(document).ready(function() {
            $('#category').on('change', function() {
            var book_id = this.value;
            $.ajax({
                url: "get_subcat.php",
                type: "POST",
                data: {
                    book_id: book_id
                },
                cache: false,
                success: function(dataResult){
                    $("#sub_category").html(dataResult);
                }
            });
    });
});
            </script>
        
       <?php include('Includers/footer.php')  ?>