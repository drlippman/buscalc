<!DOCTYPE html>
<html lang="en">
<?php include '../includes/head.html'; ?>
<body>
<?php include '../includes/geogebra_main_script.html'; ?>
<?php include 'geogebra/exponential_graph_manipulative.html'; ?>
<!--Nav  must come after any GeoGebra script includes-->
<?php include '../includes/nav.html'; ?>
<div class="page-wrap">
<header class="main-nav-buttons">
	<a href="#main-nav" class="open-menu">&equiv; </a>
	<a href="#close-nav" class="close-menu">&times; </a>
	<!--<h1>menu</h1>-->
 </header>

<section class="content">
<h1>Section 1.7: Exponential Functions</h1>
<p>Consider these two companies:</p>
<ul>
	<li>Company A has 100 stores, and expands by opening 50 new stores a year</li>
	<li>Company B has 100 stores, and expands by increasing the number of stores by 50% of their total each year. </li>
</ul>

<p>Company A is exhibiting linear growth. In linear growth, we have a constant rate of change – a constant number that the output increased for each increase in input. For company A, the number of new stores per year is the same each year.</p>

<p>Company B is different – we have a percent rate of change rather than a constant number of stores/year as our rate of change. To see the significance of this difference compare a 50% increase when there are 100 stores to a 50% increase when there are 1000 stores:</p>
<ul>
	<li>100 stores, a 50% increase is 50 stores in that year.</li>
	<li>1000 stores, a 50% increase is 500 stores in that year. </li>
</ul>

<p>Calculating the number of stores after several years, we can clearly see the difference in results.</p>

<table class="border">
	<tr>
		<td>Years</td>
		<td>Company A</td>
		<td>Company B</td>
	</tr>
	<tr>
		<td>2</td>
		<td>200</td>
		<td>225</td>
	</tr>
	<tr>
		<td>4</td>
		<td>300</td>
		<td>506</td>
	</tr>
	<tr>
		<td>6</td>
		<td>400</td>
		<td>1139</td>
	</tr>
	<tr>
		<td>8</td>
		<td>500</td>
		<td>2563</td>
	</tr>
	<tr>
		<td>10</td>
		<td>600</td>
		<td>5767</td>
	</tr>
</table>
<figure>
	<img class="inline" src="images/image072.png" alt="graph"/>
	<figcaption>Graphs of data from A and B, with B fit to a curve.</figcaption>
</figure>

<p>This percent growth can be modeled with an exponential function.</p>

<div class="thmdef">
	<h4>Exponential Function</h4>
	<p>An <strong>exponential growth or decay function</strong> is a function that grows or shrinks at a constant percent growth rate. The equation can be written in the form \[ f(x)=a(1+r)^x\] or \[ f(x)=ab^x\] where \( b=1+r \).</p>
	<p>Where</p>
	<ul>
		<li>\(a\) is the initial or starting value of the function,</li>
		<li>\(r\) is the percent growth or decay rate, written as a decimal,</li>
		<li>\(b\) is the growth factor or growth multiplier. Since powers of negative numbers behave strangely, we limit \(b\) to positive values.</li>
	</ul>
</div>

<div class="videoplayer w639">
	<video id="video_1.7.1" class="video-js vjs-default-skin" controls preload="metadata" width="639" height="auto">
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_1-7/exponential_functions_comments.mp4" type='video/mp4' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_1-7/exponential_functions_comments.webm" type='video/webm' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

<div class="example">
	<h4>Example 1</h4>
	<p>India’s population was 1.14 billion in the year 2008 and is growing by about 1.34% each year. Write an exponential function for India’s population, and use it to predict the population in 2020.</p>
	<p>Using 2008 as our starting time (\(t = 0\)), our initial population will be 1.14 billion. Since the percent growth rate was 1.34%, our value for \(r\) is 0.0134. </p>
	<p>Using the basic formula for exponential growth \(f(x)=a(1+r)^x\) we can write the formula, \[f(t)=1.14(1+0.0134)^{t}\] </p>
	<p>To estimate the population in 2020, we evaluate the function at \(t = 12\), since 2020 is 12 years after 2008: \[f(t)=1.14(1+0.0134)^{12}\approx 1.337 \text{ billion people in 2020.}\]</p>
</div>

