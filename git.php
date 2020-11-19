<?php

	//$git = shell_exec('git fetch --all && git merge origin/master');
	
	if(is_dir("tmp")) {	

		shell_exec('find . -type f -not \(-name "git.php" -or -name "tmp" \)  -print0 | xargs -0  -I {} rm -R {}');

		shell_exec('find . -type d -not \(-name "tmp" -or -name "vid.mat.br" \) -print0 | xargs -0  -I {} rm -R {}');

		shell_exec('mv tmp/vid.mat.br/* ./');

		shell_exec('rm -R tmp');

		echo "Sistema atualizado";

	} else {

		shell_exec('mkdir tmp && chmod -R 755 tmp && cd tmp && git clone https://github.com/isakruas/vid.mat.br.git && chmod -R 755 vid.mat.br');

		if(is_dir("./tmp/vid.mat.br")) {	

			echo "Arquivos temporarios criados, na proxima vez que este link for acessado, o sistema sera atualizado";
		
		} else {

			shell_exec('rm -R tmp');

			echo "Ouve um erro ao criar os arquivos temporarios";
		}
	}

?>
