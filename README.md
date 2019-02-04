[![GitHub version](https://badge.fury.io/gh/marufhasan1%2Fuser_info.svg)](https://badge.fury.io/gh/marufhasan1%2Fuser_info)
# User's Information
Getting The Client Information (Client's IP Address,Operating System,Browser Name,Device Type) in PHP 

## Initialize
```php
include('UserInfo.php');
//Or Use Require function
require('UserInfo.php');

```
## Methods

* [get_ip()](#get_ip)
* [get_os()](#get_os)
* [get_browser()](#get_browser)
* [get_device()](#get_device)

### `get_ip()`
If you want to get the client IP Address, Use this Method, This Method will return Client IP Address

**Example**
```php
require('user_info.php');
echo UserInfo::get_ip()
```


### `get_OS()`
If you want to get the client Operating System Name, Use this Method, This Method will return Client Operating System

**Example**
```php
require('user_info.php');
echo UserInfo::get_os();
```


### `get_Browser()`
If you want to get the client's Browser Name, Use this Method, This Method will return Client's Browser Name

**Example**
```php
require('user_info.php');
echo UserInfo::get_browser();
```

### `get_Device()`
If you want to get the client's Device Type Then Use this Method, This Method will return Client's Device Type Name Such as 
Mobile,Tablet,Computer

**Example**
```php
require('user_info.php');
echo UserInfo::get_device();
```
