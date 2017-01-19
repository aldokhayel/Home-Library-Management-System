{"filter":false,"title":"editLibrary.blade.php","tooltip":"/resources/views/editLibrary.blade.php","undoManager":{"mark":68,"position":68,"stack":[[{"start":{"row":0,"column":0},"end":{"row":4,"column":5},"action":"insert","lines":["@extends('layouts.app')","","@section('content')","","@stop"],"id":1}],[{"start":{"row":3,"column":0},"end":{"row":4,"column":0},"action":"insert","lines":["",""],"id":2}],[{"start":{"row":4,"column":0},"end":{"row":5,"column":0},"action":"insert","lines":["",""],"id":3}],[{"start":{"row":5,"column":0},"end":{"row":15,"column":16},"action":"insert","lines":["<div class=\"container\">","    <div class=\"row\">","                <div class=\"col-md-2\">","                    <ul class=\"nav nav-pills nav-stacked\">","                        <li role=\"presentation\"  ><a href=\"{{ url('/adminPage') }}\">Admin page</a></li>","                        <li role=\"presentation\"><a href=\"{{ url('/editLibrary') }}\">Edit Library</a></li>","                        <li role=\"presentation\" class=\"active\"><a href=\"{{ url('/editBook') }}\">Edit Book</a></li>","","                    </ul>","                </div>","                "],"id":4}],[{"start":{"row":15,"column":16},"end":{"row":16,"column":0},"action":"insert","lines":["",""],"id":5},{"start":{"row":16,"column":0},"end":{"row":16,"column":16},"action":"insert","lines":["                "]}],[{"start":{"row":16,"column":16},"end":{"row":17,"column":0},"action":"insert","lines":["",""],"id":6},{"start":{"row":17,"column":0},"end":{"row":17,"column":16},"action":"insert","lines":["                "]}],[{"start":{"row":11,"column":47},"end":{"row":11,"column":62},"action":"remove","lines":[" class=\"active\""],"id":7}],[{"start":{"row":10,"column":47},"end":{"row":10,"column":48},"action":"insert","lines":[" "],"id":8}],[{"start":{"row":10,"column":48},"end":{"row":10,"column":63},"action":"insert","lines":[" class=\"active\""],"id":9}],[{"start":{"row":14,"column":22},"end":{"row":15,"column":0},"action":"insert","lines":["",""],"id":10},{"start":{"row":15,"column":0},"end":{"row":15,"column":16},"action":"insert","lines":["                "]}],[{"start":{"row":15,"column":16},"end":{"row":16,"column":0},"action":"insert","lines":["",""],"id":11},{"start":{"row":16,"column":0},"end":{"row":16,"column":16},"action":"insert","lines":["                "]}],[{"start":{"row":16,"column":16},"end":{"row":17,"column":0},"action":"insert","lines":["",""],"id":12},{"start":{"row":17,"column":0},"end":{"row":17,"column":16},"action":"insert","lines":["                "]}],[{"start":{"row":17,"column":16},"end":{"row":45,"column":22},"action":"insert","lines":["<div class=\"col-md-10\">","       ","       <div class=\"panel panel-default\">","                <div class=\"panel-heading\">Dashboard</div>","                    <div class=\"panel-body\">","                        Welcome in Admin Page!","                    </div>","                </div>","","            <div class=\"panel panel-primary\">","              <div class=\"panel-heading\">Libraries</div>","                    @foreach($libraries as $library )","                         ","             <table class=\"table table-striped table-hover statistic-table\">","                            <tr>","                            {!! Form::open([\"url\"=>\"/library/$library->id\",\"method\"=>\"patch\"]) !!}","                            <tr>","                            <td><h4>{{ Form::text('name',$library->name,[\"class\"=>\"form-control\"])}}</h4></td>","                            <td><a style=\"float:right; margin-left:500px;\">{!! Form::submit(\"Update\",[\"class\"=>\"btn btn-success\"]) !!}</a></td>","                            {!! Form::close() !!}","                            ","                            {!! Form::open([\"url\"=>\"/library/$library->id\",\"method\"=>\"delete\"]) !!}","                            <td><a >{!! Form::submit(\"Remove\",[\"class\"=>\"btn btn-danger\"]) !!}</a></td>","                            </tr>","                            {!! Form::close() !!}","                            </tr> ","                      </table>","                    @endforeach","                </div>"],"id":13}],[{"start":{"row":45,"column":22},"end":{"row":46,"column":0},"action":"insert","lines":["",""],"id":14},{"start":{"row":46,"column":0},"end":{"row":46,"column":16},"action":"insert","lines":["                "]}],[{"start":{"row":47,"column":0},"end":{"row":47,"column":1},"action":"insert","lines":["<"],"id":15}],[{"start":{"row":47,"column":1},"end":{"row":47,"column":2},"action":"insert","lines":[">"],"id":16}],[{"start":{"row":47,"column":1},"end":{"row":47,"column":2},"action":"insert","lines":["/"],"id":17}],[{"start":{"row":47,"column":2},"end":{"row":47,"column":3},"action":"insert","lines":["d"],"id":18}],[{"start":{"row":47,"column":3},"end":{"row":47,"column":4},"action":"insert","lines":["i"],"id":19}],[{"start":{"row":47,"column":4},"end":{"row":47,"column":5},"action":"insert","lines":["b"],"id":20}],[{"start":{"row":47,"column":4},"end":{"row":47,"column":5},"action":"remove","lines":["b"],"id":21}],[{"start":{"row":47,"column":4},"end":{"row":47,"column":5},"action":"insert","lines":["v"],"id":22}],[{"start":{"row":46,"column":5},"end":{"row":46,"column":6},"action":"insert","lines":["<"],"id":23}],[{"start":{"row":46,"column":6},"end":{"row":46,"column":7},"action":"insert","lines":["?"],"id":24}],[{"start":{"row":46,"column":6},"end":{"row":46,"column":7},"action":"remove","lines":["?"],"id":25}],[{"start":{"row":46,"column":6},"end":{"row":46,"column":7},"action":"insert","lines":["?"],"id":26}],[{"start":{"row":46,"column":6},"end":{"row":46,"column":7},"action":"remove","lines":["?"],"id":27}],[{"start":{"row":46,"column":6},"end":{"row":46,"column":7},"action":"insert","lines":[">"],"id":28}],[{"start":{"row":46,"column":6},"end":{"row":46,"column":7},"action":"insert","lines":["/"],"id":29}],[{"start":{"row":46,"column":7},"end":{"row":46,"column":8},"action":"insert","lines":["d"],"id":30}],[{"start":{"row":46,"column":8},"end":{"row":46,"column":9},"action":"insert","lines":["u"],"id":31}],[{"start":{"row":46,"column":9},"end":{"row":46,"column":10},"action":"insert","lines":["i"],"id":32}],[{"start":{"row":46,"column":9},"end":{"row":46,"column":10},"action":"remove","lines":["i"],"id":33}],[{"start":{"row":46,"column":8},"end":{"row":46,"column":9},"action":"remove","lines":["u"],"id":34}],[{"start":{"row":46,"column":8},"end":{"row":46,"column":9},"action":"insert","lines":["i"],"id":35}],[{"start":{"row":46,"column":9},"end":{"row":46,"column":10},"action":"insert","lines":["v"],"id":36}],[{"start":{"row":45,"column":10},"end":{"row":45,"column":11},"action":"insert","lines":["\\"],"id":37}],[{"start":{"row":45,"column":10},"end":{"row":45,"column":11},"action":"remove","lines":["\\"],"id":38}],[{"start":{"row":45,"column":10},"end":{"row":46,"column":0},"action":"insert","lines":["",""],"id":39},{"start":{"row":46,"column":0},"end":{"row":46,"column":10},"action":"insert","lines":["          "]}],[{"start":{"row":47,"column":5},"end":{"row":48,"column":0},"action":"insert","lines":["",""],"id":40},{"start":{"row":48,"column":0},"end":{"row":48,"column":5},"action":"insert","lines":["     "]}],[{"start":{"row":48,"column":5},"end":{"row":49,"column":0},"action":"insert","lines":["",""],"id":41},{"start":{"row":49,"column":0},"end":{"row":49,"column":5},"action":"insert","lines":["     "]}],[{"start":{"row":48,"column":5},"end":{"row":48,"column":9},"action":"insert","lines":["    "],"id":42}],[{"start":{"row":48,"column":9},"end":{"row":48,"column":10},"action":"insert","lines":["<"],"id":43}],[{"start":{"row":48,"column":10},"end":{"row":48,"column":11},"action":"insert","lines":[">"],"id":44}],[{"start":{"row":48,"column":10},"end":{"row":48,"column":11},"action":"insert","lines":["/"],"id":45}],[{"start":{"row":48,"column":11},"end":{"row":48,"column":12},"action":"insert","lines":["d"],"id":46}],[{"start":{"row":48,"column":12},"end":{"row":48,"column":13},"action":"insert","lines":["i"],"id":47}],[{"start":{"row":48,"column":13},"end":{"row":48,"column":14},"action":"insert","lines":["v"],"id":48}],[{"start":{"row":22,"column":35},"end":{"row":22,"column":46},"action":"remove","lines":["Admin Page!"],"id":49},{"start":{"row":22,"column":35},"end":{"row":22,"column":36},"action":"insert","lines":["E"]}],[{"start":{"row":22,"column":36},"end":{"row":22,"column":37},"action":"insert","lines":["d"],"id":50}],[{"start":{"row":22,"column":37},"end":{"row":22,"column":38},"action":"insert","lines":["i"],"id":51}],[{"start":{"row":22,"column":38},"end":{"row":22,"column":39},"action":"insert","lines":["t"],"id":52}],[{"start":{"row":22,"column":39},"end":{"row":22,"column":40},"action":"insert","lines":[" "],"id":53}],[{"start":{"row":22,"column":40},"end":{"row":22,"column":41},"action":"insert","lines":["L"],"id":54}],[{"start":{"row":22,"column":41},"end":{"row":22,"column":42},"action":"insert","lines":["i"],"id":55}],[{"start":{"row":22,"column":42},"end":{"row":22,"column":43},"action":"insert","lines":["b"],"id":56}],[{"start":{"row":22,"column":43},"end":{"row":22,"column":44},"action":"insert","lines":["r"],"id":57}],[{"start":{"row":22,"column":44},"end":{"row":22,"column":45},"action":"insert","lines":["a"],"id":58}],[{"start":{"row":22,"column":45},"end":{"row":22,"column":46},"action":"insert","lines":["r"],"id":59}],[{"start":{"row":22,"column":40},"end":{"row":22,"column":46},"action":"remove","lines":["Librar"],"id":60},{"start":{"row":22,"column":40},"end":{"row":22,"column":47},"action":"insert","lines":["Library"]}],[{"start":{"row":22,"column":47},"end":{"row":22,"column":48},"action":"insert","lines":["!"],"id":61}],[{"start":{"row":20,"column":43},"end":{"row":20,"column":52},"action":"remove","lines":["Dashboard"],"id":62},{"start":{"row":20,"column":43},"end":{"row":20,"column":55},"action":"insert","lines":["Edit Library"]}],[{"start":{"row":45,"column":9},"end":{"row":45,"column":10},"action":"remove","lines":[" "],"id":63}],[{"start":{"row":45,"column":8},"end":{"row":45,"column":9},"action":"remove","lines":[" "],"id":64}],[{"start":{"row":45,"column":4},"end":{"row":45,"column":8},"action":"remove","lines":["    "],"id":65}],[{"start":{"row":45,"column":0},"end":{"row":45,"column":4},"action":"remove","lines":["    "],"id":66}],[{"start":{"row":44,"column":31},"end":{"row":45,"column":0},"action":"remove","lines":["",""],"id":67}],[{"start":{"row":46,"column":5},"end":{"row":47,"column":0},"action":"insert","lines":["",""],"id":68},{"start":{"row":47,"column":0},"end":{"row":47,"column":5},"action":"insert","lines":["     "]}],[{"start":{"row":47,"column":5},"end":{"row":48,"column":0},"action":"insert","lines":["",""],"id":69},{"start":{"row":48,"column":0},"end":{"row":48,"column":5},"action":"insert","lines":["     "]}]]},"ace":{"folds":[],"scrolltop":347,"scrollleft":1.5,"selection":{"start":{"row":34,"column":48},"end":{"row":34,"column":48},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":20,"state":"start","mode":"ace/mode/php"}},"timestamp":1461681591000,"hash":"7c5a92b426980280be28bd3297a2ef130be50659"}