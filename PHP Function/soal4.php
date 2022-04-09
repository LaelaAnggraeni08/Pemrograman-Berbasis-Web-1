<!DOCTYPE html>
<html>
<body>

<?php 
function is_prime($angka) {
    // 1 adalah bukan bilangan prima
    if ($angka == 1) {
        return false;
    }
    // 2 hanya satu-satunya bilangan genap yang merupakan bilangan prima
    if ($angka == 2) {
        return true;
    }
    // algoritma akar kuadrat mempercepat pengujian bilangan prima yang lebih besar
    $x = sqrt($angka);
    $x = floor($x);

    for ($i = 2; $i <= $x; ++$i) {
        if ($angka % $i == 0) {
            break;
        }
    }

    if ($x == $i-1) {
        return true;
    }
    else {
        return false;
    }
}

function cekPrima($n, $m) {
    $jumlah = 0;
    for($i = $n; $i <= $m; $i++) {
        if (is_prime($i)) {
            echo $i.', ';
            $jumlah++;
        }
    }
    echo "<br>jumlah bilangan prima ".$jumlah."<br>";
}

cekPrima(0,100);
?>

</body>
</html>