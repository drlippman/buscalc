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
<h1>Section 3.7: Applications to Business</h1>

<section id="surplus"><h2>Consumer and Producer Surplus</h2>

<p>Here are a demand and a supply curve for a product.  Which is which?</p>
<figure><img src="images/image062.png" alt="graph"/></figure>

<p>The demand curve is decreasing &ndash; lower prices are associated with higher quantities demanded, higher prices are associated with lower quantities demanded.  Demand curves are often shown as if they were linear, but there’s no reason they have to be.</p>

<p>The supply curve is increasing &ndash; lower prices are associated with lower supply, and higher prices are associated with higher quantities supplied.</p>

<p>The point where the demand and supply curve cross is called the equilibrium point \((q^*, p^*)\).</p>

<figure><img src="images/image063.png" alt="graph"/></figure>

<p>Suppose that the price is set at the equilibrium price, so that the quantity demanded equals the quantity supplied.   Now think about the folks who are represented on the left of the equilibrium point.  The consumers on the left would have been willing to pay a higher price than they ended up having to pay, so the equilibrium price saved them money.  On the other hand, the producers represented on the left would have been willing to supply these goods for a lower price &ndash; they made more money than they expected to.  Both of these groups ended up with extra cash in their pockets!</p>

<p>Graphically, the amount of extra money that ended up in consumers' pockets is the area between the demand curve and the horizontal line at \(p^*\).  This is the difference in price, summed up over all the consumers who spent less than they expected to &ndash; a definite integral.  Notice that since the area under the horizontal line is a rectangle, we can simplify the area integral: \[ \int\limits_0^{q^*} \left( d(q)-p^*\right)\, dq = \int\limits_0^{q^*} d(q)\, dq - \int\limits_0^{q^*} p^*\, dq = \int\limits_0^{q^*} d(q)\, dq - p^*q^*.\]</p>

<p>The amount of extra money that ended up in producers' pockets is the area between the supply curve and the horizontal line at \(p^*\).  This is the difference in price, summed up over all the producers who received more than they expected to.  Similar to consumer surplus, this integral can be simplified: \[ \int\limits_0^{q^*} \left( p^*-s(q) \right)\, dq = \int\limits_0^{q^*} p^*\, dq - \int\limits_0^{q^*} s(q)\, dq = p^*q^* - \int\limits_0^{q^*} s(q)\, dq.\]</p>

<div class="important">
	<h4>Consumer and Producer Surplus</h4>
	<p>Given a demand function \(p = d(q)\) and a supply function \(p = s(q)\), and the equilibrium point \((q^*, p^*)\)</p>
	<ul>
		<li>The <strong>consumer surplus</strong> is \[\int\limits_0^{q^*} d(q)\, dq - p^*q^*.\]</li>
		<li>The <strong>producer surplus</strong> is \[p^*q^* - \int\limits_0^{q^*} s(q)\, dq.\]</li>
		<li>The sum of the consumer surplus and producer surplus is the <strong>total gains from trade</strong>.</li>
	</ul>
</div>

<p>What are the units of consumer and producer surplus? The units are (price per item)(quantity of items) = money!</p>

<div class="videoplayer w639">
	<video id="video_3.7.1" class="video-js vjs-default-skin" controls preload="metadata" width="639" height="auto">
		<source src="video_3-7/consumer_and_producer_surplus.webm" type='video/webm' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_3-7/consumer_and_producer_surplus.mp4" type='video/mp4' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

