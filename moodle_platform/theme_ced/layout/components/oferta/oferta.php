<?php require_once(__DIR__ . '/styles.php'); ?>
<!-- Offerings & FAQ -->
<section id="oferta" class="<?php echo $STYLES['section']; ?>">
    <div class="<?php echo $STYLES['container']; ?>">
        <div class="<?php echo $STYLES['grid']; ?>">
            <div>
                <h2 class="<?php echo $STYLES['title']; ?>">Oferta Educativa</h2>
                <div class="<?php echo $STYLES['offer_list']; ?>">
                    <?php $borders = ['border-ced-blue', 'border-ced-accent', 'border-ced-blue']; ?>
                    <?php foreach ($SITE->oferta as $i => $item): ?>
                        <div class="<?php echo $STYLES['offer_card'] . ' ' . $borders[$i % count($borders)]; ?>">
                            <span class="<?php echo $STYLES['offer_num']; ?>"><?php echo $item['number']; ?></span>
                            <div>
                                <h3 class="<?php echo $STYLES['offer_title']; ?>"><?php echo $item['title']; ?></h3>
                                <p class="<?php echo $STYLES['offer_text']; ?>"><?php echo $item['description']; ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div>
                <h2 class="<?php echo $STYLES['title']; ?>">Preguntas Frecuentes</h2>
                <div class="<?php echo $STYLES['faq_list']; ?>">
                    <?php foreach ($SITE->faq as $faq): ?>
                        <details class="<?php echo $STYLES['faq_item']; ?>">
                            <summary class="<?php echo $STYLES['faq_summary']; ?>">
                                <span><?php echo htmlspecialchars($faq['question'], ENT_QUOTES, 'UTF-8'); ?></span>
                                <span class="transition group-open:rotate-180">
                                    <svg fill="none" height="24" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                        <path d="M6 9l6 6 6-6"></path>
                                    </svg>
                                </span>
                            </summary>
                            <p class="<?php echo $STYLES['faq_answer']; ?>">
                                <?php echo htmlspecialchars($faq['answer'], ENT_QUOTES, 'UTF-8'); ?>
                            </p>
                        </details>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Commitment -->
<section class="<?php echo $STYLES['commit_section']; ?>">
    <div class="<?php echo $STYLES['container']; ?> text-center">
        <h2 class="<?php echo $STYLES['commit_title']; ?>">Nuestro Compromiso</h2>
        <p class="<?php echo $STYLES['commit_text']; ?>">"En <?php echo $SITE->name; ?>, no solo obtienes un certificado
            académico; obtienes la libertad de construir tu futuro mientras vives tu presente."</p>
        <p class="<?php echo $STYLES['commit_sub']; ?>">"Tu ritmo, tus metas, tu mundo. Bienvenido a la evolución
            educativa."</p>
    </div>
</section>