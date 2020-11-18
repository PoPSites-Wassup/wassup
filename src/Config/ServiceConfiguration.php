<?php

declare(strict_types=1);

namespace PoPSitesWassup\Wassup\Config;

use PoP\Root\Component\PHPServiceConfigurationTrait;
use PoP\ComponentModel\Container\ContainerBuilderUtils;
use PoP\ComponentModel\Instances\InstanceManagerInterface;
use PoPSitesWassup\ContactUsMutations\MutationResolverBridges\ContactUsComponentMutationResolverBridge;
use PoPSitesWassup\ContactUserMutations\MutationResolverBridges\ContactUserComponentMutationResolverBridge;
use PoPSitesWassup\FlagMutations\MutationResolverBridges\FlagCustomPostComponentMutationResolverBridge;
use PoPSitesWassup\ShareMutations\MutationResolverBridges\ShareComponentMutationResolverBridge;
use PoPSitesWassup\VolunteerMutations\MutationResolverBridges\VolunteerComponentMutationResolverBridge;
use PoPSitesWassup\NewsletterMutations\MutationResolverBridges\NewsletterSubscriptionComponentMutationResolverBridge;
use PoPSitesWassup\NewsletterMutations\MutationResolverBridges\NewsletterUnsubscriptionComponentMutationResolverBridge;
use PoPSitesWassup\GravityFormsMutations\MutationResolverBridges\GravityFormsAddEntryToFormMutationResolverBridge;

class ServiceConfiguration
{
    use PHPServiceConfigurationTrait;

    protected static function configure(): void
    {
        ContainerBuilderUtils::injectValuesIntoService(
            InstanceManagerInterface::class,
            'overrideClass',
            ContactUsComponentMutationResolverBridge::class,
            GravityFormsAddEntryToFormMutationResolverBridge::class
        );

        ContainerBuilderUtils::injectValuesIntoService(
            InstanceManagerInterface::class,
            'overrideClass',
            ContactUsComponentMutationResolverBridge::class,
            GravityFormsAddEntryToFormMutationResolverBridge::class
        );

        ContainerBuilderUtils::injectValuesIntoService(
            InstanceManagerInterface::class,
            'overrideClass',
            ContactUserComponentMutationResolverBridge::class,
            GravityFormsAddEntryToFormMutationResolverBridge::class
        );

        ContainerBuilderUtils::injectValuesIntoService(
            InstanceManagerInterface::class,
            'overrideClass',
            FlagCustomPostComponentMutationResolverBridge::class,
            GravityFormsAddEntryToFormMutationResolverBridge::class
        );

        ContainerBuilderUtils::injectValuesIntoService(
            InstanceManagerInterface::class,
            'overrideClass',
            VolunteerComponentMutationResolverBridge::class,
            GravityFormsAddEntryToFormMutationResolverBridge::class
        );

        ContainerBuilderUtils::injectValuesIntoService(
            InstanceManagerInterface::class,
            'overrideClass',
            ShareComponentMutationResolverBridge::class,
            GravityFormsAddEntryToFormMutationResolverBridge::class
        );

        ContainerBuilderUtils::injectValuesIntoService(
            InstanceManagerInterface::class,
            'overrideClass',
            NewsletterSubscriptionComponentMutationResolverBridge::class,
            GravityFormsAddEntryToFormMutationResolverBridge::class
        );

        ContainerBuilderUtils::injectValuesIntoService(
            InstanceManagerInterface::class,
            'overrideClass',
            \GD_GF_DataLoad_ActionExecuter_NewsletterUnsubscription::class, //NewsletterUnsubscriptionComponentMutationResolverBridge::class,
            GravityFormsAddEntryToFormMutationResolverBridge::class
        );
    }
}
