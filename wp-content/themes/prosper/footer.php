    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <?php if (!dynamic_sidebar("first-widget-area") ) : ?><?php endif; ?>
                </div>
                <div class="col-md-4">
                    <div class="social__footer">
                        <a href=""><span></span></a>
                        <a href=""><span></span></a>
                        <a href=""><span></span></a>
                        <a href=""><span></span></a>
                    </div>
                    <ul class="list__link">
                        <li><a href="">Стиральные порошки PROSPER</a></li>
                        <li><a href="">Гели для стирки PROSPER</a></li>
                        <li><a href="">Кондиционеры для белья PROSPER</a></li>
                        <li><a href="">Гель-капсулы PROSPER</a></li>
                    </ul>
                    <?php if (!dynamic_sidebar("second-widget-area") ) : ?><?php endif; ?>
                </div>
                <div class="col-md-4">
                    <div class="phone">+7 (495) <span>134 37 73</span></div>
                    <ul class="list__link">
                        <li><a href="">Специальные средства PROSPER</a></li>
                        <li><a href="">Средства для мытья посуды PROSPER</a></li>
                        <li><a href="">Средства для дома PROSPER</a></li>
                        <li><a href="">PROSPER Professional</a></li>
                    </ul>
                    <?php if (!dynamic_sidebar("third-widget-area") ) : ?><?php endif; ?>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer -->

    <script  src="https://code.jquery.com/jquery-3.2.1.min.js"  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="  crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/slick.js"></script>
    <script>
        $(document).ready(function(){
            $('.slider__container').slick({
                autoplay: true,
                autoplaySpeed: 3000,
                prevArrow: '<button type="button" class="slick-prev"><img src="<?php bloginfo('template_url'); ?>/img/left.png" alt="" /></button>',
                nextArrow: '<button type="button" class="slick-next"><img src="<?php bloginfo('template_url'); ?>/img/right.png" alt="" /></button>'
            });
        });
    </script>
</body>
</html>
