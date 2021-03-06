# pipeline

[简体中文](README-CN.md) | [ENGLISH](README.md)

> A simple PHP middleware pipeline. - 一个简单的 PHP 中间件管道。

[![Tests](https://github.com/coolephp/pipeline/workflows/Tests/badge.svg)](https://github.com/coolephp/pipeline/actions)
[![Check & fix styling](https://github.com/coolephp/pipeline/workflows/Check%20&%20fix%20styling/badge.svg)](https://github.com/coolephp/pipeline/actions)
[![codecov](https://codecov.io/gh/coolephp/pipeline/branch/main/graph/badge.svg?token=URGFAWS6S4)](https://codecov.io/gh/coolephp/pipeline)
[![Latest Stable Version](https://poser.pugx.org/coolephp/pipeline/v)](//packagist.org/packages/coolephp/pipeline)
[![Total Downloads](https://poser.pugx.org/coolephp/pipeline/downloads)](//packagist.org/packages/coolephp/pipeline)
[![License](https://poser.pugx.org/coolephp/pipeline/license)](//packagist.org/packages/coolephp/pipeline)

## 环境要求

* PHP >= 7.2

## 安装

``` bash
$ composer require coolephp/pipeline --prefer-dist -vvv
```

## 注册服务

`config\app.php` 中添加

``` php
<?php

return [
    /*
     * 第三方服务
     */
    'providers' => [
        ...
        \Coole\Pipeline\PipelineServiceProvider::class,
        ...
    ],
];
```

## 使用

``` php
app('pipeline')
	->send($object)
    ->through($middleware)
    // ->with('bar')
    // ->via('differentMethod')
    // ->thenReturn()
    ->then(function(){
    	// middleware is finished
    });
```

## 测试

``` bash
$ composer test
```

## 变更日志

请参阅 [CHANGELOG](CHANGELOG.md) 获取最近有关更改的更多信息。

## 贡献指南

请参阅 [CONTRIBUTING](.github/CONTRIBUTING.md) 有关详细信息。

## 安全漏洞

请查看[我们的安全政策](../../security/policy)了解如何报告安全漏洞。

## 贡献者

* [guanguans](https://github.com/guanguans)
* [所有贡献者](../../contributors)

## 协议

MIT 许可证（MIT）。有关更多信息，请参见[协议文件](LICENSE)。
