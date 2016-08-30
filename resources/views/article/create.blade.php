@extends('layouts/app')

@section('content')
<section class="container">
    <form action ="{{ url('article') }}" method="post">
        <font color="3333FF">title</font>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        
        <input type="text" name="title" class="form-control">
        <font color="3333FF">content</font>
        <textarea name="content" id="" cols="30" rows="10" class="form-control"></textarea>
        <input type="submit" value="submit" class="btn btn-primary">
    </form>
</section>

@stop
