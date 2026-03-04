<?php require_once(__DIR__ . '/styles.php'); ?>
<!-- Atletas Section -->
<section id="atletas" class="<?php echo $STYLES['section']; ?>">
    <div class="<?php echo $STYLES['container']; ?>">
        <div class="<?php echo $STYLES['header']; ?>">
            <span class="<?php echo $STYLES['label']; ?>">Nuestros Campeones</span>
            <h2 class="<?php echo $STYLES['title']; ?>">Atletas Destacados</h2>
            <div class="<?php echo $STYLES['divider']; ?>"></div>
        </div>

        <div class="<?php echo $STYLES['grid']; ?>">
            <?php foreach ($SITE->atletas as $atleta): ?>
            <div class="<?php echo $STYLES['card']; ?>">
                <img src="<?php echo htmlspecialchars($atleta['image'], ENT_QUOTES, 'UTF-8'); ?>" alt="Atleta"
                    class="<?php echo $STYLES['card_image']; ?>">
                <div class="<?php echo $STYLES['card_overlay']; ?>">
                    <h3 class="<?php echo $STYLES['card_name']; ?>"><?php echo htmlspecialchars($atleta['name'], ENT_QUOTES, 'UTF-8'); ?></h3>
                    <p class="<?php echo $STYLES['card_sport']; ?>"><?php echo htmlspecialchars($atleta['sport'], ENT_QUOTES, 'UTF-8'); ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>