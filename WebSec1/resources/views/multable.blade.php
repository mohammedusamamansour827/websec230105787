<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Test</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
<script src="js/bootstrap.bundle.min.js"></script>

</head>

<?php
function isprime($number){
    if($number<2) return false;
    $x = $number - 1;
    while($x>1) {
        if($number%$x == 0) return false;
        $x--;
    }
    return true;
}
?>
@php($j=5)
<body>
<div class="card m-4 col-sm-2">
    <div class="card-header">{{$j}} Multiplication Table</div>
    <div class="card-body">
    <table>
    @foreach (range(1, 10) as $i)
    <tr><td>{{$i}} * {{$j}}</td><td> = {{ $i * $j }}</td></li>
    @endforeach
    </table>
    </div>
</div>
    </div>
</body>

</html>
