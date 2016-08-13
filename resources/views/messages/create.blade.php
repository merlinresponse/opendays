@extends('layouts.app')

@section('content')
       
        <div class="container">
        
            <div class="row">
               <div class="col-md-12">
                  
                  <h3>Een boodschap toevoegen</h3>
               
               </div>
            </div>
            
            </br>
            
            <div class="row">
               <div class="col-md-12">
                  
                  <form method="POST" action="/message">
                       <input type="hidden" name="_token" value="{{ csrf_token() }}">
                       <div class="form-group">
                         <label for="titelNL">Titel Nedelands</label>
                         <input type="text" class="form-control" name="titelNL" placeholder="Titel Nederlands">
                       </div>
                       <div class="form-group">
                         <label for="titelFR">Titel Frans</label>
                         <input type="text" class="form-control" name="titelFR" placeholder="Titel Frans">
                       </div>
                       <div class="form-group">
                         <label for="tekstNL">Tekst Nederlands</label>
                         <textarea class="form-control" name="tekstNL" placeholder="Tekst Nederlands"></textarea>
                       </div>                     
                       <div class="form-group">
                         <label for="tekstFR">Tekst Frans</label>
                         <textarea class="form-control" name="tekstFR" placeholder="Tekst Frans"></textarea>
                       </div>
                        </br>
                       <button type="submit" class="btn btn-default">Versturen</button>
                   </form>
               
               </div>
            </div>
            
        </div>        
@stop