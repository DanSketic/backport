backport
=====

[![Build Status](https://travis-ci.org/z-song/backport.svg?branch=master)](https://travis-ci.org/z-song/backport)
[![StyleCI](https://styleci.io/repos/48796179/shield)](https://styleci.io/repos/48796179)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/z-song/backport/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/z-song/backport/?branch=master)
[![Packagist](https://img.shields.io/packagist/l/encore/backport.svg?maxAge=2592000)](https://packagist.org/packages/encore/backport)
[![Total Downloads](https://img.shields.io/packagist/dt/encore/backport.svg?style=flat-square)](https://packagist.org/packages/encore/backport)
[![Awesome Laravel](https://img.shields.io/badge/Awesome-Laravel-brightgreen.svg)](https://github.com/z-song/backport)

`backport` is administrative interface builder for laravel which can help you build CRUD backends just with few lines of code.

[Demo](http://backport.org/demo) use `username/password:admin/admin`

Inspired by [SleepingOwlAdmin](https://github.com/sleeping-owl/admin) and [rapyd-laravel](https://github.com/zofe/rapyd-laravel).

[Documentation](http://backport.org/docs) | [中文文档](http://backport.org/docs/#/zh/)

Screenshots
------------

![backport](https://cloud.githubusercontent.com/assets/1479100/19625297/3b3deb64-9947-11e6-807c-cffa999004be.jpg)

Installation
------------

> This package requires PHP 7+ and Laravel 5.5, for old versions please refer to [1.4](http://backport.org/docs/v1.4/#/) 

First, install laravel 5.5, and make sure that the database connection settings are correct.

```
composer require encore/backport 1.5.*
```

Then run these commands to publish assets and config：

```
php artisan vendor:publish --provider="DanSketic\Backport\BackportServiceProvider"
```
After run command you can find config file in `config/backport.php`, in this file you can change the install directory,db connection or table names.

At last run following command to finish install. 
```
php artisan admin:install
```

Open `http://localhost/admin/` in browser,use username `admin` and password `admin` to login.

Default Settings
------------
The file in `config/backport.php` contains an array of settings, you can find the default settings in there.


Other
------------
`backport` based on following plugins or services:

+ [Laravel](https://laravel.com/)
+ [AdminLTE](https://almsaeedstudio.com/)
+ [Datetimepicker](http://eonasdan.github.io/bootstrap-datetimepicker/)
+ [font-awesome](http://fontawesome.io)
+ [moment](http://momentjs.com/)
+ [Google map](https://www.google.com/maps)
+ [Tencent map](http://lbs.qq.com/)
+ [bootstrap-fileinput](https://github.com/kartik-v/bootstrap-fileinput)
+ [jquery-pjax](https://github.com/defunkt/jquery-pjax)
+ [Nestable](http://dbushell.github.io/Nestable/)
+ [toastr](http://codeseven.github.io/toastr/)
+ [X-editable](http://github.com/vitalets/x-editable)
+ [bootstrap-number-input](https://github.com/wpic/bootstrap-number-input)
+ [fontawesome-iconpicker](https://github.com/itsjavi/fontawesome-iconpicker)

License
------------
`backport` is licensed under [The MIT License (MIT)](LICENSE).
