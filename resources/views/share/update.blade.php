<h2 class="page-header">Edit Share</h2>
{!! Form::model($share,["id"=>"frm","class"=>"form-horizontal"]) !!}
@include("share._form")
{!! Form::close() !!}