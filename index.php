<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package redhat2
 */

get_header(); ?>


<section class="banner">
  <div class="container">
    <div class="banner__inner">
      <h1 class="banner__title"><?php the_field('banner__title', 'option'); ?></h1>
      <div class="banner__subtitle"><?php the_field('banner__subtitle', 'option'); ?></div>
      <div class="banner__items">
        <div class="banner__item">
          <div class="banner__item-img banner__item-img_bg1"></div>
          <div class="banner__item-text"><?php the_field('banner__item_text', 'option'); ?></div>
        </div>
        <div class="banner__item">
          <div class="banner__item-img banner__item-img_bg2"></div>
          <div class="banner__item-text"><?php the_field('banner__item_text_more', 'option'); ?></div>
        </div>
      </div>
      <div class="banner__buttons"><a class="btn banner__btn" href="#"><span><?php the_field('btn_banner', 'option'); ?></span></a>
        <div class="banner__desc"><?php the_field('banner__desc', 'option'); ?></div>
      </div><a class="banner__scroll" href="#result">
        <div class="banner__scroll-img"></div>
        <div class="banner__scroll-text"><?php the_field('banner__scroll_text', 'option'); ?></div></a>
    </div>
    <div class="scene banner_scene" id="scene3">
      <div class="layer" data-depth="0.1">
        <div class="banner__fire"></div>
      </div>
    </div>
    <div class="scene banner_scene" id="scene2">
      <div class="layer" data-depth="0.15">
        <div class="banner__man"></div>
      </div>
    </div>
  </div>
</section>
<section class="result" id="result">
  <h2 class="result__title"><?php the_field('result__title', 'option'); ?></h2>
  <div class="owl-carousel owl-theme result__carousel">


  <?php
    
    if( have_rows('r_item', 'option') ):
       
        while( have_rows('r_item', 'option') ) : the_row();
            
            $logo_r_item = get_sub_field('logo_r_item', 'option');
            $r_item__text = get_sub_field('r_item__text', 'option');
            $r_item__img = get_sub_field('r_item__img', 'option');
            $r_item__about_title = get_sub_field('r_item__about_title', 'option');
            $r_item__about_title2 = get_sub_field('r_item__about_title2', 'option');

             ?>

            <div class="r-item">
                  <div class="container">
                    <div class="r-item__header">
                      <div class="r-item__review r-item__review_1">
                        <div class="r-item__logo_company"><img src="<?php echo $logo_r_item ?>" alt="logo company"></div>
                        <div class="r-item__title"> </div>
                        <div class="r-item__text"><?php echo $r_item__text ?></div>
                        <div class="r-item__img r-item__img_1"><img src="<?php echo $r_item__img ?>" alt="logo company"></div>

                      </div>          
                    </div>
                    <div class="r-item__body">
                      <div class="r-item__about new">
                        <h3 class="r-item__about-title"><?php echo $r_item__about_title ?></h3>

                        <div class="r-item__about-items">
                          <div class="r-item__about-item"> 

                        <?php                     

                        if( have_rows('ri_tem__about-items', 'option') ):                        
                            
                            while( have_rows('ri_tem__about-items', 'option') ) : the_row();                        
                                
                                $about_text = get_sub_field('about_text', 'option');
                                $about_img = get_sub_field('about_img', 'option'); ?>
                                

                                          
                            <div class="r-item__about-img r-item__about-img_1"><img src="<?php echo $about_img ?>" alt="about-img"></div>
                            <div class="r-item__about-text"><?php echo $about_text ?></div>
                          </div>
                            
                            <?php endwhile;             
                        
                        endif;
                        ?>                        
                          
                        </div>
                      </div>
                      <div class="r-item__done">
                        <h3 class="r-item__done-title"><?php echo $r_item__about_title2 ?></h3>
                        <?php

                          if( have_rows('ri_tem__about_items2', 'option') ): ?>

                          <ul class="r-item__done-items"> 
                             
                             <?php while( have_rows('ri_tem__about_items2', 'option') ) : the_row();
                                 
                                  $r_item__done_item = get_sub_field('r_item__done_item', 'option');?>
                                 
                                 <li class="r-item__done-item"><?php echo $r_item__done_item ?></li>
                              
                              <?php endwhile; ?>
                            </ul>
                          <?php endif;?>        
                      </div>
                    </div>
                  </div>
                </div> 
       <?php endwhile;
    endif;  ?>

  </div>
  <div class="result__nav result__nav_mobile">
    <div class="result__nav-prev"></div>
    <div class="result__nav-next"></div>
  </div>
  <div class="result__nav">
    <div class="result__nav-prev"></div>
    <div class="result__nav-counter"><span>1</span><span>/</span><span>4</span></div>
    <div class="result__nav-next"></div>
  </div>
  <div class="container">
    <div class="result__buttons"><a class="btn result__btn" href="#"><span>Хочу такие результаты</span></a>
      <div class="result__desc">Наш специалист свяжется с вами в течение 5 минут</div>
    </div>
  </div>
