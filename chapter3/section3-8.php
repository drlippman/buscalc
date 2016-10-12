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
<h1>Section 3.8: Differential Equations</h1>

<p>A <strong>differential equation</strong> is an equation involving the derivative of a function.  They allow us to express with a simple equation the relationship between a quantity and it's rate of change.</p>

<div class="example">
	<h4>Example 1</h4>
	<p>A bank pays 2% interest on its certificate of deposit accounts, but charges a $20 annual fee.  Write an equation for the rate of change of the balance,  \( B'(t) \).</p>
	<p>If the balance \( B(t) \)  has units of dollars, then \( B'(t) \)  has units of dollars per year.  When we think of what is changing the balance of the account, there are two factors:</p>
	<ol>
		<li>The interest, which increases the balance, and</li>
		<li>The fee, which decreases the balance.</li>
	</ol>
	<p>Considering the interest, we know each year the balance will increase by 2%, but 2% of what?  Each year that will change, since we earn interest on whatever the current balance is.  We can represent the amount of increase as 2% of the balance:   \( 0.02B(t) \) dollars/year.</p>
	<p>The fee already has the units of dollars/year.  Since everything now has the same units, we can put the two together, and create the equation: \[ B'(t)=0.02B(t)-20. \]</p>
</div>

<p>The result is an example of a differential equation.  Notice this particular equation involves both the derivative <em>and</em> the original function, and so we can't simply find \( B(t) \)  using basic integration.</p>

<p>Algebraic equations contain constants and variables, and the solutions of an algebraic equation are typically numbers.  For example,  \(x = 3\)  and  \(x = -2\)  are solutions of the algebraic equation  \(x^2 = x + 6\).  Differential equations contain derivatives or differentials of functions.  Solutions of differential equations are functions.  The differential equation  \(y' = 3x^2\)  has infinitely many solutions, and two of those solutions are the functions  \(y = x^3 + 2\)  and   \(y = x^3 - 4\).</p>

<figure><img src="images/image064.png" alt="graphs"/></figure>

<p>You have already solved lots of differential equations:  every time you found an antiderivative of a function  \(f(x)\), you solved the differential equation  \(y' = f(x)\)  to get a solution  \(y\).  The differential equation \(y' = f(x)\), however,  is just the beginning.  Other applications generate different differential equations, like in the bank balance example above.</p>

<section><h2>Checking Solutions of Differential Equations</h2>

<p>Whether a differential equation is easy or difficult to solve, it is important to be able to check that a possible solution really satisfies the differential equation.</p>

<p>A possible solution of an algebraic equation can be checked by putting the solution into the equation to see if the result is true:  \(x = 3\)  is a solution of  \(5x + 1 = 16\)  since  \(5(3) + 1 = 16\) is true.  Similarly, a solution of a differential equation can be checked by substituting the function and the appropriate derivatives into the equation to see if the result is true:  \(y = x^2\)  is a solution of  \(xy' = 2y\)  since \(y' = 2x\) and \(x(2x) = 2\left(x^2\right)\) is true.</p>

<div class="example">
	<h4>Example 2</h4>
	<p>Check  (a) that  \(y = x^2 + 5\)  is a solution of  \(y'' + y = x^2 + 7\)  and 
 (b)  that  \(y = x + \frac{5}{x}\)  is a solution of  \(y' + \frac{y}{x}   = 2\).
</p>
	<ol class="smlatin">
		<li>\(y = x^2 + 5\)  so  \(y' = 2x\)  and  \(y'' = 2\).  Substituting these functions for  \(y\)  and  \(y''\)  into the differential equation  \(y'' + y = x^2 + 7\), we have  \[y'' + y = (2) + \left(x^2 + 5\right) = x^2 + 7,\]  so  \(y = x^2 + 5\)  is a solution of the differential equation.</li>
		<li>\(y = x + \frac{5}{x}\)  so  \(y' = 1 - \frac{5}{x^2}\).   Substituting these functions for  \(y\)  and  \(y'\)  in the differential	equation  \(y' + \frac{y}{x}   = 2\),  we have \[ y' + \frac{y}{x}   =  \left(1 - \frac{5}{x^2}\right) + \frac{1}{x}\left(x + \frac{5}{x}\right)  = 1 - \frac{5}{x^2} + 1 + \frac{5}{x^2}  = 2, \] the result we wanted to verify.
</li>
	</ol>
</div>

</section>

<section><h2>Separable Differential Equations</h2>

<p>A differential equation is called separable if the variables can be separated algebraically so that all the \(x\)'s and \(dx\) are one one side of the equation, and all the \(y\)'s and \(dy\) are on the other side of the equation.  In other words, so the equation has the form \( f(x)\, dx=g(y)\, dy \).</p>

<p>Once separated, separable differential equations can be solved by integrating both sides of the equation.</p>

<div class="example">
	<h4>Example 3</h4>
	<p>Find the solution of  \[ y'=\frac{6x+1}{2y}. \]</p>
	<p>Rewriting \(y'\) is a helpful first step: \[ \frac{dy}{dx}=\frac{6x+1}{2y}\]</p>
	<p>Now we can multiply both sides by \(dx\) and by \(2y\) to separate the variables: \[ 2y\, dy=(6x+1)\, dx</p>
	<p>Integrating each side, we have
		\[ \begin{align*}
			\int 2y\, dy &amp; =  \int (6x+1)\, dx \\
			y^2+C_1 &amp; =  3x^2+x+C_2
		\end{align*} \]
	</p>
	<p>Notice that we can combine the two constants to create a new, consolidated constant \(C\), so we usually only bother to put a constant on the right side: \[ y^2=3x^2+x+C. \]</p>
</div>

<p>As expected, there is a whole family of solutions to this differential equation.</p>

<div class="important">
	<h4>Initial Value Problem (IVT)</h4>
	<p>An <strong>initial value problem</strong> is a differential equation that provides additional information about the initial, or starting, value of the function.  This allows us to then solve for the constant and find a single solution.</p>
</div>

<div class="example">
	<h4>Example 4</h4>
	<p>Find the solution of  \( y'=\frac{6x+1}{2y} \) which satisfies \( y(2)=3 \).</p>
	<p>In the previous example we found the general solution, \( y^2=3x^2+x+C \). </p> 
	<p>Substituting in the initial condition, \(y = 3\) when \(x = 2\), \[3^2=3(2)^2+2+C,\] so \( 9=12+2+C \), giving \( C=-5 \).</p>
	<p>The solution is  \[ y^2=3x^2+x-5. \]  Sometimes it is desirable to solve for \(y\), which would yield \( y=\pm\sqrt{3x^2+x-5} \), but since the initial condition had a positive \(y\) value, we isolate the positive solution: \[ y=\sqrt{3x^2+x-5}. \]</p>
</div>

<div class="example">
	<h4>Example 5</h4>
	<p>A bank pays 2% interest on its certificate of deposit accounts, but charges a $20 annual fee.  If you initially invest $3,000, how much will you have after 10 years?</p>
	<p>You may recognize this as the example from the beginning of the section, for which we set up the equation  \( B'(t)=0.02B(t)-20 \) or, more simply, \[ \frac{dB}{dt}=0.02B-20. \]</p>
	<p>We can separate this equation by multiply by \(dt\) and dividing by the entire expression on the right: \[ \frac{dB}{0.02B-20}=dt. \]</p>
	<p>Integrating the left side of this equation requires substitution.  Let \( u=0.02B-20 \), so  \( du=0.02\, dB \).  Making the substitution,
		\[ \begin{align*}
			\int\frac{dB}{0.02B-20} &amp; =  \int\frac{du/0.02}{u} \\
			 &amp; =  \int\frac{1}{u}\frac{du}{0.02} \\
			 &amp; =  \frac{1}{0.02}\int\frac{1}{u}\, du \\
			 &amp; =   \frac{1}{0.02}\ln|u|+C_1\\
			 &amp; =   \frac{1}{0.02}\ln|0.02B-20|+C_1
		\end{align*} \]
	</p>
	<p>Integrating on the right side of the differential equation is easier: \[\int dt = t+C_2\]</p>
	<p>Together, this gives us the general solution to the differential equation (we're also combining the \( C \)'s in this step): \[ \frac{1}{0.02}\ln|0.02B-20|=t+C \]</p>
	<p>Now we would like to solve for \(B\).  Start by multiplying by 0.02.
		\[ \begin{align*}
			\ln|0.02B-20| &amp; =  0.02t+0.02C &amp;\\
			\ln|0.02B-20| &amp; =  0.02t+D &amp;\qquad\text{We can rename \( D=0.02C \) for simplicity.}\\
			e^{\ln|0.02B-20|} &amp; =  e^{0.02t+D} &amp;\qquad\text{Exponentiate both sides: \( e^{\text{left}}=e^{\text{right}} \).}\\
			|0.02B-20| &amp; =  e^{0.02t+D} &amp;\qquad\text{Use the log rule \( e^{\ln(A)}=A \).}\\
			0.02B-20 &amp; =  e^{0.02t+D} &amp;\qquad\text{Since the RHS is always positive, we can drop the abs value.}\\
			0.02B-20 &amp; =  e^{0.02t}e^D &amp;\qquad\text{Using the rule \( e^{A+B}=e^Ae^B \).}\\
			0.02B-20 &amp; =  ke^{0.02t} &amp;\qquad\text{Rename \( k=e^D \).}\\
			B &amp; =  \frac{ke^{0.02t}+20}{0.02}=\frac{ke^{0.02t}}{0.02}+1000 &amp;\qquad\text{Add 20 and divide by 0.02.}\\
			B &amp; =  Ae^{0.02t}+1000 &amp;\qquad\text{Rename \( A=\frac{k}{0.02} \).}
		\end{align*} \]
	</p>
	<p>Finally, we can substitute our initial value of \(B = 3000\) when \(t = 0\) to solve for the constant \(A\):
		\[ \begin{align*}
			3000 &amp; =  Ae^{0.02(0)}+1000 \\
			A &amp; =  2000
		\end{align*} \]
	</p>
	<p>This gives us the equation for the account balance after \(t\) years: \[ B(t)=2000e^{0.02t}+1000. \]</p>
	<p>To find the balance after 10 years, we can evaluate this equation at \(t = 10\): \[ B(10)=2000e^{0.02(10)}+1000\approx \$3442.81. \]</p>
</div>

<p>It's worth noting that this answer isn't exactly right.  Differential equations assume <em>continuous</em> changes, and it is unlikely interest is compounded continuously or the fee is extracted continuously.  However, the answer is probably close to the actual answer, and differential equations provide a relatively simple model of a complicated situation.</p>

</section>

<section><h2>Models of Growth</h2>

<p>The bank account example demonstrated one basic model of growth:  growth proportional to the existing quantity.  Bank accounts and populations both tend to grow this way if not constrained.  This type of growth is called <strong>unlimited growth</strong>.</p>

<div class="important">
	<h4>Unlimited Growth</h4>
	<p>If a quantity or population y grows at a rate proportional that quantity's size, it can be modeled with unlimited growth, which has the differential equation: \[ y'=ry, \]  where \(r\) is a constant.</p>
</div>

<div class="example">
	<h4>Example 6</h4>
	<p>A population grows by 8% each year.  If the current population is 5,000, find an equation for the population after \(t\) years.</p>
	<p>
		\[ \begin{align*}
			\frac{dy}{dt} &amp; =  0.08y &amp;\\
			\frac{1}{y}\, dy &amp; =  0.08\, dt &amp;\qquad\text{Separate the variables.}\\
			\ln|y| &amp; =  0.08t+C &amp;\qquad\text{Integrate both sides.}\\
			e^{\ln|y|} &amp; =  e^{0.08t+C} &amp;\qquad\text{Exponentiate both sides.}\\
			y &amp; =  Ae^{0.08t} &amp;\qquad\text{Simplify both sides, using the tricks we used in the bank example.}
		\end{align*} \]
	</p>
	<p>Now substitute in the initial condition: \( 5000=Ae^{0.08(0)} \), so \( A=5000 \).</p>
	<p>The population will grow following the equation \[ y=5000e^{0.08t}. \]</p>
</div>

<p>Notice that the solution to the unlimited growth equation is an exponential equation.</p>

<p>When a product is advertised heavily, sales will tend to grow very quickly, but eventually the market will reach saturation, and sales will slow.  In this type of growth, called <strong>limited growth</strong>, the population grows at a rate proportional to the distance from the maximum value.</p>

<div class="important">
	<h4>Limited Growth</h4>
	<p>If a quantity grows at a rate proportional to the distance from the maximum value, \(M\), it can be modeled with limited growth, which has the differential equation \[ y'=k(M-y), \] where \(k\) is a constant, and \(M\) is the maximum size of \(y\).</p>
</div>

<div class="example">
	<h4>Example 7</h4>
	<p>A new cell phone is introduced.  The company estimates they will sell 200 thousand phones.  After 1 month they have sold 20 thousand.  How many will they have sold after 9 months?</p>
	<p>In this case there is a maximum amount of phones they expect to sell, so \(M = 200\) thousand.  Modeling the sales, \(y\), in thousands of phones, we can write the differential equation \[ y'=k(200-y). \]</p>
	<p>Since it was a new phone,  \( y(0)=0 \).  We also know the sales after one month,  \( y(1)=20 \).</p>
	<p>Solving the differential equation:
		\[ \begin{align*}
			\frac{dy}{dt} &amp; =  k(200-y) &amp;\\
			\frac{dy}{200-y} &amp; =  k\, dt &amp;\qquad\text{Separate the variables.}\\
			-\ln|200-y| &amp; =  kt+C &amp;\qquad\text{Integrate both sides. On the left use the substitution.}\\
			e^{\ln|200-y|} &amp; =  e^{-kt+C} &amp;\qquad\text{Multiply both sides by -1, and exponentiate both sides.}\\
			200-y &amp; =  Be^{-kt} &amp;\qquad\text{Simplify.}\\
			y &amp; =  Ae^{-kt}+200 &amp;\qquad\text{Subtract 200, divide by -1, and simplify.}
		\end{align*} \]
	</p>
	<p>Using the initial condition \( y(0)=0 \), \[ 0=Ae^{-k(0)}+200, \] so \( 0=A+200 \), giving \( A=-200 \).</p>
	<p>Using the value \( y(1)=20 \):
		\[ \begin{align*}
			20 &amp; =  -200e^{-k(t)}+200 &amp;\\
			\frac{=180}{-200} &amp; =  0.9=e^{-k} &amp;\qquad\text{Subtract 200 and divide -200.}\\
			\ln(0.9) &amp; =  \ln\left(e^{-k}\right)=-k &amp;\qquad\text{Take the ln of both sides.}\\
			k &amp; =  -\ln(0.9)\approx 0.105 &amp;\qquad\text{Divide by -1.}
		\end{align*} \]
	</p>
	<p>As a quick sanity check, this value is positive as we would expect, indicating that the sales are growing over time.  We now have the equation for the sales of phones over time: \[ A=-200e^{-0.105t}+200. \]</p>
	<p>Finally, we can evaluate this at \(t = 9\) to find the sales after 9 months: \[ A(9)=-200e^{-0.105(9)}+200\approx 122.26\text{ thousand phones}. \]</p>
</div>

<p>Limited growth is also commonly used for learning models, since when learning a new skill, people typically learn quickly at first, then their rate of improvement slows down as they approach mastery.</p>

<p>Earlier we used unlimited growth to model a population, but often a population will be constrained by food, space, and other resources.  When a population grows both proportional to its size, and relative to the distance from some maximum, that is called <strong>logistic growth</strong>.  This leads to the differential equation  \( y'=ky(M-y) \), which is accurate but not always convenient to use.  We will use a slight modification.  Since solving this differential equation requires integration techniques we haven't learned, the solution form is given.</p>

<div class="important">
	<h4>Logistic Growth</h4>
	<p>If a quantity grows at a rate proportional to its size and to the distance from the maximum value, \(M\), it can be modeled with <strong>logistic growth</strong>, which has the differential equation: \[ y'=ry\left(1-\frac{y}{M}\right). \]</p>
	<p>\(r\) can be interpreted as <q>the growth rate absent constraints</q>, i.e., how the population would grow if there wasn't a maximum value.</p>
	<p>This differential equation has solutions of the form \[ y=\frac{M}{1+Ae^{-rt}}. \]</p>
</div>

<div class="example">
	<h4>Example 8</h4>
	<p>A colony of 100 rabbits is introduced to a reclaimed forest.  After 1 year, the population has grown to 300.  It is estimated the forest can sustain 5000 rabbits.  The forest service plans to reintroduce wolves to the forest when the rabbit population reaches 3000 rabbits.  When will that occur?</p>
	<p>The maximum sustainable population was given as \(M = 5000\).  Using the solution form \[ y=\frac{M}{1+Ae^{-rt}} \] and the initial condition \( y(0)=100 \) we can solve for \( A \):
		\[ \begin{align*}
			100 &amp; =  \frac{5000}{1+Ae^{-r(0)}} &amp;\\
			100 &amp; =  \frac{5000}{1+A} &amp;\qquad\text{Simplify.}\\
			100(1+A) &amp; =  5000 &amp;\qquad\text{Multiply both sides by \( 1+A \).}\\
			1+A &amp; =  50 &amp;\qquad\text{Divide by 100.}\\
			A &amp; =  49 &amp;
		\end{align*} \]	
	</p>
	<p>Now, using  \( y(1)=300 \), we can solve for \(r\):
		\[ \begin{align*}
			300 &amp; =  \frac{5000}{1+49e^{-r(1)}} \\
			300\left(1+49e^{-r}\right) &amp; =  5000 \\
			1+49e^{-r} &amp; =  \frac{5000}{300} \\
			e^{-r} &amp; =  \frac{\frac{50}{3}-1}{49}\approx 0.3197 \\
			-r &amp; =  \ln(0.3197) \\
			r &amp; =  -\ln(0.3197)\approx 1.1404
		\end{align*} \]
	</p>
	<p>We now have the equation for the population after \(t\) years: \[ y=\frac{5000}{1+49e^{-1.1404t}}. \]</p>
	<p>To answer the original equation, of when the rabbit population will reach 3000, we need to solve for \(t\) when \(y = 3000\):
		\[ \begin{align*}
			3000 &amp; =  \frac{5000}{1+49e^{-1.1404t}} \\
			3000\left(1+49e^{-1.1404t}\right) &amp; =  5000 \\
			e^{-1.1404t} &amp; =  \frac{\frac{5}{3}-1}{49}\approx 0.01361 \\
			t &amp; =  \frac{\ln(0.01361)}{-1.1404}\approx 3.77\text{ years}.
		\end{align*} \]
	</p>
</div>

<p>Logistic growth is also a good model for unadvertised sales.  A new product that is not advertised will have sales increase slowly at first, then grow as word of mouth spreads and people become familiar with the product.  Sales will level off as they approach market saturation.</p>

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
			<td><a href="section3-7.php">&larr; Previous Section</a></td>
			<td><a href="../chapter4/section4-1.php">Next Section &rarr; </a></td>
		</tr>
	</table>
</footer>
</div>
</body>
</html>