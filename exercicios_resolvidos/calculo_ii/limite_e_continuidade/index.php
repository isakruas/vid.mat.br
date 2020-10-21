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

									<h2>Funções de varias variaveis</h2>

									<hr class="major" />

		                            <!-- 1 -->
		                            <p id="q_1_p">
		                                1. Utilizando a definição formal, prove que:
		                                <br />
		                                (a) $\lim\limits_{(x,y)\to(0,0)}\frac{2x^2y}{3x^2+3y^2}=0$
		                                <br />
		                                (b) $\lim\limits_{(x,y)\to(1,-2)}2x+6y=-10$
		                                <br />
		                                (c) $\lim\limits_{(x,y)\to(3,1)}x^2-5y=4$
		                            </p>
		                            <!-- Resposta -->
		                            <p style="display: none; background: #eee; padding: 0.5cm " id="d_1_">
		                            		Dica:
		                            		<br />
			                                Escrever $\lim\limits_{(x,y)\to(a,b)}f(x,y)=L$ significa que para todo $\varepsilon>0$ dado, existe um $\delta>0$ (que depende de $\varepsilon$) tal que se $(x,y)\in D(f)$ e $0<\sqrt{(x-a)^2+(y-b)^2}<\delta$, então $|f(x,y)-L|<\varepsilon$. Sendo assim, para provar que um limite existe, dado um $\varepsilon>0$ qualquer, devemos determinar um $\delta>0$ que cumpre a condição acima. Para facilitar a obtenção deste $\delta>0$, manipule a expressão $|f(x,y)-L|<\varepsilon$ para que, de alguma forma, apareça termos semelhantes a raiz $\sqrt{(x-a)^2+(y-b)^2}$, pois este procedimento pode facilitar a escolha do $\delta>0$.  
			                            </p>
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_1_">
			                                Solução:
			                                <br />
			                                (a) Rascunho: $\displaystyle\left| \frac{2x^2y}{3x^2+3y^2} \right|=\frac{x^2}{3x^2+3y^2}2|y|\leq 1\cdot 2|y|=2|y|=2\sqrt{y^2}\leq 2\sqrt{x^2+y^2}<\varepsilon\Rightarrow \sqrt{x^2+y^2}<\frac{\varepsilon}{2}\Rightarrow \delta=\frac{\varepsilon}{2}$. 
			                                <br />
			                                Resposta: Seja $\varepsilon>0$ dado. Vamos determinar um $\delta>0$ tal que se $(x,y)\in D(f)$ e $0<\sqrt{x^2+y^2}<\delta$, então $\displaystyle \left| \frac{2x^2y}{3x^2+3y^2} \right|<\varepsilon$. Para isto, basta tomar $\delta=\frac{\varepsilon}{2}$. De fato, usando que $\sqrt{x^2+y^2}<\frac{\varepsilon}{2}$ temos: $$\left| \frac{2x^2y}{3x^2+3y^2} \right|=\frac{x^2}{3x^2+3y^2}2|y|\leq 2|y|=2\sqrt{y^2}\leq 2\sqrt{x^2+y^2}<2\cdot\frac{\varepsilon}{2}=\varepsilon.$$
			                                <br />
			                                (b) Rascunho: Inicialmente, observe que $|x-1|=\sqrt{(x-1)^2}\leq\sqrt{(x-1)^2+(y+2)^2}<\delta\Rightarrow |x-1|<\delta$. De modo análogo, $|y+2|<\delta$. Assim, $$|2x+6y-(-10)|=|2x-2+6y+12|\leq|2x-2|+|6y+12|=2|x-1|+6|y+2|<2\delta+6\delta=8\delta=\varepsilon\Rightarrow \delta=\frac{\varepsilon}{8}.$$
			                                <br />
			                                Resposta: Seja $\varepsilon>0$ dado. Vamos determinar um $\delta>0$ tal que se $(x,y)\in D(f)$ e $0<\sqrt{(x-1)^2+(y+2)^2}<\delta$, então $|2x+6y-(-10)|<\varepsilon$. Para isto, basta tomar $\delta=\frac{\varepsilon}{8}$. De fato, por hipótese $\sqrt{(x-1)^2+(y+2)^2}<\frac{\varepsilon}{8}\Rightarrow |x-1|<\frac{\varepsilon}{8}$ e $|y+2|<\frac{\varepsilon}{8}$. Logo, $$|2x+6y+10|=|2x-2+6y+12|\leq|2x-2|+|6y+12|=2|x-1|+6|y+2|<2\cdot\frac{\varepsilon}{8}+6\cdot\frac{\varepsilon}{8}=\frac{\varepsilon}{4}+\frac{3\varepsilon}{4}=\varepsilon.$$
			                                <br />
			                                (c) Rascunho: Inicialmente, pelo mesmo motivo mencionado da solução do item (b) acima, $|x-3|<\delta$ e $|y-1|<\delta$. Assim, $|x^2-5y-4|=|x^2-9-5y+5|\leq |x^2-9|+|-(5y-5)|=|x-3|\cdot|x+3|+5|y-1|$. Observe que devemos eliminar o termo $|x+3|$ e, para isto, vamos supor que $\sqrt{(x-3)^2+(y+1)^2}<1\Rightarrow |x-3|<\sqrt{(x-3)^2+(y+1)^2}\Rightarrow |x-3|<1.$ Daí, $$|x+3|=|x-3+6|\leq |x-3|+|6|<1+6=7\Rightarrow |x+3|<7.$$ Deste modo, $|x^2-5y-4|\leq |x-3|\cdot|x+3|+5|y-1|<7\delta+5\delta=12\delta=\varepsilon\Rightarrow \delta=\frac{\varepsilon}{12}$.
			                                <br />
			                                Resposta: Seja $\varepsilon>0$ dado. Vamos determinar um $\delta>0$ tal que se $(x,y)\in D(f)$ e $0<\sqrt{(x-3)^2+(y-1)^2}<\delta$, então $|x^2-5y-4|<\varepsilon$. Para isto, basta tomar $\delta=\min\left\{1,\frac{\varepsilon}{12}\right\}$. De fato, $$\delta=\min\left\{1,\frac{\varepsilon}{12}\right\}\Rightarrow \delta\leq1\;\;\textrm{e}\;\;\delta\leq\frac{\varepsilon}{12}.$$Assim, $\delta\leq1\Rightarrow |x-3|\leq\sqrt{(x-3)^2+(y-1)^2}<1\Rightarrow |x-3|<1$ e, conseguentemente, $|x+3|=|x-3+6|\leq |x-3|+|6|<1+6=7$. Por outro lado, $\delta\leq \frac{\varepsilon}{12}\Rightarrow |x-3|\leq \sqrt{(x-3)^2+(y-1)^2}<\delta<\frac{\varepsilon}{12}$ e de modo análogo, $|y-1|<\frac{\varepsilon}{12}$. Portanto, $$|x^2-5y-4|=|x^2-9-5y+5|\leq |x^2-9|+|-(5y-5)|=|x-3|\cdot|x+3|+5|y-1|<7|x-3|+5|y-1|<\frac{7\varepsilon}{12}+\frac{5\varepsilon}{12}=\varepsilon.$$
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
		                            <p id="q_2_p">
		                                2. Em cada item, verifique se o limite existe. Justifique sua resposta.
		                                <br />
		                                (a) $\lim\limits_{(x,y)\rightarrow(0,0)}\frac{xy^2}{x^2+y^4}$
		                                <br />
		                                (b) $\lim\limits_{(x,y)\to(0,0)}\frac{x^4-y^4}{x^2+y^2}$
		                                <br />
		                                (c) $\lim\limits_{(x,y)\rightarrow(0,0)}\frac{x^2-2}{3+xy}$
		                                <br />
		                                (d) $\lim\limits_{(x,y)\rightarrow(0,0)}\frac{xy}{\sqrt{x^2+y^2}}$
		                            </p>
		                            <!-- Resposta -->
		                            <!--<p style="display: none; background: #eee; padding: 0.5cm " id="d_2_">
			                        	Em construção: dica
			                        </p>-->
			                        <p style="display: none; background: #eee; padding: 0.5cm " id="r_2_">
			                            Solução:
			                            <br />
			                            (a) Considere as aproximações de $(0,0)$: (i) ao longo do eixo $x$ ($y=0$) $\Rightarrow$ $f(x,y)\to 0$; (ii) ao longo da parábola $x=y^2$ $\Rightarrow$ $f(x,y)\to \frac{1}{2}$. Portanto, o limite não existe.
			                            <br />
			                            (b) $\lim\limits_{(x,y)\to(0,0)}\frac{x^4-y^4}{x^2+y^2}=\lim\limits_{(x,y)\to(0,0)}\frac{(x^2-y^2)(x^2+y^2)}{x^2+y^2}=\lim\limits_{(x,y)\to(0,0)}x^2-y^2=0$
			                            <br />
			                            (c) $\lim\limits_{(x,y)\rightarrow(0,0)}\frac{x^2-2}{3+xy}=-\frac{2}{3}$
			                            <br />
			                            (d) Observe que $|x|\leq\sqrt{x^2+y^2}\Rightarrow \left| \frac{x}{\sqrt{x^2+y^2}}\right|\leq1\Rightarrow -1\leq \frac{x}{\sqrt{x^2+y^2}}\leq 1$, ou seja, $\frac{x}{\sqrt{x^2+y^2}}$ é uma função limitada. Além disso, $\lim\limits_{(x,y)\rightarrow(0,0)}y=0$. Portanto, $\lim\limits_{(x,y)\rightarrow(0,0)}\frac{xy}{\sqrt{x^2+y^2}}=0$.
			                        </p>
			                        <!--<p style="display: none; background: #eee; padding: 0.5cm " id="v_2_">
			                            Em construção: videoaula
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
		                                3. A função $\displaystyle f(x,y)=\left\lbrace\begin{matrix} \frac{2x+y}{|x|+|y|} & \textrm{se} & (x,y)\neq(0,0) \\ 0 & \textrm{se} & (x,y)=(0,0)\end{matrix}\right.$ é contínua na origem?
		                            </p>
		                            <!-- Resposta -->
		                            <p style="display: none; background: #eee; padding: 0.5cm " id="d_3_">
			                        	Dica:
			                        	<br />
			                        	Dizemos que uma função $f$ de duas variáveis é contínua no ponto $(a,b)$ quando $\lim\limits_{(x,y)\rightarrow(a,b)}f(x,y)=f(a,b)$. Existem três fatos subtendidos nesta definição: (i) o ponto $(a,b)$ deve pertencer ao domínio de $f$; (ii) $\lim\limits_{(x,y)\rightarrow(a,b)}f(x,y)$ deve existir; (iii) além do limite existir, ele deve valer $f(a,b)$, ou seja, $\lim\limits_{(x,y)\rightarrow(a,b)}f(x,y)=f(a,b)$. Assim, se uma dessas três condições não são satisfeitas, a função $f$ considerada não é contínua no ponto $(a,b)$.
			                        </p>
			                        <p style="display: none; background: #eee; padding: 0.5cm " id="r_3_">
			                            Solução:
			                            <br />
			                            Observe que o ponto $(0,0)$ pertence ao domínio de $f$, pois $f(0,0)=0$. Agora, vamos examinar $\lim\limits_{(x,y)\rightarrow(a,b)}f(x,y)$. Fazendo a aproximação $(x,y)\to (0,0)$ ao longo do eixo $y$ ($x=0$), obtemos $f(0,y)=\frac{y}{|y|}$ e, neste caso, o limite $\lim\limits_{(x,y)\rightarrow(0,0)}f(0,y)$ não existe, pois aproximando com valores de $y$ positivos o limite vale $1$ e aproximando com valores de $y$ negativos o limite vale $-1$. Portanto, a função considerada não é contínua na origem.
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

		 

								</section>

						</div>
					</div>

				<!-- Sidebar -->
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