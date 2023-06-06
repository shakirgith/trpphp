
<?php
include('layout/header.php');

$ok = '';
$css_hide = 'style="display: none"'; 


if(isset($_POST['submit'])) {
// print_r($_POST);
    $Title = $_POST['gender'];
    $Name = $_POST['user_name'];
    $Email = $_POST['user_email'];
    $Subject = $_POST['subject'];
    $Message = $_POST['message'];

    // send and insert data from database 
    $insertquery = "insert into contactus (Title, Name, Email, Subject, Message) values('$Title','$Name','$Email','$Subject','$Message')";

    $result = mysqli_query($conn, $insertquery);


    if($result) {
         // echo "Data inserted Successful "; 
          $ok = 1;  
          $css_hide = 'style="display: block"'; 
          

        
    } else {
        //echo "ata not inserted";
        $ok = 2;  
         $css_hide = 'style="display: block"'; 
        
    }
}


?>

<div class="page-heading"><h1>Contact us</h1></div>   
<main id="main" class="site-main mt-0">
       
  <section class="text-center">
    <div class="container">
        <div class="heading"><span class="subtitle">Need more help?</span>
            <h2>Have a <span>Question?</span></h2><span class="dot1"></span><span class="dot1"></span><span class="dot1"></span><span class="dot"></span>
        </div>
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
            <form action="" method="POST">
                <fieldset>
                    <div class="mb-3">
                        <select class="form-select form-control" name="gender" aria-label="Default select example">
                              <option selected>Select Title</option>
                              <option value="Mr">Mr</option>
                              <option value="Mrs">Mrs</option>
                              <option value="Miss">Miss</option>
                        </select>
                    </div>
                    <div class="mb-3"><input type="text" name="user_name" placeholder="Name" class="form-control" value="" required><span class="error-message"></span></div>
                    <div class="mb-3"><input type="email" class="form-control" pattern="[^ @]*@[^ @]*" placeholder="Email Address" name="user_email" value="" required><span class="error-message"></span></div>
                    <div class="mb-3"><input type="text" class="form-control" placeholder="Subject" name="subject" value="" required><span class="error-message"></span></div>
                    <div class="mb-3"><textarea class="form-control" cols="30" rows="8" placeholder="Your message" name="message" required></textarea><span class="error-message"></span></div>
                    <button name="submit" type="submit" class="btn dark-btn mt-4">Send Message </button>
                </fieldset>

            </form>
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



