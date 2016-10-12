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
<h1>Section 2.5: Chain Rule</h1>

<p>There is one more type of complicated function that we will want to know how to differentiate: composition. The Chain Rule will let us find the derivative of a composition. (This is the last derivative rule we will learn!)</p>

<div class="example">
	<h4>Example 1</h4>
	<p>Find the derivative of \( y=\left(4x^3+15x\right)^2 \)</p>
	<p>This is not a simple polynomial, so we can’t use the basic building block rules yet. It is a product, so we could write it as \(y=\left(4x^3+15x\right)^2=\left(4x^3+15x\right)\left(4x^3+15x\right)\) and use the product rule. Or we could multiply it out and simply differentiate the resulting polynomial. I’ll do it the second way:
	\[ \begin{align*}
		y &amp; =  \left(4x^3+15x\right)^2\\
		 &amp; =  16x^6+120x^4+225x^2\\
		y' &amp; =  96x^5+480x^3+450x
	\end{align*} \]
	</p>
</div>

<p>Now suppose we want to find the derivative of \(y=\left(4x^3+15x\right)^{20}\). We <strong>could</strong> write it as a product with 20 factors and use the product rule, or we <strong>could</strong> multiply it out. But I don't want to do that, do you?</p>

<p>We need an easier way, a rule that will handle a composition like this. The Chain Rule is a little complicated, but it saves us the much more complicated algebra of multiplying something like this out. It will also handle compositions where it wouldn't be possible to <q>multiply it out.</q></p>

<p>The Chain Rule is a common place for students to make mistakes. Part of the reason is that the notation takes a little getting used to. And part of the reason is that students often forget to use it when they should. When should you use the Chain Rule? Almost every time you take a derivative.</p>


