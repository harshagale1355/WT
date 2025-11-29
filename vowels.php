<?php
$string=strtolower($_POST['str']);

function total_vowels($str){
    $count=0;
    $vowels=array('a','e','i','o','u');
    for($i=0; $i<strlen($str); $i++){
        if(in_array($str[$i],$vowels)){
            $count++;
        }
    }
    return $count;
} 

$vowel_count = array('a'=>0, 'e'=>0, 'i'=>0, 'o'=>0, 'u'=>0); 
for($i=0;$i<strlen($string);$i++){
    if(array_key_exists($string[$i],$vowel_count)){
      $vowel_count[$string[$i]]++;
    }
}

// Display results
echo "<h2>Results</h2>";
echo "Total Vowels: " . total_vowels($string) . "<br><br>";

echo "<h3>Occurrences of each vowel:</h3>";
foreach($vowel_count as $v=>$c){
    echo "$v = $c <br>";
}

?>
