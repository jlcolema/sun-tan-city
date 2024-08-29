<?php include ($_SERVER['DOCUMENT_ROOT']."/a/inc/head.php"); ?>

<body id="privacy" class="signed-out">

	<div id="page">

		<?php include ($_SERVER['DOCUMENT_ROOT']."/a/inc/header.php"); ?>

		<div id="section">

			<div class="wrap">

				<div class="section">

					<h1>Hello! It&rsquo;s Good to See You.</h1>

					<p>Welcome to My Sun Tan City. Please sign in or create an account so you can view wait times, check-in early, purchase packages, memberships, and more.</p>

					<div class="now-you-can">

						<ul>

							<li class="check-in">Mobile Check-In</li>

							<li class="wait-times">View Wait Times</li>

							<li class="purchase-services">Purchase Services</li>

						</ul>

					</div>

				</div>

			</div>

		</div>

		<div id="content">

			<div class="wrap">

				<div id="main" role="main">

					<!-- Members Only -->

					<div id="members-only" class="">

						<h2 class="bold">Members Only</h2>

						<form action="/dashboard/">

							<ol>

								<li>

									<input type="text" class="k-textbox" placeholder="Email" />

								</li>

								<li>

									<input type="password" class="k-textbox" placeholder="Password" />

								</li>

							</ol>

							<button class="k-button">Sign In</button>

						</form>

						<a href="/">Forgot Password?</a>

					</div>

					<div class="">

						<!-- Create a New Account -->

						<div class="k-block cta create-new-account pink">

							<h3 class="title h2 bold white">Create New Account</h3>

							<a href="/new-account/" class="k-button no-background white go-to line">Start Now <span class="k-icon">&rarr;</span></a>

						</div>

					</div>

				</div>

			</div>

		</div>

		<div id="page-shim"></div>

	</div>

<?php include ($_SERVER['DOCUMENT_ROOT']."/a/inc/footer.php"); ?>