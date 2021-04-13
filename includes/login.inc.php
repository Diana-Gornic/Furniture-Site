<?php 

	if (isset($_POST['login-submit'])) {
		
		require 'dbh.inc.php';

		$mailAdmin = $_POST['mailUser'];
		$password = $_POST['pwd'];

		if (empty($mailAdmin) || empty($password)) {
			header("Location: ../acasa.php?error=emptyfields");
			exit();
		}
		else {

			$sql = "SELECT * FROM admin WHERE userNameAdmin=? OR emailAdmin=?;";
			$stmt = mysqli_stmt_init($conn);

			if (!mysqli_stmt_prepare($stmt, $sql)) {
				header("Location: ../acasa.php?error=sqlerror1");
				exit();
			}
			else {
				mysqli_stmt_bind_param($stmt, "ss", $mailAdmin, $mailAdmin);
				mysqli_stmt_execute($stmt);
				$result = mysqli_stmt_get_result($stmt);
				if ($row = mysqli_fetch_assoc($result)) {
					$pwdCheck = password_verify($password, $row['pwdAdmin']);
					if ($pwdCheck == false) {
						header("Location: ../acasa.php?error=wrongpwd");
						exit();
					}
					elseif ($pwdCheck == true) {
						session_start();
						$_SESSION['userAdmin'] = $row['userNameAdmin'];
						$_SESSION['adminId'] = $row['idAdmin'];

						header("Location: ../acasa.php?login=success");
						exit();
					}
					else {
						header("Location: ../acasa.php?error=wrongpwd");
						exit();
					}
				}
				else {
					header("Location: ../acasa.php?error=nouser");
					exit();
				}

			}

		}

	}
	else {
		header("Location: ../acasa.php??");
		exit();
	}