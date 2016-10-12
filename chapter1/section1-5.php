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
<h1>Section 1.5: Quadratics</h1>

<p>Quadratics are transformations of the function \( f(x)=x^2 \). Quadratics commonly arise from problems involving area and projectile motion, providing some interesting applications.</p>

<div class="example">
	<h4>Example 1</h4>
	<p>A backyard farmer wants to enclose a rectangular space for a new garden.  She has purchased 80 feet of wire fencing to enclose three sides, and will put the fourth side against the backyard fence.  Find a formula for the area enclosed by the fence if the sides of fencing perpendicular to the existing fence have length \(L\).</p>
	<p>In a scenario like this involving geometry, it is often helpful to draw a picture.  It might also be helpful to introduce a temporary variable, \(W\), to represent the side of fencing parallel to the fourth side or backyard fence.</p>
	<figure><img src="images/image096.png" alt="fence"/></figure>
	<p>Since we know we only have 80 feet of fence available, we know that \( L+W+L=80 \), or more simply,  \( 2L+W=80 \).  This allows us to represent the width, \(W\), in terms of \(L\): \( W=80-2L \)</p>
	<p>Now we are ready to write an equation for the area the fence encloses.  We know the area of a rectangle is length multiplied by width, so \( A=LW=L(80-2l) \), so \[ A(L)=80L-2L^2. \] This formula represents the area of the fence in terms of the variable length \(L\).</p>
</div>

<div class="thmdef">
	<h4>Forms of Quadratic Functions</h4>
	<p>The <strong>standard form</strong> of a quadratic function is \( f(x)=ax^2+bx+c \).</p>
	<p>The <strong>transformation form</strong> of a quadratic function is \( f(x)=a(x-h)^2+k \).</p>
	<p>The <strong>vertex</strong> of the quadratic function is located at \((h, k)\), where \(h\) and \(k\) are the numbers in the transformation form of the function.  Because the vertex appears in the transformation form, it is often called the <strong>vertex form</strong>.</p>
</div>

<div class="example">
	<h4>Example 2</h4>
	<p>Write an equation for the quadratic graphed below as a transformation of \( f(x)=x^2 \).</p>
	<figure><img src="images/image057.png" alt="graph"/></figure>
	<p>We can see the graph is the basic quadratic shifted to the left 2 and down 3, putting the vertex at \((-2, -3)\), giving a formula in the form \( g(x)=a(x+2)^2-3 \).  By plugging in a point that falls on the grid, such as \((0,-1)\), we can solve for the stretch factor:
	\[\begin{align*}
		-1=&amp;a(0+2)^2-3 \\
		2=&amp; 4a \\
		a=&amp; \frac{1}{2}
	\end{align*}\]
	</p>
	<p>The  equation for this formula is \[ g(x)=\frac{1}{2}(x+2)^2-3 \]</p>
</div>

<div class="videoplayer w639">
	<video id="video_1.5.1" class="video-js vjs-default-skin" controls preload="metadata" width="639" height="auto">
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_1-5/completing_the_square.mp4" type='video/mp4' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_1-5/completing_the_square.webm" type='video/webm' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

<h3>Short run Behavior: Intercepts</h3>
<p>As with any function, we can find the vertical intercepts of a quadratic by evaluating the function at an input of zero, and we can find the horizontal intercepts by solving for when the output will be zero.  Notice that depending upon the location of the graph, we might have zero, one, or two horizontal intercepts.</p>
<figure>
	<img src="images/image058.png" alt="zero horizontal intercepts"/>
	<figcaption>Zero horizontal intercepts</figcaption>
</figure>
<figure>
	<img src="images/image059.png" alt="one horizontal intercept"/>
	<figcaption>One horizontal intercept</figcaption>
</figure>
<figure>
	<img src="images/image060.png" alt="two horizontal intercepts"/>
	<figcaption>Two horizontal intercepts</figcaption>
</figure>
<p>Notice that in the standard form of a quadratic, the constant term c reveals the vertical intercept of the graph, since \( f(0)=a(0)^2+b(0)+c=c \).</p>

<div class="example">
	<h4>Example 3</h4>
	<p>Find the vertical and horizontal intercepts of the quadratic \( f(x)=3x^2+5x-2 \).</p>
	<p>We can find the vertical intercept by evaluating the function at an input of zero: \[f(0)=3(0)^2+5(0)-2=-2\] So the vertical intercept is at (0,-2)</p>
	<p>For the horizontal intercepts, we solve for when the output will be zero: \[0=3x^2+5x-2.\] In this case, the quadratic can be factored easily, providing the simplest method for solution.: \[0=(3x-1)(x+2),\] so either
	\[ \begin{align*}
		0=&amp; 3x-1\\
		x=&amp; \frac{1}{3}
	\end{align*} \]
	or
	\[ \begin{align*}
		0=&amp; x+2\\
		x=&amp; -2
	\end{align*} \]
	So the Horizontal intercepts are at \( \left(\frac{1}{3},0\right) \) and \((-2,0)\).</p>
</div>

<p>When a quadratic is not factorable or is hard to factor, we can turn to the quadratic formula.</p>

<div class="thmdef">
	<h4>Quadratic Formula</h4>
	<p>For a quadratic function given in standard form \( f(x)=ax^2+bx+c \), the <strong>quadratic formula</strong> gives the horizontal intercepts of the graph of this function:\[ x=\frac{-b\pm \sqrt{b^2-4ac}}{2a} \]</p>
</div>

<div class="videoplayer w639">
	<video id="video_1.5.2" class="video-js vjs-default-skin" controls preload="metadata" width="639" height="auto">
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_1-5/parabola_sketch.mp4" type='video/mp4' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_1-5/parabola_sketch.webm" type='video/webm' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

<div class="example">
	<h4>Example 4</h4>
	<p>A ball is thrown upwards from the top of a 40 foot high building at a speed of 80 feet per second.  The ball’s height above ground can be modeled by the equation \[ H(t)=-16t^2+80t+40 .\]  When does the ball hit the ground?</p>
	<p>To find when the ball hits the ground, we need to determine when the height is zero, i.e.,  when \(H(t) = 0\).  While we could do this using the transformation form of the quadratic, we can also use the quadratic formula: \[ t=\frac{-80\pm \sqrt{80^2-4(-16)(40)}}{2(-16)}=\frac{-80\pm\sqrt{8960}}{-32} \]</p>
	<p>Since the square root does not simplify nicely, we can use a calculator to approximate the values of the solutions:\[ t=\frac{-80-\sqrt{8960}}{-32}\approx 5.458 \quad\text{or}\quad t=\frac{-80+\sqrt{8960}}{-32}\approx -0.458 \]</p>
	<p>The second answer is outside the reasonable domain of our model, so we conclude the ball will hit the ground after about 5.458 seconds.</p>
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
			<td><a href="section1-4.php">&larr; Previous Section</a></td>
			<td><a href="section1-6.php">Next Section &rarr; </a></td>
		</tr>
	</table>
</footer>
</div>
</body>
</html>