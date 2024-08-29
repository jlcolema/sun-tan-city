<?php include ($_SERVER['DOCUMENT_ROOT']."/a/inc/head.php"); ?>

<body id="profile" class="edit-profile-information signed-in">

	<div id="page">

		<?php include ($_SERVER['DOCUMENT_ROOT']."/a/inc/header.php"); ?>

		<?php include ($_SERVER['DOCUMENT_ROOT']."/a/inc/nav.php"); ?>

		<div id="section" class="title-only">

			<div class="wrap">

				<div class="section">

					<h1>Edit Profile Information</h1>

				</div>

			</div>

		</div>

		<div id="content">

			<div class="wrap">

				<div id="main" role="main">

					<div class="profile-form">

						<form action="/profile/" method="post">

							<div class="group">

								<div class="subgroup">

									<ol>

										<li>

											<label for="first-name-two">First Name</label>

											<input id="first-name-two" type="text" class="k-textbox" />

										</li>

										<li>

											<label for="last-name-two">Last Name</label>

											<input id="last-name-two" type="text" class="k-textbox" />

										</li>

										<li>

											<label for="birthday-two">Birthday</label>

											<fieldset class="d-m-y">

												<select id="day-two" class="day">

					                				<option>Day</option>
													<option>1</option>
													<option>2</option>
													<option>3</option>

												</select>

												<select id="month-two" class="month">

					                				<option>Month</option>
													<option>Jan</option>
													<option>Feb</option>
													<option>Mar</option>

												</select>

												<select id="year-two" class="year">

					                				<option>Year</option>
													<option>2000</option>
													<option>1999</option>
													<option>1998</option>

												</select>

											</fieldset>

										</li>

										<li>

											<label for="gender">Gender</label>

											<select id="gender" class="gender">

				                				<option>-- Choose --</option>
												<option>Female</option>
												<option>Male</option>

											</select>

										</li>

										<li>

											<label for="email">Email</label>

											<input id="email" type="text" class="k-textbox" />

										</li>

										<li>

											<label for="cell-phone">Mobile Phone (ex. 555-555-5555)</label>

											<input id="cell-phone" type="text" class="k-textbox" />

										</li>

										<li>

											<label for="home-phone">Home Phone (ex. 555-555-5555)</label>

											<input id="home-phone" type="text" class="k-textbox" />

										</li>

									</ol>

								</div>

								<div class="subgroup">

									<ol>

										<li>

											<label for="address">Address</label>

											<input id="address" type="text" class="k-textbox" />

										</li>

										<li>

											<label for="address-two">Address 2</label>

											<input id="address-two" type="text" class="k-textbox" />

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

									<button class="k-button">Save</button>

									<button class="k-button cancel">Cancel</button>

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
