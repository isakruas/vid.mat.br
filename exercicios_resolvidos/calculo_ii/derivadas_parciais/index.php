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

									<h2>Derivadas parciais</h2>

									<hr class="major" />

			                            <!-- 1 -->
			                            <p id="q_1_p">
			                                1. Calcule as derivadas parciais de primeira ordem de:                               
			                                <br />
			                                (a) $f(x,y)=\,\mathrm{sen}\,(x^2-y^3)$
			                                <br />
			                                (b) $f(x,y)=\arctan \frac{x}{y}$
			                                <br />
			                                (c) $f(x,y,z)=ze^{xyz}$
			                            </p>
			                            <!-- Resposta -->
			                            <!--<p style="display: none; background: #eee; padding: 0.5cm " id="d_1_">
			                                Em construção: dica
			                            </p>-->
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_1_">
			                                Solução:
			                                <br />
			                                (a) $f_x(x,y)=2x\cos(x^2-y^3)$ e $f_y(x,y)=-3y^2\cos(x^2-y^3)$
			                                <br />
			                                (b) $f_x(x,y)=\frac{y}{x^2+y^2}$ e $f_y(x,y)=-\frac{x}{x^2+y^2}$
			                                <br />
			                                (c) $f_x(x,y,z)=yz^2e^{xyz}$, $f_y(x,y,z)=xz^2e^{xyz}$ e $f_z(x,y,z)=e^{xyz}+xyze^{xyz}$
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
			                                2. Use a Regra da Cadeia para determinar as derivadas parciais $\frac{\partial z}{\partial s}$, $\frac{\partial z}{\partial t}$ e $\frac{\partial z}{\partial u}$ para a função $z=x^4+x^2y$, $x=s+2t-u$ e $y=stu^2$, quando $s=4$, $t=2$ e $u=1$.
			                            </p>
			                            <!-- Resposta -->
			                            <!--<p style="display: none; background: #eee; padding: 0.5cm " id="d_2_">
			                                Em construção: dica
			                            </p>-->
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_2_">
			                                Solução:
			                                <br />
			                                (i) Quando $s=4$, $t=2$ e $u=1$, temos que $x=7$ e $y=8$.
			                                <br />
			                                (ii) $\frac{\partial z}{\partial s}=4x^3+2xy+x^2\cdot tu^2\Rightarrow$ substituindo os valores, $\frac{\partial z}{\partial s}=1582$.
			                                <br />
			                                (iii) $\frac{\partial z}{\partial t}=8x^3+4xy+x^2\cdot su^2\Rightarrow$ substituindo os valores, $\frac{\partial z}{\partial t}=3164$.
			                                <br />
			                                (vi) $\frac{\partial z}{\partial u}=-4x^3-2xy+x^2\cdot 2stu\Rightarrow$ substituindo os valores, $\frac{\partial z}{\partial u}=-700$.
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
			                                3. Determine a linearização das seguintes funções, ao redor dos pontos indicados.
			                                <br />
			                                (a) $f(x,y)=\sqrt{x+e^{4y}}$, $P=(3,0)$
			                                <br />
			                                (b) $f(x,y,z)=xy^3+\cos (\pi z)$, $P=(1,3,1)$ 
			                            </p>
			                            <!-- Resposta -->
			                            <!--<p style="display: none; background: #eee; padding: 0.5cm " id="d_3_">
			                                Em construção: dica
			                            </p>-->
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_3_">
			                                Solução:
			                                <br />
			                                (a) $f(3,0)=2$, $f_x(x,y)=\frac{1}{2\sqrt{x+e^{4y}}}\Rightarrow f_x(3,0)=\frac{1}{4}$ e $f_y(x,y)=\frac{2e^{4y}}{\sqrt{x+e^{4y}}}\Rightarrow f_y(3,0)=1$. Logo, $$z=\frac{1}{4}(x-3)+1(y-0)+2\Rightarrow z=\frac{x}{4}+y+\frac{5}{4}.$$
			                                (b) $f(1,3,1)=26$, $f_x(x,y,z)=y^3\Rightarrow f_x(1,3,1)=27$, $f_y(x,y,z)=3xy^2\Rightarrow f_y(1,3,1)=27$ e $f_z(x,y,z)=-\pi\,\mathrm{sen}\,x(\pi z)\Rightarrow f_z(1,3,1)=0$. Logo, $$w=27(x-1)+27(y-3)+0(z-1)+26\Rightarrow w=27x+27y-55.$$
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
			                                4. Considere a função $$f(x,y)=\left\lbrace\begin{matrix} \frac{xy}{x^2+y^2} & \textrm{se} & (x,y)\neq(0,0) \\ 0 & \textrm{se} & (x,y)=(0,0)\end{matrix}\right.$$
			                                <br />
			                                (a) Calcule as derivadas parciais $f_x(0,0)$ e $f_y(0,0)$.
			                                <br />
			                                (b) Calcule a aproximação linear de $f$ no ponto $(0,0)$ e estime o valor de $f(0,1;-0,9)$. Além disso, com o auxílio da calculadora, determine o valor exato de $f(0,1;-0,9)$. O que podemos concluir comparando este dois resultados?
			                                <br />
			                                (c) Prove que a função $f$ não é diferenciável em $(0,0)$.
			                            </p>
			                            <!-- Resposta -->
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="d_4_">
			                                Dica:
			                                <br />
			                                (c) Use o resultado: se $f$ é uma função de duas variáveis diferenciáveis em $(a,b)$, então $f$ é contínua em $(a,b)$.
			                            </p>
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_4_">
			                                Solução:
			                                <br />
			                                (a) $\displaystyle f_x(0,0)=\lim_{h\to0} \frac{f(0+h,0)-f(0,0)}{h}=\lim_{h\to0} \frac{0}{h}=0$ e, de modo análogo, $f_y(0,0)=0$. Ou seja, as derivadas parciais $f_x(0,0)$ e $f_x(0,0)$ existem e valem $0$.
			                                <br />
			                                (b) Neste caso, a aproximação linear seria $f(x,y)\approx0\Rightarrow f(0,1;-0,9)\approx0$. Entretanto, $f(0,1;-0,9)\approx-0,10$. Assim, a aproximação encontrada se comporta bastante diferente da função nas proximidades do ponto $(0,0)$.
			                                <br />
			                                (c) Observe que $\displaystyle \lim_{(x,y)\to(0,0)} f(x,y)$ não existe, pois fazendo a aproximação de $(0,0)$ ao longo do eixo $x$, a função aproxima de $0$ e fazendo a aproximação ao longo da reta $x=y$, a função aproxima de $\frac{1}{2}$. Portanto, $f$ não é contínua em $(0,0)$ e, consequentemente, não é diferenciável em $(0,0)$. Isso justifica o fato de que a linearização nas proximidades de $(0,0)$ se comporta bastante diferente da função.
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