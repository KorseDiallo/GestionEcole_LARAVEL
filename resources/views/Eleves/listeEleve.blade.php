@include("Layout.nav");

<div class="container">
    <div class="row">
        <div class="col-sm-12 text-center mt-4">
            <h4 class="alert alert-info">Liste Des Eleves</h4>
            <table class="table table-hover">
                <thead>
                    <th>Matricule</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Date De Naissance</th>
                    <th>Classe</th>
                    <th>Action</th>
                </thead>
                @foreach($eleves as $eleve)
                <tr>
                    <td>{{$eleve->nomEleve}}</td>
                    <td>{{$eleve->prenomEleve}}</td>
                    <td>{{$eleve->nomEleve}}</td>
                    <td>{{$eleve->date_de_naissance}}</td>
                    <td>{{$eleve->classe}}</td>
                    <td>
                        <a href="voirDetails/{{$eleve->id}}" class="btn btn-secondary">Voir Details</a>
                        <a href="/supprimerEleve/{{$eleve->id}}" class="btn btn-danger">Supprimer</a>
                        <a href="/ajoutNote/{{$eleve->id}}" class="btn btn-warning">Ajouter Note</a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>