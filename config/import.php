<?php
declare(strict_types=1);

return [
    'enabled'        => [
        'file'    => true,
        'bunq'    => true,
        'spectre' => true,
        'plaid'   => true,
    ],
    'prerequisites'  => [
        'file'    => 'FireflyIII\Import\Prerequisites\FilePrerequisites',
        'bunq'    => 'FireflyIII\Import\Prerequisites\BunqPrerequisites',
        'spectre' => 'FireflyIII\Import\Prerequisites\SpectrePrerequisites',
        'plaid'   => 'FireflyIII\Import\Prerequisites\PlaidPrerequisites',

    ],
    'configuration'  => [
        'file'    => 'FireflyIII\Import\Configuration\FileConfigurator',
        'bunq'    => 'FireflyIII\Import\Configuration\BunqConfigurator',
        'spectre' => 'FireflyIII\Import\Configuration\SpectreConfigurator',
        'plaid'   => 'FireflyIII\Import\Configuration\PlaidConfigurator',
    ],
    'default_config' => [
        'file'    => [
            'has-config-file' => true,
            'auto-start'      => false,
        ],
        'bunq'    => [
            'has-config-file' => false,
            'auto-start'      => true,
        ],
        'spectre' => [
            'has-config-file' => false,
            'auto-start'      => true,
        ],
        'plaid'   => [
            'has-config-file' => false,
            'auto-start'      => true,
        ],
    ],
];