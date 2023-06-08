
<?php
include('layout/header.php');

// $ok = '';
// $css_hide = 'style="display: none"'; 


if(isset($_POST['loginSubmit'])) {

    $email = $_POST['user_email'];
    $password = $_POST['password'];

    $email_search = "select * from register where email='$email' ";
    $query = mysqli_query($conn, $email_search);

    $email_count = mysqli_num_rows($query);

    if($email_count) {
         $email_pass = mysqli_fetch_assoc($query);

         $user_pass = $email_pass['password'];

        $pass_decode = password_verify($password, $user_pass);

            if($pass_decode){
              echo "login successfully";
              header('location:profile.php');
            } else {
                echo "Password incorrect";
            }
        
    } else {

    echo "Invalid Email";
        
    }
}


?>

<div class="page-heading"><h1>Login</h1></div>   
<main id="main" class="site-main mt-0">
       
  <section class="text-center">
    <div class="container">
        <p>Please send us a message and we’ll be glad to help!</p>


        <div class="col-lg-6 mx-auto">
            <form class="mb-3" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
                <fieldset>
                    <div class="mb-3"><input type="email" class="form-control" pattern="[^ @]*@[^ @]*" placeholder="Email Address" name="user_email" value="" required><span class="error-message"></span></div>
                    <div class="mb-3"><input type="password" class="form-control" placeholder="Password" name="password" value="" required><span class="error-message"></span></div>

                    <button name="loginSubmit" type="submit" class="btn dark-btn mt-4">Login</button>
                </fieldset>

            </form>
            <p>You have no account? <a href="signup.php">Regiter Here</a>

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



