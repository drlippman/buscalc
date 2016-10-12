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
<h1>Section 1.1: Functions</h1>

<h3>What is a function?</h3>

<p>The natural world is full of relationships between quantities that change. When we see these relationships, it is natural for us to ask <q>If I know one quantity, can I then determine the other?</q> This establishes the idea of an input quantity, or independent variable, and a corresponding output quantity, or dependent variable. From this we get the notion of a functional relationship in which the output can be determined from the input.</p>

<p>For some quantities, like height and age, there are certainly relationships between these quantities. Given a specific person and any age, it is easy enough to determine their height, but if we tried to reverse that relationship and determine height from a given age, that would be problematic, since most people maintain the same height for many years.</p>

<div class="thmdef">
<h4>Function</h4>
<p>A <strong>function</strong> is rule for a relationship between an input, or independent, quantity and an output, or dependent, quantity in which each input value uniquely determines one output value. We say <q>the output is a function of the input.</q></p>
</div>

<div class="example">
<h4>Example 1</h4>
<p>In the height and age example above, is height a function of age? Is age a function of height?</p>

<p>In the height and age example above, it would be correct to say that height is a function of age, since each age uniquely determines a height. For example, on my 18th birthday, I had exactly one height of 69 inches.</p>

<p>However, age is not a function of height, since one height input might correspond with more than one output age. For example, for an input height of 70 inches, there is more than one output of age since I was 70 inches at the age of 20 and 21.</p>
</div>

<div class="videoplayer w639">
	<video id="video_1.1.1" class="video-js vjs-default-skin" controls preload="metadata" width="639" height="auto">
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_1-1/function_definition_and_examples.mp4" type='video/mp4' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_1-1/function_definition_and_examples.webm" type='video/webm' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_1-1/function_definition_and_examples.ogv" type='video/ogv' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

<h3>Function Notation</h3>
<p>To simplify writing out expressions and equations involving functions, a simplified notation is often used. We also use descriptive variables to help us remember the meaning of the quantities in the problem.</p>

<p>Rather than write <q>height is a function of age,</q> we could use the descriptive variable \(h\) to represent height and we could use the descriptive variable \(a\) to represent age.</p>

<table class="noborder">
	<tr>
		<td>"height is a function of age" </td>
		<td>if we name the function \(f\) we write</td>
	</tr>
	<tr>
		<td>"\(h\) is \(f\) of \(a\)"</td>
		<td>or more simply</td>
	</tr>
	<tr>
		<td>\(h = f(a)\)</td>
		<td>we could instead name the function \(h\) and write</td>
	</tr>
	<tr>
		<td>\(h(a)\)</td>
		<td>which is read "\(h\) of \(a\)"</td>
	</tr>
</table>

<p>Remember we can use any variable to name the function; the notation \(h(a)\) shows us that \(h\) depends on \(a\). The value <q>\(a\)</q> must be put into the function <q>\(h\)</q> to get a result. Be careful &ndash; the parentheses indicate that age is input into the function (Note: do not confuse these parentheses with multiplication!).</p>

<div class="thmdef">
<h4>Function Notation</h4>
<p>The notation output = \(f\)(input) defines a function named \(f\). This would be read <q>output is \(f\) of input.</q>
</p>
</div>

<div class="example">
<h4>Example 2</h4>
<p>A function \(N = f(y)\) gives the number of police officers, \(N\), in a town in year \(y\). What does \(f(2005) = 300\) tell us?</p>

<p>When we read \(f(2005) = 300\), we see the input quantity is 2005, which is a value for the input quantity of the function, the year (\(y\)). The output value is 300, the number of police officers (\(N\)), a value for the output quantity. Remember \(N=f(y)\). So this tells us that in the year 2005 there were 300 police officers in the town.</p>
</div>

<h3>Tables as Functions</h3>
<p>Functions can be represented in many ways: Words (as we did in the last few examples), tables of values, graphs, or formulas. Represented as a table, we are presented with a list of input and output values.</p>

