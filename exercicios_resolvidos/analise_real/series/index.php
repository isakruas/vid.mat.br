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

									<h2>Séries</h2>

									<hr class="major" />

		                            <!-- 1 -->
		                            <p  id="q_1_p">
		                                1. Determine se a série é convergente ou divergente. Se for convergente, calcule sua soma. Se for divergente, explique por quê.
		                                <br />
		                                (a) $\displaystyle \sum_{n=1}^{\infty}\frac{12}{(-5)^n}$
		                                <br />
		                                (b) $\displaystyle \sum_{n=1}^{\infty}\frac{n}{\sqrt{n^2+4}}$
		                                <br />
		                                (c) $\displaystyle \sum_{n=1}^{\infty} \left(\frac{1}{\sqrt{n}}-\frac{1}{\sqrt{n+1}}\right)$
		                            </p>
		                            <!-- Resposta -->
		                            <p style="display: none; background: #eee; padding: 0.5cm " id="d_1_">
			                                Dica:
			                                <br />
			                                (a) A série é geométrica.
			                                <br />
			                                (b) Utilize o teorema da divergência.
			                                <br />
			                                (c) Determine a sequência das somas parciais e verifique se ela converge ou diverge.
			                            </p>
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_1_">
			                                Solução:
			                                <br />
			                                (a) A série é geométrica com $a=-\frac{12}{5}$ e $r=-\frac{1}{5}$. Logo, a série é convergente e converge para $$\frac{-\frac{12}{5}}{1-\left(\frac{1}{5}\right)}=-2$$
			                                <br />
			                                (b) Pelo teste da divergência: $\displaystyle \lim_{n\to\infty} \frac{n}{\sqrt{n^2+4}}=\lim_{n\to\infty} \frac{\frac{n}{n}}{\frac{\sqrt{n^2+4}}{n}}=\lim_{n\to\infty} \frac{1}{\sqrt{1+\frac{4}{n^2}}}=1\neq0$. Portanto, a série diverge.
			                                <br />
			                                (c) 
			                                \begin{eqnarray*}
												s_1 &=& \frac{1}{\sqrt{1}}-\frac{1}{\sqrt{2}}\;=\;1-\frac{1}{\sqrt{2}}\\
												s_2 &=& \left(\frac{1}{\sqrt{1}}-\frac{1}{\sqrt{2}}\right)+\left(\frac{1}{\sqrt{2}}-\frac{1}{\sqrt{3}}\right)\;=\;1-\frac{1}{\sqrt{3}}\\
												s_3 &=& \left(\frac{1}{\sqrt{1}}-\frac{1}{\sqrt{2}}\right)+\left(\frac{1}{\sqrt{2}}-\frac{1}{\sqrt{4}}\right)+\left(\frac{1}{\sqrt{3}}-\frac{1}{\sqrt{4}}\right)\;=\;1-\frac{1}{\sqrt{4}}\\
												&\vdots& \\
												s_n &=& 1-\frac{1}{\sqrt{n+1}}
											\end{eqnarray*}
											Assim, $\lim s_n=1$, isto é, a série converge para 1.
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
		                            <p  id="q_2_p">
		                                2. Considere duas séries $\sum a_n$ e $\sum b_n$. Classique as alternativas abaixo em verdadeiro (V) ou falso (F) justificando as respostas.
		                                <br />
		                                ($\;\;\;\;$) Se $\sum a_n$ diverge e $c$ é uma constante real não-nula, então $\sum c\cdot a_n$ diverge.
		                                <br />
		                                ($\;\;\;\;$) Se $\sum a_n$ e $\sum b_n$ são séries divergentes, então $\sum (a_n+b_n)$ também é divergente.
		                                <br />
		                                ($\;\;\;\;$) Se $\sum a_n$ é convergente e $\sum b_n$ divergente, então $\sum (a_n+b_n)$ pode ser convergente.
		                            </p>
		                            <!-- Resposta -->
		                            	<p style="display: none; background: #eee; padding: 0.5cm " id="d_2_">
			                                Dica:
			                                <br />
			                                (i) Use a contrapositiva do resultado: se $\sum c\cdot a_n$ converge, então $\sum a_n$ também converge. 
			                                <br />
			                                (iii) Argumente por contradição.
			                            </p>
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_2_">
			                                Solução:
			                                <br />
			                                ($\;$V$\;$) Observe que se $\sum c\cdot a_n$ converge, então $\sum a_n$ também converge. De fato, se a sequência das somas parciais da série $\sum a_n$ é $(s_n)$, então a sequência das somas parciais de $\sum c\cdot a_n$ é $(c\cdot s_n)$ e, além disso, $\lim\,c\cdot s_n=S$, onde $S\in\mathbb{R}$. Pelas propriedades de limite de sequência temos que $\lim\,\frac{1}{c}\left(c\cdot s_n\right)=\frac{S}{c}\Rightarrow \lim\, s_n=\frac{S}{c}$ e, portanto, a afirmação é válida. Assim, a contrapositiva nos diz que a questão é verdadeira.
			                                <br />
			                                ($\;$F$\;$) $\sum a_n=\sum n$ e $\sum b_n=\sum -n$ são séries divergentes, mas $\sum (a_n+b_n)=\sum 0$ converge para 0.
			                                <br />
			                                ($\;$F$\;$) $\sum (a_n+b_n)$ é sempre divergente. De fato, se $\sum (a_n+b_n)$ fosse convergente, então $\sum \left[(a_n+b_n)-a_n\right]=\sum b_n$ seria divergente, que é uma contradição.
			                            </p>
			                            <!--<p style="display: none; background: #eee; padding: 0.5cm " id="v_2_">
			                                Em construção: videoaula
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

		                            <!-- 3 -->
		                            <p  id="q_3_p">
		                                3. Expresse o número $10,1\overline{35}=10,135353535\ldots$ como uma razão de inteiros.
		                            </p>
		                            <!-- Resposta -->
		                            	<p style="display: none; background: #eee; padding: 0.5cm " id="d_3_">
			                                Dica: 
			                            	<br />
			                            	Observe que $10,1\overline{35}=10+0,1+0,035353535\ldots$, onde $0,035353535\ldots$ pode ser representado por uma série geométrica convergente.
			                            </p>
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_3_">
			                            	Solução: 
			                            	<br />
			                            	Note que $10,1\overline{35}=10+0,1+0,035353535\ldots$ e $$0,035353535=0,035+0,00035+\cdots=\frac{35}{1000}+\frac{35}{100000}+\cdots=\sum_{n=1}^{\infty} \frac{35}{10}\left(\frac{1}{100}\right)^n.$$ Assim, essa série geométrica é convergente e $\sum_{n=1}^{\infty} \frac{35}{10}\left(\frac{1}{100}\right)^n=\frac{\frac{35}{10}}{1-\frac{1}{100}}=\frac{35}{990}$. Portanto, $$10,1\overline{35}=10+0,1+0,035353535\ldots=10+\frac{1}{10}+\frac{35}{990}=\frac{5017}{495}.$$
			                            </p>
			                            <!--<p style="display: none; background: #eee; padding: 0.5cm " id="v_3_">
			                                Em construção: videoaula
			                            </p>-->
			                            <p class="button primary" id="d_3" onclick="btn2(this.id)" >
			                                DICA
			                            </p>
			                            <p class="button primary" id="r_3" onclick="btn2(this.id)" >
			                                SOLUÇÃO
			                            </p>
			                            <!--<p class="button primary" id="v_3" onclick="btn2(this.id)" >
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