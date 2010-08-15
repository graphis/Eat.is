<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Admin_Categories controller
 *
 * @package    Eat.is
 * @category   Admin
 * @author     Birkir Rafn Gudjonsson
 * @copyright  (c) 2010 Eat.is
 */
class Controller_Admin_Categories extends Controller_Admin {

	public $title = "Categories";
	public $food, $view;
	
	public function before()
	{
		parent::before();
		$this->category = ORM::factory('category');
	}
	
	public function action_index()
	{
		$this->view = new View('smarty:admin/list');
		
		$this->view->fields = array(
			'alias' => 'Alias'
		);
		
		$count = $this->category->where('removed', '=', 0)->find_all()->count();
		
		$this->view->pagination = Pagination::factory(array(
			'view'           => 'admin/pagination',
			'total_items'    => $count,
			'items_per_page' => $this->items_per_page,
		));
		
		$this->view->control = Inflector::singular($this->request->controller);
		
		$this->view->items = $this->category
		->order_by('category_id', 'ASC')
		->limit($this->view->pagination->items_per_page)
		->offset($this->view->pagination->offset)
		->find_all();
	}
	
	public function action_edit($id=0)
	{
		$this->view = new View('smarty:admin/categories');
		$this->view->category = ORM::factory('category', $id);
		
		if ($_POST)
		{
			if ($this->view->category->values($_POST)->check())
			{
				$this->view->category->save();
			}
			else
			{
				$this->view->errors = $this->view->category->validate()->errors('category');
				$_POST['category_id'] = $this->view->category->category_id;
				$this->view->category = (object) $_POST;
			}
		}
	}
	
	public function action_new()
	{
		$this->view = new View('smarty:admin/categories');
		$this->view->category = ORM::factory('category');
		
		if ($_POST)
		{
			if ($this->view->category->values($_POST)->check())
			{
				$this->view->category->save();
			}
			else
			{
				$this->view->errors = $this->view->category->validate()->errors('category');
				$_POST['category_id'] = $this->view->category->category_id;
				$this->view->category = (object) $_POST;
			}
		}
	}
	
	public function after()
	{
		parent::after();
		$this->template->view = $this->view;
	}

}

