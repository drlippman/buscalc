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
<h1>Section 2.8: Curve Sketching</h1>

<p>This section examines some of the interplay between the shape of the graph of \(f\) and the behavior of \(f'\). If we have a graph of \(f\), we will see what we can conclude about the values of \(f'\). If we know values of \(f'\), we will see what we can conclude about the graph of \(f\). We will also utilize the information from \(f''\) that we learning in the last section.</p>

<div class="videoplayer w639">
	<video id="video_2.8.1" class="video-js vjs-default-skin" controls preload="metadata" width="639" height="auto">
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-8/intro_to_abbr_curve_sketching.mp4" type='video/mp4' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-8/intro_to_abbr_curve_sketching.webm" type='video/webm' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

<section><h2>First Derivative Information</h2>

<div class="important">
	<h4>Definitions</h4>
	<p>The function \(f(x)\) is <strong>increasing</strong> on \((a,b)\) if \(a \lt x_1 \lt x_2 \lt b\) implies \(f( x_1 ) \lt f( x_2 )\).</p>
	<p>The function \(f(x)\) is <strong>decreasing</strong> on \((a,b)\) if \(a \lt x_1 \lt x_2 \lt b\) implies \(f( x_1 ) \gt f( x_2 )\).</p>
</div>

<p>Graphically, \(f\) is <strong>increasing</strong> (decreasing) if, as we move from left to right along the graph of \(f\), the height of the graph <strong>increases</strong> (decreases).</p>

<p>These same ideas make sense if we consider \(h(t)\) to be the height (in feet) of a rocket at time \(t\) seconds. We naturally say that the rocket is rising or that its height is increasing if the height \(h(t)\) increases over a period of time, as \(t\) increases.</p>

<div class="example">
	<h4>Example 1</h4>
	<p>List the intervals on which the function shown is increasing or decreasing.</p>
	<figure><img src="images/image072.png" alt="graph"/></figure>
	<p>\(f\) is increasing on the intervals [0,1], [ 2,3] and [4,6].</p>
	<p>\(f\) is decreasing on [1,2] and [6,8].</p>
	<p>On the interval [3,4] the function is not increasing or decreasing &ndash; it is constant.</p>
</div>

<div class="important">
	<h4>First Derivative Information about Shape</h4>
	<p>For a function \(f\) which is differentiable on an interval \((a,b)\);</p>
	<ul>
		<li>if \(f\) is increasing on \((a,b)\), then \(f'(x) \geq 0\) for all \(x\) in \((a,b)\).</li>
		<li>if \(f\) is decreasing on \((a,b)\), then \(f'(x) \leq 0\) for all \(x\) in \((a,b)\).</li>
		<li>if \(f\) is constant on \((a,b)\), then \(f'(x) = 0\) for all \(x\) in \((a,b)\).</li>
	</ul>
</div>

<div class="example">
	<h4>Example 2</h4>
	<p>The graph shows the height of a helicopter during a period of time. Sketch the graph of the upward velocity of the helicopter, \( \frac{dh}{dt} \).</p>
	<figure><img src="images/image073.png" alt="height graph"/></figure>
	<p>Notice that the \( h(t)\) has a local maximum when \(t = 2 \) and \(t = 5\), and so \(v(2) = 0\) and \(v(5) = 0\). Similarly, \(h(t)\) has a local minimum when \(t = 3\), so \(v(3) = 0\).</p>
	<p>When \(h\) is increasing, \(v\) is positive. When \(h\) is decreasing, \(v\) is negative.</p>
	<p>Using this information, we can sketch a graph of \(v(t) = \frac{dh}{dt}\).</p>
	<figure><img src="images/image074.png" alt="velocity graph"/></figure>
</div>

<p>The next theorem is almost the converse of the First Shape Theorem and explains the relationship between the values of the derivative and the graph of a function from a different perspective. It says that if we know something about the values of \(f'\), then we can draw some conclusions about the shape of the graph of \(f\).</p>

<div class="important">
	<h4>First Derivative Information about Shape (part 2)</h4>
	<p>For a function \(f\) which is differentiable on an interval \(I\);</p>
	<ul>
		<li>if \(f'(x) \gt 0\) for all \(x\) in the interval \(I\), then \(f\) is increasing on \(I\).</li>
		<li>if \(f'(x) \lt 0\) for all \(x\) in the interval \(I\), then \(f\) is decreasing on \(I\).</li>
		<li>if \(f'(x) = 0\) for all \(x\) in the interval \(I\), then \(f\) is constant on \(I\).</li>
	</ul>
</div>

<div class="example">
	<h4>Example 3</h4>
	<p>Use information about the values of \(f'\) to help graph \(f(x) = x^3 - 6x^2 + 9x + 1\).</p>
	<p>\(f'(x) = 3x^2 - 12x + 9 = 3(x - 1)(x - 3)\) so \(f'(x) = 0\) only when \(x = 1\) or \(x = 3\). \(f'\) is a polynomial so it is always defined.</p>
	<p>The only critical numbers for \(f\) are \(x = 1\) and \(x = 3\), and they divide the real number line into three intervals: \((-\infty, 1)\), \((1,3)\), and \((3, \infty)\). On each of these intervals, the function is either always increasing or always decreasing.</p>
	<p>If \(x \lt 1\), then \(f '(x) =\) 3(negative number)(negative number) \(\gt 0\) so \(f\) is increasing.</p>
	<p>If \(1 \lt x \lt 3\), then \(f'(x) =\) 3(positive number)(negative number) \(\lt 0\) so f is decreasing.</p>
	<p>If \(x \gt 3\), then \(f'(x) =\) 3(positive number)(positive number) \(\gt 0\) so \(f\) is increasing.</p>
	<p>Even though we don't know the value of \(f\) anywhere yet, we do know a lot about the shape of the graph of \(f\): as we move from left to right along the \(x\)-axis, the graph of \(f\) increases until \(x = 1\), then the graph decreases until \(x = 3\), and then the graph increases again. The graph of \(f\) makes "turns" when \(x = 1\) and \(x = 3\); it has a local maximum at \(x = 1\), and a local minimum at \(x = 3\).</p>
	<figure><img src="images/image075.png" alt="sign chart"/></figure>
	<p>To plot the graph of \(f\), we still need to evaluate \(f\) at a few values of \(x\), but only at a very few values. \(f(1) = 5\), and (1,5) is a local maximum of \(f\). \(f(3) = 1\), and (3,1) is a local minimum of \(f\). The resulting graph of \(f\) is shown here.</p>
	<figure><img src="images/image076.png" alt="graph"/></figure>
</div>

</section>

<section><h2>Second Derivative Information</h2>

<p>Until now, we've only used first derivative information, but we could also use information from the second derivative to provide more information about the shape of the function.</p>

<div class="important">
	<h4>Second Derivative Information about Shape</h4>
	<ul>
		<li>If \(f\) is concave up on \((a,b)\), then \(f''(x) \geq 0\) for all \(x\) in \((a,b)\).</li>
		<li>If \(f\) is concave down on \((a,b)\), then \(f''(x) \leq 0\) for all \(x\) in \((a,b)\).</li>
	</ul>
	<p>The converse of both of these are also true:</p>
	<ul>
		<li>If \(f''(x) \geq 0\) for all \(x\) in \((a,b),\) then \(f\) is concave up on \((a,b)\).</li>
		<li>If \(f''(x) \leq 0\) for all \(x\) in \((a,b),\) then \(f\) is concave down on \((a,b)\).</li>
	</ul>
</div>

<div class="videoplayer w639">
	<video id="video_2.8.2" class="video-js vjs-default-skin" controls preload="metadata" width="639" height="auto">
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-8/intervals_example_3x_plus_2.mp4" type='video/mp4' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-8/intervals_example_3x_plus_2.webm" type='video/webm' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

<div class="example">
	<h4>Example 4</h4>
	<p>Use information about the values of \(f''\) to help determine the intervals on which the function \(f(x) = x^3 - 6x^2 + 9x + 1\) is concave up and concave down.</p>
	<p>For concavity, we need the second derivative: \( f'(x)=3x^2-12x+9 \), so \( f''(x)=6x-12 \).</p>
	<p>To find possible inflection points, set the second derivative equal to zero. \( 6x-12=0 \), so \(x = 2\). This divides the real number line into two intervals: \( (-\infty,2) \) and \( (2,\infty) \).</p>
	<p>For \(x \lt 2\), the second derivative is negative (for example, \( f''(0)=6(0)-12=-12 \)), so \(f\) is concave down. For \(x \gt 2\), the second derivative is positive, so \(f\) is concave up.</p>
	<p>We could have incorporated this concavity information when sketching the graph for the previous example, and indeed we can see the concavity reflected in the graph shown.</p>
</div>

<div class="videoplayer w639">
	<video id="video_2.8.3" class="video-js vjs-default-skin" controls preload="metadata" width="639" height="auto">
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-8/intervals_example_x5_minus_15x3.mp4" type='video/mp4' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-8/intervals_example_x5_minus_15x3.webm" type='video/webm' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

<div class="example">
	<h4>Example 5</h4>
	<p>Use information about the values of  \(f'\)  and \(f''\) to help graph  \( f(x)=x^{2/3} \).</p>
	<p> \( f'(x)=\frac{2}{3}x^{-1/3} \).  This is undefined at \(x = 0\).</p>
	<p> \( f''(x)=-\frac{2}{9}x^{-4/3} \).  This is also undefined at \(x = 0\).</p>
	<p>This creates two intervals:  \(x \lt 0\), and \( x \gt 0\).</p>
	<p>On the interval \(x \lt 0\), we could test out a value like \(x = -1\):  \[ f'(-1)=\frac{2}{3}(-1)^{-1/3}=-\frac{2}{3} \] and  \[ f''(-1)=-\frac{2}{9}(-1)^{-4/3}=-\frac{2}{9}. \]</p>
	<p>\( f'(x) \) is negative and \( f''(x) \)  is negative, so we can conclude that the function is decreasing and concave down on this interval.</p>
	<p>On the interval \(x \gt 0\), we could test out a value like \(x = 1\): \[ f'(1)=\frac{2}{3}(1)^{-1/3}=\frac{2}{3} \]  and  \[ f''(1)=-\frac{2}{9}(1)^{-4/3}=-\frac{2}{9}. \]</p>
	<p>\( f'(x) \) is positive and \( f''(x) \)  is negative, so we can conclude that the function is increasing and concave down on this interval.</p>
	<p>We can also calculate that  \( f(0)=0 \), giving us a base point for the graph.  Using this information, we can conclude the graph must look like this:</p>
	<figure><img src="images/image077.png" alt="graph"/></figure>
</div>

<div class="videoplayer w639">
	<video id="video_2.8.4" class="video-js vjs-default-skin" controls preload="metadata" width="639" height="auto">
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-8/intervals_example_x2_over_x_plus_2.mp4" type='video/mp4' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-8/intervals_example_x2_over_x_plus_2.webm" type='video/webm' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

</section>

<section><h2>Sketching without an Equation</h2>

<p>Of course, graphing calculators and computers are great at graphing functions.  Calculus provides a way to illuminate what may be hidden or out of view when we graph using technology.  More importantly, calculus gives us a way to look at the derivatives of functions for which there is no equation given.  We already saw the idea of this back in <a href="section2-3.php">Section 2.3</a> where we sketched the derivative of two graphs by estimating slopes on the curves.</p>

<p>We can summarize all the derivative information about shape in a table.</p>

<div class="important">
	<h4>Summary of Derivative Information about the Graph</h4>
	<table class="border">
		<tr>
			<td>\( f(x) \)</td>
			<td>Increasing</td>
			<td>Decreasing</td>
			<td>Concave Up</td>
			<td>Concave Down</td>
		</tr>
		<tr>
			<td>\( f'(x) \)</td>
			<td>\( + \)</td>
			<td>\( - \)</td>
			<td>Increasing</td>
			<td>Decreasing</td>
		</tr>
		<tr>
			<td>\( f''(x) \)</td>
			<td></td>
			<td></td>
			<td>\( + \)</td>
			<td>\( - \)</td>
		</tr>
	</table>
	<p>When \(f'(x) = 0\), the graph of \(f\) may have a local max or min.</p>
	<p>When \(f''(x) = 0\), the graph of \(f\) may have an inflection point.</p>
</div>

<div class="example">
	<h4>Example 6</h4>
	<p>A company's bank balance, \(B\), in millions of dollars, \(t\) weeks after releasing a new product is shown in the graph below.  Sketch a graph of the marginal balance &ndash; the rate at which the bank balance was changing over time.</p>
	<figure><img src="images/image078.png" alt="graph"/></figure>
	<p>Notice that since the tangent line will be horizontal at about \(t = 0.6\) and \(t = 3.2\), the derivative will be 0 at those points.  </p>
	<p>We can then identifying intervals on which the original function is increasing or decreasing.  This will tell us when the derivative function is positive or negative.</p>
	<table class="border">
		<tr>
			<td>Interval</td>
			<td>\( B(t) \)</td>
			<td>\( B'(t) \)</td>
		</tr>
		<tr>
			<td>\(0 \lt t \lt 0.6\)</td>
			<td>Decreasing</td>
			<td>Negative</td>
		</tr>
		<tr>
			<td>\( 0.6 \lt t \lt 3.2 \)</td>
			<td>Increasing</td>
			<td>Positive</td>
		</tr>
		<tr>
			<td>\( t \gt 3.2 \)</td>
			<td>Decreasing</td>
			<td>Negative</td>
		</tr>
	</table>
	<p>There appear to be inflection points at about \(t =1.5\) and \(t = 5.5\).  At these points, the derivative will be changing from increasing to decreasing or vice versa, so the derivative will have a local max or min at those points.</p>
	<p>Looking at the intervals of concavity:</p>
	<table class="border">
		<tr>
			<td>Interval</td>
			<td>\( B(t) \)</td>
			<td>\( B'(t) \)</td>
		</tr>
		<tr>
			<td>\( 0 \lt t \lt 1.5 \)</td>
			<td>Concave Up</td>
			<td>Increasing</td>
		</tr>
		<tr>
			<td>\( 1.5 \lt t \lt 5.5 \)</td>
			<td>Concave Down</td>
			<td>Decreasing</td>
		</tr>
		<tr>
			<td>\( t \gt 5.5 \)</td>
			<td>Concave Up</td>
			<td>Increasing</td>
		</tr>
	</table>
	<p>If we wanted a more accurate sketch of the derivative function, we could also estimate the derivative at a few points:</p>
	<table class="border">
		<tr>
			<td>\( t \)</td>
			<td>\( B'(t) \)</td>
		</tr>
		<tr>
			<td>0</td>
			<td>-10</td>
		</tr>
		<tr>
			<td>1.5</td>
			<td>3</td>
		</tr>
		<tr>
			<td>6</td>
			<td>-1</td>
		</tr>
	</table>
	<img src="images/image079.png" alt="graph with some derivative values"/>
	<p>Now we can sketch the derivative.  We know a few values for the derivative function, and on each interval we know the shape we need.  We can use this to create a rough idea of what the graph should look like.</p>
	<figure><img src="images/image080.png" alt="derivative intervals"/></figure>
	<p>Smoothing this out gives us a good estimate for the graph of the derivative.</p>
	<figure><img src="images/image081.png" alt="derivative graph"/></figure>
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
			<td><a href="section2-7.php">&larr; Previous Section</a></td>
			<td><a href="section2-9.php">Next Section &rarr; </a></td>
		</tr>
	</table>
</footer>
</div>
</body>
</html>