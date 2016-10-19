<!DOCTYPE html>
<html lang="en">
<?php include '../includes/head.html'; ?>
<body>
<!--Nav  must come after any GeoGebra script includes-->
<?php include '../includes/nav.html'; ?>
<div class="page-wrap">
<header class="main-nav-buttons">
	<a href="#main-nav" class="open-menu">&equiv; </a>
	<a href="#close-nav" class="close-menu">&times; </a>
	<!--<h1>menu</h1>-->
  </header>

<section class="content">
<h1>Section 2.7: Optimization</h1>

<p>In theory and applications, we often want to maximize or minimize some quantity.  An engineer may want to maximize the speed of a new computer or minimize the heat produced by an appliance.  A manufacturer may want to maximize profits and market share or minimize waste.  A student may want to maximize a grade in calculus or minimize the hours of study needed to earn a particular grade.</p>
<p>Without calculus, we only know how to find the optimum points in a few specific examples (for example, we know how to find the vertex of a parabola).  But what if we need to optimize an unfamiliar function?</p>
<p>The best way we have without calculus is to examine the graph of the function, perhaps using technology.  But our view depends on the viewing window we choose &ndash; we might miss something important.  In addition, we’ll probably only get an approximation this way.  (In some cases, that will be good enough.)</p>
<p>Calculus provides ways of drastically narrowing the number of points we need to examine to find the exact locations of maximums and minimums, while at the same time ensuring that we haven’t missed anything important.  </p>

<div class="videoplayer w639">
	<video id="video_2.7.1" class="video-js vjs-default-skin" controls preload="metadata" width="639" height="auto">
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-7/intro_to_optimization.mp4" type='video/mp4' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-7/intro_to_optimization.webm" type='video/webm' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

<section><h2>Local Maxima and Minima</h2>

<p>Before we examine how calculus can help us find maximums and minimums, we need to define the concepts we will develop and use.</p>

<div class="important">
	<h4>Definitions (Local Maxima and Minima)</h4>
	<p>\(f(x)\)  has a <strong>local maximum</strong>  at  \(x=a\)  if  \(f(a) \geq f(x)\) for all  \(x\)  near  \(a\).</p>
	<p>\(f(x)\)  has a <strong>local minimum</strong>  at  \(x=a\)  if  \(f(a) \leq f(x)\) for all  \(x\)  near  \(a\).</p>
	<p>\(f(x)\) has a <strong>local extreme</strong> at  \(x=a\)  if  \(f(a)\)  is a <strong>local maximum or minimum</strong>.</p>
	<p>The plurals of these are maxima and minima.  We often simply say "max" or "min;" it saves a lot of syllables.</p>
	<p>Some books say "relative" instead of "local."</p>
	<p>The process of finding maxima or minima is called <strong>optimization</strong>.</p>
	<p>A point is a local max (or min) if it is higher (lower) than all the <strong>nearby points</strong>.  These points come from the shape of the graph.</p>
</div>

<div class="important">
	<h4>Definitions (Global Maxima and Minima)</h4>
	<p>\(f(x)\)  has a <strong>global maximum</strong>  at  \(x=a\)  if  \(f(a) \geq f(x)\) for all  \(x\)  in the domain of  \(f(x)\).</p>
	<p>\(f(x)\)  has a <strong>global minimum</strong>  at  \(x=a\)  if  \(f(a) \leq f(x)\) for all  \(x\)  in the domain of  \(f(x)\).</p>
	<p>\(f(x)\) has a <strong>global extreme</strong> at  \(x=a\)  if  \(f(a)\)  is a <strong>global maximum or minimum</strong>.</p>
	<p>Some books say "absolute" instead of "global."</p>
	<p>A point is a global max (or min) if it is higher (lower) than every point on the graph.  These points come from the shape of the graph <strong>and</strong> the window through which we view the graph.</p>
</div>

<p>The local and global extremes of the function in Figure 1  are labeled.  You should notice that every global extreme is also a local extreme, but there are local extremes that are not global extremes.  </p>
<figure>
	<img src="images/image056.png" alt="graph"/>
	<figcaption>Figure 1</figcaption>
</figure>

