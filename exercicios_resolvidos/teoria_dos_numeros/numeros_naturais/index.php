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

									<h2>Números naturais</h2>

									<hr class="major" />

		                            <!-- 1 -->
		                            <p id="q_1_p">
		                                1. De acordo com a definição da adição e multiplicação entre números naturais, calcule:
		                                <br />
		                                (a) $4+3$
		                                <br />
		                                (b) $5\cdot4$
		                            </p>
		                            <!-- Resposta -->
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="d_1_">
			                                Dica:
			                                <br />
			                                Relembre a definição de adição e multiplicação em $\mathbb{N}$: dados $m,n\in\mathbb{N}$, definimos a soma $m+n$ e o produto $m\cdot n$ do seguinte modo
			                                $$\left\{\begin{matrix} m+1 & = & s(m) \\ m+s(n) & = & s(m+n) \end{matrix}\right.$$ $$\left\{\begin{matrix} m\cdot1 & = & m \\ m\cdot s(n) & = & m\cdot n+m \end{matrix}\right.$$
			                            </p>
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_1_">
			                                Solução:
			                                <br />
			                                (a) Antes de realizar esta operação, precisamos calcular $4+1$ e $4+2$. Assim, $4+1=s(4)=5$ e $4+2=4+s(1)=s(4+1)=s(5)=6$. Logo, $4+3=4+s(2)=s(4+2)=s(6)=7$.
			                                <br />
			                                (b) Antes de calcular $5\cdot4$, precisamos realizar as operações:
			                                $$\begin{matrix} 5\cdot1=5 \\ 5\cdot2=5\cdot s(1)=5\cdot1+5=5+5=10 \\ 5\cdot3=5\cdot s(2)=5\cdot2+5=10+5=15 \end{matrix}$$ Portanto, $5\cdot4=5\cdot s(3)=5\cdot3+5=15+5=20$.
			                            </p>
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="v_1_">
			                                Videoaula:
			                                <br />
			                                <iframe width="875" height="425" src="https://www.youtube.com/embed/3ywqCXujT5o" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			                            </p>
			                            <p class="button primary" id="d_1" onclick="btn2(this.id)" >
			                                DICA
			                            </p>
			                            <p class="button primary" id="r_1" onclick="btn2(this.id)" >
			                                SOLUÇÃO
			                            </p>
			                            <p class="button primary" id="v_1" onclick="btn2(this.id)" >
			                                VIDEOAULA
			                            </p>

		                            <!-- 2 -->
		                            <p id="q_2_p">
		                                <br />
		                                2. Dado $n\in\mathbb{N}$, prove que não existe $x\in\mathbb{N}$ tal que $n< x< s(n)$.
		                            </p>
		                            <!-- Resposta -->
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="d_2_">
			                            	Dica:
			                            	<br />
			                                Suponha que exista um número $x\in\mathbb{N}$ tal que $n< x< s(n)$ e chegue em uma contradição.
			                            </p>
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_2_">
			                                Solução:
			                                <br />
			                                Dado $n\in\mathbb{N}$, suponha que exista um número natural $x$ tal que $n< x< s(n)$. Daí, $n< x\Rightarrow x=n+p$, onde $p\in\mathbb{N}$. Por outro lado, $x< s(n)\Rightarrow n+p< n+1\Rightarrow p<1$, absurdo. Portanto, não existe $x\in\mathbb{N}$ tal que $n< x< s(n)$.
			                            </p>
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="v_2_">
			                                Videoaula:
			                                <br />
			                                <iframe width="853" height="480" src="https://www.youtube.com/embed/KkZ67G8Nev4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			                            </p>
			                            <p class="button primary" id="d_2" onclick="btn2(this.id)" >
			                                DICA
			                            </p>
			                            <p class="button primary" id="r_2" onclick="btn2(this.id)" >
			                                SOLUÇÃO
			                            </p>
			                            <!--<p class="button primary" id="v_1" onclick="btn2(this.id)" >
			                                VIDEOAULA
			                            </p>-->

		                            <!-- 3 -->
		                            <p id="q_3_p">
		                                3. Mostre, por indução, a validade das fórmulas abaixo para todo $n\geq1$ natural.
		                                <br />
		                                (a) $\displaystyle 1+3+5+\cdots+(2n-1)=n^2$
		                                <br />
		                                (b) $\displaystyle 1\cdot2+2\cdot3+3\cdot4+\cdots+n(n+1)=\frac{n(n+1)(n+2)}{3}$
		                                <br />
		                                (c) $\displaystyle 1^3+2^3+3^3+\cdots+n^3=\frac{n^2(n+1)^2}{4}$
		                                <br />
		                                (d) $\displaystyle \frac{1}{1\cdot2}+\frac{1}{2\cdot3}+\cdots+\frac{1}{n(n+1)}=\frac{n}{n+1}$
		                            </p>
		                            <!-- Resposta -->
			                            <!--<p style="display: none; background: #eee; padding: 0.5cm " id="d_3_">
			                                Em construção: dica
			                            </p>-->
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_3_">
			                                Solução:
			                                <br />
			                                (a) Para $n=1$: $1=1^2$
			                                <br />
			                                Suponha que a propriedade seja valida para $n$, ou seja, $$1+3+5+\cdots+(2n-1)=n^2$$
			                                <br />
			                                Vamos provar que a propriedade também é válida para $n+1$:
			                                \begin{eqnarray*}
			                                    1+3+5+\cdots+(2n-1)+(2(n+1)-1)&=& n^2+2n+1\\
			                                    &=&(n+1)^2
			                                \end{eqnarray*}
			                                <br />
			                                Portanto, pelo primeiro principio de indução, a propriedade é válida $\forall n\in\mathbb{N}$.
			                                <br />
			                                (b) Para $n=1$: $1\cdot2=\frac{1\cdot2\cdot3}{3}$.
			                                <br />
			                                Suponha que a propriedade seja valida para $n$ e vamos provar que a propriedade também é válida para $n+1$.
			                                \begin{eqnarray*}
												1\cdot2+2\cdot3+\cdots+n(n+1)+(n+1)((n+1)+1) &=& \frac{n(n+1)(n+2)}{3}+(n+1)\cdot(n+2)\\
												&=& \frac{(n+1)(n+2)(n+3)}{3}\\
												&=& \frac{(n+1)((n+1)+1).((n+1)+2)}{3}
											\end{eqnarray*}
											Portanto, pelo primeiro principio de indução, a propriedade é válida para todo $n\in\mathbb{N}$.
											<br />
											(c) Para $n=1$: $1^3=\frac{1^2(1+1)^2}{4}$.
											<br />
											Suponha que a propriedade seja valida para $n$ e vamos provar que a propriedade também é válida para $n+1$.
											\begin{eqnarray*}
												1^3+2^3+3^3+\cdots+n^3+(n+1)^3 &=& \frac{n^2(n+1)^2}{4}+(n+1)^3\\
												&=& \frac{(n+1)^2(n^2+4(n+1))}{4}\\
												&=& \frac{(n+1)^2(n+2)^2}{4}\\
												&=& \frac{(n+1)^2((n+1)+1)^2}{4}
											\end{eqnarray*}
											Portanto, pelo primeiro principio de indução, a propriedade é válida para todo $n\in\mathbb{N}$.
											<br />
											(d) Para $n=1$: $\frac{1}{1\cdot2}=\frac{1}{1+1}$.
											<br />
											Suponha que a propriedade seja valida para $n$ e vamos provar que a propriedade também é válida para $n+1$.
											\begin{eqnarray*}
												\frac{1}{1\cdot2}+\frac{1}{2\cdot3}+\cdots+\frac{1}{n(n+1)}+\frac{1}{(n+1)((n+1)+1)} &=& \frac{n}{n+1}+\frac{1}{(n+1)(n+2)}\\
												&=& \frac{n(n+2)+1}{(n+1)(n+2)}\\
												&=& \frac{(n+1)^2}{(n+1)(n+2)}\\
												&=& \frac{n+1}{(n+1)+1}
											\end{eqnarray*}
											Portanto, pelo primeiro principio de indução, a propriedade é válida para todo $n\in\mathbb{N}$.
			                            </p>
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="v_3_">
			                                Videoaula:
			                                <br />
			                                <iframe width="875" height="425" src="https://www.youtube.com/embed/GwCWqHw2Rzw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			                            </p>
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
		                                4. Considere a sequência de Fibonacci: 1, 1, 2, 3, 5, 8, 13, $\ldots$ onde cada elemento, a partir do terceiro, é a soma dos dois anteriores. Se denotarmos por $F(n)$ o n-ésimo termo desta sequência, poderemos defini-la por: $F(1)=1$, $F(2)=1$ e $F(n)=F(n-2)+F(n-1)$, se $n\geq3$. Mostre que $F(n)<\left(\frac{7}{4}\right)^n$, para todo número natural $n\geq1$, usando o segundo princípio de indução.
		                            </p>
		                            <!-- Resposta -->
			                            <!--<p style="display: none; background: #eee; padding: 0.5cm " id="d_4_">
			                                Em construção: dica
			                            </p>-->
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_4_">
			                            	Solução:
			                                <br />
			                                Para $n=1$: $F(1)=1<\frac{7}{4}$. Suponha que a propriedade seja válida para todo $m$ ($1\leq m$) menor que $n$ e vamos mostrar que a propriedade também é válida para $n$: como $m< n$, existe $r\in\mathbb{N}$ tal que $n=m+r$. Daí,
											\begin{eqnarray*}
												F(n)&=&F(m+r)\;\;=\;\;F(m+r-2)+F(m+r-1)\\
													&<&\left(\frac{7}{4}\right)^{m+r-2}+\left(\frac{7}{4}\right)^{m+r-1}\\
													&=&\frac{16}{49}\left(\frac{7}{4}\right)^{m+r}+\frac{4}{7}\left(\frac{7}{4}\right)^{m+r}\;\;=\;\;\frac{44}{49}\left(\frac{7}{4}\right)^{m+r}\\
													&<&\left(\frac{7}{4}\right)^{m+r}\;\;=\;\;\left(\frac{7}{4}\right)^n
											\end{eqnarray*}
											Portanto, pelo segundo princípio de indução, a propriedade é válida para todo número natural $n\geq1$.
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
		                                5. Se $A$ é um conjunto qualquer, denote o conjunto das partes de $A$ por $\mathcal{P}(A)$. Sendo assim, use o primeiro princípio de indução para provar que se $A$ tem $n$ elementos, então $\mathcal{P}(A)$ possui $2^n$ elementos.
		                            </p>
		                            <!-- Resposta -->
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="d_5_">
			                            	Dica:
			                            	<br />
			                                Inicialmente, considere um conjunto qualquer com três elementos: $A=\{a,b,c\}$. Observe que $a\in A$ e os subconjuntos de $A$ podem ser divididos em dois grupos:
			                                <br />
			                               	(i) Os que não contém $a$: $\{\emptyset\}$, $\{b\}$, $\{c\}$ e $\{b,c\}$.
			                               	<br />
			                               	(ii) Os que contém $a$: $\{a\}$, $\{a,b\}$, $\{a,c\}$ e $\{a,b,c\}$.
			                               	<br />
			                               	Totalizando, assim, $2^3$ subconjuntos. Tente aplicar este raciocínio conjuntamente com o primeiro princípio de indução para demonstrar o caso geral.
			                            </p>
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_5_">
			                                Solução:
			                                <br />
			                                Para $n=1$: Se $A=\{a\}$, então $\mathcal{P}(A)=\{\emptyset,A\}$ possui $2$ elementos. Suponha que a propriedade seja válida para $n$, ou seja, se $X$ é um conjunto com $n$ elementos, então $\mathcal{P}(X)$ possui $2^n$ elementos. Vamos mostrar que a propriedade também é válida para $n+1$. Sendo assim, tome $A$ um conjunto com $n+1$ elementos e considere $a\in A$. Observe que $A-\{a\}$ possui $n$ elementos, logo, pela hipótese de indução, $\mathcal{P}(A-\{a\})$ possui $2^n$ elementos. Diante disso, $\mathcal{P}(A)$ pode ser dividido em dois grupos:
			                                <br />
			                               	(i) Os que não contém $a$ (inclusive $\emptyset$): que são todos subconjuntos de $A-\{a\}$ que totalizam $2^n$ elementos.
			                                <br />
			                                (ii) Os que contém $a$: são obtidos tomando um subconjunto de $A-\{a\}$ adicionando a este o elemento $a$, ou seja, também totalizam $2^n$ elementos.
			                                <br />
			                                Portanto, o número total de elemento de $\mathcal{P}(A)$ é $2^n+2^n=2^{n+1}$.
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
		                                6. Mostre que o número de diagonais de um polígono convexo de $n$ lados é dado por $\displaystyle d_n=\frac{n(n-3)}{2}.$
		                            </p>
		                            <!-- Resposta -->
		                            	<p style="display: none; background: #eee; padding: 0.5cm " id="d_6_">
			                                Dica:
			                                <br />
			                                Use o primeiro princípio de indução.
			                            </p>
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_6_">
			                                Solução:
			                                <br />
			                                Observe que o polígono convexo com a menor quantidade de lados é o triângulo, logo a propriedade deve ser válida para todo natural $n\geq3$. Sendo assim, para $n=3$ (triângulo), o número de diagonais é $0=\frac{3(3-3)}{2}$. Suponha que a propriedade seja válida para $n$, ou seja, o número de diagonais de um polígono convexo de $n$ lados é $\frac{n(n-3)}{2}$. Considere agora um polígono de $n+1$ lados. Escolha um vértice qualquer deste polígono (denotemos por $A$) e traçe um seguimento até o próximo vértice (denotemos por $B$) de forma que forme uma das diagonais. Note que para construir essa diagonal, um dos vértices (denotemos por $C$) deve ser "salto", obtendo assim o triângulo $ABC$. Assim, obtemos um polígono convexo de $n$ lados e, por hipótese de indução, possui $\frac{n(n-3)}{2}$ diagonais. Portanto, o número total de diagonais do polígono convexo de $n+1$ lados é:  $d_{n+1}=$ número de diagonais do polígono de $n$ lados $+$ número de diagonais que partem do vértice $C$ $+$ $1$ (segmento $AB$), ou seja, $$d_{n+1}=\frac{n(n-3)}{2}+(n-2)+1=\frac{(n+1)(n-2)}{2}.$$
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

		                            <!-- 7 -->
		                            <p id="q_7_p">
		                            	7. Dados $a,b\in\mathbb{N}$, dizemos que $a$ divide $b$ ou que $b$ é múltiplo de $a$ se existe $q\in\mathbb{N}$ tal que $b=aq$. Sendo assim, para todo $n\in\mathbb{N}$, prove que:
		                               	<br />
		                               	(a) $2^{2n}-1$ é múltiplo de $3$.
		                               	<br />
		                               	(b) $10^n+3\cdot4^{n+1}+5$ é múltiplo de $9$.
		                               	<br />
		                               	(c) $16$ divide $3^{2n+2}+8n-9$.
		                            </p>
		                            <!-- Resposta -->
		                            <p style="display: none; background: #eee; padding: 0.5cm " id="d_7_">
			                            	Dica:
			                            	<br />
			                            	(c) Para provar a propriedade, você precisará utilizar dois fatos: o produto entre dois números ímpares é um número ímpar e a soma entre dois números ímpares é um número par.
			                            </p>
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_7_">
			                                Solução:
			                                <br />
			                                (a) Para $n=1$: $2^{2\cdot1}-1=3$. Suponha que a propriedade seja válida para $n$, isto é, $2^{2n}-1=3k$, onde $k\in\mathbb{N}$. Vamos mostrar que a propriedade também é válida para $n+1$.
			                                \begin{eqnarray*}
												2^{2(n+1)}-1 &=& 2^{2n+2}-1\\
												&=& 2^{2n}(3+1)-1\\
												&=& 3\cdot2^{2n}+2^{2n}-1\\
												&=& 3\cdot2^{2n}+3k\;=\;3(2^{2n}+k)
											\end{eqnarray*}
											Logo, a propriedade é válida para $n+1$ e, pelo primeiro principio de indução, a propriedade é válida para todo $n\in\mathbb{N}$.
			                                <br />
			                                (b) Para $n=1$: $10^1+3\cdot4^2+5=63$. Suponha que a propriedade seja válida para $n$, isto é, $10^n+3\cdot4^{n+1}+5=9k$, onde $k\in\mathbb{N}$. Vamos mostrar que a propriedade também é válida para $n+1$.
											\begin{eqnarray*}
												10^{n+1}+3\cdot4^{(n+1)+1}+5 &=& 10^n\cdot(9+1)+3\cdot4^{n+1}\cdot(3+1)+5\\
												&=& 9\cdot10^n+9\cdot4^{n+1}+9k\\
												&=& 9(10^n+4^{n+1}+k).
											\end{eqnarray*}
											Logo, a propriedade é válida para $n+1$ e, pelo primeiro principio de indução, a propriedade é válida para todo $n\in\mathbb{N}$.
			                                <br />
			                                (c) Para $n=1$: $3^4+8-9=80$. Suponha que a propriedade seja válida para $n$, isto é, $3^{2n+2}+8n-9=16k$, onde $k\in\mathbb{N}$. Vamos mostrar que a propriedade também é válida para $n+1$.
											\begin{eqnarray*}
												3^{2(n+1)+2}+8(n+1)-9 &=& 3^{2n+2}\cdot (8+1)+8n+8-9\\
												&=& 3^{2n+2}+3^{2n+2}\cdot8 3^2+8n+8-9\\
												&=& 16k+8\cdot(3^{2n+2}+1).
											\end{eqnarray*}
											Mas, observe que $3^{2n+2}+1$ é sempre um número par, ou seja, $3^{2n+2}+1=2q$ com $q\in\mathbb{N}$. Logo, $3^{2(n+1)+2}+8(n+1)-9=16(k+q)$ e a propriedade é válida para $n+1$ e, pelo primeiro principio de indução, a propriedade é válida para todo $n\in\mathbb{N}$.
			                            </p>
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="v_7_">
			                                Videoaula:
			                                <br />
			                                <iframe width="875" height="425" src="https://www.youtube.com/embed/GwCWqHw2Rzw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			                            </p>
			                            <p class="button primary" id="d_7" onclick="btn2(this.id)" >
			                                DICA
			                            </p>
			                            <p class="button primary" id="r_7" onclick="btn2(this.id)" >
			                                SOLUÇÃO
			                            </p>
			                            <p class="button primary" id="v_7" onclick="btn2(this.id)" >
			                                VIDEOAULA
			                            </p>

			                        <!-- 8 -->
		                            <p id="q_8_p">
		                                8. Use o PBO para provar que $1+2+3+\cdots+n=\frac{n(n+1)}{2},\;\forall n\in\mathbb{N}$.
		                            </p>
		                            <!-- Resposta -->
		                            	<p style="display: none; background: #eee; padding: 0.5cm " id="d_8_">
			                                Dica:
			                                <br />
			                                Considere $S_n=1+2+3+\cdots+n$ e defina o conjunto $A=\left\{n\in\mathbb{N}\,|\,S_n\neq\frac{n(n+1)}{2}\right\}$. Suponha que $A\neq\emptyset$ e use o pelo PBO para garantir que $A$ possui um menor elemento (denote-o por $a$). Justifique que $a=s(b)$ para algum $b\in\mathbb{N}$ e chegue em uma contradição mostrando que $S_a=\frac{a(a+1)}{2}$. 
			                            </p>
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_8_">
			                                Solução:
			                                <br />
			                                No que segue, considere $S_n=1+2+3+\cdots+n$ e defina o conjunto $A=\left\{n\in\mathbb{N}\,|\,S_n\neq\frac{n(n+1)}{2}\right\}$. Suponha que $A\neq\emptyset$, logo, pelo PBO, $A$ possui um menor elemento que iremos denotar por $a$. Observe que $1\notin A$, pois $S_1=1$. Assim, $a>1\Rightarrow a=s(b)=b+1$ para algum $b\in\mathbb{N}$. Como $b\notin A$ (caso contrário teríamos uma contradição) tem-se $S_b=\frac{b(b+1)}{2}$. Daí,
			                                \begin{eqnarray*}
												S_a&=&1+2+3+\cdots+b+a\\
													&=&\frac{b(b+1)}{2}+a\\
													&=&\frac{b(b+1)+2(b+1)}{2}\\
													&=&\frac{(b+1)((b+1)+1)}{2}\\
													&=&\frac{a(a+1)}{2}
											\end{eqnarray*}
											Deste modo, $S_a=\frac{a(a+1)}{2}$ que contradiz o fato de que $a\in A$. Portanto, $A=\emptyset$ e a propriedade é válida para todo número natural $n$.
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