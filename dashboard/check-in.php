<?php include ($_SERVER['DOCUMENT_ROOT']."/a/inc/head.php"); ?>

<body id="dashboard" class="check-in signed-in">

	<div id="page">

		<?php include ($_SERVER['DOCUMENT_ROOT']."/a/inc/header.php"); ?>

		<?php include ($_SERVER['DOCUMENT_ROOT']."/a/inc/nav-purchase.php"); ?>

		<div id="section" class="title-only">

			<div class="wrap">

				<div class="section">

					<h1>Salon Check-In</h1>

				</div>

			</div>

		</div>

		<div id="content">

			<div class="wrap">

				<div id="main" role="main">

					<p>Sunless tanning is a great way to get an instant sun-kissed glow. Below are all of the options we offer at Sun Tan City to make sure that you get a natural looking glow. The options are endless, but don&rsquo;t worry we have created a cheat sheet for your reference when you are making your selection. Please select your sunless tanning option, and we&rsquo;ll get you all set up. Remember to reference the &ldquo;What do these options mean?&rdquo; box to the right for reference when making your selection.</p>

					<form action="/dashboard/check-in-step-two.php">

						<div class="group">

							<div class="check-in-options">

								<h2 class="title">Select which options you would like to use</h2>

								<ul>

									<li>

										<select>

											<option>Prep Options</option>
											<option>Option One</option>
											<option>Option Two</option>
											<option>Option Three</option>

										</select>

									</li>

									<li>

										<select>

											<option>Solution &amp; Tan Color Options</option>
											<option>Option One</option>
											<option>Option Two</option>
											<option>Option Three</option>

										</select>

									</li>

									<li>

										<select>

											<option>Extra Options</option>
											<option>Option One</option>
											<option>Option Two</option>
											<option>Option Three</option>

										</select>

									</li>

								</ul>

							</div>

							<div class="check-in-options-definitions">

								<div class="k-block">

									<div class="k-header">What do these options mean?</div>

									<ul>

										<li><b>Prep:</b> Prepares your skin to receive the solution and allows for a more event application.</li>

										<li><b>Solution color:</b> Clear or tinted, it&rsquo;s totally your preference. Clear will show a delayed tan, within 4-6 hours of application. Tinted solution allows you to walk out of the salon with a glow but is only temporary color while your actual color develops.</li>

										<li><b>Tan color:</b> Light, medium, dark or double dark. Based on your current skin color you want to select something that will allow you a natural looking glow, while still giving you the intensity of tan you would like. If you are Skin Type I, for example, you may want to stick with Light or Medium.</li>

										<li><b>Extras:</b> Want to extend the life of your sunless tan? Add hydration. Need a little more color? get an extra pass on your legs &ndash; allows you to give your legs an extra boost of color.</li>

									</ul>

									<p class="note">* The extras only apply to certain equipment.</p>

								</div>

							</div>

						</div>

						<button class="k-button">Continue</button>

						<button class="k-button cancel">Cancel</button>

					</form>

				</div>

			</div>

		</div>

		<div id="page-shim"></div>

	</div>

<?php include ($_SERVER['DOCUMENT_ROOT']."/a/inc/footer.php"); ?>