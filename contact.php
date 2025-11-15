

<!-- $conn= mysqli_connect('localhost','root','','ashu_db');

    if(isset($_POST['send'])){

        $name = $_POST['name'];
        $email = $_POST['email'];
        $number = $_POST['number'];
        $plan = $_POST['plan'];
        $address = $_POST['address'];
        $message = $_POST['message'];

        $insert = "INSERT INTO `ashu_form`(`name`, `email`, `number`, `plan`, `address`, `message`) 
        VALUES ('$name','$email','$number','$plan','$address','$message')";

        mysqli_query($conn, $insert);

        header('location:contact.php');


    } -->




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>

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

        <section class="contact">
            <h1 class="heading">Contact</h1>

            <form action="" method="post">
                <div class="flex">
                    <div class="inputBox">
                        <span>your name</span>
                        <input type="text" placeholder="enter your name" name="name" required>
                    </div>


                    <div class="inputBox">
                        <span>your email</span>
                        <input type="email" placeholder="enter your email" name="email" required>
                    </div>


                    <div class="inputBox">
                        <span>your number</span>
                        <input type="number" placeholder="enter your number" name="number" required>
                    </div>


                    <div class="inputBox">
                        <span>Choose Plan</span>
                        <select name="plan">
                            <option value="basic">Basic Plan</option>
                            <option value="premium">Premium Plan</option>
                            <option value="ultimate">Ultimate Plan</option>
                        </select>
                    </div>


                    <div class="inputBox">
                        <span>your address</span>
                        <textarea name="address" placeholder="enter your address" required cols="30" rows="10"></textarea>
                    </div>


                    <div class="inputBox">
                        <span>your message</span>
                        <textarea name="message" placeholder="enter your message" required cols="30" rows="10"></textarea>
                    </div>
                </div>

                <input type="Submit" value="send message" name="send" class="btn">


            </form>
        </section>


        <?php @include 'footer.php'; ?>
    </div>












    <!-- swiper js link -->
     <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!-- custom js file link -->
     <script src="script.js"></script>


</body>
</html>