<!DOCTYPE html>
<html lang="en">
<?php include '../includes/head.html'; ?>
<body>
<?php include '../includes/geogebra_main_script.html'; ?>
<?php include 'geogebra/tangent_line_manipulative.html'; ?>
<!--GeoGebra script includes must come after body and before any NAV includes. Ctrl + Shift + M copies code-->
<?php include '../includes/nav.html'; ?>
<div class="page-wrap">
<header class="main-nav-buttons">
	<a href="#main-nav" class="open-menu">&equiv; </a>
	<a href="#close-nav" class="close-menu">&times; </a>
	<!--<h1>menu</h1>-->
 </header>

 
<section class="content">
<h1>Section 2.2: The Derivative</h1>
<section><h2>Definition of the Derivative</h2>

<p>When working with linear functions, we could find the slope of a line to determine the rate at which the function is changing.  For an arbitrary function, we can determine the <b>average rate of change</b> of the function.  This is the slope of the secant line through those two points on the graph.</p>

<div class="important">
	<h4>Average Rate of Change</h4>
	<p>Average Rate of Change = \( \dfrac{\Delta \text{output}}{\Delta \text{input}} = \dfrac{f(b) - f(a)}{b-a}\)</p>
	<p> = the slope of the secant line through the two points \(\left(a, f(a)\right)\) and \(\left(b, f(b)\right)\)</p>
</div>

<div class="example">
	<h4>Example 1</h4>
	<p>Suppose the total cost of producing \(x\) items is given by \(TC(x) = 200+30x-0.1x^2\).  Determine the average rate of change of cost when increasing production from 25 units to 100 units.</p>
	
	<p>The cost when producing 25 units is \(TC(25) = 200+30(25)-0.1(25)^2 = \$887.50\)</p>
	<p>The cost when producing 100 units is \(TC(100) = 200+30(100)-0.1(100)^2 = \$2200\)</p>
	
	<p>The cost increased by $2200-$887.50 = $1312.50 while production increased by 100 – 25 = 75 items.  The average rate of change is:<br/>
	\[\frac{TC(100) - TC(25)}{100 - 25} = \frac{2200-887.50}{100-25} = \frac{1312.50}{75} = 17.50 \text{dollars per unit}\]</p>
	
	<p>This tells us that on average the cost increases by $17.50 for each unit produced.</p>
	<p>The average rate of change is the slope of the secant line between (25, 887.50) and (100, 2200)<br/>
	<img src="images/TCsecant1.png" alt="graph" width="600"/></p>
</div>

<p>Thinking about the last example, suppose instead we asked the question "How fast are costs increasing when production is 25 units?"  Notice this is a different kind of question.  The question in the example asked for the rate of change over an interval, as production increased from one value to another.  This question is again asking for a rate of change, but an <b>instantaneous rate of change</b>, at a particular moment.</p>
<p>We don’t yet have a way to calculated rate of change except over an interval.  In the next example we will explore a couple ways to estimate the instantaneous rate of change.

<div class="example">
	<h4>Example 2</h4>
	<p>Suppose the total cost of producing \(x\) items is given by \(TC(x) = 200+30x-0.1x^2\).  Estimate the instantaneous rate of change when 25 items are being produced.</p>
	
	<p>We can see in the previous graph that the secant slope on the interval \(25\le x \le 100\) is not a particularly good estimate of the instantaneous rate of change since the cost function seems steeper at \(x = 25\) then over the secant slope.  We could improve the estimate by choosing a smaller interval.</p>
	<p><u>Approach 1: Using smaller intervals</u></p>
	<p>Using the interval \(25\le x \le 30\), the average rate of change would be:<br/>
	\[\frac{TC(30) - TC(25)}{30 - 25} = \frac{1010-887.50}{30-25} = \frac{122.50}{5} = 24.50 \text{dollars per unit}\]</p>
	<p>Using an interval on the other side, \(20\le x \le 25\), the average rate of change would be:<br/>
	\[\frac{TC(25) - TC(20)}{25 - 20} = \frac{887.50-760}{25-20} = \frac{127.5}{5} = 25.50 \text{dollars per unit}\]</p>
	<p>Visually, we can see both these secant lines seem to approximate the function pretty well.<br/>
	<img src="images/TCsecant2.png" alt="graph" width="600"/>
	</p>
	<p>We would expect the instantaneous rate of change to be somewhere between these two values.  Averaging them, we get an estimate of $25 per unit for the instantaneous rate of change.</p>
	
	<p><u>Approach 2: Estimating from the graph.</u></p>
	<p>This approach is more commonly used when we only have the graph of a function, and don’t have a formula to evaluate, but we will illustrate it here using the same function.</p>
	<p>The instantaneous rate of change is the slope of the tangent line, which is the line that just touches the graph at the point of interest, and has the same rate of change (slope) as the function does at the point.  Given a graph, we can sketch in a <b>tangent line</b> by holding a ruler up to the graph, and drawing in a line that touches the graph when \(x = 25\) and has the same slope.<br/>
	<img src="images/TCtangent.png" alt="graph" width="600"/>
	</p>
	<p>To estimate the instantaneous rate of change, we can now calculate the slope of this drawn-in line.  Looking at the graph, the tangent line appears to pass approximately through (30, 1000) and (70, 2000) which would give a slope of \(\frac{2000-1000}{70-30}=\frac{1000}{40}=25\) dollars per unit.</p>
