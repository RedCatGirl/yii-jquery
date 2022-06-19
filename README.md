<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="80px">
    </a>
    <a href="https://github.com/RedCatGirl/yii-jquery" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/70142" height="80px">
    </a>
    <h1 align="center">Yii Framework jQuery Extension</h1>
    <br>
</p>

This extension provides the [jQuery] for the [Yii framework].

[jQuery]:           https://jquery.com/
[Yii Framework]:    https://www.yiiframework.com/

## Requirements

- PHP 7.4 or higher.

## Installation

The package could be installed with composer:

```shell
composer require redcatgirl/yii-jquery --prefer-dist
```

## General usage

## Testing

### Unit testing

The package is tested with [PHPUnit](https://phpunit.de/). To run tests:

```shell
./vendor/bin/phpunit
```

### Mutation testing

The package tests are checked with [Infection](https://infection.github.io/) mutation framework with
[Infection Static Analysis Plugin](https://github.com/Roave/infection-static-analysis-plugin). To run it:

```shell
./vendor/bin/roave-infection-static-analysis-plugin
```

### Static analysis

The code is statically analyzed with [Psalm](https://psalm.dev/). To run static analysis:

```shell
./vendor/bin/psalm
```

## License

The RedCatGirl yii-jquery is free software. It is released under the terms of the BSD License.
Please see [`LICENSE`](./LICENSE.md) for more information.
