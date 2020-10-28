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
		                                2. Seja $p\in\mathbb{Z}$. Prove que $p$ é um número primo se, e somente se, satisfaz as seguintes condições:
		                                <br />
		                                (i) $p>1$;
		                                <br />
		                                (ii) Dados $a,b\in\mathbb{N}$, se $p=ab$, então $a=1$ ou $b=1$.
		                            </p>
		                            <!-- Resposta -->
			                            <!--<p style="display: none; background: #eee; padding: 0.5cm " id="d_3_">
			                                Em construção: dica
			                            </p>-->
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_2_">
			                                Solução:
			                                <br />
			                                ($\Rightarrow$) Por definição de número primo, $p>1$. Agora, se $p=ab$, então $a\mid p\Rightarrow a=1$ ou $a=p$. Se $a=1$, então $b=p$ e caso $a=p$, tem-se $b=1$.
			                                <br />
			                                ($\Leftarrow$) Seja $c$ um divisor positivo de $p$ , logo $p=ck\Rightarrow c=1$ ou $k=1\Rightarrow c=1$ ou $c=p\Rightarrow p$ é primo.
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
		                                <br />
		                                3. Um número da forma $F_n=2^{2^n}+1$ é chamado de número de Fermat.
		                                <br />
		                                (a) Prove que dois números de Fermat distintos são primos entre si.
		                                <br />
		                                (b) Use o resultado do item (a) para obter uma segunda prova da infinitude dos números primos.
		                            </p>
		                            <!-- Resposta -->
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="d_3_">
			                            	Dica:
			                            	<br />
			                                (a) Prove inicialmente que $F_0F_1\cdots F_{n-1}=F_n-2$. Em seguida, considere dois inteiros distintos $m$ e $n$ (podemos supor, sem perda de generalidade, que $n< m$) e mostre que $F_m-F_0F_1\cdots F_n\cdots F_{m-1}=2$. Por último, tome um divisor comum de $F_m$ e $F_n$ e mostre, utilizando a equação anterior, que $a=\pm1$.
			                            </p>
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_3_">
			                                Solução:
			                                <br />
			                                (a) Inicialmente, vamos provar por indução que $F_0F_1\cdots F_{n-1}=F_n-2$. De fato,
			                                <br />
			                                (i) $n=1$: $F_0=2^{2^0}+1=3=F_1-2$.
			                                <br />
			                                (ii) Suponha que a propriedade seja válida para $n$, ou seja, $F_0F_1\cdots F_{n-1}=F_n-2$.
			                                <br />
			                                (iii) Para $n+1$: $$F_0F_1\cdots F_{n-1}F_n=(F_n-2)F_n=(2^{2^n}+1-2)(2^{2^n}+1)=2^{2^{n+1}}-1=2^{2^{n+1}}+1-2.$$
			                                <br />
											Portanto, $F_0F_1\cdots F_{n-1}F_n=F_{n+1}-2$ e, pelo primeiro princípio de indução, a propriedade é válida para todo $n\geq1$. Agora, considere $m,n\in\mathbb{Z}$ e suponha que $n< m$. Daí, $F_0F_1\cdots F_n\cdots F_{m-1}=F_m-2\Rightarrow F_m-F_0F_1\cdots F_n\cdots F_{m-1}=2$. Se $a\mid F_m$ e $a\mid F_n$, então $F_m=ak$ e $F_n=aq\Rightarrow ak-F_0F_1\cdots aq\cdots F_{m-1}=2\Rightarrow a(k-F_0F_1\cdots q\cdots F_{m-1})=2\Rightarrow a\mid 2\Rightarrow a=\pm1,\pm2$. Como $F_m$ e $F_n$ são ímpares, tem-se $a=\pm1$. Portanto, $\textrm{mdc}(F_m,F_n)=1$.
											<br /><br />
											(b) Sabe-se que existem infinitos números de Fermat e, como foi visto no item (a), eles não possuem fatores primos em comum. Logo, o conjunto formado pelos números primos são pode ser finito.
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


			                            <!-- 4 -->
		                            <p id="q_4_p">
		                                4. Os números primos da forma $M_n=2^n-1$ ($n\in\mathbb{N}$) são chamados primos de Mersenne em homenagem ao matemático francês Marin Mersenne (1588-1648), embora já fossem conhecidos por Euclides. Se $n\in\mathbb{N}$ e $2^n-1$ é um número primo, mostre que $n$ também é primo.
		                            </p>
		                            <!-- Resposta -->
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="d_4_">
			                                Dica:
			                                <br/>
			                                Prove utilizando a contrapositiva.
			                            </p>
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_4_">
			                                Solução:
			                                <br />
			                                Se $n\in\mathbb{N}$ é composto, então $n=ab$ com $a,b>1$. Assim, $2^a-1>1$ e $2^n-1=2^{ab}-1=(2^a)^b-1=(2^a-1)\left((2^a)^{b-1}+(2^a)^{b-2}+\cdots+(2^a)+1\right)$. Portanto, $2^n-1$ é composto e o resultado é válido.
			                            </p>
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="v_4_">
			                                Observação:
			                                <br />
			                                Até a data de hoje (outubro\2020), o maior primo encontrado é o primo de Mersenne $2^{82589933}-1$ que possui 24862048 dígitos. Além disso, em 1536, Hudalrichus Regius apresentou a fatoração de $2^{11}-1 = 2047 = 23 \cdot 89$, demonstrando que a recíproca do resultado acima é falsa.
			                            </p>
			                            <p class="button primary" id="d_4" onclick="btn2(this.id)" >
			                                DICA
			                            </p>
			                            <p class="button primary" id="r_4" onclick="btn2(this.id)" >
			                                SOLUÇÃO
			                            </p>
			                            <p class="button primary" id="v_4" onclick="btn2(this.id)" >
			                                OBSERVAÇÃO
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
