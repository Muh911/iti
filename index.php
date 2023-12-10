<?php
echo"My php first lab<br>";
//Print “Welcome to php” with two ways.
echo"welcome to php<br>";
print'welcome to php<br>';
/*Define the below variables
$x=5

$y=’Welcome ’

$z=True
And print them.*/

$x=5;
$y='welcome';
$z=true;

echo"$x,$y,$z<br>";

//print the type of each variable
echo'type of variable x is: '.gettype($x)."<br>";
echo'type of variable y is: '.gettype($y)."<br>";
echo'type of variable z is: '.gettype($z)."<br>";

//Write a php script to print numbers from 0 to 15 using 2 loop methods

for($i=0;$i<16;$i++)
{
    echo"$i<br>";
}

$i=0;
while ($i<=15)
{
    echo"$i<br>";
    $i++;
}


//Define a constant with value “ITI” with two ways

const ITI="Muhammed";
echo ITI;
echo"<br>";
define("ITP","Muhammed");
echo ITP;


//Add two numbers $m and $n and store them in $result -then check if result > 50 print Accepted else print Not accepted
$m=12;
$x=10;

$z=$m+$x;

if ($z<50)
{
    echo"accepted";
}
else{
    echo"Not accepted";
}

//Write a e PHP script to display strings, values within a table.
 echo "<table border='1'>
 <tr>
     <td>age of Gamal</td>
     <td>30</td>
 </tr>
 <tr>
     <td>age of mahmoud</td>
     <td>20</td>
 </tr>
 <tr>
     <td>age of muhammed</td>
     <td>25</td>
 </tr>
     </table>";




