<?php
require_once "controller/ConvertController.php";
$newConvert= new Convert();

if(isset($_POST['convert'])){
    $amount = $_POST['amount'];
    $currency_from=$_POST['currency_from'];
    $currecny_to=$_POST['currency_to'];

  echo $s_amount = filter_var($amount, FILTER_SANITIZE_STRING);
  echo $s_currency_from = filter_var($currency_from, FILTER_SANITIZE_STRING);
  echo $s_currecny_to = filter_var($currecny_to, FILTER_SANITIZE_STRING);
  
  echo $newConvert->setCurrency($s_amount,$s_currency_from,$s_currecny_to);
  
}





?>

<html>
<head>
<title>Currency Converter</title>
</head>

<body>
<form action="index.php" method="POST">
    <p>From:</p>
    <select name="currency_from" id="">
    <option value="GHS">GHS</option>
    <option value="NGN">NGN</option>
    <option value="KSH">KSH</option>
    </select>

    <p>To:</p>
    <select name="currency_to" id="">
    <option value="GHS">GHS</option>
    <option value="NGN">NGN</option>
    <option value="KSH">KSH</option>
    </select>
<br>
<br>

    <input type="number" name="amount" id="">

<input type="submit" name="convert" id="">    
</form>


<p>Your rate is <?php 


print $newConvert->getCurrency()["value"];
print $newConvert->getCurrency()["currency_to"];
?></p>
</body>


</html>
