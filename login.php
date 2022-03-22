<?php
include 'header.php';
?>
    <!--Signup Form Start -->
    <div class="container-fluid" id="login">
    <div class="container">
        <div class="row">
            <div class="col-md-3">

            </div>
                  <div class="col-md-6 p-5 mt-5 animate__animated animate__zoomIn" id="login-form">
                        <h3>Login</h3>
                        <hr class="mb-4">
                        <?php if(isset($_GET['loginerror'])){
                            $loginerror=$_GET['loginerror'];
                        } 
                        if(!empty($loginerror)){
                            echo '<p class="errmsg">Invalid Login Credentials,Please Try Again..<p>'; 
                        }
                        ?>
                        <form action="login_process.php" method="Post" class="">
                        <div class="mb-3">
                            <input type="email" class="form-control"  name="email"  aria-describedby="emailHelp" placeholder="Email" required="">
                         </div>
                        
                         <div class="mb-3">
                            <input type="password" class="form-control" name="password" id="inputPassword2" placeholder="Password">
                        </div>
                        <button href="index.php" name= "sublogin"class="btn btn-signup btn-md mt-3" role="button" data-bs-toggle="button">Log in</button>
                            </form>
                        </div>
                        <div class="col-md-3">

                        </div>
                     </div>
                </div>
            </div>
    <!--Signup Form End -->












































