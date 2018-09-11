# Library for Swedish name days (Svenska namnsdagar)

Install with composer `require jongotlin/swedish-name-days`.

```php
use JGI\NameDay\NameDay;
...
echo (new NameDay())->getNamesByDate(new \DateTime('2018-08-21'))[0]; 
// Jon

```