</section>


<section class="context">
  <div class="container">
    <div class="context__inner">
      <h2 class="context__title">Контекст не работает без мощного сайта</h2>
      <div class="context__notebook"></div>
      <div class="scene wow fadeIn slower" id="scene">
        <div class="layer" data-depth="0.6">
          <div class="context__rocket wow rocket-animate"></div>
        </div>
      </div>
      <div class="context__items">
        <div class="context__item wow fadeInRight slow">
          <div class="context__item-img context__item-img_1"></div>
          <div class="context__item-text">Если у вас есть сайт, проведем <b>бесплатный аудит </b>
            и дадим рекомендации
          </div>
        </div>
        <div class="context__item wow fadeInRight slow" data-wow-delay="0.5s">
          <div class="context__item-img context__item-img_2"></div>
          <div class="context__item-text">Если у вас нет сайта, <b>сделаем бесплатно </b>
            при заключении договора на 3 и более месяцев
          </div>
        </div>
        <div class="context__buttons"><a class="btn context__btn" href="#"><span>Получить аудит</span></a><a class="btn btn_light context__btn" href="#"><span>Получить сайт</span></a></div>
      </div>
    </div>
  </div>
</section>
<section class="sales">
  <div class="container">
    <div class="sales__inner">
      <h2 class="sales__title">Для нас главное - это ваши продажи</h2>
      <div class="sales__man"></div>
      <div class="sales__cloud wow fadeIn slow" id="scene4" data-wow-delay="0.5s">
        <div class="layer" data-depth="0.5">
          <div class="sales__cup"></div>
        </div>
        <div class="sales__cloud-title">От нас не услышите:</div>
        <div class="sales__cloud-text">Мы привели 1000 показов, 500 кликов и 100 заявок. А почему нет продаж, спросите у ваших менеджеров</div>
      </div>
      <div class="sales__items">
        <div class="sales__item sales__item_light wow fadeIn slow">
          <p>Нам <b>важны ваши продажи. </b>
            Не клики и показы. 
          </p>
          <p>Мы ежедневно корректируем рекламу исходя из вашей обратной связи по заявкам</p>
        </div>
        <div class="sales__item sales__item_triangle wow fadeIn slow" data-wow-delay="1s">Сверх результат будет только работая в команде!</div><a class="btn sales__btn" href="#"><span>Начать работу в команде!</span></a>
        <div class="sales__desc">Наш специалист проконсультирует вас</div>
      </div>
    </div>
  </div>
</section>
<section class="advantage">
  <div class="container"> 
    <div class="advantage__inner">
      <h2 class="advantage__title">
        Мы знаем, что <span>для вас это важно</span></h2>
      <div class="advantage__rocket wow slow fadeInLeft"></div>
      <div class="advantage__items">
        <div class="advantage__item">
          <div class="advantage__item-img advantage__item-img_1"> </div>
          <div class="advantage__item-text">Личный менеджер оперативно отвечает на все ваши вопросы</div>
        </div>
        <div class="advantage__item">
          <div class="advantage__item-img advantage__item-img_2"> </div>
          <div class="advantage__item-text">Понятные еженедельные и ежемесячные отчеты</div>
        </div>
        <div class="advantage__item">
          <div class="advantage__item-img advantage__item-img_3">  </div>
          <div class="advantage__item-text">Договора, акты, счета берем на себя</div>
        </div>
      </div>
      <div class="advantage__buttons">     <a class="btn advantage__btn" href="#"><span>Получить консультацию</span></a>
        <div class="advantage__desc">Это бесплатно и ни к чему вас не обязывает</div>
      </div>
    </div>
  </div>
