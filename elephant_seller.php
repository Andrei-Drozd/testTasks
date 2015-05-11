#!/usr/bin/php5
<?php
$userName = ($argc != 2) ? 'Anonymous': $argv[1];
printf($userName . ', buy an elephant!%1$s', "\n");
$userMessage = trim(fgets(STDIN));
$answer = $userName . ', everyone say "' . $userMessage .  '" but you ought to buy an elephant!!!';
while (strcasecmp($userMessage, 'exit') !== 0){
    print $answer . "\n";
    $userMessage = trim(fgets(STDIN));
    $answer = $userName . ', everyone say "' . $userMessage .  '" but you ought to buy an elephant!!!';
}
