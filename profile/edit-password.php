<?php include ($_SERVER['DOCUMENT_ROOT']."/a/inc/head.php"); ?>

<body id="profile" class="edit-password signed-in">

	<div id="page">

		<?php include ($_SERVER['DOCUMENT_ROOT']."/a/inc/header.php"); ?>

		<?php include ($_SERVER['DOCUMENT_ROOT']."/a/inc/nav.php"); ?>

		<div id="section" class="title-only">

			<div class="wrap">

				<div class="section">

					<h1>Edit Password</h1>

				</div>

			</div>

		</div>

		<div id="content">

			<div class="wrap">

				<div id="main" role="main">

					<div class="edit-password-form">

						<form action="/profile/">

							<div class="group">

								<div class="subgroup">

									<ol>

										<li>

											<label for="current-password">Password</label>

											<input id="current-password" type="password" class="k-textbox" />

										</li>

										<li>

											<label for="new-password">New Password</label>

											<input id="new-password" type="password" class="k-textbox" />

										</li>

										<li>

											<label for="confirm-new-password">Confirm Password</label>

											<input id="confirm-new-password" type="password" class="k-textbox" />

										</li>

									</ol>

								</div>

								<div class="subgroup">

									<ol>

										<li>

											<label for="security-question">Security Question</label>

											<select>

												<option>-- Choose --</option>
												<option>Option One</option>
												<option>Option Two</option>
												<option>Option Three</option>

											</select>

										</li>

										<li>

											<label for="security-question-answer">Security Question Answer</label>

											<input id="security-question-answer" type="text" class="k-textbox" />

										</li>

									</ol>

									<button class="k-button">Update Info</button>

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