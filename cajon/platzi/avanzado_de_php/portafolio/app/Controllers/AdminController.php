<?php

namespace App\Controllers;

/*
use Respect\Validation\Validator as v;
use Zend\Diactoros\Response\RedirectResponse;
use App\Models\{User};
*/

class AdminController extends BaseController
{
	public function getAdminIndex()
	{
		return $this->renderHTML('admin.twig');
	}
}
