<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-149861614-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-149861614-2');
</script>

<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Vid.Mat.Br</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="../../../assets/css/main.css" />
	    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.5/MathJax.js?config=TeX-AMS_HTML-full"></script>
	    <script type="text/x-mathjax-config">MathJax.Hub.Config({ showProcessingMessages: false, tex2jax: { inlineMath: [['$','$'],['<br />(','<br />)']] } }); </script>

	    <link rel="apple-touch-icon" sizes="120x120" href="../../../images/favicon/apple-touch-icon.png">
	    <link rel="icon" type="image/png" sizes="32x32" href="../../../images/favicon/favicon-32x32.png">
	    <link rel="icon" type="image/png" sizes="16x16" href="../../../images/favicon/favicon-16x16.png">


	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main" onclick="document.getElementById('rtn').style.display = 'none'">
						<div class="inner">

							<!-- Header -->
								<header id="header">
									<a href="../" class="logo"><strong>VOLTAR</strong></a>
								</header>


							<!-- Content -->
								<section>

									<h2>Forma canônica de Jordan</h2>

									<hr class="major" />



			                            <!-- 1 -->
			                            <p id="q_1_p">
			                                1. Seja $F:V\to V$ um operador linear cujos polinômios característico $p(\lambda)$ e minimal $m(\lambda)$ são $$p(\lambda)=(\lambda-3)^4(\lambda+1)^3\;\;\;\textrm{e}\;\;\;m(\lambda)=(\lambda-3)^2(\lambda+1)^2,$$ respectivamente. Determine as possíveis formas de Jordan para as matrizes representantes de $F$.
			                            </p>
			                            <!-- Resposta -->
			                            <p style="display: none; background: #eee; padding: 0.5cm" id="q_1_r">
			                                Em construção
			                            </p>
			                            <p class="button primary" id="q_1" onclick="btn(this.id)" >
			                                Ver resolução
			                            </p>

			                            <!-- 2 -->
			                            <p id="q_2_p">
			                                <br />
			                                2. Determine as possíveis formas de Jordan para as matrizes $$A=\begin{pmatrix} 1 & 1 & 1 \\ 0 & 1 & 0 \\ 0 & 0 & 1 \end{pmatrix}\;\;\textrm{e}\;\;B=\begin{pmatrix} 3& -1 & 1 & 1 & 0 & 0 \\ 1 & 1 & -1 & -1 & 0 & 0 \\ 0 & 0 & 2 & 0 & 1 & 1 \\ 0 & 0 & 0 & 2 & -1 & -1 \\ 0 & 0 & 0 & 0 & 1 & 1 \\ 0 & 0 & 0 & 0 & 1 & 1 \end{pmatrix}.$$
			                            </p>
			                            <!-- Resposta -->
			                            <p style="display: none; background: #eee; padding: 0.5cm" id="q_2_r">
			                                Dica: $\det\begin{pmatrix} B & C \\ 0 & D \end{pmatrix}=\det B\cdot\det D$, onde $B$ e $D$ são blocos quadrados.
			                            </p>
			                            <p class="button primary" id="q_2" onclick="btn(this.id)" >
			                                Ver resolução
			                            </p>

 

								</section>

						</div>
					</div>

 

				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">
 							<?php 
								echo file_get_contents('../../../assets/php/search.php');
							?>
							<!-- Menu -->
 							<?php 
								echo file_get_contents('../../../assets/php/menu.php');
							?>

							<footer id="footer">
								<?php 
									echo file_get_contents('../../../assets/php/footer.php');
								?>
							</footer>

						</div>
					</div>

			</div>

		<!-- Scripts -->
			<script src="../../../assets/js/jquery.min.js"></script>
			<script src="../../../assets/js/browser.min.js"></script>
			<script src="../../../assets/js/breakpoints.min.js"></script>
			<script src="../../../assets/js/util.js"></script>
			<script src="../../../assets/js/main.js"></script>

	</body>
</html>