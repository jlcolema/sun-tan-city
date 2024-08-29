<?php include ($_SERVER['DOCUMENT_ROOT']."/a/inc/head.php"); ?>

<body id="new-account" class="step-three signed-out">

	<div id="page">

		<?php include ($_SERVER['DOCUMENT_ROOT']."/a/inc/header.php"); ?>

		<?php include ($_SERVER['DOCUMENT_ROOT']."/a/inc/nav.php"); ?>

		<div id="section">

			<div class="wrap">

				<div class="section">

					<h1>Step 3 <span>Tell us about your skin</span></h1>

					<p>Understanding your skin type is the best way to get the most of your tanning experience. Take a few moments to tell us about your skin and complexion. We&rsquo;ll use your answers to make recommendations about what types of tanning would be right for you.</p>

				</div>

			</div>

		</div>

		<div id="content">

			<div class="wrap">

				<div id="main" role="main">

					<div class="skin-type-questions">

						<form action="/new-account/step-three-continued.php" method="post">

							<fieldset>

								<legend class="">Genetic Disposition</legend>

								<ol>

									<li>

										<label for="">What is the color of your eyes?</label>

										<select>

											<option>Option One</option>
											<option>Option Two</option>
											<option>Option Three</option>

										</select>

									</li>

									<li>

										<label for="">What is the natural color of your hair?</label>

										<select>

											<option>Option One</option>
											<option>Option Two</option>
											<option>Option Three</option>

										</select>

									</li>

									<li>

										<label for="">What is the natural color of your skin? (Non-exposed areas)</label>

										<select>

											<option>Option One</option>
											<option>Option Two</option>
											<option>Option Three</option>

										</select>

									</li>

									<li>

										<label for="">Do you have freckles on unexposed areas?</label>

										<select>

											<option>Option One</option>
											<option>Option Two</option>
											<option>Option Three</option>

										</select>

									</li>

								</ol>

							</fieldset>

							<fieldset>

								<legend>Reaction to Sun Exposure</legend>

								<ol>

									<li>

										<label for="">What happens when you stay in the sun too long?</label>

										<select>

											<option>Option One</option>
											<option>Option Two</option>
											<option>Option Three</option>

										</select>

									</li>

									<li>

										<label for="">To what degree do you turn brown?</label>

										<select>

											<option>Option One</option>
											<option>Option Two</option>
											<option>Option Three</option>

										</select>

									</li>

									<li>

										<label for="">Do you turn brown within several hours after sun exposure?</label>

										<select>

											<option>Option One</option>
											<option>Option Two</option>
											<option>Option Three</option>

										</select>

									</li>

									<li>

										<label for="">How does your face react to the sun?</label>

										<select>

											<option>Option One</option>
											<option>Option Two</option>
											<option>Option Three</option>

										</select>

									</li>

								</ol>

							</fieldset>

							<fieldset>

								<legend>Tanning Habits</legend>

								<ol>

									<li>

										<label for="">When were you last exposed to sun (artificial sunlamp or tanning cream)?</label>

										<select>

											<option>Option One</option>
											<option>Option Two</option>
											<option>Option Three</option>

										</select>

									</li>

									<li>

										<label for="">Did you expose the area to be treated to the sun?</label>

										<select>

											<option>Option One</option>
											<option>Option Two</option>
											<option>Option Three</option>

										</select>

									</li>

								</ol>

							</fieldset>

							<button class="k-button">Continue</button>

						</form>

					</div>

				</div>

			</div>

		</div>

		<div id="page-shim"></div>

	</div>

<?php include ($_SERVER['DOCUMENT_ROOT']."/a/inc/footer.php"); ?>