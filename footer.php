    <footer>
        <div>
            <img src="../wp-content/themes/usmb/img/fabi_portrait_fun.png" alt="portrait de Fabienne Bollard" loading="lazy">
            <div>
                <img src="../wp-content/themes/usmb/img/logo_white.svg" alt="logo de Fabienne Bollard" loading="lazy">
                <button><i></i><?php the_field("rdv"); ?></button>
                <ul>
                    <li><i></i><a href="tel:0687800411">06.87.80.04.11</a></li>
                    <li><i></i><a href="https://goo.gl/maps/KojEJXZsCiJk8ePd6" target="_blank">464 Route des Près Rollier<br>Zone de Grand Epagny<br>74330 Sillingy</a></li>
                    <li><i></i><a href="mailto:fabienne.bollard74@gmail.com">fabienne.bollard74@gmail.com</a></li>
                </ul>
            </div>
        </div>
        <div>
            <p><a href="">Mentions légales</a> - <a href="">Politique de confidentialité</a> - <a href="">Plan du site</a></p>
            <p>&copy; <?php echo (date(format: "Y")); ?> Fabienne Bollard.</p>
        </div>
    </footer>
    <?php wp_footer(); //Pour appeler le css ?>
    </body>

    </html>