</div>

<p>Next we will explore the same ideas using a function defined in a table, and in another context.</p>

<div class="example">
	<h4>Example 3</h4>
	<p>Suppose we drop a tomato from the top of a 100 foot building and time its fall. </p>
	<figure>
		<img src="images/image003.png" alt="graph and table"/>
	</figure>
	<ol class="smlatin">
		<li>How long did it take for the tomato to drop 100 feet? </li>
		<li>How far did the tomato fall during the first second? </li>
		<li>How far did the tomato fall during the last second? </li>
		<li>How far did the tomato fall between \(t =0.5\) and \(t = 1\)?</li>
		<li>What was the average velocity of the tomato during its fall?</li>
		<li>What was the average velocity between \( t=1\) and \(t=2\) seconds?</li>
		<li>How fast was the tomato falling 1 second after it was dropped?</li>
	</ol>
	
	<p>Some of these questions are pretty easy to answer, while some are more complex.</p>
	<ol class="smlatin">
		<li>From the table, it took 2.5 seconds for the tomato to drop 100 feet</li>
		<li>During the first second, the tomato fell 100 – 84 = 16 feet</li>
		<li>During the last second, the tomato fell 64 – 0 = 64 feet</li>
		<li>Between \(t =0.5\) and \(t = 1\) the tomato fell 96 – 84 = 12 feet</li>
		<li>Velocity is similar to speed, and is a rate of change.  We can calculate average velocity the same way we did average rate of change earlier.<br/>
		    \[\text{Average velocity}=\frac{\text{distance fallen}}{\text{total time}}=\frac{\Delta\text{position}}{\Delta\text{time}}=\frac{-100 \text{ ft}}{2.5 \text{ s}}=-40 \text{ ft/s}\]</li>
		<li>Between \( t=1\) and \(t=2\) seconds, \[\text{Average velocity}=\frac{\Delta\text{position}}{\Delta\text{time}}=\frac{36\text{ ft}- 84\text{ ft}}{2\text{ s} - 1\text{ s}}=\frac{-48 \text{ ft}}{1 \text{ s}}=-48 \text{ ft/s}\]</li>
		<li>	<p>This question is significantly different from the previous two questions about average velocity. Here we want the <strong>instantaneous velocity</strong>, the velocity at an instant in time. Unfortunately the tomato is not equipped with a speedometer so we will have to give an approximate answer.  Like in our Approach 1 in the previous example, we will estimate it using secant slopes.</p>
			<p>One crude approximation of the instantaneous velocity after 1 second is simply the average velocity during the entire fall, -40 ft/s . But the tomato fell slowly at the beginning and rapidly near the end so the "-40 ft/s" estimate may or may not be a good answer.</p>
			<p>We can get a better approximation of the instantaneous velocity at \(t=1\) by calculating the average velocities over a short time interval near \(t = 1\). The average velocity between \(t = 0.5\) and \(t = 1\) is \(\dfrac{-12\text{ feet}}{0.5\text{ s}} = -24\text{ ft/s}\), and the average velocity between \(t = 1\) and \(t = 1.5\) is \(\dfrac{-20\text{ feet}}{0.5\text{ s}} = -40\text{ ft/s}\) so we can be reasonably sure that the instantaneous velocity is between -24 ft/s and -40 ft/s.  The average, –32 ft/s, would be a good estimate for the instantaneous velocity.</p>
		</li>
	</ol>
	
	<p>In general, the shorter the time interval over which we calculate the average velocity, the better the average velocity will approximate the instantaneous velocity. The average velocity over a time interval is \( \dfrac{\Delta\text{position}}{\Delta\text{time}} \), which is the slope of the <strong>secant line</strong> through two points on the graph of height versus time. The instantaneous velocity at a particular time and height is the slope of the <strong>tangent line</strong> to the graph at the point given by that time and height.</p>
	<figure><img src="images/image004.png" alt="graph"/></figure>
