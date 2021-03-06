@if(Auth::guest())
    @else
<h1 class="page-header">Joining money receipt List
    <div class="pull-right">
        <a href="javascript:ajaxLoad('joiningmoneyreceipt/create')" class="btn btn-primary pull-right"><i
                    class="glyphicon glyphicon-plus-sign"></i> New</a>
    </div>
</h1>
<div class="col-sm-7 form-group">
    <div class="input-group">
        <input class="form-control" id="search" value="{{ Session::get('joiningmoneyreceipt_search') }}"
               onkeydown="if (event.keyCode == 13) ajaxLoad('{{url('joiningmoneyreceipt/list')}}?ok=1&search='+this.value)"
               placeholder="Search..."
               type="text">

        <div class="input-group-btn">
            <button type="button" class="btn btn-default"
                    onclick="ajaxLoad('{{url('joiningmoneyreceipt/list')}}?ok=1&search='+$('#search').val())"><i
                        class="glyphicon glyphicon-search"></i>
            </button>
        </div>
    </div>
</div>
<table class="table table-bordered table-striped">
    <thead>
    <tr>
        <th width="50px" style="text-align: center">No</th>
        <th>
            <a href="javascript:ajaxLoad('joiningmoneyreceipt/list?field=name&sort={{Session::get("joiningmoneyreceipt_sort")=="asc"?"desc":"asc"}}')">
                Member Id
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('joiningmoneyreceipt_field')=='name'?(Session::get('joiningmoneyreceipt_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('joiningmoneyreceipt/list?field=JoiningmoneyreceiptCode&sort={{Session::get("joiningmoneyreceipt_sort")=="asc"?"desc":"asc"}}')">
                Name
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('joiningmoneyreceipt_field')=='JoiningmoneyreceiptCode'?(Session::get('joiningmoneyreceipt_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('joiningmoneyreceipt/list?field=unitprice&sort={{Session::get("joiningmoneyreceipt_sort")=="asc"?"desc":"asc"}}')">
                No of Share
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('joiningmoneyreceipt_field')=='unitprice'?(Session::get('joiningmoneyreceipt_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('joiningmoneyreceipt/list?field=unitprice&sort={{Session::get("joiningmoneyreceipt_sort")=="asc"?"desc":"asc"}}')">
                Amount of Share
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('joiningmoneyreceipt_field')=='unitprice'?(Session::get('joiningmoneyreceipt_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th width="140px" style="text-align: center; color: blue">Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php $i = 1;?>
    @foreach($joiningmoneyreceipts as $key=>$joiningmoneyreceipt)
        <tr>
            <td align="center">{{$i++}}</td>
            <td>{{$joiningmoneyreceipt->CSMId}}</td>
            <td>{{$joiningmoneyreceipt->name}}</td>
            <td>{{$joiningmoneyreceipt->NoOfShare}}</td>
            <td>{{$joiningmoneyreceipt->ShareAmount}}</td>
            <td style="text-align: center">
                <a class="btn btn-primary btn-xs" title="Edit"
                   href="javascript:ajaxLoad('joiningmoneyreceipt/update/{{$joiningmoneyreceipt->id}}')">
                    <i class="glyphicon glyphicon-edit"></i> Edit</a>
                <a class="btn btn-danger btn-xs" title="Delete"
                   href="javascript:if(confirm('Are you sure want to delete?')) ajaxLoad('joiningmoneyreceipt/delete/{{$joiningmoneyreceipt->id}}')">
                    <i class="glyphicon glyphicon-trash"></i> Delete
                </a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
<div class="pull-right">{!! str_replace('/?','?',$joiningmoneyreceipts->render()) !!}</div>
<div class="row">
    <i class="col-sm-12">
        Total: {{$joiningmoneyreceipts->total()}} records
    </i>
</div>
@endif
<script>
    $('.pagination a').on('click', function (event) {
        event.preventDefault();
        ajaxLoad($(this).attr('href'));
    });
</script>