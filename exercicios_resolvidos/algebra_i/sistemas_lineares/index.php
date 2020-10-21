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

									<h2>Sistemas lineares</h2>

									<hr class="major" />


			                            <!-- 1 -->
			                            <p id="q_1_p">
			                                1. Resolva e classifique os sistemas lineares abaixo:
			                                <br />
			                                (a) $\left\{\begin{array}{r} x+z=3 \\ x+2y+2z=6 \\ 3y+3z=6 \end{array}\right.$
			                                <br />
			                                (b) $\left\{\begin{array}{r} 4x+3y+z=0 \\ 2x-y+3z=0 \\ x+2y-z=0 \end{array}\right.$
			                                <br />
			                                (c) $\left\{\begin{array}{r} x+y+z=4 \\ 2x+5y-2z=3 \\ x+7y-7z=5 \end{array}\right.$
			                                <br />
			                                (d) $\left\{\begin{array}{r} x+y+2z-w=-1 \\ 2x+y-2z-2w=-2 \\ -x+2y+4z+w=1 \\ 3x-3w=-3 \end{array}\right.$
			                            </p>
			                            <!-- Resposta -->
			                            <!--<p style="display: none; background: #eee; padding: 0.5cm " id="d_1_">
			                                Em construção: dica
			                            </p>-->
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_1_">
			                                Solução:
			                                <br />
			                                (a) O sistema é SPD com solução $(2,1,1)$: 
			                                <br />
			                                $\left\{\begin{array}{r} x+z=3 \\ x+2y+2z=6 \\ 3y+3z=6 \end{array}\right.\sim\left\{\begin{array}{r} x+z=3 \\ 2y+z=3 \\ 3y+3z=6 \end{array}\right.$
			                                $\sim\left\{\begin{array}{r} x+z=3 \\ 2y+z=3 \\ \frac{3}{2}z=\frac{3}{2} \end{array}\right.\Rightarrow x=2,\;y=1$ e $z=1$.
			                                <br />
			                                (b) O sistema é SPI com solução $(-y,y,y)$, onde $y\in\mathbb{R}$:
			                                <br />
			                                $\left\{\begin{array}{r} 4x+3y+z=0 \\ 2x-y+3z=0 \\ x+2y-z=0 \end{array}\right.\sim\left\{\begin{array}{r} x+2y-z=0 \\ 2x-y+3z=0 \\ 4x+3y+z=0 \end{array}\right.$
			                                $\left\{\begin{array}{r} x+2y-z=0 \\ -5y+5z=0 \\ -5y+5z=0 \end{array}\right.\sim\left\{\begin{array}{r} x+2y-z=0 \\ -5y+5z=0 \end{array}\right.$
			                                <br />
			                                (c) O sistema é SI:
			                                <br />
			                                $\left\{\begin{array}{r} x+y+z=4 \\ 2x+5y-2z=3 \\ x+7y-7z=5 \end{array}\right.\sim \left\{\begin{array}{r} x+y+z=4 \\ 3y-4z=-5 \\ 6y-8z=1 \end{array}\right.$
			                                $\sim\left\{\begin{array}{r} x+y+z=4 \\ 3y-4z=-5 \\ 0=11 \end{array}\right.$
			                                <br />
			                                (d) O sistema é SPI com solução $(w-1,2z,z,w)$, onde $w,z\in\mathbb{R}$.
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
			                                2. Seja $a\in\mathbb{R}$. Discuta em função de $a$ os sistemas lineares abaixo e no caso em que existem soluções, determine-as.
			                                <br />
			                                (a) $\left\{\begin{array}{r} x+2y+z=3 \\ x+y-z=2 \\ x+y+(a^2-5)z=a \end{array}\right.$
			                                <br />
			                                (b) $\left\{\begin{array}{r} ax+y+z=1 \\ x+ay+z=1 \\ x+y+az=1 \end{array}\right.$
			                                <br />
			                                (c) $\left\{\begin{array}{r} x+2y+az=1 \\ 2x+ay+8z=3 \end{array}\right.$
			                            </p>
			                            <!-- Resposta -->
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="d_2_">
			                                Dica:
			                                <br />
			                                Nesta questão devemos ter o cuidado ao somar as equações lineares. Por exemplo, no item (a), o primeiro passo para escalonar o sistema linear é substituir a segunda equação pela soma da primeira multiplicada por $-1$ com a segunda equação e substituir a terceira equação pela soma da primeira multiplicada também por $-1$ com a terceira equação. Nesta última situação, ao realizar a soma $-z+(a^2-5)z$ obtemos $(a^2-6)z$.
			                            </p>
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_2_">
			                                Solução:
			                                <br />
			                                (a) $\left\{\begin{array}{r} x+2y+z=3 \\ x+y-z=2 \\ x+y+(a^2-5)z=a \end{array}\right.\sim \left\{\begin{array}{r} x+2y+z=3 \\ -y-2z=-1 \\ -y+(a^2-6)z=a-3 \end{array}\right.$
			                                $\sim \left\{\begin{array}{r} x+2y+z=3 \\ -y-2z=-1 \\ (a^2-4)z=a-2 \end{array}\right.$
			                                <br />
			                                Observe que a última equação do sistema anterior pode ser escrita na forma $(a+2)(a-2)z=a-2$. Daí, se $a=-2$ o sistema é SI, se $a=2$ o sistema é SPI e se $a\neq\pm2$ o sistema é SPD.
			                                <br />
			                                (b) O sistema linear é equivalente ao sistema escalonado $$\left\{\begin{array}{r} x+y+az=1 \\ (1-a)y+(1-a^2)z=1-a \\ -(a+2)(a-1)z=-(a-1)\end{array}\right.$$
			                                Assim, se $a=-2$ o sistema é SI, se $a=1$ o sistema é SPI e se $a\neq-2$ e $a\neq1$ o sistema é SPD.
			                                <br />
			                                (c) O sistema linear é equivalente ao sistema escalonado $$\left\{\begin{array}{r} x+2y+az=1 \\ (a-4)y+(8-2a)z=-1 \end{array}\right.$$
			                                Observe que a última equação pode ser escrita da forma $(a-4)(y-2z)=-1$. Assim, se $a=4$ o sistema é SI e se $a\neq4$ o sistema é SPI.
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
			                                3. Discuta, em função dos parâmetros $a$ e $b$, o sistema linear $\left\{\begin{array}{r} x+4y+3z=10 \\ 2x+7y-2z=10 \\ x+5y+az=b \end{array}\right.$.
			                            </p>
			                            <!-- Resposta -->
			                            <!--<p style="display: none; background: #eee; padding: 0.5cm " id="d_3_">
			                                Em construção: dica
			                            </p>-->
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_3_">
			                                Solução:
			                                <br />
			                                O sistema linear é equivalente ao sistema escalonado $$\left\{\begin{array}{r} x+4y+3z=10 \\ -y-8z=-10 \\ (a-11)z=b-20 \end{array}\right.$$
			                                Assim, se $a=11$ e $b=20$ o sistema é SPI, se $a=11$ e $b\neq20$ o sistema é SI e se $a\neq11$ e $b\in\mathbb{R}$ o sistema é SPD.
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
			                                4. Numa determinada livraria, a soma dos preços de aquisição de dois lápis e um estojo é R$\$$ 10,00. O preço do estojo é R$\$$ 5,00 mais barato que o preço de três lápis. Calcule a soma dos preços de aquisição de um estojo e de um lápis.
			                            </p>
			                            <!-- Resposta -->
			                            <!--<p style="display: none; background: #eee; padding: 0.5cm " id="d_4_">
			                                Em construção: dica
			                            </p>-->
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_4_">
			                                Solução:
			                                <br />
			                                Se $x$ é o preço do lápis e $y$ o preço do estojo, o sistema que corresponde o enunciado é dado por $$\left\{\begin{array}{r} 2x+y=10 \\ y+5=3x \end{array}\right.$$ e possui única solução $x=3$ e $y=4$.
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
			                                5. Quando meu irmão tinha a idade que tenho hoje, eu tinha 1/4 da idade que ele tem hoje. Quando eu tiver a idade que meu irmão tem hoje, as nossas idades somarão 95 anos. Calcule a soma de nossas idades hoje, em anos.
			                            </p>
			                            <!-- Resposta -->
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="d_5_">
			                                Dica:
			                                <br />
			                                Inicialmente, observe que o a primeira frase do enunciado se refere ao passado e a segunda ao futuro. Sendo assim, suponha que a primeira situação diz respeito a $k$ anos atrás e a segunda daqui a $q$ anos. Estes valores de $k$ e $q$ não são importantes, pois são facilmente eliminados, obtendo assim, o sistema $$\left\{\begin{array}{r} 8x-5y=0 \\ 3y-x=95 \end{array}\right.$$

			                            </p>
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_5_">
			                                Solução:
			                                <br />
			                                Note que o enunciado se refere as idades no passado, presente e futuro. Vamos denotar por $x$ minha idade e $y$ a idade do meu irmão hoje (presente). A primeira frase se refere ao passado, então, supondo que a situação se refere a $k$ anos atrás, obtemos $y-k=x$ e $x-k=\frac{1}{4}y$. Assim, $8x-5y=0$. Por outro lado, em relação a segunda frase que se refere ao futuro (suponha daqui a $q$ anos), $x+q=y$ e $(x+q)+(y+q)=95$, logo $3y-x=95$. Deste modo, obtemos o sistema $$\left\{\begin{array}{r} 8x-5y=0 \\ 3y-x=95 \end{array}\right.$$ que possui solução $(25,40)$.
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