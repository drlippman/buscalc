<!DOCTYPE html>
<html lang="en">
<?php include '../includes/head.html'; ?>
<body>
<!--Nav  must come after any GeoGebra script includes-->
<?php include '../includes/nav.html'; ?>
<div class="page-wrap">
<header class="main-nav-buttons">
	<a href="#main-nav" class="open-menu">&equiv; </a>
	<a href="#close-nav" class="close-menu">&times; </a>
	<!--<h1>menu</h1>-->
  </header>

<section class="content">
<h1>Section 4.3: Optimization</h1>
<p>The partial derivatives tell us something about where a surface has local maxima and minima.  Remember that even in the one-variable cases, there were critical points which were neither maxima nor minima &ndash; this is also true for functions of many variables.  In fact, as you might expect, the situation is even more complicated.</p>

<section><h2>Second Derivatives</h2>
<p>When you find a partial derivative of a function of two variables, you get another function of two variables &ndash; you can take its partial derivatives, too.  We've done this before, in the one-variable setting.  In the one-variable setting, the second derivative gave information about how the graph was curved.  In the two-variable setting, the second partial derivatives give some information about how the surface is curved, as you travel on cross-sections &ndash; but that's not very complete information about the entire surface.  </p>

<p>Imagine that you have a surface that's ruffled around a point, like what happens near a button on an overstuffed sofa, or a pinched piece of fabric, or the wrinkly skin near your thumb when you make a fist.  Right at that point, every direction you move, something different will happen &ndash; it might increase, decrease, curve up, curve down&hellip; A simple phrase like <q>concave up</q> or <q>concave down</q> can't describe all the things that can happen on a surface.</p>

<p>Surprisingly enough, though, there is still a second derivative test that can help you decide if a point is a local max or min or neither, so we still do want to find second derivatives.</p>

<div class="important">
	<h4>Second Partial Derivatives </h4>
	<p>Suppose \( f(x,y) \) is a function of two variables.  Then it has four <strong>second partial derivatives</strong>:
		\[ \begin{align*}
			f_{xx}=&amp;\frac{\partial}{\partial x}\left(f_x\right)=\left(f_x\right)_x  &amp;  f_{xy}=&amp;\frac{\partial}{\partial y}\left(f_x\right)=\left(f_x\right)_y\\
			f_{yx}=&amp;\frac{\partial}{\partial x}\left(f_y\right)=\left(f_y\right)_x  &amp;  f_{yy}=&amp;\frac{\partial}{\partial y}\left(f_y\right)=\left(f_y\right)_y
		\end{align*} \]
	 \( f_{xy} \) and \( f_{yx} \) are called the <strong>mixed (second) partial derivatives of \(f\)</strong>.
	</p>
	<p>Leibniz notation for the second partial derivatives is a bit confusing, and we won't use it as often:
		\[ \begin{align*}
			f_{xx}=&amp;\frac{\partial}{\partial x}\left(\frac{\partial f}{\partial x}\right)=\frac{\partial^2 f}{\partial x^2}  &amp;  f_{xy}=&amp;\frac{\partial}{\partial y}\left(\frac{\partial f}{\partial x}\right)=\frac{\partial^2 f}{\partial y \partial x}\\
			f_{yx}=&amp;\frac{\partial}{\partial x}\left(\frac{\partial f}{\partial y}\right)=\frac{\partial^2 f}{\partial x \partial y}  &amp;  f_{yy}=&amp;\frac{\partial}{\partial y}\left(\frac{\partial f}{\partial y}\right)=\frac{\partial^2 f}{\partial y^2}
		\end{align*} \]
	</p>
	<p>Notice that the order of the variables for the mixed partials goes from right to left in the Leibniz notation instead of left to right.</p>
</div>

<div class="example">
	<h4>Example 1</h4>
	<p>Find all four partial derivatives of \( f(x,y)=x^2-4xy+4y^2 \).</p>
	<p>We have to start by finding the (first) partial derivatives:
		\[ \begin{align*}
			f_x(x,y)=&amp; 2x-4y \\
			f_y(x,y)=&amp; -4x+8y
		\end{align*} \]
	</p>
	<p>Now we’re ready to take the second partial derivatives:
		\[ \begin{align*}
			f_{xx}(x,y)=&amp; \frac{\partial}{\partial x}(2x-4y)=2 \\
			f_{xy}(x,y)=&amp; \frac{\partial}{\partial y}(2x-4y)=-4 \\
			f_{yx}(x,y)=&amp; \frac{\partial}{\partial x}(-4x+8y)=-4 \\
			f_{yy}(x,y)=&amp; \frac{\partial}{\partial y}(-4x+8y)=8
		\end{align*} \]
	</p>
