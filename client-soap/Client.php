<?php
error_reporting(1); // error ditampilkan
class Client
{	private $api;
	
	// function yang pertama kali di-load saat class dipanggil
	public function __construct($url)
	{	// buat objek baru dari class SOAP Client
		$this->api = new SoapClient($url);
		unset($url);
	}	
	
	public function tampil_semua_data()
	{	// memanggil method/fungsi yang ada di server dan dimasukkan ke variable $data
		$data = $this->api->tampil_semua_data();		
		// mengembalikan data
		return $data;
		// menghapus variable dari memory
		unset($data);
	}
	
	public function tampil_data($id_barang)
	{	$data = $this->api->tampil_data($id_barang);
		return $data; 
		unset($id_barang,$data);			
	}

	public function tambah_data($data)
	{	$this->api->tambah_data($data);
		unset($data);
	}
	
	public function ubah_data($data)
	{	$this->api->ubah_data($data);
		unset($data);	
	}
	
	public function hapus_data($id_barang)
	{	$this->api->hapus_data($id_barang);		
		unset($id_barang);	
	}	

	// function yang terakhir kali di-load saat class dipanggil
	public function __destruct()
	{	// menghapus variable $api dari memory
		unset($this->api);	
	}
}

$url = "http://localhost/wsdl-toko/server/server.php?wsdl";
//$url = "http://192.168.56.2/wsdl-toko/server/server.php?wsdl";

// buat objek baru dari class Client
$abc = new Client($url);
?>