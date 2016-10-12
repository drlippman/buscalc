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
<h1>Section 1.2: Operations on Functions</h1>
<h2>Composition of Functions</h2>

<p>Suppose we wanted to calculate how much it costs to heat a house on a particular day of the year. The cost to heat a house will depend on the average daily temperature, and the average daily temperature depends on the particular day of the year. Notice how we have just defined two relationships: The temperature depends on the day, and the cost depends on the temperature. Using descriptive variables, we can notate these two functions.</p>

<p>The first function, \(C(T)\), gives the cost \(C\) of heating a house when the average daily temperature is \(T\) degrees Celsius, and the second, \(T(d)\), gives the average daily temperature of a particular city on day \(d\) of the year. If we wanted to determine the cost of heating the house on the fifth day of the year, we could do this by linking our two functions together, an idea called composition of functions. Using the function \(T(d)\), we could evaluate \(T(5)\) to determine the average daily temperature on the fifth day of the year. We could then use that temperature as the input to the \(C(T)\) function to find the cost to heat the house on the fifth day of the year: \(C(T(5))\).</p>

<div class="thmdef">
	<h4>Composition of Functions</h4>
	<p>When the output of one function is used as the input of another, we call the entire operation a composition of functions. We write \(f(g(x))\), and read this as “f of g of x” or “f composed with g at x”. </p>
	<p>An alternate notation for composition uses the composition operator: \(\circ\). \((f\circ g)(x)\) is read “f of g of x” or “f composed with g at x”, just like \(f(g(x))\).</p>
</div>

<div class="example">
	<h4>Example 1</h4>
	<p>Suppose c(s) gives the number of calories burned doing s sit-ups, and s(t) gives the number of sit-ups a person can do in t minutes. Interpret c(s(3)).</p>
	<p>When we are asked to interpret, we are being asked to explain the meaning of the expression in words. The inside expression in the composition is s(3). Since the input to the s function is time, the 3 is representing 3 minutes, and s(3) is the number of sit-ups that can be done in 3 minutes. Taking this output and using it as the input to the c(s) function will give us the calories that can be burned by the number of sit-ups that can be done in 3 minutes.</p>
</div>

<h3>Composition of Functions using Tables and Graphs</h3>

<p>When working with functions given as tables and graphs, we can look up values for the functions using a provided table or graph. We start evaluation from the provided input, and first evaluate the inside function. We can then use the output of the inside function as the input to the outside function. To remember this, always work from the inside out.</p>

<div class="example">
	<h4>Example 2</h4>
	<p>Using the graphs below, evaluate \(f(g(1))\) .</p>
	<figure>
		<img src="images/image026.png" alt="g graph"/>
		<figcaption>\( g(x) \)</figcaption>
	</figure>
	<figure>
		<img src="images/image027.png" alt="f graph"/>
		<figcaption>\( f(x) \)</figcaption>
	</figure>
	<p>To evaluate \(f(g(1))\), we again start with the inside evaluation. We evaluate \(g(1)\) using the graph of the \(g(x)\) function, finding the input of 1 on the horizontal axis and finding the output value of the graph at that input. Here, \(g(1)=3\). Using this value as the input to the \(f\) function, \(f(g(1))=f(3)\). We can then evaluate this by looking to the graph of the \(f(x)\) function, finding the input of 3 on the horizontal axis, and reading the output value of the graph at this input. Here, \(f(3)=6\), so \(f(g(1))=6\).</p>
</div>

<div class="videoplayer w639">
	<video id="video_1.2.1" class="video-js vjs-default-skin" controls preload="metadata" width="639" height="auto">
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_1-2/evaluating_compositions_using_graphs.mp4" type='video/mp4' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_1-2/evaluating_compositions_using_graphs.webm" type='video/webm' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

<h3>Compositions using Formulas</h3>
<p>When evaluating a composition of functions where we have either created or been given formulas, the concept of working from the inside out remains the same. First we evaluate the inside function using the input value provided, then use the resulting output as the input to the outside function.</p>

<div class="example">
	<h4>Example 3</h4>
	<p>Given \(f(t)=t^2-t\) and \(h(x)=3x+2\), evaluate \(f(h(1))\).</p>
	<p>Since the inside evaluation is \(h(1)\) we start by evaluating the \(h(x)\) function at 1: \[h(1)=3(1)+2=5\]</p>
	<p>Then \(f(h(1))=f(5)\) , so we evaluate the \(f(t)\) function at an input of 5: \[f(h(1))=f(5)=5^2-5=20\]</p>
