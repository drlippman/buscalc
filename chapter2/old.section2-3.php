<!DOCTYPE html>
<html lang="en">
<?php include '../includes/head.html'; ?>
<body>
<?php include '../includes/geogebra_main_script.html'; ?>
<?php include 'geogebra/tangent_line_manipulative.html'; ?>
<!--Nav  must come after any GeoGebra script includes-->
<?php include '../includes/nav.html'; ?> 
<div class="page-wrap">
<header class="main-nav-buttons">
	<a href="#main-nav" class="open-menu">&equiv; </a>
	<a href="#close-nav" class="close-menu">&times; </a>
	<!--<h1>menu</h1>-->
 </header>

<section class="content">
<h1>Section 2.3: The Derivative</h1>
<h2>Definition of the Derivative</h2>

<p>Returning to the tangent slope problem from the first section, let's look at the problem of finding the slope of the line \(L\) in the graph below which is tangent to \(f(x) = x^2\) at the point (2,4). </p>

<p>We could estimate the slope of \(L\) from the graph, but we won't. Instead, we will use the idea that secant lines over tiny intervals approximate the tangent line.</p>

<figure><img src="images/image020.png" alt="graph"/><img src="images/image021.png" alt="graph"/></figure>

<p>We can see that the line through (2,4) and (3,9) on the graph of \(f\) is an approximation of the slope of the tangent line, and we can calculate that slope exactly: \(m = \frac{\Delta y}{\Delta x} = \frac{9-4}{3-2} = 5\). But \(m = 5\) is only an estimate of the slope of the tangent line and not a very good estimate. It's too big. We can get a better estimate by picking a second point on the graph of \(f\) which is closer to (2,4) &ndash; the point (2,4) is fixed and it must be one of the points we use. </p>

<p>From the second figure, we can see that the slope of the line through the points (2,4) and (2.5,6.25) is a better approximation of the slope of the tangent line at (2,4): \(m = \frac{\Delta y}{\Delta x} = \frac{6.25 - 4}{2.5 - 2} = \frac{2.25}{0.5} = 4.5 \), a better estimate, but still an approximation. We can continue picking points closer and closer to (2,4) on the graph of \(f\), and then calculating the slopes of the lines through each of these points and the point (2,4):</p>

<table class="border">
	<caption>Points to the left of (2,4)</caption>
	<tr>
		<td>\( x \)</td>
		<td>\( y=x^2 \)</td>
		<td>Slope of line through \( (x,y) \) and (2,4).</td>
	</tr>
	<tr>
		<td>1.5</td>
		<td>2.25</td>
		<td>3.5</td>
	</tr>
	<tr>
		<td>1.9</td>
		<td>3.61</td>
		<td>3.9</td>
	</tr>
	<tr>
		<td>1.99</td>
		<td>3.9601</td>
		<td>3.99</td>
	</tr>
</table>
<table class="border">
	<caption>Points to the right of (2,4)</caption>
	<tr>
		<td>\( x \)</td>
		<td>\( y=x^2 \)</td>
		<td>Slope of line through \( (x,y) \) and (2,4).</td>
	</tr>
	<tr>
		<td>3</td>
		<td>9</td>
		<td>5</td>
	</tr>
	<tr>
		<td>2.5</td>
		<td>6.25</td>
		<td>4.5</td>
	</tr>
	<tr>
		<td>2.01</td>
		<td>4.0401</td>
		<td>4.01</td>
	</tr>
</table>
<p>The only thing special about the x–values we picked is that they are numbers which are close, and very close, to \(x = 2\). Someone else might have picked other nearby values for \(x\). As the points we pick get closer and closer to the point (2,4) on the graph of \( y = x^2\), the slopes of the lines through the points and (2,4) are better approximations of the slope of the tangent line, and these slopes are getting closer and closer to 4.</p>

<p>We can bypass much of the calculating by not picking the points one at a time: let's look at a general point near (2,4). Define \( x = 2 + h\) so \(h\) is the increment from 2 to \(x\). If \(h\) is small, then \(x = 2 + h\) is close to 2 and the point \((2+h, f(2+h) ) = \left(2+h, (2+h)^2\right) \) is close to (2,4). The slope \(m\) of the line through the points (2,4) and \(\left(2+h, (2+h)^2\right)\) is a good approximation of the slope of the tangent line at the point (2,4):</p>
<figure>
	<img src="images/image022.png" alt="graph"/>
	<figcaption>\( m=\dfrac{(2+h)^2-4}{(2+h)-2}=\dfrac{\left(4+4h+h^2\right)-4}{h}=\dfrac{4h+h^2}{h}=\dfrac{h(4+h)}{h}=4+h\)</figcaption>
