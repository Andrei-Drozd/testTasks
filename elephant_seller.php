#!/usr/bin/php5
<?php
$userName = ($argc != 2) ? 'Anonymous': $argv[1];
printf('buy an elephant!', $userName);
$userMessage = trim(fgets(STDIN));
$answer = 'everyone say' .$userMessage.  'but you ought to buy an elephant!!!';
$message = sprintf($answer, $userName, '%1$s');
while (strcasecmp($userMessage, 'exit') !== 0){
    printf($message, $userMessage);
    $userMessage = trim(fgets(STDIN));
}