</div>

<p>We are not limited, however, to using a numerical value as the input to the function. We can put anything into the function: a value, a different variable, or even an algebraic expression, provided we use the input expression everywhere we see the input variable.</p>

<div class="example">
	<h4>Example 4</h4>
	<p>Let \(f(x)=x^2\) and \(g(x)=\dfrac{1}{x}-2x\). Find \(f(g(x))\) and \(g(f(x))\).</p>
	<p>To find \(f(g(x))\), we start by evaluating the inside, writing out the formula for \(g(x)\):\[g(x)=\dfrac{1}{x}-2x\]</p>
	<p>We then use the expression \(\left(\dfrac{1}{x}-2x\right)\) as the input for the function \(f\): \[f(g(x))=f\left(\dfrac{1}{x}-2x\right)\]</p>
	<p>We then evaluate the function \(f(x)\) using the formula for \(g(x)\) as the input. Since \(f(x)=x^2\) then \[f\left(\dfrac{1}{x}-2x\right)=\left(\dfrac{1}{x}-2x\right)^2\]</p>
	<p>This gives us the formula for the composition: \[f(g(x))=\left(\dfrac{1}{x}-2x\right)^2\] </p>
	<p>Likewise, to find \(g(f(x))\), we evaluate the inside, writing out the formula for \(f(x)\): \(g(f(x))=g(x^2)\). Now we evaluate the function \(g(x)\) using \(x^2\) as the input: \[g(f(x))=\dfrac{1}{x^2}-2x^2\]
</p>
</div>

<div class="videoplayer w639">
	<video id="video_1.2.2" class="video-js vjs-default-skin" controls preload="metadata" width="639" height="auto">
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_1-2/composition_examples.mp4" type='video/mp4' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_1-2/composition_examples.webm" type='video/webm' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

<div class="example">
	<h4>Example 5</h4>
	<p>A city manager determines that the tax revenue, \(R\), in millions of dollars collected on a population of \(p\) thousand people is given by the formula \(R(p)=0.03p+\sqrt{p}\), and that the city’s population, in thousands, is predicted to follow the formula \(p(t)=60+2t+0.3t^2\), where \(t\) is measured in years after 2010. Find a formula for the tax revenue as a function of the year.</p>
	
	<p>Since we want tax revenue as a function of the year, we want year to be our initial input, and revenue to be our final output. To find revenue, we will first have to predict the city population, and then use that result as the input to the tax function. So we need to find \(R(p(t)).\) Evaluating this, 
	\[\begin{align*}
		R(p(t)) =&amp; R(60+2t+0.3t^2)\\
		=&amp; 0.03(60+2t+0.3t^2)+\sqrt{60+2t+0.3t^2}
	\end{align*}\]</p>
	
	<p>This composition gives us a single formula which can be used to predict the tax revenue during a given year, without needing to find the intermediary population value. For example, to predict the tax revenue in 2017, when t = 7 (because t is measured in years after 2010),
	\[\begin{align*}
		R(p(7)) =&amp; 0.03\left(60+2(7)+0.3\left(7^2\right)\right)+\sqrt{60+2(7)+0.3\left(7^2\right)}\\
		\approx &amp; 12.079\text{ million dollars}
	\end{align*}\]</p>
</div>

<p>Later in this course, it will be desirable to decompose a function – to write it as a composition of two simpler functions.</p>

<div class="example">
	<h4>Example 6</h4>
	<p>Write \(f(x)=3+\sqrt{5-x^2}\) as the composition of two functions.</p>
	<p>We are looking for two functions, \(g\) and \(h\), so \(f(x)=g(h(x))\). To do this, we look for a function inside a function in the formula for \(f(x)\). As one possibility, we might notice that \(5-x^2\) is the inside of the square root. We could then decompose the function as: \[h(x)=5-x^2, \quad g(x)=3+\sqrt{x}\]</p>
	<p>We can check our answer by recomposing the functions: \[g(h(x))=g(5-x^2)=3+\sqrt{5-x^2}\]</p>
	<p>Note that this is not the only solution to the problem. Another non-trivial decomposition would be \[h(x)=x^2, \quad g(x)=3+\sqrt{5-x}.\]</p>
</div>

