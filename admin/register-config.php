   
     <?php 
            include '../dbconfig.php';
            if(isset($_POST['email'])){
                
                $firstname = $_POST['firstname'];
                $surname  = $_POST['surname'];
                $email = $_POST['email'];
                $psw = $_POST['password'];
                $conf_psw = $_POST['passwordConfirm'];
                
                if($psw == $conf_psw){
                    $insert  = $mysqli->prepare("insert into tbl_user(surname,firstname,email,password)values(?,?,?,?)");
                    $insert->bind_param("ssss", $firstname, $surname, $email,$psw);
            
                    if( $insert->execute()=== TRUE){ 
                      
                        ?>
                        <script>
                            window.location.href = "login.php";
                        </script>

                       <?php

                    }else{ ?>
                        <div class="mt-2 input-group-text text-white font-weight-bold">
                            <h5>Failed to insert data</h5>
                        </div>

                    <?php
                       
                    }
                }else{ ?>
                    <div class="mt-2 input-group-text text-white font-weight-bold">
                        <h5>Password mismatch</h5>
                    </div>
                    
                <?php }

                
            }
            $mysqli->close();
        ?>