<div class="example">
	<h4>Example 1</h4>
	<p>Suppose the demand for a product is given by \( p=d(q)=-0.8q+150 \) and the supply for the same product is given by  \( p=s(q)=5.2q \).  For both functions, \(q\) is the quantity and \(p\) is the price, in dollars.</p>
	<ol class="smlatin">
		<li>Find the equilibrium point.</li>
		<li>Find the consumer surplus at the equilibrium price.</li>
		<li>Find the producer surplus at the equilibrium price.</li>
	</ol>
	<ol class="smlatin">
		<li><p>The equilibrium point is where the supply and demand functions are equal. 
		\[ \begin{align*}
			-0.8q+150 	&amp; = 5.2q \\
			150 		&amp; = 6.0q \\
			q 			&amp; = \frac{150}{6} \\
			q			&amp; = 25
			\end{align*} \]</p>
			
			<p>The equilibrium quantity is 25 items.  To find the corresponding equilibrium price we can use either the demand or supply equation.</p>
			
			<p>\(s(25) = 5.2(25) = 130\).  The equilibrium price is $130.</p>
			
		<li>The consumer surplus is 
		\[  \begin{align*}
			\int_0^{25} (-0.8q+150)\, dq - (130)(25) 	&amp; = \left[-0.8 \frac{q^2}{2} + 150 q\right]_0^{25} - 3250 \\
														&amp; = \left(-0.4\left(25^2\right) + 150(25)\right) - \left(-0.4\left(0^2\right) + 150(0)\right) - 3250 \\
														&amp; = 3500 - 0 - 3250 \\
														&amp; = \$250
			\end{align*} \]</li>
			
		<li>The producer surplus is
		
		\[  \begin{align*}
			(130)(25) - \int_0^{25} 5.2q\, dq 	&amp; = 3250 - \left[5.2 \frac{q^2}{2}\right]_0^{25}  \\
												&amp; = 3250 - \left(\left(2.6\left(25^2\right)\right) - \left(2.6\left(0^2\right)\right)\right) \\
												&amp; = 3250 - (1625 - 0) \\
												&amp; = \$1625
			\end{align*} \]</li>
	</ol>
</div>

<div class="example">
	<h4>Example 2</h4>
	<p>Suppose the demand for a product is given by \( p=d(q)=300-5q \) and the supply for the same product is given by  \( p=s(q)=q^2 \).  For both functions, \(q\) is the quantity and \(p\) is the price, in dollars.</p>
	<ol class="smlatin">
		<li>Find the equilibrium point.</li>
		<li>Find the consumer surplus at the equilibrium price.</li>
		<li>Find the producer surplus at the equilibrium price.</li>
	</ol>
	<ol class="smlatin">
		<li><p>The equilibrium point is where the supply and demand functions are equal:  \(300-5q = q^2\). </p>
		    <p>This is quadratic, so we can rearrange the equation so one side is zero:  \(q^2 + 5q - 300 = 0\).</p>
		    <p>We could solve this using the quadratic equation:  \(q = \frac{-5 \pm \sqrt{5^2-4(1)(-300)}}{2(1)}\)</p>
		    <p>or we could factor:  \((q+20)(q-15)=0\), so \(q =-20\) or \(q = 15\).</p>
		    <p>We want the positive solution. The equilibrium quantity is 15 items.  The equilibrium price is \(s(15) = 15^2 = \$225\).</p>
		</li>	
		<li>The consumer surplus is 
		\[  \begin{align*}
			\int_0^{15} (300-5q)\, dq - (225)(15) 	&amp; = \left[300q -  5\frac{q^2}{2}\right]_0^{15} - 3375 \\
													&amp; = \left(300(15) - 2.5\left(15^2\right)\right) - \left(300(0) - 2.5\left(0^2\right)\right) - 3375 \\
													&amp; = 3937.5 - 0 - 3375 \\
													&amp; = \$562.50
			\end{align*} \]</li>
			
		<li>The producer surplus is 
		
		\[  \begin{align*}
			(225)(15)  - \int_0^{15} q^2\, dq 	&amp; = 3375 - \left[\frac{q^3}{3}\right]_0^{15}s  \\
												&amp; = 3375 - \left(\left(\frac{15^3}{3}\right) - \left(\frac{0^3}{3}\right)\right) \\
												&amp; = 3375 - (1125 - 0) \\
												&amp; = \$2250
			\end{align*} \]</li>
	</ol>
</div>

