#

PHPStan rule proof of concept to detect emtpy catch blocks in linting.

Run:
```
./vendor/bin/phpstan analyse -l 8 example.php
```

Output:
![Screenshot](https://raw.githubusercontent.com/cwood-strib/phpstan-no-empty-catch/main/screenshot.png)