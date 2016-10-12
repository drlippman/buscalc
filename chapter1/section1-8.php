<!DOCTYPE html>
<html lang="en">
<?php include '../includes/head.html'; ?>
<body>
<?php include '../includes/nav.html'; ?>
<div class="page-wrap">
<header class="main-nav-buttons">
	<a href="#main-nav" class="open-menu">&equiv; </a>
	<a href="#close-nav" class="close-menu">&times; </a>
	<!--<h1>menu</h1>-->
  </header>

<section class="content">
<h1>Section 1.8: Logarithmic Functions</h1>

<p>Logarithms are the inverse of exponential functions &ndash; they allow us to undo exponential functions and solve for the exponent.  They are also commonly used to express quantities that vary widely in size.</p>

<div class="thmdef">
	<h4>Logarithm Equivalent to an Exponential</h4>
	<p>The logarithm (base \(b\)) function, written \( \log_b (x) \), is the inverse of the exponential function (base \(b\)), \( b^x \).</p>
	<p>This means the statement \( b^a=c \) is equivalent to the statement \( \log_b (c)=a \).</p>
</div>

<div class="thmdef">
	<h4>Properties of Logs: Inverse Properties</h4>
	<ul>
		<li>\( \log_b(b^x)=x \)</li>
		<li>\( b^{\log_b(x)}=x \)</li>
	</ul>
</div>

<div class="videoplayer w639">
	<video id="video_1.8.1" class="video-js vjs-default-skin" controls preload="metadata" width="639" height="auto">
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_1-8/log_intro.mp4" type='video/mp4' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_1-8/log_intro.webm" type='video/webm' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

<div class="example">
	<h4>Example 1</h4>
	<p>Write these exponential equations as logarithmic equations:</p>
	<ol class="smlatin">
		<li>\( 2^3=8 \)</li>
		<li>\( 5^2=25 \)</li>
		<li>\(10^{-4}=\frac{1}{10000}\)</li>
	</ol>
	<ol class="smlatin">
		<li>\( 2^3=8 \) is equivalent to \( \log_2(8)=3 \).</li>
		<li>\( 5^2=25 \) is equivalent to \( \log_5(25)=2 \).</li>
		<li>\(10^{-4}=\frac{1}{10000}\) is equivalent to \( \log_{10}\left(\frac{1}{10000}\right)=-4 \).</li>
	</ol>
</div>

<div class="example">
	<h4>Example 2</h4>
	<p>Solve \( 2^x=10 \) for \(x\).</p>
	<p>By rewriting this expression as a logarithm, we get \( x=\log_2(10) \).</p>
</div>

<div class="videoplayer w639">
	<video id="video_1.8.2" class="video-js vjs-default-skin" controls preload="metadata" width="639" height="auto">
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_1-8/conversions_with_logs_and_exps.mp4" type='video/mp4' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_1-8/conversions_with_logs_and_exps.webm" type='video/webm' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

<p>While this does define a solution, and an exact solution at that, you may find it somewhat unsatisfying since it is difficult to compare this expression to the decimal estimate we made earlier.  Also, giving an exact expression for a solution is not always useful&ndash;often we really need a decimal approximation to the solution.  Luckily, this is a task calculators and computers are quite adept at.  Unluckily for us, most calculators and computers will only evaluate logarithms of two bases.  Happily, this ends up not being a problem, as we’ll see briefly.</p>

<div class="thmdef">
	<h4>Common and Natural Logarithms</h4>
	<p>The <strong>common log</strong> is the logarithm with base 10, and is typically written \( \log(x) \).</p>
	<p>The <strong>natural log</strong> is the logarithm with base \(e\), and is typically written \( \ln(x) \).</p>
</div>

