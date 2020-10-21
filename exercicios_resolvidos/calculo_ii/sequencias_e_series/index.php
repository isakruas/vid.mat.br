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

									<h2>Sequências e séries</h2>

									<hr class="major" />


		                            <!-- 1 -->
		                            <p id="q_1_p">
		                                1. Verifique se as sequências são convergentes ou divergentes.
		                                <br />
		                                (a) $\displaystyle a_n=\sqrt{n+1}-\sqrt{n}$
		                                <br />
		                                (b) $\displaystyle a_n=\frac{5}{n^2}+2$
		                                <br />
		                                (c) $\displaystyle a_n=\frac{\ln^k n}{n}$, $k\in\mathbb{N}$
		                                <br />
		                                (d) $\displaystyle \left\lbrace \frac{\sqrt{2}}{3},\frac{\sqrt{4}}{4},\frac{\sqrt{6}}{5},\frac{\sqrt{8}}{6},\cdots\right\rbrace$
		                            </p>
		                            <!-- Resposta -->
		                            <!--<p style="display: none; background: #eee; padding: 0.5cm " id="d_1_">
			                                Em construção: dica
			                            </p>-->
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_1_">
			                                Solução:
			                                <br />
			                                (a) $\displaystyle\lim_{n\to\infty}(\sqrt{n+1}-\sqrt{n})\left(\frac{\sqrt{n+1}+\sqrt{n}}{\sqrt{n+1}+\sqrt{n}}\right)=\lim_{n\to\infty}\frac{1}{\sqrt{n+1}+\sqrt{n}}=\infty\Rightarrow$ diverge.
			                                <br />
			                                (b) $\displaystyle\lim_{n\to\infty}\frac{5}{n^2}+2=2\Rightarrow$ converge para $2$.
			                                <br />
			                                (c) Aplicando a regra de L'Hospital $k$ vezes, obtemos que: 
			                                <br />
			                                $\displaystyle\lim_{n\to\infty}\frac{\ln^k n}{n}=\lim_{n\to\infty}k\frac{\ln^{k-1} n}{n}=\lim_{n\to\infty}k(k-1)\frac{\ln^{k-2} n}{n}=\cdots=\lim_{n\to\infty}k!\frac{1}{n}=0\Rightarrow$ converge para $0$.
			                                <br />
			                                (d) Note que $\displaystyle a_n=\frac{\sqrt{2n}}{n+2}$. Logo, $\displaystyle\lim_{n\to\infty}\frac{\sqrt{2n}}{n+2}\left(\frac{\frac{1}{n}}{\frac{1}{n}}\right)=\lim_{n\to\infty}\frac{\sqrt{\frac{2}{n}}}{1+\frac{2}{n}}=0\Rightarrow$ converge para $0$.
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
		                                2. Considere a sequência $\{a_n\}$ definida por $a_1=\sqrt{2}$ e $a_{n+1}=\sqrt{2+a_n}$, para todo $n\in\mathbb{N}$. Mostre que $\{a_n\}$ é convergente verificando que esta sequência é monótona e limitada. Em seguida, determine seu limite.
		                            </p>
		                            <!-- Resposta -->
		                            	<p style="display: none; background: #eee; padding: 0.5cm " id="d_2_">
			                                Dica:
			                                <br />
			                                Inicialmente, mostre que $a_n<2$ para todo $n\in\mathbb{N}$. Use este fato para provar que a sequência é monótona crescente e limitada entre $\sqrt{2}$ e $2$.
			                            </p>
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_2_">
			                                Solução:
			                                <br />
			                                Inicialmente, vamos mostrar que $a_n<2$ para todo $n\in\mathbb{N}$. Para isso, vamos utilizar o primeiro princípio de indução.
			                                <br />
			                                (i) $n=1$: $a_1=\sqrt{2}<2$.
			                                <br />
			                                (ii) Suponha que a propriedade seja válida para $n$, ou seja, $a_n<2$.
			                                <br />
			                                (iii) Para $n+1$: $a_{n+1}=\sqrt{2+a_n}<\sqrt{2+2}=\sqrt{4}=2$.
			                                <br />
			                                Assim, $a_n<2$ para todo natural $n\geq 1$. Agora, vamos mostrar que $a_n< a_{n+1}$ para todo $n\in\mathbb{N}$, usando, também, o primeiro princípio de indução.
			                                <br />
			                                (i) $n=1$: $a_1=\sqrt{2}<\sqrt{2+\sqrt{2}}=a_2$
			                                <br />
			                                (ii) Suponha que a propriedade seja válida para $n$, ou seja, $a_n< a_{n+1}$.
			                                <br />
			                                (iii) Para $n+1$: $a_{n+1}^2=2+a_n<2+a_{n+1}=a_{n+2}^2\Rightarrow a_{n+1}^2< a_{n+2}^2\Rightarrow a_{n+1}< a_{(n+1)+1}$. 
			                                <br />
			                                Deste modo, a sequência é monótona crescente e, além disso, é limitada, pois $\sqrt{2}\leq a_n<2$ para todo $n\in\mathbb{N}$. Logo, é convergente e vamos denotar $\displaystyle \lim_{n\to\infty} a_n=L\Rightarrow \lim_{n\to\infty} a_{n+1}=L$. Daí,
			                                $$a_{n+1}=\sqrt{2+a_n}\Rightarrow a_{n+1}^2=2+a_n\Rightarrow \lim_{n\to\infty} a_{n+1}^2=\lim_{n\to\infty} (2+a_n)\Rightarrow$$ $$\Rightarrow L^2=2+L\Rightarrow L=2\;\textrm{ou}\; L=-1.$$
			                                Como $\sqrt{2}\leq a_n$ para todo $n\in\mathbb{N}$, tem-se que $L=2$.
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
		                                3. Determine se as séries numéricas são convergentes ou divergentes.
		                                <br />
		                                (a) $\displaystyle \sum_{n=3}^{\infty}\frac{3^n-2^n}{6^n}$
		                                <br />
		                                (b) $\displaystyle\sum_{n=1}^{\infty}\frac{1}{2n+3}$
		                                <br />
		                                (c) $\displaystyle\sum_{n=1}^{\infty}\frac{\ln n}{n^3}$
		                                <br />
		                                (d) $\displaystyle\sum_{n=1}^{\infty}\left(\frac{n+2}{n+5}\right)^{2n}$
		                                <br />
		                                (e) $\displaystyle\sum_{n=1}^{\infty}\frac{n}{n^3+1}$
		                                <br />
		                                (f) $\displaystyle\sum_{n=1}^{\infty}\frac{1}{\sqrt{n}\;\cos^2 n}$
		                                <br />
		                                (g) $\displaystyle\sum_{n=1}^{\infty}\frac{1}{\left(2n-1\right)\left(2n+1\right)}$ 
		                            </p>
		                            <!-- Resposta -->
		                            	<p style="display: none; background: #eee; padding: 0.5cm " id="d_3_">
			                                Dica:
			                                <br />
			                                (a) Separe a expressão $\frac{3^n-2^n}{6^n}$ na diferença entre duas séries geométricas convergentes e, portanto, a série inicial é converge.
			                                <br />
			                                (b) Aplique o teste de comparação de limites.
			                                <br />
			                                (c) Aplique o teste da integral.
			                                <br />
			                                (d) Aplique o teste da divergência e use o limite fundamental $\displaystyle\lim_{n\to0} \left(1+\frac{1}{n}\right)^n=e$.
			                                <br />
			                                (e) Aplique o teste da comparação.
			                                <br />
			                                (f) Use o fato de que $-1\leq \cos n\leq 1$ para todo $n$ e aplique o teste da comparação.
			                                <br />
			                                (g) Utilize frações parciais para determinar uma fórmula para $s_n$.
			                            </p>
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_3_">
			                                Solução:
			                                <br />
			                                (a) Observe que $\frac{3^n-2^n}{6^n}=\left(\frac{3}{6}\right)^n-\left(\frac{2}{6}\right)^n=\left(\frac{1}{2}\right)^n-\left(\frac{1}{3}\right)^n$. Como $\sum \left(\frac{1}{2}\right)^n$ e $\sum \left(\frac{1}{3}\right)^n$ são séries geométricas convergentes, então $\sum \frac{3^n-2^n}{6^n}$ também é convergente.
			                                <br />
			                                (b) Vamos comparar as séries $\sum \frac{1}{2n+3}$ e $\sum \frac{1}{n}$ ($p$-série divergente) através do limite. $$\lim_{n\to\infty}\frac{\frac{1}{2n+3}}{\frac{1}{n}}=\lim_{n\to\infty}\frac{n}{2n+3}=\frac{1}{2}.$$ Portanto, $\sum \frac{1}{2n+3}$ é divergente.
			                                <br />
			                                (c) A função $f(x)=\frac{\ln x}{x^3}$ é contínua, positiva e decrescente em $[1\infty)$, logo podemos aplicar o teste da integral. Para isso, vamos calcular, inicialmente, a integral $\int\frac{\ln x}{x^3}\,dx$ usando integração e as substituições $u=\ln x$ e $dv=\frac{1}{x^3}\,dx$. Logo, $$\int\frac{\ln x}{x^3}\,dx=(\ln x)\left(-\frac{1}{2x^2}\right)-\int -\frac{1}{2x^2}\cdot\frac{1}{x}\,dx=-\frac{\ln x}{2x^2}-\frac{1}{4x^2}.$$ Assim, $$\int_1^{\infty} \frac{\ln x}{x^3}\,dx=\lim_{t\to \infty} \int_1^t \frac{\ln x}{x^3}\,dx=\lim_{t\to \infty} \left.-\frac{\ln x}{2x^2}-\frac{1}{4x^2}\right\rvert_{1}^{t}=\lim_{t\to \infty} \frac{\ln \frac{1}{t}}{2t^2}-\frac{1}{4t^2}+\frac{1}{4}=\frac{1}{4}.$$ Portanto, a série $\sum \frac{\ln n}{n^3}$ é convergente.
			                                <br />
			                                (d) Inicialmente, vamos manipular a expressão $\left(\frac{n+2}{n+5}\right)^{2n}$ do seguinte modo: $$\left(\frac{n+2}{n+5}\right)^{2n}=\left(\frac{n+5-3}{n+5}\right)^{2n}=\left(1-\frac{3}{n+5}\right)^{2n}=\left(1+\frac{1}{x}\right)^{-6x-10}.$$ Observe que utilizamos a substituição $-\frac{3}{n+5}=\frac{1}{x}\Rightarrow n=-3x-5$. Agora, vamos aplicar o teste da divergência: $$\lim_{n\to\infty} \left(\frac{n+2}{n+5}\right)^{2n}=\lim_{x\to\infty} \left(1+\frac{1}{x}\right)^{-6x-10}=\lim_{x\to\infty} \left[\left(1+\frac{1}{x}\right)^x\right]^{-6}\left(1+\frac{1}{x}\right)^{-10}=e^{-6}.$$ Portanto, a série diverge. 
			                                <br />
			                                (e) Sabemos que a série $\sum \frac{1}{n^2}$ é convergente, pois é uma $p$-série com $p=2$. Assim, $$\frac{n}{n^3+1}<\frac{n}{n^3}=\frac{1}{n^2}$$ e, portanto, $\sum \frac{n}{n^3+1}$ é convergente.
			                                <br />
			                                (f) Sabemos que $-1\leq\cos n\leq 1$ para todo $n$, logo $\cos^2 n\leq 1$ para todo $n$. Daí, $$\cos^2 n\leq 1\Rightarrow \sqrt{n}\cos^2 n\leq \sqrt{n}\Rightarrow \frac{1}{\sqrt{n}\cos^2 n}\geq \frac{1}{\sqrt{n}}=\frac{1}{n^{1/2}}.$$ Observe que se $n \in\mathbb{N}$, então $\cos^2 n\neq0$, pois $\cos^2 n=0\Rightarrow \cos n=0\Rightarrow n=\frac{\pi}{2}+k\pi,\; k\in\mathbb{Z} \Rightarrow n=\frac{\pi+2k\pi}{2}=\frac{\pi(1+2k)}{2}\notin \mathbb{N}$. Sendo assim, como $\frac{1}{n^{1/2}}$ é uma $p$-série divergente, tem-se que $\sum \frac{1}{\sqrt{n}\cos^2 n}$ também é divergente. 
			                                <br />
			                                (g) Note que,
			                                \begin{eqnarray*}
			                                	\frac{1}{(2n-1)(2n+1)} &=& \frac{A}{2n-1}+\frac{B}{2n+1}\\
			                                	&=& \frac{(2n+1)A+(2n-1)B}{(2n-1)(2n+1)}\\
			                                	&=& \frac{A-B+(2A+2B)n}{(2n-1)(2n+1)}
			                                \end{eqnarray*}
			                                Daí, $2A+2B=0$ e $A-B=1\Rightarrow A=\frac{1}{2}$ e $B=-\frac{1}{2}$. Agora, vamos utilizar a nova expressão $\frac{1}{2(2n-1)}-\frac{1}{2(2n+1)}=\frac{1}{(2n-1)(2n+1)}$ para calcular $s_n$. $$s_n=a_1+a_2+\cdots+a_n=\left(\frac{1}{2\cdot1}-\frac{1}{2\cdot3}\right)+\left(\frac{1}{2\cdot3}-\frac{1}{2\cdot5}\right)+\cdots+\left(\frac{1}{2(2n-1)}-\frac{1}{2(2n+1)}\right)=\frac{1}{2}-\frac{1}{2(2n+1)}\Rightarrow \lim_{n\to\infty} s_n=\frac{1}{2}.$$ Portanto, a série $\sum \frac{1}{(2n-1)(2n+1)}$ converge.
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
		                                4. Os termos de uma série são definidos de forma recursiva pelas equações $$a_1=2\;\;\;\;\textrm{e}\;\;\;\;a_{n+1}=\frac{5n+1}{4n+3}a_n.$$ Determine se a série $\sum a_n$ converge ou diverge.
		                            </p>
		                            <!-- Resposta -->
		                            	<p style="display: none; background: #eee; padding: 0.5cm " id="d_4_">
			                                Dica:
			                                <br />
			                                Aplique o teste da razão.
			                            </p>
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_4_">
			                                Solução:
			                                <br />
			                                Neste caso, vamos aplicar o teste da razão, mas para isto, precisamos calcular o módulo $\left|\frac{a_{n+1}}{a_n}\right|$. $$\left|\frac{a_{n+1}}{a_n}\right|=\left|\frac{\frac{5n+1}{4n+3}a_n}{a_n}\right|=\frac{5n+1}{4n+3}\Rightarrow\lim_{n\to\infty}\left|\frac{a_{n+1}}{a_n}\right|=\frac{5}{4}>1\Rightarrow \sum a_n\;\;\textrm{diverge}.$$
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
		                                5. Mostre que a série $\displaystyle\sum_{n=1}^{\infty}\frac{\left(-1\right)^{n}}{\sqrt{3n-1}}$ é condicionalmente convergente.
		                            </p>
		                            <!-- Resposta -->
		                            	<p style="display: none; background: #eee; padding: 0.5cm " id="d_5_">
			                                Dica:
			                                <br />
			                                Mostre que a série $\sum \frac{\left(-1\right)^{n}}{\sqrt{3n-1}}$ converge, mas $\sum\left|\frac{\left(-1\right)^{n}}{\sqrt{3n-1}}\right|$ diverge.
			                            </p>
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_5_">
			                                Solução:
			                                <br />
			                                Temos de mostrar que a série $\sum \frac{\left(-1\right)^{n}}{\sqrt{3n-1}}$ converge, mas $\sum\left|\frac{\left(-1\right)^{n}}{\sqrt{3n-1}}\right|$ diverge.
			                                <br />
			                                (i) Escrevendo $b_n=\frac{1}{\sqrt{3n-1}}$, temos que $$3n-1\leq 3(n+1)-1\Rightarrow \sqrt{3n-1}\leq \sqrt{3(n+1)-1}\Rightarrow \frac{1}{\sqrt{3n-1}}\geq \frac{1}{\sqrt{3(n+1)-1}}\Rightarrow b_n\geq b_{n+1},\;\forall n\in\mathbb{N}.$$ Além disso, $\displaystyle\lim_{n\to\infty} b_n=0$ e, pelo teste da razão, a série $\sum \frac{\left(-1\right)^{n}}{\sqrt{3n-1}}$ converge.
			                                <br />
			                                (ii) $\sum\left|\frac{\left(-1\right)^{n}}{\sqrt{3n-1}}\right|=\sum \frac{1}{\sqrt{3n-1}}$. Assim, $$\frac{1}{\sqrt{3n-1}}>\frac{1}{\sqrt{3n}}=\frac{1}{\sqrt{3}\sqrt{n}}.$$ Como a série $\sum \frac{1}{\sqrt{n}}$ é divergente, tem-se o mesmo para $\sum \frac{1}{\sqrt{3}\sqrt{n}}$ e, pelo teste da comparação, $\sum \frac{1}{\sqrt{3n-1}}$ diverge.
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
		                                6. Determine o domínio e o raio de convergência das séries de potências abaixo.
		                                <br />
		                                (a) $\displaystyle\sum^{\infty}_{n=1}\frac{3^n(x+4)^n}{\sqrt{n}}$
		                                <br />
		                                (b) $\displaystyle\sum^{\infty}_{n=1}\frac{(2n-1)^n}{5^n\sqrt{n}}$
		                            </p>
		                            <!-- Resposta -->
		                            <!--<p style="display: none; background: #eee; padding: 0.5cm " id="d_6_">
			                                Em construção: dica
			                            </p>-->
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_6_">
			                                Solução:
			                                <br />
			                                (a) Aplicando o teste da razão, $$\lim_{n\to\infty}\left|\frac{\frac{3^{n+1}(x+4)^{n+1}}{\sqrt{n+1}}}{\frac{3^n(x+4)^n}{\sqrt{n}}}\right|=\lim_{n\to\infty} 3|x+4|\cdot\frac{\sqrt{n}}{\sqrt{n+1}}=3|x+4|.$$ Fazendo $3|x+4|<1$ determinamos valores de $x$ nos quais a série de potência converge, logo $$3|x+4|<1\Rightarrow |x+4|<\frac{1}{3}\Rightarrow -\frac{1}{3}< x+4<\frac{1}{3}\Rightarrow -\frac{13}{3}< x<-\frac{11}{3}.$$ Entretando, o teste da razão é inconclusivo para $x=-\frac{13}{3}$ e $x=-\frac{11}{3}$. Se colocarmos $x=-\frac{13}{3}$ na série, ela se tornará $\sum \frac{(-1)^n}{\sqrt{n}}$ que é convergente pelo teste da série alternada. Colocando $x=-\frac{11}{3}$ na série, obtemos $\sum \frac{1}{\sqrt{n}}$ que é divergente. Portanto, o domínio é $\left[-\frac{13}{3},-\frac{11}{3}\right)$ e o raio de convergência é $\frac{1}{3}$.
			                                <br />
			                                (b) Aplicando o teste da razão, $$\lim_{n\to\infty}\left| \frac{\frac{(2(n+1)-1)^{n+1}}{5^{n+1}\sqrt{n+1}}}{\frac{(2n-1)^n}{5^n\sqrt{n}}} \right|=\lim_{n\to\infty}\frac{|2x-1|}{5}\cdot\frac{\sqrt{n}}{\sqrt{n+1}}=\frac{|2x-1|}{5}.$$ Logo, $$\frac{|2x-1|}{5}<1\Rightarrow |2x-1|<5\Rightarrow -5<2x-1<5\Rightarrow -2< x<3.$$ Substituindo $x=-2$ na série, obtemos $\sum \frac{(-1)^n}{\sqrt{n}}$ que é convergente pelo teste da série alternada. Substituindo $x=3$, obtemos $\sum \frac{1}{\sqrt{n}}$ que é divergente. Portando, o domínio da série de potência é $[-2,3)$ e o raio de convergência é $\frac{5}{2}$.
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
		                                7. Supondo que a função $f(x)=\ln(1+x)$ possui representação em série de potências, encontre a série de Maclaurin de $f(x)$.
		                            </p>
		                            <!-- Resposta -->
		                            <!--<p style="display: none; background: #eee; padding: 0.5cm " id="d_7_">
			                                Em construção: dica
			                            </p>-->
			                            <p style="display: none; background: #eee; padding: 0.5cm " id="r_7_">
			                                Solução:
			                                <br />
			                                Vamos calcular as derivadas parciais aplicadas no valor $a=0$. Assim,
			                                $$\begin{matrix}
			                                	f(x)=\ln(1+x) &&&& f(0)=0\\
			                                	f'(x)=(1+x)^{-1} &&&& f'(0)=1\\
			                                	f''(x)=(-1)(1+x)^{-2} &&&& f''(0)=-1\\
			                                	f'''(x)=(-2)(-1)(1+x)^{-3} &&&& f'''(0)=2\\
			                                	\vdots&&&&\vdots\\
			                                	f^{(n)}(x)=(-1)^{n+1}(n-1)!(1+x)^{-n} &&&& f^{(n)}(0)=(-1)^{n+1}(n-1)!
			                                \end{matrix}$$
			                                Substituindo estes valores na fórmula de Maclaurin obtemos que: $$\begin{matrix} \displaystyle f(x)=f(0)+\frac{f'(0)}{1!}x+\frac{f''(0)}{2!}x^2+\frac{f'''(0)}{3!}x^3+\cdots+\frac{f^{(n)}(0)}{n!}x^n+\cdots \\
			                                \displaystyle f(x)=x-\frac{1}{2}x^2+\frac{1}{3}x^3-\frac{1}{4}x^4+\cdots\\
			                                \displaystyle f(x)=\sum_{n=1}^{\infty} (-1)^{n+1}\frac{x^n}{n}
			                                \end{matrix}$$
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