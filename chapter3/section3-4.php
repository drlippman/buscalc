<!DOCTYPE html>
<html lang="en">
<?php include '../includes/head.html'; ?>
<body>
<!--Nav must come after any GeoGebra script includes-->
<?php include '../includes/nav.html'; ?>
<div class="page-wrap">
<header class="main-nav-buttons">
	<a href="#main-nav" class="open-menu">&equiv; </a>
	<a href="#close-nav" class="close-menu">&times; </a>
	<!--<h1>menu</h1>-->
 </header>

<section class="content">
<h1>Section 3.4: Substitution</h1>

<p>We don't have many integration rules. For quite a few of the problems we see, the rules won't directly apply; we'll have to do some algebraic manipulation first. In practice, it is much harder to write down the antiderivative of a function than it is to find a derivative. (In fact, it's very easy to write a function that doesn't have any antiderivative you can find with algebra, although <em>proving</em> that it doesn't have an antiderivative is much more difficult.)</p>

<p>The Substitution Method (also called \( u \)-Substitution) is one way of algebraically manipulating an integrand so that the rules apply. This is a way to unwind or undo the Chain Rule for derivatives. When you find the derivative of a function using the Chain Rule, you end up with a product of something like the original function <em>times</em> a derivative. We can reverse this to write an integral: \[ \frac{d}{dx} f\left( g(x) \right) = f'\left( g(x) \right)g'(x) \] so \[ f\left( g(x) \right) =\int f'\left( g(x) \right)g'(x)\, dx\]</p>

