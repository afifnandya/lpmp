<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index(){
        if($this->session->userdata('admin')){
			$this->load->helper('counter');
			$data['jumlah_user'] = $this->db->count_all_results('admin');
			$data['jumlah_artikel'] = $this->db->count_all_results('artikel');
			$data['jumlah_header'] = $this->db->count_all_results('header');
			$data['jumlah_kategori'] = $this->db->count_all_results('kategori');
			$data['kunjungan'] = get_visitor();
			$this->load->view('admin/V_admin',$data);
        }
        else{
			redirect('login');
        }
	}
	//artikel
	public function artikel(){
		if($this->session->userdata('admin')){
			if(!$this->uri->segment(3)){
				$this->load->model('M_artikel');
				$this->load->model('M_kategori');
				$data['artikel'] = $this->M_artikel->getArtikel("","0");
				$this->load->view('admin/V_admin_artikel_list',$data);
			}
			elseif($this->uri->segment(3) == "buat"){
				$this->load->model('M_kategori');
				$data['kategori'] = $this->M_kategori->getKategori("");
				$this->load->view('admin/V_admin_artikel_buat',$data);
			}
			elseif($this->uri->segment(3) == "edit" and $this->uri->segment(4)){
				$this->load->model('M_artikel');
				$this->load->model('M_kategori');
				$data['kategori'] = $this->M_kategori->getKategori("");
				$data['artikel'] = $this->M_artikel->getArtikel($this->uri->segment(4),"0");
				$this->load->view('admin/V_admin_artikel_edit',$data);
			}
			elseif($this->uri->segment(3) == "lihat" and $this->uri->segment(4)){
				$this->load->model('M_artikel');
				$this->load->model('M_kategori');
				$data['artikel'] = $this->M_artikel->getArtikel($this->uri->segment(4),"0");
				$this->load->view('admin/V_admin_artikel_lihat',$data);
			}
			else{
				show_404();
			}
		}
		else{
			redirect('login');
		}
	}
	public function artikel_submit(){
		$this->load->model("M_artikel");
		date_default_timezone_set("Asia/Bangkok");
		$session = $this->session->userdata("admin");
		$editor = $session[0]['username'];
		$uuid = substr(md5(mt_rand(10,100)), 0, 7);
		$datetime = date("d-m-Y H:i:s");
		$judul = $this->input->post("judul");
		$subjudul = $this->input->post("subjudul");
		$isi = $this->input->post("shadowArtikel");
		$kategori = $this->input->post("kategori");
		$publish = $this->input->post("publish");
		$hapus = 0;
		$panjang_base_url = strlen(base_url());
		$icon = substr($this->input->post("icon"),$panjang_base_url);
		// print_r($_POST);
		$array_insert = array(
			'uuid'      => substr(md5(mt_rand(10,100)), 0, 7),
			'datetime'	=> date("Y-m-d H:i:s"),
			'judul'     => $judul,
			'subjudul'  => $subjudul,
			'isi'       => $isi,
			'kategori'  => $kategori,
			'icon'      => $icon,
			'publish'   => $publish,
			'hapus'     => $hapus,
			'editor'    => $editor
		);
		if($this->M_artikel->insert($array_insert)){
			echo "berhasil insert";
		}
		else{
			echo var_dump($array_insert);
		}
	}
	public function artikel_edit(){
		$this->load->model("M_artikel");
		date_default_timezone_set("Asia/Bangkok");
		$session = $this->session->userdata("admin");
		$editor = $session[0]['username'];
		$datetime = date("Y-m-d H:i:s");
		$uuid = $this->input->post("uuidShadow");
		$judul = $this->input->post("judul");
		$subjudul = $this->input->post("subjudul");
		$isi = $this->input->post("shadowArtikel");
		$kategori = $this->input->post("kategori");
		$publish = $this->input->post("publish");
		$panjang_base_url = strlen(base_url());
		$icon = substr($this->input->post("icon"),$panjang_base_url);
		$this->M_artikel->edit(array(
			'uuid'		=> $uuid,
			'datetime'	=> $datetime,
			'judul'     => $judul,
			'subjudul'  => $subjudul,
			'isi'       => $isi,
			'kategori'  => $kategori,
			'icon'      => $icon,
			'publish'   => $publish,
			'editor'    => $editor
		));
		// print_r($_POST);
	}
	public function artikel_delete(){
		$this->load->model("M_artikel");
		$id_artikel = $this->input->post('id_artikel');
		$this->M_artikel->deleteArtikel($id_artikel);
	}
	//gallery
	public function gallery(){
		if($this->session->userdata('admin')){
			$this->load->model("M_gallery");
			$data['gallery'] = $this->M_gallery->getgallery("","0");
			// echo "<pre>";
			// print_r($data['gallery']);
			// echo "</pre>";
			foreach ($data['gallery'] as $i => $value) {
				$gambar = base_url().$data['gallery'][$i]['gambar'];
				$data['gallery'][$i]['gambar'] = $gambar;
				list(${"width_gambar".$i}, ${"height_gambar".$i}) = getimagesize($data['gallery'][$i]['gambar']);
				$data['gallery'][$i]['width'] = ${"width_gambar".$i};
				$data['gallery'][$i]['height'] = ${"height_gambar".$i};
			}
			$this->load->view('admin/V_admin_gallery',$data);
		}
		else{
			redirect('login');
		}
	}
	public function gallery_submit(){
		$panjang_base_url = strlen(base_url());
		$this->load->model("M_gallery");
		$gambar = substr($this->input->post("gambar"),$panjang_base_url);
		$keterangan = $this->input->post("keterangan");
		$queryUrutan = $this->M_gallery->getUrutan();
		$urutan = $queryUrutan[0]['urutan']+1;
		$array_insert = array(
			'gambar'    => $gambar,
			'keterangan'=> $keterangan,
			'hapus'     => 0,
			'urutan'    => $urutan,
		);
		if($this->M_gallery->insert($array_insert)){
			echo "berhasil insert";
		}
		else{
			print_r($_POST);
		}
	}
	public function gallery_urutan(){
		$this->load->model("M_gallery");
		$urutan = json_decode($this->input->post("urutan"));
		foreach ($urutan as $key => $value){
			$this->M_gallery->updateUrutan(array(
				'urutan' => $key,
				'id' => $value
			));
		}
	}
	public function gallery_delete(){
		$this->load->model("M_gallery");
		$id_header = $this->input->post('id_gallery');
		$this->M_gallery->deletegallery($id_header);
	}
	//user
	public function user(){
		if($this->session->userdata('admin')){
			$this->load->model("M_user");
			$data['user'] = $this->M_user->getUser("","");
			if($this->uri->segment(3) == ""){
				$this->load->view('admin/V_admin_user',$data);
			}
			elseif($this->uri->segment(3) == "tambah"){
				$this->load->view('admin/V_admin_user_tambah');
			}
			elseif($this->uri->segment(3) == "edit" and $this->uri->segment(4) or $this->uri->segment(3) == "profile" and $this->uri->segment(4)){
				$username = $this->uri->segment(4);
				$data['user'] = $this->M_user->getUser($username,"");
				$this->load->view('admin/V_admin_user_edit',$data);
			}
		}
		else{
			redirect('login');
		}
	}
	public function user_submit(){
		$this->load->model("M_user");
		$foto_location = "assets/img/admin/";
		$foto_file = $foto_location.basename($_FILES["foto"]["name"]);
		move_uploaded_file($_FILES["foto"]["tmp_name"], $foto_file);
		$foto = $foto_file;
		$username = $this->input->post("username");
		$nama = $this->input->post("nama");
		$password = $this->input->post("password");
		$status = $this->input->post("status");
		$aktif = $this->input->post("aktif");
		$this->M_user->insert(array(
			'username'		=> $username,
			'nama'			=> $nama,
			'password'     	=> $password,
			'foto'  		=> $foto,
			'status'		=> $status,
			'aktif'			=> $aktif
		));
	}
	public function user_edit(){
		$this->load->model("M_user");
		$panjang_base_url = strlen(base_url());
		$username = $this->input->post("username");
		$nama = $this->input->post("nama");
		$password = $this->input->post("password");
		$foto = substr($this->input->post("foto"),$panjang_base_url);
		$status = $this->input->post("status");
		$aktif = $this->input->post("aktif");
		$this->M_user->edit(array(
			'username'		=> $username,
			'nama'			=> $nama,
			'password'     	=> $password,
			'foto'  		=> $foto,
			'status'		=> $status,
			'aktif'			=> $aktif
		));
	}
	public function user_delete(){
		$this->load->model("M_user");
		$username = $this->input->post('username');
		$this->M_user->deleteUser($username);
	}
	// crop gambar
	public function gambar($lokasi){
		$icon_location = "assets/img"."/".$lokasi."/";
		$icon_file = $icon_location.basename($_FILES["icon"]["name"]);
		if(move_uploaded_file($_FILES["icon"]["tmp_name"], $icon_file)){
			echo $icon_file;
		}
		else {
			print_r($_FILES);
		}
	}
	public function gambarCrop($lokasi){
		$this->load->helper('path');
		$filename = $_POST['filename'];
		$img = $_POST['pngimageData'];
		$lokasi_crop = "assets/img"."/".$lokasi."/";
		$img = str_replace('data:image/jpeg;base64,', '', $img);
		$img = str_replace(' ', '+', $img);
		$data = base64_decode($img);
		$file = $lokasi_crop."Crop-".$filename;
		$lokasi_hasil_crop = base_url().$file;
		$success = file_put_contents($file, $data);
		if($success){
			echo $lokasi_hasil_crop;
		}
		else{
			echo "Gagal menyimpan hasil crop";
		}
	}
}
