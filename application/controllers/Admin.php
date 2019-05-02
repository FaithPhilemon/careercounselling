<?php
class Admin extends CI_controller{

	public function index(){


		$this->form_validation->set_rules('username','Username','trim|required|min_length[4]');
		$this->form_validation->set_rules('password','Password','trim|required|min_length[4]|max_length[50]');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		if($this->form_validation->run()==false){
			$this->load->view('admin/login');	
		}else{


		$user_id = $this->Admin_model->login($username,$password);


		//Vallidating users data

		if($user_id){

			$data = array(
				'user_id' => $user_id,
				'user_name' => $username,
				'logged_in' => true,
				);
			// Set session user_data

			$this->session->set_userdata($data);

			// Set message
			$this->session->set_flashdata('login','You are currently logged in');
			redirect('admin');			
		}	else{

			// Set login error

			$this->session->set_flashdata('fail','Invalid user name or password');
			redirect('admin/courses_list');
		}

	}
		
	}

	public function add(){
		$this->form_validation->set_rules('username','Username','trim|required|min_length[2]|max_length[25]');
		$this->form_validation->set_rules('email','Email','trim|required|valid_email');
		$this->form_validation->set_rules('password','Password','trim|required|min_length[4]|max_length[25]');
		$this->form_validation->set_rules('password1','Confirm password','trim|required|min_length[4]|max_length[25]|matches[password]');
		$this->form_validation->set_rules('phone','Phone');

		if ($this->form_validation->run()==false) {
			$this->load->view('admin/add_admin');
		} else{

				$data = array(
                'username'=>$this->input->post('username'),
                'email'=>$this->input->post('email'),
                'password'=>$this->input->post('password1'),
                'phone'=>$this->input->post('phone'),
            );

				$this->Admin_model->insert($data);
				$this->session->set_flashdata('added','Admin added');
				redirect('admin/admin_list');
		}
	}

	public function admin_list(){

		$data['admin'] = $this->Admin_model->get_all();
		$this->load->view('admin/list',$data);

	}


	public function update($id){
		$data['update'] = $this->Admin_model->get_by_id($id);
		$this->form_validation->set_rules('username','Username','trim|required|min_length[2]|max_length[25]');
		$this->form_validation->set_rules('email','Email','trim|required|valid_email');
		$this->form_validation->set_rules('password','Password','trim|required|min_length[4]|max_length[25]');
		$this->form_validation->set_rules('password1','Confirm password','trim|required|min_length[4]|max_length[25]|matches[password]');
		$this->form_validation->set_rules('phone','Phone');		

		if ($this->form_validation->run()==false) {
			$this->load->view('admin/update',$data);	
		} else{

			$data = array(
                'username'=>$this->input->post('username'),
                'email'=>$this->input->post('email'),
                'password'=>md5($this->input->post('password1')),
                'phone'=>$this->input->post('phone'),
            );

			$this->Admin_model->update($id,$data);					
			$this->session->set_flashdata('update','Update Successfull');
			redirect('admin/admin_list');
		}		
	}


	public function delete($id){

		$this->Admin_model->delete($id);
		$this->session->set_flashdata('delete','Admin deleted');
		redirect('admin/admin_list');
}



	public function add_courses(){

		
		$this->form_validation->set_rules('degree','Degree','trim|required|min_length[2]');
		$this->form_validation->set_rules('key_requirement','Key Requirement','trim|required|min_length[2]');
		$this->form_validation->set_rules('other_requirements','Other requirements','trim|required');
		$this->form_validation->set_rules('category','Category');
		if( $this->form_validation->run()==false){

		$this->load->view('admin/add_courses');

		}else{

					$data = array(
						 'degree'=>$this->input->post('degree'),
						 'key_requirement'=>$this->input->post('key_requirement'),
						 'other_requirements'=>$this->input->post('other_requirements'),
						 'category'=>$this->input->post('category'),				
						);
					$this->Admin_model->insert_courses($data);
					$this->session->set_flashdata('course','New Course added');
					redirect('admin/courses_list');
					
				
			}

		}


	public function courses_list(){
		$data['course'] = $this->Admin_model->get_all_courses();
		$this->load->view('admin/courses_list',$data);
	}



	public function update_course($id){
		$data['update'] = $this->Admin_model->get_courses_by_id($id);
		$this->form_validation->set_rules('degree','Degree','trim|required|min_length[2]');
		$this->form_validation->set_rules('key_requirement','Key Requirement','trim|required|min_length[2]');
		$this->form_validation->set_rules('other_requirements','Other requirements','trim|required');
		$this->form_validation->set_rules('category','Category');
		
		if ($this->form_validation->run()==false) {
			$this->load->view('admin/update_courses',$data);	
		} else{

			if ($this->Admin_model->update_courses($id,$data)) {					
				$this->session->set_flashdata('update_course','Course table updated successfully');
				redirect('admin/course_list');
			}			
		}		
	}

	

	public function delete_course($id){

		$this->Admin_model->delete_courses($id);
		$this->session->set_flashdata('course_delete','Course deleted successfully');
		redirect('admin/courses_list');
}

	
	public function login(){
		
		
		$this->form_validation->set_rules('username','Username','trim|required|min_length[4]');
		$this->form_validation->set_rules('password','Password','trim|required|min_length[4]|max_length[50]');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		if($this->form_validation->run()==false){
			$this->load->view('admin/login');	
		}else{


		$user_id = $this->Admin_model->login($username,$password);


		//Vallidating users data

		if($user_id){

			$data = array(
				'user_id' => $user_id,
				'user_name' => $username,
				'logged_in' => true,
				);
			// Set session user_data

			$this->session->set_userdata($data);

			// Set message
			$this->session->set_flashdata('login','You are currently logged in');
			redirect('admin');			
		}	else{

			// Set login error

			$this->session->set_flashdata('fail','Invalid user name or password');
			redirect('admin/course_list');
		}

	}
}



	public function logout(){

		$this->session->unset_userdata('logged_in');
		$this->session->unset_userdata('user_id');
		$this->session->unset_userdata('Username');
		$this->session->sess_destroy();
		redirect('admin');

	}



}


	
?>