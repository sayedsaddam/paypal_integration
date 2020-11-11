<?php defined('BASEPATH') OR exit('No direct script access allowed!');
/**
 * Take care of the homepage, automatically be loaded whenever the site's loaded.
 */
class Home extends CI_Controller{
    function __construct()
    {
        parent::__construct();
    }
    // Index function. Whenever the Home class is called, this method will automatically be loaded.
    public function index(){
        $data['title'] = 'Home | Khadiya Towers';
        $data['body'] = 'frontend/home';
        $this->load->view('components/template', $data);
    }
    // Property
    public function property(){
        $data['title'] = 'Property | Khaldiya Towers';
        $data['body'] = 'frontend/property';
        $this->load->view('components/template', $data);
    }
    // Agents
    public function agents(){
        $data['title'] = 'Agents | Khaldiya Towers';
        $data['body'] = 'frontend/agents';
        $this->load->view('components/template', $data);
    }
    // About.
    public function about(){
        $data['title'] = 'About | Khaldiya Towers';
        $data['body'] = 'frontend/about';
        $this->load->view('components/template', $data);
    }
    // Blog
    public function blog(){
        $data['title'] = 'Blog | Khaldiya Towers';
        $data['body'] = 'frontend/blog';
        $this->load->view('components/template', $data);
    }
    // Single blog
    public function single_blog(){
        $data['title'] = 'Blog Detail | Khaldiya Towers';
        $data['body'] = 'frontend/blog-single';
        $this->load->view('components/template', $data);
    }
    // contact
    public function contact(){
        $data['title'] = 'Contact | Khaldiya Towers';
        $data['body'] = 'frontend/contact';
        $this->load->view('components/template', $data);
    }
    // Sign in
    public function signin(){
        echo "Sign In";
    }
    // Sign up
    public function signup(){
        echo "Sign up";
    }
}
