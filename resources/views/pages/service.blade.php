@inject('nomObjet' , 
'App\Utilities\Getweekend')
@extends("base", 
['titre' => 'Page Service',
'Page Service'])

@section('vitrine')
<h3>Page Service bigua wooooo</h3>


 {{ $nomObjet->getMessageBienvenu()}}

@endsection