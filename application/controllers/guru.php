<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('m_guru');
    }

    public function index(){

        $data['judul']="Tampil Data yang ada";
        $data['tampil']=$this->m_guru->tampil()->result();
        $this->load->view('guru/index', $data, FALSE);
    }

    public function input(){
        $this->load->view('guru/input');

    }

    public function save(){
        $nip=$this->input->post('nip');
        $nama=$this->input->post('nama');
        $email=$this->input->post('email');
        $jk=$this->input->post('jk');

        $data=array(
            'nip'=>$nip,
            'nama'=>$nama,
            'email'=>$email,
            'jk'=>$jk
        );

        $this->m_guru->save($data);
        redirect('guru','refresh');
    }

    public function edit(){
        $id=$this->uri->segment(3);
        $data['edit']=$this->m_guru->getid($id)->row_array();
        $this->load->view('guru/edit', $data, FALSE);
    }

    public function update(){
        $nip=$this->input->post('nip');
        $nama=$this->input->post('nama');

        $data=array(
            'nama'=>$nama 
        );

        $this->m_guru->update($data,$nip);
        redirect('guru','refresh');

    }

    public function delete(){
        $nip=$this->uri->segment(3);
        $this->db->where('nip',$nip);
        $this->db->delete('guru');
        redirect('guru','refresh');
    }
}