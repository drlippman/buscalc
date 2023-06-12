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
<h1>Chapter 3: The Integral </h1>

<section><h2>Introduction</h2>
<p>The previous chapters dealt with <strong>Differential Calculus</strong>. We started with the <q>simple</q> geometrical idea of the <strong>slope of a tangent line</strong> to a curve, developed it into a combination of theory about derivatives and their properties, techniques for calculating derivatives, and applications of derivatives. This chapter deals with <strong>Integral Calculus</strong> and starts with the <q>simple</q> geometric idea of <strong>area</strong>. This idea will be developed into another combination of theory, techniques, and applications.</p>

<h3>PreCalculus Idea &ndash; The Area of a Rectangle</h3>

<p>If you look on the inside cover of nearly any traditional math book, you will find a bunch of area and volume formulas &ndash; the area of a square, the area of a trapezoid, the volume of a right circular cone, and so on. Some of these formulas are pretty complicated. But you still won't find a formula for the area of a jigsaw puzzle piece or the volume of an egg. There are lots of things for which there is no formula. Yet we might still want to find their areas.</p>

<p>One reason areas are so useful is that they can represent quantities other than simple geometric shapes. If the units for each side of the rectangle are <em>meters</em>, then the area will have the units <em>meters</em>\( \cdot \)<em>meters</em> = <em>square meters</em> = \(\text{m}^2\). But if the units of the base of a rectangle are <em>hours</em> and the units of the height are <em>miles/hour</em>, then the units of the area of the rectangle are <em>hours</em>\( \cdot \)<em>miles/hour</em> = <em>miles</em>, a measure of distance. Similarly, if the base units are <em>centimeters</em> and the height units are <em>grams</em>, then the area units are <em>gram-centimeters</em>, a measure of work.</p>

<figure><img src="images/image065.png
" alt="rectangles"></figure>

<p>The basic shape we will use is the rectangle; the area of a rectangle is base\( \cdot \)height. You should also know the area formulas for triangles, \( A=\frac{1}{2}bh \), and for circles, \( A=\pi r^2 \).</p>

</section>

<h1>Section 3.1: The Definite Integral</h1>

<section><h2>Distance from Velocity</h2>

<div class="example">
	<h4>Example 1</h4>
	<p>Suppose a car travels on a straight road at a constant speed of 40 miles per hour for two hours. See the graph of its velocity below. How far has it gone?</p>
	<figure><img src="images/image001.png" alt="graph"></figure>
	<p>We all remember distance = rate\( \cdot \)time, so this one is easy. The car has gone (40 miles/hour)\( \cdot \)(2 hours) = 80 miles.</p>
</div>

<div class="example">
	<h4>Example 2</h4>
	<p>Now suppose that a car travels so that its speed increases steadily from 0 to 40 miles per hour, for two hours. (Just be grateful you weren’t stuck behind this car on the highway.) See the graph of its velocity in below. How far has this car gone?</p>
	<figure><img src="images/image002.png" alt="graph"></figure>
	<p>The trouble with our old reliable <strong>distance = rate\( \cdot \)time</strong> relationship is that it only works if the rate is constant. If the rate is changing, there isn’t a good way to use this formula.</p>
	<p>But look at the graph from the last example again. Notice that <strong>distance = rate\( \cdot \)time</strong> also describes the area between the velocity graph and the \(t\)-axis, between \(t = 0\) and \(t = 2\) hours. The <strong>rate</strong> is the height of the rectangle, the <strong>time</strong> is the length of the rectangle, and the <strong>distance</strong> is the <strong>area</strong> of the rectangle. This is the way we can extend our simple formula to handle more complicated velocities: And this is the way we can answer the second example.</p>
	<p>The distance the car travels is the area between its velocity graph, the \(t\)-axis, \(t = 0\) and \(t = 2\). This region is a triangle, so its area is \[\frac{1}{2}bh = \frac{1}{2}(2 \text{ hours})(40 \text{ miles per hour}) = 40 \text{ miles}.\] So the car travels 40 miles during its annoying trip.</p>
