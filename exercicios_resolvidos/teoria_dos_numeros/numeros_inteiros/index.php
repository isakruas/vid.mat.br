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

									<h2>Números inteiros</h2>

									<hr class="major" />

									<!-- 1 -->
		                            <p id="q_1_p">
										1. Use a definição em classes de equivalência dos números inteiros para calcular:
										<br />
										(a) $-11+7$
										<br />
										(b) $23-15$
										<br />
										(c) $12\cdot9$
										<br />
										(d) $-4\cdot(-17)$
		                            </p>
		                            <!-- Resposta -->
		                            	<p style="display: none; background: #eee; padding: 0.5cm " id="d_1_">
			                            	Dica:
			                            	<br />
			                            	Relembre a definição da adição e multiplicação em $\mathbb{Z}$: dados dois inteiros $\alpha=\overline{(a,b)}$ e $\beta=\overline{(c,d)}$, definimos a soma $\alpha+\beta$ e o produto $\alpha\cdot\beta$ do seguinte modo
			                            	$$\begin{matrix} \alpha+\beta & = & \overline{(a,b)}+\overline{(c,d)} & = & \overline{(a+c,b+d)} \\ \alpha\cdot\beta & = & \overline{(a,b)}\cdot\overline{(c,d)} & = & \overline{(ac+bd,ad+bc)} \end{matrix}$$
			                            </p>
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_1_">
			                                Solução:
			                                <br />
			                                (a) $-11+7=\overline{(1,12)}+\overline{(8,1)}=\overline{(9,13)}=-4$
											<br />
											(b) $23-15=23+(-15)=\overline{(24,1)}+\overline{(2,17)}=\overline{(26,18)}=8$
											<br />
											(c) $2\cdot9=\overline{(3,1)}\cdot\overline{(11,2)}=\overline{(35,17)}=18$
											<br />
											(d) $-4\cdot(-17)=\overline{(1,5)}\cdot\overline{(1,18)}=\overline{(91,23)}=68$
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
		                                2. Prove que não existe número inteiro entre $0$ e $1$.
		                            </p>
		                            <!-- Resposta -->
		                            	<p style="display: none; background: #eee; padding: 0.5cm " id="d_2_">
			                                Dica:
			                                <br />
			                                Suponha que exista um número inteiro entre $0$ e $1$, construa o conjunto formado pelos números inteiros com esta propriedade e use o PBO para chegar em uma contradição.
			                            </p>
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_2_">
			                                Solução:
			                                <br />
			                                Suponha que exista inteiro entre $0$ e $1$ e considere o conjunto $A=\{x\in\mathbb{Z}\,|\,0< x<1\}$. Assim, $A\subset\mathbb{Z}$, $A\neq\emptyset$ (pela suposição) e é limitado inferiormente por $0$. Pelo PBO, $A$ possui um menor elemento que iremos denotar por $a$. Assim, $$0< a<1\Rightarrow 0< a^2< a<1\Rightarrow a^2\in A$$ que é uma contradição pela minimalidade de $a$.
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
		                            <p id="q_3_p">
		                                3. Prove que se $a$ e $b$ são dois inteiros positivos quaisquer, então existe um inteiro positivo $n$ tal que $na\geq b$.
		                            </p>
		                            <!-- Resposta -->
		                            	<p style="display: none; background: #eee; padding: 0.5cm " id="d_3_">
			                                Dica:
			                                <br />
			                                Suponha que para todo inteiro positivo $n$ tem-se $na< b$. Construa o conjunto dos inteiros positivos com esta propriedade e use o PBO para chegar em uma contradição.
			                            </p>
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_3_">
			                                Solução:
			                                <br />
			                                Sejam $a$ e $b$ inteiros positivos quaisquer e suponha que para todo inteiro positivo $n$ tem-se $na< b$. Sendo assim, o conjunto $A=\{b-na\,|\,n\;\textrm{é um inteiro positivo}\}$ é um subconjunto de $\mathbb{Z}$, não vazio e limitado inferiormente por $0$. Logo, pelo PBO, $A$ possui um menor elemento que iremos denotar por $c$. Daí, $c=b-ka$, onde $k$ é um inteiro positivo. Entretanto, $b-(k+1)a$ é um elemento de $A$ menor que $c$ (contradição). Portanto, existe um inteiro positivo $n$ tal que $na\geq b$.
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

		                            <!-- 4 -->
		                            <p id="q_4_p">
		                                4. Considere o conjunto $\mathbb{Z}^*$ dos números inteiros menos o $0$. Mostre que a relação $R$ sobre $\mathbb{Z}\times\mathbb{Z}^*$ definida por $$(a,b)R(c,d)\Leftrightarrow ad=bc$$ é uma relação de equivalência.
		                            </p>
		                            <!-- Resposta -->
		                            	<!--<p style="display: none; background: #eee; padding: 0.5cm " id="d_4_">
			                                Em construção: dica
			                            </p>-->
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_4_">
			                                Solução:
			                                <br />
			                                (i) Reflexiva: $ab=ba\Rightarrow (a,b)R(a,b)$.
			                                <br />
			                                (ii) Simétrica: $(a,b)R(c,d)\Rightarrow ad=bc\Rightarrow cb=da\Rightarrow (c,d)R(a,b)$.
			                                <br />
			                                (iii) Transitiva: $(a,b)R(c,d)$ e $(c,d)R(e,f)\Rightarrow ad=bc$ e $cf=de\Rightarrow adf=bcf$ e $cfb=deb$. Assim, $adf=deb$ e como $d\neq 0$, tem-se $af=eb\Rightarrow (a,b)R(e,f)$.
			                            </p>
			                            <!--<p style="display: none; background: #eee; padding: 0.5cm " id="v_4_">
			                                Em construção: videoaula
			                            </p>-->
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="o_4_">
			                                Observação:
			                                <br />
			                                As classes de equivalência $\overline{(a,b)}$ são denotadas por $\frac{a}{b}$ e o conjunto quociente $\mathbb{Z}\times\mathbb{Z}^*/R$ é denominado conjunto dos números racionais na qual denotamos por $\mathbb{Q}$. 
			                            </p>
			                            <!--<p class="button primary" id="d_4" onclick="btn2(this.id)" >
			                                DICA
			                            </p>-->
			                            <p class="button primary" id="r_4" onclick="btn2(this.id)" >
			                                SOLUÇÃO
			                            </p>
			                            <p class="button primary" id="o_4" onclick="btn2(this.id)" >
			                                OBSERVAÇÃO
			                            </p>
			                            <!--<p class="button primary" id="v_4" onclick="btn2(this.id)" >
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