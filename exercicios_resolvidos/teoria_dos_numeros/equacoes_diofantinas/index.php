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

									<h2>Equações diofantinas</h2>

									<hr class="major" />

		                            <!-- 1 -->
		                            <p id="q_1_p">
		                                1. Verifique se as equações diofantinas abaixo possuem solução e, caso positivo, determine todas as soluções inteiras.
		                                <br />
		                                (a) $56x + 72y = 40$
		                                <br />
		                                (b) $−124x + 52y = −20$
		                                <br />
		                                (c) $20x + 36y = 42$
		                            </p>
		                            <!-- Resposta -->
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="d_1_">
			                                Dica:
			                                <br />
			                                Lembre-se que uma equação diofantina $ax+by=c$ possui solução se, e somente se, $\textrm{mdc}(a,b)$ divide $c$. Além disso, se $(x_0,y_0)$ é uma solução particular da equação diofantina, então a solução geral é $x=x_0+\frac{b}{d}k$ e $y=y_0-\frac{a}{d}k$, onde $d=\textrm{mdc}(a,b)$ e $k\in\mathbb{Z}$.
			                            </p>
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_1_">
			                                Solução:
			                                <br />
			                                (a) Sabemos que $\textrm{mdc}(56,72)=8$ e $8\mid 40$, logo a equação diofantina possui solução. Para determinar uma solução particular da equação, vamos realizar as divisões sucessivas: $$\begin{matrix} 72 & = & 56\cdot1 & + & 16 \\ 56 & = & 16\cdot3 & + & 8 \\ 16 & = & 8\cdot2 & + & 0 \end{matrix}$$
			                                Daí, $8=56-16\cdot 3=56-(72-56\cdot1)\cdot 3=56\cdot 4+72\cdot (-3)\Rightarrow 56\cdot 4+72\cdot (-3)=8\Rightarrow 56\cdot 20+72\cdot (-15)=40$, ou seja, $(20,-15)$ é uma solução particular. Portanto, a sulução geral é da forma $x=20+9k$ e $y=-15-7k$, onde $k\in\mathbb{Z}$.
			                                <br />
			                                (b) Como $\textrm{mdc}(-124,52)=4$ e $4\mid -20$, logo a equação diofantina possui solução. Realizando as divisões sucessivas, obtemos que $(-124)\cdot 5+52\cdot 12=4\Rightarrow (-124)\cdot(-25)+52\cdot(-60)=-20$. Logo, $(-25,-60)$ é uma solução particular para a equação diofantina. Portanto, a solução geral é $x=-60+13k$ e $y=-60+31k$, onde $k\in\mathbb{Z}$.
			                                <br />
			                                (c) Como $\textrm{mdc}(20,36)=4$ e $4\not\mid 42$, logo a equação diofantina não possui solução.
			                            </p>
			                            <!--<p style="display: none; background: #eee; padding: 0.5cm " id="v_1_">
			                                Videoaula:
			                                <br />
			                                
			                            </p>-->
			                            <p class="button primary" id="d_1" onclick="btn2(this.id)" >
			                                DICA
			                            </p>
			                            <p class="button primary" id="r_1" onclick="btn2(this.id)" >
			                                SOLUÇÃO
			                            </p>
			                            <!--<p class="button primary" id="v_1" onclick="btn2(this.id)" >
			                                VIDEOAULA
			                            </p>-->

		                            <!-- 2 -->
		                            <p id="q_2_p">
		                                2. Ache todos os núumeros inteiros estritamente positivos com a seguinte propriedade: dão resto 6 quando divididos por 11 e resto 3 quando divididos por 7.
		                            </p>
		                            <!-- Resposta -->
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="d_3_">
			                                Dica:
			                                <br />
			                                Se $x$ é um inteiro tal que deixa resto 6 quando divididos por 11 e deixa resto 3 quando divididos por 7, então $x=11q_1+6$ e $x=7q_2+3$.
			                            </p>
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_2_">
			                                Solução:
			                                <br />
			                                Seja $x$ um inteiro com a propriedade informada, logo $x=11q_1+6$ e $x=7q_2+3$. Assim, $11q_1+6=7q_2+3\Rightarrow 11q_1-7q_2=-3$ e esta equação diofantina possui solução, pois $\textrm{mdc}(11,-7)=1$ e $1\mid -3$. Realizando as divisões sucessivas, obtemos que $(-3,2)$ é uma solução particular da equação e, consequentemente, a solução geral é $q_1=-3-7k$ e $q_2=2-11k$, onde $k\in\mathbb{Z}$. Daí, para que $x$ seja estritamente positivo, temos que $11q_1+6>0$ e $7q_2+3>0$. Substituindo os valores de $q_1$ e $q_2$ nestas inequação, obtemos que $k=-1,-2,-3,\ldots$. Portanto, a solução do problema pode ser escrita como $\{-77k-27\,|\,k=-1,-2,-3,\ldots\}$.
			                            </p>
			                            <!--<p style="display: none; background: #eee; padding: 0.5cm " id="v_2_">
			                                Videoaula:
			                                <br />
			                                <iframe width="875" height="425" src="https://www.youtube.com/embed/GwCWqHw2Rzw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			                            </p>-->
			                            <p class="button primary" id="d_2" onclick="btn2(this.id)" >
			                                DICA
			                            </p>
			                            <p class="button primary" id="r_2" onclick="btn2(this.id)" >
			                                SOLUÇÃO
			                            </p>
			                            <!--<p class="button primary" id="v_2" onclick="btn2(this.id)" >
			                                VIDEOAULA
			                            </p>-->

			                            


		                            











		                            







		                            

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
