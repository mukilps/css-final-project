
<?php
// This is a function for checking the eligibility according to a specified methode
function checkTheEligibility($diploma, $yearsOfExperience, $graduationDate, $importantSkill) {
 // eligibility criteria
 $actualDiploma = "CP";
 $actualYearsOfExperience = "2";
 $actualGraduationDate = "2025";
 $actualImportantSkill = "Java";
 //Testing if the user data matches or not
 if ($diploma == $actualDiploma &&
 $yearsOfExperience == $actualYearsOfExperience &&
 $graduationDate == $actualGraduationDate &&
 $importantSkill == $actualImportantSkill) {
 return true; // you are eligible
 } else {
 return false; // you are not eligible
 }
}
// Creating size of the array
$arraySize = 1; 
// Adding an empty array 
$userDataArray = []; //To store user data
// user input data
for ($i = 0; $i < $arraySize; $i++) {
 
 $diploma = readline("Enter your diploma initials: ");
 $yearsOfExperience = readline("Enter the number of years of experience: ");
 $graduationDate = readline("Enter your graduation date: ");
 $importantSkill = readline("Enter an important skill: ");
 // Fill the array with the user data 
 $userData = [$diploma, $yearsOfExperience, $graduationDate, $importantSkill];
 $userDataArray[] = $userData;
}
// Checking the eligibility for each user in the array
foreach ($userDataArray as $userData) {
 if (checkTheEligibility(...$userData)) {
 echo "You are eligible, your interview is in 1 week!\n";
 } else {
 echo "We decided to move on with other candidates.\n";
 }
}
?>