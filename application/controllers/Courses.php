<?php

/**
 * 
 */
class Courses extends Ci_controller{
	
	public function add(){


		$this->form_validation->set_rules('english','English','required');
        $this->form_validation->set_rules('maths','Mathematics','required');
        if ($this->form_validation->run()==false) {
            $this->load->view('courses/courses_form');
        } else{
                $data = array(
                'english'=>$this->input->post('english'),
                'maths'=>$this->input->post('maths'),
                'chemistry'=>$this->input->post('chemistry'),
                'biology'=>$this->input->post('biology'),
                'account'=>$this->input->post('account'),
                'literature'=>$this->input->post('literature'),
                'literature'=>$this->input->post('literature'),
                'commerce'=>$this->input->post('commerce'),
                'goverment'=>$this->input->post('goverment'),
                'food_nutrition'=>$this->input->post('food_nutrition'),
                'history'=>$this->input->post('history'),
                'physics'=>$this->input->post('physics'),
                'technical_drawing'=>$this->input->post('technical_drawing'),
                'agriculture'=>$this->input->post('agriculture'),
                'geography'=>$this->input->post('geography'),
                'further_maths'=>$this->input->post('further_maths'),
                'economics'=>$this->input->post('economics'),
                'crk'=>$this->input->post('crk'),
                'health_education'=>$this->input->post('health_education'),
                'music'=>$this->input->post('music'),
                'fine_arts'=>$this->input->post('fine_arts'),
                'wood_work'=>$this->input->post('wood_work'),
                'french'=>$this->input->post('french'),
                'user_id'=>$this->input->post('user_id'),
                
            );
               
                $id = $this->input->post('user_id');
                $this->Courses_model->insert($data);
                $this->session->set_flashdata('courses','Thank you !!!!');
                redirect('result');        

        }

		
	}



    public function courses_list(){

        $data['course'] = $this->Courses_model->get_all();
        $this->load->view('courses/course_list_science',$data);
    } 

    public function sciences(){

        $data['course'] = $this->Courses_model->get_all_sciences();
        $this->load->view('courses/course_list_science',$data);
    } 

    public function arts(){

        $data['course'] = $this->Courses_model->get_all_arts();
        $this->load->view('courses/course_list_arts',$data);
    } 


}

  


/* End of file Courses.php */
/* Location: ./application/controllers/Courses.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2019-04-26 17:48:52 */
/* http://harviacode.com */

?>