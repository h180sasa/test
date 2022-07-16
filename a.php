#!/usr/bin/php
<?php
$findme = 'abc';
foreach(file('/usr/share/dict/linux.words') as $line){
  if( strpos($line, $findme)!==false){
  echo "$line";
}}
?>
  
