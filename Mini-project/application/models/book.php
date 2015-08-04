<?php                																		

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

###################################### add ######################################	 

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

###################################### add ######################################	 	


###################################### findByName ######################################	 
	 public function findByName($name)
	{
		$query=$this->db->query
			('
				SELECT bookname, ISBN, author
		
				FROM book  WHERE bookname LIKE "%'. $name .'%" OR
        				         ISBN LIKE "'. $name .'" OR
        				         author LIKE "%'. $name .'%" ORDER BY bookname
			');

		return $query;
	}
###################################### findByName ######################################	 

}
?>