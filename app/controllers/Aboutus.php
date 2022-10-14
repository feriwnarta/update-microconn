<?php 

class AboutUs extends Controller {

    public function index() {
        $data['title'] = 'About Us';
        $this->view('templates/header', $data);
        $this->view('aboutus/aboutus');
        $this->view('templates/footer');
    }

}