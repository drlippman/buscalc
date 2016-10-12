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
<h1>Section 2.10: Elasticity of Demand</h1>

<p>We know that demand functions are decreasing, so when the price increases, the quantity demanded goes down. But what about revenue = price \( \times \) quantity? When the price increases will revenue go down because the demand dropped so much? Or will revenue increase because demand didn't drop very much?</p>

<div class="example">
	<h4>Example 1</h4>
	<p>Suppose a company's demand function is \(D(p) = 100 - p^2\), and the company's current price is $5.  What will happen to revenue if they raise the price $0.05?</p>
	<p>We are more interested in how the price change compares to the demand change, so we are going to convert everything to relative (percent) changes.</p>
	<p>The price has increased by \[\frac{\Delta p}{p} = \frac{\$0.05}{\$5} = 0.01 = 1%\]</p>
	<p>The demand decreased from \(D(5) = 100-5^2 = 75\) to \(D(5.05) = 100-5.05^2 = 74.4975\), a total change of \(75-74.4975 = -0.5025\).  As a relative change, that's 
		\[\frac{\Delta q}{q} = \frac{-0.05025}{75} = -0.0067 = -0.67%\]</p>
	<p>By raising the price 1%, the demand only fell by 0.67%.  Since the price is increasing more than the demand falls, we would expect total revenue to increase.  In this case we say that the demand is inelastic.</p>
</div>

<p>Elasticity of demand is a measure of how demand reacts to price changes. It's normalized &ndash; that means the particular prices and quantities don't matter, and everything is treated as a percent change.</p>
<p>Following the logic of the example above, we want to compare the relative change in demand to the relative change in price, or in other words, we want to look at \[\frac{\frac{\Delta q}{q}}{\frac{\Delta p}{p}}\].
   By approximating the changes in demand and price by the derivatives, this formula simplifies to
   \[\frac{\frac{dq}{q}}{\frac{dp}{p}} = \frac{p}{q}\cdot\frac{dq}{dp}\]
   </p>

<div class="important">
	<h4>Elasticity of Demand</h4>
	<p>Given a demand function that gives \(q\) in terms of \(p\), so \(q = D(p)\), the <strong>elasticity of demand</strong> is \[E=\left|\frac{p}{q}\cdot \frac{dq}{dp}\right| = \left|\frac{p}{q}\cdot D'(p)\right| \]</p> 
	<p>(Note that since demand is a decreasing function of \(p\), the derivative is negative. That's why we have the absolute values &ndash; so \(E\) will always be positive.)</p>
	<p>You may also see this formula written as \[E = - \frac{p \cdot D'(p)}{D(p)}\] The two forms of the equation are equivalent, and you can use either.</p>
	<ul>
		<li>If \(E \lt 1\), we say demand is inelastic. In this case, raising prices increases revenue.</li>
		<li>If \(E \gt 1\), we say demand is elastic. In this case, raising prices decreases revenue.</li>
		<li>If \(E = 1\), we say demand is unitary. \(E = 1\) at critical points of the revenue function.</li>
	</ul>
	<h4>Interpretation of elasticity</h4>
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
		\left| \frac{-2p^2}{400-p^2} \right| &amp; =  1 \\
		2p^2 &amp; =  400-p^2 \\
		3p^2 &amp; =  400 \\
		p &amp; =  \sqrt{\frac{400}{3}}\approx 11.55.
	\end{align*} \]
	</p>
	<p>A price of $11.55 will maximize the revenue.</p>
</div>

<p>As you saw the in last example, elasticity provides another way to determine the price that will maximize revenue given a demand function.  It is not quicker or easier than the methods learned earlier in the course, but you are welcome to use either technique.</p>

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