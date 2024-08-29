<?php include ($_SERVER['DOCUMENT_ROOT']."/a/inc/head.php"); ?>

<body id="sign-in" class="signed-out">

	<div id="content">

		<div class="wrap">

			<div id="main" role="main">

				<h1>Form Elements</h2>

				<!-- Text Input -->

				<div class="section-wrap">

					<div class="section-title">Text Input</div>

				</div>

				<div class="element">

					<p class="type-title"><strong>Standard</strong></p>

					<div class="type">

						<label for="name">Label</label>

						<input id="name" type="text" class="k-textbox" />

					</div>

					<p class="type-title"><strong>Placeholder used as Label</strong></p>

					<div class="type">

						<input id="name" type="text" class="k-textbox" placeholder="Name" />

					</div>

					<p class="type-title"><strong>Password</strong></p>

					<div class="type">

						<label for="password">Label</label>

						<input id="password" type="password" class="k-textbox" />

					</div>

				</div>

				<!-- Textarea -->

				<div class="section-wrap">

					<div class="section-title">Textarea</div>

				</div>

				<div class="element">

					<p class="type-title">

						<strong>Standard</strong>

					</p>

					<div class="type">

						<label for="comments">Label</label>

						<textarea id="comments" class="k-textbox"></textarea>

					</div>

					<p class="type-title">

						<strong>Placeholder used as Label</strong>

					</p>

					<div class="type">

						<textarea id="comments" class="k-textbox" placeholder="Comments"></textarea>

					</div>

				</div>

				<!-- Checkbox -->

				<div class="section-wrap">

					<div class="section-title">Checkbox</div>

				</div>

				<div class="element">

					<p class="type-title">

						<strong>Standard</strong>

					</p>

					<div class="type">

						<label for="agree">

							<input type="checkbox" id="agree" data-bind="" />

							I accept the terms and conditions.

						</label>

					</div>

				</div>

				<!-- Checkbox -->

				<div class="section-wrap">

					<div class="section-title">Radio</div>

				</div>

				<div class="element">

					<p class="type-title">

						<strong>Standard</strong>

					</p>

					<div class="type">

						<label for="yes">

							<input type="radio" id="yes" />

							Yes

						</label>

					</div>

				</div>

				<!-- Button -->

				<div class="section-wrap">

					<div class="section-title">Submit Button</div>

				</div>

				<div class="element">

					<p class="type-title"><strong>Standard</strong></p>

					<div class="type">

						<button class="k-button">Button</button>

					</div>

					<p class="type-title"><strong>Standard (with wrapping text)</strong></p>

					<div class="type">

						<button class="k-button">Button that is super-duper long and may not ever exist</button>

					</div>

					<p class="type-title"><strong>Alternate Colors</strong></p>

					<div class="type">

						<button class="k-button yellow">Yellow</button>

					</div>

					<div class="type">

						<button class="k-button green">Green</button>

					</div>

					<div class="type">

						<button class="k-button teal">Teal</button>

					</div>

					<div class="type">

						<button class="k-button blue">Blue</button>

					</div>

					<div class="type">

						<button class="k-button pink">Pink</button>

					</div>

					<div class="type">

						<button class="k-button red">Red</button>

					</div>

					<p class="type-title"><strong>Disabled State</strong></p>

					<div class="type">

						<button class="k-button cancel">Cancel</button>

					</div>

					<div class="type">

						<button class="k-button" disabled="disabled">Disabled</button>

					</div>

				</div>

				<!-- Link to... -->

				<div class="section-wrap">

					<div class="section-title">Anchor Buttons</div>

				</div>

				<div class="element">

					<p class="type-title"><strong>Standard</strong></p>

					<div class="type">

						<a href="#" class="k-button">View Map</a>

					</div>

					<p class="type-title"><strong>Standard (with wrapping text)</strong></p>

					<div class="type">

						<a href="#" class="k-button">Button that is super-duper long and may not ever exist</a>

					</div>

					<p class="type-title"><strong>With "Go To" arrow</strong></p>

					<div class="type">

						<a href="#" class="k-button go-to">Go To <span class="k-icon">&rarr;</span></a>

					</div>

					<p class="type-title"><strong>With "Back To" arrow</strong></p>

					<div class="type">

						<a href="#" class="k-button back-to"><span class="k-icon">&larr;</span> Back To</a>

					</div>

					<p class="type-title"><strong>Alternate Colors</strong></p>

					<div class="type">

						<a href="#" class="k-button yellow">Yellow</a>

					</div>

					<div class="type">

						<a href="#" class="k-button green">Green</a>

					</div>

					<div class="type">

						<a href="#" class="k-button teal">Teal</a>

					</div>

					<div class="type">

						<a href="#" class="k-button blue">Blue</a>

					</div>

					<div class="type">

						<a href="#" class="k-button pink">Pink</a>

					</div>

					<div class="type">

						<a href="#" class="k-button red">Red</a>

					</div>

					<p class="type-title"><strong>Without Background</strong></p>

					<div class="type">

						<a href="#" class="k-button no-background">Standard</a>

					</div>

					<div class="type">

						<a href="#" class="k-button no-background yellow">Yellow</a>

					</div>

					<div class="type">

						<a href="#" class="k-button no-background green">Green</a>

					</div>

					<div class="type">

						<a href="#" class="k-button no-background teal">Teal</a>

					</div>

					<div class="type">

						<a href="#" class="k-button no-background blue">Blue</a>

					</div>

					<div class="type">

						<a href="#" class="k-button no-background pink">Pink</a>

					</div>

					<div class="type">

						<a href="#" class="k-button no-background red">Red</a>

					</div>

					<div class="type">

						<a href="#" class="k-button no-background gray">Gray</a>

					</div>

					<div class="type transparent">

						<a href="#" class="k-button no-background white">White</a>

					</div>

					<div class="type transparent">

						<a href="#" class="k-button go-to no-background white">Go To <span class="k-icon k-i-go-to">&rarr;</span></a>

					</div>

					<div class="type transparent">

						<a href="#" class="k-button back-to no-background white"><span class="k-icon k-i-back-to">&larr;</span> Back To</a>

					</div>

				</div>

				<!-- Input with icon right -->

				<div class="section-wrap">

					<div class="section-title">Text Input with Button</div>

				</div>

				<div class="element">

					<p class="type-title"><strong>Input with icon right</strong></p>

					<div class="type">

						<span class="k-textbox k-space-right">

							<input type="text" placeholder="Input with icon right" />

							<a href="#" class="k-icon k-i-go-to">&nbsp;</a>

						</span>

					</div>

				</div>

				<!-- Combobox -->

				<div class="element">

					<p class="type-title"><strong>Combobox</strong></p>

					<div class="type">

						<select id="shirt-size" placeholder="Select size...">

							<option>Small</option>
							<option>Medium</option>
							<option>Large</option>

						</select>

					</div>

				</div>

				<!-- Dropdown List -->

				<div class="element">

					<p class="type-title"><strong>Dropdown List</strong></p>

					<div class="type">

						<select id="hat-size">

		                	<option>S - 6 3/4"</option>
							<option>M - 7 1/4"</option>
							<option>L - 7 1/8"</option>
							<option>XL - 7 5/8"</option>

						</select>

					</div>

				</div>

				<!-- Panel Bar -->

				<div class="element">

					<p class="type-title"><strong>Panel Bar</strong></p>

					<div class="type">

						<div id="organizer">

							<ul class="panelbar">

								<li class="k-state-active">

									<span class="k-link k-state-selected">My Teammates</span>

									<div style="padding: 10px;">

										<div class="teamMate">

											<h2>Andrew Fuller</h2>

											<p>Team Lead</p>

										</div>

										<div class="teamMate">

											<h2>Nancy Leverling</h2>

											<p>Sales Associate</p>

										</div>

										<div class="teamMate">

											<h2>Robert King</h2>

											<p>Business System Analyst</p>

										</div>

									</div>

								</li>

								<li>

									Projects

									<ul>

										<li>New Business Plan</li>

										<li>

											Sales Forecasts

											<ul>

												<li>Q1 Forecast</li>

												<li>Q2 Forecast</li>

												<li>Q3 Forecast</li>

												<li>Q4 Forecast</li>

											</ul>

										</li>

										<li>Sales Reports</li>

									</ul>

								</li>

								<li>

									Programs

									<ul>

										<li>Monday</li>

										<li>Tuesday</li>

										<li>Wednesday</li>

										<li>Thursday</li>

										<li>Friday</li>

									</ul>

								</li>

								<li disabled="disabled">

									Communication

								</li>

							</ul>

							<div id="bottom"></div>

						</div>

					</div>

				</div>

				<!-- Tool Tip -->

				<div class="element">

					<p class="type-title"><strong>Tool Tip</strong></p>

					<div class="type">

						<div id="agglomerations">

							<a href="#" title="Canton - 26,300,000" id="canton">?</a>

						</div>

					</div>

				</div>

				<!-- Window -->

				<div class="element">

					<p class="type-title"><strong>Window</strong></p>

					<div class="type">

						<div class="window">

							<p>Alvar Aalto is one of the greatest names in modern architecture and design. Glassblowers at the iittala factory still meticulously handcraft the legendary vases that are variations on one theme, fluid organic shapes that let the end user decide the use. Interpretations of the shape in new colors and materials add to the growing Alvar Aalto Collection that remains true to his original design.</p>

							<p>Born Hugo Alvar Henrik Aalto (February 3, 1898 - May 11, 1976) in Kuortane, Finland, was noted for his humanistic approach to modernism. He studied architecture at the Helsinki University of Technology from 1916 to 1921. In 1924 he married architect Aino Marsio.</p>

							<p>Alvar Aalto was one of the first and most influential architects of the Scandinavian modern movement, and a member of the Congres Internationaux d'Architecture Moderne. Major architectural works include the Finlandia Hall in Helsinki, Finland, and the campus of Helsinki University of Technology.</p>

							<p>Source: <a href="http://www.aalto.com/about-alvar-aalto.html" title="About Alvar Aalto">www.aalto.com</a></p>

						</div>

						<span class="undo" style="display:none" class="k-button">Click here to open the window.</span>

					</div>

				</div>

				<!-- Data Source -->

				<div class="element">

					<p class="type-title"><strong>Data Source</strong></p>

					<div class="type">

						<table id="movies" class="metrotable">

							<thead>

								<tr>

									<th>Rank</th>

									<th>Rating</th>

									<th>Title</th>

									<th>Year</th>

								</tr>

							</thead>

							<tbody>

								<tr>

									<td colspan="4"></td>

								</tr>

							</tbody>

						</table>

						<script id="template" type="text/x-kendo-template">

							<tr>

								<td>#= rank #</td>

								<td>#= rating #</td>

								<td>#= title #</td>

								<td>#= year #</td>

							</tr>

						</script>

					</div>

				</div>

				<!-- MVVM -->

				<div class="element">

					<p class="type-title">

						<strong>MVVM</strong>

					</p>

					<div class="type">

						<div id="example" class="k-content">

							<div class="current-state">

								<h4>Current view model state:</h4>

								<pre>

									{

										firstName: <span data-bind="text: firstName"></span>,
										lastName: <span data-bind="text: lastName"></span>,
										gender: <span data-bind="text: gender"></span>,
										agreed: <span data-bind="text: agreed"></span>

									}

								</pre>

							</div>

							<div class="registration">

								<form>

									<ul>

										<li>

											<label for="fname">First Name:</label>

											<input id="fname" data-bind="value: firstName" />

										</li>

										<li>

											<label for="lname">Last Name:</label>

											<input id="lname" data-bind="value: lastName" />

										</li>

										<li>

											<label for="gender">Gender:</label>

											<select id="gender" data-bind="source: genders, value: gender"></select>

										</li>

									</ul>

									<input type="checkbox" id="agree" data-bind="checked: agreed" />

									<label for="agree">I have read the licence agreement</label>

									<br />

									<br />

									<button data-bind="enabled: agreed, click: register" style="display: block">Register</button>

								</form>

							</div>

							<div class="confirmation" data-bind="visible: confirmed">

								Thank you for your registration, <span data-bind="text: firstName"></span>

								<span data-bind="text: lastName"></span>

								<br />

								<br />

								<button data-bind="click: startOver">Start Over</button>

							</div>

							<p>Validator</p>

							<div id="example" class="k-content">

								<div id="tickets">

									<h3>Book Tickets</h3>

									<ul>

										<li>

											<label for="fullname" class="required">Your Name</label>

											<input type="text" id="fullname" name="fullname" class="k-textbox" placeholder="Full name" required validationMessage="Please enter {0}" />

										</li>

										<li>

											<label for="search" class="required">Movie</label>

											<input type="search" id="search" name="search" required validationMessage="Please select movie"/><span class="k-invalid-msg" data-for="search"></span>

										</li>

										<li>

											<label for="time">Start time</label>

											<select name="time" id="time" required data-required-msg="Select start time">

												<option>14:00</option>

												<option>15:30</option>

												<option>17:00</option>

												<option>20:15</option>

											</select>

											<span class="k-invalid-msg" data-for="time"></span>

										</li>

										<li>

											<label for="amount">Amount</label>

											<input id="amount" name="Amount" type="text" min="1" max="10" value="1" required data-max-msg="Enter value between 1 and 10" />

											<span class="k-invalid-msg" data-for="Amount"></span>

										</li>

										<li>

											<label for="email" class="required">Email</label>

											<input type="email" id="email" name="Email" class="k-textbox" placeholder="e.g. myname@example.net"  required data-email-msg="Email format is not valid" />

										</li>

										<li>

											<label for="tel" class="required">Phone</label>

											<input type="tel" id="tel" name="tel" class="k-textbox" pattern="\d{10}" placeholder="Please enter a ten digit phone number" required validationMessage="Please enter a ten digit phone number"/>

										</li>

										<li class="accept">

											<input type="checkbox" name="Accept" required validationMessage="Acceptance is required" />

											I accept the terms and condition of service

										</li>

										<li class="accept">

											<button class="k-button" type="submit">Submit</button>

										</li>

										<li class="status"></li>

									</ul>

								</div>

							</div>

						</div>

					</div>

				</div>

				<!-- Block -->

				<div class="element">

					<p class="type-title">

						<strong>Block</strong>

					</p>

					<div class="type">

						<div class="k-block">Block</div>

					</div>

				</div>

				<!-- Block with Header -->

				<div class="element">

					<p class="type-title">

						<strong>Block with Header</strong>

					</p>

					<div class="type">

						<div class="k-block">

							<div class="k-header">Block with Header</div>

							Hi. This is some fancy content.

						</div>

					</div>

				</div>

				<!-- Info Block -->

				<div class="element">

					<p class="type-title">

						<strong>Info Block</strong>

					</p>

					<div class="type">

						<div class="k-block k-info-colored">Info Block</div>

					</div>

				</div>

				<!-- Success Block -->

				<div class="element">

					<p class="type-title">

						<strong>Success Block</strong>

					</p>

					<div class="type">

						<div class="k-block k-success-colored">Success Block</div>

					</div>

				</div>

				<!-- Error Block -->

				<div class="element">

					<p class="type-title">

						<strong>Error Block</strong>

					</p>

					<div class="type">

						<div class="k-block k-error-colored">Error Block</div>

					</div>

				</div>

			</div>

		</div>

	</div>

<?php include ($_SERVER['DOCUMENT_ROOT']."/a/inc/footer.php"); ?>