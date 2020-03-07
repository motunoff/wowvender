<!DOCTYPE html>
<html>
<head>
	<title>Title of the document</title>
</head>
<body>
<style>

	/* simple reset css*/

	html {
		box-sizing: border-box;
	}

	*,
	:after,
	:before {
		box-sizing: inherit
	}

	a,
	abbr,
	acronym,
	address,
	applet,
	article,
	aside,
	audio,
	b,
	big,
	blockquote,
	body,
	canvas,
	caption,
	center,
	cite,
	code,
	dd,
	del,
	details,
	dfn,
	div,
	dl,
	dt,
	embed,
	fieldset,
	figcaption,
	figure,
	footer,
	form,
	h1,
	h2,
	h3,
	h4,
	h5,
	h6,
	header,
	hgroup,
	html,
	iframe,
	img,
	ins,
	kbd,
	label,
	legend,
	li,
	mark,
	menu,
	nav,
	object,
	ol,
	output,
	p,
	pre,
	q,
	ruby,
	s,
	samp,
	section,
	small,
	span,
	strike,
	strong,
	sub,
	summary,
	sup,
	table,
	tbody,
	td,
	tfoot,
	th,
	thead,
	time,
	tr,
	tt,
	u,
	ul,
	var,
	video {
		margin: 0;
		padding: 0;
		border: 0;
		font: inherit;
		vertical-align: baseline
	}

	ul, li {
		list-style: none;
	}

	article,
	aside,
	details,
	figcaption,
	figure,
	footer,
	header,
	hgroup,
	menu,
	nav,
	section {
		display: block
	}

	table {
		border-collapse: collapse;
		border-spacing: 0
	}

	:focus {
		outline: 0
	}

	html {
		font-family: sans-serif;
		-ms-text-size-adjust: 100%;
		-webkit-text-size-adjust: 100%
	}

	body {
		margin: 0
	}

	article,
	aside,
	details,
	figcaption,
	figure,
	footer,
	header,
	hgroup,
	main,
	menu,
	nav,
	section,
	summary,
	time {
		display: block
	}

	audio,
	canvas,
	progress,
	video {
		display: inline-block;
		vertical-align: baseline
	}

	audio:not([controls]) {
		display: none;
		height: 0
	}

	[hidden],
	template {
		display: none
	}

	a {
		background-color: transparent
	}

	a:active,
	a:hover {
		outline: 0
	}

	abbr[title] {
		border-bottom: 1px dotted
	}

	b,
	strong {
		font-weight: 700
	}

	dfn {
		font-style: italic
	}

	mark {
		background: #ff0;
		color: #000
	}

	small {
		font-size: 80%
	}

	sub,
	sup {
		font-size: 75%;
		line-height: 0;
		position: relative;
		vertical-align: baseline
	}

	sup {
		top: -.5em
	}

	sub {
		bottom: -.25em
	}

	img {
		border: 0;
		vertical-align: bottom
	}

	svg:not(:root) {
		overflow: hidden
	}

	figure {
		margin: 1em 40px
	}

	hr {
		box-sizing: content-box;
		height: 0
	}

	pre {
		overflow: auto
	}

	code,
	kbd,
	pre,
	samp {
		font-family: monospace, monospace;
		font-size: 1em
	}

	button,
	input,
	optgroup,
	select,
	textarea {
		color: inherit;
		font: inherit;
		margin: 0
	}

	button {
		overflow: visible;
		text-transform: inherit
	}

	button,
	html input[type=button],
	input[type=reset],
	input[type=submit] {
		-webkit-appearance: button;
		cursor: pointer
	}

	button[disabled],
	html input[disabled] {
		cursor: default
	}

	button::-moz-focus-inner,
	input::-moz-focus-inner {
		border: 0;
		padding: 0
	}

	input {
		line-height: normal
	}

	input[type=checkbox],
	input[type=radio] {
		box-sizing: border-box;
		padding: 0
	}

	input[type=number]::-webkit-inner-spin-button,
	input[type=number]::-webkit-outer-spin-button {
		height: auto
	}

	input[type=search] {
		-webkit-appearance: textfield
	}

	input[type=search]::-webkit-search-cancel-button,
	input[type=search]::-webkit-search-decoration {
		-webkit-appearance: none
	}

	fieldset {
		border: 1px solid #d9d9d9;
		margin: 0 2px;
		padding: .35em .625em .75em
	}

	legend {
		border: 0;
		padding: 0
	}

	textarea {
		overflow: auto
	}

	optgroup {
		font-weight: 700
	}

	table {
		border-collapse: collapse;
		border-spacing: 0
	}

	td,
	th {
		padding: 0
	}


	html,
	body {
		height: 100%;
		color: #000;
		font: 15px/1.5 "-apple-system", BlinkMacSystemFont, Arial, sans-serif
	}

	a {
		cursor: pointer;
		text-decoration: none;
		color: #1a1a1a;
		display: inline-block;
		transition: all 200ms ease-out;
		-webkit-transition: all 200ms ease-out
	}

	.container {
		width: 1170px;
		margin: 0 auto;
	}

	.flex {
		display: flex;
	}

	.justify-content-center {
		justify-content: center;
	}

	.justify-content-space-between {
		justify-content: space-between;
	}

	.justify-content-space-around {
		justify-content: space-around;
	}


	/** header **/


	#header {
		background-color: whitesmoke;
	}

	.header-banner-top {
		height: 50px;
		padding: 15px 0;
		background-color: greenyellow;
		text-align: center;
	}

	.header-main {
		padding: 25px 0;
	}

	.header-banner-bottom {
		height: 50px;
		padding: 15px 0;
		background-color: lightgoldenrodyellow;
		text-align: center;
	}


	/* global */
	.page-content {
		padding: 15px 0;
	}

	.page-content h1 {

		margin: 18px 0;
		font-size: 28px;
		text-align: center;
	}

	.page-content h2 {
		margin-bottom: 15px;
		color: #1a1a1a;
		text-align: center;
		font-size: 21px;


	}

	/* front page*/

	.users-table {
		width: 400px;
		margin: 25px auto;
		padding: 25px 15px;
		background: #d9d9d9;
		box-shadow: 1px 1px 0 silver;
		border-radius: 4px;
	}

	.users-table .user-name {
		width: 200px;
		height: 35px;
		margin-right: 2.5px;
		padding: 0 10px;
		line-height: 35px;
		background: #fff;
		border-bottom: 2px solid #d9d9d9;
	}

	.user-role {
		width: 200px;
		height: 35px;
		padding: 0 10px;
		line-height: 35px;
		background: whitesmoke;
		border-bottom: 2px solid #d9d9d9;
	}

	.forms-wrap form {
		width: 400px;
		padding: 15px 25px;
		background: #d9d9d9;
		box-shadow: 1px 1px 0 silver;
		border-radius: 4px;
	}

	.forms-wrap form:not(:last-of-type) {
		margin-right: 25px;
	}
	
	.forms-wrap form fieldset {
		border: 0;
	}

	.forms-wrap form input,
	.forms-wrap form select {
		width: 100%;
		height: 35px;
		padding-left: 15px;
		margin-bottom: 15px;
		line-height: 35px;
		border: none;
		outline: none;
		background: #fff;
		border-radius: 4px;
	}

	.forms-wrap form button {
		display: block;
		width: 180px;
		height: 40px;
		margin: 18px auto;
		line-height: 38px;
		font-weight: 700;
		text-align: center;
		border: 2px solid;
		border-radius: 4px;
		transition: all 0.55s;

	}

	.forms-wrap form button:hover {
		background: #ffffff;
		box-shadow: none;
		color: #0d0d0d;
		transition: all 0.55s;
	}

	.btn-yellow {
		background-color: #ffd800;
		color: #424c57;
		border-color: #ffd800;
		border-color: #ffd800 !important;
		box-shadow: 1px 1px 1px 1px rgba(230, 193, 0, 1);
		-webkit-box-shadow: 1px 1px 1px 1px rgba(230, 193, 0, 1);
		-moz-box-shadow: 1px 1px 1px 1px rgba(230, 193, 0, 1);
		transition: all 0.55s;

	}

	.btn-green {
		background-color: #4caf50;
		color: #ffffff;
		border-color: #4caf50 !important;
		box-shadow: 1px 1px 1px 1px rgba(68, 157, 72, 1);
		-webkit-box-shadow: 1px 1px 1px 1px rgba(68, 157, 72, 1);
		-moz-box-shadow: 1px 1px 1px 1px rgba(68, 157, 72, 1);
		transition: all 0.55s;
	}

	.result {
		text-align: center;
	}


	/* footer */

	#footer {
		position: relative;
		right: 0;
		bottom: 0;
		left: 0;
		height: 50px;
		background-color: #dddddd;
	}
