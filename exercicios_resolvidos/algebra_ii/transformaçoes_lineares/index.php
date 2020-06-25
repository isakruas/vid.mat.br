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

									<h2>Transformações lineares</h2>

									<hr class="major" />
		                            <!-- 1 -->
		                            <p id="q_1_p">
		                                1. Determine quais das seguintes transformações são lineares. Além disso, calcule a matriz que representa cada transformação linear em relação às respectivas bases canônicas, e a dimensão para o núcleo e o conjunto imagem. Diga ainda quais são injetoras, sobrejetoras e bijetoras.
		                                <br />
		                                (a) $F:\mathbb{R}^2\to\mathbb{R}^2,\;F(x,y)=(x+y,x-y)$
		                                <br />
		                                (b) $F:\mathbb{R}\to\mathbb{R}^3,\;F(x)=(2x,0,-x)$
		                                <br />
		                                (c) $F:\mathbb{R}^3\to\mathbb{R}^2,\;F(x,y,z)=(x^2-y,2y)$
		                                <br />
		                                (d) $F:M_2(\mathbb{R})\to\mathbb{R},\;F(A)=\det\,A$
		                                <br />
		                                (e) $F:P_2(\mathbb{R})\to P_2(\mathbb{R}),\;F(p(x))=2p(1-x)-xp'(x)$
		                            </p>
		                            <!-- Resposta -->
		                            	<p style="display: none; background: #eee; padding: 0.5cm " id="d_1_">
			                                Dica:
			                                <br />
			                                Uma aplicação $F:V\to W$ é chamada de transformação linear se as consições abaixo são satisfeitas:
			                                <br />
			                                (i) $F(u+v)=F(u)+F(v)$, $\forall u,v\in V$.
			                                <br />
			                                (ii) $F(\alpha u)=\alpha F(u)$, $\forall u\in V$ e $\alpha\in\mathbb{R}$.
			                            </p>
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_1_">
			                                Solução:
			                                <br />
			                                (a) (i) $F$ é uma transformação linear, pois 
			                                <br />
			                                \begin{eqnarray*}
			                                	F((a,b)+(c,d)) &=& F(a+c,b+d)\;=\;((a+c)+(b+d),(a+c)-(b+d))\\
			                                	&=& ((a+b)+(c+d),(a-b)+(c-d))\;=\;(a+b,a-b)+(c+d,c-d)\\
			                                	&=& F(a,b)+F(c,d)\\
			                                	\\
			                                	F(\alpha(a,b)) &=& F(\alpha a,\alpha b)\;=\;(\alpha a +\alpha b,\alpha a -\alpha b)\\
			                                	&=& (\alpha(a+b),\alpha(a-b))\;=\;\alpha(a+b,a-b)\\
			                                	&=& \alpha F(a,b)
			                                \end{eqnarray*}

			                                (ii) $(x,y)\in\textrm{Nuc}(F)\Rightarrow F(x,y)=(0,0)\Rightarrow (x+y,x-y)=(0,0)\Rightarrow x+y=0$ e $x-y=0\Rightarrow x=y=0\Rightarrow \textrm{Nuc}(F)=\{(0,0)\}\Rightarrow$ $F$ é injetora e $\dim \textrm{Nuc}(F)=0$. Por outro lado, $F(x,y)=(x+y,x-y)=(x,x)+(y,-y)=x(1,1)+y(1,-1)\Rightarrow$ $\dim \textrm{Im}(F)=2$ e como $\dim \textrm{Im}(F)=\dim \mathbb{R}^2$, $F$ é sobrejetora.
			                                <br />
			                                (iii) Se $B=\{(1,0),(0,1)\}$ é a base canônica de $\mathbb{R}^2$, tem-se $F(1,0)=(1,1)=1(1,0)+1(0,1)$ e $F(0,1)=(1,-1)=1(1,0)+(-1)(0,1)$. Portanto, $[F]_B=\begin{pmatrix} 1 & 1 \\ 1 & -1 \end{pmatrix}$.
			                                <br /><br />
			                                (b) $F$ é uma transformação linear, pois 
			                                <br />
			                                \begin{eqnarray*}
			                                	F(a+b) &=& (2(a+b),0,-(a+b))\;=\;(2a,0,-a)+(2b,0,-b)\\
			                                	&=& F(a)+F(b)\\
			                                	\\
			                                	F(\alpha a) &=& (\alpha(2a),\alpha\cdot0,\alpha(-a))\;=\; \alpha (2a,0,-a)\\
			                                	&=& \alpha F(a)
			                                \end{eqnarray*}

			                                (ii) $x\in\textrm{Nuc}(F)\Rightarrow F(x)=(0,0,0)\Rightarrow x=0\Rightarrow x+y=0$ e $x-y=0\Rightarrow x=y=0\Rightarrow \textrm{Nuc}(F)=\{0\}\Rightarrow$ $F$ é injetora e $\dim \textrm{Nuc}(F)=0$. Por outro lado, $F(x)=(2x,0,-x)=x(2,0,-1)\Rightarrow$ $\dim \textrm{Im}(F)=1$ e como $\dim \textrm{Im}(F)\neq\dim \mathbb{R}^3$, $F$ não é sobrejetora.
			                                <br />
			                                (iii) Se $B_1=\{1\}$ é a base canônica de $\mathbb{R}$ e $B_2=\{(1,0,0),(0,1,0),(0,0,1)\}$ é a base canônica de $\mathbb{R}^3$, então $[F]_{B_2}^{B_1}=\begin{pmatrix} 2 \\ 0 \\ -1\end{pmatrix}$.
			                                <br /><br />
			                                (c) $F$ não é uma transformação linear, pois $F(2(1,1,1))\neq 2F((1,1,1))$. De fato, $F(2(1,1,1))=F(2,2,2)=(2,4)$ e $2F(1,1,1)=2(0,2)=(0,4)$.
			                                <br /><br />
			                                (d) $F$ não é uma transformação linear, pois se $A=\begin{pmatrix} 1 & 2 \\ -1 & 1 \end{pmatrix}$, então $F(2A)=12\neq 6=2\cdot 3=2F(A)$.
			                                <br /><br />
			                                (e) (i) 
			                                \begin{eqnarray*}
			                                	F(p(x)+q(x)) &=& F((p+q)(x))\;=\;2((p+q)(1-x))-x(p+q)'(x)\\
			                                	&=& 2(p(1-x)+q(1-x))-x(p'(x)+q'(x))\\
			                                	&=& 2p(1-x)-xp'(x)+2q(1-x)-xq'(x)\;=\;F(p(x))+F(q(x))
			                                	\\
			                                	F(\alpha p(x)) &=& 2(\alpha p)(1-x)-x(\alpha p)'(x)\;=\;2\alpha p(1-x)-x\alpha p'(x)\\
			                                	&=& \alpha (2p(1-x)-xp'(x))\;=\;\alpha F(p(x))
			                                \end{eqnarray*}

			                                (ii) Se $p(x)=a+bx+cx^2$ e $p(x)\in\textrm{Nuc}(F)$, então $F(p(x))=2p(1-x)-xp'(x)=2(a+b(1-x)+c(1-x)^2)-x(b+2cx)=0\Rightarrow$ $2(a+b+c)+(-3b-4c)x=0\Rightarrow a+b+c=0$ e $-3b-4c=0\Rightarrow b=-\frac{4}{3}c\Rightarrow a=\frac{1}{3}c$. Deste modo, $p(x)=c\left(\frac{1}{3}-\frac{4}{3}x+x^2\right)\Rightarrow \dim\,\textrm{Nuc}(F)=1$, logo não é injetora. Por outro lado, a transformação linear pode ser escrita da forma $F(a+bx+cx^2)=2(a+b+c)+(-3b-4c)x\Rightarrow \dim\,\textrm{Im}(F)=2$ (não é sobrejetora).
			                                <br />
			                                (iii) Em relação às bases canônicas, $[F]=\begin{pmatrix} 2 & 2 & 2 \\ 0 & -3 & -4 \\ 0 & 0 & 0 \end{pmatrix}$.
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
		                                2. Verifique se a aplicação $F:\mathbb{R}^2\to\mathcal{C}([a,b])$ definida por $F(x,y)=xe^t+yet^{2t}$ é uma transformação linear, onde $\mathcal{C}([a,b])$ é o espaço vetorial das funções reais contínuas do intervalo $[a,b]$ em $\mathbb{R}$.
		                            </p>
		                            <!-- Resposta -->
		                            	<!--<p style="display: none; background: #eee; padding: 0.5cm " id="d_2_">
			                                Em construção: dica
			                            </p>-->
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_2_">
			                                Solução:
			                                <br />
			                                \begin{eqnarray*}
			                                	F((a,b)+(c,d)) &=& F(a+c,b+d)\;=\;(a+c)e^t+(b+d)et^{2t}\\
			                                	&=& ae^t+bet^{2t}+ce^t+det^{2t}\,=\,F(a,b)+F(c,d)
			                                	\\
			                                	F(\alpha (a,b)) &=& F(\alpha a,\alpha b)\;=\;\alpha ae^t+\alpha bet^{2t}\\
			                                	&=& \alpha (ae^t+bet^{2t})\;=\;\alpha F(a,b)
			                                \end{eqnarray*}

			                                Portanto, $F$ é uma transformação linear.
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
		                                3. Determine a transformação linear $F:\mathbb{R}^3\to\mathbb{R}^2$ tal que $F(1,0,0)=(2,0)$, $F(0,1,0)=(1,1)$ e $F(0,0,1)=(0,-1)$. Em seguida, obtenha $v\in\mathbb{R}^3$ tal que $F(v)=(3,2)$.
		                            </p>
		                            <!-- Resposta -->
		                            	<!--<p style="display: none; background: #eee; padding: 0.5cm " id="d_3_">
			                                Em construção: dica
			                            </p>-->
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_3_">
			                                Solução:
			                                <br />
			                                Por hipótese,
			                                \begin{eqnarray*}
			                                	F(x,y,z) &=& F(x(1,0,0)+y(0,1,0)+z(0,0,1))\\
			                                	&=& xF(1,0,0)+yF(0,1,0)+zF(0,0,1)\\
			                                	&=& x(2,0)+y(1,1)+z(0,-1)\\
			                                	&=& (2x+y,y-z)
			                                \end{eqnarray*}

			                                Por outro lado, seja $v\in\mathbb{R}^3$ tal que $F(v)=(3,2)$, logo $v=(a,b,c)$ e $F(v)=(2a+b,b-c)=(3,2)\Rightarrow 2a+b=3$ e $b-c=2\Rightarrow b=2+c$ e $a=\frac{1-c}{2}$. Portanto, $v=\left(\frac{1-c}{2},2+c,c\right)$, onde $c\in\mathbb{R}$.
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
		                                4. Determine o núcleo e a imagem, bem como as dimensões respectivas, da transformação linear $F:P_2(\mathbb{R})\to P_3(\mathbb{R})$ definida por $F(p(x))=p(x)+x^2p'(x)$.
		                            </p>
		                            <!-- Resposta -->
		                            	<!--<p style="display: none; background: #eee; padding: 0.5cm " id="d_4_">
			                                Em construção: dica
			                            </p>-->
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_4_">
			                                Solução:
			                                <br />
			                                Tome $p\in P_2(\mathbb{R})$, logo $p(x)=a+bx+cx^2$ e $$F(a+bx+cx^2)=a+bx+cx^2+x^2(b+2cx)=a+bx+(b+c)x^2+2cx^3.$$ 

			                                Sendo assim, $p\in\textrm{Nuc}(F)\Rightarrow F(a+bx+cx^2)=a+bx+(b+c)x^2+2cx^3=0\Rightarrow a=b=c=0\Rightarrow \dim\,\textrm{Nuc}(F)=0$ e $\{0\}$ é uma base para o núcleo. Em relação ao conjunto imagem, observe que $F(a+bx+cx^2)=a+bx+(b+c)x^2+2cx^3=a\cdot1+b(x+x^2)+c(x^2+2x^3)\Rightarrow$ $\dim\,\textrm{Im}(F)=3$, sendo $\{1,x+x^2,x^2+2x^3\}$ uma base para o conjunto imagem.
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
		                                5. Determine a matriz $[F]^B_C$ associada a transformação linear $F:\mathbb{R}^2\to\mathbb{R}^3$ definida por $F(x,y)=(2x+y,3x-y,-y)$, onde $B=\{(1,0),(1,1)\}$ e $C=\{(0,1,0),(1,1,1),(1,1,0)\}$.
		                            </p>
		                            <!-- Resposta -->
		                            	<!--<p style="display: none; background: #eee; padding: 0.5cm " id="d_5_">
			                                Em construção: dica
			                            </p>-->
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_5_">
			                                Solução:
			                                <br />
			                                Observe que $$\begin{matrix} F(1,0)=(2,3,0)=1(0,1,0)+0(1,1,1)+2(1,1,0) \\ 
			                                F(1,1)=(3,2,-1)=-1(0,1,0)+(-1)(1,1,1)+4(1,1,0)\end{matrix}.$$

			                                Portanto, $[F]_C^B=\begin{pmatrix} 1 & -1 \\ 0 & -1 \\ 2 & 4 \end{pmatrix}$.
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
		                                6. Seja $F\in\mathcal{L}(P_3(\mathbb{R}),\mathbb{R})$ a transformação linear definida por $F(g(x))=\displaystyle\int_0^1 g(x)\,dx$. Determine a matriz de $F$ em relação às bases $B=\{1,x,x^2,x^3\}$ e $C=\{1\}$ de $P_3(\mathbb{R})$ e $\mathbb{R}$, respectivamente.
		                            </p>
		                            <!-- Resposta -->
		                            	<!--<p style="display: none; background: #eee; padding: 0.5cm " id="d_6_">
			                                Em construção: dica
			                            </p>-->
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_6_">
			                                Solução:
			                                <br />
			                                $$\begin{matrix} F(1)=\displaystyle\int_0^1 1\,dx=1 \\ F(x)=\displaystyle\int_0^1 x\,dx=\frac{1}{2} \\ F(x^2)=\displaystyle\int_0^1 x^2\,dx=\frac{1}{3} \\ F(x^3)=\displaystyle\int_0^1 x^3\,dx=\frac{1}{4} \end{matrix}$$

			                                Logo, $[F]_C^B=\begin{pmatrix} 1 & \frac{1}{2} & \frac{1}{3} & \frac{1}{4} \end{pmatrix}$.
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
		                                7. Se $F:V\to W$ é uma transformação linear injetora e $\{u_1,\ldots,u_n\}\subset V$ é LI, mostre que o conjunto $\{F(u_1),\ldots,F(u_n)\}\subset W$ também é LI.
		                            	</p>
		                            	<!-- Resposta -->
		                            	<!--<p style="display: none; background: #eee; padding: 0.5cm " id="d_7_">
			                                Em construção: dica
			                            </p>-->
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_7_">
			                                Solução:
			                                <br />
			                                Considere a combinação linear $\alpha_1 F(u_1)+\ldots+\alpha_n F(u_n)=0_W$. Como $F$ é uma transformação linear, tem-se $F(\alpha_1 u_1+\ldots+\alpha_n u_n)=0_W$, mas $F$ é injetora, logo $\alpha_1 u_1+\ldots+\alpha_n u_n=0_V\Rightarrow \alpha_i=0$ para todo $i\in\{1,\ldots,n\}$, pois $\{u_1,\ldots,u_n\}$ é LI. Portanto, $\{F(u_1),\ldots,F(u_n)\}$ também é LI.
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

			                            <!-- 8 -->
		                            	<p id="q_8_p">
		                                8. Seja $F:V\to W$ uma transformação linear. Se $\textrm{dim}\,V>\textrm{dim}\,W$, prove que existe um vetor não nulo $u\in V$ tal que $F(u)=0_W$, ou seja, $F$ não é injetora.
		                            	</p>
		                            	<!-- Resposta -->
		                            	<p style="display: none; background: #eee; padding: 0.5cm " id="d_8_">
			                                Dica: 
			                                <br />
			                                Use a contrapositiva e o teorema do núcleo e da imagem para provar o resultado.
			                            </p>
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_8_">
			                                Solução:
			                                <br />
			                                Suponha que para todo vetor não nulo $u\in V$ tenha $F(u)\neq 0_W$. Isto significa que $\textrm{Nuc}(F)=\{0_V\}$ e, consequentemente, $\dim \textrm{Nuc}(F)=0$. Pelo teorema do núcleo e da imagem, $\dim V=\dim\textrm{Im}(F)\leq \dim W$.
			                            </p>
			                            <!--<p style="display: none; background: #eee; padding: 0.5cm " id="v_8_">
			                                Em construção: videoaula
			                            </p>-->
			                            <p class="button primary" id="d_8" onclick="btn2(this.id)" >
			                                DICA
			                            </p>
			                            <p class="button primary" id="r_8" onclick="btn2(this.id)" >
			                                SOLUÇÃO
			                            </p>
			                            <!--<p class="button primary" id="v_8" onclick="btn2(this.id)" >
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