<p>This table represents the age of children in years and their corresponding heights. While some tables show all the information we know about a function, this particular table represents just some of the data available for height and ages of children.</p>

<table class="border">
	<tr>
		<td>(input) \(a\), age in years</td>
		<td>4</td>
		<td>5</td>
		<td>6</td>
		<td>7</td>
		<td>8</td>
		<td>9</td>
		<td>10</td>
	</tr>
	<tr>
		<td>(output) \(h\), height in inches</td>
		<td>40</td>
		<td>42</td>
		<td>44</td>
		<td>47</td>
		<td>50</td>
		<td>52</td>
		<td>54</td>
	</tr>
</table>

<div class="example">
	<h4>Example 3</h4>
	<p>Which of these tables define a function (if any)?</p>

	<table class="border">
		<tr>
			<td>Input</td>
			<td>Output</td>
		</tr>
		<tr>
			<td>2</td>
			<td>1</td>
		</tr>
		<tr>
			<td>5</td>
			<td>3</td>
		</tr>
		<tr>
			<td>8</td>
			<td>6</td>
		</tr>
	</table>
	<table class="border">
		<tr>
			<td>Input</td>
			<td>Output</td>
		</tr>
		<tr>
			<td>-3</td>
			<td>5</td>
		</tr>
		<tr>
			<td>0</td>
			<td>1</td>
		</tr>
		<tr>
			<td>4</td>
			<td>5</td>
		</tr>
	</table>
	<table class="border">
		<tr>
			<td>Input</td>
			<td>Output</td>
		</tr>
		<tr>
			<td>1</td>
			<td>0</td>
		</tr>
		<tr>
			<td>5</td>
			<td>2</td>
		</tr>
		<tr>
			<td>5</td>
			<td>4</td>
		</tr>
	</table>

	<p>The first and second tables define functions. In both, each input corresponds to exactly one output. The third table does not define a function since the input value of 5 corresponds with two different output values.</p>
</div>

<div class="videoplayer w639">
	<video id="video_1.1.2" class="video-js vjs-default-skin" controls preload="metadata" width="639" height="auto">
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_1-1/table_example_using_set_ovals.mp4" type='video/mp4' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_1-1/ftable_example_using_set_ovals.webm" type='video/webm' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

<h3>Solving and Evaluating Functions</h3>

<p>When we work with functions, there are two typical things we do: evaluate and solve. Evaluating a function is what we do when we know an input, and use the function to determine the corresponding output. Evaluating will always produce one result, since each input of a function corresponds to exactly one output.</p>

<p>Solving equations involving a function is what we do when we know an output, and use the function to determine the inputs that would produce that output. Solving a function could produce more than one solution, since different inputs can produce the same output.</p>

<div class="example">
	<h4>Example 4</h4>
	<p>Using the table shown, where \(Q=g(n)\)</p>
	<table class="border">
		<tr>
			<td>\(n\)</td>
			<td>1</td>
			<td>2</td>
			<td>3</td>
			<td>4</td>
			<td>5</td>
		</tr>
		<tr>
			<td>\(Q\)</td>
			<td>8</td>
			<td>6</td>
			<td>7</td>
			<td>6</td>
			<td>8</td>
		</tr>
	</table>
	<p>a) Evaluate \(g(3)\)<br />b) Solve \(g(n)=6\)</p>

	<p>a) Evaluate \(g(3)\): Evaluating \(g(3)\) (read: <q>g of 3</q>) means that we need to determine the output value, \(Q\), of the function g given the input value of \(n=3\). Looking at the table, we see the output corresponding to \(n=3\) is \(Q=7\), allowing us to conclude \(g(3) = 7\).</p>

	<p>b) Solve \(g(n)=6\): Solving \(g(n) = 6\) means we need to determine what input values, \(n\), produce an output value of 6. Looking at the table we see there are two solutions: \(n = 2\) and \(n = 4\). When we input 2 into the function \(g\), our output is \(Q = 6\). When we input 4 into the function \(g\), our output is also \(Q = 6\).</p>
