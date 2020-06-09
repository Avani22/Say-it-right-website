<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->helper('url');
		$this->load->view('index');
	}

	public function aboutus()
	{
		$this->load->helper('url');
		$this->load->view('aboutus');
	}

	public function buy()
	{
		$this->load->helper('url');
		$this->load->view('buy');
	}
		public function alert()
	{
		$this->load->helper('url');
		$this->load->view('alert');
	}
	public function info()
	{
		$this->load->helper('url');
		$this->load->view('info');
	}

	public function contactus()
	{
		$this->load->helper('url');
		$this->load->view('contactus');
	}

	public function signup()
	{
		$this->load->helper('url');
		$this->load->view('signup');
	}
	public function individual()
	{
		$this->load->helper('url');
		$this->load->view('individual');
	}
	public function event()
	{
		$this->load->helper('url');
		$this->load->view('event');
	}
	public function business()
	{
		$this->load->helper('url');
		$this->load->view('business');
	}

	public function login()
	{
		$this->load->helper('url');
		$data['title'] = 'Login with Username and password';
		$this->load->view('login');
	}
	public function home()
	{
		$this->load->helper('url');
		$this->load->view('home');
	}
	public function conferences()
	{
		$this->load->helper('url');
		$this->load->view('conferences');
	}
	public function events()
	{
		$this->load->helper('url');
		$this->load->view('events');
	}
	public function myconf()
	{
		$this->load->helper('url');
		$this->load->view('myconf');
	}
	public function myevents()
	{
		$this->load->helper('url');
		$this->load->view('myevents');
	}
	public function settings()
	{
		$this->load->helper('url');
		$this->load->view('settings');
	}

	public function admin()
	{
		$this->load->helper('url');
		$this->load->view('admin');
	}


	public function contactus_insert_data()
	{
		$this->load->library('form_validation');  
		$this->form_validation->set_rules("firstname", "First Name", 'trim|required');  
		$this->form_validation->set_rules("lastname", "Last Name", 'trim|required');  
		$this->form_validation->set_rules("telephone", "Telephone", 'trim|required');
		$this->form_validation->set_rules("message", "message", 'trim|required');  

		if($this->form_validation->run() == TRUE)
		{
		    
		    $firstname = $this->input->post("firstname");
		    $lastname = $this->input->post("lastname");
		    $telephone = $this->input->post("telephone");
		    $message = $this->input->post("message");		    
		    
			$this->load->model("RootModels");
			
			$dataclient = array("firstname"=>$firstname,
					  "lastname"=>$lastname,
					  "telephone"=>$telephone,					  
					  "message"=>$message				  
	                 );	  
			$this->RootModels->contactus_model_insert_data($dataclient);			
            
			//redirect(base_url() . '/Welcome/Client'); 
			echo "<script type='text/javascript'>alert('Thank you for the feedback!');</script>";
			echo "<script>location.href = 'contactus';</script>"; 								
		}
		else{
// 			echo "<script type='text/javascript'>alert('Check Validation errors');</script>";
// 			echo "<script>location.href = 'ContactUs';</script>";
            $this->contactus();
		}
	}

	public function alert_insert()
	{
		$this->load->library('form_validation'); 
		$this->form_validation->set_rules("quantity", " Quantity", 'trim|required');
		$quantity = $this->input->post("quantity");
		$this->load->model("RootModels");
		$dataclient = array("quantity"=>$quantity);
		$this->RootModels->alert_model_insert_data($dataclient);
		echo "<script>location.href = 'info';</script>"; 
	}


	public function info_insert_data()
	{
		$this->load->library('form_validation'); 
		$this->form_validation->set_rules("firstname", "First Name", 'trim|required');  
		$this->form_validation->set_rules("lastname", "Last Name", 'trim|required');  
		$this->form_validation->set_rules("address", "address", 'trim|required');
		$this->form_validation->set_rules("apt", "apt", 'trim|required'); 
		$this->form_validation->set_rules("city", "city", 'trim|required');
		$this->form_validation->set_rules("email", "email", 'trim|required');
		

		 $firstname = $this->input->post("firstname");
		 $lastname = $this->input->post("lastname");
		 $address = $this->input->post("address");
		 $apt = $this->input->post("apt");
		 $city = $this->input->post("city");
		 $email = $this->input->post("email");
	
		    

		$this->load->model("RootModels");

		$dataclient = array("firstname"=>$firstname,
					  "lastname"=>$lastname,
					  "address"=>$address,					  
					  "apt"=>$apt,
					  "city"=>$city,
					  "email"=>$email
	
	                 );
		$this->RootModels->info_model_insert_data($dataclient);
		echo "<script>location.href = 'buy';</script>"; 
	}


	public function individual_insert_data()
	{
		$this->load->library('form_validation');  
		$this->form_validation->set_rules("firstname", "First Name", 'trim|required');  
		$this->form_validation->set_rules("lastname", "Last Name", 'trim|required');  
		$this->form_validation->set_rules("work", "work", 'trim|required');
		$this->form_validation->set_rules("school", "school", 'trim|required');  
		$this->form_validation->set_rules("email", "email", 'trim|required');
		$this->form_validation->set_rules("password", "password", 'trim|required'); 

		if($this->form_validation->run() == TRUE)
		{
		    
		    $firstname = $this->input->post("firstname");
		    $lastname = $this->input->post("lastname");
		    $work = $this->input->post("work");
		    $school = $this->input->post("school");
		    $email = $this->input->post("email");
		    $password = $this->input->post("password");		    
		    
			$this->load->model("RootModels");
			
			$dataclient = array("firstname"=>$firstname,
					  "lastname"=>$lastname,
					  "work"=>$work,					  
					  "school"=>$school,
					    "email"=>$email,					  
					  "password"=>$password

	                 );	  
			$this->RootModels->individual_model_insert_data($dataclient);			
            
			//redirect(base_url() . '/Welcome/Client'); 
			echo "<script type='text/javascript'>alert('Thank you for the feedback!');</script>";
			echo "<script>location.href = 'individual';</script>"; 								
		}
		else{
// 			echo "<script type='text/javascript'>alert('Check Validation errors');</script>";
// 			echo "<script>location.href = 'ContactUs';</script>";
            $this->individual();
		}
	}

	public function event_insert_data()
	{
		$this->load->library('form_validation');  
		
		$this->form_validation->set_rules("lastname", "Last Name", 'trim|required');  
		
		$this->form_validation->set_rules("email", "email", 'trim|required');
		$this->form_validation->set_rules("password", "password", 'trim|required'); 

		if($this->form_validation->run() == TRUE)
		{
		    
		   
		    $lastname = $this->input->post("lastname");
		   
		    $email = $this->input->post("email");
		    $password = $this->input->post("password");		    
		    
			$this->load->model("RootModels");
			
			$dataclient = array(
					  "lastname"=>$lastname,
					 
					    "email"=>$email,					  
					  "password"=>$password

	                 );	  
			$this->RootModels->event_model_insert_data($dataclient);			
            
			//redirect(base_url() . '/Welcome/Client'); 
			echo "<script type='text/javascript'>alert('Thank you for the feedback!');</script>";
			echo "<script>location.href = 'event';</script>"; 								
		}
		else{
// 			echo "<script type='text/javascript'>alert('Check Validation errors');</script>";
// 			echo "<script>location.href = 'ContactUs';</script>";
            $this->event();
		}
	}

	public function business_insert_data()
	{
		$this->load->library('form_validation');  
		
		$this->form_validation->set_rules("lastname", "Last Name", 'trim|required');  
		
		$this->form_validation->set_rules("email", "email", 'trim|required');
		$this->form_validation->set_rules("password", "password", 'trim|required'); 

		if($this->form_validation->run() == TRUE)
		{
		    
		   
		    $lastname = $this->input->post("lastname");
		   
		    $email = $this->input->post("email");
		    $password = $this->input->post("password");		    
		    
			$this->load->model("RootModels");
			
			$dataclient = array(
					  "lastname"=>$lastname,
					 
					    "email"=>$email,					  
					  "password"=>$password

	                 );	  
			$this->RootModels->business_model_insert_data($dataclient);			
            
			//redirect(base_url() . '/Welcome/Client'); 
			echo "<script type='text/javascript'>alert('Thank you for the feedback!');</script>";
			echo "<script>location.href = 'business';</script>"; 								
		}
		else{
// 			echo "<script type='text/javascript'>alert('Check Validation errors');</script>";
// 			echo "<script>location.href = 'ContactUs';</script>";
            $this->business();
		}
	}


	public function conferences_insert_data()
	{
		$this->load->library('form_validation');  
		$this->form_validation->set_rules("conferences", " conferences", 'trim|required');  
		$this->form_validation->set_rules("description", "description", 'trim|required');  
		$this->form_validation->set_rules("date", "date", 'trim|required');
		$this->form_validation->set_rules("sede", "sede", 'trim|required');  
		$this->form_validation->set_rules("confirmation", "confirmation", 'trim|required');

		if($this->form_validation->run() == TRUE)
		{
		    
		    $conferences = $this->input->post("conferences");
		    $description = $this->input->post("description");
		    $date = $this->input->post("date");
		    $sede = $this->input->post("sede");
		    $confirmation = $this->input->post("confirmation");
		    
		    
			$this->load->model("RootModels");
			
			$dataclient = array("conferences"=>$conferences,
					  "description"=>$description,
					  "date"=>$date,					  
					  "sede"=>$sede,					  
					  "confirmation"=>$confirmation

	                 );	  
			$this->RootModels->conferences_model_insert_data($dataclient);			
            
			//redirect(base_url() . '/Welcome/Client'); 
			echo "<script type='text/javascript'>alert('Thank you for the feedback!');</script>";
			echo "<script>location.href = 'conferences';</script>"; 								
		}
		else{
// 			echo "<script type='text/javascript'>alert('Check Validation errors');</script>";
// 			echo "<script>location.href = 'ContactUs';</script>";
            $this->conferences();
		}
	}

	public function events_insert_data()
	{
		$this->load->library('form_validation');  
		$this->form_validation->set_rules("events", " events", 'trim|required');  
		$this->form_validation->set_rules("description", "description", 'trim|required');  
		$this->form_validation->set_rules("date", "date", 'trim|required');
		$this->form_validation->set_rules("sede", "sede", 'trim|required');  
		$this->form_validation->set_rules("confirmation", "confirmation", 'trim|required');

		if($this->form_validation->run() == TRUE)
		{
		    
		    $events = $this->input->post("events");
		    $description = $this->input->post("description");
		    $date = $this->input->post("date");
		    $sede = $this->input->post("sede");
		    $confirmation = $this->input->post("confirmation");
		    
		    
			$this->load->model("RootModels");
			
			$dataclient = array("events"=>$events,
					  "description"=>$description,
					  "date"=>$date,					  
					  "sede"=>$sede,					  
					  "confirmation"=>$confirmation

	                 );	  
			$this->RootModels->events_model_insert_data($dataclient);			
            
			//redirect(base_url() . '/Welcome/Client'); 
			echo "<script type='text/javascript'>alert('Thank you for the feedback!');</script>";
			echo "<script>location.href = 'events';</script>"; 								
		}
		else{
// 			echo "<script type='text/javascript'>alert('Check Validation errors');</script>";
// 			echo "<script>location.href = 'ContactUs';</script>";
            $this->events();
		}
	}

	public function myconf_delete_data()
	{
		$this->load->library('form_validation');  
		$this->form_validation->set_rules("conferences", " conferences", 'trim|required');  
	

		if($this->form_validation->run() == TRUE)
		{
		    
		    $conferences = $this->input->post("conferences");
	
		    
		    
			$this->load->model("RootModels");
			
			$dataclient = array("conferences"=>$conferences
	                 );	  
			$this->RootModels->myconf_model_delete_data($dataclient);			
            
			//redirect(base_url() . '/Welcome/Client'); 
			echo "<script type='text/javascript'>alert('Thank you for the feedback!');</script>";
			echo "<script>location.href = 'myconf';</script>"; 								
		}
		else{
// 			echo "<script type='text/javascript'>alert('Check Validation errors');</script>";
// 			echo "<script>location.href = 'ContactUs';</script>";
            $this->myconf();
		}
	}

	public function myevents_delete_data()
	{
		$this->load->library('form_validation');  
		$this->form_validation->set_rules("events", " events", 'trim|required');  
	

		if($this->form_validation->run() == TRUE)
		{
		    
		    $events = $this->input->post("events");
	
		    
		    
			$this->load->model("RootModels");
			
			$dataclient = array("events"=>$events
	                 );	  
			$this->RootModels->myevents_model_delete_data($dataclient);			
            
			//redirect(base_url() . '/Welcome/Client'); 
			echo "<script type='text/javascript'>alert('Thank you for the feedback!');</script>";
			echo "<script>location.href = 'myevents';</script>"; 								
		}
		else{
// 			echo "<script type='text/javascript'>alert('Check Validation errors');</script>";
// 			echo "<script>location.href = 'ContactUs';</script>";
            $this->myevents();
		}
	}

	public function conferences_admin_insert_data()
	{
		$this->load->library('form_validation');  
		$this->form_validation->set_rules("conferences", " conferences", 'trim|required');  
		$this->form_validation->set_rules("description", "description", 'trim|required');  
		$this->form_validation->set_rules("date", "date", 'trim|required');
		$this->form_validation->set_rules("sede", "sede", 'trim|required');  
		$this->form_validation->set_rules("confirmation", "confirmation", 'trim|required');

		if($this->form_validation->run() == TRUE)
		{
		    
		    $conferences = $this->input->post("conferences");
		    $description = $this->input->post("description");
		    $date = $this->input->post("date");
		    $sede = $this->input->post("sede");
		    $confirmation = $this->input->post("confirmation");
		    
		    
			$this->load->model("RootModels");
			
			$dataclient = array("conferences"=>$conferences,
					  "description"=>$description,
					  "date"=>$date,					  
					  "sede"=>$sede,					  
					  "confirmation"=>$confirmation

	                 );	  
			$this->RootModels->conferences_admin_model_insert_data($dataclient);			
            
			//redirect(base_url() . '/Welcome/Client'); 
			echo "<script type='text/javascript'>alert('Thank you for the feedback!');</script>";
			echo "<script>location.href = 'admin';</script>"; 								
		}
		else{
// 			echo "<script type='text/javascript'>alert('Check Validation errors');</script>";
// 			echo "<script>location.href = 'ContactUs';</script>";
            $this->admin();
		}
	}

	public function login_validation()  
    {  
        $email = $this->input->post('email');  
        $password = $this->input->post('password');  
        if ($email=='avanichandorkar@hotmail.com' && $password=='Avani123')   
        {  
       
            $this->load->view('home');  
        }  
        else{  
            $data['error'] = 'Your Account is Invalid';  
            $this->load->view('login', $data);  
        }  
    } 


   public function logout()  
    {  
        //removing session  
        $this->session->unset_userdata('email');  
        redirect("login");  
    } 







}
