$(document).ready( function () {
    $('#table1').DataTable({
        "bPaginate": true,
        "bLengthChange": false,
        "bFilter": true,
        "bInfo": false,
        "bAutoWidth": false
        // "buttons": [
        //     'pdf','excel'
        // ],
        // dom: 'Bfrtip',
        // buttons: [
        //     'copy','csv','excel', 'pdf', 'print'
        });
} );