</style>


<!-- #header -->
<header id="header">

	<div class="container">

		<div class="header-banner-top">
			banner 1
		</div>

		<div class="header-main flex justify-content-space-between">

			<div id="logo">
				<a href="/">logo</a>
			</div>

			<div id="header-main-content">
				header description
			</div>

		</div>

		<div class="header-banner-bottom">
			banner 2
		</div>


	</div>

</header>
<!-- end #header -->

<!-- .page-content -->
<div class="page-content">
	<div class="container">


		<?

		require_once 'db-connect.php';

		?>


		<h1>List users</h1>

		<section class="users-table">


			<?php

			$users = mysqli_query($con, "SELECT * FROM user");

			if ( $users->num_rows > 0 ) {


				while ( $row = $users->fetch_assoc() ) {

					echo "<div class='users-table-row flex justify-content-center'>";
					echo "<div class='user-name'>$row[username]</div>";

					$user_role = mysqli_query($con, "SELECT rolename FROM user_role  WHERE id	='$row[role_id]' limit 1 ");

					if ( $user_role->num_rows > 0 ) {

						$obj = mysqli_fetch_object($user_role);

						echo "<div class='user-role'>$obj->rolename</div>";

					} else {

						echo 'Error in request';
					}

					echo '</div>';
				}

			} else {

				echo '<h2>Users not found</h2>';

			}

			?>


		</section>

		<section class="forms-wrap flex justify-content-center">

			<form id="add-new-user-role" action="#" method="post" enctype="multipart/form-data">

				<h2>Add new user role</h2>

				<fieldset>
					<input type="text" id="user-role" name="user_role" placeholder="User role" required>
				</fieldset>

				<button type="submit" class="btn-yellow">Add new role</button>

				<p class="result"></p>

			</form>

			<form id="add-new-user" action="#" method="post" enctype="multipart/form-data">

				<h2>Add new user </h2>

				<fieldset>

					<input type="text" id="user-name" name="user_name" placeholder="User name " required>

					<select id="select-user-role" name="select_user_role" required>

						<?php

						echo "<option value=''>Select user role</option>";


						$result = mysqli_query($con, "SELECT * FROM user_role  ");

						// If role exists		
						if ( $result->num_rows > 0 ) {

							while ( $row = $result->fetch_assoc() ) {
								echo "<option value='$row[id]'>$row[rolename]</option>";
								//echo "id: " . $row["id"] . " - Name: " . $row["firstname"] . " " . $row["lastname"] . "<br>";
							}


						}

						?>


					</select>

				</fieldset>

				<button type="submit" class="btn-green">Add new user</button>

				<p class="result"></p>

			</form>


		</section>


	</div>
</div>
<!-- end .page-content -->

<!-- #footer -->
<footer id="footer">
	<div class="container">
		footer
	</div>
</footer>
<!-- end #footer -->


<script src="main.js"></script>


</body>
</html>