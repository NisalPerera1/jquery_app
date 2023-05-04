<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  
  // Send a response back to the client
  echo 'Form submitted successfully!'
  ?>
 
<h6>Here Is your Submitted Details</h6>

  <?php
  // Display the form data on the page
  echo 'Name: ' . $name . '<br>';
  echo 'Email: ' . $email . '<br>';
}
?>

