<?php  
	require "header.php";
?>


<main>
	<div class="wrapper-main">
		<selection class="selection-default">
			<h1>SignuUp!</h1>
			<form action="includes/signup.inc.php" method="post">
				<input type="text" name="id" placeholder="Usename">
				<input type="text" name="mail" placeholder="E-Mail">
				<input type="password" name="pwd" placeholder="Password">
				<input type="password" name="rePwd" placeholder="Repeat Password">
				<button type="submit" name="signup-submit"><a href="site/acasa.php">SignUp</a></button>
				
			</form>
		</selection>
		<
	</div>
</main>


<?php 
	require "footer.php"
?>