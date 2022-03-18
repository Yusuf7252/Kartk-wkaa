<form action="" method="POST">
    Podaj liczbę z której chcesz odbliczyć silnie.
    <input name="liczba">
    Podaj liczbę do Fibonacciego
    <input name="fibo">
    <input type="submit" name="Submit">
</form>
<?php
$liczba=$_POST ['liczba'];

function silnia ($liczba){
    if($liczba==1){
        return 1;
    }
    else{
        return $liczba*silnia($liczba-1);
    }
}
echo (silnia($liczba))."<br>";

$fibo=$_POST ['fibo'];

function fib($fibo){
    if($fibo==0){
        return 0;
    }else if($fibo==1){
        return 1;
    }else{
        return fib($fibo-1) + fib($fibo-2);
    }
}
echo (fib($fibo));
?>