<p>If  \(h(x)\)  is the height of the earth above sea level at the location  \(x\),  then the global maximum of  \(h\)  is  \(h\)(summit of Mt. Everest) = 29,028 feet.  The local maximum of  \(h\)  for the United States is  \(h\)(summit of Mt. McKinley) = 20,320 feet.  The local minimum of  \(h\)  for the United States is  \(h\)(Death Valley) = -282 feet.</p>

<div class="example">
	<h4>Example 1</h4>
	<p>The table shows the annual calculus enrollments at a large university.  Which years had local maximum or minimum calculus enrollments?  What were the global maximum and minimum enrollments in calculus?</p>
	<table class="border">
		<tr>
			<td>Year</td>
			<td>2000</td>
			<td>2001</td>
			<td>2002</td>
			<td>2003</td>
			<td>2004</td>
			<td>2005</td>
			<td>2006</td>
			<td>2007</td>
			<td>2008</td>
			<td>2009</td>
			<td>2010</td>
		</tr>
		<tr>
			<td>Enrollment</td>
			<td>1257</td>
			<td>1324</td>
			<td>1378</td>
			<td>1336</td>
			<td>1389</td>
			<td>1450</td>
			<td>1523</td>
			<td>1582</td>
			<td>1567</td>
			<td>1545</td>
			<td>1571</td>
		</tr>
	</table>
	<p>There were local maxima in 2002 and 2007; the global maximum was 1582 students in 2007.   There were local minima in 2003 and 2009; the global minimum was 1257 students in 2000.  We choose not to think of 2000 as a local minimum or 2010 as a local maximum; however, some books would include the endpoints. We are allowed to have a global maximum or global minimum at an endpoint.</p>
	
	<div class="videoplayer w639">
		<video id="video_2.7.2" class="video-js vjs-default-skin vjs-big-play-centered" controls preload="metadata" width="639" height="auto">
			<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-7/comments_on_table_example.mp4" type='video/mp4' />
			<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-7/comments_on_table_example.webm" type='video/webm' />
			<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
		</video>
	</div>
</div>

</section>

<section><h2>Finding Maxima and Minima of a Function</h2>

<p>What must the tangent line look like at a local max or min?  Look at these two graphs again &ndash; you’ll see that at all the extreme points, the tangent line is horizontal (so \(f' = 0\)).  There is one cusp in the blue graph &ndash; the tangent line is vertical there (so \(f'\) is undefined).</p>

<figure><img src="images/image053.png" alt="blue graph"/><img src="images/image056.png" alt="red graph"/></figure>

<p>That gives us the clue how to find extreme values.</p>

<div class="important">
	<h4>Definitions</h4>
	<p>A <strong>critical number</strong>  for a function \(f\) is a value \(x = a\) in the domain of \(f\) where either	\(f'(a) = 0\)  or \(f'(a)\) is undefined.</p>
	<p>A <strong>critical point</strong>  for a function f is a point (a, f(a)) where a is a critical number of f. </p>
	<p><strong>A local max or min of f can only occur at a critical point.</strong></p>
</div>

