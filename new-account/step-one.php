<?php include ($_SERVER['DOCUMENT_ROOT']."/a/inc/head.php"); ?>

<body id="new-account" class="step-one signed-out">

	<div id="page">

		<?php include ($_SERVER['DOCUMENT_ROOT']."/a/inc/header.php"); ?>

		<?php include ($_SERVER['DOCUMENT_ROOT']."/a/inc/nav.php"); ?>

		<div id="section">

			<div class="wrap">

				<div class="section">

					<h1>Congratulations! Your account has been created.</h1>

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

								<label for="confirm-password">Confirm Password</label>

								<input id="confirm-password" type="password" class="k-textbox" />

							</li>

							<li>

								<label for="security-question">Security Question</label>

								<select>

									<option>-- Choose --</option>
									<option>Option One</option>
									<option>Option Two</option>
									<option>Option Three</option>

								</select>

							</li>

							<li>

								<label for="security-question-answer">Security Question Answer</label>

								<input id="security-question-answer" type="text" class="k-textbox" />

							</li>

							<li>

								<label class="checkbox" for="terms-and-conditions">

									<input id="terms-and-conditions" type="checkbox" />

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