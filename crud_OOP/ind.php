<?php
abstract class PersonChat
{
    protected $id;
    protected $name;
    protected $email;

    public function getId()
    {
        return $this->id;
    }
    public function __construct($id, $name, $email)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
    }
    abstract public function getDetails();
}


class StudentChat extends PersonChat
{
    protected $major;
    protected $gpa;

    public function getMajor()
    {
        return $this->major;
    }

    public function getgpa()
    {
        return $this->gpa;
    }
    public function setgpa($gpa)
    {
        if ($this->gpa < 0) {
            throw new Exception("Error Processing Request", 1);
        } else {
            $this->gpa = $gpa;
        }
    }
    public function setmajor($major)
    {
        $this->major = $major;
    }
    public function __construct($id, $name, $email, $major, $gpa)
    {
        parent::__construct($id, $name, $email);
        $this->major = $major;
        $this->gpa = $gpa;
    }

    public function getDetails()
    {
        echo "{$this->name}{$this->email}{$this->gpa}";
    }
}


class StudentManager
{
    public array $stock = [];

    public function addStudent(StudentChat $student)
    {
        $this->stock[] = $student;
    }
    public function getAllStudents()
    {
        foreach ($this->stock as $student) {
            $student->getDetails();
        }
    }
    public function getStudentById($id)
    {
        foreach ($this->stock as $student) {
            if ($student->getId() === $id) {
                return $student;
            }
        }
    }
    public function updateStudent($id, $newData)
    {
        foreach ($this->stock as $student) {
            if ($student->getId() === $id) {
                if (isset($newData['name'])) $student->name = $newData['name'];
                if (isset($newData['email'])) $student->email = $newData['email'];
                if (isset($newData['major'])) $student->setMajor($newData['major']);
                if (isset($newData['gpa'])) $student->setGpa($newData['gpa']);
                return true;
            }
        }
        return false;
    }    public function deleteStudent($id)
    {
        foreach ($this->stock as $student) {
            if ($student->getId() === $id) {
                unset($this->stock[$student]);
            }
        }
    }
}
