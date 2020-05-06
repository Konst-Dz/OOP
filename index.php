<?php
//1
/*class Employee {
    public $name;
    public $age;
    public $salary;
}
$user = new Employee();
$user->age = 25;
$user->name = 'Kolia';
$user->salary = 300;

$user2 = new Employee();
$user2->age = 30;
$user2->name = 'Vasia';
$user2->salary = 400;
echo $user2->age + $user->age . "<br>" ;
echo $user2->salary + $user->salary . "<br>" ;*/
//2
/*class User {
    public $name;
    public $age;
    public function show($str)
    {
        return '!!!'.$str;
    }
}
$user = new User();
$user->age = 25;
$user->name = 'Kolia';
echo $user ->show('hello');*/
//3
/*class Employee {
    public $name;
    public $age;
    public $salary;

    public function getAge()
    {
        return $this->age;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getSalary()
    {
        return $this->salary;
    }

    public function checkAge()
    {
        return $this->age >= 18;
    }
}
$user = new Employee();
$user->age = 25;
$user->name = 'Kolia';
$user->salary = 300;
echo $user->checkAge();

$user2 = new Employee();
$user2->age = 30;
$user2->name = 'Vasia';
$user2->salary = 400;
echo $user2->getSalary() + $user->getSalary() . "<br>" ;*/
//4
/*class User {
    public $name;
    public $age;
    public function checkAge()
    {
        return $this->age >= 18;
    }

    public function setAge($age)
    {
        $this->checkAge() ? $this->age = $age : false ;

    }
}
$user = new User();
$user->age = 2;
$user->name = 'Kolia';
$user->setAge(30);
echo $user ->age;

class Employee {
    public $name;
    public $salary;

    public function doubleSalary()
    {
        return $this->salay * 2 ;
    }
}
$user = new Employee();
$user->name = 'Kolia';
$user->salary = 300;

class Rectangle {
    public $height;
    public $width;

    public function getSquare()
    {
        return $this->height * $this->height ;
    }

    public function getPerimeter()
    {
        return ($this->height * 2) + ($this->height * 2);
    }
}*/
//5
/*class User {
    public $name;
    public $age;
    public function isCorrect($age)
    {
        return $age >= 18 and $age <=60;
    }

    public function setAge($age)
    {
        if($this->isCorrect($age)) $this -> age = $age;
    }

    public function addAge($age)
    {
        $newAge = $this->age + $age;
        if($this -> isCorrect($newAge)) $this -> age = $newAge;
    }

    public function subAge($age)
    {
        $newAge = $this->age - $age;
        if($this -> isCorrect($newAge)) $this -> age = $newAge;
    }

}
$user = new User();
$user->name = 'Kolia';
$user->setAge(30);
$user->addAge(30);
$user->subAge(20);
echo $user ->age;*/
//6
/*class Student {
    public $name;
    public $course;

    public function transferToNextCourse()
    {
        $course = $this -> course + 1;
        if($this->isCourseCorrect($course)) $this -> course = $course;
    }

    private function isCourseCorrect($course)
    {
        return $course <= 5 ;
    }
}
$user = new Student();
$user->name = 'Kolia';
$user ->course = 2;
$user->transferToNextCourse();
echo $user ->course;*/
//7
/*class Employee {
    public $name;
    public $age;
    public $salary;

    public function __construct($age,$name,$salary)
    {
        $this->age = $age;
        $this->name = $name;
        $this->salary = $salary;
    }


}
$user = new Employee(32,'vasia',380);

$user2 = new Employee(22,'dima',280);

echo $user2->salary + $user->salary . "<br>" ;*/
//8
/*class Employee {
    public $name;
    public $age;
    public $salary;


    public function setName($name)
    {
        $this->name = $name;
    }


    public function getName()
    {
        return $this->name;
    }

    public function setAge($age)
    {
       $age>1 and $age<100 ? $this->age = $age : false ;
    }


    public function getAge()
    {
        return $this->age;
    }


    public function setSalary($salary)
    {
        $this->salary = $salary ;
    }

    public function getSalary()
    {
        return $this->salary . "$";
    }

}
$user = new Employee();
$user ->setAge(27);
echo $user ->getAge();
echo $user ->getSalary();*/
//9
/*class Employee {
    public $name;
    private $surname;
    public $salary;

    public function __construct($name,$surname,$salary)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->salary = $salary ;
    }


    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }


    public function getSurname()
    {
        return $this->surname;
    }

    public function setSalary($salary)
    {
        $this->salary = $salary ;
    }

    public function getSalary()
    {
        return $this->salary . "$";
    }

}
$user = new Employee('john','smith',320);
echo $user ->getSurname();*/
require_once 'Date.php';
$date = new Date('2025-12-31');
//echo $date->subYear(2)->getYear();
echo $date->addDay(7)->getDay()."<br>";
echo $date->addMonth(1)->getMonth()."<br>";

