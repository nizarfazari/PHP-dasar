<?php 
class home extends Controller {
    //default pada url
    public function index(){
    
    $data['judul'] = 'Halaman home';
    //mengirim data lewat data model
    $data['nama'] = $this->model('user_model')->getUser();
    //menyimpan data alamat 
    $this->view('template/header', $data);
    $this->view('home/index', $data);
    $this->view('template/footer');
    }

}

?>