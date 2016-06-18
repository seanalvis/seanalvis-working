<?php include "header.php" ?>

<section>
	<article class="float-left">
		<form action="contact.php" method="post">
        <p>Fill out this form and let us know what we can do for you.</p>
        <p>First Name: <input type="text" name="first_name" size="50" value="" /></p>
        <p>Last Name: <input type="text" name="last_name" size="50" value="" /></p>
        <p>Email Address: <input type="text" name="email" size="50" value="" /></p>
        <p>What should I know?<textarea name="message" id="" maxlength="5000" cols="45" rows="15" value="" ></textarea></p>
        <p><input type="submit" name="submit" value="Submit!" /></p>

      </form>
	</article>
	
</section>



<?php include "footer.php" ?>