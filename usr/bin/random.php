#!/usr/bin/php
<?php
    function usage()
    {
        printf("Usage: random.php n lowInclusive highInclusive\n");
        exit(1);
    }

    if(($argc != 4) or ($argv[2] >= $argv[3]))
    {
        usage();
    }

    // srand() is done automatically
    for($i = 1; $i <= $argv[1]; $i++)
    {
        printf(rand($argv[2], $argv[3]) . "\n");
    }
?>
