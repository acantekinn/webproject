@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 cl-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"> Dashboard </div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    @if(Auth::user()->id->$post->id)
                    <a href="/posts/create" class="btn btn-primary"> Create </a> 
                    @endif
                    
                    <h3> That's All Your Announcement </h3>
        
                    <table class="table table-striped">
                        <tr>
                            <td> Title </th>
                            <th></th>
                            <th></th>
                        </tr>
                        @foreach ($posts as $post)
                            <tr>
                                <td> {{$post->title}} </td>
                                <td> <a href="/posts/{{$post->id}}/edit" class="btn btn-default"> Edit </td>
                                <td>
                                    {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right']) !!}

                                    {{Form::hidden('_method', 'DELETE')}}
                                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}

                                    {!!Form::close()!!}
                                </td>
                            </tr>
                        @endforeach
                    </table>
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
