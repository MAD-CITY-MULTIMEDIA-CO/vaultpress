<?php return array(
    'root' => array(
        'pretty_version' => 'dev-master',
        'version' => 'dev-master',
        'type' => 'wordpress-plugin',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'reference' => NULL,
        'name' => 'automattic/vaultpress',
        'dev' => false,
    ),
    'versions' => array(
        'automattic/jetpack-autoloader' => array(
            'pretty_version' => '2.10.x-dev',
            'version' => '2.10.9999999.9999999-dev',
            'type' => 'composer-plugin',
            'install_path' => __DIR__ . '/../automattic/jetpack-autoloader',
            'aliases' => array(),
            'reference' => 'b2c1cf71e65c0a4c3654f3a2747f6d47228041b3',
            'dev_requirement' => false,
        ),
        'automattic/jetpack-logo' => array(
            'pretty_version' => '1.5.x-dev',
            'version' => '1.5.9999999.9999999-dev',
            'type' => 'jetpack-library',
            'install_path' => __DIR__ . '/../automattic/jetpack-logo',
            'aliases' => array(),
            'reference' => '93c7c50a00b0240db3d7e91f6a9bc624523999ba',
            'dev_requirement' => false,
        ),
        'automattic/vaultpress' => array(
            'pretty_version' => 'dev-master',
            'version' => 'dev-master',
            'type' => 'wordpress-plugin',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'reference' => NULL,
            'dev_requirement' => false,
        ),
    ),
);
