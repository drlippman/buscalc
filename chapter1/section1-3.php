<!DOCTYPE html>
<html lang="en">
<?php include '../includes/head.html'; ?>
<body>
<?php include '../includes/geogebra_main_script.html'; ?>
<?php include 'geogebra/line_slope_intercept_manipulative.html'; ?>
<!--Nav  must come after any GeoGebra script includes-->
<?php include '../includes/nav.html'; ?>
<div class="page-wrap">
<header class="main-nav-buttons">
	<a href="#main-nav" class="open-menu">&equiv; </a>
	<a href="#close-nav" class="close-menu">&times; </a>
	<!--<h1>menu</h1>-->
 </header>

<section class="content">
<h1>Section 1.3: Linear Functions</h1>

<p>As you hop into a taxicab in Allentown, the meter will immediately read $3.30; this is the “drop” charge made when the taximeter is activated. After that initial fee, the taximeter will add $2.40 for each mile the taxi drives. In this scenario, the total taxi fare depends upon the number of miles ridden in the taxi, and we can ask whether it is possible to model this type of scenario with a function. Using descriptive variables, we choose \(m\) for miles and \(C\) for Cost in dollars as a function of miles: \(C(m)\). </p>

<p>We know for certain that \(C(0)=3.30\) , since the $3.30 drop charge is assessed regardless of how many miles are driven. Since $2.40 is added for each mile driven, we could write that if \(m\) miles are driven, \(C(m)=3.30+2.40m\) because we start with a $3.30 drop fee and then for each mile increase we add $2.40.</p>

<p>It is good to verify that the units make sense in this equation. The $3.30 drop charge is measured in dollars; the $2.40 charge is measured in dollars per mile. So
 \[C(m)=3.30\text{ dollars}+\left(2.40\frac{\text{dollars}}{\text{mile}}\right) (m\text{ miles})\]
When dollars per mile are multiplied by a number of miles, the result is a number of dollars, matching the units on the 3.30, and matching the desired units for the C function.</p>

<p>Notice this equation \(C(m)=3.30+2.40m\) consisted of two quantities. The first is the fixed $3.30 charge which does not change based on the value of the input. The second is the $2.40 dollars per mile value, which is a <strong>rate of change</strong>. In the equation this rate of change is multiplied by the input value.</p>

<p>Looking at this same problem in table format we can also see the cost changes by $2.40 for every 1 mile increase:</p>

<table class="border">
	<tr>
		<td>\(m\)</td>
		<td>0</td>
		<td>1</td>
		<td>2</td>
		<td>3</td>
	</tr>
	<tr>
		<td>\(C(m)\)</td>
		<td>3.30</td>
		<td>5.70</td>
		<td>8.10</td>
		<td>10.50</td>
	</tr>
</table>

<p>It is important here to note that in this equation, the <strong>rate of change is constant</strong>; over any interval, the rate of change is the same.</p>
<p>Graphing this equation, \(C(m)=3.30+2.40m\) we see the shape is a line, which is how these functions get their name: <strong>linear functions</strong>. </p>

<figure><img src="images/image047.png" alt="graph"/></figure>

<p>When the number of miles is zero the cost is $3.30, giving the point (0, 3.30) on the graph. This is the vertical or \(C(m)\) intercept. The graph is increasing in a straight line from left to right because for each mile the cost goes up by $2.40; this rate remains consistent.</p>

