function confirmation(){
    
    return confirm('Voulez-vous vraiment supprimer ?')
}

$(document).on("click", ".voir", function(e) { 
    e.preventDefault();
    //alert ('ok');
    $('#matiere').modal('show');
    var user_id = $(this).attr("data-id");
    	$('#id_p').val(user_id);

        $.ajax({
            url: "../../controller/recruteur/voirplus.php",
            type: "post",
            data: {id:user_id},
            dataType: 'json',
            success: function(data){
                // console.log(data);

                if (data.length == 0) {

                    $('#matiere-alert').css('display' ,'block')

                } else {
                    $.each(data, function(index, item){
                        $('#listMatiere').append('<div class="row" >\
                        <div class="col-md-6"> <input class="form-label"  style="border:none" value="'+item.nom+'" readonly> </div>\
                        <div class="col-md-6"><input class="form-label" style="border:none" value="'+item.description+'" readonly></div> <br>\
                        </div>')
                    })
                }
                
                  
            }

            
        });
     
});



  // get detail matiere

  function GetDetailsmatiere(updateId) {
    $('#hiddenId').val(updateId);

    $.post("../../controller/enseignant/updatematiere.php", {
        updateId: updateId
    }, function(data, status) {
        var id = JSON.parse(data);
        $('#nomUpdated').val(id.nom);
        $('#descriptionUpdated').val(id.description);
    });

}
// update matiere

function Updatematiere(updateId) {

    $('#updateForm').submit(function(e) {
        e.preventDefault(); //empêcher le formulaire de se soumettre normalement

        //obtenir les données du formulaire en tant qu'objet
        var formData = $(this).serialize();

        $.ajax({
            type: 'POST',
            url: '../../controller/enseignant/updatematiere.php',
            data: formData,
            dataType: "json",
            success: function(response) {
                // vérifiez si la réponse contient un champ success
                if (response.success) {
                    location.reload(true); //Recharger la page après mise à jour

                }
            },
            error: function() {
                alert('Une erreur s\'est produite. Essayez encore.');
            }

        })
    });
}