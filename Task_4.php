<!--  Task 4: Multidimensional Array
Create a multidimensional array called $studentGrades to store the grades of three students. Each student has grades for three subjects: Math, English, and Science. Write a PHP function which takes "$studentGrades" as an argument to calculate and print the average grade for each student. -->

<?php
function calculateAverageGrades($studentGrades) {
    foreach ($studentGrades as $student => $grades) {

        $sum = array_sum($grades);
        $average = $sum / count($grades);
    
        echo "Average grade for $student: $average\n";
    }
}

// multidimensional array of student grades
$studentGrades = array(
    'Student 1' => array('Math' => 90, 'English' => 85, 'Science' => 88),
    'Student 2' => array('Math' => 78, 'English' => 92, 'Science' => 89),
    'Student 3' => array('Math' => 95, 'English' => 86, 'Science' => 91)
);

calculateAverageGrades($studentGrades);
?>
