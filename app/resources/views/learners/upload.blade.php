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
				<h1 class="title">Upload </h1>
				<div class="row">
					<form action="/status" 
					  method="post" 
					  enctype="multipart/form-data">
					  <div class="col-sm-12">
						@csrf
					  
						<div class="row">
						  <div class="form-group">
							<label> Select your photo to upload:</label>
							<input type="file" 
									name="photo" 
									accept=".jpg,.jpeg,.png"
								/>
						  </div>
						</div>
					 
						<div class="row">
						  <div class="form-group">
							<label> Select the signature photo to upload:</label>
							<input type="file" 
									name="signature" 
									accept=".jpg,.jpeg,.png"
								/>
						  </div>
						</div>

								<input type="hidden" 
								name="first_name" 
								id="first"
								value="{{$person["first_name"]}}" 
						/>
						<input type="hidden" 
								name="middle_name" 
								id="middle" 
								value="{{$person["middle_name"]}}" 
						/>
						<input type="hidden"
								name="last_name"  
								id="last"
								value="{{$person["last_name"]}}" 
						/>
						<input type="hidden"
								name="email"  
								id="email"
								value="{{$person["email"]}}" 
						/>
						<input type="hidden"
								name="aadhar_no"  
								id="aadhar_no"
								value="{{str_replace(' ', '', $person["aadhar_no"])}}" 
						/>
						
						<input type="hidden"
								name="phone_number"  
								id="phone_number"
								value="{{$person["phone_number"]}}" 
						/>
						<input type="hidden"
								name="street"  
								id="street"
								value="{{$person["street"]}}" 
						/>
						<input type="hidden"
								name="pincode"  
								id="pincode"
								value="{{$person["pincode"]}}" 
						/>
						<input type="hidden"
								name="date_of_birth"  
								id="date_of_birth"
								value="{{$person["date_of_birth"]}}" 
						/>

								<input type="hidden"
								name="gender"  
								id="gender"
								value="{{$person["gender"]}}" 
						/>
							<input type="hidden"
									name="password"  
									id="password"
									value="{{$person["password"]}}" 
							/>

					
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