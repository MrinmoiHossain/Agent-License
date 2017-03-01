<?php
namespace Agent\Employee;

class Employee
{
    public $con = '';

    public function __construct($db_con)
    {
        $this->con = $db_con;
    }

    public function login($data){
        $userName = $data['user'];
        $pass = $data['pass'];
        $stmt = $this->con->prepare("SELECT * FROM `employees`");
        $stmt->execute();

        $count = true;
        while($row = $stmt->fetch(\PDO::FETCH_ASSOC)){
            if ($row['employeeName'] == $userName && $row['employeeId'] == $pass){
                header('location:http://localhost/Agent%20Licence/Views/Login/Employee');
                $count = false;
                break;
            }
        }
        if($count){
            header('location:http://localhost/Agent%20Licence/error.php');
        }
    }

    public function store($data){
        try{
            $stmt = $this->con->prepare("INSERT INTO employees(employeeName, employeeId, contactNumber, email) VALUES(:employeeName, :employeeId, :contactNumber, :email)");
            $stmt->bindparam(":employeeName", $data['name']);
            $stmt->bindparam(":employeeId", $data['idNum']);
            $stmt->bindparam(":contactNumber", $data['contact']);
            $stmt->bindparam(":email", $data['email']);
            $result = $stmt->execute();


            if($result){
                header('location:http://localhost/Agent%20Licence/Views/Employee/showEmployee.php');
                return;
            }
        }
        catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    public function show(){

        $query = 'SELECT * FROM employees';
        $stmt = $this->con->prepare($query);
        $stmt->execute();

        $employees = [];
        while($employee = $stmt->fetch(\PDO::FETCH_ASSOC)){
            $employees[] = $employee;
        }

        return $employees;
    }

    public function index($id = null){
        $stmt = $this->con->prepare("SELECT * FROM employees WHERE id = :id");
        $stmt->bindparam(":id", $id);
        $stmt->execute();

        $employee = $stmt->fetch(\PDO::FETCH_ASSOC);

        return $employee;
    }

    public function update($data){

        try{
            $stmt = $this->con->prepare("UPDATE employees SET employeeName = :employeeName, employeeId = :employeeId, contactNumber = :contactNumber, email = :email WHERE Id = :id");
            $stmt->bindparam(':employeeName', $data['name']);
            $stmt->bindparam(':employeeId', $data['idNum']);
            $stmt->bindparam(':contactNumber', $data['contact']);
            $stmt->bindparam(':email', $data['email']);
            $stmt->bindparam(':id', $data['id']);
            $result = $stmt->execute();

            if($result){
                header('location:http://localhost/Agent%20Licence/Views/Employee/updateEmployee.php');
                return;
            }
        }
        catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    public function delete($id = null){
        if(!isset($id)){
            header('location:http://localhost/Agent%20Licence/Views/Employee/removeEmployee.php');
            return;
        }
        try{
            $stmt = $this->con->prepare("DELETE FROM employees WHERE ID = :id");
            $stmt->bindparam(":id", $id);
            $result = $stmt->execute();

            if($result){
                header('location:http://localhost/Agent%20Licence/Views/Employee/removeEmployee.php');
                return;
            }
        }
        catch(PDOException $e){
            echo $e->getMessage();
        }
    }
}