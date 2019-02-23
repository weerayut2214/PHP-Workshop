<?php
    $nameCode = $_GET['name']; // การรับค่าแบบ GET แล้วต้องรับค่าแบบ GET เช่นกัน โดยแปลี่ยน  URL ด้วยก็ได้

    $countryCode = $_GET['country'];

    // echo 'Hi'."  ".$nameCode;

    // echo' From '."  ".$countryCode;


?>

<div>
    <h1>Profile<h1>

    Hi.<b><?php echo $nameCode; ?></b>

    From <u><?php echo $countryCode; ?></u>

    <hr />

</div>