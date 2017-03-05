# User's Information
Getting The Client Information (Client's IP Address,Operating System,Browser Name,Device Type) in PHP 

## Initialize
```php
include('user_info.php');
//Or Use Require function
require('user_info.php');
$c_info = new Users_info;
```
## Methods

* [c_ip()](#c_ip)
* [c_OS()](#c_OS)
* [c_Browser()](#c_Browser)
* [c_Device()](#c_Device)

### `c_ip()`
If you want to get the client IP Address Use this Method This Method will return Client IP Address

**Example**
```php
	require('user_info.php');
	$c_info = new Users_info;
	echo $ttt->c_ip();
```


### `c_OS()`
If you want to get the client Operating System Name Use this Method This Method will return Client Operating System

**Example**
```php
	require('user_info.php');
	$c_info = new Users_info;
	echo $ttt->c_OS();
```