</div>

<h3>Graphs as Functions</h3>
<p>Oftentimes a graph of a relationship can be used to define a function. By convention, graphs are typically created with the input quantity along the horizontal axis and the output quantity along the vertical.</p>

<div class="example">
	<h4>Example 5</h4>
	<p>Which of these graphs defines a function \(y=f(x)\)?</p>
	<figure>
		<img src="images/image081.png" alt="function">
		<img src="images/image082.png" alt="function">
		<img src="images/image083.png" alt="not at function">
	</figure>
	<p>Looking at the three graphs above, the first two define a function \(y=f(x)\), since for each input value along the horizontal axis there is exactly one output value corresponding, determined by the y-value of the graph. The third graph does not define a function \(y=f(x)\) since some input values, such as \(x=2\), correspond with more than one output value.</p>
</div>

<div class="thmdef"><h4>Vertical Line Test</h4>
<p>The <strong>vertical line test</strong> is a handy way to think about whether a graph defines the vertical output as a function of the horizontal input. Imagine drawing vertical lines through the graph. If any vertical line would cross the graph more than once, then the graph does not define only one vertical output for each horizontal input.</p>
</div>

<div class="videoplayer w639">
	<video id="video_1.1.3" class="video-js vjs-default-skin" controls preload="metadata" width="639" height="auto">
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_1-1/vertical_line_test.mp4" type='video/mp4' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_1-1/vertical_line_test.webm" type='video/webm' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

<p>Evaluating a function using a graph requires taking the given input and using the graph to look up the corresponding output. Solving a function equation using a graph requires taking the given output and looking on the graph to determine the corresponding input.</p>

<div class="example"><h4>Example 6</h4>
	<p>Given the graph below,</p>
	<figure><img src="images/image084.png" alt="graph"></figure>
	<p>a) Evaluate \(f(2)\).<br />
		b) Solve \(f(x) = 4\).
	</p>

	<p>a) To evaluate \(f(2)\), we find the input of \(x=2\) on the horizontal axis. Moving up to the graph gives the point (2, 1), giving an output of \(y=1\). So \(f(2) = 1\).</p>

	<p>b) To solve \(f(x) = 4\), we find the value 4 on the vertical axis because if \(f(x) = 4\) then 4 is the output. Moving horizontally across the graph gives two points with the output of 4: (-1,4) and (3,4). These give the two solutions to \(f(x) = 4\): \(x = -1\) or \(x = 3\). This means \(f(-1)=4\) and \(f(3)=4\), or when the input is -1 or 3, the output is 4.
</p>
</div>

<p>Notice that while the graph in the previous example is a function, getting two input values for the output value of 4 shows us that this function is not one-to-one.</p>

<h3>Formulas as Functions</h3>
<p>When possible, it is very convenient to define relationships using formulas. If it is possible to express the output as a formula involving the input quantity, then we can define a function.</p>

<div class="example">
	<h4>Example 7</h4>
	<p>Express the relationship \(2n + 6p = 12\) as a function \(p = f(n)\) if possible.</p>

	<p>To express the relationship in this form, we need to be able to write the relationship where \(p\) is a function of \(n\), which means writing it as \(p =\) [something involving \(n\)].</p>
	<table class="align">
		<tr>
			<td>\(2n + 6p = 12\)</td>
			<td>subtract \(2n\) from both sides</td>
		</tr>
		<tr>
			<td>\(6p = 12 - 2n\)</td>
			<td>divide both sides by 6 and simplify</td>
		</tr>
	</table>

	<p >\[p=\frac{12-2n}{6}=\frac{12}{6}-\frac{2n}{6}=2-\frac{1}{3}n\]</p>

	<p>Having rewritten the formula as \(p=\), we can now express \(p\) as a function: \(p=f(n)=2-\frac{1}{3}n\)</p>