<p>With substitution, we will substitute \( u=g(x) \) (hence the name <q>\( u \)-substitution</q>). This means \( \frac{du}{dx}=g'(x) \), so \( du=g'(x)dx \). Making these substitutions, \( \int f'\left( g(x) \right)g'(x)\, dx \) becomes \( \int f'(u)\, du \), which will probably be easier to integrate.</p>

<p>Try \( u \)-Substitution when you see a product in your integral, especially if you recognize one factor as the derivative of some part of the other factor.</p>

<div class="videoplayer w639">
	<video id="video_3.4.1" class="video-js vjs-default-skin" controls preload="metadata" width="639" height="auto">
		<source src="video_3-4/intro_and_example.webm" type='video/webm' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_3-4/intro_and_example.mp4" type='video/mp4' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

<div class="important">
	<h4>The \( u \)-Substitution Method for Antiderivatives</h4>
	<p>The goal is to turn \( \int f\left( g(x) \right)\, dx \) into \( \int f(u)\, du \), where \(f(u)\) is much less messy than \(f\left(g(x)\right)\).</p>
	<ol>
		<li>Let \(u\) be some part of the integrand. A good first choice is <q>one step inside the messiest bit.</q></li>
		<li>Compute \( du=\frac{du}{dx}dx \).</li>
		<li>Translate all your \(x\)'s into \(u\)'s everywhere in the integral, including the \(dx\). When you're done, you should have a new integral that is entirely in \(u\). If you have any \(x\)'s left, then that's an indication that the substitution didn't work or isn't complete; you may need to go back to step 1 and try a different choice for \(u\).</li>
		<li>Integrate the new \(u\)-integral, if possible. If you still can't integrate it, go back to step 1 and try a different choice for \(u\).</li>
		<li>Finally, substitute back \(x\)'s for \(u\)'s everywhere in your answer.</li>
	</ol>
</div>

<div class="example">
	<h4>Example 1</h4>
	<p>Evaluate \( \int \frac{x}{\sqrt{4-x^2}}\, dx \).</p>
	<p>This integrand is more complicated than anything in our list of basic integral formulas, so we'll have to try something else. The only tool we have is substitution, so let's try that!</p>
	<ol>
		<li>
			<p>Let \(u\) be some part of the integrand. A good first choice is <q>one step inside the messiest bit</q>:</p>
			<p>Let \( u=4-x^2 \).</p>
		</li>
		<li>
			<p>Compute \( du=\frac{du}{dx}dx \):</p>
			<p>\( du=-2x\, dx \). There is \(x\, dx\) in the integrand, so that’s a good sign; that will be \(-\frac{1}{2}du\).</p>
		</li>
		<li>
			<p>Translate all your \(x\)'s into \(u\)'s everywhere in the integral, including the \(dx\):</p>
			<p>
				\[ \begin{align*}
					\int\frac{x}{\sqrt{4-x^2}}\, dx=&amp; \int\frac{1}{\sqrt{4-x^2}}(x\, dx) \\
					=&amp; \int\frac{1}{\sqrt{u}}\left(-\frac{1}{2}du\right) \\
					=&amp; -\frac{1}{2}\int\frac{1}{\sqrt{u}}\, du \\
					=&amp; -\frac{1}{2}\int u^{-1/2}\, du
				\end{align*} \]
			</p>
			<p>Alternatively, we could have solved for dx and substituted that and simplified: \( dx=\frac{du}{-2x} \), so
				\[ \begin{align*}
					\int\frac{x}{\sqrt{4-x^2}}\, dx=&amp; \int\frac{x}{\sqrt{u}}\left(\frac{du}{-2x}\right) \\
					=&amp; \int\frac{1}{\sqrt{u}}\left(-\frac{1}{2}du\right) \\
					=&amp; -\frac{1}{2}\int\frac{1}{\sqrt{u}}\, du \\
					=&amp; -\frac{1}{2}\int u^{-1/2}\, du
				\end{align*} \]
			</p>
		</li>
		<li>
			<p>Integrate the new \(u\)-integral, if possible:</p>
			<p>\[ -\frac{1}{2}\int u^{-1/2}\, du = -\frac{1}{2}\frac{u^{1/2}}{1/2}+C=-u^{1/2}+C \]</p>
		</li>
		<li>
			<p>Finally, substitute back \(x\)'s for \(u\)'s everywhere in the answer:</p>
			<p>Undoing our \( u=4-x^2 \) substitution yields \[ -u^{1/2}+C = -\sqrt{4-x^2}+C. \]</p>
		</li>
	</ol>
	<p>Thus we have found \[ \int\frac{x}{\sqrt{4-x^2}}\, dx= -\sqrt{4-x^2}+C \]</p>
	<p>How would we check this? By differentiating:
		\[ \begin{align*}
			\frac{d}{dx}\left(-\sqrt{4-x^2}+C\right)=&amp; \frac{d}{dx}\left(-\left(4-x^2\right)^{1/2}+C\right) \\
			=&amp; -\frac{1}{2}\left(4-x^2\right)^{-1/2}(-2x) \\
			=&amp; x\left(4-x^2\right)^{-1/2} \\
			=&amp; \frac{x}{\sqrt{4-x^2}}
		\end{align*} \]
	</p>
</div>

<div class="videoplayer w639">
	<video id="video_3.4.2" class="video-js vjs-default-skin" controls preload="metadata" width="639" height="auto">
		<source src="video_3-4/indefinite_u-sub_examples.webm" type='video/webm' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_3-4/indefinite_u-sub_examples.mp4" type='video/mp4' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

<div class="example">
	<h4>Example 2</h4>
	<p>Evaluate \( \int\frac{e^x\, dx}{\left(e^x+15\right)^3} \)</p>
	<p>This integral is not in our list of building blocks. But notice that the derivative of \( e^x+15 \) (which we see in the denominator) is just \( e^x \) (which we see in the numerator), so substitution will be a good choice for this.</p>
	<p>Let \( u=e^x+15 \). Then \( du=e^x\, dx \), and this integral becomes \( \int\frac{du}{u^3} = \int u^{-3}\, du \).</p>
	<p>Luckily, that is on our list of building block formulas: \( \int\frac{du}{u^3} = \frac{u^{-2}}{-2}+C = -\frac{1}{2u^2}+C \).</p>
	<p>Finally, translating back: \[ \int\frac{e^x\, dx}{\left(e^x+15\right)^3} = -\frac{1}{2\left(e^x+15\right)^2} +C. \]</p>
</div>

<div class="example">
	<h4>Example 3</h4>
	<p>Evaluate</p>
	<ol class="smlatin">
		<li>\( \int\frac{x^2}{x^3+5}\, dx \)</li>
		<li>\( \int\frac{x^3+5}{x^2}\, dx \)</li>
	</ol>
	<ol class="smlatin">
		<li>
			<p>This is not a basic integral, but the composition is less obvious. Here, we can treat the denominator as the inside of the \( \frac{1}{x} \) function.</p>
			<p>Let \( u=x^3+5 \). Then \( du=3x^2\, dx \). Solving for \(dx\), \( dx=\frac{du}{3x^2} \). Substituting, \[ \int\frac{x^2}{x^3+5}\, dx = \int\frac{x^2}{u}\frac{du}{3x^2} = \int \frac{1}{u}\frac{du}{3} = \frac{1}{3}\int \frac{1}{u}\, du \]</p>
			<p>Using our basic formulas, \[ \frac{1}{3}\int \frac{1}{u}\, du = \frac{1}{3}\ln|u| +C. \]</p>
			<p>Undoing the substitution, \[ \int\frac{x^2}{x^3+5}\, dx = \frac{1}{3}\ln\left|x^3+5\right| +C. \]</p>
		</li>
		<li>
			<p>It is tempting to start this problem the same way we did the last, but if we try it will not work, since the numerator of this fraction is not the derivative of the denominator. Instead, we need to try a different approach. For this problem, we can use some basic algebra:
			\[ \begin{align*}
				\int\frac{x^3+5}{x^2}\, dx =&amp; \int\left(\frac{x^3}{x^2}+\frac{5}{x^2}\right)\, dx \\
				=&amp; \int\left(x+5x^{-2}\right)\, dx.
			\end{align*} \]
			</p>
			<p>We can integrate this using our basic rules, without needing substitution: 
			\[ \begin{align*}
				\int\left(x+5x^{-2}\right)\, dx=&amp; \frac{x^2}{2}+5\frac{x^{-1}}{-1}+C \\
				=&amp; \frac{1}{2}x^2-\frac{5}{x}+C.
			\end{align*} \]
			</p>
		</li>
	</ol>
</div>

<section><h2>Substitution and Definite Integrals</h2>

<p>When you use substitution to help evaluate a definite integral, you have a choice for how to handle the limits of integration. You can do either of these, whichever seems better to you. The important thing to remember is that the original limits of integration were values of the original variable (say, \(x\)), not values of the new variable (say, \(u\)).</p>

<ol>
	<li><p>You can solve the antiderivative as a side problem, translating back to \(x\)’s, and then use the antiderivative with the original limits of integration.</p><p>Or&hellip;</p></li>
	<li>
		<p>You can substitute for the limits of integration at the same time as you’re substituting for everything inside the integral, and then skip the <q>translate back into \(x\)</q> step.</p>
		<p>If the original integral had endpoints \(x =a\) and \(x =b\), and we make the substitution \(u = g(x )\) and \(du = g'(x )\, dx\), then the new integral will have endpoints \(u= g(a)\) and \(u=g(b)\) and \[ \int_{x=a}^{x=b}\text{(original integrand)}\, dx\] becomes \[ \int_{u=g(a)}^{u=g(b)} \text{(new integrand)}\, du.\]</p>
	</li>
</ol>

<p>Method 1 seems more straightforward for most students, but it can involve some messy algebra. Method 2 is often neater and usually involves fewer steps.</p>

<div class="example">
	<h4>Example 4</h4>
	<p>Evaluate \( \int\limits_0^1 (3x-1)^4\, dx \).</p>
	<p>We'll need substitution to find an antiderivative, so we'll need to handle the limits of integration carefully. Let's solve this example both ways.</p>
	<ol>
		<li>
			<p><strong>Doing the antiderivative as a side problem:</strong></p>
			<p>Step One &ndash; find the antiderivative, using substitution:</p>
			<p>Let \( u=3x-1 \). Then \( du=3\, dx \) and \[ \int(3x-1)^4\, dx = \int u^4\left(\frac{1}{3}\, du\right) = \frac{1}{3}\frac{u^5}{5}+C. \]</p>
			<p>Translating back to x: \[ \frac{1}{3}\frac{u^5}{5}+C = \frac{(3x-1)^5}{15}+C. \]</p>
			<p>Step Two &ndash; evaluate the definite integral: \[ \int\limits_0^1 (3x-1)^4\, dx = \left. \frac{(3x-1)^5}{15}\right]_0^1 = \frac{\left(3(1)-1\right)^5}{15} - \frac{\left(3(0)-1\right)^5}{15} = \frac{32}{15}-\frac{-1}{15}=\frac{33}{15}. \]</p>
		</li>
		<li>
			<p><strong>Substituting for the limits of integration:</strong></p>
			<p>Let \( u=3x-1 \). Then \( du=3\, dx \) and, substituting for the limits of integration, when \(x = 0\), \(u = -1\), and when \(x = 1\), \(u = 2\).</p>
			<p>So,
				\[ \begin{align*}
					\int_{x=0}^{x=1} (3x-1)^4\, dx =&amp; \int_{u=-1}^{u=2} u^4\left(\frac{1}{3}\, du\right) \\
					=&amp; \left.\frac{u^5}{15}\right]_{u=-1}^{u=2} \\
					=&amp; \frac{(2)^5}{15}-\frac{(-1)^5}{15} \\
					=&amp; \frac{32}{15}-\frac{-1}{15} \\
					=&amp; \frac{33}{15}
				\end{align*} \]
			</p>
		</li>
	</ol>
