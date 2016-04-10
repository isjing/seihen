# Seihen

Seihen is a lightweight PHP-WAF (Web Application Firewall), the stack of rules is defined in an array and the rules are executed in FIFO order.

## Features

    - Stack of rules
    - CIDR support
    - IP Filtering/Blocking
    - GET Filtering/Blocking
    - POST Filtering/Blocking

## Requirements

    - PHP 5.6+

## Usage

This example shows how to filter a subnet and block three specific IPs.

```PHP
use Seihen\Seihen;
use Seihen\Rules\IP\Filtering\IPFiltering;
use Seihen\Rules\IP\Blocking\IPBlocking;

$rules = [
    IPFiltering::class => '192.168.10.0/24',
    IPBlocking::class => '192.168.10.1',
    IPBlocking::class => '192.168.10.2',
    IPBlocking::class => '192.168.10.3',
];

$seihen = new Seihen($rules);
```
