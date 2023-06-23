<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index() {
		//send sms
		if($this->input->post('sendSMSBtn')){			
			$this->form_validation->set_rules('fromroute', 'From Route', 'required');			
			$this->form_validation->set_rules('contact', 'Contact Number', 'required|min_length[10]');
			$this->form_validation->set_rules('message', 'Enter Message', 'required|min_length[5]|max_length[500]');
			if($this->form_validation->run() == true){
				$type = $this->input->post('fromroute');;
				$mobile_number = $this->input->post('contact');;
				$message = $this->input->post('message');;
				$sender = "********";				
				$template_id = '123';

				$url="http://api.bulksmsgateway.in/sendmessage.php?user=".urlencode(API_USERNAME)."&password=".urlencode(API_PASSWORD)."&mobile=".urlencode($mobile_number)."&message=".urlencode($message)."&sender=".urlencode($sender)."&type=".urlencode($type)."&template_id=".urlencode($template_id);

				$ch = curl_init($url); 
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				$curl_scraped_page = curl_exec($ch);
				$curl_response_obj = json_decode($curl_scraped_page);
				//echo $obj->status . PHP_EOL;
				curl_close($ch);
				if($curl_response_obj->status=='failed'){
					$this->session->set_flashdata('site_session_msg', '<div class="alert alert-danger">Failed to send SMS.</div>');
				} else {				
					$this->session->set_flashdata('site_session_msg', '<div class="alert alert-success">SMS successfully sent.</div>');
					unset($_POST);
					redirect(base_url(), 'refresh');
				}
			} else {
				$this->session->set_flashdata('site_session_msg', '<div class="alert alert-danger">Please fill all required fields.</div>');
			}
		}
		$this->load->view('Home');
	}
}
