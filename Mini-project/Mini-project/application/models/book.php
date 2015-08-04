<?php                																		//********15/7/15*****Login and logout สร้าง cookie

class Book extends CI_model        
{
	function __construct()
	{
		$this->load->database();
		parent::__construct();
	}

		
		var $id; //
		var $bookname; //
		var $ISBN; //
		var $author; //






	public function setId($id)
	{
		$this->id = $id;
	}

	public function getId()
	{
		return $this->id;
	}
	public function setBookname($bookname)
	{
		$this->bookname = $bookname;
	}

	public function getBookname()
	{
		return $this->bookname;
	}
	public function setISBN($ISBN)
	{
		$this->ISBN = $ISBN;
	}

	public function getISBN()
	{
		return $this->ISBN;
	}
	public function setAuthor($author)
	{
		$this->author = $author;
	}

	public function getAuthor()
	{
		return $this->author;
	}



	public function add()
	{
		$array = array
		(
			
			'bookname'  => 	$this->getBookname(),
			'ISBN' 		=> 	$this->getISBN(),
			'author' 	=> 	$this->getAuthor()
				
		);

		$this->db->insert('book', $array);
		return $this->db->insert_id();
	}

	


}
?>