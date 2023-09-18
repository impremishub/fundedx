<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package starter
 */

?>

	<footer id="colophon" class="site-footer bg-primary py-30px pb-0">
		<div class="footer-main">
			<div class="wrapper">
				<div class="footer-content flex flex-wrap">

					<!-- footer first column  -->
					<div class="footer-left">
						<!-- footer logo -->
						<div class="footer-logo">
							<a href="/"><?= get_footer_logo(); ?></a>
						</div>

						<!-- footer button -->
						<div class="footer-button mt-10px">
							<a href="" class="btn btn--gray w-full text-center">TAKE THE CHALLENGE <?= get_template_part('img/arrow-up.svg'); ?></a>
						</div>

						<!-- footer Menu -->
						<div class="footer-menu text-light mt-50px">
							<nav id="site-navigation" class="footer-navigation">
								<?php
								wp_nav_menu(
									array(
										'menu' => 'Footer',
										'menu_id'        => 'footer-menu',
									)
								);
								?>
							</nav><!-- #site-navigation -->
						</div>
						
						<!-- footer social media -->
						<div class="footer-social-holder mt-50px">
							<ul class="social--icon flex">
								<li class="pr-15px">
									<a href="htttps://facebook.com" target="_blank">
										<?= get_template_part('img/facebook.svg'); ?>
									</a>
								</li>
								<li class="pr-15px">
									<a href="htttps://youtube.com" target="_blank">
										<?= get_template_part('img/youtube.svg'); ?>
									</a>
								</li>
								<li class="pr-15px">
									<a href="https://www.instagram.com/fundedx/" target="_blank">
										<?= get_template_part('img/instagram.svg'); ?>
									</a>
								</li>
								<li class="pr-15px">
									<a href="https://discord.gg/xh4HgKAXpK" target="_blank">
										<?= get_template_part('img/discord.svg'); ?>
									</a>
								</li>
							</ul>
						</div>
					</div>
					<!-- end first column -->
					
					<!-- footer second column -->
					<div class="footer-right">
						<div class="text-light">
							<h3>Disclaimer:</h3>
							<p>The information provided by FundedX, a proprietary trading firm, is intended for general informational purposes only. It does not constitute financial, investment, or trading advice. All trading activities involve a level of risk, and individuals should be aware that there is a potential for substantial financial loss. Before making any trading decisions, individuals should carefully consider their financial situation, risk tolerance, and consult with a qualified financial advisor.</p>
							<p>FundedX does not guarantee the accuracy, completeness, or reliability of the information provided. While we strive to provide up-to-date and accurate information, we make no representations or warranties of any kind, either expressed or implied, regarding the suitability, reliability, availability, timeliness, or accuracy of the information provided.</p>
							<p>Any past performance or historical data mentioned is not indicative of future results. The value of investments and the income derived from them can fluctuate and may rise or fall. It is important to recognize that all trading decisions are the sole responsibility of the individual trader, and FundedX shall not be held liable for any losses, damages, or consequences arising from the use of our information or services.</p>
							<p>Individuals are encouraged to conduct their own research and due diligence before making any trading decisions. Trading in financial markets involves inherent risks, and individuals should only trade with capital that they can afford to lose. FundedX strongly advises individuals to seek professional advice and education before engaging in any trading activities.</p>
							<p>By accessing and using the information provided by FundedX, individuals acknowledge and accept the inherent risks associated with trading and release FundedX from any liability for losses or damages incurred as a result of reliance on the information provided.</p>
							<p>Remember that trading involves risk, and it is important to be cautious and well-informed when making trading decisions.</p>
						</div>
					</div>
					<!-- end -->
					
				</div>
			</div>
		</div>
		<div class="site-info">
			<div class="wrapper">
				<div class="bottom-footer text-light flex items-center justify-between w-full py-10px mt-30px">
					<div class="copyright">
						<p>&copy; <?= date('Y') ?> All Rights Reserved - <?= get_bloginfo('name'); ?></p>
					</div>
					<div class="misc-pages">
						<ul class="flex items-center">
							<li>
								<a href="/refund-policy/">Refund Policy</a>
							</li>
							<li>
								<a href="/privacy-policy/">Privacy Policy</a>
							</li>
							<li>
								<a href="/terms-conditions/">Terms & Conditions</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