</div>

<p>Not every relationship can be expressed as a function with a formula.</p>

<p>As with tables and graphs, it is common to evaluate and solve functions involving formulas. Evaluating will require replacing the input variable in the formula with the value provided and calculating. Solving will require replacing the output variable in the formula with the value provided, and solving for the input(s) that would produce that output.</p>

<div class="example">
<h4>Example 8</h4>
	<p>Given the function \(k(t)=t^3+2\):<br />a) Evaluate \(k(2)\).<br />b) Solve \(k(t)=1\).</p>

	<p>a) To evaluate \(k(2)\), we plug in the input value 2 into the formula wherever we see the input variable \(t\), then simplify:
	\[\begin{align*}k(2) &amp; = 2^3+2\\k(2) &amp; = 8+2 \end{align*}\] So \(k(2) = 10\).</p>

	<p>b) To solve \(k(t) = 1\), we set the formula for \(k(t)\) equal to 1, and solve for the input value that will produce that output:
	\[\begin{align*}
		k(t) &amp; = 1 &amp; \\
		t^3+2 &amp; = 1 &amp;\text{substitute the original formula} \\
		t^3 &amp; = -1 &amp;\text{subtract 2 from each side} \\
		t &amp; = 1 &amp;\text{take the cube root of each side}
	\end{align*}\]
	</p>

	<p>When solving an equation using formulas, you can check your answer by using your solution in the original equation to see if your calculated answer is correct.</p>

	<p>We want to know if \(k(t) = 1\) is true when \(t=-1\): \[\begin{align*}k(-1) &amp; = (-1)^3+2\\ &amp; =  -1+2\\ &amp; = 1,\end{align*}\] which was the desired result.
</p>
</div>

<h3>Basic Toolkit Functions</h3>
<p>There are some basic functions that it is helpful to know the name and shape of. We call these the basic <q>toolkit of functions.</q> For these definitions we will use \(x\) as the input variable and \(f(x)\) as the output variable.</p>
<div class="thmdef">
	<h4>Toolkit Functions</h4>
	<table class="noborder">
		<tr>
			<td>Constant:</td>
			<td>\(f(x)=c\), where \(c\) is a constant (number)</td>
		</tr>
		<tr>
			<td>Identity:</td>
			<td>\(f(x)=x\)</td>
		</tr>
		<tr>
			<td>Absolute Value:</td>
			<td>\(f(x)=|x|\)</td>
		</tr>
		<tr>
			<td>Quadratic:</td>
			<td>\(f(x)=x^2\)</td>
		</tr>
		<tr>
			<td>Cubic:</td>
			<td>\(f(x)=x^3\)</td>
		</tr>
		<tr>
			<td>Reciprocal:</td>
			<td>\(f(x)=\frac{1}{x}\)</td>
		</tr>
		<tr>
			<td>Reciprocal squared:</td>
			<td>\(f(x)=\frac{1}{x^2}\)</td>
		</tr>
		<tr>
			<td>Square root:</td>
			<td>\(f(x)=\sqrt[2]{x}=\sqrt{x}\)</td>
		</tr>
		<tr>
			<td>Cube root:</td>
			<td>\(f(x)=\sqrt[3]{x}\)</td>
		</tr>
	</table>
</div>

<h3>Graphs of the Toolkit Functions</h3>
<figure>
	<img src="images/image085.png" alt="Constant">
	<figcaption>Constant, \(f(x)=c\) (c is 2 in this picture).</figcaption>
</figure>
<figure>
	<img src="images/image086.png" alt="Identity">
	<figcaption>Identity: \(f(x)=x\).</figcaption>
</figure>
<figure>
	<img src="images/image087.png" alt="Absolute Value">
	<figcaption>Absolute Value: \(f(x)=|x|\)</figcaption>
