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

<section class="content"><h1>Section 2.4: Rates in Real Life</h1>

<section><h2>Introduction</h2>
<p>So far we have emphasized the derivative as the slope of the line tangent to a graph. That interpretation is very visual and useful when examining the graph of a function, and we will continue to use it. Derivatives, however, are used in a wide variety of fields and applications, and some of these fields use other interpretations. The following are a few interpretations of the derivative that are commonly used.</p>

<div class="important">
	<h4>General</h4>
	<p>Rate of Change: \(f '(x)\) is the <strong>rate of change</strong> of the function at \(x\). If the units for \(x\) are years and the units for \(f(x)\) are people, then the units for \( \frac{df}{dx} \) are \(\frac{\text{people}}{\text{year}}\), a rate of change in population.</p>
	
	<h4>Graphical</h4>
	<p>Slope: \(f '(x)\) is the <strong>slope of the line tangent to the graph of \(f\) at the point \(( x, f(x) )\)</strong>.</p>
	
	<h4>Physical</h4>
	<p>Velocity: If \(f(x)\) is the position of an object at time \(x\), then \(f '(x)\) is the <strong>velocity</strong> of the object at time \(x\). If the units for \(x\) are hours and \(f(x)\) is distance measured in miles, then the units for \(f '(x) = \frac{df}{dx}\) are \( \frac{\text{miles}}{\text{hour}} \), miles per hour, which is a measure of velocity.</p>
	<p>Acceleration: If \(f(x)\) is the velocity of an object at time \(x\), then \(f '(x)\) is the <strong>acceleration</strong> of the object at time \(x\). If the units are for \(x\) are hours and \(f(x)\) has the units \( \frac{\text{miles}}{\text{hour}} \), then the units for the acceleration \(f '(x) = \frac{df}{dx}\) are \( \frac{\text{miles/hour}}{\text{hour}} =\frac{\text{miles}}{\text{hour}^2} \), miles per hour per hour.</p>
	
	<h4>Business</h4>
	<p>Marginal Cost, Marginal Revenue, and Marginal Profit: We'll explore these terms in more depth later in the section. Basically, the marginal cost is approximately the <em>additional</em> cost of making one more object once we have already made \(x\) objects. If the units for \(x\) are bicycles and the units for \(f(x)\) are dollars, then the units for \(f '(x) = \frac{df}{dx}\) are \( \frac{\text{dollars}}{\text{ bicycle}} \), the cost per bicycle.</p>
	<p>In business contexts, the word "<strong>marginal</strong>" usually means the derivative or rate of change of some quantity.</p>
</div>

<p>One of the strengths of calculus is that it provides a unity and economy of ideas among diverse applications. The vocabulary and problems may be different, but the ideas and even the notations of calculus are still useful.</p>

</section>

<section><h2>Business and Economics Terms</h2>

<p>Suppose you are producing and selling some item. The profit you make is the amount of money you take in minus what you have to pay to produce the items. Both of these quantities depend on how many you make and sell. (So we have functions here.) Here is a list of definitions for some of the terminology, together with their meaning in algebraic terms and in graphical terms.</p>

<div class="important">
	<h4>Cost</h4>
	<p>Your <strong>cost</strong> is the money you have to spend to produce your items.</p>

	<h4>Fixed Cost</h4>
	<p>The <strong>Fixed Cost</strong> (<strong>FC</strong>) is the amount of money you have to spend regardless of how many items you produce. FC can include things like rent, purchase costs of machinery, and salaries for office staff. You have to pay the fixed costs even if you don’t produce anything.</p>

	<h4>Total Variable Cost</h4>
	<p>The <strong>Total Variable Cost</strong> (<strong>TVC</strong>) for \(q\) items is the amount of money you spend to actually produce them. TVC includes things like the materials you use, the electricity to run the machinery, gasoline for your delivery vans, maybe the wages of your production workers. These costs will vary according to how many items you produce.</p>

	<h4>Total Cost</h4>
	<p>The <strong>Total Cost</strong> (<strong>TC</strong>, or sometimes just <strong>C</strong>) for \(q\) items is the total cost of producing them. It’s the sum of the fixed cost and the total variable cost for producing \(q\) items.</p>

	<h4>Average Cost </h4>
	<p>The <strong>Average Cost</strong> (<strong>AC</strong>) for \(q\) items is the total cost divided by \(q\), or \(\frac{TC}{q}\). You can also talk about the average fixed cost, \(\frac{FC}{q}\), or the average variable cost, \(\frac{TVC}{q}\).</p>

	<h4>Marginal Cost</h4>
	<p>The <strong>Marginal Cost</strong> (<strong>MC</strong>) at \(q\) items is the cost of producing the next item. Really, it’s \[MC(q) = TC(q + 1) - TC(q).\] In many cases, though, it’s easier to approximate this difference using calculus (see Example 1 below). And some sources define the marginal cost directly as the derivative, \[MC(q) = TC'(q).\] In this course, we will use both of these definitions as if they were interchangeable.</p>
	<p>The units on marginal cost is cost per item.</p> 
</div>

<p>Why is it okay that are there two definitions for Marginal Cost (and Marginal Revenue, and Marginal Profit)?</p>
<p>We have been using slopes of secant lines over tiny intervals to approximate derivatives. In this example, we’ll turn that around – we’ll use the derivative to approximate the slope of the secant line.</p>
<p>Notice that the “cost of the next item” definition is actually the slope of a secant line, over an interval of 1 unit: \[MC(q) = C(q + 1) - 1 = \frac{C(q+1)-1}{1}.\]</p>
<p>So this is approximately the same as the derivative of the cost function at q: \[MC(q) = C'(q).\]</p>
<p>In practice, these two numbers are so close that there’s no practical reason to make a distinction. For our purposes, the marginal cost <strong>is</strong> the derivative <strong>is</strong> the cost of the next item.</p>

<div class="example">
	<h4>Example 1</h4>
	<p>The table shows the total cost (TC) of producing \(q\) items.</p>
	<table class="border">
		<tr>
			<td>Items, \( q \)</td>
			<td>TC</td>
		</tr>
		<tr>
			<td>0</td>
			<td>$20,000</td>
		</tr>
		<tr>
			<td>100</td>
			<td>$35,000</td>
		</tr>
		<tr>
			<td>200</td>
			<td>$45,000</td>
		</tr>
		<tr>
			<td>300</td>
			<td>$53,000</td>
		</tr>
	</table>
	<ol class="smlatin">
		<li>What is the fixed cost?</li>
		<li>When 200 items are made, what is the total variable cost? The average variable cost?</li>
		<li>When 200 items are made, estimate the marginal cost.</li>
	</ol>
	<ol class="smlatin">
		<li>The fixed cost is $20,000, the cost even when no items are made.</li>
		<li>
			<p>When 200 items are made, the total cost is $45,000. Subtracting the fixed cost, the total variable cost is $45,000 - $20,000 = $25,000.</p>
			<p>The average variable cost is the total variable cost divided by the number of items, so we would divide the $25,000 total variable cost by the 200 items made. $25,000/200 = $125. On average, each item had a variable cost of $125.</p>
		</li>
		<li>
			<p>We need to estimate the value of the derivative, or the slope of the tangent line at \(q = 200\). Finding the secant line from \(q=100\) to \(q=200\) gives a slope of \[ \frac{45,000-35,000}{200-100}=100.\]</p>
			<p>Finding the secant line from \(q=200\) to \(q=300\) gives a slope of \[\frac{53,000-45,000}{300-200}=80.\]</p>
			<p>We could estimate the tangent slope by averaging these secant slopes, giving us an estimate of $90/item.</p>
			<p>This tells us that after 200 items have been made, it will cost about $90 to make one more item.</p>
		</li>
	</ol>
</div>

<div class="important">
	<h4>Demand</h4>
	<p><strong>Demand</strong> is the functional relationship between the price \(p\) and the quantity \(q\) that can be sold (that is demanded). Depending on your situation, you might think of \(p\) as a function of \(q\), or of \(q\) as a function of \(p\)</p>
	
	<h4>Revenue</h4>
	<p>Your <strong>revenue</strong> is the amount of money you actually take in from selling your products.</p>
	<p>The <strong>Total Revenue</strong> (<strong>TR</strong>, or just <strong>R</strong>) for \(q\) items is the total amount of money you take in for selling \(q\) items. Total Revenue is price multiplied by quantity, \[TR = p \cdot q.\]</p>
	
	<h4>Average Revenue</h4>
	<p>The <strong>Average Revenue</strong> (<strong>AR</strong>) for \(q\) items is the total revenue divided by \(q\), or \[\frac{TR}{q}.\]</p>
	
	<h4>Marginal Revenue</h4>
	<p>The Marginal Revenue (MR) at \(q\) items is the revenue from producing the next item, \[MR(q) = TR(q + 1) - TR(q).\]</p>
	<p>Just as with marginal cost, we will use both this definition and the derivative definition: \[MR(q) = TR'(q).\]</p>
	
	<h4>Profit</h4>
	<p>Your <strong>profit</strong> is what’s left over from total revenue after costs have been subtracted.</p>
	<p>The <strong>Profit</strong> (<strong>P</strong>) for \(q\) items is \[TR(q) - TC(q),\] the difference between total revenue and total costs.</p>
	<p>The <strong>average profit</strong> for \(q\) items is \[\frac{P}{q}.\]</p>
	<p>The <strong>marginal profit</strong> at \(q\) items is \[P(q + 1) – P(q),\] or \[P'(q)\]</p>
</div>

<div class="videoplayer w639">
	<video id="video_2.4.1" class="video-js vjs-default-skin" controls preload="auto" width="639" height="auto">
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-4/general_comments_on_business_applications.mp4" type='video/mp4' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-4/general_comments_on_business_applications.webm" type='video/webm' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

</section>

<section><h2>Graphical Interpretations of the Basic Business Math Terms</h2>
<h3>Illustration</h3>
<p>Here are the graphs of TR and TC for producing and selling a certain item. The horizontal axis is the number of items, in thousands. The vertical axis is the number of dollars, also in thousands.</p>
<figure><img src="images/image035.png" alt="TR TC graph"/></figure>
<p>First, notice how to find the fixed cost and variable cost from the graph here. FC is the \(y\)-intercept of the TC graph. (\(FC = TC(0)\).) The graph of TVC would have the same shape as the graph of TC, shifted down. (\(TVC = TC - FC\).)</p>
<p>We already know that we can find average rates of change by finding slopes of secant lines. AC, AR, MC, and MR are all rates of change, and we can find them with slopes, too.</p>
<p>\(AC(q)\) is the slope of a diagonal line, from (0, 0) to \((q, TC(q))\).</p>
<p>\(AR(q)\) is the slope of the line from (0, 0) to \((q, TR(q))\).</p>
<p>\(MC(q) = TC(q + 1) - TC(q)\), but that’s impossible to read on this graph. How could you distinguish between TC(4022) and TC(4023)? On this graph, that interval is too small to see, and our best guess at the secant line is actually the tangent line to the TC curve at that point. (This is the reason we want to have the derivative definition handy.)</p>
<p>\(MC(q)\) is the slope of the tangent line to the TC curve at \( (q, TC(q))\).</p>
<p>\(MR(q)\) is the slope of the tangent line to the TR curve at \((q, TR(q))\).</p>
<p>Profit is the distance between the TR and TC curve. If you experiment with a clear ruler, you’ll see that the biggest profit occurs exactly when the tangent lines to the TR and TC curves are parallel. This is the rule "profit is maximized when \( MR = MC\)" which we'll explore later in the chapter.</p>

</section>

<section><h2>Rates in Real Life</h2>
<div class="example">
	<h4>Example 2</h4>
	<p>You can estimate a tree’s age in years by multiplying its diameter (measured in inches) by its growth factor (a number that depends on the species). According to the Missouri Department of Conservation, the Growth factor for a cottonwood tree is 2.</p>
	<ol class="smlatin">
		<li>Suppose you find a cottonwood tree in Missouri that is 6 inches in diameter. How old would you estimate it to be?</li>
		<li>What are the units of the growth factor?</li>
		<li>Is this growth factor a derivative?</li>
	</ol>
	<ol class="smlatin">
		<li>The cottonwood tree should be about \(6 \cdot 2 = 12\) years old.</li>
		<li>The units of the growth factor are years per inch (because when we multiply the growth factor by inches, we get years).</li>
		<li>Yes, the growth factor is a derivative. It has fractional units (years per inch), so it represents a rate. In this case, it’s the derivative of the function that gives the age of a tree as a function of its diameter. The function is linear, so the derivative in this case is the constant slope, 2 years per inch.</li>
	</ol>
</div>

<div class="example">
	<h4>Example 3</h4>
	<p>The length of day (that is, daylight) in Seattle is a function of the day of the year. For example, on August 12th, 2012, there were about 14 hours 24 minutes of daylight. In Seattle, August is the summer, approaching the autumnal equinox. The days are decreasing in length by about three minutes per day. So the derivative of this function is about -3 minutes per day. On January 15, 2012, which is wintertime in Seattle, there were about 8 hours 52 minutes of daylight, and the derivative was about (positive) 2 minutes per day; the length of the day was increasing by about 2 minutes a day.</p>
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
			<td><a href="section2-3.php">&larr; Previous Section</a></td>
			<td><a href="section2-5.php">Next Section &rarr; </a></td>
		</tr>
	</table>
</footer>
</div>
</body>
</html>