<?php

	if (isset($_GET['txt'])) {
		$name = "./docs/".date("YmdhisA", time()).".html";
		$text = $_GET['txt'];
		$file = fopen($name, 'w');
		if (fwrite($file, $text)) {
			fclose($file);
			echo date("YmdhisA", time());
		} else {
			echo "Não salvo";
		}
	} elseif (isset($_GET['nud'])) {

		if (file_exists("./docs/".$_GET['nud'].".html")) {
			echo file_get_contents("./docs/".$_GET['nud'].".html");
		} else {
			echo "false";
		}
	}
 
?>