</figure>
<figure>
	<img src="images/image088.png" alt="Quadratic">
	<figcaption>Quadratic: \(f(x)=x^2\)</figcaption>
</figure>
<figure>
	<img src="images/image089.png" alt="Cubic">
	<figcaption>Cubic: \(f(x)=x^3\)</figcaption>
</figure>
<figure>
	<img src="images/image092.png" alt="Reciprocal">
	<figcaption>Reciprocal: \(f(x)=\frac{1}{x}\)</figcaption>
</figure>
<figure>
	<img src="images/image093.png" alt="Reciprocal squared">
	<figcaption>Reciprocal squared: \(f(x)=\frac{1}{x^2}\)</figcaption>
</figure>
<figure>
	<img src="images/image090.png" alt="Square root">
	<figcaption>Square root: \(f(x)=\sqrt[2]{x}=\sqrt{x}\)</figcaption>
</figure>
<figure>
	<img src="images/image091.png" alt="Cube root">
	<figcaption>Cube root: \(f(x)=\sqrt[3]{x}\)</figcaption>
</figure>

<div class="videoplayer w639">
	<video id="video_1.1.4" class="video-js vjs-default-skin" controls preload="metadata" width="639" height="auto">
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_1-1/plotting_a_toolkit_function.mp4" type='video/mp4' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_1-1/plotting_a_toolkit_function.webm" type='video/webm' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

<p>One of our main goals in mathematics is to model the real world with mathematical functions. In doing so, it is important to keep in mind the limitations of those models we create.</p>

<p>This table shows a relationship between circumference and height of a tree as it grows.</p>

<table class="border">
	<tr>
		<td>Circumference, \(c\)</td>
		<td>1.7</td>
		<td>2.5</td>
		<td>5.5</td>
		<td>8.2</td>
		<td>13.7</td>
	</tr>
	<tr>
		<td>Height, \(h\)</td>
		<td>24.5</td>
		<td>31</td>
		<td>45.2</td>
		<td>54.6</td>
		<td>92.1</td>
	</tr>
</table>

<p>While there is a strong relationship between the two, it would certainly be ridiculous to talk about a tree with a circumference of -3 feet, or a height of 3000 feet. When we identify limitations on the inputs and outputs of a function, we are determining the domain and range of the function.</p>

<div class="thmdef">
<h4>Domain and Range</h4>
	<p><strong>Domain:</strong> The set of possible input values to a function.<br /> <strong>Range:</strong> The set of possible output values of a function</p>
</div>

<div class="example">
	<h4>Example 9</h4>
	<p>Using the tree table above, determine a reasonable domain and range.</p>
	<p>We could combine the data provided with our own experiences and reason to approximate the domain and range of the function \( h = f(c)\). For the domain, possible values for the input circumference c, it doesn’t make sense to have negative values, so \(c > 0\). We could make an educated guess at a maximum reasonable value, or look up that the maximum circumference measured is about 119 feet. With this information we would say a reasonable domain is feet.</p>
	<p>Similarly for the range, it doesn’t make sense to have negative heights, and the maximum height of a tree could be looked up to be 379 feet, so a reasonable range is feet.</p>
</div>
<p>A more compact alternative to inequality notation is <strong>interval notation</strong>, in which intervals of values are
referred to by the starting and ending values. Curved parentheses are used for <q>strictly less than,</q> and square brackets are used
for <q>less than or equal to.</q> Since infinity is not a number, we can’t include it in the interval, so we always use curved parentheses
with \(\infty\) and \(-\infty\). The table below will help you see how inequalities correspond to interval notation:</p>

