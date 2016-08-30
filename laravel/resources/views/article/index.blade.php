
@extends('layouts.app')

@section('content')
<section class="container">
    <a href="{{ url('article/create') }}" role="btn" class="btn btn-primary">create</a>
    <table class="table table-hover">
    @foreach($query as $var)
        <tr>
            <td>{{ $var->id }}</td>
            <td>{{ $var->title }}</td>
            <td><a href="{{ url('article/'.$var->id.'/edit') }}"role="btn" class="btn btn-warning">edit</a></td>
            <td><a href="{{ url('article/'.$var->id.'/delete') }}" role="btn" class="btn btn-warning" >delete</a></td>
           
        </tr>

    @endforeach
    </table>
</section>
@stop

