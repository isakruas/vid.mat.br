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

									<h2>Espaços vetoriais com produto interno</h2>

									<hr class="major" />

			                            <!-- 1 -->
			                            <p id="q_1_p">
			                                1. Considere $u=(1,2)$, $v=(-3,5)$ e $w=(4,-1)$ elemento do $\mathbb{R}^2$. Em relação ao produto interno usual, calcule:
			                                <br />
			                                (a) $\left\langle u,v\right\rangle$
			                                <br />
			                                (b) $\left\langle -2w,u\right\rangle$
			                                <br />
			                                (c) $\left\langle u+v,w\right\rangle$
			                                <br />
			                                (d) $\left\lVert v\right\rVert$
			                            </p>
			                            <!-- Resposta -->
			                            <!--<p style="display: none; background: #eee; padding: 0.5cm " id="d_1_">
			                                Em construção: dica
			                            </p>-->
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_1_">
			                                Solução:
			                                <br />
			                                (a) $\left\langle u,v\right\rangle=1\cdot(-3)+2\cdot 5=7$
			                                <br />
			                                (b) $\left\langle -2w,u\right\rangle=-2\left\langle w,u\right\rangle=-2\cdot(4\cdot 1+(-1)\cdot 2)=-4$
			                                <br />
			                                (c) $\left\langle u+v,w\right\rangle=-15$
			                                <br />
			                                (d) $\left\lVert v\right\rVert=\sqrt{\left\langle v,v\right\rangle}=\sqrt{34}$
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
			                                2. (a) Prove que a função $\left\langle (u_1,u_2),(v_1,v_2)\right\rangle=u_1v_1-u_1v_2-u_2v_1+3u_2v_2$ define um produto interno sobre $\mathbb{R}^2$.
			                                <br />
			                                (b) Refaça a questão $1$ utilizando o produto interno definido no item (a).
			                            </p>
			                            <!-- Resposta -->
			                            <!--<p style="display: none; background: #eee; padding: 0.5cm " id="d_2_">
			                                Em construção: dica
			                            </p>-->
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_2_">
			                                Solução:
			                                <br />
			                                (a) Sejam $\alpha\in\mathbb{R}$ e $u=(u_1,u_2)$, $v=(v_1,v_2)$ e $w=(w_1,w_2)$ elementos genéricos de $\mathbb{R}^2$. Logo,
			                                <br />
			                                \begin{eqnarray*}
			                                	\left\langle u+v,w\right\rangle &=& \left\langle (u_1+v_1,u_2+v_2),(w_1,w_2)\right\rangle\\
			                                	&=& (u_1+v_1)w_1-(u_1+v_1)w_2-(u_2+v_2)w_1+3(u_2+v_2)w_2\\
			                                	&=& (u_1w_1-u_1w_2-u_2w_1+3u_2w_2) + (w_1v_1-w_1v_2-w_2v_1+3w_2v_2)\\
			                                	&=& \left\langle u,w\right\rangle+\left\langle v,w\right\rangle\\
			                                	\\
			                                	\left\langle \alpha u,v\right\rangle &=& \left\langle (\alpha u_1,\alpha u_2),(v_1,v_2)\right\rangle\\
			                                	&=& (\alpha u_1)v_1-(\alpha u_1)v_2-(\alpha u_2)v_1+3(\alpha u_2)v_2\\
			                                	&=& \alpha(u_1v_1-u_1v_2-u_2v_1+3u_2v_2)\\
			                                	&=& \alpha\left\langle u,v\right\rangle\\
			                                	\\
			                                	\left\langle u,v\right\rangle &=& \left\langle u_1v_1-u_1v_2-u_2v_1+3u_2v_2 \right\rangle\\
			                                	&=& v_1u_1-v_1u_2-v_2u_1+3v_2u_2\\
			                                	&=& \left\langle v,u\right\rangle
			                                \end{eqnarray*}

			                                Observe que $$\left\langle u,u\right\rangle=u_1^2-2u_1u_2+3u_2^2=u_1^2-2u_1u_2+u_2^2+2u_2^2=(u_1-u_2)^2+2u_2^2\geq0.$$ Além disso, $\left\langle u,u\right\rangle=0\Leftrightarrow u_1-u_2=0$ e $u_2=0\Leftrightarrow u_1=u_2=0\Leftrightarrow u=(0,0).$
			                                <br />
			                                (b) $\left\langle u,v\right\rangle=28$, $\left\langle -2w,u\right\rangle=18$, $\left\langle u+v,w\right\rangle=-59$ e $\left\lVert v\right\rVert=\sqrt{114}$.
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
			                                3. Em cada caso, verifique se a função dada define um produto interno sobre $\mathbb{R}^2$.
			                                <br />               
			                                (a) $\displaystyle\left\langle (u_1,u_2),(v_1,v_2)\right\rangle=u_1v_1$.
			                                <br />
			                                (b) $\displaystyle\left\langle (u_1,u_2),(v_1,v_2)\right\rangle=u_1v_2+u_2v_1+1$.
			                                <br />
			                                (c) $\displaystyle\left\langle (u_1,u_2),(v_1,v_2)\right\rangle=2u_1v_1-3u_2v_2$
			                            </p>
			                            <!-- Resposta -->
			                            <!--<p style="display: none; background: #eee; padding: 0.5cm " id="d_3_">
			                                Em construção: dica
			                            </p>-->
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_3_">
			                                Solução:
			                                <br />
			                                (a) Não é produto interno, pois $\left\langle (0,1),(0,1)\right\rangle=0$, mas $(0,1)$ não é o vetor nulo de $\mathbb{R}^2$.
			                                <br />
			                                (b) Não é produto interno, pois se $u=(3,-1)$, $v=(-2,-2)$ e $w=(1,5)$ então $\left\langle u+v,w\right\rangle=3$, $\left\langle u,w\right\rangle=14$ e $\left\langle v,w\right\rangle=-12$. Ou seja, $\left\langle u+v,w\right\rangle\neq\left\langle u,w\right\rangle+\left\langle v,w\right\rangle$.
			                                <br />
			                                (c) Não é produto interno, pois $\left\langle (1,1),(1,1)\right\rangle=-1$.
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
			                                4. Sejam $A$ e $B$ matrizes de $M_2(\mathbb{R})$.
			                                <br />
			                                (a) Mostre que a aplicação $\left\langle A,B \right\rangle=\textrm{tr}(B^tA)$ é um produto interno, onde $\textrm{tr}()$ indica o traço, que é a soma dos elementos da diagonal.
			                                <br />
			                                (b) Usando o produto interno acima, calcule a norma da matriz  $A=\begin{pmatrix} 1 & 1 \\ -2 & 3 \end{pmatrix}$.
			                                <br />
			                                (c) Exiba uma base ortonormal segundo este produto interno, a partir da base $$\left\{\begin{pmatrix} 1 & 0 \\ 0 & 1 \end{pmatrix},\begin{pmatrix} 1 & 1 \\ 0 & 0 \end{pmatrix},\begin{pmatrix} 1 & 1 \\ 1 & 0 \end{pmatrix},\begin{pmatrix} 1 & 1 \\ 1 & 1 \end{pmatrix}\right\}.$$
			                            </p>
			                            <!-- Resposta -->
			                            <!--<p style="display: none; background: #eee; padding: 0.5cm " id="d_4_">
			                                Em construção: dica
			                            </p>-->
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_4_">
			                                Solução:
			                                <br />
			                                (a) Faremos a demostração para o espaço vetorial $M_n(\mathbb{R})$. Sendo assim, considere $A,B\in M_n(\mathbb{R})$.
			                                \begin{eqnarray*}
			                                	\left\langle A+C,B \right\rangle &=& \textrm{tr}(B^t(A+C))\;=\;\textrm{tr}(B^tA+B^tC)\\
			                                	&=& \textrm{tr}(B^tA)+\textrm{tr}(B^tC)\;=\;\left\langle A,B \right\rangle+\left\langle C,B \right\rangle\\
			                                	\\
			                                	\left\langle \alpha A,B \right\rangle &=& \textrm{tr}(B^t(\alpha A))=\textrm{tr}(\alpha(B^tA))\;=\;\alpha \textrm{tr}(B^tA)\\
			                                	&=& \alpha\left\langle A,B \right\rangle\\
			                                	\\
			                                	\left\langle A,B \right\rangle &=& \textrm{tr}(B^tA)\;=\;\textrm{tr}((B^tA)^t)\\
			                                	&=& \textrm{tr}(A^t(B^t)^t)\;=\;\textrm{tr}(A^tB)\;=\;\left\langle B,A \right\rangle\\
			                                \end{eqnarray*}
											
											Além disso, $\displaystyle\left\langle A,A \right\rangle=\textrm{tr}(A^tA)=\sum_{i,j=1}^n a_{ij}^2\geq0$ e  $\left\langle A,A \right\rangle=0 \Leftrightarrow a_{ij}=0,\;\forall i,j\in\{1,\ldots,n\}\Leftrightarrow A=O.$
											<br />
											(b) $\left\lVert A \right\rVert=\sqrt{\left\langle A,A \right\rangle}=\sqrt{\textrm{tr}(A^tA)}=\sqrt{\textrm{tr}\begin{pmatrix} 5 & -5 \\ -5 & 10 \end{pmatrix}}=\sqrt{15}.$
											<br />
											(c) Considere $$\left\{v_1=\begin{pmatrix} 1 & 0 \\ 0 & 1 \end{pmatrix},v_2=\begin{pmatrix} 1 & 1 \\ 0 & 0 \end{pmatrix},v_3=\begin{pmatrix} 1 & 1 \\ 1 & 0 \end{pmatrix},v_4=\begin{pmatrix} 1 & 1 \\ 1 & 1 \end{pmatrix}\right\}.$$ Aplicando o processo de ortonormalização de Gram-Schmidt, temos que
											\begin{eqnarray*}
												w_1 &=& \begin{pmatrix} 1 & 0 \\ 0 & 1 \end{pmatrix}\\
												\\
												w_2 &=& \begin{pmatrix} 1 & 1 \\ 0 & 0 \end{pmatrix}-\frac{1}{2}\begin{pmatrix} 1 & 0 \\ 0 & 1 \end{pmatrix} \;\;=\;\; \begin{pmatrix} 1/2 & 1 \\ 0 & -1/2 \end{pmatrix}\\
												\\
												w_3 &=& \begin{pmatrix} 1 & 1 \\ 1 & 0 \end{pmatrix}-\frac{1}{2}\begin{pmatrix} 1 & 0 \\ 0 & 1 \end{pmatrix}-\frac{3/2}{3/2}\begin{pmatrix} 1/2 & 1 \\ 0 & -1/2 \end{pmatrix}\;\;=\;\; \begin{pmatrix} 0 & 0 \\ 1 & 0 \end{pmatrix}\\
												\\
												w_4 &=& \begin{pmatrix} 1 & 1 \\ 1 & 1 \end{pmatrix}-\frac{2}{2}\begin{pmatrix} 1 & 0 \\ 0 & 1 \end{pmatrix}-\frac{1}{3/2}\begin{pmatrix} 1/2 & 1 \\ 0 & -1/2 \end{pmatrix}-\frac{1}{1}\begin{pmatrix} 0 & 0 \\ 1 & 0 \end{pmatrix}\;\;=\;\;\begin{pmatrix} -1/3 & 1/3 \\ 0 & 1/3 \end{pmatrix}\\
											\end{eqnarray*}
											Assim, a base $\{w_1,w_2,w_3,w_4\}$ obtida é ortogonal. Para que ela seja ortonormal, basta dividir cada elemento da base por sua respectiva norma, logo $$\begin{pmatrix} 1/\sqrt{2} & 0 \\ 0 & 1/\sqrt{2} \end{pmatrix},\begin{pmatrix} 1/\sqrt{6} & 2/\sqrt{6} \\ 0 & -1/\sqrt{6} \end{pmatrix},\begin{pmatrix} 0 & 0 \\ 1 & 0 \end{pmatrix},\begin{pmatrix} -1/\sqrt{3} & 1/\sqrt{3} \\ 0 & 1/\sqrt{3} \end{pmatrix}$$ é uma base ortonormal de $M_2(\mathbb{R})$.
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
			                                5. (Teorema de Pitágoras generalizado) Seja $V$ um espaço euclidiano. Se $\{u_1,\ldots,u_r\}$ é um conjunto ortogonal de vetores de $V$, mostre que $$\left\lVert u_1+\cdots+u_r\right\rVert^2=\left\lVert u_1\right\rVert^2+\cdots+\left\lVert u_r\right\rVert^2.$$
			                            </p>
			                            <!-- Resposta -->
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="d_5_">
			                                Dica:
			                                <br />
			                                Use que $\left\lVert u \right\rVert=\sqrt{\left\langle u,u \right\rangle}$.
			                            </p>
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_5_">
			                                Solução: 
			                                <br />
			                                $\displaystyle\left\lVert u_1+\cdots+u_r \right\rVert^2=\left\langle u_1+\cdots+u_r,u_1+\cdots+u_r \right\rangle=\sum_{i,j=1}^r \left\langle u_i,u_j \right\rangle$, mas como o conjunto $\{u_1,\ldots,u_r\}$ é ortogonal, tem-se $\left\langle u_i,u_j\right\rangle=0$ se $i\neq j$. Portanto, $$\left\lVert u_1+\cdots+u_r \right\rVert^2=\sum_{i=1}^r \left\langle u_i,u_i\right\rangle=\left\lVert u_1 \right\rVert^2+\cdots+\left\lVert u_r \right\rVert^2.$$
			                            </p>
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="v_5_">
			                                Videoaula: 
			                                <br />
			                                <iframe width="875" height="424" src="https://www.youtube.com/embed/znv4y4pEjso" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			                            </p>
			                            <p class="button primary" id="d_5" onclick="btn2(this.id)" >
			                                DICA
			                            </p>
			                            <p class="button primary" id="r_5" onclick="btn2(this.id)" >
			                                SOLUÇÃO
			                            </p>
			                            <p class="button primary" id="v_5" onclick="btn2(this.id)" >
			                                VIDEOAULA
			                            </p>

			                            <!-- 6 -->
			                            <p id="q_6_p">
			                                6. Determine uma base ortonormal do $\mathbb{R}^3$ utilizando a base $\{(1,1,1),(0,2,1),(0,0,1)\}.$
			                            </p>
			                            <!-- Resposta -->
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="d_6_">
			                                Use o processo de ortonormalização de Gram-Schmidt.
			                            </p>
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_6_">
			                                Solução:
			                                <br />
			                                Como não foi mencionado o produto interno considerado, vamos considerar o usual. No que segue, vamos denotar $u_1=(1,1,1)$, $u_2=(0,2,1)$ e $u_3=(0,0,1)$. Para aplicar o processo de ortonormalização de Gram-Schmidt, escolhemos $w_1=u_1$ e, assim,
			                                \begin{eqnarray}
												w_2 &=& u_2-\frac{\left\langle u_2,w_1 \right\rangle}{\left\langle w_1,w_1 \right\rangle}w_1\\
												&=& (0,2,1)-\frac{3}{3}(1,1,1)\;=\;(-1,1,0)\\
												w_3 &=& u_3-\frac{\left\langle u_3,w_2 \right\rangle}{\left\langle w_2,w_2 \right\rangle}w_2-\frac{\left\langle u_3,w_1 \right\rangle}{\left\langle w_1,w_1 \right\rangle}w_1\\
												&=& (0,0,1)-\frac{1}{3}(1,1,1)\;=\;\left(-\frac{1}{3},-\frac{1}{3},\frac{2}{3}\right)
											\end{eqnarray}
											Deste modo, a base $\left\{w_1,w_2,w_3\right\}$ assim formada é ortogonal. Para ortonormalizá-la, basta dividir cada elemento por sua norma, obtendo assim $$\left\{\left(\frac{1}{\sqrt{3}},\frac{1}{\sqrt{3}},\frac{1}{\sqrt{3}}\right),\left(-\frac{1}{\sqrt{2}},\frac{1}{\sqrt{2}},0\right),\left(-\frac{\sqrt{6}}{6},-\frac{\sqrt{6}}{6},\frac{\sqrt{6}}{3}\right)\right\}.$$

			                            </p>
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="v_6_">
			                                Videoaula:
			                                <br />
			                                <iframe width="875" height="425" src="https://www.youtube.com/embed/V7zEZJIHkXQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			                            </p>
			                            <p class="button primary" id="d_6" onclick="btn2(this.id)" >
			                                DICA
			                            </p>
			                            <p class="button primary" id="r_6" onclick="btn2(this.id)" >
			                                SOLUÇÃO
			                            </p>
			                            <p class="button primary" id="v_6" onclick="btn2(this.id)" >
			                                VIDEOAULA
			                            </p>

			                            <!-- 7 -->
			                            <p id="q_7_p">
			                                7. Usando o produto interno usual do espaço vetorial $P_2(\mathbb{R})$ (espaço vetorial real de todos os polinômios de grau no máximo $2$ com coeficientes reais), determine uma base para o complemento ortogonal do subespaço $W=[3,1-x]$.
			                            </p>
			                            <!-- Resposta -->
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="d_7_">
			                                Dica
			                                <br />
			                                Lembre-se que o produto interno usual de $P_2(\mathbb{R})$ é a aplicação $\displaystyle\left\langle p(x),q(x) \right\rangle=\int_0^1 p(x)q(x)\,dx$. Além disso, o complemento ortogonal de $W$ é determinado por todos os elementos $p\in P_2(\mathbb{R})$ tais que $\left\langle p(x),q(x) \right\rangle=0$, para todo $q(x)\in W$.  
			                            </p>
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_7_">
			                                Solução:
			                                <br />
			                               	Seja $p(x)=a+bx+cx^2$ um elemento em $P_2(\mathbb{R})$ tal que $p\in W^{\perp}$. Assim, $\left\langle p(x),3 \right\rangle=0$ e $\left\langle p(x),1-x \right\rangle=0$. Da primeira expressão, obtemos que $3a+\frac{3b}{2}+c=0$ e da segunda $\frac{a}{2}+\frac{2b}{3}+\frac{3c}{4}=0$. Daí, $b=-\frac{7c}{5}$ e $a=\frac{11c}{30}$. Portanto, $$W^{\perp}=\left\{\frac{11c}{30}-\frac{7c}{5}x+cx^2\,|\,c\in\mathbb{R} \right\}=\left[ \frac{11}{30}-\frac{7}{5}x+x^2 \right].$$
			                            </p>
			                            <!--<p style="display: none; background: #eee; padding: 0.5cm " id="v_7_">
			                                Em construção: videoaula
			                            </p>-->
			                            <p class="button primary" id="d_7" onclick="btn2(this.id)" >
			                                DICA
			                            </p>
			                            <p class="button primary" id="r_7" onclick="btn2(this.id)" >
			                                SOLUÇÃO
			                            </p>
			                            <!--<p class="button primary" id="v_7" onclick="btn2(this.id)" >
			                                VIDEOAULA
			                            </p>-->

			                            <!-- 8 -->
			                            <p id="q_8_p">
			                                8. Prove que se $V$ é um espaço vetorial euclidiano e $u,v\in V$, então $$\left\lVert u+v\right\rVert^2+\left\lVert u-v\right\rVert^2=2\left\lVert u\right\rVert^2+2\left\lVert v\right\rVert^2.$$
			                            </p>
			                            <!-- Resposta -->
			                            <!--<p style="display: none; background: #eee; padding: 0.5cm " id="d_8_">
			                                Em construção: dica
			                            </p>-->
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_8_">
			                                Solução:
			                                <br />
			                                Note que $\left\lVert u+v\right\rVert^2=\left(\sqrt{\left\langle u+v,u+v\right\rangle}\right)^2=\left\langle u+v,u+v\right\rangle=\left\langle u,u\right\rangle+2\left\langle u,v\right\rangle+\left\langle v,v\right\rangle$. De modo semelhante, $\left\lVert u-v\right\rVert^2=\left\langle u,u\right\rangle-2\left\langle u,v\right\rangle+\left\langle v,v\right\rangle$. Portanto, $$\left\lVert u+v\right\rVert^2+\left\lVert u-v\right\rVert^2=2\left\langle u,u\right\rangle+2\left\langle v,v\right\rangle=2\left\lVert u\right\rVert^2+2\left\lVert v\right\rVert^2.$$
			                            </p>
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="v_8_">
			                                Videoaula:
			                                <br />
			                                <iframe width="875" height="425" src="https://www.youtube.com/embed/rdolxluuZiQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			                            </p>
			                            <!--<p class="button primary" id="d_8" onclick="btn2(this.id)" >
			                                DICA
			                            </p>-->
			                            <p class="button primary" id="r_8" onclick="btn2(this.id)" >
			                                SOLUÇÃO
			                            </p>
			                            <p class="button primary" id="v_8" onclick="btn2(this.id)" >
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