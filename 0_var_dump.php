<?php
$username = 'Ivy'; // 사칼라 함수
$user_array1 = ['Ivy', 34, 'Web programming']; //배열
$user_array2 = [//키/값/배열
      'name' => 'Ivy',
      'age' => 34,
      'majar' => 'Web programming',
];

class User {
  public $name;
  public $age;
  public $majar;
  public function __construct($name, $age, $majar) {
    // => 정위 할 때 매개 변수
    $this -> name = $name;
    $this -> age = $age;
    $this -> majar = $majar;
  } 
}
$user_object = new User('Ivy', 34, 'Web programming')
?>
  <p>Scalar: <?php var_dump($username); ?></p>
  <p>Array1:  <?php var_dump($user_array1); ?></p>
  <p>Array2:  <?php var_dump($user_array2); ?></p>
  <p>Object: <?php var_dump($user_object); ?></p>