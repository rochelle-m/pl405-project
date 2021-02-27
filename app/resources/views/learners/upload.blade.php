<html>
<head>
  <style>
    .body{
      background-color:black;
      color: white;
      font-size: 20px;
      padding-top: 100px;
      text-align: center;
      font-size: 30px;
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
<form action="image_validate.php" method="post" enctype="multipart/form-data">
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