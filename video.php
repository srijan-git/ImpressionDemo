<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css\style.css">
  <link rel="stylesheet" href="assets\animate.css">
  <link rel="stylesheet" href="sassets\fontawesome.css">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="assets\wow.js"></script>
  <script>
    new WOW().init();
  </script>


  <style>
    .box {
      background-image: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), url(images/background/background2.jpg);
      background-size: cover;
      background-position: center;
      color: #efefef !important;
      background-attachment: fixed;
      padding-top: 50px;
      padding-bottom: 20px;
    }
  </style>
</head>

<body>
  <!--------------Header--------------------->
  <?php include('./include/Header.php') ?>
  <!--------------Header--------------------->
  <!--------------calender--------------------->
  <?php include('include/cinematic.php') ?>
  <!--------------calender--------------------->

  <!--------------calender--------------------->
  <?php include('include/pagination.php') ?>
  <!--------------calender--------------------->


  <!--------------calender--------------------->
  <?php include('include/footer.php') ?>
  <!--------------calender--------------------->





  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="assets\fontaswesome.js"></script>
</body>

</html>
