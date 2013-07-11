<?php

class Controller_Crud extends Controller_Template{

	protected static $model_name;
	protected static $controller_name;
	protected static $properties       = array();
	
	protected $stash = array();
	
	
	public function action_index()
	{
		$this->_action_index();
		$this->_render_index();
	}

	public function action_view($id = null)
	{
		$this->_action_view($id);
		$this->_render_view();
	}

	public function action_create()
	{
		$this->_action_create();
		$this->_render_create();
	}
	

	public function action_edit($id = null)
	{
		$this->_action_edit($id);
		$this->_render_edit();
	}

	public function action_delete($id = null)
	{
		$this->_action_delete($id);
		$this->_render_delete();
	}
	
	
	
	
	public function _action_index()
	{
		$model_name = static::$model_name;
		$this->stash['models'] = $model_name::find('all');
	}

	public function _action_view($id = null)
	{
		$model_name = static::$model_name;
		
		is_null($id) and Response::redirect( static::$controller_name );

		if ( ! $this->stash['model'] = $model_name::find($id))
		{
			$this->_could_not_found_id( array( 'id'=> $id ) );
		}
	}

	public function _action_create()
	{
		$model_name = static::$model_name;
		
		if (Input::method() == 'POST')
		{
			$val = $model_name::validate('create');
			
			if ($val->run())
			{
				$model = $model_name::forge();
				$this->_set_model_from_input( array( 'model'=> $model ) );

				if ($model && $model->save() )
				{
					$this->_added( array( 'model'=> $model ) );
				}

				else
				{
					$this->_could_not_save( array( 'model'=> $model ) );
				}
			}
			else
			{
				$this->_validation_error( array( 'val'=>$val ) );
			}
		}
	}
	

	public function _action_edit($id = null)
	{
		$model_name = static::$model_name;
		
		is_null($id) and Response::redirect( static::$controller_name );

		if ( ! $model = $model_name::find($id))
		{
			$this->_could_not_found_id( array( 'id'=> $id ) );
		}

		$val = $model_name::validate('edit');

		if ($val->run())
		{
			$this->_set_model_from_input( array( 'model'=> $model ) );

			if ($model->save())
			{
				$this->_updated( array( 'model'=> $model ) );
			}
			else
			{
				$this->_could_not_update( array( 'model'=> $model ) );
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$this->_set_model_from_validation( array( 'model'=> $model ) );
				$this->_validation_error( array( 'val'=>$val ) );
			}

			$this->template->set_global('model', $model, false);
		}
	}

	public function _action_delete($id = null)
	{
		$model_name = static::$model_name;
		
		is_null($id) and Response::redirect( static::$controller_name );

		if ($model = $model_name::find($id))
		{
			$model->delete();
			$this->_deleted( array( 'id'=> $id ) );
		}

		else
		{
			$this->_could_not_delete( array( 'id'=> $id ) );
		}
	}
	
	
	
	
	
	public function _render_index(){
		$this->template->title = static::$controller_name;
		$this->template->content = View::forge( static::$controller_name. '/index', $this->stash );
	
	}
	
	public function _could_not_found_id( $params ){
		Session::set_flash('error', sprintf('Could not find %s #%d', static::$controller_name ,$id ));
		Response::redirect( static::$controller_name );
	
	}
	
	public function _render_view(){
		$this->template->title = static::$controller_name;
		$this->template->content = View::forge( static::$controller_name. '/view', $this->stash );
	
	}
	
	public function _set_model_from_input( $params ){
		foreach ( static::$properties as $p ){
			$params['model']->$p = Input::post( $p );
		}
	}
	
	public function _added( $params ){
		Session::set_flash('success', sprintf('Added %s #%d', static::$controller_name ,$params['model']->id ));
		Response::redirect( static::$controller_name );
	}
	
	public function _could_not_save( $params ){
		Session::set_flash('error', sprintf('Could not save %s #%d', static::$controller_name ,$params['model']->id ));
		Response::redirect( static::$controller_name );
	}
	
	public function _validation_error( $params ){
		Session::set_flash('error', $params['val']->error());
	}
	
	public function _render_create(){
		$this->template->title = static::$controller_name;
		$this->template->content = View::forge( static::$controller_name. '/create', $this->stash );
	}
	
	public function _updated( $params ){
		Session::set_flash('success', sprintf('Added %s #%d', static::$controller_name ,$params['model']->id ));
		Response::redirect( static::$controller_name );
	}
	
	public function _could_not_update( $params ){
		Session::set_flash('error', sprintf('Could not update %s #%d', static::$controller_name ,$params['model']->id ));
		Response::redirect( static::$controller_name );
	}
	
	public function _set_model_from_validation( $params ){
		foreach ( static::$properties as $p ){
			$params['model']->$p = $param['val']->validated($p);
		}
	}
	
	public function _render_edit(){
		$this->template->title = static::$controller_name;
		$this->template->content = View::forge( static::$controller_name. '/edit', $this->stash );
	}
	
	public function _deleted( $params ){
		Session::set_flash('success', sprintf('Deleted %s #%d', static::$controller_name ,$params['id'] ));
		Response::redirect( static::$controller_name );
	}
	
	public function _could_not_delete( $params ){
		Session::set_flash('error', sprintf('Could not delete %s #%d', static::$controller_name ,$params['id']  ));
		Response::redirect( static::$controller_name );
	}
	
	public function _render_delete(){
		Response::redirect( static::$controller_name );
	}

}
