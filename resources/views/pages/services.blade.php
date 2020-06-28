@extends('layouts.app')

@section('content')
    
    <h1> {{$title}} </h1>
    @if(count($services) > 0)
        <ul class="list-group">
            
            @foreach ($services as $service)
                <li class = "list-group-item"> {{$service}} </li>    
            @endforeach
        
        </ul>
    @endif   

    

    <form action="https://formspree.io/mnqgbbvb" method="POST">

        <table border="0">
        <tr>
        
            <td> E-mail:</td>
            <td><input type="text" name="_replyto" required placeholder="Please enter your mail"></td>
        
        </tr>
        
        <tr>
            <td>Message:</td>
            <td><textarea name="message" required placeholder="Please enter your message"></textarea></td>
        </tr>
        
        <tr>
            <td> <button type="submit">Send</button> </td>
        </tr>
        </table>
    </form>

@endsection

