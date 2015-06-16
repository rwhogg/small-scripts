#!/usr/bin/php
<script language="php">
/*
    File Name: hasSource.php
    Creator: Bob Hogg <hogg.bob.2@gmail.com>
    Creation Date: December 21, 2014
    Purpose: This script takes a JAR file and a sources JAR file and determines
             if the sources has all the corresponding source.

             At the moment, this means "contains a .java file for every .class file
             with a $ in it." It does not handle, for example, a public class and a non-public
             class in the same file.
*/
if($argc != 3)
{
    printf("Usage: $argv[0] <class jar> <source jar>\n");
    exit(1);
}
$classes = `7z l $argv[1]   | awk '{print $6}' | grep "\.class" | grep -v '\$.*\.class'`;
$sources = `7z l $argv[2]   | awk '{print $6}' | grep "\.java"`;
$classArray = explode("\n", $classes);
$sourceArray = explode("\n", $sources);
sort($classArray);
sort($sourceArray);
$classToSourceArray = array_map(function($str)
{
    return substr_replace($str, "java", -5);
}, $classArray);
$arrDiff = array_diff($classToSourceArray, $sourceArray);
var_dump($arrDiff);
</script>
