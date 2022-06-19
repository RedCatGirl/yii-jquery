<?php

declare(strict_types=1);

namespace RedCatGirl\Jquery\Tests;

use RedCatGirl\JQuery\JqueryAsset;

/**
 * AssetsTest.
 */
final class AssetsTest extends TestCase
{
    protected function tearDown(): void
    {
        parent::tearDown();

        $this->removeAssets('@basePath');
    }

    /**
     * @return array
     */
    public function dataProvider(): array
    {
        return [
            [JqueryAsset::class],
        ];
    }

    /**
     * @dataProvider dataProvider
     *
     * @param string $bundleClass
     */
    public function testAssetsPublish(string $bundleClass): void
    {
        $bundle = new $bundleClass();

        [$bundle->basePath, $bundle->baseUrl] = $this->assetManager->getPublish()->publish(
            $this->assetManager,
            $bundle
        );

        foreach ($bundle->js as $filename) {
            $publishedFile = $bundle->basePath . DIRECTORY_SEPARATOR . $filename;

            $this->assertFileExists($publishedFile);
        }

        $this->assertDirectoryExists(dirname($bundle->basePath . DIRECTORY_SEPARATOR . $bundle->js[0]));
        $this->assertDirectoryExists($bundle->basePath);
    }
}
