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
    $html .= '</div>';
      return $html;
}
}
$johnDoeCard = new StudentCard("ธิทเดช สระทองอุ่น", 644259010, "Software Engineering", "NPRU University", "img/1.avif");

echo $johnDoeCard->name; // Output: John Doe
echo $johnDoeCard->id; // Output: 123456
echo $johnDoeCard->major; // Output: Computer Science
echo $johnDoeCard->university; // Output: University of XYZ
echo $johnDoeCard->photo; // Output: john-doe-photo.jpg
?>