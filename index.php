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
		<link rel="stylesheet" href="assets/css/main.css" />

	    <link rel="apple-touch-icon" sizes="120x120" href="./images/favicon/apple-touch-icon.png">
	    <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon/favicon-32x32.png">
	    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon/favicon-16x16.png">

	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main" onclick="document.getElementById('rtn').style.display = 'none'">
						<div class="inner">

							<!-- Header -->
								<header id="header">
									 
			 
								</header>

							<!-- Banner -->
								<section id="banner">
									<div class="content">
										<header>
											<h1>Vid.Mat.Br2</h1>
											<p class="button primary" id="r_1" onclick="window.open('https://www.youtube.com/channel/UCtnguu8ASJ5dq1mJVEr5xSg')" >
			                                Canal no YouTube
			                            	</p>
											 
										</header>
										<p style="text-align: justify;"> Esta plataforma é resultado de um projeto de extensão desenvolvido por alunos do Instituto Federal do Norte de Minas Gerais (IFNMG), campus Januária, e tem como objetivo divulgar videoaulas e resoluções de exercícios dos conteúdos de matemática estudados no ensino superior.</p>
					 
									</div>
									<style type="text/css">
										#iframe{
											position: relative;
											width: 100%;
											height: 100%;
											background: transparent;
										}
									</style>

									<span class="image object">
						 
										<iframe id="iframe"  src="https://www.youtube.com/embed/pbXBPZP9_dQ?autoplay=1&cc_load_policy=0&color=#01705f&controls=0&disablekb=1&fs=1&iv_load_policy=3&modestbranding=1&rel=0&showinfo=0" frameborder="0" autoplay="1" cc_load_policy="0" color="#01705f" controls="0" disablekb="1" fs="1" iv_load_policy="3" modestbranding="1" rel="0" showinfo="0"></iframe>
 

									</span>
								</section>

						</div>
					</div>

				<!-- Sidebar -->
				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">
 							<?php 
								echo file_get_contents('./assets/php/search.php');
							?>
							<!-- Menu -->
 							<?php 
								echo file_get_contents('./assets/php/menu.php');
							?>

							<footer id="footer">
								<?php 
									echo file_get_contents('./assets/php/footer.php');
								?>
							</footer>

						</div>
					</div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>