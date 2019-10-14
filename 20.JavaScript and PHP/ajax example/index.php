<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Ajax</title>
	</head>
	<body>
		<h1>Ajax Example</h1>

		<dl>  <!-- Description list -->
			<dt>Name:</dt>	<!-- Description table -->
			<dd id="name"></dd>		<!-- Description defination -->

			<dt>Email:</dt>
			<dd id="email"></dd>

			<dt>Date of Birth:</dt>
			<dd id="dob"></dd>
		</dl>

		<button id="btn1">Get Data</button>

		<br>

		<p>The Time is <time id="currentTime"><?= date('g:i:s') ?></time></p>
		<button id="btn">Refresh</button>
		<script src="https://code.jquery.com/jquery-3.4.1.min.js"
						integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
	  				crossorigin="anonymous"></script>

		<script>
			$("#btn").on("click", function(){
				$.ajax("gettime.php")
				.done(function(data){
					$("#currentTime").html(data);
				});
			});

			$("#btn1").on("click", function(){
				$.ajax("getdata.php")
				.done(function(data){
					var json = JSON.parse(data);

					$("#name").html(json.name);
					$("#email").html(json.email);
					$("#dob").html(json.dob);
				});
			});
		</script>
	</body>
</html>
