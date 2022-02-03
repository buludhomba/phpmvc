<?php 


class Mahasiswa_model {
	// private $mhs = [
	// 	[
	// 		"nama" => "Sella Putri Sari",
	// 		"nim" => "e41200603",
	// 		"email" => "sella@gmail.com",
	// 		"jurusan" => "Teknik Informatika"
	// 	]
		
	// ];

	// konsep PDO
	// private $dbh; // database handler
	// private $stmt;

	private $table = 'mahasiswa';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAllMahasiswa()
	{
		$this->db->query('SELECT * FROM ' . $this->table);
		return $this->db->resultSet();
		// resultSet digunakan untuk isi database banyak
	}

	public function getMahasiswaById($id)
	{
		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
		$this->db->bind('id', $id);
		return $this->db->single();
	}

	public function tambahDataMahasiswa($data)
	{
		$query = "INSERT INTO mahasiswa
					VALUES
					('', :nama, :nim, :email, :jurusan)";

		$this->db->query($query);
		$this->db->bind('nama', $data['nama']);
		$this->db->bind('nim', $data['nim']);
		$this->db->bind('email', $data['email']);
		$this->db->bind('jurusan', $data['jurusan']);

		$this->db->execute();

		return $this->db->rowCount();


	}


}