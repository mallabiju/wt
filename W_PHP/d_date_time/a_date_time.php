<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Working with PHP date and time</title>
</head>

<body>
    <?php
    /* 
    echo "Today is " . date("y/m/d") . "<br/>"; // Today is 24/05/16
    echo "Today is " . date("y-m-d") . "<br/>"; // Today is 24-05-16
    echo "Today is " . date("y.m.d") . "<br/>"; // Today is 24.05.16
    echo "Today is " . date("Y/m/d") . "<br/>"; // Today is 2024/05/16
    echo "Today is " . date("Y/M/d") . "<br/>"; // Today is 2024/May/16
    echo "Today is " . date("Y/M/D") . "<br/>"; // Today is 2024/May/Thu
    echo "Today is " . date("l") . "<br/>"; //Today is Thursday 
    */

    //Working with TIME
    //h -12 hours time format with leading 0 (01-12)
    //i -minutes leading with 0 (00-59)
    //s -seconds leading with 0 (00-59)
    //a -AM or PM

    echo "Time is " . date("h:i:s") . "<br/>";
    echo "Time is " . date("h:i:sa") . "<br/>";
    ?>
</body>

</html>