<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Mon Site' ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
</head>
<body>
    <header>
        <div class = "logo">SamaAnnuaire</div>
        <div>
            <i class="fa-solid fa-user"></i>
            <span>BD</span>
        </div>
    </header>

    <main>
        <nav>
            <div class="ajout">
                <a href="#">
                     <i class="fa-solid fa-circle-plus"></i>
                     <span>Ajouer client.</span>
                </a>                
            </div>
            <div class="ajout">
                <a href="#">
                    <i class="fa-solid fa-list"></i>
                    <span>Lister clients.</span>
                </a>                
            </div>

            <div class="ajout">
                <a href="#">
                     <i class="fa-solid fa-phone-volume"></i>
                     <span>Ajouer numero client.</span>
                </a>                
            </div>

            <div class="ajout">
                <a href="#">
                     <i class="fa-solid fa-list-ul"></i>
                     <span>Lister Numero client.</span>
                </a>
                
                <div class="sous_menu">
                    <a href="#">Filtrer les numéros ParClient.</a>
                    <a href="#">Filtrer Par Opérateur</a>
                </div>
            </div>

            <div class="ajout">
                <a href="#">
                     <i class="fa-solid fa-chart-simple"></i>
                     <span>Statistiques.</span>
                </a>                
            </div>
        </nav>

        <div class="conteneur">

        </div>
    </main>
</body>
</html>