</section>
<section class="clients">
  <div class="container">
    <div class="clients__inner">
      <h2 class="clients__title">Клиенты по всему Казахстану, России и Узбекистану</h2>
      <div class="clients__coffee"></div>
      <div class="clients__book"></div>
      <div class="clients__items">
        <div class="clients__path clients__path_1">
          <div class="clients__item wow fadeIn" data-wow-delay="0.1s"><img src="<?php echo get_template_directory_uri( ); ?>/assets/img/client-1.png" alt="Клиент"></div>
          <div class="clients__item wow fadeIn" data-wow-delay="0.2s"><img src="<?php echo get_template_directory_uri( ); ?>/assets/img/client-2.png" alt="Клиент"></div>
          <div class="clients__item wow fadeIn" data-wow-delay="0.6s"><img src="<?php echo get_template_directory_uri( ); ?>/assets/img/client-6.png" alt="Клиент"></div>
          <div class="clients__item wow fadeIn" data-wow-delay="0.7s"><img src="<?php echo get_template_directory_uri( ); ?>/assets/img/client-7.png" alt="Клиент"></div>
          <div class="clients__item wow fadeIn" data-wow-delay="1.1s"><img src="<?php echo get_template_directory_uri( ); ?>/assets/img/client-11.png" alt="Клиент"></div>
          <div class="clients__item wow fadeIn" data-wow-delay="1.2s"><img src="<?php echo get_template_directory_uri( ); ?>/assets/img/client-12.png" alt="Клиент"></div>
        </div>
        <div class="clients__path clients__path_2">
          <div class="clients__item wow fadeIn" data-wow-delay="0.3s"><img src="<?php echo get_template_directory_uri( ); ?>/assets/img/client-3.png" alt="Клиент"></div>
          <div class="clients__item wow fadeIn" data-wow-delay="0.4s"><img src="<?php echo get_template_directory_uri( ); ?>/assets/img/client-4.png" alt="Клиент"></div>
          <div class="clients__item wow fadeIn" data-wow-delay="0.5s"><img src="<?php echo get_template_directory_uri( ); ?>/assets/img/client-5.png" alt="Клиент"></div>
          <div class="clients__item wow fadeIn" data-wow-delay="0.8s"><img src="<?php echo get_template_directory_uri( ); ?>/assets/img/client-8.png" alt="Клиент"></div>
          <div class="clients__item wow fadeIn" data-wow-delay="0.9s"><img src="<?php echo get_template_directory_uri( ); ?>/assets/img/client-9.png" alt="Клиент"></div>
          <div class="clients__item wow fadeIn" data-wow-delay="1s"><img src="<?php echo get_template_directory_uri( ); ?>/assets/img/client-10.png" alt="Клиент"></div>
          <div class="clients__item wow fadeIn" data-wow-delay="1.3s"><img src="<?php echo get_template_directory_uri( ); ?>/assets/img/client-13.png" alt="Клиент"></div>
          <div class="clients__item wow fadeIn" data-wow-delay="1.4s"><img src="<?php echo get_template_directory_uri( ); ?>/assets/img/client-14.png" alt="Клиент"></div>
          <div class="clients__item wow fadeIn" data-wow-delay="1.5s"><img src="<?php echo get_template_directory_uri( ); ?>/assets/img/client-15.png" alt="Клиент"></div>
        </div>
      </div>
      <div class="clients__buttons"><a class="btn clients__btn" href="#"><span>Оставить заявку</span></a>
        <div class="clients__desc">И мы бесплатно рассчитаем стоимость и сроки настройки Вашей рекламы за 1 час</div>
      </div>
    </div>
  </div>
</section>
<section class="gift">
  <div class="container">
    <div class="gift__inner">
      <div class="gift__info">
        <h2 class="gift__title">
          Ваша реклама на <span>10 000 </span> 
          сайтов партнеров Google в подарок
        </h2>
        <div class="gift__subtitle">При заказе настройки контекстой рекламы</div>
        <div class="gift__iphone wow fadeInLeft slow"></div>
      </div>
      <form class="gift__form" id="gift-form">
        <div class="gift__form-title">Получите подарок</div>
        <input type="hidden" name="title" value="Получите подарок">
        <div class="gift__form-subtitle">Мы перезвоним в течение 5 минут</div>
        <label class="gift__form-label" for="gift-name"><span class="gift__form-icon"></span>
          <input class="gift__form-input" type="text" name="name" placeholder="Введите Ваше имя" required id="gift-name">
        </label>
        <label class="gift__form-label" for="gift-tel"><span class="gift__form-icon"></span>
          <input class="gift__form-input" type="tel" name="tel" placeholder="+7 (___) ___-__-__" required id="gift-tel">
        </label>
        <input class="btn gift__form-btn" type="submit" value="Получить подарок">
        <div class="gift__form-desc">Нажимая кнопку вы даете согласие на обработку <a href="#">персональных данных</a></div>
      </form>
    </div>
  </div>
</section>


<?php get_footer(); ?>
