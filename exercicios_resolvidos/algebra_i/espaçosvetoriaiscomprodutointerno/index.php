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

									<h2>Espaços vetoriais com produto interno</h2>

									<hr class="major" />

			                            <!-- 1 -->
			                            <p id="q_1_p">
			                                1. Considere $u=(1,2)$, $v=(-3,5)$ e $w=(4,-1)$ elemento do $\mathbb{R}^2$. Em relação ao produto interno usual, calcule:
			                                <br />
			                                (a) $\left\langle u,v\right\rangle$
			                                <br />
			                                (b) $\left\langle w,u\right\rangle$
			                                <br />
			                                (c) $\left\langle u+v,w\right\rangle$
			                                <br />
			                                (d) $\left\lVert v\right\rVert$
			                            </p>
			                            <!-- Resposta -->
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="q_1_r">
			                                Resposta:
			                                <br />
			                                Em construção
			                            </p>
			                            <p class="button primary" id="q_1" onclick="btn(this.id)" >
			                                Ver resolução
			                            </p>

			                            <!-- 2 -->
			                            <p id="q_2_p">
			                                <br />
			                                2. (a) Prove que a função $\left\langle (u_1,u_2),(v_1,v_2)\right\rangle=u_1v_1-u_1v_2-u_2v_1+3u_2v_2$ define um produto interno sobre $\mathbb{R}^2$.
			                                <br />
			                                (b) Refaça a questão $1$ utilizando o produto interno definido no item (a).
			                            </p>
			                            <!-- Resposta -->
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="q_2_r">
			                                Resposta:
			                                <br />
			                                Em construção
			                            </p>
			                            <p class="button primary" id="q_2" onclick="btn(this.id)" >
			                                Ver resolução
			                            </p>

			                            <!-- 3 -->
			                            <p id="q_3_p">
			                                <br />
			                                3. Em cada caso, verifique se a função dada define um produto interno sobre $\mathbb{R}^2$.
			                                <br />               
			                                (a) $\displaystyle\left\langle (u_1,u_2),(v_1,v_2)\right\rangle=2u_1v_2$.
			                                <br />
			                                (b) $\displaystyle\left\langle (u_1,u_2),(v_1,v_2)\right\rangle=u_1v_1-2u_1v_2-2u_2v_1+5u_2v_2$.
			                                <br />
			                                (c) $\displaystyle\left\langle (u_1,u_2),(v_1,v_2)\right\rangle=\frac{u_1v_1}{a^2}+\frac{u_2v_2}{b^2}$, onde $a,b\in\mathbb{R}$ são fixos e não nulos.
			                            </p>
			                            <!-- Resposta -->
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="q_3_r">
			                                Resposta:
			                                <br />
			                                Em construção
			                            </p>
			                            <p class="button primary" id="q_3" onclick="btn(this.id)" >
			                                Ver resolução
			                            </p>

			                            <!-- 4 -->
			                            <p id="q_4_p">
			                                <br />
			                                4. Mostre que a função $$\left\langle\begin{pmatrix} a & b \\ c & d \end{pmatrix},\begin{pmatrix} e & f \\ g & h \end{pmatrix}\right\rangle=ae+2bf+3cg+dh$$ define um produto interno sobre $M_2(\mathbb{R})$.
			                            </p>
			                            <!-- Resposta -->
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="q_4_r">
			                                 
			                                <iframe width="844" height="409" src="https://www.youtube.com/embed/uj5ufjkucG8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			                                

			                            </p>
			                            <p class="button primary" id="q_4" onclick="btn(this.id)" >
			                                Ver resolução
			                            </p>

			                            <!-- 5 -->
			                            <p id="q_5_p">
			                                <br />
			                                5. (Teorema de Pitágoras generalizado) Seja $V$ um espaço euclidiano. Se $\{u_1,\ldots,u_r\}$ é um conjunto ortogonal de vetores de $V$, mostre que $$\left\lVert u_1+\cdots+u_r\right\rVert^2=\left\lVert u_1\right\rVert^2+\cdots+\left\lVert u_r\right\rVert^2.$$
			                            </p>
			                            <!-- Resposta -->
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="q_5_r">
			                                Resposta:
			                                <br />
			                                Em construção
			                                
			                            </p>
			                            <p class="button primary" id="q_5" onclick="btn(this.id)" >
			                                Ver resolução
			                            </p>

			                            <!-- 6 -->
			                            <p id="q_6_p">
			                                <br />
			                                6. Determine uma base ortonormal do $\mathbb{R}^3$ utilizando a base $\{(1,1,1),(0,2,1),(0,0,1)\}.$
			                            </p>
			                            <!-- Resposta -->
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="q_6_r">
			                                Resposta:
			                                <br />
			                                Em construção
			                                
			                            </p>
			                            <p class="button primary" id="q_6" onclick="btn(this.id)" >
			                                Ver resolução
			                            </p>

			                            <!-- 7 -->
			                            <p id="q_7_p">
			                                <br />
			                                7. A partir da base $B=\{(1,0),(-1,1)\}$ do $\mathbb{R}^2$, determine uma base ortonormal usando o produto interno $$\left\langle(u_1,u_2),(v_1,v_2)\right\rangle=2u_1v_1-u_1v_2-u_2v_1+u_2v_2.$$
			                            </p>
			                            <!-- Resposta -->
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="q_7_r">
			                                Resposta:
			                                <br />
			                                Em construção
			                                
			                            </p>
			                            <p class="button primary" id="q_7" onclick="btn(this.id)" >
			                                Ver resolução
			                            </p>

			                            <!-- 8 -->
			                            <p id="q_8_p">
			                                <br />
			                                8. Prove que se $V$ é um espaço vetorial euclidiano e $u,v\in V$, então $$\left\lVert u+v\right\rVert^2+\left\lVert u-v\right\rVert^2=2\left\lVert u\right\rVert^2+2\left\lVert v\right\rVert^2$$
			                            </p>
			                            <!-- Resposta -->
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="q_8_r">
			                                 
			                                <iframe width="832" height="409" src="https://www.youtube.com/embed/hOAMJFamigY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			                                
			                            </p>
			                            <p class="button primary" id="q_8" onclick="btn(this.id)" >
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