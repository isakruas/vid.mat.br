<?php

	global $time;

	function getTime(){
	  return microtime(TRUE);
	}

	function startExec(){
	  global $time;
	  $time = getTime();
	}

	function endExec(){
	  global $time;      
	  $finalTime = getTime();
	  $execTime = $finalTime - $time;
	  return number_format($execTime, 6) . ' s';
	}

	//startExec();
 
 	/*
	* Versão 1.0.0 
	* Percorre todas as pastas e busca enquanto está percorrendo as pastas os termos relacionados
 	*/
	function search($termo_busca) {
		$pathname = "./exercicios_resolvidos";
	    $iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($pathname));
		$var =  [];
	    foreach($iterator as $item) {
	    	if (stripos($item, '\.') || stripos($item, '\..') || stripos($item, 'desktop.ini')){} else{
				if (stripos($item, '.php')){
					if (file_exists($item)) {

						$file = strtoupper(file_get_contents($item));

						$string = preg_replace(array("/(á|à|ã|â|ä)/","/(Á|À|Ã|Â|Ä)/","/(é|è|ê|ë)/","/(É|È|Ê|Ë)/","/(í|ì|î|ï)/","/(Í|Ì|Î|Ï)/","/(ó|ò|õ|ô|ö)/","/(Ó|Ò|Õ|Ô|Ö)/","/(ú|ù|û|ü)/","/(Ú|Ù|Û|Ü)/","/(ñ)/","/(Ñ)/"),explode(" ","a A e E i I o O u U n N"),$file);

						$strpos = strpos($string, $termo_busca);

						if($strpos){
							$var[]= '/'.str_replace('./', '', str_replace('\\', '/', $item));
						}
					}
				}
	    	}
	    }

		return $var; 
	}

 	/*
	* Versão 1.0.1 
	* Gera uma lista com todos os arquivos e salva em um txt, esta lista é atuaizada a cada 5 dias
	* Pega a siste de arquivos e busca somente os termos nos arquivos listados
	* Ganho no tempo de processamento a partir da 2 execução
 	*/

	function db() {
		$rst = fopen('db.txt','w');
		fwrite($rst,"");
		fclose($rst);
		$pathname = "./exercicios_resolvidos";
	    $iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($pathname));
	    foreach($iterator as $item) {
	    	if (stripos($item, '\.') || stripos($item, '\..') || stripos($item, 'desktop.ini')){} else{
				if (stripos($item, '.html')){
					if (file_exists($item)) {
						$var = '/'.str_replace('./', '', str_replace('\\', '/', $item)).PHP_EOL;
						$arquivo = fopen('db.txt','a');
						fwrite($arquivo,$var);
						fclose($arquivo);
					}
				}
	    	}
	    }
	}

	function search2($termo_busca) {


		if (!file_exists("db.txt")) {
			db();
		}

		$tempo = (strtotime(date("Y-m-d H:i:s"))-strtotime(date("Y-m-d H:i:s", filemtime("db.txt"))))/86400;
		if($tempo < 0) $tempo = $tempo * -1;

		if ($tempo > 5) {
			db();
		}

		$db = file_get_contents("db.txt");
		$db_array = explode(PHP_EOL, $db);
		$var = [];
		for ($i=0; $i < count($db_array); $i++) {
			if ($db_array[$i] !== "") {

				$r = $db_array[$i];
  
				$file = strtoupper(file_get_contents(dirname(__FILE__).$r));

				$string = preg_replace(array("/(á|à|ã|â|ä)/","/(Á|À|Ã|Â|Ä)/","/(é|è|ê|ë)/","/(É|È|Ê|Ë)/","/(í|ì|î|ï)/","/(Í|Ì|Î|Ï)/","/(ó|ò|õ|ô|ö)/","/(Ó|Ò|Õ|Ô|Ö)/","/(ú|ù|û|ü)/","/(Ú|Ù|Û|Ü)/","/(ñ)/","/(Ñ)/"),explode(" ","a A e E i I o O u U n N"),$file);

				$strpos = strpos($string, $termo_busca);

				if($strpos){
					$var[]= '/'.str_replace('./', '', str_replace('\\', '/', $db_array[$i]));
				}

		 
			}
		}

		return $var;
	}

	if (isset($_GET['q'])) {
		$termo_busca = preg_replace(array("/(á|à|ã|â|ä)/","/(Á|À|Ã|Â|Ä)/","/(é|è|ê|ë)/","/(É|È|Ê|Ë)/","/(í|ì|î|ï)/","/(Í|Ì|Î|Ï)/","/(ó|ò|õ|ô|ö)/","/(Ó|Ò|Õ|Ô|Ö)/","/(ú|ù|û|ü)/","/(Ú|Ù|Û|Ü)/","/(ñ)/","/(Ñ)/"),explode(" ","a A e E i I o O u U n N"),$_GET['q']);
		echo(json_encode(search(strtoupper($termo_busca))));
	}

	//echo endExec();
	
?>
