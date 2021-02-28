<html>
<head>
 <link rel="stylesheet" href="{{ asset('css/upload.css') }}">
</head>
<body class="body">
<form action="" method="post" enctype="multipart/form-data">
  Select images to upload:

  <br>
  <br>

  <input type="file" name="files[]" multiple>

  <br>
  <br>

  <input class="btn" type="submit" value="Upload" name="submit">
</form>

</body>
</html>