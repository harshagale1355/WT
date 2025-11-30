<?php
echo "First File\n";
$first = trim(fgets(STDIN));
echo "second File\n";
$second = trim(fgets(STDIN));

if(!file_exists($first)){
    echo "File does not exist";
}

$content = file_get_contents($first);

file_put_contents($second,$content, FILE_APPEND);

echo "Content from '$first' has been successfully appended to '$second'.\n";


?>