</div>

<p>In our distance/velocity examples, the function represented a <strong>rate</strong> of travel (miles per hour), and the area represented the <strong>total</strong> distance traveled. This principle works more generally:</p>

<p>For functions representing other <strong>rates</strong> such as the production of a factory (bicycles per day), or the flow of water in a river (gallons per minute) or traffic over a bridge (cars per minute), or the spread of a disease (newly sick people per week), the area will still represent the <strong>total</strong> amount of something.</p>

<figure><img src="images/image003.png" alt="graph"></figure>

<div class="example">
	<h4>Example 3</h4>
	<p>The graph below shows the flow rate (cubic feet per second) of water in the Skykomish river at the town of Goldbar in Washington state.</p>
	<figure><img src="images/image004.png" alt="graph"></figure>
	<p>The area of the shaded region represents the total volume (cubic feet or \( \text{ft}^3 \)) of water flowing past the town during the month of October. We can approximate this area to approximate the total water by thinking of the shaded region as a rectangle with a triangle on top.</p>
	<p>
	\[ \begin{align*}
			\text{Total water } &amp; =  \text{ total area}\\
			 &amp; \approx  \text{ area of rectangle }+\text{ area of the "triangle"} \\
			 &amp; \approx  \left(2000 \frac{\text{ft}^3}{\text{s}}\right)\left(30 \text{ days}\right)+\frac{1}{2}\left(1500\frac{\text{ft}^3}{\text{s}}\right)\left(30\text{ days}\right) \\
			 &amp; =  \left(2570\frac{\text{ft}^3}{\text{s}}\right)\left(30\text{ days}\right)
		\end{align*} \]
	</p>
	<p>Note that we need to convert the units to make sense of our result:
		\[ \begin{align*}
			\text{Total water } &amp; \approx  \left(2570\frac{\text{ft}^3}{\text{s}}\right)\left(30\text{ days}\right) \\
			 &amp; =  \left(2570\frac{\text{ft}^3}{\text{s}}\right)\left(2,\!592,\!000\text{ sec}\right) \\
			 &amp; \approx  7.128\cdot 10^9\text{ ft}^3
		\end{align*} \]
	</p>
	<p>About 7 billion cubic feet of water flowed past Goldbar in October.</p>
</div>

</section>

<section><h2>Approximating with Rectangles</h2>

<p>How do we approximate the area if the rate curve is, well, <q>curvy</q>? We could use rectangles and triangles, like we did in the last example. But it turns out to be more useful (and easier) to simply use rectangles. The more rectangles we use, the better our approximation is.</p>

<figure><img src="images/image005.png" alt="graph"></figure>

<p>Suppose we want to calculate the area between the graph of a positive function \(f\) and the \(x\)-axis on the interval \([a, b]\) (graphed above). The <strong>Riemann Sum method</strong> is to build several rectangles with bases on the interval \([a, b]\) and sides that reach up to the graph of \(f\) (see below). Then the areas of the rectangles can be calculated and added together to get a number called a Riemann Sum of \(f\) on \([a, b]\). The area of the region formed by the rectangles is an <strong>approximation</strong> of the area we want.</p>

<figure><img src="images/image006.png" alt="graph"></figure>

<div class="videoplayer w639">
	<video id="video_3.1.1" class="video-js vjs-default-skin" controls preload="metadata" width="639" height="auto">
		<source src="video_3-1/intro_to_Riemann_sums.webm" type='video/webm' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_3-1/intro_to_Riemann_sums.mp4" type='video/mp4' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

<div class="example">
	<h4>Example 4</h4>
	<p>Approximate the area in the graph on the left between the graph of \(f\) and the \(x\)-axis on the interval [2, 5] by summing the areas of the rectangles in the graph on the right.</p>
	<figure><img src="images/image007.png" alt="graph"></figure>
	<p>The total area of rectangles is \[(2)(3) + (1)(5) = 11\text{ units}^2.\]</p>
