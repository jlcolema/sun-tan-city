<?php include ($_SERVER['DOCUMENT_ROOT']."/a/inc/head.php"); ?>

<body id="tanning" class="purchase-packages signed-in">

	<div id="page">

		<?php include ($_SERVER['DOCUMENT_ROOT']."/a/inc/header.php"); ?>

		<?php include ($_SERVER['DOCUMENT_ROOT']."/a/inc/nav.php"); ?>

		<div id="section" class="title-only">

			<div class="wrap">

				<div class="section">

					<h1>Purchase Packages</h1>

				</div>

			</div>

		</div>

		<div id="content">

			<div class="wrap">

				<div id="main" role="main">

					<a href="/tanning/" class="k-button back-to no-background gray"><span class="k-icon">&larr;</span> Back to My Tanning</a>

					<form action="/tanning/purchase-overview.php">

						<p>If you have a package but you would like to see other tanning options available, check out the packages below. If we sent you a special offer code, enter it here to receive your exclusive options.</p>

						<div class="special-offer-code">

							<label for="code">Special Offer Code</label>

							<span class="k-textbox k-space-right">

								<input id="code" type="text" />

								<a href="#" class="k-icon k-i-go-to">&nbsp;</a>

							</span>

						</div>

					</form>

					<div class="available-packages">

						<form action="/tanning/purchase-overview.php">

							<div class="filter">

								<h2 class="title">Available Packages</h2>

								<div class="filter-options">

									<select>

					                	<option>Bed Level</option>
										<option>Packages</option>
										<option>Pre-Paid Memberships</option>
										<option>Upgrade Dollars</option>

									</select>

								</div>

							</div>

							<div class="list-of-available-packages">

								<div class="k-block">

									<h3 class="title">Package Name</h3>

									<div class="group">

										<div class="bed-type">

											<h4 class="label">Bed Type</h4>

											<div class="detail">Multi-level bed</div>

										</div>

										<div class="includes">

											<h4 class="label">Includes:</h4>

											<ul class="detail">

												<li>4 Fast bed visits</li>
												<li>2 instant bed visits</li>
												<li>1 Sunless bed visit</li>

											</ul>

										</div>

										<div class="purchase-price">

											<h4 class="label">Purchase Price</h4>

											<div class="">$14.99 + Applicable Taxes</div>

										</div>

										<div class="purchase">

											<button class="k-button">Purchase</button>

										</div>

									</div>

								</div>

								<div class="k-block">

									<h3 class="title">Package Name</h3>

									<div class="group">

										<div class="bed-type">

											<h4 class="label">Bed Type</h4>

											<div class="detail">Multi-level bed</div>

										</div>

										<div class="includes">

											<h4 class="label">Includes:</h4>

											<ul class="detail">

												<li>4 Fast bed visits</li>
												<li>2 instant bed visits</li>
												<li>1 Sunless bed visit</li>

											</ul>

										</div>

										<div class="purchase-price">

											<h4 class="label">Purchase Price</h4>

											<div class="">$14.99 + Applicable Taxes</div>

										</div>

										<div class="purchase">

											<button class="k-button">Purchase</button>

										</div>

									</div>

								</div>

								<div class="k-block">

									<h3 class="title">Package Name</h3>

									<div class="group">

										<div class="bed-type">

											<h4 class="label">Bed Type</h4>

											<div class="detail">Multi-level bed</div>

										</div>

										<div class="includes">

											<h4 class="label">Includes:</h4>

											<ul class="detail">

												<li>4 Fast bed visits</li>
												<li>2 instant bed visits</li>
												<li>1 Sunless bed visit</li>

											</ul>

										</div>

										<div class="purchase-price">

											<h4 class="label">Purchase Price</h4>

											<div class="">$14.99 + Applicable Taxes</div>

										</div>

										<div class="purchase">

											<button class="k-button">Purchase</button>

										</div>

									</div>

								</div>

							</div>

							<p>

								<small><span class="upper">Disclaimer:</span> All packages expire two years after purchase date.</small>

							</p>

						</form>

					</div>

				</div>

			</div>

		</div>

		<div id="page-shim"></div>

	</div>

<?php include ($_SERVER['DOCUMENT_ROOT']."/a/inc/footer.php"); ?>