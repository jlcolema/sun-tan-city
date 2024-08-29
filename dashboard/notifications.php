<?php include ($_SERVER['DOCUMENT_ROOT']."/a/inc/head.php"); ?>

<body id="dashboard" class="notifications signed-in">

	<div id="page">

		<?php include ($_SERVER['DOCUMENT_ROOT']."/a/inc/header.php"); ?>

		<?php include ($_SERVER['DOCUMENT_ROOT']."/a/inc/nav.php"); ?>

		<div id="section" class="title-only">

			<div class="wrap">

				<div class="section">

					<h1>Notifications</h1>

				</div>

			</div>

		</div>

		<div id="content">

			<div class="wrap">

				<div id="main" role="main">

					<a href="/dashboard/" class="k-button back-to no-background gray"><span class="k-icon">&larr;</span> Back To Dashboard</a>

					<div class="notifications-list">

						<ol>

							<li>

								<time datetime="2013-12-03T20:00+00:00">12/03/2013</time>

								<div class="details">

									<h2 class="title"><span class="type">Reminder!</span> Update credit card</h2>

								</div>

							</li>

							<li>

								<time datetime="2013-05-13T20:00+00:00">05/13/2013</time>

								<div class="details">

									<h2 class="title">You have 5 tans left</h2>

								</div>

							</li>

							<li>

								<time datetime="2013-09-14T20:00+00:00">09/14/2013</time>

								<div class="details">

									<h2 class="title">You have 4 tans left</h2>

									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

								</div>

							</li>

							<li>

								<time datetime="2013-05-13T20:00+00:00">05/13/2013</time>

								<div class="details">

									<h2 class="title">You have 5 tans left</h2>

								</div>

							</li>

						</ol>

					</div>

				</div>

			</div>

		</div>

		<div id="page-shim"></div>

	</div>

<?php include ($_SERVER['DOCUMENT_ROOT']."/a/inc/footer.php"); ?>