</figure>

<p>The value \( m = 4 + h \) is the slope of the secant line through the two points (2,4) and \(\left( 2+h, (2+h)^2 \right)\). As \(h\) gets smaller and smaller, this slope approaches the slope of the tangent line to the graph of \(f\) at (2,4). </p>

<p>More formally, we could write: \[\text{Slope of the tangent line} = \dfrac{\Delta y}{\Delta x} = \lim\limits_{h\to 0} (4+h). \]</p>

<p>We can easily evaluate this limit using direct substitution, finding that as the interval \(h\) shrinks towards 0, the secant slope approaches the tangent slope, 4.</p>

<p>Try it for yourself using this applet:</p>
<div style="width:676px;height:482px;" id="applet_container" class="geogebra"></div>

<p>The tangent line problem and the instantaneous velocity problem are the same problem. In each problem we wanted to know how rapidly something was <strong>changing at an instant in time</strong>, and the answer turned out to be finding the <strong>slope of a tangent line</strong>, which we <em>approximated</em> with the <strong>slope of a secant line</strong>. This idea is the key to defining the slope of a curve.</p>

<div class="videoplayer w639">
	<video id="video_2.3.1" class="video-js vjs-default-skin" controls preload="auto" width="639" height="auto">
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-3/tangent_line_to_x3.mp4" type='video/mp4' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-3/tangent_line_to_x3.webm" type='video/webm' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

