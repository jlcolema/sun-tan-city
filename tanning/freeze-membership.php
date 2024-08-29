<?php include ($_SERVER['DOCUMENT_ROOT']."/a/inc/head.php"); ?>

<body id="tanning" class="freeze-membership signed-in">

	<div id="page">

		<?php include ($_SERVER['DOCUMENT_ROOT']."/a/inc/header.php"); ?>

		<?php include ($_SERVER['DOCUMENT_ROOT']."/a/inc/nav.php"); ?>

		<div id="section">

			<div class="wrap">

				<div class="section">

					<h1>My Monthly Membership &ndash; Freeze Membership</h1>

				</div>

			</div>

		</div>

		<div id="content">

			<div class="wrap">

				<div id="main" role="main">

					<p>Freezing your account allows you to pause your membership.</p>

					<p>A $5 a month courtesy charge, will ensure that you pay no cost to rejoin, you lock in your current membership rate and the $5 a month courtesy charge is applied to your Sun Tan City account as a credit to purchase tanning services and products at any one of our convenient locations. How sweet is that?</p>

					<div class="freeze-agreement">

						<form action="">

							<h2 class="title">Freeze Agreement</h2>

							<fieldset>

								<div class="effective-date">

									<div class="label">Free Effective Date</div>

									<div class="detail">00/00/0000</div>

								</div>

								<div class="disclaimer">

									<a href="#">Free Usage Disclaimer</a>

								</div>

								<p>You have chosen to freeze your account for $5/month and restart whenever you like. The $5 monthly charge remains as a credit on your Sun Tan City member account and can be used after unfreezing your membership.</p>

							</fieldset>

							<fieldset>

								<legend>Sign and Confirm</legend>

								<ul>

									<li>

										<label for="reason">Reason for Freezing</label>

										<select id="reason">

						                	<option>Freeze Explanation</option>
											<option>Freeze Explanation One</option>
											<option>Freeze Explanation Two</option>
											<option>Freeze Explanation Three</option>

										</select>

									</li>

									<li>

										<label for="name">Name</label>

										<input id="name" type="text" class="k-textbox" />

									</li>

									<li>

										<fieldset class="d-m-y">

											<select id="day" class="day">

				                				<option>Day</option>
												<option>1</option>
												<option>2</option>
												<option>3</option>

											</select>

											<select id="month" class="month">

				                				<option>Month</option>
												<option>Jan</option>
												<option>Feb</option>
												<option>Mar</option>

											</select>

											<select id="year" class="year">

				                				<option>Year</option>
												<option>2000</option>
												<option>1999</option>
												<option>1998</option>

											</select>

										</fieldset>

									</li>

								</ul>

							</fieldset>

							<button class="k-button">Freeze Membership</button>

							<button class="k-button cancel">Cancel</button>

						</form>

					</div>

				</div>

			</div>

		</div>

		<div id="page-shim"></div>

	</div>

<?php include ($_SERVER['DOCUMENT_ROOT']."/a/inc/footer.php"); ?>