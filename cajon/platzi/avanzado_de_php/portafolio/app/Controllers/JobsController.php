<?php

namespace App\Controllers;

use Zend\Diactoros\ServerRequest;
use Zend\Diactoros\Response\RedirectResponse;
use Respect\Validation\Validator as v;
use App\Services\JobService;
use App\Models\Job;

class JobsController extends BaseController
{
	private $jobService;

	public function __construct(JobService $jobService)
	{
		parent::__construct();
		$this->jobService = $jobService;
	}

	public function indexAction()
	{
		$jobs = Job::withTrashed()->get();
		return $this->renderHTML('jobs/index.twig', compact('jobs'));
	}

	public function getDeleteJobAction(ServerRequest $request)
	{
		//var_dump($request);
		$params = $request->getQueryParams();
		$this->jobService->deleteJob($params['id']);

		return new RedirectResponse('/jobs');
	}

	public function getAddJobAction(ServerRequest $request)
	{
		$responseMessage = null;

		if ($request->getMethod() == 'POST')
		{
			$postData = $request->getParsedBody();

			$jobValidator = v::key('title', v::stringType()->notEmpty())
				->key('description', v::stringType()->notEmpty());

			// probando el assert
			// var_dump($jobValidator->assert($postData));

			try
			{
				$jobValidator->assert($postData);

				$job = new Job();
				$job->title = $postData['title'];
				$job->description = $postData['description'];
				$job->months = $postData['months'];

				$files = $request->getUploadedFiles();
				$image = $files['logo'];

				$filePath = 'uploads';
				if ($image->getError() == UPLOAD_ERR_OK)
				{
					$fileName = $filePath.'/'.$image->getClientFilename();
					$image->moveTo($fileName);
					$job->image = $fileName;
				}

				$job->save();

				$responseMessage = 'Saved';
			}
			catch(\Exception $e)
			{
				// probando el mensaje
				// var_dump($e->getFullMessage());
				$responseMessage = $e->getMessage();
			}
		}

		return $this->renderHTML('addJob.twig', [
			'responseMessage' => $responseMessage,
		]);
	}
}
