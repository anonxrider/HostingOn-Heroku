<?php return array (
  'name' => 'Laravel',
  'env' => 'production',
  'debug' => false,
  'url' => 'http://localhost/mic/',
  'asset_url' => NULL,
  'timezone' => 'UTC',
  'locale' => 'en_US',
  'fallback_locale' => 'en',
  'key' => 'base64:R2NqSmh0MVBTNEVFVmRIcFJmOVFaYWJDV2g3NElrbHc=',
  'cipher' => 'AES-256-CBC',
  'log' => 'daily',
  'providers' => 
  array (
    0 => 'MicroweberPackages\\App\\Providers\\AppServiceProvider',
    1 => 'MicroweberPackages\\App\\Providers\\EventServiceProvider',
    2 => 'MicroweberPackages\\App\\Providers\\RouteServiceProvider',
  ),
  'manifest' => storage_path().DIRECTORY_SEPARATOR.'framework',
);