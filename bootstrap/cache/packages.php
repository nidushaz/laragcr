<?php return array (
  'fideloper/proxy' => 
  array (
    'providers' => 
    array (
      0 => 'Fideloper\\Proxy\\TrustedProxyServiceProvider',
    ),
  ),
  'laravel/tinker' => 
  array (
    'providers' => 
    array (
      0 => 'Laravel\\Tinker\\TinkerServiceProvider',
    ),
  ),
  'laravel-doctrine/orm' => 
  array (
    'providers' => 
    array (
      0 => 'LaravelDoctrine\\ORM\\DoctrineServiceProvider',
    ),
    'aliases' => 
    array (
      'Registry' => 'LaravelDoctrine\\ORM\\Facades\\Registry',
      'Doctrine' => 'LaravelDoctrine\\ORM\\Facades\\Doctrine',
      'EntityManager' => 'LaravelDoctrine\\ORM\\Facades\\EntityManager',
    ),
  ),
);