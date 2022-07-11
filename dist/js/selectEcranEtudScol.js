$(document).ready(function () {
    $("#idSpecialite").change(function () {
        console.log("idSpecialite");
        var selectVal = $('#idSpecialite :selected').val();
        $.ajax({
            url: 'searchNiveau.php',
            data: "idFiliere=" + selectVal,
            type: 'post',
            //dataType: 'json',                
            success: function (data) {
                if(data != "") {
                    $('#idBranche').html('<option value="">' + data + '</option>');
                } else {
                    $('#idBranche').html('<option value="">Sélectionner un niveau</option>');
                    $('#idGroupe').html('<option value="">Sélectionner un groupe</option>');
                }
            }
        });
    });

    $("#idBranche").change(function () {
        console.log("idBranche");
        var selectVal = $('#idBranche :selected').val();
        $.ajax({
            url: 'search/searchGroupeEtudScol.php',
            data: "idBranche=" + selectVal,
            type: 'post',
            //dataType: 'json',                
            success: function (data) {
                if(data != "") {
                    $('#idGroupe').html('<option value="">' + data + '</option>');
                } else {
                    $('#idGroupe').html('<option value="">Sélectionner un groupe</option>');
                }
            }
        });
    });

});
