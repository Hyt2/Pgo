<?php

namespace App\Http\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class UserModel extends CommonModel
{
    protected $table='user';

    protected $primaryKey='uid';

    function index()
    {
    	return $this->get();
    }
}