</div>

<div class="important">
	<h4>Average vs Instantaneous Velocity</h4>
	<p><strong>Average velocity</strong> = \( \dfrac{\Delta\text{position}}{\Delta\text{time}} \) = slope of the secant line through 2 points.</p>
	<p> <strong>Instantaneous velocity</strong> = slope of the line tangent to the graph.</p>
</div>

<div class="example">
	<h4>Example 4</h4>
	<p>Suppose we set up a machine to count the number of bacteria growing on a Petri plate. At first there are few bacteria so the population grows slowly. Then there are more bacteria to divide so the population grows more quickly. Later, there are more bacteria and less room and nutrients available for the expanding population, so the population grows slowly again. Finally, the bacteria have used up most of the nutrients, and the population declines as bacteria die.</p>
	<figure><img src="images/image114.png" alt=" bacteria 1"/></figure>
	<p>Use the population graph to estimate the answer to the questions below.</p>
	<ol class="smlatin">
		<li>What is the bacteria population at time \(t = 3\) days?		</li>
		<li>What is the population increment from \(t = 3\) to \(t =10\) days?	</li>
		<li>What is the <strong>rate</strong> of population growth from \(t = 3\) to \(t = 10\) days?</li>
		<li>What is the <strong>rate</strong> of population growth on the third day, at \(t = 3\) ?</li>
	</ol>
	<ol class="smlatin">
		<li>From the graph, at \(t = 3\), the population is about 0.5 thousand, or 500 bacteria.</li>
		<li>At \(t = 10\), the population is about 4.5 thousand, so the increment is about 4000 bacteria.</li>
		<li><p>The rate of growth from \(t = 3\) to \(t = 10\) is the average rate of change in population during that time:
				\[ \begin{align*}
					\text{average change in population } &amp; =   \frac{\text{change in population}}{\text{change in time}}\\
					 &amp; =  \frac{\Delta\text{population}}{\Delta\text{time}} \\
					 &amp; =  \frac{4000\text{ bacteria}}{7\text{ days}} \\
					 &amp; \approx  570\text{ bacteria/day}.
				\end{align*} \]
			</p>
			<p>This is the slope of the secant line through the two points (3, 500) and (10, 4500).</p>
		</li>
		<li>
			<p>This question is asking for the <strong>instantaneous</strong> rate of population change, the slope of the line which is <strong>tangent</strong> to the population curve at (3, 500). If we sketch a line approximately tangent to the curve at (3, 500) and pick two points near the ends of the tangent line segment , we can estimate that instantaneous rate of population growth is approximately 320 bacteria/day .</p>
			<figure><img src="images/image115.png" alt=" bacteria 2"/></figure>
		</li>
	</ol>
</div>

<div class="videoplayer w639">
	<video id="video_2.2.1" class="video-js vjs-default-skin" controls preload="metadata" width="639" height="auto">
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-2/intro_to_derivatives_and_tangent_lines.mp4" type='video/mp4' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-2/intro_to_derivatives_and_tangent_lines.webm" type='video/webm' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

<p>In the previous examples, we noticed that as the interval got smaller and smaller, the secant line got closer to the tangent line and its slope got closer to the slope of the tangent line.  That’s good news – we know how to find the slope of a secant line.</p>
<p>Let's explore further this idea of finding the tangent slope based on the secant slope.</p>

