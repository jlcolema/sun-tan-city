<?php include ($_SERVER['DOCUMENT_ROOT']."/a/inc/head.php"); ?>

<body id="new-account" class="step-three continued signed-out">

	<div id="page">

		<?php include ($_SERVER['DOCUMENT_ROOT']."/a/inc/header.php"); ?>

		<?php include ($_SERVER['DOCUMENT_ROOT']."/a/inc/nav.php"); ?>

		<div id="section">

			<div class="wrap">

				<div class="section">

					<h1>Step 3 &ndash; Continue <span>The Results</span></h1>

					<p>Thanks for completing the skin type assessment.</p>

				</div>

			</div>

		</div>

		<div id="content">

			<div class="wrap">

				<div id="main" role="main">

					<h2 class="section-title border-bottom">My Skin Type</h2>

					<!-- Skin Type Indicator -->

					<div class="skin-type-indicator">

						<div class="type">

							Type 1

						</div>

						<div class="description">

							<p>Your skin is best suited for Sunless tanning. We have several sunless options that will give you a natural glow.</p>

						</div>

					</div>

					<div class="skin-type-table">

						<div class="panelbar">

							<div class="inner-wrap">

								<span class="k-link">View Skin Type Chart</span>

								<div class="">

									<table>

										<thead>

											<tr>

												<th>Score</th>
												<th>Skin Type</th>
												<th>Skin Behavior Estimate</th>

											</tr>

										</thead>

										<tbody>

											<tr>

												<td>0-7</td>
												<td>Type I</td>
												<td>Highly sensitive, always burns, never tans</td>

											</tr>

											<tr>

												<td>8-16</td>
												<td>Type II</td>
												<td>Very sun sensitive, burns easily, tans minimally</td>

											</tr>

											<tr>

												<td>17-25</td>
												<td>Type III</td>
												<td>Sun sensitive skin, sometimes burns, slowly tans to light brown</td>

											</tr>

											<tr>

												<td>25-30</td>
												<td>Type IV</td>
												<td>Minimally sun sensitive, burns minimally, always tans to moderate brown</td>

											</tr>

											<tr>

												<td>30+</td>
												<td>Type V</td>
												<td>Sun insensitive skin, rarely burns, tans well</td>

											</tr>

											<tr>

												<td></td>
												<td>Type VI</td>
												<td>Sun insensitive skin, never burns, deeply pigmented</td>

											</tr>

										</tbody>

									</table>

								</div>

							</div>

						</div>

					</div>

					<form action="/new-account/step-four.php" method="post">

						<p>All clients will be required to sign the attached new client waiver and release form before using our facilities. Please check the box indicating that you have read and understand the attached.</p>

						<div class="terms-and-conditions">

							<div class="content">

								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

							</div>

							<label for="agree">

								<input type="checkbox" id="agree" data-bind="" />

								I accept the Terms and Conditions

							</label>

						</div>

						<button class="k-button">Continue</button>

					</form>

				</div>

			</div>

		</div>

		<div id="page-shim"></div>

	</div>

<?php include ($_SERVER['DOCUMENT_ROOT']."/a/inc/footer.php"); ?>