
			<?php
				  if (isset($_GET['id']))
	{
			$messages_id = $_GET['id'];
			echo '<form action="delete_option.php" method="post">';
			echo '<input name="id" type="hidden" value="'. $messages_id . '" />';
			echo 'Are you sure you want to delete this request?';
			echo '<div>'.'<input name="yes" type="submit" value="Yes" /><input name="no" type="submit" value="No" />'.'</div>';
			echo '</form>';
			
	}
			?>
			