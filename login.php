<!doctype html>
<html>


<head>
    <title>login-Hanafy Game Store </title>
    <link rel="stylesheet" href="css/styles.css" type="text/css">
    <script src="js/valid.js"></script>
    <link rel="stylesheet" href="css/login-sginup.css" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script>
        $(document).ready(function(e) {
            $(".header").load("header.php");
            $(".footer").load("footer.html");

        });

    </script>
</head>

<body>
    <div class="header"></div>

    <div class="main">
        <div class="row">
            <div class="col-lg-6 ">
                <a href="#" class="button facebook"><i class="fa fa-facebook padding-logo"></i>Login with Facebook</a>
            </div>
            <div class="col-lg-6 ">
                <a href="#" class="button twitter"><i class="fa fa-twitter padding-logo"></i>Login with Twitter</a>
            </div>
        </div>

        <h2>Or Login with</h2>

        <h6 style="color:red; display:true">
            <?php if(isset($_GET['error']))
            echo 'Incorrect Email or Password';?>
        </h6>
        Email
        <form name="signin" action="checkuser.php" method="post" onsubmit="return validatein()">
            <div class="lable-2">


                <input type="text" class="text" value="your@email.com " name="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'your@email.com ';}"> password
                <input type="password" class="text" value="Password " name="pass" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password ';}">

            </div>

            <h2> hey,no&nbsp;account yet?<a href="signup.php"> create one</a></h2>

            <div class="submit">
                <input type="submit" name="submit" onclick="" value="Login">
            </div>
            <div class="clear"> </div>
        </form>
        <br><br>
    </div>


    <div class="footer"></div>
</body>



</html>
