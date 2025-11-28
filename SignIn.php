<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In Page</title>

    <!-- custom css file link -->
      <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container-sig">
    <?php @include 'header.php'; ?>

    <section class="contact">
        <h1>Sign In</h1>


        <form method="POST" action="">

            <div class="flex">

                <div class="inbox">
                    <span>Full Name:</span>
                    <input type="text" placeholder="enter your name" name="name" required>
                </div>

                <div class="inbox">
                    <span>Your Email</span>
                    <input type="email" placeholder="enter your email" name="email" required>
                </div>

                <div class="inbox">
                    <span>Phone Number:</span>
                    <input type="phone" placeholder="enter your number" name="phone" required>
                </div>

                <div class="inbox">
                    <span>Password:</span>
                    <input type="password" placeholder="enter your password" name="password" required>
                </div>

                <div class="inbox">
                    <span>Gender:</span>
                    <input type="radio" name="gender" value="Male" required> Male
                    <input type="radio" name="gender" value="Female" required> Female
                    <input type="radio" name="gender" value="Other" required> Other
                </div>

    
                <div class="inbox">
                    <input type="Submit" value="Sign In" name="send" class="btn">

                </div>
                

            </div>

        </form>
    
    </section>

</div>
    
</body>
</html>