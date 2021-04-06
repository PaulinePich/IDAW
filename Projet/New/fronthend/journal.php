<!doctype html>
<html lang="fr">
    <head>
        <meta charset='utf-8'>
        
        <title>Journal</title>
    

</head>
        <h1 id="titre"> Mon journal</h1>
        <p>Mon dernier repas</p>
        <p id="enCours"></p>
    <form id="addRepasForm" action="" onsubmit="ajoutJournal();">
        <div class="form-group row">
            <label for="inputDate" class="col-sm-2 col-form-label">Date du repas</label>
            <p id=erreur></p>
            <div class="col-sm-3">
                <input type="date" class="form-control" id="inputDate" >
            </div>
        </div>
        <div class="form-group row">
            <label for="inputHeure" class="col-sm-2 col-form-label">Heure du repas</label>
            <p id=erreur></p>
            <div class="col-sm-3">
                <input type="time" class="form-control" id="inputHeure" >
            </div>
        </div>
        <div class="form-group row">
            <label for="inputTypeRepas" class="col-sm-2 col-form-label">Type de repas</label>
            <select id="inputTypeRepas" name="inputTypeRepas">
                <option value="Petit Déjeuner">Petit Déjeuner</option>
                <option value="Déjeuner">Déjeuner</option>
                <option value="Diner">Diner</option>
                <option value="Goûter">Goûter</option>
            <select>
        </div>
        <div class="form-group row">
            <label for="searchTypeAliment" class="col-sm-2 col-form-label">Type d'aliment</label>
            <select id="typeSelectionAliment" name="typeSelectionAliment">
            <select>
        </div>*
        <div class="form-group row">
        <label for="searchAliment" class="col-sm-2 col-form-label">Aliment consommé</label>
            <select id="inputAliment" name="inputAliment">
                
            <select>
        </div>
        <div class="form-group row" id=quantite>
            <label for="inputQuantite" class="col-sm-2 col-form-label">Quantité d'aliment (en g)</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" id="inputQuantite" >
            </div>
        </div>
        <div class="form-group row" id="repere"></div>
        <div class="form-group row">
                <span class="col-sm-2"></span>
                <div class="col-sm-2" >
                    <button onclick="" class="btn btn-primary form-control">Ajouter aliments</button>
                </div>
        </div>
    </form>
