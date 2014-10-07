<?php

return array(
     'navigation' => array(
         'default' => array(
             array(
                 'label' => 'Dashboard',
                 'route' => 'dashboard',
                 'class' => 'fa fa-home',
                 'id'    => 2,
             ),
             array(
                 'label' => 'Menu',
                 'route' => 'fake',
                 'class' => 'fa fa-bars',
                 'id'    => 4,
                 'pages' => array(
                     array(
                         'label' => 'Lista menu',
                         'route' => 'menu-list',
                         'visibleInPrimary' => true
                     ),
                     array(
                         'label' => 'Edycja menu',
                         'route' => 'menu-edit',
                         'visibleInPrimary' => false
                     ),
                 ),
             ),
             array(
                 'label' => 'Slider',
                 'route' => 'slider',
                 'class' => 'fa fa-picture-o',
                 'id'    => 2,
                 'pages' => array(
                     array(
                         'label' => 'Dodaj nowy',
                         'route' => 'slider/create',
                         'visibleInPrimary' => true
                     ),
                     array(
                         'label' => 'Lista sliderów',
                         'route' => 'slider',
                         'visibleInPrimary' => true
                     ),
                     array(
                         'label' => 'Edycja slidera',
                         'route' => 'slider/edit',
                         'params' => array(),
                         'visibleInPrimary' => false
                     ),
                     array(
                         'label' => 'Usuwanie slidera',
                         'route' => 'slider/delete',
                         'params' => array(),
                         'visibleInPrimary' => false
                     ),
                     array(
                         'label' => 'Lista elementów',
                         'route' => 'slider/items',
                         'params' => array(),
                         'visibleInPrimary' => false
                     ),
                     array(
                         'label' => 'Dodaj nowy element',
                         'route' => 'slider/items/create',
                         'params' => array(),
                         'visibleInPrimary' => false
                     ),
                     array(
                         'label' => 'Edycja elementu',
                         'route' => 'slider/items/edit',
                         'params' => array(),
                         'visibleInPrimary' => false
                     ),
                 ),
             ),
             array(
                 'label' => 'Użytkownicy',
                 'route' => 'fake',
                 'class' => 'fa fa-users',
                 'id'    => 4,
                 'pages' => array(
                     array(
                         'label' => 'Dodaj nowy',
                         'route' => 'user-create',
                         'visibleInPrimary' => true
                     ),
                     array(
                         'label' => 'Lista użytkowników',
                         'route' => 'users-list',
                         'visibleInPrimary' => true
                     ),
                     array(
                         'label' => 'Edycja użytkownika',
                         'route' => 'user-edit',
                         'params' => array(),
                         'visibleInPrimary' => false
                     ),
                     array(
                         'label' => 'Podgląd użytkownika',
                         'route' => 'user-preview',
                         'params' => array(),
                         'visibleInPrimary' => false
                     ),
                     array(
                         'label' => 'Usuwanie użytkownika',
                         'route' => 'user-delete',
                         'params' => array(),
                         'visibleInPrimary' => false
                     )
                 ),
             ),
             array(
                 'label' => 'Newsletter',
                 'route' => 'fake-newsletter',
                 'class' => 'fa fa-envelope-o',
                 'id'    => 4,
                 'pages' => array(
                     array(
                         'label' => 'Wiadomości',
                         'route' => 'newsletter',
                         'visibleInPrimary' => true
                     ),
                     array(
                         'label' => 'Subskrybenci',
                         'route' => 'subscriber-list',
                         'visibleInPrimary' => true
                     ),
                     array(
                         'label' => 'Grupy subskrybentów',
                         'route' => 'subscriber-group',
                         'visibleInPrimary' => true
                     ),
                     array(
                         'label' => 'Ustawienia',
                         'route' => 'newsletter-settings',
                         'visibleInPrimary' => true
                     ),
                 ),
             ),
         ),
     ),
     'service_manager' => array(
         'factories' => array(
             'navigation' => 'Zend\Navigation\Service\DefaultNavigationFactory',
         ),
     ),
);