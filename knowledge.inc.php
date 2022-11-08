
<?php
$a = 'Мои знания на';
$b = 100;
$c = '%'; 
?>

<?php
  $price = 15;

  if($price >= 15 && $price <= 20)
      $d = 'Это число находится между 15 и 20';
?>

<?php
  $number = 5;
?>
<?php
function increment() {
    static $y = 0;
    echo $y;
	$y++;
}

?> 