<div class="example">
	<h4>Example 5</h4>
	<p>Find the slope of the line \(L\) in the graph below which is tangent to \(f(x) = x^2\) at the point (2,4). </p>

	<p>We could estimate the slope of \(L\) from the graph, but we won't. Instead, we will use the idea that secant lines over tiny intervals approximate the tangent line.</p>

	<figure><img src="images/image020.png" alt="graph"/><img src="images/image021.png" alt="graph"/></figure>

	<p>We can see that the line through (2,4) and (3,9) on the graph of \(f\) is an approximation of the slope of the tangent line, and we can calculate that slope exactly: \(m = \frac{\Delta y}{\Delta x} = \frac{9-4}{3-2} = 5\). But \(m = 5\) is only an estimate of the slope of the tangent line and not a very good estimate. It's too big. We can get a better estimate by picking a second point on the graph of \(f\) which is closer to (2,4) &ndash; the point (2,4) is fixed and it must be one of the points we use. </p>

	<p>From the second figure, we can see that the slope of the line through the points (2,4) and (2.5,6.25) is a better approximation of the slope of the tangent line at (2,4): \(m = \frac{\Delta y}{\Delta x} = \frac{6.25 - 4}{2.5 - 2} = \frac{2.25}{0.5} = 4.5 \), a better estimate, but still an approximation. We can continue picking points closer and closer to (2,4) on the graph of \(f\), and then calculating the slopes of the lines through each of these points and the point (2,4):</p>

	<table class="border">
		<caption>Points to the left of (2,4)</caption>
		<tr>
			<td>\( x \)</td>
			<td>\( y=x^2 \)</td>
			<td>Slope of line through \( (x,y) \) and (2,4).</td>
		</tr>
		<tr>
			<td>1.5</td>
			<td>2.25</td>
			<td>3.5</td>
		</tr>
		<tr>
			<td>1.9</td>
			<td>3.61</td>
			<td>3.9</td>
		</tr>
		<tr>
			<td>1.99</td>
			<td>3.9601</td>
			<td>3.99</td>
		</tr>
	</table>
	<table class="border">
		<caption>Points to the right of (2,4)</caption>
		<tr>
			<td>\( x \)</td>
			<td>\( y=x^2 \)</td>
			<td>Slope of line through \( (x,y) \) and (2,4).</td>
		</tr>
		<tr>
			<td>3</td>
			<td>9</td>
			<td>5</td>
		</tr>
		<tr>
			<td>2.5</td>
			<td>6.25</td>
			<td>4.5</td>
		</tr>
		<tr>
			<td>2.01</td>
			<td>4.0401</td>
			<td>4.01</td>
		</tr>
	</table>
	<p>The only thing special about the x–values we picked is that they are numbers which are close, and very close, to \(x = 2\). Someone else might have picked other nearby values for \(x\). As the points we pick get closer and closer to the point (2,4) on the graph of \( y = x^2\), the slopes of the lines through the points and (2,4) are better approximations of the slope of the tangent line, and these slopes are getting closer and closer to 4.</p>

	<p>We can bypass much of the calculating by not picking the points one at a time: let's look at a general point near (2,4). Define \( x = 2 + h\) so \(h\) is the increment from 2 to \(x\). If \(h\) is small, then \(x = 2 + h\) is close to 2 and the point \((2+h, f(2+h) ) = \left(2+h, (2+h)^2\right) \) is close to (2,4). The slope \(m\) of the line through the points (2,4) and \(\left(2+h, (2+h)^2\right)\) is a good approximation of the slope of the tangent line at the point (2,4):</p>
	<figure>
		<img src="images/image022.png" alt="graph"/>
		<figcaption>\( m=\dfrac{(2+h)^2-4}{(2+h)-2}=\dfrac{\left(4+4h+h^2\right)-4}{h}=\dfrac{4h+h^2}{h}=\dfrac{h(4+h)}{h}=4+h\)</figcaption>
	</figure>

	<p>The value \( m = 4 + h \) is the slope of the secant line through the two points (2,4) and \(\left( 2+h, (2+h)^2 \right)\). As \(h\) gets smaller and smaller, this slope approaches the slope of the tangent line to the graph of \(f\) at (2,4). </p>

	<p>More formally, we could write: \[\text{Slope of the tangent line} = \dfrac{\Delta y}{\Delta x} = \lim\limits_{h\to 0} (4+h). \]</p>

	<p>We can easily evaluate this limit using direct substitution, finding that as the interval \(h\) shrinks towards 0, the secant slope approaches the tangent slope, 4.</p>

</div>
<p>Use the applet below to explore this.  You can drag the base point on the graph to explore the behavior at different locations on the graph.
Once setting the base point, use the slider to see how the secant lines approach the tangent line as \(h\) approaches zero.</p>
<!--
	<div style="width:676px;height:482px;" id="applet_container" class="geogebra"></div>
