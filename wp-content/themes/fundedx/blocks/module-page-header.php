<?php 
    $className = !empty($block['className']) ? $block['className'] : null;
    $heading        = get_field('heading');
    $content        = get_field('intro_text');
    $cta            = get_field('cta');
    $background     = get_field('background');
    $alignment      = get_field('alignment');
?>


<section class="module module--page-header <?= $className ?>">
    <?php if( !empty( $background['mobile'] ) && !empty( $background['desktop'] ) ): ?>
        <?= responsive_image( $background['mobile'], $background['desktop'], 'bg' )?>
    <?php endif ?>
    <div class="page-header align-<?= $alignment['vertical'] ?>">
        <div class="wrapper align-<?= $alignment['horizontal'] ?>">
            <div class="module-page-content mw-511 text-light">
                <h1 class="module--title"><?= $heading ?></h1>
                <?= $content ?>
                <?php if( !empty( $cta ) ): ?>
                    <a href="<?= $cta['url'] ?>" class="btn btn--light mt-30px"><?= $cta['title'] ?> <?= get_template_part('img/arrow-up.svg'); ?></a>
                <?php endif ?>
            </div>

            <?php if(is_page('home')) : ?>
                <div class="stats-holder block md:flex flex-wrap mt-80px">
                    <div class="stats-list text-light mr-0 md:mr-40px">
                        <p>TRADE UP TO</p>
                        <h3>$1M</h3>
                    </div>
                    <div class="stats-list text-light mr-0 md:mr-40px">
                        <p>SCALE CAPITAL TO</p>
                        <h3>$5M</h3>
                    </div>
                    <div class="stats-list text-light mr-0 md:mr-40px">
                        <p>TRADE OUR FUND</p>
                        <h3>$10M+</h3>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

