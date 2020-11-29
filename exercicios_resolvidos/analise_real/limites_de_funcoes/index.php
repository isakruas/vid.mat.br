
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

									<h2>Limites de funções</h2>

									<hr class="major" />

		                            <!-- 1 -->
		                            <p  id="q_1_p">
		                                1. Prove que $\displaystyle \lim_{x\to2}\frac{1}{1-x}=-1$.
		                            </p>
		                            <!-- Resposta -->
		                            <p style="display: none; background: #eee; padding: 0.5cm " id="d_1_">
			                                Dica:
			                                <br />
			                                Dado $\varepsilon>0$, tome $\delta=\min\left\{\frac{1}{2},\frac{\varepsilon}{2}\right\}$ para que a definição de limite seja satisfeita.
			                            </p>
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_1_">
			                                Solução:
			                                <br />
			                                Dado $\varepsilon>0$, basta tomar $\delta=\min\left\{\frac{1}{2},\frac{\varepsilon}{2}\right\}$ para que se $x\in D$ e $0<|x-2|<\delta$, então $|f(x)+1|<\varepsilon$. De fato, como $0<|x-2|<\delta$, temos que: 
			                                <br />
			                                (i) $|x-2|<\frac{1}{2}\Rightarrow 2=|2|=|2-x+x|\leq |2-x|+|x|=|x-2|+|x|<\frac{1}{2}+|x|\Rightarrow |x|>\frac{3}{2}$. Daí, $|x-1|\geq |x|-|1|=|x|-1>\frac{3}{2}-1=\frac{1}{2}\Rightarrow |x-1|>\frac{1}{2}$.
			                                <br />
			                                (ii) $|x-2|<\frac{\varepsilon}{2}$
			                                <br />
			                                Logo,
			                                <br />
			                                \begin{eqnarray*}
												\left|\frac{1}{1-x}-(-1)\right| &=& \left|\frac{2-x}{1-x}\right|\;=\;\frac{|2-x|}{|1-x|} \;=\;  \frac{|x-2|}{|x-1|}\\
												 &<& \frac{|x-2|}{\frac{1}{2}}\;=\;2|x-2|\\
												 &<& 2\delta\;<\;2\frac{\varepsilon}{2}\;=\;\varepsilon
											\end{eqnarray*}
			                            </p>
			                            <!--<p style="display: none; background: #eee; padding: 0.5cm " id="v_1_">
			                                Em construção: videoaula
			                            </p>-->
			                        
			                            <!--<p class="button primary" id="v_1" onclick="btn2(this.id)" >
			                                VIDEOAULA
			                            </p>-->
			                            <p class="button primary" id="d_1" onclick="btn2(this.id)" >	
			                                DICA	
			                            </p>	
			                            <p class="button primary" id="r_1" onclick="btn2(this.id)" >	
			                                SOLUÇÃO	
			                            </p>

		                            <!-- 2 -->
		                            <p  id="q_2_p">
		                                2. Prove que o limite $\displaystyle \lim_{x\to0}\frac{1}{x^2}$ com $x>0$ não existe.
		                            </p>
		                            <!-- Resposta -->
		                            	<p style="display: none; background: #eee; padding: 0.5cm " id="d_2_">
			                                Dica:
			                                <br />
			                                Use o teorema: Sejam $X\subset\mathbb{R}$, $a\in X'$ e $f:X\to\mathbb{R}$. Tem-se $\displaystyle\lim_{x\to a}\,f(x)=L$ se, e somente se, para toda sequência $(x_n)$ em $X-\{a\}$ tal que $\lim\,x_n=a$ tem-se $\lim\,f(x_n)=L$.  
			                            </p>
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_2_">
			                                Solução:
			                                <br />
			                                Considere a sequência $(x_n)=\left(\frac{1}{n}\right)$. Sabemos que $\lim\,x_n=0$ e $\lim\,f(x_n)=\lim\,\frac{1}{x_n^2}=\lim\,n^2=\infty$. Portanto, o limite não existe.
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
		                                3. Sejam $I\subset\mathbb{R}$ um intervalo, $f:I\to\mathbb{R}$ uma  função e $c\in I$. Mostre que se existem duas constantes $K$ e $L$ tais que $|f(x)-L|\leq K\,|x-c|$ para $x\in I$, então $\displaystyle \lim_{x\to c}\,f(x)=L$. 
		                            </p>
		                            <!-- Resposta -->
		                            	<p style="display: none; background: #eee; padding: 0.5cm " id="d_3_">
			                                Dica: 
			                            	<br />
			                            	Note que como $|f(x)-L|\leq K\,|x-c|$, temos que $K\geq0$. Se $K=0$, então o resultado é válido. Caso contrário, dado $\varepsilon>0$, basta tomar $\delta=\frac{\varepsilon}{K}$ para que a definição de limite seja satisfeita.
			                            </p>
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_3_">
			                            	Solução: 
			                            	<br />
			                            	Note que como $0\leq|f(x)-L|\leq K\,|x-c|$, temos que $K\geq0$.
			                            	<br />
			                            	(i) Se $K=0$: Dado $\varepsilon>0$, para todo $\delta>0$ tem-se $|f(x)-L|\leq 0<\varepsilon$.
			                            	<br />
			                            	(ii) Se $K>0$: Dado $\varepsilon>0$, basta tomar $\delta=\frac{\varepsilon}{K}$ para que a definição de limite seja satisfeita. De fato, se $x\in I$ e $0<|x-c|<\delta=\frac{\varepsilon}{K}$ temos: $$|f(x)-L|\leq K\,|x-c|< K\cdot \frac{\varepsilon}{K}=\varepsilon.$$
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
		                                4. Seja $f:\mathbb{R}\to\mathbb{R}$ uma função tal que $f(x+y)=f(x)+f(y)$ para todo $x,y\in\mathbb{R}$. 
		                                <br />
		                                (a) Assumindo que o limite $\displaystyle \lim_{x\to0}\,f(x)$ exista, prove que $\displaystyle \lim_{x\to0}\,f(x)=0$.
		                                <br />
		                                (b) Use o item (a) para provar que o limite $\displaystyle \lim_{x\to a}\,f(x)$ existe para todo $a\in\mathbb{R}$.
		                            </p>
		                            <!-- Resposta -->
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="d_4_">
			                                Dica:
			                                <br />
			                                (a) Mostre que $f(2x)=2f(x)$ para todo $x\in\mathbb{R}$.
			                                <br />
			                                (b) Mostre que $f(x)=f(x-c)+f(c)$ para todo $x\in\mathbb{R}$.
			                            </p>
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_4_">
			                                Solução:
			                                <br />
			                                (a) Observe que $f(2x)=f(x+x)=f(x)+f(x)=2f(x)$. Assumindo que $\displaystyle \lim_{x\to 0}\,f(x)=L$, temos que $\displaystyle \lim_{x\to 0}\,f(2x)=\lim_{y\to 0}\,f(y)=L$ e $\displaystyle L=\lim_{x\to 0}\,f(2x)=\lim_{x\to 0}\,2f(x)=2L\Rightarrow L=2L\Rightarrow L=0$.
			                                <br /><br />
			                                (b) Por hipótese, temos que: 
			                                <br />
			                                (i) $f(0)=0$: $f(0)=f(0+0)=f(0)+f(0)\Rightarrow f(0)=0$.
			                                <br />
			                                (ii) $0=f(0)=f(a+(-a))=f(a)+f(-a)\Rightarrow f(-a)=-f(a)$.
			                                <br />
			                                Daí, $f(x+(-a))=f(x)+f(-a)\Rightarrow f(x)=f(x-a)-f(-a)=f(x-a)+f(a)$. Sendo assim, $\displaystyle \lim_{x\to a}\,f(x)=\lim_{x\to a}\,f(x-a)+f(a)=\lim_{x\to a}\,f(x-a)+\lim_{x\to a}\,f(a)=0+f(a)=f(a)$, pois $\displaystyle \lim_{x\to a}\,f(x-a)=0$. Portanto, $\displaystyle \lim_{x\to a}\,f(a)$ para todo $a\in\mathbb{R}$.
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

			                            <!-- 5 -->
		                            <p id="q_5_p">
		                                5. Prove que:
										<br />
										(a) $\displaystyle \lim_{x\to\infty} \frac{x^2-1}{x^2+1}=1$
										<br />
										(b) $\displaystyle \lim_{x\to-\infty} \frac{x^2-1}{x^2+1}=1$ 
		                            </p>
		                            <!-- Resposta -->
			                        <p style="display: none; background: #eee; padding: 0.5cm " id="d_5_">
			                            	Dica:
			                            	<br />
			                                Para os dois itens, dado $\varepsilon>0$, basta considerar $A=\max\left\{1,\frac{2}{\varepsilon}-1\right\}$ para que a definição de limite no infitnito seja válida.
			                            </p>
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_5_">
			                                Solução:
			                                <br />
			                                (a) Dado $\varepsilon>0$, basta considerar $A=\max\left\{1,\frac{2}{\varepsilon}-1\right\}$ para que $|f(x)-1|<\varepsilon$ sempre que $x\in D$ e $x>A$. De fato, se $x>A$ tem-se $x>1\Rightarrow x^2>x$ (pois $x$ é positivo) e $x>\frac{2}{\varepsilon}-1\Rightarrow \frac{2}{x+1}<\varepsilon$. Daí, $$\left|\frac{x^2-1}{x^2+1}-1\right|=\left|\frac{-2}{x^2+1}\right|=\frac{2}{x^2+1}<\frac{2}{x+1}<\varepsilon.$$
			                                <br />
			                               	(b) Dado $\varepsilon>0$, basta considerar $A=\max\left\{1,\frac{2}{\varepsilon}-1\right\}$ para que $|f(x)-1|<\varepsilon$ sempre que $x\in D$ e $x<-A$. De fato, se $x<-A$ tem-se $x<-1\Rightarrow x^2>x$ (pois $x$ é negativo) e $x<-\left(\frac{2}{\varepsilon}-1\right)\Rightarrow \frac{2}{-x+1}<\varepsilon$. Daí, $$\left|\frac{x^2-1}{x^2+1}-1\right|=\left|\frac{-2}{x^2+1}\right|=\frac{2}{x^2+1}<\frac{2}{-x+1}<\varepsilon.$$
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
		                                6. Prove que $\displaystyle \lim_{x\to 0+} e^{-\frac{1}{x}}=0$.
		                            </p>
		                            <!-- Resposta -->
		                            	<p style="display: none; background: #eee; padding: 0.5cm " id="d_6_">
			                                Dica:
			                                <br />
			                                Dado $\varepsilon>0$, basta tomar $\delta=\frac{1}{-\ln\varepsilon}>0$ (observe que como $\varepsilon$ é um número positivo bem pequeno, então $\ln \varepsilon$ é um número negativo e, consequentemente, $-\ln\varepsilon$ é positivo).
			                            </p>
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_6_">
			                                Solução:
			                                <br />
			                                Dado $\varepsilon>0$, basta tomar $\delta=\frac{1}{-\ln\varepsilon}>0$ (observe que como $\varepsilon$ é um número positivo bem pequeno, então $\ln \varepsilon$ é um número negativo e, consequentemente, $-\ln\varepsilon$ é positivo). De fato, se $x\in D$ e $0< x<0+\frac{1}{-\ln\varepsilon}$, então $$x<0+\frac{1}{-\ln\varepsilon}\Rightarrow -x>\frac{1}{\ln\varepsilon}\Rightarrow -\frac{1}{x}<\ln\varepsilon\Rightarrow e^{-\frac{1}{x}}< e^{\ln\varepsilon}=\varepsilon.$$ Portanto, $$\left|e^{-\frac{1}{x}}-0\right|=e^{-\frac{1}{x}}<\varepsilon.$$
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