</div>

<div class="example">
	<h4>Example 5</h4>
	<p>Let \(A\) be the region bounded by the graph of \(f(x) = \frac{1}{x}\), the \(x\)-axis, and vertical lines at \(x = 1\) and \(x = 5\). We can’t find the area exactly (with what we know now), but we can approximate it using rectangles.</p>
	<p>When we make our rectangles, we have a lot of choices. We could pick any (non-overlapping) rectangles whose bottoms lie within the interval on the x-axis, and whose tops intersect with the curve somewhere. But it is easiest to choose rectangles that (a) have all the same width and (b) take their heights from the function at one edge. Below are graphs showing two ways to use four rectangles to approximate this area. In the first graph, we used left-endpoints; the height of each rectangle comes from the function value at its left edge. In the second graph on the next page, we used right-hand endpoints.</p>
	<p><strong>Left-hand endpoints:</strong> The area is approximately the sum of the areas of the rectangles. Each rectangle gets its height from the function \( f(x)=\frac{1}{x} \) and each rectangle has a width of 1.</p>
	<figure><img src="images/image008.png" alt="graph"></figure>
	<p>You can find the area of each rectangle using area = height\( \cdot \)width. So the total area of the rectangles, the left-hand estimate of the area under the curve, is
	\[f(1)\cdot 1+f(2)\cdot 1+f(3)\cdot 1+f(4)\cdot 1=1+\frac{1}{2}+\frac{1}{3}+\frac{1}{4}=\frac{25}{12}\approx 2.08.\]
	</p>
	<p>Notice that because this function is decreasing, all the left endpoint rectangles stick out above the region we want – using left-hand endpoints will overestimate the area.</p>
	<p><strong>Right-hand endpoints:</strong> The right-hand estimate of the area is
	\[f(2)\cdot 1+f(3)\cdot 1+f(4)\cdot 1+f(5)\cdot 1=\frac{1}{2}+\frac{1}{3}+\frac{1}{4}+\frac{1}{5}=\frac{77}{60}\approx 1.28.\]
	</p>
	<figure><img src="images/image009.png" alt="graph"></figure>
	<p>All the right-hand rectangles lie completely under the curve, so this estimate will be an underestimate.</p>
	<p>We can see that the true area is actually in between these two estimates. So we could take their average: \[\text{Average}=\frac{\frac{25}{12}+\frac{77}{60}}{2}=\frac{101}{60}\approx 1.68\]</p>
	<p>In general, the average of the left-hand and right-hand estimates will be closer to the real area than either individual estimate.</p>
	<p>Our estimate of the area under the curve is about 1.68. (The actual area is about 1.61.)</p>
	<p>This applet will allow you to see how the approximation changes if you use more rectangles; change the <q>position</q> slider to switch between using the left endpoints, right endpoints, and midpoints:</p>
	<iframe class="geogebra" scrolling="no" src="https://geogebra.org/material/iframe/id/WhGszJ9H/width/676/height/482/border/888888/rc/false/ai/false/sdz/true/smb/false/stb/false/stbh/true/ld/false/sri/true/at/preferhtml5" width="676px" height="482px" style="border:0px;"> </iframe>
</div>

<div class="videoplayer w639">
	<video id="video_3.1.2" class="video-js vjs-default-skin" controls preload="metadata" width="639" height="auto">
		<source src="video_3-1/Riemann_sum_examples.webm" type='video/webm' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_3-1/Riemann_sum_examples.mp4" type='video/mp4' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

<p>If we wanted a better answer, we could use even more and even narrower rectangles. But there is a limit to how much work we want to do by hand. In practice, choose a manageable number of rectangles. We will have better methods to get more accurate answers before long.</p>

<p>These sums of areas of rectangles are called <strong>Riemann sums</strong>. You may see a shorthand notation used when people talk about sums. We won't use it much in this book, but you should know what it means.</p>

