<?php

    if(isset($_POST['submit'])){
        include '../dbconfig.php';

        $date = $_POST['date'];
        $category = $_POST['category'];
        $title = $_POST['title'];
        $message = $_POST['paragraph'];
        $user_id = $_POST['user_id'];

        $target_dir = "../uploads/";
        $target_file = $_FILES["coverPhoto"]["name"];
        $image_location = $target_dir.basename($_FILES["coverPhoto"]["name"]);
        

        
        $insert = "insert into tbl_post(post_title,post_date,post_approval) values('$title','$date','1')";
        if($mysqli->query($insert)===TRUE){
            $last_id = $mysqli->insert_id;
            echo  $last_id;

            $insert_paragraph = "insert into tbl_post_paragraphs(paragraph,post_id) values('$message','$last_id')";
            if($mysqli->query($insert_paragraph)===TRUE){
                echo "Inserted paragraph";
                $select_category = "select * from tbl_post_category where post_category = '$category'";
                $res = $mysqli->query($select_category);
                $row = $res->fetch_assoc();
                echo $row['post_category_id'];
                $category_new_id = $row['post_category_id'];

                $insert_post_category = "insert into tbl_post_vs_category(post_id,post_category_id)values('$last_id','$category_new_id')";
                if($mysqli->query($insert_post_category)===TRUE){
                    echo "Category post table added";
                }else{
                    echo "category post table left blank";
                }

                $insert_user_post_id = "insert into tbl_user_vs_post(user_id,post_id)values('$user_id','$last_id')";
                if($mysqli->query($insert_user_post_id)===TRUE){
                    echo"User id captured successfully";
                }else{
                    echo "User id not captured";
                }
                // image upload into the folder
                if (move_uploaded_file($_FILES["coverPhoto"]["tmp_name"], $image_location)) {
                    echo "The file ". htmlspecialchars( basename( $_FILES["coverPhoto"]["name"])). " has been uploaded.";

                    $insert_image = "insert into tbl_image(image_file,post_id)values('$target_file','$last_id')";
                    if($mysqli->query($insert_image)===TRUE){
                        echo "Image inserted and uploaded successfully";
                    
                    }else{
                        echo "Image not inserted";
                    }

                  } else {
                    echo "Sorry, there was an error uploading your file.";
                  }

            
            }else{
                echo "Paragraph not inserted";
            }
        }else{
            echo "Post not added";
        }
    }else{
        echo"Button not clicked";
    }

?>