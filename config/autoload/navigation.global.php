<?php

return array(
     'navigation' => array(
         'default' => array(
             array(
             	'label' => 'Logowanie',
             	'route' => 'login',
                'pages' => array(
                    array(
                        'label' => 'Rejestacja',
                        'route' => 'registration',
                    )
                ),
             ),
             array(
                 'label' => 'Dashboard',
                 'route' => 'dashboard',
                 'class' => 'fa fa-home',
                 'id'    => 2,
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
         ),
     ),
     'service_manager' => array(
         'factories' => array(
             'navigation' => 'Zend\Navigation\Service\DefaultNavigationFactory',
         ),
     ),
);