<div class="important">
	<h4>Riemann Sum</h4>
	<p>A Riemann sum for a function \(f(x)\) over an interval \([a, b]\) is a sum of areas of rectangles that approximates the area under the curve. Start by dividing the interval \([a, b]\) into \(n\) subintervals; each subinterval will be the base of one rectangle. We usually make all the rectangles the same width \( \Delta x \). The height of each rectangle comes from the function evaluated at some point in its sub interval. Then the Riemann sum is \[f(x_1)\Delta x+f(x_2)\Delta x+f(x_3)\Delta x+\dots +f(x_n)\Delta x\] or, factoring out the \( \Delta x \), \[\Delta x\left(f(x_1)+f(x_2)+f(x_3)+\dots +f(x_n)\right).\]</p>
	<h4>Sigma Notation</h4>
	<p>The upper-case Greek letter Sigma \( \sum \) is used to stand for <q>sum</q>. Sigma notation is a way to compactly represent a sum of many similar terms, such as a Riemann sum.</p>
	<p>Using the Sigma notation, the Riemann sum can be written \[\sum\limits_{i=1}^n f\left(x_i\right)\Delta x.\]</p>
	<p>This is read aloud as <q>the sum as \(i\) goes from 1 to \(n\) of \(f\) of \(x\) sub \(i\) times Delta \(x\).</q> The <q>\(i\)</q> is a counter or index, like you might have seen in a programming class.</p>
</div>

<div class="videoplayer w639">
	<video id="video_3.1.3" class="video-js vjs-default-skin" controls preload="metadata" width="639" height="auto">
		<source src="video_3-1/Riemann_sum_definition_and_limit.webm" type='video/webm' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_3-1/Riemann_sum_definition_and_limit.mp4" type='video/mp4' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

</section>

<section><h2>Definition of the Definite Integral</h2>

<p>Because the area under the curve is so important, it has a special vocabulary and notation.</p>

<div class="important">
	<h4>The Definite Integral</h4>
	<p>The <strong>definite integral</strong> of a positive function \(f(x)\) over an interval \([a, b]\) is the area 
		between \(f\), the \(x\)-axis, \(x = a\) and \(x = b\). 
</p>
	<p>The <strong>definite integral</strong> of a positive function \(f(x)\) from \(a\) to \(b\) is the area under the curve between \(a\) and \(b\).</p>
	<p>If \(f(t)\) represents a positive rate (in \(y\)-units per \(t\)-units), then the definite integral of \(f(t)\) from \(a\) to \(b\) is the total \(y\)-units that accumulate between \(t = a\) and \(t = b\).</p>

	<h5>Notation for the Definite Integral</h5>
	<p>The definite integral of \(f(x)\) from \(a\) to \(b\) is written \[\int_a^b f(x)\, dx.\]</p>
	<p>The \( \int \) symbol is called the <strong>integral sign</strong>; it is an elongated letter S, standing for <q>sum</q>. 
		(The \( \int \) corresponds to the \( \sum \) from the Riemann sum)
</p>
	<p>The \(dx\) on the end <em>must</em> be included! The \(dx\) tells what the variable is &ndash; in this example, the variable is \(x\). (The \(dx\) corresponds to the \( \Delta x \) from the Riemann sum)</p>
	<p>The function f is called the <strong>integrand</strong>.</p>
	<p>The \(a\) and \(b\) are called the <strong>limits of integration</strong>.</p>

	<h5>Verb forms</h5>
	<p>We <strong>integrate</strong>, or <strong>find the definite integral</strong> of a function. This process is called <strong>integration</strong>.</p>

	<h5>Formal Algebraic Definition</h5>
	<p>\[\int_a^b f(x)\, dx =\lim\limits_{n\to\infty}\sum\limits_{i=1}^n f(x_i)\Delta x.\]</p>

	<h5>Practical Definition</h5>
	<p>The definite integral can be approximated with a Riemann sum (dividing the area into rectangles where the height of each rectangle comes from the function, computing the area of each rectangle, and adding them up). The more rectangles we use, the narrower the rectangles are, the better our approximation will be.</p>

	<h5>Looking Ahead</h5>
	<p>We will have methods for computing exact values of some definite integrals from formulas soon. In many cases, including when the function is given to you as a table or graph, you will still need to approximate the definite integral with rectangles.</p>
