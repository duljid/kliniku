<?php

namespace App\Controllers;

use App\Models\UserModel;

class Admin extends BaseController
{
    public function index()
    {
        // $usermodel = new UserModel();
		// $data['users'] = $usermodel->findAll();

        $db = \Config\Database::connect();
        $builder = $db->table('users');
        $builder->select('users.id as userid, username, fullname, name');
        $builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $query = $builder->get();

        $data['users'] = $query->getResult();

        
        return view('Admin/index', $data);
    }
    public function buatakun()
    {
        return view('Admin/create');
    }
}
