#!/usr/bin/php
<script language="php">
    for($i = 1; $i < $argc; $i++)
    {
        $str = $argv[$i];
        $len = strlen($str);
        if($str[$len - 1] == '/')
        {
            $str = substr($str, 0, $len - 1);
        }
        printf("%s\n", $str);
    }
</script>