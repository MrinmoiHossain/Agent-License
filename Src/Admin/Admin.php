<?php
namespace Agent\Admin;
use PDO;

class Admin
{
    public $con = '';

    public function __construct($db_con)
    {
        $this->con = $db_con;
    }

    public function login($data){
        $userName = $data['user'];
        $pass = $data['pass'];
        $stmt = $this->con->prepare("SELECT * FROM `login`");
        $stmt->execute();

        $count = true;
        while($row = $stmt->fetch(\PDO::FETCH_ASSOC)){
            if ($row['userName'] == $userName && $row['pass'] == $pass){
                header('location:http://localhost/AgentLicence/Views/Login/Admin');
                $count = false;
                break;
            }
        }
        if($count){
            header('location:http://localhost/AgentLicence/error.php');
        }
    }

    public function store($data){
        try{
            $stmt = $this->con->prepare("INSERT INTO login(userName, pass) VALUES(:userName, :pass)");
            $stmt->bindparam(":userName", $data['name']);
            $stmt->bindparam(":pass", $data['pass']);
            $result = $stmt->execute();


            if($result){
                header('location:http://localhost/AgentLicence/Views/Admin/showAdmin.php');
                return;
            }
        }
        catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    public function index($id = null){
        $stmt = $this->con->prepare("SELECT * FROM login WHERE id = :id");
        $stmt->bindparam(":id", $id);
        $stmt->execute();

        $admin = $stmt->fetch(\PDO::FETCH_ASSOC);

        return $admin;
    }
    public function show(){

        $query = 'SELECT * FROM login';
        $stmt = $this->con->prepare($query);
        $stmt->execute();

        $admins = [];
        while($admin = $stmt->fetch(\PDO::FETCH_ASSOC)){
            $admins[] = $admin;
        }

        return $admins;
    }
    public function update($data){

        try{
            $stmt = $this->con->prepare("UPDATE login SET userName = :userName, pass = :pass WHERE id = :id");
            $stmt->bindparam(':userName', $data['name']);
            $stmt->bindparam(':pass', $data['pass']);
            $stmt->bindparam(':id', $data['id']);
            $result = $stmt->execute();

            if($result){
                header('location:http://localhost/AgentLicence/Views/Admin/updateAdmin.php');
                return;
            }
        }
        catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    public function delete($id = null){
        if(!isset($id)){
            header('location:http://localhost/AgentLicence/Views/Admin/removeAdmin.php');
            return;
        }
        try{
            $stmt = $this->con->prepare("DELETE FROM login WHERE id = :id");
            $stmt->bindparam(":id", $id);
            $result = $stmt->execute();

            if($result){
                header('location:http://localhost/AgentLicence/Views/Admin/removeAdmin.php');
                return;
            }
        }
        catch(PDOException $e){
            echo $e->getMessage();
        }
    }
}