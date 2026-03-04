<?php require_once(__DIR__ . '/styles.php'); ?>
<!-- Folded Corner Platform Button -->
<div class="<?php echo $STYLES['ribbon_wrap']; ?>" onclick="<?php echo $ACTIONS['login_trigger']; ?>">
    <div class="<?php echo $STYLES['ribbon_triangle']; ?>"></div>
    <div class="<?php echo $STYLES['ribbon_text']; ?>">PLATAFORMA</div>
</div>

<style>
    .corner-ribbon-triangle {
        width: 0;
        height: 0;
        border-style: solid;
        border-width: 0 clamp(120px, 14vw, 160px) clamp(120px, 14vw, 160px) 0;
        border-color: transparent
            <?php echo $SITE->brand->ribbon; ?>
            transparent transparent;
    }

    .group:hover .corner-ribbon-triangle {
        border-width: 0 clamp(130px, 15vw, 170px) clamp(130px, 15vw, 170px) 0;
        border-right-color:
            <?php echo $SITE->brand->accent; ?>
        ;
    }

    .corner-ribbon-text {
        position: absolute;
        top: clamp(30px, 4vw, 45px);
        right: clamp(-35px, -3vw, -25px);
        width: clamp(140px, 16vw, 180px);
        text-align: center;
        font-weight: 800;
        color: white;
        font-size: clamp(0.5rem, 0.75vw, 0.7rem);
        letter-spacing: 3px;
        transform: rotate(45deg);
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
        font-family: 'Montserrat', sans-serif;
    }
</style>

<!-- Navigation -->
<nav class="<?php echo $STYLES['nav']; ?>" style="background: <?php echo $SITE->brand->dark; ?>;">
    <div class="<?php echo $STYLES['nav_inner']; ?>">
        <div class="<?php echo $STYLES['nav_row']; ?>">
            <div class="<?php echo $STYLES['logo_wrap']; ?>">
                <img src="<?php echo htmlspecialchars($SITE->brand->logo, ENT_QUOTES, 'UTF-8'); ?>"
                    alt="<?php echo htmlspecialchars($SITE->name, ENT_QUOTES, 'UTF-8'); ?> Logo"
                    class="<?php echo $STYLES['logo_img']; ?>">
            </div>
            <div class="<?php echo $STYLES['desktop_links']; ?>">
                <?php foreach ($NAVIGATION as $nav): ?>
                    <?php if (!empty($nav['cta'])): ?>
                        <a href="#<?php echo $nav['id']; ?>"
                            class="<?php echo $STYLES['nav_cta']; ?>"><?php echo $nav['label']; ?></a>
                    <?php else: ?>
                        <a href="#<?php echo $nav['id']; ?>"
                            class="<?php echo $STYLES['nav_link']; ?>"><?php echo $nav['label']; ?></a>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
            <div class="md:hidden flex items-center">
                <button class="<?php echo $STYLES['mobile_btn']; ?>" onclick="<?php echo $ACTIONS['mobile_toggle']; ?>">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <div id="mobile-menu" class="<?php echo $STYLES['mobile_menu']; ?>"
        style="background: <?php echo $SITE->brand->dark; ?>;">
        <div class="<?php echo $STYLES['mobile_links']; ?>">
            <?php foreach ($NAVIGATION as $nav): ?>
                <a href="#<?php echo $nav['id']; ?>"
                    class="<?php echo $STYLES['mobile_link']; ?>"><?php echo $nav['label']; ?></a>
            <?php endforeach; ?>
        </div>
    </div>
</nav>