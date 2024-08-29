<?php include ($_SERVER['DOCUMENT_ROOT']."/a/inc/head.php"); ?>

<body id="tanning" class="purchase-overview signed-in">

	<div id="page">

		<?php include ($_SERVER['DOCUMENT_ROOT']."/a/inc/header.php"); ?>

		<?php include ($_SERVER['DOCUMENT_ROOT']."/a/inc/nav.php"); ?>

		<div id="section" class="title-only">

			<div class="wrap">

				<div class="section">

					<h1>Purchase Overview</h1>

				</div>

			</div>

		</div>

		<div id="content">

			<div class="wrap">

				<div id="main" role="main">

					<div class="purchase-overview-form">

						<form action="/tanning/membership-agreement.php">

							<fieldset class="purchase-overview-details">

								<div class="purchase-overview-list">

									<div class="coupon">

										<div class="label">Coupon &ndash; 2013 LSM $14.99 Tour</div>

										<div class="detail">1 visit to each UV level, 1 Sunless visit, Total of 5 visits</div>

									</div>

									<div class="duration">

										<div class="label">Term / Duration</div>

										<div class="detail">1 Session(s)</div>

									</div>

									<div class="expiration">

										<div class="label">Expiration Date</div>

										<div class="detail">7/4/2013</div>

									</div>

								</div>

								<div class="payment-due-today">

									<table>

										<thead>

											<tr>

												<th colspan="2">Payment Due Today</th>

											</tr>

										</thead>

										<tbody>

											<tr>

												<td class="label">Base Amount</td>
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

									<div class="discount-promo-code">

										<label for="code">Discount Promo Code</label>

										<span class="k-textbox k-space-right">

											<input id="code" type="text" />

											<a href="#" class="k-icon k-i-go-to">&nbsp;</a>

										</span>

									</div>

								</div>

							</fieldset>

							<fieldset class="payment-method-details">

								<legend>Payment Method</legend>

								<p>To make a payment, simplfy verify that your credit card information below is correct and click the &ldquo;purchase&rdquo; button below.</p>

								<div class="quick-pay-opt-in">

									<label for="quickpay-using-preferred-payment">

										<input type="checkbox" id="quickpay-using-preferred-payment" data-bind="" />

										I would like to quick pay using my preferred payment method on file.

									</label>

								</div>

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

												<label for="state">State</label>

												<select id="state" class="state">

													<option>-- Choose --</option>
													<option>Alabama</option>
													<option>Alaska</option>
													<option>Arizona</option>

												</select>

											</li>

											<li>

												<label for="zip">Zip</label>

												<input id="zip" type="text" class="k-textbox" />

											</li>

											<li>

												<label class="checkbox" for="save-card">

													<input type="checkbox" id="save-card" data-bind="" />

													Save this card as my preferred quick pay method

												</label>

											</li>

										</ol>

									</div>

								</div>

								<div class="group">

									<div class="subgroup">

										<button class="k-button">Purchase</button>

										<button class="k-button cancel">Cancel</button>

									</div>

									<div class="subgroup">

										<p>At Sun Tan City, we value your trust. That&rsquo;s why we keep your information private, and we will never sell any of your information to third parties or use it to solicit for any other business.</p>

										<div class="security-metrics">


										</div>

									</div>

								</div>

							</fieldset>

						</form>

					</div>

				</div>

			</div>

		</div>

		<div id="page-shim"></div>

	</div>

<?php include ($_SERVER['DOCUMENT_ROOT']."/a/inc/footer.php"); ?>