<div class="example">
	<h4>Example 3</h4>
	<p>The tables below show information about the demand and supply functions for a product.  For both functions, \(q\) is the quantity and \(p\) is the price, in dollars.</p>
	<table class="border">
		<tr>
			<td>q</td>
			<td>0</td>
			<td>100</td>
			<td>200</td>
			<td>300</td>
			<td>400</td>
			<td>500</td>
			<td>600</td>
			<td>700</td>
		</tr>
		<tr>
			<td>p</td>
			<td>70</td>
			<td>61</td>
			<td>53</td>
			<td>46</td>
			<td>40</td>
			<td>35</td>
			<td>31</td>
			<td>28</td>
		</tr>
	</table>
	<p></p>
	<table class="border">
		<tr>
			<td>q</td>
			<td>0</td>
			<td>100</td>
			<td>200</td>
			<td>300</td>
			<td>400</td>
			<td>500</td>
			<td>600</td>
			<td>700</td>
		</tr>
		<tr>
			<td>p</td>
			<td>14</td>
			<td>21</td>
			<td>28</td>
			<td>33</td>
			<td>40</td>
			<td>47</td>
			<td>54</td>
			<td>61</td>
		</tr>
	</table>
	<ol class="smlatin">
		<li>Which is which?  That is, which table represents demand and which represents supply?</li>
		<li>What is the equilibrium price and quantity?</li>
		<li>Find the consumer and producer surplus at the equilibrium price.</li>
	</ol>
	<ol class="smlatin">
		<li>The first table shows decreasing price associated with increasing quantity; that is the demand function.</li>
		<li>For both functions, \(q = 400\) is associated with \(p = 40\); the equilibrium price is $40 and the equilibrium quantity is 400 units.  Notice that we were lucky here, because the equilibrium point is actually one of the points shown.  In many cases with a table, we would have to estimate.</li>
		<li>
			<p>The consumer surplus uses the demand function, which comes from the first table.  We'll have to approximate the value of the integral using rectangles.  There are 4 rectangles, and let's choose to use left endpoints. </p>
			<p>The consumer surplus is
				\[ \begin{align*}
					\int\limits_0^{400} \text{(demand)}\, dq-(40)(400)\approx &amp;  \\
					(100)(70+61+53+46)-(40)(400) &amp; =  \$7000
				\end{align*} \]
				So the consumer surplus is about $7000.
			</p>
			<p>The producer surplus uses the supply function, which comes from the second table.  Let's choose to use left endpoints for this integral also. </p>
			<p>The producer surplus is
				\[ \begin{align*}
					(40)(400)-\int\limits_0^{400} \text{(supply)}\, dq \approx &amp;  \\
					(40)(400)-(100)(14+21+28+33) &amp; =  \$6400
				\end{align*} \]
				So the producer surplus is about $6400.
			</p>
		</li>
	</ol>
</div>

</section>

<section id="incstream"><h2>Continuous Income Stream</h2>

<p>In precalculus, you learned about compound interest in that really simple situation where you made a single deposit into an interest-bearing account and let it sit undisturbed, earning interest, for some period of time.  Recall:</p>
<div class="important">
	<h4>Compound Interest Formulas</h4>
	<p>Let \(P\) be the principal (initial investment), \(r\) be the annual interest rate expressed as a decimal, and \(A(t)\) be the amount in the account at the end of \(t\) years.</p>
	<h5>Compounding \(n\) times per year</h5>
	<p>\[ A(t) = P\left(1+\frac{r}{n}\right)^{nt} \]</p>
	<h5>Compounded continuously</h5>
	<p>\[ A(t)=Pe^{rt} \]</p>
	<p>If you’re using this formula to find what an account will be worth in the future, \(t \gt 0\) and \(A(t)\) is called the <strong>future value</strong>.</p>
	<p>If you're using the formula to find what you need to deposit today to have a certain value \(P\) sometime in the future, \(t \lt 0\) and \(A(t)\) is called the <strong>present value</strong>.</p>
</div>

<p>You may also have learned somewhat more complicated annuity formulas to deal with slightly more complicated situations &ndash; where you make equal deposits equally spaced in time.  </p>

<p>But real life is not usually so neat.</p>

<p>Calculus allows us to handle situations where <q>deposits</q> are flowing continuously into an account that earns interest.  As long as we can model the flow of income with a function, we can use a definite integral to calculate the present and future value of a continuous income stream.  The idea here is that each little bit of income in the future needs to be multiplied by the exponential function to bring it back to the present, and then we'll add them all up (a definite integral).</p>

