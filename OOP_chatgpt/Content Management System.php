<?php
// abstract class PersonTESTT
// {
//     protected $id;
//     protected $name;
//     protected $age;

//     public function __construct($name, $age)
//     {
//         $this->name = $name;
//         $this->age = $age;
//     }
//     abstract public function displayInfo();
// }

// class PatientTESTT extends PersonTESTT
// {

//     public function __construct($name, $age, $department)
//     {
//         parent::__construct($name, $age);
//         $this->department = $department;
//     }
//     public $medicalHistory = [];
//     public $department;
//     public $isAdmitted = false;
//     public function displayInfo()
//     {
//         echo "{$this->name}{$this->age} {$this->department} ";
//     }

//     public function admit() {
//         if ($this->isAdmitted) {
// throw new Exception("Patient is already admitted", 1);
//         }
//     }
//     public function discharge() {
//         if (!$this->isAdmitted) {
//             throw new Exception("canot discharge a patient who isnot admited", 1);
//                     }
//                     $this->isAdmitted=false;
//     }
//     public function addMedicalRecord($date, $description) {
//         $this->medicalHistory[]=[
//             "date"=>$date,
//             "description"=>$description
//         ];
//     }
//     public function displayMedicalRecords() {
//         return $this->medicalHistory;

//     }

//     public function __toString()
//     {
//         return  "{$this->name}{$this->age} {$this->department} ";
//     }
// }



// class Staff extends PersonTESTT
// {


//     public function __construct($name, $age, $position, $salary)
//     {
//         parent::__construct($name, $age);
//         $this->position = $position;
//         $this->salary = $salary;
//     }
//     public $position;
//     public $salary;
//     public static $staffCount = 0;

//     public function displayInfo()
//     {
//         echo "{$this->name}{$this->age} {$this->position} ";
//     }

//     public function calculateYearlySalary() {}
//     public function __get($name) {}
//     public function __set($name, $value) {}
// }

// class DoctorTesTT extends Staff implements Schedulable
// {

//     public $speciality;
//     public $schedule  = [];
//     const MAX_PATIENTS = 5;


//     public function __construct($name, $age, $position, $salary, $speciality)
//     {
//         parent::__construct($name, $age, $position, $salary);
//         $this->speciality = $speciality;
//     }
  


//     public function assignPatient(PatientTESTT $patient)
//     {
//         $this->patients[] = $patient;
//     }


//     public function removePatient(PatientTESTT $patient)
//     {

//         $userchercher = array_search($patient, $this->patients);

//         if ($userchercher!==false) {
//             unset($this->patients[$userchercher]);
//         }else{
//             throw new Exception("patient not found", 1);
            
//         }

//     }

//     public function displayPatients()
//     {
//         foreach ($this->patients as $pat) {
//             echo $pat->displayInfo();
//         }
//     }

//     public function schedule($date, $time, $duration){

//     }
//       public function getSchedule(){
//         return $this->schedule;
//     }
// }


// Interface  Schedulable{

//     public function schedule($date, $time, $duration);
//     public function cancelSchedule($scheduleId);
//     public function getSchedule();
// }


