@include("Layout.nav");

<div class="container">
    <div class="card">
        <div class="col-md-6 offset-3 mt-5">
            <h5 class="card-header text-center bg-dark text-white">AJOUT ELEVE</h5>
            <div class="card-body">
                <form method="post" action="/modifierEleve/{{$eleve->id}}">
                    @csrf
                    
                    <div class="form-group">
                        <label for="nomEleve">Nom Eleve</label>
                        <input type="text" class="form-control" id="nomEleve" placeholder="Enter un nom"
                            name="nom" value="{{$eleve->nomEleve}}">
                    </div>
                    <div class="form-group">
                        <label for="prenomEleve">Prénom Eleve</label>
                        <input type="text" class="form-control" id="prenomEleve" placeholder="Enter un prénom"
                            name="prenom" value="{{$eleve->prenomEleve}}">
                    </div>
                    <div class="form-group">
                        <label for="classe">classe</label>
                        <input type="text" class="form-control" id="classe" placeholder="Enter votre classe"
                            name="classe" value="{{$eleve->classe}}">
                    </div>
                    <div class="form-group">
                        <label for="dateNaiss">Date De Naissance</label>
                        <input type="date" class="form-control" id="dateNaiss" name="dateNaiss" value="{{$eleve->date_de_naissance}}">
                    </div>

                    <div class="form-group">
                        <label for="sexeEleve">Sexe</label>
                        <select name="sexe" id="" class="form-control">
                            <option value="">Choisissez</option>
                            <option value="masculin" {{$eleve->genre=="masculin" ? "selected" : ""}}>Masculin</option>
                            <option value="féminin" {{$eleve->genre=="feminin" ? "selected" : ""}}>Féminin</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-dark offset-4 mt-2">Modifier</button>
                </form>
            </div>
        </div>
    </div>
</div>