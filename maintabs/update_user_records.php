<?php 
                            //updating username , surname , firstname
                                if(isset($_REQUEST['surname'])){

                                    $user_id = $_REQUEST['user_id'];
                                    $surname = $_REQUEST['surname'];
                                    $firstname = $_REQUEST['firstname'];
                                    $username = $_REQUEST['username'];
                                
                                    $update_names = "update tbl_user set surname='$surname',firstname='$firstname',username='$username' where user_id='$user_id'";
                                    if($mysqli->query($update_names)===TRUE){
                                        echo "names changed succesfully";
                                    }else{
                                        echo "names upadted failed .Try Again";
                                    }

                                }

                                // updating sex , date of birth an phonenumber
                                if(isset($_REQUEST['date'])){
                                    $sex = $_REQUEST['sex'];
                                    $dob = $_REQUEST['date'];
                                    $phonenumber = $_REQUEST['phoneNumber'];
                                    $user_id = $_REQUEST['user_id'];
                                    
                                
                                    $update = "update tbl_user set date_of_birth = '$dob',phone_number='$phonenumber',sex ='$sex' where user_id = '$user_id' ";
                                    if($mysqli->query($update)===TRUE){
                                        echo "details updated";
                                    }else{
                                        echo "Details Not upated , Try Again";
                                    }
                                }

                                 // updating profile picture   
                                if(isset($_REQUEST['update_photo'])){
                                    $target_dir = "../profile/";
                                    $target_file = $_FILES["sampleFile"]["name"];
                                    $image_location = $target_dir.basename($_FILES["sampleFile"]["name"]);
                                    $user_id = $_REQUEST['user_id'];

                                    if(move_uploaded_file( $_FILES["sampleFile"]["tmp_name"],$image_location)){

                                        $update_profile_photo = "update tbl_user set profile_photo = '$target_file' where  user_id = '$user_id'";
                                        if($mysqli->query($update_profile_photo)===TRUE){
                                            echo "Profile photo updated";
                                        }else{
                                            echo "photo not updated.Try Again ";
                                        }

                                    }else{
                                        echo "Error in uploading a file .Try Again";
                                    }
                                }

                                //upating password details
                                if(isset($_REQUEST['currentPassword'])){
                                    $currentpassword = $_REQUEST['currentPassword'];
                                    $newPassword = $_REQUEST['newPassword'];
                                    $confirmPassword = $_REQUEST['confirmPassword'];
                                    $user_id = $_REQUEST['user_id'];
                                
                                    $select_user_password = "select * from tbl_user  where user_id = '$user_id'";
                                    $select_user_result = $mysqli->query($select_user_password);
                                    while($row = $select_user_result->fetch_assoc()){
                                        if($row['password'] == $currentpassword){
                                            if($newPassword == $confirmPassword){
                                                
                                                $updated_password = "update tbl_user set password = '$newPassword' where user_id = '$user_id'";
                                                if($mysqli ->query($updated_password)===true){
                                                    echo "Password changed successfully";
                                                }else{
                                                    echo "Password Could not be changed , Try Again";
                                                }
                                
                                            }else{
                                                echo "password mismatch";
                                            }
                                
                                        }else{
                                            echo "Invaild entry. Try again";
                                        }
                                    }   

                                }
                                
                            ?>