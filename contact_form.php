<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Main - Mero Hostel</title>

		<!-- Main Styslesheet -->
		<link rel="stylesheet" href="css/main.css" />
		<!-- Bootstrap CSS -->
		<link href="bootstrap/bootstrap.css" rel="stylesheet">
		<!-- Font-Awesome Icons -->
		<link href="font_awesome/css/font-awesome.css" rel="stylesheet">
		<!-- Semantic CSS -->
		<link href="semantic/dist/semantic.min.css" type="text/css" rel="stylesheet"/>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.address.js"></script>
		<!-- Semantic JS -->
		<script src="semantic/dist/semantic.min.js" type="text/javascript" ></script>
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="bootstrap/html5shiv.min.js"></script>
		<script src="bootstrap/respond.min.js"></script>
		<![endif]-->

		<!-- Google Web Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
	</head>

	<body>

		<script type="text/javascript">
			function mailIt() {

				var first_name = document.getElementById("first_name").value;
				var last_name = document.getElementById("last_name").value;
				var email = document.getElementById("email").value;
				var telephone = document.getElementById("telephone").value;
				var comments = document.getElementById("comments").value;

				var http = new XMLHttpRequest();
				var url = "send_form_email.php";
				var params = "first_name=" + first_name + "&last_name=" + last_name + "&email=" + email + "&telephone=" + telephone + "&comments=" + comments;
				http.open("POST", url, true);

				http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				http.setRequestHeader("Content-length", params.length);
				http.setRequestHeader("Connection", "close");

				http.onreadystatechange = function() {//Call a function when the state changes.
					if (http.readyState == 4 && http.status == 200) {
						alert(http.responseText);
					}
				};
				http.send(params);

				return true;
			}
		</script>

		<div id="header">
			<div id="fixedSearch">
				<div class="container">
					<div class="row">

						<div style="float: left;padding: 14px 14px;margin-top: -15px;margin-bottom: -15px;">
							<a href="index.php"> <img src="img/mero-hostel-logo.png"/> </a>
						</div>
						<!-- logo -->

						<div class="ui selection dropdown">
							<input type="hidden" id="genderSelect" name="gender">
							<i class="dropdown icon"></i>
							<div class="default text">
								Gender
							</div>
							<div class="menu" onchange="hideDiv()">
								<div class="item" data-value="boys" data-text="Male" value="boys">
									<i class="male icon"></i>
									Male
								</div>
								<div class="item" data-value="girls" data-text="Female" value="girls">
									<i class="female icon"></i>
									Female
								</div>
							</div>
						</div>
						<!-- gender -->

						<div class="ui corner labeled input" style="margin-left: 3px;">
							<div class="ui local search">
								<div class="ui left icon input">
									<i class="world icon"></i>
									<input  style="border-radius: 4px;" type="text" id="searchid" placeholder="Enter Location" class="prompt">
								</div>
							</div>
						</div>
						<!-- location -->

						<div class="ui submit button" style="
						background-color: white;
						color: rgb(239, 103, 47);
						margin-left: 8px;
						" >
							<i class="search icon"></i> Search
						</div>

					</div><!--row -->
				</div><!--container -->

			</div><!-- fixedSearch -->
		</div><!-- header-->

		<div id="wrapper">

			<div id="content">

			<?php
	include "feedback.php";
	?>

				<div style="background: #fff;" class="container">

					<div class="row" style="padding: 20px;">

						<div class="col-md-8">
							<h2 id="deHosTtl">Contact</h2>
							<div id="frameContent" class="row">
								<form class="ui form" style="width: 97%;" name="contactform" method="post" onsubmit="return mailIt();">

										<div class="two fields">
											<div class="field">
												<label>First name</label>
												<div class="ui corner labeled input">
													<input placeholder="First Name" type="text" id="first_name" name="first_name" maxlength="50" size="30" required="true">
													<div class="ui corner label">
														<i class="asterisk icon"></i>
													</div>
												</div>
											</div>
											<div class="field">
												<label>Last name</label>
												<div class="ui corner labeled input">
													<input placeholder="Last Name" type="text" id ="last_name" name="last_name" maxlength="50" size="30" required="true">
													<div class="ui corner label">
														<i class="asterisk icon"></i>
													</div>
												</div>
											</div>
										</div>
										<div class="field">
											<label>Email Address</label>
											<div class="ui corner labeled input">
												<input placeholder="Email" type="text" id = "email" name="email" maxlength="80" size="30" required="true">
												<div class="ui corner label">
													<i class="asterisk icon"></i>
												</div>
											</div>
										</div>
										<div class="field">
											<label>Telephone</label>
											<div class="ui corner labeled input">
												<input placeholder="Email" type="text" id = "telephone" name="telephone" maxlength="30" size="30" required="true">
												<div class="ui corner label">
													<i class="asterisk icon"></i>
												</div>
											</div>
										</div>
										<div class="field">
											<label>Comments</label>
											<div class="ui corner labeled input">
												<textarea name="comments" id = "comments" maxlength="1000" cols="25" rows="6"required="true"></textarea>
												<div class="ui corner label">
													<i class="asterisk icon"></i>
												</div>
											</div>
										</div>
										<div>
											<input class="ui orange submit button" type = "submit" value = "Submit" name = "submit"/>
										</div>

										<!--
										<table width="450px">

										<tr>

										<td valign="top"><label for="first_name">First Name *</label></td>

										<td valign="top">
										<input  type="text" id="first_name" name="first_name" maxlength="50" size="30">
										</td>

										</tr>

										<tr>

										<td valign="top"><label for="last_name">Last Name *</label></td>

										<td valign="top">
										<input  type="text" id ="last_name" name="last_name" maxlength="50" size="30">
										</td>

										</tr>

										<tr>

										<td valign="top"><label for="email">Email Address *</label></td>

										<td valign="top">
										<input  type="text" id = "email" name="email" maxlength="80" size="30">
										</td>

										</tr>

										<tr>

										<td valign="top"><label for="telephone">Telephone Number</label></td>

										<td valign="top">
										<input  type="text" id = "telephone" name="telephone" maxlength="30" size="30">
										</td>

										</tr>

										<tr>

										<td valign="top"><label for="comments">Comments *</label></td>

										<td valign="top">					<textarea  name="comments" id = "comments" maxlength="1000" cols="25" rows="6"></textarea></td>

										</tr>

										<tr>

										<td colspan="2" style="text-align:center">
										<input type="submit" value="Submit">
										</td>

										</tr>

										</table>-->

									</form>
							</div>
							<!-- internal row 1 -->

						</div><!-- main column -->

						<div class="col-md-4">
							<div style="margin-top: 10px;" class="row">
								<div style="padding: 10px;">
									<h3 id="review"><a name="review" id="review"></a>Share it!</h3>
									<!-- Go to www.addthis.com/dashboard to customize your tools --><div class="addthis_sharing_toolbox"></div>
								</div>
							</div><!-- internal row -->
						</div><!-- sidebar -->

					</div><!-- content -->
				</div><!-- container -->
			</div>
			<!-- content -->

			<?php include "footer.php"; ?>

		</div>
		</div><!-- wrapper -->

		<!-- Go to www.addthis.com/dashboard to customize your tools -->
		<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-4fbb182a18547812" async="async"></script>
		<!-- Main Script -->
		<script src="js/main.js"></script>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="bootstrap/bootstrap.js"></script>

	</body>
</html>