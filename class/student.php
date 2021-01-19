<?php
class student{

var $studentname="Moh";
var $age;
var $gender="Male";
var $mobile="0777308704";

function welcomestudent( $studentname)
{

	echo "Welcome $studentname to our school";
}
 function getgender()
 { return $this->gender;
 }
 function setage($age)
 {
 	$this->age=$age;
 }


}
$std1=new student();

 $s=$std1->studentname;

 $std1->welcomestudent($s);
 echo "<br>";
 echo "<hr>";

 echo $std1->getgender();
 echo "<br>";
 echo "<hr>";

 $std1->setage(16);

echo $std1->age;
echo "<br>";
 echo "<hr>";


if ($std1->age< 18) {
	echo "You Cant Register";

}
else
{
	echo "Welcome to our school";
}





?>