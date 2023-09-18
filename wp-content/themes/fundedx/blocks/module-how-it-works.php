<?php 
    $className = !empty($block['className']) ? $block['className'] : null;
?>

<section class="module module--how-it-works pt-80px <?= $className ?>">
    <div class="wrapper">
        <div class="module-title-holder text-center">
            <h2 class="module--title">How It Works</h2>
            <p>Three simple steps to be a FundedX trader.</p>
        </div>

        <div class="module-works-list flex flex-wrap mt-30px">
            <div class="box-list relative">
                <?= get_template_part('img/box.svg'); ?>
                <div class="box-content absolute">
                    <h2>01</h2>
                    <h4>Choose Your Challenge</h4>
                    <p>Embark on your trading journey with our tailored challenges, designed to match your skill and ambition.</p>
                </div>
            </div>
            <div class="box-list relative">
                <?= get_template_part('img/box.svg'); ?>
                <div class="box-content absolute">
                    <h2>02</h2>
                    <h4>Payment</h4>
                    <p>Select your preferred payment plan easily and transparently, paving the way for your trading success.</p>
                </div>
            </div>
            <div class="box-list relative">
                <?= get_template_part('img/box.svg'); ?>
                <div class="box-content absolute">
                    <h2>03</h2>
                    <h4>Start Trading</h4>
                    <p>Launch your trading career with FundedX and leverage our powerful tools to reach your financial goals.</p>
                </div>
            </div>
        </div>

        <div class="btn-holder text-center mt-40px">
            <a href="" class="btn btn--primary">Take the Challenge <?= get_template_part('img/arrow-up.svg'); ?></a>
        </div>
    </div>
</section>
