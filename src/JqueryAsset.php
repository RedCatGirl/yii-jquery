<?php

declare(strict_types=1);

namespace RedCatGirl\Jquery;

use Psr\Container\ContainerInterface;
use Yiisoft\Assets\AssetBundle;

/**
 * Asset jquery javascript files.
 *
 * BootstrapAsset.
 *
 * @package Jquery
 */
final class JqueryAsset extends AssetBundle
{
    public ?string $basePath = '@assets';

    public ?string $baseUrl = '@assetsUrl';

    public ?string $sourcePath = '@npm/jquery/dist';

    public array $js = [
        'jquery.js'
    ];
}
