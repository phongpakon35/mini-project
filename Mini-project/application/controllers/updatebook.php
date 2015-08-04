<?php
	defined ('BASEPATH') OR exit('No direct script access allowed');    
	class UpdateBook extends CI_Controller
	{
		
		public function __construct()
		{
			parent::__construct();
			$this->load->helper('url');
			$this->load->library('form_validation');
		}
		
		public function checkupdate()
		{
		if(isset($_COOKIE['username'])&& isset($_COOKIE['password']))//isset คือการตรวจสอบค่าว่ามียุมัย
	    {
	      $this->load->model('admin');
	      $this->admin->setUsername($_COOKIE['username']);
	      $this->admin->setPassword($_COOKIE['password']);
	      if(!$this->admin->checkLogin())
	      {
	        redirect(base_url('index.php/login'));
	      }
	    }
	    else
	    {
	        redirect(base_url('index.php/login'));
	    }

		
			$this->form_validation->set_rules('bookname', 'ชื่อหนังสือ', 'required|min_length[3]',
			array(
				'required' => '***กรุณากรอก{field}',
				'min_length'=>'**ช่อง{field}ต้องไม่น้อยกว่า {param} ตัวอักษร'
				)
			);
			$this->form_validation->set_rules('ISBN', 'รหัส ISBN', 'required|min_length[13]|max_length[13]',
			array(
				'required' => '***กรุณากรอก{field}',
				'min_length'=>'**ช่อง{field}ต้องไม่น้อยกว่า {param} ตัวอักษร',
				'max_length'=>'**ช่อง{field}ต้องไม่เกิน {param} ตัวอักษร'
				
				)
			);
			$this->form_validation->set_rules('author', 'ชื่อผู้แต่ง', 'required|min_length[3]',
			array(
				'required' => '***กรุณากรอก{field}',
				'min_length'=>'**ช่อง{field}ต้องไม่น้อยกว่า {param} ตัวอักษร'
				)
			);
			
			
			
			if ($this->form_validation->run() == FALSE)
                {
                		$data ['error']='';
                        $this->load->view('adminzone',$data);


                }
                else
                {
                				$this->load->model('book');
		                        $this->book->setBookname($this->input->post('bookname'));
		                        $this->book->setISBN($this->input->post('ISBN'));
		                        $this->book->setAuthor($this->input->post('author'));
		                        $this->book->add();
 								$this->load->view('adminzone');
 								echo "<script language='javascript'>alert('บันทึกหนังสือเรียบร้อยแล้ว!');</script>";
                } 

 			

			}

	}
?>
