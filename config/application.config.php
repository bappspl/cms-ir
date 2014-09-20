<?php
return array(
    'modules' => array(
        'Application',

        'AssetManager',

        'CmsIr\Authentication',
        'CmsIr\Authorize',
        'CmsIr\Dashboard',
        'CmsIr\Users',
        'CmsIr\Zf2SlugGenerator',
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
