$(document).ready( function () {
    $('#table1').DataTable({
        "bPaginate": true,
        "bLengthChange": false,
        "bFilter": true,
        "bInfo": false,
        "bAutoWidth": false,
        "buttons": [
            'print'
        ],
        dom: 'Bfrtip',
        buttons: [
            'excel', 'pdf', 'print'
        ]});
} );