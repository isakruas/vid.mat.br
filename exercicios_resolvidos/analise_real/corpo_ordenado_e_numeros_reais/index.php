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

									<h2>Corpo ordenado e números reais</h2>

									<hr class="major" />

		                            <!-- 1 -->
		                            <p  id="q_1_p">
		                                1. Considere $K$ um corpo ordenado e $P$ o conjunto dos números positivos de $K$. Mostre que:
		                                <br />
		                                (a) se $x\in P$, então $x^{-1}\in P$;
		                                <br />
		                                (b) se $x< y$ e $x'< y'$, então $x+x'< y+y'$;
		                                <br />
		                                (c) se $0< x< y$ e $0< x'< y'$, então $xx'< yy'$;
		                                <br />
		                                (d) se $0< x< y$, então $y^{-1}< x^{-1}$.
		                            </p>
		                            <!-- Resposta -->
		                            <!--<p style="display: none; background: #eee; padding: 0.5cm " id="d_1_">
			                                Em construção: dica
			                            </p>-->
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_1_">
			                                Solução:
			                                <br />
			                                (a) Suponha por absurdo que $x^{-1}\notin P$. Assim, $x^{-1}=0$ ou $-x^{-1}\in P$, mas se $x^{-1}=0$ teríamos que $x\cdot x^{-1}=1\Rightarrow 0=1$, contradição. Logo, $-x^{-1}\in P$ e, por hipótese, $x\in P\Rightarrow x\cdot(-x^{-1})=-1\in P$, contradição.
			                                <br />
			                                (b) $x< y\Rightarrow y-x\in P$ e $x'< y'\Rightarrow y'-x'\in P$. Assim, $(y-x)+(y'-x')\in P\Rightarrow (y+y')-(x+x')\in P\Rightarrow x+x'< y+y'$.
			                                <br />
			                                (c) Observe que $yy'-xx'=yy'-yx'+yx'-xx'=y(y'-x')+(y-x)x'$. Como $y$, $y'-x'$, $y-x$ e $x'$ são elementos de $P$, tem-se $xx'< yy'$.
			                                <br />
			                                (d) Por hipótese, $x$, $y$ e $y-x$ são elementos de $P$. Pelo item (a), $x^{-1},y^{-1}\in P$. Daí, $(y-x)(x^{-1}y^{-1})=x^{-1}-y^{-1}\in P\Rightarrow y^{-1}< x^{-1}$.
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
		                                2. Prove que um corpo ordenado $K$ é arquimediano se, e somente se, para todo $\varepsilon>0$, existe $n\in\mathbb{N}$ tal que $\frac{1}{2^n}<\varepsilon$.
		                            </p>
		                            <!-- Resposta -->
		                            	<p style="display: none; background: #eee; padding: 0.5cm " id="d_2_">
			                                Dica:
			                                <br />
			                                Use a desigualdade de Bernoulli: $(1+x)^n\geq1+nx$, $\forall n\in\mathbb{N}$ e $x>-1$.
			                            </p>
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_2_">
			                                Solução:
			                                <br />
			                                ($\Rightarrow)$ Seja $\varepsilon>0$. Como $K$ é arquimediano, existe $n_0\in\mathbb{N}$ tal que $n_0>\frac{1}{\varepsilon}-1$. Daí, $1+n_0>\frac{1}{\varepsilon}$ e, pela desigualdade de Bernoulli, $$2^{n_0}=(1+1)^{n_0}\geq1+n_0>\frac{1}{\varepsilon}\Rightarrow\frac{1}{2^{n_0}}<\varepsilon.$$
			                                ($\Leftarrow$) Vamos mostrar que $\mathbb{N}$ não é limitado superiormente sobre $K$. Para isto, tome $x>0$ em $K$, logo existe $n\in\mathbb{N}$ tal que $\frac{1}{2^n}<\frac{1}{x}\Rightarrow x<2^n$.
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
		                                3. Sejam $A,B\subset\mathbb{R}$ e $c>0$. Considere os conjuntos $$A+B=\{a+b\,|\,a\in A,\;b\in B\}\textrm{   e   }cA=\{ca\,|\,a\in A\}.$$ Se $A$ e $B$ são limitados superiormente, mostre que $A+B$ e $cA$ também são limitados superiormente e que $\sup(A+B)=\sup A+\sup B$ e $\sup(cA)=c\sup A.$
		                            </p>
		                            <!-- Resposta -->
		                            	<!--<p style="display: none; background: #eee; padding: 0.5cm " id="d_3_">
			                                Em construção: dica
			                            </p>-->
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_3_">
			                                Solução:
			                                <br />
			                                $\sup (A+B)=\sup A+\sup B$:
			                                <br />
			                                (i) $A+B$ é limitado superiormente: se $a=\sup A$ e $b=\sup B$, então $x\leq a$ para todo $x\in A$ e $y\leq b$ para todo $y\in B\Rightarrow x+y\leq a+b$, $\forall x\in A$ e $\forall y\in B$, ou seja, $a+b$ é uma cota superior para $A+B$.
			                                <br />
			                                (ii) $a+b$ é uma menor das cotas superiores de $A+B$: Tome $c< a+b$. Sabemos que para todo $\varepsilon>0$, $a-\varepsilon$ não é uma cota superior de $A$. Assim, tomando $\varepsilon=\frac{a+b-c}{2}>0$ existe $x\in A$ tal que $a-\varepsilon< x$. De modo análogo, existe $y\in B$ tal que $b-\varepsilon< y$. Portanto, $x+y>a+b-2\varepsilon=c$ e isto significa que $c$ não pode ser cota superior de $A+B$.
			                                <br /><br />
			                                $\sup (cA)=c\sup A$:
			                                <br />
			                                (i) $cA$ é limitado superiormente por $ca$, onde $a=\sup A$.
			                                <br />
			                                (ii) $ca$ é uma menor das cotas superiores de $cA$: Tome $b< ac\Rightarrow \frac{b}{c}< a\Rightarrow$ existe $x\in A$ tal que $\frac{b}{c}< x\Rightarrow b< cx$.
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
		                            <p  id="q_4_p">
		                                4. Determine o ínfimo e o supremo do conjunto $A=\left\{\frac{n+1}{n}\,|\,n\in\mathbb{N}\right\}\subset\mathbb{R}$. 
		                            </p>
		                            <!-- Resposta -->
		                            <!--<p style="display: none; background: #eee; padding: 0.5cm " id="d_4_">
			                                Em construção: dica
			                            </p>-->
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_4_">
			                                Solução:
			                                <br />
			                                Inicialmente, observe que $A$ é limitado. Como $2\in A$ e $\frac{n+1}{n}\leq2$ para todo $n\in\mathbb{N}$, tem-se $\sup A=2$. Por outro lado, vamos mostrar que $\inf A=1$. Obviamente, $1\leq\frac{n+1}{n}$ para todo $n\in\mathbb{N}$. Agora, considere $c>1$. Como $\mathbb{R}$ é um corpo arquimediano, existe $n_0\in\mathbb{N}$ tal que $n_0>\frac{1}{c-1}$. Daí, $\frac{n_0+1}{n_0}< c$.
			                            </p>
			                            <!--<p style="display: none; background: #eee; padding: 0.5cm " id="v_4_">
			                                Em construção: videoaula
			                            </p>-->
			                            <!--<p class="button primary" id="d_4" onclick="btn2(this.id)" >
			                                DICA
			                            </p>-->
			                            <p class="button primary" id="r_4" onclick="btn2(this.id)" >
			                                SOLUÇÃO
			                            </p>
			                            <!--<p class="button primary" id="v_4" onclick="btn2(this.id)" >
			                                VIDEOAULA
			                            </p>-->

		                            <!-- 5 -->
		                            <p  id="q_5_p">
		                                5. Seja $A$ um subconjunto limitado de $\mathbb{R}$ e denotemos com $-A=\{-x\,|\,x\in A\}$. Mostre que $\sup (-A)=-\inf A$.
		                            </p>
		                            <!-- Resposta -->
		                            	<!--<p style="display: none; background: #eee; padding: 0.5cm " id="d_5_">
			                                Em construção: dica
			                            </p>-->
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_5_">
			                                Solução:
			                                <br />
			                                Se $A$ é um subconjunto limitado de $\mathbb{R}$, então $A$ possui supremo e ínfimo. Por outro lado, se $a\leq x$ para todo $x\in A$, então $-a\geq -x$ para todo $x\in A$, ou seja, $-A$ é limitado superiormente por $-a$ e, portanto, existe $\sup (-A)$. Sendo assim, vamos provar que $\inf A=-\sup (-A)$.
			                                <br />
			                                (i) $\sup (-A)\geq -x$ para todo $x\in A\Rightarrow -\sup (-A)\leq x$ para todo $x\in A$. Assim, $-\sup (-A)$ é uma cota inferior para $A$.
			                                <br />
			                                (ii) Se $c$ é um número real tal que $-\sup (-A)< c$, então $-c<\sup (-A)$. Daí, existe $\alpha\in -A$ tal que $\alpha>-c\Rightarrow -a>-c$ para algum $a\in A$. Portanto, $a< c$ para algum $a\in A$, ou seja, $c$ não pode ser uma cota inferior de $A$.
			                                <br />
			                                De (i) e (ii) podemos concluir que $\inf A=-\sup (-A)\Rightarrow \sup (-A)=-\inf A$.
			                            </p>
			                            <!--<p style="display: none; background: #eee; padding: 0.5cm " id="v_5_">
			                                Em construção: videoaula
			                            </p>-->
			                            <!--<p class="button primary" id="d_5" onclick="btn2(this.id)" >
			                                DICA
			                            </p>-->
			                            <p class="button primary" id="r_5" onclick="btn2(this.id)" >
			                                SOLUÇÃO
			                            </p>
			                            <!--<p class="button primary" id="v_5" onclick="btn2(this.id)" >
			                                VIDEOAULA
			                            </p>-->

		                            <!-- 6 -->
		                            <p  id="q_6_p">
		                                6. Seja $a>1$ um elemento num corpo arquimediano $K$. Considere a função $f:\mathbb{Z}\to K$ definida por $f(n)=a^n$. Prove que:
		                                <br />
		                                (a) $f(\mathbb{Z})$ não é limitado superiormente, mas é limitado inferiormente.
		                                <br />
		                                (b) $\inf f(\mathbb{Z})=0$.
		                            </p>
		                            <!-- Resposta -->
		                            	<p style="display: none; background: #eee; padding: 0.5cm " id="d_6_">
			                                Dica:
			                                <br />
			                                (a) Use a desigualdade de Bernoulli e o fato de que $\mathbb{N}$ é ilimitado superiormente sobre $K$ (isto significa que $K$ é um corpo arquimediano).
			                                <br />
			                                (b) Prove que $0$ é a maior das contas inferiores usando a contrapositiva.
			                            </p>
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_6_">
			                                Solução:
			                                <br />
			                                (a) Por hipótese, $a>1\Rightarrow$ existe $p>0$ em $K$ tal que $a=1+p$. Como $K$ é um corpo arquimediano, $\mathbb{N}$ é ilimitado superiormente sobre $K$, ou seja, para todo $\alpha>0$ em $K$, existe $n\in\mathbb{N}$ tal que $n>\alpha$. Tomando $\alpha=\frac{x}{p}$, onde $x>0$ é um elemento qualquer em $K$, obtemos que $pn>x$. Consequentemente, pela desigualdade de Bernoulli, $$a^n=(p+1)^n\geq 1+pn>1+x>x.$$ Isto significa que para todo $x>0$ em $K$ sempre existe $n\in\mathbb{N}$ tal que $a^n>x$, ou seja, $f(\mathbb{Z})$ não é limitado superiormente. Por outro lado, $0< a^n$ para todo $n\in\mathbb{Z}$, logo $f(\mathbb{Z})$ é limitado inferiormente por $0$.
			                                <br />
			                                (b) Já sabemos pelo item (a) que $0$ é uma conta inferior de $f(\mathbb{Z})$.  Agora, vamos mostrar que $0$ é a maior das contas inferiores, ou seja, se $c\in K$ é tal que $c\leq a^n$ para todo $n\in\mathbb{Z}$, então $c\leq 0$. Usando a contrapositiva: considere $c>0$ e como $f(\mathbb{Z})$ não é limitado superiormente, existe $n\in\mathbb{Z}$ tal que $a^n>\frac{1}{c}\Rightarrow c>\frac{1}{a^n}=a^{-n}$. Portanto, $\inf f(\mathbb{Z})=0$.
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