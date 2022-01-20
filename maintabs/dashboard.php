<?php 
    include '../dbconfig.php'
?>
<!--hr on top-->
<div class="container-fluid">
    <div class="row ">
        <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
            <div class="row align-items-center mr-2">
                <div class="col-12">
                    
                    <h1 class="d-flex justify-content-between align-items-center">
                        <span >ALL</span>
                        <a href="/create" class="btn btn-outline-primary"  >create</a>
                    </h1>
                    <hr style="width: 100%; border: 10px solid #051e58;">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Stories From Database -->


<!--Two column section-->
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
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
                <div class="row padding card-body align-items-center">
                    <div class="col-lg-4">
                        <img class="img-fluid card-img" src="../images/driving.jpg" alt="image" style="">
                    </div>
                    <div class="col-md-12 col-lg-8">                
                       
                        <h1 class="card-title">Ooops!....</h1>
                        <h5 style="font-weight: bold;" class="d-flex justify-content-between">
                            <span>                            
                                <a href="/feed" style="text-decoration: none; ">Looks like there are No Published Posts Yet...</a>
                            </span>
                            <img class="img-fluid" src="../images/avatarT.jpg" alt="lukard"
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

        </div>
    </div>
</div>

<?php 
    //$mainselect = "select * from tbl_post inner join tbl_post_paragraphs on tbl_post.post_id = tbl_post_paragraphs.post_id join tbl_image on tbl_image.post_id = tbl_post.post_id join tbl_user_vs_post on tbl_user_vs_post.post_id =tbl_image.post_id  join tbl_user on tbl_user.user_id =   order by tbl_post.post_id desc " ;   
    $mainselect = "SELECT po.post_id, po.post_title, po.post_date, po.post_approval, pa.paragraph, u.surname, u.firstname, u.profile_photo, i.image_file FROM tbl_post po JOIN tbl_post_paragraphs pa ON po.post_id = pa.post_id JOIN tbl_user_vs_post uvp ON po.post_id = uvp.post_id JOIN tbl_image i ON po.post_id = i.post_id JOIN tbl_user u ON uvp.user_id = u.user_id  ORDER BY po.post_id DESC";
    $result = $mysqli->query($mainselect);
    while($row = $result->fetch_assoc()){?>
              <!--THE AFRICAN CHILD-->
  
          <div class="container-fluid">
            <div class="row">
                <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
                    <div class="card" style="margin-bottom: 10px;">
                        <div class="card-header">
                            <div class="d-flex justify-content-between">
                                <div class="text-right text-secondary">
                                    <span class="badge badge-danger p-2" style="border-radius: 40%; font-weight: lighter;">NEW</span>
                                    <span class="text-muted" style=" font-weight: lighter;"><?php echo $row['post_date']?></span>
                                </div>
                                <button onclick="captureShareLink({{this.post_id}});" class="btn"><i class="fa fa-share-alt fa-lg text-muted p-1"></i></button>
                
                            </div>
                        </div>
                        <div class="row padding card-body align-items-center">
                            <div class="col-lg-4" style="">
                                    <img class="img-fluid card-img" src="<?php echo "../uploads/".$row['image_file']?>"  style="">
                               
                            </div>
                            <div class="col-md-12 col-lg-8">
                                <h3 class="card-title" style="color: blue;"><?php echo $row['post_title']?></h3>
                                <h6 style="font-weight: bold;" class="d-flex justify-content-between align-items-center">
                                    <span >
                                        <i class="fa fa-edit"></i> Story by <?php echo $row['surname'] ?>   <?php echo $row['firstname'] ?>  
                                    </span>
                                    <?php 
                                        if($row['profile_photo'] == ''){?>
                                            <img src="../images/avatarT.jpg"  class="rounded-circle mr-3" style="height: 36px; width: 40px; background-color:  rgb(156, 156, 156);">
                                        <?php 
                                        }else{?>
                                           <img src="<?php echo "../uploads/".$row['image_file']?>"  class="rounded-circle mr-3" style="height: 36px; width: 40px; background-color:  rgb(156, 156, 156);">

                                      <?php }
                                    ?>
                                   
                                </h6>
                                <p style="white-space: pre-line;">
                                <?php echo $row['paragraph']?> 
                                    <a href="/story/?id={{this.post_id}}" class="btn btn-outline-primary">see full story</a>
                                </p>                                
                            </div>
                        </div>
                    </div>

                </div>
            </div>
          </div>





    <?php }
?>





