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
<h1>Section 3.3: Antiderivatives of Formulas</h1>

<p>Now we can put the ideas of areas and antiderivatives together to get a way of evaluating definite integrals that is exact and often easy. To evaluate a definite integral \( \int\limits_a^b f(t)\, dt \), we can find any antiderivative \(F(t)\) of \(f(t)\) and evaluate \(F(b) - F(a)\). The problem of finding the exact value of a definite integral reduces to finding some (any) antiderivative \(F\) of the integrand and then evaluating \(F(b) - F(a)\). Even finding one antiderivative can be difficult, and we will stick to functions that have easy antiderivatives.</p>

<section><h2>Building Blocks</h2>

<p>Antidifferentiation is going backwards through the derivative process. So the easiest antiderivative rules are simply backwards versions of the easiest derivative rules. Recall <a href="../chapter2/section2-5.php">from Chapter 2</a>:</p>

<div class="important">
	<h4>Derivative Rules: Building Blocks</h4>
	<p>In what follows, \(f\) and \(g\) are differentiable functions of \(x\).</p>
	
	<h5>Constant Multiple Rule</h5>
	<p> \[ \frac{d}{dx}\left( kf\right)=kf'\]</p>
	
	<h5>Sum and Difference Rule</h5>
	<p>\[\frac{d}{dx}\left(f\pm g\right)=f' \pm g'\]</p>
	
	<h5>Power Rule</h5>
	<p>\[\frac{d}{dx}\left(x^n\right)=nx^{n-1}\]</p>
	<p>Special cases:
	\[\frac{d}{dx}\left(k\right)=0 \quad \text{(Because \( k=kx^0 \).)}\]
	\[\frac{d}{dx}\left(x\right)=1 \quad \text{(Because \( x=x^1 \).)}\]
	</p>
	
	<h5>Exponential Functions</h5>
	<p>\[\frac{d}{dx}\left(e^x\right)=e^x\] \[\frac{d}{dx}\left(a^x\right)=\ln(a)\,a^x\]</p>
	
	<h5>Natural Logarithm</h5>
	<p>\[\frac{d}{dx}\left(\ln(x)\right)=\frac{1}{x}\]</p>
</div>

<p>Thinking about these basic rules was how we came up with the antiderivatives of \(2x\) and \( e^x \) before.</p>

<p>The corresponding rules for antiderivatives are next &ndash; each of the antiderivative rules is simply rewriting the derivative rule. All of these antiderivatives can be verified by differentiating.</p>

<p>There is one surprise &ndash; the antiderivative of \(\frac{1}{x}\) is actually not simply \(\ln(x)\), it's \(\ln|x|\). This is a good thing &ndash; the antiderivative has a domain that matches the domain of \(\frac{1}{x}\), which is bigger than the domain of \(\ln(x)\), so we don’t have to worry about whether our \(x\)'s are positive or negative. But we <em>must</em> be careful to include those absolute values &ndash; otherwise, we could end up with domain problems.</p>

<div class="videoplayer w639">
	<video id="video_3.3.1" class="video-js vjs-default-skin" controls preload="metadata" width="639" height="auto">
		<source src="video_3-3/intro_and_building_blocks.webm" type='video/webm' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_3-3/intro_and_building_blocks.mp4" type='video/mp4' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

<div class="important">
	<h4>Antiderivative Rules: Building Blocks</h4>
	<p>In what follows, \(f\) and \(g\) are differentiable functions of \(x\), and \( k \), \( n \), and \( C \) are constants.</p>
	
	<h5>Constant Multiple Rule</h5>
	<p> \[ \int k\cdot f(x)\, dx=k\cdot\int f(x)\, dx\]</p>
	
	<h5>Sum and Difference Rule</h5>
	<p>\[\int \left(f(x)\pm g(x)\right)\, dx=\int f(x)\, dx \pm \int g(x)\, dx\]</p>
	
	<h5>Power Rule</h5>
	<p>\[ \int x^n \, dx = \frac{x^{n+1}}{n+1}, \text{ provided that } n\neq -1\]</p>
	<p>Special case: \[ \int k\, dx =kx+C \quad \text{(Because \( k=kx^0 \).)}\] (The other special case (\( n=-1 \)) is covered next.)</p>
	
	<h5>Natural Logarithm</h5>
	<p>\[\int x^{-1}\, dx =\int\frac{1}{x}\, dx = \ln|x|+C\]</p>
	
	<h5>Exponential Functions</h5>
	<p>\[ \int e^x\, dx=e^x +C \] \[ \int a^x\, dx = \frac{a^x}{\ln(a)}+C \]</p>
</div>

<div class="example">
	<h4>Example 1</h4>
	<p>Find the antiderivative of \( y=3x^7-15\sqrt{x}+\frac{14}{x^2} \).</p>
	<p>
	\[ \begin{align*}
		\int\left( 3x^7-15\sqrt{x}+\frac{14}{x^2} \right)\, dx &amp; =  \int\left( 3x^7-15x^{1/2}+14x^{-2} \right)\, dx \\
		 &amp; =  3\frac{x^8}{8}-15\frac{x^{3/2}}{3/2}+14\frac{x^{-1}}{-1}+C \\
		 &amp; =  \frac{3}{8}x^8-10x^{3/2}-14x^{-1}+C
	\end{align*} \]
	</p>
</div>

<div class="example">
	<h4>Example 2</h4>
	<p>Find \( \int\left(e^x+12-\frac{16}{x}\right)\, dx \).</p>
	<p> \[ \int\left(e^x+12-\frac{16}{x}\right)\, dx =e^x+12x-16\ln|x|+C\]</p>
</div>

<div class="example">
	<h4>Example 3</h4>
	<p>Find \(F(x)\) so that \( F'(x)=e^x \) and \( F(0)=10 \).</p>
	<p>This time we are looking for a particular antiderivative; we need to find exactly the right constant. Let's start by finding the antiderivative: \[ \int e^x\, dx=e^x+C \]</p>
	<p>So we know that \( F(x)=e^x+\text{(some constant)} \), now we just need to find which one. To do that, we'll use the other piece of information (the initial condition):
	\[ \begin{align*}
		F(x) &amp; =  e^x+C \\
		F(0) &amp; =  e^0+C=1+C=10 \\
		C &amp; =  9
	\end{align*} \]
	</p>
	<p>The particular constant we need is 9; thus, \( F(x)=e^x+9 \).</p>
</div>

<div class="videoplayer w639">
	<video id="video_3.3.2" class="video-js vjs-default-skin" controls preload="metadata" width="639" height="auto">
		<source src="video_3-3/finding_C.webm" type='video/webm' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_3-3/finding_C.mp4" type='video/mp4' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

<p>The reason we are looking at antiderivatives right now is so we can evaluate definite integrals exactly. Recall the Fundamental Theorem of Calculus:</p>

<div class="important">
	<p>\[ \int\limits_a^b F'(x)\, dx = F(b)-F(a) \]</p>
</div>

<p>If we can find an antiderivative for the integrand, we can use that to evaluate the definite integral. The evaluation \(F(b) - F(a)\) is represented as \( \left.F(x)\right]_a^b \) or \( \left.F(x)\right|_a^b \).</p>

<div class="example">
	<h4>Example 4</h4>
	<p>Evaluate \( \int\limits_1^3 x\, dx \) in two ways:</p>
	<ol class="smlatin">
		<li>By sketching the graph of \(y = x\) and geometrically finding the area.</li>
		<li>By finding an antiderivative of \(F(x)\) of the integrand and evaluating \(F(3)-F(1)\).</li>
	</ol>
	<ol class="smlatin">
		<li>
			<p>The graph of \(y = x \) is shown below, and the shaded region corresponding to the integral has area 4.</p>
			<figure><img src="images/image043.png" alt="graph"></figure>
		</li>
		<li>
			<p>One antiderivative of \(x\) is \( F(x)=\frac{1}{2}x^2 \), and
				\[ \begin{align*}
					\int\limits_1^3 x\, dx  &amp; =  \left[\frac{1}{2}x^2\right]_1^3 \\
					 &amp; =  \left(\frac{1}{2}(3)^2\right) - \left(\frac{1}{2}(1)^2\right) \\
					 &amp; =  \frac{9}{2}-\frac{1}{2} \\
					 &amp; =  4.
				\end{align*} \]
				Note that this answer agrees with the answer we got geometrically.</p>
			<p>If we had used another antiderivative of x, say \( F(x)=\frac{1}{2}x^2+7 \), then
				\[ \begin{align*}
					\int\limits_1^3 x\, dx  &amp; =  \left[\frac{1}{2}x^2+7\right]_1^3 \\
					 &amp; =  \left(\frac{1}{2}(3)^2+7\right) - \left(\frac{1}{2}(1)^2+7\right) \\
					 &amp; =  \frac{9}{2}+7-\frac{1}{2}-7 \\
					 &amp; =  4.
				\end{align*} \]
			</p>
			<p>In general, <strong>whatever constant we choose gets subtracted away during the evaluation</strong>, so we might as well always choose the easiest one, where the constant is 0.</p>
	</li>
	</ol>
</div>

<div class="example">
	<h4>Example 5</h4>
	<p>Find the area between the graph of \(y = 3x^2\) and the horizontal axis for \(x\) between 1 and 2.</p>
	<p>This is \[ \int\limits_1^2 3x^2\, dx = \left.x^3\right|_1^2 = 2^3-1^3 = 7. \]</p>
</div>

<div class="videoplayer w639">
	<video id="video_3.3.3" class="video-js vjs-default-skin" controls preload="metadata" width="639" height="auto">
		<source src="video_3-3/definite_integeral_examples.webm" type='video/webm' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_3-3/definite_integeral_examples.mp4" type='video/mp4' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

<div class="example">
	<h4>Example 6</h4>
	<p>A robot has been programmed so that when it starts to move, its velocity after \(t\) seconds will be \( 3t^2 \) feet/second.</p>
	<ol class="smlatin">
		<li>How far will the robot travel during its first 4 seconds of movement?</li>
		<li>How far will the robot travel during its next 4 seconds of movement?</li>
	</ol>
	<ol class="smlatin">
		<li>
			<p>The distance during the first 4 seconds will be the area under the graph of velocity, from \(t = 0\) to \(t = 4\).</p>
			<figure><img src="images/image044.png" alt="graph"></figure>
			<p>That area is the definite integral \( \int\limits_0^4 3t^2\, dt \). An antiderivative of \( 3t^2 \) is \( t^3 \), so \( \int\limits_0^4 3t^2\, dt =\left. t^3 \right]_0^4 =4^3-0^3 = 64\) feet.</p>
		</li>
		<li>
			<p>\( \int\limits_4^8 3t^2\, dt =\left. t^3 \right]_4^8=8^3-4^3 =512 - 64 = 448\) feet.</p>
		</li>
	</ol>