<div class="example">
	<h4>Example 2</h4>
	<p>A certificate of deposit (CD) is a type of savings account offered by banks, typically offering a higher interest rate in return for a fixed length of time you will leave your money invested. If a bank offers a 24 month CD with an annual interest rate of 1.2% compounded monthly, how much will a $1000 investment grow to over those 24 months?</p>	
	<p>First, we must notice that the interest rate is an annual rate, but is compounded monthly, meaning interest is calculated and added to the account monthly. To find the monthly interest rate, we divide the annual rate of 1.2% by 12 since there are 12 months in a year: 1.2%/12 = 0.1%. Each month we will earn 0.1% interest. From this, we can set up an exponential function, with our initial amount of $1000 and a growth rate of \( r = 0.001\), and our input \(m\) measured in months: \[f(m)=1000\left(1+\frac{0.012}{12}\right)^m=1000(1.001)^{m}\]</p>
	<p>After 24 months, the account will have grown to \( f(24)=1000(1.001)^{24}\approx \$1024.28 \).</p>
</div>

<div class="example">
	<h4>Example 3</h4>
	<p>Bismuth-210 is an isotope that radioactively decays by about 13% each day, meaning 13% of the remaining Bismuth-210 transforms into another atom (polonium-210 in this case) each day. If you begin with 100 mg of Bismuth-210, how much remains after one week?</p>
	<p>With radioactive decay, instead of the quantity increasing at a percent rate, the quantity is decreasing at a percent rate. Our initial quantity is \(a = 100\) mg, and our growth rate will be negative 13%, since we are decreasing: \( r = -0.13\). This gives the equation \[ Q(d)=100(1-0.13)^d=100(0.87)^d.\] This can also be explained by recognizing that if 13% decays, then 87 % remains.
</p>
	<p>After one week, 7 days, the quantity remaining would be \( Q(7)=100(0.87)^7=37.73 \) mg of Bismuth-210 remains.</p>
</div>

<div class="example">
	<h4>Example 4</h4>
	<p>\(T(q)\) represents the total number of Android smart phone contracts, in thousands, held by a certain Verizon store region measured quarterly since January 1, 2010. Interpret all of the parts of the equation \( T(2)=86(1.64)^2=231.3056 \) .
</p>
	<p>Interpreting this from the basic exponential form, we know that 86 is our initial value. This means that on Jan. 1, 2010 this region had 86,000 Android smart phone contracts. Since \(b = 1 + r = 1.64\), we know that every quarter the number of smart phone contracts grows by 64%. \(T(2) = 231.3056\) means that in the second quarter (or at the end of the second quarter) there were approximately 231,305 Android smart phone contracts.</p>
</div>

<p>When working with exponentials, there is a special constant we must talk about. It arises when we talk about things growing continuously, such as continuous compounding, or natural phenomena like radioactive decay that happen continuously.</p>

<div class="thmdef">
	<h4>Euler’s Number: \(e\)</h4>
	<p>\[e\approx 2.718282\]</p>
</div>

<p>Because \(e\) is often used as the base of an exponential, most scientific and graphing calculators have a button that can calculate powers of \(e\), usually labeled . Some computer software instead defines a function exp(x), where exp(x) = \(e^x\). Since calculus studies continuous change, we will almost always use the \(e\)-based form of exponential equations in this course.</p>

<div class="thmdef">
	<h4>Continuous Growth Formula</h4>
	<p><strong>Continuous growth</strong> can be calculated using the formula \[f(x)=ae^{rx}\] where</p>
	<ul>
		<li>\(a\) is the starting amount,</li>
		<li>\(r\) is the continuous growth rate.</li>
	</ul>
</div>

<div class="example">
	<h4>Example 5</h4>
	<p>Radon-222 decays at a continuous rate of 17.3% per day. How much will 100mg of Radon-222 decay to in 3 days?</p>
	<p>Since we are given a continuous decay rate, we use the continuous growth formula. Since the substance is decaying, we know the growth rate will be negative: \(r = -0.173\), \( f(3)=100e^{-0.173(3)}\approx 59.512 \) mg of Radon-222 will remain.</p>
</div>

<h2>Graphs of Exponential Functions</h2>

<div class="thmdef">
	<h4>Graphical Features of Exponential Functions</h4>
	<p>Graphically, in the function \( f(x)=ab^x \). </p>
	<ul>
		<li>\(a\) is the vertical intercept of the graph.</li>
		<li>\(b\) determines the rate at which the graph grows:
			<ul>
				<li>the function will increase if \(b \gt 1\),</li>
				<li>the function will decrease if \(0 \lt b \lt 1\).</li>
			</ul>
		</li>
		<li>The graph will have a horizontal asymptote at \(y = 0\).</li>
		<li>The graph will be concave up if \(a \gt 0\); concave down if \(a \lt 0\).</li>
		<li>The domain of the function is all real numbers.</li>
		<li>The range of the function is \( (0,\infty) \) if \(a \gt 0\), and \( (-\infty, 0) \) if \(a \lt 0\).</li>
	</ul>
