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

									<h2>Matrizes e determinantes</h2>

									<hr class="major" />


			                            <!-- 1 -->
			                            <p id="q_1_p">
			                                1. Considere as matrizes $A=(a_{ij})_{3\times 2}$, $B=(b_{ij})_{3\times 2}$ e $C=(c_{ij})_{2\times 2}$ definidas pelas sentenças: $a_{ij}=j-i$, $b_{ij}=2i$ e $c_{ij}=i^{j}$. Calcule:
			                                <br />
			                                (a) $C^2$
			                                <br />
			                                (b) $B^t$
			                                <br />
			                                (c) $AC$
			                                <br />
			                                (d) $C(A+B)^t$
			                            </p>
			                            <!-- Resposta -->
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="d_1_">
			                                Dica:
			                                <br />
			                                $A=\begin{pmatrix} 2 & 3 \\ 3 & 4 \\ 4 & 5 \end{pmatrix}$, $B=\begin{pmatrix} 2 & 2 \\ 4 & 4 \\ 6 & 6 \end{pmatrix}$ e $C=\begin{pmatrix} 1 & 1 \\ 2 & 4 \end{pmatrix}$.
			                            </p>
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_1_">
			                                Solução:
			                                <br />
			                                (a) $C^2=\begin{pmatrix} 3 & 5 \\ 10 & 18 \end{pmatrix}$
			                                <br />
			                                (b) $B^t=\begin{pmatrix} 2 & 4 & 6 \\ 2 & 4 & 6 \end{pmatrix}$
			                                <br />
			                                (c) $AC=\begin{pmatrix} 2 & 4 \\ -1 & 1 \\ -4 & -6 \end{pmatrix}$
			                                <br />
			                                (d) $C(A+B)^t=\begin{pmatrix} 5 & 7 & 9 \\ 16 & 22 & 28 \end{pmatrix}$
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
			                                2. Mostre que a matriz inversa de $A=\begin{pmatrix} 1 & 0 & 2 \\ 2 & -1 & 3 \\ 4 & 1 & 8 \end{pmatrix}$ é a matriz $B=\begin{pmatrix} -11 & 2 & 2 \\ -4 & 0 & 1 \\ 6 & -1 & -1 \end{pmatrix}$.
			                            </p>
			                            <!-- Resposta -->
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="d_2_">
			                                Dica:
			                                <br />
			                                Sejam $A$ e $B$ matrizes quadradas de ordem $n$. Dizemos que a matriz $B$ é a inversa da matriz $A$ quando $A\cdot B=B\cdot A=I_n$, onde $I_n$ é a matriz identidade de ordem $n$.
			                            </p>
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_2_">
			                                Solução:
			                                <br />
			                                $A\cdot B=B\cdot A=I_3$.
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
			                                3. Verifique se as matrizes abaixo são inversíveis e, caso positivo, determine a matriz inversa.
			                                <br />
			                                (a) $A=\begin{pmatrix} 1 & 1 & 1 \\ 2 & 1 & 4 \\ 2 & 3 & 5 \end{pmatrix}$
			                                <br />
			                                (b) $B=\begin{pmatrix} 1 & 2 & 3 \\ 1 & 1 & 2 \\ 0 & 1 & 1 \end{pmatrix}$
			                                <br />
			                                (c) $C=\begin{pmatrix} 1 & 0 & 1 \\ 0 & 1 & -1 \\ 3 & 3 & 3 \end{pmatrix}$
			                                <br />
			                                (d) $D=\begin{pmatrix} 1 & 2 \\ 2 & 1 \end{pmatrix}$
			                            </p>
			                            <!-- Resposta -->
			                            <!--<p style="display: none; background: #eee; padding: 0.5cm " id="d_3_">
			                                Em construção: dica
			                            </p>-->
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_3_">
			                                Solução:
			                                <br />
			                                (a) $\det(A)=-5\Rightarrow$ $A$ é inversível. Para determinar a inversa da matriz $A$ vamos utilizar as operações elementares:
			                                <br />
			                                $\left(\begin{matrix} 1 & 1 & 1 \\ 2 & 1 & 4 \\ 2 & 3 & 5 \end{matrix}\begin{array}{l:} \\ \\ \\ \end{array}\;\;\;\begin{matrix} 1 & 1 & 0 \\ 0 & 1 & 1 \\ 1 & 0 & 2 \end{matrix}\right)\sim$
			                                $\left(\begin{matrix} 1 & 1 & 1 \\ 0 & -1 & 2 \\ 0 & 1 & 3 \end{matrix}\begin{array}{l:} \\ \\ \\ \end{array}\;\;\;\begin{matrix} 1 & 1 & 0 \\ -2 & 1 & 0 \\ -2 & 0 & 1 \end{matrix}\right)\sim$

			                                $\left(\begin{matrix} 1 & 0 & 3 \\ 0 & 1 & -2 \\ 0 & 0 & 5 \end{matrix}\begin{array}{l:} \\ \\ \\ \end{array}\;\;\;\begin{matrix} -1 & 1 & 0 \\ 2 & -1 & 0 \\ -4 & 1 & 1 \end{matrix}\right)\sim$
			                                $\left(\begin{matrix} 1 & 0 & 3 \\ 0 & 1 & -2 \\ 0 & 0 & 1 \end{matrix}\begin{array}{l:} \\ \\ \\ \end{array}\;\;\;\begin{matrix} -1 & 1 & 0 \\ 2 & -1 & 0 \\ -4/5 & 1/5 & 1/5 \end{matrix}\right)\sim$

			                                $\left(\begin{matrix} 1 & 0 & 0 \\ 0 & 1 & 0 \\ 0 & 0 & 1 \end{matrix}\begin{array}{l:} \\ \\ \\ \end{array}\;\;\;\begin{matrix} 7/5 & 2/5 & -3/5 \\ 2/5 & -3/5 & 2/5 \\ -4/5 & 1/5 & 1/5 \end{matrix}\right)$
			                                <br />
			                                (b) $\det(B)=0\Rightarrow$ a matriz $B$ não é inversível.
			                                <br />
			                                (c) $\det(C)=3\Rightarrow$ a matriz $C$ é inversível e $C^{-1}=\begin{pmatrix} 2 & 1 & -1/3 \\ -1 & 0 & 1/3 \\ -1 & -1 & 1/3 \end{pmatrix}$.
			                                <br />
			                                (d) $\det(D)=-3\Rightarrow$ a matriz $D$ é inversível e $D^{-1}=\begin{pmatrix} -1/3 & 2/3 \\ 2/3 & -1/3 \end{pmatrix}$.
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
			                                4. Calcule o determinante das matrizes abaixo:
			                                <br />
			                                (a) $A=\begin{pmatrix} 3 & -1 \\ 4 & 2 \end{pmatrix}$
			                                <br />
			                                (b) $B=\begin{pmatrix} 1 & 3 & 4 \\ 5 & 2 & -3 \\ 1 & 4 & 2 \end{pmatrix}$
			                                <br />
			                                (c) $C=\begin{pmatrix} 2 & 0 & -1 & 0 \\ 3 & -1 & 4 & 0 \\ 1 & 1 & 5 & -3 \\ 0 & 2 & 0 & -3 \end{pmatrix}$
			                                <br />
			                                (d) $D=\begin{pmatrix} 0 & a & b & 1 \\ 0 & 1 & 0 & 0 \\ a & a & 0 & b \\ 1 & b & a & 0 \end{pmatrix}$
			                            </p>
			                            <!-- Resposta -->
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="d_4_">
			                                Dica:
			                                <br />
			                                (d) Aplique a regra de Laplace na segunda linha da matriz.
			                            </p>
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_4_">
			                                Solução:
			                                <br />
			                                (a) $\det(A)=10$
			                                <br />
			                                (b) $\det(B)=49$
			                                <br />
			                                (c) $\det(C)=0$
			                                <br />
			                                (d) $\det(D)=1\cdot (-1)^{2+2}\cdot \begin{vmatrix} 0 & b & 1 \\ a & 0 & b \\ 1 & a & 0 \end{vmatrix}=b^2-a^2$
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

			                            <!-- 5 -->
			                            <p id="q_5_p">
			                                5. Considere as matrizes $A=\begin{pmatrix} 1 & 0 & 1 \\ 0 & 1 & 5 \\ 3 & 0 & 1 \end{pmatrix}$ e $B=\begin{pmatrix} 2 & 2 & 2 \\ 0 & 2 & 2 \\ 1 & 1 & 2 \end{pmatrix}.$ Calcule:
			                                <br />
			                                (a) $\textrm{det}(3A)$
			                                <br />
			                                (b) $\textrm{det}(A^3B^2)$
			                                <br />
			                                (c) $\textrm{det}(A^{-1}B^t)$
			                                <br />
			                                (d) $\textrm{det}(A^4B^{-2})$
			                            </p>
			                            <!-- Resposta -->
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="d_5_">
			                                Dica:
			                                <br />
			                                Use as propriedades de determinantes.
			                            </p>
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_5_">
			                                Solução:
			                                <br />
			                                (a) $\det(3A)=3^3\cdot\det(A)=3^3\cdot\det(A)=27\cdot(-2)=-54$.
			                                <br />
			                                (b) $\det(A^3B^2)=\det(A^3)\cdot\det(B^2)=\det(A)^3\cdot\det(B)^2=(-2)^3\cdot4^2=-128$.
			                                <br />
			                                (c) $\det(A^{-1}B^t)=\det(A^{-1}\det(B^t)=\frac{1}{\det(A)}\det(B)=-2$.
			                                <br />
			                                (d) $\det(A^4B^{-2})=\det(A^4)\det(B^{-2})=\det(A)^4\frac{1}{\det(B)^2}=1$.
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
			                                6. Se $A=\begin{pmatrix} 1 & \cos a & \cos 2a \\ \cos a & \cos 2a & \cos 3a \\ \cos 2a & \cos 3a & \cos 4a \end{pmatrix}$, prove que $\det(A)=0$.
			                            </p>
			                            <!-- Resposta -->
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="d_6_">
			                                Dica:
			                                <br />
			                                Use a fórmula $\cos(a+b)=\cos a\cos b-\mathrm{sen}\,a\,\mathrm{sen}\,b$ repetidas vezes e as propriedades de determinantes: 
			                                <br />
			                                (i) O determinante não se altera se somarmos a uma linha outra linha multiplicada por uma constante.
			                                <br />
			                                (ii) O determinante de uma matriz que possui duas linhas (ou colunas) iguais é igual a zero.
			                                <br />
			                                (iii) Se multiplicarmos uma linha da matriz por uma contante, o determinante fica multiplicado por esta constante.
			                                <br />
			                            </p>
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_6_">
			                                Solução:
			                                <br />
			                                $\begin{vmatrix} 1 & \cos a & \cos 2a \\ \cos a & \cos 2a & \cos 3a \\ \cos 2a & cos 3a & \cos 4a \end{vmatrix}=\begin{vmatrix} 1 & \cos a & \cos 2a \\ 0 & -(\mathrm{sen}\,a)^2 & -\mathrm{sen}\,a\, \mathrm{sen}\,2a \\ 0 & -\mathrm{sen}\,a\,\mathrm{sen}\,2a & -(\mathrm{sen}\,2a)^2 \end{vmatrix}=$ $(-\mathrm{sen}\,a)\cdot(-\mathrm{sen}\, 2a)\cdot\begin{vmatrix} 1 & \cos a & \cos 2a \\ 0 & \mathrm{sen}\,a & \mathrm{sen}\,2a \\ 0 & \mathrm{sen}\,a & \mathrm{sen}\,2a \end{vmatrix}=\mathrm{sen}\,a\cdot\mathrm{sen}\,2a\cdot 0=0$.
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