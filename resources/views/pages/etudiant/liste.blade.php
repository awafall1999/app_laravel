
@extends("base", 
['titre' => 
'Liste etudiant'])

@section('vitrine')
<h3>liste des etudiant</h3>
<ul>
    @foreach
    <li>{{ $etudiants->prenom}} {{ $etudiants->nom }}</li>
    @endforeach
</ul>

