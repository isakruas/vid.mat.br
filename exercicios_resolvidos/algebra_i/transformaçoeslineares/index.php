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

									<h2>Transformações lineares</h2>

									<hr class="major" />
		                            <!-- 1 -->
		                            <p id="q_1_p">
		                                1. Determine quais das seguintes transformações são lineares. Além disso, calcule a matriz que representa cada transformação linear em relação às respectivas bases canônicas, e a dimensão para o núcleo e o conjunto imagem. Diga ainda quais são injetoras, sobrejetoras e bijetoras.
		                                <br />
		                                (a) $F:\mathbb{R}^2\to\mathbb{R}^2,\;F(x,y)=(x+y,x-y)$
		                                <br />
		                                (b) $F:\mathbb{R}\to\mathbb{R}^3,\;F(x)=(2x,0,-x)$
		                                <br />
		                                (c) $F:\mathbb{R}^3\to\mathbb{R}^2,\;F(x,y,z)=(x^2-y,2y)$
		                                <br />
		                                (d) $F:M_2(\mathbb{R})\to\mathbb{R},\;F(A)=\det\,A$
		                                <br />
		                                (e) $F:P_2(\mathbb{R})\to P_2(\mathbb{R}),\;F(p(x))=2p(1-x)-xp'(x)$
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
		                                2. Verifique se a aplicação $F:\mathbb{R}^2\to\mathcal{C}([a,b])$ definida por $F(x,y)=xe^t+yet^{2t}$ é uma transformação linear, onde $\mathcal{C}([a,b])$ é o espaço vetorial das funções reais contínuas do intervalo $[a,b]$ em $\mathbb{R}$.
		                            </p>
		                            <!-- Resposta -->
		                            <p style="display: none; background: #eee; padding: 0.5cm" id="q_2_r">
		                                Em construção
		                            </p>
		                            <p class="button primary" id="q_2" onclick="btn(this.id)" >
		                                Ver resolução
		                            </p>

		                            <!-- 3 -->
		                            <p id="q_3_p">
		                                <br />
		                                3. Determine a transformação linear $F:\mathbb{R}^3\to\mathbb{R}^2$ tal que $F(1,0,0)=(2,0)$, $F(0,1,0)=(1,1)$ e $F(0,0,1)=(0,-1)$. Em seguida, obtenha $v\in\mathbb{R}^3$ tal que $F(v)=(3,2)$.
		                            </p>
		                            <!-- Resposta -->
		                            <p style="display: none; background: #eee; padding: 0.5cm" id="q_3_r">
		                                Em construção
		                            </p>
		                            <p class="button primary" id="q_3" onclick="btn(this.id)" >
		                                Ver resolução
		                            </p>

		                            <!-- 4 -->
		                            <p id="q_4_p">
		                                <br />
		                                4. Determine o núcleo e a imagem, bem como as dimensões respectivas, da transformação linear $F:P_2(\mathbb{R})\to P_3(\mathbb{R})$ definida por $F(p(x))=p(x)+x^2p'(x)$.
		                            </p>
		                            <!-- Resposta -->
		                            <p style="display: none; background: #eee; padding: 0.5cm" id="q_4_r">
		                                Em construção
		                            </p>
		                            <p class="button primary" id="q_4" onclick="btn(this.id)" >
		                                Ver resolução
		                            </p>

		                            <!-- 5 -->
		                            <p id="q_5_p">
		                                <br />
		                                5. Determine a matriz $[F]^B_C$ associada a transformação linear $F:\mathbb{R}^2\to\mathbb{R}^3$ definida por $F(x,y)=(2x+y,3x-y,-y)$, onde $B=\{(1,0),(1,1)\}$ e $C=\{(0,1,0),(1,1,1),(1,1,0)\}$.
		                            </p>
		                            <!-- Resposta -->
		                            <p style="display: none; background: #eee; padding: 0.5cm" id="q_5_r">
		                                Em construção
		                            </p>
		                            <p class="button primary" id="q_5" onclick="btn(this.id)" >
		                                Ver resolução
		                            </p>

		                            <!-- 6 -->
		                            <p id="q_6_p">
		                                <br />
		                                6. Seja $F\in\mathcal{L}(P_3(\mathbb{R}),\mathbb{R})$ a transformação linear definida por $F(g(x))=\displaystyle\int_0^1 g(x)\,dx$. Determine a matriz de $F$ em relação às bases $B=\{1,x,x^2,x^3\}$ e $C=\{1\}$ de $P_3(\mathbb{R})$ e $\mathbb{R}$, respectivamente.
		                            </p>
		                            <!-- Resposta -->
		                            <p style="display: none; background: #eee; padding: 0.5cm" id="q_6_r">
		                                Em construção
		                            </p>
		                            <p class="button primary" id="q_6" onclick="btn(this.id)" >
		                                Ver resolução
		                            </p>

		                            <!-- 7 -->
		                            <p id="q_7_p">
		                                <br />
		                                7. Se $F:V\to W$ é uma transformação linear injetora e $\{u_1,\ldots,u_n\}\subset V$ é LI, mostre que o conjunto $\{F(u_1),\ldots,F(u_n)\}\subset W$ também é LI.
		                            </p>
		                            <!-- Resposta -->
		                            <p style="display: none; background: #eee; padding: 0.5cm" id="q_7_r">
		                                Em construção
		                            </p>
		                            <p class="button primary" id="q_7" onclick="btn(this.id)" >
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