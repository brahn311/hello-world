<?php

namespace App\Controllers;

use Respect\Validation\Validator as v;
use App\Models\{User};

class UsersController extends BaseController
{

	public function getAddUserAction($request)
	{
		$responseMessage = null;

		if ($request->getMethod() == 'POST')
		{
			$postData = $request->getParsedBody();

			$userValidator = v::key('email', v::stringType()->notEmpty())
				->key('password', v::stringType()->notEmpty());

			try
			{
				$userValidator->assert($postData);

				$user = new User();
				$user->email = $postData['email'];
				$user->password = password_hash($postData['password'], PASSWORD_DEFAULT);

				/*
				Abrahan Omaña
				PHP Developer
				Mail: hector@mail.com
				Phone: 1234567890
				LinkedIn: https://linkedin.com
				Twitter: @hectorbenitez
				*/

				$files = $request->getUploadedFiles();

				var_dump($files);

				$avatar = $files['avatar'];
				if ($avatar->getError() == UPLOAD_ERR_OK)
				{
					$fileName = $postData['email']."_".$avatar->getClientFilename();
					$avatar->moveTo("avatars/$fileName");
				}

				$user->avatar = $fileName;
				$user->save();

				$responseMessage = 'Saved';
			}
			catch(\Exception $e)
			{
				$responseMessage = $e->getMessage();
			}
		}

		return $this->renderHTML('addUser.twig', [
			'responseMessage' => $responseMessage,
		]);
	}
}
