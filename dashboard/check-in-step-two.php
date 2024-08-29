<?php include ($_SERVER['DOCUMENT_ROOT']."/a/inc/head.php"); ?>

<body id="dashboard" class="check-in step-two signed-in">

	<div id="page">

		<?php include ($_SERVER['DOCUMENT_ROOT']."/a/inc/header.php"); ?>

		<?php include ($_SERVER['DOCUMENT_ROOT']."/a/inc/nav.php"); ?>

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

					<p>You have multiple options to choose from. Please select the one you wish to use. We may also provide you some additional options that may call for you to upgrade in order to use that service.</p>

					<form class="bed-type-options" action="/dashboard/check-in-step-three.php">

						<div class="group">

							<ol>

								<li>

									<label class="orange" for="sunless-services">Your Sunless services available to use</label>

									<select>

										<option>-- Choose --</option>
										<option>Option One</option>
										<option>Option Two</option>
										<option>Option Three</option>

									</select>

								</li>

								<li>

									<label class="orange" for="sunless-services">You SunBed services available to use</label>

									<select>

										<option>-- Choose --</option>
										<option>Option One</option>
										<option>Option Two</option>
										<option>Option Three</option>

									</select>

								</li>

							</ol>

							<div class="upgrade-dollars-purchased">

								<div class="k-block">

									<p>These are the upgrade dollars you have already purchased. They can be put toward bed and package upgrades.</p>

									<div class="upgrade-types">

										<div class="upgrade-type sunless">

											<div class="title">

												Sunless upgrade dollars <a class="more-info" href="#">?</a>

											</div>

											<div class="money-available">$30.00 Available</div>

										</div>

										<div class="upgrade-type sunbed">

											<div class="title">

												Sunbed Upgrade Dollars <a class="more-info" href="#">?</a>

											</div>

											<div class="money-available">$50.00 Available</div>

										</div>

									</div>

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