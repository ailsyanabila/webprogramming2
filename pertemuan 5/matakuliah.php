<?php
class matakuliah extends CI_controller
{
    public function index()
    {
        $this->load->view('view_validation')
    }
    public function cetak()
    {
        $this->form_validation->set_rules('kode','kode matakuliah','required|min_leght[3]',[
            'required'=> 'kode matakuliah harus diisi',
            'min_leght'=> 'kode terlalu pendek'
            ]};

$this->form_validation->set_rules('kode','nama matakuliah','required|min_leght[3]',[  
    'required'=> 'nama matakuliah harus diisi', 
    'min_leght'=> 'nama terlalu pendek'
    ]};
if (this->form_validation->run()!= true){
    this->load->view('view-form-matakuliah');
}else {
    $data = [
        'kode' => $this->input->post('kode')
        'nama' => $this->input->post('nama')
        'sks' => $this->input->post('sks')
    ];

    $this->load->view(view-data-matakuliah',$data);
    } 
}



}