# DYNAMICROBOTSTXT

PHP script for creating robots.txt dynamically.

## Basic Usage:

- Put robots.php file in your project directory root

> /myproject/var/www/robots.php


- Edit User-Agent, Restriction rules or uri values in robots.php as needed.

- Add redirect rules on top of the .htaccess ( `check that Web server is capable of such redirect` ) file on top


```apache
RewriteEngine On
RewriteRule ^robots.txt$ /robots.php [L]
```
