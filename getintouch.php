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
    <script>
        new WOW().init();
    </script>
</head>

<body>
    <!--------------Header--------------------->
    <?php include('./include/Header.php') ?>
    <!--------------Header--------------------->




    <section id="contact">
        <div class="container">
            <h1 class="wow fadeInDown" data-wow-duration="1s" data-wow-delay="1s">Get In Touch</h1>
            <div class=" row">
                <div class="col-md-12 wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="0.5s">
                    <form class="contact-form" action="" method="POST">
                        <div class="fg">
                            <input type="text" placeholder="First Name" name="name" style="width:100%">
                        </div>
                        <div class="fg">
                            <input type="text" placeholder="Last Name" name="name" style="width:100%">
                        </div>
                        <div class="fg">
                            <input type="email" placeholder="Email" name="email" style="width:100%">
                        </div>
                        <div class="fg">
                            <textarea placeholder="Type your Message....." name="" id="" cols="30" rows="3"></textarea>
                        </div>
                        <div class="col-md-12 wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="1s"" style=" text-align: center;">
                            <input type="submit" value="SEND MESSAGE" class="btn btn-dark" name="" id="" style="margin-top: 50px;">
                        </div>
                    </form>
                </div>
    </section>

    <!--------------calender--------------------->
    <?php include('include/team.php') ?>
    <!--------------calender--------------------->
    <!--------------calender--------------------->
    <?php include('include/promo.php') ?>
    <!--------------calender--------------------->
    <!--------------calender--------------------->
    <?php include('include/address.php') ?>
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