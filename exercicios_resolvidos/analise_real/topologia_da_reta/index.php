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

									<h2>Topologia da reta</h2>

									<hr class="major" />

		                            <!-- 1 -->
		                            <p  id="q_1_p">
		                                1. Mostre que o conjunto $A=\left\{\frac{n}{n+1}\,|\,n\in\mathbb{N}\right\}$ não é aberto nem fechado.
		                            </p>
		                            <!-- Resposta -->
		                            <p style="display: none; background: #eee; padding: 0.5cm " id="d_1_">
			                                Dica:
			                                <br />
			                                (i) Mostre que $\frac{1}{2}\in A$, mas $\frac{1}{2}\notin\textrm{int}(A)$, ou seja, $A\not\subset \textrm{int}(A)$.
			                                <br />
			                                (ii) Mostre que 1 é aderente a $A$, mas $1\notin A$, ou seja, $\overline{A}\not\subset A$.
			                            </p>
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_1_">
			                                Solução:
			                                <br />
			                                (i) $A$ não é aberto: Observe que $\frac{1}{2}\in A$, mas $\frac{1}{2}\notin\textrm{int}(A)$. De fato, para todo $\varepsilon>0$, temos que $\left(\frac{1}{2}-\varepsilon,\frac{1}{2}+\varepsilon\right)\subset A$, pois $\frac{\frac{1}{2}-\varepsilon}{2}=\frac{1-2\varepsilon}{4}\in\left(\frac{1}{2}-\varepsilon,\frac{1}{2}+\varepsilon\right)$, mas $\frac{1-2\varepsilon}{4}\notin A$.
			                                <br />
			                                (ii) $A$ não é fechado: Considere $x_n=\frac{n}{n+1}$. Sabemos que para todo $\varepsilon>0$, existe $n_0\in\mathbb{N}$ tal que $n>n_0\Rightarrow |x_n-1|<\varepsilon$. Ou seja, 1 é aderente ao conjunto $A$, mas $1\notin A$. 
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
		                                2. Considere $X\subset\mathbb{R}$. Mostre que:
		                                <br />
		                                (a) $\textrm{int}(X)$ é aberto.
		                                <br />
		                                (b) $\overline{X}$ é fechado.
		                            </p>
		                            <!-- Resposta -->
		                            	<p style="display: none; background: #eee; padding: 0.5cm " id="d_2_">
			                                Dica:
			                                <br />
			                                (a) Mostre que $\textrm{int}(\textrm{int}(X))=\textrm{int}(X)$ realizando o seguinte procedimento: tome $x\in\textrm{int}(X)$. Logo, existe $\varepsilon>0$ tal que $(x-\varepsilon,x+\varepsilon)\subset X$. Sendo assim, mostre que todo elemento do intervalo $(x-\varepsilon,x+\varepsilon)$ pertence a $\textrm{int}(\textrm{int}(X))$.
			                                <br />
			                                (b) Demonstre que $\mathbb{R}-\overline{X}$ é um conjunto aberto, ou seja, $\overline{\overline{X}}=\overline{X}$.
			                            </p>
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_2_">
			                                Solução:
			                                <br />
			                                (a) Tome $x\in\textrm{int}(X)$. Logo, existe $\varepsilon>0$ tal que $(x-\varepsilon,x+\varepsilon)\subset X$. Observe que se $y\in(x-\varepsilon,x+\varepsilon)$, então existe $\delta>0$ tal que $(y-\delta,y+\delta)\subset(x-\varepsilon,x+\varepsilon)\subset X$, ou seja, $x\in\textrm{int}(\textrm{int}(X))$. Portanto, $\textrm{int}(\textrm{int}(X))=\textrm{int}(X)$ e, consequentemente, $\textrm{int}(X)$ é um conjunto aberto.
			                                <br />
			                                (b) Tome $x\in\mathbb{R}-\overline{X}$. Logo, $x\notin\overline{X}$, ou seja, $x$ não é ponto de acumulação de $X$. Assim, existe $\varepsilon>0$ tal que $X\cap (x-\varepsilon,x+\varepsilon)=\emptyset$. Isto significa que para todo $y\in(x-\varepsilon,x+\varepsilon)$ tem-se que $y\notin \overline{X}\Rightarrow y\in\mathbb{R}-\overline{X}$. Deste modo, $(x-\varepsilon,x+\varepsilon)\subset \mathbb{R}-\overline{X}$ e $x$ é ponto interior de $\mathbb{R}-\overline{X}$. Portanto, $\mathbb{R}-\overline{X}$ é um conjunto aberto, isto é, $\overline{\overline{X}}=\overline{X}$.
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
		                                3. Considere as funções $f$ e $g$ de $\mathbb{R}$ em $\mathbb{R}$ definidas por $f(x)=3x-2$ e $g(x)=x^2$.
		                                <br />
		                                (a) Mostre que se $A=(-1,4)$, então $f^{-1}(A)$ e $g^{-1}(A)$ são conjuntos abertos.
		                                <br />
		                                (b) Podemos dizer o mesmo para os conjuntos $f(A)$ e $g(A)$?
		                            </p>
		                            <!-- Resposta -->
		                            	<!--<p style="display: none; background: #eee; padding: 0.5cm " id="d_3_">
			                                Dica: 
			                            	<br />
			                            	
			                            </p>-->
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_3_">
			                            	Solução: 
			                            	<br />
			                            	(a) $f^{-1}(A)=\left(\frac{1}{3},2\right)$ e $b^{-1}(A)=\left(-2,2\right)$ que são conjuntos abertos.
			                            	<br />
			                            	(b) $f(A)=(-5,10)$ que é um conjunto aberto. Entretanto, $g(A)=[0,16)$ que não é um conjunto aberto.
			                            </p>
			                            <!--<p style="display: none; background: #eee; padding: 0.5cm " id="v_3_">
			                                Em construção: videoaula
			                            </p>-->
			                            <!--<p class="button primary" id="d_3" onclick="btn2(this.id)" >
			                                DICA
			                            </p>-->
			                            <p class="button primary" id="r_3" onclick="btn2(this.id)" >
			                                SOLUÇÃO
			                            </p>
			                            <!--<p class="button primary" id="v_3" onclick="btn2(this.id)" >
			                                VIDEOAULA
			                            </p>-->

			                            <!-- 4 -->
		                            <p id="q_4_p">
		                                4. Determine os pontos interiores, os pontos de aderência, os pontos de acumulação, a fronteira e diga se é aberto ou fechado cada um dos seguintes conjuntos:
		                                <br />
		                             	(a) $A=[1,3]\cup\{5\}$
			                            <br />
			                            (b) $B=\{1,2,3\}$
			                            <br />
			                            (c) $C=[1,3]\cup\{5\}\cup[6,9]$
			                            <br />
			                            (d) $D=\mathbb{Q}\cap[-1,1]$
			                            <br />
			                            (e) $E=\left\{\frac{(-1)^n}{2n}\,|\,n\in\mathbb{N}\right\}$
			                            <br />
			                            (f) $F=\m\thbb{R}-\mathbb{Q}$
		                            </p>
		                            <!-- Resposta -->
			                            <!--<p style="display: none; background: #eee; padding: 0.5cm " id="d_4_">
			                                Dica:
			                                <br />
			                                Utilize o Teorema de Wilson.
			                            </p>-->
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_4_">
			                                Solução:
			                                <br />
			                                (a) $\textrm{int}(A)=(1,3)$, $\overline{A}=A$, $A'=[1,3]$, $\textrm{fr}(A)=\{1,2,3\}$, $A$ não é um conjunto aberto, $A$ é um conjunto fechado.
			                                <br />
			                                (b) $\textrm{int}(B)=\emptyset$, $\overline{B}=B$, $B'=\emptyset$, $\textrm{fr}(B)=B$, $B$ não é um conjunto aberto, $B$ não é um conjunto fechado.
			                                <br />
			                                (c) $\textrm{int}(C)=(1,3)\cup(6,9)$, $\overline{C}=C$, $C'=[1,3]\cup[6,9]$, $\textrm{fr}(C)=\{1,3,5,6,9\}$, $C$ não é um conjunto aberto, $C$ é um conjunto fechado.
			                                <br />
			                                (d) $\textrm{int}(D)=\emptyset$, $\overline{D}=[-1,1]$, $D'=[-1,1]$, $\textrm{fr}(D)=[-1,1]$, $D$ não é um conjunto aberto nem fechado.
			                                <br />
			                                (e) $\textrm{int}(E)=\emptyset$, $\overline{E}=E\cup\{0\}$, $E'=\{0\}$, $\textrm{fr}(E)=E\cup\{0\}$, $E$ não é um conjunto aberto nem fechado.
			                                <br />
			                                (f) $\textrm{int}(F)=\emptyset$, $\overline{F}=\mathbb{R}$, $F'=\mathbb{R}$, $\textrm{fr}(F)=\mathbb{R}$, $F$ não é um conjunto aberto nem fechado.
			                            </p>
			                            <!--<p style="display: none; background: #eee; padding: 0.5cm " id="v_4_">
			                                Observação:
			                                <br />
			                                Até a data de hoje (outubro\2020), o maior primo encontrado é o primo de Mersenne $2^{82589933}-1$ que possui 24862048 dígitos. Além disso, em 1536, Hudalrichus Regius apresentou a fatoração de $2^{11}-1 = 2047 = 23 \cdot 89$, demonstrando que a recíproca do resultado acima é falsa.
			                            </p>-->
			                            <!--<p class="button primary" id="d_4" onclick="btn2(this.id)" >
			                                DICA
			                            </p>-->
			                            <p class="button primary" id="r_4" onclick="btn2(this.id)" >
			                                SOLUÇÃO
			                            </p>
			                            <!--<p class="button primary" id="v_4" onclick="btn2(this.id)" >
			                                OBSERVAÇÃO
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