<div class="important">
	<h4>Continuous Income Stream</h4>
	<p>Suppose money can earn interest at an annual interest rate of r, compounded continuously.  	Let F(t) be a continuous  income function (in dollars per year) that applies between year 0 and year T.</p>
	<p>Then the present value of that income stream is given by \[ PV = \int\limits_0^T F(t)e^{-rt}\, dt. \]</p>
	<p>The future value can be computed by the ordinary compound interest formula \[ FV = PVe^{rt}. \]</p>
</div>

<p> This is a useful way to compare two investments &ndash; find the present value of each to see which is worth more today.</p>

<div class="videoplayer w639">
	<video id="video_3.7.2" class="video-js vjs-default-skin" controls preload="metadata" width="639" height="auto">
		<source src="video_3-7/continuous_income_stream.webm" type='video/webm' />
		<source src="http://studio11.gcc.edu/courses/bancrofted/math141/video_3-7/continuous_income_stream.mp4" type='video/mp4' />
		<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>
</div>

<div class="example">
	<h4>Example 4</h4>
	<p>You have an opportunity to buy a business that will earn $75,000 per year continuously over the next eight years.  Money can earn 2.8% per year, compounded continuously.  Is this business worth its purchase price of $630,000?</p>
	<p>First, please note that we still have to make some simplifying assumptions.  We have to assume that the interest rates are going to remain constant for that entire eight years.  We also have to assume that the $75,000 per year is coming in continuously, like a faucet dripping dollars into the business.  Neither of these assumptions might be accurate.  </p>
	<p>But moving on: The present value of the $630,000 is, well, $630,000.  This is one investment, where we put our $630,000 in the bank and let it sit there.</p>
	<p>To find the present value of the business, we think of it as an income stream.  The function \(F(t)\) in this case is a constant $75,000 dollars per year, so \(F(t) = 75,\!000\).  The interest rate is 2.8% and the term we're interested in is 8 years, so  \(r = .028\), and \(T = 8\): \[ PV=\int\limits_0^8 75000e^{-0.028t}\, dt \approx 537,\!548.75 \]</p>
	<p>The present value of the business is about $537,500, which is less than the $630,000 asking price, so this is not a good deal.</p>
</div>

<p>While this integral could have been done using substitution, for many of the integrals in this section we don't have the techniques to use antiderivatives or, in some cases, no antiderivative exists.  Technology will work quickly, and it will give you an answer that is good enough.</p>

<div class="example">
	<h4>Example 5</h4>
	<p>A company is considering purchasing a new machine for its production floor.  The machine costs $65,000.  The company estimates that the additional income from the machine will be a constant $7000 for the first year, then will increase by $800 each year after that.  In order to buy the machine, the company needs to be convinced that it will pay for itself by the end of 8 years with this additional income.  Money can earn 1.7% per year, compounded continuously.  Should the company buy the machine?</p>
	<p>We'll assume that the income will come in continuously over the 8 years.  We’ll also assume that interest rates will remain constant over that 8-year time period.</p>
	<p>We're interested in the present value of the machine, which we will compare to its $65,000 price tag.  Let \(t\)  be the time, in years, since the purchase of the machine.  The income from the machine is different depending on the time.  </p>
	<p>From \(t = 0\) to \(t = 1\) (the first year), the income is constant $7000 per year.  From \(t = 1\) to \(t = 8\), the income is increasing by $800 each year; the income flow function \(F(t)\) will be  \( F(t)=7000+800(t-1)=6200+800t \).  To find the present value, we'll have to divide the integral into the two pieces, one for each of the functions: \[ PV=\int\limits_0^1 7000e^{-0.017t}\, dt + \int\limits_1^8 (6200+800t)e^{-0.017t}\, dt \approx 70166. \]</p>
	<p>The present value is greater than the cost of the machine, so the company should buy the machine.</p>
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
			<td><a href="section3-6.php">&larr; Previous Section</a></td>
			<td><a href="section3-8.php">Next Section &rarr; </a></td>
		</tr>
	</table>
</footer>
</div>
</body>
</html>