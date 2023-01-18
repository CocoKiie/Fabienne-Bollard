<?php
/*
    Template Name:Consultation
    */

//Chargement du header
get_header();

$image1 = get_field("image1");
$image2 = get_field("image2");
?>

<header class="consultation">
    <div class="cst_header">
        <div>
            <h1>Pourquoi consulter&nbsp;?</h1>
            <h2>La stimulation de vos <strong>réflexes archaïques</strong> permet de pallier <strong>divers blocages</strong></h2>
        </div>
        <div>
            <img src="<?php echo ($image1["sizes"]["medium_large"]); ?>" alt="<?php echo ($image1["alt"]) ?>" loading="lazy">
            <img src="<?php echo ($image2["sizes"]["medium_large"]); ?>" alt="<?php echo ($image2["alt"]) ?>" loading="lazy">
        </div>
    </div>
    <img src="../wp-content/themes/usmb/img/arrow.svg" alt="flèche vers le bas" loading="lazy">

    <!--cercle-->
    <div class="cercle1"></div>
    <div class="cercle2"></div>
    <div class="cercle3"></div>
</header>
<main>
    <!--SECTION 1 EMOTION-->
    <?php if (have_rows('blocages_emotion')) : ?>
        <section class="cst_section1" id="decouverte">
            <h2>Blocages émotionnels</h2>
            <div>
                <?php while (have_rows('blocages_emotion')) : the_row(); ?>
                    <article>
                        <h3><?php the_sub_field('question');
                            $image = get_sub_field('image'); ?></h3>
                        <img src="<?php echo $image['url']; ?>" alt="">
                        <div>
                            <p>Selectionnez votre profil</p>
                            <div>
                                <button onclick="document.getElementById('explications_adulte').style.display='block'; document.getElementById('fade').style.display='block'">Adulte</button>
                                <button onclick="document.getElementById('explications_enfant').style.display='block'; document.getElementById('fade').style.display='block'">Enfant</button>
                                <button onclick="document.getElementById('explications_baby').style.display='block'; document.getElementById('fade').style.display='block'">Bébé</button>
                            </div>
                            <div>
                    </article>
                <?php endwhile; ?>
            </div>
            <?php while (have_rows('blocages_emotion')) : the_row(); ?>
                <div class="explications">

                    <?php $image_adulte = get_sub_field('image_adultes'); ?>

                    <!--Explications adulte-->
                    <div id="explications_adulte" class="white_content">
                        <h3><?php the_sub_field('question'); ?>
                        </h3>
                        <img src="<?php echo $image_adulte['url']; ?>" alt="">
                        <p><?php the_sub_field('explications_adultes'); ?></p>
                        <a href="javascript:void(0)" onclick="document.getElementById('explications_adulte').style.display='none';document.getElementById('fade').style.display='none'"><i></i>Retour</a>
                    </div>

                    <?php $image_enfant = get_sub_field('image_enfant'); ?>
                    <!--Explications enfant-->
                    <div id="explications_enfant" class="white_content">
                        <h3><?php the_sub_field('question'); ?></h3>
                        <img src="<?php echo $image_enfant['url']; ?>" alt="">
                        <p><?php the_sub_field('explications_enfants'); ?></p>
                        <a href="javascript:void(0)" onclick="document.getElementById('explications_enfant').style.display='none';document.getElementById('fade').style.display='none'"><i></i>Retour</a>
                    </div>

                    <?php $image_baby = get_sub_field('image_baby'); ?>
                    <!--Explications bébé-->
                    <div id="explications_baby" class="white_content">
                        <h3><?php the_sub_field('question'); ?></h3>
                        <img src="<?php echo $image_baby['url']; ?>" alt="">
                        <p><?php the_sub_field('explications_baby'); ?></p>
                        <a href="javascript:void(0)" onclick="document.getElementById('explications_baby').style.display='none';document.getElementById('fade').style.display='none'"><i></i>Retour</a>
                    </div>

                    <div id="fade" class="black_overlay"></div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
        <!--FIN SECTION 1 EMOTION-->
        </section>

        <!--SECTION 2 MOTEURS ET POSTURAUX-->
        <?php if (have_rows('blocages_moteur')) : ?>
            <section class="cst_section1" id="decouverte">
                <h2>Blocages émotionnels</h2>
                <div>
                    <?php while (have_rows('blocages_moteur')) : the_row(); ?>
                        <article>
                            <h3><?php the_sub_field('question');
                                $image = get_sub_field('image'); ?></h3>
                            <img src="<?php echo $image['url']; ?>" alt="">
                            <div>
                                <p>Selectionnez votre profil</p>
                                <div>
                                    <button onclick="document.getElementById('explications_adulte').style.display='block'; document.getElementById('fade').style.display='block'">Adulte</button>
                                    <button onclick="document.getElementById('explications_enfant').style.display='block'; document.getElementById('fade').style.display='block'">Enfant</button>
                                    <button onclick="document.getElementById('explications_baby').style.display='block'; document.getElementById('fade').style.display='block'">Bébé</button>
                                </div>
                                <div>
                        </article>
                    <?php endwhile; ?>
                </div>
                <?php while (have_rows('blocages_moteur')) : the_row(); ?>
                    <div class="explications">

                        <?php $image_adulte = get_sub_field('image_adultes'); ?>

                        <!--Explications adulte-->
                        <div id="explications_adulte" class="white_content">
                            <h3><?php the_sub_field('question'); ?>
                            </h3>
                            <img src="<?php echo $image_adulte['url']; ?>" alt="">
                            <p><?php the_sub_field('explications_adultes'); ?></p>
                            <a href="javascript:void(0)" onclick="document.getElementById('explications_adulte').style.display='none';document.getElementById('fade').style.display='none'"><i></i>Retour</a>
                        </div>

                        <?php $image_enfant = get_sub_field('image_enfant'); ?>
                        <!--Explications enfant-->
                        <div id="explications_enfant" class="white_content">
                            <h3><?php the_sub_field('question'); ?></h3>
                            <img src="<?php echo $image_enfant['url']; ?>" alt="">
                            <p><?php the_sub_field('explications_enfants'); ?></p>
                            <a href="javascript:void(0)" onclick="document.getElementById('explications_enfant').style.display='none';document.getElementById('fade').style.display='none'"><i></i>Retour</a>
                        </div>

                        <?php $image_baby = get_sub_field('image_baby'); ?>
                        <!--Explications bébé-->
                        <div id="explications_baby" class="white_content">
                            <h3><?php the_sub_field('question'); ?></h3>
                            <img src="<?php echo $image_baby['url']; ?>" alt="">
                            <p><?php the_sub_field('explications_baby'); ?></p>
                            <a href="javascript:void(0)" onclick="document.getElementById('explications_baby').style.display='none';document.getElementById('fade').style.display='none'"><i></i>Retour</a>
                        </div>

                        <div id="fade" class="black_overlay"></div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
            <!--FIN SECTION 2 MOTEURS ET POSTURAUX-->
            </section>

            <!--SECTION 3 COGNITIF-->
            <?php if (have_rows('blocages_cognitif')) : ?>
                <section class="cst_section1" id="decouverte">
                    <h2>Blocages émotionnels</h2>
                    <div>
                        <?php while (have_rows('blocages_cognitif')) : the_row(); ?>
                            <article>
                                <h3><?php the_sub_field('question');
                                    $image = get_sub_field('image'); ?></h3>
                                <img src="<?php echo $image['url']; ?>" alt="">
                                <div>
                                    <p>Selectionnez votre profil</p>
                                    <div>
                                        <button onclick="document.getElementById('explications_adulte').style.display='block'; document.getElementById('fade').style.display='block'">Adulte</button>
                                        <button onclick="document.getElementById('explications_enfant').style.display='block'; document.getElementById('fade').style.display='block'">Enfant</button>
                                        <button onclick="document.getElementById('explications_baby').style.display='block'; document.getElementById('fade').style.display='block'">Bébé</button>
                                    </div>
                                    <div>
                            </article>
                        <?php endwhile; ?>
                    </div>
                    <?php while (have_rows('blocages_cognitif')) : the_row(); ?>
                        <div class="explications">

                            <?php $image_adulte = get_sub_field('image_adultes'); ?>

                            <!--Explications adulte-->
                            <div id="explications_adulte" class="white_content">
                                <h3><?php the_sub_field('question'); ?>
                                </h3>
                                <img src="<?php echo $image_adulte['url']; ?>" alt="">
                                <p><?php the_sub_field('explications_adultes'); ?></p>
                                <a href="javascript:void(0)" onclick="document.getElementById('explications_adulte').style.display='none';document.getElementById('fade').style.display='none'"><i></i>Retour</a>
                            </div>

                            <?php $image_enfant = get_sub_field('image_enfant'); ?>
                            <!--Explications enfant-->
                            <div id="explications_enfant" class="white_content">
                                <h3><?php the_sub_field('question'); ?></h3>
                                <img src="<?php echo $image_enfant['url']; ?>" alt="">
                                <p><?php the_sub_field('explications_enfants'); ?></p>
                                <a href="javascript:void(0)" onclick="document.getElementById('explications_enfant').style.display='none';document.getElementById('fade').style.display='none'"><i></i>Retour</a>
                            </div>

                            <?php $image_baby = get_sub_field('image_baby'); ?>
                            <!--Explications bébé-->
                            <div id="explications_baby" class="white_content">
                                <h3><?php the_sub_field('question'); ?></h3>
                                <img src="<?php echo $image_baby['url']; ?>" alt="">
                                <p><?php the_sub_field('explications_baby'); ?></p>
                                <a href="javascript:void(0)" onclick="document.getElementById('explications_baby').style.display='none';document.getElementById('fade').style.display='none'"><i></i>Retour</a>
                            </div>

                            <div id="fade" class="black_overlay"></div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
                </section>
                <aside>
                    <button aria-label="Voir plus d'informations sur les 3 méthodes pratiquées par Fabienne Bollard"><i></i><?php the_field("button_section_4"); ?></button>

                    <!--Soulignment-->
                    <span></span>

                </aside>
</main>

<?php
//Chargement du footer
get_footer();
?>