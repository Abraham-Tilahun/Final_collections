
			<?php
				  if (isset($_GET['id']))
	{
			$messages_id = $_GET['id'];
			echo '<form action="deleteoption.php" method="post">';
			echo '<input name="id" type="hidden" value="'. $messages_id . '" />';
			echo 'Are you sure you want to delete this item?';
			echo '<div>'.'<input name="yes" type="submit" value="Yes" /> &nbsp;&nbsp;&nbsp;&nbsp;<input name="no" type="submit" value="No" />'.'</div>';
			echo '</form>';
			
	}
			?>
			