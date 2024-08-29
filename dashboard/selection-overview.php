<?php include ($_SERVER['DOCUMENT_ROOT']."/a/inc/head.php"); ?>

<body id="dashboard" class="selection-overview signed-in">

	<div id="page">

		<?php include ($_SERVER['DOCUMENT_ROOT']."/a/inc/header.php"); ?>

		<?php include ($_SERVER['DOCUMENT_ROOT']."/a/inc/nav.php"); ?>

		<div id="section" class="title-only">

			<div class="wrap">

				<div class="section">

					<h1>Selection Overview</h1>

				</div>

			</div>

		</div>

		<div id="content">

			<div class="wrap">

				<div id="main" role="main">

					<p>Please review your information before finishing.</p>

					<form action="/dashboard/payment-method.php">

						<div class="selection-overview-details">

							<h2 class="title">Selection Overview</h2>

							<ul>

								<li>

									<div class="fn n org"><b>Salon Name</b></div>
									<div class="street-address">12908 Westgate</div>
									<span class="locality">Indianapolis</span>,
									<span class="region">IN</span>
									<span class="postal-code">46260</span>

								</li>

								<li>

									<div class=""><b>Double Dip?</b></div>
									<div class="">YES</div>

								</li>

								<li>

									<div class=""><b>Sunless Bed Selection</b></div>
									<div class="">Bed Level</div>
									<div class="">Equipment Type</div>
									<div class="">Wait Time</div>

								</li>

								<li>

									<div class=""><b>Sun Bed Selection</b></div>
									<div class="">Bed Level</div>
									<div class="">Equipment Type</div>
									<div class="">Wait Time</div>

								</li>

							</ul>

						</div>

						<div class="group">

							<div class="selection-overview-totals">

								<div class="selected-check-in">

									<span class="upper">Check-In Selected:</span> Fasted Prestige 100

								</div>

								<div class="selected-service">

									<div class="title">

										<span class="upper">Service Selected:</span> Club Sun Membership

									</div>

									<div class="">

										<ol class="line-items">

											<li class="">Base Amount <span>$14.99</span></li>
											<li class="">Service Tax <span>$0.00</span></li>
											<li class="">Tan Tax <span>$1.50</span></li>

										</ol>

										<div class="line-items-total">

											Total <span>$16.49</span>

										</div>

									</div>

								</div>

								<div class="purchased-upgrade-dollars">

									<div class="title">

										<span class="upper">Sunbed Upgrade Dollar Purchase</span>

										One time upgrade

									</div>

									<div class="">

										<ol class="line-items">

											<li class="">Base Amount <span>$14.99</span></li>
											<li class="">Service Tax <span>$0.00</span></li>
											<li class="">Tan Tax <span>$1.50</span></li>

										</ol>

										<div class="line-items-total">

											Total <span>$16.49</span>

										</div>

									</div>

								</div>

								<div class="due-today">

									Total Due Today <span>$32.98</span>

								</div>

								<div class="email-opt-out">

									<label class="checkbox" for="email-opt-out">

										<input type="checkbox" id="email-opt-out" data-bind="" />

										Opt-out of email confirmation

									</label>

								</div>

							</div>

							<div class="selection-overview-notes">

								<div class="upgrade-dollars-remaining">

									<div class="upgrade-types">

										<div class="k-block upgrade-type sunless">

											<div class="title">Sunless upgrade dollars</div>

											<div class="money-available">$30.00 Available</div>
											<div class="money-used">$10.00 used for upgrade</div>
											<div class="money-remaining">$20.00 remaining</div>

										</div>

										<div class="k-block upgrade-type sunbed">

											<div class="title">Sunbed Upgrade Dollars</div>

											<div class="money-available">$50.00 Available</div>
											<div class="money-used">$0.00 used for upgrade</div>
											<div class="money-remaining">$50.00 remaining</div>

										</div>

									</div>

								</div>

								<div class="k-block pink">Please see your tanning consultant to establish your tanning plan including your controlled tan time. If you have protective eyewear please bring them with you, otherwise you are required to purchase some. Wait times are approximate.</div>

							</div>

						</div>

						<button class="k-button">Confirm</button>

						<button class="k-button cancel">Cancel</button>

					</form>

				</div>

			</div>

		</div>

		<div id="page-shim"></div>

	</div>

<?php include ($_SERVER['DOCUMENT_ROOT']."/a/inc/footer.php"); ?>