<div class="example">
	<h4>Example 3</h4>
	<p>Evaluate \( \log(1000) \) using the definition of the common log.</p>
	<p>To evaluate \( \log(1000) \), we can say \( x=\log(1000) \), then rewrite into exponential form using the common log base of 10:\[ 10^x=1000. \]</p>
	<p>From this, we might recognize that 1000 is the cube of 10, so \(x = 3\).</p>
	<p>We also can use the inverse property of logs to write \( log_{10}\left(10^3\right) =3 \).</p>
	<table class="border">
		<caption>Values of the common log</caption>
		<tr>
			<td>Number</td>
			<td>Number as exponential</td>
			<td>log(number)</td>
		</tr>
		<tr>
			<td>1000</td>
			<td>\( 10^3 \)</td>
			<td>3</td>
		</tr>
		<tr>
			<td>100</td>
			<td>\( 10^2 \)</td>
			<td>2</td>
		</tr>
		<tr>
			<td>10</td>
			<td>\( 10^1 \)</td>
			<td>1</td>
		</tr>
		<tr>
			<td>1</td>
			<td>\( 10^0 \)</td>
			<td>0</td>
		</tr>
		<tr>
			<td>0.1</td>
			<td>\( 10^{-1} \)</td>
			<td>-1</td>
		</tr>
		<tr>
			<td>0.01</td>
			<td>\( 10^{-2} \)</td>
			<td>-2</td>
		</tr>
		<tr>
			<td>0.001</td>
			<td>\( 10^{-3} \)</td>
			<td>-3</td>
		</tr>
	</table>
</div>

<div class="example">
	<h4>Example 4</h4>
	<p>Evaluate \( \log(500) \) using you calculator or computer.</p>
	<p>Using a computer or calculator, we can evaluate and find that \( \log(500)\approx 2.69897 \).</p>
</div>

<p>Another property provides the basis for solving exponential equations.</p>

<div class="thmdef">
	<h4>Properties of Logs: Exponent Property</h4>
	<p>\( \log_b\left(A^r\right)=r\,\log_b(A) \)</p>
</div>

<div class="thmdef">
	<h4>Solving exponential equations:</h4>
	<ol>
		<li>Isolate the exponential expressions when possible.</li>
		<li>Take the logarithm of both sides.</li>
		<li>Utilize the exponent property for logarithms to pull the variable out of the exponent.</li>
		<li>Use algebra to solve for the variable.</li>
	</ol>
</div>

<div class="videoplayer w639">
	<video id="video_1.8.3" class="video-js vjs-default-skin" controls preload="metadata" width="639" height="auto">
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_1-8/solve_exp_eqn_with_logs.mp4" type='video/mp4' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_1-8/solve_exp_eqn_with_logs.webm" type='video/webm' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

<div class="example">
	<h4>Example 5</h4>
	<p>In the last section, we predicted the population (in billions) of India \(t\) years after 2008 by using the function \( f(t)=1.14(1+0.0134)^t \).  If the population continues following this trend, when will the population reach 2 billion?</p>
	<p>We need to solve for the \(t\) so that \(f(t) = 2\)</p>
	<table class="align">
		<tr>
			<td>\(2=1.14(1.0134)^t\)</td>
			<td>Initial equation.</td>
		</tr>
		<tr>
			<td>\(\dfrac{2}{1.14}=1.0134^t\)</td>
			<td>Divide by 1.14 to isolate the exponential expression.</td>
		</tr>
		<tr>
			<td>\(\ln\left(\dfrac{2}{1.14}\right)=\ln\left(1.0134^t\right)\)</td>
			<td>Take the logarithm of both sides of the equation.</td>
		</tr>
		<tr>
			<td>\(\ln\left(\dfrac{2}{1.14}\right)=t\,\ln(1.0134)\)</td>
			<td>Apply the exponent property on the right side.</td>
		</tr>
		<tr>
			<td>\( t = \dfrac{\ln\left(\dfrac{2}{1.14}\right)}{\ln(1.0134)}\)</td>
			<td>Divide both sides by \(\ln(1.0134)\)</td>
		</tr>
		<tr>
			<td>\( t\approx 42.23 \text{ years} \)</td>
			<td></td>
		</tr>
	</table>
	<p>If this growth rate continues, the model predicts the population of India will reach 2 billion about 42 years after 2008, or approximately in the year 2050.</p>
</div>

