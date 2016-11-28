<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->helper('counter');
		$visitor = count_visitor();
		$this->load->model("M_artikel");
		$this->load->model("M_header");
		$this->load->model("M_gallery");
		$data['artikel_inside_school'] = $this->M_artikel->getArtikelByKategori("Inside School"," ");
		$data['artikel_hidup_guruku'] = $this->M_artikel->getArtikelByKategori("Hidup Guruku"," ");
		$data['artikel_kabar_sepekan'] = $this->M_artikel->getArtikelByKategori("Kabar Sepekan"," ");
		$data['artikel_jembatan_pengetahuan'] = $this->M_artikel->getArtikelByKategori("Jembatan Pengetahuan"," ");
		$data['artikel_jurnal_inspirasi'] = $this->M_artikel->getArtikelByKategori("Jurnal Inspirasi"," ");
		$data['artikel_headline'] = $this->M_artikel->getArtikelByKategori("Headline"," ");
		$data['header'] = $this->M_header->getHeader("","1");
		foreach ($data['header'] as $key => $value) {
			$artikelById = $this->M_artikel->getArtikel($data['header'][$key]['uuid_artikel'],0);
			$data['header'][$key]['nama_kategori'] = $artikelById[0]['nama'];
			$data['header'][$key]['judul_artikel'] = $artikelById[0]['judul'];
			$data['header'][$key]['sub_judul_artikel'] = $artikelById[0]['subjudul'];
		}
		$data['gallery'] = $this->M_gallery->getgallery("","0");
		foreach ($data['gallery'] as $i => $value) {
			$gambar = base_url().$data['gallery'][$i]['gambar'];
			$data['gallery'][$i]['gambar'] = $gambar;
			list(${"width_gambar".$i}, ${"height_gambar".$i}) = getimagesize($data['gallery'][$i]['gambar']);
			$data['gallery'][$i]['width'] = ${"width_gambar".$i};
			$data['gallery'][$i]['height'] = ${"height_gambar".$i};
		}
		$this->load->view('V_home',$data);
	}
}
