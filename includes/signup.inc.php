<?php

	if(isset($_POST['signup-submit'])) {
		
		require 'dbh.inc.php';

		$username = $_POST['id'];
		$email = $_POST['mail'];
		$password = $_POST['pwd'];
		$rePwd = $_POST['rePwd'];

		if (empty($username) || empty($email) || empty($password) || empty($rePwd)) {
			header("Location: ../signup.php?error=emptyfields&id=".$username."&email=".$email);
			exit();
		} 

		else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)) {
			header("Location: ../signup.php?error=invalidmailuser");
			exit();
		}

		else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			header("Location: ../signup.php?error=invalidemail&id=".$username);
			exit();
		}
		else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
			header("Location: ../signup.php?error=invalidusername&email=".$email);
			exit();
		}

		elseif ($password !== $rePwd) {
			header("Location: ../signup.php?error=passwordCheck&id=".$username."&email=".$email);
			exit();
		}

		else {
			$sql = "SELECT userNameAdmin FROM admin WHERE userNameAdmin=?";
			$stmt = mysqli_stmt_init($conn);

			if (!mysqli_stmt_prepare($stmt, $sql)) {
				header("Location: ../signup.php?error=sqlerror1");
				exit();
			}

			else {
				mysqli_stmt_bind_param($stmt, "s", $username);
				mysqli_stmt_execute($stmt);
				mysqli_stmt_store_result($stmt);
				$resultCheck = mysqli_stmt_num_rows($stmt);

				if ($resultCheck > 0) {
					header("Location: ../signup.php?error=usernameTaken&mail=".$email);
				exit();
				}

				else {
					$sql = "INSERT INTO admin (userNameAdmin, emailAdmin, pwdAdmin) VALUES (?, ?, ?)";
					$smtm = mysqli_stmt_init($conn);
					if (!mysqli_stmt_prepare($stmt, $sql)) {
						header("Location: ../signup.php?error=sqlerror2");
						exit();
					}
					else {
						$hashedPwd = password_hash($password, PASSWORD_DEFAULT);

						mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPwd);
						mysqli_stmt_execute($stmt);
						header("Location: ../signup.php=success");
						exit();
					}

				}
			}
		}
		mysqli_stmt_close($stmt);
		mysql_close($conn);


	}

	else {
		header("Location: ../signup.php");
		exit();
	}