compile:
    docker run -v ./:/tmp/ --entrypoint php ircmaxell/php-compiler:16.04 bin/compile.php src/BaseTest.php -o /tmp/BaseTest