<table class="border">
	<tr>
		<td>Inequality</td>
		<td>Interval notation</td>
	</tr>
	<tr>
		<td>\( 5 \lt h \leq10 \)</td>
		<td>(5, 10]</td>
	</tr>
	<tr>
		<td>\(5\leq h \lt10 \)</td>
		<td>[5, 10)</td>
	</tr>
	<tr>
		<td>\(5 \lt h \lt 10\)</td>
		<td>(5, 10)</td>
	</tr>
	<tr>
		<td>\(h \lt10\)</td>
		<td>\((-\infty,10)\)</td>
	</tr>
	<tr>
		<td>\(h\geq10\)</td>
		<td>\([10,\infty)\)</td>
	</tr>
	<tr>
		<td>All real numbers (\(\mathbb{R}\))</td>
		<td>\((-\infty,\infty)\)</td>
	</tr>
</table>

<div class="example">
	<h4>Example 10</h4>
	<p>Describe the intervals of values shown on the line graph below using set builder and interval notations:</p>
	<img src="images/image001.png" alt="Number line">
	<p>To describe the values, x, that lie in the intervals shown above we would say, <q>x is a real number greater than or equal to 1 and less than or equal to 3, or a real number greater than 5.</q> As an inequality it is <q>\(1\leq x\leq 3\) or \(x \gt 5 \)</q>. In interval notation it is <q>\([1,3]\cup(5,\infty)\)</q>.</p>
</div>

<div class="example">
	<h4>Example 11</h4>
	<p>Find the domain of each function: <br /> a) \(f(x)=2\sqrt{x+4}\)<br /> b) \(g(x)=\dfrac{3}{6-3x}\)</p>
	<p>a) Since we cannot take the square root of a negative number, we need the inside of the square root to be non-negative. \(x+4\geq 0\) when \(x\geq -4\), so the domain of \(f(x)\) is \([-4,\infty)\).</p>
	<p>b) We cannot divide by zero, so we need the denominator to be non-zero. \(6-3x=0\) when \(x = 2\), so we must exclude 2 from the domain. The domain of \(g(x)\) is \((-\infty,2)\cup(2,\infty)\).</p>
</div>

<div class="videoplayer w639">
	<video id="video_1.1.5" class="video-js vjs-default-skin" controls preload="metadata" width="639" height="auto">
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_1-1/domain_and_range.mp4" type='video/mp4' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_1-1/domain_and_range.webm" type='video/webm' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

<!--<aside>
<h2>Exercises</h2>

