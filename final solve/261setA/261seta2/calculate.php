<?php
if (isset($_POST['submit'])) {
    $credit = $_POST['credit'];
    $course_complete = $_POST['course_complete'];
    $target = $_POST['target'];
    $total_credit = $credit * $course_complete;
    if ($total_credit >= 120)
        $progress = "excellent";
    else if ($total_credit >= 90)
        $progress = "good";
    else if ($total_credit >= 60)
        $progress = "average";
    else
        $progress = "poor";
    echo "target:" . $target . "<br>";
    echo "total credits:" . $total_credit . "<br>";
    echo "progress:" . $progress . "<br>";


    if ($target > $total_credit) {
        echo "below target by " . ($target - $total_credit);
    } else if ($target < $total_credit) {
        echo "above target by " . ($total_credit - $target);
    } else
        echo "target met exactly(o difference)";




}
?>