</div>

<p>You might have noticed that the two mixed partial derivatives were equal in this last example.  It turns out that it's not a coincidence &ndash; it's a theorem!</p>

<div class="important">
	<h4>Mixed Partial Derivative Theorem </h4>
	<p>If \( f \), \( f_x \), \( f_y \), \( f_{xy} \), and \( f_{yx} \) are all continuous (no breaks in their graphs), then \[ f_{xy}=f_{yx}. \]</p>
	<p>In fact, as long as \(f\) and all its appropriate partial derivatives are continuous, the mixed partials are equal even if they are of higher order, and even if the function has more than two variables.</p>
</div>

<p>This theorem means that the confusing Leibniz notation for second derivatives is not a big problem &ndash; in almost every situation the mixed partials are equal, so the order in which we compute them doesn't matter.</p>

<div class="videoplayer w639">
	<video id="video_4.3.1" class="video-js vjs-default-skin" controls preload="metadata" width="639" height="auto">
		<source src="video_4-3/second_order_partials_intro.webm" type='video/webm' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_4-3/second_order_partials_intro.mp4" type='video/mp4' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

<div class="example">
	<h4>Example 2</h4>
	<p>Find \( \frac{\partial^2 f}{\partial x \partial y} \) for \( f(x,y)=\frac{e^{x+y}}{y^3+y}+y\ln(y) \).</p>
	<p>We already found the first partial derivatives in an earlier example:
		\[ \begin{align*}
			\frac{\partial f}{\partial x}=&amp; \frac{1}{y^3+y}e^{x+y} \\
			\frac{\partial f}{\partial y}=&amp; \frac{\left( e^{x+y}(1) \right)\left( y^3+y \right)-\left( e^{x+y} \right)\left( 3y^2+1 \right)}{\left( y^3+y \right)^2}+\left( 1 \right)\left( \ln(y) \right)+\left( y \right)\left( \frac{1}{y} \right)
		\end{align*} \]
	</p>
	<p>Now we need to find the mixed partial derivative. The theorem says that \( \frac{\partial f^2}{\partial x \partial y}=\frac{\partial f^2}{\partial y \partial x} \), so it doesn't matter whether we find the partial derivative of \( \frac{\partial f}{\partial x} \)  with respect to \(y\) or the partial derivative of \( \frac{\partial f}{\partial y} \)  with respect to \(x\).  Which would you rather do?</p>
	<p>It looks like it will be easier to compute the mixed partial by finding the partial derivative of \( \frac{\partial f}{\partial x}= \frac{1}{y^3+y}e^{x+y} \)  with respect to \(y\) &ndash; it still looks messy, but it looks less messy: \[ \frac{\partial f^2}{\partial y \partial x}= \frac{\partial}{\partial y}\left(\frac{1}{y^3+y}e^{x+y}\right)=\frac{\left(e^{x+y}\right)\left(y^3+y\right)-\left(e^{x+y}\right)\left(3y^2+1\right)}{\left(y^3+y\right)^2} \]</p>
	<p>If we had decided to do this the other way, we'd end up in the same place.  Eventually&hellip; </p>
</div>
</section>

<section><h2>Local Maxima, Local Minima, and Saddle Points</h2>
<p>Let's briefly review max-min problems in one variable.</p>
<p>A local max is a point on a curve that is higher than all the nearby points.  A local min is lower than all the nearby points.  We know that local max or min can only occur at critical points, where the derivative is zero or undefined.  But we also know that not all critical points are max or min, so we also need to test them, with the First Derivative or Second Derivative Test.  </p>
<p>The situation with a function of two variables is much the same.  Just as in the one-variable case, the first step is to find critical points, places where both the partial derivatives are either zero or undefined</p>

