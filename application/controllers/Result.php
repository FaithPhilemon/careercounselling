<?php 
class Result extends CI_controller{


	public function index(){

		$user_id = $this->session->userdata('user_id');
		//echo $user_id;
		$result = $this->Users_model->get_by_id($user_id);
		//print_r($result);
		foreach ($result as $r) {
		if ($r->strength_id == 1) {
			//print_r($r->strength);
			$data['strength'] = $this->Strength_model->get_by_id(1);
			$this->load->view('result/index',$data);

		} else{

			//$result = $this->Form_model->get_by_user_id($user_id);
			if ($r->strength_id == 2) {
			
			$data['strength'] = $this->Strength_model->get_by_id(2);

			$this->load->view('result/index',$data);


				}

			}

		}

	}

}


?>