<div class="videoplayer w639">
	<video id="video_1.2.3" class="video-js vjs-default-skin" controls preload="metadata" width="639" height="auto">
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_1-2/more_composition_examples.mp4" type='video/mp4' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_1-2/more_composition_examples.webm" type='video/webm' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

<h2>Transformations of Functions</h2>

<p>Transformations allow us to construct new equations from our basic toolkit functions. The most basic transformations are shifting the graph vertically or horizontally.</p>

<div class="thmdef">
	<h4>Vertical Shift</h4>
	<p>Given a function \(f(x)\), if we define a new function \(g(x)\) as \(g(x)=f(x)+k\), where \(k\) is a constant, then \(g(x)\) is a <strong>vertical shift</strong> of the function \(f(x)\), where all the output values have been increased by \(k\).</p>
	<p>If \(k\) is positive, then the graph will shift up. If \(k\) is negative, then the graph will shift down.</p>
</div>

<div class="videoplayer w639">
	<video id="video_1.2.4" class="video-js vjs-default-skin" controls preload="metadata" width="639" height="auto">
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_1-2/vertical_shifts.mp4" type='video/mp4' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_1-2/vertical_shifts.webm" type='video/webm' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

<div class="thmdef">
	<h4>Horizontal Shift</h4>
	<p>Given a function \(f(x)\), if we define a new function \(g(x)\) as \(g(x)=f(x+k)\), where \(k\) is a constant, then \(g(x)\) is a <strong>horizontal shift</strong> of the function \(f(x)\), where all the output values have been increased by \(k\).</p>
	<p>If \(k\) is positive, then the graph will shift left. If \(k\) is negative, then the graph will shift right.</p>
</div>

<div class="videoplayer w639">
	<video id="video_1.2.5" class="video-js vjs-default-skin" controls preload="metadata" width="639" height="auto">
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_1-2/horizontal_shifts.mp4" type='video/mp4' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_1-2/horizontal_shifts.webm" type='video/webm' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

<div class="example">
	<h4>Example 7</h4>
	<p>Given \(f(x)=|x|\), sketch a graph of \(h(x)=f(x+1)-3=|x+1|-3\).</p>
	<p>The function \(\) is our toolkit absolute value function. We know that this graph has a V shape, with the point at the origin. The graph of \(h\) has transformed \(f\) in two ways: \(f(x+1)\) is a change on the inside of the function, giving a horizontal shift left by 1, then the subtraction by 3 in \(f(x+1)-3\) is a change to the outside of the function, giving a vertical shift down by 3. Transforming the graph gives:</p>
	<figure>
		<img src="images/image028.png" alt="shifted graph"/>
	</figure>
</div>

<div class="example">
	<h4>Example 8</h4>
	<p>Write a formula for the graph shown, a transformation of the toolkit square root function.</p>
	<figure>
		<img src="images/image029.png" alt="shifted graph"/>
	</figure>
	<p>The graph of the toolkit function starts at the origin, so this graph has been shifted 1 to the right, and up 2. In function notation, we could write that as \(h(x)=f(x-1)+2\). Using the formula for the square root function we can write \(h(x)=\sqrt{x-1}+2\).</p>
	<p>Note that this transformation has changed the domain and range of the function. This new graph has domain \([1,\infty)\) and range \([2,\infty)\).</p>
</div>

<p>Another transformation that can be applied to a function is a reflection over the horizontal or vertical axis.</p> 

<div class="thmdef">
	<h4>Reflections</h4>
	<p>Given a function \(f(x)\), if we define a new function \(g(x)\) as \(-f(x)\), 
then \(g(x)\) is a <strong>vertical reflection</strong> of the function \(f(x)\), sometimes called a reflection about the x-axis
</p>
	<p>If we define a new function \(g(x)\) as \(f(-x)\), 
then \(g(x)\) is a <strong>horizontal reflection</strong> of the function \(f(x)\), sometimes called a reflection about the \(y\)-axis.
</p>
</div>

