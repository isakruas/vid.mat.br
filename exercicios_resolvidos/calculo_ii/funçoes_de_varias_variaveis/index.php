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

									<h2>Funções de várias variáveis</h2>

									<hr class="major" />

		                            <!-- 1 -->
		                            <p id="q_1_p">
		                                1. Determine e esboce o domínio das funções abaixo.
		                                <br />
		                                (a) $f(x,y)=\mathrm{arcsen}\,(x+y)$
		                                <br />
		                                (b) $f(x,y)=\frac{y}{\sqrt{x^2+y^2-1}}$
		                                <br />
		                                (c) $f(x,y)=\ln\left(\frac{x-y}{y-1}\right)$
		                                <br />
		                                (d) $f(x,y)=\frac{\sqrt{x+y+1}}{x-1}$
		                                <br />
		                                (e) $f(x,y)=\sqrt{y-x}-\sqrt{1-y}$
		                            </p>
		                            <!-- Resposta -->
		                            <!--<p style="display: none; background: #eee; padding: 0.5cm " id="d_1_">
			                            Em construção: dica
			                        </p>-->
			                        <p style="display: none; background: #eee; padding: 0.5cm " id="r_1_">
			                            Solução:
			                            <br />
			                            (a) $-1\leq x+y\leq 1$
			                            <br />
			                            <img src="1a.png" style="cursor: pointer; left: 50%;position: relative; margin-left: -25%" onclick= "window.open('1a.png', '_blank')" width="50%">
			                            <br /><br />
			                            (b) $x^2+y^2>1$
			                            <br />
			                            <img src="1b.png" style="cursor: pointer; left: 50%;position: relative; margin-left: -25%" onclick= "window.open('1b.png', '_blank')" width="50%">
			                            <br /><br />
			                            (c) $\displaystyle\frac{x-y}{y-1}>0\Rightarrow \left\{\begin{matrix} x-y>0 \\ y-1>0\end{matrix} \right.$ ou $\left\{\begin{matrix} x-y<0 \\ y-1<0\end{matrix} \right.\Rightarrow \left\{\begin{matrix} x>y \\ y>1\end{matrix} \right.$ ou $\left\{\begin{matrix} y>x \\ y<1\end{matrix} \right.$
			                            <br /><br />
			                            <img src="1c.png" style="cursor: pointer; left: 50%;position: relative; margin-left: -25%" onclick= "window.open('1c.png', '_blank')" width="50%">
			                            <br /><br />
			                            (d) $y\geq -x-1$ e $x\neq 1$
			                            <br />
			                            <img src="1d.png" style="cursor: pointer; left: 50%;position: relative; margin-left: -25%" onclick= "window.open('1d.png', '_blank')" width="50%">
			                            <br /><br />
			                            (e) $y\geq x$ e $y\leq 1$
			                            <br />
			                            <img src="1e.png" style="cursor: pointer; left: 50%;position: relative; margin-left: -25%" onclick= "window.open('1e.png', '_blank')" width="50%">
			                        </p>
			                            <!--<p style="display: none; background: #eee; padding: 0.5cm " id="v_1_">
			                                Em construção: videoaula
			                            </p>-->
			                            <!--<p class="button primary" id="d_1" onclick="btn2(this.id)" >
			                                DICA
			                            </p>-->
			                            <p class="button primary" id="r_1" onclick="btn2(this.id)" >
			                                SOLUÇÃO
			                            </p>
			                            <!--<p class="button primary" id="v_1" onclick="btn2(this.id)" >
			                                VIDEOAULA
			                            </p>-->

		                            <!-- 2 -->
		                            <p id="q_2_p">
		                                2. Faça o esboço do mapa de contorno das funções abaixo.
		                                <br />
		                                (a) $f(x,y)=x^2-y$
		                                <br />
		                                (b) $f(x,y)=\frac{1}{x^2+y^2}$
		                                <br />
		                                (c) $f(x,y)=\frac{1}{y^2}$
		                                <br />
		                                (d) $f(x,y)=y\sec x$
		                            </p>
		                            <!-- Resposta -->
		                            <!--<p style="display: none; background: #eee; padding: 0.5cm " id="d_2_">
			                                Em construção: dica
			                            </p>-->
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_2_">
			                                Solução:
			                                <br />
			                                (a) $x^2-y=k\Rightarrow y=x^2-k$, $k\in\mathbb{R}$ (parábolas cujo vértice estão sobre o eixo $y$)
			                                <br />
			                                <img src="2a.png" style="cursor: pointer; left: 50%;position: relative; margin-left: -25%" onclick= "window.open('2a.png', '_blank')" width="30%">
			                                <br /><br />
			                                (b) $\frac{1}{x^2+y^2}=k\Rightarrow x^2+y^2=\frac{1}{k}$, $k\in\mathbb{R}^*_+$ (cincunferências concêntricas de raios $1/\sqrt{k}$)
			                                <br />
			                                <img src="2b.png" style="cursor: pointer; left: 50%;position: relative; margin-left: -25%" onclick= "window.open('2b.png', '_blank')" width="30%">
			                                <br /><br />
			                                (c) $\frac{1}{y^2}=k\Rightarrow y=\pm \frac{1}{\sqrt{k}}$, $k\in\mathbb{R}^*_+$ (pares de retas paralelas ao eixo $x$)
			                                <br />
			                                <img src="2c.png" style="cursor: pointer; left: 50%;position: relative; margin-left: -25%" onclick= "window.open('2c.png', '_blank')" width="30%">
			                                <br /><br />
			                                (d) $y\sec x=k\Rightarrow y=k\cos x$, $k\in\mathbb{R}$ (múltiplos da função cosseno)
			                                <br />
			                                <img src="2d.png" style="cursor: pointer; left: 50%;position: relative; margin-left: -25%" onclick= "window.open('2d.png', '_blank')" width="30%">
			                            </p>
			                            <!--<p style="display: none; background: #eee; padding: 0.5cm " id="v_2_">
			                                Em construção: videoaula
			                            </p>-->
			                            <!--<p class="button primary" id="d_2" onclick="btn2(this.id)" >
			                                DICA
			                            </p>-->
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