
<?php
include('layout/header.php');

if(!isset($_SESSION['fname'])){
  echo "your are logged out";
 // header('location:login.php');
  ?>
        <script type="text/javascript">
            location.replace("login.php");
        </script>
<?php

}


?>



<div class="page-heading"><h1>Profile</h1></div>   
<main id="main" class="site-main mt-0">
       
  <section class="text-center">
    <div class="container">

          <div class="heading"><span class="subtitle">Congratulations!</span>
              <h2>Welcome to<span> <?php echo $_SESSION['fname'];?></span></h2><span class="dot1"></span> <span class="dot1"></span><span class="dot1"></span><span class="dot"></span>
          </div>
        <p>Please send us a message and we’ll be glad to help!</p>

        <a href="logout.php">Logout</a>

      

       
    </div>
</section>

</main>

<?php

include('layout/footer.php');

?>