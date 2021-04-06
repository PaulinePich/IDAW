let urlBackendPrefix = "http://localhost/GitHub/IDAW/Projet/New/backend/"
    let idligne = 0; 
    let aliments = [];
    let currentEditedFoodId =-1;
    
    console.log(urlBackendPrefix);
    let types = {};
    let aliment = {};



            $(document).ready(function(){
        $.getJSON(urlBackendPrefix+"recupTypes.php", function(data){
            console.log(data);
            types=data;
            $.each(data, function(i, a){
            $("#typeSelection" ).append('<option value='+a.type+'>'+a.type+'</option>')
            $("#inputType" ).append('<option value='+a.type+'>'+a.type+'</option>')
        });
                    });
                    console.log(types);
            });

    function chargeAliments(currentType){
        event.preventDefault();
        $('#alimentsTableBody').empty();
        let selection={};
        selection.typeA=$('#typeSelection').val();
        $.ajax({
            url: urlBackendPrefix+"afficherAliments.php",
            method: "POST",
            dataType : "json",
            data : selection
            
        }).always(function(response){
                        console.log(response);
                        console.log(response[0]);
            $.each(response, function(i, a){
                aliment.idsql = a.IdAliment;
                aliment.nom = a.nom;
                aliment.type = a.type;
                aliment.calories = a.calories;
                aliment.proteines = a.proteines;
                aliment.glucides = a.glucides;
                aliment.idsql = a.IdAliment;
                aliments.push(aliment);
                afficheUnAliment(aliment);
                    });
                    console.log(aliments);
        });   
    }

    function afficheUnAliment(newFood){
        newFood.id = idligne;

        $("#alimentsTableBody").append('<tr id='+newFood.id+'> <td> '
        +newFood.nom+'  </td> <td> '
        +newFood.type+'  </td><td> '
        +newFood.calories+'(kcal/100g)  </td><td> '
        +newFood.proteines+'  </td><td> '
        +newFood.glucides+'  </td><td> <button onclick=edit('+idligne+')>edit</button><button onclick=remove('+idligne+')>remove</button></td></tr>');
        idligne++;}

    let currentligne=-1;
    function onFormSubmit() {
// prevent the form to be sent to the server
    event.preventDefault();
    let nom = $("#inputAliment").val();
    let type = $("#inputType").val();
    let calories = $("#inputCalories").val();
    let proteines = $("#inputProteines").val();
    let glucides = $("#inputGlucides").val();

    let aliment={};
    aliment.nom = nom;
    aliment.type = type;
    aliment.calories = calories;
    aliment.proteines = proteines;
    aliment.glucides = glucides;
    console.log(aliments[idligne-1]);
   
    
    aliment.id= idligne;
if (nom!=''){
    if (currentligne==-1){ 
        aliment.idsql++;
        aliments.push(aliment);
        console.log(aliments);
        $("#erreur").empty();

    $("#alimentsTableBody").append('<tr id='+idligne+'><td>'
    +aliments[idligne].nom+'</td><td>'
    +aliments[idligne].type+'</td><td>'
    +aliments[idligne].calories+'</td><td>'
    +aliments[idligne].proteines+'</td><td>'
    +aliments[idligne].glucides+'</td><td><button onclick=edit('
    +idligne+')>edit</button><button onclick=remove('
    +idligne+')>remove</button></td></tr>') ;
    console.log(aliments[idligne]);
    idligne++;
    ajouteAlimentSql(aliment);
    }

    
    else{
        console.log(aliments[currentligne]);
        console.log(aliments[currentligne].nom);
        let saveid=aliments[currentligne].idsql;
        aliments[currentligne]=aliment;
        aliments[currentligne].idsql=saveid;
    $('#'+currentligne).empty();
    $("#erreur").empty();
    $('<tr id='+currentligne+'><td>'
    +aliments[currentligne].nom+'</td><td>'
    +aliments[currentligne].type+
    +aliments[currentligne].calories+'</td><td>'
    +aliments[currentligne].proteines+'</td><td>'
    +aliments[currentligne].glucides+'</td><td><button onclick=edit('
        +currentligne+')>edit</button><button onclick=remove('
        +currentligne+')>remove</button></td></tr>').appendTo('#'+currentligne) ;
        console.log(aliments[currentligne]);
        console.log(aliments[currentligne].nom);
    currentligne=-1;
    editAlimentSql(aliment);
    }
}
}

    function ajouteAlimentSql(newFood){
        //$(document).ready(function(){
        $.ajax({
            url: urlBackendPrefix+"addAliments.php",
            method: "POST",
            dataType : "json",
            data : newFood
        }).always(function(response){
                        //let data = JSON.stringify(response);
                        console.log(response);
    });
    }
    function editAlimentSql(changeFood){
        console.log(changeFood);
        //$(document).ready(function(){
        $.ajax({
            url: urlBackendPrefix+"editAliments.php",
            method: "POST",
            dataType : "json",
            data : changeFood
        }).always(function(response){
                        //let data = JSON.stringify(response);
                        console.log(response);
    });
    }

    function edit(a){
        $("#erreur").empty();
    $("#erreur").append('Vous êtes entrain de modifier la ligne '+(a+1));
    currentligne=a;
    }
    function remove(b){
        console.log(b);
        $("#erreur").append('Vous avez supprimé la ligne '+b);
        $('#'+b).empty();
        let num={};
        num.idsql=aliments[b].idsql;
        $.ajax({
            url: urlBackendPrefix+"deleteAliments.php",
            method: "POST",
            dataType : "json",
            data : num
        }).always(function(response){
                        //let data = JSON.stringify(response);
                        console.log(response);
    });
    }