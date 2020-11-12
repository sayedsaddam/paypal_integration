<?php defined('BASEPATH') OR exit('No direct script access allowed!');
/**
 * Take care of the homepage, automatically be loaded whenever the site's loaded.
 */
class Home extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('home_model'); // Load the home_model class to access all the queries written in it.
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
        $username = $this->input->post('username');
        $password = sha1($this->input->post('password'));
        $login = $this->home_model->signin($username, $password);
        if($login > '0'){
            $id = $login->id;
            $username = $login->username;
            $name = $login->name;
            $this->session->set_userdata(array('id' => $id, 'username' => $username, 'name' => $name));
            redirect('home');
        }else{
            echo "<strong>Oops! </strong>You don't belong here. Try entering valid username and password to come here.";
        }
    }
    // Sign up
    public function signup(){
        $data = array(
            'name' => $this->input->post('name'),
            'username' => $this->input->post('username'),
            'email' => $this->input->post('email'),
            'password' => sha1($this->input->post('password'))
        );
        if($this->home_model->sign_up($data)){
            $this->session->set_flashdata('success', '<strong>Success! </strong>Signup successful. Ues your credential to login');
            redirect('home');
        }else{
            $this->session->set_flashdata('failed', '<strong>Failed! </strong>Something went wrong, but do not fret, just give it another shot.');
            redirect('home');
        }
    }
    // Signout.
    public function signout(){
        // $this->session->unset_userdata('username'); // We can use both functions to destroy session and log the user out.
        $this->session->sess_destroy();
        redirect('home');
    }
}
