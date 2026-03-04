<?php require_once(__DIR__ . '/styles.php'); ?>
<!-- Hero Section -->
<section id="inicio" class="<?php echo $STYLES['section']; ?>">
    <div class="<?php echo $STYLES['bg_svg']; ?>">
        <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="w-full h-full text-ced-blue fill-current">
            <path
                d="M44.7,-76.4C58.9,-69.2,71.8,-59.1,81.6,-46.6C91.4,-34.1,98.1,-19.2,95.8,-5.3C93.5,8.6,82.2,21.5,70.6,31.2C59,40.9,47.1,47.4,35.6,52.8C24.1,58.2,13,62.5,0.5,61.9C-12,61.3,-25.9,55.8,-38.2,48.6C-50.5,41.4,-61.2,32.5,-69.4,21.2C-77.6,9.9,-83.3,-3.8,-82.1,-16.6C-80.9,-29.4,-72.8,-41.3,-62.4,-50.8C-52,-60.3,-39.3,-67.4,-26.6,-73.8C-13.9,-80.2,-1.2,-85.9,12.3,-85.2C25.8,-84.5,40.5,-77.4,44.7,-76.4Z"
                transform="translate(100 100)" />
        </svg>
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