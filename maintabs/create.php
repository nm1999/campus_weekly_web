<!DOCTYPE html>
<html lang="en">

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
<?php include 'header-create.php'?>
<head>
        <style>
            
            .top{
                width:100%;
                height:80px;
            }
            sup{
                border-radius:100%;
                position:absolute;
                top:8px;
                right:6px;
                margin:0px;
            }
            .top{
                width:100%;
            }
            .title{
                font-size:22px;  
                border: none;
                border-bottom: 2px solid #999; 
            }
            .title:focus{
                box-shadow: none;
            }
            .div1{
                border:1px solid lightgrey;
                
            }
            .box{
                width:100%;
                overflow:auto;
                height:200px;        
            }
        </style>
    </head>
    <!--hr on top-->
    <div class="container-fluid">
        <div class="row ">
            <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
                <div class="row align-items-center mr-2">
                    <div class="col-12">
                        <h1 style="text-align: center;">CREATE</h1>
                        <hr style="width: 100%; border: 10px solid #051e58;">
                    </div>
                </div>
            </div>
        </div>
    </div>

<!--Create new story form-->
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
                <div class="btn btn-block  font-weight-bold text-light bg-info py-2 ">
                    <h4>{{message}} <?php include'header-config.php'?></h4> 
                </div>
           
            <div class="row align-items-center m-2">
                <div class="col-xl-2 col-12"></div>
                <div class="col-xl-8 col-12">
                    <div class="card" style="box-shadow:0.5px 0.5px 2.5px 0.5px;">
                        <div class="card-body">

                            <div class="container">
                                <form action="add-post" method="post" enctype="multipart/form-data">
                                    <h2>ENGLISH</h2>
                                    <hr>

                                    <div class="row">
                                        <div class="col-md-6 mb-2">
                                            <input type="date" name="date" class="form-control">
                                        </div>
                                        <div class="col-md-6 mb-2 d-flex justify-content-between align-items-center "> 
                                            <span class="mr-2">Category</span>
                                            <select name="category" class="form-control" >
                                                <option value=""><i class="fa fa-user w3-black"></i></option>
                                                <option value="campus101"><i class="fa fa-user w3-black"></i> Campus 101 </option>
                                                <option value="interview"><i class="fa fa-user w3-black"></i> Interview </option>
                                                <option value="internship"><i class="fa fa-user w3-black"></i> Internship </option>
                                                <option value="inspiration"><i class="fa fa-user w3-black"></i> Inspiration </option>
                                                <option value="uncensored"><i class="fa fa-user w3-black"></i> Uncensored </option>
                                                <option value="noticeboard"><i class="fa fa-user w3-black"></i> NoticeBoard </option>
                                            </select>
                                        </div>
                                    </div>
                                
                                    <input type="text" name="title" class="form-control title mt-4" placeholder="Insert a title" style=""><br>
                                    <input type="text" name="user_id" value="<?php include'header-config.php'?>" style="display:none;">
                                    <div class="mb-4 d-flex justify-content-between align-items-center ">
                                        <span class="mr-2">StoryCoverPhoto</span>
                                        <input type="file" class="form-control p-1" id = "filename" name="coverPhoto" accept="image/*" />                                            
                                    </div>

                                    <div class="details">   
                                        <div class="">
                                            <textarea  name="paragraph" class="form-control" style="border:none;height:400px;" placeholder="Write your content"></textarea>
                                        </div>
                                        
                                    </div>
                                    <hr>
                                    <div class="row my-4">
                                        <div class="col ">
                                            <div class="row d-flex justify-content-around">
                                                <div >
                                                    <button class="btn btn-secondary"><i class="fa fa-eye"></i> PREVIEW</button>
                                                </div>
                                                <div >
                                                    <button class="btn btn-secondary">SAVE AS A DRAFT</button>
                                                </div>
                                            </div>
                                        </div>                                                
                                    </div>                            
                                    <div>
                                        <input type="submit" name="submit" class="btn btn-block btn-primary" value=" SAVE AND PUBLISH">
                                    </div> 
                                </form>
                            </div>                            
                        </div>
                    </div>


                </div>
                <div class="col-xl-2 col-12"></div>
            </div>
        </div>
    </div>
</div>

                        <!-- Edit Profile Photo -->
                        <!--  -->
                        <!-- end of Edit Profile Photo -->

