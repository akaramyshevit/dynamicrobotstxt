<?php

header('Content-Type: text/plain');

$host_domain = $_SERVER['HTTP_HOST'];

$user_agent =  array('User-Agent' => array(
'*',
'Googlebot',
'Yandex'
));

$restriction_rule = array(
'Allow',
'Disallow'
);

$uri = array(
'/',
'/admin',
'/administrator',
'/login',
'/cart'
);

echo("User-Agent: {$user_agent['User-Agent'][0]}". PHP_EOL);
echo("{$restriction_rule[1]}: {$uri[0]}". PHP_EOL);
echo("Host: http://{$host_domain}". PHP_EOL);
echo("Sitemap: http://{$host_domain}/sitemap.xml". PHP_EOL);
