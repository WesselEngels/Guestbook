<?php
require("inc/connection.php");
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $to = "wesselengels@gmail.com";
  $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
  $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $website = mysqli_real_escape_string($conn, $_POST['website']);
  $title = mysqli_real_escape_string($conn, $_POST['title']);
  $message = mysqli_real_escape_string($conn, $_POST['message']);


  // attempt insert query execution
  // close connection
  $sql = "INSERT INTO guestbook (firstname, lastname, email, website, title, message) VALUES ('$firstname', '$lastname', '$email', '$website', '$title', '$message')";
  if(mysqli_query($conn, $sql)){
  } else{
      echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
  }
  // mail($to, $firstname, $lastname, $message);
  // header('location: thankyou.html');

}
  ?>

<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <meta charset="utf-8">
    <title>Formulier</title>
  </head>
  <body>

  <div id="container-review">
    <form name="review" ACTION="" METHOD="POST" onsubmit="return checkform(this);">
      <label>First Name</label>
      </br>
      <input type="text" id="fname" autocomplete="off" name="firstname" required oninput="setCustomValidity('')" oninvalid="this.setCustomValidity('Please Enter Your First Name')" placeholder="Your name..">
    </br>
      <label>Last Name</label>
      </br>
      <input type="text" id="lname" autocomplete="off" name="lastname" required oninput="setCustomValidity('')" oninvalid="this.setCustomValidity('Please Enter Your Last Name')" placeholder="Your last name..">
    </br>
      <label>Email</label>
      </br>
      <input type="email" id="lname" autocomplete="off" name="email" required oninput="setCustomValidity('')" oninvalid="this.setCustomValidity('Please Enter valid email')" placeholder="Your email..">
    </br>
      <label>Website Adress</label>
      </br>
      <input type="url" id="lname" autocomplete="off" name="website"   oninput="setCustomValidity('')" oninvalid="this.setCustomValidity('Please Enter valid Web Adress')" placeholder="Your Web Adress..(https://www.google.nl/)">
    </br>
    <label>Message Title</label>
    </br>
    <input type="text" id="lname" autocomplete="off" name="title" required oninput="setCustomValidity('')" oninvalid="this.setCustomValidity('Please Enter valid Message Title')" placeholder="Your Message Title..">
  </br>
      <label>Message</label>
      </br>
      <textarea id="subject" name="message" autocomplete="off" required oninput="setCustomValidity('')" oninvalid="this.setCustomValidity('Please Enter Something')" placeholder="Leave your message here.." style="height:120px"></textarea>
    </br>
    <font color="#DD0000">Enter Code</font> <span id="txtCaptchaDiv" style="background-color:#A51D22;color:#FFF;padding:5px"></span>
    <input type="hidden" id="txtCaptcha"/>
    <input type="text" autocomplete="off" name="txtInput" id="txtInput" size="10" />
  </br>
    <input id="send-button" type="submit" name="submit" value="Send">
    <input id="reset-button" type="reset" value="Reset">
    </form>

  </div>
  <?php
  include("inc/insert.php");
   ?>
</body>
</html>
       <script type="text/javascript" src="js/main.js"></script>
  </body>

</html>
