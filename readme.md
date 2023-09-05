
# Enum Values Trait

## Description

This PHP package provides a trait `EnumValuesTrait` that adds utility methods for working with enumerations (enums).

## Installation

To install the package, run the following command:

```bash
composer require tkachikov/enum-values
```

## Usage

Include the trait into your enum class:

```php
<?php

namespace App\Enums;

use Tkachikov\EnumValues\EnumValuesTrait;

class StateEnum: int
{
    use EnumValuesTrait;

    const ACTIVE = 10;

    const BLOCKED = 20;
}
```

Now you can use the methods `getKeys()`, `getValues()`, `getByKey()` and `getByValue()` for interacting with the enum:

```php
$values = StateEnum::getValues();           // [10, 20]

$keys = StateEnum::getKeys();               // ['ACTIVE', 'BLOCKED']

$arrayByKey = StateEnum::getByKey();        // ['ACTIVE' => 10, 'BLOCKED' => 20]

$arrayByValue = StateEnum::getByValue();    // [10 => 'ACTIVE', 20 => 'BLOCKED']
```

## Author

Alex Tkachikov 
Email: a.tkachikov@mail.ru

## License

MIT
