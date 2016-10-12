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
<h1>Section 1.6: Polynomials and Rational Functions</h1>

<h2>Polynomial Functions</h2>

<div class="thmdef">
	<h4>Terminology of Polynomial Functions</h4>
	<p>A polynomial is a function that can be written as \[ f(x)=a_0+a_1 x+a_2 x^2+\dots+a_n x^n \]</p>
	<p>Each of the \(a_i\) constants are called <strong>coefficients</strong> and can be positive, negative, or zero, and be whole numbers, decimals, or fractions.</p>
	<p>A <strong>term</strong> of the polynomial is any one piece of the sum, that is any \( a_i x^i \). Each individual term is a transformed power function.</p>
	<p>The <strong>degree</strong> of the polynomial is the highest power of the variable that occurs in the polynomial.</p>
	<p>The <strong>leading term</strong> is the term containing the highest power of the variable: the term with the highest degree. </p>
	<p>The <strong>leading coefficient</strong> is the coefficient of the leading term.</p>
	<p>Because of the definition of the “leading” term we often rearrange polynomials so that the powers are descending: \[ f(x)=a_n x^n+a_{n-1}x^{n-1}\dots a_2 x^2+a_1 x+a_0 \]</p>
</div>

<div class="example">
	<h4>Example 1</h4>
	<p>Identify the degree, leading term, and leading coefficient of the polynomial \( f(x)=3+2x^2-4x^3 \)</p>
	<p>The degree is 3, the highest power on \(x\). The leading term is the term containing that power, \( -4x^3 \). The leading coefficient is the coefficient of that term, -4.</p>
</div>

<h3>Short Run Behavior: Intercepts</h3>

<p>As with any function, the vertical intercept can be found by evaluating the function at an input of zero. Since this is evaluation, it is relatively easy to do it for a polynomial of any degree. To find horizontal intercepts, we need to solve for when the output will be zero. For general polynomials, this can be a challenging prospect. Consequently, we will limit ourselves to three cases:</p>
<ol>
	<li>The polynomial can be factored using known methods: greatest common factor and trinomial factoring. </li>
	<li>The polynomial is given in factored form.</li>
	<li>Technology is used to determine the intercepts.</li>
</ol>

<div class="example">
	<h4>Example 2</h4>
	<p>Find the horizontal intercepts of \( f(x)=x^6-3x^4+2x^2 \).</p>
	<p>We can attempt to factor this polynomial to find solutions for \(f(x) = 0\):</p>
	<table class="align">
		<tr>
			<td>\(x^6-3x^4+2x^2=0\)</td>
			<td></td>
		</tr>
		<tr>
			<td>\(x^2(x^4-3x^2+2)=0\)</td>
			<td>Factoring out the greatest common factor</td>
		</tr>
		<tr>
			<td>\(x^2(x^2-1)(x^2-2)=0\)</td>
			<td>Factoring the inside as a quadratic in \(x^2\)</td>
		</tr>
	</table>
	<p>Then break apart to find solutions:</p>
	<table class="align">
		<tr>
			<td>\( x^2=0 \)</td>
			<td></td>
			<td>\( x^2-1=0 \)</td>
			<td></td>
			<td>\( x^2-2=0 \)</td>
		</tr>
		<tr>
			<td>\(x=0\)</td>
			<td></td>
			<td>\(x^2=1\)</td>
			<td></td>
			<td>\( x^2=2 \)</td>
		</tr>
		<tr>
			<td>\(x=0\)</td>
			<td>or</td>
			<td>\( x=\pm 1 \)</td>
			<td>or</td>
			<td>\( x=\pm\sqrt{2} \)</td>
		</tr>
	</table>
	<p>This gives us five horizontal intercepts.</p>
</div>

<div class="example">
	<h4>Example 3</h4>
	<p>Find the horizontal intercepts of \( h(t)=t^3+4t^2+t-6 \)</p>
	<p>Since this polynomial is not in factored form, has no common factors, and does not appear to be factorable using techniques we know, we can turn to technology to find the intercepts. </p>
	<p>Graphing this function, it appears there are horizontal intercepts at \(t =\) -3, -2, and 1.</p>
	<figure>
		<img src="images/image067.png" alt="graph"/>
	</figure>
	<p>We could check these are correct by plugging in these values for \(t\) and verifying that \( h(-3)=h(-2)=h(1)=0 \).</p>
</div>

