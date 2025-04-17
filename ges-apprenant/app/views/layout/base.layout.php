<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">

</head>
<body class = "body_layout">
         <section class = "dashbord">
            <div class = "image_layout">
                <img src="assets/images/sonatel-image.jpeg" alt="" s>
            </div>
            <div class = "promo">
                Promo 2025
            </div>
            <div class = "barre_bottom"></div>
            <div class ="menu_barre">
                <div class = "menu home">
                    <i class='bx bx-home-circle' style='color:#ff7700'  ></i>
                    <a href=""><span>Tableau de bord</span></a>
                </div>
                <div class = "menu prom">
                    <i class='bx bxs-folder' style='color:#ff7700'  ></i>
                    <a href=""><span>Promotions</span></a>
                </div>
                <div class = "menu ref">
                    <i class='bx bxs-food-menu' style='color:#ff7700' ></i>
                    <a href=""><span>Referentiels</span></a>

                </div>
                <div class = "menu home">
                    <i class='bx bxs-user' style='color:#ff7700' ></i>
                    <a href=""><span>Apprenants</span></a>

                </div>
                <div class = "menu notif">
                    <i class='bx bxs-notification' style='color:#ff7700' ></i>
                    <a href=""><span>Gestions des Apprenants</span></a>

                </div>
                 <div class = "menu laptop">
                    <i class='bx bx-laptop' style='color:#ff7700' ></i>
                    <a href=""><span>Kits et laptops</span></a>

                </div>
                <div class = "menu stat">
                    <i class='bx bx-stats' style='color:#ff7700' ></i>
                    <a href=""><span>Rapports  et stats</span></a>

                </div>
                <div class = "deconnexion">
                    <i class='bx bx-log-in' style='color:#ff7700'  ></i>
                    <a href=""><span>Deconnexion</span></a>
                </div>
            </div>
         </section>
         <div class = " variable_layout">
               <header class = "header_layout">
                    <div class = "recherche">
                    <input type="text" placeholder = "rechercher" class = "searche">
                    </div>
                    <div class ="informations_login">
                        <i class='bx bx-bell' ></i>
                        <div> <?php $content_info_admin ?? '' ?> </div>
                    </div>
               </header>
               <main> <?php $content_page ?? '' ?> </main>
         </div>

</body> 
</html>



