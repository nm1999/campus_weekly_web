  
  <?php include 'header.php';
        include 'header-config.php';
  ?>
  
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="public, max-age=300, s-maxage=600">
    <meta name="google-site-verification" content="B8PV6ghxu6KjVV0ny-1zjnRAbsB2XO5TjL8Fwd-h_u8" />
    <meta name="keywords" content="CampusWeekly, campusweekly, campus weekly, campus news, campus weekly news">
    <meta name="keywords"
        content="campus weekly lira university, lira, lira university, latest news, lukard, lukenge, campus news lira university">
    <title>Campus Weekly</title>
    <link rel="shortcut icon" href="images/campusweeklyfavicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="fonts/font-awesome.min.css">
    <link rel="stylesheet" href="../styled.css">
    
</head>
  <!--hr on top-->
   <div class="container-fluid">
        <div class="row ">
            <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
                <div class="row align-items-center mr-2">
                    <div class="col-12">
                        <h1 style="text-align: center;">USER ACCOUNT</h1>
                        <hr style="width: 100%; border: 10px solid #051e58;">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- cards -->
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
                            <div class="btn btn-block text-uppercase font-weight-bold text-light bg-info py-2 ">
                                <h6><?php include 'update_user_records.php'?></h6> 
                            </div>                     
                    <div class="row  mb-5">
                        <!-- Update Profile -->
                        <div class="col-xl-3 col-sm-6 p-2">
                            <form action="#" method="post">       
                                <div class="card card-common">
                                    <div class="card-header">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span>Update Profile</span>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div >
                                            <div class="d-flex justify-content-between align-items-center">
                                                <span class="mr-2 pb-2" style="font-weight: bold;color: gray;">SEX:</span>
                                                <select name="sex" class="form-control py-2 mb-2" >
                                                    <option value=""></option>
                                                    <option value="Female">Female</option>
                                                    <option value="Male">Male</option>
                                                </select>                                          

                                            </div>
                                            <input type="date" name="date" class="form-control py-2 mb-2" placeholder="Date of Birth">                                           
                                            <input type="text" name="phoneNumber" class="form-control py-2 " placeholder="Phone Number">   
                                            <input type="text" name ="user_id" value = "<?php echo $row['user_id']?>" style = "display:none">                                        
                                        </div>
                                    </div>
                                    <div class="card-footer text-secondary">
                                        <input type="submit" class="btn btn-block text-uppercase font-weight-bold text-light bg-info py-2 ">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- end of Update Profile -->

                        <!-- Edit Profile Photo -->
                        <div class="col-xl-3 col-sm-6 p-2">
                            <form action="#" method="post" enctype="multipart/form-data">       
                                <div class="card card-common">
                                    <div class="card-header">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span>Edit Profile Photo</span>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center ">
                                            <span>Current Photo</span>                                              
                                             <img class="rounded-circle mr-3 imgPreview1"  style="height: 46px; width: 50px; background-color: rgb(156, 156, 156);;">
                                          <input type="text" name="user_id" value = "<?php echo $row['user_id']?>" style="display:none" >
                                        </div>
                                        <div class="mt-4 pt-3">
                                            <input type="file" class="form-control p-1 mt-2" name="sampleFile" id="myFileInput" accept="image/*" />                                            
                                        </div>
                                    </div>
                                    <div class="card-footer text-secondary">
                                        <input type="submit" name="update_photo" class="btn btn-block text-uppercase font-weight-bold text-light bg-info py-2 ">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- end of Edit Profile Photo -->

                        <!-- Edit Password -->
                        <div class="col-xl-3 col-sm-6 p-2">
                            <form action="#" method="post" >       
                                <div class="card card-common">
                                    <div class="card-header">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span>Edit Password</span>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div >
                                            <input type="text" name="user_id" value="<?php echo $row['user_id']?>" style="display:none">
                                            <input type="password" name="currentPassword" class="form-control py-2 mb-2" placeholder="Current Password">                                           
                                            <input type="password" name="newPassword" class="form-control py-2 mb-2" placeholder="New Password">                                           
                                            <input type="password" name="confirmPassword" class="form-control py-2 " placeholder="Confirm New Password">                                           
                                        </div>
                                    </div>
                                    <div class="card-footer text-secondary">
                                        <input type="submit" class="btn btn-block text-uppercase font-weight-bold text-light bg-info py-2 ">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- end of Edit Password -->

                        <!-- Edit Name -->
                        <div class="col-xl-3 col-sm-6 p-2">
                            <form action="#" method="post">       
                                <div class="card card-common">
                                    <div class="card-header">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span>Edit Name</span>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div >
                                            <input type="text" name="user_id" value="<?php echo $row['user_id']?>" style ="display:none" >
                                            <input type="text" name="surname" class="form-control py-2 mb-2" placeholder="Surname">                                           
                                            <input type="text" name="firstname" class="form-control py-2 mb-2" placeholder="First Name">                                           
                                            <input type="text" name="username" class="form-control py-2 " placeholder="Username">                                           
                                        </div>
                                    </div>
                                    <div class="card-footer text-secondary">
                                        <input type="submit" class="btn btn-block text-uppercase font-weight-bold text-light bg-info py-2 ">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- end of Edit Name -->

                      
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of cards -->
    <?php include 'header-config.php';?>
    <!--User Profile-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
                <div class="card" style="margin-bottom: 10px;">
                 
                    <div class="row padding card-body align-items-center">
                        <div class="col-lg-4">
                           
                                <img class="img-fluid card-img" src="data:image/*;base64,{{this.profile_photo}}" alt="User Profile" style="">
                           
                            <img class="imgPreview2" style="height: 300px; width: 100%; background-color: rgb(156, 156, 156);">
                        </div>
                        <div class="col-md-12 col-lg-8">
                    
                            <h4 class="card-title">USER PROFILE</h4>
                            <p class="card-text d-flex justify-content-between">
                                <span style="font-weight: bold;">
                                    <i class="fa fa-user"></i> NAME: 
                                </span>
                                <span>
                                    <?php echo $row['surname']?>  <?php echo $row['firstname']?> 
                                </span>
                            </p>
                            <p class="card-text d-flex justify-content-between">
                                <span style="font-weight: bold;">
                                    <i class="fa fa-user"></i> SEX: 
                                </span>
                                <span><?php echo $row['sex']?> </span>
                            </p>
                            <p class="card-text d-flex justify-content-between">
                                <span style="font-weight: bold;">
                                    <i class="fa fa-user"></i> Date of Birth: 
                                </span>
                                <span><?php echo $row['date_of_birth']?>  </span>
                            </p>
                            <p class="card-text d-flex justify-content-between">
                                <span style="font-weight: bold;">
                                    <i class="fa fa-user"></i> Email: 
                                </span>
                                <span><?php echo $row['email']?>  </span>
                            </p>
                            <p class="card-text d-flex justify-content-between">
                                <span style="font-weight: bold;">
                                    <i class="fa fa-user"></i> Phone number: 
                                </span>
                                <span><?php echo $row['phone_number']?> </span>
                            </p>
                            <p class="card-text d-flex justify-content-between">
                                <span style="font-weight: bold;">
                                    <i class="fa fa-user"></i> Username: 
                                </span>
                                <span><?php echo $row['username']?> </span>
                            </p>
                        </div>
                    </div>
            
                </div>

            </div>
        </div>
    </div>





    
     