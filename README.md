# web_home 1

http://janbednar.sweb.cz/

#### obsah.html
https://github.com/bedjan/web_home/raw/master/obsah.html

# web_home 2

http://bednar.eu5.org/index.php

#### obsah.html
https://raw.githubusercontent.com/bedjan/web_home/master/obsah_bednar.html


# index.php

zdroj: https://stackoverflow.com/questions/819182/how-do-i-get-the-html-code-of-a-web-page-in-php

```php

<?php

$url = file_get_contents

('https://raw.githubusercontent.com/bedjan/web_home/master/obsah_bednar.html');
echo $url; 

?>

```
