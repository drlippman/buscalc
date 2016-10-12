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
<h1>Section 4.2: Calculus of Functions of Two Variables</h1>
<p>Now that you have some familiarity with functions of two variables, it's time to start applying calculus to help us solve problems with them. In Chapter 2, we learned about the derivative for functions of two variables. Derivatives told us about the shape of the function, and let us find local max and min &ndash; we want to be able to do the same thing with a function of two variables.</p>

<p>First let's think. Imagine a surface, the graph of a function of two variables. Imagine that the surface is smooth and has some hills and some valleys. Concentrate on one point on your surface. What do we want the derivative to tell us? It ought to tell us how quickly the height of the surface changes as we move&hellip; Wait, which direction do we want to move? This is the reason that derivatives are more complicated for functions of several variables &ndash; there are so many (in fact, infinitely many) directions we could move from any point.</p>

<p>It turns out that our idea of fixing one variable and watching what happens to the function as the other changes is the key to extending the idea of derivatives to more than one variable.</p>

<section><h2>Partial Derivatives</h2>

<div class="videoplayer w639">
	<video id="video_4.2.1" class="video-js vjs-default-skin" controls preload="metadata" width="639" height="auto">
		<source src="video_4-2/intro_partial_derivatives.webm" type='video/webm' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_4-2/intro_partial_derivatives.mp4" type='video/mp4' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

<div class="important">
	<h4>Partial Derivatives</h4>
	<p>Suppose that \(z = f(x, y)\) is a function of two variables.</p>
	<p>The <strong>partial derivative of \(f\) with respect to \(x\)</strong> is the derivative of the function \(f(x,y)\) where we think of \(x\) as the only variable and act as if \(y\) is a constant.</p>
	<p>The <strong>partial derivative of \(f\) with respect to \(y\)</strong> is the derivative of the function \(f(x,y)\) where we think of \(y\) as the only variable and act as if \(x\) is a constant.</p>
	<p>The <q>with respect to \(x\)</q> or <q>with respect to \(y\)</q> part is really important &ndash; you have to know and tell which variable you are thinking of as <em>THE</em> variable.</p>

	<h5>Geometrically</h5>
	<p>Geometrically the partial derivative with respect to \(x\) gives the slope of the curve as you travel along a cross-section, a curve on the surface parallel to the \(x\)-axis. The partial derivative with respect to \(y\) gives the slope of the cross-section parallel to the \(y\)-axis.</p>

	<h5>Notation for the Partial Derivative</h5>
	<p>The partial derivative of \(z = f(x,y)\) with respect to \(x\) is written as \[ f_x(x,y) \] or simply \[ f_x \quad\text{or}\quad z_x. \]</p>
	<p>The Leibniz notation is \[ \frac{\partial f}{\partial x} \] or \[ \frac{\partial z}{\partial x}. \]</p>
	<p>We use an adaptation of the \( \frac{\partial z}{\partial x} \) notation to mean <q>find the partial derivative of \(f(x,y)\) with respect to \(x\)</q>: \[ \frac{\partial}{\partial x}\left(f(x,y)\right)=\frac{\partial f}{\partial x} \]</p>

	<h5>To estimate a partial derivative from a table or contour diagram</h5>
	<p>The partial derivative with respect to \(x\) can be approximated by looking at an average rate of change, or the slope of a secant line, over a very tiny interval in the \(x\)-direction (holding \(y\) constant). The tinier the interval, the closer this is to the true partial derivative.</p>

	<h5>To compute a partial derivative from a formula</h5>
	<p>If \(f(x,y)\) is given as a formula, you can find the partial derivative with respect to \(x\) algebraically by taking the ordinary derivative thinking of \(x\) as the only variable (holding \(y\) fixed).</p>

	<p>Of course, <strong>everything here works the same way if we're trying to find the partial derivative with respect to \(y\)</strong> &ndash; just think of \(y\) as your only variable and act as if \(x\) is constant.</p>

	<p>The idea of a partial derivative works perfectly well for a function of several variables: you focus on one variable to be <em>THE</em> variable and act as if all the other variables are constants.</p>
</div>

<div class="videoplayer w639">
	<video id="video_4.2.2" class="video-js vjs-default-skin" controls preload="metadata" width="639" height="auto">
		<source src="video_4-2/approx_par_deriv_from_contour_plot.webm" type='video/webm' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_4-2/approx_par_deriv_from_contour_plot.mp4" type='video/mp4' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

