$(document).ready(function () {

    $('.editAnneeScol').on('click', function () {
        $('#editAnneeScolModal').modal('show');
        $tr = $(this).closest('tr');
        var data = $tr.children("td").map(function () {
            return $(this).text();
        }).get();
        console.log(data);
        $('#id').val(data[0]);
        $('#anneeScolaire').val(data[1]);
    });

    $('.deleteAnneeScol').on('click', function () {
        $('#deleteAnneeScolModal').modal('show');
        $tr = $(this).closest('tr');
        var data = $tr.children("td").map(function () {
            return $(this).text();
        }).get();
        console.log(data);
        $('#idDelete').val(data[0]);
        $('#anneeScolaire').val(data[1]);
    });
});