-->
<div id="jxgsecantslider" style="width:400px; height:400px; margin:auto;"></div>
<script type="text/javascript">
(function() {
  var f = function(x) {return .5*(x+1)*(x+1)-3;}    ;//.1*Math.pow(x,3)-2*x+1;
  var brd = JXG.JSXGraph.initBoard('jxgsecantslider', {boundingbox: [-5, 5, 5, -5], axis:true}),
    g = brd.create('functiongraph',[f]),
    p1 = brd.create('glider', [-3,-1,g], {size:5,name:"(x, f(x))"}),
    s = brd.create('slider', [[1,-3.5],[3,-3.5],[0.001,1.8,2]], {name:"h"}),
    p2 = brd.create('point', [function(){ return p1.X()+s.Value();},
        function(){ return f(p1.X()+s.Value());}], {face:'[]',size:2,name:function(){return (s.Value()<.1)?"":"(x+h, f(x+h))";}}),
    line = brd.create('line',[p1,p2],{strokeColor:'#ff0000'});
})();
</script>

<p>Finding tangent slopes and finding the instantaneous rate of change are the same problem.  In each problem we wanted to know how rapidly something was <strong>changing at an instant in time</strong>, and the answer turned out to be finding the <strong>slope of a tangent line</strong>, which we <em>approximated</em> with the <strong>slope of a secant line</strong>. This idea is the key to defining the slope of a curve.</p>

<div class="videoplayer w639">
	<video id="video_2.2.2" class="video-js vjs-default-skin" controls preload="metadata" width="639" height="auto">
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-2/tangent_line_to_x3.mp4" type='video/mp4' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-2/tangent_line_to_x3.webm" type='video/webm' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