<ol>
	<li>The amount of garbage, \(G\), produced by a city with population \(p\) is given by \(G=f(p)\). \(G\) is measured in tons per week, and \(p\) is measured in thousands of people.
		<ol>
			<li>The town of Tola has a population of 40,000 and produces 13 tons of garbage each week. Express this information in terms of the function \(f\).</li>
			<li>Explain the meaning of the statement \(f(5)=2\).</li>
		</ol>
	</li>

	<li>The number of cubic yards of dirt, \(D\), needed to cover a garden with area \(a\) square feet is given by \(D=g(a)\).
		<ol>
			<li>A garden with area 5000 ft<sup>2</sup> requires 50 cubic yards of dirt. Express this information in terms of the function \(g\).</li>
			<li>Explain the meaning of the statement "\(g(100)=1\)".</li>
		</ol>
	</li>

	<li>Select all of the following graphs which represent y as a function of \(x\).
		<ol>
			<li><img src="images/image002.png" alt="graph"/></li>
			<li><img src="images/image003.png" alt="graph"/></li>
			<li><img src="images/image004.png" alt="graph"/></li>
			<li><img src="images/image005.png" alt="graph"/></li>
			<li><img src="images/image006.png" alt="graph"/></li>
			<li><img src="images/image007.png" alt="graph"/></li>
		</ol>
	</li>

	<li>Select all of the following graphs which represent y as a function of \(x\).
		<ol>
			<li><img src="images/image008.png" alt="graph"/></li>
			<li><img src="images/image009.png" alt="graph"/></li>
			<li><img src="images/image010.png" alt="graph"/></li>
			<li><img src="images/image011.png" alt="graph"/></li>
			<li><img src="images/image012.png" alt="graph"/></li>
			<li><img src="images/image013.png" alt="graph"/></li>
		</ol>
	</li>

	<li>Select all of the following tables which represent y as a function of x.
		<ol>
			<li>
				<table class="border">
					<tr>
						<td>\(x\)</td>
						<td>5</td>
						<td>10</td>
						<td>15</td>
					</tr>
					<tr>
						<td>\(y\)</td>
						<td>3</td>
						<td>8</td>
						<td>14</td>
					</tr>
				</table>
			</li>

			<li>
				<table class="border">
					<tr>
						<td>\(x\)</td>
						<td>5</td>
						<td>10</td>
						<td>15</td>
					</tr>
					<tr>
						<td>\(y\)</td>
						<td>3</td>
						<td>8</td>
						<td>8</td>
					</tr>
				</table>
			</li>

			<li>
				<table class="border">
					<tr>
						<td>\(x\)</td>
						<td>5</td>
						<td>10</td>
						<td>10</td>
					</tr>
					<tr>
						<td>\(y\)</td>
						<td>3</td>
						<td>8</td>
						<td>14</td>
					</tr>
				</table>
			</li>
		</ol>
	</li>

		<li>Select all of the following tables which represent y as a function of x.
		<ol>
			<li>
				<table class="border">
					<tr>
						<td>\(x\)</td>
						<td>2</td>
						<td>6</td>
						<td>13</td>
					</tr>
					<tr>
						<td>\(y\)</td>
						<td>3</td>
						<td>10</td>
						<td>10</td>
					</tr>
				</table>
			</li>

			<li>
				<table class="border">
					<tr>
						<td>\(x\)</td>
						<td>2</td>
						<td>6</td>
						<td>6</td>
					</tr>
					<tr>
						<td>\(y\)</td>
						<td>3</td>
						<td>10</td>
						<td>14</td>
					</tr>
				</table>
			</li>

			<li>
				<table class="border">
					<tr>
						<td>\(x\)</td>
						<td>2</td>
						<td>6</td>
						<td>13</td>
					</tr>
					<tr>
						<td>\(y\)</td>
						<td>3</td>
						<td>10</td>
						<td>14</td>
					</tr>
				</table>
			</li>
		</ol>
	</li>

	<li>Given the function \(g(x)\) graphed here,
		<figure><img src="images/image014.png" alt="graph"/></figure>
		<ol>
			<li>Evalulate \(g(2)\)</li>
			<li>Solve \(g(x)=2\)</li>
		</ol>
	</li>

	<li>Given the function \(f(x)\) graphed here,
		<figure><img src="images/image015.png" alt="graph"/></figure>
		<ol>
			<li>Evalulate \(f(4)\)</li>
			<li>Solve \(f(x)=4\)</li>
		</ol>
	</li>

	<li>Based on the table below,
		<table class="border">
			<tr>
				<td>\(x\)</td>
				<td>0</td>
				<td>1</td>
				<td>2</td>
				<td>3</td>
				<td>4</td>
				<td>5</td>
				<td>6</td>
				<td>7</td>
				<td>8</td>
				<td>9</td>
			</tr>
			<tr>
				<td>\(f(x)\)</td>
				<td>74</td>
				<td>28</td>
				<td>1</td>
				<td>53</td>
				<td>56</td>
				<td>3</td>
				<td>36</td>
				<td>45</td>
				<td>14</td>
				<td>47</td>
			</tr>
		</table>

		<ol>
			<li>Evaluate \(f(3)\).</li>
			<li>Solve \(f(x)=1\)</li>
		</ol>
	</li>

	<li>Based on the table below,
		<table class="border">
			<tr>
				<td>\(x\)</td>
				<td>0</td>
				<td>1</td>
				<td>2</td>
				<td>3</td>
				<td>4</td>
				<td>5</td>
				<td>6</td>
				<td>7</td>
				<td>8</td>
				<td>9</td>
			</tr>
			<tr>
				<td>\(f(x)\)</td>
				<td>62</td>
				<td>8</td>
				<td>7</td>
				<td>38</td>
				<td>86</td>
				<td>73</td>
				<td>70</td>
				<td>39</td>
				<td>75</td>
				<td>34</td>
			</tr>
		</table>
		<ol>
			<li>Evaluate \(f(8)\).</li>
			<li>Solve \(f(x)=7\)</li>
		</ol>
		<br /><br />
		For each of the following functions, evaluate \(f(-2),\ f(-1),\ f(0),\ f(1),\) and \(f(2)\)
	</li>

	<li>\(f(x)=4-2x\)</li>

	<li>\(f(x)=8-3x\)</li>

	<li>\(f(x)=8x^2-7x+3\)</li>

	<li>\(f(x)=6x^2-7x+4\)</li>

	<li>\(f(x)=3+\sqrt{x+3}\)</li>

	<li>\(f(x)=4-\sqrt[3]{x-2}\)</li>

	<li>\(f(x)=\dfrac{x-3}{x+1}\)</li>

	<li>\(f(x)=\dfrac{x-2}{x+2}\)</li>

	<li>Let \(f(x)=3t+5\)
		<ol>
			<li>Evaluate \(f(0)\).</li>
			<li>Solve \(f(t)=0\)</li>
		</ol>
	</li>

	<li>Let \(g(p)=6-2p\)
		<ol>
			<li>Evaluate \(g(0)\).</li>
			<li>Solve \(g(p)=0\)</li>
		</ol>
	</li>

	<li>Using the graph below,
		<ol>
			<li>Evaluate \(f(c)\)</li>
			<li>Solve \(f(x)=p\)</li>
			<li>What are the coordinates of the points \(L\) and \(K\)?</li>
		</ol>
		<img src="images/image094.png" alt="graph"/>
	</li>

	<li>Match each graph with its equation
		<ol>
			<li>\(y=x\)</li>
			<li>\(y=x^3\)</li>
			<li>\(y=\sqrt[3]{x}\)</li>
			<li>\(y=\frac{1}{x}\)</li>
			<li>\(y=x^2\)</li>
			<li>\(y=\sqrt{x}\)</li>
			<li>\(y=|x|\)</li>
			<li>\(y=\frac{1}{x^2}\)</li>
		</ol>
		<ol class="smroman">
			<li><img src="images/image016.png" alt="graph"/></li>
			<li><img src="images/image017.png" alt="graph"/></li>
			<li><img src="images/image018.png" alt="graph"/></li>
			<li><img src="images/image019.png" alt="graph"/></li>
			<li><img src="images/image020.png" alt="graph"/></li>
			<li><img src="images/image021.png" alt="graph"/></li>
			<li><img src="images/image022.png" alt="graph"/></li>
			<li><img src="images/image023.png" alt="graph"/></li>
		</ol>

		<br /><br />Write the domain and range of each graph as an inequality.
	</li>

	<li><img src="images/image024.png" alt="graph"/></li>

	<li><img src="images/image025.png" alt="graph"/>
		<br /><br />Find the domain of each function.
	</li>

	<li>\(f(x)=3\sqrt{x-2}\)</li>

	<li>\(f(x)=5\sqrt{x+3}\)</li>

	<li>\(f(x)=\dfrac{9}{x-6}\)</li>

	<li>\(f(x)=\dfrac{6}{x-8}\)</li>

	<li>\(f(x)=\dfrac{3x+1}{4x+2}\)</li>

	<li>\(f(x)=\dfrac{5x+3}{4x-1}\)</li>
</ol>

</aside>-->

</section>
<footer class="footer-nav">
	<table>
		<tr>
			<td><a href="../index.php">&larr; Previous Section</a></td>
			<td><a href="section1-2.php">Next Section &rarr; </a></td>
		</tr>
	</table>
</footer>
</div>
</body>
</html>