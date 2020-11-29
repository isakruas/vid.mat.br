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

									<h2>Derivada direcional e vetor gradiente</h2>

									<hr class="major" />

                            <!-- 1 -->
                            <p id="q_1_p">
                                1. Encontre a derivada direcional de:
                                <br />
                                (a) $f(x,y)=1+2x\sqrt{y}$ no ponto $P=(3,4)$ na direção do vetor $\vec{v}=(4,-3)$;                        
                                <br />
                                (b) $f(x,y)=e^x\cos y$ no ponto $P=(0,0)$ na direção do ângulo $\theta=\frac{\pi}{4}$.
                            </p>
                            <!-- Resposta -->
                            <p style="display: none; background: #eee; padding: 0.5cm " id="d_1_">
			                	Dica:
								<br />
			                	(a) Aplique a fórmula $D_{\vec{u}}f(x_0,y_0)=f_x(x_0,y_0)a+f_y(x_0,y_0)b=\vec{\nabla f}(x_0,y_0)\bullet\vec{u}$, onde $\vec{u}=(a,b)$ é um vetor unitário e $P=(x_0,y_0)$.
			                	<br />
			                	(b) Utilize as relações trigonométricas para determinar o vetor unitário que indica a direção informada.
			                </p>
			                <p style="display: none; background: #eee; padding: 0.5cm " id="r_1_">
			                    Solução:
			                	<br />
			                    (a) $\vec{u}=\frac{1}{\left\lVert \vec{v} \right\rVert}\vec{v}=\frac{1}{5}(4,-3)=\left(\frac{4}{5},-\frac{3}{5}\right)$. Além disso, $\vec{\nabla f}(x,y)=\left(2\sqrt{y},\frac{x}{\sqrt{y}}\right)\Rightarrow \vec{\nabla f}(3,4)=\left(4,\frac{3}{2}\right)$. Portanto, $$D_{\vec{u}} f(3,4)=\left(4,\frac{3}{2}\right)\bullet\left(\frac{4}{5},-\frac{3}{5}\right)=\frac{23}{10}.$$
			                    <br />
			                    (b) $\vec{v}=(\cos \frac{\pi}{4},\mathrm{sen}\,\frac{\pi}{4})=\left(\frac{\sqrt{2}}{2},\frac{\sqrt{2}}{2}\right)$ é a direção informada e $\vec{\nabla f}(x,y)=(e^x\cos y,-e^x\,\mathrm{sen}\,y)\Rightarrow \vec{\nabla f}(0,0)=(1,0)$. Portanto, $D_{\vec{v}} f(0,0)=\frac{\sqrt{2}}{2}$.
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
                                2. Considere a função $f(x,y)=\sqrt{xy}$.
                                <br />
                                (a) Determine a derivada direcional de $f$ no ponto $P=(2,8)$ na direção de $P$ a $Q=(5,4)$.
                                <br />
                                (b) Qual a direção e o valor máximo da derivada direcional de $f$ no ponto $P$?
                            	</p>
                            	<!-- Resposta -->
                            	<p style="display: none; background: #eee; padding: 0.5cm " id="d_2_">
			                    	Dica:
			                    	<br />
			                    	(a) A direção a ser considerada é dada pelo vetor $\vec{PQ}=Q-P=(3,-4)$. Em seguida, normalize o vetor $\vec{PQ}$.
			                    	<br />
			                    	(b) A direção da derivada direcional máxima é na direção do vetor gradiente $\vec{\nabla f}(P)$ e seu valor pode ser calculado usando a fórmula $\left\lVert \vec{\nabla f}(P)\right\rVert$.
			                    </p>
			                    <p style="display: none; background: #eee; padding: 0.5cm " id="r_2_">
			                        Solução:
			                        <br />
			                        (a) O vetor unitário na direção de $\vec{PQ}=Q-P=(3,-4)$ é $\vec{u}=\left(\frac{3}{5},-\frac{4}{5}\right)$. O gradiente de $f$ é $\vec{\nabla f}(x,y)=\left(\frac{\sqrt{y}}{2\sqrt{x}},\frac{\sqrt{x}}{2\sqrt{y}}\right)\Rightarrow \vec{\nabla f}(2,8)=\left(1,\frac{1}{4}\right)$. Portanto, $$D_u f(2,8)=\left(1,\frac{1}{4}\right)\bullet\left(\frac{3}{5},-\frac{4}{5}\right)=\frac{2}{5}.$$
			                        <br />
			                        (b) A direção da derivada direcional máxima é na direção de $\vec{\nabla f}(2,8)=\left(1,\frac{1}{4}\right)$ (veja a imagem abaixo) e o valor máximo é $\left\lVert \vec{\nabla f}(2,8)\right\rVert=\frac{\sqrt{17}}{4}$.
			                        <br /><br />
			                            <img src="2b.png" style="cursor: pointer; left: 50%;position: relative; margin-left: -25%" onclick= "window.open('2b.png', '_blank')" width="50%">
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
                                3. Determine a derivada direcional mínima de $f(x,y,z)=\frac{x+y}{z}$ em $P=(1,1,-1)$ e a direção em que isto ocorre.
                            </p>
                            <!-- Resposta -->
                            <p style="display: none; background: #eee; padding: 0.5cm " id="d_3_">
			                    Dica:
			                	<br />
			                	A derivada direcional mínima ocorre na direção oposta ao vetor gradiente e é dada por $-\left\lVert \vec{\nabla f}(P)\right\rVert$.
			                </p>
			                <p style="display: none; background: #eee; padding: 0.5cm " id="r_3_">
			                    Solução:
			                	<br />
			                    Temos que $\vec{\nabla f}(x,y,z)=\left(\frac{1}{z},\frac{1}{z},-\frac{x+y}{z^2}\right)$. A derivada direcional mínima ocorre na direção oposta ao vetor gradiente: $-\vec{\nabla f}(1,1,-1)=-(-1,-1,-2)=(1,1,2)$, logo o valor mínimo da derivada direcional é $-\left\lVert \vec{\nabla f}(1,1,-1) \right\rVert=-\sqrt{6}$.
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
                                4. (a) Se a distribuição de temperatura numa chapa metálica é dada pela função $f(x,y)=x^3-2xy^2$ e se uma formiga está sobre a chapa no ponto $(1,1)$ e deseja se aquecer pois está sentindo muito frio, em que direção deverá tomar sua caminhada para que isso ocorra de modo mais eficiente?
                                <br />
                                (b) Se a formiga estivesse confortável, termicamente falando, que direção ela tomaria para continuar com esta mesma sensação.
                            </p>
                            <!-- Resposta -->
                            <!--<p style="display: none; background: #eee; padding: 0.5cm " id="d_4_">
			                    Em construção: dica
			                </p>-->
			                <p style="display: none; background: #eee; padding: 0.5cm " id="r_4_">
			                    Solução:
			                	<br />
			                    (a) Na direção $\vec{\nabla f}(1,1)=(1,-4)$.
			                    <br />
			                    (b) Na direção perpendicular ao vetor gradiente, ou seja, na direção de $\vec{v}=(a,b)$ onde $\vec{v}\bullet \vec{\nabla f}(1,1)=0\Rightarrow a=4b\Rightarrow \vec{v}=(4b,b)$, onde $b\in\mathbb{R}^*$.
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
                            <p id="q_4_p">
                                5. A temperatura $T$ em uma bola de metal é inversamente proporcional à distância do centro da bola, que tomamos como a origem. A temperatura no ponto $(1,2,2)$ é de 120°.
                                <br />
                                (a) Determine a taxa de variação de $T$ em $(1,2,2)$ em direção ao ponto $(2,1,3)$.
                                <br />
								(b) Mostre que em qualquer ponto da bola a direção de maior crescimento na temperatura é dada por um vetor que aponta para a origem.
                            </p>
                            <!-- Resposta -->
                            <p style="display: none; background: #eee; padding: 0.5cm " id="d_5_">
			                    Dica:
			                	<br />
			                	A distância entre dois pontos $A=(x_1,y_1,z_1)$ e $B=(x_2,y_2,z_2)$ do $\mathbb{R}$ é dada por $$d(A,B)=\sqrt{(x_1-x_2)^2+(y_1-y_2)^2+(z_1-z_2)^2}.$$
			                </p>
			                <p style="display: none; background: #eee; padding: 0.5cm " id="r_5_">
			                    Solução:
			                	<br />
			                    (a) De acorco com o enunciado, $T=\frac{k}{\sqrt{x^2+y^2+z^2}}$, onde $k$ é uma constante real. Para determinar o valor de $k$, usamos que a temperatura no ponto $(1,2,2)$ é de 120°, logo $$120=\frac{k}{\sqrt{1^2+2^2+2^2}}\Rightarrow k=360.$$ Para determinar o vetor unitário que corresponde a direção informada, calculamos o vetor $(2,1,3)-(1,2,2)=(1,-1,1)$ e normalizamos $\vec{u}=\left(\frac{1}{\sqrt{3}},-\frac{1}{\sqrt{3}},\frac{1}{\sqrt{3}}\right)$. Portanto, $$D_{\vec{u}} T(1,2,2)=\vec{\nabla T(1,2,2)}\bullet \vec{u}=\left(-\frac{40}{3},-\frac{80}{3},-\frac{80}{3}\right)\bullet \left(\frac{1}{\sqrt{3}},-\frac{1}{\sqrt{3}},\frac{1}{\sqrt{3}}\right)=-\frac{40}{3\sqrt{3}}.$$
			                    <br />
			                    (b) Pelo item (a), $T(x,y,z)=\frac{360}{\sqrt{x^2+y^2+z^2}}$. Sabemos que a direção de maior crescimento é em direção ao vetor gradiente $\vec{\nabla T}(x,y,z)$ e, portanto, $$\vec{\nabla T}(x,y,z)=\left(-\frac{360x}{(x^2+y^2+z^2)^{3/2}},-\frac{360y}{(x^2+y^2+z^2)^{3/2}},-\frac{360z}{(x^2+y^2+z^2)^{3/2}}\right)=-\frac{360}{(x^2+y^2+z^2)^{3/2}}(-x,-y,-z)\;\;\;(\ast)$$ Note que se $\vec{v}$ é um vetor cujo ponto inicial é $(a,b,c)$ e aponta para a origem $(0,0,0)$, então $\vec{v}=(-a,-b,-c)$. Assim, pela observação anterior e por $(\ast)$, $\vec{\nabla T}(x,y,z)$ é um múltiplo de um vetor que aponta para a origem.
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