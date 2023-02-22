<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Инструкция

Для начала склонируйте репозиторий себе на локальную машину. Затем создайте БД и пропишите ваши данные такие как "Хост", "Порт", "Логин" и "Пароль" с локального сервера либо же с хостинга в файл ".env". Затем сделайте экспорт БД и импортируйте ее к себе в БД. Так же необходимо указать в файле .htaccess "DirectoryIndex public/index.php" и изменить правило "RewriteRule ^ index.php" на "RewriteRule ^ public/index.php".

## Примечание

Если возникнут ошибки удалите всё содержимое папки "Storage\Logs" и файл "Bootstrap\Cache\Config.php", после этого ошибки дожны пропасть.
