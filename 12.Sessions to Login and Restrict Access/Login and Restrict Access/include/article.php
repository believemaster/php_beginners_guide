<?php
	/**
	*Get the article based on the ID
	*
	*@param connectin $conn object to the database
	*@param integer $id the article ID
	*@param string $columns optional list of columns for the select, defaults to *
	*
	*@return mixed an Associative array containing the article with that ID, or null if not found
	**/

		function getArticle($conn, $id, $columns='*')
		{
			$sql = "SELECT $columns
							FROM article
							WHERE id = ?";

			$stmt = mysqli_prepare($conn, $sql);

			if($stmt === false)
			{
				echo mysqli_error($conn);
			} else {
				mysqli_stmt_bind_param($stmt, "i", $id);
				if(mysqli_stmt_execute($stmt))
				{
					$result = mysqli_stmt_get_result($stmt);

					return mysqli_fetch_array($result, MYSQLI_ASSOC);
				}
			}
		}

/**
*Validate the article properties
*
*@param string $title Title Required
*@param string $content Content Required
*@param string $published_at Published Data and Time , yyyy-mm-dd hh:mm:ss if not blank
*
*@return array an array of validation error messages
**/

		function validateArticle($title, $content, $published_at)
		{
			$errors=[];

			if($title=='')
			{
				$errors[] = "Title is Required";
			}
			if ($content=='')
			{
				$errors[] = "Content is Required";
			}
			if($published_at != '')
			{
				$date_time = date_create_from_format('Y-m-d H:i:s', $published_at);

				if ($date_time == false) {
					$error[] = "Invalid Date and Time";
				} else {
					$date_errors = date_get_last_errors();
					if($date_errors('warning_count'>0))
					{
						$errors[] = "Invalid Date & Time";
					}
				}
			}
			return $errors;
		}
?>