<div class="important">
	<h4>Definition (Local Maximum and Minimum)</h4>
	<ul>
		<li>\(f\) has a <strong>local maximum</strong> at \((a, b)\) if \(f(a, b) \geq f(x, y)\) for all points \((x, y)\) near \((a, b)\).</li>
		<li>\(f\) has a <strong>local minimum</strong> at \((a, b)\) if \(f(a, b) \leq f(x, y)\) for all points \((x, y)\) near \((a, b)\).</li>
	</ul>
	<p>A <strong>critical point</strong> for a function \(f(x, y)\) is a point \((x, y)\) (or \((x, y, f(x, y))\)) where both the following are true:</p>
	<ol>
		<li>\( f_x=0 \) or is undefined, <strong>and</strong></li>
		<li>\( f_y=0 \) or is undefined.</li>
	</ol>
	<p>Just as in the one-variable case, a local max or min of \(f\) can only occur at a critical point.</p>
</div>
<p>Just as in the one-variable setting, not all critical points are local max or min.  For a function of two variables, the critical point could be a local max, local min, or a saddle point.</p>
<p>A point on a surface is a local maximum if it's higher than all the points nearby; a point is a local minimum if it's lower than all the points nearby.   </p>
<p>A saddle point is a point on a surface that is a minimum along some paths and a maximum along some others.  It's called this because it's shaped a bit like a saddle you might use to ride a horse.  You can see a saddle point by making a fist &ndash; between the knuckles of your index and middle fingers, you can see a place that is a minimum as you go across your knuckles, but a maximum as you go along your hand toward your fingers.</p>

<p>Here is a picture of a saddle point from a few different angles.  This is the surface \( f(x,y)=5x^2-3y^2+10 \), and there is a saddle point above the origin.  The lines show what the surface looks like above the \(x\)- and \(y\)- axes.  Notice how the point above the origin, where the lines cross, is a local minimum in one direction, but a local maximum in the other direction.</p>
<figure>
	<img src="images/image046.png" alt="View 1"/>
	<img src="images/image047.png" alt="View 2"/>
	<img src="images/image048.png" alt="View 3"/>
	<img src="images/image049.png" alt="View 4"/>
</figure>
</section>

<div class="videoplayer w639">
	<video id="video_4.3.2" class="video-js vjs-default-skin" controls preload="metadata" width="639" height="auto">
		<source src="video_4-3/max_min_saddle_intro.webm" type='video/webm' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_4-3/max_min_saddle_intro.mp4" type='video/mp4' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

<section><h2>Second Derivative Test</h2>
<p>Just as in the one-variable case, we'll need a way to test critical points to see whether they are local max or min.  There is a second derivative test for functions of two variables that can help, but, just as in the one-variable case, it won't always give an answer.</p>

<div class="important">
	<h4>The Second Derivative Test for Functions of Two Variables</h4>
	<ol>
		<li>Find all critical points of \(f(x,y)\).</li>
		<li>
			<p>Compute \[ D(x,y)=\left(f_{xx}\right)\left(f_{yy}\right)-\left(f_{xy}\right)\left(f_{yx}\right),\] and evaluate it at each critical point.</p>
			<ol>
				<li>
					<p>If \(D \gt 0\), then \(f\) has a local max or min at the critical point.  To see which, look at the sign of \( f_{xx} \):</p>
					<ul>
						<li>If  \( f_{xx}\gt 0 \), then \(f\) has a local minimum at the critical point.</li>
						<li>If  \( f_{xx}\lt 0 \), then \(f\) has a local maximum at the critical point.</li>
					</ul>
				</li>
				<li>If  \(D \lt 0\)  then  \(f\) has a saddle point at the critical point.</li>
				<li>If  \(D = 0\), there could be a local max, local min, or neither (i.e.,  the test in inconclusive).</li>
			</ol>
		</li>
	</ol>
</div>

<div class="videoplayer w639">
	<video id="video_4.3.3" class="video-js vjs-default-skin" controls preload="metadata" width="639" height="auto">
		<source src="video_4-3/max_min_saddle_exs_1-3.webm" type='video/webm' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_4-3/max_min_saddle_exs_1-3.mp4" type='video/mp4' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

