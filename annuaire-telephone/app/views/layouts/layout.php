   <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> <?= $title ?? "Annuaire"?></title>
        <link rel="stylesheet" href="assets/css/style.css">
        <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">

    </head>
    <body>

        <?php require_once 'header.html.php'?>

        <main>

            <section>

                <div class ="actions">
                    <i class='bx bxs-file-plus' style='color:#ffffff' ></i>
                    <a href=""><h3>Ajouter client</h3></a>
                </div>
                <div class ="actions">
                    <i class='bx bx-list-ul' style='color:#ffffff' ></i>
                    <a href=""><h3>Lister les clients</h3></a>
                </div>
                <div class ="actions">
                    <i class='bx bx-phone-call' style='color:#ffffff' ></i>
                    <a href=""><h3>Ajouter Numero client</h3></a>
                </div>
                <div class = "action">
                    <div class = "action_menu">
                       <i class='bx bx-list-ol' style='color:#ffffff' ></i>
                       <a href=""><h3>Lister Numero client</h3></a>
                    </div>
                  
                    <div class ="action_sous_menu">
                         <div class = "action_filtrer_client">
                             <a href =""><p>filtrer par numero client</p></a>
                         </div>

                         <div class = "action_filtrer_numero">
                            <a href=""><p>filtrer par numero operateur</p></a>
                         </div>
                    </div>
                </div>
                <div class = "action">
                        <div class = "action_menu">
                            <i class='bx bx-stats' style='color:#ffffff' ></i>
                            <a href=""><h3>Lister les clients</h3></a>
                        </div>

                        <div class ="action_sous_menu">
                            <div class = "action_filtrer_client">
                                <a href =""><p>Le client qui a plus numero</p></a>
                            </div>

                            <div class = "action_filtrer_numero">
                                <a href=""><p>l'operateur qui a plus de numero</p></a>
                        </div>
                    </div>
                </div>
                <div class = "actions">
                    <i class='bx bxs-log-out' style='color:#ffffff'  ></i>
                    <a href=""><h3>Deconnexion</h3></a>
                </div>
              
            </section>

            <?php $content ?? '' ?>
         
        </main>

           
    </body>
    </html>
