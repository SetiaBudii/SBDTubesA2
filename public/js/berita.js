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
            'pdf','excel'
        ]});
} );

$(document).ready( function () {
    $('#table2').DataTable({
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
            'pdf','excel'
        ]});
} );

$(document).ready( function () {
    $('#table3').DataTable({
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
            'pdf','excel'
        ]});
} );