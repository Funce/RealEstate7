<?php
	function login($email, $password)
	// Login function which returns True if there is a match in db. The session is also set.
	{
		global $link;
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
		global $link;
		$query = "SELECT * FROM tbl_member WHERE m_email = '$email'";
		$result = mysqli_query($link, $query);
		if (mysqli_num_rows($result)) // Succeeds if non-empty set is reached
		{
			return FALSE;
		}
		mysqli_free_result($result);
		$query = "INSERT INTO tbl_member (m_email, m_password, m_role) VALUES ('$email', '$password', 1)";
		mysqli_query($link, $query);
		return TRUE;
	}

	function button_class($button_type)
	{
		switch($button_type)
		{
			case 1:
				return "btn btn-success";
			case 2:
				return "btn btn-info";
			case 3:
				return "btn btn-warning";
			default:
				return "btn";
		}
	}

	function button_text($button_type)
	{
		switch($button_type)
		{
			case 1:
				return "For Sale";
			case 2:
				return "For Rent";
			case 3:
				return "For Lease";
			default:
				return "Something went wrong";
		}
	}

	function disconnect()
	// Disconnects from the database. Run at the end if you've included config.
	{
		mysqli_close($link);
	}
?>