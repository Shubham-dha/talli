<?php
include 'header.php';
include 'connection.inc.php';
error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
?>
    <!--Signup Form Start -->
    <div class="container-fluid" id="login">
    <div class="container">
        <div class="row">
            <?php 
            if(isset($_POST['signup'])){
                extract($_POST);
                if(strlen($first_name)<3)
                {
                    $error[]='Please enter First name using 3 characters atleast';
                }
                if($password != $passwordconfirm){
                    $error[]='password does not match.';
                }
                $sql="select * from users where (email='$email');";
    
                $res=mysqli_query($con,$sql);
                if(mysqli_fetch_assoc($res)>0){
                    if ($email==$row['email'])
                    $row=mysqli_query($con,$sql);
                {
                   $error[]='User Already Registered';
               }

                }
                
                if(!isset($error)){
                    $date=date('Y-m-d');
                    $options = array("cost"=>4);
    $password = password_hash($password,PASSWORD_BCRYPT,$options);

                    $result=mysqli_query($con,"INSERT INTO `users` (`id`, `first_name`, `last_name`, `country_code`, `mobile_number`, `email`, `dob`, `gender`, `profile_image_path`, `profile_image_name`, `type`, `status`, `social_id`, `social_type`, `email_otp`, `email_otp_verified`, `device_id`, `device_type`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) 
                    VALUES (NULL, '$first_name', '$last_name', NULL, '$mobile_number', '$email', NULL, '$gender', NULL, NULL, 'U', '1', NULL, NULL, NULL, NULL, NULL, '2', NULL, '$password', NULL, '$date', '$date', NULL);");
                    if($result)
                    {
                        $done=2;
                    }
                    else{
                        $error[]='Failed : Something went wrong';
                    }
                }
            }
        
            ?>
            <div class="col-md-3">
                <?php 
                if(isset($error))
                {
                    foreach($error as $error){
                        echo '<p >&#x26A0;'.$error.'</p>';
                    }
                }
                ?>

            </div>
                <?php if(isset($done)){
                    ?>
                <div class="successmsg"><br>You have registered successfully.<br><a href="login.php">login here..</a> </div>    
                <?php } else{ ?>
                    
                  <div class="col-md-6 p-5 mt-5" id="login-form">
                        
                        <form action=" " method="post">
                        
                        <div class="mb-3">
                           <input type="text" class="form-control" name="first_name" placeholder="First name" aria-label="First Name" value="<?php 
                           if(isset($error)){echo $first_name ;}  ?>">
        
                        </div>
                        <div class="mb-3">
                           <input type="text" class="form-control" name="last_name" placeholder="Last name" aria-label="Last Name"value="<?php 
                           if(isset($error)){echo $last_name ;}  ?>">
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control"  name="gender"   placeholder="Gender" required=""
                            value="<?php 
                           if(isset($error)){echo $gender ;}  ?>">
                         </div>
                        <div class="mb-3">
                            <input type="email" class="form-control"  name="email"  aria-describedby="emailHelp" placeholder="Email" required=""
                            value="<?php 
                           if(isset($error)){echo $email ;}  ?>">
                         </div>
                         <div class="mb-3">
                                <input type="tel" class="form-control"   name="mobile_number"  placeholder=" Mobile Number" required=""
                                value="<?php 
                           if(isset($error)){echo $mobile_number ;}  ?>">
                            </div>
                         <div class="mb-3">
                            <input type="password" class="form-control" name="password" id="inputPassword1" placeholder="Password">
                        </div>
                       <div class="mb-3">
                           <input type="password" class="form-control" name="passwordconfirm" id="inputPassword2" placeholder=" Confirm Password">
                        </div>
                        <div class="col-12">
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                         I agree the Terms & Conditions
                        </label>
                            </div>
                        </div>
                             
                        <button href="login.php" type="submit" class="btn btn-signup btn-md mt-3" name="signup" role="button" onclick="" data-bs-toggle="button">Sign Up</button>
                        <?php }?>
                            </form>
                        
                        </div>
                        <div class="col-md-3">

                        </div>
                     </div>
                </div>
            </div>
    <!--Signup Form End -->