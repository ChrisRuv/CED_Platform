<?php require_once(__DIR__ . '/styles.php'); ?>
<!-- Philosophy & About -->
<section id="nosotros" class="<?php echo $STYLES['section']; ?>">
    <div class="<?php echo $STYLES['container']; ?>">
        <div class="<?php echo $STYLES['header']; ?>">
            <h2 class="<?php echo $STYLES['title']; ?>"><?php echo $SITE->nosotros->title; ?></h2>
            <div class="<?php echo $STYLES['divider']; ?>"></div>
            <p class="<?php echo $STYLES['subtitle']; ?>"><?php echo $SITE->nosotros->subtitle; ?></p>
        </div>
        <div class="<?php echo $STYLES['grid']; ?>">
            <div class="order-2 md:order-1">
                <img src="<?php echo htmlspecialchars($SITE->nosotros->image, ENT_QUOTES, 'UTF-8'); ?>"
                    alt="Filosofía Educativa" class="<?php echo $STYLES['image']; ?>">
            </div>
            <div class="<?php echo $STYLES['cards_wrap']; ?>">
                <?php foreach ($SITE->nosotros->cards as $card): ?>
                    <div class="<?php echo $STYLES['card'] . ' ' . $card['border']; ?>">
                        <h3 class="<?php echo $STYLES['card_title']; ?>"><?php echo $card['title']; ?></h3>
                        <p class="<?php echo $STYLES['card_text']; ?>"><?php echo $card['description']; ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<!-- Target Audience -->
<section class="<?php echo $STYLES['audience_section']; ?>">
    <div class="<?php echo $STYLES['container']; ?>">
        <div class="<?php echo $STYLES['header']; ?>">
            <h2 class="<?php echo $STYLES['audience_title']; ?>">Un Colegio Que Se Adapta A Ti</h2>
            <p class="<?php echo $STYLES['audience_desc']; ?>">Somos la institución de elección para quienes requieren
                un modelo educativo que respete y potencie su estilo de vida.</p>
        </div>
        <div class="<?php echo $STYLES['audience_grid']; ?>">
            <?php foreach ($SITE->nosotros->audience as $item): ?>
                <div class="<?php echo $STYLES['audience_card']; ?>">
                    <div class="<?php echo $STYLES['audience_icon']; ?>"><?php echo $item['icon']; ?></div>
                    <h3 class="<?php echo $STYLES['audience_name']; ?>"><?php echo $item['title']; ?></h3>
                    <p class="<?php echo $STYLES['audience_text']; ?>"><?php echo $item['description']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>