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

			$userValidator = v::key('name', v::stringType()->notEmpty())
				->key('email', v::stringType()->notEmpty())
				->key('password', v::stringType()->notEmpty());

			try
			{
				$userValidator->assert($postData);

				$user = new User();
				$user->name = $postData['name'];
				$user->email = $postData['email'];
				$user->password = password_hash($postData['password'], PASSWORD_DEFAULT);
				/*
				Mail: hector@mail.com
				Phone: 1234567890
				LinkedIn: https://linkedin.com
				Twitter: @hectorbenitez
				*/

				$filePath = 'avatars';
				$files = $request->getUploadedFiles();
				$image = $files['avatar'];
				if ($image->getError() == UPLOAD_ERR_OK)
				{
					$fileName = $filePath.'/'.$postData['email'].'_'.$image->getClientFilename();
					$image->moveTo($fileName);
					$user->image = $fileName;
				}

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
