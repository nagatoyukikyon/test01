
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
            <td>
                <form action ="{{ url('article/'.$var->id) }}" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token()}}">
                    <input type="hidden" name="_method" value="delete">       
                    <input type="submit" role="btn" class="btn btn-danger" value="delete">         
                </form>
           </td>
        </tr>

    @endforeach
    </table>
</section>
@stop

