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
<h1>Section 2.5: Derivatives of Formulas</h1>
<p>In this section, we’ll get the derivative rules that will let us find formulas for derivatives when our function comes to us as a formula. This is a very algebraic section, and you should get lots of practice. When you tell someone you have studied calculus, this is the one skill they will expect you to have. There’s not a lot of deep meaning here &ndash; these are strictly algebraic rules.</p>

<div class="videoplayer w639">
	<video id="video_2.5.1" class="video-js vjs-default-skin" controls preload="auto" width="639" height="auto">
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-5/intro_to_derivatives_of_formulas.mp4" type='video/mp4' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-5/intro_to_derivatives_of_formulas.webm" type='video/webm' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

<section><h2>Building Blocks</h2>

<p>These are the simplest rules – rules for the basic functions. We won’t prove these rules; we’ll just use them. But first, let’s look at a few so that we can see they make sense.</p>

<div class="example">
	<h4>Example 1</h4>
	<p>Find the derivative of \( y=f(x)=mx+b \)</p>
	<p>This is a linear function, so its graph is its own tangent line! The slope of the tangent line, the derivative, is the slope of the line: \[f'(x)=m\]</p>
</div>

<div class="important">
	<h4>Rule:</h4>
	<p>The derivative of a linear function is its slope.</p>
</div>

<div class="videoplayer w639">
	<video id="video_2.5.2" class="video-js vjs-default-skin" controls preload="auto" width="639" height="auto">
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-5/linear_function_intro.mp4" type='video/mp4' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-5/linear_function_intro.webm" type='video/webm' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

<div class="example">
	<h4>Example 2</h4>
	<p>Find the derivative of \( f(x)=135 \).</p>
	<p>Think about this one graphically, too. The graph of f(x) is a horizontal line. So its slope is zero: \[f'(x)=0\]</p>
</div>

<div class="important">
	<h4>Rule:</h4>
	<p>The derivative of a constant is zero</p>
</div>

<div class="videoplayer w639">
	<video id="video_2.5.3" class="video-js vjs-default-skin" controls preload="auto" width="639" height="auto">
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-5/constant_function.mp4" type='video/mp4' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-5/constant_function.webm" type='video/webm' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

<div class="example">
	<h4>Example 3</h4>
	<p>Find the derivative of \( f(x)=x^2 \).</p>
	<p>Recall the formal definition of the derivative: \[f'(x)=\lim\limits_{h\to 0} \frac{f(x+h)-f(x)}{h}.\]</p>
	<p>Using our function \( f(x)=x^2 \), \( f(x+h)=(x+h)^2=x^2+2xh+h^2 \).</p>
	<p>Then
		\[ \begin{align*}
			f'(x) &amp; =  \lim\limits_{h\to 0} \frac{f(x+h)-f(x)}{h}\\
			 &amp; =  \lim\limits_{h\to 0} \frac{x^2+2xh+h^2-x^2}{h}\\
			 &amp; =  \lim\limits_{h\to 0} \frac{2xh+h^2}{h}\\
			 &amp; =  \lim\limits_{h\to 0} \frac{h(2x+h)}{h}\\
			 &amp; =  \lim\limits_{h\to 0} (2x+h)\\
			 &amp; =  2x
		\end{align*} \]
	</p>
	<p>From all that, we find that \( f'(x)=2x \).</p>
</div>

<p>Luckily, there is a handy rule we use to skip using the limit:</p>

<div class="important">
	<h4>Power Rule</h4>
	<p>The derivative of \( f(x)=x^n \) is \[f'(x)=nx^{n-1}.\]</p>
</div>

<div class="videoplayer w639">
	<video id="video_2.5.4" class="video-js vjs-default-skin" controls preload="auto" width="639" height="auto">
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-5/power_rule_revisit_earlier_2-3_ex.mp4" type='video/mp4' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-5/power_rule_revisit_earlier_2-3_ex.webm" type='video/webm' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

<div class="videoplayer w639">
	<video id="video_2.5.5" class="video-js vjs-default-skin" controls preload="auto" width="639" height="auto">
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-5/more_power_rule_exs.mp4" type='video/mp4' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-5/more_power_rule_exs.webm" type='video/webm' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

<div class="example">
	<h4>Example 4</h4>
	<p>Find the derivative of \( g(x)=4x^3 \)</p>
	<p>Using the power rule, we know that if \( f(x)=x^3 \), then \( f'(x)=3x^2 \). Notice that \(g\) is 4 times the function \(f\). Think about what this change means to the graph of \(g\) &ndash; it’s now 4 times as tall as the graph of \(f\). If we find the slope of a secant line, it will be \( \frac{\Delta g}{\Delta x}= \frac{4\Delta f}{\Delta x} =4\frac{\Delta f}{\Delta x} \); each slope will be 4 times the slope of the secant line on the \(f\) graph. This property will hold for the slopes of tangent lines, too: \[\frac{d}{dx}\left(4x^3\right)=4\frac{d}{dx}\left(x^3\right)=4\cdot 3x^2=12x^2.\]</p>
</div>

<div class="important">
	<h4>Rule:</h4>
	<p>Constants come along for the ride, i.e., \( \frac{d}{dx}\left( kf\right)=kf'.\)</p>
</div>

<div class="videoplayer w639">
	<video id="video_2.5.6" class="video-js vjs-default-skin" controls preload="auto" width="639" height="auto">
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-5/constant_multiple_rule.mp4" type='video/mp4' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-5/constant_multiple_rule.webm" type='video/webm' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

<p>Here are all the basic rules in one place.</p>

<div class="important">
	<h4>Derivative Rules: Building Blocks</h4>
	<p>In what follows, \(f\) and \(g\) are differentiable functions of \(x\).</p>
	
	<h5>Constant Multiple Rule</h5>
	<p> \[ \frac{d}{dx}\left( kf\right)=kf'\]</p>
	
	<h5>Sum and Difference Rule</h5>
	<p>\[\frac{d}{dx}\left(f\pm g\right)=f' \pm g'\]</p>
	
	<h5>Power Rule</h5>
	<p>\[\frac{d}{dx}\left(x^n\right)=nx^{n-1}\]</p>
	<p>Special cases:
	\[\frac{d}{dx}\left(k\right)=0 \quad \text{(Because \( k=kx^0 \).)}\]
	\[\frac{d}{dx}\left(x\right)=1 \quad \text{(Because \( x=x^1 \).)}\]
	</p>
	
	<h5>Exponential Functions</h5>
	<p>\[\frac{d}{dx}\left(e^x\right)=e^x\] \[\frac{d}{dx}\left(a^x\right)=\ln(a)\,a^x\]</p>
	
	<h5>Natural Logarithm</h5>
	<p>\[\frac{d}{dx}\left(\ln(x)\right)=\frac{1}{x}\]</p>
</div>

<div class="videoplayer w639">
	<video id="video_2.5.7" class="video-js vjs-default-skin" controls preload="auto" width="639" height="auto">
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-5/exponentials_and_logs.mp4" type='video/mp4' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-5/exponentials_and_logs.webm" type='video/webm' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

<div class="videoplayer w639">
	<video id="video_2.5.8" class="video-js vjs-default-skin" controls preload="auto" width="639" height="auto">
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-5/sum_and_difference.mp4" type='video/mp4' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-5/sum_and_difference.webm" type='video/webm' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

<div class="example">
	<h4>Example 5</h4>
	<p>Find the derivative of \( p(x)=17x^{10}+13x^8-1.8x+1003 \).</p>
	<p>\[ \begin{align*}
		\frac{d}{dx}\left( 17x^{10}+13x^8-1.8x+1003 \right) &amp; =  \frac{d}{dx}\left( 17x^{10} \right)+\frac{d}{dx}\left( 13x^8 \right)-\frac{d}{dx}\left( 1.8x \right)+\frac{d}{dx}\left( 1003 \right)\\
		 &amp; =  17\frac{d}{dx}\left( x^{10} \right)+13\frac{d}{dx}\left( x^8 \right)-1.8\frac{d}{dx}\left( x \right)+\frac{d}{dx}\left( 1003 \right)\\
		 &amp; =  17\left(10x^9\right)+13\left(8x^7\right)-1.8\left(1\right)+0\\
		 &amp; =  170x^9+104x^7-1.8
	\end{align*} \]</p>
</div>

<p>You don’t have to show every single step. Do be careful when you’re first working with the rules, but pretty soon you’ll be able to just write down the derivative directly:</p>

<div class="example">
	<h4>Example 6</h4>
	<p>Find \(\frac{d}{dx}\left( 17x^2-33x+12 \right)\).</p>
	<p>Writing out the rules, we'd write \[\frac{d}{dx}\left( 17x^2-33x+12 \right)=17(2x)-33(1)+0=34x-33.\]</p>
	<p>Once you're familiar with the rules, you can, in your head, multiply the 2 times the 17 and the 33 times 1, and just write \[\frac{d}{dx}\left( 17x^2-33x+12 \right)=34x-33.\]</p>
</div>

<p>The power rule works even if the power is negative or a fraction. In order to apply it, first translate all roots and basic rational expressions into exponents:</p>

<div class="example">
	<h4>Example 7</h4>
	<p>Find the derivative of \( y=3\sqrt{t}-\frac{4}{t^4}+5e^t \).</p>
	<p>The first step is translate into exponents: \[y=3\sqrt{t}-\frac{4}{t^4}+5e^t=3t^{1/2}-4t^{-4}+5e^t\]</p>
	<p>Now you can take the derivative:
	\[ \begin{align*}
		\frac{d}{dt}\left( 3t^{1/2}-4t^{-4}+5e^t \right) &amp; =  3\left(\frac{1}{2}t^{-1/2}\right)-4\left(-4t^{-5}\right)+5\left(e^t\right) \\
		 &amp; =  \frac{3}{2}t^{-1/2}+16t^{-5}+5e^t
		\end{align*} \]
	</p>
	<p>If there is a reason to, you can rewrite the answer with radicals and positive exponents: \[y'= \frac{3}{2}t^{-1/2}+16t^{-5}+5e^t= \frac{3}{2\sqrt{t}}+\frac{16}{t^5}+5e^t\]</p>
</div>

<p>Be careful when finding the derivatives with negative exponents.</p> 

<div class="example">
	<h4>Example 8</h4>
	<p>Find the equation of the line tangent to \( g(t)=10-t^2 \) when \(t = 2\).</p>
	<p>The slope of the tangent line is the value of the derivative. We can compute \( g'(t)=-2t \). To find the slope of the tangent line when \(t = 2\), evaluate the derivative at that point. The slope of the tangent line is -4.</p>
	<p>To find the equation of the tangent line, we also need a point on the tangent line. Since the tangent line touches the original function at \(t = 2\), we can find the point by evaluating the original function: \( g(2)=10-2^2=6 \). The tangent line must pass through the point (2, 6).</p>
	<p>Using the point-slope equation of a line, the tangent line will have equation \( y-6=-4(t-2) \). Simplifying to slope-intercept form, the equation is \( y=-4t+14 \).
</p>
	<p>Graphing, we can verify this line is indeed tangent to the curve:</p>
	<figure><img src="images/image036.png" alt="graph with tangent line"/></figure>
</div>

<div class="example">
	<h4>Example 9</h4>
	<p>The cost to produce \(x\) items is \(\sqrt{x}\) hundred dollars.</p>
	<ol class="smlatin">
		<li>What is the cost for producing 100 items? 101 items? What is cost of the 101st item?</li>
		<li>For \(f(x) = \sqrt{x}\), calculate \(f '(x)\) and evaluate \(f '\) at \(x = 100\). How does \(f '(100)\) compare with the last answer in Part a?</li>
	</ol>
	<ol class="smlatin">
		<li>Put \(f(x) = \sqrt{x} = x^{1/2}\)hundred dollars, the cost for \(x\) items. Then \(f(100) =\)$1000 and \(f(101) =\)$1004.99, so it costs $4.99 for that 101st item. Using this definition, the marginal cost is $4.99.</li>
		<li>\( f'(x)=\frac{1}{2}x^{-1/2}\), so \( f'(100)=\frac{1}{2\sqrt{100}}=\frac{1}{20} \) hundred dollars = $5.00.</li>
	</ol>
	<p>Note how close these answers are! This shows (again) why it’s OK that we use both definitions for marginal cost.</p>
</div>

<div class="videoplayer w639">
	<video id="video_2.5.9" class="video-js vjs-default-skin" controls preload="auto" width="639" height="auto">
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-5/marginal_profit_ex.mp4" type='video/mp4' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-5/marginal_profit_ex.webm" type='video/webm' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

</section>

<section><h2>Product and Quotient Rules</h2>

<p>The basic rules will let us tackle simple functions. But what happens if we need the derivative of a combination of these functions?</p>

<div class="example">
	<h4>Example 10</h4>
	<p>Find the derivative of \( g(x)=\left(4x^3-11\right)(x+3) \)</p>
	<p>This function is not a simple sum or difference of polynomials. It’s a product of polynomials. We can simply multiply it out to find its derivative:
	\[ \begin{align*}
		g(x) &amp; =  \left(4x^3-11\right)(x+3)\\
		 &amp; =  4x^4-11x+12x^3-33\\
		g'(x) &amp; =  16x^3-11+36x^2
	\end{align*} \]
	</p>
</div>

<p>Now suppose we wanted to find the derivative of \[f(x)=\left(4x^5+x^3-1.5x^2-11\right)\left(x^7-7.25x^5+120x+3\right)\]</p>
<p>This function is not a simple sum or difference of polynomials. It’s a product of polynomials. We could 'simply' multiply it out to find its derivative as before – who wants to volunteer? Nobody?</p>
<p>We’ll need a rule for finding the derivative of a product so we don’t have to multiply everything out.</p>
<p>It would be great if we can just take the derivatives of the factors and multiply them, but unfortunately that won’t give the right answer. To see that, consider finding derivative of \( g(x)=\left(4x^3-11\right)(x+3) \). We already worked out the derivative, it is \( g'(x)=16x^3-11+36x^2 \). What if we try differentiating the factors and multiplying them? We’d get \( g'(x)=\left(12x^2\right)(1)=12x^2 \), which is radically different from the correct answer.</p>
<p>The rules for finding derivatives of products and quotients are a little complicated, but they save us the much more complicated algebra we might face if we were to try to multiply things out. They also let us deal with products where the factors are not polynomials. We can use these rules, together with the basic rules, to find derivatives of many complicated looking functions.</p>

<div class="videoplayer w639">
	<video id="video_2.5.10" class="video-js vjs-default-skin" controls preload="auto" width="639" height="auto">
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-5/product_rule_intro_and_exs.mp4" type='video/mp4' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-5/product_rule_intro_and_exs.webm" type='video/webm' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

<div class="videoplayer w639">
	<video id="video_2.5.11" class="video-js vjs-default-skin" controls preload="auto" width="639" height="auto">
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-5/quotient_rule_intro_and_ex.mp4" type='video/mp4' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-5/quotient_rule_intro_and_ex.webm" type='video/webm' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

<div class="important">
	<h4>Derivative Rules: Product and Quotient Rules</h4>
	<p>In what follows, \(f\) and \(g\) are differentiable functions of \(x\).</p>
	
	<h5>Product Rule</h5>
	<p>\(\frac{d}{dx}\left( f\cdot g \right)=f'\cdot g+f\cdot g'\)</p>
	<p>The derivative of the first factor times the second left alone, plus the first left alone times the derivative of the second.</p>
	<p>The product rule can extend to a product of several functions; the pattern continues – take the derivative of each factor in turn, multiplied by all the other factors left alone, and add them up: \[\frac{d}{dx}\left( f\cdot g\cdot h \right)=f'\cdot g\cdot h+f\cdot g'\cdot h+f\cdot g\cdot h'\]</p>
	
	<h5>Quotient Rule</h5>
	<p>\[\frac{d}{dx}\left( \frac{f}{g} \right)=\frac{f'\cdot g-f\cdot g'}{g^2}\]</p>
	<p>The numerator of the result resembles the product rule, but there is a minus instead of a plus; the minus sign goes with the \(g’\). The denominator is simply the square of the original denominator &ndash; no derivatives there.</p>
</div>

<div class="example">
	<h4>Example 11</h4>
	<p>Find the derivative of \( F(t)=e^t\ln(t) \)</p>
	<p>This is a product, so we need to use the product rule. I like to put down empty parentheses to remind myself of the pattern; that way I don’t forget anything: \[F'(t)=(\ )(\ )+(\ )(\ )\]</p>
	<p>Then I fill in the parentheses – the first set gets the derivative of , the second gets left alone, the third gets left alone, and the fourth gets the derivative of \[F'(t)=\left(e^t\right)\left(\ln(t)\right)+\left(e^t\right)\left(\frac{1}{t}\right)=e^t\ln(t)+\frac{e^t}{t}.\]</p>
</div>

<p>Notice that this was one we could <em>not</em> have done by “multiplying out.”</p>

<div class="example">
	<h4>Example 12</h4>
	<p>Find the derivative of</p>
	<p>This is a quotient, so we need to use the quotient rule. Again, you find it helpful to put down the empty parentheses as a template: \[y'=\frac{(\ )(\ )-(\ )(\ )}{(\ )^2}\]</p>
	<p>Then fill in all the pieces: \[y'=\frac{\left(4x^3+\ln(4)\cdot 4^x \right)\left(3+16x^3 \right)-\left(x^4+4^x \right)\left(48x^2 \right)}{\left(3+16x^3 \right)^2}\]</p>
</div>

<p>Now for goodness' sake don’t try to simplify that! Remember that "simple" depends on what you will do next; in this case, we were asked to find the derivative, and we’ve done that. I expect you to do any 'basic" simplifications, such as multiplying constants together or doing obvious cancellations or combining of terms, but otherwise please STOP unless there is a reason to simplify further.</p>

<div class="videoplayer w639">
	<video id="video_2.5.12" class="video-js vjs-default-skin" controls preload="auto" width="639" height="auto">
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-5/nine_more_examples_pre_chain.mp4" type='video/mp4' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-5/nine_more_examples_pre_chain.webm" type='video/webm' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

</section>

<section><h2>Chain Rule</h2>
<p>There is one more type of complicated function that we will want to know how to differentiate: composition. The Chain Rule will let us find the derivative of a composition. (This is the last derivative rule we will learn!)</p>

<div class="example">
	<h4>Example 13</h4>
	<p>Find the derivative of \( y=\left(4x^3+15x\right)^2 \)</p>
	<p>This is not a simple polynomial, so we can’t use the basic building block rules yet. It is a product, so we could write it as \(y=\left(4x^3+15x\right)^2=\left(4x^3+15x\right)\left(4x^3+15x\right)\) and use the product rule. Or we could multiply it out and simply differentiate the resulting polynomial. I’ll do it the second way:
	\[ \begin{align*}
		y &amp; =  \left(4x^3+15x\right)^2\\
		 &amp; =  16x^6+120x^4+225x^2\\
		y' &amp; =  64x^5+480x^3+450x
	\end{align*} \]
	</p>
</div>

<p>Now suppose we want to find the derivative of \(y=\left(4x^3+15x\right)^{20}\). We <strong>could</strong> write it as a product with 20 factors and use the product rule, or we <strong>could</strong> multiply it out. But I don't want to do that, do you?</p>

<p>We need an easier way, a rule that will handle a composition like this. The Chain Rule is a little complicated, but it saves us the much more complicated algebra of multiplying something like this out. It will also handle compositions where it wouldn’t be possible to “multiply it out.”</p>

<p>The Chain Rule is a common place for students to make mistakes. Part of the reason is that the notation takes a little getting used to. And part of the reason is that students often forget to use it when they should. When should you use the Chain Rule? Almost every time you take a derivative.</p>

<div class="videoplayer w639">
	<video id="video_2.5.13" class="video-js vjs-default-skin" controls preload="auto" width="639" height="auto">
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-5/chain_rule_intro_and_exs.mp4" type='video/mp4' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-5/chain_rule_intro_and_exs.webm" type='video/webm' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

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

<div class="example">
	<h4>Example 14</h4>
	<p>Find the derivative of \( y=\left(4x^3+15x\right)^2 \)</p>
	<p>This is the same one we did before by multiplying out. This time, let’s use the Chain Rule: The inside function is what appears inside the parentheses: \( 4x^3+15x \). The outside function is the first thing we find as we come in from the outside &ndash; it’s the square function, \((\text{inside})2\).</p>
	<p>The derivative of this outside function is \((2\cdot\text{inside})\). Now using the chain rule, the derivative of our original function is \((2\cdot\text{inside})\) TIMES the derivative of the inside (which is \( 12x^2+15 \)):
	\[ y'=2\left(4x^3+15x\right)\left(12x^2+15 \right)\]
	</p>
</div>

<p>If you multiply this out, you get the same answer we got before. Hurray! Algebra works!</p>

<div class="example">
	<h4>Example 15</h4>
	<p>Find the derivative of \( y=\left(4x^3+15x\right)^{20} \).</p>
	<p>Now we have a way to handle this one. It’s the derivative of the outside TIMES the derivative of the inside.</p>
	<p>The outside function is \( \left(\text{inside}\right)^{20} \), which has derivative \( 20\left(\text{inside}\right)^{19}\), so \[y'=20\left(4x^3+15x\right)^{19}\left(12x^2+15\right).\]</p>
</div>

<div class="example">
	<h4>Example 16</h4>
	<p>Differentiate \( y=e^{x^2+5} \).</p>
	<p>This isn’t a simple exponential function; it’s a composition. Typical calculator or computer syntax can help you see what the “inside” function is here. On a TI calculator, for example, when you push the \( e^x \) key, it opens up parentheses: e^( . This tells you that the "inside" of the exponential function is the exponent. Here, the inside is the exponent \( x^2+5 \). Now we can use the Chain Rule: We want the derivative of the outside TIMES the derivative of the inside. The outside is the "\(e\) to the something" function, so its derivative is the same thing. The derivative of what’s inside is \(2x\). So \[\frac{d}{dx}\left( e^{x^2+5} \right)= \left( e^{x^2+5} \right)\cdot (2x).\]</p>
</div>

<div class="example">
	<h4>Example 17</h4>
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
	<video id="video_2.5.14" class="video-js vjs-default-skin" controls preload="auto" width="639" height="auto">
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-5/more_chain_rule_exs.mp4" type='video/mp4' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_2-5/more_chain_rule_exs.webm" type='video/webm' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

</section>

<section><h2>Derivatives of Complicated Functions</h2>
<p>You’re now ready to take the derivative of some mighty complicated functions. But how do you tell what rule applies first? Work your way in from the outside &ndash; what do you encounter first? That’s the first rule you need. Use the Product, Quotient, and Chain Rules to peel off the layers, one at a time, until you’re all the way inside.</p>

<div class="example">
	<h4>Example 18</h4>
	<p>Find \( \frac{d}{dx}\left( e^{3x}\cdot\ln(5x+7) \right) \)</p>
	<p>Coming in from the outside, we see that this is a product of two (complicated) functions. So we’ll need the Product Rule first. we’ll fill in the pieces we know, and then we can figure the rest as separate steps and substitute in at the end: \[\frac{d}{dx}\left( e^{3x}\cdot\ln(5x+7) \right)=\left( \frac{d}{dx}\left( e^{3x}\right)\right)\cdot\ln(5x+7)+ e^{3x}\cdot \left(\frac{d}{dx}\left(\ln(5x+7) \right)\right)\]</p>
	<p>Now as separate steps, we’ll find \[\frac{d}{dx}\left( e^{3x}\right)=3e^{3x} \quad \text{ (using the Chain Rule)}\] and \[\frac{d}{dx}\left(\ln(5x+7) \right)=\frac{1}{5x+7}\cdot 5 \quad \text{ (also using the Chain Rule)}.\]</p>
	<p>Finally, to substitute these in their places:\[\frac{d}{dx}\left( e^{3x}\cdot\ln(5x+7) \right)=\left( 3e^{3x}\right)\cdot\ln(5x+7)+ e^{3x}\cdot \left(\frac{1}{5x+7}\cdot 5\right)\]</p>
	<p>(We can stop here &ndash; we don't need to try to simplify any further.)</p>
</div>

<div class="example">
	<h4>Example 19</h4>
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
	<h4>Example 20</h4>
	<p>Show that \( f(x)=\sqrt[3]{x}=x^{1/3} \) is not differentiable at \(x = 0\).</p>
	<p>Finding the derivative, \( f(x)=\frac{1}{3}x^{-2/3}=\frac{1}{3x^{2/3}} \). At \(x = 0\), this function is undefined. From the graph, we can see that the tangent line to this curve at \(x = 0\) is vertical with undefined slope, which is why the derivative does not exist at \(x = 0\).</p>
	<figure><img src="images/image037.png" alt="graph"/></figure>
</div>

<p>Where can a tangent line not exist?</p>

<p><strong>If there is a sharp corner (cusp) in the graph, the derivative will not exist at that point</strong> because there is no well-defined tangent line (a teetering tangent, if you will).</p> 

<p><strong>If there is a jump in the graph</strong>, the tangent line will be different on either side and <strong>the derivative will not exist at that point</strong>.</p>

<div class="example">
	<h4>Example 21</h4>
	<p>Show that \( f(x)=|x| \) is not differentiable at \(x = 0\).</p>
	<p>On the left side of the graph, the slope of the line is -1. On the right side of the graph, the slope is +1. There is no well-defined tangent line at the sharp corner at \(x = 0\), so the function is not differentiable at that point.</p>
	<figure><img src="images/image038.png" alt="graph"/></figure>
</div>

<div class="videoplayer w639">
	<video id="video_2.5.15" class="video-js vjs-default-skin" controls preload="auto" width="639" height="auto">
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