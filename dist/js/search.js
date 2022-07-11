function tableSearch() {

    // declare elements
    const searchBox = document.getElementById('inputSearch');
    const table = document.getElementById("table");
    const trs = table.tBodies[0].getElementsByTagName("tr");

    // add event listener to search box
    //searchBox.addEventListener('keyup', performSearch);
    // Declare search string 
    var filter = searchBox.value.toUpperCase();

    // Loop through first tbody's rows
    for (var rowI = 0; rowI < trs.length; rowI++) {

        // define the row's cells
        var tds = trs[rowI].getElementsByTagName("td");

        // hide the row
        trs[rowI].style.display = "none";

        // loop through row cells
        for (var cellI = 0; cellI < tds.length; cellI++) {

            // if there's a match
            if (tds[cellI].innerHTML.toUpperCase().indexOf(filter) > -1) {

                // show the row
                trs[rowI].style.display = "";

                // skip to the next row
                continue;

            }
        }
    }
}

function tableSearch2() {

    // declare elements
    const searchBox = document.getElementById('inputSearch2');
    const table = document.getElementById("table2");
    const trs = table.tBodies[0].getElementsByTagName("tr");

    // add event listener to search box
    //searchBox.addEventListener('keyup', performSearch);
    // Declare search string 
    var filter = searchBox.value.toUpperCase();

    // Loop through first tbody's rows
    for (var rowI = 0; rowI < trs.length; rowI++) {

        // define the row's cells
        var tds = trs[rowI].getElementsByTagName("td");

        // hide the row
        trs[rowI].style.display = "none";

        // loop through row cells
        for (var cellI = 0; cellI < tds.length; cellI++) {

            // if there's a match
            if (tds[cellI].innerHTML.toUpperCase().indexOf(filter) > -1) {

                // show the row
                trs[rowI].style.display = "";

                // skip to the next row
                continue;

            }
        }
    }
}

$(document).ready(function () {
    //Ecran CourProf
    $("#idFiliere").change(function () {
        var selectVal = $('#idFiliere :selected').val();
        $.ajax({
            url: 'searchNiveau.php',
            data: "idFiliere=" + selectVal,
            type: 'post',
            //dataType: 'json',                
            success: function (data) {
                $('#idBranche').html('<option value="">' + data + '</option>');
            }
        });
    });

    //Ecran profileProf
    $("#idFiliereProfile").change(function () {
        var selectVal = $('#idFiliereProfile :selected').val();
        $.ajax({
            url: 'search/searchNiveauProfile.php',
            data: "idFiliere=" + selectVal,
            type: 'post',
            //dataType: 'json',                
            success: function (data) {
                $('#idBranche').html('<option value="">' + data + '</option>');
            }
        });
    });

    //Ecran profileProf
    $("#idBranche").change(function () {
        var selectVal = $('#idBranche :selected').val();
        if (selectVal != "") {
            $.ajax({
                url: 'search/searchGroupeProfile.php',
                data: "idBranche=" + selectVal,
                type: 'post',
                //dataType: 'json',                
                success: function (data) {
                    $('#idGroupe').html('<option value="">' + data + '</option>');
                }
            });
        }
    });

    //Ecran profileProf
    $("#idGroupe").change(function () {
        var selectVal = $('#idGroupe :selected').val();
        $.ajax({
            url: 'search/searchEtudiantProfile.php',
            data: "idGroupe=" + selectVal,
            type: 'post',
            //dataType: 'json',                
            success: function (data) {
                $('#idEtudiant').html('<option value="">' + data + '</option>');
            }
        });
    });
});

function searchCourProf() {
    var selectFilier = $('#idFiliere :selected').val();
    var selectBranche = $('#idBranche :selected').val();
    var selectGroupe = $('#idGroupe :selected').val();
    var selectCour = $('#cour :name').val();
    console.log("selectFilier" + selectFilier);
    console.log("selectBranche" + selectBranche);
    console.log("selectGroupe" + selectGroupe);
    console.log("selectCour" + selectCour);
    $.ajax({
        url: 'searchNiveau.php',
        data: "idFiliere=" + selectFilier + ", idBranche=" + selectBranche + ", idGroupe=" + selectGroupe + ", cour=" + cour,
        type: 'post',
        dataType: 'json',
        success: function (data) {
            //$('#idBranche').html('<option value="">' + data + '</option>');
        }
    });
}