<?php include ($_SERVER['DOCUMENT_ROOT']."/a/inc/head.php"); ?>

<body id="dashboard" class="check-in step-three signed-in">

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

					<p>The service you have selected for this tanning session requires you to upgrade. Please select the way you would like to do so.</p>

					<form action="/dashboard/check-in-step-four.php">

						<div class="group">

							<div class="upgrade-radio-options">

								<ul>

									<li>

										<fieldset>

											<legend>Sunless Bed <span class="">$10.00 required for upgrade</span></legend>

											<label for="sunless-use-upgrade-dollars">

												<input type="radio" name="sunless-payment-with" id="sunless-use-upgrade-dollars" />

												Use my upgrade dollars

											</label>

											<label for="sunless-use-credit-card">

												<input type="radio" name="sunless-payment-with" id="sunless-use-credit-card" />

												Purchase the upgrade using a credit card

											</label>

										</fieldset>

									</li>

									<li>

										<fieldset>

											<legend>Sunbed <span class="">$20.00 required for upgrade</span></legend>

											<label for="sunbed-use-upgrade-dollars">

												<input type="radio" name="sunbed-payment-with" id="sunbed-use-upgrade-dollars" />

												Use my upgrade dollars

											</label>

											<label for="sunbed-use-credit-card">

												<input type="radio" name="sunbed-payment-with" id="sunbed-use-credit-card" />

												Purchase the upgrade using a credit card

											</label>

										</fieldset>

									</li>

								</ul>

							</div>

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