<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function fibonacciRecursive($n) {
        if ($n <= 0) {
            return 0;
        } elseif ($n == 1) {
            return 1;
        } else {
            return fibonacciRecursive($n - 1) + fibonacciRecursive($n - 2);
        }
    }
    
    $n = 10;
    $fibonacciSeries = array();
    
    for ($i = 0; $i < $n; $i++) {
        $fibonacciSeries[] = fibonacciRecursive($i);
    }
    
    echo "Dãy số Fibonacci: ";
    foreach ($fibonacciSeries as $num) {
        echo $num . " ";
    }
    
    ?>
    
</body>
</html>