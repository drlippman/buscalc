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
<h1>Section 2.9: Applied Optimization</h1>
<p>We have used derivatives to help find the maximums and minimums of some functions given by equations, but it is very unlikely that someone will simply hand you a function and ask you to find its extreme values. More typically, someone will describe a problem and ask your help in maximizing or minimizing something: <q>What is the largest volume package which the post office will take?</q>; <q>What is the quickest way to get from here to there?</q>; or <q>What is the least expensive way to accomplish some task?</q> In this section, we’ll discuss how to find these extreme values using calculus.</p>

<section><h2>Max/Min Applications</h2>

<div class="example">
	<h4>Example</h4>
	<p>The manager of a garden store wants to build a 600 square foot rectangular enclosure on the store’s parking lot in order to display some equipment. Three sides of the enclosure will be built of redwood fencing, at a cost of $7 per running foot. The fourth side will be built of cement blocks, at a cost of $14 per running foot. Find the dimensions of the least costly such enclosure.</p>
</div>

<p>The process of finding maxima or minima is called optimization. The function we're optimizing is called the <strong>objective function</strong> (or <strong>objective equation</strong>). The objective function can be recognized by its proximity to <q>est</q> words (greatest, least, highest, farthest, most, &hellip;). Look at the garden store example; the cost function is the objective function.</p>

<p>In many cases, there are two (or more) variables in the problem. In the garden store example again, the length and width of the enclosure are both unknown. If there is an equation that relates the variables we can solve for one of them in terms of the others, and write the objective function as a function of just one variable. Equations that relate the variables in this way are called <strong>constraint equations</strong>. The constraint equations are always equations, so they will have equals signs. For the garden store, the fixed area relates the length and width of the enclosure. This will give us our constraint equation.</p>

