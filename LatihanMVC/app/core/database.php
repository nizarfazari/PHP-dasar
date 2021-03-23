<?php 

class database
{
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $name = DB_NAME;

    private $dbh;
    private $stmt;

       //membuat construc agar bila model ini di panggil langsung pertama connect ke database

    public function __construct(){//untuk menghubungkan ke data base
        //data source name (koneksi ke pdo)
        $dsn = 'mysql:host=' . $this->host. ';dbname=' . $this->name;

        //untuk mengkonfigurasi koneksi
        $option = [
        //untuk menjaga koneksi data base 
        PDO::ATTR_PERSISTENT => true,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];
        //mengecek data error atau tidak
        try{
        $this->dbh = new PDO ($dsn,$this->user,$this->pass,$option);
            }catch(PDOException $e) {
                die ($e->getMessage());
            }
        }

    public function query( $query )
    {
    $this->stmt = $this->dbh->prepare( $query );
    }

    function bind($params , $value , $type = null )
    {
        if (is_null($type) ){
        switch(true){

            case is_int($value) :
                $type = PDO::PARAM_INT;
                break;
            case is_bool($value) :
                $type = PDO::PARAM_BOOL;
                break;
            case is_null($value) : 
                $type = PDO::PARAM_NULL;
                break;
            default :
                $type = PDO::PARAM_STR;
        }
    }
    
//memasukan paramater,value,dan tipe
$this->stmt->bindValue($params,$value,$type);
}

    public function execute()
{
    //menajalan querynya
    $this->stmt->execute();
}

    public function resultSet()
{
    //menampilkan querynya semua
    $this->execute();
    return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
}

    public function single()
{
    //menampilkan satu
    $this->execute();
    return $this->stmt->fetch(PDO::FETCH_ASSOC);
}

public function rowCount()
    {
        return $this->stmt->rowCount();
    }

}
?>