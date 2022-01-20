    <!--slider images-->
    <div class="container mt-1 mb-1">

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="images/cover.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/gulucoaster.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/guluplan.jpg" alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/muni1.jpg" alt="Fourth slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/muni.jpg" alt="Fifth slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/liraslider2.jpg" alt="Sixth slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/liraslider3.jpg" alt="Seventh slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <!--Jumbotron-->
    <div class="container">
        <div class="row jumbotron ">
            <div class="col">
                <p class="lead">
                    Have you been aching? Thinking of a platform? That would have all the necessary simple scale
                    announcements! To keep you up to date with the Campus programs? Guess what, today is your lucky
                    day...
                </p>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                <div style="margin-bottom: 10px; display: flex;justify-content: space-around;">
                    <div>
                        <a href="https://youtube.com/channel/UC8-lmzpg1X9hNXJc6V8FkWQ" target="_blank"
                            style="text-decoration: none;" class="btn btn-outline-primary">

                            <i class="fa fa-youtube"></i>&nbsp; Beacon TV

                        </a>
                    </div>
                    <div>
                        <a href="https://twitter.com/WeeklyCampus" target="_blank" style="text-decoration: none;"
                            class="btn btn-outline-primary">
                            <i class="fa fa-twitter-square"></i>
                            <span style="font-weight: bold;">&nbsp;On Twitter</span>
                        </a>
                    </div>
                </div>
                <div style="margin-bottom: 10px; display: flex;justify-content: space-around;">
                    <div>
                        <a href="https://www.facebook.com/campusweekly.fb" target="_blank"
                            style="text-decoration: none;" class="btn btn-outline-primary">
                            <i class="fa fa-facebook-square"></i>
                            <span style="font-weight: bold; font-size: 12px;">CampusWeekly</span>
                        </a>
                    </div>
                    <div>
                        <a href="https://www.instagram.com/campusweekly/" target="_blank" style="text-decoration: none;"
                            class="btn btn-outline-primary">
                            <i class="fa fa-instagram"></i>
                            <span style="font-weight: bold;">&nbsp; Instagram</span>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <!--Looks like you're not signed in...-->
    <div class="container">
        <div class="card" style="margin-bottom: 10px;">
            <div class="row padding card-body">
                <div class="col-lg-4">
                    <img class="img-fluid card-img" src="images/oops.jpg" alt="image" style="">
                </div>
                <div class="col-md-12 col-lg-8">
                    <h1 class="card-title">Ooops!....</h1>
                    <h5 style="font-weight: bold;" class="d-flex justify-content-between">
                        <span>                            
                            <a href="/login" 
                                        style="text-decoration: none; ">Looks like you're not signed in...</a>
                        </span>
                        <img class="img-fluid" src="images/avatarT.jpg" alt="lukard"
                                    style="width: 40px; margin-top: -15px; border-radius: 100%;">
                    </h5>
                    <h6 class="card-text">
                        No worries! Simply...                       
                    </h6>
                    <div class="d-flex justify-content-center mt-3 login_container">
                            <a href="/login" type="button" name="button" class="btn login_btn m-2">Login</a>  <span style="margin-top: 12px;">or</span>
                            <a href="/register" type="button" name="button" class="btn login_btn m-2">Sign Up</a>
                        </div>
                </div>
            </div>
        </div>
    </div>

    


     <!-- Stories From Database -->
