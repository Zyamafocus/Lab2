<?php 
    require('../config/db.php');
class Picture{
    use DbConection;
    // public $id;
    // public $name;
    // public $size;
    // public $imagepatch;

    public function __construct(public $id, public $name,public $size,public $imagepatch)
    {
        
    }
    function toDb(){
        $q = $this->dbh->prepare('INSERT INTO `pictures` (pic_name, size, imagepath) VALUE (:name, :size, :filepath);');
        $q->execute([':name' => $this->name, ':size' => $this->size, ':filepath' => $this->imagepatch]);
    }
    function  fromDb($id){
        $q = $this->dbh->prepare('SELECT imagepath, pic_name as name, size FROM `pictures` WHERE id = :id');
        $q->execute([':id' => $id]);
        $result = $q->fetch();
        var_dump($result);
    }
}
