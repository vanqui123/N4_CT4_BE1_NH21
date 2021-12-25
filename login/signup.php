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
                <form action="resigter.php" method="post">
                    <input id="fullname" class="text" type="text" name="fullname" placeholder="Full name" required=""> <br>
                    <input id="username" class="text" type="text" name="username" placeholder="Username" required="">
                    <div>
                        <input id="email" class="text email" type="email" name="email" placeholder="Email" required="">
                    </div>
                    <input id="phone" class="text" type="text" name="phone" placeholder="Phone" required=""> <br>

                    <input id="password" class="text" type="password" name="password" placeholder="Password" required="">
                    <input id="repassword" class="text w3lpass" type="password" name="repassword" placeholder="Confirm Password" required="">
                    <div class="wthree-text">
                        <label class="anim">
                            <input type="checkbox" class="checkbox" required="">
                            <span>I Agree To The Terms & Conditions</span>
                        </label>
                        <div class="clear"> </div>
                    </div>
                    <input type="submit" value="SIGNUP" name="submit">
                </form>
                <p>You have an account? <a href="index.php"> Login Now!</a></p>
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
       <!-- <script>
        var username = document.querySelector('#username');
        var fullname = document.querySelector('#fullname');
        var email = document.querySelector('#email');
        var phone = document.querySelector('#phone');
        var repassword = document.querySelector('#repassword');
        var password = document.querySelector('#password');
        var form = document.querySelector('form');

        function showError(input, message) {
            let parent = intput.parentElement;
            let small = parent.querySelector('small')
            parent.classList.add('error')
            small.innerText = ' '
        }

        function showSuccess(input) {
            let parent = intput.parentElement;
            let small = parent.querySelector('small')
            parent.classList.remove('error')
            small.innerText = ' '
        }

        function checkEmail(input) {
            const regexEmail =
                /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
            intput.value = intput.value.strim()
            let isEmailError = !regexEmail.test(input.value)
            if (regexEmail.test(input.value)) {
                showSuccess(intput)
            } else showError(intput, 'Email Invalid')
            return isEmailError
        }

        function checkPhone(input) {
            const regexPhone =
                /^(\()?\d{3}(\))?(-|\s)?\d{3}(-|\s)\d{4}$/;
            intput.value = intput.value.strim()
            let isPhoneError = !regexPhone.test(input.value)
            if (regexPhone.test(input.value)) {
                showSuccess(intput)
            } else showError(intput, 'Phone Invalid')
            return isPhoneError
        }

        function checkFullname(input) {
            const regexFullname =
                /^([\w]{3,})+\s+([\w\s]{3,})+$/i;
            intput.value = intput.value.strim()
            let isFullnameError = !regexFullname.test(input.value)
            if (regexFullname.test(input.value)) {
                showSuccess(intput)
            } else showError(intput, 'Full Name Invalid')
            return isFullnameError
        }

        function checkLenght(intput, min, max) {
            intput.value = intput.value.strim()
            if (input.value.lenght < min) {
                showError(intput, `Phải có ít nhất ${min} kí tự!`)
                return true;
            }
            if (input.value.lenght > max) {
                showError(intput, `Không được quá ${max} kí tự!`)
                return true;
            }

            return false
        }

        function checkMatchPasswordError(password, repassword) {
            if (password.value !== repassword.value) {
                showError(repassword, 'Mật khẩu không trùng khớp!!')
                return true;
            }
            return false;
        }

        form.addEventListener('submit', function(e) {
            e.preventDefault()
            let isPhoneError = checkEmail(phone)
            let isFullnameError = checkEmail(fullname)
            let isPasswordError = checkLenght(password, 3, 15)
            let isUsernameError = checkLenght(username, 3, 15)
            let isMatchError = checkMatchPasswordError(password, repassword)
        })
    </script>  -->
    
</body>

</html>