{{#each results}}
<!--Two column section-->
<!-- <div class="container-fluid">
    <div class="row">
        <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
            <div class="row align-items-center m-2">
                <div class="col-xl-2 col-12"></div>
                <div class="col-xl-8 col-12">
                    <div class="card">
                        <div class="card-body">
                            
                            <h1 style="text-align: center; color: blue;">{{this.post_title}}</h1>
                            <div style="margin-bottom: 10px;">
                                {{!-- <img class="d-block w-100" src="images/check3.jpg" alt="First slide"> --}}
                                {{#if this.image_file}}
                                    <img src="data:image/*;base64,{{this.image_file}}"  class="d-block w-100" alt="User Profile" >
                                {{else}}
                                    <img src="images/avatarT.jpg" width="50" class="d-block w-100" alt="User Profile" >
                                {{/if}}
                                <div style="margin-top: 15px;">
                                    <div style="font-weight: bold;" class="d-flex justify-content-between align-items-center">
                                        <span style="color: blue;">
                                            <i class="fa fa-edit"></i> Story by {{this.surname}}  {{this.firstname}}
                                        </span>
                                        {{#if this.profile_photo}}
                                            <img src="data:image/*;base64,{{this.profile_photo}}"  class="rounded-circle mr-3" alt="User Profile" style="height: 46px; width: 50px;">
                                        {{else}}
                                            <img src="images/avatarT.jpg" width="50" class="rounded-circle mr-3" alt="User Profile" style="height: 46px; width: 50px;">
                                        {{/if}}
                                    </div>
                                </div>
                            </div>
                            <div class="row padding ml-1" style="display: flex; flex-direction: column;">
                                <p style="white-space: pre-line;">
                                    {{this.paragraph}}
                                </p>
                                {{!-- <p>
                                    {{this.paragraph}}
                                </p> --}}
                                
                                            
                            </div>              

                     
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-12"></div>
            </div>
        </div>
    </div>
</div> -->
{{/each}}

    <!--User Profile-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
                <div class="card" style="margin-bottom: 10px;">
                    {{#each rows}}
                    <div class="row padding card-body align-items-center">
                        <div class="col-lg-4">
                            {{#if this.profile_photo}}
                                <img class="img-fluid card-img" src="data:image/*;base64,{{this.profile_photo}}" alt="User Profile" style="">
                            {{else}}
                                <img class="img-fluid card-img" src="images/avatarT.jpg" alt="User Profile" style="">

                            {{/if}}
                        </div>
                        <div class="col-md-12 col-lg-8">
                            <h4 class="card-title">USER PROFILE</h4>
                            <p class="card-text d-flex justify-content-between">
                                <span style="font-weight: bold;">
                                    <i class="fa fa-user"></i> NAME: 
                                </span>
                                <span>
                                    {{this.surname}}  {{this.firstname}}
                                </span>
                            </p>
                            <p class="card-text d-flex justify-content-between">
                                <span style="font-weight: bold;">
                                    <i class="fa fa-user"></i> SEX: 
                                </span>
                                <span>{{this.sex}} </span>
                            </p>
                            <p class="card-text d-flex justify-content-between">
                                <span style="font-weight: bold;">
                                    <i class="fa fa-user"></i> Date of Birth: 
                                </span>
                                <span>{{this.date_of_birth}}  </span>
                            </p>
                            <p class="card-text d-flex justify-content-between">
                                <span style="font-weight: bold;">
                                    <i class="fa fa-user"></i> Email: 
                                </span>
                                <span>{{this.email}}  </span>
                            </p>
                            <p class="card-text d-flex justify-content-between">
                                <span style="font-weight: bold;">
                                    <i class="fa fa-user"></i> Phone number: 
                                </span>
                                <span>{{this.phone_number}}  </span>
                            </p>
                            <p class="card-text d-flex justify-content-between">
                                <span style="font-weight: bold;">
                                    <i class="fa fa-user"></i> Username: 
                                </span>
                                <span>{{this.username}}  </span>
                            </p>
                        </div>
                    </div>
                    {{/each}}
                </div>

            </div>
        </div>
    </div>

    <!-- activities / Quick post -->
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
                    <div class="row align-items-center mb-5">
                        <div class="col-xl-7">
                            <h4 class="text-muted mb-4">Upcoming Improvements</h4>
                            <div id="accordion">
                                <div class="card">
                                    <div class="card-header">
                                        <button class="btn btn-block bg-secondary text-light text-left" data-toggle="collapse" data-target="#collapseOne">
                                            <img src="./images/20.jpg" width="50" class="mr-3 rounded">
                                            John posted a new comment
                                        </button>
                                    </div>
                                    <div class="collapse show" id="collapseOne" data-parent="#accordion">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi ad fugit at quaerat quam tempora laudantium nulla facere culpa magni, neque ut impedit, iusto quis!
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <button class="btn btn-block bg-secondary text-light text-left" data-toggle="collapse" data-target="#collapseTwo">
                                            <img src="./images/36.jpg" width="50" class="mr-3 rounded">
                                            Mark posted a new comment
                                        </button>
                                    </div>
                                    <div class="collapse" id="collapseTwo" data-parent="#accordion">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi ad fugit at quaerat quam tempora laudantium nulla facere culpa magni, neque ut impedit, iusto quis!
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <button class="btn btn-block bg-secondary text-light text-left" data-toggle="collapse" data-target="#collapseThree">
                                            <img src="./images/52.jpg" width="50" class="mr-3 rounded">
                                            Monica posted a new comment
                                        </button>
                                    </div>
                                    <div class="collapse" id="collapseThree" data-parent="#accordion">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi ad fugit at quaerat quam tempora laudantium nulla facere culpa magni, neque ut impedit, iusto quis!
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <button class="btn btn-block bg-secondary text-light text-left" data-toggle="collapse" data-target="#collapseFour">
                                            <img src="./images/71.jpg" width="50" class="mr-3 rounded">
                                            Vivian posted a new comment
                                        </button>
                                    </div>
                                    <div class="collapse" id="collapseFour" data-parent="#accordion">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi ad fugit at quaerat quam tempora laudantium nulla facere culpa magni, neque ut impedit, iusto quis!
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <button class="btn btn-block bg-secondary text-light text-left" data-toggle="collapse" data-target="#collapseFive">
                                            <img src="./images/D16.jpg" width="50" class="mr-3 rounded">
                                            Nick posted a new comment
                                        </button>
                                    </div>
                                    <div class="collapse" id="collapseFive" data-parent="#accordion">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi ad fugit at quaerat quam tempora laudantium nulla facere culpa magni, neque ut impedit, iusto quis!
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <button class="btn btn-block bg-secondary text-light text-left" data-toggle="collapse" data-target="#collapseSix">
                                            <img src="./images/D10.jpg" width="50" class="mr-3 rounded">
                                            Ann posted a new comment
                                        </button>
                                    </div>
                                    <div class="collapse" id="collapseSix" data-parent="#accordion">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi ad fugit at quaerat quam tempora laudantium nulla facere culpa magni, neque ut impedit, iusto quis!
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 mt-5">
                            <div class="card rounded">
                                <div class="card-body">
                                    <h5 class="text-muted text-center mb-4">Quick Status Post</h5>
                                    <ul class="list-inline text-center py-3">
                                        <li class="list-inline-item mr-4">
                                            <a href="#">
                                                <i class="fa fa-pencil text-success"></i>
                                                <span class="h6 text-muted">Status</span>
                                            </a>
                                        </li>
                                        <li class="list-inline-item mr-4">
                                            <a href="#">
                                                <i class="fa fa-camera text-info"></i>
                                                <span class="h6 text-muted">Photo</span>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <i class="fa fa-map-marker text-primary"></i>
                                                <span class="h6 text-muted">Check-in</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <form>
                                        <div class="form-group">
                                            <input type="text" class="form-control py-2 mb-3" placeholder="What's Your Status...">
                                            <button type="button" class="btn btn-block text-uppercase font-weight-bold text-light bg-info py-2 mb-5">Submit Post</button>
                                        </div>
                                    </form>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="card bg-light">
                                                <i class="fa fa-calendar fa-5x text-warning d-block m-auto py-3"></i>
                                                <div class="card-body">
                                                    <p class="card-text text-center font-weight-bold text-uppercase">Mon, may 26</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="card bg-light">
                                                <i class="fa fa-clock-o fa-5x text-danger d-block m-auto py-3"></i>
                                                <div class="card-body">
                                                    <p class="card-text text-center font-weight-bold text-uppercase">3:50 am</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of activities / Quick post -->

<?php include 'footer.php'?>