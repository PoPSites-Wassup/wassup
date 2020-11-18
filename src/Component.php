<?php

declare(strict_types=1);

namespace PoPSitesWassup\Wassup;

use PoP\Root\Component\AbstractComponent;
use PoPSitesWassup\Wassup\Config\ServiceConfiguration;

/**
 * Initialize component
 */
class Component extends AbstractComponent
{
    /**
     * Classes from PoP components that must be initialized before this component
     *
     * @return string[]
     */
    public static function getDependedComponentClasses(): array
    {
        return [
            \GraphQLByPoP\GraphQLServer\Component::class,
            \Leoloso\ExamplesForPoP\Component::class,
            \PoP\FunctionFields\Component::class,
            \PoP\RESTAPI\Component::class,
            \PoP\TraceTools\Component::class,

            \PoP\SiteWP\Component::class,
            \PoP\SPA\Component::class,

            \PoPSchema\BlockMetadataWP\Component::class,
            \PoPSchema\CDNDirective\Component::class,
            \PoPSchema\CommentMetaWP\Component::class,
            \PoPSchema\ConvertCaseDirectives\Component::class,
            \PoPSchema\CustomPostMediaWP\Component::class,
            \PoPSchema\CustomPostMetaWP\Component::class,
            \PoPSchema\GoogleTranslateDirectiveForCustomPosts\Component::class,
            \PoPSchema\PagesWP\Component::class,
            \PoPSchema\PostsWP\Component::class,
            \PoPSchema\PostTagsWP\Component::class,
            \PoPSchema\TaxonomyQueryWP\Component::class,
            \PoPSchema\UserMetaWP\Component::class,
            \PoPSchema\UserRolesACL\Component::class,
            \PoPSchema\UserRolesWP\Component::class,
            \PoPSchema\UserStateWP\Component::class,
            \PoPSchema\PostMutations\Component::class,
            \PoPSchema\CustomPostMediaMutationsWP\Component::class,
            \PoPSchema\CommentMutationsWP\Component::class,

            \PoPSchema\CategoriesWP\Component::class,
            \PoPSchema\NotificationsWP\Component::class,
            \PoPSchema\MenusWP\Component::class,
            \PoPSchema\EventMutationsWPEM\Component::class,
            \PoPSchema\EverythingElseWP\Component::class,
            \PoPSchema\HighlightsWP\Component::class,
            \PoPSchema\LocationPostsWP\Component::class,
            \PoPSchema\StancesWP\Component::class,

            \PoPSitesWassup\PostMutations\Component::class,
            \PoPSitesWassup\HighlightMutations\Component::class,
            \PoPSitesWassup\StanceMutations\Component::class,
            \PoPSitesWassup\CommentMutations\Component::class,
            \PoPSitesWassup\SystemMutations\Component::class,
            \PoPSitesWassup\GravityFormsMutations\Component::class,
        ];
    }

    /**
     * Initialize services
     *
     * @param array<string, mixed> $configuration
     * @param string[] $skipSchemaComponentClasses
     */
    protected static function doInitialize(
        array $configuration = [],
        bool $skipSchema = false,
        array $skipSchemaComponentClasses = []
    ): void {
        parent::doInitialize($configuration, $skipSchema, $skipSchemaComponentClasses);
        ServiceConfiguration::initialize();
    }
}
