<?php
 
namespace App\Controllers;
 
use App\Models\ModelRegister;
 
class Register extends BaseController
{
    public function process()
    {
    	if (!$this->validate([
    		'username' => [
    			'rules' => 'required|min_length[5]|max_length[20]|is_unique[users.username]',
    			'errors' => [
    				'required' => '{field} Harus diisi',
    				'min_length' => '{field} Minimal 5 Karakter',
    				'max_length' => '{field} Maksimal 20 Karakter',
    				'is_unique' => 'Username sudah digunakan sebelumnya'
    			]
    		],
    		'password' => [
    			'rules' => 'required|min_length[5]|max_length[50]',
    			'errors' => [
    				'required' => '{field} Harus diisi',
    				'min_length' => '{field} Minimal 5 Karakter',
    				'max_length' => '{field} Maksimal 50 Karakter',
    			]
    		],
    		'pass_confirm' => [
    			'rules' => 'matches[password]',
    			'errors' => [
    				'matches' => 'Konfirmasi Password tidak sesuai dengan password',
    			]
    		],
    		'fullname' => [
    			'rules' => 'required|min_length[4]|max_length[100]',
    			'errors' => [
    				'required' => '{field} Harus diisi',
    				'min_length' => '{field} Minimal 4 Karakter',
    				'max_length' => '{field} Maksimal 100 Karakter',
    			]
    		],
    	])) {
    		session()->setFlashdata('error', $this->validator->listErrors());
    		return redirect()->back()->withInput();
    	}
    	$users = new ModelRegister();
    	$users->insert([
    		'username' => $this->request->getVar('username'),
    		'password_hash' => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT),
            'email' => $this->request->getVar('email'),
    		'fullname' => $this->request->getVar('fullname'),
    	]);
    	return redirect()->to('Login');
    }
}