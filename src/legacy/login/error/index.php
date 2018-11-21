<?php
ini_set("session.cookie_domain", ".monospaced.com");
session_start();
session_destroy();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en-gb"><head>
<meta http-equiv="X-UA-Compatible" content="IE=7">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=410">

<title>Error | Login | Monospaced</title>
<meta name="description" content="London based web development consultancy, specialising in modern front-end web development, web standards and accessibility.">
<meta name="keywords" content="monospaced, monospaced ltd, monospaced.com">

<!--[if !IE 5]><!--><link rel="stylesheet" type="text/css" href="/_format/styles/screen.css"><!--<![endif]-->
<!--[if gte IE 6]><link rel="stylesheet" type="text/css" href="/_format/styles/tweaks.css"><![endif]-->

</head><body><div id="distance"></div><div id="container">

<h1>
	<a href="/">
		<svg
			aria-label="Monospaced"
			role="img"
			viewBox="0 0 1202 168"
			xmlns="http://www.w3.org/2000/svg"
			width="160.72"
			height="22.45"
		>
			<path
				d="M1129.962 151.702h19.464c22.003-.632 36.599-6.133 36.599-62.833 0-58.392-16.711-62.838-37.022-62.838h-19.041v125.67zM1114.097 12.71h38.714c29.41 0 49.084 16.711 49.084 76.16 0 58.6-18.195 76.163-51.408 76.163h-36.39V12.71zm-37.867 13.321h-63.262v54.161h45.484v13.332h-45.484v58.178h64.74v13.331h-80.605V12.71h79.126v13.321zM938.073 45.71c-.214-12.7-9.309-22.636-22.217-22.636-32.153 0-34.269 43.578-34.269 67.065 0 22.211 2.325 64.525 32.79 64.525 15.866 0 25.394-11.848 25.603-26.867h15.865c-1.687 24.751-16.711 40.198-42.1 40.198-41.89 0-48.028-45.912-48.028-78.28 0-33.432 6.985-79.972 49.93-79.972 21.157 0 37.022 14.81 38.296 35.966h-15.87zM766.71 106.85h38.713L785.96 45.286l-19.25 61.564zm73.196 58.183h-17.134l-13.54-44.852H762.9l-13.546 44.852H732.22L785.96.011l53.947 165.022zM671.927 91.831c18.409 0 30.889-10.996 30.889-32.372 0-23.905-11.002-33.428-29.834-33.428H654.37v65.8h17.557zM638.5 12.711h36.604c27.499 0 43.578 16.496 43.578 46.539 0 32.158-21.152 46.121-50.985 45.907H654.37v59.876H638.5V12.71zm-52.25 27.492c-9.309-8.243-19.892-17.129-33.01-17.129-13.535 0-24.541 9.304-24.541 23.273 0 8.04 1.06 16.074 22.003 27.712l12.062 7.408c28.559 16.288 35.538 25.174 35.538 42.94 0 27.295-18.19 43.588-44.852 43.588-19.668 0-34.27-9.518-46.117-24.75l12.271-9.733c7.402 11.843 19.255 21.152 33.846 21.152 15.875 0 28.987-11.848 28.987-28.136 0-12.27-.846-16.507-27.713-32.587l-13.75-8.248c-15.023-8.88-28.14-19.25-28.14-38.296 0-23.905 18.19-37.654 41.044-37.654 15.87 0 30.466 8.463 41.89 19.041l-9.518 11.42zM461.206 88.87c0-13.964 2.121-65.796-30.894-65.796-33.84 0-30.878 56.91-30.878 65.795 0 17.349-.846 65.795 30.878 65.795 15.876 0 30.894-10.573 30.894-65.795zM430.312 9.742c44.44 0 46.764 50.776 46.764 79.126 0 20.305 1.484 79.126-46.764 79.126-46.957 0-46.748-57.546-46.748-79.126 0-63.684 21.156-79.126 46.748-79.126zM264.24 12.71h18.409l46.336 113.818h.632V12.71h15.865v153.807h-15.019l-49.93-122.923-.423.423v121.016h-15.87V12.71zM207.331 88.87c0-13.964 2.116-65.796-30.884-65.796-33.85 0-30.888 56.91-30.888 65.795 0 17.349-.847 65.795 30.888 65.795 15.865 0 30.884-10.573 30.884-65.795zM176.447 9.742c44.43 0 46.754 50.776 46.754 79.126 0 20.305 1.478 79.126-46.754 79.126-46.968 0-46.759-57.546-46.759-79.126 0-63.684 21.157-79.126 46.76-79.126zM79.335 12.71h15.656v152.323h-15.87V49.09h-.423l-31.307 74.686L16.288 49.09l-.423.429v115.515H0V12.71h15.442l31.95 75.95 31.943-75.95z"
				fill="#161616"
			/>
		</svg>
	</a>
</h1>

<form method="post" action="/login/login.php">

	<div id="form-login" class="form-error">

		<p class="form-info">Sorry, incorrect username or password.</p>

		<p>
			<label for="myusername">Username</label>
			<input id="myusername" name="myusername" type="text" class="text">
		</p>

		<p>
			<label for="mypassword">Password</label>
			<input id="mypassword" name="mypassword" type="password" class="text">
		</p>

		<p class="btns"><input type="submit" class="submit" value="Log in"></p>

	</div>

</form>

</div></body></html>
