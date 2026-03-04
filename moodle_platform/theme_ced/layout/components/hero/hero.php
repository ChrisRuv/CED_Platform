<?php require_once(__DIR__ . '/styles.php'); ?>
<!-- Hero Section -->
<section id="inicio" class="<?php echo $STYLES['section']; ?>">
    <div class="<?php echo $STYLES['bg_svg']; ?>">
        <img src="<?php echo htmlspecialchars($OUTPUT->image_url('branding/blob-decoration', 'theme_ced'), ENT_QUOTES, 'UTF-8'); ?>"
            alt="" aria-hidden="true" class="w-full h-full text-ced-blue opacity-100">
    </div>
    <div class="<?php echo $STYLES['container']; ?>">
        <div class="<?php echo $STYLES['grid']; ?>">
            <div class="<?php echo $STYLES['content']; ?>">
                <h1 class="<?php echo $STYLES['title']; ?>">
                    <?php echo $SITE->hero->title_line1; ?> <br>
                    <span class="<?php echo $STYLES['accent_text']; ?>"><?php echo $SITE->hero->title_line2; ?></span>
                </h1>
                <p class="<?php echo $STYLES['description']; ?>">
                    <?php echo htmlspecialchars($SITE->hero->description, ENT_QUOTES, 'UTF-8'); ?>
                </p>
                <div class="<?php echo $STYLES['buttons']; ?>">
                    <a href="<?php echo $SITE->hero->cta_primary['href']; ?>"
                        class="<?php echo $STYLES['btn_primary']; ?>">
                        <?php echo $SITE->hero->cta_primary['label']; ?>
                    </a>
                    <a href="<?php echo $SITE->hero->cta_secondary['href']; ?>"
                        class="<?php echo $STYLES['btn_secondary']; ?>">
                        <?php echo $SITE->hero->cta_secondary['label']; ?>
                    </a>
                </div>
            </div>
            <div class="<?php echo $STYLES['img_wrap']; ?>">
                <div class="<?php echo $STYLES['img_glow']; ?>"></div>
                <img src="<?php echo htmlspecialchars($SITE->hero->image, ENT_QUOTES, 'UTF-8'); ?>"
                    alt="Estudiante <?php echo $SITE->name; ?>" class="<?php echo $STYLES['img']; ?>">
            </div>
        </div>
    </div>
</section>