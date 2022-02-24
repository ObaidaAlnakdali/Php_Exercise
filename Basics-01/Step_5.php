<?php
$course_name = 'JS';
$enrolled_students = 15;
$price = 99.9;
$on_discount = false;
echo"Course title: $course_name \nEnrolled Students: $enrolled_students \nCourse price: $price $ \nUSD Course on discount: ";
echo ($on_discount == true) ? 'yes' : 'no';
?>
