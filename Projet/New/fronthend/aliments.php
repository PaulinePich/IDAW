<!doctype html>
<html lang="fr">
    <head>
        <meta charset='utf-8'>
        
        <script src="js/aliments.js" async></script>
        
        <title>Aliments</title>
    
<script src='js/aliments.js' async></script>
</head>
<h1 id="titre">Renseignements Aliments</h1>
<form class="justify-content-center" id="selectType" action="" onsubmit="chargeAliments();">
    <div class="form-group">
        <label for="searchType" class="col-sm-2 col-form-label">Type d'aliment</label>
        <select id="typeSelection" name="typeSelection">
        <select>
    </div>
    <div class="form-group row">
            <span class="col-sm-2"></span>
            <div class="col-sm-2" >
                <button type="submit" class="btn btn-primary form-control">Recherche</button>
            </div>
        </div>
</form>
<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th scope="col">Nom Aliment</th>
            <th scope="col">Type d'aliment</th>
            <th scope="col">Energie</th>
            <th scope="col">Protéines (g/100 g)</th>
            <th scope="col">Glucides (g/100 g)</th>
        </tr>
    </thead>
    <tbody id="alimentsTableBody">
    </tbody>
</table>
<h2>Ajouter des aliments</h2>
    <form id="addAlimentsForm" action="" onsubmit="onFormSubmit();">
        <div class="form-group row">
            <label for="inputAliment" class="col-sm-2 col-form-label">Nom Aliment</label>
            <p id=erreur></p>
            <div class="col-sm-3">
                <input type="text" class="form-control" id="inputAliment" >
            </div>
        </div>
        <div class="form-group row">
            <label for="inputType" class="col-sm-2 col-form-label">Type d'aliment</label>
            <div class="col-sm-3">
            <div class="form-recherche">
            <select id="inputType" name="inputType">
            <select>
        </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEnergie" class="col-sm-2 col-form-label">Energie (kcal/100 g)</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" id="inputEnergie" >
            </div>
        </div>
        <div class="form-group row">
            <label for="inputProteines" class="col-sm-2 col-form-label">Proteines (g/100 g)</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" id="inputProteines" >
            </div>
        </div>
        <div class="form-group row">
            <label for="inputGlucides" class="col-sm-2 col-form-label">Glucides (g/100 g)</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" id="inputGlucides" >
            </div>
        </div>
        
        <div class="form-group row">
            <span class="col-sm-2"></span>
            <div class="col-sm-2" >
                <button type="submit" class="btn btn-primary form-control">Submit</button>
            </div>
        </div>
    </form>