</div>

<div class="example">
	<h4>Example 6</h4>
	<p>The graph below shows \(y = r(t)\), the number of telephone calls made per hours on a Tuesday. Approximately how many calls were made between 9 pm and 11 pm? Express this as a definite integral and approximate with a Riemann sum.</p>
	<figure><img src="images/image010.png" alt="graph"></figure>
	<p>We know that the accumulated calls will be the area under this rate graph over that two-hour period, the definite integral of this rate from \(t = 9\) to \(t = 11\).</p>
	<p>The total number of calls will be \( \int\limits_9^{11} r(t)\,dt \).</p>
	<p>The top here is a curve, so we can’t get an exact answer. But we can approximate the area using rectangles. Let's choose to use four rectangles and left-endpoints:</p>
	<figure><img src="images/image066.png" alt="graph"></figure>
	<p>\[\int\limits_9^{11} r(t)\,dt \approx 0.5(100+150+180+195)=312.5\]</p>
	<p>The units are calls per hour\( \cdot \)hours = calls. Our estimate is that about 312 calls were made between 9 pm and 11 pm. Is this an under-estimate or an over-estimate?</p>
</div>

<div class="example">
	<h4>Example 7</h4>
	<p>Describe the area between the graph of \(f(x) = \frac{1}{x}\), the \(x\)-axis, and the vertical lines at \(x = 1\) and \(x = 5\) as a definite integral.</p>
	<p>This is the same area we estimated to be about 1.68 before. Now we can use the notation of the definite integral to describe it. Our estimate of \( \int\limits_1^5 \frac{1}{x}\, dx \) was 1.68. The true value of \( \int\limits_1^5 \frac{1}{x}\, dx \) is about 1.61.</p>
</div>

<div class="example">
	<h4>Example 8</h4>
	<p>Using the idea of area, determine the value of \( \int\limits_1^3 1+x \,dx \).</p>
	<p> \( \int\limits_1^3 1+x \,dx \) represents the area between the graph of \(f(x) = 1+x\), the \(x\)-axis, and the vertical lines at 1 and 3.</p>
	<figure><img src="images/image011.png
" alt="graph"></figure>
	<p>Since this area can be broken into a rectangle and a triangle, we can find the area exactly. The area equals \[ 4 + \frac{1}{2}(2)(2) = 6 \text{ units}^2.\]</p>
</div>

<div class="example">
	<h4>Example 9</h4>
	<p>The table shows rates of population growth for Berrytown for several years. Use this table to estimate the total population growth from 1970 to 2000:</p>
	<table class="border">
		<tr>
			<td>Year, \( t \)</td>
			<td>1970</td>
			<td>1980</td>
			<td>1990</td>
			<td>2000</td>
		</tr>
		<tr>
			<td>Rate of population growth \( R(t) \) in thousands of people per year</td>
			<td>1.5</td>
			<td>1.9</td>
			<td>2.2</td>
			<td>2.4</td>
		</tr>
	</table>
	<p>The definite integral of this rate will give the total change in population over the thirty-year period. We only have a few pieces of information, so we can only estimate. Even though we haven't made a graph, we're still approximating the area under the rate curve, using rectangles. How wide are the rectangles? We have information every 10 years, so the rectangles have a width of 10 years. How many rectangles? Be careful here &ndash; this is a thirty-year span, so there are three rectangles.</p>
	<ul>
		<li>Using left-hand endpoints: (1.5)(10) + (1.9)(10) + (2.2)(10) = 56</li>
		<li>Using right-hand endpoints: (1.9)(10) + (2.2)(10) + (2.4)(10) = 65</li>
	</ul>
	<p>Taking the average of these two: \[\frac{56+65}{2}=60.5\]</p>
	<p>Our best estimate of the total population growth from 1970 to 2000 is <strong>60.5 thousand people</strong>.</p>