<div class="thmdef">
	<h4>Linear Function</h4>
	<p>A <strong>linear function</strong> is a function whose graph produces a line. Linear functions can always be written in the form \[f(x)=b+mx\] or \[f(x)=mx+b\] where \(b\) is the initial or starting value of the function (with input \(x = 0\)), and \(m\) is the constant rate of change of the function.</p>
	
	<p>This form of a line is called slope-intercept form of a line.</p>
	
	<p>Many people like to write linear functions in the form \(f(x)=b+mx\) because it corresponds to the way we tend to speak: "The output starts at \(b\) and increases at a rate of \(m\)."</p>
	<p>For this reason alone we will use the \(f(x)=b+mx\) form for many of the examples, but remember they are equivalent and can be written correctly both ways. [While this is the book's convention, in class and in the videos I will likely use \(f(x)=mx+b\).]</p>
</div>

<div class="thmdef">
	<h4>Slope and Increasing/Decreasing</h4>
	<p>\(m\) is the constant rate of change of the function (also called <strong>slope</strong>). The slope determines if the function is an increasing function or a decreasing function.</p>
	<ul>
		<li>\(f(x)=b+mx\) is an <strong>increasing</strong> function if \(m\gt 0\).</li>
		<li>\(f(x)=b+mx\) is a <strong>decreasing</strong> function if \(m\lt 0\).</li>
	</ul>
	<p>If \(m=0\), the rate of change is 0, and the function \(f(x)=b+0x=b\) is just a horizontal line passing through the point (0, b), neither increasing nor decreasing.</p>
</div>

<div class="videoplayer w639">
	<video id="video_1.3.1" class="video-js vjs-default-skin" controls preload="metadata" width="639" height="auto">
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_1-3/anatomy_of_a_line.mp4" type='video/mp4' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_1-3/anatomy_of_a_line.webm" type='video/webm' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

<div class="example">
	<h4>Example 1</h4>
	<p>Marcus currently owns 200 songs in his iTunes collection. Every month, he adds 15 new songs. Write a formula for the number of songs, \(N\), in his iTunes collection as a function of the number of months, \(m\). How many songs will he own in a year?</p>
	<p>The initial value for this function is 200, since he currently owns 200 songs, so \(N(0)=200\). The number of songs increases by 15 songs per month, so the rate of change is 15 songs per month. With this information, we can write the formula:\[N(m)=200+15m.\]</p>
	<p>\(N(m)\) is an increasing linear function.</p>
	<p>With this formula we can predict how many songs he will have in 1 year (12 months): \[N(12)=200+15(12)=200+180=380.\] Marcus will have 380 songs in 12 months.</p>
</div>

<div class="thmdef">
	<h4>Calculating Rate of Change</h4>
	<p>Given two values for the input, \( x_1 \) and \( x_2 \), and two corresponding values for the output, \( y_1 \) and \( y_2 \), or a set of points, \( (x_1,y_1) \) and \( (x_2,y_2) \), if we wish to find a linear function that contains both points we can calculate the rate of change, \(m\):\[m=\dfrac{\text{change in output}}{\text{change in input}}=\dfrac{\Delta y}{\Delta x}=\dfrac{y_2-y_1}{x_2-x_1}.\]</p>
	<p>Rate of change of a linear function is also called the <strong>slope</strong> of the line.</p>
	<p>Note in function notation, \(y_1=f(x_1)\) and \(y_2=f(x_2)\), so we could equivalently write \[m=\dfrac{f(x_2)-f(x_1)}{x_2-x_1}.\]</p>
</div>

<div class="videoplayer w639">
	<video id="video_1.3.2" class="video-js vjs-default-skin" controls preload="metadata" width="639" height="auto">
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_1-3/finding_eqn_of_line.mp4" type='video/mp4' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_1-3/finding_eqn_of_line.webm" type='video/webm' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

<div class="example">
	<h4>Example 2</h4>
	<p>The population of a city increased from 23,400 to 27,800 between 2002 and 2006. Find the rate of change of the population during this time span.</p>
	<p>The rate of change will relate the change in population to the change in time. The population increased by 27800-23400=4400 people over the 4 year time interval. To find the rate of change, the number of people per year the population changed by: \[\dfrac{4400 \text{ people}}{4\text{ years}}=1100\dfrac{\text{people}}{\text{year}}=1100 \text{ people per year}.\]
</p>
	<p>Notice that we knew the population was increasing, so we would expect our value for \(m\) to be positive. This is a quick way to check to see if your value is reasonable.</p>
</div>

<div class="example">
	<h4>Example 3</h4>
	<p>The pressure, \(P\), in pounds per square inch (PSI) on a diver depends upon their depth below the water surface, \(d\), in feet, following the equation \(P(d)=14.696+0.43d\). Interpret the components of this function.</p>
	<p>The rate of change, or slope, 0.434 would have units \(\dfrac{\text{output}}{\text{input}}=\dfrac{\text{pressure}}{\text{depth}}=\dfrac{\text{PSI}}{\text{ft}}\) . This tells us the pressure on the diver increases by 0.434 PSI for each foot their depth increases.</p>
	<p>The initial value, 14.696, will have the same units as the output, so this tells us that at a depth of 0 feet, the pressure on the diver will be 14.696 PSI.</p>
</div>

<p>We can now find the rate of change given two input-output pairs, and could write an equation for a linear function if we had the rate of change and initial value. If we have two input-output pairs and they do not include the initial value of the function, then we will have to solve for it.</p>

<div class="example">
	<h4>Example 4</h4>
	<p>Write an equation for the linear function graphed below.</p>
	<figure><img src="images/image048.png" alt="graph"/></figure>
	<p>Looking at the graph, we might notice that it passes through the points (0, 7) and (4, 4). From the first value, we know the initial value of the function is b = 7, so in this case we will only need to calculate the rate of change: \[m=\dfrac{4-7}{4-0}=\dfrac{-3}{4}\]</p>
	<p>This allows us to write the equation: \[f(x)=7-\frac{3}{4}x\]</p>
</div>

<div class="example">
	<h4>Example 5</h4>
	<p>If \(f(x)\) is a linear function, \(f(3)=-2\), and \(f(8)=1\), find an equation for the function.</p>
	<p>In Example 3, we computed the rate of change to be \(m=\frac{3}{5}\). In this case, we do not know the initial value \(f(0)\), so we will have to solve for it. Using the rate of change, we know the equation will have the form \(f(x)=b+\frac{3}{5}x\). Since we know the value of the function when x = 3, we can evaluate the function at 3: \(f(x)=b+\frac{3}{5}(3)\). Since we know that \(f(3)=-2\), we can substitute on the left side: \(-2=b+\frac{3}{5}(3)\). This leaves us with an equation we can solve for the initial value: \(b=-2-\frac{9}{5}=-\frac{19}{5}\).</p>
	<p>Combining this with the value for the rate of change, we can now write a formula for this function:\[f(x)=-\frac{19}{5}+\frac{3}{5}x.\]</p>
</div>

<p>As an alternative to the approach used above to find the initial value, b, we can use the <strong>point-slope</strong> form of a line instead.</p>

<div class="thmdef">
	<h4>Point-Slope Equation of a Line</h4>
	<p>An equation for the line passing through the point \((x_1, y_1)\) with slope m can be written as \[y-y_1=m(x-x_1)\]</p>
	<p>This is called the <strong>point-slope form of a line</strong>. It is a little easier to write if you know a point and the slope, but requires a bit of work to rewrite into slope-intercept form, and requires memorizing another formula.</p>
</div>

<div class="videoplayer w639">
	<video id="video_1.3.3" class="video-js vjs-default-skin" controls preload="metadata" width="639" height="auto">
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_1-3/line_example.mp4" type='video/mp4' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_1-3/line_example.webm" type='video/webm' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

<div class="example">
	<h4>Example 6</h4>
	<p>Working as an insurance salesperson, Ilya earns a base salary and a commission on each new policy, so Ilya’s weekly income, \(I\), depends on the number of new policies, n, he sells during the week. Last week he sold 3 new policies, and earned $760 for the week. The week before, he sold 5 new policies, and earned $920. Find an equation for \(I(n)\), and interpret the meaning of the components of the equation.</p>
	
	<p>The given information gives us two input-output pairs: (3,760) and (5,920). We start by finding the rate of change: \[m=\dfrac{920-760}{5-3}=\dfrac{160}{2}=80.\] </p>
	
	<p>Keeping track of units can help us interpret this quantity. Income increased by $160 when the number of policies increased by 2, so the rate of change is $80 per policy; Ilya earns a commission of $80 for each policy sold during the week.</p>
	
	<p>We can now write the equation using the point-slope form of the line, using the slope we just found and the point (3,760): \[I-760= 80(n-3)\]</p>
	
	<p>If we wanted this in function form (slope intercept form), we could rewrite the equation into that form:
	\begin{align*}
		I-760=&amp; 80(n-3)\\
		I-760=&amp; 80n-240\\
		I(n)=&amp; 520+80n 
	\end{align*}</p>
	
	<p>This form allows us to see the starting value for the function: 520. This is Ilya’s income when n = 0, which means no new policies are sold. We can interpret this as Ilya’s base salary for the week, which does not depend upon the number of policies sold. </p>
	
	<p>Our final interpretation is: Ilya’s base salary is $520 per week and he earns an additional $80 commission for each policy sold each week.</p>
</div>

<h2>Graphs of Linear Functions</h2>

<div class="thmdef">
	<h4>Graphical Interpretation of a Linear Equation</h4>
	<p>Graphically, in the equation \(f(x)=b+mx\),</p>
	<ul>
		<li>\(b\) is the <strong>vertical intercept</strong> of the graph and tells us we can start our graph at \((0, b)\)</li>
		<li>and \(m\) is the <strong>slope of the line</strong> and tells us how far to rise and run to get to the next point.</li>
	</ul>
	<p>Once we have at least 2 points, we can extend the graph of the line to the left and right.</p>
</div>

<div class="example">
	<h4>Example 7</h4>
	<p>Graph \(f(x)=5-\frac{2}{3}x\) using the vertical intercept and slope.</p>
	<p>The vertical intercept of the function is (0, 5), giving us a point on the graph of the line. 
The slope is \(-\frac{2}{3}\). This tells us that for every 3 units the graph "runs" in the horizontal, the vertical "rise" decreases by 2 units. In graphing, we can use this by first plotting our vertical intercept on the graph, then using the slope to find a second point. From the initial value (0, 5) the slope tells us that if we move to the right 3, we will move down 2, moving us to the point (3, 3). We can continue this again to find a third point at (6, 1). Finally, extend the line to the left and right, containing these points.</p>
	<figure><img src="images/image049.png" alt="graph"/></figure>
</div>

<p>Another option for graphing is to use transformations of the identity function \(f(x)=x\). In the equation \(f(x)=mx\), the \(m\) is acting as the vertical stretch of the identity function. When \(m\) is negative, there is also a vertical reflection of the graph. Looking at some examples will also help show the effect of slope on the shape of the graph:</p>
<figure><img src="images/image050.png" alt="graph"/><figcaption>\(f(x)=mx\) for several values of \(m\).</figcaption></figure>

<p>In \(f(x)=mx+b\), the \(b\) acts as the vertical shift, moving the graph up and down without affecting the slope of the line. Some examples:</p>
<figure><img src="images/image051.png" alt="graph"/><figcaption>\(f(x)=mx+b\) for several values of \(b\).</figcaption></figure>

<p>Try it for yourself using this applet:</p>
<div style="width:676px;height:482px;" id="applet_container" class="geogebra"></div>

<div class="example">
	<h4>Example </h4>
	<p>Match each equation with one of the lines in the graph below
	\begin{align*}
		f(x)=&amp; 2x+3\\
		g(x)=&amp; 2x-3\\
		h(x)=&amp; -2x+3\\
		j(x)=&amp; \frac{1}{2}x+3
	\end{align*}
	</p>
	<figure><img src="images/image052.png" alt="graph"/></figure>
	<p>Only one graph has a vertical intercept of -3, so we can immediately match that graph with \(g(x)\). For the three graphs with a vertical intercept at 3, only one has a negative slope, so we can match that line with \(h(x)\). Of the other two, the steeper line would have a larger slope, so we can match that graph with equation \(f(x)\), and the flatter line with the equation \(j(x)\).</p>
	<figure><img src="images/image095.png" alt="graph"/></figure>
</div>

<p>In addition to understanding the basic behavior of a linear function (increasing or decreasing, recognizing the slope and vertical intercept), it is often helpful to know the horizontal intercept of the function – where it crosses the horizontal axis.</p>

<div class="thmdef">
	<h4>Finding Horizontal Intercept</h4>
	<p>The <strong>horizontal intercept</strong> of the function is where the graph crosses the horizontal axis. If a function has a horizontal intercept, you can always find it by solving \(f(x)=0\).</p>
</div>

<div class="example">
	<h4>Example 9</h4>
	<p>Find the horizontal intercept of \(f(x)=-3+\frac{1}{2}x\)</p>
	<p>Setting the function equal to zero to find what input will put us on the horizontal axis:
	\begin{align*}
		0=&amp; -3+\frac{1}{2}x\\
		3=&amp; \frac{1}{2}x\\
		x=&amp; 6
	\end{align*}
	Thus the graph crosses the horizontal axis at (6,0).</p>
</div>

<h3>Intersections of Lines</h3>
<p>The graphs of two lines will intersect if they are not parallel. They will intersect at the point that satisfies both equations. To find this point when the equations are given as functions, we can solve for an input value so that \(f(x)=g(x)\). In other words, we can set the formulas for the lines equal, and solve for the input that satisfies the equation.</p>

<p>Economics tells us that in a free market, the price for an item is related to the quantity that producers will supply and the quantity that consumers will demand. Increases in prices will decrease demand, while supply tends to increase with prices. Sometimes supply and demand are modeled with linear functions.</p>

<div class="example">
	<h4>Example 10</h4>
	<p>The supply, in thousands of items, for custom phone cases can be modeled by the equation ,\(s(p)=0.5+1.2p\) while the demand can be modeled by \(d(p)=8.7-0.7p\), where \(p\) is in dollars. Find the equilibrium price and quantity, the intersection of the supply and demand curves.</p>
	<p>Setting \(s(p)=d(p)\), we find 
	\begin{align*}
		0.5+1.2p=&amp; 8.7-0.7p\\
		1.9p=&amp; 8.2\\
		p\approx&amp; \$4.32 
	\end{align*}
	</p>
	<p>We can find the output value of the intersection point by evaluating either function at this input: \[s(4.32)=0.5+1.2(4.32)\approx 5.68\]</p>
	<p>These lines intersect at the point (4.32, 5.68). Looking at the graph, this result seems reasonable.</p>
	<figure><img src="images/image053.png" alt="intersecting graphs"/></figure>
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
			<td><a href="section1-2.php">&larr; Previous Section</a></td>
			<td><a href="section1-4.php">Next Section &rarr; </a></td>
		</tr>
	</table>
</footer>
</div>
</body>
</html>