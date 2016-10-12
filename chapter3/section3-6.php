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
<h1>Section 3.6: Average Value, Area, and Volume</h1>

<section><h2>Average Value</h2>

<p>We know the average of \(n\) numbers \(a_1, a_2, \dots , a_n\) is their sum divided by \(n\). But what if we need to find the average temperature over a day's time &ndash; there are too many possible temperatures to add them up! This is a job for the definite integral.</p>

<div class="videoplayer w639">
	<video id="video_3.6.1" class="video-js vjs-default-skin" controls preload="metadata" width="639" height="auto">
		<source src="video_3-6/average_val_intro_first_ex.webm" type='video/webm' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_3-6/average_val_intro_first_ex.mp4" type='video/mp4' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

<div class="important">
	<h4>Average Value</h4>
	<p>The average value of a function \(f(x)\) on the interval \([a, b]\) is given by \[ \frac{1}{b-a}\int_a^bf(x)\, dx. \]</p>
</div>

<p>The average value of a positive \(f\) has a nice geometric interpretation. Imagine that the area under \(f\) (graph (a) below) is a liquid that can <q>leak</q> through the graph to form a rectangle with the same area (graph (b) below).</p>

<p>If the height of the rectangle is \(H\), then the area of the rectangle is \( H\cdot (b-a) \). We know the area of the rectangle is the same as the area under \(f\) so \( H\cdot (b-a) = \int_a^b f(x)\, dx \). Then \[ H = \frac{1}{b-a}\int_a^b f(x)\, dx, \] the average value of \(f\) on \([a,b]\).</p>

<p>The average value of a positive function \(f\) is the height \(H\) of the rectangle whose area is the same as the area under \(f\).</p>

<div class="example">
	<h4>Example 1</h4>
	<p>During a 9 hour work day, the production rate at time \(t\) hours after the start of the shift was given by the function \( r(t)=5+\sqrt{t} \) cars per hour. Find the average hourly production rate.</p>
	<p>The average hourly production is \( \frac{1}{9-0}\int_0^9\left(5+\sqrt{t}\right)\, dt = 7 \) cars per hour.</p>
</div>

<p>A note about the units &ndash; remember that the definite integral has units (cars per hour)\( \cdot \)(hours) = cars. But the \( \frac{1}{b-a} \) in front has units \(\frac{1}{\text{hours}}\) &ndash; the units of the average value are cars per hour, just what we expect an average rate to be.</p>

<div class="important">
	<h4>In general&hellip;</h4>
	<p>&hellip;the average value of a function will have the same units as the integrand.</p>
</div>

<p>Function averages, involving means and more complicated averages, are used to <q>smooth</q> data so that underlying patterns are more obvious and to remove high frequency <q>noise</q> from signals. In these situations, the original function \(f\) is replaced by some <q>average of \(f\).</q> If \(f\) is rather jagged time data, then the ten year average of \(f\) is the integral \( g(x)=\frac{1}{10}\int\limits_{x-5}^{x+5} f(t)\, dt \), an average of \(f\) over 5 units on each side of \(x\).</p>

<p>For example, the figure below shows the graphs of a Monthly Average (rather “noisy” data) of surface temperature data, an Annual Average (still rather <q>jagged</q>), and a Five Year Average (a much smoother function).</p>

<figure>
	<img src="images/image054.png" alt="graph by Robert A. Rohde"/>
	<figcaption>Image prepared by Robert A. Rohde, <a href="http://commons.wikimedia.org/wiki/File:Short_Instrumental_Temperature_Record.png">http://commons.wikimedia.org/wiki/File:Short_Instrumental_Temperature_Record.png</a>.</figcaption>
</figure>

<p>Typically the average function reveals the pattern much more clearly than the original data. This use of a <q>moving average</q> value of <q>noisy</q> data (weather information, stock prices) is a very common.</p>

<div class="videoplayer w639">
	<video id="video_3.6.2" class="video-js vjs-default-skin" controls preload="metadata" width="639" height="auto">
		<source src="video_3-6/average_value_second_example.webm" type='video/webm' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_3-6/average_value_second_example.mp4" type='video/mp4' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

