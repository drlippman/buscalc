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
<h1>Section 2.6: Second Derivative and Concavity</h1>

<section><h2>Second Derivative and Concavity</h2>

<p>Graphically, a function is <strong>concave up</strong> if its graph is curved with the opening upward (Figure 1a). Similarly, a function is <strong>concave down</strong> if its graph opens downward (Figure 1b).</p>

<figure>
	<img src="images/image044.png" alt="concavity"/>
	<figcaption>Figure 1</figcaption>
</figure>

<p>This figure shows the concavity of a function at several points. Notice that a function can be concave up regardless of whether it is increasing or decreasing.</p>

<figure><img src="images/image045.png" alt="concavity"/></figure>

<p>For example, <strong>an epidemic</strong>: Suppose an epidemic has started, and you, as a member of congress, must decide whether the current methods are effectively fighting the spread of the disease or whether more drastic measures and more money are needed. In Figure 2 below, \(f(x)\) is the number of people who have the disease at time \(x\), and two different situations are shown. In both Figure 2a and Figure 2b, the number of people with the disease, \(f(\text{now})\), and the rate at which new people are getting sick, \(f'(\text{now})\), are the same. The difference in the two situations is the concavity of \(f\), and that difference in concavity might have a big effect on your decision.</p>

<figure>
	<img src="images/image046.png" alt="graph"/>
	<figcaption>Figure 2</figcaption>
</figure>

<p>In Figure 2a, \(f\) is concave down at "now", the slopes are decreasing, and it looks as if it is tailing off. We can say "\(f\) is increasing at a decreasing rate." It appears that the current methods are starting to bring the epidemic under control.</p>

<p>In Figure 2b, \(f\) is concave up, the slopes are increasing, and it looks as if it will keep increasing faster and faster. It appears that the epidemic is still out of control.</p>

<p>The differences between the graphs come from whether the <em>derivative</em> is increasing or decreasing</p>

<p>The derivative of a function f is a function that gives information about the slope of \(f\). <strong>The derivative tells us if the original function is increasing or decreasing</strong>.</p>

<p>Because \(f'\) is a function, we can take its derivative. This second derivative also gives us information about our original function \(f\). The second derivative gives us a mathematical way to tell how the graph of a function is curved. <strong>The second derivative tells us if the original function is concave up or down</strong>.</p>

<div class="videoplayer w639">
	<video id="video_2.6.1" class="video-js vjs-default-skin" controls preload="metadata" width="639" height="auto">
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-6/concavity_intro.mp4" type='video/mp4' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-6/concavity_intro.webm" type='video/webm' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

<div class="important">
	<h4>Second Derivative</h4>
	<p>Let \( y=f(x) \). The <strong>second derivative of \(f\)</strong> is the derivative of \( y'=f'(x) \).</p>
	<p>Using prime notation, this is \( f''(x) \) or \( y'' \). You can read this aloud as "f double prime of x" or "y double prime."</p>
	<p>Using Leibniz notation, the second derivative is written \( \frac{d^2y}{dx^2} \) or \( \frac{d^2f}{dx^2} \). This is read aloud as "the second derivative of y (or f)."</p>
	<p>If \( f''(x) \) is positive on an interval, the graph of \( y=f(x) \) is <strong>concave up</strong> on that interval. We can say that \(f\) is increasing (or decreasing) <strong>at an increasing rate</strong>.</p>
	<p>If \( f''(x) \) is negative on an interval, the graph of \( y=f(x) \) is <strong>concave down</strong> on that interval. We can say that \(f\) is increasing (or decreasing) <strong>at a decreasing rate</strong>.</p>
</div>

<div class="example">
	<h4>Example 1</h4>
	<p>Find \( f''(x) \) for \( f(x)=3x^7 \).</p>
	<p>First, we need to find the first derivative: \[f'(x)=21x^6.\]</p>
	<p>Then we take the derivative of that function: \[f''(x)=\frac{d}{dx}\left( f'(x) \right)=\frac{d}{dx}\left( 21x^6 \right)=126x^5. \]</p>
</div>

<p>If \(f(x)\) represents the position of a particle at time \(x\), then \(v(x) = f '(x)\) will represent the velocity (rate of change of the position) of the particle and \(a(x) = v '(x) = f ''(x)\) will represent the acceleration (the rate of change of the velocity) of the particle.</p>

<p>You are probably familiar with acceleration from driving or riding in a car. The speedometer tells you your velocity (speed). When you leave from a stop and press down on the accelerator, you are accelerating &ndash; increasing your speed.</p>

<div class="example">
	<h4>Example 2</h4>
	<p>The height (feet) of a particle at time \(t\) seconds is \(f(t) = t^3 – 4t^2 + 8t\). Find the height, velocity and acceleration of the particle when \(t =\) 0, 1, and 2 seconds.</p>
	<p>\(f(t) = t^3 – 4t^2 + 8t\) so \(f(0) = 0\) feet, \(f(1) = 5\) feet, and \(f(2) = 8\) feet.</p>
	<p>The velocity is \(v(t) = f '(t) = 3t^2 – 8t + 8\) so \( v(0) = 8\) ft/s, \(v(1) = 3\) ft/s, and \(v(2) = 4\) ft/s. At each of these times the velocity is positive and the particle is moving upward, increasing in height.</p>
	<p>The acceleration is \(a(t) = f ''(t) = 6t – 8\) so \(a(0) = –8 \text{ ft/s\(^2\)}\), \(a(1) = –2 \text{ ft/s\(^2\)}\) and \(a(2) = 4 \text{ ft/s\(^2\)}\).</p>
	<p>At time 0 and 1, the acceleration is negative, so the particle's velocity would be decreasing at those points - the particle was slowing down. At time 2, the velocity is positive, so the particle was increasing in speed.</p>
</div>

<div class="videoplayer w639">
	<video id="video_2.6.2" class="video-js vjs-default-skin" controls preload="metadata" width="639" height="auto">
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-6/free_falling_object.mp4" type='video/mp4' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-6/free_falling_object.webm" type='video/webm' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

</section>

<section><h2>Inflection Points</h2>

<div class="important">
	<h4>Definition (Inflection Point)</h4>
	<p>An <strong>inflection point</strong> is a point on the graph of a function where the concavity of the function changes, from concave up to down or from concave down to up.</p>
</div>

<div class="example">
	<h4>Example 3</h4>
	<p>Which of the labeled points in the graph below are inflection points?</p>
	<figure><img src="images/image047.png" alt="graph"/></figure>
	<p>The concavity changes at points b and g. At points a and h, the graph is concave up on both sides, so the concavity does not change. At points c and f, the graph is concave down on both sides. At point e, even though the graph looks strange there, the graph is concave down on both sides &ndash; the concavity does not change.</p>
</div>

<p>Inflection points happen when the concavity changes. Because we know the connection between the concavity of a function and the sign of its second derivative, we can use this to find inflection points.</p>

<div class="important">
	<h4>Working Definition</h4>
	<p>An <strong>inflection point</strong> is a point on the graph where the second derivative changes sign.</p>
</div>

<p>In order for the second derivative to change signs, it must either be zero or be undefined. So to find the inflection points of a function we only need to check the points where \(f ''(x)\) is 0 or undefined.</p>

<p>Note that it is not enough for the second derivative to be zero or undefined. We still need to check that the sign of \( f'' \) changes sign. The functions in the next example illustrate what can happen.</p>

<div class="example">
	<h4>Example 4</h4>
	<p>Let \(f(x) = x^3\), \(g(x) = x^4\) and \(h(x) = x^{1/3}\). For which of these functions is the point (0,0) an inflection point?</p>
	<figure><img src="images/image048.png" alt="graphs"/></figure>
	<p>Graphically, it is clear that the concavity of \(f(x) = x^3\) and \(h(x) = x^{1/3}\) changes at (0,0), so (0,0) is an inflection point for \(f\) and \(h\). The function \(g(x) = x^4\) is concave up everywhere so (0,0) is not an inflection point of \(g\).</p>
	<p>We can also compute the second derivatives and check the sign change.</p>
	<p>If \(f(x) = x^3\), then \(f'(x) = 3x^2\) and \( f''(x) = 6x\). The only point at which \(f''(x) = 0\) or is undefined (\(f'\) is not differentiable) is at \(x = 0\). If \( x \lt 0\), then \(f ''(x) \lt 0\) so \(f\) is concave down. If \(x \gt 0\), then \(f''(x) \gt 0\) so \(f\) is concave up. At \(x = 0\) the concavity changes so the point \((0,f(0)) = (0,0)\) is an inflection point of \(f(x)=x^3\).</p>
	<p>If \(g(x) = x^4\), then \(g'(x) = 4x^3\) and \(g''(x) = 12x^2\). The only point at which \(g''(x) = 0\) or is undefined is at \(x = 0\). If \(x \lt 0\), then \(g''(x) \gt 0\) so \(g\) is concave up. If \(x \gt 0\), then \(g ''(x) \gt 0\) so \(g\) is also concave up. At \(x = 0\) the concavity <strong>does not change</strong> so the point \((0, g(0)) = (0,0)\) is <strong>not an inflection point</strong> of \(g(x)=x^4\). Keep this example in mind!</p>
	<p>If \(h(x) = x^{1/3}\), then \(h'(x) = \frac{1}{3}x^{-2/3}\) and \(h''(x) = -\frac{2}{9}x^{-5/3}\). \(h''\) is not defined if \(x = 0\), but \(h''(\text{negative number}) \gt 0\) and \(h''(\text{positive number}) \lt 0\) so \(h\) changes concavity at (0,0) and (0,0) is an inflection point of \(h\).</p>
</div>

<div class="videoplayer w639">
	<video id="video_2.6.3" class="video-js vjs-default-skin" controls preload="metadata" width="639" height="auto">
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-6/inflection_points.mp4" type='video/mp4' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-6/inflection_points.webm" type='video/webm' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

<div class="example">
	<h4>Example 5</h4>
	<p>Sketch the graph of a function with \(f(2) = 3\), \(f '(2) = 1\), and an inflection point at (2,3).</p>
	<p>Two possible solutions are shown here.</p>
	<figure><img src="images/image049.png" alt="graphs"/></figure>
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
			<td><a href="section2-5.php">&larr; Previous Section</a></td>
			<td><a href="section2-7.php">Next Section &rarr; </a></td>
		</tr>
	</table>
</footer>
</div>
</body>
</html>