</div>

<div class="example">
	<h4>Example 7</h4>
	<p>Suppose that \(t\) minutes after putting 1000 bacteria on a Petri plate the rate of growth of the population is \(6t\) bacteria per minute.</p>
	<ol class="smlatin">
		<li>How many new bacteria are added to the population during the first 7 minutes?</li>
		<li>What is the total population after 7 minutes?</li>
	</ol>
	<ol class="smlatin">
		<li>
			<p>The number of new bacteria is the area under the rate of growth graph, and one antiderivative of \(6t\) is \(3t^2\).</p>
			<figure><img src="images/image045.png" alt="graph"></figure>
			<p>So \[\text{new bacteria}=\int\limits_0^7 6t\, dt= \left. 3t^2\right|_0^7=3(7)^2-3(0)^2=147\]</p>
		</li>
		<li>The new population = (old population) + (new bacteria) = 1000 + 147 = 1147 bacteria.</li>
	</ol>
</div>

<div class="videoplayer w639">
	<video id="video_3.3.4" class="video-js vjs-default-skin" controls preload="metadata" width="639" height="auto">
		<source src="video_3-3/application_example.webm" type='video/webm' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_3-3/application_example.mp4" type='video/mp4' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

<div class="example">
	<h4>Example 8</h4>
	<p>A company determines their marginal cost for production, in dollars per item, is \( MC(x)=\frac{4}{\sqrt{x}}+2 \) when producing \(x\) thousand items. Find the cost of increasing production from 4 thousand items to 5 thousand items.</p>
	<p>Remember that marginal cost is the rate of change of cost, and so the fundamental theorem tells us that \( \int\limits_a^b MC(x)\, dx = \int\limits_a^b C'(x)\, dx = C(b)-C(a) \). In other words, the integral of marginal cost will give us a net change in cost. To find the cost of increasing production from 4 thousand items to 5 thousand items, we need to integrate \( \int\limits_4^5 MC(x)\, dx\).</p>
	<p>We can write the marginal cost as \( MC(x)=4x^{-1/2}+2 \). We can then use the basic rules to find an antiderivative: \[ C(x)=4\frac{x^{1/2}}{1/2}+2x=8\sqrt{x}+2x.\]</p>
	<p>Using this,
		\[ \begin{align*}
			\text{Net change in cost } &amp; =  \int\limits_4^5 \left(4x^{-1/2}+2\right)\, dx \\
			 &amp; =  \left[ 8\sqrt{x}+2x \right]_4^5 \\
			 &amp; =  \left( 8\sqrt{5}+2(5) \right)-\left( 8\sqrt{4}+2(4) \right) \\
			\approx&amp; 3.889
		\end{align*} \]
	</p>
	<p>It will cost 3.889 thousand dollars to increase production from 4 thousand items to 5 thousand items. (The final answer would be better written as $3889.)</p>
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
			<td><a href="section3-2.php">&larr; Previous Section</a></td>
			<td><a href="section3-4.php">Next Section &rarr; </a></td>
		</tr>
	</table>
</footer>
</div>
</body>
</html>