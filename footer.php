    <footer>
        <div>
            <?php
            $logo = get_field('logo', 'option');
            $portrait = get_field('portrait', 'option');
            ?>

            <img src="<?php echo ($portrait["sizes"]["medium_large"]); ?>" alt="portrait de Fabienne Bollard" loading="lazy">
            <div>
                <img src="<?php echo ($logo["sizes"]["medium_large"]); ?>" alt="logo de Fabienne Bollard" loading="lazy">
                <button onclick="<?php the_field('links_rdv', 'option'); ?>"><i></i><?php the_field('button_contact', 'option'); ?></button>
                <ul>
                    <li><i></i><a href="tel:0687800411">06 87 80 04 11</a></li>
                    <li><i></i><a href="https://goo.gl/maps/KojEJXZsCiJk8ePd6" target="_blank">464 Route des Près Rollier<br>Zone de Grand Epagny<br>74330 Sillingy</a></li>
                    <li><i></i><a href="mailto:fabienne.bollard74@gmail.com">fabienne.bollard74@gmail.com</a></li>
                </ul>
            </div>
        </div>
        <div>
            <p><a href="">Mentions légales</a> - <a href="">Plan du site</a></p>
            <p>&copy; <?php echo (date(format: "Y")); ?> Fabienne Bollard.</p>
        </div>
    </footer>

    <?php wp_footer(); //Pour appeler le css ?>

    </body>

    </html>