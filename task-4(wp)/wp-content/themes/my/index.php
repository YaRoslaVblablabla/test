<?php get_header(); ?>

    <div class="wrapper">
        
        <div class="container">
            <div class="lines"></div>
            <!-- Header -->
            <div class="header">

                <div class="header__container">

                    <div class="header__logo">
                        <img class="header__logo-pic" src="<?= get_template_directory_uri(); ?>/assets/img/logo.png">
                    </div>

                    <ul class="header__menu">
                        <li class="header__menu-item"><a href="#" class="header__menu-link">Обо мне</a></li>
                        <li class="header__menu-item"><a href="#" class="header__menu-link">Наставничество</a></li>
                        <li class="header__menu-item"><a href="#" class="header__menu-link">Мероприятияе</a></li>
                        <li class="header__menu-item"><a href="#" class="header__menu-link">Кейсы</a></li>
                        <li class="header__menu-item"><a href="#" class="header__menu-link">Отзвы</a></li>
                        <li class="header__menu-item"><a href="#" class="header__menu-link">Контакты</a></li>
                    </ul>

                </div>

                <div class="header__container">

                    <div class="header__burger">
                        <div class="header__burger-item"></div>
                        <div class="header__burger-item"></div>
                        <div class="header__burger-item"></div>
                    </div>

                    <div class="header__phone-circle">
                        <img class="header__phone-icon" src="<?= get_template_directory_uri(); ?>/assets/img/phone.png">
                    </div>
                    <span class="header__phone-number">8-345-123-34-45</span>
                </div>
            </div>

            <!-- Center-->
            <div class="center">
                <h2 class="center__title">Создаю условия для вашего успеха </h2>
                <p class="center__p">Когда ваше время и энергия лучше сфокусированы, стремление к новым возможностям становится реальностью,  ваш успех зависит от ваших действий</p>
                <p class="center__p p320">Ваш успех зависит от ваших действий</p>
                
                <div class="center__btns">
                    
                    <button class="center__btn first">
                        <span class="center__btn-text">Записаться на консультацию</span>
                        <span class="center__btn-text btn-text320 p2">Записаться</span>
                        <img src="<?= get_template_directory_uri(); ?>/assets/img/arrow1.png" class="center__btn-arrow" alt="">
                        <img src="<?= get_template_directory_uri(); ?>/assets/img/arrow1-320.png" class="center__btn-arrow320" alt="">
                    </button>

                    <button class="center__btn second">
                        <span class="center__btn-text">Бесплатная консультаия</span>
                        <span class="center__btn-text btn-text320">Заказать звонок</span>
                        <img src="<?= get_template_directory_uri(); ?>/assets/img/arrow2.png" class="center__btn-arrow" alt="">
                        <img src="<?= get_template_directory_uri(); ?>/assets/img/arrow2-320.png" class="center__btn-arrow320" alt="">
                    </button>

                </div>
            </div>

            <!-- quantity percent - qp -->
            <div class="qp">
                <div class="qp__block">
                    <h3 class="qp__block-title quantity">130+</h3>
                    <p class="qp__block-content">техник для достижения целей</p>
                    <p class="qp__block-content qp320">техники</p>
                </div>
            
                <div class="qp__block">
                    <h3 class="qp__block-title percent">250</h3>
                    <p class="qp__block-content">увеличение личной продуктивности</p>
                    <p class="qp__block-content qp320">продуктивности</p>
                </div>     
            </div>
            <img src="<?= get_template_directory_uri(); ?>/assets/img/mentor.png" class="mentor" alt="">
        </div> 

            <div class="overlay"></div>
            <div class="modal">
                <div class="modal__content">
                    <h2 class="modal__title">Закажите обратный звонок</h2>
                    <div class="close"></div>

                    <form action="" id="myForm">
                        <input type="text" placeholder="ИМЯ" class="modal__inp" id="name"><br>
                        <input type="number" placeholder="ТЕЛЕФОН" class="modal__inp" id="number"><br>
                        <div class="modal__checkbox">
                            <input class="check" type="checkbox" id="cb1"> <label class="label" for="cb1">Согласен на сохранение и обработку персональных данных</label>
                        </div>
                        <button class="modal__btn" id="form-btn">
                            <span class="modal__btn-text">Заказать обратный звонок</span>
                            <img src="<?= get_template_directory_uri(); ?>/assets/img/arrow2.png" class="modal__btn-arrow" alt="">
                            <img src="<?= get_template_directory_uri(); ?>/assets/img/arrow2-320.png" class="modal__btn-arrow modal-arrow320" alt="">
                        </button>
                    </form>

                </div>
            </div>

            <div class="modal" id ='postmodal'>
                <div class="postmodal__container">
                    <div class="close close2" ></div>
                    <h2 class="postmodal__title">Спасибо за заявку</h2>
                    <p class="postmodal__p">Я обязательно свяжусь с вами в ближайшее время.</p>
                    <img src="<?= get_template_directory_uri(); ?>/assets/img/logo.png"  alt="" class="postmodal__logo">
                </div>
            </div>

            <div class="bg"></div>
    </div>
<?php get_footer(); ?>