@extends('fontend.master2')
@section('content')

<form enctype="multipart/form-data" action="{{ URL::to('upload/excel',null,is_secured()) }}" method="post">
{!! csrf_field() !!}
    <input type="file" name="report"/>
    <input type="submit" value="Submit"/>
</form>
@stop