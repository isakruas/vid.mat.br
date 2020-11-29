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

									<h2>Relações binárias</h2>

									<hr class="major" />

		                            <!-- 1 -->
		                            <p  id="q_1_p">
		                                1. Verifique se as relações listadas abaixo são reflexivas, simétricas, transitivas e antissimétricas.
		                                <br />
		                                (a) $R$ sobre $\mathbb{N}$ definida por: $m\,R\,n\Leftrightarrow m>n$.
		                                <br />
		                                (b) $R$ sobre $\mathbb{Z}$ definida por: $m\,R\,n\Leftrightarrow m+n$ é ímpar.
		                                <br />
		                                (c) $R$ sobre $\mathbb{Z}$ definida por: $m\,R\,n\Leftrightarrow m-n$ é par.
		                                <br />
		                                (d) $R$ sobre $\mathbb{R}$ definida por: $a\,R\,b\Leftrightarrow 2a+b\geq0$.
		                            </p>
		                            <!-- Resposta -->
		                            	<p style="display: none; background: #eee; padding: 0.5cm " id="d_1_">
			                                Dica:
			                                <br />
			                                Relembre as definições: dizemos que uma relação $R$ sobre $A$ é:
			                                (a) Reflexiva: quando $x\,R\,x$ para todo $x\in A$.
			                                <br /> 
			                                (b) Simétrica: se $x\,R\,y$, então $y\,R\,x$ para todo $x,y\in A$.
			                                <br /> 
			                                (c) Transitiva: se $x\,R\,y$ e $y\,R\,z$, então $x\,R\,z$ para todo $x,y,z\in A$.
			                                <br />
			                                (d) Antissimétrica: se $x\,R\,y$ e $y\,R\,x$, então $x=y$ para todo $x,y\in A$.
			                            </p>
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_1_">
			                                Solução:
			                                <br />
			                                (a) É transitiva e antissimétrica.
			                                <br /> 
			                                (b) É simétrica
			                                <br /> 
			                                (c) É reflexiva, simétrica e transitiva.
			                                <br />
			                                (d) Não é reflexiva, simétrica, transitiva e antissimétrica.
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
		                                2. Considere a relação $R$ sobre $\mathbb{R}$ definida como: $x\,R\,y$ se, e somente se, $x-y\in\mathbb{Q}.$
		                                <br />
		                                (a) Prove que $R$ é uma relação de equivalência.
		                                <br />
		                                (b) Descreva a classe de equivalência do número real $\frac{1}{2}$.
		                                <br />
		                                (c) Descreva a classe $\overline{a}$ quando $a\in\mathbb{Q}$.
		                                <br />
		                                (d) Descreva $\overline{\sqrt{2}}$.
		                            </p>
		                            <!-- Resposta -->
		                            	<p style="display: none; background: #eee; padding: 0.5cm " id="d_2_">
			                                Dica:
			                                <br />
			                                (a) Uma relação de equivalência é uma relação reflexiva, simétrica e transitiva.
			                            </p>
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_2_">
			                                Solução:
			                                <br />
			                                (a) Reflexiva: $x-x=0\in\mathbb{Q}\Rightarrow x\,R\,x,\;\forall x\in\mathbb{Q}$.
			                                <br />
			                                Simétrica: $x\,R\,y\Rightarrow x-y\in\mathbb{Q}\Rightarrow y-x=-(x-y)\in\mathbb{Q}\Rightarrow y\,R\,x$.
			                                <br />
			                                Transitiva: $x\,R\,y$ e $y\,R\,z\Rightarrow x-y=\frac{a}{b}$ e $y-z=\frac{c}{d}$, onde $a,b,c,d\in\mathbb{Z}$ e $b,d\neq0$. Daí, $$x-z=x-y+y-z=\frac{a}{b}+\frac{c}{d}=\frac{ad+bc}{bd}\in\mathbb{Q}\Rightarrow x\,R\,z.$$
			                                <br />
			                                (b) Seja $x\in\mathbb{R}$ tal que $x\,R\,\frac{1}{2}$. Logo, $x-\frac{1}{2}=\frac{a}{b}\Rightarrow x=\frac{a}{b}+\frac{1}{2}=\frac{2a+b}{b}$. Ou seja, $x\in\mathbb{Q}$ e, portanto, $\overline{\frac{1}{2}}=\mathbb{Q}$.
			                                <br />
			                                (c) Pelo mesmo raciocínio do item anterior, $\overline{a}=\mathbb{Q}$ quando $a\in\mathbb{Q}$.
			                                <br />
			                                (d) $\overline{\sqrt{2}}=\{x\in\mathbb{R}\,|\,x\,R\,\sqrt{2}\}=\{x+\sqrt{2}\,|\,x\in\mathbb{Q}\}$.
			                                <br />
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
		                                3. Dados $m,n\in\mathbb{N}$, dizemos que $m$ pide $n$, escrevemos $m\mid n$, se existe $q\in\mathbb{N}$ tal que $n=mq$. Diante disso, considere a relação $S$ sobre $\mathbb{N}$ definida por: $m\,S\,n$ se, e somente se, $m\mid n$.
		                                <br />
		                                (a) Mostre que $S$ é uma relação de ordem sobre $\mathbb{N}$.
		                                <br />
		                                (b) $\mathbb{N}$ é totalmente ordenado por $S$?
		                            </p>
		                            <!-- Resposta -->
		                            	<p style="display: none; background: #eee; padding: 0.5cm " id="d_3_">
			                                Dica:
			                                <br />
			                                (a) Uma relação de ordem é uma relação reflexiva, antissimétrica e transitiva.
			                            </p>
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_3_">
			                                Resposta:
			                                <br />
			                                (a) Reflexiva: $m=m\cdot1\Rightarrow m\,R\,m,\;\forall m\in\mathbb{N}$.
			                                <br />
			                                Antissimétrica: $m\,R\,n$ e $n\,R\,m\Rightarrow n=mq$ e $m=nk$ com $q,k\in\mathbb{N}\Rightarrow n=n(kq)\Rightarrow kq=1\Rightarrow$ $k=q=1$. Portanto, $m=n$. 
			                                <br />
			                                Transitiva: $m\,R\,n$ e $n\,R\,p\Rightarrow n=mq$ e $p=nk$ com $q,k\in\mathbb{N}\Rightarrow p=m(qk)$, onde $qk\in\mathbb{N}\Rightarrow m\,R\,p$.
			                                <br />
			                                (b) Não, pois dados $2,3\in\mathbb{N}$, tem-se que $2\not\mathrel{R}3$ e $3\not\mathrel{R}2$.
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
			                                4. Considere o conjunto $A=\{1,2,3\}$. Verifique se as relações abaixo são reflexivas, simétricas, transitivas e antissimétricas.
			                                <br />
			                                (a) $R_1=\emptyset$
			                                <br />
			                                (b) $R_2=\{(1,2),(1,3),(2,1),(2,3),(3,1),(3,2),(3,3)\}$
			                                <br />
			                                (c) $R_3=\{(1,1),(1,3),(2,1),(2,2),(2,3),(3,1),(3,3)\}$
			                            </p>
			                            <!-- Resposta -->
			                            <!--<p style="display: none; background: #eee; padding: 0.5cm " id="d_4_">
			                                Em construção: dica
			                            </p>-->
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_4_">
			                                Solução:
			                                <br />
			                                (a) Não é reflexiva, pois uma relação é reflexiva quando $x\,R\,x$ para todo $x\in A$, ou seja, $(x,x)\in R$ para todo $x\in A$, mas, $R_1=\emptyset$ não possui elemento algum. É simétrica, transitiva e antissimétrica (por vacuidade, isto é, não é possível exibir um contra-exemplo que falhe estas definições).
			                                <br />
			                                (b) Não é reflexiva: $1\not\mathrel{R_2}1$. Não é transitiva: $1\,R_2\,2$, $2\,R_2\,1$, mas $1\not\mathrel{R_2}1$. Não é antissimétrica: $1\,R_2\,3$ e $3\,R_2\,1$, mas $1\neq3$. É simétrica.
			                                <br />
			                                (c) Não é simétrica: $2\,R_3\,1$, mas $1\not\mathrel{R_3}2$. Não é antissimétrica: $1\,R_3\,3$ e $3\,R_3\,1$, mas $1\neq3$. É reflexiva e transitiva.
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