compile:
	 docker run -v `pwd`\:/tmp/ --entrypoint php ircmaxell/php-compiler\:16.04 bin/compile.php -o /tmp/BaseTest /tmp/src/BaseTest.php

