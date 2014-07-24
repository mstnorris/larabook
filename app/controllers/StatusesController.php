<?php

use Larabook\Core\CommandBus;
use Larabook\Statuses\PublishStatusCommand;
use Larabook\Statuses\StatusRepository;

/**
 * Class StatusesController
 */
class StatusesController extends \BaseController {

    use CommandBus;
    /**
     * @var
     */
    protected $statusRepository;
    /**
     * @var \Larabook\Forms\PublishStatusForm
     */
    protected $publishStatusForm;

    /**
     * @param \Larabook\Forms\PublishStatusForm $publishStatusForm
     * @param StatusRepository $statusRepository
     */
    function __construct(\Larabook\Forms\PublishStatusForm $publishStatusForm, StatusRepository $statusRepository)
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
        $statuses = $this->statusRepository->getAllForUser(Auth::user());

		return View::make('statuses.index', compact('statuses'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

        $this->publishStatusForm->validate(Input::only('body'));
		$this->execute(
            new PublishStatusCommand(Input::get('body'), Auth::user()->id)
        );
        Flash::message('Your status has been updated');
        return Redirect::back();
	}


}
