<?php
  define ('TITLE', 'Contact Us');
  include('templates/header.html');
          // Check if the form has been submitted:
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

          $problem = FALSE; // No problems so far.

          // Check for each value:
          if (empty($_POST['first_name'])) {
            $problem = TRUE;
            print '<p class="error">Please enter your first name!</p>';
          }
          if (empty($_POST['last_name'])) {
            $problem = TRUE;
            print '<p class="error">Please enter your last name!</p>';
          }
          if (empty($_POST['email']) || (substr_count($_POST['email'], '@') !=1)) {
            $problem = TRUE;
            print '<p class="error>Please enter your email!</p>';
          }
          if (!$problem) {  // If there weren't any problems:

          // Print a message:
          print '<div class="clear_float"></div><p>Thank you for contacting us. We will be back with you shortly.</p>';

          // Send an email:
          $first_name = $_POST['first_name'];
          $last_name = $_POST['last_name'];
          $email = $_POST['email'];
          $message = $_POST['message'];
          $body = "$first_name $last_name,\n $email,\n $message";
          mail('lothignob@hotmail.com', 'Contact from $email', $body, 'From: sean@highoctaneds.com');

          // Clear the posted values:
          $_POST = array();

          } else {  // Forgot a field:

            print '<p class="error">Please try again!</p>';
          }
        }
 
?>
  <div class="clear_float"></div><br />
	<article>
    <h2>Contact</h2>
    <p>If you would like to reach High Octane DS with questions about marketing, web design, responsive web development, or what life is like at the edge of a black hole please feel free to drop us a line.</p>
    <p>sean@highoctaneds.com</p>
    <a href="http://www.facebook.com/sean.walker.79230">Facebook</a>
    <a href="7276439962" media="phone" name="phone">727 643-9962</a>
    <div id="contact">
      
      <form action="contact.php" method="post">
        <p>Fill out this form and let us know what we can do for you.</p>
        <p>First Name: <input type="text" name="first_name" size="20" value="<?php if (isset($_POST['first_name'])) { print htmlspecialchars($_POST['first_name']); } ?>" /></p>
        <p>Last Name: <input type="text" name="last_name" size="20" value="<?php if (isset($_POST['last_name'])) { print htmlspecialchars($_POST['first_name']); } ?>" /></p>
        <p>Email Address: <input type="text" name="email" size="20" value="<?php if (isset($_POST['email'])) { print htmlspecialchars($_POST['email']); } ?>" /></p>
        <p>What should I know?<textarea name="message" id="" maxlength="5000" cols="45" rows="15" value="<?php if (isset($_POST['message'])) { print htmlspecialchars($_POST['message']); } ?>" ></textarea></p>
        <p><input type="submit" name="submit" value="Submit!" /></p>

      </form>
    </div>

  </article> 
  </div>  <!-- end bodywrapper -->
  <div class="clear_float"></div>
<?php 
  include('templates/footer.html');
?>
