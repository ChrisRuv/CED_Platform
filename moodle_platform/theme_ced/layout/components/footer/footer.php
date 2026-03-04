<?php require_once(__DIR__ . '/styles.php'); ?>
<!-- Footer -->
<footer class="<?php echo $STYLES['footer']; ?>">
    <div class="<?php echo $STYLES['container']; ?>">
        <div class="<?php echo $STYLES['grid']; ?>">
            <div class="<?php echo $STYLES['brand_col']; ?>">
                <span class="<?php echo $STYLES['brand_name']; ?>">COLEGIO <span
                        class="<?php echo $STYLES['brand_accent']; ?>">CED</span></span>
                <p class="<?php echo $STYLES['brand_desc']; ?>">
                    <?php echo htmlspecialchars($SITE->tagline, ENT_QUOTES, 'UTF-8'); ?>. Transformamos la experiencia
                    educativa para atletas, artistas y talentos sobresalientes.
                </p>
            </div>
            <div>
                <h4 class="<?php echo $STYLES['col_title']; ?>">Enlaces Rápidos</h4>
                <ul class="<?php echo $STYLES['link_list']; ?>">
                    <?php foreach (array_slice($NAVIGATION, 0, 4) as $nav): ?>
                        <li><a href="#<?php echo $nav['id']; ?>"
                                class="<?php echo $STYLES['link']; ?>"><?php echo $nav['label']; ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div>
                <h4 class="<?php echo $STYLES['col_title']; ?>">Contacto</h4>
                <ul class="<?php echo $STYLES['link_list']; ?>">
                    <li><?php echo htmlspecialchars($SITE->email, ENT_QUOTES, 'UTF-8'); ?></li>
                    <li><?php echo htmlspecialchars($SITE->phone, ENT_QUOTES, 'UTF-8'); ?></li>
                    <li><?php echo htmlspecialchars($SITE->location, ENT_QUOTES, 'UTF-8'); ?></li>
                </ul>
            </div>
        </div>
        <div class="<?php echo $STYLES['bottom']; ?>">
            &copy; <?php echo $SITE->year; ?> <?php echo htmlspecialchars($SITE->name, ENT_QUOTES, 'UTF-8'); ?>. Todos
            los derechos reservados.
        </div>
    </div>
</footer>