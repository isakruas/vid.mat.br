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

									<h2>Pequeno Teorema de Fermat e Teorema de Wilson</h2>

									<hr class="major" />

		                            <!-- 1 -->
		                            <p id="q_1_p">
		                                1. Calcule o resto da divisão de $2^{100000}$ por $17$.
		                            </p>
		                            <!-- Resposta -->
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="d_1_">
			                                Dica:
			                                <br />
			                                Use o Pequeno Teorema de Fermat para $a=2$ e $p=17$.
			                            </p>
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_1_">
			                                Solução:
			                                <br />
			                                Como 17 é primo e não divide 2, pelo Pequeno Teorema de Fermat, $2^{16} \equiv 1 \,(\textrm{mod } 17)$. Daí, $$2^{100000}=(2^{16})^{6250} \equiv 1^{6250} \equiv 1 \,(\textrm{mod } 17).$$
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
		                                2. Mostre que $a^7 \equiv a \,(\textrm{mod } 21)$ para todo número inteiro $a$.
		                            </p>
		                            <!-- Resposta -->
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="d_2_">
			                                Dica:
			                                <br />
			                                Mostre que $7\mid (a^7-a)$ e $3\mid (a^7-a)$. Em seguida, utilize o exercício 5 de congruências para validar o resultado.
			                            </p>
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_2_">
			                                Solução:
			                                <br />
			                                Considere $a\in\mathbb{Z}$. Pelo Pequeno Teorema de Fermat, $a^7 \equiv a \,(\textrm{mod } 7)$, ou seja, $7\mid (a^7-a)$. Agora, considere as possibilidades:
			                                <br />
			                                (i) $\textrm{mdc}(a,3)=1\Rightarrow a^2 \equiv 1 \,(\textrm{mod } 3)\Rightarrow a^7=a^6\cdot a \equiv 1 \,(\textrm{mod } 3)$.
			                                <br />
			                                (ii) $\textrm{mdc}(a,3)\neq1\Rightarrow a \equiv 0 \,(\textrm{mod } 3)\Rightarrow a^7 \equiv 0 \equiv a \,(\textrm{mod } 3)$.
			                                <br />
			                                Em ambos os casos, $3\mid (a^7-a)$. Como $\textrm{mdc}(3,7)=1$, $3\cdot 7=21$ divide $a^7-a$, ou seja, $a^7 \equiv a \,(\textrm{mod } 21)$.
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
		                                3. Utilize o Pequeno Teorema de Fermat para mostrar que se $a$ é um número inteiro, então $a$ e $a^5$ possuem o mesmo algarismo das unidades.
		                            </p>
		                            <!-- Resposta -->
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="d_3_">
			                            	Dica:
			                            	<br />
			                            	Utilize o exercício 5 de congruências.
			                            </p>
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_3_">
			                                Solução:
			                                <br />
			                                Pelo Pequeno Teorema de Fermat, $a^5 \equiv a \,(\textrm{mod } 5)$. Como $a^5-a$ é sempre um número par, temos que $2\mid (a^5-a)\Rightarrow a^5 \equiv a \,(\textrm{mod } 2)$ e, pelo exercício 5 de congruências, $a^5 \equiv a \,(\textrm{mod } 10)$. Portanto, $a$ é um número inteiro, então $a$ e $a^5$ possuem o mesmo algarismo das unidades.
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
		                                4. Determine o resto da divisão de $15!$ por $17$. 
		                            </p>
		                            <!-- Resposta -->
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="d_4_">
			                                Dica:
			                                <br />
			                                Utilize o Teorema de Wilson.
			                            </p>
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_4_">
			                                Solução:
			                                <br />
			                                Pelo Teorema de Wilson, $16! \equiv -1 \,(\textrm{mod } 17)$. Observe que, $16!=16\cdot15!=(17-1)15!=17\cdot 15!-15!$ e, além disso, $17\cdot 15! \equiv 0 \,(\textrm{mod } 17)$. Logo, $16! \equiv -1 \,(\textrm{mod } 17)\Rightarrow 17\cdot 15!-15! \equiv -1 \,(\textrm{mod } 17)\Rightarrow -15! \equiv -1 \,(\textrm{mod } 17)\Rightarrow 15! \equiv 1 \,(\textrm{mod } 17)$, ou seja, o resto da divisão de 15! por 17 é 1. 
			                            </p>
			                            <!--<p style="display: none; background: #eee; padding: 0.5cm " id="v_4_">
			                                Observação:
			                                <br />
			                                Até a data de hoje (outubro\2020), o maior primo encontrado é o primo de Mersenne $2^{82589933}-1$ que possui 24862048 dígitos. Além disso, em 1536, Hudalrichus Regius apresentou a fatoração de $2^{11}-1 = 2047 = 23 \cdot 89$, demonstrando que a recíproca do resultado acima é falsa.
			                            </p>-->
			                            <p class="button primary" id="d_4" onclick="btn2(this.id)" >
			                                DICA
			                            </p>
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
