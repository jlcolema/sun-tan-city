<?php include ($_SERVER['DOCUMENT_ROOT']."/a/inc/head.php"); ?>

<body id="new-account" class="step-one invitation signed-out">

	<div id="page">

		<?php include ($_SERVER['DOCUMENT_ROOT']."/a/inc/header.php"); ?>

		<?php include ($_SERVER['DOCUMENT_ROOT']."/a/inc/nav.php"); ?>

		<div id="section">

			<div class="wrap">

				<div class="section">

					<h1>Glad you got your invite!</h1>

					<p>As one of our best customers, My Sun Tan City offers you an exclusive opportunity to be one of the first to try out our member portal, wherein you can purchase upgrade dollars, edit your membership, check-in early at your favorite salon, and much more.</p>

					<div class="now-you-can">

						<ul>

							<li class="check-in">Mobile Check-In</li>

							<li class="wait-times">View Wait Times</li>

							<li class="purchase-services">Purchase Services</li>

						</ul>

					</div>

					<p>There are just a few steps left and you&rsquo;ll be set up. Follow me!</p>

				</div>

			</div>

		</div>

		<div id="content">

			<div class="wrap">

				<div id="main" role="main">

					<h2 class="section-title step">Step 1 <em>Create a password &amp; Terms of Use</em></h2>

					<form action="/new-account/step-two.php" method="post">

						<ol>

							<li>

								<label for="password">Password</label>

								<input id="password" type="password" class="k-textbox" />

							</li>

							<li>

								<label for="confirm-password">Password</label>

								<input id="confirm-password" type="password" class="k-textbox" />

							</li>

							<li>

								<label for="security-question">Security Question</label>

								<select>

									<option>City you were born in?</option>
									<option>Option Two</option>
									<option>Option Three</option>
									<option>Option Four</option>

								</select>

							</li>

							<li>

								<label class="checkbox" for="agree">

									<input type="checkbox" id="agree" data-bind="" />

									I agree to the <a href="#">Terms and Conditions</a>

								</label>

							</li>

						</ol>

						<button class="k-button">Continue</button>

					</form>

				</div>

			</div>

		</div>

		<div id="page-shim"></div>

	</div>

<?php include ($_SERVER['DOCUMENT_ROOT']."/a/inc/footer.php"); ?>