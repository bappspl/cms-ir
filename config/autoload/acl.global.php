<?php
return array(
    'acl' => array(
        'roles' => array(
            'guest'   => null,
            'user'  => 'guest',
            'admin'  => 'user',
            'superadmin'  => 'admin'
        ),
        'resources' => array(
            'allow' => array(
                'Application\Controller\Index' => array(
                    'all'	=> 'guest',
                ),

                // CMS
				'CmsIr\Authentication\Controller\Index' => array(
					'all'	=> 'guest',
 				),
                'CmsIr\Dashboard\Controller\Index' => array(
                    'all'	=> 'superadmin',
                ),
            )
        )
    )
);
