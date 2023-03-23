<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Student Card</title>
	<style>
		body {
			background-color: #f2f2f2;
            
			font-family: Arial, sans-serif;
		}
		.student-card {
			background-color: white;
            background-image: url('https://img.rawpixel.com/s3fs-private/rawpixel_images/website_content/v546batch3-mynt-34-badgewatercolor_1.jpg?w=1200&h=1200&dpr=1&fit=clip&crop=default&fm=jpg&q=75&vib=3&con=3&usm=15&cs=srgb&bg=F4F4F3&ixlib=js-2.2.1&s=f04d2786c16b18e1ee49ca8128b65221');
            border-radius: 10px;
			box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
			padding: 20px;
			margin: 20px auto;
			width: 600px;
		}
		.student-card img {
			display: block;
			/* margin-left: 500px ; */
			width: 80px;
			height: 100px;
			border-radius: %;
		}
		.student-card h1, .card p {
			text-align: center;
            color: #green;
		}
		.student-card h1 {
			margin-top: 10px;
			font-size: 24px;
		}
        
		.student-card p {
			margin-top: 5px;
			font-size: 16px;
			color: #999;
		}
	</style>
</head>
<body>
 
<!--     
	<div class="student-card">
        
		<img  style="float:left"  src="img/2.png" alt="Student Photo" class="student-photo">
    -->

<!--         
        <h2  class="student-university">มหาวิทยาลัยราชภัฏนครปฐม</p>
   
		<p class="student-name" >Student name:ธิทเดช สระทองอุ่น</h1>
		<p class="student-id">Student ID: 644259010</p>
		<p class="student-major">Major: Software Engineering</p>
		<p  class="student-university">University: NPRU University</p> -->
        <!-- <img style="float:right" src="img/3.jpg" alt="Student Photo" class="student-photo2"> -->
  <?php
     class StudentCard {
  public $name;
  public $id;
  public $major;
  public $university;
  public $photo;

  function __construct($name, $id, $major, $university, $photo) {
    $this->name = $name;
    $this->id = $id;
    $this->major = $major;
    $this->university = $university;
    $this->photo = $photo;
    
  }


function getHTML(){
      
$html = '<div class="student-card">';
$html .= '<img src="' . $this->photo . '" alt="' . $this->name . '" class="student-photo">';
 $html .= '<h1 class="student-name">' . $this->name . '</h1>';
$html .= '<p class="student-id">ID: ' . $this->id . '</p>';
$html .= '<p class="student-major">Major: ' . $this->major . '</p>';
 $html .= '<p class="student-university">University: ' . $this->university . '</p>';
 $dateOfBirth = '2002-11-05'; //วันเกิด รูปแบบ ปี เดือน วัน
$currentDate  = date('Y-m-d'); //วันที่ปัจจุบัน
 $name = "ธิทเดช สระทองอุ่น";
 $id = "644295010";
 $major = "วิศวะกรรมซอฟต์เเวร์";






 
$diff = abs(strtotime($currentDate) - strtotime($dateOfBirth));
 
$years = floor($diff / (365*60*60*24));
$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
 
echo '   อายุ : ';
printf("%d ปี\n", $years, $months, $days);
 
    $html .= '</div>';
    
      return $html;
      
}
}
$johnDoeCard = new StudentCard("ธิทเดช สระทองอุ่น", 644259010, "Software Engineering", "NPRU University", "อายุ20ปี");

echo $johnDoeCard->name; // Output: John Doe
echo $johnDoeCard->id; // Output: 123456
echo $johnDoeCard->major; // Output: Computer Science
echo $johnDoeCard->university; // Output: University of XYZ
echo $johnDoeCard->name; // Output: john-doe-photo.jpg


$students = [
    
  new StudentCard("ธิทเดช สระทองอุ่น", 644259010, "SE", "NPRU University", "img/1.avif","อายุ20ปี")

];

foreach ($students as $student) {
  echo $student->getHTML();

}

     ?>
    	
	</div>
  
</body>
</html>