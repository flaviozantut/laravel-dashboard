{{ Dash\Messages::get_html() }}
<table class="table table-striped table-hover">
    @foreach ($data->results as $column => $result)
        @if (!$column)
            <thead>  <tr>
                <?php $first = true; ?>
                @foreach ($result as $key => $value)
                    <?php if ($first) {$first = false; continue;}  ?>
                    <th> {{ $key }} </th>
                @endforeach
                <th class="align-right"> Opções </th>
            </tr> </thead>
        @endif
        <tr>
            <?php $keyValue = false; $i = 0; $len = count($result); ?>
            @foreach ($result as $key => $value)
                <?php
                    if (!$keyValue and $key == $modelKey) {
                        $keyValue = $value; continue;
                    }
                    $i++;
                ?>
                <td> {{ $value }} </td>

            @endforeach
            <td class="align-right">
                <a class="btn" href="{{ URL::home() . "admin/{$controller}/edit/{$keyValue}" }}"><i class="icon-edit"></i></a>
                <a href="#modal" role="button" class="btn delete" data-key="{{$modelKey}}" data-value="{{$keyValue}}" data-toggle="modal"><i class="icon-remove"></i></a>
            </td>
        </tr>
    @endforeach
</table>

{{-- $data->links() --}}

{{ $data->appends(array('sort' => 'id'))->links() }}

<div class="modal hide fade static" id="modal"  role="dialog" aria-labelledby="modal" aria-hidden="true" >
  <div class="modal-header ">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Realmente deseja deletar o registro?</h3>
  </div>
  <div class="modal-body">
    <p>Os dados deletados não poderão ser recuperados.</p>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Cancelar</button>
    {{ Form::open(URL::home() . "admin/{$controller}/delete", 'POST', array('style'=>'display:inline' , 'id'=>'formDelete')) }}
        {{ Form::hidden('' , '') }}
        <button class="btn btn-danger">Deletar</button>
    {{ Form::close() }}
  </div>
</div>
