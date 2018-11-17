<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
        //$this->load->model('Siswa_model');
        $this->data['tampilkan_data'] = $this->Siswa_model->ambil_data();
		$this->load->view('home', $this->data);
    }
    
    public function create()
	{
        $this->data['nama_siswa'] = array(
            'name' => 'nama_siswa',
            'placeholder' => 'Silahkan Isi Nama Siswa'
        );
        $this->data['pilihan'] = array(
            '1' => 'Laki-Laki',
            '2' => 'Perempuan',
        );
        $this->data['kelamin'] = array(
            'name' => 'kelamin'
        );
        $this->data['nama_ayah'] = array(
            'name' => 'nama_ayah',
            'placeholder' => 'Silahkan Isi Nama Ayah'
        );
        $this->data['nama_ibu'] = array(
            'name' => 'nama_ibu',
            'placeholder' => 'Silahkan Isi Nama Ibu'
        );
        $this->data['alamat'] = array(
            'name' => 'alamat',
            'placeholder' => 'Silahkan Isi Alamat',
            'rows' => '5'
        );
		$this->load->view('tambah', $this->data);
    }
    
    public function create_proses(){
        //$this->load->model('Siswa_model')
        $this->load->library('form_validation');

        $this->form_validation->set_rules('nama_siswa', 'Nama Siswa', 'required');
        $this->form_validation->set_rules('nama_ayah', 'Nama Ayah', 'required');
        $this->form_validation->set_rules('nama_ibu', 'Nama Ibu', 'required');
        $this->form_validation->set_rules('alamat', 'alamat', 'required');

        $this->form_validation->set_message('required', '{field} wajib diisi');
        $this->form_validation->set_error_delimiters('<b>', '</b><br>');

        if($this->form_validation->run() == FALSE){
            $this->create();
        }else{
            $data = array(
                'nama' => $this->input->post('nama_siswa'),
                'kelamin' => $this->input->post('kelamin'),
                'nama_ayah' => $this->input->post('nama_ayah'),
                'nama_ibu' => $this->input->post('nama_ibu'),
                'alamat' => $this->input->post('alamat'),
            );
            $this->Siswa_model->insert($data);
            redirect(base_url());
        }
    }

    public function update($id){
        $row = $this->Siswa_model->get_by_id($id);
        $this->data['siswa'] = $this->Siswa_model->get_by_id($id);
        if($row){
            $this->data['id'] = array(
                'name' => 'id',
                'type' => 'hidden'
            );
            $this->data['nama_siswa'] = array(
                'name' => 'nama_siswa',
                'placeholder' => 'Silahkan Isi Nama Siswa'
            );
            $this->data['pilihan'] = array(
                '1' => 'Laki-Laki',
                '2' => 'Perempuan',
            );
            $this->data['kelamin'] = array(
                'name' => 'kelamin'
            );
            $this->data['nama_ayah'] = array(
                'name' => 'nama_ayah',
                'placeholder' => 'Silahkan Isi Nama Ayah'
            );
            $this->data['nama_ibu'] = array(
                'name' => 'nama_ibu',
                'placeholder' => 'Silahkan Isi Nama Ibu'
            );
            $this->data['alamat'] = array(
                'name' => 'alamat',
                'placeholder' => 'Silahkan Isi Alamat',
                'rows' => '5'
            );
            $this->load->view('update', $this->data);
        }else{
            redirect(base_url());
        }
    }

    public function update_proses(){
        $this->load->library('form_validation');

        $this->form_validation->set_rules('nama_siswa', 'Nama Siswa', 'required');
        $this->form_validation->set_rules('nama_ayah', 'Nama Ayah', 'required');
        $this->form_validation->set_rules('nama_ibu', 'Nama Ibu', 'required');
        $this->form_validation->set_rules('alamat', 'alamat', 'required');

        $this->form_validation->set_message('required', '{field} wajib diisi');
        $this->form_validation->set_error_delimiters('<b>', '</b><br>');

        if($this->form_validation->run() == FALSE){
            $this->update();
        }else{
            $data = array(
                'nama' => $this->input->post('nama_siswa'),
                'kelamin' => $this->input->post('kelamin'),
                'nama_ayah' => $this->input->post('nama_ayah'),
                'nama_ibu' => $this->input->post('nama_ibu'),
                'alamat' => $this->input->post('alamat'),
            );
            $this->Siswa_model->update($this->input->post('id'), $data);
            redirect(base_url());
        }
    }

    public function delete($id){
        $row = $this->Siswa_model->get_by_id($id);
        if($row){
            $this->Siswa_model->delete($id);
            redirect(base_url());
        }
    }
}
