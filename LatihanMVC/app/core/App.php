<?php 

class App  {
    protected $controller = 'home';
    protected $method = 'index';
    protected $params = [];

    

    function __construct(){
    $url = $this->parseURL();
    
    //ada atau tidak file misal home ( dari url[0]) . php di dalam controllers (controller)
    if (file_exists('../app/controllers/' . $url[0] . '.php') ){
    //jika ada di timpa dengan home yang baru
    $this->controller = $url[0];
    unset($url[0]);
    }
    //memamanggil controller yang sudah baru
    require_once '../app/controllers/' . $this->controller . '.php';
    //mengintance class yang ada di atas ini dengan controller yang baru
    $this->controller = new $this->controller;  

    //ada atau tidak method pada url[1] (method)
    if ( isset($url[1]) ){
        //methodnya ada atau tidak di dalam controller
        if ( method_exists($this->controller, $url[1]) ){
            //kalau ada timpa dengan method yang baru
            $this->method = $url[1];
            unset($url[1]);
        }
    }
    //semisal user mengirim home/page/satu/dua [ home dan page akan hilang di eliminasi oleh fungsi]
    //akan menjadi satu/dua bila tidak kosong akan di proses (params)
    if ( !empty($url) ){
    //mengambil data array dan masukan ke property params
    $this->params = array_values($url);
    }

    //jalankan controller dan method,serta kirimkan paramater bila ada
    call_user_func_array([$this->controller, $this->method], $this->params);


    }

    public function parseURL(){
    if (isset($_GET['url']) ){
        //agar tidak ada tanda / (slash) misal memasukan url dengan home/page/satu/ menjadi home page satu
        $url = rtrim($_GET['url'], '/');
        //membersihkan url
        $url = filter_var($url, FILTER_SANITIZE_URL);
        //untuk memecah isi menjadi array 
        $url = explode('/', $url);
        return $url;
    }
    
}




}


?>