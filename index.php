<!DOCTYPE html>
<html>
<head>
  <title>AJAX Form Submission Example</title>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>

    //when document submmit it stops loading
    $(document).ready(function() {
      $('#myForm').submit(function(event) {
        event.preventDefault(); // Prevent form submission

        //  sends an AJAX request to the server using jQuery.
        $.ajax({
          type: 'POST',
          url: 'reciever.php',//to handle the data. but in my application i dont handle.only display
          data: $('#myForm').serialize(),//ajax req ekak yawana format ekata serialized kara
//if success callback function 
          success: 
          function(response) {
            $('#response').html(response); // Display response on the page
          },
//else 
          error: function(error) {
            console.log(error);
          }
        });
      });
    });

  </script>
</head>
<body>
  <h1>PHP Form Submission USING AJAX</h1>
  <form action="" id="myForm" method="POST" >
    <label for="name">Name:</label>
    <input type="text" id="name" name="name"><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email"><br>

    <input type="submit" value="Submit">
  </form>

  <!-- Display response from the server -->
  <div id="response"></div>
  <?php 

  ?>

</body>
</html>