<div class="example">
	<h4>Example 2</h4>
	<p>The graph below shows the amount of water in a reservoir over a 12 hour period. Estimate the average amount of water in the reservoir over this period.</p>
	<figure><img src="images/image055.png" alt="graph"/></figure>
	<p>If \( V(t) \) is the volume of the water (in millions of liters) after \(t\) hours, then the average amount is \( \frac{1}{12}\,\int_0^{12} V(t)\, dt \). In order to find the definite integral, we'll have to estimate. Let's use 6 rectangles and take the heights from their right edges (there's nothing special about using 6 rectangles or right edges &ndash; other choices would still give you a valid estimate).</p>
	<figure><img src="images/image056.png" alt="graph"/></figure>
	<p>The estimate of the integral is \[\int_0^{12} V(t)\, dt \approx (18)(2)+(9.7)(2)+(8.2)(2)+(12)(2)+(19.9)(2)+(22)(2)=179.6.\]</p>
	<p>The units of this integral are (millions of liters)\( \cdot \)(feet). So our estimate of the average volume is \( \frac{1}{12}\cdot 179.6\approx 15 \) millions of liters. (The estimate might change a little depending on how we estimate the function values from the graph.)</p>
	<p>In the figure below, you can see the same graph with the line \( y=15 \) drawn in. The area under the curve and the area under the rectangle are (approximately) the same.</p>
	<figure><img src="images/image057.png" alt="graph"/></figure>
	<p>In fact, that would be a different way to estimate the average value. We could have estimated the placement of the horizontal line so that the area under the curve and under the line were equal.</p>
</div>

</section>

<section><h2>Area</h2>

<p>We have already used integrals to find the area between the graph of a function and the horizontal axis. Integrals can also be used to find the area between two graphs.</p>

<p>If \(f(x) \geq g(x)\) for all \(x\) in \([a,b]\), then we can approximate the area between \(f\) and \(g\) by partitioning the interval \([a,b]\) and forming a Riemann sum, as shown in the picture. The height of each rectangle is top - bottom, \(f(c_i) - g(c_i)\) so the area of the \(i\)-th rectangle is (height)\( \cdot \)(base) = \(\left(f(c_i) - g(c_i)\right)\cdot\Delta x\). Adding up these rectangles gives an approximation of the total area as \( \sum_{i=1}^n \left(f(c_i) - g(c_i)\right)\cdot\Delta x \), a Riemann sum.</p>

<figure><img src="images/image049.png" alt="grapg"/></figure>

<p>The limit of this Riemann sum, as the number of rectangles gets larger and their width gets smaller, is the definite integral \( \int_a^b \left(f(c_i) - g(c_i)\right)\, dx \).</p>

<div class="videoplayer w639">
	<video id="video_3.6.3" class="video-js vjs-default-skin" controls preload="metadata" width="639" height="auto">
		<source src="video_3-6/area_between_curves_part_1.webm" type='video/webm' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_3-6/area_between_curves_part_1.mp4" type='video/mp4' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

<div class="important">
	<h4>Area Between Two Curves</h4>
	<p>The area between two curves \(f(x)\) and \(g(x)\), where \(f(x) \geq g(x)\), between \(x = a\) and \(x = b\) is \[ \int_a^b \left(f(c_i) - g(c_i)\right)\, dx. \]</p>
	<p>The integrand is <q>top - bottom.</q> Make a graph or use test values to be sure which curve is which.</p>
</div>

<div class="example">
	<h4>Example 3</h4>
	<p>Find the area bounded between the graphs of \(f(x) = x\) and \(g(x) = 3\) for \(1 \leq x \leq 4\).</p>
	<figure><img src="images/image050.png" alt="graph"/></figure>
	<p>Always start with a graph so you can see which graph is the top and which is the bottom. In this example, the two curves cross, and they change positions; we’ll need to split the area into two pieces. Geometrically, we can see that the area is 2 + 0.5 = 2.5.</p>
	<p>Writing the area as a sum of definite integrals, we get \[ \text{Area }= \int_1^3 (3-x)\, dx+\int_3^4 (x-3)\, dx.\]</p>
	<p>These integrals are easy to evaluate using antiderivatives:
		\[ \begin{align*}
			\int_1^3 (3-x)\, dx &amp; =  \left[3x-\frac{x^2}{2}\right]_1^3 \\
			 &amp; =  \left(9-\frac{9}{2}\right)-\left(15-\frac{25}{2}\right) \\
			 &amp; =  2
		\end{align*} \]

		\[ \begin{align*}
			\int_3^4 (x-3)\, dx &amp; =  \left[\frac{x^2}{2}-3x\right]_3^4 \\
			 &amp; =  \left(\frac{16}{2}-12\right)-\left(\frac{9}{2}-9\right) \\
			 &amp; =  \frac{1}{2}
		\end{align*} \]
	</p>
	<p>The sum of these two integrals tells us that the total area between \(f\) and \(g\) is 2.5 square units, which we already knew from the picture.</p>
</div>

<p>Note that the single integral \( \int_1^4 (3-x)\, dx = 1.5 \) is not the <strong>area</strong> we want in the last example. The value of <strong>the integral is 1.5</strong>, and the value of <strong>the area is 2.5</strong>. That's because for the triangle on the right, the graph of \(y = x\) is above the graph of \(y = 3\), so the integrand \(3 - x\) is negative; in the definite integral, the area of that triangle comes in with a negative sign.</p>

<p>In this example, it was easy to see exactly where the two curves crossed so we could break the region into the two pieces to figure separately. In other examples, you might need to solve an equation to find where the curves cross.</p>

<div class="videoplayer w639">
	<video id="video_3.6.4" class="video-js vjs-default-skin" controls preload="metadata" width="639" height="auto">
		<source src="video_3-6/area_between_curves_part_2.webm" type='video/webm' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_3-6/area_between_curves_part_2.mp4" type='video/mp4' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

<div class="example">
	<h4>Example 4</h4>
	<p>Two objects start from the same location and travel along the same path with velocities \( v_A(t)=t+3 \) and \( v_B(t)=t^2-4t+3 \) meters per second. How far ahead is \(A\) after 3 seconds?</p>
	<figure><img src="images/image051.png" alt="graph"/></figure>
	<p>Since \( v_A(t) \geq v_B(t) \) , the <q>area</q> between the graphs of \( v_A \) and \( v_B \) represents the distance between the objects.</p>
	<p>After 3 seconds, the distance apart is 
		\[ \begin{align*}
			\int_0^3 \left( v_A(t) - v_B(t) \right)\, dt &amp; =  \int_0^3 \left( (t+3) - \left( t^2-4t+3 \right) \right)\, dt \\
			 &amp; =  \int_0^3 \left(5t-t^2\right)\, dt \\
			 &amp; =  \left[ 5\frac{t^2}{2} -\frac{t^3}{3} \right]_0^3 \\
			 &amp; =  \left( 5\frac{9}{2}-\frac{27}{3}\right)-(0) \\
			 &amp; =  13.5 \text{ meters}.
		\end{align*} \]
	</p>
</div>

<div class="videoplayer w639">
	<video id="video_3.6.5" class="video-js vjs-default-skin" controls preload="metadata" width="639" height="auto">
		<source src="video_3-6/area_between_curves_part_3.webm" type='video/webm' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_3-6/area_between_curves_part_3.mp4" type='video/mp4' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

</section>

<section><h2>Volume</h2>

<p>Just as we can partition an interval and imagine approximating an area with rectangles to find a formula for the area between curves, we can partition an interval and imagine approximating a volume with simple shapes to find a formula for the volume of a solid. While this approach works for a variety of shapes, our focus will be on shapes formed by revolving a curve around the horizontal axis.</p>

<p>We start with an area, the region below a function on the interval \(a \leq x \leq b\). We are going to take that region, and rotate it around the \(x\)-axis, creating the solid shape shown.</p>

<figure><img src="images/image070.png" alt="region"/><img src="images/image052.png" alt="solid"/></figure>

<p>To find the volume of this solid, we can start by partitioning the interval [0,1] and approximating the area with rectangles. As before, the width of each rectangle would be \( \Delta x \) and the height \(f(c_i)\).</p>

<figure><img src="images/image071.png" alt="region"/><img src="images/image072.png" alt="solid"/></figure>

<p>If we took just one of these rectangles and rotated it about the horizontal axis, it would form a cylindrical shape. The radius of that cylinder would be \(f(c_i)\), so the volume would be \[ V=\pi r^2 h=\pi\left(f(c_i)\right)^2\Delta x. \]</p>

<p>The volume of the whole solid could be approximated by rotating each of the rectangles about the x axis. Adding up the volume of each of the little cylindrical discs gives an approximation of the total volume as \( \sum\limits_{i=1}^n \pi\left(f(c_i)\right)^2\Delta x \), a Riemann sum.</p>

<p>The limit of this sum as the width of the rectanges becomes small is the definite integral \( \int_a^b \pi\left(f(c_i)\right)^2\, dx \)</p>

<div class="important">
	<h4>Volume</h4>
	<p>The volume of the solid obtained by rotating about the \(x\)-axis the area bounded by the curve \(f(x)\), the \(x\)-axis, \(x = a\), and \(x = b\) is \[ \int_a^b \pi\left(f(c_i)\right)^2\, dx \]</p>
</div>

<div class="example">
	<h4>Example 5</h4>
	<p>Find the volume of the solid formed by rotating the area under \( f(x)=e^{-x} \) on the interval [0,1] about the \(x\)-axis.</p>
	<figure><img src="images/image073.png" alt="region"/></figure>
	<p>This is the region pictured in the earlier example. We substitute in the function and bounds into the formula we derived to set up the definite integral: \[ \text{Volume} = \int_0^1 \pi\left(e^{-x}\right)^2\, dx. \]</p>
	<p>Using exponent rules, the integrand can be simplified. The constant \( \pi \) can be pulled out of the integral: \[ \text{Volume} = \pi\int_0^1 e^{-2x}\, dx. \]</p>
	<p>Using the substitution \(u = -2x\), we can integrate this function.
		\[ \begin{align*}
			 \pi\int_0^1 e^{-2x}\, dx &amp; =  \text{(\( u \)-substitution)} \\
			  &amp; =  \left. -\frac{1}{2}\pi e^{-2x}\right]_0^1 \\
			 &amp; =  \left(-\frac{1}{2}\pi e^{-2(1)}\right) - \left(-\frac{1}{2}\pi e^{-2(0)}\right) \\
			\approx &amp; 1.358\text{ cubic units}.
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
			<td><a href="section3-5.php">&larr; Previous Section</a></td>
			<td><a href="section3-7.php">Next Section &rarr; </a></td>
		</tr>
	</table>
</footer>
</div>
</body>
</html>