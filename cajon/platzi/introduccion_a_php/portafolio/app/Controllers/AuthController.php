<?php

namespace App\Controllers;

use Respect\Validation\Validator as v;
use Zend\Diactoros\Response\RedirectResponse;
use App\Models\{User};

class AuthController extends BaseController
{

	public function getLogin()
	{
		return $this->renderHTML('login.twig');
	}
	
	public function getPostLoginAction($request)
	{
		$responseMessage = null;

		if ($request->getMethod() == 'POST')
		{
			$postData = $request->getParsedBody();

			$user = User::where('email', $postData['email'])->first();
			if ($user)
			{
				echo "Found";
				if (password_verify($postData['password'], $user->password))
				{
					// Correct credentials;
					return new RedirectResponse('/admin');
				}
				else
				{
					// Wrong password;
					$responseMessage = 'Bad credentials';
				}
			}
			else
			{
				// User not found
				$responseMessage = 'Bad credentials';
			}
			
		}

		return $this->renderHTML('addUser.twig', [
			'responseMessage' => $responseMessage,
		]);
	}
}
