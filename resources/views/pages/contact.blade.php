@inject('nomObjet' , 'App\Utilities\Getweekend')
@extends("base", [
    'titre' => 'Page Contact',
    'page_contact' =>'' ,
])

@section('vitrine')
<h3>page contact bigua woo</h3>

{{ $nomObjet->Getweekend()}}
 

@push('message_js')

<script src="js/index.js"></script>

@endpush

@endsection