<div class="important">
	<h4>The Derivative</h4>
	<p>We can view the derivative in different ways. Here are a three of them:</p>
	<ul>
		<li>The derivative of a function \(f\) at a point (x, f(x)) is the instantaneous rate of change.</li>
		<li>The derivative is the slope of the tangent line to the graph of \(f\) at the point \((x, f(x))\).</li>
		<li>The derivative is the slope of the curve \(f(x)\) at the point \((x, f(x))\).</li>
	</ul>
	<p>A function is called <strong>differentiable</strong> at \((x, f(x))\) if its derivative exists at \((x, f(x))\).</p>
	
	<h5>Notation for the Derivative</h5>
	<p>The derivative of \(y = f(x)\) with respect to \(x\) is written as \[f'(x)\] (read aloud as "\(f\) prime of \(x\)"), or \[y'\] (read aloud as "why prime") or \[\frac{dy}{dx}\] (read aloud as "dee why dee ex"), or \[\frac{df}{dx}.\]</p>
	<p>The notation that resembles a fraction is called <strong>Leibniz notation</strong>. It displays not only the name of the function (\(f\) or \(y\)), but also the name of the variable (in this case, \(x\)). It looks like a fraction because the derivative is a slope. In fact, this is simply \( \frac{\Delta y}{\Delta x} \) written in Roman letters instead of Greek letters.</p>
	
	<h5>Verb Forms</h5>
	<p>We <strong>find the derivative</strong> of a function, or <strong>take the derivative</strong> of a function, or <strong>differentiate</strong> a function.</p>
	<p>We use an adaptation of the \( \frac{df}{dx} \) notation to mean "find the derivative of \(f(x)\):" \[\frac{d}{dx}\left[f(x)\right]=\frac{df}{dx}.\] [The book uses parentheses instead of brackets&ndash;both are acceptable forms of the notation.]</p>
	
	<h5>Formal Algebraic Definition</h5>
	<p>\[f'(x)=\lim\limits_{h\to 0} \dfrac{f(x+h)-f(x)}{h}\]</p>
	
	<h5>Practical Definition</h5>
	<p>The derivative can be approximated by looking at an average rate of change, or the slope of a secant line, over a very tiny interval. The tinier the interval, the closer this is to the true instantaneous rate of change, slope of the tangent line, or slope of the curve.</p>
	
	<h5>Looking Ahead</h5>
	<p>We will have methods for computing exact values of derivatives from formulas soon. If the function is given to you as a table or graph, you will still need to approximate this way.</p>
</div>

<div class="videoplayer w639">
	<video id="video_2.2.3" class="video-js vjs-default-skin" controls preload="metadata" width="639" height="auto">
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-2/tangent_line_to_sqrt_x_plus_1.mp4" type='video/mp4' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-2/tangent_line_to_sqrt_x_plus_1.webm" type='video/webm' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

<p>This is the foundation for the rest of this chapter. It’s remarkable that such a simple idea (the slope of a tangent line) and such a simple definition (for the derivative \( f'(x) \)) will lead to so many important ideas and applications.</p>

<div class="example">
	<h4>Example 6</h4>
	<p>Find the slope of the tangent line to \( f(x)=\frac{1}{x} \) at \(x = 3\).</p>
	<p>The slope of the tangent line is the value of the derivative \(f'(3)\). \( f(3)=\frac{1}{3}\) and \( f(3+h)=\frac{1}{3+h} \), so, using the formal limit definition of the derivative, \[ f'(3)=\lim\limits_{h\to 0}\frac{f(3+h)-f(3)}{h}=\lim\limits_{h\to 0}\frac{\frac{1}{3+h}-\frac{1}{3}}{h}. \]</p>
	<p>We can simplify by giving the fractions a common denominator:
	\[ \begin{align*}
		\lim\limits_{h\to 0}\frac{\frac{1}{3+h}-\frac{1}{3}}{h} &amp; =  \lim\limits_{h\to 0}\frac{\frac{1}{3+h}\cdot\frac{3}{3}-\frac{1}{3}\cdot\frac{3+h}{3+h}}{h} \\
		 &amp; =  \lim\limits_{h\to 0}\frac{\frac{3}{9+3h}-\frac{3+h}{9+3h}}{h} \\
		 &amp; =  \lim\limits_{h\to 0}\frac{\frac{3-(3+h)}{9+3h}}{h} \\
		 &amp; =  \lim\limits_{h\to 0}\frac{\frac{3-3-h}{9+3h}}{h} \\
		 &amp; =  \lim\limits_{h\to 0}\frac{\frac{-h}{9+3h}}{h} \\
		 &amp; =  \lim\limits_{h\to 0}\frac{-h}{9+3h}\cdot\frac{1}{h} \\
		 &amp; =  \lim\limits_{h\to 0}\frac{-1}{9+3h} \\
	\end{align*} \] and the evaluate using direct substitution: \[\lim\limits_{h\to 0}\frac{-1}{9+3h}=\frac{-1}{9+3(0)}=-\frac{1}{9}.\]
	</p>
	<p>Thus, the slope of the tangent line to \( f(x)=\frac{1}{x} \) at \(x = 3\) is \( -\frac{1}{9} \).</p>
</div>
</section>

<section><h2>The Derivative as a Function</h2>

<p>We now know how to find (or at least approximate) the derivative of a function for any \(x\)-value; this means we can think of the derivative as a function, too. The inputs are the same \(x\)’s; the output is the value of the derivative at that \(x\) value.</p>

<div class="example">
	<h4>Example 7</h4>
	<p>Below is the graph of a function \( y=f(x) \). We can use the information in the graph to fill in a table showing values of \( f'(x): \)</p>
	<figure><img src="images/image023.png" alt="graph"/></figure>
	<p>At various values of \(x\), draw your best guess at the tangent line and measure its slope. You might have to extend your lines so you can read some points. In general, your estimate of the slope will be better if you choose points that are easy to read and far away from each other. Here are estimates for a few values of \(x\) (parts of the tangent lines used are shown above in the graph):</p>
	<table class="border">
		<tr>
			<td>\( x \)</td>
			<td>\( y=f(x) \)</td>
			<td>\( f'(x)= \) the estimated <em>slope</em> of the tangent line to the curve at the point \( (x,y) \).</td>
		</tr>
		<tr>
			<td>0</td>
			<td>0</td>
			<td>1</td>
		</tr>
		<tr>
			<td>1</td>
			<td>1</td>
			<td>0</td>
		</tr>
		<tr>
			<td>2</td>
			<td>0</td>
			<td>-1</td>
		</tr>
		<tr>
			<td>3</td>
			<td>-1</td>
			<td>0</td>
		</tr>
		<tr>
			<td>3.5</td>
			<td>0</td>
			<td>2</td>
		</tr>
	</table>
	<p>We can estimate the values of \(f'(x)\) at some non-integer values of \(x\), too: \(f'(0.5) \approx 0.5\) and \(f'(1.3) \approx -0.3\).</p>
	<p>We can even think about entire intervals. For example, if \(0 \lt x \lt 1\), then \(f(x)\) is increasing, all the slopes are positive, and so \(f'(x)\) is positive. </p>
	<p>The values of \(f'(x)\) definitely depend on the values of \(x\), and \(f'(x)\) is a function of \(x\). We can use the results in the table to help sketch the graph of \(f'(x)\). </p>
	<figure><img src="images/image024.png" alt="derivative graph"/></figure>
</div>

<p>To get a better feel for this, explore the applet below.  The top graph is the graph of the original function \(g(x)\).
The bottom graph shows the slopes of \(g(x)\), so is a graph of the derivative, \(g'(x)\).  Drag the point <em>a</em> and
notice how the slope of the tangent line corresponds to the value of the derivative \(g'(x)\).</p>
<div id="jxgderivfunc" style="width:500px; height:250px;margin:auto;margin-bottom:15px"></div>
<div id="jxgderivderiv" style="width:500px; height:250px;margin:auto;"></div>
<script type="text/javascript">
(function() {
  var f = function(x) {return .1*Math.pow(x,3)+.2*Math.pow(x,2)-2*x-1};
  var df = JXG.Math.Numerics.D(f);
  var board = JXG.JSXGraph.initBoard('jxgderivfunc', {boundingbox: [-7,5,7,-5], axis:true}),
    dboard = JXG.JSXGraph.initBoard('jxgderivderiv', {boundingbox: [-7,5,7,-5], axis:true}),
    g = board.create('functiongraph',[f]),
    a = board.create('glider', [-2,3,g], {size:4,name:"a"}),
    p2 = board.create('point', [function(){ return a.X()+1;},
    	function(){ return a.Y()+df(a.X());}], {visible:false, style:1, name:""}),
    l1 = board.create('line', [a,p2],{}),
    p3 = board.create('point', 
         [function() { return p2.X();}, function() {return a.Y();}],{visible:false, style:1, name:''}),
    tri = board.create('polygon', [a,p2,p3], {}),
    slopeHline = board.create('segment', [p2,p3],
           {strokeColor:'red', strokeWidth:4}), 
    t = board.create('text', 
                  [function(){return a.X()+1.3;},
                   function(){return a.Y()+(p2.Y()-p3.Y())/2;},
                   function(){ return "m="+(p2.Y()-p3.Y()).toFixed(2);}],
                                        {visible:true,fontSize:15}),
    dcurve = dboard.create('functiongraph',[df]),
    da = dboard.create('point', 
	  [function() {return a.X();}, 
	   function() {return df(a.X());}], 
			  {visible:true, style:1, fixed:true, name:''}),
    dxpt = dboard.create('point', 
	  [function() {return a.X();}, 
	   function() {return 0.0;}], 
			  {visible:false, style:1, fixed:true, name:''}),
    dupSlopeHline = dboard.create('segment', [da,dxpt],
				  {strokeColor:'red', strokeWidth:4}),
    t2 = dboard.create('text', 
                  [function(){return a.X()+0.3;},
                   function(){return (p2.Y()-p3.Y())/2;},
                   function(){ return "g&prime;(x) = "+(p2.Y()-p3.Y()).toFixed(2);}],
                   {visible:true,fontSize:15,color:"red"});
    
    a.on('drag', function() {dboard.update();});
})();
</script>

<div class="videoplayer w639">
	<video id="video_2.2.4" class="video-js vjs-default-skin" controls preload="metadata" width="639" height="auto">
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-2/scketch_fprime_from_f_graph.mp4" type='video/mp4' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-2/scketch_fprime_from_f_graph.webm" type='video/webm' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

<div class="example">
	<h4>Example 8</h4>
	<p>Shown is the graph of the height \(h(t)\) of a rocket at time \(t\).</p>
	<figure><img src="images/image025.png" alt="graph"/></figure>
	<p>Sketch the graph of the <strong>velocity</strong> of the rocket at time \(t\).  (Velocity is the <strong>derivative</strong> of the height function, so it is the <strong>slope of the tangent</strong> to the graph of position or height.)</p>
	<p>We can estimate the slope of the function at several points.  The lower graph below shows the velocity of the rocket.  This is \(v(t) = h'(t)\).</p>
	<figure><img src="images/image026.png" alt="derivative"/></figure>
</div>

<p>In some applications, we need to know where the graph of a function f(x) has horizontal tangent lines (slopes = 0). </p>
<div class="example">
	<h4>Example 9</h4>
	<p>Below is the graph of \(y = g(x)\). At what values of \(x\) does the graph of \(g(x)\) have horizontal tangent lines?</p>
	<figure><img src="images/image006.png" alt="graph"/></figure>
	<p>The tangent lines to the graph of \(g(x)\) are horizontal (slope = 0) when \(x\approx -1, 1, 2.5, \text{ and } 5\).</p>
</div>

<p>We can also find derivative functions algebraically using limits.</p>

<div class="example">
	<h4>Example 10</h4>
	<p>Find \( \frac{d}{dx}\left( 2x^2-4x-1 \right) \).</p>
	<p>Setting up the derivative using a limit, \[ f'(x)=\lim\limits_{h\to 0}\frac{f(x+h)-f(x)}{h}.\]</p>
	<p>We will start by simplifying \( f(x+h) \) by expanding:
	\[ \begin{align*}
		f(x+h) &amp; =  2(x+h)^2-4(x+h)-1 \\
		 &amp; =  2(x^2+2xh+h^2)-4(x+h)-1 \\
		 &amp; =  2x^2+4xh+2h^2-4x-4h-1
	\end{align*} \]
	</p>
	<p>Now finding the limit:
	\[ \begin{align*}
		f'(x) &amp; =  \lim\limits_{h\to 0}\frac{f(x+h)-f(x)}{h} \\
		 &amp; =  \lim\limits_{h\to 0} \frac{(2x^2+4xh+2h^2-4x-4h-1)-(2x^2-4x-1)}{h} \\
		 &amp; =  \lim\limits_{h\to 0} \frac{2x^2+4xh+2h^2-4x-4h-1-2x^2+4x+1}{h} \qquad \text{(Substitute in the formulas.)} \\
		 &amp; =  \lim\limits_{h\to 0} \frac{4xh+2h^2-4h}{h} \qquad \text{(Now simplify.)}\\
		 &amp; =  \lim\limits_{h\to 0} \frac{h(4x+2h-4)}{h} \qquad \text{(Factor out the \( h \), then cancel.)} \\
		 &amp; =  \lim\limits_{h\to 0} (4x+2h-4)
	\end{align*} \]
	We can find the limit of this expression by direct substitution: \[ f'(x)=\lim\limits_{h\to 0} (4x+2h-4)=4x-4\]</p>
	<p>Notice that the derivative depends on \(x\), and that this formula will tell us the slope of the tangent line to \(f\) at any value \(x\). For example, if we wanted to know the tangent slope of \(f\) at \(x = 3\), we would simply evaluate: \( f'(3)=4(3)-4=8 \).</p>
</div>

<p>A formula for the derivative function is very powerful, but as you can see, calculating the derivative using the limit definition is <strong>very</strong> time consuming. In the next section, we will identify some patterns that will allow us to start building a set of rules for finding derivatives without needing the limit definition.</p>

</section>

<section><h2>Interpreting the Derivative</h2>
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

<div class="example">
	<h4>Example 7</h4>
	<p>Suppose the demand curve for widgets was given by \( D(p)=\frac{1}{p} \), where \(D\) is the quantity of widgets, in thousands, at a price of \(p\) dollars. Interpret the derivative of \(D\) at \(p = \)$3.</p>
	<p>Note that we calculated \( D'(3) \) earlier to be \( D'(3)=-\frac{1}{9}\approx -0.111 \).</p>
	<p>Since \(D\) has units <q>thousands of widgets</q> and the units for \(p\) is dollars of price, the units for \(D'\) will be \( \frac{\text{thousands of widgets}}{\text{dollar of price}} \). In other words, it shows how the demand will change as the price increases.</p>
	<p>Specifically, \( D'(3)\approx -0.111 \) tells us that when the price is $3, the demand will <em>decrease</em> by about 0.111 thousand items for every dollar the price increases.</p>
</div>

<p>(Note: The screen shots in the following video are from an earlier version of the book, so some of the section numbers or titles may not look the same. However, much of the content is the same, and the comments still apply.)</p>
<div class="videoplayer w639">
	<video id="video_2.2.5" class="video-js vjs-default-skin" controls preload="metadata" width="639" height="auto">
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-2/general_comments.mp4" type='video/mp4' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-2/general_comments.webm" type='video/webm' />
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
			<td><a href="section2-1.php">&larr; Previous Section</a></td>
			<td><a href="section2-3.php">Next Section &rarr; </a></td>
		</tr>
	</table>
</footer>
</div>
</body>
</html>