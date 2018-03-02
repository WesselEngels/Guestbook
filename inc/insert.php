<?php
if(isset($_POST['submit'])){
    $sqlreview = "SELECT firstname, lastname, email, website, title, message FROM guestbook";

  $result = $conn->query($sqlreview);
  echo "<div id='container-show'>";
  if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {

          echo $row['firstname']. " ";
          echo $row['lastname']. "<br>";
          echo $row['email'];
          echo $row['website']. "<br>";
          echo $row['title']. "<br>";
          echo $row['message']. "<br><br>";

      }
  }
}
  echo "</div>";
    mysqli_close($conn);
  ?>
