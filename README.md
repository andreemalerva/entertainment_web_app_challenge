# entertainment_web_app_challenge

## Sobre el proyecto

Este proyecto es un CRUD con codeigniter como framework, haciendo uso de HTML, CSS y Javascript, asiendo uso ademas de API's externa para simulación de una aplicación para ver peliculas.

## Sobre los desarrolladores


## Sobre la instalación

Si ya se tiene una instalación previa de PHP usar 'php spark serve' para correr el proyecto

# Challenge 

Este proyecto tiene un diseño inspirado en las siguientes páginas:

[Front end mentor] (https://www.frontendmentor.io/challenges/entertainment-web-app-J-UhgAW1X)

https://www.figma.com/design/o8pHYE7SF5vxZD5lNnGr9T/Movie-Listing-Web-App-(Community)?node-id=1007-2410&t=lm6n4buLURoJbf9N-0

https://www.figma.com/design/I2pwaKf5JQ98YCXdv7Qgko/Movie-Listing-Web-App-(Community)?node-id=401-6827&t=h3TIVga0a6ibfeBu-0

https://www.figma.com/community/file/1229359474368012775

https://www.figma.com/design/E4zrtSd5oOsygYDsShv1ye/MOVIE-WEBSITE-UI-DESIGN-(Community)?node-id=0-1&t=TygZug7ccSFlMZKD-0

https://www.figma.com/community/file/1229359474368012775



## Sobre CodeIgniter 4 Framework

### What is CodeIgniter?

CodeIgniter is a PHP full-stack web framework that is light, fast, flexible and secure.
More information can be found at the [official site](https://codeigniter.com).

This repository holds the distributable version of the framework.
It has been built from the
[development repository](https://github.com/codeigniter4/CodeIgniter4).

More information about the plans for version 4 can be found in [CodeIgniter 4](https://forum.codeigniter.com/forumdisplay.php?fid=28) on the forums.

You can read the [user guide](https://codeigniter.com/user_guide/)
corresponding to the latest version of the framework.

### Important Change with index.php

`index.php` is no longer in the root of the project! It has been moved inside the *public* folder,
for better security and separation of components.

This means that you should configure your web server to "point" to your project's *public* folder, and
not to the project root. A better practice would be to configure a virtual host to point there. A poor practice would be to point your web server to the project root and expect to enter *public/...*, as the rest of your logic and the
framework are exposed.

**Please** read the user guide for a better explanation of how CI4 works!

### Repository Management

We use GitHub issues, in our main repository, to track **BUGS** and to track approved **DEVELOPMENT** work packages.
We use our [forum](http://forum.codeigniter.com) to provide SUPPORT and to discuss
FEATURE REQUESTS.

This repository is a "distribution" one, built by our release preparation script.
Problems with it can be raised on our forum, or as issues in the main repository.

### Contributing

We welcome contributions from the community.

Please read the [*Contributing to CodeIgniter*](https://github.com/codeigniter4/CodeIgniter4/blob/develop/CONTRIBUTING.md) section in the development repository.

### Server Requirements

PHP version 8.1 or higher is required, with the following extensions installed:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)

> [!WARNING]
> The end of life date for PHP 7.4 was November 28, 2022.
> The end of life date for PHP 8.0 was November 26, 2023.
> If you are still using PHP 7.4 or 8.0, you should upgrade immediately.
> The end of life date for PHP 8.1 will be November 25, 2024.

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php) if you plan to use MySQL
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library
