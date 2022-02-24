<?php
$course_name = 'JS';
$enrolled_students = 15;
$price = 99.9;
$on_discount = true;
echo"Course title: $course_name \nEnrolled Students: $enrolled_students \nCourse price: $price $ \nUSD Course on discount: ";
if($on_discount){
    echo'yes';
}else {
    echo'no';
}
?>
