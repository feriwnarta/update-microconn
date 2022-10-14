<?php

class About extends Controller
{
    public function index()
    {
        $data['title'] = "Welcome To Microconn";
        $this->view('templates/header', $data);
        $this->view("about/about");
        $this->view("templates/footer");
    }
}