</div>

<div class="videoplayer w639">
	<video id="video_3.1.4" class="video-js vjs-default-skin" controls preload="metadata" width="639" height="auto">
		<source src="video_3-1/table_example.webm" type='video/webm' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_3-1/table_example.mp4" type='video/mp4' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

</section>

<section><h2>Signed Area</h2>

<p>You may have noticed that until this point, we've insisted that the integrand (the function we're integrating) be positive. That’s because we've been talking about area, which is always positive.</p>

<p>If the <q>height</q> (from the function) is a negative number, then multiplying it by the width doesn't give us actual area, it gives us the area with a negative sign.</p>

<p>But it turns out to be useful to think about the possibility of negative area. We’ll expand our idea of a definite integral now to include integrands that might not always be positive. The <q>heights</q> of the rectangles, the values from the function, now might not always be positive.</p>

<div class="important">
	<h4>The Definite Integral and Signed Area</h4>
	<p>The <strong>definite integral</strong> of a function \(f(x)\) over an interval \([a, b]\) is the <strong>signed area</strong> between \(f\), the \(x\)-axis, \(x = a\) and \(x = b\).</p>
	<p>The <strong>definite integral</strong> of a function \(f(x)\) from \(a\) to \(b\) is the <strong>signed area</strong> under the curve between \(a\) and \(b\).</p>
	<p>If the function is positive, the signed area is positive, as before (and we can call it area.)</p>
	<p>If the function dips below the \(x\)-axis, the areas of the regions below the \(x\)-axis come in with a negative sign. In this case, we cannot call it simply <q>area.</q> These negative areas take away from the definite integral.</p>
	<p>\( \int\limits_a^b f(x) \,dx = \) (Area above \( x \)-axis) \( - \) (Area below \( x \)-axis)</p>
	<p>If f(t) represents a positive rate (in \(y\)-units per \(t\)-units), then the <strong>definite integral</strong> of \(f\) from \(a\) to \(b\) is the <strong>total</strong> \(y\)-units that accumulate between \(t = a\) and \(t = b\).</p>
	<p>If \(f(t)\) represents any rate (in \(y\)-units per \(t\)-units), then the <strong>definite integral</strong> of \(f\) from \(a\) to \(b\) is the <strong>net</strong> \(y\)-units that accumulate between \(t = a\) and \(t = b\).</p>
</div>

<div class="example">
	<h4>Example 10</h4>
	<p>Find the definite integral of \(f(x) = –2\) on the interval [1,4].</p>
	<figure><img src="images/image012.png" alt="graph"></figure>
	<p>\(\int\limits_1^4 -2\,dx\) is the signed area of the region shown to the right. The region lies below the \( x \)-axis, so the area, 6, comes in with a negative sign. So the definite integral is \(\int\limits_1^4 -2\,dx =-6\).</p>
</div>

<p>Negative rates indicate that the amount is decreasing. For example, if \(f(t)\) is the velocity of a car in the positive direction along a straight line at time \(t\) (miles/hour), then negative values of \(f\) indicate that the car is traveling in the negative direction, backwards. The definite integral of \(f\) is the change in position of the car during the time interval. If the velocity is positive, positive distance accumulates. If the velocity is negative, distance in the negative direction accumulates.</p>

<p>This is true of any rate. For example, if \(f(t)\) is the rate of population change (people/year) for a town, then negative values of \(f\) would indicate that the population of the town was getting smaller, and the definite integral (now a negative number) would be the <strong>change</strong> in the population, a decrease, during the time interval.</p>

