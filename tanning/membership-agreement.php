<?php include ($_SERVER['DOCUMENT_ROOT']."/a/inc/head.php"); ?>

<body id="tanning" class="membership-agreement signed-in">

	<div id="page">

		<?php include ($_SERVER['DOCUMENT_ROOT']."/a/inc/header.php"); ?>

		<?php include ($_SERVER['DOCUMENT_ROOT']."/a/inc/nav.php"); ?>

		<div id="section" class="title-only">

			<div class="wrap">

				<div class="section">

					<h1>Membership Agreement</h1>

				</div>

			</div>

		</div>

		<div id="content">

			<div class="wrap">

				<div id="main" role="main">

					<div class="">

						<form action="/tanning/purchase-confirmation.php">

							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed interdum diam non orci luctus porttitor. Nam varius tincidunt magna at dictum.</p>

							<fieldset class="membership-agreement-overview">

								<div class="group">

									<div class="membership-name">

										<div class="membership-dues">

											<table>

												<thead>

													<tr>

														<th colspan="2">Membership Name</th>

													</tr>

												</thead>

												<tbody>

													<tr>

														<td class="label">Membership Dues</td>
														<td class="amount">$14.99</td>

													</tr>

													<tr>

														<td class="label">Service Tax</td>
														<td class="amount">$0.00</td>

													</tr>

													<tr>

														<td class="label">Tan Tax</td>
														<td class="amount">$1.50</td>

													</tr>

													<tr class="total">

														<td class="label">Total</td>
														<td class="amount">$16.49</td>

													</tr>

												</tbody>

											</table>

											<div class="membership-name-list">

												<div class="new-monthly-cost">

													<div class="label">New Monthly Cost</div>

													<div class="detail">$39.99</div>

												</div>

												<div class="purchase-location">

													<div class="label">Purchase Location</div>

													<div class="detail">

														<div class="street">736 Hanover Place 100F</div>

														<div class="locality">Carmel IN 46260</div>

													</div>

												</div>

												<div class="date-signed">

													<div class="label">Date Signed</div>

													<div class="detail">6/26/2013</div>

												</div>

											</div>

										</div>

									</div>

									<div class="client-information">

										<h2 class="title">Client Information</h2>

										<div class="client-information-list">

											<div class="member-number">

												<div class="label">Member Number</div>

												<div class="detail">0001983108</div>

											</div>

											<div class="member-name">

												<div class="label">Member Name</div>

												<div class="detail">Alice O&rsquo;Donnell</div>

											</div>

											<div class="phone">

												<div class="label">Phone</div>

												<div class="detail">317-915-8693</div>

											</div>

											<div class="credit-card-information">

												<div class="label">Credit Card Information</div>

												<div class="detail">*************111</div>

											</div>

											<div class="billing-address">

												<div class="label">Billing Address</div>

												<div class="detail">

													<div class="street">736 Hanover Place 100F</div>

													<div class="locality">Carmel IN 46260</div>

												</div>

											</div>

											<div class="monthly-draft-date">

												<div class="label">Monthly Draft Date</div>

												<div class="detail">15th of the month</div>

											</div>

										</div>

									</div>

								</div>

							</fieldset>

							<fieldset class="confirm-and-sign">

								<legend>Confirm and Sign</legend>

								<ol>

									<li>

										<label class="checkbox" for="agree">

											<input type="checkbox" id="agree" data-bind="" />

											I accept the <a href="#">Terms and Conditions</a>

										</label>

									</li>

									<li>

										<label for="confirm-name">Confirm Name</label>

										<input id="confirm-name" type="text" class="k-textbox" />

									</li>

									<li>

										<label for="confirm-date">Confirm Date</label>

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

									<li>

										<label for="confirm-email">Confirm Email</label>

										<input id="confirm-email" type="email" class="k-textbox" />

									</li>

								</ol>

							</fieldset>

							<button class="k-button">Sign &amp; Save</button>

							<button class="k-button cancel">Cancel</button>

						</form>

					</div>

				</div>

			</div>

		</div>

		<div id="page-shim"></div>

	</div>

<?php include ($_SERVER['DOCUMENT_ROOT']."/a/inc/footer.php"); ?>