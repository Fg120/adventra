<!DOCTYPE html>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Login |</title>
</head>

<body>
    <div class="wrapper">
        <div class="container main">
            <div class="row">

                <div class="col-md-6 side-image">
                    <!-------Image-------->
                    <div class="text">
                        <p>Belajar Code <i>- Raditya MN</i></p>
                    </div>
                </div>
                <div class="col-md-6 right">
                    <div class="input-box">
                        <header>Create account</header>
                        <div class="input-field">
                            <input type="text" class="input" id="email" required autocomplete="off">
                            <label for="email">Email</label>
                        </div>
                        <div class="input-field">
                            <input type="password" class="input" id="password" required>
                            <label for="password">Password</label>
                        </div>

                        <div class="input-field">
                            <input type="password" class="input" id="password" required>
                            <label for="password">Retype Password</label>
                        </div>

                        <div class="input-field">
                            <form action="/login" method="POST">
                                <input type="submit" class="submit" value="Sign Up">
                            </form>

                        </div>
                        <div class="signin">
                            <span>Already have an account? <a href="login">Log in here</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>