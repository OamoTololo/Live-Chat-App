<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/all.min.css">
    <title>Sosha chat App</title>

    <script src="https://kit.fontawesome.com/590e8175ae.js" crossorigin="anonymous"></script>

</head>

<body>
    <div class="wrapper">
        <section class="form signup">
            <header>Sosha Chat App</header>
            <form action="#">
                <div class="error-text">This is an error message!</div>
                <div class="name-details">
                    <div class="field input">
                        <label>First Name</label>
                        <input type="text" placeholder="First Name">
                    </div>
                    <div class="field input">
                        <label>Last Name</label>
                        <input type="text" placeholder="Last Name">
                    </div>
                </div>
                <div class="field input">
                    <label>Email Address</label>
                    <input type="text" placeholder="Enter your email.">
                </div>
                <div class="field input">
                    <label>Password</label>
                    <input type="password" placeholder="Enter new Password">
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field image">
                    <label>Select Image</label>
                    <input type="file">
                </div>
                <div class="field button">
                    <input type="submit" value="Register">
                </div>
            </form>
            <div class="link">Already signed up? <a href="#">Login here</a></div>
        </section>
    </div>

    <script src="js/pass-show-hide.js"></script>
</body>

</html>