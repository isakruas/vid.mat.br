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

									<h2>Curvas parametrizadas</h2>

									<hr class="major" />

		                            <!-- 1 -->
		                            <p id="q_1_p">
		                                1. Elimine o parâmetro $t$ para encontrar uma equação cartesiana das curvas abaixo.
		                                <br />
		                                (a) $\left\lbrace \begin{matrix} x= 1-t^2 \\ y=t-2 \end{matrix}\right.$
		                                <br />
		                                (b) $\left\lbrace \begin{matrix} x= e^{2t} \\ y=t+1 \end{matrix} \right.$
		                                <br />
		                                (c) $\left\lbrace \begin{matrix} x=2\cot t \\ y=2\,\mathrm{sen}\,t \end{matrix}\right.$
		                            </p>
		                            <!-- Resposta -->
		                            <!--<p style="display: none; background: #eee; padding: 0.5cm " id="d_1_">
			                                Em construção: dica
			                            </p>-->
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_1_">
			                                Solução:
			                                <br />
			                                (a) $t=y+2\Rightarrow x=1-(y+2)^2=1-y^2-4y-4\Rightarrow x=-y^2-4y-3$.
			                                <br />
			                                (b) $y=t+1\Rightarrow t=y-1\Rightarrow x=e^{2(y-1)}=e^{2y-2}=e^{-2}e^{2y}\Rightarrow \ln x=\ln e^{-2}e^{2y}\Rightarrow$ $\ln x=\ln e^{-2}+\ln e^{2y}=-2+2y\Rightarrow y=\frac{1}{2}\ln x +1$.
			                                <br />
			                                (c) $\displaystyle x^2=4\frac{\cos^2 t}{\mathrm{sen}^2\,t}=\frac{4\cos^2 t}{\frac{y}{2}}=\frac{8\cos^2 t}{y}\Rightarrow x^2=\frac{8}{y}(1-\mathrm{sen}^2\,t)=\frac{8}{y}-4\Rightarrow y=\frac{8}{x^2+4}$. 
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
		                                2. Encontra a equação da reta tangente no ponto indicado.
		                                <br />
		                                (a) $\left\lbrace \begin{matrix} x= t-t^{-1} \\ y=1+t^2 \end{matrix}\right. 0\leq t\leq\pi$, sendo $P$ é o ponto correspondente ao valor $t=1$.
		                                <br />
		                                (b) $\left\lbrace \begin{matrix} x=\cos t +\cos 2t \\ y=\mathrm{sen}\,t +\cos 2t \end{matrix} \right.$, onde $P=(-1,1)$.
		                            </p>
		                            <!-- Resposta -->
		                            <!--<p style="display: none; background: #eee; padding: 0.5cm " id="d_2_">
			                                Em construção: dica
			                            </p>-->
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_2_">
			                                Solução:
			                                <br />
			                                (a) $\displaystyle\frac{dy}{dx}=\frac{2t}{1+\frac{1}{t^2}}\Rightarrow \left.\frac{dy}{dt}\right\rvert_{t=1}=\frac{2}{2}=1.$ O ponto da curva associado ao valor $t=1$ é $(0,2)$ e, assim, a equação da reta tangente é $$y-2=1\left( x-0 \right)\Rightarrow y=x+2.$$ 
			                                <br />
			                                (b) $\displaystyle\frac{dy}{dx}=\frac{\cos t+2\cos 2t}{\mathrm{sen}\,t+2\,\mathrm{sen}\,2t}.$ Substituindo $x=-1$ e $y=1$ nas equações paramétricas, obtemos $$\left\lbrace \begin{matrix} \cos t+ \cos 2t=-1 \\ \mathrm{sen}\,t + \mathrm{sen}\,2t =1\end{matrix}\right.\Rightarrow t=\frac{\pi}{2}\Rightarrow \left.\frac{dy}{dt}\right\rvert_{t=\frac{\pi}{2}}=\frac{0+2\left( -1\right) }{-1-2\cdot0}=2.$$ Logo, $y-1=2\left( x+1\right) \Rightarrow y=2x+3$. 
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
		                                3. Determine a área delimitada:
		                                <br />
		                                (a) pela curva $\left\lbrace \begin{matrix} x= 1+e^t \\ y=t-t^2 \end{matrix}\right.$ e pelo eixo $x$.
		                                <br />
		                                (b) acima da reta $y=2$ e abaixo do arco da ciclóide de equações $\left\lbrace \begin{matrix} x=2(t-\mathrm{sen}\,t)\\ y=2(1-\cos t) \end{matrix}\right.,\;t\in[0,2\pi].$
		                            </p>
		                            <!-- Resposta -->
		                            <!--<p style="display: none; background: #eee; padding: 0.5cm " id="d_3_">
			                                Em construção: dica
			                            </p>-->
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_3_">
			                                Solução:
			                                <br />
			                                (a) Se a região é limitada pelo eixo $x$, fazendo $y=0$ determinamos os valores de $t$ que são os limites de integração. Sendo assim, $y=0\Rightarrow t(1-t)=0\Rightarrow$ $t=0$ ou $t=1$. 
			                                <br />
			                                
			                                	<img src="02.jpeg" style="cursor: pointer; left: 50%;position: relative; margin-left: -25%" onclick= "window.open('02.jpeg', '_blank')" width="50%">
			                                
			                                <br />
			                                Deste modo,
			                                $A=\int_0^1 (t-t^2)e^t\,dt=\int_0^1 te^t\,dt-\int_0^1 t^2e^t\,dt$. Calculando cada uma dessas integrais utilizando integração por partes:
			                                <br />
			                                (i) $\displaystyle\int te^t\,dt=te^t-\int e^t\,dt=te^t-e^t$, onde $u=t$ e $v=e^t\,dt$.
			                                <br />
			                                (ii) $\displaystyle\int t^2e^t\,dt=t^2e^t-\int e^t2t\,dt=\int t^2e^t-2(te^t-e^t)=t^2e^t-2te^t+2e^t$, onde $u=t^2$ e $v=e^t\,dt$. Observe que neste caso utilizamos o resultado obtido em (i).
			                                <br />
			                                Portanto,
			                                \begin{eqnarray*}
			                                	A &=& \int_0^1 (t-t^2)e^t\,dt\\
			                                	&=& [te^t-e^t-(t^2e^t-2te^t+2e^t)]_0^1\\
			                                	&=& [-t^2e^t+3te^t-3e^t]_0^1\;=\;-e+3.
			                                \end{eqnarray*}
			                                <br />
			                                (b) Para determinar os limites de integração fazemos $y=2\Rightarrow \cos t=0\Rightarrow t=\frac{\pi}{2}$ ou $t=\frac{3\pi}{2}$.
			                                <br />
			                                 
			                                	<img src="03.jpeg" style="cursor: pointer; left: 50%;position: relative; margin-left: -25%" onclick= "window.open('03.jpeg', '_blank')" width="50%">
			                                
			                                <br />
			                                Sendo assim,  
			                                \begin{eqnarray*}
			                                	A &=& \int_{\frac{\pi}{2}}^{\frac{3\pi}{2}} 2(1-\cos t)(2-2\cos t)\,dt\\
			                                	&=& 4\int_{\frac{\pi}{2}}^{\frac{3\pi}{2}}(1-\cos t)^2\,dt\\
			                                	&=& 4\int_{\frac{\pi}{2}}^{\frac{3\pi}{2}}1-2\cos t+\cos^2t\,dt\\
			                                	&=& 4\left(t-2\mathrm{sen}\,t+\frac{t}{2}+\frac{\mathrm{sen}\,2t}{4}\right)|_{\frac{\pi}{2}}^{\frac{3\pi}{2}}\\
			                                	&=& 4\left(\pi-(-4)+\frac{\pi}{2}\right)\;=\;6\pi+16.
			                                \end{eqnarray*}
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
		                            <p id="q_4_p">
		                                4. Calcule o comprimento da curva $\left\lbrace \begin{matrix} x= e^t\cos t \\ y=e^t\mathrm{sen}\,t \end{matrix},\;0\leq t\leq\pi\right.$.
		                            </p>
		                            <!-- Resposta -->
		                            <!--<p style="display: none; background: #eee; padding: 0.5cm " id="d_4_">
			                                Em construção: dica
			                            </p>-->
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_4_">
			                                Solução:
			                                <br />
			                                $\displaystyle L=\int_0^{\pi}\sqrt{\left( e^t\cos t -\mathrm{sen}\,t\right)^2+\left( e^t\mathrm{sen}\,t  + e^t\cos t \right)^2}\,dt$
			                                <br />
			                                $\displaystyle \;\;\;=\int_{0}^{\pi}\sqrt{e^{2t}\cos t -2e^{2t}\mathrm{sen}\, t + e^{2t}\mathrm{sen}^2\, t+e^{2t} \mathrm{sen}^2\, t+2e^{2t}\mathrm{sen}\,t\cos t + e^{2t}\cos t}\, dt$
			                                <br />
			                                $\displaystyle \;\;\;=\int_0^{\pi}\sqrt{2e^{2t}}\, dt = \int_0^{\pi}\sqrt{2}e^t\,dt = \sqrt{2}e^{t}\left.\right|_0^{\pi} = \sqrt{2}\left(e^{\pi}-1\right)$
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
		                                5. Encontre a área da região que está dentro das curvas $r=\sqrt{3}\cos\theta$ e $r=\mathrm{sen}\,\theta$.
		                            </p>
		                            	<!-- Resposta -->
		                            	<p style="display: none; background: #eee; padding: 0.5cm " id="d_5_">
			                                Dica:
			                                <br />
			                                Lembre-se de que a área da região $R$ limitada pela curva polar $r=f(\theta)$ e pelas retas $\theta=\alpha$ e $\theta=\beta$ é dada por $\displaystyle A=\frac{1}{2}\int_{\alpha}^{\beta} [f(\theta)]^2\,d\theta$.
			                            </p>
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_5_">
			                                Solução:
			                                <br />
			                                Inicialmente, observe que as duas curvas polares representam duas circunferências. De fato,
			                                <br />
			                                (i) $r=\sqrt{3}\cos\theta\Rightarrow r=\sqrt{3}\frac{x}{r}\Rightarrow r^2=\sqrt{3}x\Rightarrow x^2+y^2=\sqrt{3}x\Rightarrow \left(x-\frac{\sqrt{3}}{2}\right)^2+y^2=\frac{3}{4}$.
			                                <br />
			                                (ii) $r=\mathrm{sen}\,\theta\Rightarrow r=\frac{y}{r}\Rightarrow r^2=y\Rightarrow x^2+y^2=y\Rightarrow x^2+\left(y-\frac{1}{2}\right)^2=\frac{1}{4}$.
			                                <br />
			                                Agora, vamos determinar os pontos de interceções das curvas igualando as suas equações. $$\sqrt{3}\cos\theta=\mathrm{sen}\,\theta\Rightarrow \tan\theta=\sqrt{3}\Rightarrow \theta=\frac{\pi}{3}\,rad.$$
			                                Sendo assim, o gráfico das duas curvas no plano será:
			                                <br />
			              
			                                	<img src="01.jpeg" style="cursor: pointer; left: 50%;position: relative; margin-left: -25%" onclick= "window.open('01.jpeg', '_blank')" width="50%">
			                                 
			                                <br />
			                                Observe que a área a ser calculada pode ser dividida em duas regiões: variando o ângulo de $0\,rad$ à $\frac{\pi}{3}\,rad$ em relação à circunferência azul e variando de $\frac{\pi}{3}\,rad$ à $\frac{\pi}{2}\,rad$ em relação à circunferência vermelha. Ou seja,
			                                \begin{eqnarray*}
			                                	A &=& \frac{1}{2}\int_0^{\frac{\pi}{3}} \mathrm{sen}^2\,\theta\,d\theta+\frac{1}{2}\int_{\frac{\pi}{3}}^{\frac{\pi}{2}} (\sqrt{3}\cos\theta)^2\,d\theta\\
			                                	&=& \frac{1}{2}\int_0^{\frac{\pi}{3}} \frac{1}{2}(1-\cos 2\theta)\,d\theta+\frac{1}{2}\int_{\frac{\pi}{3}}^{\frac{\pi}{2}} \frac{3}{2}(1+\cos 2\theta)\,d\theta\\
			                                	&=& \frac{1}{4}\left[\theta-\frac{1}{2}\mathrm{sen}\,2\theta\right]_0^{\frac{\pi}{3}}+\frac{3}{4}\left[\theta+\frac{1}{2}\mathrm{sen}\,2\theta\right]_{\frac{\pi}{3}}^{\frac{\pi}{2}}\\
			                                	&=& \frac{\pi}{12}-\frac{\sqrt{3}}{16}+\frac{3\pi}{8}-\frac{\pi}{4}-\frac{3\sqrt{3}}{16}\;=\;\frac{5\pi}{24}-\frac{\sqrt{3}}{4}.
			                                \end{eqnarray*}
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