<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="public, max-age=300, s-maxage=600">
    <meta name="google-site-verification" content="B8PV6ghxu6KjVV0ny-1zjnRAbsB2XO5TjL8Fwd-h_u8" />
    <meta name="keywords" content="CampusWeekly, campusweekly, campus weekly, campus news, campus weekly news">
    <meta name="keywords"
        content="campus weekly lira university, lira, lira university, latest news, lukard, lukenge, campus news lira university">
    <title>Campus Weekly</title>
    
    <link rel="shortcut icon" href="images/campusweeklyfavicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="fonts/font-awesome.min.css">
    
    <style>
        nav {
        background-color: #563d7c;
        color: #fff;
        padding: 30px 60px;
        display: flex;
        justify-content: space-between;
        }

        nav ul {
        display: flex;
        justify-content: space-around;
        align-items: center;
        list-style: none;
        }

        nav li a {
        text-decoration: none;
        color: #fff;
        font-weight: bold;
        padding: 5px 8px;
        }

        nav li a:hover {
        color: yellow;
        text-decoration: none;
        }

    </style>
    <style>
        /* Coded with love by Mutiullah Samim */
        body,
        html {
        margin: 0;
        padding: 0;
        height: 100%;
        background: #60a3bc !important;
        }
        .user_card {
        height: 400px;
        width: 350px;
        margin-top: auto;
        margin-bottom: auto;
        background: #020138;
        position: relative;
        display: flex;
        justify-content: center;
        flex-direction: column;
        padding: 10px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        -webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2),
            0 6px 20px 0 rgba(0, 0, 0, 0.19);
        -moz-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2),
            0 6px 20px 0 rgba(0, 0, 0, 0.19);
        border-radius: 5px;
        }
        .brand_logo_container {
        position: absolute;
        height: 170px;
        width: 170px;
        top: -75px;
        border-radius: 50%;
        background: #60a3bc;
        padding: 10px;
        text-align: center;
        }
        .brand_logo {
        height: 150px;
        width: 150px;
        border-radius: 50%;
        border: 2px solid white;
        }
        .form_container {
        margin-top: 100px;
        }
        .login_btn {
        width: 100%;
        background: #0761e7 !important;
        color: white !important;
        }
        .login_btn:focus {
        box-shadow: none !important;
        outline: 0px !important;
        }
        .login_container {
        padding: 0 2rem;
        }
        .input-group-text {
        background: #0761e7 !important;
        color: white !important;
        border: 0 !important;
        border-radius: 0.25rem 0 0 0.25rem !important;
        }
        .input_user,
        .input_pass:focus {
        box-shadow: none !important;
        outline: 0px !important;
        }
        .custom-checkbox .custom-control-input:checked ~ .custom-control-label::before {
        background-color: #0761e7 !important;
        }

    </style>
</head>
<body>
   <nav class="navbar">
        <div class="container-fluid align-items-center">
            <h6 >                               
                <a href="../index" style="color: rgb(166, 166, 202); text-decoration: none;">CampusWeekly</a>        
            </h6>
            <div>
                <ul>
                    <li><a href="login">Login</a></li>
                    <li><a href="register">SignUp</a></li>
                </ul>
            </div>
        </div>
    </nav>
    

        <?php include 'registerInterface.php'?>
    
    <nav style="padding: 60px;" >
        
    </nav>

    

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    
    <!--Sharing Script-->
    <script>
        const title = window.document.title;
        function captureShareLink(link) {
            console.log(title);
            console.log(link);
            if (navigator.share) {
                navigator.share({
                    title: `${title}`,
                    url: `/story/?id=${link}`
                }).then(() => {
                    console.log("Thanks for sharing");
                })
                .catch(console.error);
            } else {
                console.log("not working");
            }
        }  
    </script>
</body>
</html>