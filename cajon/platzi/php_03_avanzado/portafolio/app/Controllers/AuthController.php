<?php

namespace App\Controllers;

use Zend\Diactoros\Response\RedirectResponse;
use Zend\Diactoros\ServerRequest;
use App\Models\{User};

class AuthController extends BaseController
{

	public function getLogin()
	{
		return $this->renderHTML('login.twig');
	}

	public function getPostLoginAction(ServerRequest $request)
	{
		$responseMessage = null;

		if ($request->getMethod() == 'POST')
		{
			$postData = $request->getParsedBody();

			$user = User::where('email', $postData['email'])->first();
			if ($user)
			{
				// User found
				if (password_verify($postData['password'], $user->password))
				{
					// Correct credentials
					$_SESSION['userId'] = $user->id;
					return new RedirectResponse('/admin');
				}
				else
				{
					// Wrong password
					$responseMessage = 'Bad credentials';
				}
			}
			else
			{
				// User not found
				$responseMessage = 'Bad credentials';
			}
		}

		return $this->renderHTML('login.twig', [
			'responseMessage' => $responseMessage,
		]);
	}

	public function getLogout()
	{
		unset($_SESSION['userId']);
		return new RedirectResponse('/login');
	}
}