<div class="important">
	<h4>Derivative Rules: Chain Rule</h4>
	<p>In what follows, \(f\) and \(g\) are differentiable functions with \( y=f(u) \) and \( u=g(x) \).</p>
	<h5>Chain Rule (Leibniz notation)</h5>
	<p>\[\frac{dy}{dx}=\frac{dy}{du}\cdot\frac{du}{dx}\]</p>
	<p>Notice that the \(du\)’s seem to cancel. This is one advantage of the Leibniz notation &ndash; it can remind you of how the chain rule chains together.</p>
	
	<h5>Chain Rule (using prime notation)</h5>
	<p>\[f'(x)=f'(u)\cdot g'(x)=f'\left(g(x)\right)\cdot g'(x)\]</p>
	
	<h5>Chain Rule (in words)</h5>
	<p>The derivative of a composition is the derivative of the outside (with the inside staying the same) TIMES the derivative of the inside.</p>
</div>

<p>I recite the version in words each time I take a derivative, especially if the function is complicated.</p>

<div class="videoplayer w639">
	<video id="video_2.5.1" class="video-js vjs-default-skin" controls preload="metadata" width="639" height="auto">
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-5/chain_rule_intro_and_exs.mp4" type='video/mp4' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-5/chain_rule_intro_and_exs.webm" type='video/webm' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

<div class="example">
	<h4>Example 2</h4>
	<p>Find the derivative of \( y=\left(4x^3+15x\right)^2 \)</p>
	<p>This is the same one we did before by multiplying out. This time, let’s use the Chain Rule: The inside function is what appears inside the parentheses: \( 4x^3+15x \). The outside function is the first thing we find as we come in from the outside &ndash; it’s the square function, \((\text{inside})^2\).</p>
	<p>The derivative of this outside function is \((2\cdot\text{inside})\). Now using the chain rule, the derivative of our original function is \((2\cdot\text{inside})\) TIMES the derivative of the inside (which is \( 12x^2+15 \)):
	\[ y'=2\left(4x^3+15x\right)\left(12x^2+15 \right)\]
	</p>
</div>

<p>If you multiply this out, you get the same answer we got before. Hurray! Algebra works!</p>

<div class="example">
	<h4>Example 3</h4>
	<p>Find the derivative of \( y=\left(4x^3+15x\right)^{20} \).</p>
	<p>Now we have a way to handle this one. It’s the derivative of the outside TIMES the derivative of the inside.</p>
	<p>The outside function is \( \left(\text{inside}\right)^{20} \), which has derivative \( 20\left(\text{inside}\right)^{19}\), so \[y'=20\left(4x^3+15x\right)^{19}\left(12x^2+15\right).\]</p>
</div>

<div class="example">
	<h4>Example 4</h4>
	<p>Differentiate \( y=e^{x^2+5} \).</p>
	<p>This isn’t a simple exponential function; it’s a composition. Typical calculator or computer syntax can help you see what the “inside” function is here. On a TI calculator, for example, when you push the \( e^x \) key, it opens up parentheses: e^( . This tells you that the "inside" of the exponential function is the exponent. Here, the inside is the exponent \( x^2+5 \). Now we can use the Chain Rule: We want the derivative of the outside TIMES the derivative of the inside. The outside is the <q>\(e\) to the something</q> function, so its derivative is the same thing. The derivative of what’s inside is \(2x\). So \[\frac{d}{dx}\left( e^{x^2+5} \right)= \left( e^{x^2+5} \right)\cdot (2x).\]</p>
</div>



<div class="example">
	<h4>Example 5</h4>
	<p>The table gives values for \(f\) , \(f'\) , \(g\), and \(g'\) at a number of points. Use these values to determine \(( f \circ g )(x)\) and \(( f \circ g ) '(x)\) at \(x = -1\) and 0.</p>
	<table class="border">
		<tr>
			<td>\( x \)</td>
			<td>\( f(x) \)</td>
			<td>\( g(x) \)</td>
			<td>\( f'(x) \)</td>
			<td>\( g'(x) \)</td>
			<td>\((f\circ g)(x)\)</td>
			<td>\((g\circ f)(x)\)</td>
		</tr>
		<tr>
			<td>-1</td>
			<td>2</td>
			<td>3</td>
			<td>1</td>
			<td>0</td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>0</td>
			<td>-1</td>
			<td>1</td>
			<td>3</td>
			<td>2</td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>1</td>
			<td>1</td>
			<td>0</td>
			<td>-1</td>
			<td>3</td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>2</td>
			<td>3</td>
			<td>-1</td>
			<td>0</td>
			<td>1</td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>3</td>
			<td>0</td>
			<td>2</td>
			<td>2</td>
			<td>-1</td>
			<td></td>
			<td></td>
		</tr>
	</table>
	<p>
	\[ \begin{align*}
		(f\circ g)(-1) &amp; =  f\left(g(-1)\right)=f(3)=0\\
		(f\circ g)(0) &amp; =  f\left(g(0)\right)=f(1)=1\\
		(f\circ g)'(-1) &amp; =  f'\left(g(-1)\right)\cdot g'(-1)=f'(3)\cdot (0)=(2)(0)=0 \text{ and}\\
		(f\circ g)'(0) &amp; =  f'\left(g(0)\right)\cdot g'(0)=f'(1)\cdot (2)=(-1)(2)=-2
	\end{align*} \]
	</p>
</div>

<div class="videoplayer w639">
	<video id="video_2.5.2" class="video-js vjs-default-skin" controls preload="metadata" width="639" height="auto">
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-5/more_chain_rule_exs.mp4" type='video/mp4' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-5/more_chain_rule_exs.webm" type='video/webm' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

<div class="example">
	<h4>Example 6</h4>
	<p>If 2400 people now have a disease, and the number of people with the disease appears to double every 3 years, then the number of people expected to have the disease in \(t\) years is \( y=2400\cdot 2^{t/3} \).</p>
	<ol class="smlatin">
		<li>How many people are expected to have the disease in 2 years?</li>
		<li>When are 50,000 people expected to have the disease?</li>
		<li>How fast is the number of people with the disease expected to grow now and 2 years from now?</li>
	</ol>
	<ol class="smlatin">
		<li>In 2 years, \(y = 2400\cdot 2^{2/3} \approx 3,810\) people.</li>
		<li>We know \(y = 50,000\), and we need to solve \(50,000 = 2400\cdot 2^{t/3}\) for \(t\). We could start by isolating the exponential by dividing both sides by 2400,
			\[ \begin{align*}
				\frac{50000}{2400} &amp; =  2^{t/3} \\
				 \ln\left(\frac{50000}{2400}\right) &amp; =  \ln\left(2^{t/3}\right) \qquad \text{(Taking the natural log of both sides.)}\\
				\ln\left(\frac{50000}{2400}\right) &amp; =  \frac{t}{3}\ln(2) \qquad \text{(Using the exponent property for logs.)}\\
				t &amp; =  \frac{3\ln\left(\frac{50000}{2400}\right)}{\ln(2)}\approx 13.14\text{ years}\qquad \text{(Solving for \( t \).)}
			\end{align*} \]
		We expect 50,000 people to have the disease about 13.14 years from now.
		</li>
		<li>This is asking for \(\frac{dy}{dt}\) when \(t =\) 0 and 2 years. Using the chain rule,
			\[ \begin{align*}
				\frac{dy}{dt} &amp; =  \frac{d}{dt}\left(2400\cdot 2^{t/3}\right) \\
				 &amp; =  2400\cdot 2^{t/3}\cdot \ln(2)\cdot\frac{1}{3} \\
				\approx&amp; 554.5\cdot 2^{t/3}
			\end{align*} \]
		So, at \( t=0 \) the rate of growth of the disease is approximately \(554.5\cdot 2^0 \approx 554.5\) people/year. In 2 years the rate of growth will be approximately \(554.5\cdot 2^{2/3} \approx 880\) people/year.
		</li>
	</ol>
</div>

<section><h2>Derivatives of Complicated Functions</h2>
<p>You're now ready to take the derivative of some mighty complicated functions. But how do you tell what rule applies first? Work your way in from the outside &ndash; what do you encounter first? That’s the first rule you need. Use the Product, Quotient, and Chain Rules to peel off the layers, one at a time, until you’re all the way inside.</p>

<div class="example">
	<h4>Example 7</h4>
	<p>Find \( \frac{d}{dx}\left( e^{3x}\cdot\ln(5x+7) \right) \)</p>
	<p>Coming in from the outside, we see that this is a product of two (complicated) functions. So we’ll need the Product Rule first. we’ll fill in the pieces we know, and then we can figure the rest as separate steps and substitute in at the end: \[\frac{d}{dx}\left( e^{3x}\cdot\ln(5x+7) \right)=\left( \frac{d}{dx}\left( e^{3x}\right)\right)\cdot\ln(5x+7)+ e^{3x}\cdot \left(\frac{d}{dx}\left(\ln(5x+7) \right)\right)\]</p>
	<p>Now as separate steps, we’ll find \[\frac{d}{dx}\left( e^{3x}\right)=3e^{3x} \quad \text{ (using the Chain Rule)}\] and \[\frac{d}{dx}\left(\ln(5x+7) \right)=\frac{1}{5x+7}\cdot 5 \quad \text{ (also using the Chain Rule)}.\]</p>
	<p>Finally, to substitute these in their places:\[\frac{d}{dx}\left( e^{3x}\cdot\ln(5x+7) \right)=\left( 3e^{3x}\right)\cdot\ln(5x+7)+ e^{3x}\cdot \left(\frac{1}{5x+7}\cdot 5\right)\]</p>
	<p>(We can stop here &ndash; we don't need to try to simplify any further.)</p>
</div>

<div class="example">
	<h4>Example 8</h4>
	<p>Differentiate \( z=\left(\dfrac{3t^3}{e^t(t-1)}\right)^4 \)</p>
	<p>Don’t panic! As we come in from the outside, what’s the first thing we encounter? It’s that fourth power. That tells us that this is a composition, a (complicated) function raised to the fourth power.</p>
	<p>Step One: Use the Chain Rule. The derivative of the outside TIMES the derivative of the inside:
	\[\frac{dz}{dt}=\frac{d}{dt}\left(\frac{3t^3}{e^t(t-1)}\right)^4=4\left(\frac{3t^3}{e^t(t-1)}\right)^3\cdot \frac{d}{dt}\left(\frac{3t^3}{e^t(t-1)}\right)\]
	</p>
	<p>Now we’re one step inside, and we can concentrate on just the \( \frac{d}{dt}\left(\frac{3t^3}{e^t(t-1)}\right) \) part. Now, as you come in from the outside, the first thing you encounter is a quotient &ndash; this is the quotient of two (complicated) functions.</p>
	<p>Step Two: Use the Quotient Rule. The derivative of the numerator is straightforward, so we can just calculate it. The derivative of the denominator is a bit trickier, so we'll leave it for now:
	\[ \frac{d}{dt}\left(\frac{3t^3}{e^t(t-1)}\right)=\frac{\left( 9t^2 \right)\left( e^t(t-1) \right)-\left( 3t^3 \right)\left( \frac{d}{dt}\left( e^t(t-1) \right) \right)}{\left(e^t(t-1)\right)^2} \]
	</p>
	<p>Now we’ve gone one more step inside, and we can concentrate on just the \( \frac{d}{dt}\left( e^t(t-1) \right) \) part, which involves a product.</p>
	<p>Step Three: Use the Product Rule: \[ \frac{d}{dt}\left( e^t(t-1)\right) = \left( e^t \right)(t-1)+\left( e^t \right)(1)\]</p>
	<p>And now we’re all the way in &ndash; no more derivatives to take!</p>
	<p>Step Four: Now it’s just a question of substituting back &ndash; be careful now!</p>
	<p>
	\[ \frac{d}{dt}\left( e^t(t-1)\right) = \left( e^t \right)(t-1)+\left( e^t \right)(1) \] so
	\[ \frac{d}{dt}\left(\frac{3t^3}{e^t(t-1)}\right)=\frac{\left( 9t^2 \right)\left( e^t(t-1) \right)-\left( 3t^3 \right)\left( \left( e^t \right)(t-1)+\left( e^t \right)(1) \right)}{\left(e^t(t-1)\right)^2} \] so
	\[\frac{dz}{dt}=\frac{d}{dt}\left(\frac{3t^3}{e^t(t-1)}\right)^4=4\left(\frac{3t^3}{e^t(t-1)}\right)^3\cdot \left( \frac{\left( 9t^2 \right)\left( e^t(t-1) \right)-\left( 3t^3 \right)\left( \left( e^t \right)(t-1)+\left( e^t \right)(1) \right)}{\left(e^t(t-1)\right)^2} \right)\]
	</p>
	<p>Phew!</p>
</div>

</section>

<section><h2>What if the Derivative Doesn’t Exist?</h2>

<div class="important">
	<h4>Differentiable</h4>
	<p>A function is called <strong>differentiable</strong> at a point if its derivative exists at that point.</p>
</div>

<p>We’ve been acting as if derivatives exist everywhere for every function. This is true for most of the functions that you will run into in this class. But there are some common places where the derivative doesn’t exist.</p>

<p>Remember that the derivative is the slope of the tangent line to the curve. That’s what to think about.</p>

<p>Where can a slope not exist? <strong>If the tangent line is vertical, the derivative will not exist.</strong></p>

<div class="example">
	<h4>Example 9</h4>
	<p>Show that \( f(x)=\sqrt[3]{x}=x^{1/3} \) is not differentiable at \(x = 0\).</p>
	<p>Finding the derivative, \( f(x)=\frac{1}{3}x^{-2/3}=\frac{1}{3x^{2/3}} \). At \(x = 0\), this function is undefined. From the graph, we can see that the tangent line to this curve at \(x = 0\) is vertical with undefined slope, which is why the derivative does not exist at \(x = 0\).</p>
	<figure><img src="images/image037.png" alt="graph"/></figure>
</div>

<p>Where can a tangent line not exist?</p>

<p><strong>If there is a sharp corner (cusp) in the graph, the derivative will not exist at that point</strong> because there is no well-defined tangent line (a teetering tangent, if you will).</p> 

<p><strong>If there is a discontinuity in the graph</strong> (a jump, a break, a hole in the graph, or a vertical asymptote), the tangent line will be different on either side and <strong>the derivative will not exist at that point</strong>.</p>

<div class="example">
	<h4>Example 10</h4>
	<p>Show that \( f(x)=|x| \) is not differentiable at \(x = 0\).</p>
	<p>On the left side of the graph, the slope of the line is -1. On the right side of the graph, the slope is +1. There is no well-defined tangent line at the sharp corner at \(x = 0\), so the function is not differentiable at that point.</p>
	<figure><img src="images/image038.png" alt="graph"/></figure>
</div>

<div class="videoplayer w639">
	<video id="video_2.5.3" class="video-js vjs-default-skin" controls preload="metadata" width="639" height="auto">
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-5/not_differentiable.mp4" type='video/mp4' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-5/not_differentiable.webm" type='video/webm' />
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
			<td><a href="section2-4.php">&larr; Previous Section</a></td>
			<td><a href="section2-6.php">Next Section &rarr; </a></td>
		</tr>
	</table>
</footer>
</div>
</body>
</html>