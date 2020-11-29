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

									<h2>Diagonalização de operadores</h2>

									<hr class="major" />

			                            <!-- 1 -->
			                            <p id="q_1_p">
			                                1. Encontre os autovalores e autovetores das matrizes abaixo:
			                                <br />
			                                (a) $A=\begin{pmatrix} 2 & 1 \\ 3 & 4 \end{pmatrix}$
			                                <br />
			                                (b) $B=\begin{pmatrix} 1 & 3 & -3 \\ 0 & 4 & 0 \\ -3 & 3 & 1 \end{pmatrix}$
			                            </p>
			                            <!-- Resposta -->
			                            <!--<p style="display: none; background: #eee; padding: 0.5cm " id="d_1_">
			                                Em construção: dica
			                            </p>-->
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_1_">
			                                Solução:
			                                <br />
			                                (a) Fazendo $\det(A-\lambda I_2)=0$ obtemos o polinômio característico $p(\lambda)=\lambda^2-6\lambda+5$. Logo, as raízes deste polinômio são $\lambda_1=1$ e $\lambda_2=5$ (autovalores de $A$). Substituindo cada um destes autovalores na expressão $(A-\lambda I_2)v=O$, onde $v=\begin{pmatrix} x \\ y \end{pmatrix}$ e $O$ a matriz nula $2\times 1$, determinamos os autovetores $v$ associados aos autovalores respectivos. Assim,
			                                <br />
			                                Para $\lambda_1=1$,
			                                $$\begin{pmatrix} 1 & 1 \\ 3 & 3 \end{pmatrix}\begin{pmatrix} x \\ y \end{pmatrix}=\begin{pmatrix} 0 \\ 0 \end{pmatrix}\Rightarrow x+y=0\Rightarrow x=-y\Rightarrow v_1=\begin{pmatrix} -y \\ y \end{pmatrix},$$ onde $y\in\mathbb{R}^*$ ou $v_1=(-y,y)$ com $y\in\mathbb{R}^*$.
			                                <br />
			                                Para $\lambda_2=5$,
			                                $$\begin{pmatrix} -3 & 1 \\ 3 & -1 \end{pmatrix}\begin{pmatrix} x \\ y \end{pmatrix}=\begin{pmatrix} 0 \\ 0 \end{pmatrix}\Rightarrow -3x+y=0\Rightarrow y=3x\Rightarrow v_2=\begin{pmatrix} x \\ 3x \end{pmatrix},$$ onde $x\in\mathbb{R}^*$ ou $v_2=(x,3x)$ com $x\in\mathbb{R}^*$. 
			                                <br /><br />
			                                (b) O polinômio característico é $p(\lambda)=-\lambda^3+10\lambda^2-32\lambda+32=-(\lambda-4)^2(\lambda+2)$, logo os autovalores são $\lambda_1=-2$ e $\lambda_2=4$ (multiplicidade $2$). Para $\lambda_1=-2$, encontramos o sistema $$\begin{pmatrix} 3 & 3 & -3 \\ 0 & 6 & 0 \\ -3 & 3 & 3 \end{pmatrix}\begin{pmatrix} x \\ y \\ z \end{pmatrix}=\begin{pmatrix} 0 \\ 0 \\ 0 \end{pmatrix}\Rightarrow \left\{\begin{matrix} 3x+3y-3z=0 \\ 6y=0 \\ -3x+3y+3z=0 \end{matrix}\right.\Rightarrow \left\{\begin{matrix} y=0 \\ x=z \end{matrix}\right.\Rightarrow v_1=\begin{pmatrix} z \\ 0 \\ z \end{pmatrix},$$ onde $z\in\mathbb{R}^*$.
			                                <br />
			                                Por outro lado, considerando $\lambda_2=4$ obtemos $$\begin{pmatrix} -3 & 3 & -3 \\ 0 & 0 & 0 \\ -3 & 3 & -3 \end{pmatrix}\begin{pmatrix} x \\ y \\ z \end{pmatrix}=\begin{pmatrix} 0 \\ 0 \\ 0 \end{pmatrix}\Rightarrow \begin{matrix} -3x+3y-3z=0 \end{matrix}\Rightarrow \begin{matrix} x=y-z \end{matrix}\Rightarrow v_2=\begin{pmatrix} y-z \\ y \\ z \end{pmatrix},$$ onde $y,z\in\mathbb{R}$ sendo $y$ e $z$ não simultaneamente nulos.
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
			                                2. Determine os autovalores e autovetores dos operadores lineares abaixo:
			                                <br />
			                                (a) $F:\mathbb{R}^2\to\mathbb{R}^2,\; F(x,y)=(x+y,x-y)$
			                                <br />
			                                (b) $F:\mathbb{R}^3\to\mathbb{R}^3,\; F(x,y,z)=(x,-2x-y,2x+y+2z)$
			                            </p>
			                            <!-- Resposta -->
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="d_2_">
			                                Dica:
			                                <br />
			                                Por definição, os autovalores e autovetores de operadores lineares são os autovalores e autovetores das matrizes associadas, sendo que a base adotada para a obtenção das matrizes não interfere no resultado. Por este motivo, adote a base canônica dos espaços vetoriais considerados para simplificar os cálculos.
			                            </p>
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_2_">
			                                Solução:
			                                <br />
			                                (a) Em relação a base canônica do $\mathbb{R}^2$, $[F]=\begin{pmatrix} 1 & 1 \\ 1 & -1 \end{pmatrix}$. Logo, $p(\lambda)=\lambda^2-2=(\lambda+\sqrt{2})(\lambda-\sqrt{2})\Rightarrow \lambda_1=\sqrt{2}$ e $\lambda_2=-\sqrt{2}$. Para $\lambda_1=\sqrt{2}$, encontramos $v_1=((1+\sqrt{2})y,y)$ com $y\in\mathbb{R}^*$ e para $\lambda_2=-\sqrt{2}$ obtemos $v_2=((1-\sqrt{2})y,y)$ com $y\in\mathbb{R}^*$.
			                                <br /><br />
			                                (b) Em relação a base canônica do $\mathbb{R}^3$, $[F]=\begin{pmatrix} 1 & 0 & 0 \\ -2 & -1 & 0 \\ 2 & 1 & 2 \end{pmatrix}$. Logo, $p(\lambda)=-\lambda^3+2\lambda^2+\lambda-2=(\lambda-2)(\lambda-1)(\lambda+1)\Rightarrow \lambda_1=2$, $\lambda_2=1$ e $\lambda_3=-1$. Sendo assim, $v_1=(0,0,z)$, $v_2=(-z,z,z)$ e $v_3=(0,-3z,z)$ ($z\in\mathbb{R}^*$) são os autovetores associados aos autovalores $\lambda_1=2$, $\lambda_2=1$ e $\lambda_3=-1$, respectivamente.
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
			                                3. Seja $V=\mathcal{C}^{\infty}(a,b)$ o espaço vetorial real das funções contínuas definidas no intervalo $(a,b)$ que possuem derivadas contínuas de todas as ordens. Determine os autovalores e autovetores do operador linear $D:V\to V$ definido por $D(f(x))=f'(x)$, .
			                            </p>
			                            <!-- Resposta -->
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="d_3_">
			                                Dica:
			                                <br />
			                                Use a definição formal de autovalor e autovetor para operador linear.
			                            </p>
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_3_">
			                                Solução:
			                                <br />
			                                Utilizando a definição formal de autovalores e autovetores, devemos determinar as funções $f$ (autovetores), na variável $x$, tais que $D(f)=\lambda f$, onde $\lambda$ é o autovalor associado ao autovetor $f$. Assim, $$D(f)=\lambda f\Rightarrow f'=\lambda f\Rightarrow \frac{f'}{f}=\lambda\Rightarrow (\ln f)'=\lambda\Rightarrow \ln f=\lambda x+c\Rightarrow f=e^{\lambda x+c}\Rightarrow f(x)=C\cdot e^{\lambda x},$$ \noi onde $C=e^c$. Este cálculo significa que qualquer número real $\lambda$ é autovalor de $D$ com autovetor associado $f(x)=C\cdot e^{\lambda x}$, sendo $C\in\mathbb{R}^*$.  
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
			                                4. Verifique se existe uma base de autovetores para os operadores lineares $F:\mathbb{R}^3\to\mathbb{R}^3$ a seguir:
			                                <br />
			                                (a) $F(x,y,z)=(x,3y-z,-4y+3z)$
			                                <br />
			                                (b) $F(x,y,z)=(x-y+z,2y+3y+z,2y+3z)$
			                            </p>
			                            <!-- Resposta -->
			                            <!--<p style="display: none; background: #eee; padding: 0.5cm " id="d_4_">
			                                Em construção: dica
			                            </p>-->
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_4_">
			                                Solução:
			                                <br />
			                                (a) Os autovalores de $F$ são $\lambda_1=1$ com multiplicidade $2$ e $\lambda_2=5$. Assim, os autovetores associados aos autovalores $\lambda_1$ e $\lambda_2$ são, respectivamente, $v_1=(x,z,2z)$ e $v_2=(0,-z,2z)$. Logo, $B=\{(1,0,0),(0,1,2),(0,-1,2),\}$ é uma base para $\mathbb{R}^3$ formada por autovetores de $F$. Observe que, neste caso, $F$ é diagonalizável.
			                                <br />
			                                (b) Os autovalores de $F$ são $\lambda_1=1$ com multiplicidade $2$ e $\lambda_2=4$. Assim, os autovetores associados aos autovalores $\lambda_1$ e $\lambda_2$ são, respectivamente, $v_1=(x,0,0)$ e $v_2=(z,3z,6z)$. Logo, não é possível obter uma base de $\mathbb{R}^3$ formada por autovetores de $F$, isto é, $F$ não é diagonalizável.
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
			                                5. Determine o polinômio minimal da matriz $A=\begin{pmatrix} 1 & 1 & 1 \\ 1 & 1 & 1 \\ 1 & 1 & 1 \end{pmatrix}$. A matriz $A$ é diagonalizável?
			                            </p>
			                            <!-- Resposta -->
			                            <!--<p style="display: none; background: #eee; padding: 0.5cm " id="d_5_">
			                                Em construção: dica
			                            </p>-->
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_5_">
			                                Solução:
			                                <br />
			                                O polinômio característico de $A$ é $p(\lambda)=-\lambda^3+3\lambda^2=-\lambda^2(\lambda-3)$. Assim, as possibilidades para polinômio minimal são $m_1(\lambda)=\lambda(\lambda-3)$ ou $m_2(\lambda)=\lambda^2(\lambda-3)$, mas $m_1(A)=0$ e, portanto, $A$ é diagonalizável.
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
			                            <p id="q_6_p">
			                                6. Se $A$ é uma matriz quadrada, prove que o termo constante do polinômio característico de $A$ é igual ao determinante de $A$.
			                            </p>
			                            <!-- Resposta -->
			                            <!--<p style="display: none; background: #eee; padding: 0.5cm " id="d_6_">
			                                Em construção: dica
			                            </p>-->
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_6_">
			                                Solução:
			                                <br />
			                                Sabe-se que $p(\lambda)=\det(A-\lambda I)=(-1)^n(\lambda-\lambda_1)\cdots(\lambda-\lambda_n)$, onde $\lambda_1,\ldots,\lambda_n$ são os autovalores de $A$ e $n$ é a ordem da matriz. Além disso, $p(0)$ é o termo independente do polinômio característico na qual vamos denotá-lo por $c_0$. Daí, $c_0=p(0)=\det(A-0\cdot I)=\det(A)$. Também, $$c_0=p(0)=(-1)^n(0-\lambda_1)\cdots(0-\lambda_n)=(-1)(-\lambda_1)\cdots(-1)(-\lambda_n)=\lambda_1\cdots\lambda_n,$$ ou seja, $\det(A)=\lambda_1\cdots\lambda_n$.
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

			                            <!-- 7 -->
			                            <p id="q_7_p">
			                                7. Considere a transformação linear $F:M_2(\mathbb{R})\to M_2(\mathbb{R})$ definida por $F(A)=A+A^t$.
			                                <br />
			                                (a) Escolha uma base para $M_2(\mathbb{R})$ e determine a matriz que representa $F$ nessa base.
			                                <br />
			                                (b) Calcule os autovalores e autovetores de $F$.
			                                <br />
			                                (c) Diga se $F$ pode ou não ser diagonalizável. Em caso afirmativo, indique a base e a matriz diagonal que representa $F$.
			                            </p>
			                            <!-- Resposta -->
			                            <!--<p style="display: none; background: #eee; padding: 0.5cm " id="d_7_">
			                                Em construção: dica
			                            </p>-->
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_7_">
			                                Solução:
			                                <br />
			                                (a) A base adotada será a base canônica de $M_2(\mathbb{R})$: $$B=\left\{E_1=\begin{pmatrix} 1 & 0 \\ 0 & 0 \end{pmatrix},E_2=\begin{pmatrix} 0 & 1 \\ 0 & 0 \end{pmatrix},E_3=\begin{pmatrix} 0 & 0 \\ 1 & 0 \end{pmatrix},E_4=\begin{pmatrix} 0 & 0 \\ 0 & 1 \end{pmatrix}\right\}.$$
			                                Sendo assim, para a matriz genérica $A=\begin{pmatrix} a & b \\ c & d \end{pmatrix}$, obtemos que $F(A)=\begin{pmatrix} 2a & b+c \\ b+c & 2d \end{pmatrix}$. Logo, $F(E_1)=2E_1$, $F(E_2)=E_2+E_3$, $F(E_3)=E_2+E_3$ e $F(E_4)=2E_4$ e, portanto, $$[F]_B=\begin{pmatrix} 2 & 0 & 0 & 0 \\ 0 & 1 & 1 & 0 \\ 0 & 1 & 1 & 0 \\ 0 & 0 & 0 & 2 \end{pmatrix}.$$
			                                <br />
			                                (b) O polinômio característico será $p(\lambda)=\lambda^4-6\lambda^3+12\lambda^2-8\lambda=\lambda(\lambda-2)^3$. Daí, os autovalores são $\lambda_1=0$ e $\lambda_2=2$ (com multiplicidade $3$). Para $\lambda_1=0$, o autovalor associado será $v_1=(0,-z,z,0)$, onde $z\in\mathbb{R}^*$, isto significa que as matrizes da forma $\begin{pmatrix} 0 & -z \\ z & 0 \end{pmatrix}$ são autovetores de $F$ associados ao autovalor $0$. Para $\lambda_2=2$, o autovalor associado será da forma $v_2=(x,z,z,w)$, onde $x$, $y$ e $z$ são números reais não simultaneamente nulos.
			                                <br />
			                                (c) Pelo item (b), $F$ é diagonalizável, pois $$\begin{pmatrix} 0 & -1 \\ 1 & 0 \end{pmatrix},\begin{pmatrix} 1 & 0 \\ 0 & 0 \end{pmatrix},\begin{pmatrix} 0 & 1 \\ 1 & 0 \end{pmatrix},\begin{pmatrix} 0 & 0 \\ 0 & 1 \end{pmatrix}$$ é uma base de $M_2(\mathbb{R})$ formada por autovetores de $F$. Neste caso, a matriz que representa o operador linear $F$ será $$\begin{pmatrix} 0 & 0 & 0 & 0 \\ 0 & 2 & 0 & 0 \\ 0 & 0 & 2 & 0 \\ 0 & 0 & 0 & 2 \end{pmatrix}.$$
			                            </p>
			                            <!--<p style="display: none; background: #eee; padding: 0.5cm " id="v_7_">
			                                Em construção: videoaula
			                            </p>-->
			                            <!--<p class="button primary" id="d_7" onclick="btn2(this.id)" >
			                                DICA
			                            </p>-->
			                            <p class="button primary" id="r_7" onclick="btn2(this.id)" >
			                                SOLUÇÃO
			                            </p>
			                            <!--<p class="button primary" id="v_7" onclick="btn2(this.id)" >
			                                VIDEOAULA
			                            </p>-->

			                            <!-- 7 -->
			                            <p id="q_8_p">
			                                8. Mostre que uma matriz quadrada $A$ de ordem $n$ e a sua transposta $A^t$ possuem os mesmos autovalores.
			                            </p>
			                            <!-- Resposta -->
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="d_8_">
			                                Dica:
			                                <br />
			                                Mostre que os polinômios característicos das duas matrizes são iguais.
			                            </p>
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_8_">
			                                Solução:
			                                <br />
			                                Seja $p_t(\lambda)$ o polinômio característico da matriz $A^t$. Assim,
			                                \begin{eqnarray*}
			                                	p_t(\lambda) &=& |A^t-\lambda I_n|\;=\;|A^t-\lambda I_n^t|\\
			                                	&=& |(A^t-\lambda I_n^t)^t|\;=\;|(A^t)^t+(-\lambda I_n^t)^t|\\
			                                	&=& |A-\lambda I_n|\;=\;p(\lambda)
			                                \end{eqnarray*}
			                            </p>
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="v_8_">
			                                Videoaula:
			                                <br />
			                                <iframe width="875" height="425" src="https://www.youtube.com/embed/BlU6boLbLvE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			                            </p>
			                            <p class="button primary" id="d_8" onclick="btn2(this.id)" >
			                                DICA
			                            </p>
			                            <p class="button primary" id="r_8" onclick="btn2(this.id)" >
			                                SOLUÇÃO
			                            </p>
			                            <p class="button primary" id="v_7" onclick="btn2(this.id)" >
			                                VIDEOAULA
			                            </p>











			                            

 
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