<h3>Solving Polynomial Inequalities</h3>
<p>One application of our ability to find intercepts and sketch a graph of polynomials is the ability to solve polynomial inequalities. It is a very common question to ask when a function will be positive and negative, and one we will use later in this course.</p>

<div class="example">
	<h4>Example 4</h4>
	<p>Solve \( (x+3)(x+1)^2(x-4)\gt 0 \)</p>
	<p>As with all inequalities, we start by solving the equality \( (x+3)(x+1)^2(x-4)= 0 \), which has solutions at \(x =\) -3, -1, and 4. We know the function can only change from positive to negative at these values, so these divide the inputs into 4 intervals. </p>
	<p>We could choose a test value in each interval and evaluate the function \( f(x)=(x+3)(x+1)^2(x-4) \) at each test value to determine if the function is positive or negative in that interval:</p>
	<table class="border">
		<tr>
			<td>Interval</td>
			<td>Test \( x \) in interval</td>
			<td>\( f(\text{test value}) \)</td>
			<td>\( \gt 0 \) or \( \lt 0 \)?</td>
		</tr>
		<tr>
			<td>\( x\lt -3 \)</td>
			<td>-4</td>
			<td>72</td>
			<td>\( \gt 0 \)</td>
		</tr>
		<tr>
			<td>\( -3\lt x\lt -1 \)</td>
			<td>-2</td>
			<td>-6</td>
			<td>\( \lt 0 \)</td>
		</tr>
		<tr>
			<td>\( -1 \lt x \lt 4 \)</td>
			<td>0</td>
			<td>-12</td>
			<td>\( \lt 0 \)</td>
		</tr>
		<tr>
			<td>\( x\gt 4 \)</td>
			<td>5</td>
			<td>288</td>
			<td>\( \gt 0 \)</td>
		</tr>
	</table>
	<p>On a number line this would look like:</p>
	<figure><img src="images/image068.png" alt="number line"/></figure>
	<p>From our test values, we can determine this function is positive when \(x \lt -3 \) or \(x \gt 4\), or in interval notation, \( (-\infty,-3) \cup (4,\infty) \).</p>
</div>

<div class="videoplayer w639">
	<video id="video_1.6.1" class="video-js vjs-default-skin" controls preload="metadata" width="639" height="auto">
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_1-6/polynomial_plot.mp4" type='video/mp4' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_1-6/polynomial_plot.webm" type='video/webm' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

<h2>Rational Functions</h2>
<p>Rational functions are the ratios, or fractions, of polynomials. They can arise from both simple and complex situations.</p>

<div class="example">
	<h4>Example 5</h4>
	<p>You plan to drive 100 miles. Find a formula for the time the trip will take as a function of the speed you drive.</p>
	<p>You may recall that multiplying speed by time will give you distance. If we let \(t\) represent the drive time in hours, and \(v\) represent the velocity (speed or rate) at which we drive, then \(vt=\)distance. Since our distance is fixed at 100 miles, \(vt=100\). Solving this relationship for the time gives us the function we desired: \[t(v)=\frac{100}{v}\]</p>
</div>

<p>Notice that this is a transformation of the reciprocal toolkit function, \( f(x)=\dfrac{1}{x} \). Several natural phenomena, such as gravitational force and volume of sound, behave in a manner <strong>inversely proportional to the square</strong> of another quantity. For example, the volume, \(V\), of a sound heard at a distance \(d\) from the source would be related by \( V=\dfrac{k}{d^2} \) for some constant value \(k\). These functions are transformations of the reciprocal squared toolkit function \( f(x)=\dfrac{1}{x^2} \).</p>

<p>We have seen the graphs of the basic reciprocal function and the squared reciprocal function from our review of toolkit functions. These graphs have several important features.</p>
<figure>
	<img src="images/image070.png" alt="reciprocal"/>
	<figcaption>\( f(x)=\frac{1}{x} \)</figcaption>
</figure>
<figure>
	<img src="images/image069.png" alt="reciprocal squared"/>
	<figcaption>\( f(x)=\frac{1}{x^2} \)</figcaption>
