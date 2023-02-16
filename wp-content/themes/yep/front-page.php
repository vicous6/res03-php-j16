<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <?php wp_head(); ?>  
        <meta content="<?php echo get_bloginfo( 'name' );?>" name="title">  
        <meta content="<?php echo get_bloginfo( 'description' );?>" name="description">  
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  
        <link rel="preconnect" href="https://fonts.googleapis.com">  
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>  
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />  
<title><?php echo get_bloginfo( 'name' );?></title>
    </head>
    <body>
        <?php wp_footer(); ?>

        <nav>
            <h2 class="sr-only"></h2>
            <figure>
                <img src= "">
            </figure>
            <ul>
                <li>Acceuil</li>
                <li>A Propos</li>
                <li>Mes Projets</li>
                <li>Me Contacter</li>      
            </ul>

        </nav>
        <section>
            <h1>YEPFOLIO</h1>
            <h2>DEVELOPPEMENT WEB & MOBILE</h2>
        </section>
        <section>
            <h2>YEPFOLIO EN QUELQUES MOTS</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero harum nulla nesciunt unde magnam vitae aperiam sequi obcaecati, fuga maxime debitis veniam tempore doloremque ullam? Dolore ratione iusto ut quasi?</p>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. </p>

        </section>

        <section>
            <h2>MES DERNIERS PROJET</h2>
            <ul>
                <li>
                    <article>
                        <h3>APPLICATION SANTE</h3>
                        <h4>Pharmacie De Maurepas</h4>
                    </article>
                </li>
                <li>
                    <article>
                        <h3>SITE E-COMMERCE</h3>
                        <h4>Librairie L'écume des jours</h4>
                    </article>
                </li>
                <li>
                    <article>
                        <h3>SITE VITRINE</h3>
                        <h4>Boulangerie Galtier</h4>
                    </article>
                </li>
                <li>
                    <article>
                        <h3>SITE INSTITUTIONNEL</h3>
                        <h4>Mairie de Ploutruc</h4>
                    </article>
                </li>
                <li>
                    <article>
                        <h3>SITE PROMOTIONNEL</h3>
                        <h4>Festival des choses</h4>
                    </article>
                </li>
            </ul>
        </section>

        <section>
            <form>
                <fieldset>
                    <label>Prenom+Nom*</label>
                    <input name = "prenomNom"></input>
                </fieldset>
                <fieldset>
                    <label>Email*</label>
                    <input name = "email"></input>
                </fieldset>
                <fieldset>
                    <label>Message</label>
                    <input type = "text"  name = "message"></input>
                </fieldset>
                <button type = "submit">ENVOYER</button>

            </form>
        </section>



    </body>
</html>