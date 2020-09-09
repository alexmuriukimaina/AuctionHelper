<?php
class Bidder{
    public $bidder;
    public $lastname;
    public $firstname;
    public $address;
    public $phone;

    function __construct($bidder,$lastname,$firstname,$address,$phone){
        $this->bidderid = $bidder;
        $this->lastname = $lastname;
        $this->firstname = $firstname;
        $this->address = $address;
        $this->phone = $phone;
    }
    function __toString(){
        $output = "<h2>Bidder Number: $this->bidderid\n $this->lastname,$this->firstname\n $this->address\n $this->phone\n</h2>";
        return $output;
    }
    function saveBidder(){
        $db = new mysqli("localhost","ah_user","AuctionHelper","auction");
        $query = "INSERT INTO bidders VALUES (?, ?, ?, ?, ?)";
        $stmt = $db->prepare($query);
        $stmt->bind_param("issss",$this->bidderid,$this->lastname,$this->firstname,$this->address,$this->phone);
        $result = $stmt->execute();
        $db->close();
        return $result;
    }
    function updateBidder(){
        $db = new mysqli("localhost","ah_user","AuctionHelper","auction");
        $query = "UPDATE bidders SET bidderid=?,lastname=?,firstname=?,address=?,phone=?,WHERE bidderid=$this->bidderid";
        $stmt = $db->prepare($query);
        $stmt->bind_param("issss",$this->bidderid,$this->lastname,$this->firstname,$this->address,$this->phone);
        $result = $stmt->execute();
        $db->close();
        return $result;
    }
    function removeBidder(){
        $db = new mysqli("localhost","ah_user","AuctionHelper","auction");
        $query = "DELETE FROM bidders WHERE bidderid=$this->bidderid";
        $result = $db->query($query);
        $db->close();
        return $result;
    }
    function getBidders(){
        $db = new mysqli("localhost","ah_user","AuctionHelper","auction");
        $query = "SELECT * FROM bidders";
        $result = $db->query($query);
        if(mysqli_num_rows($result) > 0){
            $bidders = array();
            while($row=$result->fetch_array(MYSQLI_ASSOC)){
                $bidder = new Bidder($row['bidderid'],$row['lastname'],$row['firstname'],$row['address'],$row['phone']);
                array_push($bidders,$bidder);
                unset($bidder);
            }
            $db->close();
            return $bidders;
        }else{
            $db->close();
            return NULL;
        }
    }
    static function findBidder($bidderid){
        $db = new mysqli("localhost","ah_user","AuctionHelper","auction");
        $query = "SELECT * FROM bidders WHERE bidderid=$bidderid";
        $result = $db->query($query);
        $row = $result->fetch_array(MYSQLI_ASSOC);
        if($row){
            $bidder = new Bidder($row['bidderid'],$row['lastname'],$row['firstname'],$row['address'],$row['phone']);
            $db->close();
            return $bidder;
        }else{
            $db->close();
            return NULL;
        }
    } 
}
?>