</figure>
<p>Let’s begin by looking at the reciprocal function, \( f(x)=\dfrac{1}{x} \). As you well know, dividing by zero is not allowed and therefore zero is not in the domain, and so the function is undefined at an input of zero.</p>
<h3>Short Run behavior:</h3>
<p>As the input values approach zero from the left side (taking on very small, negative values), the function values become very large in the negative direction (in other words, they approach negative infinity). We write: \( x\to 0^- \), \( f(x)\to -\infty \).</p>
<p>As we approach zero from the right side (small, positive input values), the function values become very large in the positive direction (approaching infinity). We write: as \( x\to 0^+ \), \( f(x)\to \infty \). </p>
<p>This behavior creates a <strong>vertical asymptote</strong>. An asymptote is a line that the graph approaches. In this case the graph is approaching the vertical line \(x = 0\) as the input becomes close to zero. </p>
<h3>Long Run behavior: </h3>
<p>As the values of x approach infinity, the function values approach 0. Also, as the values of x approach negative infinity, the function values approach 0. Symbolically: as \( x\to\pm\infty \), \( f(x)\to 0 \).</p>
<p>Based on this long run behavior and the graph we can see that the function approaches 0 but never actually reaches 0, it just "levels off" as the inputs become large. This behavior creates a <strong>horizontal asymptote</strong>. In this case the graph is approaching the horizontal line \( f(x)=0 \) as the input becomes very large in the negative and positive directions.</p>

<div class="thmdef">
	<h4>Vertical and Horizontal Asymptotes</h4>
	<p>A <strong>vertical asymptote</strong> of a graph is a vertical line \(x = a\) where the graph tends towards positive or negative infinity as the inputs approach \(a\). As \( x\to a \), \( f(x)\to\pm\infty \).</p>
	<p>A <strong>horizontal asymptote</strong> of a graph is a horizontal line \( y=b \) where the graph approaches the line as the inputs get large. As \( x\to\pm\infty \), \( f(x)\to b \).</p>
</div>

<div class="example">
	<h4>Example 6</h4>
	<p>Sketch a graph of the reciprocal function shifted two units to the left and up three units. Identify the horizontal and vertical asymptotes of the graph, if any.</p>
	<p>Transforming the graph left 2 and up 3 would result in the function \( f(x)=\dfrac{1}{x+2}+3 \), or equivalently, by giving the terms a common denominator, \[f(x)=\dfrac{3x+7}{x+2}.\]</p>
	<p>Shifting the toolkit function would give us this graph. Notice that this equation is undefined at \(x = -2\), and the graph also is showing a vertical asymptote at \(x = -2\). As \( x\to -2^- \), \( f(x)\to -\infty \), and as \( x\to -2^+ \), \( f(x)\to \infty \).</p>
	<figure><img src="images/image071.png" alt="graph"/></figure>
	<p>As the inputs grow large, the graph appears to be leveling off at output values of 3, indicating a horizontal asymptote at \( y=3\). As \( x\to\pm\infty \), \( f(x)\to 3 \)</p>
	<p>Notice that horizontal and vertical asymptotes get shifted left 2 and up 3 along with the function.</p>
</div>

<p>A general rational function is the ratio of any two polynomials.</p>

<div class="thmdef">
	<h4>Rational Function</h4>
	<p>A <strong>rational function</strong> is a function that can be written as the ratio of two polynomials, \(P(x)\) and \(Q(x)\).
	\[f(x)=\frac{P(x)}{Q(x)}=\frac{a_0+a_1 x+a_2 x^2+\dots+a_p x^p}{b_0+b_1 x+b_2 x^2+\dots+b_q x^q}\]
	</p>
</div>

<p>Rational functions can arise from real situations.</p>

<div class="example">
	<h4>Example 7</h4>
	<p>A large mixing tank currently contains 100 gallons of water, into which 5 pounds of sugar have been mixed. A tap will open pouring 10 gallons per minute of water into the tank at the same time sugar is poured into the tank at a rate of 1 pound per minute. Find the concentration (pounds per gallon) of sugar in the tank after \(t\) minutes.</p>
	<p>Notice that the amount of water in the tank is changing linearly, as is the amount of sugar in the tank. We can write an equation independently for each:\[\text{water}=100+10t \qquad \text{sugar}=5+1t\]</p>
	<p>The concentration, \(C\), will be the ratio of pounds of sugar to gallons of water: \[C(t)=\frac{5+t}{100+10t}\]</p>
</div>

<div class="thmdef">
	<h4>Vertical Asymptotes of Rational Functions</h4>
	<p>The <strong>vertical asymptotes</strong> of a rational function will occur where the denominator of the function is equal to zero and the numerator is not zero.</p>
