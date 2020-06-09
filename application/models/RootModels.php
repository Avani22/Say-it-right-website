<?php  
class RootModels extends CI_Model  
{  
    
    function contactus_model_insert_data($data)  
    {  
        $this->db->insert("contact", $data);  
    }

    function alert_model_insert_data($data)  
    {  
        $this->db->insert("products", $data);  
    }
      function info_model_insert_data($data)  
    {  
        $this->db->insert("cart", $data);  
    }
   
    function individual_model_insert_data($data)  
    {  
        $this->db->insert("individual", $data);  
    }
     function event_model_insert_data($data)  
    {  
        $this->db->insert("event", $data);  
    }
     function business_model_insert_data($data)  
    {  
        $this->db->insert("business", $data);  
    }
      function conferences_model_insert_data($data)  
    {  
        $this->db->insert("conferences", $data);  
    }
     function events_model_insert_data($data)  
    {  
        $this->db->insert("events", $data);  
    }
     function myconf_model_delete_data($data)  
    {  
        $this->db->delete("myconf", $data);  
    }
      function myevents_model_delete_data($data)  
    {  
        $this->db->delete("myevents", $data);  
    }
    function conferences_admin_model_insert_data($data)  
    {  
        $this->db->insert("conferences", $data);  
    }
    
    



    /*
    function user_model_insert_data($data)  
    {  
        $this->db->insert("users", $data);  
    }
    function check_login($email, $password)  
    {  
        $this->db->where('email', $email);  
        $this->db->where('password', $password);  
        //SELECT * FROM users WHERE email = '$email' AND password = '$password'  
        $query = $this->db->get('users');  
        if($query->num_rows() > 0)  
        {  
            $row = $query->row();
            return $row->roleId;            
        }  
        else  
        {  
            return 0;
        }  
    }
    function check_if_email_exists($email)
    {
        $this->db->where('email', $email);          
        //SELECT * FROM users WHERE email = '$email
        $query = $this->db->get('users');  
        if($query->num_rows() > 0)  
        {  
            return true;  
        }  
        else  
        {  
            return false;       
        }  
    } */  
}  
?>