<div class="example">
	<h4>Example 1</h4>
	<p>Here is a contour diagram for a function \(g(x,y)\).</p>
	<figure><img src="images/image026.png" alt="Contour map"/></figure>
	<p>Use the diagram to answer the following questions:</p>
	<ol class="smlatin">
		<li>Estimate \( g_x(3,5) \) and \( g_y(3,5) \).</li>
		<li>Where on this diagram is \( g_x \) greatest? Where is \( g_y \) greatest?</li>
	</ol>
	<ol class="smlatin">
		<li>
			<p>\( g_x(3,5) \) means we're thinking of \(x\) as the only variable, so we'll hold \(y\) fixed at \(y = 5\). That means we’ll be looking along the horizontal line \(y = 5\). To estimate \(g_x\), we need two function values. (3, 5) lies on the contour line, so we know that \(g(3, 5) = 0.6\). The next point as we move to the right is \(g(4.2,5) = 0.7\).</p>
			<p>Now we can find the average rate of change: 
				\[ \begin{align*}
					\text{Average rate of change }=&amp; \frac{\text{(change in output)}}{\text{(change in input)}} \\
					=&amp; \frac{\Delta g}{\Delta x}\\
					=&amp; \frac{0.7-0.6}{4.2-3}\\
					=&amp; \frac{1}{12}\approx 0.083
				\end{align*} \]
			 We can do the same thing by going to the next point we can read to the left, which is \(g(2.4,5) = 0.5\). Then the average rate of change is \[ \frac{\Delta g}{\Delta x}=\frac{0.5-0.6}{2.4-3}=\frac{1}{6}\approx 0.167.\]</p>
			<p>Either of these would be a fine estimate of \( g_x(3,5) \) given the information we have, or we could take their average. We can estimate that \( g_x(3,5)\approx 0.125 \).</p>
			<p>Estimate \( g_y(3,5) \) the same way, but moving on the vertical line. Using the next point up, we get the average rate of change is \[ \frac{\Delta g}{\Delta y}=\frac{0.7-0.6}{5.8-5}=\frac{1}{8}=0.125.\] Using the next point down, we get \[ \frac{\Delta g}{\Delta y}=\frac{0.5-0.6}{4.5-5}=\frac{1}{5}=0.2.\] Taking their average, we estimate \( g_y(3,5)\approx 0.1625 \).</p>
		</li>
		<li>\( g_x \) means \(x\) is our only variable, and we're thinking of \(y\) as a constant. So we're thinking about moving across the diagram on horizontal lines. \( g_x \) will be greatest when the contour lines are closest together, i.e., when the surface is steepest &ndash; then the denominator in \( \frac{\Delta g}{\Delta x} \) will be small, so \( \frac{\Delta g}{\Delta x} \) will be big. Scanning the graph, we can see that the contour lines are closest together when we head to the left or to the right from about (0.5, 8) and (9, 8). So \( g_x \) is greatest at about (0.5, 8) and (9, 8). For \( g_y \), we want to look at vertical lines. \( g_y \) is greatest at about (5, 3.8) and (5, 12).</li>
	</ol>
</div>

<div class="videoplayer w639">
	<video id="video_4.2.3" class="video-js vjs-default-skin" controls preload="metadata" width="639" height="auto">
		<source src="video_4-2/approx_par_deriv_from_table.webm" type='video/webm' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_4-2/approx_par_deriv_from_table.mp4" type='video/mp4' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

