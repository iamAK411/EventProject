<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

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

        <section class="home">
            <div class="swiper home-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide slide" style="background:url(image/A22.jpg) no-repeat">
                        <div class="content">
                            <h3>Plan Your Wedding!</h3>
                            <p> The most beautiful moment of life, when two hearts come together, starting a new journey.
                                In the colors of this wedding, lies the shade of love and happiness, making every moment unforgettable.
                            </p>
                            <a href="about.php" class="btn">Discover more</a>
                        </div>
                    </div>


                    <div class="swiper-slide slide" style="background:url(image/A412.jpg) no-repeat">
                        <div class="content">
                            <h3>Plan Your Brithday</h3>
                            <p>A birthday celebrates the joy and memories of the past year.
                                It’s a moment to welcome new beginnings with love and happiness.
                            </p>
                            <a href="about.php" class="btn">Discover more</a>
                        </div>
                    </div>


                    <div class="swiper-slide slide" style="background:url(image/A5.jpg) no-repeat">
                        <div class="content">
                            <h3>Plan Your Other Events</h3>
                            <p>Embrace each moment with joy, and celebrate every event life offers. Let every experience bring happiness to your heart.</p>
                            <a href="about.php" class="btn">Discover more</a>
                        </div>
                    </div>

                </div>

                <div class="swiper-pagination"></div>

            </div>
        </section>

        <section class="services">
            <h1 class="heading">Our Services</h1>
             <div class="swiper service-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide slide">
                        <img src="image/wedphoto.jpg" alt="cupals" width="400" height="600">
                        <div class="content">
                            <h3> Wedding Photography</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, pariatur!</p>
                            <a href="portfolio.php" class="btn">about us</a>
                        </div>
                    </div>

                    <div class="swiper-slide slide">
                        <img src="image/Registory.jpg" alt="" width="350" height="400">
                        <div class="content">
                            <h3>Wedding Registory</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, pariatur!</p>
                            <a href="about.php" class="btn">about us</a>
                        </div>
                    </div>


                    <div class="swiper-slide slide">
                        <img src="image/Guest.jpg" alt="" width="350" height="350">
                        <div class="content">
                            <h3>Guest List</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, pariatur!</p>
                            <a href="about.php" class="btn">about us</a>
                        </div>
                    </div>


                    <div class="swiper-slide slide">
                        <img src="image/mainCake.jpg" alt="" width="350" height="350">
                        <div class="content">
                            <h3>Wedding Cake</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, pariatur!</p>
                            <a href="about.php" class="btn">about us</a>
                        </div>
                    </div>


                    <div class="swiper-slide slide">
                        <img src="image/Ceremony.jpg" alt="" width="350" height="350">
                        <div class="content">
                            <h3>Wedding Ceremony</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, pariatur!</p>
                            <a href="about.php" class="btn">about us</a>
                        </div>
                    </div>


                    <div class="swiper-slide slide">
                        <img src="image/Fine Dining.jpg" alt="" width="350" height="350">
                        <div class="content">
                            <h3>Fine Dining</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, pariatur!</p>
                            <a href="about.php" class="btn">about us</a>
                        </div>
                    </div>


                </div>

                <div class="swiper-pagination"></div>

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