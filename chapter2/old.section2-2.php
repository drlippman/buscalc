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
<h1>Section 2.2: Limits and Continuity</h1>
<h2>Limits</h2>
<p>In the last section, we saw that as the interval over which we calculated got smaller, the secant slopes approached the tangent slope. The <strong>limit</strong> gives us better language with which to discuss the idea of “approaches.”</p>

<p>The limit of a function describes the behavior of the function when the variable is near, but does not equal, a specified number (see the figure below).</p>
<figure><img src="images/image011.png" alt="graph"/></figure>


<div class="important">
	<h4>Definition (Limit)</h4>
	<p>If the values of \(f(x)\) get closer and closer, as close as we want, to one number \(L\) as we take values of \(x\) very close to (but not equal to) a number \(c\), then we say "<strong>the limit of \(f(x)\) as \(x\) approaches \(c\) is \(L\)</strong>" and we write \[\lim\limits_{x\to c} f(x)=L.\] The symbol "\( \to \)" means "approaches" or, less formally, "gets very close to".</p>
	<p>(This definition of the limit isn't stated as formally as it could be, but it is sufficient for our purposes in this course.)</p>
</div>

<p>Note:</p>
<ul>
	<li>\(f(c)\) is a single number that describes the behavior (value) of \(f(x)\) <strong>at</strong> the point \(x = c\).</li>
	<li>\(\lim\limits_{x\to c} f(x)\) is a single number that describes the behavior of \(f(x)\) near, <strong>but NOT at</strong>, the point \(x = c\).</li>
</ul>

<p>If we have a graph of the function near x = c, then it is usually easy to determine \( \lim\limits_{x\to c} f(x) \).</p>

<div class="videoplayer w639">
	<video id="video_2.2.1" class="video-js vjs-default-skin" controls preload="auto" width="639" height="auto">
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-2/intro_to_limits.mp4" type='video/mp4' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-2/intro_to_limits.webm" type='video/webm' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

<div class="example">
	<h4>Example 1</h4>
	<p>Use the graph of \(y = f(x)\) in the figure below to determine the following limits:</p>
	<ol class="smlatin">
		<li>\(\lim\limits_{x\to 1} f(x)\)</li>
		<li>\(\lim\limits_{x\to 2} f(x)\)</li>
		<li>\(\lim\limits_{x\to 3} f(x)\)</li>
		<li>\(\lim\limits_{x\to 4} f(x)\)</li>
	</ol>
	<figure><img src="images/image012.png" alt="graph"/></figure>
	<ol class="smlatin">
		<li>When \(x\) is very close to 1, the values of \(f(x)\) are very close to \(y = 2\). In this example, it happens that \(f(1) = 2\), but that is <strong>irrelevant</strong> for the limit. The only thing that matters is what happens for \(x\) <em>close to</em> 1 but \(x \neq 1\).</li>
		<li>\(f(2)\) is undefined, but we only care about the behavior of \(f(x)\) for \(x\) <em>close to</em> 2 but <em>not equal to</em> 2. When \(x\) is close to 2, the values of \(f(x)\) are close to 3. If we restrict \(x\) close enough to 2, the values of \(y\) will be as close to 3 as we want, so \( \lim\limits_{x\to 2} f(x) = 3 \). </li>
		<li>When \(x\) is close to 3 (or "as \(x\) approaches the value 3"), the values of \(f(x)\) are close to 1 (or "approach the value 1"), so \( \lim\limits_{x\to 3} f(x) = 1 \). For this limit it is completely irrelevant that \(f(3) = 2\), We only care about what happens to \(f(x)\) for \(x\) close to and not equal to 3.</li>
		<li>This one is harder and we need to be careful. When \(x\) is close to 4 and slightly less than 4 (\(x\) is just to the left of 4 on the \(x\)-axis), then the values of \(f(x)\) are close to 2. But if \(x\) is close to 4 and slightly larger than 4 then the values of \(f(x)\) are close to 3. If we only know that \(x\) is very close to 4, then we cannot say whether \(y = f(x)\) will be close to 2 or close to 3&ndash;it depends on whether \(x\) is on the right or the left side of 4. In this situation, the \(f(x)\) values are not close to a single number so we say \(f(x)\) does not exist. It is irrelevant that \(f(4) = 1\). The limit, as \(x\) approaches 4, would still be undefined if \(f(4)\) was 3 or 2 or anything else. </li>
	</ol>
</div>

<p>We can also explore limits using tables and using algebra.</p>

<div class="videoplayer w639">
	<video id="video_2.2.2" class="video-js vjs-default-skin" controls preload="auto" width="639" height="auto">
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-2/first_set_of_limit_examples.mp4" type='video/mp4' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-2/first_set_of_limit_examples.webm" type='video/webm' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

<div class="example">
	<h4>Example 1</h4>
	<p>Find \( \lim\limits_{x\to 1} \dfrac{2x^2-x-1}{x-1} \).</p>
	<p>You might try to evaluate at \(x = 1\), but \(f(x)\) is not defined at \(x = 1\). It is tempting, <strong>but incorrect</strong>, to conclude that this function does not have a limit as \(x\) approaches 1.</p>
	<p><u>Using tables:</u> Trying some "test" values for x which get closer and closer to 1 from both the left 	and the right, we get</p>
	<table class="border">
		<tr>
			<td>\( x \)</td>
			<td>\( f(x) \)</td>
		</tr>
		<tr>
			<td>0.9</td>
			<td>2.82</td>
		</tr>
		<tr>
			<td>0.9998</td>
			<td>2.9996</td>
		</tr>
		<tr>
			<td>0.999994</td>
			<td>2.999988</td>
		</tr>
		<tr>
			<td>0.9999999</td>
			<td>2.9999998</td>
		</tr>
		<tr>
			<td>\( \to 1 \)</td>
			<td>\( \to 3 \)</td>
		</tr>
	</table>
	<table class="border">
		<tr>
			<td>\( x \)</td>
			<td>\( f(x) \)</td>
		</tr>
		<tr>
			<td>1.1</td>
			<td>3.2</td>
		</tr>
		<tr>
			<td>1.003</td>
			<td>3.006</td>
		</tr>
		<tr>
			<td>1.0001</td>
			<td>3.0002</td>
		</tr>
		<tr>
			<td>1.000007</td>
			<td>3.000014</td>
		</tr>
		<tr>
			<td>\( \to 1 \)</td>
			<td>\( \to 3 \)</td>
		</tr>
	</table>
	<p>The function \(f\) is not defined at \(x = 1\), but when \(x\) is close to 1, the values of \(f(x)\) are getting very close to 3. We can get \(f(x)\) as close to 3 as we want by taking \(x\) very close to 1 so \[\lim\limits_{x\to 1} \dfrac{2x^2-x-1}{x-1}=3.\]</p>
	
	<p><u>Using algebra:</u> We could have found the same result by noting that \[ f(x)= \dfrac{2x^2-x-1}{x-1} = \dfrac{(2x+1)(x-1)}{(x-1)} = 2x+1\] as long as \(x \neq 1\). (If \(x\neq 1\), then \(x–1 \neq 0\) so it is valid to divide the numerator and denominator by the factor \(x–1\).) The "\(x\to 1\)" part of the limit means that x is close to 1 but not equal to 1, so our division step is valid and \[ \lim\limits_{x\to 1}\dfrac{2x^2-x-1}{x-1} = \lim\limits_{x\to 1} 2x+1 = 3,\] which is our answer.</p>
	
	<p><u>Using a graph:</u> We can graph \( y=f(x)= \dfrac{2x^2-x-1}{x-1} \) for \(x\) close to 1: </p>
	<figure><img src="images/image013.png" alt="graph"/></figure>
	<p>Notice that whenever \(x\) is close to 1, the values of \(y = f(x)\) are close to 3. Since \(f\) is not defined at \(x = 1\), the graph has a hole above \(x = 1\), but we only care about what \(f(x)\) is doing for \(x\) close to but <strong>not equal to</strong> 1.</p>
</div>

<div class="videoplayer w639">
	<video id="video_2.2.3" class="video-js vjs-default-skin" controls preload="auto" width="639" height="auto">
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-2/second_set_of_limit_examples.mp4" type='video/mp4' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-2/second_set_of_limit_examples.webm" type='video/webm' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

<h3>One Sided Limits</h3>

<p>Sometimes, what happens to us at a place depends on the direction we use to approach that place. If we approach Niagara Falls from the upstream side, then we will be 182 feet higher and have different worries than if we approach from the downstream side. Similarly, the values of a function near a point may depend on the direction we use to approach that point.</p>

<div class="important">
	<h4>Definition (Left and Right Limits)</h4>
	<p>The left limit of \(f(x)\) as \(x\) approaches \(c\) is \(L\) if the values of \(f(x)\) get as close to \(L\) as we	want when \(x\) is very close to and <strong>left of \(c\)</strong> (i.e., \(x \lt c\)). We write \[\lim\limits_{x\to c^-} f(x)=L.\]</p>
	<p>The right limit of \(f(x)\) as \(x\) approaches \(c\) is \(L\) if the values of \(f(x)\) get as close to \(L\) as we	want when \(x\) is very close to and <strong>right of \(c\)</strong> (i.e., \(x \gt c\)). We write \[\lim\limits_{x\to c^+} f(x)=L.\]</p>
</div>

<div class="example">
	<h4>Example 3</h4>
	<p>Evaluate the one sided limits of the function \(f(x)\) graphed below at \(x = 0\) and \(x = 1\).</p>
	<figure><img src="images/image014.png" alt="graph"/></figure>
	<p>As \(x\) approach 0 from the <em>left</em>, the value of the function is getting closer to 1, so \( \lim\limits_{x\to 0^-} f(x) = 1. \)</p>
	<p>As \(x\) approaches 0 from the <em>right</em>, the value of the function is getting closer to 2, so \( \lim\limits_{x\to 0^+} f(x) = 2. \)</p>
	<p>Notice that since the limit from the left and limit from the right are different, the general limit, \( \lim\limits_{x\to 0} f(x) \), does not exit.</p>
	<p>At \(x\) approaches 1 from either direction, the value of the function is approaching 1, so \[\lim\limits_{x\to 1^-} f(x) = \lim\limits_{x\to 1^+} f(x) = \lim\limits_{x\to 1} f(x) = 1. \]</p>
</div>

<div class="videoplayer w639">
	<video id="video_2.2.4" class="video-js vjs-default-skin" controls preload="auto" width="639" height="auto">
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-2/one_sided_limits.mp4" type='video/mp4' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-2/one_sided_limits.webm" type='video/webm' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

<h2>Continuity</h2>

<p>A function that is "friendly" and doesn’t have any breaks or jumps in it is called continuous. More formally, </p>

<div class="important">
	<h4>Definition (Continuity at a Point)</h4>
	<p>A function \(f(x)\) is continuous at \(x = a \) if and only if \( \lim\limits_{x\to a} f(x) = f(a)\).</p>
</div>

<p>The graph below illustrates some of the different ways a function can behave at and near a point, and the table contains some numerical information about the function and its behavior. </p>

<figure>
	<img src="images/image015.png" alt="graph"/>
	<table class="border">
		<tr>
			<td>\( a \)</td>
			<td>\( f(a) \)</td>
			<td>\( \lim\limits_{x\to a} f(x) \)</td>
		</tr>
		<tr>
			<td>1</td>
			<td>2</td>
			<td>2</td>
		</tr>
		<tr>
			<td>2</td>
			<td>1</td>
			<td>2</td>
		</tr>
		<tr>
			<td>3</td>
			<td>2</td>
			<td>Does not exist (DNE)</td>
		</tr>
		<tr>
			<td>4</td>
			<td>Undefined</td>
			<td>2</td>
		</tr>
	</table>
</figure>

<p>Based on the information in the table, we can conclude that \(f\) is continuous at 1 since \( \lim\limits_{x\to 1} f(x) = 2 = f(1)\). We can also conclude from the information in the table that \(f\) is not continuous at 2 or 3 or 4, because \( \lim\limits_{x\to 2} f(x) \neq f(2) \), \( \lim\limits_{x\to 3} f(x) \neq f(3) \), and \( \lim\limits_{x\to 4} f(x) \neq f(4) \).</p>

<p>The behaviors at \(x = 2\) and \(x = 4\) exhibit a <strong>hole</strong> in the graph, sometimes called a <strong>removable discontinuity</strong>, since the graph could be made continuous by changing the value of a single point. The behavior at \( x = 3 \) is called a <strong>jump discontinuity</strong>, since the graph jumps between two values.</p>

<p>So which functions are continuous? It turns out pretty much every function you’ve studied is continuous where it is defined: <strong>polynomial, radical, rational, exponential, and logarithmic functions are all continuous where they are defined</strong>. Moreover, <strong>any combination of continuous functions is also continuous</strong>.</p>

<p>This is helpful, because the definition of continuity says that for a continuous function, \( \lim\limits_{x\to a} f(x) = f(a) \). That means for a continuous function, we can find the limit by <strong>direct substitution</strong> (evaluating the function) if the function is continuous at \(a\).</p>

<div class="videoplayer w639">
	<video id="video_2.2.5" class="video-js vjs-default-skin" controls preload="auto" width="639" height="auto">
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-2/continuity.mp4" type='video/mp4' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-2/continuity.webm" type='video/webm' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

<div class="example">
	<h4>Example 4</h4>
	<p>Evaluate using continuity, if possible:</p>
	<ol class="smlatin">
		<li>\( \lim\limits_{x\to 2} x^3-4x \)</li>
		<li>\( \lim\limits_{x\to 2} \dfrac{x-4}{x+3} \)</li>
		<li>\( \lim\limits_{x\to 2} \dfrac{x-4}{x-2} \)</li>
	</ol>
	<ol class="smlatin">
		<li>The given function is polynomial, and is defined for all values of x, so we can find the limit by direct substitution:\[ \lim\limits_{x\to 2} x^3-4x = 2^3-4(2) = 0. \]</li>
		<li>The given function is rational. It is not defined at x = -3, but we are taking the limit as x approaches 2, and the function is defined at that point, so we can use direct substitution:\[ \lim\limits_{x\to 2} \dfrac{x-4}{x+3} = \dfrac{2-4}{2+3}= -\dfrac{2}{5}. \]</li>
		<li>This function is not defined at x = 2, and so is not continuous at x = 2. We cannot use direct substitution.</li>
	</ol>
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
			<td><a href="section2-1.php">&larr; Previous Section</a></td>
			<td><a href="section2-3.php">Next Section &rarr; </a></td>
		</tr>
	</table>
</footer>
</div>
</body>
</html>