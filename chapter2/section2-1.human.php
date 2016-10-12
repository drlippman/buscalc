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
<h1>Chapter 2: The Derivative</h1>
<section>
<h2>Introduction</h2>
<h3>Precalculus Idea: Slope and Rate of Change</h3>

<p>The slope of a line measures how fast a line rises or falls as we move from left to right along the line. It measures the rate of change of the y-coordinate with respect to changes in the x-coordinate. If the line represents the distance traveled over time, for example, then its slope represents the velocity. In the figure, you can remind yourself of how we calculate slope using two points on the line:</p>
<figure>
	<img src="images/image001.png" alt="slope"/>
	<figcaption>\( m=\text{Slope from \( P \) to \( Q \)}=\dfrac{\text{rise}}{\text{run}}=\dfrac{y_2-y_1}{x_2-x_1}=\dfrac{\Delta y}{\Delta x}\)</figcaption>
</figure>

<p>We would like to be able to get that same sort of information (how fast the curve rises or falls, velocity from distance) even if the graph is not a straight line. But what happens if we try to find the slope of a curve, as in the figure below? </p>
<figure>
	<img src="images/image002.png" alt="slope"/>
</figure>
<p>We need two points in order to determine the slope of a line. How can we find a slope of a curve, at just one point? The answer, as suggested in the figure, is to find the slope of the tangent line to the curve at that point. Most of us have an intuitive idea of what a tangent line is. Unfortunately, “tangent line” is hard to define precisely.</p>

<div class="thmdef">
	<h4>Definition (Secant Line)</h4>
	<p>A <strong>secant line</strong> is a line between two points on a curve</p>
</div>

<div class="thmdef">
	<h4>Can't-quite-do-it-yet Definition (Tangent Line)</h4>
	<p>A <strong>tangent line</strong> is a line at one point on a curve&hellip; that does its best to be the curve at that point?</p>
</div>

<p>It turns out that the easiest way to define the tangent line is to define its slope.</p>
<p><br /></p>
</section>

<h1>Section 2.1: Instantaneous Rate of Change and Tangent Lines</h1>
<section><h2>Instantaneous Velocity</h2>

<p>Suppose we drop a tomato from the top of a 100 foot building and time its fall. </p>

<figure>
	<img src="images/image003.png" alt="graph and table"/>
</figure>

<p>Some questions are easy to answer directly from the table: </p>
<ol>
	<li>How long did it take for the tomato n to drop 100 feet? (2.5 seconds)</li>
	<li>How far did the tomato fall during the first second? (100 – 84 = 16 feet)</li>
	<li>How far did the tomato fall during the last second? (64 – 0 = 64 feet)</li>
	<li>How far did the tomato fall between \(t =0.5\) and \(t = 1\)? (96 – 84 = 12 feet)</li>
</ol>

<p>Some questions require a little calculation:</p>
<ol start="5">
	<li>What was the average velocity of the tomato during its fall? \[\text{Average velocity}=\frac{\text{distance fallen}}{\text{total time}}=\frac{\Delta\text{position}}{\Delta\text{time}}=\frac{-100 \text{ ft}}{2.5 \text{ s}}=-40 \text{ ft/s}\]</li>
	<li>What was the average velocity between \( t=1\) and \(t=2\) seconds? \[\text{Average velocity}=\frac{\Delta\text{position}}{\Delta\text{time}}=\frac{36\text{ ft}- 84\text{ ft}}{2\text{ s} - 1\text{ s}}=\frac{-48 \text{ ft}}{1 \text{ s}}=-48 \text{ ft/s}\]</li>
</ol>

<p>Some questions are more difficult:</p>
<ol start="7">
	<li>
		<p>How fast was the tomato falling 1 second after it was dropped?</p>
		<p>This question is significantly different from the previous two questions about average velocity. Here we want the <strong>instantaneous velocity</strong>, the velocity at an instant in time. Unfortunately the tomato is not equipped with a speedometer so we will have to give an approximate answer.</p>
		<p>One crude approximation of the instantaneous velocity after 1 second is simply the average velocity during the entire fall, -40 ft/s . But the tomato fell slowly at the beginning and rapidly near the end so the "-40 ft/s" estimate may or may not be a good answer.</p>
		<p>We can get a better approximation of the instantaneous velocity at \(t=1\) by calculating the average velocities over a short time interval near \(t = 1\). The average velocity between \(t = 0.5\) and \(t = 1\) is \(\dfrac{-12\text{ feet}}{0.5\text{ s}} = -24\text{ ft/s}\), and the average velocity between \(t = 1\) and \(t = 1.5\) is \(\dfrac{-20\text{ feet}}{0.5\text{ s}} = -40\text{ ft/s}\) so we can be reasonably sure that the instantaneous velocity is between -24 ft/s and -40 ft/s.</p>
	</li>
</ol>

<p>In general, the shorter the time interval over which we calculate the average velocity, the better the average velocity will approximate the instantaneous velocity. The average velocity over a time interval is \( \dfrac{\Delta\text{position}}{\Delta\text{time}} \), which is the slope of the <strong>secant line</strong> through two points on the graph of height versus time. The instantaneous velocity at a particular time and height is the slope of the <strong>tangent line</strong> to the graph at the point given by that time and height.</p>
<figure><img src="images/image004.png" alt="graph"/></figure>

<div class="important">
	<h4>Average vs Instantaneous Velocity</h4>
	<p><strong>Average velocity</strong> = \( \dfrac{\Delta\text{position}}{\Delta\text{time}} \) = slope of the secant line through 2 points.</p>
	<p> <strong>Instantaneous velocity</strong> = slope of the line tangent to the graph.</p>
</div>

</section>

<section><h2>Tangent Lines</h2>

<div class="example">
	<h4>Try this!</h4>
	<p>The graph below is the graph of \( y=f(x) \). We want to find the slope of the tangent line at the point (1, 2). </p>
	<figure><img src="images/image005.png" alt="graph"/></figure>
	<p>First, draw the secant line between (1, 2) and (2, −1) and compute its slope.</p>
	<p>Now draw the secant line between (1, 2) and (1.5, 1) and compute its slope.</p>
	<p>Compare the two lines you have drawn. Which would be a better approximation of the tangent line to the curve at (1, 2)?</p>
	<p>Now draw the secant line between (1, 2) and (1.3, 1.5) and compute its slope. Is this line an even better approximation of the tangent line?</p>
	<p>Now draw your best guess for the tangent line and measure its slope. Do you see a pattern in the slopes?</p>
	<p>You should have noticed that as the interval got smaller and smaller, the secant line got closer to the tangent line and its slope got closer to the slope of the tangent line. That’s good news&ndash;we know how to find the slope of a secant line.</p>
	<p>In some applications, we need to know where the graph of a function \(f(x)\) has horizontal tangent lines (slopes = 0).</p>
</div>

<div class="example">
	<h4>Example 1</h4>
	<p>Below is the graph of \(y = g(x)\). At what values of \(x\) does the graph of \(g(x)\) have horizontal tangent lines?</p>
	<figure><img src="images/image006.png" alt="graph"/></figure>
	<p>The tangent lines to the graph of \(g(x)\) are horizontal (slope = 0) when \(x\approx -1, 1, 2.5, \text{ and } 5\).</p>
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
			<td><a href="../chapter1/section1-8.php">&larr; Previous Section</a></td>
			<td><a href="section2-2.php">Next Section &rarr; </a></td>
		</tr>
	</table>
</footer>
</div>
</body>
</html>