<div class="example">
	<h4>Example 2</h4>
	<p>Find the critical points of  \(f(x) = x^3  - 6x^2  + 9x + 2\).</p>
	<p>A critical number of  \(f\)  can occur only where  \(f'(x) = 0\) or where  \(f'\) does not exist.</p>
	<p>\[f '(x) = 3x^2 - 12x + 9  =  3(x^2 - 4x + 3) =  3(x - 1)(x - 3)\] So \(f'(x) = 0\) at  \(x = 1\)  and  \(x = 3\) (and no other values of \( x \)).  There are no places where \(f'\) is undefined.</p>
	<p>The critical numbers are \(x = 1\) and \(x= 3\).  So the critical points are (1, 6) and (3, 2).</p>
	<p>These are the only possible locations of local extremes of  \(f\).   We haven’t discussed yet how to tell whether either of these points is actually a local extreme of \(f\),  or which kind it might be.  But we can be certain that no other point is a local extreme.</p>
	<p>The graph of \(f\)  below shows that  \((1, f(1) ) = (1, 6)\)  is a local maximum  and  \((3, f(3) ) = (3, 2)\) is a local minimum.  This function does not have a global maximum or minimum.</p>
	<figure><img src="images/image058.png" alt="graph"/></figure>
</div>

<div class="example">
	<h4>Example 3</h4>
	<p>Find all local extremes of  \(f(x) = x^3\).</p>
	<p>\(f(x) = x^3\)  is differentiable for all \(x\), and  \(f'(x) = 3x^2\).  The only place where  \(f'(x) = 0\) is at  \(x = 0\), so the only candidate is the critical point  (0,0).  </p>
	<p>If  \(x \gt 0\)  then  \(f(x) = x^3 \gt 0 = f(0)\),  so  \(f(0)\)  is not a local maximum.</p>
	<p>Similarly,  if  \(x \lt 0\)  then  \(f(x) = x^3 \lt 0 = f(0)\)  so  \(f(0)\) is not a local minimum.  </p>
	<p>The critical point  (0,0)  is the only candidate to be a local extreme of  \(f\), and, based on the graph, this candidate did not turn out to be a local extreme of \(f\).  The function \(f(x) = x^3\) does not have any local extremes.  </p>
	<figure><img src="images/image059.png" alt="graph"/></figure>
</div>

<p>Remember this example!  It is not enough to find the critical points &ndash; we can only say that \(f\) <em>might</em> have a local extreme at the critical points.</p>

</section>

<section><h2>First and Second Derivative Tests</h2>

<h3>Is that critical point a Maximum or Minimum (or Neither)?</h3>

<p>Once we have found the critical points of \(f\), we still have the problem of determining whether these points are maxima, minima or neither.  </p>

<p>All of the graphs in the figure below have a critical point at (2, 3).  It is clear from the graphs that the point (2,3) is a local maximum in  (a) and (d),  (2,3) is a local minimum in (b) and (e), and  (2,3) is not a local extreme in (c) and (f).</p>
<figure><img src="images/image060.png" alt="graphs"/></figure>

<p>The critical numbers only give the <em>possible</em> locations of extremes, and some critical numbers are not the locations of extremes.  The critical numbers are the <em>candidates</em> for the locations of maxima and minima. </p>

<h3> \(f'\) and Extreme Values of  \(f\) </h3>

<p>Four possible shapes of graphs are shown here &ndash; in each graph, the point marked by an arrow is a critical point, where \(f'(x) = 0\).  What happens to the derivative near the critical point?  </p>
<figure><img src="images/image061.png" alt="graphs"/></figure>

<p>At a local max, such as in the graph on the left, the function increases on the left of the local max, then decreases on the right.  The derivative is first positive, then negative at a local max.  At a local min, the function decreases to the left and increases to the right, so the derivative is first negative, then positive.  When there isn’t a local extreme, the function continues to increase (or decrease) right past the critical point &ndash; the derivative doesn’t change sign.</p>

<div class="important">
	<h4>The First Derivative Test for Extremes</h4>
	<p>Find the critical points of f.</p>
	<p>For each critical number c, examine the sign of f’ to the left and to the right of c.  What happens to the sign as you move from left to right?</p>
	<ul>
		<li>If  \(f'(x)\) <strong>changes from positive to negative</strong> at \(x = c\), then \(f\) has a <strong>local maximum</strong> at \((c, f(c))\).</li>
		<li>If  \(f'(x)\) <strong>changes from negative to positive</strong> at \(x = c\), then \(f\) has a <strong>local minimum</strong> at \((c, f(c))\).</li>
		<li>If  \(f'(x)\) <strong>does not change sign</strong> at \(x = c\), then \((c, f(c))\) is <strong>neither</strong> a local maximum nor a local minimum.</li>
	</ul>
</div>

<div class="videoplayer w639">
	<video id="video_2.7.3" class="video-js vjs-default-skin" controls preload="metadata" width="639" height="auto">
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-7/local_extrema_example_3x_plus_2_first_der_test_part.mp4" type='video/mp4' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-7/local_extrema_example_3x_plus_2_first_der_test_part.webm" type='video/webm' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

<div class="example">
	<h4>Example 4</h4>
	<p>Find the critical points of  \(f(x) = x^3 - 6x^2  + 9x + 2\) and classify them as local max, local min, or neither.</p>
	<p>We already found  the critical points; they are (1, 6) and (3, 2).  </p>
	<p>Now we can use the first derivative test to classify each.  Recall that \(f'(x) = 3x^2 - 12x + 9  =  3(x^2 - 4x + 3) =  3(x - 1)(x - 3)\).  The factored form is easiest to work with here, so let’s use that.</p>
	<p>At (1, 6) we could choose a number slightly less than 1 to plug into the formula for \(f'\) &ndash; perhaps use \(x = 0\), or \(x = 0.9\).  Then we could examine its sign.  But we don’t care about the numerical value, all we are interested in is its sign.  And for that, we don’t have to do any plugging in:</p>
	<ul>
		<li>If \(x\) is a little less than 1, then \(x-1\) is negative, and \(x-3\) is negative.  
		So \(f' =  3(x - 1)(x - 3)\) will be pos(neg)(neg) = positive.</li>
		<li>For \(x\) a little more than 1, we can evaluate \(f'\) at a number more than 1 (but less than 3, we don’t want to go past the next critical point!) &ndash; perhaps \(x = 2\).  Or we can make a quick sign argument like what we did above: for \(x\) a little more than 1, \(f' =  3(x - 1)(x - 3)\) will be pos(pos)(neg) = negative. </li>
	</ul>
	<p>So \(f'\) changes from positive to negative, which means there is a local max at (1, 6).</p>
	<p>As another approach, we could draw a number line, and mark the critical numbers:</p>
	<figure><img src="images/image109.png" alt="number line"/></figure>
	<p>We already know the derivative is zero or undefined at the critical numbers.  On each interval between these values, the derivative will stay the same sign.  To determine the sign, we could pick a test value in each interval, and evaluate the derivative at those points (or use the sign approach used above).</p>
	<figure><img src="images/image110.png" alt="number line"/></figure>
	<p>At (3, 2) \(f'\) changes from negative to positive, so there is a local min at (3, 2).
This confirms what we saw before in the graph.</p>
	<figure><img src="images/image058.png" alt="graph"/></figure>
</div>

<!--<div class="videoplayer w639">
	<video id="video_2.7.4" class="video-js vjs-default-skin" controls preload="auto" width="639" height="360" data-setup='{"example_option":true}'>
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-7/local_extrema_example_x2_over_x_plus_2_first_der_test_part.webm" type='video/webm' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-7/local_extrema_example_x2_over_x_plus_2_first_der_test_part.mp4" type='video/mp4' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>-->

<div class="videoplayer w639">
	<video id="video_2.7.4" class="video-js vjs-default-skin" controls preload="auto" width="639" height="auto">
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-7/local_extrema_example_x2_over_x_plus_2_first_der_test_part.webm" type='video/webm' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-7/local_extrema_example_x2_over_x_plus_2_first_der_test_part.mp4" type='video/mp4' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

<div class="videoplayer w639">
	<video id="video_2.7.5" class="video-js vjs-default-skin" controls preload="metadata" width="639" height="auto">
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-7/local_extrema_example_x5_minus_15x3_first_der_test_part.mp4" type='video/mp4' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-7/local_extrema_example_x5_minus_15x3_first_der_test_part.webm" type='video/webm' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

<h3>\(f''\) and Extreme Values of \(f\) </h3>

<p>The concavity of a function can also help us determine whether a critical point is a maximum or minimum or neither.  For example, if a point is at the bottom of a concave up function, then the point is a minimum. </p>
<figure><img src="images/image062.png" alt="graphs"/></figure>

<div class="important">
	<h4>The Second Derivative Test for Extremes</h4>
	<p>Find all critical points of \(f\).  For those critical points where \(f'(c) = 0\), find \(f''(c)\).</p>
	<ul>
		<li>If \(f''(c) \lt 0\) (negative) then  \(f\) is  concave down  and has a local maximum at  \(x = c\).</li>
		<li>If  \(f''(c) \gt 0\) (positive)  then  \(f\) is  concave up  and  has a local minimum at  \(x = c\).</li>
		<li>If  \(f''(c) = 0\)  then \(f\) may have a local maximum, a minimum or neither at  \(x = c\).</li>
	</ul>
</div>

<p>The cartoon faces can help you remember the Second Derivative Test.</p>
<figure><img src="images/image063.png" alt="creepy faces"/></figure>

<div class="example">
	<h4>Example 5</h4>
	<p>\(f(x) = 2x^3 - 15x^2 + 24x - 7\)  has critical numbers  \(x =\) 1 and 4.  Use the Second Derivative Test for Extremes to determine whether  \(f(1)\)  and  \(f(4)\)  are maximums or minimums or neither.</p>
	<p>We need to find the second derivative:
	\[ \begin{align*}
		f(x) &amp; =  2x^3 - 15x^2 + 24x - 7\\
		f'(x) &amp; =  6x^2 - 30x + 24\\
		f''(x) &amp; =  12x - 30
	\end{align*} \]
	</p>
	<p>Then we just need to evaluate \(f''\) at each critical number:</p>
	<p>\(x = 1\): \( f''(1)=12(1)-30 \lt 0 \), so there is a local maximum at \(x = 1\).</p>
	<p>\(x = 4\): \( f''(4)=12(4)-30 \gt 0 \), so there is a local minimum at \(x = 4\).</p>
</div>

<div class="videoplayer w639">
	<video id="video_2.7.6" class="video-js vjs-default-skin" controls preload="metadata" width="639" height="auto">
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-7/local_extrema_example_3x_plus_2_second_der_test_part.mp4" type='video/mp4' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-7/local_extrema_example_3x_plus_2_second_der_test_part.webm" type='video/webm' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

<p>Many students like the Second Derivative Test.  The Second Derivative Test is often easier to use than the First Derivative Test.  You only have to find the sign of one number for each critical number rather than two.  And if your function is a polynomial, its second derivative will probably be a simpler function than the derivative.  </p>

<p>However, if you needed a product rule, quotient rule, or chain rule to find the first derivative, finding the second derivative can be a lot of work.  Also, even if the second derivative is easy, the Second Derivative Test doesn’t always give an answer.  The First Derivative Test will always give you an answer.</p>

<p>Use whichever test you want to.  But remember &ndash; you have to do some test to be sure that your critical point actually is a local max or min.</p>

<div class="videoplayer w639">
	<video id="video_2.7.7" class="video-js vjs-default-skin" controls preload="metadata" width="639" height="auto">
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-7/local_extrema_example_x2_over_x_plus_2_second_der_test_part.mp4" type='video/mp4' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-7/local_extrema_example_x2_over_x_plus_2_second_der_test_part.webm" type='video/webm' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

<!--Alternate version if the video above isn't working:
<video width="320" height="240" controls>
  <source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-7/test.mp4" type="video/mp4">
  Your browser does not support the video tag.
</video>-->

<div class="videoplayer w639">
	<video id="video_2.7.8" class="video-js vjs-default-skin" controls preload="metadata" width="639" height="auto">
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-7/local_extrema_example_x5_minus_15x3_second_der_test_part.mp4" type='video/mp4' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-7/local_extrema_example_x5_minus_15x3_second_der_test_part.webm" type='video/webm' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

</section>

<section><h2>Global Maxima and Minima</h2>

<p>In applications, we often want to find the global extreme; knowing that a critical point is a local extreme is not enough.  </p>

<p>For example, if we want to make the greatest profit, we want to make the absolutely greatest profit of all.  How do we find global max and min?</p>

<p>There are just a few additional things to think about.</p>

<h3>Endpoint Extremes</h3>

<p>The local extremes of a function occur at critical points &ndash; these are points in the function that we can find by thinking about the shape (and using the derivative to help us).  But if we’re looking at a function on a closed interval, the endpoints could be extremes.  These endpoint extremes are not related to the shape of the function; they have to do with the interval, the window through which we’re viewing the function.</p>

<figure><img src="images/image064.png" alt="graph"/></figure>

<p>In the graph above, it appears that there are three critical points &ndash; one local min, one local max, and one that is neither one.  But the global max, the highest point of all, is at the left endpoint.  The global min, the lowest point of all, is at the right endpoint.</p>

<p>How do we decide if endpoints are global max or min?  It’s easier than you expected &ndash; simply plug in the endpoints, along with all the critical numbers, and compare \(y\)-values.</p>

<div class="important">
	<h4>To find Global Extremes</h4>
	<p>This technique can be used when you are trying to find global extrema over a limited interval.</p>
	<p>The only places where a function can have a global extreme on a limited interval are at critical points or endpoints.</p>
	<ul>
		<li>If the function has only one critical point, and it's a local extreme, then it is also the global extreme.</li>
		<li>If there are endpoints, find the global extremes by comparing \(y\)-values at all the critical points and at the endpoints.</li>
		<li>When in doubt, graph the function to be sure. (However, unless the problem explicitly tells you otherwise, it is <strong>not</strong> enough to just use the graph to get your answer.)</li>
	</ul>
</div>

<div class="example">
	<h4>Example 6</h4>
	<p>Find the global max and min of  \(f(x) = x^3 - 3x^2 - 9x + 5\)  for  \(-2 \leq x \leq 6\).</p>
	<p>\(f'(x) = 3x^2 - 6x - 9 = 3(x + 1)(x - 3)\).  We need to find critical points, and we need to check the endpoints.</p>
	<p>\(f'(x) = 3(x + 1)(x - 3) = 0\)  when  \(x = -1\)  and  \(x = 3\). The endpoints of the interval are  \(x = -2\)  and  \(x = 6\).
</p>
	<p>Now we simply compare the values of \(f\) at these four values of \(x\):  </p>
	<table class="border">
		<tr>
			<td>\( x \)</td>
			<td>\( f(x) \)</td>
		</tr>
		<tr>
			<td>-2</td>
			<td>3</td>
		</tr>
		<tr>
			<td>-1</td>
			<td>10</td>
		</tr>
		<tr>
			<td>3</td>
			<td>-22</td>
		</tr>
		<tr>
			<td>6</td>
			<td>59</td>
		</tr>
	</table>
	<p>The global minimum of  \(f\)  on  \([ -2, 6]\)  is  -22,  when  \(x = 3\), and the global maximum of  \(f\)  on  \([ -2, 6]\)  is  59,  when \(x = 6\).</p>
</div>

<div class="important">
	<h4>Caution</h4>
	<p>Be careful!  You can <strong>only</strong> use this technique (evaluating the function at endpoints and critical values) to determine <strong>global</strong> extrema over a limited interval.  If a question 
	asks for <strong>local</strong> extrema, you <strong>must</strong> use the first or second derivative test described earlier in the section</p>
</div>

<div class="videoplayer w639">
	<video id="video_2.7.9" class="video-js vjs-default-skin" controls preload="metadata" width="639" height="auto">
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-7/global_extrema_example_x2_over_x_plus_2_cont_over_closed_int.mp4" type='video/mp4' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-7/global_extrema_example_x2_over_x_plus_2_cont_over_closed_int.webm" type='video/webm' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

<h3>If there's only one critical point</h3>
<p>If the function has only one critical point and it’s a local max (or min), then it must be the global max (or min).  To see this, think about the geometry.  Look at the graph on the left &ndash; there is a local max, and the graph goes down on either side of the critical point.  Suppose there was some other point that was higher &ndash; then the graph would have to turn around.  But that turning point would have shown up as another critical point.  If there’s only one critical point, then the graph can never turn back around.</p>
<figure><img src="images/image065.png" alt="graph"/></figure>

<h3>When in doubt, graph it and look.</h3>
<p>If you are trying to find a global max or min on an open interval (or the whole real line), and there is more than one critical point, then you need to look at the graph to decide whether there is a global max or min.  Be sure that all your critical points show in your graph, and that you graph beyond them &ndash; that will tell you what you want to know.</p>

<div class="example">
	<h4>Example 7</h4>
	<p>Find the global max and min of  \(f(x) = x^3  - 6x^2  + 9x + 2\).</p>
	<p>We have previously found that (1, 6) is a local max and (3, 2) is a local min.  This is not a closed interval, and there are two critical points, so we must turn to the graph of the function to find global max and min.</p>
	<p>The graph of \(f\)  shows that  points to the left of \(x = 4\) have \(y\)-values greater than 6, so (1, 6) is not  a global max. Likewise, if \(x\) is negative, \(y\) is less than 2, so (3, 2) is not a global min.  There are no endpoints, so we’ve exhausted all the possibilities. This function does not have a global maximum or minimum.</p>
	<figure><img src="images/image058.png" alt="graph"/></figure>
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
			<td><a href="section2-6.php">&larr; Previous Section</a></td>
			<td><a href="section2-8.php">Next Section &rarr; </a></td>
		</tr>
	</table>
</footer>
</div>
</body>
</html>