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

									<h2>Divisibilidade</h2>

									<hr class="major" />

		                            <!-- 1 -->
		                            <p  id="q_1_p">
		                                1. Classifique cada item como verdadeiro (V) ou falso (F). Caso seja verdadeira, demonstre o fato, caso contrário, apresente um contra-exemplo. No que segue, considere $a,b,c,d\in\mathbb{Z}$.
		                                <br />
										(a) $a\mid b$ e $c\mid d\Rightarrow ac\mid bd$.
										<br />
										(b) $a\mid b$ e $c\mid d\Rightarrow (a+c)\mid (b+d)$.
										<br />
										(c) $a\mid b\Rightarrow b\mid a$.
										<br />
										(d) $a\mid bc\Rightarrow a\mid b$ ou $a\mid c$.
										<br />
										(e) $a\mid (b+c)\Rightarrow a\mid b$ ou $a\mid c$.
										<br />
										(f) $a\mid b\Rightarrow a^2\mid b^2$.
		                            </p>
		                            <!-- Resposta -->
		                            	<!--<p style="display: none; background: #eee; padding: 0.5cm " id="d_1_">
			                                Dica:
			                                <br />
			                                Em construção.
			                            </p>-->
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_1_">
			                                Solução:
			                                <br />
			                                V,F,F,F,F,V
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
		                            <p  id="q_2_p">
		                                2. Mostre que se $a$ for um inteiro $a^2-2$ não é divisível por $4$.
		                            </p>
		                            <!-- Resposta -->
		                            	<p style="display: none; background: #eee; padding: 0.5cm " id="d_2_">
			                                Dica:
			                                <br />
			                                Aplique o algoritmo da divisão euclidiana entre $a^2-2$ e $4$, suponha que o resto vale zero e chegue em uma contradição.
			                            </p>
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_2_">
			                                Solução:
			                                <br />
			                                Na divisão euclidiano de $a^2-2$ por $4$, temos que $a^2-2=4q+r$, onde $r=0$, ou $1$, ou $2$, ou $3$. Suponha que $r=0$, logo $a^2=2(2q+1)\Rightarrow a^2$ é par $\Rightarrow a$ é par $\Rightarrow a=2k,\;k\in\mathbb{Z}\Rightarrow (2k)^2=4q+2\Rightarrow 2k^2=2q+1$, contradição.
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
		                                3. Mostre que se três números inteiros são consecutivos, então um deles é divisível por $3$. 
		                            </p>
		                            <!-- Resposta -->
		                            	<p style="display: none; background: #eee; padding: 0.5cm " id="d_3_">
			                                Dica:
			                                <br />
			                                Escreva os três números inteiros consecultivos da forma: $a-1,a,a+1$, onde $a\in\mathbb{Z}$ e aplique o algoritmo de Euclides.
			                            </p>
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_3_">
			                                Resposta:
			                                <br />
			                                Três números interos consecultivos podem ser escritos da forma $a-1,a,a+1$, onde $a\in\mathbb{Z}$. Assim, pelo algoritmo de Euclides, $a=3q+r$, onde $r=0$, ou $1$, ou $2$. Se $r=0$, $a$ é divisível por $3$; se $r=1$, $a-1$ é divisível por $3$; se $r=2$, $a+1$ é divisível por $3$. 
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
			                                4. Se o resto da divisão de um número inteiro $n$ por $12$ é $7$, então qual o resto da divisão de:
			                                <br />
			                                (a) $2n$ por $12$?
			                                <br />
			                                (b) $-n$ por $12$?
			                                <br />
			                                (c) $n$ por $4$?
			                                <br />
			                                (d) $n^2$ por $8$?
			                            </p>
			                            <!-- Resposta -->
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="d_4_">
			                                Dica:
			                                <br />
			                                Em cada caso, aplique o algoritmo de Euclides e manipule a expressão obtida para determinar o resto.
			                            </p>
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_4_">
			                                Solução:
			                                <br />
			                                (a) $n=12q+7\Rightarrow 2n=12(2q+1)+2\Rightarrow$ resto $2$.
			                                <br />
			                                (b) $n=12q+7\Rightarrow -n=12(-q-1)+5\Rightarrow$ resto $5$.
			                                <br />
			                                (c) $n=12q+7\Rightarrow n=4(3q+1)+3\Rightarrow$ resto $3$.
			                                <br />
			                                (d) $n=12q+7\Rightarrow n^2=8(18q^2+21q+6)+1\Rightarrow$ resto $1$.
			                            </p>
			                            <!--<p style="display: none; background: #eee; padding: 0.5cm " id="v_4_">
			                                Em construção: videoaula
			                            </p>-->
			                            <p class="button primary" id="d_4" onclick="btn2(this.id)" >
			                                DICA
			                            </p>
			                            <p class="button primary" id="r_4" onclick="btn2(this.id)" >
			                                SOLUÇÃO
			                            </p>
			                            <!--<p class="button primary" id="v_4" onclick="btn2(this.id)" >
			                                VIDEOAULA
			                            </p>-->

			                            <!-- 5 -->
			                            <p id="q_5_p">
			                                5. Mostre que se $a$ é um número inteiro ímpar, então $8\mid(a^2-1)$.
			                            </p>
			                            <!-- Resposta -->
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="d_5_">
			                                Dica:
			                                <br />
			                                Inicialmente, prove que se $a$ é um inteiro ímpar, então $a=4q+1$ ou $a=4q+3$, onde $q\in\mathbb{Z}$. A partir disso, mostre que $8\mid(a^2-1)$.
			                            </p>
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_5_">
			                                Solução:
			                                <br />
			                                Seja $a$ um inteiro ímpar. Na divisão euclidiana de $a$ por $4$ obtemos $a=4q+r$, onde $r=0$, ou $1$, ou $2$, ou $3$. Como $a$ é ímpar, $r=1$ ou $r=3$, pois, caso contrário, teríamos uma contradição. Daí, se $a=4q+1$, então $a^2=8k+1$, onde $k\in\mathbb{Z}\Rightarrow a^2-1=8k$. O mesmo acontece com a outra possibilidade. Portanto, $8\mid(a^2-1)$.
			                            </p>
			                            <!--<p style="display: none; background: #eee; padding: 0.5cm " id="v_5_">
			                                Em construção: videoaula
			                            </p>-->
			                            <p class="button primary" id="d_5" onclick="btn2(this.id)" >
			                                DICA
			                            </p>
			                            <p class="button primary" id="r_5" onclick="btn2(this.id)" >
			                                SOLUÇÃO
			                            </p>
			                            <!--<p class="button primary" id="v_5" onclick="btn2(this.id)" >
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