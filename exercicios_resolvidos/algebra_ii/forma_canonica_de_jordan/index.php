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
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="d_1_">
			                                Dica:
			                                <br />
			                                Use o teorema: Seja $V$ um espaço vetorial de dimensão finita e $F:V\to V$ um operador linear. Se o polinômio característico e minimal de $F$ são, respectivamente, $$p(\lambda)=(\lambda-\lambda_1)^{s_1}(\lambda-\lambda_2)^{s_2}\cdots(\lambda-\lambda_r)^{s_r}\;\;\;\textrm{e}\;\;\;m(\lambda)=(\lambda-\lambda_1)^{d_1}(\lambda-\lambda_2)^{d_2}\cdots(\lambda-\lambda_r)^{d_r},$$ onde os $\lambda_i$ são os autovalores distintos de $F$, então o operador linear possui uma representação matricial diagonal em blocos, em que cada bloco diagonal é um bloco de Jordan. Além disso,
			                                <br />
			                                (i) Existe, pelo menos, um bloco de Jordan de tamanho $d_i\times d_i$ associado ao autovalor $\lambda_i$ e todos os outros têm ordem menor ou igual a $d_i$.
			                                <br />
			                                (ii) O número de blocos de Jordan de $F$ associados ao autovalor $\lambda_i$ é a dimensão do auto-espaço associado a $\lambda_i$, ou seja, é igual a dimensão de $V_{\lambda_i}$.
			                                <br />
			                                (iii) A soma das ordens dos blocos de Jordan $J_{\lambda_i}$ é igual a $s_i$.
			                                <br />
			                                (iv) A matriz diagonal em blocos é dada, a menos da ordem dos blocos, de modo único.
			                            </p>
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_1_">
			                                Solução:
			                                <br />
			                                $\begin{pmatrix} 3&1&&&&& \\ 0&3&&&&& \\ &&3&1&&& \\ &&0&3&&& \\ &&&&-1&1& \\ &&&&0&-1& \\ &&&&&&-1 \end{pmatrix}$ ou $\begin{pmatrix} 3&1&&&&& \\ 0&3&&&&& \\ &&3&&&& \\ &&&3&&& \\ &&&&-1&1& \\ &&&&0&-1& \\ &&&&&&-1 \end{pmatrix}$.
			                            </p>
			                            <!--<p style="display: none; background: #eee; padding: 0.5cm " id="v_1_">
			                                Em construção: videoaula
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
			                                2. Determine a forma de Jordan da matriz $A=\begin{pmatrix} 1 & 1 & 1 \\ 0 & 1 & 0 \\ 0 & 0 & 1 \end{pmatrix}.$
			                            </p>
			                            <!-- Resposta -->
			                            <!--<p style="display: none; background: #eee; padding: 0.5cm " id="d_2_">
			                                Dica:
			                                <br />
			                                X
			                            </p>-->
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_2_">
			                                Solução:
			                                <br />
			                                O polinômio característico de $A$ é $p(\lambda)=-(\lambda-1)^3$ e os possíveis polinômios minimais são $m_1(\lambda)=(\lambda-1)$ ou $m_2(\lambda)=(\lambda-1)^2$ ou $m_3(\lambda)=(\lambda-1)^3$. Sendo assim, para as respectivas possibilidades de polinômio minimal, temos as possíveis formas de Jordan: $$\begin{pmatrix} 1 & 0 & 0 \\ 0 & 1 & 0 \\ 0 & 0 & 1\end{pmatrix},\begin{pmatrix} 1 & 1 & 0 \\ 0 & 1 & 0 \\ 0 & 0 & 1\end{pmatrix},\begin{pmatrix} 1 & 1 & 1 \\ 0 & 1 & 1 \\ 0 & 0 & 1\end{pmatrix}.$$ Neste caso, o polinômio minimal será $m_2(\lambda)$, pois $m_2(A)=O$ e, consequentemente, a matriz de Jordan de $A$ é $\begin{pmatrix} 1 & 1 & 0 \\ 0 & 1 & 0 \\ 0 & 0 & 1\end{pmatrix}$.
			                            </p>
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="v_2_">
			                                Videoaula:
			                                <br />
			                                <iframe width="875" height="425" src="https://www.youtube.com/embed/nznSaXEdLYA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			                            </p>
			                            <!--<p class="button primary" id="d_2" onclick="btn2(this.id)" >
			                                DICA
			                            </p>-->
			                            <p class="button primary" id="r_2" onclick="btn2(this.id)" >
			                                SOLUÇÃO
			                            </p>
			                            <p class="button primary" id="v_2" onclick="btn2(this.id)" >
			                                VIDEOAULA
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