<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>

    <!-- font awesome cdn link -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">

     <!-- swiper css link -->
      <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

     <!-- custom css file link -->
      <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <?php @include 'header.php'; ?>

        <section class="about">
            <img src="image/A10.jpg" alt="" width="400" height="650">
            <h3>about us</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores voluptates laudantium tempore,
                quaerat dolorem libero quibusdam temporibus inventore debitis maxime nihil consectetur impedit neque.
                Quisquam doloribus dolor suscipit enim? Delectus.
            </p>
            <a href="contact.php" class="btn">contact us</a>
        </section>


        <section class="team">
            <h1 class="heading">Our Team</h1>

            <div class="box-container">
                <div class="box">
                    <img src="image/Ashu.jpg" alt=""  width="200" height="200">
                    <h3>ASHISH KUMAR</h3>
                    <p>Wedding Planner</p>
                    <div class="share">
                        <a href="#" class="fab fa-facebook"></a>
                        <a href="#" class="fab fa-twitter"></a>
                        <a href="#" class="fab fa-linkedin"></a>
                        <a href="#" class="fab fa-instagram"></a>
                    </div>
                </div>


                <div class="box">
                    <img src="image/anmol.jpg" alt=""  width="200" height="200">
                    <h3>ANMOL</h3>
                    <p>Wedding Planner</p>
                    <div class="share">
                        <a href="#" class="fab fa-facebook"></a>
                        <a href="#" class="fab fa-twitter"></a>
                        <a href="#" class="fab fa-linkedin"></a>
                        <a href="#" class="fab fa-instagram"></a>
                    </div>
                </div>


                <div class="box">
                    <img src="image/kk.jpg" alt=""  width="200" height="200">
                    <h3>K.KARTIKEY</h3>
                    <p>Wedding Planner</p>
                    <div class="share">
                        <a href="#" class="fab fa-facebook"></a>
                        <a href="#" class="fab fa-twitter"></a>
                        <a href="#" class="fab fa-linkedin"></a>
                        <a href="#" class="fab fa-instagram"></a>
                    </div>
                </div>

            </div>
        </section>

        <?php @include 'footer.php'; ?>
    </div>












    <!-- swiper js link -->
     <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!-- custom js file link -->
     <script src="script.js"></script>


</body>
</html>