<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller_Template
{

	public function action_index()
	{
		$this->template->content = View::factory('welcome/index');
	}

	public function action_browse()
	{
		$this->auto_render = false;
		if (DataTables::is_request())
		{      
			$columns = explode(',',DBCOLUMNS);

			$orm = ORM::factory('table');

			$paginate = Paginate::factory($orm)
				->columns($columns);

			$datatables = DataTables::factory($paginate)->execute();

			foreach ($datatables->result() as $row)
			{
				$rowData = array();
				foreach($columns as $column)
					$rowData[] = $row->{$column};
				$datatables->add_row($rowData);
			}          

			$this->response->body($datatables->render());
		}
		else
			throw new HTTP_Exception_500();
	}
} // End Welcome
