<?php
return array(
    'modules' => array(
        'Application',

        'AssetManager',

        'CmsIr\Authentication',
        'CmsIr\Authorize',
        'CmsIr\System',
        'CmsIr\Dashboard',
        'CmsIr\Users',
        'CmsIr\Slider',
    ),
    'module_listener_options' => array(
        'module_paths' => array(
            './module',
            './vendor',
        ),
        'config_glob_paths' => array(
            'config/autoload/{,*.}{global,local}.php',
        ),
    ),
);
