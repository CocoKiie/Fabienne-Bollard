    <footer>
        <div>
            <?php
            $logo = get_field('logo', 'option');
            $portrait = get_field('portrait', 'option');
            ?>

            <img src="<?php echo ($portrait["sizes"]["medium_large"]); ?>" alt="portrait de Fabienne Bollard" loading="lazy">
            <div>
                <img src="<?php echo ($logo["sizes"]["medium_large"]); ?>" alt="logo de Fabienne Bollard" loading="lazy">
                <button onclick="location.href='<?php the_field('links_rdv', 'option'); ?>'"><i></i><?php the_field('button_contact', 'option'); ?></button>
                <ul>
                    <li><i></i><a title="Téléphoner à Fabienne Bollard" href="tel:0687800411">06 87 80 04 11</a></li>
                    <li><i></i><a title="Regarder la localisation du cabinet de Fabienne Bollard" href="https://goo.gl/maps/KojEJXZsCiJk8ePd6" target="_blank">464 Route des Près Rollier<br>Zone de Grand Epagny<br>74330 Sillingy</a></li>
                    <li><i></i><a title="Envoyer un mail à Fabienne Bollard" href="mailto:fabienne.bollard74@gmail.com">fabienne.bollard74@gmail.com</a></li>
                </ul>
            </div>
        </div>
        <div>
            <p><a title="Voir la page des légalités du site web" href="/legalite">Légalités</a> - <a title="Voir la page Plan du site" href="/sitemap.xml" target="_blank">Plan du site</a></p>
            <p>&copy; <?php echo (date(format: "Y")); ?> Fabienne Bollard.</p>
        </div>
    </footer>

    <?php wp_footer(); //Pour appeler le css ?>

    </body>

    </html>