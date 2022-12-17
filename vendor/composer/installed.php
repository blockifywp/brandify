<?php return array(
    'root' => array(
        'name' => 'blockify/brandify',
        'pretty_version' => 'dev-main',
        'version' => 'dev-main',
        'reference' => '6d11fdce60dbea59eb8afa8aff5e663eb49c95a1',
        'type' => 'wordpress-theme',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => true,
    ),
    'versions' => array(
        'blockify/brandify' => array(
            'pretty_version' => 'dev-main',
            'version' => 'dev-main',
            'reference' => '6d11fdce60dbea59eb8afa8aff5e663eb49c95a1',
            'type' => 'wordpress-theme',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'blockify/framework' => array(
            'pretty_version' => 'dev-main',
            'version' => 'dev-main',
            'reference' => 'ff9badc1a588f081d6db8b54e7888f2d3d93107c',
            'type' => 'wordpress-plugin',
            'install_path' => __DIR__ . '/../blockify/framework',
            'aliases' => array(
                0 => '9999999-dev',
            ),
            'dev_requirement' => false,
        ),
        'tgmpa/tgm-plugin-activation' => array(
            'pretty_version' => 'dev-develop',
            'version' => 'dev-develop',
            'reference' => '2d34264f4fdcfcc60261d490ff2e689f0c33730c',
            'type' => 'library',
            'install_path' => __DIR__ . '/../tgmpa/tgm-plugin-activation',
            'aliases' => array(
                0 => '9999999-dev',
            ),
            'dev_requirement' => false,
        ),
    ),
);