<div class="example">
	<h4>Example 9</h4>
	<p>A common model for learning has an equation similar to \(k(t)=-2^t+1\) , where \(k\) is the percentage of mastery that can be achieved after \(t\) practice sessions. This is a transformation of the function \(f(t)=2^t\) shown here. Sketch a graph of \(k(t)\).</p>
	
	<figure>
		<img src="images/image030.png" alt="original graph"/>
		<figcaption> \(f(t)=2^t\)</figcaption>
	</figure>
	
	<p>This equation combines three transformations into one equation. </p>
	<table class="noborder">
		<tr>
			<td>A horizontal reflection: </td>
			<td>\(f(-t)=2^{-t}\)</td>
			<td>combined with</td>
		</tr>
		<tr>
			<td>a vertical reflection:	</td>
			<td>\(-f(-t)=-2^{-t}\)</td>
			<td>combined with</td>
		</tr>
		<tr>
			<td>a vertical shift up 1:</td>
			<td>\(-f(-t)+1=-2^{-t}+1\).</td>
			<td></td>
		</tr>
	</table>
	<p>We can sketch a graph by applying these transformations one at a time to the original function:</p>
	<figure>
		<img src="images/image030.png" alt="original graph"/>
		<figcaption>The original graph</figcaption>
	</figure>
	<figure>
		<img src="images/image031.png" alt="shifted graph"/>
		<figcaption>Horizontally reflected	</figcaption>
	</figure>
	<figure>
		<img src="images/image032.png" alt="shifted graph"/>
		<figcaption>Then vertically reflected</figcaption>
	</figure>
	<p>Then, after shifting up 1, we get the final graph: \[k(t)=-f(-t)+1=-2^{-t}+1\]</p>
	<figure>
		<img src="images/image033.png" alt="final graph"/>
		<figcaption>Final graph</figcaption>
	</figure>
	<p>Note: As a model for learning, this function would be limited to a domain of \(t\geq 0\), with corresponding range \([0,1)\).</p>
</div>

<p>With shifts, we saw the effect of adding or subtracting to the inputs or outputs of a function. We now explore the effects of multiplying the outputs.</p>

<div class="thmdef">
	<h4>Vertical Stretch/Compression</h4>
	<p>Given a function \(f(x)\), if we define a new function \(g(x)\) as \(g(x)=k\cdot f(x)\), where k is a constant, then \(g(x)\) is a <strong>vertical stretch or compression</strong> of the function \(f(x)\).</p>
	
	<ul>
		<li>If \(k \gt 1\), then the graph will be stretched</li>
		<li>If \(0\lt k \lt 1\), then the graph will be compressed</li>
		<li>If \(k \lt 0\), then there will be combination of a vertical stretch or compression with a vertical reflection</li>
	</ul>
</div>

<div class="videoplayer w639">
	<video id="video_1.2.6" class="video-js vjs-default-skin" controls preload="metadata" width="639" height="auto">
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_1-2/stretch_compression.mp4" type='video/mp4' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_1-2/stretch_compression.webm" type='video/webm' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

<div class="example">
	<h4>Example 10</h4>
	<p>The graph below is a transformation of the toolkit function \(f(x)=x^3\). Relate this new function \(g(x)\) to \(f(x)\), then find a formula for \(g(x)\).</p>
	<figure><img src="images/image034.png" alt="graph"/></figure>
	<p>When trying to determine a vertical stretch or shift, it is helpful to look for a point on the graph that is relatively clear. In this graph, it appears that \(g(2)=2\). With the basic cubic function at the same input, \(f(2)=2^3=8\). Based on that, it appears that the outputs of \(g\) are \(\frac{1}{4}\) the outputs of the function \(f\), since \(g(2)=\frac{1}{4}f(x)\). From this we can fairly safely conclude that \[g(x)=\frac{1}{4}f(x).\]</p>
	<p>We can write a formula for \(g\) by using the definition of the function \(f\): \[g(x)=\frac{1}{4}f(x)=\frac{1}{4}x^3.\]</p>
</div>

<h3>Combining Transformations</h3>
<p>When combining vertical transformations, it is very important to consider the order of the transformations. For example, vertically shifting by 3 and then vertically stretching by 2 does not create the same graph as vertically stretching by 2 and then vertically shifting by 3. The order follows nicely from order of operations.</p>

<div class="thmdef">
	<h4>Combining Vertical Transformations</h4>
	<p>When combining vertical transformations written in the form \(a\cdot f(x)+k\), first vertically stretch by \(a\), then vertically shift by \(k\).</p>
</div>