</div>

<div class="thmdef">
	<h4>Horizontal Asymptote of Rational Functions</h4>
	<p>The <strong>horizontal asymptote</strong> of a rational function can be determined by looking at the degrees of the numerator and denominator.</p>
	<ul>
		<li>Degree of denominator &gt; degree of numerator: Horizontal asymptote at \( y=0 \).</li>
		<li>Degree of denominator &lt; degree of numerator: No horizontal asymptote.</li>
		<li>Degree of denominator = degree of numerator: Horizontal asymptote at ratio of leading coefficients, \( y=\dfrac{a_p}{b_q} \) (\(p\) and \(q\) are equal in this case).</li>
	</ul>
</div>

<div class="example">
	<h4>Example 8</h4>
	<p>In the sugar concentration problem from earlier, we created the equation \( C(t)=\frac{5+t}{100+10t} \). Find the horizontal asymptote and interpret it in context of the scenario.</p>
	<p>Both the numerator and denominator are linear (degree 1), so since the degrees are equal, there will be a horizontal asymptote at the ratio of the leading coefficients.  In the numerator, the leading term is t, with coefficient 1.  In the denominator, the leading term is \(10t\), with coefficient 10.  The horizontal asymptote will be at the ratio of these values: As \( t \to \infty \), \( C(t)\to \frac{1}{10} \).  This function will have a horizontal asymptote at \( y=\frac{1}{10} \).
</p>
	<p>This tells us that as the input gets large, the output values will approach \( \frac{1}{10} \).  In context, this means that as more time goes by, the concentration of sugar in the tank will approach one tenth of a pound of sugar per gallon of water or \( \frac{1}{10} \) pounds per gallon.</p>
</div>

<div class="example">
	<h4>Example 9</h4>
	<p>Find the horizontal and vertical asymptotes of the function \[f(x)=\frac{(x-2)(x+3)}{(x-1)(x+2)(x-5)}.\]</p>
	<p>First, note this function has no inputs that make both the numerator and denominator zero, so there are no potential holes.  The function will have vertical asymptotes when the denominator is zero, causing the function to be undefined.  The denominator will be zero at \(x =\) 1, -2, and 5, indicating vertical asymptotes at these values.</p>
	<p>The numerator has degree 2, while the denominator has degree 3.  Since the degree of the denominator is greater than the degree of the numerator, the denominator will grow faster than the numerator, causing the outputs to tend towards zero as the inputs get large, and so as  \( x\to\pm\infty \), \( f(x)\to 0 \).  This function will have a horizontal asymptote at \( y=0 \).</p>
</div>

<p>As with all functions, a rational function will have a vertical intercept when the input is zero, if the function is defined at zero.  It is possible for a rational function to not have a vertical intercept if the function is undefined at zero.</p>

<p>Likewise, a rational function will have horizontal intercepts at the inputs that cause the output to be zero (unless that input corresponds to a hole).  It is possible there are no horizontal intercepts.  Since a fraction is only equal to zero when the numerator is zero, horizontal intercepts will occur when the numerator of the rational function is equal to zero.</p>

<div class="videoplayer w639">
	<video id="video_1.6.2" class="video-js vjs-default-skin" controls preload="metadata" width="639" height="auto">
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_1-6/rational_plot.mp4" type='video/mp4' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_1-6/rational_plot.webm" type='video/webm' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

<div class="example">
	<h4>Example 10</h4>
	<p>Find the intercepts of \[f(x)=\frac{(x-2)(x+3)}{(x-1)(x+2)(x-5)}.\]</p>
	<p>We can find the vertical intercept by evaluating the function at zero: \[f(0)=\frac{(0-2)(0+3)}{(0-1)(0+2)(0-5)}=\frac{-6}{10}=-\frac{3}{5}.\]</p>
	<p>The horizontal intercepts will occur when the function is equal to zero:
	\[ \begin{align*}
		0=&amp; \frac{(x-2)(x+3)}{(x-1)(x+2)(x-5)} \qquad \text{(This is zero when the numerator is zero.)}\\
		0=&amp; (x-2)(x+3)\\
		x=&amp; 2, -3. 
	\end{align*} \]
	</p>
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
			<td><a href="section1-5.php">&larr; Previous Section</a></td>
			<td><a href="section1-7.php">Next Section &rarr; </a></td>
		</tr>
	</table>
</footer>
</div>
</body>
</html>