<div class="example">
	<h4>Example 3</h4>
	<p>Find all local maxima, minima, and saddle points for the function \[ f(x,y)=x^3+y^3+3x^2-3y^2-8. \]</p>
	<p>First we need the partial derivatives: \( f_x=3x^2+6x \)  and  \( f_y=3y^2-6y \).</p>
	<p>Critical points are the places where both of these are zero (neither is ever undefined):  \( f_x=3x^2+6x=3x(x+2)=0 \) when \(x = 0\) or when \(x = -2\). \( f_y=3y^2-6y=3y(y-2)=0 \) when \(y = 0\) or when \(y = 2\).</p>
	<p>Putting these together, we get four critical points: (0, 0), (-2, 0), (0, 2), and (-2, 2).</p>
	<p>Now to classify them, we’ll use the Second Derivative Test.  We’ll need all the second partial derivatives: \[f_{xx}=6x+6,\ f+{yy}=6y-6,\ f_{xy}=f_{yx}=0.\]</p>
	<p>Then \[ D(x,y)=(6x+6)(6y-6)-(0)(0)=(6x+6)(6y-6). \]</p>
	<p>Now look at each critical point in turn:</p>
	<ul>
		<li>At (0, 0): \( D(0,0)=(6(0)+6)(6(0)-6)=(6)(-6)=-36 \lt 0 \), so there is a saddle point at (0, 0).</li>
		<li>At (-2, 0):  \( D(-2,0)=(6(-2)+6)(6(0)-6)=(-6)(-6)=36 \gt 0 \) and \( f_{xx}(-2,0)=6(-2)+6=-6 \lt 0 \), so there is a local maximum at (-2, 0).</li>
		<li>At (0, 2): \( D(0,2)=(6(0)+6)(6(2)-6)=(6)(6)=36 \gt 0 \) and \( f_{xx}(0,2)=6(0)+6=6 \gt 0 \), so there is a local minimum at (0, 2).</li>
		<li>At (-2, 2):  \( D(-2,2)=(6(-2)+6)(6(2)-6)=(-6)(6)=-36 \lt 0 \), so there is another saddle point at (-2, 2).</li>
	</ul>
</div>

<div class="videoplayer w639">
	<video id="video_4.3.4" class="video-js vjs-default-skin" controls preload="metadata" width="639" height="auto">
		<source src="video_4-3/max_min_saddle_exs_4-5.webm" type='video/webm' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_4-3/max_min_saddle_exs_4-5.mp4" type='video/mp4' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

<div class="example">
	<h4>Example 4</h4>
	<p>Find all local maxima, minima, and saddle points for the function \[ z=9x^3+\frac{y^3}{3}-4xy. \]</p>
	<p>We’ll need all the partial derivatives and second partial derivatives, so let’s compute them all first:
		\[ \begin{align*}
			z_x=&amp; 27x^2-4y,\quad  z_y= y^2-4x,\\
			z_{xx}=&amp; 54x,\quad z_{xy}=z_{yx}= -4,\quad z_{y}= 2y.
		\end{align*} \]
	</p>
	<p>Now to find the critical points:  We need both \( z_x \) and \( z_y \) to be zero (neither is ever undefined), so we need to solve this set of equations simultaneously:
		\[ \begin{align*}
			z_x=&amp; 27x^2-4y=0 \\
			z_y=&amp; y^2-4x=0
		\end{align*} \]
	</p>
	<p>Perhaps it's been a while since you solved systems of equations. One solution method is the substitution method &ndash; solve one equation for one variable and substitute into the other equation:
		\[ \left.\begin{align*}
			27x^2-4y=&amp; 0 \\
			y^2-4x=&amp; 0
		\end{align*}\right\} \to \text{Solve \( y^2-4x=0 \) for \( x=\frac{y^2}{4} \) \( \dots \)} \]
		&hellip;then substitute into the other equation:
			\[ \begin{align*}
					27\left(\frac{y^2}{4}\right)^2-4y=&amp; 0 \\
					\frac{27}{16}y^4-y=&amp; 0
				\end{align*}
			\]
	</p>
	<p>Now we have just one equation in one variable to solve. Factoring out a \(y\) gives \[ y\left(\frac{27}{16}y^3-1\right)=0, \] so \( y=0 \) or \( \frac{27}{16}y^3-1=0 \), giving \( y=\sqrt[3]{\frac{1}{27/16}}=\frac{\sqrt[3]{4}}{3} \).</p>
	<p>Plugging back in to the equation \( x=\frac{y^2}{4} \)  to find \(x\) gives us the two critical points: (0,0) and \( \left(\frac{4}{9},\frac{4}{3}\right) \).</p>
	<p>Now to test them. First compute
		\[ \begin{align*}
			D(x,y)=&amp; (f_{xx})(f_{yy})-(f_{xy})(f_{yx}) \\
			=&amp; (54x)(2y)-(-4)(-4) \\
			=&amp; 108xy-16
		\end{align*} \] Then evaluate \( D \) at the two critical points:
	</p>
	<ul>
		<li>At (0,0):  \(D(0,0) = -16 \lt 0\), so there is a saddle point at (0, 0).</li>
		<li>At  \( \left(\frac{4}{9},\frac{\sqrt[3]{4}}{3}\right) \): \(D\left(\frac{4}{9},\frac{\sqrt[3]{4}}{3}\right) =16(\sqrt[3]{4}-1) \gt 0\), and \( f_{xx}\left(\frac{4}{9},\frac{\sqrt[3]{4}}{3}\right) \gt 0 \), so there is a local minimum at \( \left(\frac{4}{9},\frac{\sqrt[3]{4}}{3}\right) \).</li>
	</ul>
