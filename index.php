<?php
function countValue($numbers, $value): int
{
    $count = 0;
    for ($i = 0; $i < count($numbers); $i++) {
        if ($numbers[$i] == $value) {
            $count++;
        }
    }
    return $count;
}

$numbers = [1, 2, 1, 1, 1, 4, 5, 6];
$value = 1;
$result = countValue($numbers, $value);
echo "<br>";
echo "So lan xuat hien " . $value . " trong mang la: " . $result;