{"filter":false,"title":"home.blade.php","tooltip":"/resources/views/home.blade.php","undoManager":{"mark":100,"position":100,"stack":[[{"start":{"row":74,"column":6},"end":{"row":75,"column":81},"action":"insert","lines":["                            @foreach($memberships as $membership )","                            @if($membership->friend!=0 && $membership->friend!=1)"],"id":260}],[{"start":{"row":66,"column":22},"end":{"row":67,"column":0},"action":"insert","lines":["",""],"id":261},{"start":{"row":67,"column":0},"end":{"row":67,"column":16},"action":"insert","lines":["                "]}],[{"start":{"row":67,"column":16},"end":{"row":68,"column":0},"action":"insert","lines":["",""],"id":262},{"start":{"row":68,"column":0},"end":{"row":68,"column":16},"action":"insert","lines":["                "]}],[{"start":{"row":68,"column":16},"end":{"row":88,"column":22},"action":"insert","lines":["<div class=\"panel panel-primary\">","                <div class=\"panel-heading\">Libraries</div>","                    <table class=\"table table-striped table-hover statistic-table\">","                            <tr>","                            <th><h4>Library Name</h4></th>","                            <th><h4>Owner Name</h4></th>","                            </tr>","                            @foreach($libraries as $library )","                            {!! Form::open([\"url\"=>\"/memberships/store\"]) !!}","                            {!! Form::hidden('username_follow',$username) !!}","                            {!! Form::hidden('username_followed',$library->owner_username) !!}","                            <tr>","                            <td><h4>{!! Form::text('library_name',$library->name,[\"class\"=>\"form-control\"]) !!}</h4></td>","                            <td><h4>{!! Form::text('owner_username',$library->owner_username,[\"class\"=>\"form-control\"]) !!}</h4></td>","                            <td><a style=\"float:right; margin-left:400px;\">{!! Form::submit(\"Request\",[\"class\"=>\"btn btn-success\"]) !!}</a></td>","                            {!! Form::close() !!}","                            </tr>","                           @endforeach","                            ","                    </table>","                </div>"],"id":263}],[{"start":{"row":67,"column":16},"end":{"row":68,"column":0},"action":"insert","lines":["",""],"id":264},{"start":{"row":68,"column":0},"end":{"row":68,"column":16},"action":"insert","lines":["                "]}],[{"start":{"row":87,"column":24},"end":{"row":87,"column":28},"action":"remove","lines":["    "],"id":265}],[{"start":{"row":87,"column":20},"end":{"row":87,"column":24},"action":"remove","lines":["    "],"id":266}],[{"start":{"row":87,"column":16},"end":{"row":87,"column":20},"action":"remove","lines":["    "],"id":267}],[{"start":{"row":97,"column":33},"end":{"row":98,"column":81},"action":"remove","lines":[" @foreach($memberships as $membership )","                            @if($membership->friend!=0 && $membership->friend!=1)"],"id":268}],[{"start":{"row":97,"column":32},"end":{"row":97,"column":33},"action":"remove","lines":[" "],"id":269}],[{"start":{"row":97,"column":28},"end":{"row":97,"column":32},"action":"remove","lines":["    "],"id":270}],[{"start":{"row":97,"column":24},"end":{"row":97,"column":28},"action":"remove","lines":["    "],"id":271}],[{"start":{"row":97,"column":20},"end":{"row":97,"column":24},"action":"remove","lines":["    "],"id":272}],[{"start":{"row":97,"column":16},"end":{"row":97,"column":20},"action":"remove","lines":["    "],"id":273}],[{"start":{"row":97,"column":12},"end":{"row":97,"column":16},"action":"remove","lines":["    "],"id":274}],[{"start":{"row":97,"column":8},"end":{"row":97,"column":12},"action":"remove","lines":["    "],"id":275}],[{"start":{"row":97,"column":7},"end":{"row":97,"column":8},"action":"remove","lines":[" "],"id":276}],[{"start":{"row":97,"column":6},"end":{"row":97,"column":7},"action":"remove","lines":[" "],"id":277}],[{"start":{"row":97,"column":5},"end":{"row":97,"column":6},"action":"remove","lines":["/"],"id":278}],[{"start":{"row":97,"column":4},"end":{"row":97,"column":5},"action":"remove","lines":["/"],"id":279}],[{"start":{"row":97,"column":0},"end":{"row":97,"column":4},"action":"remove","lines":["    "],"id":280}],[{"start":{"row":75,"column":33},"end":{"row":76,"column":0},"action":"insert","lines":["",""],"id":281},{"start":{"row":76,"column":0},"end":{"row":76,"column":28},"action":"insert","lines":["                            "]}],[{"start":{"row":76,"column":28},"end":{"row":77,"column":81},"action":"insert","lines":[" @foreach($memberships as $membership )","                            @if($membership->friend!=0 && $membership->friend!=1)"],"id":282}],[{"start":{"row":76,"column":28},"end":{"row":76,"column":29},"action":"remove","lines":[" "],"id":283}],[{"start":{"row":89,"column":16},"end":{"row":89,"column":17},"action":"insert","lines":["`"],"id":284}],[{"start":{"row":89,"column":17},"end":{"row":89,"column":18},"action":"insert","lines":["`"],"id":285}],[{"start":{"row":89,"column":17},"end":{"row":89,"column":18},"action":"remove","lines":["`"],"id":286}],[{"start":{"row":89,"column":16},"end":{"row":89,"column":17},"action":"remove","lines":["`"],"id":287}],[{"start":{"row":89,"column":16},"end":{"row":89,"column":20},"action":"insert","lines":["    "],"id":288}],[{"start":{"row":89,"column":20},"end":{"row":89,"column":24},"action":"insert","lines":["    "],"id":289}],[{"start":{"row":89,"column":24},"end":{"row":89,"column":28},"action":"insert","lines":["    "],"id":290}],[{"start":{"row":89,"column":28},"end":{"row":89,"column":29},"action":"insert","lines":["@"],"id":291}],[{"start":{"row":89,"column":29},"end":{"row":89,"column":39},"action":"insert","lines":["endforeach"],"id":292}],[{"start":{"row":88,"column":38},"end":{"row":89,"column":0},"action":"insert","lines":["",""],"id":293},{"start":{"row":89,"column":0},"end":{"row":89,"column":27},"action":"insert","lines":["                           "]}],[{"start":{"row":89,"column":27},"end":{"row":89,"column":28},"action":"insert","lines":["@"],"id":294}],[{"start":{"row":89,"column":28},"end":{"row":89,"column":29},"action":"insert","lines":["e"],"id":295}],[{"start":{"row":89,"column":29},"end":{"row":89,"column":30},"action":"insert","lines":["n"],"id":296}],[{"start":{"row":89,"column":30},"end":{"row":89,"column":31},"action":"insert","lines":["d"],"id":297}],[{"start":{"row":89,"column":31},"end":{"row":89,"column":32},"action":"insert","lines":["i"],"id":298}],[{"start":{"row":89,"column":32},"end":{"row":89,"column":33},"action":"insert","lines":["f"],"id":299}],[{"start":{"row":77,"column":0},"end":{"row":78,"column":0},"action":"remove","lines":["                            @if($membership->friend!=0 && $membership->friend!=1)",""],"id":300}],[{"start":{"row":88,"column":0},"end":{"row":89,"column":0},"action":"remove","lines":["                           @endif",""],"id":301}],[{"start":{"row":56,"column":46},"end":{"row":56,"column":63},"action":"remove","lines":["username_followed"],"id":304},{"start":{"row":56,"column":46},"end":{"row":56,"column":60},"action":"insert","lines":["owner_username"]}],[{"start":{"row":55,"column":46},"end":{"row":55,"column":61},"action":"remove","lines":["username_follow"],"id":305},{"start":{"row":55,"column":46},"end":{"row":55,"column":47},"action":"insert","lines":["u"]}],[{"start":{"row":55,"column":47},"end":{"row":55,"column":48},"action":"insert","lines":["s"],"id":306}],[{"start":{"row":55,"column":48},"end":{"row":55,"column":49},"action":"insert","lines":["e"],"id":307}],[{"start":{"row":55,"column":49},"end":{"row":55,"column":50},"action":"insert","lines":["r"],"id":308}],[{"start":{"row":55,"column":46},"end":{"row":55,"column":50},"action":"remove","lines":["user"],"id":309},{"start":{"row":55,"column":46},"end":{"row":55,"column":54},"action":"insert","lines":["username"]}],[{"start":{"row":77,"column":0},"end":{"row":78,"column":0},"action":"remove","lines":["                            @foreach($libraries as $library )",""],"id":310}],[{"start":{"row":86,"column":0},"end":{"row":87,"column":0},"action":"remove","lines":["                           @endforeach",""],"id":311}],[{"start":{"row":81,"column":66},"end":{"row":81,"column":74},"action":"remove","lines":["$library"],"id":312},{"start":{"row":81,"column":66},"end":{"row":81,"column":77},"action":"insert","lines":["$membership"]}],[{"start":{"row":81,"column":79},"end":{"row":81,"column":83},"action":"remove","lines":["name"],"id":313},{"start":{"row":81,"column":79},"end":{"row":81,"column":80},"action":"insert","lines":["l"]}],[{"start":{"row":81,"column":80},"end":{"row":81,"column":81},"action":"insert","lines":["i"],"id":314}],[{"start":{"row":81,"column":81},"end":{"row":81,"column":82},"action":"insert","lines":["b"],"id":315}],[{"start":{"row":81,"column":79},"end":{"row":81,"column":82},"action":"remove","lines":["lib"],"id":316},{"start":{"row":81,"column":79},"end":{"row":81,"column":91},"action":"insert","lines":["library_name"]}],[{"start":{"row":82,"column":68},"end":{"row":82,"column":76},"action":"remove","lines":["$library"],"id":317},{"start":{"row":82,"column":68},"end":{"row":82,"column":79},"action":"insert","lines":["$membership"]}],[{"start":{"row":78,"column":46},"end":{"row":78,"column":61},"action":"remove","lines":["username_follow"],"id":318},{"start":{"row":78,"column":46},"end":{"row":78,"column":47},"action":"insert","lines":["u"]}],[{"start":{"row":78,"column":47},"end":{"row":78,"column":48},"action":"insert","lines":["s"],"id":319}],[{"start":{"row":78,"column":48},"end":{"row":78,"column":49},"action":"insert","lines":["e"],"id":320}],[{"start":{"row":78,"column":46},"end":{"row":78,"column":49},"action":"remove","lines":["use"],"id":321},{"start":{"row":78,"column":46},"end":{"row":78,"column":54},"action":"insert","lines":["username"]}],[{"start":{"row":79,"column":46},"end":{"row":79,"column":63},"action":"remove","lines":["username_followed"],"id":322},{"start":{"row":79,"column":46},"end":{"row":79,"column":47},"action":"insert","lines":["o"]}],[{"start":{"row":79,"column":47},"end":{"row":79,"column":48},"action":"insert","lines":["w"],"id":323}],[{"start":{"row":79,"column":48},"end":{"row":79,"column":49},"action":"insert","lines":["n"],"id":324}],[{"start":{"row":79,"column":46},"end":{"row":79,"column":49},"action":"remove","lines":["own"],"id":325},{"start":{"row":79,"column":46},"end":{"row":79,"column":60},"action":"insert","lines":["owner_username"]}],[{"start":{"row":46,"column":10},"end":{"row":66,"column":22},"action":"remove","lines":["      <div class=\"panel panel-primary\">","                <div class=\"panel-heading\">Libraries</div>","                    <table class=\"table table-striped table-hover statistic-table\">","                            <tr>","                            <th><h4>Library Name</h4></th>","                            <th><h4>Owner Name</h4></th>","                            </tr>","                            @foreach($libraries as $library )","                            {!! Form::open([\"url\"=>\"/memberships/store\"]) !!}","                            {!! Form::hidden('username',$username) !!}","                            {!! Form::hidden('owner_username',$library->owner_username) !!}","                            <tr>","                            <td><h4>{!! Form::text('library_name',$library->name,[\"class\"=>\"form-control\"]) !!}</h4></td>","                            <td><h4>{!! Form::text('owner_username',$library->owner_username,[\"class\"=>\"form-control\"]) !!}</h4></td>","                            <td><a style=\"float:right; margin-left:400px;\">{!! Form::submit(\"Request\",[\"class\"=>\"btn btn-success\"]) !!}</a></td>","                            {!! Form::close() !!}","                            </tr>","                           @endforeach","                            ","                    </table>","                </div>"],"id":326}],[{"start":{"row":45,"column":0},"end":{"row":46,"column":0},"action":"insert","lines":["",""],"id":327}],[{"start":{"row":46,"column":0},"end":{"row":66,"column":22},"action":"insert","lines":["      <div class=\"panel panel-primary\">","                <div class=\"panel-heading\">Libraries</div>","                    <table class=\"table table-striped table-hover statistic-table\">","                            <tr>","                            <th><h4>Library Name</h4></th>","                            <th><h4>Owner Name</h4></th>","                            </tr>","                            @foreach($libraries as $library )","                            {!! Form::open([\"url\"=>\"/memberships/store\"]) !!}","                            {!! Form::hidden('username',$username) !!}","                            {!! Form::hidden('owner_username',$library->owner_username) !!}","                            <tr>","                            <td><h4>{!! Form::text('library_name',$library->name,[\"class\"=>\"form-control\"]) !!}</h4></td>","                            <td><h4>{!! Form::text('owner_username',$library->owner_username,[\"class\"=>\"form-control\"]) !!}</h4></td>","                            <td><a style=\"float:right; margin-left:400px;\">{!! Form::submit(\"Request\",[\"class\"=>\"btn btn-success\"]) !!}</a></td>","                            {!! Form::close() !!}","                            </tr>","                           @endforeach","                            ","                    </table>","                </div>"],"id":328}],[{"start":{"row":70,"column":16},"end":{"row":89,"column":22},"action":"remove","lines":["<div class=\"panel panel-primary\">","                <div class=\"panel-heading\">Libraries</div>","                    <table class=\"table table-striped table-hover statistic-table\">","                            <tr>","                            <th><h4>Library Name</h4></th>","                            <th><h4>Owner Name</h4></th>","                            </tr>","                            @foreach($memberships as $membership )","                            {!! Form::open([\"url\"=>\"/memberships/store\"]) !!}","                            {!! Form::hidden('username',$username) !!}","                            {!! Form::hidden('owner_username',$library->owner_username) !!}","                            <tr>","                            <td><h4>{!! Form::text('library_name',$membership->library_name,[\"class\"=>\"form-control\"]) !!}</h4></td>","                            <td><h4>{!! Form::text('owner_username',$membership->owner_username,[\"class\"=>\"form-control\"]) !!}</h4></td>","                            <td><a style=\"float:right; margin-left:400px;\">{!! Form::submit(\"Request\",[\"class\"=>\"btn btn-success\"]) !!}</a></td>","                            {!! Form::close() !!}","                            </tr>","                            @endforeach","                    </table>","                </div>"],"id":329}],[{"start":{"row":67,"column":0},"end":{"row":70,"column":8},"action":"remove","lines":["          ","                ","                ","        "],"id":330}],[{"start":{"row":52,"column":33},"end":{"row":53,"column":0},"action":"insert","lines":["",""],"id":331},{"start":{"row":53,"column":0},"end":{"row":53,"column":28},"action":"insert","lines":["                            "]}],[{"start":{"row":53,"column":28},"end":{"row":54,"column":0},"action":"insert","lines":["                            @foreach($libraries as $library )",""],"id":332}],[{"start":{"row":53,"column":89},"end":{"row":54,"column":0},"action":"remove","lines":["",""],"id":333}],[{"start":{"row":53,"column":52},"end":{"row":53,"column":56},"action":"remove","lines":["    "],"id":334}],[{"start":{"row":53,"column":48},"end":{"row":53,"column":52},"action":"remove","lines":["    "],"id":335}],[{"start":{"row":53,"column":44},"end":{"row":53,"column":48},"action":"remove","lines":["    "],"id":336}],[{"start":{"row":53,"column":40},"end":{"row":53,"column":44},"action":"remove","lines":["    "],"id":337}],[{"start":{"row":53,"column":36},"end":{"row":53,"column":40},"action":"remove","lines":["    "],"id":338}],[{"start":{"row":53,"column":32},"end":{"row":53,"column":36},"action":"remove","lines":["    "],"id":339}],[{"start":{"row":53,"column":28},"end":{"row":53,"column":32},"action":"remove","lines":["    "],"id":340}],[{"start":{"row":53,"column":37},"end":{"row":53,"column":47},"action":"remove","lines":["$libraries"],"id":341},{"start":{"row":53,"column":37},"end":{"row":53,"column":38},"action":"insert","lines":["$"]}],[{"start":{"row":53,"column":38},"end":{"row":53,"column":39},"action":"insert","lines":["m"],"id":342}],[{"start":{"row":53,"column":0},"end":{"row":54,"column":0},"action":"remove","lines":["                            @foreach($m as $library )",""],"id":361}],[{"start":{"row":56,"column":91},"end":{"row":57,"column":0},"action":"insert","lines":["",""],"id":362},{"start":{"row":57,"column":0},"end":{"row":57,"column":28},"action":"insert","lines":["                            "]}],[{"start":{"row":57,"column":28},"end":{"row":58,"column":0},"action":"insert","lines":["                            {!! Form::hidden('username',$username) !!}",""],"id":363}],[{"start":{"row":57,"column":98},"end":{"row":58,"column":0},"action":"remove","lines":["",""],"id":364}],[{"start":{"row":57,"column":52},"end":{"row":57,"column":56},"action":"remove","lines":["    "],"id":365}],[{"start":{"row":57,"column":48},"end":{"row":57,"column":52},"action":"remove","lines":["    "],"id":366}],[{"start":{"row":57,"column":44},"end":{"row":57,"column":48},"action":"remove","lines":["    "],"id":367}],[{"start":{"row":57,"column":40},"end":{"row":57,"column":44},"action":"remove","lines":["    "],"id":368}],[{"start":{"row":57,"column":36},"end":{"row":57,"column":40},"action":"remove","lines":["    "],"id":369}],[{"start":{"row":57,"column":32},"end":{"row":57,"column":36},"action":"remove","lines":["    "],"id":370}],[{"start":{"row":57,"column":28},"end":{"row":57,"column":32},"action":"remove","lines":["    "],"id":371}],[{"start":{"row":57,"column":56},"end":{"row":57,"column":65},"action":"remove","lines":["$username"],"id":372},{"start":{"row":57,"column":56},"end":{"row":57,"column":57},"action":"insert","lines":["$"]}],[{"start":{"row":57,"column":57},"end":{"row":57,"column":58},"action":"insert","lines":["i"],"id":373}],[{"start":{"row":57,"column":58},"end":{"row":57,"column":59},"action":"insert","lines":["d"],"id":374}],[{"start":{"row":57,"column":46},"end":{"row":57,"column":54},"action":"remove","lines":["username"],"id":375},{"start":{"row":57,"column":46},"end":{"row":57,"column":47},"action":"insert","lines":["i"]}],[{"start":{"row":57,"column":47},"end":{"row":57,"column":48},"action":"insert","lines":["d"],"id":376}],[{"start":{"row":57,"column":50},"end":{"row":57,"column":51},"action":"remove","lines":["$"],"id":377}],[{"start":{"row":57,"column":50},"end":{"row":57,"column":58},"action":"insert","lines":["$library"],"id":378}],[{"start":{"row":57,"column":58},"end":{"row":57,"column":59},"action":"insert","lines":["-"],"id":379}],[{"start":{"row":57,"column":59},"end":{"row":57,"column":60},"action":"insert","lines":[">"],"id":380}]]},"ace":{"folds":[],"scrolltop":672,"scrollleft":0,"selection":{"start":{"row":57,"column":60},"end":{"row":57,"column":60},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":35,"state":"start","mode":"ace/mode/php"}},"timestamp":1462344150929,"hash":"a5c05bc0b5f8173ade2b5bdbce37d0f645d0de6d"}