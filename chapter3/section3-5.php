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
<h1>Section 3.5: Additional Integration Techniques</h1>

<section><h2>Integration By Parts</h2>

<p>Integration by parts is an integration method which enables us to find antiderivatives of some new functions such as \( \ln(x) \) as well as antiderivatives of products of functions such as \( x^2\ln(x) \) and \( xe^x \).</p>

<p>If the function we're trying to integrate can be written as a product of two functions, \(u\), and \(dv\), then integration by parts lets us trade out a complicated integral for hopefully simpler one.</p>

<div class="important">
	<h4>Integration by Parts Formula</h4>
	<p>\[ \int u\, dv = uv-\int v\, du \]</p>
	<p>For definite integrals: \[ \int_a^b u\, dv = \left.uv\right]_a^b-\int_a^b v\, du \]</p>
</div>

<div class="example">
	<h4>Example 1</h4>
	<p>Integrate \( \int xe^x\, dx \).</p>
	<p>To use the Integration by Parts method, we break apart the product into two parts: \[ u=x \qquad\text{and}\qquad dv=e^x\, dx.\]</p>
	<p>We now calculate \(du\), the derivative of \(u\), and \(v\), the integral of \(dv\): \[ du=\left(\frac{d}{dx} x\right)\, dx \qquad\text{and}\qquad v= \int e^x\, dx = e^x.\]</p>
	<p>Using the Integration by Parts formula, \[ \int xe^x\, dx=uv-\int v\, du = xe^x - \int e^x\, dx.\]</p>
	<p>Notice the remaining integral is simpler that the original, and one which we can easily evaluate: \[ xe^x - \int e^x\, dx = xe^x-e^x+C. \]</p>
</div>

<p>In the last example we could have chosen either \(x\) or \( e^x \) as our \(u\), but had we chosen \( u=e^x \), the second integral would have become messier, rather than simpler.</p>

<div class="important">
	<h4>Rule of Thumb</h4>
	<p>When selecting the \(u\) for Integration by Parts, select a logarithmic expression if one is present. If not, select an algebraic expression (like \(x\) or \(dx\)).</p>
	<p>(There is a larger decision tree that can be written down for choosing \( u \) and \( dv \), but since we're not looking at any trigonometric functions in this course the rule above is sufficient for the functions we're integrating.)</p>
</div>

<div class="example">
	<h4>Example 2</h4>
	<p>Integrate \( \int\limits_1^4\, 6x^2\ln(x)\, dx \).</p>
	<p>Since this contains a logarithmic expression, we'll use it for our u: \[ u=\ln(x) \qquad \text{and} \qquad dv= 6x^2\, dx\]</p>
	<p>We now calculate \(du\) and \(v\): \[ du=\frac{1}{x}dx \qquad \text{and} \qquad v= \int 6x^2\, dx = 6\frac{x^3}{3}=2x^3 \]</p>
	<p>Using the By Parts formula: \[ \int_1^4 6x^2\ln(x)\, dx = \left.2x^3\ln(x)\right]_1^4 - \int_1^4 6x^2\frac{1}{x}\, dx \]</p>
	<p>We can simplify the expression in the integral on the right: \[ \int_1^4 6x^2\ln(x)\, dx = \left.2x^3\ln(x)\right]_1^4 - \int_1^4 6x\, dx \]</p>
	<p>The remaining integral is a basic one we can now evaluate: \[ \int_1^4 6x^2\ln(x)\, dx = \left.2x^3\ln(x)\right]_1^4 - \left.3x^2\right]_1^4 \]</p>
	<p>Finally, we can evaluate the expressions:
		\[ \begin{align*}
			\int_1^4 6x^2\ln(x)\, dx=&amp; \left(\left(2\cdot 4^3\ln(4)\right)-\left(2\cdot 1^3\ln(1)\right)\right)-\left(\left(3\cdot 4^2\right)-\left(3\cdot 1^2\right)\right)\\
			=&amp; 128\ln(4)-45\\
			\approx &amp; 132.446
		\end{align*} \]
	</p>
</div>

</section>

<section><h2>Integration Using Tables of Integrals</h2>

<p>There are many techniques of integration we will not be studying. Many of them lead to general formulas which can be compiled into a Table of Integrals &ndash; a type of cheat-sheet for integration.</p>

<p>For example, here are two entries you might find in a table of integrals:</p>

<div class="important">
	<h4>Table of Integral Examples</h4>
	<p>
		\[ \begin{align*}
			\int \frac{1}{x^2-a^2}\, dx =&amp; \frac{1}{2a}\ln\left|\frac{x-a}{x+a}\right|+C \\
			\int \frac{1}{\sqrt{x^2+a^2}}\, dx =&amp; \ln\left|x+\sqrt{x^2+a^2}\right|+C
		\end{align*} \]
	</p>
</div>

<div class="example">
	<h4>Example 3</h4>
	<p>Integrate \( \int\frac{5}{x^2-9}\, dx \).</p>
	<p>This integral looks very similar to the form of the first integral in the examples table. By employing the rule that allows us to pull out constants, and by rewriting 9 as \(3^2\), we can better see the match. \[ \int\frac{5}{x^2-9}\, dx = 5\int\frac{1}{x^2-3^2}\, dx \]</p>
	<p>Now we simply use the formula from the table, with \(a = 3\).
		\[ \begin{align*}
			\int\frac{5}{x^2-9}\, dx = &amp; 5\int\frac{1}{x^2-3^2}\, dx \\
			=&amp; 5\left(\frac{1}{2\cdot 3}\ln\left|\frac{x-3}{x+3}\right|\right)+C \\
			=&amp; \frac{5}{6}\ln\left|\frac{x-3}{x+3}\right|+C
		\end{align*} \]
	</p>
</div>

<p>Sometimes we have to combine the table with other techniques we've learned, like substitution.</p>

<div class="example">
	<h4>Example 4</h4>
	<p>Integrate \( \int\frac{x^2}{\sqrt{x^6+16}}\, dx \).</p>
	<p>This integral looks somewhat like the second integral in the example table, but the power of x is incorrect, and there is an x2 in the numerator which does not match. Trying to utilize this rule, we can try to rewrite the denominator to look like (something)\(^2\). Luckily, \( x^6 = \left(x^3\right)^2 \). \[ \int\frac{x^2}{\sqrt{x^6+16}}\, dx = \int\frac{x^2}{\sqrt{\left(x^3\right)^2+16}}\, dx \]</p>
	<p>Now we can use substitution, letting \( u=x^3 \), so \( du=3x^2\, dx \).</p>
	<p>Making the subsitution: \[ \int\frac{x^2}{\sqrt{\left(x^3\right)^2+16}}\, dx = \int\frac{1}{\sqrt{u^2+16}}\, \frac{du}{3} = \frac{1}{3}\int\frac{1}{\sqrt{u^2+16}}\, du \]</p>
	<p>Now we can use the table entry: \[ \frac{1}{3}\int\frac{1}{\sqrt{u^2+16}}\, du = \frac{1}{3}\ln\left|u+\sqrt{u^2+16}\right|+C \]</p>
	<p>Undoing the substitution yields the final answer: \[ \int\frac{x^2}{\sqrt{x^6+16}}\, dx = \frac{1}{3}\ln\left|x^3+\sqrt{x^6+16}\right|+C \]</p>
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
			<td><a href="section3-4.php">&larr; Previous Section</a></td>
			<td><a href="section3-6.php">Next Section &rarr; </a></td>
		</tr>
	</table>
</footer>
</div>
</body>
</html>