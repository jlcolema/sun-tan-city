<?php include ($_SERVER['DOCUMENT_ROOT']."/a/inc/head.php"); ?>

<body id="dashboard" class="index signed-in">

	<div id="page">

		<?php include ($_SERVER['DOCUMENT_ROOT']."/a/inc/header.php"); ?>

		<?php include ($_SERVER['DOCUMENT_ROOT']."/a/inc/nav.php"); ?>

		<div id="section">

			<div class="wrap">

				<div class="section">

					<div class="group">

						<div class="hello">

							<h1 class="script">Hello Alice!</h1>

							<a href="/profile/" class="k-button go-to no-background white">View My Membership <span class="k-icon">&rarr;</span></a>

						</div>

						<div class="message">

							<p>Welcome to My Sun Tan City! I hope that you find getting that awesome sun-kissed glow is even easier. Get your tan on!</p>

							<div class="signature">

								<em class="xoxo">xoxo</em> Vicki

							</div>

						</div>

					</div>

				</div>

			</div>

		</div>

		<div id="content">

			<div class="wrap">

				<!-- System Notifications -->

				<div id="system-notifications">

					<div class="group">

						<div class="description">

							<p>You are currently checked in at Salon Name.</p>

						</div>

						<a href="#" class="k-button">Cancel</a>

					</div>

				</div>

				<div id="main" role="main">

					<h2>Salon Check-In</h2>

					<div class="group">

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

							<a href="/dashboard/nearby-salons.php" class="k-button go-to no-background gray">View Nearby Salons <span class="k-icon">&rarr;</span></a>

						</div>

						<form>

							<div class="current-wait-times">

								<h3 class="title">Current Wait Times <span class="note">*</span></h3>

								<p>Select your desired bed type</p>

								<ol>

									<li>

										<select>

											<option>Sunless</option>
											<option>Option One</option>
											<option>Option Two</option>
											<option>Option Three</option>

										</select>

									</li>

									<li>

										<select>

											<option>Instant</option>
											<option>Option One</option>
											<option>Option Two</option>
											<option>Option Three</option>

										</select>

									</li>

									<li>

										<select>

											<option>Fastest</option>
											<option>Option One</option>
											<option>Option Two</option>
											<option>Option Three</option>

										</select>

									</li>

									<li>

										<select>

											<option>Faster</option>
											<option>Option One</option>
											<option>Option Two</option>
											<option>Option Three</option>

										</select>

									</li>

									<li>

										<select>

											<option>Fast</option>
											<option>Option One</option>
											<option>Option Two</option>
											<option>Option Three</option>

										</select>

									</li>

								</ol>

								<label class="checkbox" for="agree">

									<input type="checkbox" id="agree" data-bind="" />

									I want to Double Dip <a class="more-info" href="#">?</a>

								</label>

								<button class="k-button open-popover">Check-In Now</button>

							</div>

						</form>

					</div>

					<div class="group">

						<?php include ($_SERVER['DOCUMENT_ROOT']."/a/inc/recent-activity.php"); ?>

						<?php include ($_SERVER['DOCUMENT_ROOT']."/a/inc/find-a-salon.php"); ?>

					</div>

					<p>

						<small>* Wait times are approximate and estimates only. Actual wait times will vary depending on level of activity and number of check-ins at the salon.</small>

					</p>

					<!-- Popover -->

					<div class="window popover">

						<div class="title">Next Step</div>

						<form action="/dashboard/check-in.php">

							<p>Great! You have selected your sunbed now you must select your sunless option.</p>

							<button class="k-button">Continue</button>

							<button class="k-button cancel simplemodal-close">Cancel</button>

						</form>

					</div>

					<!-- Kendo Window -->

					<div class="k-content">

						<div id="window">

							<form action="/dashboard/check-in.php">

								<p>Great! You have selected your sunbed now you must select your sunless option.</p>

								<button class="k-button">Continue</button>

								<button class="k-button cancel">Cancel</button>

							</form>

						</div>

						<p id="undo" class="k-button">Click here to open the window.</p>

					</div>

				</div>

			</div>

		</div>

		<div id="page-shim"></div>

	</div>

<?php include ($_SERVER['DOCUMENT_ROOT']."/a/inc/footer.php"); ?>