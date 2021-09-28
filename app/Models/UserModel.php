<?php namespace App\Models;

use Myth\Auth\Models\UserModel as MythAuthModel;

class UserModel extends MythAuthModel
{
    protected $allowedFields = [
        'email', 'username', 'password_hash', 'reset_hash', 'reset_at', 'reset_expires', 'activate_hash',
        'status', 'status_message', 'active', 'force_pass_reset', 'permissions', 'deleted_at','fullname', 'tanggal_lahir', 'jenis_kelamin', 'phone', 'alamat',
    ];

    protected $validationRules = [
        'email'         => 'required|valid_email|is_unique[users.email,id,{id}]',
        'username'      => 'required|alpha_numeric_punct|min_length[3]|max_length[30]|is_unique[users.username,id,{id}]',
        'password_hash' => 'required',
        'fullname'      => 'required|min_length[3]',
        'tanggal_lahir' => 'required',
        'jenis_kelamin.*' => 'required',
        'phone'         => 'required|max_length[13]|numeric',
        'alamat'         => 'required',

    ];
}
