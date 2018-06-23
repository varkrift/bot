# vk
VK API client for chatbots with support v. 5.80.


## Documentation

### I. Beginning of work
```php
// config.php

define('VERSION', '5.80');          // VK API version
define('TOKEN', '9d94d3...70d59e'); // your token
define('KEY', '4cw0de5e');          // your security key
```
```php
// example.php

require_once('vk.php'); // connection library for working with VK API
$vk = new VK();         // creating a VK class object
```
******************************************

### II. The universal method
```php
$vk->request($method, $callback = []);

// $method      - methods of VK API
// $callback    - array of transmitted fields
```
#### Request:
```php
$vk->request('users.get', ['user_ids' => '391726310']);
```
#### Response:
```JSON
{
    "response":
    [
        {
        "id": 391726310,
        "first_name": "Sherzod",
        "last_name": "Mamadaliev"
        }
    ]
}
```
