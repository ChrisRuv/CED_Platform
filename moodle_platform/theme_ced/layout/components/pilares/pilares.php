<?php require_once(__DIR__ . '/styles.php'); ?>
<!-- Pillars -->
<section id="pilares" class="<?php echo $STYLES['section']; ?>">
    <div class="<?php echo $STYLES['container']; ?>">
        <div class="<?php echo $STYLES['header']; ?>">
            <span class="<?php echo $STYLES['label']; ?>">Nuestros Pilares</span>
            <h2 class="<?php echo $STYLES['title']; ?>">Excelencia y Libertad</h2>
        </div>
        <div class="<?php echo $STYLES['grid']; ?>">
            <?php foreach ($SITE->pilares as $pilar): ?>
                <div class="<?php echo $STYLES['card']; ?>">
                    <div class="<?php echo $STYLES['card_icon']; ?>"><?php echo $pilar['icon']; ?></div>
                    <h3 class="<?php echo $STYLES['card_title']; ?>"><?php echo $pilar['title']; ?></h3>
                    <p class="<?php echo $STYLES['card_text']; ?>"><?php echo $pilar['description']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- Image Break -->
<section class="<?php echo $STYLES['break_section']; ?>">
    <div class="<?php echo $STYLES['container']; ?>">
        <div class="<?php echo $STYLES['break_wrap']; ?>">
            <img src="<?php echo htmlspecialchars($SITE->pilares_image, ENT_QUOTES, 'UTF-8'); ?>"
                alt="Deporte y Educación" class="<?php echo $STYLES['break_img']; ?>">
        </div>
    </div>
</section>