<div class="important">
	<h4>Max-Min Story Problem Technique</h4>
	<ol>
		<li>Translate the English statement of the problem line by line into a picture (if that applies) and into math. This is often the hardest step!</li>
		<li><p>Identify the objective function. Look for words indicating a largest or smallest value.</p>
			<ol>
				<li>If you seem to have two or more variables, find the constraint equation. Think about the English meaning of the word <q>constraint</q>, and remember that the constraint equation will have an equals sign.</li>
				<li>Solve the constraint equation for one variable and substitute into the objective function. Now you have an equation of one variable.</li>
			</ol>
		</li>
		<li>Use calculus to find the optimum values. (Take derivative, find critical points, test. Don't forget to check the endpoints!)</li>
		<li>Look back at the question to make sure you answered what was asked. Translate your number answer back into English.</li>
	</ol>
</div>

<p>Here is a link to the examples used in the videos in this section: <a href="otherfiles/applied_optimization_problems_math141.pdf">Applied Optimization Examples</a>.</p>

<div class="videoplayer w639">
	<video id="video_2.9.1" class="video-js vjs-default-skin" controls preload="metadata" width="639" height="auto">
		<source src="video_2-9/intro_and_example_1.webm" type='video/webm' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-9/intro_and_example_1.mp4" type='video/mp4' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

<div class="example">
	<h4>Example 1</h4>
	<p>The manager of a garden store wants to build a 600 square foot rectangular enclosure on the store's parking lot in order to display some equipment. Three sides of the enclosure will be built of redwood fencing, at a cost of $7 per running foot. The fourth side will be built of cement blocks, at a cost of $14 per running foot. Find the dimensions of the least costly such enclosure.</p>
	<p>First, translate line by line into math and a picture:</p>
	<table class="border">
		<tr>
			<td><strong>Text</strong></td>
			<td><strong>Translation</strong></td>
		</tr>
		<tr>
			<td>
				<p>The manager of a garden store wants to build a <em>600 square foot rectangular</em> enclosure on the store's parking lot in order to display some equipment.</p>
				<p><em>Three sides of the enclosure</em> will be built of redwood fencing, at a <em>cost of $7 per running foot</em>. The <em>fourth side</em> will be built of cement blocks, at a <em>cost of $14 per running foot</em>.</p>
				<p>Find the dimensions of the least costly such enclosure.</p>
			</td>
			<td>
				<p>Let \(x\) and \(y\) be the dimensions of the enclosure, with \(y\) being the length of the side made of blocks. Then: \[\text{Area} = A = xy = 600.\]</p>
				<p>\(2x + y\) costs $7 per foot, \(y\) costs $14 per foot, so \[\text{Cost} = C = 7(2x + y) + 14y = 14x + 21y.\]</p>
				<p>Find \(x\) and \(y\) so that \(C\) is minimized.</p>
			</td>
		</tr>
	</table>
	<figure><img src="images/image090.png" alt="enclosure"/></figure>
	<p>The objective function is the cost function, and we want to minimize it. As it stands, though, it has two variables, so we need to use the constraint equation. The constraint equation is the fixed area \(A = xy = 600\). Solve \(A\) for \(x\) to get \( x=\frac{600}{y} \), and then substitute into \(C\): \[C=14\left(\frac{600}{y}\right)+21y=\frac{8400}{y}+21y.\]</p>
	<p>Now we have a function of just one variable, so we can find the minimum using calculus.</p>
	<p>\[C'=-\frac{8400}{y^2}+21\] \(C'\) is undefined for \(y = 0\), and \(C' = 0\) when \(y = 20\) or \(y = -20\).</p>
	<p>Of these three critical numbers, only \(y = 20\) makes sense (is in the domain of the actual function) &ndash; remember that \(y\) is a length, so it can’t be negative, and \(y = 0\) would mean there was no enclosure at all, so it couldn't have an area of 600 square feet.</p>
	<p>Test \(y = 20\) (here we chose the second derivative test): \[C''=\frac{16800}{y^3} \gt 0,\] so this is a local minimum.</p>
	<p>Since this is the only critical point in the domain, this must be the global minimum. Going back to our constraint function, we can find that when \(y = 20\), \(x = 30\). The dimensions of the enclosure that minimize the cost are 20 feet by 30 feet.</p>
</div>

<div class="videoplayer w639">
	<video id="video_2.9.2" class="video-js vjs-default-skin" controls preload="metadata" width="639" height="auto">
		<source src="video_2-9/example_2.webm" type='video/webm' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-9/example_2.mp4" type='video/mp4' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

<p>When trying to maximize their revenue, businesses also face the constraint of consumer demand. While a business would love to see lots of products at a very high price, typically demand decreases as the price of goods increases. In simple cases, we can construct that demand curve to allow us to maximize revenue.</p>

<div class="example">
	<h4>Example 2</h4>
	<p>A concert promoter has found that if she sells tickets for $50 each, she can sell 1200 tickets, but for each $5 she raises the price, 50 less people attend. What price should she sell the tickets at to maximize her revenue?</p>
	<p>We are trying to maximize revenue, and we know that \( R=pq \), where \(p\) is the price per ticket, and \(q\) is the quantity of tickets sold.</p>
	<p>The problem provides information about the demand relationship between price and quantity &ndash; as price increases, demand decreases. We need to find a formula for this relationship. To investigate, let's calculate what will happen to attendance if we raise the price:</p>
	<table class="border">
		<tr>
			<td>Price, \( p \)</td>
			<td>50</td>
			<td>55</td>
			<td>60</td>
			<td>65</td>
		</tr>
		<tr>
			<td>Quantity, \( q \)</td>
			<td>1200</td>
			<td>1150</td>
			<td>1100</td>
			<td>1050</td>
		</tr>
	</table>
	<p>You might recognize this as a linear relationship. We can find the slope for the relationship by using two points: \[m=\frac{1150-1200}{55-50}=\frac{-50}{5}=-10.\]</p>
	<p>You may notice that the second step in that calculation corresponds directly to the statement of the problem: the attendance drops 50 people for every $5 the price increases.</p>
	<p>Using the point-slope form of the line, we can write the equation relating price and quantity: \[q-1200=-10(p-50).\]</p>
	<p>Simplifying to slope-intercept form gives the demand equation \[ q=1700-10p. \]</p>
	<p>Substituting this into our revenue equation, we get an equation for revenue involving only one variable: \[R=pq=p(1700-10p)=1700p-10p^2.\]</p>
	<p>Now, we can find the maximum of this function by finding critical numbers. \( R'=1700-20p \), so \( R'=0 \) when \(p = 85\).</p>
	<p>Using the second derivative test, \( R''=-20 \lt 0 \) (for any value of \( p \)), so the critical number is a local maximum. Since it is the only critical number, we can also conclude that it is the global maximum.</p>
	<p>The promoter will be able to maximize revenue by charging $85 per ticket. At this price, she will sell \( q=1700-10(85)=850 \) tickets, generating $72,250 in revenue.</p>
</div>

<div class="videoplayer w639">
	<video id="video_2.9.3" class="video-js vjs-default-skin" controls preload="metadata" width="639" height="auto">
		<source src="video_2-9/example_3.webm" type='video/webm' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-9/example_3.mp4" type='video/mp4' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

<div class="videoplayer w639">
	<video id="video_2.9.4" class="video-js vjs-default-skin" controls preload="metadata" width="639" height="auto">
		<source src="video_2-9/example_4.webm" type='video/webm' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-9/example_4.mp4" type='video/mp4' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

</section>

<section><h2> <q>Marginal Revenue = Marginal Cost</q></h2>

<p>You may have heard before that <q>profit is maximized when marginal cost and marginal revenue are equal.</q>  Now you can see why people say that!  (Even though it’s not completely true.)</p>

<div class="example">
	<h4>Example 3</h4>
	<p>Suppose we want to maximize profit.  </p>
	<p>Now we know what to do &ndash; find the profit function, find its critical points, test them, etc.</p>
	<p>But remember that Profit = Revenue - Cost.  So Profit' = Revenue' - Cost'. That is, the derivative of the profit function is \(MR  - MC\). </p>
	<p>Now let’s find the critical points &ndash; those will be where Profit' = 0 or is undefined. Profit' = 0 when \(MR - MC = 0\), or where \(MR = MC\).</p>
</div>

<div class="important">
	<p>Profit has critical points when Marginal Revenue and Marginal Cost are equal.</p>
</div>

<p>In all the cases we'll see in this class, Profit will be very well behaved, and we won't have to worry about looking for critical points where Profit' is undefined.  But remember that not all critical points are local max!  The places where \(MR = MC\) could represent local max, local min, or neither one.</p>

<div class="example">
	<h4>Example 4</h4>
	<p>A company sells \(q\) ribbon winders per year at \(\$p\) per ribbon winder.  The demand function for ribbon winders is given by:  \(p=300-0.02q\).  The ribbon winders cost $30 apiece to manufacture, plus there are fixed costs of $9000 per year.  Find the quantity where profit is maximized.</p>
	<p>We want to maximize profit, but there isn’t a formula for profit given.  So let's make one.  We can find a function for Revenue = \(pq\) using the demand function for \(p\). \[R(q)=(300-0.02q)q=300q-0.02q^2.\]</p>
	<p>We can also find a function for Cost, using the variable cost of $30 per ribbon winder, plus the fixed cost: \[C(q)=9000+30q.\]</p>
	<p>Putting them together, we get a function for Profit: \[P(q)=R(q)-C(q)=\left(300q-0.02q^2\right)-(9000+30q)=-0.02q^2+270q-9000\]</p>
	<p>Now we have two choices.  We can find the critical points of Profit by taking the derivative of \(P(q)\) directly, or we can find \(MR\) and \(MC\) and set them equal.  (Naturally, we'll get the same answer either way.)</p>
	<p>Let's use \(MR = MC\) this time.
		\[ \begin{align*}
			MR &amp; =  300-0.04q\\
			MC &amp; =  30\\
			300-0.04q &amp; =  30\\
			270 &amp; =  0.04q\\
			q &amp; =  6750
		\end{align*} \]
	</p>
	<p>The only critical point is at  \(q = 6750\).  Now we need to be sure this is a local max and not a local min.  In this case, we'll look to the graph of \(P(q)\) &ndash; it's a downward opening parabola, so this must be a local max.  And since it's the only critical point, it must also be the global max.</p>
	<p>Profit is maximized when they sell 6750 ribbon winders.</p>
</div>

<div class="videoplayer w639">
	<video id="video_2.9.5" class="video-js vjs-default-skin" controls preload="metadata" width="639" height="auto">
		<source src="video_2-9/example_5.webm" type='video/webm' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-9/example_5.mp4" type='video/mp4' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

</section>

<section><h2><q>Average Cost = Marginal Cost</q></h2>

<p><q>Average cost is minimized when average cost = marginal cost</q> is another saying that isn’t quite true; in this case, the correct statement is:</p>

<div class="important">
	<p>Average Cost has critical points when Average Cost and Marginal Cost are equal.	</p>
</div>

<p>Let’s look at a geometric argument here. Remember that the average cost is the slope of the diagonal line, the line from the origin to the point on the total cost curve.  If you move your clear plastic ruler around, you’ll see (and feel) that the slope of the diagonal line is smallest when the diagonal line just touches the cost curve – when the diagonal line is actually a tangent line – when the average cost is equal to the marginal cost.</p>
<figure><img src="images/image113.png" alt="AC MC graph"/></figure>

<div class="videoplayer w639">
	<video id="video_2.9.6" class="video-js vjs-default-skin" controls preload="metadata" width="639" height="auto">
		<source src="video_2-9/example_6.webm" type='video/webm' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-9/example_6.mp4" type='video/mp4' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
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
			<td><a href="section2-8.php">&larr; Previous Section</a></td>
			<td><a href="section2-10.php">Next Section &rarr; </a></td>
		</tr>
	</table>
</footer>
</div>
</body>
</html>