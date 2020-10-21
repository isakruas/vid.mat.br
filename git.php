
<?php

	$git = shell_exec('git fetch --all && git merge origin/master');
	echo $git;

?>