<div class="example">
	<h4>Example 6</h4>
	<p>Solve \( 5e^{-0.3t}=2 \) for \( t \).</p>
	<p>First we divide by 5 to isolate the exponential: \[ e^{-0.3t}=\frac{2}{5}. \]</p>
	<p>Since this equation involves \(e\), it makes sense to use the natural log:</p>
	<table class="align">
		<tr>
			<td>\(\ln\left(e^{-0.3t}\right)=\ln\left(\dfrac{2}{5}\right)\)</td>
			<td>Take the natural log of both sides.</td>
		</tr>
		<tr>
			<td>\(-0.3t=\ln\left(\dfrac{2}{5}\right)\)</td>
			<td>Utilizing the inverse property for logs.</td>
		</tr>
		<tr>
			<td>\( t = \dfrac{\ln\left(\dfrac{2}{5}\right)}{-0.3}\)</td>
			<td>Now dividing by -0.3.</td>
		</tr>
		<tr>
			<td>\( t\approx 3.054 \)</td>
			<td></td>
		</tr>
	</table>
</div>

<p>In addition to solving exponential equations, logarithmic expressions are common in many physical situations.</p>

<div class="example">
	<h4>Example 7</h4>
	<p>In chemistry, pH is a measure of the acidity or basicity of a liquid.  The pH is related to the concentration of hydrogen ions, \(\left[H^+\right]\), measured in moles per liter, by the equation\[\text{pH}=-\log\left(\left[H^+\right]\right)\] </p>
	<p>If a liquid has concentration of 0.0001 moles per liter, determine the pH. Determine the hydrogen ion concentration of a liquid with pH of 7.</p>
	<p>To answer the first question, we evaluate the expression \( -\log(0.0001) \).  While we could use our calculators for this, we do not really need them here, since we can use the inverse property of logs: \[ -\log(0.0001)=-\log\left(10^{-4}\right)=-(-4)=4.\]</p>
	<p>To answer the second question, we need to solve the equation \( 7=-\log\left(\left[H^+\right]\right) \).  Begin by isolating the logarithm on one side of the equation by multiplying both sides by -1: \(-7=\log\left(\left[H^+\right]\right)\). Rewriting into exponential form yields the answer: \[\left[H^+\right]=10^{-7}=0.0000001\text{ moles per liter}.\]</p>
</div>

<p>While we don't often need to sketch the graph of a logarithm, it is helpful to understand the basic shape.</p>

<div class="thmdef">
	<h4>Graphical Features of the Logarithm</h4>
	<p>Graphically, given the function \( g(x)=\log_b(x) \).</p>
	<ul>
		<li>The graph has a horizontal intercept at (1, 0).</li>
		<li>The graph has a vertical asymptote at \( x = 0\).</li>
		<li>The graph is increasing and concave down.</li>
		<li>The domain of the function is \( x \gt 0\), or \( (0, \infty) \) in interval notation.</li>
		<li>The range of the function is all real numbers, or \( (-\infty, \infty) \) in interval notation.</li>
	</ul>
</div>

<p>When sketching a general logarithm with base \(b\), it can be helpful to remember that the graph will pass through the points \((1, 0)\) and \((b, 1)\).</p>

<p>To get a feeling for how the base affects the shape of the graph, examine the graphs below:</p>

<figure><img src="images/image080.png" alt=""/></figure>

<p>Another important observation made was the domain of the logarithm: \(x \gt 0\).  Like the reciprocal and square root functions, the logarithm has a restricted domain which must be considered when finding the domain of a composition involving a log.</p>

<div class="example">
	<h4>Example 8</h4>
	<p>Find the domain of the function \( f(x)=\log(5-2x) \).</p>
	<p>The logarithm is only defined when the input is positive, so this function will only be defined when \( 5-2x \gt 0 \).  Solving this inequality, \( -2x \gt -5 \), so \( x\lt \frac{5}{2} \).</p>
	<p>The domain of this function is  \( x\lt \frac{5}{2} \), or, in interval notation,  \(  \left(-\infty, \frac{5}{2} \right) \).</p>
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
			<td><a href="section1-7.php">&larr; Previous Section</a></td>
			<td><a href="../chapter2/section2-1.php">Next Section &rarr; </a></td>
		</tr>
	</table>
</footer>
</div>
</body>
</html>