<div class="example">
	<h4>Example 11</h4>
	<p>In 1980 there were 12,000 ducks nesting around a lake, and the rate of population change (in ducks per year) is shown in the figure below. Write a definite integral to represent the total change in the duck population from 1980 to 1990, and estimate the population in 1990.</p>
	<figure><img src="images/image013.png" alt="graph"></figure>
	<p>The change in population is:
	\[ \begin{align*}
		\int\limits_{1980}^{1990} f(t) \,dt &amp; =  -(\text{area between \( f \) and axis}) \\
		 &amp; \approx  -(200\text{ ducks/year})\cdot (10\text{ years}) \\
		 &amp; =  -2000\text{ ducks}
	\end{align*} \]
	</p>
	<p>Then (1990 duck population) = (1980 population) + (change from 1980 to 1990) = (12,000) + ( -2000) = 10,000 ducks.</p>
</div>

<div class="videoplayer w639">
	<video id="video_3.1.5" class="video-js vjs-default-skin" controls preload="metadata" width="639" height="auto">
		<source src="video_3-1/signed_area.webm" type='video/webm' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_3-1/signed_area.mp4" type='video/mp4' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

<div class="example">
	<h4>Example 12</h4>
	<p>A bug starts at the location \(x = 12\) on the \(x\)-axis at 1 pm walks along the axis with the velocity \(v(x)\) shown in the graph. How far does the bug travel between 1 pm and 3 pm, and where is the bug at 3 pm?</p>
	<figure><img src="images/image014.png" alt="graph"></figure>
	<p>Note that the velocity is positive from 1 until 2:30, then becomes negative. So the bug moves in the positive direction from 1 until 2:30, then turns around and moves back toward where it started. The area under the velocity curve from 1 to 2:30 shows the total distance traveled by the bug in the positive direction; the bug moved 12.5 feet in the positive direction. The <strong>area</strong> between the velocity curve and the x-axis, between 2:30 and 3, shows the total distance traveled by the bug in the negative direction, back toward home; the bug traveled 2.5 feet in the negative direction. The definite integral of the velocity curve, \(\int\limits_1^3 v(t) \,dt\), shows the net change in distance: \[\int\limits_1^3 v(t) \,dt = 12.5-2.5=10.\]</p>
	<p>The bug ended up 10 feet farther in the positive direction than he started. At 3 pm, the bug is at \(x = 22\).</p>
</div>

<div class="example">
	<h4>Example 13</h4>
	<p>Use the graph below to calculate \( \int\limits_0^2 f(x) \,dx \), \( \int\limits_2^4 f(x) \,dx \), \( \int\limits_4^5 f(x) \,dx \), and \( \int\limits_0^5 f(x) \,dx \).</p>
	<figure><img src="images/image015.png" alt="graph"></figure>
	<p>Using the given areas, \( \int\limits_0^2 f(x) \,dx = 2 \), \( \int\limits_2^4 f(x) \,dx = -5 \), \( \int\limits_4^5 f(x) \,dx = 2 \), and \( \int\limits_0^5 f(x) \,dx = \)(area above)\( - \)(area below)\( = (2+2) - (5) = -1\).</p>
</div>

</section>

<section><h2>Approximating with Technology</h2>

<p>If your function is given as a graph or table, you will still have to approximate definite integrals using areas, usually of rectangles. But if your function is given as a formula, you can turn to technology to get a better approximate answer. For example, most graphing calculators have some kind of numerical integration tool built in. You can also find many online tools that can do this; type numerical integration into any search engine to see a selection of these.</p>

<p>Most numerical integration tools use rectangles to estimate the signed area, just as you would do by hand. But they use many more rectangles than you would have the patience for, so they get a better answer. Some of them use computer algebra systems to find exact answers; we will learn how to do this ourselves later in this chapter.</p>

<p>When you turn to technology to find the value of a definite integral, be careful. Not every tool will be able to give you a correct answer for every integral. You should make an estimate of the answer yourself first so you can judge whether the answer you get makes sense.</p>

