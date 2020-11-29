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

									<h2>Máximo divisor comum e mínimo múltiplo comum</h2>

									<hr class="major" />

		                            <!-- 1 -->
		                            <p  id="q_1_p">
		                                1. Calcule o máximo divisor comum de:
		                                <br />
		                                (a) $28$ e $300$
		                                <br />
		                                (b) $-54$ e $210$
		                                <br />
		                                (c) $-63$ e $-36$
		                                <br />
		                                (d) $540$, $810$ e $1080$
		                            </p>
		                            <!-- Resposta -->
		                            	<!--<p style="display: none; background: #eee; padding: 0.5cm " id="d_1_">
			                                Dica:
			                                <br />
			                            </p>-->
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_1_">
			                                Solução:
			                                <br />
			                                (a) $4$
			                                <br />
			                                (b) $6$
			                                <br />
			                                (c) $9$
			                                <br />
			                                (d) $270$
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
		                                2. Prove que se $c>0$ e $a$ e $b$ são divisíveis por $c$, então $$\textrm{mdc}\left(\frac{a}{c},\frac{b}{c}\right)=\frac{1}{c}\,\textrm{mdc}(a,b).$$
		                            </p>
		                            <!-- Resposta -->
		                            	<p style="display: none; background: #eee; padding: 0.5cm " id="d_2_">
			                                Dica:
			                                <br />
			                                Use o resultado: Se $a,b\in\mathbb{Z}$, então para todo inteiro $t$ tem-se que $\textrm{mdc}(ta,tb)=t\cdot\textrm{mdc}(a,b)$.
			                            </p>
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_2_">
			                                Solução:
			                                <br />
			                                Se $a$ e $b$ são divisíveis por $c$, então $\frac{a}{c}$ e $\frac{b}{c}$ são inteiros. Logo, $$\textrm{mdc}\left(c\cdot\frac{a}{c},c\cdot\frac{b}{c}\right)=c\cdot\textrm{mdc}\left(\frac{a}{c},\frac{b}{c}\right)\Rightarrow\textrm{mdc}(a,b)=c\cdot\textrm{mdc}\left(\frac{a}{c},\frac{b}{c}\right)\Rightarrow \textrm{mdc}\left(\frac{a}{c},\frac{b}{c}\right)=\frac{1}{c}\,\textrm{mdc}(a,b).$$
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
		                                3. Mostre que se $a$ e $b$ são números inteiros e $\textrm{mdc}(a,b)=d$, então $\textrm{mdc}\left(\frac{a}{d},\frac{b}{d}\right)=1$. 
		                            </p>
		                            <!-- Resposta -->
		                            	<p style="display: none; background: #eee; padding: 0.5cm " id="d_3_">
			                                Dica:
			                                <br />
			                                Use a questão anterior.
			                            </p>
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_3_">
			                                Resposta:
			                                <br />
			                                Como $d$ é um divisos comum de $a$ e $b$, tem-se que $\frac{a}{d}$ e $\frac{b}{d}$ são inteiros. Logo, pela questão anterior, $$\textrm{mdc}\left(\frac{a}{d},\frac{b}{d}\right)=\frac{1}{d}\,\textrm{mdc}(a,b)=\frac{1}{d}\cdot d=1.$$
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
			                                4. Sendo $n\in\mathbb{Z}$, calcule:
			                                <br />
			                                (a) $\textrm{mdc}(n,n+1)$
			                                <br />
			                                (b) $\textrm{mdc}(n,n+2)$
			                            </p>
			                            <!-- Resposta -->
			                            <!--<p style="display: none; background: #eee; padding: 0.5cm " id="d_4_">
			                                Em construção: dica
			                            </p>-->
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_4_">
			                                Solução:
			                                <br />
			                                (a) Se $d$ é um divisor comum de $n$ e $n+1$, então $d\mid [(-1)a+(n+1)]\Rightarrow d\mid 1\Rightarrow d=\pm 1$. Portanto, $\textrm{mdc}(n,n+1)=1$.
			                                <br />
			                                (b) Se $n$ é par, então $n=2k\Rightarrow n+2=2(k+1)$. Pelo item (a) acima, $\textrm{mdc}(k,k+1)=1\Rightarrow \textrm{mdc}(2k,2(k+1))=2\Rightarrow \textrm{mdc}(n,n+2)=2$. Por outro lado, se $n$ é ímpar, então $n=2k+1\Rightarrow n+2=2k+3$. Considere agora $d$ um divisor comum de $n$ e $n+2$. Logo, $d$ é um número ímpar (pois $n$ é ímpar) e $d\mid [(2k+3)+(-1)(2k+1)]\Rightarrow d\mid 2\Rightarrow d=\pm1$. Portanto, $\textrm{mdc}(n,n+2)=1$.
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
			                            <p id="q_5_p">
			                                5. Calcule o mínimo múltiplo comum de:
			                                <br />
			                                (a) $120$ e $160$
			                                <br />
			                                (b) $8$, $12$ e $28$
			                                <br />
			                                (c) $6$, $15$ e $18$
			                            </p>
			                            <!-- Resposta -->
			                            <!--<p style="display: none; background: #eee; padding: 0.5cm " id="d_5_">
			                                Dica:
			                                <br />
			                                Em construção.
			                            </p>-->
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_5_">
			                                Solução:
			                                <br />
			                                (a) $40$
			                                <br />
			                                (b) $168$
			                                <br />
			                                (c) $90$
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
			                                6. Considere $m$ e $n$ dois inteiros positivos tais que $\textrm{mmc}(m,n)+\textrm{mdc}(m,n)=m+n$. Prove que um deles é divisível pelo outro.
			                            </p>
			                            <!-- Resposta -->
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="d_6_">
			                                Dica:
			                                <br />
			                                Use que $\textrm{mmc}(m,n)\cdot\textrm{mdc}(m,n)=|mn|$.
			                            </p>
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_6_">
			                                Solução:
			                                <br />
			                                Denote $\textrm{mdc}(m,n)=d$. Sabemos que $\textrm{mmc}(m,n)\cdot d=|mn|$, logo $$\textrm{mmc}(m,n)=\frac{dadb}{d}=dab.$$ Por outro lado, $m=da$ e $n=db$, onde $a,b\in\mathbb{Z}$. Assim, $$\textrm{mmc}(m,n)+d=m+n\Rightarrow \textrm{mmc}(m,n)+d-da-db=0\Rightarrow dab+d-da-db=0\Rightarrow (a-1)(b-1)=0.$$ Daí, $a=1$ e $m\mid n$ ou $b=1$ e $n\mid n$.
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