</div>
</section>

<section><h2>Applied Optimization</h2>

<div class="videoplayer w639">
	<video id="video_4.3.5" class="video-js vjs-default-skin" controls preload="metadata" width="639" height="auto">
		<source src="video_4-3/multivar_applied_optimization.webm" type='video/webm' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_4-3/multivar_applied_optimization.mp4" type='video/mp4' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

<div class="example">
	<h4>Example 5</h4>
	<p>A company makes two products.  The demand equations for the two products are given below.  \(p_1\), \(p_2\), \(q_1\),and \(q_2\) are the prices and quantities for Products 1 and 2.
		\[ \begin{align*}
			q_1=&amp; 200-3p_1-p_2 \\
			q_2=&amp; 150-p_1-2p_2
		\end{align*} \]
	</p>
	<p>Find the price the company should charge for each product in order to maximize total revenue.  What is that maximum revenue?</p>
	<p>Revenue is still price\( \cdot \)quantity.  If we're selling two products, the total revenue will be the sum of the revenues from the two products:
		\[ \begin{align*}
			R(p_1,p_2)=&amp; p_1q_1+p_2q_2 \\
			=&amp; p_1(200-3p_1-p_2)+p_2(150-p_1-2p_2) \\
			=&amp; 200p_1-3p_1^2-2p_1p_2+150p_2-2p_2^2
		\end{align*} \]
	</p>
	<p>This is a function of two variables, the two prices, and we need to optimize it (just as in the previous examples).  First we find critical points.  The notation here gets a bit hard to look at, but hang in there &ndash; this is the same stuff we've done before. \[ R_{p_1}=200-6p_1-2p_2 \ \text{ and } \ R_{p_2}=150-2p_1-4p_2. \]</p>
	<p>Solving these simultaneously gives the one critical point \( (p_1, p_2)=(25,25) \)</p>
	<p>To confirm that this gives maximum revenue, we need to use the Second Derivative Test.  Find all the second derivatives: \[ R_{p_1 p_2}=-6,\ R_{p_2 p_2}=-4,\ \text{ and }\ R_{p_1 p_2}=R_{p_2 p_1}=-2. \]</p>
	<p>So \( D(25,25)=(-6)(-4)-(-2)(-2) \gt 0 \) and  \( R_{p_1 p_2}(25,25) \lt 0 \), so this really is a local maximum.</p>
	<p>Thus, to maximize revenue the company should charge $25 per unit for both products.  This will yield a maximum revenue of $4375.</p>
</div>

<!--<div class="videoplayer w639">
	<video id="video_4.3.6" class="video-js vjs-default-skin" controls preload="metadata" width="639" height="auto">
		<source src="video_4-3/finis_MATH141_F14.webm" type='video/webm' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_4-3/finis_MATH141_F14.mp4" type='video/mp4' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>-->

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
			<td><a href="section4-2.php">&larr; Previous Section</a></td>
		</tr>
	</table>
</footer>
</div>
</body>
</html>