<div class="example">
	<h4>Example 11</h4>
	<p>Write an equation for the transformed graph of the quadratic function shown.</p>
	<figure>
		<img src="images/image035.png" alt="graph"/>
	</figure>
	<p>Since this is a quadratic function, first consider what the basic quadratic tool kit function looks like and how this has changed. Observing the graph, we notice several transformations: The original tool kit function has been flipped over the x axis, some kind of stretch or compression has occurred, and we can see a shift to the right 3 units and a shift up 1 unit. In total there are four operations:</p>
	<ol>
		<li>Vertical Reflection, requiring a negative sign outside the function.</li>
		<li>Vertical Stretch</li>
		<li>Horizontal Shift Right 3 units, which tells us to put x-3 on the inside of the function.</li>
		<li>Vertical Shift up 1 unit, telling us to add 1 on the outside of the function.</li>
	</ol>
	<p>By observation, the basic tool kit function has a vertex at (0, 0) and symmetrical points at (1, 1) and (-1, 1). These points are 1 unit up and 1 unit over from the vertex. The new points on the transformed graph are 1 unit away horizontally but 2 units away vertically. They have been stretched vertically by 2.</p>
	<p>Not everyone can see this by simply looking at the graph. If you can, great, but if not we can solve for it. First, we will write the equation for this graph, with an unknown vertical stretch:</p>
	<table class="align">
		<tr>
			<td>\(f(x)=x^2\)</td>
			<td>The original function</td>
		</tr>
		<tr>
			<td>\(-f(x)=-x^2\)</td>
			<td>Vertically reflected</td>
		</tr>
		<tr>
			<td>\(-a\cdot f(x)=-a x^2\)</td>
			<td>Vertically stretched </td>
		</tr>
		<tr>
			<td>\(-a\cdot f(x-3)=-a(x-3)^2\)</td>
			<td>Shifted right 3</td>
		</tr>
		<tr>
			<td>\(-a\cdot f(x-3)+1=-a(x-3)^2+1\)</td>
			<td>Shifted up 1</td>
		</tr>
	</table>
	<p>We now know our graph is going to have an equation of the form \(g(x)=-a(x-3)^2+1\). To find the vertical stretch, we can identify any point on the graph (other than the highest point), such as the point (2,-1), which tells us \(g(2)=-1\). Using our general formula, and substituting 2 for \(x\), and -1 for \(g(x)\).</p>
	<p>This tells us that to produce the graph we need a vertical stretch by two. </p>
	<p>Thus the function that produces this graph is \[g(x)=-2(x-3)^2+1.\]</p>
</div>

<div class="videoplayer w639">
	<video id="video_1.2.7" class="video-js vjs-default-skin" controls preload="metadata" width="639" height="auto">
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_1-2/shifting_example.mp4" type='video/mp4' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_1-2/shifting_example.webm" type='video/webm' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

<div class="example">
	<h4>Example 12</h4>
	<p>On what interval(s) is the function \(g(x)=\dfrac{-2}{(x-1)^2}+3\) increasing and decreasing?</p>
	<p>This is a transformation of the toolkit reciprocal squared function, \(f(x)=\dfrac{1}{x^2}\)</p>
	<table class="align">
		<tr>
			<td>\(-2f(x)=\dfrac{-2}{x^2}\)</td>
			<td>A vertical flip and vertical stretch by 2</td>
		</tr>
		<tr>
			<td>\(-2f(x-1)=\dfrac{-2}{(x-1)^2}\)</td>
			<td>A shift right by 1</td>
		</tr>
		<tr>
			<td>\(-2f(x-1)+3=\dfrac{-2}{(x-1)^2}+3\)</td>
			<td>A shift up by 3</td>
		</tr>
	</table>
	<p>The basic reciprocal squared function is increasing on \((-\infty,0)\) and decreasing on \((0,\infty)\). Because of the vertical flip, the \(g(x)\) function will be decreasing on the left and increasing on the right. The horizontal shift right by 1 will also shift these intervals to the right one. From this, we can determine \(g(x)\) will be increasing on \((1,\infty)\) and decreasing on \((-\infty,1)\). We also could graph the transformation to help us determine these intervals. </p>
	<figure>
		<img src="images/image036.png" alt="final graph"/>
		<figcaption>Graph of the transformed function.</figcaption>
	</figure>
</div>

<!--<aside>
<h2>Exercises</h2>

</aside>-->

</section>
<footer class="footer-nav">
	<table>
		<tr>
			<td><a href="section1-1.php">&larr; Previous Section</a></td>
			<td><a href="section1-3.php">Next Section &rarr; </a></td>
		</tr>
	</table>
</footer>
</div>
</body>
</html>