<div class="important">
	<h4>The Derivative</h4>
	<p>We can view the derivative in different ways. Here are a three of them:</p>
	<ul>
		<li>The derivative of a function \(f\) at a point (x, f(x)) is the instantaneous rate of change.</li>
		<li>The derivative is the slope of the tangent line to the graph of \(f\) at the point \((x, f(x))\).</li>
		<li>The derivative is the slope of the curve \(f(x)\) at the point \((x, f(x))\).</li>
	</ul>
	<p>A function is called <strong>differentiable</strong> at \((x, f(x))\) if its derivative exists at \((x, f(x))\).</p>
	
	<h5>Notation for the Derivative</h5>
	<p>The derivative of \(y = f(x)\) with respect to \(x\) is written as \[f'(x)\] (read aloud as "\(f\) prime of \(x\)"), or \[y'\] (read aloud as "why prime") or \[\frac{dy}{dx}\] (read aloud as "dee why dee ex"), or \[\frac{df}{dx}.\]</p>
	<p>The notation that resembles a fraction is called <strong>Leibniz notation</strong>. It displays not only the name of the function (\(f\) or \(y\)), but also the name of the variable (in this case, \(x\)). It looks like a fraction because the derivative is a slope. In fact, this is simply \( \frac{\Delta y}{\Delta x} \) written in Roman letters instead of Greek letters.</p>
	
	<h5>Verb Forms</h5>
	<p>We <strong>find the derivative</strong> of a function, or <strong>take the derivative</strong> of a function, or <strong>differentiate</strong> a function.</p>
	<p>We use an adaptation of the \( \frac{df}{dx} \) notation to mean "find the derivative of \(f(x)\):" \[\frac{d}{dx}\left[f(x)\right]=\frac{df}{dx}.\] [The book uses parentheses instead of brackets&ndash;both are acceptable forms of the notation.]</p>
	
	<h5>Formal Algebraic Definition</h5>
	<p>\[f'(x)=\lim\limits_{h\to 0} \dfrac{f(x+h)-f(x)}{h}\]</p>
	
	<h5>Practical Definition</h5>
	<p>The derivative can be approximated by looking at an average rate of change, or the slope of a secant line, over a very tiny interval. The tinier the interval, the closer this is to the true instantaneous rate of change, slope of the tangent line, or slope of the curve.</p>
	
	<h5>Looking Ahead</h5>
	<p>We will have methods for computing exact values of derivatives from formulas soon. If the function is given to you as a table or graph, you will still need to approximate this way.</p>
</div>

<div class="videoplayer w639">
	<video id="video_2.3.2" class="video-js vjs-default-skin" controls preload="auto" width="639" height="auto">
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-3/tangent_line_to_sqrt_x_plus_1.mp4" type='video/mp4' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-3/tangent_line_to_sqrt_x_plus_1.webm" type='video/webm' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

<p>This is the foundation for the rest of this chapter. It’s remarkable that such a simple idea (the slope of a tangent line) and such a simple definition (for the derivative \( f'(x) \)) will lead to so many important ideas and applications.</p>

<h2>The Derivative as a Function</h2>

<p>We now know how to find (or at least approximate) the derivative of a function for any \(x\)-value; this means we can think of the derivative as a function, too. The inputs are the same \(x\)’s; the output is the value of the derivative at that \(x\) value.</p>

<div class="example">
	<h4>Example 1</h4>
	<p>Below is the graph of a function \( y=f(x) \). We can use the information in the graph to fill in a table showing values of \( f'(x): \)</p>
	<figure><img src="images/image023.png" alt="graph"/></figure>
	<p>At various values of \(x\), draw your best guess at the tangent line and measure its slope. You might have to extend your lines so you can read some points. In general, your estimate of the slope will be better if you choose points that are easy to read and far away from each other. Here are estimates for a few values of \(x\) (parts of the tangent lines used are shown above in the graph):</p>
	<table class="border">
		<tr>
			<td>\( x \)</td>
			<td>\( y=f(x) \)</td>
			<td>\( f'(x)= \) the estimated <em>slope</em> of the tangent line to the curve at the point \( (x,y) \).</td>
		</tr>
		<tr>
			<td>0</td>
			<td>0</td>
			<td>1</td>
		</tr>
		<tr>
			<td>1</td>
			<td>1</td>
			<td>0</td>
		</tr>
		<tr>
			<td>2</td>
			<td>0</td>
			<td>-1</td>
		</tr>
		<tr>
			<td>3</td>
			<td>-1</td>
			<td>0</td>
		</tr>
		<tr>
			<td>3.5</td>
			<td>0</td>
			<td>2</td>
		</tr>
	</table>
	<p>We can estimate the values of \(f'(x)\) at some non-integer values of \(x\), too: \(f'(0.5) \approx 0.5\) and \(f'(1.3) \approx -0.3\).</p>
	<p>We can even think about entire intervals. For example, if \(0 \lt x \lt 1\), then \(f(x)\) is increasing, all the slopes are positive, and so \(f'(x)\) is positive. </p>
	<p>The values of \(f'(x)\) definitely depend on the values of \(x\), and \(f'(x)\) is a function of \(x\). We can use the results in the table to help sketch the graph of \(f'(x)\). </p>
	<figure><img src="images/image024.png" alt="derivative graph"/></figure>
</div>

<div class="videoplayer w639">
	<video id="video_2.3.3" class="video-js vjs-default-skin" controls preload="auto" width="639" height="auto">
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-3/scketch_fprime_from_f_graph.mp4" type='video/mp4' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-3/scketch_fprime_from_f_graph.webm" type='video/webm' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

<div class="example">
	<h4>Example 2</h4>
	<p>Shown is the graph of the height \(h(t)\) of a rocket at time \(t\).</p>
	<figure><img src="images/image025.png" alt="graph"/></figure>
	<p>Sketch the graph of the <strong>velocity</strong> of the rocket at time \(t\).  (Velocity is the <strong>derivative</strong> of the height function, so it is the <strong>slope of the tangent</strong> to the graph of position or height.)</p>
	<p>We can estimate the slope of the function at several points.  The lower graph below shows the velocity of the rocket.  This is \(v(t) = h'(t)\).</p>
	<figure><img src="images/image026.png" alt="derivative"/></figure>
</div>

<div class="videoplayer w639">
	<video id="video_2.3.4" class="video-js vjs-default-skin" controls preload="auto" width="639" height="auto">
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-3/general_comments.mp4" type='video/mp4' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-3/general_comments.webm" type='video/webm' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
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
			<td><a href="section2-2.php">&larr; Previous Section</a></td>
			<td><a href="section2-4.php">Next Section &rarr; </a></td>
		</tr>
	</table>
</footer>
</div>
</body>
</html>