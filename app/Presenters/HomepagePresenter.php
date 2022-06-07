<?php

declare(strict_types=1);

namespace App\Presenters;

use Nette;


final class HomepagePresenter extends Nette\Application\UI\Presenter
{
	private Nette\Database\Explorer $database;


	public function __construct(
		Nette\Database\Explorer $database
	)
	{
		parent::__construct();

		$this->database = $database;
	}

	public function renderDefault(): void
	{

		$table = $this->database->table('testTab');
		$this->template->table = $table;
	}

}
