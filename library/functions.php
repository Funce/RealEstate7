<?php
	function login($email, $password)
	// Login function which returns True if there is a match in db. The session is also set.
	{
		$query = "SELECT * FROM tbl_member WHERE m_email = '$email'";
		$result = mysqli_query($link, $query);
		if (!mysqli_num_rows($result))
		{
			return FALSE;
		}
		$row = mysqli_fetch_array($result);
		if ($row['m_password'] !== "$password")
		{
			return FALSE;
		}
		mysqli_free_result($result);
		$_SESSION['user']['email'] = $row['m_email'];
		$_SESSION['user']['id'] = $row['m_id'];
		$_SESSION['user']['role'] = $row['m_role'];
		return TRUE;
	}
	
	function register($email, $password)
	// function to be called when db assistance is required. Will return False if already exists.
	{
		$query = "SELECT * FROM tbl_member WHERE m_email = '$email'";
		$result = mysqli_query($link, $query);
		if (mysqli_num_rows($result))
		{
			return FALSE;
		}
		mysqli_free_result($result);
		$query = "INSERT INTO tbl_member (m_email, m_password, m_role) VALUES ('$email', '$password', 1)";
		mysqli_query($link, $query);
		return TRUE;
	}

	function disconnect()
	// Disconnects from the database. Run at the end if you've included config.
	{
		mysqli_close($link);
	}
?>