<?php

// TASK 2, item 1
echo basename(__FILE__) . "\n";
echo basename(__LINE__) . "\n";


// TASK 2, item 2
$multy_line_heredoc_variable = <<<HEREDOC_LINE
This is multyline heredoc variable 
according to the task
HEREDOC_LINE;

echo $multy_line_heredoc_variable . "\n";


// TASK 2, item 3
$a = 'Рыба';
$b = 'человек';

echo "$a рыбою сыта, а $b человеком" . "\n";



// TASK 3, if - else
$incomig_variable = 'var';

if (is_bool($incomig_variable)) {
    echo "The $incomig_variable is bool";
} elseif (is_float($incomig_variable)) {
    echo "The $incomig_variable is float";
} elseif (is_int($incomig_variable)) {
    echo "The $incomig_variable is int";
} elseif (is_string($incomig_variable)) {
    echo "The $incomig_variable is string";
} elseif (is_null($incomig_variable)) {
    echo "The $incomig_variable is null";
} else {
    echo "The $incomig_variable is other type";
}

echo "\n";


// TASK 3, switch - case
switch (true) {
    case is_bool($incomig_variable):
        echo "The $incomig_variable is bool";
        break;
    case is_float($incomig_variable):
        echo "The $incomig_variable is float";
        break;
    case is_int($incomig_variable):
        echo "The $incomig_variable is int";
        break;
    case is_string($incomig_variable):
        echo "The $incomig_variable is string";
        break;
    case is_null($incomig_variable):
        echo "The $incomig_variable is null";
        break;                                        
    default:
        echo "The $incomig_variable is other type";
}