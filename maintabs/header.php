    
    <head>
        <style>
            .nav-2{
                display: none;
            }
            .logoCW{
                display: none;
            }
            .nav-links {
            display: flex;
            justify-content: space-around;
            width: 30%;
            }

            .nav-links li {
            list-style: none;
            }

            .nav-links a {
            color: rgb(226, 226, 226);
            text-decoration: none;
            letter-spacing: 3px;
            font-weight: bold;
            font-size: 14px;
            }

            

            @media screen and (max-width: 768px) {
                body {
                    overflow-x: hidden;
                }
                .nav-2{
                    display: flex;
                }
                .logoCW{
                    display: block;
                }
                .nav-links {
                    position: absolute;
                    right: 0px;
                    height: 98vh;
                    top: 12vh;
                    padding: 10px;
                    background-color: #051e58;
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    width: 250px;
                    transform: translateX(100%);
                    transition: transform 0.5s ease-in;
                }
                .nav-links li {
                    opacity: 0;
                }
                .burger {
                    display: block;
                }
            }

            .nav-active {
            transform: translateX(0%);
            }

            @keyframes navLinkFade {
            from {
                opacity: 0;
                transform: translateX(50px);
            }
            to {
                opacity: 1;
                transform: translateX(0px);
            }
            }

            .toggle .line1 {
            transform: rotate(-45deg) translate(-5px, 6px);
            }

            .toggle .line2 {
            opacity: 0;
            }

            .toggle .line3 {
            transform: rotate(45deg) translate(-5px, -6px);
            }

        </style>
    </head>
 <?php include 'header-config.php'?>
    <!-- navbar -->
    <nav class="navbar navbar-expand-md navbar-light">
        <a class="navbar-brand logoCW" href="/feed">
            <img src="../images/white2.jpg" alt="logo"
                style=" height: 80px; width: 100px; background-color: rgb(255, 255, 254);">
        </a>
        
        <div class="">
            <div class="container-fluid">
                <div class="row">
                    <!-- sidebar -->
                    
                    <div class="col-xl-2 col-lg-3 col-md-4 sidebar fixed-top">
                        <a href="/feed" class="navbar-brand text-white d-block mx-auto text-center py-3 mb-4 bottom-border">CampusWeekly</a>
                        
                        <div class="bottom-border pb-3 d-flex align-items-center">
                            
                                <!-- <img src="data:image/*;base64,{{this.profile_photo}}"  class="rounded-circle mr-3" alt="User Profile" style="height: 46px; width: 50px;"> -->
                         
                                <!-- <img src="../images/avatarT.jpg" width="50" class="rounded-circle mr-3" alt="User Profile" style="height: 46px; width: 50px;"> -->
                            
                            <img class="rounded-circle mr-3 imgPreview"  style="height: 46px; width: 50px; background-color: rgb(156, 156, 156);;">
                            <a href="#" class="text-white"><?php echo $row['surname']; ?> <?php echo $row['firstname']?></a>
                        </div>
                       
                        <ul class="navbar-nav flex-column mt-4" >
                            <li class="nav-item"><a href="dashboardinterface?raw-data=<?php echo $_GET['raw-data']?>" class="nav-link text-white p-3 mb-2 current"><i class="fa fa-home text-light fa-lg mr-3"></i>Feed</a></li>
                            <li class="nav-item"><a href="user-account?raw-data=<?php echo $_GET['raw-data']?>" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fa fa-user text-light fa-lg mr-3"></i>Profile</a></li>
                            <li class="nav-item"><a href="create?raw-data=<?php echo $_GET['raw-data']?>" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fa fa-edit text-light fa-lg mr-3"></i>Create</a></li>
                            <li class="nav-item"><a href="/chats" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fa fa-comments text-light fa-lg mr-3"></i>Chats</a></li>
                            <li class="nav-item"><a href="/groups" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fa fa-users text-light fa-lg mr-3"></i>Groups</a></li>
                            <li class="nav-item"><a href="/page-under-devt" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fa fa-bullhorn text-light fa-lg mr-3"></i>Announce</a></li>
                            <li class="nav-item"><a href="/page-under-devt" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fa fa-grav text-light fa-lg mr-3"></i>Exhibition</a></li>
                            <li class="nav-item"><a href="/page-under-devt" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fa fa-wrench text-light fa-lg mr-3"></i>Settings</a></li>
                        </ul>

                    </div>
                   
                    
                    <!-- end of sidebar -->


                    <!-- top-nav -->
                    <div class="col-xl-10 col-lg-9 col-md-8 ml-auto bg-dark fixed-top py-2 top-navbar">
                        <div class="row align-items-center">
                            <div class="col-md-4">                                
                                <img src="../images/weekly_logo1.jpg " alt="logo" style="height: 60px; width: 100px;">                   
                            </div>
                            <div class="col-md-5">
                                <form>
                                    <div class="input-group">
                                        <input type="text" class="form-control search-input" placeholder="Search..." style="color: #020138; font-weight: bolder; font-size: 18px;">
                                        <button type="button" class="btn btn-white search-button"><i class="fa fa-search text-danger"></i></button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-3">
                                <ul class="navbar-nav">
                                    <li class="nav-item icon-parent"><a href="/page-under-devt" class="nav-link icon-bullet"><i class="fa fa-comments text-muted fa-lg"></i></a></li>
                                    <li class="nav-item icon-parent"><a href="/page-under-devt" class="nav-link icon-bullet"><i class="fa fa-bell text-muted fa-lg"></i></a></li>
                                    <li class="nav-item ml-md-auto"><a href="#" class="nav-link" data-toggle="modal" data-target="#sign-out-1"><i class="fa fa-sign-out text-danger fa-lg"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- end of top-nav -->
                </div>
            </div>
        </div>
        

        <button class="btn dropdown-toggle ml-auto mb-2 logoCW" type="button" data-toggle="dropdown" onclick="navSlide()">
            {{!-- <span class="navbar-toggler-icon"></span> --}}
                {{#each rows}}
                    <span class="">
                        {{!-- {{#if this.profile_photo}}
                            <img src="data:image/*;base64,{{this.profile_photo}}"  class="rounded-circle mr-3" alt="User Profile" style="height: 46px; width: 50px;">
                        {{else}}
                            <img src="../images/avatarT.jpg" width="50" class="rounded-circle mr-3" alt="User Profile" style="height: 46px; width: 50px;">
                        {{/if}} --}}
                        <img class="rounded-circle mr-3 imgPreview3"  style="height: 46px; width: 50px; background-color: rgb(156, 156, 156);">
                    </span>
                {{/each}}

        </button>
    </nav>
    <!-- end of navbar -->

    <div class="nav-2" >
        <ul class="nav-links" style="z-index: 1000;">
            <div style="justify-content: left;">
                <li class="nav-item"></li><a href="/feed" class="nav-link text-white p-3 mb-2 current"><i class="fa fa-home text-light fa-lg mr-3"></i>Feed</a></li>
                <li class="nav-item"><a href="/account" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fa fa-user text-light fa-lg mr-3"></i>Profile</a></li>
                <li class="nav-item"><a href="/create" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fa fa-edit text-light fa-lg mr-3"></i>Create</a></li>
                <li class="nav-item"><a href="/chats" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fa fa-comments text-light fa-lg mr-3"></i>Chats</a></li>
                <li class="nav-item"><a href="/groups" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fa fa-users text-light fa-lg mr-3"></i>Groups</a></li>
                <li class="nav-item"><a href="/page-under-devt" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fa fa-bullhorn text-light fa-lg mr-3"></i>Announce</a></li>
                <li class="nav-item"><a href="/page-under-devt" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fa fa-grav text-light fa-lg mr-3"></i>Exhibition</a></li>
                <li class="nav-item"><a href="/page-under-devt" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fa fa-wrench text-light fa-lg mr-3"></i>Settings</a></li>

            </div>
        </ul>
    </div>
    
    <!-- sign out modal -->
    <div class="modal fade" id="sign-out-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Want to leave?</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    Press logout to leave
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">Stay Here</button> 
                    <form action="/auth/logout" method="post">
                        <button type="submit" class="btn btn-danger">Logout</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end of sign out modal -->

    <!-- social modal -->
    <div class="modal fade" id="sign-out">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Share to Socia Media</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    Sorry...still under Dev't!
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>
    <!-- end of social modal -->

    <script>
            const nav = document.querySelector('.nav-links');
            const navLinks = document.querySelectorAll('.nav-links li');

            
            function navSlide() {
                // Toggle Nav
                nav.classList.toggle('nav-active');

                //Animate Links
                navLinks.forEach((link, index) => {
                    if(link.style.animation){
                        link.style.animation = '';
                    } else{
                        link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.5}s`;
                    }
                });
            }

    </script>

 

   

    