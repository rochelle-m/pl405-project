<html>
<head>
  <style>
    .body{
      background-color:grey;
      color: white;
      font-size: 20px;
      padding-top: 100px;
    }

    .btn{
      color: black;
      background-color: white;
      width: 100px;
      height: 30px;
    }
  </style>
</head>
<body class="body">
<form action="uploadConfigure.php" method="post" enctype="multipart/form-data">
  Select your photo to upload:

  <br>
  <br>

  <input type="file" name="fileToUpload" id="fileToUpload">

  <br>
  <br>

  Upload signature photo:

  <br>
  <br>

  <input type="file" name="fileToUpload" id="fileToUpload">

  <br>
  <br>

  <input class="btn" type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>