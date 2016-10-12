<!DOCTYPE html>
<html lang="en">
<?php include '../includes/head.html'; ?>
<body>
<!--GeoGebra script includes must come after body and before any NAV includes. Ctrl + Shift + M copies code-->
<?php include '../includes/geogebra_main_script.html'; ?>
<?php include 'geogebra/linear_approximation_manipulative.html'; ?>
<!--Nav must come after any GeoGebra script includes-->
<?php include '../includes/nav.html'; ?>
<div class="page-wrap">
<header class="main-nav-buttons">
	<a href="#main-nav" class="open-menu">&equiv; </a>
	<a href="#close-nav" class="close-menu">&times; </a>
	<!--<h1>menu</h1>-->
 </header>

<section class="content">
<h1>Section 2.10: Other Applications</h1>

<section><h2>Tangent Line Approximation</h2>

<p>Back when we first thought about the derivative, we used the slope of secant lines over tiny intervals to approximate the derivative: \[ f'(a)\approx \frac{\Delta y}{\Delta x}=\frac{f(x)-f(a)}{x-a}\]</p>

<p>Now that we have other ways to find derivatives, we can exploit this approximation to go the other way. Solve the expression above for \(f(x)\), and you’ll get the tangent line approximation:</p>

<div class="important">
	<h4>The Tangent Line Approximation (TLA) (or <q>Linear Approximation</q>)</h4>
	<p>To approximate the value of \(f(x)\) using TLA, find some \(a\) where</p>
	<ol>
		<li>\(a\) and \(x\) are <q>close,</q> and</li>
		<li>You know the exact values of both \(f(a)\) and \(f'(a)\).</li>
	</ol>
	<p>Then \[f(x) \approx f(a)+f'(a)(x-a).\]</p>
	<p>Another way to look at the same formula: \[\Delta y\approx f'(a)\Delta x\]</p>
	<p>How close is close? It depends on the shape of the graph of \(f\). In general, the closer the better.</p>
</div>

<figure><img src="images/image099.png" alt="graph"></figure>

<div class="videoplayer w639">
	<video id="video_2.10." class="video-js vjs-default-skin" controls preload="metadata" width="639" height="auto">
		<source src="video_2-10/tangent_line_approximation.webm" type='video/webm' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-10/tangent_line_approximation.mp4" type='video/mp4' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

<p>Try it for yourself using this applet (click the button next to L(x) if the line isn't showing up):</p>
<div style="width:676px;height:482px;" id="applet_container" class="geogebra"></div>

<div class="example">
	<h4>Example 1</h4>
	<p>Suppose we know that \(g(20) = 5\) and \(g'(20) = 1.4\). Use this information to approximate \(g(23)\) and \(g(18)\).</p>
	<p>Using the tangent line approximation: 
		\[ \begin{align*}
			g(23)\approx &amp; 5 + (1.4)(23 - 20) = 9.2\\
			g(18)\approx &amp; 5 + (1.4)(18 - 20) = 2.2
		\end{align*} \]
	</p>
	<p>Note that we don't know if these approximations are close &ndash; but they're the best we can do with the limited information we have to start with. Note also that 18 and 23 are sort of close to 20, so we can hope these approximations are pretty good. We would feel more confident using this information to approximate \(g(20.003)\). We would feel very unsure using this information to approximate \(g(55)\).</p>
</div>

</section>

<section><h2>Elasticity</h2>

<p>We know that demand functions are decreasing, so when the price increases, the quantity demanded goes down. But what about revenue = price \( \times \) quantity? When the price increases will revenue go down because the demand dropped so much? Or will revenue increase because demand didn't drop very much?</p>

<p>Elasticity of demand is a measure of how demand reacts to price changes. It’s normalized &ndash; that means the particular prices and quantities don't matter, and everything is treated as a percent change. The formula for elasticity of demand involves a derivative, which is why we’re discussing it here.</p>

<div class="important">
	<h4>Elasticity of Demand</h4>
	<p>Given a demand function that gives \(q\) in terms of \(p\), the <strong>elasticity of demand</strong> is \[E=\left|\frac{p}{q}\cdot \frac{dq}{dp}\right|\]
</p>
	<p>(Note that since demand is a decreasing function of \(p\), the derivative is negative. That's why we have the absolute values &ndash; so \(E\) will always be positive.)</p>
	<ul>
		<li>If \(E \lt 1\), we say demand is inelastic. In this case, raising prices increases revenue.</li>
		<li>If \(E \gt 1\), we say demand is elastic. In this case, raising prices decreases revenue.</li>
		<li>If \(E = 1\), we say demand is unitary. \(E = 1\) at critical points of the revenue function.</li>
	</ul>
	<h3>Interpretation of elasticity</h3>
	<p>If the price increases by 1%, the demand will decrease by E%.</p>
</div>

<div class="example">
	<h4>Example 2</h4>
	<p>A company sells \( q \) ribbon winders per year at $\( p \) per ribbon winder. The demand function for ribbon winders is given by \( p=300-0.02q \). Find the elasticity of demand when the price is $70 apiece. Will an increase in price lead to an increase in revenue?</p>
	<p>First, we need to solve the demand equation so it gives \( q \) in terms of \( p \), so that we can find \( \frac{dq}{dp} \): \( p=300-0.02q \), so \( q=15000-50p \). Then \( \frac{dq}{dp}=-50 \).</p>
	<p>We need to find \( q \) when \( p = 70 \): \[ q = 11500. \]</p>
	<p>Now compute \[ E=\left| \frac{p}{q}\cdot\frac{dq}{dp} \right|=\left| \frac{70}{11500}\cdot(-50) \right| \approx 0.3 \]</p>
	<p>\(E \lt 1\), so demand is inelastic. Increasing the price by 1% would only cause a 0.3% drop in demand. Increasing the price would lead to an increase in revenue, so it seems that the company should increase its price.</p>
</div>

<p>The demand for products that people have to buy, such as onions, tends to be inelastic. Even if the price goes up, people still have to buy about the same amount of onions, and revenue will not go down. The demand for products that people can do without, or put off buying, such as cars, tends to be elastic. If the price goes up, people will just not buy cars right now, and revenue will drop.</p>

<div class="videoplayer w639">
	<video id="video_2.10." class="video-js vjs-default-skin" controls preload="metadata" width="639" height="auto">
		<source src="video_2-10/elasticity.webm" type='video/webm' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-10/elasticity.mp4" type='video/mp4' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

<div class="example">
	<h4>Example 3</h4>
	<p>A company finds the demand \( q \), in thousands, for their kites to be \( q=400-p^2 \) at a price of \( p \) dollars. Find the elasticity of demand when the price is $5 and when the price is $15. Then find the price that will maximize revenue.</p>
	<p>Calculating the derivative, \( \frac{dq}{dp}=-2p \). The elasticity equation as a function of \( p \) will be: \[ E=\left| \frac{p}{q}\cdot\frac{dq}{dp} \right|=\left| \frac{p}{400-p^2}\cdot (-2p) \right| =\left| \frac{-2p^2}{400-p^2} \right| \]</p>
	<p>Evaluating this to find the elasticity at $5 and at $15:</p>
	<p>\[ E = \left| \frac{-2(5)^2}{400-(5)^2} \right| \approx 0.133 \] So the demand is inelastic when the price is $5.</p>
	<p>At a price of $5, a 1% increase in price would decrease demand by only 0.133%. Revenue could be raised by increasing prices.</p>
	<p>\[ E = \left| \frac{-2(15)^2}{400-(15)^2} \right| \approx 2.571 \] So the demand is elastic when the price is $15.</p>
	<p>At a price of $15, a 1% increase in price would decrease demand by 2.571%. Revenue could be raised by decreasing prices.</p>
	<p>To maximize the revenue, we could solve for when \( E = 1 \):
	\[ \begin{align*}
		\left| \frac{-2p^2}{400-p^2} \right|=&amp; 1 \\
		2p^2=&amp; 400-p^2 \\
		3p^2=&amp; 400 \\
		p=&amp; \sqrt{\frac{400}{3}}\approx 11.55.
	\end{align*} \]
	</p>
	<p>A price of $11.55 will maximize the revenue.</p>
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
			<td><a href="section2-9.php">&larr; Previous Section</a></td>
			<td><a href="section2-11.php">Next Section &rarr; </a></td>
		</tr>
	</table>
</footer>
</div>
</body>
</html>