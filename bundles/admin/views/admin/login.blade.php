<div class="container">
    <div class="container-fluid">
        <div class="page-header">
          <h1>{{ $title }}</h1>
        <hr />
    </div>

    <div class="hero-unit">
      {{ Form::open('admin/auth', 'POST',array('class'=>'')) }}
      {{ Form::token() }}
      {{ Dash\Messages::get_html() }}
        <div class="control-group">
          <label for="username"><h3>Usuário</h3></label>
          <div class="controls">
            <input type="text" class="input-xlarge" id="username" name="username" placeholder="Enter Your Username...">
          </div>
        </div>

        <div class="control-group">
          <label class="control-label" for="password"><h3>Password</h3></label>
          <div class="controls">
            <input type="password" class="input-xlarge" id="password" name="password" placeholder="Enter Your Password...">
          </div>
        </div>
        <div class="controls">
        <input type="submit" class="btn btn-inverse" value="Login" />
      </div>
      {{ Form::close()  }}
    </div>
</div>
