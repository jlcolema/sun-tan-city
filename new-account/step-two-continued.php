<?php include ($_SERVER['DOCUMENT_ROOT']."/a/inc/head.php"); ?>

<body id="new-account" class="step-two continued signed-out">

	<div id="page">

		<?php include ($_SERVER['DOCUMENT_ROOT']."/a/inc/header.php"); ?>

		<?php include ($_SERVER['DOCUMENT_ROOT']."/a/inc/nav.php"); ?>

		<div id="section">

			<div class="wrap">

				<div class="section">

					<h1>Step 2 &ndash; Continue <span>Pick a favorite salon location</span></h1>

				</div>

			</div>

		</div>

		<div id="content">

			<div class="wrap">

				<div id="main" role="main">

					<h2>Suggested Salons</h2>

					<div class="suggested-salons">

						<form action="/new-account/step-three.php" method="post">

							<div class="individual-location vcard">

								<div class="fn n org">Salon Name</div>

								<p class="overview">In the Walmart Supercenter at 86th and Michigan Ave.</p>

								<div class="panelbar">

									<div class="inner-wrap">

										<span class="k-link">More Salon Info</span>

										<div>

											<div class="group">

												<div class="tel-adr">

													<div class="tel"><b>Phone:</b> 913-780-8888</div>

													<div class="adr">

														<div class="street-address">14563 Westgate Rd.</div>

														<span class="locality">Indianapolis</span>,
														<span class="region">IN</span>,
														<span class="postal-code">46260</span>

													</div>

												</div>

												<div class="hours">

													<h3 class="title">Hours</h3>

													<ul>

														<li><span>M-F:</span> 8:00pm-9:00pm</li>
														<li><span>Sat-Sun:</span> 11:00pm-5:00pm</li>

													</ul>

												</div>

											</div>

											<div class="map">

												<iframe>

													Map

												</iframe>

											</div>

										</div>

									</div>

								</div>

								<div class="select">

									<button class="k-button">Select</button>

								</div>

							</div>

							<div class="individual-location vcard">

								<div class="fn n org">Salon Name</div>

								<p class="overview">In the Walmart Supercenter at 86th and Michigan Ave.</p>

								<div class="panelbar">

									<div class="inner-wrap">

										<span class="k-link">More Salon Info</span>

										<div>

											<div class="group">

												<div class="tel-adr">

													<div class="tel"><b>Phone:</b> 913-780-8888</div>

													<div class="adr">

														<div class="street-address">14563 Westgate Rd.</div>

														<span class="locality">Indianapolis</span>,
														<span class="region">IN</span>,
														<span class="postal-code">46260</span>

													</div>

												</div>

												<div class="hours">

													<h3 class="title">Hours</h3>

													<ul>

														<li><span>M-F:</span> 8:00pm-9:00pm</li>
														<li><span>Sat-Sun:</span> 11:00pm-5:00pm</li>

													</ul>

												</div>

											</div>

											<div class="map">

												<iframe>

													Map

												</iframe>

											</div>

										</div>

									</div>

								</div>

								<div class="select">

									<button class="k-button">Select</button>

								</div>

							</div>

							<div class="individual-location vcard">

								<div class="fn n org">Salon Name</div>

								<p class="overview">In the Walmart Supercenter at 86th and Michigan Ave.</p>

								<div class="panelbar">

									<div class="inner-wrap">

										<span class="k-link">More Salon Info</span>

										<div>

											<div class="group">

												<div class="tel-adr">

													<div class="tel"><b>Phone:</b> 913-780-8888</div>

													<div class="adr">

														<div class="street-address">14563 Westgate Rd.</div>

														<span class="locality">Indianapolis</span>,
														<span class="region">IN</span>,
														<span class="postal-code">46260</span>

													</div>

												</div>

												<div class="hours">

													<h3 class="title">Hours</h3>

													<ul>

														<li><span>M-F:</span> 8:00pm-9:00pm</li>
														<li><span>Sat-Sun:</span> 11:00pm-5:00pm</li>

													</ul>

												</div>

											</div>

											<div class="map">

												<iframe>

													Map

												</iframe>

											</div>

										</div>

									</div>

								</div>

								<div class="select">

									<button class="k-button">Select</button>

								</div>

							</div>

						</form>

					</div>

					<div class="salon-search">

						<p>Didn&rsquo;t find the salon you were looking for? Search by city and state or zip code.</p>

						<?php include ($_SERVER['DOCUMENT_ROOT']."/a/inc/salon-search.php"); ?>

					</div>

				</div>

			</div>

		</div>

		<div id="page-shim"></div>

	</div>

<?php include ($_SERVER['DOCUMENT_ROOT']."/a/inc/footer.php"); ?>