<!-- {{#if results}}

    {{#each results}} -->


    <!--Two column section-->
    <!-- <div class="container">
        <div class="card" style="margin-bottom: 10px;">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <div class="text-right text-secondary">
                        <span class="badge badge-danger p-2" style="border-radius: 40%; font-weight: lighter;">NEW</span>
                        <span class="text-muted" style=" font-weight: lighter;">{{this.post_date}}</span>
                    </div>
                    <button onclick="captureShareLink({{this.post_id}});" class="btn"><i class="fa fa-share-alt fa-lg text-muted p-1"></i></button>
                </div>
            </div>
            <div class="row padding card-body">
                <div class="col-lg-4">
                    {{#if this.image_file}}
                        <img class="img-fluid card-img" src="data:image/*;base64,{{this.image_file}}"  style="">
                    {{else}}
                        <img class="img-fluid card-img" src="images/check3.jpg" alt="image" style="">
                    {{/if}}
                        {{!-- <img class="img-fluid card-img" src="" alt="image" style="background-color:  rgb(156, 156, 156);"> --}}
                </div>
                <div class="col-md-12 col-lg-8">
                    <h3 class="card-title" style="color: blue;">{{this.post_title}}</h3>
                    <h6 style="font-weight: bold;" class="d-flex justify-content-between align-items-center">
                        <span >
                            <i class="fa fa-edit"></i> Story by {{this.surname}}  {{this.firstname}}
                        </span>
                        {{#if this.profile_photo}}
                            <img src="data:image/*;base64,{{this.profile_photo}}"  class="rounded-circle mr-3" style="height: 36px; width: 40px; background-color:  rgb(156, 156, 156);">
                        {{else}}
                            <img src="images/avatarT.jpg" class="rounded-circle mr-3" style="height: 36px; width: 40px; background-color:  rgb(156, 156, 156);">
                        {{/if}}
                            {{!-- <img src="images/avatarT.jpg" class="rounded-circle mr-3" style="height: 36px; width: 40px; background-color:  rgb(156, 156, 156);"> --}}
                    </h6>
                    <p style="white-space: pre-line;">
                        {{this.paragraph}}
                        <a href="/story/?id={{this.post_id}}" class="btn btn-outline-primary">see full story</a>
                    </p>  
                </div>
            </div>
        </div>
    </div>  
   -->
        
    <!-- {{/each}}

{{else}} -->

    <!--Two column section-->
    <!-- <div class="container">
        <div class="card" style="margin-bottom: 10px;">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <div class="text-right text-secondary">
                        <span class="badge badge-danger p-2" style="border-radius: 40%; font-weight: lighter;">NEW</span>
                        <span class="text-muted" style=" font-weight: lighter;">-- --, 2021</span>
                    </div>
                    <a href="#" data-toggle="modal" data-target="#sign-out"><i class="fa fa-share-alt fa-lg text-muted p-1"></i></a>
                </div>
            </div>
            <div class="row padding card-body">
                <div class="col-lg-4">
                    <img class="img-fluid card-img" src="images/driving.jpg" alt="image" style="">
                </div>
                <div class="col-md-12 col-lg-8">
                    <h1 class="card-title">Ooops!....</h1>
                    <h5 style="font-weight: bold;" class="d-flex justify-content-between">
                        <span>                            
                            <a href="/feed" 
                                        style="text-decoration: none; ">Looks like there are No Published Posts Yet...</a>
                        </span>
                        <img class="img-fluid" src="images/avatarT.jpg" alt="lukard"
                                    style="width: 40px; margin-top: -15px; border-radius: 100%;">
                    </h5>
                    <h6 class="card-text" style="color: rgb(22, 15, 15); font-weight: bold;">
                        No worries though! This is an an easy solve.                        
                    </h6>
                    <h6 class="card-text" style="font-weight: bold;">
                        First stop would be to check with your Campus Editor;                       
                    </h6>
                    <h6 class="card-text" style="color: red; font-weight: bold;">
                        If symptoms persist, remember to visit the code doctor!                        
                    </h6>
                </div>
            </div>
        </div>
    </div> -->

<!-- {{/if}} -->

    <!--Jumbotron OLD STORIES-->
    <div class="container">
        <div class="row jumbotron ">
            <div class="col">
                <h1  style="text-align: center; font-weight: bold;">
                    OLD STORIES
                </h1>
            </div>

        </div>
    </div>

    <!--THE CRY OF AN AFRICAN CHILD-->
    <div class="container">
        <div class="card" style="margin-bottom: 10px;">
            <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <div class="text-right text-secondary">
                                <span class="badge badge-danger p-2" style="border-radius: 40%; font-weight: lighter;">NEW</span>
                                <span class="text-muted" style=" font-weight: lighter;">July 26, 2021</span>
                            </div>
                             <a href="#" data-toggle="modal" data-target="#sign-out"><i class="fa fa-share-alt fa-lg text-muted p-1"></i></a> 
                        </div>
            </div>
            <div class="row padding card-body align-items-center">
                        <div class="col-lg-4">
                            <img class="img-fluid card-img" src="images/cw.jpg" alt="image" style="background-color: #fff;">
                        </div>
                        <div class="col-md-12 col-lg-8">
                            <h3 class="card-title">THE CRY OF AN AFRICAN CHILD</h3>
                            <h6 style="font-weight: bold;" class="d-flex justify-content-between">
                                <span>
                                    <i class="fa fa-edit"></i> Poem by Atim Maureen
                                </span>
                                <img class="img-fluid" src="images/atimtimcy.jpg" alt="image"
                                    style="width: 40px; margin-top: -15px; border-radius: 100%;">
                            </h6>
                            <p class="card-text">
                                I have a name, <br>
                                I have a voice, <br>
                                A voice that counts. <br>
                                Please! Hear me out. <br>
                                &nbsp;
                                ...
                                <a href="/cry-of-african-child-poem" class="btn btn-outline-primary">Read more</a>

                            </p>
                        </div>
            </div>
        </div>
    </div>

    <!--THE AFRICAN CHILD-->
    <div class="container">
                <div class="card" style="margin-bottom: 10px;">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <div class="text-right text-secondary">
                                <span class="badge badge-danger p-2" style="border-radius: 40%; font-weight: lighter;">NEW</span>
                                <span class="text-muted" style=" font-weight: lighter;">July 16, 2021</span>
                            </div>
                            <a href="#" data-toggle="modal" data-target="#sign-out"><i class="fa fa-share-alt fa-lg text-muted p-1"></i></a>
                        </div>
                    </div>
                    <div class="row padding card-body align-items-center">
                        <div class="col-lg-4">
                            <img class="img-fluid card-img" src="images/bwambale1.jpg" alt="image" style="">
                        </div>
                        <div class="col-md-12 col-lg-8">
                            <h3 class="card-title">THE AFRICAN CHILD</h3>
                            <h6 style="font-weight: bold;" class="d-flex justify-content-between">
                                <span>
                                    <i class="fa fa-edit"></i> Story by Binepe Lhwanzo Bwambale
                                </span>
                                <img class="img-fluid" src="images/bwambale1.jpg" alt="image"
                                    style="width: 40px; margin-top: -15px; border-radius: 100%;">
                            </h6>
                            <p class="card-text">
                                A blanket of deception has tightly coiled around the minds of most, enchaining them into modern day slavery! Unless we are unlocked by the truth, we are deemed to Doom. We are indeed deemed to doom as we scream “coming home, coming home, coming home” as Italy raises the Euro Cup. It's now absolutely clear that we have forgotten our true home.

                                &nbsp;
                                ...
                                <a href="/african-child-by-binepe" class="btn btn-outline-primary">Read more</a>

                            </p>
                        </div>
                    </div>
                </div>
    </div>

    <!--CLIMATE CHANGE ACTIVISM AT LIRA UNIVERSITY (LU)-->
    <div class="container">
                <div class="card" style="margin-bottom: 10px;">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <div class="text-right text-secondary">
                                <span class="badge badge-danger p-2" style="border-radius: 40%; font-weight: lighter;">NEW</span>
                                <span class="text-muted" style=" font-weight: lighter;">July 12, 2021</span>
                            </div>
                            <a href="#" data-toggle="modal" data-target="#sign-out"><i class="fa fa-share-alt fa-lg text-muted p-1"></i></a>
                        </div>
                    </div>
                    <div class="row padding card-body align-items-center">
                        <div class="col-lg-4">
                            <img class="img-fluid card-img" src="images/seraCC2.jpg" alt="image" style="">
                        </div>
                        <div class="col-md-12 col-lg-8">
                            <h3 class="card-title">CLIMATE CHANGE ACTIVISM AT LIRA UNIVERSITY (LU)</h3>
                            <h6 style="font-weight: bold;" class="d-flex justify-content-between">
                                <span>
                                    <i class="fa fa-edit"></i> Story by Kwerit Sarah Chebijirah
                                </span>
                                <img class="img-fluid" src="images/sera1.jpg" alt="image"
                                    style="width: 40px; margin-top: -15px; border-radius: 100%;">
                            </h6>
                            <p class="card-text">
                                “In case the world fails to step up climate action, continuing on our current climate trajectory could force 100 million people into extreme poverty by 2030. Africa is the most-exposed region to the adverse effects of climate change despite contributing the least to global warming. If fairness was the only goal, the impetus to act would lie solely with developed economies.”

                                &nbsp;
                                ...
                                <a href="/climate-change" class="btn btn-outline-primary">Read more</a>

                            </p>
                        </div>
                    </div>
                </div>
    </div>

    <!--I AM NOT FINE-->
    <div class="container">
                <div class="card" style="margin-bottom: 10px;">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <div class="text-right text-secondary">
                                <span class="badge badge-danger p-2" style="border-radius: 40%; font-weight: lighter;">NEW</span>
                                <span class="text-muted" style=" font-weight: lighter;">July 02, 2021</span>
                            </div>
                            <a href="#" data-toggle="modal" data-target="#sign-out"><i class="fa fa-share-alt fa-lg text-muted p-1"></i></a>
                        </div>
                    </div>
                    <div class="row padding card-body align-items-center">
                        <div class="col-lg-4">
                            <img class="img-fluid card-img" src="images/lukard_logo.jpg" alt="image" style="">
                        </div>
                        <div class="col-md-12 col-lg-8">
                            <h3 class="card-title">I AM NOT FINE</h3>
                            <h6 style="font-weight: bold;" class="d-flex justify-content-between">
                                <span>
                                    <i class="fa fa-edit"></i> Story From
                                    <a href="https://adventuresoflukard.herokuapp.com" target="_blank"
                                        style="text-decoration: none; ">Lukard Adventures</a>
                                </span>
                                <img class="img-fluid" src="images/lukardlogo.jpg" alt="lukard"
                                    style="width: 40px; margin-top: -15px; border-radius: 100%;">
                            </h6>
                            <p class="card-text">
                                Do not let my show fool you. Please don’t! I am not fine. I know I am supposed to be alright; but I am not. I am very much afraid to tell anyone either because I pretty much do not want to make anyone uncomfortable.
                                &nbsp;
                                ...
                                <a href="https://adventuresoflukard.herokuapp.com/fine" class="btn btn-outline-primary">Read more</a>
                                
                                
                            </p>
                        </div>
                    </div>
                </div>
    </div>

    <!--POWERLESS-->
    <div class="container">
                <div class="card" style="margin-bottom: 10px;">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <div class="text-right text-secondary">
                                <span class="badge badge-danger p-2" style="border-radius: 40%; font-weight: lighter;">NEW</span>
                                <span class="text-muted" style=" font-weight: lighter;">July 02, 2021</span>
                            </div>
                            <a href="#" data-toggle="modal" data-target="#sign-out"><i class="fa fa-share-alt fa-lg text-muted p-1"></i></a>
                        </div>
                    </div>
                    <div class="row padding card-body align-items-center">
                        <div class="col-lg-4">
                            <img class="img-fluid card-img" src="images/lukard_logo.jpg" alt="image" style="">
                        </div>
                        <div class="col-md-12 col-lg-8">
                            <h3 class="card-title">POWERLESS</h3>
                            <h6 style="font-weight: bold;" class="d-flex justify-content-between">
                                <span>
                                    <i class="fa fa-edit"></i> Story From
                                    <a href="https://adventuresoflukard.herokuapp.com" target="_blank"
                                        style="text-decoration: none; ">Lukard Adventures</a>
                                </span>
                                <img class="img-fluid" src="images/lukardlogo.jpg" alt="lukard"
                                    style="width: 40px; margin-top: -15px; border-radius: 100%;">
                            </h6>
                            <p class="card-text">
                                Some days are not exactly that great – at campus! Yeah, to be fair, most of them are fun; I mean for
                                those at campus or gone through campus you know what I am talking about. Every class you take is
                                your very own decision.
                                &nbsp;
                                ...
                                <a href="/powerless" class="btn btn-outline-primary">Read more</a>
                                
                            </p>
                        </div>
                    </div>
                </div>
    </div>

    <!--Interview With The Deputy National Coordinator, Debate Presidents Council-->
    <div class="container">
                <div class="card" style="margin-bottom: 10px;">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <div class="text-right text-secondary">
                                <span class="badge badge-danger p-2" style="border-radius: 40%; font-weight: lighter;">NEW</span>
                                <span class="text-muted" style=" font-weight: lighter;">June 25, 2021</span>
                            </div>
                            <a href="#" data-toggle="modal" data-target="#sign-out"><i class="fa fa-share-alt fa-lg text-muted p-1"></i></a>
                        </div>
                    </div>
                    <div class="row padding card-body align-items-center">
                        <div class="col-lg-4">
                            <img class="img-fluid card-img" src="images/binepe.jpg" alt="image" style="">
                        </div>
                        <div class="col-md-12 col-lg-8">
                            <h3 class="card-title">Interview With The Deputy National Coordinator, Debate Presidents Council</h3>
                            <h6 style="font-weight: bold;" class="d-flex justify-content-between">
                                <span>
                                    <i class="fa fa-edit"></i> Story by The Editor
                                </span>
                                <img class="img-fluid" src="images/lukard_avatar.jpg" alt="Lukenge-Benard"
                                    style="width: 40px; margin-top: -15px; border-radius: 100%;">
                            </h6>                           
                            <p class="card-text">
                                
                                This week in an interview with Mr. Binepe Lhwanzo Bwambale, the newly elected Deputy National Coordinator, we bring to you a look at the Uganda University Debate Presidents Council and a quick peek through the guest’s rather interesting leadership journey.
                                &nbsp;
                                ...
                                <a href="/interview-with-mr-bwambale" class="btn btn-outline-primary">Read more</a>
                            
                                
                            </p>
                        </div>
                    </div>
                </div>
    </div>

    <!--THIS WEEK ON CAMPUS WEEKLY-->
    <div class="container">
                <div class="card" style="margin-bottom: 10px;">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <div class="text-right text-secondary">
                                <span class="badge badge-danger p-2" style="border-radius: 40%; font-weight: lighter;">NEW</span>
                                <span class="text-muted" style=" font-weight: lighter;">June 19, 2021</span>
                            </div>
                            <a href="#" data-toggle="modal" data-target="#sign-out"><i class="fa fa-share-alt fa-lg text-muted p-1"></i></a>
                        </div>
                    </div>
                    <div class="row padding card-body align-items-center">
                        <div class="col-lg-4">
                            <img class="img-fluid card-img" src="images/news3.jpg" alt="image" style="">
                        </div>
                        <div class="col-md-12 col-lg-8">
                            <h3 class="card-title">THIS WEEK ON CAMPUS WEEKLY</h3>
                            <h6 style="font-weight: bold;" class="d-flex justify-content-between">
                                <span>
                                    <i class="fa fa-edit"></i> Story by The Editor
                                </span>
                                <img class="img-fluid" src="images/lukard_avatar.jpg" alt="Lukenge-Benard"
                                    style="width: 40px; margin-top: -15px; border-radius: 100%;">
                            </h6>
                            <p class="card-text">
                                
                                Saying that this has been a rather interesting week would be an extremely unfairly statement to so many! Well, let’s just take a lens! And look at events going backwards throughout this entire week.
                                &nbsp;
                                ...
                                <a href="/saturday-19-june-2021" class="btn btn-outline-primary">Read more</a>
                                
                                
                            </p>
                        </div>
                    </div>
                </div>
    </div>

    <!--THIS WEEK ON CAMPUS WEEKLY-->
    <div class="container">
                <div class="card" style="margin-bottom: 10px;">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <div class="text-right text-secondary">
                                <span class="badge badge-danger p-2" style="border-radius: 40%; font-weight: lighter;">NEW</span>
                                <span class="text-muted" style=" font-weight: lighter;">June 12, 2021</span>
                            </div>
                            <a href="#" data-toggle="modal" data-target="#sign-out"><i class="fa fa-share-alt fa-lg text-muted p-1"></i></a>
                        </div>
                    </div>
                    <div class="row padding card-body align-items-center">
                        <div class="col-lg-4">
                            <img class="img-fluid card-img" src="images/news2.jpg" alt="image" style="">
                        </div>
                        <div class="col-md-12 col-lg-8">
                            <h3 class="card-title">THIS WEEK ON CAMPUS WEEKLY</h3>
                            <h6 style="font-weight: bold;" class="d-flex justify-content-between">
                                <span>
                                    <i class="fa fa-edit"></i> Story by The Editor
                                </span>
                                <img class="img-fluid" src="images/lukard_avatar.jpg" alt="Lukenge-Benard"
                                    style="width: 40px; margin-top: -15px; border-radius: 100%;">
                            </h6>
                            <p class="card-text">
                                ...
                                &nbsp;
                                All this came to a surprise stand still on the night of Sunday, the 6th June, 2021. Well, to some, it wasn’t really a surprise per say! This special night housed the President’s address to the nation in response to the so called second wave of the famous COVID-19 pandemic in Uganda.
                                &nbsp;
                                ...
                                <a href="/saturday-12-june-2021" class="btn btn-outline-primary">Read more</a>
                               
                            </p>
                        </div>
                    </div>
                </div>
    </div>

    <!--MY DECISION TO STUDY PSYCHOLOGY AT LIRA UNIVERSITY-->
    <div class="container">
                <div class="card" style="margin-bottom: 10px;">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <div class="text-right text-secondary">
                                <span class="badge badge-danger p-2" style="border-radius: 40%; font-weight: lighter;">NEW</span>
                                <span class="text-muted" style=" font-weight: lighter;">May 28, 2021</span>
                            </div>
                            <a href="#" data-toggle="modal" data-target="#sign-out"><i class="fa fa-share-alt fa-lg text-muted p-1"></i></a>
                        </div>
                    </div>
                    <div class="row padding card-body align-items-center">
                        <div class="col-lg-4">
                            <img class="img-fluid card-img" src="images/sera.jpg" alt="image" style="">
                        </div>
                        <div class="col-md-12 col-lg-8">
                            <h3 class="card-title">MY DECISION TO STUDY PSYCHOLOGY AT LIRA UNIVERSITY </h3>
                            <h6 style="font-weight: bold;" class="d-flex justify-content-between">
                                <span>
                                    <i class="fa fa-edit"></i> Story by Kwerit Sarah Chebijirah
                                </span>
                                <img class="img-fluid" src="images/sera1.jpg" alt="image"
                                    style="width: 40px; margin-top: -15px; border-radius: 100%;">
                            </h6>
                            <p class="card-text">
                                The world is made up of 7 billion people with the power to make or break society, therefore, the 
                                most important topic area you could ever study is these people. When someone asks me what 
                                Psychology is I tell them it is the science of the most complex machine on this planet, the mind. 
                                The complexity and the mystery which enshrouds the human mind has always appealed me.

                                &nbsp;
                                ...
                                <a href="/my-decision" class="btn btn-outline-primary">Read more</a>

                            </p>
                        </div>
                    </div>
                </div>
    </div>

    <!--FOOD AND RESTAURANTS-->
    <div class="container">
                <div class="card" style="margin-bottom: 10px;">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <div class="text-right text-secondary">
                                <span class="badge badge-danger p-2" style="border-radius: 40%; font-weight: lighter;">NEW</span>
                                <span class="text-muted" style=" font-weight: lighter;">May 23, 2021</span>
                            </div>
                            <a href="#" data-toggle="modal" data-target="#sign-out"><i class="fa fa-share-alt fa-lg text-muted p-1"></i></a>
                        </div>
                    </div>
                    <div class="row padding card-body align-items-center">
                        <div class="col-lg-4">
                            <img class="img-fluid card-img" src="images/food.jpg" alt="image" style="">
                        </div>
                        <div class="col-md-12 col-lg-8">
                            <h3 class="card-title">FOOD AND RESTAURANTS</h3>
                            <h6 style="font-weight: bold;" class="d-flex justify-content-between">
                                <span>
                                    <i class="fa fa-edit"></i> Story by The Editor
                                </span>
                                <img class="img-fluid" src="images/lukard_avatar.jpg" alt="Lukenge-Benard"
                                    style="width: 40px; margin-top: -15px; border-radius: 100%;">
                            </h6>
                            <p class="card-text">
                                In the evening of course, the trend was still the same. Abby’s Joint was the place to meet! This guy made the best Rolex. Combined with some porridge or tea and supper was done.
                                &nbsp;
                                ...
                                <a href="/food-and-restaurants" class="btn btn-outline-primary">Read more</a>

                            </p>
                        </div>
                    </div>
                </div>
    </div>

    <!--TIED AND READY – THE MONEY’S HERE-->
    <div class="container">
                <div class="card" style="margin-bottom: 10px;">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <div class="text-right text-secondary">
                                <span class="badge badge-danger p-2" style="border-radius: 40%; font-weight: lighter;">NEW</span>
                                <span class="text-muted" style=" font-weight: lighter;">May 18, 2021</span>
                            </div>
                            <a href="#" data-toggle="modal" data-target="#sign-out"><i class="fa fa-share-alt fa-lg text-muted p-1"></i></a>
                        </div>
                    </div>
                    <div class="row padding card-body align-items-center">
                        <div class="col-lg-4">
                            <img class="img-fluid card-img" src="images/payday1.jpg" alt="image" style="">
                        </div>
                        <div class="col-md-12 col-lg-8">
                            <h3 class="card-title">TIED AND READY – THE MONEY’S HERE</h3>
                            <h6 style="font-weight: bold;" class="d-flex justify-content-between">
                                <span>
                                    <i class="fa fa-edit"></i> Story by The Editor
                                </span>
                                <img class="img-fluid" src="images/lukard_avatar.jpg" alt="Lukenge-Benard"
                                    style="width: 40px; margin-top: -15px; border-radius: 100%;">
                            </h6>
                            <p class="card-text">
                                720,000 digits. At exactly 4:20pm! Not a second later! The notifications were already spreading the happiness, all around. The Dean Of Students came through. As promised, the digits have been making their way throughout the Students’ Bank Accounts this entire evening.
                                &nbsp;
                                ...
                                <a href="/tied-and-ready" class="btn btn-outline-primary">Read more</a>
                            </p>
                        </div>
                    </div>
                </div>
    </div>

    <!--TO ALL GOVERNMENT SPONSORED STUDENTS-->
    <div class="container">
                <div class="card" style="margin-bottom: 10px;">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <div class="text-right text-secondary">
                                <span class="badge badge-danger p-2" style="border-radius: 40%; font-weight: lighter;">NEW</span>
                                <span class="text-muted" style=" font-weight: lighter;">May 16, 2021</span>
                            </div>
                            <a href="#" data-toggle="modal" data-target="#sign-out"><i class="fa fa-share-alt fa-lg text-muted p-1"></i></a>
                        </div>
                    </div>
                    <div class="row padding card-body align-items-center">
                        <div class="col">
                            <h3 style="text-align: center;" class="card-title">TO ALL GOVERNMENT SPONSORED STUDENTS </h3>
                            <h6 style="font-weight: bold;" class="d-flex justify-content-between">
                                <span>
                                    <i class="fa fa-edit"></i> Story by The Editor
                                </span>
                                <img class="img-fluid ml-2" src="images/lukard_avatar.jpg" alt="Lukenge-Benard"
                                    style="width: 40px; margin-top: -15px; border-radius: 100%;">
                            </h6>
                        </div>
                        <div class="row padding">
                            <div class="col-lg-4">
                                <img class="img-fluid card-img" src="images/dean.jpg" alt="image" style="">
                            </div>
                            <div class="col-md-12 col-lg-8">
                                <div class="container">
                                    <div class="row padding">
                                        <div class="col-lg-6">
                                            <p>
                                                I hope this finds you well and good.
                                            </p>
                                            <h6 style="font-weight: bold;">INFORMATION FROM THE DEAN OF STUDENTS</h6>
                                            <p>
                                                Please note that your living out allowance payment for next semester (Sem 2) was initiated on Friday, 14th May, 2021.
                                            </p>
                                            <p>
                                                To that end therefore; you will be receiving a payment notification from your respectful banks any time from now.
                                            </p>
                                        </div>
                                        <div class="col-md-12 col-lg-6">
                                            <p>
                                                This means that the allowance for next semester is also going to be availed this semester. 
                                                <br><br>
                                                You are thereby requested to use that money sparingly; just as earlier requested, through the Communication hosted on the noticeboards by the Dean’s Office.
                                            </p>
                                            <p>
                                                Kind regards, <br> Charles Chosen Muyingo.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </div>

    <!--CHECK ON YOUR FRIENDS-->
    <div class="container">
                <div class="card" style="margin-bottom: 10px;">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <div class="text-right text-secondary">
                                <span class="badge badge-danger p-2" style="border-radius: 40%; font-weight: lighter;">NEW</span>
                                <span class="text-muted" style=" font-weight: lighter;">May 12, 2021</span>
                            </div>
                            <a href="#" data-toggle="modal" data-target="#sign-out"><i class="fa fa-share-alt fa-lg text-muted p-1"></i></a>
                        </div>
                    </div>
                    <div class="row padding card-body align-items-center">
                        <div class="col-lg-4">
                            <img class="img-fluid card-img" src="images/please.jpg" alt="image" style="">
                        </div>
                        <div class="col-md-12 col-lg-8">
                            <h3 class="card-title">CHECK ON YOUR FRIENDS </h3>
                            <h6 style="font-weight: bold;" class="d-flex justify-content-between">
                                <span>
                                    <i class="fa fa-edit"></i> Story by Aron Eryau
                                </span>
                                <img class="img-fluid" src="images/aa.jpg" alt="image"
                                    style="width: 40px; margin-top: -15px; border-radius: 100%;">
                            </h6>                            
                            <p class="card-text">
                                We live in a world where there is endless scrolling, typing, likes and emoji. Communication has been
                                made easy, life is so much better with twitter, Facebook, Instagram filters and so on. People rarely
                                use pen and paper to write to lovers anymore; which I think is kind of old school and romantic, but
                                the truth is we never really bond anymore.
                                &nbsp;
                                ...
                                <a href="/check-on-your-friends" class="btn btn-outline-primary">Read more</a>

                            </p>
                        </div>
                    </div>
                </div>
    </div>

    <!--THIS WEEK’S EVENTS-->
    <div class="container">
                <div class="card" style="margin-bottom: 10px;">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <div class="text-right text-secondary">
                                <span class="badge badge-danger p-2" style="border-radius: 40%; font-weight: lighter;">NEW</span>
                                <span class="text-muted" style=" font-weight: lighter;">May 08, 2021</span>
                            </div>
                            <a href="#" data-toggle="modal" data-target="#sign-out"><i class="fa fa-share-alt fa-lg text-muted p-1"></i></a>
                        </div>
                    </div>
                    <div class="row padding card-body align-items-center">
                        <div class="col-lg-4">
                            <img class="img-fluid card-img" src="images/new.jpg" alt="image" style="">
                        </div>
                        <div class="col-md-12 col-lg-8">
                            <h3 class="card-title">THIS WEEK’S EVENTS</h3>
                            <h6 style="font-weight: bold;" class="d-flex justify-content-between">
                                <span>
                                    <i class="fa fa-edit"></i> Story by The Editor
                                </span>
                                <img class="img-fluid" src="images/lukard_avatar.jpg" alt="Lukenge-Benard"
                                    style="width: 40px; margin-top: -15px; border-radius: 100%;">
                            </h6>
                            <p class="card-text">
                                Joining in on the week with smiles and energy from last week’s Saturday, this week’s Sunday, 2nd
                                May, 2021 saw the Freshers face off with the giants from the ongoing students in the different
                                sports activities that were arranged.
                                &nbsp;
                                ...
                                <a href="/saturday-8-may-2021" class="btn btn-outline-primary">Read more</a>

                            </p>
                        </div>
                    </div>
                </div>
    </div>

    <!--THIS WEEK ON CAMPUS WEEKLY-->
    <div class="container">
                <div class="card" style="margin-bottom: 10px;">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <div class="text-right text-secondary">
                                <span class="badge badge-danger p-2" style="border-radius: 40%; font-weight: lighter;">NEW</span>
                                <span class="text-muted" style=" font-weight: lighter;">May 01, 2021</span>
                            </div>
                            <a href="#" data-toggle="modal" data-target="#sign-out"><i class="fa fa-share-alt fa-lg text-muted p-1"></i></a>
                        </div>
                    </div>
                    <div class="row padding card-body align-items-center">
                        <div class="col-lg-4">
                            <img class="img-fluid card-img" src="images/news.jpg" alt="image" style="">
                        </div>
                        <div class="col-md-12 col-lg-8">
                            <h3 class="card-title">THIS WEEK ON CAMPUS WEEKLY</h3>
                            <h6 style="font-weight: bold;" class="d-flex justify-content-between">
                                <span>
                                    <i class="fa fa-edit"></i> Story by The Editor
                                </span>
                                <img class="img-fluid" src="images/lukard_avatar.jpg" alt="Lukenge-Benard"
                                    style="width: 40px; margin-top: -15px; border-radius: 100%;">
                            </h6>
                            <p class="card-text">
                                Ending the past week; Saturday, 24th April, 2021 saw a fuel tanker truck plunge into R. Nile at
                                Karuma Bridge killing two people. These were believed to be the driver and the turn man for the
                                vehicle, registration number UAS 337M, trailer number MMF 450.
                                &nbsp;
                                ...
                                <a href="/saturday-1-may-2021" class="btn btn-outline-primary">Read more</a>

                            </p>
                        </div>
                    </div>
                </div>
    </div>

    <!--LDC GUILD AND STUDENTS' COUNCIL SWEARING IN-->
    <div class="container">
                <div class="card" style="margin-bottom: 10px;">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <div class="text-right text-secondary">
                                <span class="badge badge-danger p-2" style="border-radius: 40%; font-weight: lighter;">NEW</span>
                                <span class="text-muted" style=" font-weight: lighter;">April 22, 2021</span>
                            </div>
                            <a href="#" data-toggle="modal" data-target="#sign-out"><i class="fa fa-share-alt fa-lg text-muted p-1"></i></a>
                        </div>
                    </div>
                    <div class="row padding card-body align-items-center">
                        <div class="col-lg-4">
                            <img class="img-fluid card-img" src="images/swear.jpg" alt="image" style="">
                        </div>
                        <div class="col-md-12 col-lg-8">
                            <h3 class="card-title">LDC GUILD AND STUDENTS' COUNCIL SWEARING IN </h3>
                            <h6 style="font-weight: bold;" class="d-flex justify-content-between">
                                <span>
                                    <i class="fa fa-edit"></i> Story by The Editor
                                </span>
                                <img class="img-fluid" src="images/lukard_avatar.jpg" alt="Lukenge-Benard"
                                    style="width: 40px; margin-top: -15px; border-radius: 100%;">
                            </h6>
                            <p class="card-text">
                                Happening on Wednesday, 21st April, 2020 at the Lira University Teaching Hospital Grounds.
                                &nbsp;
                                <br>
                                ...
                            </p>
                            <p class="card-text">

                                <a href="/LDC-guild-swearing-in" class="btn btn-outline-primary">Editorial in Pictures</a>
                            </p>
                        </div>
                    </div>
                </div>
    </div>

    <!--MENTAL HEALTH AWARENESS-->
    <div class="container">
                <div class="card" style="margin-bottom: 10px;">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <div class="text-right text-secondary">
                                <span class="badge badge-danger p-2" style="border-radius: 40%; font-weight: lighter;">NEW</span>
                                <span class="text-muted" style=" font-weight: lighter;">April 21, 2021</span>
                            </div>
                            <a href="#" data-toggle="modal" data-target="#sign-out"><i class="fa fa-share-alt fa-lg text-muted p-1"></i></a>
                        </div>
                    </div>
                    <div class="row padding card-body align-items-center">
                        <div class="col-lg-4">
                            <img class="img-fluid card-img" src="images/mental.jpg" alt="image" style="">
                        </div>
                        <div class="col-md-12 col-lg-8">
                            <h3 class="card-title">MENTAL HEALTH AWARENESS </h3>
                            <h6 style="font-weight: bold;" class="d-flex justify-content-between">
                                <span>
                                    <i class="fa fa-edit"></i> Story by Ocen Daniel Comboni
                                </span>
                                <img class="img-fluid" src="images/comboni2.jpg" alt="image"
                                    style="width: 40px; margin-top: -15px; border-radius: 100%;">
                            </h6>
                            <p class="card-text">
                                World Health Organization defines mental health as a state of physical and psychological wellbeing
                                of an individual. Therefore Health, “is a state of complete physical, mental and social well-being!
                                Not merely the absence of disease or infirmity."
                                &nbsp;
                                ...
                                <a href="/mental-health-awareness" class="btn btn-outline-primary">Read more</a>

                            </p>
                        </div>
                    </div>
                </div>
    </div>

    <!--LACK OF MONEY IS THE ROOT OF ALL EVIL-->
    <div class="container">
                <div class="card" style="margin-bottom: 10px;">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <div class="text-right text-secondary">
                                <span class="badge badge-danger p-2" style="border-radius: 40%; font-weight: lighter;">NEW</span>
                                <span class="text-muted" style=" font-weight: lighter;">April 19, 2021</span>
                            </div>
                            <a href="#" data-toggle="modal" data-target="#sign-out"><i class="fa fa-share-alt fa-lg text-muted p-1"></i></a>
                        </div>
                    </div>
                    <div class="row padding card-body align-items-center">
                        <div class="col-lg-4">
                            <img class="img-fluid card-img" src="images/lackmoney.jpg" alt="image" style="">
                        </div>
                        <div class="col-md-12 col-lg-8">
                            <h3 class="card-title">LACK OF MONEY IS THE ROOT OF ALL EVIL </h3>
                            <h6 style="font-weight: bold;" class="d-flex justify-content-between">
                                <span>
                                    <i class="fa fa-edit"></i> Story by Ocepa Amos
                                </span>
                                <img class="img-fluid" src="images/amos2.jpg" alt="image"
                                    style="width: 40px; margin-top: -15px; border-radius: 100%;">
                            </h6>
                            <p class="card-text">
                                “Life is hard. Life has become hard one of these days. The world has become too small for me.” These
                                are some of the wordings that fill both teenage and adult conversations most if not all the time.
                                But has it ever occurred to you
                                to get deep down into the heart of the matter?
                                &nbsp;
                                ...
                                <a href="/money" class="btn btn-outline-primary">Read more</a>

                            </p>
                        </div>
                    </div>
                </div>
    </div>

    <!--SHE WON!-->
    <div class="container">
                <div class="card" style="margin-bottom: 10px;">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <div class="text-right text-secondary">
                                <span class="badge badge-danger p-2" style="border-radius: 40%; font-weight: lighter;">NEW</span>
                                <span class="text-muted" style=" font-weight: lighter;">April 19, 2021</span>
                            </div>
                            <a href="#" data-toggle="modal" data-target="#sign-out"><i class="fa fa-share-alt fa-lg text-muted p-1"></i></a>
                        </div>
                    </div>
                    <div class="row padding card-body align-items-center">
                        <div class="col-lg-4">
                            <img class="img-fluid card-img" src="images/liz1.jpg" alt="image" style="">
                        </div>
                        <div class="col-md-12 col-lg-8">
                            <h3 class="card-title">SHE WON!</h3>
                            <h6 style="font-weight: bold;" class="d-flex justify-content-between">
                                <span>
                                    <i class="fa fa-edit"></i> Story by The Editor
                                </span>
                                <img class="img-fluid" src="images/lukard_avatar.jpg" alt="Lukenge-Benard"
                                    style="width: 40px; margin-top: -15px; border-radius: 100%;">
                            </h6>
                            <p class="card-text">
                                With 65 votes, Ms. Nabakooza Elizabeth beat Mr. Bitarinsha Yoramu who had 59 votes; making two
                                significant records! She became the first ever female Chief Fresher and the first ever Chief Fresher
                                from Buganda.

                            </p>
                            <p class="card-text">
                                ...
                                <a href="/she-won" class="btn btn-outline-primary">Read more</a>
                            </p>
                        </div>
                    </div>
                </div>
    </div>

    <!--THE CHIEF FRESHERS’ DEBATE!-->
    <div class="container">
                <div class="card" style="margin-bottom: 10px;">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <div class="text-right text-secondary">
                                <span class="badge badge-danger p-2" style="border-radius: 40%; font-weight: lighter;">NEW</span>
                                <span class="text-muted" style=" font-weight: lighter;">April 18, 2021</span>
                            </div>
                            <a href="#" data-toggle="modal" data-target="#sign-out"><i class="fa fa-share-alt fa-lg text-muted p-1"></i></a>
                        </div>
                    </div>
                    <div class="row padding card-body align-items-center">
                        <div class="col-lg-4">
                            <img class="img-fluid card-img" src="images/debate2.jpg" alt="image" style="">
                        </div>
                        <div class="col-md-12 col-lg-8">
                            <h3 class="card-title">THE CHIEF FRESHERS’ DEBATE!</h3>
                            <h6 style="font-weight: bold;" class="d-flex justify-content-between">
                                <span>
                                    <i class="fa fa-edit"></i> Story by The Editor
                                </span>
                                <img class="img-fluid" src="images/lukard_avatar.jpg" alt="Lukenge-Benard"
                                    style="width: 40px; margin-top: -15px; border-radius: 100%;">
                            </h6>
                            <p class="card-text">
                                Happening on Friday, 16th April, 2021 just two days to the Elections day, Sunday, 18th April, 2021;
                                the Chief Freshers’ Debate was organized by the Lira University Debate Society in partnership with
                                the African Youth Leadership Forum (AYLF) – Lira University Chapter.
                                &nbsp;
                                ...
                                <a href="/chief-fresher-debate" class="btn btn-outline-primary">Read more</a>
                            </p>
                        </div>
                    </div>
                </div>
    </div>

    <!--HOW MUCH ARE WE DOING AS STUDENT MIDWIVES-->
    <div class="container">
                <div class="card" style="margin-bottom: 10px;">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <div class="text-right text-secondary">
                                <span class="badge badge-danger p-2" style="border-radius: 40%; font-weight: lighter;">NEW</span>
                                <span class="text-muted" style=" font-weight: lighter;">< April 18, 2021</span>
                            </div>
                            <a href="#" data-toggle="modal" data-target="#sign-out"><i class="fa fa-share-alt fa-lg text-muted p-1"></i></a>
                        </div>
                    </div>
                    <div class="row padding card-body align-items-center">
                        <div class="col-lg-4">
                            <img class="img-fluid card-img" src="images/inspiration2.jpg" alt="image" style="">
                        </div>
                        <div class="col-md-12 col-lg-8">
                            <h3 class="card-title">HOW MUCH ARE WE DOING AS STUDENT MIDWIVES </h3>
                            <h6 style="font-weight: bold;" class="d-flex justify-content-between">
                                <span>
                                    <i class="fa fa-edit"></i> Story by Aron Eryau
                                </span>
                                <img class="img-fluid" src="images/aa.jpg" alt="image"
                                    style="width: 40px; margin-top: -15px; border-radius: 100%;">
                            </h6>
                            <p class="card-text">
                                What can I say? You know that little excitement that you get once you’ve just tweeted or posted a
                                photo on Facebook, and many people liked it! Well yeah, that's the exact kind of high I get every
                                time a patient says thank you, you were so helpful.
                                &nbsp;
                                ...
                                <a href="/student-midwives" class="btn btn-outline-primary">Read more</a>

                            </p>
                        </div>
                    </div>
                </div>
    </div>

    <!--LIRA UNIVERSITY 2ND GRADUATION CEREMONY-->
    <div class="container">
                <div class="card" style="margin-bottom: 10px;">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <div class="text-right text-secondary">
                                <span class="badge badge-danger p-2" style="border-radius: 40%; font-weight: lighter;">NEW</span>
                                <span class="text-muted" style=" font-weight: lighter;">< April 18, 2021</span>
                            </div>
                            <a href="#" data-toggle="modal" data-target="#sign-out"><i class="fa fa-share-alt fa-lg text-muted p-1"></i></a>
                        </div>
                    </div>
                    <div class="row padding card-body align-items-center">
                        <div class="col-lg-4">
                            <img class="img-fluid card-img" src="images/graduation1.jpg" alt="image" style="">
                        </div>
                        <div class="col-md-12 col-lg-8">
                            <h3 class="card-title">LIRA UNIVERSITY 2ND GRADUATION CEREMONY</h3>
                            <h6 style="font-weight: bold;" class="d-flex justify-content-between">
                                <span>
                                    <i class="fa fa-edit"></i> Story by The Editor
                                </span>
                                <img class="img-fluid" src="images/lukard_avatar.jpg" alt="Lukenge-Benard"
                                    style="width: 40px; margin-top: -15px; border-radius: 100%;">
                            </h6>
                            <p class="card-text">
                                Friday, 9th April, 2021 joyfully marked it's signifance in the history books as the date the second
                                graduation ceremony of Lira University was held. The first graduation already holding its position
                                in the dates of another Friday, the 1st November, 2019.


                            </p>
                            <p class="card-text">
                                ...
                                <a href="/graduation" class="btn btn-outline-primary">Read more</a>
                            </p>

                        </div>
                    </div>
                </div>
    </div>

    <!--THE DEBATE SOCIETY-->
    <div class="container">
                <div class="card" style="margin-bottom: 10px;">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <div class="text-right text-secondary">
                                <span class="badge badge-danger p-2" style="border-radius: 40%; font-weight: lighter;">NEW</span>
                                <span class="text-muted" style=" font-weight: lighter;">< April 18, 2021</span>
                            </div>
                            <a href="#" data-toggle="modal" data-target="#sign-out"><i class="fa fa-share-alt fa-lg text-muted p-1"></i></a>
                        </div>
                    </div>
                    <div class="row padding card-body align-items-center">
                        <div class="col-lg-4">
                            <img class="img-fluid card-img" src="images/debate2.jpg" alt="image" style="">
                        </div>
                        <div class="col-md-12 col-lg-8">
                            <h3 class="card-title">THE DEBATE SOCIETY</h3>
                            <h6 style="font-weight: bold;" class="d-flex justify-content-between">
                                <span>
                                    <i class="fa fa-edit"></i> Story by The Editor
                                </span>
                                <img class="img-fluid" src="images/lukard_avatar.jpg" alt="Lukenge-Benard"
                                    style="width: 40px; margin-top: -15px; border-radius: 100%;">
                            </h6>
                            <p class="card-text">
                                You haven’t lived till you have attended one of the intellectual discussions held by the debate
                                society of Lira University. You just haven’t! I was invited to one of these sessions and I tell you
                                right here right now, my friends, the experience I got was unprecedented! It was the best feeling,
                                being in the same room with such great minds.
                                <br>
                                ...
                                <a href="/lifestyle" class="btn btn-outline-primary">Read more</a>
                            </p>
                        </div>
                    </div>
                </div>
    </div>

    <!--MIDWIFERY INTERNSHIP-->
    <div class="container">
                <div class="card" style="margin-bottom: 10px;">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <div class="text-right text-secondary">
                                <span class="badge badge-danger p-2" style="border-radius: 40%; font-weight: lighter;">NEW</span>
                                <span class="text-muted" style=" font-weight: lighter;">< April 18, 2021</span>
                            </div>
                            <a href="#" data-toggle="modal" data-target="#sign-out"><i class="fa fa-share-alt fa-lg text-muted p-1"></i></a>
                        </div>
                    </div>
                    <div class="row padding card-body align-items-center">
                        <div class="col-lg-4">
                            <img class="img-fluid card-img" src="images/midwifery.jpg" alt="image" style="">
                        </div>
                        <div class="col-md-12 col-lg-8">
                            <h3 class="card-title">MIDWIFERY INTERNSHIP</h3>
                            <h6 style="font-weight: bold;" class="d-flex justify-content-between">
                                <span>
                                    <i class="fa fa-edit"></i> Story by The Editor
                                </span>
                                <img class="img-fluid" src="images/lukard_avatar.jpg" alt="Lukenge-Benard"
                                    style="width: 40px; margin-top: -15px; border-radius: 100%;">
                            </h6>
                            <p class="card-text">
                                “In Uganda, midwives have been traditionally prepared mainly to perform the role of subordinates to
                                the doctors. The Bachelor of Science in Midwifery program is to elevate midwifery to an educational
                                level that prepares midwives to exercise critical thinking and judgement in the provision of
                                comprehensive and integrated reproductive health practice, as well as community-based health care.
                                ...
                                <a href="/midwifery-internship" class="btn btn-outline-primary">Read more</a>
                            </p>

                        </div>
                    </div>
                </div>
    </div>

    <!--BREAKING NEWS-->
    <div class="container">
                <div class="card" style="margin-bottom: 10px;">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <div class="text-right text-secondary">
                                <span class="badge badge-danger p-2" style="border-radius: 40%; font-weight: lighter;">NEW</span>
                                <span class="text-muted" style=" font-weight: lighter;">< April 18, 2021</span>
                            </div>
                            <a href="#" data-toggle="modal" data-target="#sign-out"><i class="fa fa-share-alt fa-lg text-muted p-1"></i></a>
                        </div>
                    </div>
                    <div class="row padding card-body align-items-center">
                        <div class="col-lg-4">
                            <img class="img-fluid card-img" src="images/uganda-currency.jpg" alt="image" style="">
                        </div>
                        <div class="col-md-12 col-lg-8">
                            <h3 class="card-title">BREAKING NEWS</h3>

                            <p class="card-text">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;It’s here! It finally is! You have used
                                that borrowed pen for quite a
                                while now! You have shied away
                                from even stepping inside Mr Muwonge’s YammieShoppers Supermarket, for long.
                                <br>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;It’s high time. Yes, I’m talking to the
                                government student who’s been
                                praying for a drop of water in
                                this drought, that has no borders, reaching far deep inside the pockets.
                                <br>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Today, the 25th March, 2021, at about
                                5:30 pm, the phones belonging to
                                the
                                government students
                                all
                                beeped at the same time as they were finally rescued from the anticipation.
                            </p>
                        </div>
                    </div>
                </div>
    </div>

    <!--THEY ARE BACK!-->
    <div class="container">
                <div class="card" style="margin-bottom: 10px;">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <div class="text-right text-secondary">
                                <span class="badge badge-danger p-2" style="border-radius: 40%; font-weight: lighter;">NEW</span>
                                <span class="text-muted" style=" font-weight: lighter;">< April 18, 2021</span>
                            </div>
                            <a href="#" data-toggle="modal" data-target="#sign-out"><i class="fa fa-share-alt fa-lg text-muted p-1"></i></a>
                        </div>
                    </div>
                    <div class="row padding card-body align-items-center">
                        <div class="col-lg-4">
                            <img class="img-fluid card-img" src="images/midwife2.jpg" alt="image" style="">
                        </div>
                        <div class="col-md-12 col-lg-8">
                            <h3 class="card-title">THEY ARE BACK!</h3>
                            <h6 style="font-weight: bold;" class="d-flex justify-content-between">
                                <span>
                                    <i class="fa fa-edit"></i> Story by The Editor
                                </span>
                                <img class="img-fluid" src="images/lukard_avatar.jpg" alt="Lukenge-Benard"
                                    style="width: 40px; margin-top: -15px; border-radius: 100%;">
                            </h6>
                            <p class="card-text">
                                Leaving on Monday, 22nd February, 2021, dispatched to various hospitals in the region, the present
                                day year two midwifery students completed their first internship program with the first lot
                                reporting back to campus on Friday, 19th March, 2021.
                            </p>
                            <p class="card-text">
                                The CampusWeekly™ lens happened to be in the vicinity of some of these extremely happy-to-be-back
                                members of the health community. Preferring anonymity, the jubilant midwives-to-be interviewed
                                narrated their experiences to our reporters.
                                <br>
                                ...
                                <br>
                                <a href="/they-are-back" class="btn btn-outline-primary">Read more</a>
                            </p>              
                        </div>
                    </div>
                </div>
    </div>

    <!--Interview with LDC Guild President-->
    <div class="container">
                <div class="card" style="margin-bottom: 10px;">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <div class="text-right text-secondary">
                                <span class="badge badge-danger p-2" style="border-radius: 40%; font-weight: lighter;">NEW</span>
                                <span class="text-muted" style=" font-weight: lighter;">< April 18, 2021</span>
                            </div>
                            <a href="#" data-toggle="modal" data-target="#sign-out"><i class="fa fa-share-alt fa-lg text-muted p-1"></i></a>
                        </div>
                    </div>
                    <div class="row padding card-body align-items-center">
                        <div class="col-lg-4">
                            <img class="img-fluid card-img" src="images/smith-1.jpg" alt="image" style="">
                        </div>
                        <div class="col-md-12 col-lg-8">
                            <h3 class="card-title">Interview with LDC Guild President</h3>
                            <h6 style="font-weight: bold;" class="d-flex justify-content-between">
                                <span>
                                    <i class="fa fa-edit"></i> Story by The Editor
                                </span>
                                <img class="img-fluid" src="images/lukard_avatar.jpg" alt="Lukenge-Benard"
                                    style="width: 40px; margin-top: -15px; border-radius: 100%;">
                            </h6>
                            <p class="card-text">
                                Having any doubts on whether leadership and good looks have any intersection whatsoever? I'm quite
                                sure you just haven't met H. E Rutebemberwa Smith! The cutest man from the land of Ankole currently
                                residing over a team of eight Guild officials leading an entire intake of close to three hundred and
                                fifteen 2020/2021 lawyers.
                            </p>
                            <p class="card-text">
                                The Law Development Centre opening its third branch at Lira Campus, the first and second being
                                Kampala Main Branch and Mbarara, brings with it a new feel and style to the air the campus has been
                                used to. Yes, the full time high standard taste in attire is not an attribute shared only by Mr.
                                Smith. No, my friend, the university just got itself three hundred and fifteen recruits pulling off
                                a completely new swag for the campus.
                                <br> 
                                ...
                                <br>
                                <a href="/ldc-guild-president-interview" class="btn btn-outline-primary">Read more</a>
                            </p>

                        </div>
                    </div>
                </div>
    </div>


















    <!--THIS WEEK ON CAMPUS WEEKLY-->
    {{!-- <div class="container" >
        <div class="card" style="margin-bottom: 10px;">
            <div class="row padding card-body">
                <div class="col-lg-3">
                    <img class="img-fluid card-img" src="images/news3.jpg" alt="image" style="">
                </div>
                <div class="col-md-12 col-lg-9 ">
                    <h3 class="card-title">THIS WEEK ON CAMPUS WEEKLY</h3>
                    <h6 style="font-weight: bold;">
                        <i class="fa fa-edit"></i> Story by The Editor
                        <img class="img-fluid" src="images/lukard_avatar.jpg" alt="Lukenge-Benard"
                            style="width: 40px; margin-top: -15px; border-radius: 100%;">
                    </h6>
                    <p class="card-text">
                        
                        Saying that this has been a rather interesting week would be an extremely unfairly statement to so many! Well, let’s just take a lens! And look at events going backwards throughout this entire week.
                        &nbsp;
                        ...
                        <a href="/saturday-19-june-2021" class="btn btn-outline-primary">Read more</a>
                        <br>
                        Date: Sat-19/06/21
                        
                    </p>
                </div>
            </div>
        </div>
    </div> --}}

    <!--I AM NOT FINE-->
   <div class="container">
        <div class="card" style="margin-bottom: 10px;">
            <div class="row padding card-body">
                <div class="col-lg-3">
                    <img class="img-fluid card-img" src="images/lukard_logo.jpg" alt="image" style="">
                </div>
                <div class="col-md-12 col-lg-9">
                    <h3 class="card-title">I AM NOT FINE</h3>
                    <h6 style="font-weight: bold;">
                        <i class="fa fa-edit"></i> Story From
                        <a href="https://adventuresoflukard.herokuapp.com" target="_blank"
                            style="text-decoration: none; ">Lukard Adventures</a>
                        <img class="img-fluid" src="images/lukardlogo.jpg" alt="lukard"
                            style="width: 40px; margin-top: -15px; border-radius: 100%;">
                    </h6>
                    <p class="card-text">
                        Do not let my show fool you. Please don’t! I am not fine. I know I am supposed to be alright; but I am not. I am very much afraid to tell anyone either because I pretty much do not want to make anyone uncomfortable.
                        &nbsp;
                        ...
                        <a href="https://adventuresoflukard.herokuapp.com/fine" class="btn btn-outline-primary">Read more</a>
                        
                        
                    </p>
                </div>
            </div>
        </div>
    </div> 
