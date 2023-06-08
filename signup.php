
<?php
include('layout/header.php');

$ok = '';
$css_hide = 'style="display: none"'; 


if(isset($_POST['registerSubmit'])) {
    $title = mysqli_real_escape_string($conn, $_POST['gender']);
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
    $email = mysqli_real_escape_string($conn, $_POST['user_email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);

    $pass = password_hash($password, PASSWORD_BCRYPT);
    $cpass = password_hash($cpassword, PASSWORD_BCRYPT);

    $emailquery = "select * from register where eamil='$email' ";
    $query = mysqli_query($conn, $emailquery);

    $emailcount = mysqli_num_rows($query);

    if($emailcount>0) {

          echo "email already exists"; 

    } else {

         if($password === $cpassword) {

            $insertquery = "insert into register (title, fname, mobile, email, password, cpassword) values('$title','$fname','$mobile','$email','$pass','$cpass')";
            $iquery = mysqli_query($conn, $insertquery);

              if($iquery){
                 echo "user data inserted successfully"; 
              } else {
                 echo "Not inserted"; 
              }


         } else {
            echo "password are not matching";
         }
        
    }


}


?>

<div class="page-heading"><h1>Register</h1></div>   
<main id="main" class="site-main mt-0">
       
  <section class="text-center">
    <div class="container">
        <p>Please send us a message and we’ll be glad to help!</p>

         <div id="mydiv" class="message-block pt-4">
                <?php       

                if($ok == 1) { 

                ?>

                <p class="success-message" <?php echo $css_hide ?>>Your message has been successfully sent!</p>

                <?php } else {
                     // echo "<div id='formHELP2' style='display: block'>";
                    ?>

                 <p class="error-message" <?php echo $css_hide ?>>There was an error trying to send again your message after some time</p>

                <?php }

                ?>

                </div>

        <div class="col-lg-6 mx-auto">
            <form  class="mb-3" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
                <fieldset>
                    <div class="mb-3">
                        <select class="form-select form-control" name="gender" aria-label="Default select example">
                              <option selected>Select Title</option>
                              <option value="Mr">Mr</option>
                              <option value="Mrs">Mrs</option>
                              <option value="Miss">Miss</option>
                        </select>
                    </div>
                    <div class="mb-3"><input type="text" name="fname" placeholder="Full Name" class="form-control" value="" required><span class="error-message"></span></div>
                     <div class="mb-3"><input type="number" name="mobile" maxlength="10" placeholder="Mobile Number" class="form-control" value="" required><span class="error-message"></span></div>
                    <div class="mb-3"><input type="email" class="form-control" pattern="[^ @]*@[^ @]*" placeholder="Email Address" name="user_email" value="" required><span class="error-message"></span></div>
                    <div class="mb-3"><input type="password" class="form-control" placeholder="Password" name="password" value="" required><span class="error-message"></span></div>
                     <div class="mb-3"><input type="password" class="form-control" placeholder="Confirm Password" name="cpassword" value="" required><span class="error-message"></span></div>

                    <button name="registerSubmit" type="submit" class="btn dark-btn mt-4">Register Now </button>
                </fieldset>

            </form>
            <p>Have an account? <a href="login.php">Login Here</a>

        </div>
    </div>
</section>

</main>

<?php
include('layout/footer.php');

?>

<script>
    $('#mydiv').delay(5000).hide(0); 
</script>



