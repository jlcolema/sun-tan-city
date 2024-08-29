<?php include ($_SERVER['DOCUMENT_ROOT']."/a/inc/head.php"); ?>

<body id="dashboard" class="check-in step-four signed-in">

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

					<p>Looking for the ultimate salon experience? Upgrade your package with any of the following options.</p>

					<form action="/dashboard/selection-overview.php">

						<div class="dollar-deals">

							<div class="group">

								<div class="dollar-deal">

									<div class="k-block">

										<div class="title">Sunless Upgrade Dollar Deal</div>

										<fieldset>

											<label for="sunless-best">

												<input type="radio" name="sunless-upgrade-deal" id="sunless-best" />

												<em>$110.00</em> <span class="upper">for</span> $100 Sunless + $100 Free Sunless

											</label>

											<label for="sunless-better">

												<input type="radio" name="sunless-upgrade-deal" id="sunless-better" />

												<em>$55.00</em> <span class="upper">for</span> $50 Sunless + $50 Free Sunless

											</label>

										</fieldset>

									</div>

								</div>

								<div class="dollar-deal">

									<div class="k-block">

										<div class="title">Sunbed Upgrade Dollar Deals</div>

										<fieldset>

											<label for="sunbed-best">

												<input type="radio" name="sunbed-upgrade-deal" id="sunbed-best" />

												<em>$110.00</em> <span class="upper">for</span> $100 Sun Bed + $100 Free Sun Bed

											</label>

											<label for="sunbed-better">

												<input type="radio" name="sunbed-upgrade-deal" id="sunbed-better" />

												<em>$55.00</em> <span class="upper">for</span> $50 Sun Bed + $50 Free Sun Bed

											</label>

										</fieldset>

									</div>

								</div>

							</div>

							<div class="dollar-deal-checkboxes">

								<ol>

									<li>

										<label for="apply-to">

											<input type="checkbox" id="apply-to" data-bind="" />

											Apply selected Dollar Deals to this visit&rsquo;s upgrade

										</label>

									</li>

									<li>

										<label for="no-thanks">

											<input type="checkbox" id="no-thanks" data-bind="" />

											No thanks. I just want to purchase a one time upgrade

										</label>

									</li>

								</ol>

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