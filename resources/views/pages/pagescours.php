<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  premiere cours
    //""""""""""""""sinquéme methode""""""""""//
//Route::get('/about', function () {
  // $view = view('pages/about');
   //$view->nom = "sarr";
   //$view->prenom = "awa";
  // $view->adresse = "pikine";

   //return $view;
//});

pour afficher {{ nom}}

éeme cours
    <h2> premiere methode pout tableau simple </h2>
  
    /Route::get('/', function () {
// $jours = ["Lundi", "mardi", "Mercredi" ,"jeudi"];

//return view('base')->with("jours", $jours);
//});

=======pour afficher=======
  @foreach ($jours as $jour)
  @if ($jour == "Mardi")
   {{ "Mardi gras " . '-'}}
   @else
     {{ $jour . '-'}}
     @endif
     @endforeach

     //////////les stecks ////////
//////////la page base ////////
pour afficher page base sur about 
@extends("base", ['titre' => 
'Page About'])

@section('vitrine')
<h3>Bienvenu sur Daray technologie - page About</h3>
@endsection

===========pour contact et service il faut eviter le code======
@if (isset($page_contact) )
 <h2>Bienvenu sur page d'accueil</h2>
 @endif
 @yield('vitrine')
 @stack('message_js')


 pour afficher sur web
 ============
 Route::view('/about', 'pages/about');
//Route::view('/contact', 'pages/contact');
//Route::view('/service', 'pages/service');

============page base=============
 <title>{{$titre ?? 'daray technologie'}}
@if (isset($page_contact))
<h2></h2>
@endif
@yield("vitrine")
<script src="js/index.js"></script>
============les sticks============ pour java script bi afficher si been page
//////////la page contact////////
@if (isset($page_contact) )
 <h2>Bienvenu sur page d'accueil</h2>
 @endif
 @yield('vitrine')
 @stack('message_js') pour afficher ko si web bii

@push('message_js')
<script src="js/index.js"></script>
@endpush
@endsection


============on va cree index.js===========alert
//////////injection ////////

@inject('nomObjet' , 'App\Utilities\Getweekend')
pour afficher 
{{ $nomObjet->Getweekend()}}

@if (date("N") >=6) 
{{ "c'est le weekend "}}

@else
{{ "c'est pas le weekend "}}

////////// la communication bd  ////////


</head>
<body>
    
</body>
</html>