<div class="example">
	<h4>Example 2</h4>
	<p>Cold temperatures feel colder when the wind is blowing. Windchill is the perceived temperature, and it depends on both the actual temperature and the wind speed &ndash; a function of two variables! You can read more about windchill at <a href="http://www.nws.noaa.gov/om/windchill/">http://www.nws.noaa.gov/om/windchill/</a>. Below is a table that shows the perceived temperature for various temperatures and windspeeds.</p>
	<figure><img src="images/image045.png" alt="Windchill table"/><figcaption>(Table courtesy of the National Weather Service, <a href="http://www.nws.noaa.gov/om/windchill/images/windchill.gif">http://www.nws.noaa.gov/om/windchill/images/windchill.gif</a>.)</figcaption></figure>
	<p>Note that they also include the formula, but for this example we'll use the information in the table.</p>
	<ol class="smlatin">
		<li>What is the perceived temperature when the actual temperature is 25&deg;F and the wind is blowing at 15 miles per hour?</li>
		<li>Suppose the actual temperature is 25&deg;F. Use information from the table to describe how the perceived temperature would change if the wind speed increased from 15 miles per hour?</li>
	</ol>
	<ol class="smlatin">
		<li>Reading the table, we see that the perceived temperature is 13&deg;F</li>
		<li>
			<p>This is a question about a partial derivative. We’re holding the temperature (\(T\)) fixed at 25&deg;F, and asking what happens as wind speed (\(V\)) increases from 15 miles per hour. We’re thinking of \(V\) as the only variable, so we want \(\text{WindChillV} = W_V\) when \(T = 25\) and \(V = 15\). We'll find the average rate of change by looking in the column where \(T = 25\) and letting \(V\) increase, and use that to approximate the partial derivative. \[ W_V\approx \frac{\Delta W}{\Delta V}=\frac{11-13}{20-15}=-0.4 \]</p>
			<p>What are the units? \(W\) is measured in &deg;F and \(V\) is measured in mph, so the units here are &deg;F/mph. And that lets us describe what happens: The perceived temperature would decrease by about 0.4&deg;F for each mph increase in wind speed.</p>
		</li>
	</ol>
</div>

<div class="example">
	<h4>Example 3</h4>
	<p>Find \( f_x \) and \( f_y \) at the points (0, 0) and (1, 1) if \( f(x,y)=x^2-4xy+4y^2 \).</p>
	<p>To find \( f_x \), take the ordinary derivative of \(f\) with respect to \(x\), acting as if \(y\) is constant: \[ f_x(x,y)=2x-4y. \]</p>
	<p>Note that the derivative of the \( 4y^2 \) term with respect to \(x\) is zero because it's a constant (as far as \( x \) is concerned).</p>
	<p>Similarly, \[ f_y(x,y)=-4x+8y. \]</p>
	<p>Now we can evaluate these at the points:</p>
	<p>\( f_x(0,0)=0 \) and \( f_y(0,0)=0 \); this tells us that the cross sections parallel to the \(x\)- and \(y\)- axes are both flat at (0,0).</p>
	<p>\( f_x(1,1)=-2 \) and \( f_y(1,1)=4 \); this tells us that above the point (1, 1), the surface decreases if we move to more positive \(x\) values and increases if we move to more positive \(y\) values.</p>
</div>

<div class="example">
	<h4>Example 4</h4>
	<p>Find \( \frac{\partial f}{\partial x} \) and \( \frac{\partial f}{\partial y} \) if \( f(x,y)=\frac{e^{x+y}}{y^3+y}+y\ln(y) \).</p>
	<p>\( \frac{\partial f}{\partial x} \) means \(x\) is our only variable, we're thinking of \(y\) as a constant. Then we'll just find the ordinary derivative. From \(x\)'s point of view, this is an exponential function, divided by a constant, with a constant added. The constant pulls out in front, the derivative of the exponential function is the same thing, and we need to use the chain rule, so we multiply by the derivative of that exponent (which is just 1): \[ \frac{\partial f}{\partial x}=\frac{1}{y^3+y}e^{x+y}. \]</p>
	<p>\(\frac{\partial f}{\partial y}\) means that we're thinking of \(y\) as the variable, acting as if \(x\) is constant. From \(y\)'s point of view, \(f\) is a quotient plus a product, so we'll need the quotient rule and the product rule: 
		\[ \begin{align*}
			\frac{\partial f}{\partial y}=&amp; \frac{(\ )(\ )-(\ )(\ )}{(\ )^2}+(\ )(\ )+(\ )(\ ) \\
			=&amp; \frac{\left( e^{x+y}(1) \right)\left( y^3+y \right)-\left( e^{x+y} \right)\left( 3y^2+1 \right)}{\left( y^3+y \right)^2}+\left( 1 \right)\left( \ln(y) \right)+\left( y \right)\left( \frac{1}{y} \right)
		\end{align*} \]
	</p>
</div>

<div class="example">
	<h4>Example 5</h4>
	<p>Find \( f_z \) if \( f(x,y,z,w)=35x^2w-\frac{1}{z}+yz^2 \).</p>
	<p>\( f_z \) means we act as if \(z\) is our only variable, so we'll act as if all the other variables (\(x\), \(y\), and \(w\)) are constants and take the ordinary derivative: \[ f_z(x,y,z,w)=\frac{1}{z^2}+2yz. \]</p>
</div>
</section>

<div class="videoplayer w639">
	<video id="video_4.2.4" class="video-js vjs-default-skin" controls preload="metadata" width="639" height="auto">
		<source src="video_4-2/more_partial_der_exs.webm" type='video/webm' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_4-2/more_partial_der_exs.mp4" type='video/mp4' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

<section><h2>Using Partial Derivatives to Estimate Function Values</h2>
<p>We can use the partial derivatives to estimate values of a function. The geometry is similar to the tangent line approximation in one variable. Recall the one-variable case: if \(x\) is close enough to a known point \(a\), then \[ f(x)\approx f(a)+f'(a)(x-a). \] In two variables, we do the same thing in both directions at once:</p>

<div class="important">
	<h4>Approximating Function Values with Partial Derivatives</h4>
	<p>To approximate the value of \(f(x, y)\), find some point \((a, b)\) where</p>
	<ol>
		<li>\((x, y)\) and \((a, b)\) are close, that is, \(x\) and \(a\) are close and \(y\) and \(b\) are close.</li>
		<li>You know the exact values of \(f(a, b)\) and both partial derivatives there.</li>
	</ol>
	<p>Then \[ f(x,y)\approx f(a,b)+f_x(a,b)(x-a)+f_y(a,b)(y-b). \]</p>
	<p>Notice that the total change in \(f\) is being approximated by adding the approximate changes coming from the \(x\) and \(y\) directions. Another way to look at the same formula: \[ \Delta f\approx f_x\Delta x+f_y\Delta y. \]</p>
	<p>How close is close? It depends on the shape of the graph of \(f\). In general, the closer the better.</p>
</div>

<div class="example">
	<h4>Example 6</h4>
	<p>Use partial derivatives to estimate the value of \( f(x,y)=x^2-4xy+4y^2 \) at (0.9, 1.1).</p>
	<p>Note that the point (0.9, 1.1) is close to an <q>easy</q> point, (1, 1). In fact, we already worked out the partial derivatives at (1, 1): \( f_x(x,y)=2x-4y \) so \( f_x(1,1)=-2 \), and \( f_y(x,y)=-4x+8y \) so \( f_y(1,1)=4 \). We also know that \( f(1,1)=1 \).</p>
	<p>So, \[ f(0.9,1.1)\approx 1-2(-0.1)+4(0.1)=1.6. \]</p>
	<p>Note that in this example it would have been possible to simply compute the exact answer: \[ f(0.9,1.1)=(0.9)^2-4(0.9)(1.1)+4(1.1)^2=1.69. \]	Our estimate is not perfect, but it's pretty close.</p>
</div>

<div class="videoplayer w639">
	<video id="video_4.2.5" class="video-js vjs-default-skin" controls preload="metadata" width="639" height="auto">
		<source src="video_4-2/linear_approx.webm" type='video/webm' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_4-2/linear_approx.mp4" type='video/mp4' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

<div class="example">
	<h4>Example 7</h4>
	<p>Here is a contour diagram for a function \(g(x,y)\). Use partial derivatives to estimate the value of \(g(3.2, 4.7)\).</p>
	<figure><img src="images/image026.png" alt="Contour map"/></figure>
	<p>This is the same diagram from before, so we already estimated the value of the function and the partial derivatives at the nearby point (3,5). \(g(3, 5)\) is 0.6, our estimate of \( g_x(3,5)\approx 0.125 \), and our estimate of \( g_y(3,5)\approx 0.1625 \). So \[ g(3.2,4.7)\approx 0.6+(0.125)(0.2)+(0.1625)(-0.3)=0.57625. \] Note that in this example we have no way to know how close our estimate is to the actual value.</p>
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
			<td><a href="section4-1.php">&larr; Previous Section</a></td>
			<td><a href="section4-3.php">Next Section &rarr; </a></td>
		</tr>
	</table>
</footer>
</div>
</body>
</html>