</div>

<p>When sketching the graph of an exponential function, it can be helpful to remember that the graph will pass through the points \((0, a)\) and \((1, ab)\).</p>
<p>The value \(b\) will determine the function’s long run behavior:</p>
<ul>
	<li>If \(b \gt 1\), as \( x\to\infty \), \( f(x)\to\infty \), and as \( x\to -\infty \), \( f(x)\to 0 \).</li>
	<li>If \(0 \lt b \lt 1\), as \( x\to\infty \), \( f(x)\to 0 \), and as \( x\to -\infty \), \( f(x)\to \infty \).</li>
</ul>

<div class="example">
	<h4>Example 6</h4>
	<p>Sketch a graph of \( f(x)=4\left(\frac{1}{3}\right)^x \)</p>
	<p>This graph will have a vertical intercept at (0,4), and pass through the point \( \left(1,\frac{4}{3} \right) \). Since \(b \lt 1\), the graph will be decreasing towards zero. Since \(a \gt 0\), the graph will be concave up.</p>
	<figure><img src="images/image073.png" alt="graph"/></figure>
	<p>We can also see from the graph the long run behavior: as \( x\to\infty \), \( f(x)\to 0 \), and as \( x\to -\infty \), \( f(x)\to \infty \).</p>
</div>

<p>To get a better feeling for the effect of \(a\) and \(b\) on the graph, examine the sets of graphs below. The first set shows various graphs, where \(a\) remains the same and we only change the value for \(b\).  Notice that the closer the value of \(b\) is to 1, the less steep the graph will be.</p>

<figure>
	<img src="images/image074.png" alt="graph"/>
	<figcaption>Changing the value of \( b \). </figcaption>
</figure>

<p>In the next set of graphs, \(a\) is altered and our value for \(b\) remains the same.</p>

<figure>
	<img src="images/image075.png" alt="graph"/>
	<figcaption>Changing the value of \( a \).</figcaption>
</figure>

<p>Notice that changing the value for a changes the vertical intercept.  Since \(a\) is multiplying the \(b^x\) term, \(a\) acts as a vertical stretch factor, not as a shift.  Notice also that the long run behavior for all of these functions is the same because the growth factor did not change and none of these \(a\) values introduced a vertical flip.</p>

<p>Try it for yourself using this applet:</p>
<!--
<div style="width:676px;height:482px;" id="applet_container" class="geogebra"></div>
-->
<div id="jxgexpslider" style="width:400px; height:400px; margin:auto;"></div>
<script type="text/javascript">
  var brd = JXG.JSXGraph.initBoard('jxgexpslider', {boundingbox: [-10, 15, 10, -5], axis:true}),
    a = brd.create('slider',[[2,-2],[7,-2],[0.01,1,10]], {name:'a'}),
    b = brd.create('slider',[[2,-3],[7,-3],[0.01,1.5,3]], {name:'b'}),
    f = brd.create('functiongraph',[function(x){return a.Value()*Math.pow(b.Value(),x);}]);
</script>

<div class="example">
	<h4>Example 7</h4>
	<p>Match each equation with its graph.</p>
	<ul>
		<li>\( f(x)=2(1.3)^x \)</li>
		<li>\( g(x)=2(1.8)^x \)</li>
		<li>\( h(x)=4(1.3)^x \)</li>
		<li>\( k(x)=4(0.7)^x \)</li>
	</ul>
	<figure><img src="images/image076.png" alt="graph"/></figure>
	<p>The graph of \(k(x)\) is the easiest to identify, since it is the only equation with a growth factor less than one, which will produce a decreasing graph.  The graph of \(h(x)\) can be identified as the only growing exponential function with a vertical intercept at (0,4).  The graphs of \(f(x)\) and \(g(x)\) both have a vertical intercept at (0,2), but since \(g(x)\) has a larger growth factor, we can identify it as the graph increasing faster.</p>
	<figure><img src="images/image077.png" alt="graph"/></figure>
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
			<td><a href="section.1-6php">&larr; Previous Section</a></td>
			<td><a href="section1-8.php">Next Section &rarr; </a></td>
		</tr>
	</table>
</footer>
</div>
</body>
</html>