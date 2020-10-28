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

									<h2>Congruências</h2>

									<hr class="major" />

		                            <!-- 1 -->
		                            <p id="q_1_p">
		                                1. Determine o resto da divisão de :
		                                <br />
		                                (a) $5^{60}$ por 26;
		                                <br />
		                                (b) $2006^{2006}$ por 5;
		                                <br />
		                                (c) $(116+17^{17})^{21}$ por 8.
		                            </p>
		                            <!-- Resposta -->
			                            <!--<p style="display: none; background: #eee; padding: 0.5cm " id="d_1_">
			                                Dica:
			                                <br />
			                                (a) 
			                            </p>-->
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_1_">
			                                Solução:
			                                <br />
			                                (a) $5^2 \equiv 1 \,(\textrm{mod } 26)\Rightarrow (5^2)^{30} \equiv 1^{30} \,(\textrm{mod } 26)\Rightarrow 5^{60} \equiv 1 \,(\textrm{mod } 26)\Rightarrow$ resto 1.
			                                <br />
			                                (b) $2006 \equiv 1 \,(\textrm{mod } 5)\Rightarrow 2006^{2006} \equiv 1^{2006} \,(\textrm{mod } 5)\Rightarrow 2006^{2006} \equiv 1 \,(\textrm{mod } 5)\Rightarrow$ resto 1.
			                                <br />
			                                (c) Sabemos que $116 \equiv 4 \,(\textrm{mod } 8)$ e $17 \equiv 1 \,(\textrm{mod } 8)\Rightarrow 17^{17} \equiv 1^{17} \,(\textrm{mod } 8)$. Daí, $116+17^{17} \equiv 5 \,(\textrm{mod } 8)\Rightarrow (116+17^{17})^{21} \equiv 5^{21} \,(\textrm{mod } 8)$. Mas, $$5^2\equiv 1\,(\textrm{mod } 8)\Rightarrow (5^2)^{10}\equiv 1^{10}\,(\textrm{mod } 8)\Rightarrow 5^{20}\equiv 1\,(\textrm{mod } 8)\Rightarrow 5^{21}\equiv 5\,(\textrm{mod } 8).$$ Pela transitividade, $(116+17^{17})^{21} \equiv 5 \,(\textrm{mod } 8)$ e, portanto, o resto é 5.
			                            </p>
			                            <!--<p style="display: none; background: #eee; padding: 0.5cm " id="v_1_">
			                                Videoaula:
			                                <br />
			                                
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
		                                2. Demonstre que se $a\equiv b\,(\textrm{mod } m)$, então $\textrm{mdc}(a,m)=\textrm{mdc}(b,m)$.
		                            </p>
		                            <!-- Resposta -->
			                            <!--<p style="display: none; background: #eee; padding: 0.5cm " id="d_3_">
			                                Em construção: dica
			                            </p>-->
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_2_">
			                                Solução:
			                                <br />
			                                Denote $\textrm{mdc}(a,m)=d$ e $\textrm{mdc}(b,m)=e$. Como $a\equiv b\,(\textrm{mod } m)$, tem-se $m\mid (a-b)\Rightarrow a=b+mk$ para algum $k\in\Z\Rightarrow e\mid a$, pois $e\mid b$ e $e\mid m\Rightarrow$ $e\mid a$ e $e\mid m$, ou seja, $e\mid d$. Pelo mesmo argumento, $d\mid e$ e, portanto, $d=e$.
			                            </p>
			                            <!--<p style="display: none; background: #eee; padding: 0.5cm " id="v_2_">
			                                Videoaula:
			                                <br />
			                                <iframe width="875" height="425" src="https://www.youtube.com/embed/GwCWqHw2Rzw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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

			                            <!-- 3 -->
		                            <p id="q_3_p">
		                                3. Considere $n$ é um número inteiro positivo. Prove que $a_0$ ($0\leq a_0\leq 9$) é o algarismo das unidades de $n$ se, e somente se, $n\equiv a_0\,(\textrm{mod } 10)$. 
		                            </p>
		                            <!-- Resposta -->
			                            <!--<p style="display: none; background: #eee; padding: 0.5cm " id="d_3_">
			                            	Dica:
			                            	<br />
			                            </p>-->
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_3_">
			                                Solução:
			                                <br />
			                                Considere $n=a_n10^n+\cdots+a_1 10+a_0$, onde $0\leq a_i\leq 9$ para todo $i$ entre 0 e $n$.
			                                <br />
			                                ($\Rightarrow$) Podemos escrever que $n=10k+a_0$ com $k\in\mathbb{Z}\Rightarrow n-a_0=10k\Rightarrow 10\mid (n-a_0)\Rightarrow n\equiv a_0\,(\textrm{mod } 10)$.
			                                <br />
			                                ($\Leftarrow$) Considere a congruência $n\equiv a\,(\textrm{mod } 10)$ com $0\leq a\leq 9$ e vamos provar que $a=a_0$. Assim, $a_n10^n+\cdots+a_1 10+a_0\equiv a\,(\textrm{mod } 10)\Rightarrow a_0\equiv a\,(\textrm{mod } 10)\Rightarrow 10\mid (a_0-a)$. Como $0\leq a,a_0\leq 9$, a única possibilidade válida é $a=a_0$.
			                            </p>
			                            <!--<p style="display: none; background: #eee; padding: 0.5cm " id="v_3_">
			                                Videoaula:
			                                <br />
			                                <iframe width="853" height="480" src="https://www.youtube.com/embed/KkZ67G8Nev4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
		                                4. Utilize o exercício anterior para determinar que o algarismo das unidades de $101^{101}$ e $99^{101}$.
		                            </p>
		                            <!-- Resposta -->
			                            <!--<p style="display: none; background: #eee; padding: 0.5cm " id="d_4_">
			                                Dica:
			                                <br/>
			                                Prove utilizando a contrapositiva.
			                            </p>-->
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_4_">
			                                Solução:
			                                <br />
			                                $101\equiv 1\,(\textrm{mod } 10)\Rightarrow 101^{101}\equiv 1^{101}\,(\textrm{mod } 10)\Rightarrow 101^{101}\equiv 1\,(\textrm{mod } 10)\Rightarrow$ o algarismo das unidades de $101^{101}$ é 1. Por outro lado, $99\equiv -1\,(\textrm{mod } 10)\Rightarrow 99^{101}\equiv (-1)^{101}\,(\textrm{mod } 10)\Rightarrow 99^{101}\equiv -1\,(\textrm{mod } 10)\equiv 9\,(\textrm{mod } 10)\Rightarrow$ o algarismo das unidades de $99^{101}$ é 9.
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
