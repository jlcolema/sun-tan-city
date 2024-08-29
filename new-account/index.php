<?php include ($_SERVER['DOCUMENT_ROOT']."/a/inc/head.php"); ?>

<body id="new-account" class="index signed-out">

	<div id="page">

		<?php include ($_SERVER['DOCUMENT_ROOT']."/a/inc/header.php"); ?>

		<?php include ($_SERVER['DOCUMENT_ROOT']."/a/inc/nav.php"); ?>

		<div id="section">

			<div class="wrap">

				<div class="section">

					<h1>New Account Information</h1>

					<p>This won&rsquo;t take long! In just a few short steps, you&rsquo;ll be on your way. Fill in the information below to get started.</p>

				</div>

			</div>

		</div>

		<div id="content">

			<div class="wrap">

				<div id="main" role="main">

					<div class="already-a-member">

						<div class="k-block">

							<h2 class="title h3 orange">Already a Sun Tan City Member?</h2>

							<form action="">

								<fieldset>

									<p>Type in your Scan Card number located on the back of your Sun Tan City Card. If you don&rsquo;t have your card we can search for your account with your name and birth date.</p>

									<ol>

										<li>

											<label for="bar-code">Scan Card Bar Code</label>

											<input id="bar-code" type="text" class="k-textbox" />

											<figure class="scan-card">

												<img src="/a/img/card.svg" alt="Scan card bar code." />

												<figcaption>

													Your scan card number is located on the back of your Sun Tan City card.

												</figcaption>

											</figure>

										</li>

									</ol>

								</fieldset>

								<fieldset>

									<ol>

										<li>

											<label for="first-name">First Name</label>

											<input id="first-name" type="text" class="k-textbox" />

										</li>

										<li>

											<label for="last-name">Last Name</label>

											<input id="last-name" type="text" class="k-textbox" />

										</li>

										<li>

											<label for="birthday">Birthday</label>

											<fieldset class="d-m-y">



												<select id="day" class="day">

					                				<option>Day</option>
													<option>1</option>
													<option>2</option>
													<option>3</option>
													<option>4</option>
													<option>5</option>
													<option>6</option>
													<option>7</option>
													<option>8</option>
													<option>9</option>
													<option>10</option>
													<option>11</option>
													<option>12</option>
													<option>13</option>
													<option>14</option>
													<option>15</option>
													<option>16</option>
													<option>17</option>
													<option>18</option>
													<option>19</option>
													<option>20</option>
													<option>21</option>
													<option>22</option>
													<option>23</option>
													<option>24</option>
													<option>25</option>
													<option>26</option>
													<option>27</option>
													<option>28</option>
													<option>29</option>
													<option>30</option>
													<option>31</option>

												</select>

												<select id="month" class="month">

					                				<option>Month</option>
													<option>Jan</option>
													<option>Feb</option>
													<option>Mar</option>
													<option>Apr</option>
													<option>May</option>
													<option>Jun</option>
													<option>Jul</option>
													<option>Aug</option>
													<option>Sep</option>
													<option>Oct</option>
													<option>Nov</option>
													<option>Dec</option>


												</select>

												<select id="year" class="year">

					                				<option>Year</option>
													<option>2000</option>
													<option>1999</option>
													<option>1998</option>
													<option>1997</option>
													<option>1996</option>
													<option>1995</option>
													<option>1994</option>
													<option>1993</option>
													<option>1992</option>
													<option>1991</option>
													<option>1990</option>
													<option>1989</option>
													<option>1988</option>

												</select>

											</fieldset>

										</li>

									</ol>

								</fieldset>

								<button class="k-button">Search for Me</button>

							</form>

						</div>

					</div>

					<div class="new-account-information">

						<form action="/new-account/step-one.php">

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

											<label for="confirm-email">Confirm Email</label>

											<input id="confirm-email" type="text" class="k-textbox" />

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

											<label for="cell-phone">Cell Phone (ex. 555-555-5555)</label>

											<input id="cell-phone" type="text" class="k-textbox" />

										</li>

										<li>

											<label for="home-phone">Home Phone (ex. 555-555-5555)</label>

											<input id="home-phone" type="text" class="k-textbox" />

										</li>

										<li>

											<label for="hear-about-us">How did you hear about us?</label>

											<select id="hear-about-us" class="hear-about-us">

				                				<option>-- Choose --</option>
												<option>Option One</option>
												<option>Option Two</option>
												<option>Option Three</option>

											</select>

										</li>

									</ol>

								</div>

							</div>

							<div class="group">

								<div class="subgroup">

									<button class="k-button">Create Account</button>

									<button class="k-button cancel">Cancel</button>

								</div>

								<div class="subgroup">

									<p>

										<small>At Sun Tan City, we value your trust. That&rsquo;s why we keep your information private, and we will never sell any of your information to third parties or use it to solicit for any other business.</small>

									</p>

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