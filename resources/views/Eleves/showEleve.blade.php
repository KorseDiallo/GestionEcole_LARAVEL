@include("Layout.nav");
<div class="container">
    <div class="row">
        <div class="mt-4">
            <div class="card">
                <div class="card-header">
                <b>Matricule:{{$eleve->matricule}}</b>
                </div>
                <div class="card mb-3">
                    <div class="card-body">
                    <h5 class="card-title"><b>Nom: {{$eleve->nomEleve}}</b></h5>
                        <h5 class="card-title"><b>Prenom: {{$eleve->prenomEleve}}</b></h5>
                        <h5 class="card-title"><b>Classe: {{$eleve->classe}}</b></h5>
                        <h5 class="card-title"><b>Date Naissance: {{$eleve->date_de_naissance}}</b></h5>
                        <h5 class="card-title"><b>Sexe: {{$eleve->genre}}</b></h5>
                        <h5 class="card-title"><b>Note:</b></h5>
                        
                        <a href="/modifEleve/{{$eleve->id}}" class="btn btn-success">Modifier Elève</a>
                        <a href="" class="btn btn-warning">Modifier Notes</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>