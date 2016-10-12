<!DOCTYPE html>
<html lang="en">
<?php include '../includes/head.html'; ?>
<body>
<?php include '../includes/nav.html'; ?>
<div class="page-wrap">
<header class="main-nav-buttons">
	<a href="#main-nav" class="open-menu">&equiv; </a>
	<a href="#close-nav" class="close-menu">&times; </a>
	<!--<h1>menu</h1>-->
 </header>

<section class="content">
<h1>Section 1.4: Exponents</h1>

<p>The Laws of Exponents let you rewrite algebraic expressions that involve exponents. The last three listed here are really definitions rather than rules.</p>

<div class="thmdef">
	<h4>Laws of Exponents</h4>
	<p>All variables here represent real numbers and all variables in denominators are nonzero.</p>
	<ol>
		<li>\(x^a\cdot x^b=x^{a+b}\)</li>
		<li>\(\dfrac{x^a}{x^b}=x^{a-b}\)</li>
		<li>\(\left(x^a\right)^b=x^{ab}\)</li>
		<li>\((xy)^a=x^a y^a\)</li>
		<li>\(\left(\dfrac{x}{y}\right)^b=\dfrac{x^b}{y^b}\)</li>
		<li>\(x^0=1\), provided \(x\neq 0\). [Although in some contexts \(0^0\) is still defined to be 1.]</li>
		<li>\(x^{-n}=\dfrac{1}{x^n}\), provided \(x\neq 0\).</li>
		<li>\(x^{1/n}=\sqrt[n]{x}\), provided \(x\neq 0\).</li>
	</ol>
</div>

<div class="videoplayer w639">
	<video id="video_1.4.1" class="video-js vjs-default-skin" controls preload="metadata" width="639" height="auto">
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_1-4/exponent_comments.mp4" type='video/mp4' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_1-4/exponent_comments.webm" type='video/webm' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

<div class="example">
	<h4>Example 1</h4>
	<p>Simplify \(\left(2x^2\right)^3(4x)\).</p>
	<p>We'll begin by simplifying the \(\left(2x^2\right)^3\) portion. Using Property 4, we can write</p>
	<table class="noborder">
		<tr>
			<td>\(2^3\left(x^2\right)^3(4x)\)</td>
			<td></td>
		</tr>
		<tr>
			<td>\(8x^6(4x)\)</td>
			<td>Evaluate \(2^3\), and use Property 3.</td>
		</tr>
		<tr>
			<td>\(32x^7\)</td>
			<td>Multiply the constants, and use Property 1, recalling \(x = x^1\).</td>
		</tr>
	</table>
</div>

<p>Being able to work with negative and fractional exponents will be very important later in this course.</p>

<div class="example">
	<h4>Example 2</h4>
	<p>Rewrite \(\dfrac{5}{x^3}\) using negative exponents.</p>
	<p>Since \(x^{-n}=\dfrac{1}{x^n}\), then \(x^{-3}=\dfrac{1}{x^3}\) and thus \[\dfrac{5}{x^3}=5x^{-3}.\]</p>
</div>

<div class="example">
	<h4>Example 3</h4>
	<p> Simplify \(\left(\dfrac{x^{-2}}{y^{-3}}\right)^2\) as much as possible and write your answer using only positive exponents.
	\begin{align*}
		\left(\dfrac{x^{-2}}{y^{-3}}\right)^2=&amp; \dfrac{\left(x^{-2}\right)^2}{\left(y^{-3}\right)^2}\\
		=&amp; \dfrac{x^{-4}}{y^{-6}}\\
		=&amp; \dfrac{y^6}{x^4}
	\end{align*}
	</p>
</div>

<div class="example">
	<h4>Example 4</h4>
	<p>Rewrite \(4\sqrt{x}-\dfrac{3}{\sqrt{x}}\) using exponents.</p>
	<p>A square root is a radical with index of two. In other words, \(\sqrt{x}=\sqrt[2]{x}\). Using the exponent rule above, \(\sqrt{x}=\sqrt[2]{x}=x^{1/2}\). Rewriting the square roots using the fractional exponent, \[4\sqrt{x}-\dfrac{3}{\sqrt{x}}=4x^{1/2}-\dfrac{3}{x^{1/2}}.\]</p>
	<p>Now we can use the negative exponent rule to rewrite the second term in the expression: \[4x^{1/2}-\dfrac{3}{x^{1/2}}=4x^{1/2}-3x^{-1/2}.\]</p>
</div>

<div class="example">
	<h4>Example 5</h4>
	<p>Rewrite \( \left(\sqrt{p^5}\right)^{-1/3} \) using only positive exponents.</p>
	
	<p>\begin{align*}
		\left(\sqrt{p^5}\right)^{-1/3}=&amp; \left(\left(p^5\right)^{1/2}\right)^{-1/3}\\
		=&amp; p^{-5/6}\\
		=&amp; \frac{1}{ p^{5/6}}
	\end{align*}
	</p>
</div>

<div class="example">
	<h4>Example 6</h4>
	<p>Rewrite \( x^{-4/3} \)as a radical.</p>
	<p>
	\begin{align*}
		x^{-4/3}=&amp; \frac{1}{x^{4/3}} \\
		=&amp; \frac{1}{\left(x^{1/3}\right)^4} \quad \text{(since \(\frac{4}{3}=4\cdot\frac{1}{3}\))}\\
		=&amp; \frac{1}{\left(\sqrt[3]{x}\right)^4} \quad \text{(using the radical equivalence)}
	\end{align*}
	</p>
</div>

<!--
<aside>
<h2>Exercises</h2>

</aside>
-->

</section>
<footer class="footer-nav">
	<table>
		<tr>
			<td><a href="section1-3.php">&larr; Previous Section</a></td>
			<td><a href="section1-5.php">Next Section &rarr; </a></td>
		</tr>
	</table>
</footer>
</div>
</body>
</html>