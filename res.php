<?php
$essential = array();
$essential[] = $_POST['essential1'];          
$essential[] = $_POST['essential2'];
$essential[] = $_POST['essential3'];                                                                                              
$essential[] = $_POST['essential4'];
$essential[] = $_POST['essential5'];
$essential[] = $_POST['essential6'];
$essential[] = $_POST['essential7'];
$essential[] = $_POST['essential8'];
$essential[] = $_POST['essential9'];
$essential[] = $_POST['essential10'];
$essential[] = $_POST['essential11'];
$essential[] = $_POST['essential12'];
$essential[] = $_POST['essential13'];

foreach($essential as $e){
  $E += $e;
  $E += 0;
}
//var_dump($E);

$select_A = array();
$select_A[] = $_POST['selectA1'];
$select_A[] = $_POST['selectA2'];
$select_A[] = $_POST['selectA3'];
$select_A[] = $_POST['selectA4'];
$select_A[] = $_POST['selectA5'];

foreach($select_A as $sa){
  $SA += $sa;
  $SA += 0;
}          
//var_dump($SA);


$select_B = array();
$select_B[] = $_POST['selectB1'];
$select_B[] = $_POST['selectB2'];
$select_B[] = $_POST['selectB3'];
$select_B[] = $_POST['selectB4'];
$select_B[] = $_POST['selectB5'];
$select_B[] = $_POST['selectB6'];
$select_B[] = $_POST['selectB7'];
$select_B[] = $_POST['selectB8'];

foreach($select_B as $sb){
  $SB += $sb;
  $SB += 0;
}
//var_dump($SB);


$select_C = array();
$select_C[] = $_POST['selectC1'];
$select_C[] = $_POST['selectC2'];

foreach($select_C as $sc){
   $SC += $sc;        
   $SC += 0;        
}                    
//var_dump($SC);


$select = array();
$select[] = $_POST['select1'];
$select[] = $_POST['select2'];
$select[] = $_POST['select3'];
$select[] = $_POST['select4'];
$select[] = $_POST['select5'];
$select[] = $_POST['select6'];
$select[] = $_POST['select7'];
$select[] = $_POST['select8'];
$select[] = $_POST['select9'];
$select[] = $_POST['select10'];
$select[] = $_POST['select11'];
$select[] = $_POST['select12'];
$select[] = $_POST['select13'];
$select[] = $_POST['select14'];
$select[] = $_POST['select15'];
$select[] = $_POST['select16'];
$select[] = $_POST['select17'];
$select[] = $_POST['select18'];
$select[] = $_POST['select19'];
$select[] = $_POST['select20'];
$select[] = $_POST['select21'];
$select[] = $_POST['select22'];
$select[] = $_POST['select23'];
$select[] = $_POST['select24'];
$select[] = $_POST['select25'];
$select[] = $_POST['select26'];
$select[] = $_POST['select27'];

foreach($select as $s){
   $S += $s;
   $S += 0;
}
//var_dump($S);

$sum = $E + $SA + $SB + $SC + $S;
//var_dump($sum);

$SABC = $SA + $SB + $SC;
if($SABC > 17){
  $rest = $SABC - 16;
  $S += $rest;
}


if($E == 26 &&
   $SA >= 8 &&
   $SB >= 6 &&
   $SC >= 2 &&
   $S >= 38 &&
   $sum >= 80){
     $graduation = 1;
   }


?>

<html>
  <head>
  <meta http-equiv="Content-Type" content="text/html"; charset="UTF-8" />
  <title>卒チェキ！</title>
  </head>
  <body>

  <h1>卒チェキ！（デザ情卒業チェッカー）</h1>
  <p>お前ら卒業できんのか〜✌(’ω’)</p>
  <br><br>

<?php

if($graduation == 1) {
  echo "<h1>おめでとう！あとは卒研だけだよ！∩(・ω・)∩（ぱんきょうは知らん)</h1>";
}else{
  echo "<h1>お前まだ単位足りてないのかよ！m9(^Д^)ﾌﾟｷﾞｬｰ</h1>";
}

echo "合計単位数は　'$sum'　だよ〜└( ＾ω＾ )」"

?>
<br></br>
<p>created by ikasama</p>
</body>
  </html>
