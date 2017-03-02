<?php
namespace Agent\Registration;

class Registration
{
    public $con = '';

    public function __construct($db_con)
    {
        $this->con = $db_con;
    }

    public function store($data){
        try{
            $stmt = $this->con->prepare("INSERT INTO registers(CompanyName, LicenceNo, Name, FatherName, BirthDate, ResAddress, Village, PostOffice, Station, District, Education, Nationality, Religion, Bank, BankBranch, AccountNo, TodayDate, ExpDate, Photo, DeclareCon, LawDeclare) VALUES
                                              (:CompanyName , :LicenceNo , :Name, :FatherName, :BirthDate, :ResAddress, :Village, :PostOffice, :Station, :District, :Education, :Nationality, :Religion, :Bank, :BankBranch, :AccountNo, :TodayDate, :ExpDate, :Photo, :DeclareCon, :LawDeclare)");
            $stmt->bindparam(":CompanyName", $data['companyName']);
            $stmt->bindparam(":LicenceNo", $data['licenceNum']);
            $stmt->bindparam(":Name", $data['name']);
            $stmt->bindparam(":FatherName", $data['fatherName']);
            $stmt->bindparam(":BirthDate", $data['birth']);
            $stmt->bindparam(":ResAddress", $data['redAddress']);
            $stmt->bindparam(":Village", $data['village']);
            $stmt->bindparam(":PostOffice", $data['postOffice']);
            $stmt->bindparam(":Station", $data['station']);
            $stmt->bindparam(":District", $data['district']);
            $stmt->bindparam(":Education", $data['education']);
            $stmt->bindparam(":Nationality", $data['nation']);
            $stmt->bindparam(":Religion", $data['religion']);
            $stmt->bindparam(":Bank", $data['bank']);
            $stmt->bindparam(":BankBranch", $data['branch']);
            $stmt->bindparam(":AccountNo", $data['acNo']);
            $stmt->bindparam(":TodayDate", $data['date']);
            $stmt->bindparam(":ExpDate", $data['expDate']);
            $stmt->bindparam(":Photo", $data['photoCheck']);
            $stmt->bindparam(":DeclareCon", $data['declareCheck']);
            $stmt->bindparam(":LawDeclare", $data['lawCheck']);


            $result = $stmt->execute();

            if($result){
                header('location:http://localhost/Agent%20Licence/Views/Registration/confirm.php');
                return;
            }
        }
        catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    public function show(){

        $stmt = $this->con->prepare('SELECT * FROM registers ORDER BY Id DESC LIMIT 1');
        $stmt->execute();

        $registers = [];
        while($register = $stmt->fetch(\PDO::FETCH_ASSOC)){
            $registers[] = $register;
        }

        return $registers;
    }

    public function display(){

        $stmt = $this->con->prepare("SELECT * FROM registers");
        $stmt->execute();

        $results = [];
        while($result = $stmt->fetch(\PDO::FETCH_ASSOC)){
            $results[] = $result;
        }

        return $results;
    }

    public function search($data){
        $stmt = $this->con->prepare("SELECT * FROM registers WHERE CompanyName=:CompanyName");
        $stmt->bindparam(":CompanyName", $data);
        $stmt->execute();

        $singleData = $stmt->fetch(\PDO::FETCH_ASSOC);
        return $singleData;
    }

}