<div style="padding:10px;background: rgba(255, 255, 255, 0.9);margin-top:-18px" class="hero-unit clearfix">
    <h3 style="padding-left:10px; float:left; line-height:38px">{{$title}}</h3>
    @if( isset($addTabs) and count($addTabs))
        <div style="float:right; margin-right:22px" class="btn-group">
            <button class="btn btn-large dropdown-toggle" data-toggle="dropdown"> <i class=" icon-plus"></i>&nbsp;&nbsp;<span class="caret"></span></button>
            <ul class="dropdown-menu pull-right">
                 @foreach ($addTabs as $key => $row)
                    <li class="{{ URI::is("{$key}")?'active':'' }}" >
                        {{ HTML::link($key, $row) }}
                    </li>
                @endforeach

            </ul>
        </div>
    @endif
    <!-- /btn-group -->
</div>
<div class="tabbable tabs-left">
    @if( isset($navTabs) and count($navTabs))
        <ul class="nav nav-tabs">
            @foreach ($navTabs as $key => $row)
                <li class="{{ URI::is("*{$key}*")?'active':'' }}" >
                    {{ HTML::link($key, $row) }}
                </li>
            @endforeach
        </ul>
    @endif

    <div class="tab-content">
        <div class="tab-pane active" >
            {{$dashContent}}
        </div>

    </div>
</div>
