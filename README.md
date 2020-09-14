#jzc/junit-laravel

#对框架的要求
Laravel >=5,1 & php>7.1

#安装放肆
```yml
composer require "jzc/junit-laravel
```
#配置方式
laravel版本<=5.5，需手动配置laravel对于junit服务放到config/app.php中

#解释路由
```php
<?php
Route::get('/', 'JunitController@index');
Route::post('/', 'JunitController@store')->name('junit.store');
?>
```