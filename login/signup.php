<!DOCTYPE html>
<html>

<head>
    <title>Creative Colorlib SignUp Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Custom Theme files -->
    <link rel="stylesheet" type="text/css" href="resigter.css">
    <!-- //Custom Theme files -->
    <!-- web font -->
    <link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
    <!-- //web font -->
</head>

<body>
    <!-- main -->
    <div class="main-w3layouts wrapper">
        <h1>Creative SignUp Form</h1>
        <div class="main-agileinfo">
            <div class="agileits-top">
                <form action="resigter.php" method="post" novalidate>
                    <input class="text" type="text" name="fullname" placeholder="Full name" required="" required pattern="[a-zA-Z0-9]{3,}(\s?\w+)*"> <br>
                    <input class="text" type="text" name="username" placeholder="Username" required="">
                    <div>
                        <input class="text email" type="email" name="email" placeholder="Email" required="" required pattern="\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})">
                        <div class="valid-feedback">Nhập Đúng!!</div>
                        <div class="invalid-feedback">Viết sai email</div>
                    </div>

                    <input class="text" type="password" name="password" placeholder="Password" required="" required pattern=".{10,}">
                    <input class="text w3lpass" type="password" name="repassword" placeholder="Confirm Password" required="">
                    <div class="wthree-text">
                        <label class="anim">
                            <input type="checkbox" class="checkbox" required="">
                            <span>I Agree To The Terms & Conditions</span>
                        </label>
                        <div class="clear"> </div>
                    </div>
                    <input type="submit" value="SIGNUP" name="submit">
                </form>
                <p>Don't have an Account? <a href="index.php"> Login Now!</a></p>
            </div>
        </div>
        <!-- copyright -->
        <div class="colorlibcopy-agile">
            <p>© 2018 Colorlib Signup Form. All rights reserved | Design by <a href="https://colorlib.com/" target="_blank">Colorlib</a></p>
        </div>
        <!-- //copyright -->
        <ul class="colorlib-bubbles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
    <!-- //main -->
    <script>
        const form = document.querySelector('form');
        form.onsubmit = (e) => {
            if (form.checkValidity() === false) {
                //Ngăn ko cho form được gửi đi
                e.preventDefault();
                e.stopPropagation()
            }
            form.classList.add('was-validated');
        };
    </script>
</body>

</html>