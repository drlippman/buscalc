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
<h1>Section 2.11: Implicit Differentiation and Related Rates</h1>

<section><h2>Implicit Differentiation</h2>

<p>In our work up until now, the functions we needed to differentiate were either given explicitly, such as \( y=x^2+e^x \), or it was possible to get an explicit formula for them, such as solving \( y^3-3x^2=5 \) to get \( y=\sqrt[3]{5+3x^2} \). Sometimes, however, we will have an equation relating \(x\) and \(y\) which is either difficult or impossible to solve explicitly for \(y\), such as \( y+e^y=x^2 \). In any case, we can still find \(y' = f'(x)\) by using implicit differentiation.</p>

<p>The key idea behind implicit differentiation is to <strong>assume that \(y\) is a function of \(x\)</strong> even if we cannot explicitly solve for \(y\). This assumption does not require any work, but we need to be very careful to treat \(y\) as a function when we differentiate and to use the Chain Rule.</p>

<div class="videoplayer w639">
	<video id="video_2.11.1" class="video-js vjs-default-skin" controls preload="metadata" width="639" height="auto">
		<source src="video_2-11/intro_to_implicit_differentiation.webm" type='video/webm' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-11/intro_to_implicit_differentiation.mp4" type='video/mp4' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

<div class="example">
	<h4>Example 1</h4>
	<p>Assume that \(y\) is a function of \(x\). Calculate</p>
	<ol class="smlatin">
		<li>\( \frac{d}{dx}\left( y^3 \right) \)</li>
		<li>\( \frac{d}{dx}\left( x^3y^2 \right) \)</li>
		<li>\( \frac{d}{dx}\left( \ln(y) \right) \)</li>
	</ol>
	<ol class="smlatin">
		<li>We need the chain rule since y is a function of x: \[ \frac{d}{dx}\left( y^3 \right)=3y^2\frac{dy}{dx}\overset{\text{or}}{=}3y^2y' \]</li>
		<li>We need to use the product rule and the Chain Rule:
			\[ \begin{align*}
				\frac{d}{dx}\left( x^3y^2 \right) &amp; =  x^3\frac{d}{dx}\left( y^2 \right)+y^2\frac{d}{dx}\left( x^3\right) \\
				 &amp; =  x^32y\frac{dy}{dx}+y^23x^2 \\
				\overset{\text{or}}{=}&amp; 2x^3yy'+3y^2x^2
			\end{align*} \]</li>
		<li>We know \( \frac{d}{dx}\left( \ln(x) \right) =\frac{1}{x} \), so we use that and the Chain Rule: \[ \frac{d}{dx}\left( \ln(y) \right)=\frac{1}{y}\cdot y' \]</li>
	</ol>
</div>

<div class="important">
	<h4>Implicit Differentiation</h4>
	<p>To determine \(y'\), differentiate each side of the defining equation, treating \(y\) as a function of \(x\), and then algebraically solve for \(y'\).</p>
</div>

<div class="videoplayer w639">
	<video id="video_2.11.2" class="video-js vjs-default-skin" controls preload="metadata" width="639" height="auto">
		<source src="video_2-11/more_implicit_examples_part_1.webm" type='video/webm' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-11/more_implicit_examples_part_1.mp4" type='video/mp4' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>
<p>(The last example in the following video gets rather messy &ndash; don't worry too much if you can't follow all of the simplifications at the end.)</p>
<div class="videoplayer w639">
	<video id="video_2.11.3" class="video-js vjs-default-skin" controls preload="metadata" width="639" height="auto">
		<source src="video_2-11/more_implicit_examples_part_2.webm" type='video/webm' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-11/more_implicit_examples_part_2.mp4" type='video/mp4' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

<div class="example">
	<h4>Example 2</h4>
	<p>Find the slope of the tangent line to the circle \(x^2 + y^2 = 25\) at the point (3,4) using implicit differentiation.</p>
	<p>We differentiate each side of the equation \(x^2 + y^2 = 25\) and then solve for \(y'\): 
	\[ \begin{align*}
		\frac{d}{dx}\left(x^2+y^2\right) &amp; =  \frac{d}{dx}(25)\\
		2x+2yy' &amp; =  0
	\end{align*} \]
	</p>
	<p>Solving for \(y'\), we have \( y'=-\frac{2x}{2y}=-\frac{x}{y} \), and, at the point (3,4), \[y'=-\frac{3}{4}.\]</p>
	<figure><img src="images/image101.png" alt="tangent to circle"></figure>
</div>

<p>In the previous example, it would have been easy to explicitly solve for \(y\), and then we could differentiate \(y\) to get \(y'\). Because we could explicitly solve for \(y\), we had a choice of methods for calculating \(y'\). Sometimes, however, we cannot explicitly solve for \(y\), and the only way of determining \(y'\) is to use implicit differentiation.</p>

<div class="videoplayer w639">
	<video id="video_2.11.4" class="video-js vjs-default-skin" controls preload="metadata" width="639" height="auto">
		<source src="video_2-11/tangent_line_to_circle.webm" type='video/webm' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-11/tangent_line_to_circle.mp4" type='video/mp4' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

</section>

<section><h2>Related Rates</h2>

<p>If several variables or quantities are related to each other and some of the variables are changing at a known rate, then we can use derivatives to determine how rapidly the other variables must be changing.</p>

<p>Here is a link to the examples used in the videos in this section: <a href="otherfiles/related_rates_math141.pdf">Related Rates</a>.</p>

<div class="videoplayer w639">
	<video id="video_2.11.5" class="video-js vjs-default-skin" controls preload="metadata" width="639" height="auto">
		<source src="video_2-11/related_rates_example_1.webm" type='video/webm' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-11/related_rates_example_1.mp4" type='video/mp4' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

<div class="example">
	<h4>Example 3</h4>
	<p>Suppose the border of a town is roughly circular, and the radius of that circle has been increasing at a rate of 0.1 miles each year. Find how fast the area of the town has been increasing when the radius is 5 miles.</p>
	<figure><img src="images/image102.png" alt="picture"></figure>
	<p>We could get an <em>approximate</em> answer by calculating the area of the circle when the radius is 5 miles (\( A = \pi r^2 = \pi (5 \text{ miles})^2 \approx 78.6 \text{ miles}^2 \) ) and 1 year later when the radius is 0.1 feet larger than before (\(A = \pi r^2 = \pi (5.1 \text{ miles})^2 \approx 81.7 \text{ miles}^2\) ) and then finding \[ \frac{\Delta \text{Area}}{\Delta \text{time}}=\frac{81.7 \text{ mi}^2 - 78.6 \text{ mi}^2}{1 \text{ year}} = 3.1 \text{ mi}^2/\text{yr}.\] This approximate answer represents the average change in area during the 1 year period when the radius increased from 5 miles to 5.1 miles, and would correspond to the secant slope on the area graph.</p>
	<p>To find the exact answer, though, we need derivatives. In this case both radius and area are functions of time: \[r(t)=\text{ radius at time } t \qquad A(t)=\text{ area at time } t\]</p>
	<p>We know how fast the radius is changing, which is a statement about the derivative: \( \frac{dr}{dt}=0.1\frac{\text{mile}}{\text{year}} \). We also know that \(r = 5\) at our moment of interest.</p>
	<p>We are looking for how fast the area is increasing, which is \( \frac{dA}{dt} \).</p>
	<p>Now we need an equation relating our variables, which is the area equation: \[A=\pi r^2.\]</p>
	<p>Taking the derivative of both sides of that equation with respect to \(t\), we can use implicit differentiation:
	\[ \begin{align*}
		\frac{d}{dt}\left( A \right) &amp; =  \frac{d}{dt}\left( \pi r^2 \right)\\
		\frac{dA}{dt} &amp; =  \pi 2r\frac{dr}{dt}
	\end{align*} \]
	</p>
	<p>Plugging in the values we know for \(r\) and \(\frac{dr}{dt}\), \[ \frac{dA}{dt}=\pi 2(5\text{ miles})\left(0.1\frac{\text{miles}}{\text{year}}\right)=\pi\frac{\text{miles}^2}{\text{year}}\]</p>
	<p>So the area of the town is increasing by approximately 3.14 square miles per year when the radius is 5 miles.</p>
</div>

<div class="important">
	<h4>Related Rates</h4>
	<p>When working with a related rates problem,</p>
	<ol>
		<li>Draw a picture (if possible).</li>
		<li>Identify the quantities that are changing, and assign them variables.</li>
		<li>Find an equation that relates those quantities.</li>
		<li>Differentiate both sides of that equation with respect to time.</li>
		<li>Plug in any known values for the variables or rates of change.</li>
		<li>Solve for the desired rate.</li>
	</ol>
</div>

<div class="videoplayer w639">
	<video id="video_2.11.6" class="video-js vjs-default-skin" controls preload="metadata" width="639" height="auto">
		<source src="video_2-11/related_rates_example_2.webm" type='video/webm' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-11/related_rates_example_2.mp4" type='video/mp4' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

<div class="example">
	<h4>Example 4</h4>
	<p>A company has determined the demand curve for their product is \( q=\sqrt{5000-p^2} \), where \(p\) is the price in dollars, and \(q\) is the quantity in millions. If weather conditions are driving the price up $2 a week, find the rate at which demand is changing when the price is $40.</p>
	<p>The quantities changing are \(p\) and \(q\), and we assume they are both functions of time, \(t\), in weeks. We already have an equation relating the quantities, so we can implicitly differentiate it.
	\[ \begin{align*}
		\frac{d}{dt}(q) &amp; =  \frac{d}{dt}\left(5000-p^2\right)^{1/2} \\
		\frac{dq}{dt} &amp; =  \frac{1}{2}\left(5000-p^2\right)^{-1/2}\frac{d}{dt}\left(5000-p^2\right) \\
		\frac{dq}{dt} &amp; =  \frac{1}{2}\left(5000-p^2\right)^{-1/2}\left(-2p\frac{dp}{dt}\right)
	\end{align*} \]
	</p>
	<p>Using the given information, we know the price is increasing by $2 per week when the price is $40, giving \( \frac{dp}{dt}=2 \) when \(p = 40\). Plugging in these values, \[ \frac{dq}{dt} = \frac{1}{2}\left(5000-40^2\right)^{-1/2}\left(-2(40)(2)\right) \approx -1.37 \]</p>
	<p>Demand is falling by 1.37 million items per week.</p>
</div>

<div class="example">
	<h4>Example 5</h4>
	<p>The total daily cost for producing \(x\) items in a day is \(TC(x) = 300,000 + 4x + \frac{200,000}{x}.  If production has been ramping up by 20 items a day, find the rate at which total daily cost is increasing, if they are currently producing 2,000 items.</p>
	<p>The quantities changing are \(x\) and \(TC\), and we assume they are both functions of time, \(t\), in days. We already have an equation relating the quantities, so we can implicitly differentiate it.
	\[ \begin{align*}
		\frac{d}{dt}(TC) &amp; =  \frac{d}{dt}\left(300,000 + 4x + 200,000x^{-1}\right) \\
		\frac{d TC}{dt} &amp; =  4\frac{dx}{dt} - 200,000x^(-2)\frac{dx}{dt}\\
		\frac{d TC}{dt} &amp; =  \left(4 - \frac{200,000}{x^2}\right)\frac{dx}{dt}\\
	\end{align*} \]
	</p>
	<p>We know the quantity produced is increasing by 20 items per week when the production is 2,000 items, giving \( \frac{dx}{dt}=20 \) when \(x = 2000\). Plugging in these values, 
	\[ \frac{d TC}{dt} =  \left(4 - \frac{200,000}{2000^2}\right)(20) = 79 \]</p>
	<p>Total daily cost is increasing by $79 each day.</p>
</div>

<div class="videoplayer w639">
	<video id="video_2.11.7" class="video-js vjs-default-skin" controls preload="metadata" width="639" height="auto">
		<source src="video_2-11/related_rates_example_3.webm" type='video/webm' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-11/related_rates_example_3.mp4" type='video/mp4' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

<div class="videoplayer w639">
	<video id="video_2.11.8" class="video-js vjs-default-skin" controls preload="metadata" width="639" height="auto">
		<source src="video_2-11/related_rates_example_4.webm" type='video/webm' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-11/related_rates_example_4.mp4" type='video/mp4' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
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
			<td><a href="section2-10.php">&larr; Previous Section</a></td>
			<td><a href="../chapter3/section3-1.php">Next Section &rarr; </a></td>
		</tr>
	</table>
</footer>
</div>
</body>
</html>