</div>

<div class="videoplayer w639">
	<video id="video_3.4.3" class="video-js vjs-default-skin" controls preload="metadata" width="639" height="auto">
		<source src="video_3-4/definite_u-sub_examples.webm" type='video/webm' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_3-4/definite_u-sub_examples.mp4" type='video/mp4' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

<div class="example">
	<h4>Example 5</h4>
	<p>Evaluate \( \int\limits_2^{10} \frac{\left(\ln(x)\right)^6}{x}\, dx \).</p>
	<p>I can see the derivative of \( \ln(x) \) in the integrand, so I can tell that substitution is a good choice.</p>
	<p>Let \( u=\ln(x) \). Then \( du=\frac{1}{x}\, dx \). When \( x=2 \), \( u=\ln(2) \). When \( x=10 \), \( u=\ln(10) \). So the new definite integral is
		\[ \begin{align*}
			\int\limits_{x=2}^{x=10}\frac{\left(\ln(x)\right)^6}{x}\, dx =&amp; \int\limits_{u=\ln(2)}^{u=\ln(10)} u^6\, du \\
			=&amp; \left.\frac{u^7}{7}\right]_{u=\ln(2)}^{u=\ln(10)} \\
			=&amp; \frac{1}{7}\left(\left(\ln(10)\right)^7-\left(\ln(2)\right)^7\right) \\
			\approx &amp; 49.01.
		\end{align*} \]
	</p>
</div>

</section>

<!--
<aside>
<h2>Exercises</h2>

</aside>
-->

</section>
<footer class="footer-nav">
	<table>
		<tr>
			<td><a href="section3-3.php">&larr; Previous Section</a></td>
			<td><a href="section3-5.php">Next Section &rarr; </a></td>
		</tr>
	</table>
</footer>
</div>
</body>
</html>