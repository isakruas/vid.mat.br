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

									<h2>Sequências numéricas</h2>

									<hr class="major" />

		                            <!-- 1 -->
		                            <p  id="q_1_p">
		                                1. Para a sequência $\left(\frac{n-1}{n+2}\right)$, encontre um $n_0\in\mathbb{N}$ tal que $n>n_0\Rightarrow|x_n-1|<0,001$.
		                            </p>
		                            <!-- Resposta -->
		                            <p style="display: none; background: #eee; padding: 0.5cm " id="d_1_">
			                                Dica:
			                                <br />
			                                Observe que o enunciado indica que a sequência $\left(\frac{n-1}{n+2}\right)$ converge para 1. Prove este resultado para facilitar a escolha do número natural $n_0$.
			                            </p>
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_1_">
			                                Solução:
			                                <br />
			                                Vamos provar que a sequência $\left(\frac{n-1}{n+2}\right)$ converge para 1.
			                                <br />
			                                Rascunho: $\left| \frac{n-1}{n+2}-1\right|=\left| \frac{-3}{n+2}-1\right|=\frac{3}{n+2}<\varepsilon\Rightarrow 3<\varepsilon(n+2)\Rightarrow n>\frac{3}{\varepsilon}-2$
			                                <br />
			                                Sendo assim, dado $\varepsilon=0,001$ basta tomar um número natural $n_0>\frac{3}{\varepsilon}-2=2998$. Daí, tomando $n_0=3000$ temos que se $n>3000$, então $$\left| \frac{n-1}{n+2}-1\right|=\frac{3}{n+2}<\frac{3}{3002}<0,001.$$
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
		                                2. Prove que:
		                                <br />
		                                (a) $\displaystyle\lim \frac{n}{n+1}=1$
		                                <br />
		                                (b) $\displaystyle\lim \frac{3n^2+4n}{n^2+n-4}=3$
		                                <br />
		                                (c) $\displaystyle\lim \frac{5n}{n+\mathrm{sen}\,(2n)}=5$
		                            </p>
		                            <!-- Resposta -->
		                            	<p style="display: none; background: #eee; padding: 0.5cm " id="d_2_">
			                                Dica:
			                                <br />
			                                (b) Use que se $n>12$, então $n^2+n-4>0$, $n+12\leq 2n$ e $4<\frac{n^2}{2}$.
			                                <br />
			                                (c) Use que $|\mathrm{sen}\,x|\leq1$ para todo $x\in\mathbb{R}$ e $|x|-|y|\leq |x-y|$.
			                            </p>
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_2_">
			                                Solução:
			                                <br />
			                                (a) Rascunho: $\left| \frac{n}{n+1}-1\right|=\left| \frac{1}{n+1}\right|=\frac{1}{n+1}<\varepsilon\Rightarrow n>\frac{1}{\varepsilon}-1$
			                                <br />
			                                Resposta: Dado $\varepsilon>0$, basta tomar um número natural $n_0>\frac{1}{\varepsilon}-1$. De fato, se $n>n_0>\frac{1}{\varepsilon}-1$ temos que $\frac{1}{n+1}<\varepsilon$ e, além disso, $$\left| \frac{n}{n+1}-1\right|=\frac{1}{n+1}<\varepsilon.$$
			                                <br />
			                                (b) Rascunho: $\left| \frac{3n^2+4n}{n^2+n-4}-3\right|=\left| \frac{n+12}{n^2+n-4}\right|=\frac{n+12}{|n^2+n-4|}$. Observe que se $n>12$, então $n^2+n-4>0$, $n+12\leq 2n$ e $4<\frac{n^2}{2}$. Utilizando esta escolha para $n$, $\left| \frac{3n^2+4n}{n^2+n-4}-3\right|=\frac{n+12}{|n^2+n-4|}<\frac{n+12}{n^2+n-4}<\frac{n+12}{n^2-4}<\frac{2n}{n^2-4}<\frac{2n}{n^2-\frac{n^2}{2}}=\frac{4}{n}<\varepsilon.$
			                                <br />
			                                Resposta: Dado $\varepsilon>0$, basta tomar um número natural $n_0>\max\left\{\frac{4}{\varepsilon},12\right\}$. De fato, se $n>n_0>\max\left\{\frac{4}{\varepsilon},12\right\}$ temos que $n>\frac{4}{\varepsilon}$ e $n>12$. Assim, $\frac{4}{n}<\varepsilon$, $n^2+n-4>0$, $n+12\leq 2n$ e $4<\frac{n^2}{2}$. Logo, $$\left| \frac{3n^2+4n}{n^2+n-4}-3\right|=\frac{n+12}{|n^2+n-4|}<\frac{4}{n}<\varepsilon.$$
			                                <br />
			                                (c) Inicialmente, observe que $|\mathrm{sen}\,(2n)|\leq 1$ para todo $n\in\mathbb{N}$ e que $$|n+\mathrm{sen}\,(2n)|=|n-(-\mathrm{sen}\,(2n))|\geq |n|-|-\mathrm{sen}\,(2n)|=n-|\mathrm{sen}\,(2n)|\Rightarrow \frac{1}{|n+\mathrm{sen}\,(2n)|}\leq\frac{1}{n-|\mathrm{sen}\,(2n)|}.$$
			                                <br />
			                                Rascunho: $\left| \frac{5n}{n+\mathrm{sen}\,(2n)}-5\right|=\frac{5|\mathrm{sen}\,(2n)|}{|n+\mathrm{sen}\,(2n)|}\leq \frac{5}{|n+\mathrm{sen}\,(2n)|}\leq \frac{5}{n-|\mathrm{sen}\,(2n)|}\leq \frac{5}{n-1}<\varepsilon\Rightarrow n>\frac{5}{\varepsilon}+1$
			                                <br />
			                                Resposta: Dado $\varepsilon>0$, basta tomar um número natural $n_0>\frac{5}{\varepsilon}+1$. De fato, se $n>n_0>\frac{5}{\varepsilon}+1$ temos que $\frac{5}{n-1}<\varepsilon$, logo $$\left| \frac{5n}{n+\mathrm{sen}\,(2n)}-5\right|\leq \frac{5}{n-1}<\varepsilon.$$                            
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
		                                3. Considere a sequência $\sqrt{2},\,\sqrt{2+\sqrt{2}},\,\sqrt{2+\sqrt{2+\sqrt{2}}},\,\ldots$.
		                                <br />
		                                (a) Mostre que esta sequência é limitada e monótona (portanto convergente). \emph{Sugestão:} Prove por indução que $x_n<2$, $\forall\,n\in\mathbb{N}$.
		                                <br />
		                                (b) Calcule seu limite. 
		                            </p>
		                            <!-- Resposta -->
		                            	<p style="display: none; background: #eee; padding: 0.5cm " id="d_3_">
			                                Dica: 
			                            	<br />
			                            	(a) Inicialmente, observe que $x_{n+1}=\sqrt{2+x_n}$ para todo $n\in\mathbb{N}$. Sendo assim, prove que $x _n<2$ para todo $n\in\mathbb{N}$ utilizando indução e conclua que $0< x _n<2$ para todo $n\in\mathbb{N}$. Use indução novamente para provar que a sequência é monótona crescente.
			                            	<br />
			                            	(b) Escreva $lim\,x_n=L$ e desenvolva o limite $lim\,x_{n+1}=L$.
			                            </p>
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_3_">
			                            	Solução: 
			                            	<br />
			                            	Observe que $x_{n+1}=\sqrt{2+x_n}$ para todo $n\in\mathbb{N}$.
			                            	<br />
			                            	(a) Limitada: vamos provar por indução que $x_n<2$ para todo $n$.
			                            	<br />
			                            	Para $n=1$, $x_1=\sqrt{2}<2$. Suponha que $x_n<2$ e, para $n+1$ temos que $x_{n+1}=\sqrt{2+x_n}<\sqrt{2+2}=2$. Daí, a afirmação é válida e, além disso, a sequência é limitada, pois $0< x _n<2$ para todo $n\in\mathbb{N}$.
			                            	<br />
			                            	Monótona (crescente): vamos provar por indução que $x_n < x_{n+1}$ para todo $n\in\mathbb{N}$.
			                            	<br />
			                            	Para $n=1$, $x_1=\sqrt{2}<\sqrt{2+\sqrt{2}}=x_2$. Suponha que $x_n < x_{n+1}\Rightarrow x_n+2 < x_{n+1}+2\Rightarrow \sqrt{x_n+2} < \sqrt{x_{n+1}+2}\Rightarrow x_{n+1}< x_{n+2}$ e o resultado é válido para $n+1$. Pelo primeiro princípio de indução a afirmação é válida.
			                            	<br /><br />
			                            	(b) Pelo item (a), existe $lim\,x_n=L$. Assim, $lim\,x_{n+1}=L$ e $$L=\lim\,\sqrt{2+x_n}=\sqrt{2+L}\Rightarrow L=\sqrt{2+L}\Rightarrow L^2-L-2=0,$$ daí $L=2$ ou $L=-1$ (não é possível, pois $0< x _n<2$ para todo $n\in\mathbb{N}$). Portanto, $lim\,x_n=2$.
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
		                            <p  id="q_4_p">
		                                4. Mostre que a sequência $\left(\frac{n^2-1}{n}\right)$ é divergente.
		                            </p>
		                            <!-- Resposta -->
		                            <!--<p style="display: none; background: #eee; padding: 0.5cm " id="d_4_">
			                                Em construção: dica
			                            </p>-->
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_4_">
			                                Solução:
			                                
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
		                                5. Considere o número real $a\neq0$. Se $\lim\,\frac{y_n}{a}=1$, prove que $\lim\,y_n=a$.
		                            </p>
		                            <!-- Resposta -->
		                            	<!--<p style="display: none; background: #eee; padding: 0.5cm " id="d_5_">
			                                Em construção: dica
			                            </p>-->
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_5_">
			                                Solução:
			                                <br />
			                                Por hipótese, dado $\varepsilon_1>0$, existe um número natural $n_0$ tal que se $n>n_0$, então $\left| \frac{y_n}{a}-1\right|<\varepsilon$. Mas, $$\left| \frac{y_n}{a}-1\right|=\left| \frac{y_n-a}{a}\right|=\frac{|y_n-a|}{|a|}<\varepsilon_1\Rightarrow |y_n-a|<\varepsilon_1\cdot|a|.$$ Agora, para provar que $y_n\to a$, considere $\varepsilon>0$. Assim, podemos escrever $\varepsilon=\varepsilon_1\cdot |a|$ para algum $\varepsilon_1>0$. Por hipótese, existe $n_0$ tal que se $n>n_0$, então $$\left| \frac{y_n}{a}-1\right|<\varepsilon_1\Rightarrow |y_n-a|<\varepsilon_1\cdot|a|=\varepsilon.$$
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
		                                6. Dizemos que uma sequência $(x_n)$ é de Cauchy se para todo $\varepsilon>0$ dado podemos encontrar $n_0\in\mathbb{N}$ tal que $$m>n_0,\,n>n_0\Rightarrow|x_m-x_n|<\varepsilon.$$ Prove que:
		                                <br />
		                                (a) A sequência $\left(\frac{1}{n}\right)$ é de Cauchy.
		                                <br />
		                                (b) A sequência $(1+(-1)^n)$ não é de Cauchy.
		                                <br />
		                                (c) Toda sequência de Cauchy é limitada.
		                                <br />
		                                (d) Uma sequência é convergente se, e somente se, é de Cauchy.
		                            </p>
		                            <!-- Resposta -->
		                            	<!--<p style="display: none; background: #eee; padding: 0.5cm " id="d_6_">
			                                Em construção: dica
			                            </p>-->
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_6_">
			                                Solução:
			                                <br />
			                                Em construção.
			                            </p>
			                            <!--<p style="display: none; background: #eee; padding: 0.5cm " id="v_6_">
			                                Em construção: videoaula
			                            </p>-->
			                            <!--<p class="button primary" id="d_6" onclick="btn2(this.id)" >
			                                DICA
			                            </p>-->
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