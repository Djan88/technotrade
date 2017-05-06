<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous"> -->
    <!-- Slider -->

    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">
    <title><?php the_title(); ?></title>
</head>
<body>
    <header>
        <nav class="navbar">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="/">
                <picture>
                    <source srcset="<?php bloginfo('template_url'); ?>/img/smal_logo.png" media="(max-width: 768px)">
                    <img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="">
                </picture>
              </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <form class="navbar-form navbar-right">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default"><img src="<?php bloginfo('template_url'); ?>/img/search-icon.png" alt=""></button>
              </form>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="#">О бренде</a></li>
                <li><a href="#">преимущества</a></li>
                <li><a href="#">Продукция</a></li>
                <li><a href="#">новости</a></li>
                <li><a href="#">контакты</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
    </header>
    <!-- Header -->


    <main>

        <div class="contact">
            <div class="container">
                <div class="contact__block">
                    <a href="" class="zvonok">заказать обратный звонок</a>
                    <ul class="social__header">
                        <li><a href=""></a></li>
                        <li><a href=""></a></li>
                        <li><a href=""></a></li>
                        <li><a href=""></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Contact -->

        <section class="slider">
            <div class="slider__container" >
                <div class="slider__item">
                    <img src="<?php bloginfo('template_url'); ?>/img/slide1.jpg" alt="" class="slide__img">
                    <div class="content__slider">
                        <h1>Неужели это <br>моя посуда?</h1>
                        <p>ТАБЛЕТКИ ДЛЯ <br> ПОСУДОМОЕЧНЫХ МАШИН </p>
                        <a href="">узнать больше</a>
                    </div>
                </div>
                <div class="slider__item">
                    <img src="<?php bloginfo('template_url'); ?>/img/slide1.jpg" alt="" class="slide__img">
                    <div class="content__slider">
                        <h1>Неужели это <br>моя посуда?</h1>
                        <p>ТАБЛЕТКИ ДЛЯ <br> ПОСУДОМОЕЧНЫХ МАШИН </p>
                        <a href="">узнать больше</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Slider -->

        <section class="news">
            <div class="title-bg">
                <div class="container">
                    <h2>Новости</h2>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="news__block">
                            <div class="col-md-4">
                                <img src="<?php bloginfo('template_url'); ?>/img/news1.png" alt="">
                            </div>
                            <div class="col-md-8">
                                <h3>15.04.17 Мы говорим нет вредным добавкам</h3>
                                <p>Продукция PROSPER не содержит опасных для здоровья человека и планеты веществ, таких как фосфаты, хлор, продукты нефтехимии, искусственные ароматизаторы.</p>
                                <a href=""> > </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="news__block">
                            <div class="col-md-4">
                                <img src="<?php bloginfo('template_url'); ?>/img/sert.png" alt="">
                            </div>
                            <div class="col-md-8">
                                <h3>15.04.17 Победа в выставке - Стиральные порошки "Prosper"</h3>
                                <p>Мы уже завоевали популярность на значительной территории Таможенного союза, странах Ближнего Востока и Евросоюза. ароматизаторы.</p>
                                <a href=""> > </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- News -->

        <section class="product">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="product__block">
                            <div class="product__block__header">
                                <h3>порошок</h3>
                                <p>Hand Wash Lemon</p>
                            </div>
                            <div class="product__block__content">
                                <img src="<?php bloginfo('template_url'); ?>/img/poroshok.png" alt="">
                            </div>
                            <div class="product__block__footer">
                                <a href="">узнать больше</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="product__block">
                            <div class="product__block__header">
                                <h3>Гель</h3>
                                <p>ДЛЯ СТИРКИ</p>
                            </div>
                            <div class="product__block__content">
                                <img src="<?php bloginfo('template_url'); ?>/img/gel.png" alt="">
                            </div>
                            <div class="product__block__footer">
                                <a href="">узнать больше</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="product__block">
                            <div class="product__block__header">
                                <h3>капсулы</h3>
                                <p>для стирки</p>
                            </div>
                            <div class="product__block__content">
                                <img src="<?php bloginfo('template_url'); ?>/img/capsuly.png" alt="">
                            </div>
                            <div class="product__block__footer">
                                <a href="">узнать больше</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="product__block">
                            <div class="product__block__header">
                                <h3>кондиционер</h3>
                                <p>для черного белья</p>
                            </div>
                            <div class="product__block__content">
                                <img src="<?php bloginfo('template_url'); ?>/img/conditioner.png" alt="">
                            </div>
                            <div class="product__block__footer">
                                <a href="">узнать больше</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Product -->

        <section class="o-brende">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3>о бренде</h3>
                        <p>PROSPER® – это линия современных экологичных и безопасных для здоровья человека средств для стирки, средств для мытья посуды, моющих чистящих средств для дома.</p>
                        <p>Наша компания и партнеры из Гонконга и Японии, объединили свой многолетний опыт и знания для создания высокоэффективных и экологичных средств для ухода за тканями.</p>
                        <p>Средства PROSPER не содержат опасных для здоровья человека и окружающей среды веществ, таких как фосфаты, хлор, продукты нефтехимии, искусственные ароматизаторы.</p>
                        <p>Высокое качество, эффективность и безопасность – именно этими принципами мы руководствуемся, предлагая современные продукты, формирующие у российского потребителя высокую культуру быта.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- o-brende -->

    </main>
    <!-- Main -->



    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h3>Производитель <br> Group Prosper Limited, Hong Kong </h3>
                    <p>Тел/факс: +8 528 199 09 55,</p>
                    <p>Email: <a href="mailto:">info@group-prosper.com</a></p>
                    <h3>Официальый дистрибьютер в России ООО «ТЕХНОТРЕЙД», г. Москва,</h3>
                    <p>Тел/факс: +7 (495) 134 37 73,</p>
                    <p>Email: <a href="mailto:">info@tecnotrade.ru</a></p>
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
                </div>
                <div class="col-md-4">
                    <div class="phone">+7 (495) <span>134 37 73</span></div>
                    <ul class="list__link">
                        <li><a href="">Специальные средства PROSPER</a></li>
                        <li><a href="">Средства для мытья посуды PROSPER</a></li>
                        <li><a href="">Средства для дома PROSPER</a></li>
                        <li><a href="">PROSPER Professional</a></li>
                    </ul>
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
