<?php
$course_name = "Rust, the language of no bugs";
$enrolled_students = 20;
$price = 4.5;
$on_discount = true;
echo "Course title: $course_name";
echo "<br/>";
echo "Enrolled Students: $enrolled_students";
echo "<br/>";
echo "Course price:$price USD";
echo "<br/>";
$on_discount ? $on_discount='yes' : $on_discount='no';
echo "Course on discount: $on_discount";
echo "<br/>";
?>