<?php

return array(
    'router' => array(
        'routes' =>  include __DIR__ . '/routing.config.php',
    ),
    'controllers' => array(
        'invokables' => array(
            'Page\Controller\Page' => 'Page\Controller\PageController'
        ),
    ),
    'view_manager' => array(
        'doctype'                  => 'HTML5',
        'template_map' => array(
            'layout/home' => __DIR__ . '/../view/layout/home.phtml',
            'partial/layout/header' => __DIR__ . '/../view/partial/layout/header.phtml',
            'partial/layout/header-mainmenu' => __DIR__ . '/../view/partial/layout/header-mainmenu.phtml',
            'partial/layout/header-navbar' => __DIR__ . '/../view/partial/layout/header-navbar.phtml',
            'partial/layout/footer' => __DIR__ . '/../view/partial/layout/footer.phtml',
            'partial/layout/footer-about' => __DIR__ . '/../view/partial/layout/footer-about.phtml',
            'partial/layout/footer-contact' => __DIR__ . '/../view/partial/layout/footer-contact.phtml',
            'partial/layout/footer-navigation' => __DIR__ . '/../view/partial/layout/footer-navigation.phtml',
            'partial/layout/footer-newsletter' => __DIR__ . '/../view/partial/layout/footer-newsletter.phtml',
            'partial/layout/footer-terms' => __DIR__ . '/../view/partial/layout/footer-terms.phtml',

            'partial/page/banners' => __DIR__ . '/../view/partial/page/banners.phtml',
            'partial/page/gallery' => __DIR__ . '/../view/partial/page/gallery.phtml',
            'partial/page/offer' => __DIR__ . '/../view/partial/page/offer.phtml',
            'partial/page/slider' => __DIR__ . '/../view/partial/page/slider.phtml',
            'partial/page/testimonials' => __DIR__ . '/../view/partial/page/testimonials.phtml',
        ),
        'template_path_stack' => array(
            'page' => __DIR__ . '/../view'
        ),
        'display_exceptions' => true,
    ),

    'asset_manager' => array(
        'resolver_configs' => array(
            'paths' => array(
                __DIR__ . '/../public',
            ),
        ),
    ),

);
