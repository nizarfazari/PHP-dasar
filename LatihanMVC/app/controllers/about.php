<?php 

class about extends Controller {
    public function index($nama = 'iyur'){
        // mengirim data lewat url
        $data["nama"] = $nama;
        $data['judul'] = 'Halaman about me';
        
        $this->view('template/header',$data);
        $this->view('about/index', $data);
        $this->view('template/footer');
    }

    public function page (){
    $data['judul'] = 'Pages';
    $this->view('template/header', $data);
    $this->view('about/page');
    $this->view('template/footer');
    }
}

?>