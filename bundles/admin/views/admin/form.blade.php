{{ Form::open(URL::home() . "admin/{$controller}/save", 'POST', array('class' => 'form-horizontal')) }}
	{{ Dash\Messages::get_html() }}
  	{{ Dash\Form::build($columns , $data)}}
  	<label >&nbsp;</label>
  	<button type="submit" class="btn">Salvar</button>
{{ Form::close() }}
       

     