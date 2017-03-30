            <footer class="footer footer_small-margin">
                <p class="footer__copyright"><?php bloginfo('name'); ?>&nbsp;&copy;&nbsp;<?php the_time('Y'); ?></p>
                <div class="footer__social-shapes">
                    <a href="https://www.instagram.com/tatianadenisenko/" class="footer__ext-link"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/instagram.svg" class="footer__social-shape" alt="Instagram" height="12px" width="12px"></a>
                    <a href="https://www.facebook.com/tatiana.denisenko.56" class="footer__ext-link"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook.svg" class="footer__social-shape" alt="Facebook" height="12px" width="6px"></a>
                    <a href="https://vk.com/tatiana_denisenko" class="footer__ext-link footer__ext-link_no-margin"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/vkontakte.svg" class="footer__social-shape" alt="Vkontakte" height="7px" width="12px"></a>
                </div>
            </footer>
        </div>
        <div class="modal">
            <ul class="modal__nav-wrap">
                <li class="modal__nav-wrap-item modal__nav-wrap-item_no-margin"><a href="fashion" class="modal__nav-link">Fashion</a></li>
                <li class="modal__nav-wrap-item"><a href="beauty" class="modal__nav-link">Beauty</a></li>
                <li class="modal__nav-wrap-item"><a href="editorial" class="modal__nav-link">Editorial</a></li>
                <li class="modal__nav-wrap-item"><a href="tests" class="modal__nav-link">Tests</a></li>
                <li class="modal__nav-wrap-item"><a href="family" class="modal__nav-link">Family</a></li>
            </ul>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/close-button.svg" class="modal__close-btn" alt="Close button" height="21px" width="20px">
        </div>
        <?php wp_footer(); ?>
    </body>
</html>