<?php include ($_SERVER['DOCUMENT_ROOT']."/a/inc/head.php"); ?>

<body id="profile" class="index signed-in">

	<div id="page">

		<?php include ($_SERVER['DOCUMENT_ROOT']."/a/inc/header.php"); ?>

		<?php include ($_SERVER['DOCUMENT_ROOT']."/a/inc/nav.php"); ?>

		<div id="section" class="title-only">

			<div class="wrap">

				<div class="section">

					<h1>My Profile</h1>

				</div>

			</div>

		</div>

		<div id="content">

			<div class="wrap">

				<div id="main" role="main">

					<div class="account-information">

						<form class="account-information">

							<h2 class="title">Account Information</h2>

							<fieldset class="">

								<div class="email">

									<b>Email:</b> <a href="mailto:">aodonnell@stc.com</a>

								</div>

								<div class="subgroup">

									<ol>

										<li><b>Name:</b> Alice O&rsquo;donnell</li>

										<li><b>Date of Birth:</b> 1/14/2013</li>

										<li><b>Gender:</b> Female</li>

									</ol>

								</div>

								<div class="subgroup">

									<ol>

										<li><b>Cell Phone Number:</b> 913-744-8044</li>

										<li><b>Home Phone Number:</b> 913-744-8044</li>

										<li>

											<b>Address:</b>
											<span>55 Monument Circle,</span>
											<span>Indianapolis, IN 46260</span>

										</li>

									</ol>

								</div>

							</fieldset>

							<fieldset class="">

								<legend>I want to receive promotional offerings and messages from Sun Tan City via the following means:</legend>

								<div class="radio-group">

									<label for="via-email">

										<input type="radio" name="receive-promotional-offerings-and-messages" id="via-email" />

										via Email

									</label>

									<label for="via-text-message">

										<input type="radio" name="receive-promotional-offerings-and-messages" id="via-text-message" />

										via Text Message *

									</label>

									<label for="do-not-send">

										<input type="radio" name="receive-promotional-offerings-and-messages" id="do-not-send" />

										Do not send me anything

									</label>

								</div>

								<p>

									<small>* <a href="#">Terms and Conditions</a>: By providing your email address, you are opting in to receive email messages from us. By providing your mobile number, you are opting in to receive text messages from us. Message and data rates may apply. Text HELP for&hellip; help. Text STOP to cancel.</small>

								</p>

							</fieldset>

							<div>

								<a href="/profile/edit-password.php" class="k-button go-to">Edit My Password <span class="k-icon">&rarr;</span></a>

							</div>

							<div>

								<a href="/profile/edit-profile-information.php" class="k-button go-to no-background gray">Edit My Profile Info <span class="k-icon">&rarr;</span></a>

							</div>

						</form>

					</div>

					<div class="billing-information">

						<h2 class="title">Billing Information</h2>

						<p>We offer the option to utilize two payment accounts. One account will be used for any monthly membership fees. The other will be used for the individual purchase of products, packages, and upgrade dollars.</p>

						<p>You can use the same card for both, or a different card for each. This is just one more way we make your My Sun Tan City account more flexible for you.</p>

						<div class="group">

							<div class="monthly-billing-account">

								<div class="k-block">

									<h3 class="title">Monthly Billing Account</h3>

									<div class="group">

										<div class="card">

											<ul>

												<li><b>EFT credit card saved:</b> XXXXXXX44</li>
												<li><b>Monthly draw amount:</b> $19.99 + Taxes</li>

											</ul>

											<a href="/profile/edit-billing-information.php" class="k-button go-to no-background gray">Edit Card Info <span class="k-icon">&rarr;</span></a>

										</div>

										<div class="ach">

											<ul>

												<li><b>ACH checking account saved:</b> No active account</li>
												<li><b>Monthly draw amount:</b> $0.00</li>

											</ul>

											<a href="/profile/edit-billing-information.php" class="k-button go-to no-background gray">Edit Account Info <span class="k-icon">&rarr;</span></a>

										</div>

									</div>

								</div>

							</div>

							<div class="preferred-quick-pay">

								<div class="k-block">

									<h3 class="title">Preferred Quick Pay</h3>

									<div class="card">

										<div class="">

											<div>

												<b>Credit card saved:</b> XXXXXXX44

											</div>

										</div>

										<a href="/profile/edit-billing-information.php" class="k-button go-to no-background gray">Edit Credit Card Info <span class="k-icon">&rarr;</span></a>

									</div>

								</div>

							</div>

						</div>

					</div>

				</div>

			</div>

		</div>

		<div id="page-shim"></div>

	</div>

<?php include ($_SERVER['DOCUMENT_ROOT']."/a/inc/footer.php"); ?>