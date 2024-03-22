<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="wrapper">
        <section class="form signup">
            <header style="text-align: center;">Sign in to V-park chat</header>
            <form action="#" enctype="multipart/form-data">
                <div class="error-text">This is an error message!</div>
                <div class="name-details">
                    <div class="field input">
                        <label for="">First name</label>
                        <input type="text" name="fname" placeholder="First name" required>
                    </div>
                    <div class="field input">
                        <label for="">Last name</label>
                        <input type="text" name="lname" placeholder="Last name" required>
                    </div>
                    <div class="field input">
                        <label for="">Email Address</label>
                        <input type="text" name="email" placeholder="Enter your email Address" required>
                    </div>
                    <div class="field input">
                        <label>Password</label>
                        <input type="password" name="password" placeholder="Password" required>
                        <i class="fas fa-eye"><img src="eye.png" alt=""></i>
                    </div>
                    <div class="field image">
                        <label for="">select image</label>
                        <input type="file" name="image" required>
                    </div>
                    <div class="field button">
                        <input type="submit" value="Continue to chat">
                    </div>
                </div>
            </form>
            <div class="link">Already signed up?<a href="#">login now</a></div>
        </section>
    </div>

    <script src="javascript/pass-show-hide.js"></script>
     <script src="javascript/signup.js"></script>

</body>
</html>