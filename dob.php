
<?php 

//Set ว/ด/ป เวลา ให้เป็นของประเทศไทย
date_default_timezone_set('Asia/Bangkok');
 echo '<h2  > มหาวิทยาลัยราชภัฏนครปฐม </h2>';

 echo '<br>';echo '<br>';
echo '<h3> ข้อมูลส่วนตัว </h3>';

 $dateOfBirth = '2002-11-05'; //วันเกิด รูปแบบ ปี เดือน วัน
$currentDate  = date('Y-m-d'); //วันที่ปัจจุบัน
 $name = "ธิทเดช สระทองอุ่น";
 $id = "644295010";
 $major = "วิศวะกรรมซอฟต์เเวร์";



echo 'ชื่อ : ' .$name;
echo '<br>';echo '<br>';
echo 'รหัสนักศึกษา : ' .$id;
echo '<br>';echo '<br>';
echo 'ภาควิชา : ' .$major;
echo '<br>';echo '<br>';
echo 'เกิดวันที่ : ' .$dateOfBirth;
echo '<br>';echo '<br>';


 
$diff = abs(strtotime($currentDate) - strtotime($dateOfBirth));
 
$years = floor($diff / (365*60*60*24));
$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
 
echo '   อายุ : ';
printf("%d ปี\n", $years, $months, $days);
 
 echo '<hr>';

?>