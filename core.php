<?php
/**
 *
 * Adding new user role
 *
 */

if ( isset($_POST) && $_POST['action'] === 'add_user_role' ) {

	$user_role = $_POST['user_role'];
	$sanitize = preg_match('/^[a-z0-9-]+$/', $_POST['user_role']);

	// Use only lowercase characters, numbers, or "-" in rolename table
	if ( 1 === $sanitize ) {

		// Create db connection
		require_once 'db-connect.php';

		// Check connection
		if ( ! $con ) {

			// Show msg error connection 
			echo json_encode([ 'result' => 'false', 'msg' => mysqli_connect_error() ]);

		} else {

			// Check if this role exists
			$result = mysqli_query($con, "SELECT * FROM user_role  WHERE rolename	='$user_role'  ");

			// If role exists		
			if ( $result->num_rows > 0 ) {

				// Show msg error role exists
				echo json_encode([ 'result' => 'false', 'msg' => 'This role already exists' ]);

			} else {

				// Role not exists in db, can add new
				$sql_insert = "INSERT INTO user_role (rolename)	VALUES ('$user_role')";

				// Check if new role insert
				if ( $con->query($sql_insert) === TRUE ) {

					// Show msg success role adding 
					echo json_encode([ 'result' => 'true', 'msg' => 'New role created successfully' ]);

				} else {

					// Show msg error role insert
					echo json_encode([ 'result' => 'false', 'msg' => 'Error: ' . $sql_insert . '<br>' . $con->error ]);

				}

			}

		}

		// close current mysql connection
		$con->close();

	} else {

		// Show msg error sanitize rolename
		echo json_encode([ 'result' => 'false', 'msg' => 'Use only lowercase characters, numbers, or "-" ' ]);

	}

}


/**
 *
 * Adding new user
 *
 */

if ( isset($_POST) && $_POST['action'] === 'add_user' ) {

	$user_name = $_POST['user_name'];
	$user_role = (int) $_POST['user_role'];
	$sanitize = preg_match('/^[[a-zA-Z0-9-]+$/', $_POST['user_name']);

	// Use only characters, numbers, or "-" in username table
	if ( 1 === $sanitize ) {

		// Create db connection
		require_once 'db-connect.php';

		// Check connection
		if ( ! $con ) {

			// Show msg error connection 
			echo json_encode([ 'result' => 'false', 'msg' => mysqli_connect_error() ]);

		} else {

			// Check if User exists
			$result = mysqli_query($con, "SELECT * FROM user  WHERE username	='$user_name'  ");

			// If username exists		
			if ( $result->num_rows > 0 ) {

				// Show msg error User exists
				echo json_encode([ 'result' => 'false', 'msg' => 'This username already exists' ]);

			} else {

				// User not exists in db, can add new
				$sql_insert = "INSERT INTO user (username,role_id)	VALUES ('$user_name','$user_role')";

				// Check if new User insert
				if ( $con->query($sql_insert) === TRUE ) {

					// Show msg success role adding 
					echo json_encode([ 'result' => 'true', 'msg' => 'New user created successfully' ]);
					
				} else {

					// Show msg error role insert
					echo json_encode([ 'result' => 'false', 'msg' => 'Error: ' . $sql_insert . '<br>' . $con->error ]);

				}

			}

		}

		// close current mysql connection
		$con->close();

	} else {

		// Show msg error sanitize username
		echo json_encode([ 'result' => 'false', 'msg' => 'Use only characters, numbers, or "-" ' ]);

	}

} 