<?php require_once(__DIR__ . '/styles.php'); ?>
<!-- Contact Section -->
<section id="contacto" class="<?php echo $STYLES['section']; ?>">
    <div class="<?php echo $STYLES['container']; ?>">
        <div class="<?php echo $STYLES['header']; ?>">
            <h2 class="<?php echo $STYLES['title']; ?>">Contacto</h2>
            <p class="<?php echo $STYLES['subtitle']; ?>">¿Listo para comenzar tu evolución educativa?</p>
        </div>
        <div class="<?php echo $STYLES['grid']; ?>">
            <div class="<?php echo $STYLES['info_card']; ?>">
                <h3 class="<?php echo $STYLES['info_title']; ?>">Información de Contacto</h3>
                <div class="<?php echo $STYLES['info_items']; ?>">
                    <?php
                    $contactItems = [
                        ['label' => 'Email',     'value' => $SITE->email,    'icon' => 'M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z'],
                        ['label' => 'Teléfono',  'value' => $SITE->phone,    'icon' => 'M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z'],
                        ['label' => 'Ubicación', 'value' => $SITE->location, 'icon' => 'M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z'],
                    ];
                    foreach ($contactItems as $item): ?>
                    <div class="flex items-center">
                        <div class="<?php echo $STYLES['icon_circle']; ?>">
                            <svg class="<?php echo $STYLES['icon_svg']; ?>" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="<?php echo $item['icon']; ?>"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="<?php echo $STYLES['label']; ?>"><?php echo $item['label']; ?></p>
                            <p class="<?php echo $STYLES['value']; ?>"><?php echo htmlspecialchars($item['value'], ENT_QUOTES, 'UTF-8'); ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="<?php echo $STYLES['why_card']; ?>">
                <h3 class="<?php echo $STYLES['why_title']; ?>">¿Por qué elegir CED?</h3>
                <ul class="<?php echo $STYLES['why_list']; ?>">
                    <?php foreach ($SITE->ventajas as $ventaja): ?>
                    <li class="flex items-center">
                        <svg class="<?php echo $STYLES['check_icon']; ?>" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span><?php echo htmlspecialchars($ventaja, ENT_QUOTES, 'UTF-8'); ?></span>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</section>