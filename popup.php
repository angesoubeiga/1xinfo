<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="popup.css">
    <title>Document</title>
</head>

<body>
    <div class="popup">
        <div class="contentBox">
            <div class="close">
                <img src="close1.png" alt="">

            </div>

            <div class="imgBox">
                <img src="img2.jpg" alt="">
            </div>
            <div class="content">
                <div class="cont">
                    <h3>Promo Bonus</h3>
                    <h2>200<sup>%</sup> <span>Bonus</span> </h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In fuga modi, aperiam dolores eaque maiores doloribus maxime placeat suscipit molestiae, quasi
                    </p>
                    <a href="">Reclamer</a>
                </div>
            </div>
        </div>
    </div>
    <!--Automatic popup-->
    <script>
        const popup = document.querySelector('.popup');
        //varriable pour le click retour ou fermeture
        const close = document.querySelector('.close');
        window.onload = function() {
                setTimeout(function() {
                    popup.style.display = 'block';
                    //temps d'appirition du popup
                }, 2000)
            }
            //fonction cliquer fermer
        close.addEventListener('click', () => {
            popup.style.display = "none";
        })
    </script>
</body>

</html>