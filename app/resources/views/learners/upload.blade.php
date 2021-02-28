<html>
<head>
	<link
        href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css"
        rel="stylesheet"
        id="bootstrap-css"
	/>
		
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
	<link rel="preconnect" href="https://fonts.gstatic.com" />
	<link
		href="https://fonts.googleapis.com/css2?family=Oswald&display=swap"
        rel="stylesheet"
    />
		
	<link rel="stylesheet" href="{{ asset('css/upload.css') }}">
	<link rel="stylesheet" href="{{ asset('css/learners.css') }}">
</head>


<body class="bodyPadding" >
<div class="container">
		<div class="body">
			<div class="col-lg-12 well form-container">
				<h1 class="title">Upload</h1>
				<div class="row">
					<form action="" 
					  method="post" 
					  enctype="multipart/form-data">
					  <div class="col-sm-12">
					  
						<div class="row">
						  <div class="form-group">
							<label> Select your photo to upload:</label>
							<input type="file" 
									name="picture" 
								/>
						  </div>
						</div>
					 
						<div class="row">
						  <div class="form-group">
							<label> Select the signature photo to upload:</label>
							<input type="file" 
									name="signature" 
								/>
						  </div>
						</div>
					
						<div class="text-center">
						  <input
								type="submit"
								name="submit"
								value="Upload"
								id="submitbtn"
							/>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	
</body>
</html>