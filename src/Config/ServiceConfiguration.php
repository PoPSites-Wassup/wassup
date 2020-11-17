<?php

declare(strict_types=1);

namespace PoPSitesWassup\Wassup\Config;

use PoP\Root\Component\PHPServiceConfigurationTrait;
use PoP\ComponentModel\Container\ContainerBuilderUtils;
use PoP\ComponentModel\Instances\InstanceManagerInterface;

class ServiceConfiguration
{
    use PHPServiceConfigurationTrait;

    protected static function configure(): void
    {
        ContainerBuilderUtils::injectValuesIntoService(
            InstanceManagerInterface::class,
            'overrideClass',
            \PoPSitesWassup\StanceMutations\MutationResolvers\CreateOrUpdateStanceMutationResolver::class,
            \PoPSitesWassup\Wassup\MutationResolvers\CreateOrUpdateStanceMutationResolver::class
        );
    }
}
