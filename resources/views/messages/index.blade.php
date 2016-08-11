@extends('layouts.app')

@section('content')
    <div class="container">
    

        <div class="row">   
            <div class="col-md-12">
                <ul class="nav nav-pills">

                    <li role="presentation"><a href="message/create">een boodschap maken</a></li>

                </ul>
            </div>
        </div>
        <hr>
        <div class="row">   
            <div class="col-md-12">
                <h3>Alle boodschappen</h3></br>
                <h6>Enkel de eerste boodschap wordt getoond op de homepagina.</h6>
                    
            </div>
        </div>
        
        </br>
            
        @foreach ($messages as $message)
    
        <div class="row">
            <div class="col-md-12">
        
                <b>Titel NL:</b> {{ $message->titelNL }} 
                </br>
                <b>Titel FR</b>  {{ $message->titelFR }} 
                </br>   
                <b>Teskt NL:</b>  {{ $message->tekstNL }} 
                </br>
                <b>Tekst FR:</b>  {{ $message->tekstFR }} 
                </br>
                </br>
                    
                
                <a class="btn btn-small btn-info" href="{{ URL::to('message/' . $message->id . '/edit') }}">Boodschap aanpassen</a>

                </br>
                </br>
            
                {{ Form::open(['method' => 'DELETE', 'route' => ['message.destroy', $message->id]]) }}
                    {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                {{ Form::close() }}
        
            </div>     
            
        </div>
        </br>
        <hr>
        </br>
    
        @endforeach    
     
    </div>    
@stop