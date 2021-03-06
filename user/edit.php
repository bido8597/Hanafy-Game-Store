<!doctype html>
<html>

<head>
    <title> HGS edit account</title>
    <script src="js/script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <link rel="stylesheet" href="../css/styles.css" type="text/css">
    <link rel="stylesheet" href="css/user.css" type="text/css">
    <link rel="stylesheet" href="css/edit.css" type="text/css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script>
        $(document).ready(function(e) {
            $(".header").load("/header.php");
            $(".footer").load("/footer.html");

        });
    </script>

</head>

<body>
    <div class="header">
    </div>
    <div id="content">
        <div id="wrapper">
            <div class="row">
                <div class="col-4 nav">
                    <div class="da">
                        <h3>My Account:</h3>
                    </div>
                    <ul class="user-list">
                        <li><a href="/user/dashboard.php">Dashboard</a></li>
                        <li><a href="/user/edit.php">Edit Profile</a></li>
                        <li><a href="/sell.php">Sell My Games</a></li>
                    </ul>
                </div>
                <div class="col-8">
                    <h3>Account Dashboard:</h3>
                    <hr>
                    <div class="row">
                        <div class="col user-box">
                            <h5><i class="fa fa-user"></i>Edit Profile:</h5>
                            <hr>
                            <form class="edit-form" name="profile" action="#" onsubmit="return validateForm();">
                                <div class="row">
                                    <label>First Name: *</label>
                                    <input name="fname" type="text" class="text-f" value="Abdelrhman">
                                </div>
                                <div class="row">
                                    <label>Last Name: *</label>
                                    <input name="lname" type="text" class="text-f" value="Zakaria">
                                </div>
                                <div class="row">
                                    <label>Gender: *</label>
                                    <select name="gender">
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>
                                <div class="row">
                                    <label>E-mail: *</label>
                                    <input name="email" type="email">
                                </div>
                                <div class="row">
                                    <label>Birth Date: *</label>
                                    <input name="bd" type="date">
                                </div>
                                <input class="btn-submit" name="submi" type="submit" value="Save">
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- footer -->
    <div class="footer"></div>
</body>



</html>
