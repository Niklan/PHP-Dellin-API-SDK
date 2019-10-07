# PHP Dellin (Деловые Линии) API SDK

## What is it?

A PHP library which implements API for https://dev.dellin.ru.

## Installation

PHP 7.2+ as minimum requirement because of use new features.

Install package via compose:

```shell
$ composer require niklan/dellin-api
```

## Documentation

- [Offical Dellin documentation](https://dev.dellin.ru/api/)

## Examples

The library is just a set of PHP wrappers to destination endpoints for Dellin.

Currently library supports only **json** format. There is no decoder and encoder for XML and I have not future plans to implement it.

### Public API auth

The minimum required authentication at dev.dellin.ru is `appkey`, which is represented by `AppkeyAuth`.

```php
$auth = new AppkeyAuth('MY-DELLIN-APPKEY');
```

### Session Auth

This authentication method used for some "client specific" API's that requires `sessionID`.

```php
$auth = new SessionAuth('MY-DELLIN-APPKEY', 'SESSION-TOKEN-ID');
```

### Build a Client

For sending request it's need to be isntantiated HttpClient representation. It requires you to pass one of two authentication methods. They will be used during request sending.

```php
$client = new HttpClient($auth);
```

### Send request

You can send request to any Dellin api by using `request()` method from `$client`.

In first argument you pass API endpoint **without** base uri and format, and in second your params.

```php
// @see https://dev.dellin.ru/api/auth/login/
$response = $client->request('/v1/customers/login', ['login' => 'example', 'password' => '123']);
$result = $response->getResult();
```

### Send request using PHP wrapper.

Wrappers for endpoints is simple and just collect data to send in more friendly way.

The request above using wrapper:

```php
$request = new Login('example' , '123');
$response = $client->execute($request);
$result = $response->getResult();
```

In that way:

- You don't need to handle endpoints every time. You just use semantic object.
- All required by an API params will be required by object constructor, so you don't miss something.
- All optional params set by setters.

_It's better to implement php-http.org with PSR-18 in 2.x verions, if it will be created._
