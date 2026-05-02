<?php
$subjects = ["Math", "Physics", "Chemistry", "Biology"];
foreach ($subjects as $subject) {
    echo "Studying: $subject<br>";
}
// With key and value
$marks = ["Math" => 92, "Physics" => 85, "Chemistry" => 78];
foreach ($marks as $subject => $score) {
    echo "$subject : $score<br>";
}
?>