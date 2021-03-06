
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

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="fonts/font-awesome.min.css">
    <link rel="stylesheet" href="../styled.css">
    
</head>


<body>

    
    <?php include 'header.php'?>
    <?php include 'dashboard.php'?>
    <?php include 'footer.php'?>
  
    <script src="script.js"></script>
    <script src="scrollscript.js">  
    </script>

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

     <script>

        document.addEventListener("DOMContentLoaded", () => {
            const recentImageDataUrl = localStorage.getItem("recent-image");

            if(recentImageDataUrl) {
                document.querySelector(".imgPreview").setAttribute("src", recentImageDataUrl);
                document.querySelector(".imgPreview3").setAttribute("src", recentImageDataUrl);
            }
        });
    </script>
    

   
</body>

</html>