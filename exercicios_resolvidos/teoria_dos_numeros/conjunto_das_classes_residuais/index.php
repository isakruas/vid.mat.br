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

									<h2>Conjunto das classes residuais</h2>

									<hr class="major" />

		                            <!-- 1 -->
		                            <p id="q_1_p">
		                                1. Seja $m$ um número inteiro tal que $m\geq1$. Se $\overline{a}$ é um elemento não-nulo de $\mathbb{Z}_m$, prove que:
										<br />
										(a) $\overline{a}$ é uma unidade de $\mathbb{Z}_m$ se, e somente se, $\textrm{mdc}(m,a)=1$.
										<br />
										(b) $\overline{a}$ é um divisor de zero de $\mathbb{Z}_m$ se, e somente se, $\textrm{mdc}(m,a)\neq1$.
		                            </p>
		                            <!-- Resposta -->
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="d_1_">
			                                Dica:
			                                <br />
			                                (a) Na volta, utilize o Teorema de Bezout.
			                                <br />
			                                (b) Na ida, suponha que $\textrm{mdc}(m,a)=1$ e chegue a uma contradição. Para a volta, como $\textrm{mdc}(m,a)\neq1$, considere um divisor primo de $a$ e $m$ simultaneamente. Além disso, tilize a decomposição em fatores primos.
			                            </p>
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_1_">
			                                Solução:
			                                <br />
			                                (a) ($\Rightarrow$) Se $\overline{a}$ é uma unidade, então existe $\overline{b}$ tal que $\overline{a}\overline{b}=\overline{1}$. Daí, $m\mid (ab-1)\Rightarrow ab+m(-q)=1$ e, portanto, $\textrm{mdc}(m,a)=1$.
			                                <br />
			                                ($\Leftarrow$) Existem inteiros $x$ e $y$ tais que $ax+by=1\Rightarrow \overline{ax+by}=\overline{1}\Rightarrow \overline{ax}+\overline{by}=\overline{1}\Rightarrow \overline{a}\,\overline{x}=1$. Logo, $\overline{a}$ é uma unidade de $\mathbb{Z}_m$.
			                                <br /><br />
			                                (b) ($\Rightarrow$) Por hipótese, existe $\overline{b}\neq\overline{0}$ tal que $\overline{a}\overline{b}=\overline{0}\Rightarrow m\mid ad$. Suponha que $\textrm{mdc}(m,a)=1$, logo $m\mid b\Rightarrow \overline{b}=\overline{0}$, contradição.
			                                <br />
			                                ($\Leftarrow$) Se $\textrm{mdc}(m,a)\neq1$, então $a$ e $m$ possuem um fator primo em comum que será denotado por $p_1$. Considerando $a=p_1q$, onde $q\in\mathbb{Z}$, e $m=p_1p_2\cdots p_r$ ($r\geq2$) a decomposição de $m$ em fatores primos, temos que $a\cdot(p_2\cdots p_r)=mq\Rightarrow \overline{a}\cdot \overline{p_2\cdots p_r}=\overline{0}$. Além disso, $\overline{p_2\cdots p_r}\neq 0$, pois $0< p_2\cdots p_r< m$, ou seja, $\overline{a}$ é um divisor de zero.
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
		                                2. Seja $m$ um número inteiro tal que $m\geq1$. Prove que $\mathbb{Z}_m$ não contém divisores de zero se, e somente se, $m$ é primo.
		                            </p>
		                            <!-- Resposta -->
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="d_2_">
			                                Dica:
			                                <br />
			                                ($\Rightarrow$) Suponha que $m$ seja composto e chegue a uma contradição.
			                            </p>
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_2_">
			                                Solução:
			                                <br />
			                                ($\Rightarrow$) Suponha que $m$ seja composto. Logo, $m=rs$ com $1< r,s< m$. Assim, $\overline{r},\overline{s}\neq\overline{0}$ e $\overline{0}=\overline{m}=\overline{rs}=\overline{r}\,\overline{s}$, contradição.
											<br />
											($\Leftarrow$) Se $m$ é primo, então $\textrm{mdc}(m,a)=1$ para todo $a\in\{1,\ldots,m-1\}$, ou seja, $\mathbb{Z}_m$ não contém divisores de zero.
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

			                            <!-- 3 -->
		                            <p id="q_3_p">
		                                3. (Sonho de todo estudante) Mostre que se $p\in\mathbb{Z}$ é um primo e $\overline{a},\overline{b}{b}\in\mathbb{Z}_p$, então $$(\overline{a}+\overline{b})^p=\overline{a}^p+\overline{b}^p.$$
		                            </p>
		                            <!-- Resposta -->
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="d_3_">
			                            	Dica:
			                            	<br />
			                            	Utilize a fórmula do binômio de Newton: \begin{center}$(a+b)^n=\sum_{i=0}^n \binom{n}{i}\cdot a^{n-i}\cdot a^i$, onde $\binom{n}{p}=\frac{n!}{p!\cdot(n-p)!}$. \end{center}
			                            </p>
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_3_">
			                                Solução:
			                                <br />
			                                Pela fórmula do binômio de Newton, $$(\overline{a}+\overline{b})^p=\overline{a}^p+\overline{b}^p+\sum_{k=1}^{p-1}\overline{\binom{p}{k}}(\overline{a})^{p-k}(\overline{b})^k.$$
			                                Observe que como $p$ é primo e $1\leq k\leq p-1$, o fator $p$ não aparece no denominador de $\binom{p}{k}=\frac{p!}{k!(p-k)!}=\frac{p(p-1)!}{k!(p-k)!}$, ou seja, $\binom{p}{k}$ é um múltiplo de $p$ e $\overline{\binom{p}{k}}=\overline{0}$. Portanto, $$(\overline{a}+\overline{b})^p=\overline{a}^p+\overline{b}^p.$$
			                            </p>
			                            <!--<p style="display: none; background: #eee; padding: 0.5cm " id="v_3_">
			                                Videoaula:
			                                <br />
			                                <iframe width="853" height="480" src="https://www.youtube.com/embed/KkZ67G8Nev4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
