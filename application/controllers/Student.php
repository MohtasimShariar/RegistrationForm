<?php
class Student extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('data_model','data');
    }

    public function index()
    {
        $info['student_fetch']=$this->data->get_table_data('users');
        $this->load->view('student',$info);
    }

    public function add_student(){
        $data= array(
            
            'name'=> $this->input->post('name'),
            'email'=> $this->input->post('email'),
            'phone'=> $this->input->post('phone'),
            'gender'=> $this->input->post('gender'),
            'address'=> $this->input->post('address'),
            'age'=> $this->input->post('age'),
            'date'=> $this->input->post('date')
        );
        // calling a  model to insert data
        $this->data->insert_data('users',$data);
        //page refresh
        header('Location:'.base_url().'Student');
    }


    public function update_student(){
        $id = $this->input->post('hid');
        $data= array(
            'name'=> $this->input->post('name'),
            'email'=> $this->input->post('email'),
            'phone'=> $this->input->post('phone'),
            'gender'=> $this->input->post('gender'),
            'address'=> $this->input->post('address'),
            'age'=> $this->input->post('age'),
            'date'=> $this->input->post('date')
        );
        // calling a  model to insert data
        $this->data->update_data('users',$data,$id);
        //page refresh
        header('Location:'.base_url().'Student');

    }
    public function modify(){
        $id =$this->uri->segment(3);
        $info['modify']=$this->data->get_modify_data('users',$id);
       
        $info['student_fetch']=$this->data->get_table_data('users');
        $this->load->view('student',$info);

    }


    public function remove(){
        $id =$this->uri->segment(3);
        $this->data->remove_record('users',$id);
        //page refresh
        header('Location:'.base_url().'Student');
    }
}
?>