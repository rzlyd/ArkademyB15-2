	<?php 

//  class biodata
 class Biodata{

 	// menyimpan data dalam array
 	public $data = [];

 	// fungsi nama
 	function nama($nama)
 	{
 		$this->data['name'] = $nama;
 		return $this;
 	}

 	// fungsi umur
	function umur($umur)
 	{
 		$this->data['age'] = $umur;
 		return $this;
 	}

 	// fungsi alamat
	function alamat($alamat)
 	{
 		$this->data['address'] = $alamat;
 		return $this;
 	}

 	// fungsi hobi
 	function hobi($hobi = array())
 	{
 		$this->data['hobbies'] = $hobi;
 		return $this;
 	}
 	
 	// fungsi menikah
 	public function menikah($menikah)
 	{
 		$this->data['is_married'] = $menikah;
 		return $this;
 	}
 	
 	// fungsi sekolah menengah kejuruan
 	public function sekolah1($sekolah1 = array())
 	{
 		$this->data['school1'] = $sekolah1;
 		return $this;
 	}
 	//fungsi universitas
 	public function sekolah2($sekolah2 = array())
 	{
 		$this->data['school2'] = $sekolah2;
 		return $this;
 	}

 	// fungsi kemampuan programming
 	public function kemampuan_programming($kemampuan_programming = array())
 	{
 		$this->data['skills_programming'] = $kemampuan_programming;
 		return $this;
 	}

 	// fungsi kemampuan networking
 	public function kemampuan_networking($kemampuan_networking = array())
 	{
 		$this->data['skills_networking'] = $kemampuan_networking;
 		return $this;
 	}

 	// fungsi ubah ke json
 	public function ubah_ke_json(){
 		return json_encode($this->data, JSON_PRETTY_PRINT);
 	}
 	
}

$biodata 	= new Biodata();
$nama		= "Muhamad Reza Fahlevi";
$umur		= 23;
$alamat		= "Griya PGRI Ciampea Endah 2 , Kab.Bogor Jawa Barat";
$hobi 		= ['Bermusik','Gaming','Traveling'];
$sekolah1	= [
				"SMA" 	=> "SMK Infokom Bogor",
				"Year_in" => "2011",
				"Year_out" => "2014",
				"Major" 	=> "Teknik Komputer Jaringan"
			  ];

$sekolah2	= [
				"Universitas" 	=> "Universitas Bina Sarana Infromatika",
				"Year_in" => "2016",
				"Year_out" => "2019",
				"Major" 	=> "D3 Sistem Informasi"
			  ];

$kemampuan_programming	= [
							"HTML"			=>  "Beginner",
							"PHP"			=>	"Beginner",
							"MySql" 		=> 	"Beginner",
							"Java"			=>	"Beginner",
							"CodeIgniter"	=>	"Beginner"
						  ];

$kemampuan_networking	= [
							"Konfigurasi Switch"	  =>  "Beginner",
							"Instalasi Jaringan LAN"  =>  "Beginner",
							"Subnetting" 		      =>  "Beginner"
						  ];


print_r($biodata->nama($nama)
				->umur($umur)
				->alamat($alamat)
				->hobi($hobi)
				->menikah(false)
				->sekolah1($sekolah1)
				->sekolah2($sekolah2)
				->kemampuan_programming($kemampuan_programming)
				->kemampuan_networking($kemampuan_networking)
				->ubah_ke_json()
);
