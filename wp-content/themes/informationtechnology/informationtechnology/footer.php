<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package informationTechnology
 */

?>

	
	<footer class="footer" id="colophon" class="site-footer">
            <div class="footer__addr">
                <h1 class="footer__logo"><img src="<?php echo esc_url( get_template_directory_uri() . '/image/logo.png' ); ?>" style="height: 47px;" alt="Logo"></h1>
                <p class="footer_para">
                    Tech Research Online Covers Latest Technology Insights,<br>
                    Martech Interviews, Marketing Technology Whitepapers,<br>
                    Research, Case Studies, News and Blogs.
                </p>
                <div class="footer_social">
                    <i class="fa fa-facebook-official" aria-hidden="true"></i>
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                    <i class="fa fa-youtube-play" aria-hidden="true"></i>
                    <i class="fa fa-twitter-square" aria-hidden="true"></i>
                    <i class="fa fa-linkedin-square" aria-hidden="true"></i>
                </div>
            </div>
            
            <ul class="footer__nav">
                <li class="nav__item">
                    <h2 class="nav__title">Useful Links</h2>
                    <ul class="nav__ul">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">News</a></li>
                        <li><a href="#">Influencer Interview</a></li>
                        <li><a href="#">Write for Us</a></li>
                    </ul>
                </li>
                
                <li class="nav__item nav__item--extra">
                    <h2 class="nav__title">White Papers</h2>
                    <ul class="nav__ul nav__ul--extra">
                        <li><a href="#">HrTech</a></li>
                        <li><a href="#">Mar Tech</a></li>
                        <li><a href="#">Information Technology</a></li>
                        <li><a href="#">Fintech</a></li>
                        <li><a href="#">Technology</a></li>
                    </ul>
                </li>
                
                <li class="nav__item">
                    <h2 class="nav__title">Contact Us for Queries</h2>
                    <ul class="nav__ul">
                        <li><i class="fa fa-phone" aria-hidden="true"></i> <a href="#">+1 408-763-5612</a></li>
                        <li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="#">contact@techresearchonline.com</a></li>
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i> <a href="#">75 Broadway, Suite 202, San Francisco, California, 94111, USA.</a></li>
                    </ul>
                </li>
            </ul>
            <hr class="footer-divider">
            <div class="legal">
                <div class="privacy">
                    <p>Privacy</p>
                    <p>CPPA</p>
                </div>
                <div class="legal__links">
                    <span>Copyright 2023 techresearchonline.com, All rights reserved.</span>
                </div>
            </div>
        </footer>
		
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
