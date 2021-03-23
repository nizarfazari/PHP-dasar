<?php 
class mahasiswa_model{
    private $table = 'mahasiswa';
    private $db;
    
    public function __construct(){
        $this->db = new database;
    }
    public function getAllMahasiswa()   
    {
        $this->db->query(' SELECT * FROM '.$this->table);
        return $this->db->resultSet();
    }
    public function getMahasiswaById($id)
    {
        $this->db->query(' SELECT * FROM '. $this->table.' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahkanDataMahasiswa($data)
    {
        $query = "INSERT INTO mahasiswa VALUES ('', :nrp , :nama  , :jurusan, :email)";

        $this->db->query($query);
        $this->db->bind('nama',$data['nama']);
        $this->db->bind('nrp',$data['nrp']);
        $this->db->bind('jurusan',$data['jurusan']);
        $this->db->bind('email',$data['email']);


        $this->db->execute();

        return $this->db->rowCount();
    }





}


?>