<?php

use Larabook\Forms\PublishStatusForm;
use Larabook\Statuses\PublishStatusCommand;
use Larabook\Statuses\StatusRepository;

/**
 * Class StatusesController
 */
class StatusesController extends \BaseController {


    /**
     * @var
     */
    protected $statusRepository;

    /**
     * @var PublishStatusForm
     */
    protected $publishStatusForm;

    /**
     * @param PublishStatusForm $publishStatusForm
     * @param StatusRepository $statusRepository
     */
    function __construct(PublishStatusForm $publishStatusForm, StatusRepository $statusRepository)
    {
        $this->statusRepository = $statusRepository;
        $this->publishStatusForm = $publishStatusForm;
    }

    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        //$statuses = $this->statusRepository->getAllForUser(Auth::user());

        $statuses = $this->statusRepository->getFeedForUser(Auth::user());

		return View::make('statuses.index', compact('statuses'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        $input = array_add(Input::get(), 'userId', Auth::id());

        $this->publishStatusForm->validate($input);

		$this->execute(PublishStatusCommand::class, $input);

        Flash::message('Your status has been updated');

        return Redirect::back();
	}


}
