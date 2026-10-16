<?php 
$itemsold=$_POST['itemsold'];
$day=$_POST['day'];
$sold_target=$_POST['sold_target'];
$total_itemsold = $itemsold*$day;
echo "total items:".$total_itemsold."<br>";
if($total_itemsold>=500) $performance="excellent <br>";
else if($total_itemsold>=300) $performance="good";
else if($total_itemsold>=150) $performance="average";
else $performance="poor";
echo "performance:".$performance."<br>";
$diff=$total_itemsold-$sold_target;
if($total_itemsold<$sold_target){
    echo "below target by".($sold_target-$total_itemsold)."<br>";
}
else if($total_itemsold>$sold_target)
{echo "above target by:".($total_itemsold-$sold_target)."<br>"; }
else echo "target met exactly."



?>