<div class="example">
	<h4>Example 14</h4>
	<p>Use technology to approximate the definite integral \( \int\limits_1^5 \frac{1}{x} \,dx \). (This is the same definite integral we approximated with rectangles before.)</p>
	<p>We could use the following command in GeoGebra to approximate this integral:</p>
	<code>Integral[1 / x, 1, 5]</code>
	<p>Or <a href="http://www.wolframalpha.com/input/?i=integrate+1%2Fx+from+1+to+5" target="_blank">click this link</a> to see how to evaluate this integral using <a href="http://www.wolframalpha.com/">Wolfram|Alpha</a>.</p>
</div>

<div class="example">
	<h4>Example 15</h4>
	<p>Use technology to approximate the definite integral \( \int\limits_1^2 e^{x^2+x} \,dx \).</p>
	<p>The function here is positive, so there must be some area under the curve here. There isn’t an algebraic way to find the exact answer, so some programs may just return the original integral rather than try to approximate it.</p>
	<p>We could use the following command in GeoGebra to approximate this integral:</p>
	<code>Integral[e^(x^2 + x), 1, 2]</code>
	<p>Or <a href="http://www.wolframalpha.com/input/?i=integrate+e%5E(x%5E2%2Bx)+from+1+to+2" target="_blank">click this link</a> to see how to approximate this integral using <a href="http://www.wolframalpha.com/">Wolfram|Alpha</a>. Although it looks like Wolfram|Alpha can evaluate the integral, the <q>Erfi</q> function that it shows in its answer is actually defined in terms of another integral, so it still hasn't found an algebraic answer.</p>
</div>

</section>

<section><h2>Accumulation in Real Life</h2>

<p>We have already seen that the <q>area</q> under a graph can represent quantities whose units are not the usual geometric units of square meters or square feet. For example, if \(t\) is a measure of time in seconds and \(f(t)\) is a velocity with units feet/second, then the definite integral has units (feet/second)\( \cdot \)(seconds) = feet.</p>

<p>In general, the units for the definite integral \( \int\limits_a^b f(x)\,dx \) are (\(y\)-units )\( \cdot \)(\(x\)-units). A quick check of the units can help avoid errors in setting up an applied problem.</p>

<p>In previous examples, we looked at a function that represented a <strong>rate</strong> of travel (miles per hour); in that case, the area represented the <strong>total</strong> distance traveled. For functions representing other <strong>rates</strong> such as the production of a factory (bicycles per day), or the flow of water in a river (gallons per minute) or traffic over a bridge (cars per minute), or the spread of a disease (newly sick people per week), the area will still represent the <strong>total</strong> amount of something.</p>

<div class="example">
	<h4>Example 16</h4>
	<p>Suppose \(MR(q)\) is the marginal revenue in dollars/item for selling \(q\) items. What does \( \int\limits_0^{150} MR(q) \,dq \) represent?</p>
	<p> \( \int\limits_0^{150} MR(q) \,dq \) has units (dollars/item)\( \cdot \)(items) = dollars, and represents the accumulated dollars for selling from 0 to 150 items. That is, \( \int\limits_0^{150} MR(q) \,dq = TR(150) \), the total revenue from selling 150 items.</p>
</div>

<div class="example">
	<h4>Example 17</h4>
	<p>Suppose \(r(t)\), in centimeters per year, represents how the diameter of a tree changes with time. What does \( \int\limits_{T_1}^{T_2} r(t) \,dt \) represent?</p>
	<p> \( \int\limits_{T_1}^{T_2} r(t) \,dt \) has units of (centimeters per year)\( \cdot \)(years) = centimeters, and represents the accumulated growth of the tree’s diameter from \(T_1\) to \(T_2\). That is, \( \int\limits_{T_1}^{T_2} r(t) \,dt \) is the change in the diameter of the tree over this period of time.</p>
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
			<td><a href="../chapter2/section2-11.php">&larr; Previous Section</a></td>
			<td><a href="section3-2.php">Next Section &rarr; </a></td>
		</tr>
	</table>
</footer>
</div>
</body>
</html>