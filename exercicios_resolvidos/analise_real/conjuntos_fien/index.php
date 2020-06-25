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

									<h2>Conjuntos finitos, infinitos, enumeráveis e não enumeráveis</h2>

									<hr class="major" />

 										<!-- 1 -->
			                            <p id="q_1_p">
			                                1. No que segue, $|A|$ indica o número de elementos de um conjunto finito $A$. Sendo assim, se $A$ e $B$ são dois conjunto finitos disjuntos tais que $|A|=m$ e $|B|=n$, mostre que $|A\cup B|=m+n$.
			                            </p>
			                            <!-- Resposta -->
			                            <!--<p style="display: none; background: #eee; padding: 0.5cm " id="d_1_">
			                                Em construção: dica
			                            </p>-->
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_1_">
			                                Solução:
			                                <br />
			                                Por hipótese, existem duas bijeções $f:I_m\to A$ e $g:I_n\to B$. Assim, a função $h:I_{m+n}\to A\cup B$ definida por $$h(x)=\left\{\begin{matrix} f(x), & \textrm{se} & x\in\{1,2,\ldots,m\} \\ g(x), & \textrm{se} & x\in\{m+1,m+2,\ldots,m+n\} \end{matrix}\right.$$ é uma bijeção. Portanto, $A\cup B$ é um conjunto finito e possui $m+n$ elementos.
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
			                                2. Prove que se $A$ e $B$ são conjuntos finitos quaisquer, então $|A\cup B|=|A|+|B|-|A\cap B|.$
			                            </p>
			                            <!-- Resposta -->
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="d_2_">
			                                Dica:
			                                <br />
			                                Use que $A=(A-B)\cup (A\cap B)$, $A\cup B=(A-B)\cup B$ e a questão anterior.
			                            </p>
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_2_">
			                                Solução:
			                                <br />
			                                Considere $A$ e $B$ são conjuntos finitos quaisquer. Observe que $A=(A-B)\cup (A\cap B)\Rightarrow$ $|A|=|A-B|+|A\cap B|$ pelo exercício anterior. Por outro lado, $A\cup B=(A-B)\cup B\Rightarrow$ $|A\cup B|=|A-B|+|B|$. Portanto, pelas duas igualdades anteriores, $|A\cup B|=|A|+|B|-|A\cap B|$.
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
			                                3. Dado um conjunto finito $X$, prove que uma função $f:X\to X$ é injetiva se, e somente se, é sobrejetiva (e portanto uma bijeção).
			                            </p>
			                            <!-- Resposta -->
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="d_3_">
			                                Dica:
			                                <br />
			                                Inicialmente, considere $n\in\mathbb{N}$ e uma função $f:I_n\to I_n$, onde $I_n=\{p\in\mathbb{N}\,|\,1\leq p \leq n\}$. Prove que $f$ é injetiva se, e somente se, $f$ é sobrejetiva.
			                            </p>
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_3_">
			                                Solução:
			                                <br /> 
			                                Inicialmente, considere $n\in\mathbb{N}$ e uma função $f:I_n\to I_n$, onde $I_n=\{p\in\mathbb{N}\,|\,1\leq p \leq n\}$. Vamos mostrar que $f$ é injetiva se, e somente se, $f$ é sobrejetiva. Com efeito,
			                                <br />
			                                ($\Rightarrow$) Se $f$ é injetiva, então $f:I_n\to f(I_n)$ é uma bijeção com $f(I_n)\subset I_n\Rightarrow f(I_n)=I_n$. Logo, $f$ é sobrejetiva.
			                                <br />
			                                ($\Leftarrow$) Se $f$ é sobrejetiva, para cada $y\in I_n$ existe $x\in I_n$ tal que $f(x)=y$. Isto define uma função $g:I_n\to I_n$ dada por $g(y)=x$, onde $f(x)=y$. Logo, $f(g(y))=y$, para todo $y\in I_n$, ou seja, $g$ possui inversa à esquerda $\Rightarrow$ $g$ é injetiva e, pelo que vimos na prova acima, $g$ é sobrejetiva. Por outro lado, considere $f(x_1)=f(x_2)$ com $x_1,x_2\in I_n$. Assim, existem $y_1,y_2\in I_n$ tais que $g(y_1)=x_1$ e $g(y_2)=x_2$. Daí, $$y_1=f(g(y_1))=f(x_1)=f(x_2)=f(g(y_2))=y_2\Rightarrow y_1=y_2.$$ Consequentemente, $$x_1=g(y_1)=g(y_2)=x_2.$$ 
			                       			
			                                Agora, vamos resolver a questão e, para isso, considere a bijeção $g:I_n\to X$, onde $n\in\mathbb{N}$. Assim, $h=g^{-1}\circ f\circ g:I_n\to I_n$ é injetiva/sobrejetiva $\Rightarrow h$ é sobrejetiva/injetiva e, portanto, $f=g\circ f\circ g^{-1}$ é sobrejetiva/injetiva.
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
			                                4. Seja $f:X\to Y$, onde $X$ e $Y$ são conjuntos infinitos. Prove que:
			                                <br /> 
			                                (a) Se $Y$ é enumerável e $f$ é injetiva, então $X$ é enumerável.
			                                <br /> 
			                                (b) Se $X$ é enumerável e $f$ é sobrejetiva, então $Y$ é enumerável.
			                            </p>
			                            <!-- Resposta -->
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="d_4_">
			                                Dica:
			                                <br />
			                                (b) Use o item (a).
			                            </p>
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_4_">
			                                Solução:
			                                <br /> 
			                                (a) Se $f$ é injetiva, então $g:X\to f(X)$ dada por $g(x)=f(x)$, para todo $x\in X$, é uma bijeção com $f(X)\subset Y$. Como $Y$ é enumerável, tem-se que $f(X)$ também é enumerável, logo existe uma bijeção $h:\mathbb{N}\to f(X)$. Portanto, $g^{-1}\circ h:\mathbb{N}\to X$ é uma bijeção e $X$ é enumerável.
			                                <br /> 
			                                (b) Se $f$ é sobrejetiva, então $f$ possui inversa a direita que iremos denotar por $g:Y\to X$. Ao mesmo tempo, $f$ é a inversa a esquerda de $g$ o que implica que $g$ é injetiva. Pelo item (a) o resultado é válido.
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
			                                5. Mostre que:
			                                <br /> 
			                                (a) $\mathbb{N}\times\mathbb{N}$ é enumerável.
			                                <br /> 
			                                (b) O produto cartesiano de dois conjuntos enumeráveis é também enumerável.
			                                <br /> 
			                                (c) O conjunto $\mathbb{Q}$ dos racionais é enumerável.
			                            </p>
			                            <!-- Resposta -->
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="d_5_">
			                                Dica:
			                                <br />
			                                (a) Defina uma função $f:\mathbb{N}\times\mathbb{N}\to\mathbb{N}$ injetora e use o item (a) da questão 4.
			                                <br />
			                                (b) Use o item (a).
			                                <br />
			                                (c) Inicialmente, mostre que $\mathbb{Z}^*$ é enumerável. EM seguida, defina uma função sobrejetiva $f:\mathbb{Z}\times\mathbb{Z}^*\to\mathbb{Q}$ e use o item (b) da questão 4 para concluir o resultado.
			                            </p>
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_5_">
			                                Solução:
			                                <br />
			                                (a) Considere a função $f:\mathbb{N}\times\mathbb{N}\to\mathbb{N}$ definida por $f(m,n)=2^m3^n$. Pela unicidade na decomposição em produto de números primos, $f$ é injetora e, pela questão 4 item (a), $\mathbb{N}\times\mathbb{N}$ é enumerável.
			                                <br />
			                                (b) Considere $X$ e $Y$ conjuntos enumeráveis. Se $X$ e $Y$ são finitos, então $X\times Y$ também é finito e, portanto, enumerável. Caso $X$ e $Y$ são infinitos enumeráveis, existem bijeções $f:\mathbb{N}\to X$ e $g:\mathbb{N}\to Y$. Sendo assim, defina a função $h:\mathbb{N}\times\mathbb{N}\to X\times Y$ por $h(m,n)=(f(m),g(n))$. Como $f$ e $g$ são sobrejetivas, tem-se que $h$ também é sobrejetiva. Sabendo que $\mathbb{N}\times\mathbb{N}$ é enumerável e pelo item (b) da questão 4, temos que $X\times Y$ é enumerável.
			                                <br />
			                                (c) Inicialmente, note que $\mathbb{Z}^*$ é enumerável, pois $\mathbb{Z}^*\subset\mathbb{Z}$. Além disso, $\mathbb{Z}\times\mathbb{Z}^*$ também é enumerável pelo item (b). Agora, defina a função $f:\mathbb{Z}\times\mathbb{Z}^*\to\mathbb{Q}$ por $f(m,n)=\frac{m}{n}$. Logo, $f$ é sobrejetiva e, pelo item (b) da questão 4, $\mathbb{Q}$ é enumerável.
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

			                            <!-- 6 -->
			                            <p id="q_6_p">
			                                6. Prove que se $A$ é um conjunto qualquer, então não existe sobrejeção de $A$ sobre $\mathcal{P}(A)$. Este resultado é conhecido como Teorema de Cantor.
			                            </p>
			                            <!-- Resposta -->
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="d_6_">
			                                Dica:
			                                <br />
			                                Suponha que exista uma sobrejeção $f:A\to\mathcal{P}(A)$ e considere o conjunto $X=\{a\in A\,|\, a\notin f(a)\}$. Use a sobrejetividade de $f$ para garantir que existe $a_0\in A$ tal que $f(a_0)=X$ e chegue em uma contradição mostrando que $a_0\in X$ e $a_0\notin X$ não acontecem.
			                            </p>
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_6_">
			                                Solução:
			                                <br /> 
			                                Suponha que exista uma sobrejeção $f:A\to\mathcal{P}(A)$ e considere o conjunto $X=\{a\in A\,|\, a\notin f(a)\}$. Como $X\subset A$, tem-se $X\in\mathcal{P}(A)\Rightarrow$ existe $a_0\in A$ tal que $f(a_0)=X$. Assim, $a_0\in X$ ou $a_0\notin X$. Se $a_0\in X$, então $a_0\in f(a_0)$ o que contradiz a definição de $X$. Caso contrário, $a_0\notin f(a_0)\Rightarrow a_0\in X$ que também é uma contradição. Portanto, $f$ não pode existir.
			                            </p>
			                            <!--<p style="display: none; background: #eee; padding: 0.5cm " id="v_6_">
			                                Em construção: videoaula
			                            </p>-->
			                            <p class="button primary" id="d_6" onclick="btn2(this.id)" >
			                                DICA
			                            </p>
			                            <p class="button primary" id="r_6" onclick="btn2(this.id)" >
			                                SOLUÇÃO
			                            </p>
			                            <!--<p class="button primary" id="v_6" onclick="btn2(this.id)" >
			                                VIDEOAULA
			                            </p>-->

			                            <!-- 7 -->
			                            <p id="q_7_p">
			                                7. Demosntre que $\mathcal{P}(\mathbb{N})$ é não enumerável.
			                            </p>
			                            <!-- Resposta -->
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="d_7_">
			                                Dica:
			                                <br />
			                                Use o Teorema de Cantor.
			                            </p>
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_7_">
			                                Solução:
			                                <br /> 
			                                Pelo Teorema de Cantor, não pode existir uma sobrejeção $f:\mathbb{N}\to\mathcal{P}(\mathbb{N})$, ou seja, qualquer função de $\mathbb{N}$ em $\mathcal{P}(\mathbb{N})$ não pode ser bijetora. Portanto, $\mathcal{P}(\mathbb{N})$ é não enumerável.
			                            </p>
			                            <!--<p style="display: none; background: #eee; padding: 0.5cm " id="v_7_">
			                                Em construção: videoaula
			                            </p>-->
			                            <p class="button primary" id="d_7" onclick="btn2(this.id)" >
			                                DICA
			                            </p>
			                            <p class="button primary" id="r_7" onclick="btn2(this.id)" >
			                                SOLUÇÃO
			                            </p>
			                            <!--<p class="button primary" id="v_7" onclick="btn2(this.id)" >
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