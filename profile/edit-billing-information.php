<?php include ($_SERVER['DOCUMENT_ROOT']."/a/inc/head.php"); ?>

<body id="profile" class="edit-billing-information signed-in">

	<div id="page">

		<?php include ($_SERVER['DOCUMENT_ROOT']."/a/inc/header.php"); ?>

		<?php include ($_SERVER['DOCUMENT_ROOT']."/a/inc/nav.php"); ?>

		<div id="section" class="title-only">

			<div class="wrap">

				<div class="section">

					<h1>Edit Billing Information</h1>

				</div>

			</div>

		</div>

		<div id="content">

			<div class="wrap">

				<div id="main" role="main">

					<div class="billing-information-form">

						<form action="/profile/" method="post">

							<div class="group">

								<div class="subgroup">

									<ol>

										<li>

											<label for="name">Card Holder&rsquo;s Name</label>

											<input id="name" type="text" class="k-textbox" />

										</li>

										<li>

											<label for="card-number">Credit Card Number</label>

											<input id="card-number" type="text" class="k-textbox" />

										</li>

										<li>

											<label for="card-type">Credit Card Type</label>

											<select id="card-type">

							                	<option>-- Choose --</option>
							                	<option>Option One</option>
							                	<option>Option Two</option>
							                	<option>Option Three</option>

											</select>

										</li>

										<li>

											<label for="card-expires">Card Expiration Date</label>

											<fieldset class="m-y">

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

									</ol>

								</div>

								<div class="subgroup">

									<ol>

										<li>

											<label class="checkbox" for="use-account-address">

												<input type="checkbox" id="use-account-address" data-bind="" />

												Use STC Online account address

											</label>

										</li>

										<li>

											<label for="billing-address">Billing Address</label>

											<input id="billing-address" type="text" class="k-textbox" />

										</li>

										<li>

											<label for="billing-address-two">Billing Address 2</label>

											<input id="billing-address-two" type="text" class="k-textbox" />

										</li>

										<li>

											<label for="city">City</label>

											<input id="city" type="text" class="k-textbox" />

										</li>

										<li>

											<fieldset class="state-zip">

												<div class="states">

													<label for="state">State</label>

													<select id="state" class="state">

						                				<option>-- Choose --</option>
														<option>Alabama</option>
														<option>Alaska</option>
														<option>Arizona</option>

													</select>

												</div>

												<div class="zipcode">

													<label for="zip">Zip</label>

													<input id="zip" type="text" class="k-textbox" />

												</div>

											</fieldset>

										</li>

									</ol>

								</div>

							</div>

							<div class="group">

								<div class="subgroup">

									<button class="k-button">Update Info</button>

									<button class="k-button cancel">Cancel</button>

								</div>

								<div class="subgroup">

									<p>At Sun Tan City, we value your trust. That&rsquo;s why we keep your information private, and we will never sell any of your information to third parties or use it to solicit for any other business.</p>

									<div class="security-metrics">

										<!-- Security Metrics badge -->

									</div>

								</div>

							</div>

						</form>

					</div>

				</div>

			</div>

		</div>

		<div id="page-shim"></div>

	</div>

<?php include ($_SERVER['DOCUMENT_ROOT']."/a/inc/footer.php"); ?>