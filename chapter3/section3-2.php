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
<h1>Section 3.2: The Fundamental Theorem and Antidifferentiation</h1>

<section><h2>The Fundamental Theorem of Calculus</h2>

<p>This section contains the most important and most used theorem of calculus, the Fundamental Theorem of Calculus. Discovered independently by Newton and Leibniz in the late 1600s, it establishes the connection between derivatives and integrals, provides a way of easily calculating many integrals, and was a key step in the development of modern mathematics to support the rise of science and technology. Calculus is one of the most significant intellectual structures in the history of human thought, and the Fundamental Theorem of Calculus is a most important brick in that beautiful structure.</p>

<div class="videoplayer w639">
	<video id="video_3.2.1" class="video-js vjs-default-skin" controls preload="metadata" width="639" height="auto">
		<source src="video_3-2/limit_of_Riemann_sum_example.webm" type='video/webm' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_3-2/limit_of_Riemann_sum_example.mp4" type='video/mp4' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

<div class="important">
	<h4>The Fundamental Theorem of Calculus</h4>
	<p>\[ \int\limits_a^b F'(x) \,dx = F(b) - F(a) \]</p>
</div>

<p>This is actually not new for us; we've been using this relationship for some time; we just haven’t written it this way. This says what we've said before: the definite integral of a rate from \(a\) to \(b\) is the net \(y\)-units, the change in \(y\), that accumulate between \(t = a\) and \(t = b\). Here we’ve just made it plain that that the rate is a derivative.</p>

<p>Thinking about the relationship this way gives us the key to finding exact answers for some definite integrals. If the integrand is the derivative of some \(F\), then maybe we could simply find \(F\) and subtract &ndash; that would be easier than approximating with rectangles. Going backwards through the differentiation process will help us evaluate definite integrals.</p>

<div class="example">
	<h4>Example 1</h4>
	<p>Find \(f(x)\) if \(f '(x) = 2x\).</p>
	<p>Oooh, I know this one. It's \( f(x)=x^2+3 \). Oh, wait, you were thinking something else? Yes, I guess you're right &ndash; \( f(x)=x^2 \) works too. So does \( f(x)=x^2-\pi \), and \( f(x)=x^2+104,\!589.2 \). In fact, there are lots of answers.</p>
</div>

<p>In fact, there are infinitely many functions that all have the same derivative. And that makes sense &ndash; the derivative tells us about the shape of the function, but it doesn't tell about the location. We could shift the graph up or down and the shape wouldn't be affected, so the derivative would be the same.</p>

<p>This leads to one of the trickier definitions &ndash; pay careful attention to the articles (<q>the</q> versus <q>an</q>), because they're important.</p>

<div class="important">
	<h4>Antiderivatives</h4>
	<p>An <strong>antiderivative</strong> of a function \(f(x)\) is any function \(F(x)\) where \(F'(x) = f(x)\).</p>
	<p>
	The antiderivative of a function \(f(x)\) is a whole family of functions, written \(F(x) + C\), where \(F'(x) = f(x)\) and \(C\) represents any constant.</p>
	<p>The antiderivative is also called the <strong>indefinite integral</strong>.</p>
	<h5>Notation for the Antiderivative</h5>
	<p>The antiderivative of \(f\) is written \[\int f(x) \,dx\]</p>
	<p>This notation resembles the definite integral, because the Fundamental Theorem of Calculus says antiderivatives and definite integrals are intimately related. But in this notation, there are no limits of integration.</p>
	<p>The \( \int \) symbol is still called an <strong>integral sign</strong>; the \(dx\) on the end still must be included; you can still think of \( \int \) and \(dx\) as left and right parentheses. The function \(f\) is still called the <strong>integrand</strong>.</p>
	<h5>Verb Forms</h5>
	<p>We <strong>antidifferentiate</strong>, or <strong>integrate</strong>, or <strong>find the indefinite integral</strong> of a function. This process is called <strong>antidifferentiation</strong> or <strong>integration</strong>.</p>
</div>
<p>There are no small families in the world of antiderivatives: if \(f\) has one antiderivative \(F\), then \(f\) has an infinite number of antiderivatives and every one of them has the form \(F(x) + C\).</p>

<div class="example">
	<h4>Example 2</h4>
	<p>Find <strong>an</strong> antiderivative of \(2x\).</p>
	<p>We can choose any function we like as long as its derivative is \(2x\), so we can pick, say, \( F(x)=x^2-5.2 \).</p>
</div>

<div class="example">
	<h4>Example 3</h4>
	<p>Find <strong>the</strong> antiderivative of \(2x\).</p>
	<p>Now we need to write the entire family of functions whose derivatives are \(2x\). We can use the \( \int \) notation: \[\int 2x\, dx = x^2+C.\] (Don't forget the <q>\( +C \)</q>!)</p>
</div>

<div class="example">
	<h4>Example 4</h4>
	<p>Find \( \int e^x\, dx \).</p>
	<p>This is likely one you remember: \( e^x \) is its own derivative, so it is also its own antiderivative. The integral sign tells us that we need to include the entire family of functions, so we need that <q>\(+C\)</q> on the end: \[ \int e^x\, dx = e^x+C. \]</p>
</div>

<div class="videoplayer w639">
	<video id="video_3.2.2" class="video-js vjs-default-skin" controls preload="metadata" width="639" height="auto">
		<source src="video_3-2/intro_and_look_at_examples_2-4.webm" type='video/webm' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_3-2/intro_and_look_at_examples_2-4.mp4" type='video/mp4' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

</section>

<section><h2>Antiderivatives Graphically or Numerically</h2>

<p>Another way to think about the Fundamental Theorem of Calculus is to solve the expression for F(b):</p>

<div class="important">
	<h4>The Fundamental Theorem of Calculus (restated)</h4>
	<p>\[ \int\limits_a^b F'(x) \,dx=F(b) - F(a) \] The definite integral of a derivative from a to b gives the net change in the original function.</p>
	<p>\[F(b) = F(a) + \int\limits_a^b F'(x) \,dx \] The amount we end up is the amount we start with plus the net change in the function.</p>
</div>

<p>This lets us get values for the antiderivative – as long as we have a starting point, and we know something about the area.</p>

<div class="example">
	<h4>Example 5</h4>
	<p>Suppose \(F(t)\) has the derivative \(f(t)\) shown below, and suppose that we know \(F(0) = 5\). Find values for \(F(1),\ F(2),\ F(3),\) and \(F(4)\).</p>
	<figure><img src="images/image036.png" alt="derivative graph"></figure>
	<p>Using the second way to think about the Fundamental Theorem of Calculus, \( F(b) = F(a) + \int\limits_a^b F'(x) \,dx \), we can see that \( F(1) = F(0) + \int\limits_0^1 f(x) \,dx \). We know the value of \(F(0)\), and we can easily find \( \int\limits_0^1 f(x) \,dx \) from the graph &ndash; it's just the area of a triangle. So
	\[ \begin{align*}
		F(1)  &amp; =  \\
		 &amp; =  5+0.5 =5.5\\
		F(2)  &amp; =  F(0) + \int\limits_0^2 f(x) \,dx \\
		 &amp; =  5+1=6
	\end{align*} \]
	</p>
	<p>Note that we can start from any place of which we know the value; for example, now that we know \(F(2)\), we can use that to find
	\[ \begin{align*}
		F(3)  &amp; =  F(2) + \int\limits_2^3 f(x) \,dx \\
		 &amp; =  6-0.5=5.5 \\
		F(4)  &amp; =  F(3) + \int\limits_3^4 f(x) \,dx \\
		 &amp; =  5.5-1=4.5
	\end{align*} \]
	</p>
</div>

<div class="videoplayer w639">
	<video id="video_3.2.3" class="video-js vjs-default-skin" controls preload="metadata" width="639" height="auto">
		<source src="video_3-2/accumulation_example_part_a.webm" type='video/webm' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_3-2/accumulation_example_part_a.mp4" type='video/mp4' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>
<p>Here is a copy of the applet used in this video:</p>
<iframe class="geogebra" scrolling="no" src="https://tube.geogebra.org/material/iframe/id/ExD1y47H/width/676/height/482/border/888888/rc/true/ai/false/sdz/true/smb/false/stb/false/stbh/true/ld/true/sri/true/at/preferhtml5" width="676px" height="482px" style="border:0px;"> </iframe>

<div class="example">
	<h4>Example 6</h4>
	<p>\(F'(t) = f(t)\) is shown below. Where does \(F(t)\) have maximum and minimum values on the interval [0, 4]?</p>
	<figure><img src="images/image037.png" alt="graph"></figure>
	<p>Since \( F(b) = F(a) + \int\limits_a^b F'(x) \,dx \), we know that \(F\) is increasing as long as the area accumulating under \(F' = f\) is positive (until \(t = 3\)), and then decreases when the curve dips below the \(x\)-axis so that negative area starts accumulating. The area between \(t = 3\) and \(t = 4\) is much smaller than the positive area that accumulates between 0 and 3, so we know that \(F(4)\) must be larger than \(F(0)\). The maximum value is when \(t = 3\); the minimum value is when \(t = 0\).</p>
</div>

<p>Note that this is a different way to look at a problem we already knew how to solve &ndash; in Chapter 2, we would have found critical points of \(F\), where \(f = 0\): there's only one, when \(t = 3\). \(f = F'\) goes from positive to negative there, so \(F\) has a local max at that point. It's the only critical point, so it must be a global max. Then we would look at the values of \(F\) at the endpoints to find which was the global min.</p>

<div class="videoplayer w639">
	<video id="video_3.2.4" class="video-js vjs-default-skin" controls preload="metadata" width="639" height="auto">
		<source src="video_3-2/accumulation_example_part_b.webm" type='video/webm' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_3-2/accumulation_example_part_b.mp4" type='video/mp4' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

<p>We can also attempt to sketch a function based on the graph of the derivative.</p>

<div class="example">
	<h4>Example 7</h4>
	<p>The graph below shows \(f'(x)\) &ndash; the rate of change of \(f(x)\). Use it to sketch a graph of \(f(x)\) that satisfies \(f(0) = 0\).</p>
	<figure><img src="images/image038.png" alt="graph"></figure>
	<p>Recall from the last chapter the relationships between the function graph and the derivative graph:</p>
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
	</table>
	<p>In the graph shown, we can see the derivative is positive on the interval (0, 1) and \((3, \infty)\), so the graph of \(f\) should be increasing on those intervals. Likewise, \(f\) should be decreasing on the interval (1,3).</p>
	<p>In the graph, \(f'\) is decreasing on the interval (0, 2), so \(f\) should be concave down on that interval. Likewise, \(f\) should be concave up on the interval \((2, \infty)\).</p>
	<p>The derivative itself is not enough information to know where the function \(f\) starts, since there are a family of antiderivatives, but in this case we are given a specific point at which to start.</p>
	<p>To start the sketch, we might note first the shapes we need:</p>
	<figure><img src="images/image067.png" alt="graph"></figure>
	<p>then sketch the basic shapes:</p>
	<figure><img src="images/image068.png" alt="graph"></figure>
	<p>Now we can attempt to sketch the graph, starting at the point (0, 0). Notice we are very roughly sketching this, as we don't have much information to work with. We can tell, though, from the graph that the area from \(x = 0\) to \(x = 1\) is about the same as the area from \(x = 1\) to \(x = 3\), so we would expect the net area from \(x = 0 \)to \(x = 3\) to be close to 0.</p>
	<figure><img src="images/image069.png" alt="graph"></figure>
	<p>It turns out this graph isn't horribly bad. Smoothing it out would give a graph closer to the actual antiderivative graph, shown below.</p>
	<figure><img src="images/image039.png" alt="graph"></figure>
</div>

<div class="videoplayer w639">
	<video id="video_3.2.5" class="video-js vjs-default-skin" controls preload="metadata" width="639" height="auto">
		<source src="video_3-2/accumulation_example_part_c.webm" type='video/webm' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_3-2/accumulation_example_part_c.mp4" type='video/mp4' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

</section>

<section><h2>Derivative of the Integral</h2>

<p>There is another important connection between the integral and derivative.</p>

<div class="important">
	<h4>The Fundamental Theorem of Calculus (part 2)</h4>
	<p>If \[ A(x)=\int\limits_a^x f(t) \,dt \] then \[ A'(x)=\frac{d}{dx}\int\limits_a^x f(t) \,dt =f(x). \]</p>
	<p>I.e., the derivative of the <em>accumulation function</em> is the original function.</p>
</div>

<div class="videoplayer w639">
	<video id="video_3.2.6" class="video-js vjs-default-skin" controls preload="metadata" width="639" height="auto">
		<source src="video_3-2/FTC_part_2.webm" type='video/webm' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_3-2/FTC_part_2.mp4" type='video/mp4' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

<div class="example">
	<h4>Example 8</h4>
	<p>Let \( F(x)=\int\limits_0^x f(t)\,dt \), where \(f\) is graphed below. Estimate \( F'(3) \).</p>
	<figure><img src="images/image037.png" alt="graph"></figure>
	<p>The function \(F(x)\) measures the area from \(t = 0\) to some \(t = x\). To estimate \( F'(3) \), we want to estimate how much the area is increasing when \(t = 3\). Since the value of the function \(f(t)\) is 0 at \(t = 3\), the area will not be increasing or decreasing, so we can estimate \( F'(3) = 0 \).</p>
	<p>Directly using the fundamental theorem of calculus part 2, \[ F'(x) = \frac{d}{dx}\int\limits_a^x f(t) \,dt = f(x) \] so \[ F'(x) = f(3) = 0. \]</p>
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
			<td><a href="section3-1.php">&larr; Previous Section</a></td>
			<td><a href="section3-3.php">Next Section &rarr; </a></td>
		</tr>
	</table>
</footer>
</div>
</body>
</html>