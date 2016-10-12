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

<section class="content"><h1>Chapter 4: Functions of Two Variables</h1>

<section><h2>Pre-Calculus Idea &ndash; Topological Maps</h2>

<p>If you’ve ever hiked, you have probably seen a topographical map. Here is part of a topographic map of Stowe, Vermont.</p>

<figure>
	<img src="images/image001.png" alt="topographical map"/>
	<figcaption>(Figure courtesy of United States Geological Survey and <a href="http://en.wikipedia.org/wiki/File:Topographic_map_example.png">http://en.wikipedia.org/wiki/File:Topographic_map_example.png</a>.)</figcaption>
</figure>

<p>Points with the same elevation are connected with curves, so you can read not only your east-west and your north-south location, but also your elevation. You may have also seen weather maps that use the same principle &ndash; points with the same temperature are connected with curves (isotherms), or points with the same atmospheric pressure are connected with curves (isobars). These maps let you read not only a places location but also its temperature or atmospheric pressure.</p>

<p>In this chapter, we will use that same idea to make graphs of functions of two variables.</p>

</section>

<section><h1>Section 4.1: Functions of Two Variables</h1>
<section><h2>Introduction</h2>

<p>Real life is rarely as simple as one input / one output. Many relationships depend on lots of variables. Examples:</p>

<ul>
	<li>If I put a deposit into an interest-bearing account and let it sit, the amount I have at the end of 3 years depends on \(P\) (how much my initial deposit is), \(r\) (the annual interest rate), and \(n\) (the number of compoundings per year).</li>
	<li>The air resistance on a wing in a wind tunnel depends on the shape of the wing, the speed of the wind, the wing's orientation (pitch, yaw, and roll), plus a myriad of other things that I can't begin to describe.</li>
	<li>The amount of your television cable bill depends on which basic rate structure you have chosen and how many pay-per-view movies you ordered.</li>
</ul>

<p>Since the real world is so complicated, we want to extend our calculus ideas to functions of several variables.</p>
</section>

<section><h2>Functions of Two Variables</h2>

<p>If \( x_1, x_2, x_3, \dots, x_n \) are real numbers, then \( (x_1, x_2, x_3, \dots, x_n) \) is called an \(n\)-tuple. This is an extension of ordered pairs and triples. A function of n variables is a function whose domain is some set of \(n\)-tuples and whose range is some set of real numbers.</p>

<p>For much of what we do here, everything will work the same whether we were working with 2, 3, or 47 variables. Because we're trying to keep things a little bit simpler, we'll concentrate on functions of two variables.</p>

<div class="important">
	<h4>A Function of Two Variables</h4>
	<p>A function of two variables is a function, that is, to each input is associated exactly one output.</p>
	<p>The <em>inputs</em> are ordered pairs, \((x, y)\). The outputs are real numbers (each output is a single real number). The domain of a function is the set of all possible inputs (ordered pairs); the range is the set of all possible outputs (real numbers).</p>
	<p>The function can be written \(z = f(x,y)\).</p>
	<p>Functions of two variables can be described numerically (a table), graphically, algebraically (a formula), or in English.</p>
	<p>We will often now call the familiar \(y = f(x)\) a function of one variable.</p>
</div>

<div class="example">
	<h4>Example 1</h4>
	<p>The cost of renting a car depends on how many days you keep it and how far you drive. Represent this using a function.</p>
	<p>Let \(d\) be the number of days you rent the car, and \(m\) be the number of miles you drive. Then the cost of the car rental \(C(d, m)\) is a function of two variables.</p>
</div>

<div class="example">
	<h4>Example 2</h4>
	<p>The demand for hot dog buns depends on the price for the hot dog buns and also on the price for hot dogs. Represent this as a function.</p>
	<p>The demand \( q_B=f\left(p_B,p_D \right) \) is a function of two variables. (The demand for hot dogs also depends on the price of both dogs and buns).</p>
</div>

<div class="videoplayer w639">
	<video id="video_4.1.1" class="video-js vjs-default-skin" controls preload="metadata" width="639" height="auto">
		<source src="video_4-1/intro_to_func_several_vars.webm" type='video/webm' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_4-1/intro_to_func_several_vars.mp4" type='video/mp4' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

</section>

<section><h2>Formulas and Tables</h2>
<p>Just as in the case of functions of one variable, we can display a function of two variables in a table. The two inputs are shown in the margin (top row, left column), and the outputs are shown in the interior cells.</p>

<div class="example">
	<h4>Example 3</h4>
	<p>Here is a table that shows the cost \(C(d, m)\) in dollars for renting a car for \(d\) days and driving it \(m\) miles:</p>
	<table class="border">
		<tr>
			<td>\( d \) (labels in left column), \( m \) (labels in top row)</td>
			<td>100</td>
			<td>200</td>
			<td>300</td>
			<td>400</td>
		</tr>
		<tr>
			<td>1</td>
			<td>55</td>
			<td>70</td>
			<td>85</td>
			<td>100</td>
		</tr>
		<tr>
			<td>2</td>
			<td>95</td>
			<td>110</td>
			<td>125</td>
			<td>140</td>
		</tr>
		<tr>
			<td>3</td>
			<td>135</td>
			<td><em>150</em></td>
			<td>165</td>
			<td>180</td>
		</tr>
	</table>
	<ol class="smlatin">
		<li>What is the cost of renting a car for 3 days and driving it 200 miles?</li>
		<li>What is \(C(100, 4)\)? What is \(C(4, 100)\)?</li>
		<li>Suppose we rent the car for three days. Is \(C\) an increasing function of miles?</li>
	</ol>
	<ol class="smlatin">
		<li>According to the table, renting the car for three days (row with \(d = 3\)) and driving it 200 miles (column with \(m = 200\)) will cost $150 (italicized in the table).</li>
		<li>Careful now &ndash; the input is an <em>ordered</em> pair, so in \(C(100, 4)\), the 100 has to be a value of \(d\) and the 4 has to be a value of \(m\). \(C(100, 4)\) would be the cost of renting a car for 100 days and driving it 4 miles. That cost is not in the table. (And that would be a pretty silly way to rent a car.) On the other hand, \(C(4, 100)\) is the cost of renting for 4 days and driving 100 miles &ndash; the table says that would cost $175.</li>
		<li><p>If we know that \(d\) is fixed at 3, we're looking at \(C(3, m)\). This is now a function of one variable: just \(m\). We can see the table that displays values of this function by focusing our attention on just the row where \(d = 3\):</p>
		<table class="border">
			<tr>
				<td>\( d \) (label in left column), \( m \) (labels in top row)</td>
				<td>100</td>
				<td>200</td>
				<td>300</td>
				<td>400</td>
			</tr>
			<tr>
				<td>3</td>
				<td>135</td>
				<td><em>150</em></td>
				<td>165</td>
				<td>180</td>
			</tr>
		</table>
		<p>Now we can see that if we rent for 3 days, the cost appears to be an increasing function of the number of miles we drive, which shouldn't be surprising.</p>
		</li>
	</ol>
</div>

<p>The idea of fixing one variable and watching what happens to the function as the other varies will come up again and again.</p>

<p>It's hard to display a function of more than two variables in a table. But it's convenient to work with formulas for functions of two variables, or as many variables as you like.</p>

<div class="example">
	<h4>Example 4</h4>
	<p>The cost \(C(d,m)\) in dollars for renting a car for \(d\) days and driving it \(m\) miles is given by the formula \[ C(d,m)=40d+0.15m. \]</p>
	<ol class="smlatin">
		<li>What is the cost of renting a car for 3 days and driving it 200 miles?</li>
		<li>What is \(C(100, 4)\)? What is \(C(4, 100)\)?</li>
		<li>Suppose we rent the car for 3 days. Is \(C\) an increasing function of miles?</li>
	</ol>
	<ol class="smlatin">
		<li>\( C(3,200)=40(3)+0.15(200)=\$150 \). This is the same value we got from the table. The formula will give us the same answers for any of the table values.</li>
		<li>\(C(100, 4)\) makes perfect sense to the formula (even if it doesn't make sense for actually renting a car). So now we can get an answer. To rent the car for 100 days and drive it for 4 miles should cost $4000.60. \(C(4, 100) = \$175\), as before.</li>
		<li>If we fix \(d = 3\), then \(C(d, m)\) becomes \(C(3, m) = 40(3) + 0.15m = 120 + 0.15m\). Yes, this is an increasing function of \(m\) &ndash; we can tell because it's linear and its slope is \(0.15 \gt 0\).</li>
	</ol>
</div>

<p>Reality check &ndash; the formula that gives the cost for the rental car makes sense for all values of \(d\) and \(m\). But that's not how the real cost works &ndash; you can't rent the car for a negative number of days or drive a negative number of miles. (That is, there are domain restrictions.) In addition, most car rental agreements don't compute a charge for fractions of days; they round up to the next whole number of days.</p>

<div class="videoplayer w639">
	<video id="video_4.1.2" class="video-js vjs-default-skin" controls preload="metadata" width="639" height="auto">
		<source src="video_4-1/evaluating_func_several_vars.webm" type='video/webm' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_4-1/evaluating_func_several_vars.mp4" type='video/mp4' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

<div class="example">
	<h4>Example 5</h4>
	<p>Let \( f(x,y,z,w)=35x^2w-\frac{1}{z}+yz^2 \). Evaluate \( f(0,1,2,3) \).</p>
	<p>Remember that this is an ordered 4-tuple; make sure the numbers get substituted into the correct places: \[ f(0,1,2,3)=35(0)^2(3)-\frac{1}{2}+(1)(2)^2=3.5 \]</p>
</div>

</section>

<section><h2>Graphs </h2>

<p>The graph of a function of two variables is a surface in three-dimensional space. Let's start by looking at the 3-dimensional rectangular coordinate system, how to locate points in three dimensions, and distance between points in three dimensions.</p>

<p>In the 2-dimensional rectangular coordinate system we have two coordinate axes that meet at right angles at the origin, and it takes two numbers, an ordered pair \((x, y)\), to specify the rectangular coordinate location of a point in the plane (two dimensions).</p>
<figure><img src="images/image002.png" alt="2D coords"/></figure>
<p>Each ordered pair \((x, y)\) specifies the location of exactly one point, and the location of each point is given by exactly one ordered pair \((x, y)\). The \(x\) and \(y\) values are the coordinates of the point \((x, y)\).</p>

<p>The situation in three dimensions is very similar. In the 3-dimensional rectangular coordinate system we have three coordinate axes that meet at right angles, and three numbers, an ordered triple \((x, y, z)\), are needed to specify the location of a point.</p>
<figure><img src="images/image003.png" alt="3D coords"/></figure>
<p>Each ordered triple \((x, y, z)\) specifies the location of exactly one point, and the location of each point is given by exactly one ordered triple \((x, y, z)\). The \(x\), \(y\), and \(z\) values are the coordinates of the point \((x, y, z)\). The figure below shows the location of the point (4, 2, 3).</p>
<figure><img src="images/image004.png" alt="Point (4,2,3)"/></figure>

<p>Typically we use a right-hand orientation. To see what this means, imagine your right hand in front hand in front of you with the palm toward your face, your thumb pointing up, you index finger straight out, and your next finger toward your face (and the two bottom fingers bent into the palm). Then, in the right hand coordinate system, your thumb points along the positive \(z\)-axis, your index finger along the positive \(x\)-axis, and the other finger along the positive \(y\)-axis.</p>
<figure><img src="images/image005.png" alt="hand"/></figure>
<p>Other orientations of the axes are possible and valid (with appropriate labeling), but the right-hand system is the most common orientation and is the one we will generally use. If another orientation is used, then the axes will be explicitly labeled.</p>

<p>Each ordered triple \((x, y, z)\) specifies the location of a single point, and this location point can be plotted by locating the point \((x, y, 0)\) on the \(xy\)-plane and then going up \(z\) units (the red path in the figure below).</p>
<figure><img src="images/image006.png" alt="Plotting"/></figure>
<p>We could also get to the same \((x, y, z)\) point in other ways. For instance, we could start by finding the point \((x, 0, z)\) on the \(xz\)-plane and then going \(y\) units parallel to the \(y\)-axis, or by finding \((0, y, z)\) on the \(yz\)-plane and then going \(x\) units parallel to the \(x\)-axis (the blue path in the figure above).</p>

<div class="example">
	<h4>Example 6</h4>
	<p>Plot the locations of the points</p>
	<ul>
		<li>\( P=(0,3,4) \),</li>
		<li>\( Q=(2,0,4) \),</li>
		<li>\( R=(1,4,0) \),</li>
		<li>\( S=(3,2,1) \), and</li>
		<li>\( T=(-1,2,1) \).</li>
	</ul>
	<p>The points are shown below.</p>
	<figure><img src="images/image007.png" alt="Points"/></figure>
</div>

<p>Once we can locate points, we can begin to consider the graphs of various collections of points. By the graph of <q>\(z = 2\)</q> we mean the collection of all points \((x, y, z)\) which have the form <q>\((x, y, 2)\)</q>. Since no condition is imposed on the \(x\) and \(y\) variables, they take all possible values. The graph of \(z = 2\) is a plane parallel to the \(xy\)-plane and 2 units above the \(xy\)-plane. Similarly, the graph of \(y = 3\) is a plane parallel to the \(xz\)-plane, and \(x = 4\) is a plane parallel to the \(yz\)-plane. (Note: The planes have been drawn as rectangles, but they actually extend infinitely far.)</p>
<figure><img src="images/image008.png" alt="Plane"/><img src="images/image009.png" alt="Planes"/></figure>

<div class="videoplayer w639">
	<video id="video_4.1.3" class="video-js vjs-default-skin" controls preload="metadata" width="639" height="auto">
		<source src="video_4-1/graphs_of_multi_var_funcs.webm" type='video/webm' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_4-1/graphs_of_multi_var_funcs.mp4" type='video/mp4' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

<h3>Distance Between Points</h3>
<p>In two dimensions we can think of the distance between points as the length of the hypotenuse of a right triangle, and that leads to the Pythagorean formula: \[ \text{distance}=\sqrt{\Delta x^2+\Delta y^2}. \]</p>
<figure><img src="images/image010.png" alt="2D distance"/></figure>
<p>In three dimensions we can also think of the distance between points as the length of the hypotenuse of a right triangle.</p>
<figure><img src="images/image011.png" alt="3D distance"/></figure>
<p>In this situation the calculations may appear more complicated, but they are straightforward and the final formula is what we hope it would be given the 2-dimensional formula: 
	\[ \begin{align*}
		\text{distance}^2=&amp; \text{base}^2+\text{height}^2 \\
		=&amp; \left(\sqrt{\Delta x^2+\Delta y^2}\right)^2+\Delta z^2 \\
		=&amp; \Delta x^2+\Delta y^2+\Delta z^2
	\end{align*} \]
so \[ \text{distance}=\sqrt{\Delta x^2+\Delta y^2+\Delta z^2}. \]</p>

<div class="important">
	<h4>Distance in 3-Dimensions</h4>
	<p>If \(P = (x_1 , y_1 , z_1 )\) and \(Q = (x_2 , y_2 , z_2 )\) are points in space, then the distance between \(P\) and \(Q\) is 
		\[ \begin{align*}
			\text{distance}=&amp; \sqrt{\Delta x^2+\Delta y^2+\Delta z^2} \\
			=&amp; \sqrt{\left(x_2-x_1\right)^2+\left(y_2-y_1\right)^2+\left(z_2-z_1\right)^2}
		\end{align*} \]
	</p>
</div>

<p>The 3-dimensional pattern is very similar to the 2-dimensional pattern with the additional piece \( \Delta z^2 \).</p>

<div class="example">
	<h4>Example 7</h4>
	<p>Find the distances between points \(A = (1, 2, 3)\) and \(B = (7, 5, –3)\).</p>
	<p>\[ \text{Dist}(A,B)=\sqrt{6^2+3^2+(-6)^2}=\sqrt{36+9+36}=\sqrt{81}=9. \]</p>
</div>

<p>In two dimensions, the set of points at a fixed distance from a given point is a circle, and we used the distance formula to determine equations describing circles: the circle with center (2, 3) and radius 5 is given by \((x–2)^2 + (y–3)^2 = 5^2\) or \(x^2 + y^2 – 4x – 6y = 12\).</p>
<figure><img src="images/image012.png" alt="Circle"/></figure>

<p>The same ideas work for spheres in three dimensions.</p>

<div class="important">
	<h4>Spheres</h4>
	<p>The set of points \((x, y, z)\) at a fixed distance \(r\) from a point \((a, b, c)\) is a sphere with center \((a, b, c)\) and radius \(r\).</p>
	<figure><img src="images/image013.png" alt="Sphere"/></figure>
	<p>The sphere is given by the equation \[ (x-a)^2+(y-b)^2+(z-c)^2=r^2. \]</p>
</div>

<div class="videoplayer w639">
	<video id="video_4.1.4" class="video-js vjs-default-skin" controls preload="metadata" width="639" height="auto">
		<source src="video_4-1/distance_and_spheres.webm" type='video/webm' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_4-1/distance_and_spheres.mp4" type='video/mp4' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

<div class="example">
	<h4>Example 8</h4>
	<p>Write the equations of a sphere with center (2, -3, 4) and radius 3.</p>
	<p>The equation is \[ (x-2)^2+(y+3)^2+(z-4)^2=3^2. \]</p>
</div>

<p>Now suppose that we want to graph a surface. We can think of each input \((x,y)\) as a location on the plane, and plot the point \(f(x,y)\) units above that point. Graphing that can be challenging. We have a few options:</p>
<ol>
	<li><p>Use a computer program (such as GeoGebra or Mathematica) to draw beautiful perspective drawings.</p>
	<figure><img src="images/image014.png" alt="Graph"/></figure>
	<p>If such a program is available, then this is usually the most accurate option.</p>
	</li>
	<li>Try to draw a perspective drawing by hand. This is very challenging, and usually not worth the effort.</li>
	<li>Use level curves to draw <strong>contour diagrams</strong> (or <strong>contour maps</strong>), which is the approach we'll focus on here. A contour diagram is like a topographical map &ndash; points with the same elevation (outputs) are connected with curves. Each particular output is called a <em>level</em>, and these curves are called <em>level curves</em> or <em>contours</em>. The closer the curves are to each other, the steeper that section of the surface. Topographical maps give hikers information about elevation, steep and shallow grades, peaks and valleys. Contour diagrams give us the same kind of information about a function.</li>
</ol>

<p>Below is a contour diagram of the same surface shown in above. The level curves are graphs in the \(xy\)-plane of curves \(f(x, y) = c\) for various constants \(c\).</p>
<figure><img src="images/image015.png" alt="Contour map"/></figure>

<p>Each of the squares corresponds to one of the bumps on the surface. If the contours are positive, as highlighted below, the bump is above the \(xy\)-plane. If the contours are negative, the bump extends below the \(xy\)-plane.</p>
<figure><img src="images/image016.png" alt="Contour map"/></figure>
<p>Everywhere on the crisscrossed pattern of diagonal lines, the height of the surface is 0, so the surface is on the \(xy\)-plane. This is a feature that we wouldn't necessarily have seen when we looked at the perspective drawing. Contour maps can help us see features of the surface that the 3-dimensional graph doesn't show.</p>
<figure><img src="images/image017.png" alt="Contour map"/></figure>

<p>To better understand contour diagrams, suppose we had a table of elevation data. We could graph this by plotting the height at each point and connecting the dots with smooth curves, which would result in the something like the graph shown.</p>
<figure><img src="images/image018.png" alt="Table"/><img src="images/image019.png" alt="Surface"/></figure>

<p>If we <q>slice</q> the surface above with the plane \(z = 8\), the points where the plane cuts the surface are those points where the elevation of the surface is 8 units above the \(xy\)-plane. The figure below shows the surface being sliced by the planes \(z = 8\) and \(z = 4\). Slicing the surface at different elevations and sketching the curves where the plane intersects the surface results in the second graph below.</p>
<figure><img src="images/image020.png" alt="Slices"/><img src="images/image021.png" alt="Level curves"/></figure>

<p>If we move all of those curves to the xy–plane (or, equivalently, view them from directly overhead), the result is a 2-dimensional graph of the level curves of the original surface. This is the contour diagram.</p>
<figure><img src="images/image022.png" alt="Contour map"/></figure>

<div class="videoplayer w639">
	<video id="video_4.1.5" class="video-js vjs-default-skin" controls preload="metadata" width="639" height="auto">
		<source src="video_4-1/contour_plots.webm" type='video/webm' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_4-1/contour_plots.mp4" type='video/mp4' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

<div class="example">
	<h4>Example 9</h4>
	<p>Create a contour diagram for our car rental example with cost function \( C(d,m)=40d+0.15m \). Draw curves for when the cost is 0, 100, 200, 300, and 400.</p>
	<p>We'll set \( C(d,m)=40d+0.15m=c \) for
 \(c =\) 0, 100, 200, 300, and 400 and draw the curves in the \(dm\)-plane.</p>
	<p>The first coordinate of the ordered pair is \(d\), so the \(d\)-axis will be horizontal; the \(m\)-axis will be vertical. Remember that the domain for this function is really just where \(d \geq 0\) and \(m \geq 0\), so we will only draw the curves in the first quadrant.</p>
	<p>When \( c=0 \):
		\[ \begin{align*}
			C(d,m)=&amp; 40d+0.15m=0 \\
			0.15m=&amp; -40d \\
			m=&amp; -\frac{40}{0.15}d\approx -267d
		\end{align*} \]
	</p>
	<p>This is the equation of a line, with slope about -267, passing through the origin. Because of the domain restrictions, the <q>curve</q> we will draw for this level is simply the origin. Putting this back into the car rental context, the only point where we pay $0 for renting the car is when we rent the car for 0 days and drive it 0 miles &ndash; that is, if we don't rent it at all.</p>
	<p>When \( c=100 \):
		\[ \begin{align*}
			C(d,m)=&amp; 40d+0.15m=100 \\
			0.15m=&amp; -40d+100 \\
			m=&amp; -\frac{40}{0.15}d+\frac{100}{0.15}\approx -267d+667
		\end{align*} \]
	</p>
	<p>This is the equation of a line, with slope about -267, and \(d\)-intercept of about 667. This section of this line that lies in the first quadrant is shown with 100 labeling it.</p>
	<p>Putting this into context, any point on that line represents a \((d, m)\) combination of days and miles that will make the cost exactly $100. So, for example &ndash; if we rent the car for 0 days and drive it 667 miles, it will cost us $100. If we rent the car for 2.5 days and don't drive any miles, it will cost us $100.</p>
	<p>We continue for \(c =\) 200, 300, and 400 and sketch the curves in the plane, resulting in the contour diagram shown to the right.</p>
	<figure><img src="images/image023.png" alt="Contour map"/></figure>
</div>

<div class="example">
	<h4>Example 10</h4>
	<p>The contour diagram for the cost \(C(d,m)\) in dollars for renting a car for \(d\) days and driving it \(m\) miles is shown in the previous example. Use the diagram to answer the following questions.</p>
	<ol class="smlatin">
		<li>What is the cost of renting a car for 3 days and driving it 200 miles?</li>
		<li>What is \(C(100, 4)\)? What is \(C(4, 100)\)?</li>
		<li>Suppose we rent the car for 3 days. Is \(C\) an increasing function of miles?</li>
	</ol>
	<ol class="smlatin">
		<li>
			<p>The point (3, 200) is between contours on this graph, so we can’t get an exact answer for \(C(3, 200)\). (But it’s typical for a graph that we would have to estimate). It looks to me as if (3, 200) is halfway between the 100 and the 200 contours, so let's estimate that \(C(3, 200)\) is about $150.</p>
			<p>Estimates from the graph are necessarily very rough. The graph only shows a little information (in this way, a contour diagram is like a table), so we have to extrapolate in between. But for most graphs, we don’t actually know what happens between the contours. All we know for sure is that the output at (3, 200) is between the two levels we see. For this car rental example, we also know a formula, and my table showed this particular input, so we have other ways to get a better answer.</p>
		</li>
		<li>We can't find (100, 4) on this diagram, so we can't make an estimate of \(C(100, 4)\) from this graph. (4, 100) lies between the contours for 100 and 200. It looks closer to 200, so let's estimate that \(C(4, 100)\) is about $180.		</li>
		<li>
			<p>If we fix \(d = 3\), we get a vertical line. What happens as \(m\) increases on this vertical line? As \(m\) increases, the function values shown on the contours increase, so \(C\) appears to be an increasing function of miles.</p>
			<figure><img src="images/image024.png" alt="Contour map"/></figure>
		</li>
	</ol>
</div>

<div class="example">
	<h4>Example 11</h4>
	<p>Here is a contour diagram for a function \(g(x,y)\).</p>
	<figure><img src="images/image025.png" alt="Contour map"/></figure>
	<p>Use the diagram to answer the following questions:</p>
	<ol class="smlatin">
		<li>What is \(g(3, 5)\)?</li>
		<li>What is the highest point shown on the diagram? What is the lowest point shown?</li>
		<li>If you start at (3, 5) and head in the positive \(x\) direction, do you go uphill or downhill first?</li>
	</ol>
	<ol class="smlatin">
		<li>
			<p>\(g(3, 5)\) is 0.6. We can tell because the point is right on one of the contours, as illustrated in the image below.</p>
			<figure><img src="images/image026.png" alt="Contour with points"/></figure>
		</li>
		<li>The highest contour shown is 0.9, and there would be a contour for 1.0 if the surface had ever got that high. However, the height seems to be increasing as we move in toward the center, so it appears that \(g\) gets to nearly 1 in the center. The lowest contour is 0.1. But again, we will guess that the height continues to decrease, so it appears that \(g\) is nearly 0 around the outside.</li>
		<li>Starting at the point (3, 5, 0.6) on the surface and traveling to the right along the horizontal line shown in the previous part, we would cross the contour for 0.7 next. So the function increases first (we go uphill), and then decreases again.</li>
	</ol>
	<p>Again, remember that we don't really know what happens between the contours. All we can do is estimate from the information in the graph.</p>
</div>

<div class="example">
	<h4>Example 12</h4>
	<p>Here is a contour diagram for a function \(F(x,y)\).</p>
	<figure><img src="images/image027.png" alt="Contour map"/></figure>
	<ol class="smlatin">
		<li>Describe the shape of the surface.</li>
		<li>Suppose you travel along the surface in the positive \(y\)-direction, starting on the surface at the point above (or below) the point \((x, y) = (-1, 1)\). Describe your journey.</li>
	</ol>
	<ol class="smlatin">
		<li>The surface is bumpy, with regularly spaced oval bumps. Notice that some of the bumps go up (positive contours), but others go down. Between the bumps, there are horizontal lines that are completely level, with an elevation of 0.</li>
		<li>
			<p>It looks as if \(F(-1,1)\) is about 3. As we head in the positive \(y\)-direction along the line shown below, we first go uphill, nearly to 4, then we start going downhill. As we keep going north, we keep descending, going into the dip, until nearly -4. We're starting to go uphill again just as we leave the graph.</p>
			<figure><img src="images/image028.png" alt="Contour map"/></figure>
		</li>
	</ol>
</div>

<p>What happens if you have a function of more than two variables? Its graph will be a <em>hyper-surface</em>. For example, the graph of a function of four variables will be a hyper-surface in 5-dimensional space. This is very difficult (impossible for most of us) to visualize. Even the contours are hard to visualize &ndash; instead of curves in the plane, they’re hyper-surfaces in 4-dimensional space. So if you have more than two variables, the graph isn't usually very useful.</p>

</section>

<section><h2>Functions of Two Real-Life Variables</h2>

<h3>Complementary Goods and Substitute Goods</h3>
<p>The demand for some pairs of goods have a relationship, where the quantity demanded for one product depends somehow on the prices for both</p>
<div class="important">
	<h4>Complementary Goods</h4>
	<p>Two goods are <strong>complementary</strong> if an increase in the price of either decreases the demand for both.</p>
</div>
<p>Examples:</p>
<ul>
	<li>The demand for cars depends on both the price for cars and the price of gasoline.</li>
	<li>The demand for hot dog buns depends on both the price for the buns and the price for the hot dogs.</li>
</ul>
<div class="important">
	<h4>Substitute Goods</h4>
	<p>Two goods are <strong>substitutes</strong> if an increase in the price of one increases the demand for the other.</p>
</div>
<p>Example:</p>
<ul>
	<li>The demand for Brand A depends on its price and also on the price of its main competitor Brand B. If the Brand B raises its price, consumers will switch brands (substitute) and demand for Brand A will increase.</li>
</ul>
<p>Think brands of soft drinks, detergent, or paper towels. A traditional example is coffee and tea: the idea is that consumers are simply looking for a hot drink and they'll buy whatever is cheaper. But this has always seemed fishy to me &ndash; I've never met any coffee- or tea-drinkers who would happily switch.</p>
<p>These demand functions are functions of two variables.</p>

<div class="example">
	<h4>Example 13</h4>
	<p>The demand functions for two products are given below. \(p_1\), \(p_2\), \(q_1\), and \(q_2\) are the prices (in dollars) and quantities for Products 1 and 2:
		\[ \begin{align*}
			q_1=&amp; 200-3p_1-p_2 \\
			q_2=&amp; 150-p_1-2p_2
		\end{align*} \]
	</p>
	<p>Are these two products complementary goods or substitute goods? What is the quantity demanded for each when the price for Product 1 is $20 per item and the price for Product 2 is $30 per item?</p>
	<p>These products are complementary: an increase in either price decreases both demands. You can see that because the coefficients are both negative in each demand function.</p>
	<p>When \(p_1 = 20\) and \(p_2 = 30\), we have
		\[ \begin{align*}
			q_1=&amp; 200-3(20)-(30)=110 \\
			q_2=&amp; 150-(20)-2(30)=70
		\end{align*} \]
	So 110 units are demanded for Product 1 and 70 units are demanded for Product 2 when the price for Product 1 is $20 per item and the price for Product 2 is $30 per item.
</p>
</div>

<h3>Cobb-Douglas Production Function</h3>
<p>Production functions are used to model the total output of a firm for a variety of inputs (doesn't this sound like a function of several variables?). One example is a Cobb-Douglas Production function: \[ P=AL^{\alpha}K^{\beta} \]</p>
<p>In this function \(P\) is the total production, \(A\) is a constant, \( \alpha \) and \( \beta \) are constants between 0 and 1, \(L\) is the labor force, and \(K\) is the capital expenditure. (The units must be massaged well.)</p>
<p>You can read more about Cobb-Douglas Production functions at <a href="http://en.wikipedia.org/wiki/Cobb-Douglas">http://en.wikipedia.org/wiki/Cobb-Douglas</a>. You can read about other kinds of production functions at <a href="http://en.wikipedia.org/wiki/Production_function">http://en.wikipedia.org/wiki/Production_function</a>.</p>

</section>
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
			<td><a href="../chapter3/section3-8.php">&larr; Previous Section</a></td>
			<td><a href="section4-2.php">Next Section &rarr; </a></td>
		</tr>
	</table>
</footer>
</div>
</body>
</html>