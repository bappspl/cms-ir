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
         ),
     ),
     'service_manager' => array(
         'factories' => array(
             'navigation' => 'Zend\Navigation\Service\DefaultNavigationFactory',
         ),
     ),
);