<?php include ($_SERVER['DOCUMENT_ROOT']."/a/inc/head.php"); ?>

<body id="tanning" class="confirm-cancellation signed-in">

	<div id="page">

		<?php include ($_SERVER['DOCUMENT_ROOT']."/a/inc/header.php"); ?>

		<?php include ($_SERVER['DOCUMENT_ROOT']."/a/inc/nav.php"); ?>

		<div id="section">

			<div class="wrap">

				<div class="section">

					<h1>Cancel Membership</h1>

				</div>

			</div>

		</div>

		<div id="content">

			<div class="wrap">

				<div id="main" role="main">

					<p>We hate to see you go. To cancel your membership, fill out the fields below. But remember, by canceling your account you&rsquo;ll lose any upgrades, credits, or other benefits you&rsquo;ve acquired.</p>

					<div class="cancel-agreement">

						<form action="">

							<h2 class="title">Cancel Agreement</h2>

							<fieldset>

								<div class="effective-date">

									<div class="label">Cancel Effective Date</div>

									<div class="detail">00/00/0000</div>

								</div>

								<p>You have chosen to cancel your membership effective the end of the month. When rejoining, all standard sign-up charges will apply.</p>

							</fieldset>

							<fieldset>

								<legend>Sign and Confirm</legend>

								<ul>

									<li>

										<label for="reason">Reason for Canceling</label>

										<select id="reason">

						                	<option>Cancel Explanation</option>
											<option>Cancel Explanation One</option>
											<option>Cancel Explanation Two</option>
											<option>Cancel Explanation Three</option>

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

							<button class="k-button">Cancel Membership</button>

							<button class="k-button cancel">Cancel</button>

						</form>

					</div>

				</div>

			</div>

		</div>

		<div id="page-shim"></div>

	</div>

<?php include ($_SERVER['DOCUMENT_ROOT']."/a/inc/footer.php"); ?>