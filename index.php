<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>jQuery Datatables</title>
    <link rel="stylesheet" type="text/css" href="css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="css/dataTables.editor.css">
    <script type="text/javascript" language="javascript" src="js/jquery.js"></script>
    <script type="text/javascript" language="javascript" src="js/jquery.dataTables.js"></script>
    <script type="text/javascript" language="javascript" src="js/dataTables.editor.js"></script>
    <script type="text/javascript" language="javascript">
        $(document).ready(function() {
            var datatable = $('#mytable').DataTable({
                ajax: "data.php",
                columns: [
                    {data:"name"},
                    {data:"lastname"},
                    {data:"city"},
                    {data:"gender"},
                    {
                        data: null,
                        defaultContent: '<a href="#" class="edit">Edit</a> / <a href="#" class="remove">Delete</a>'
                    }
                ]
            });

            editor = new $.fn.dataTable.Editor( {
                ajax: "actions.php",
                table: "#mytable",
                idSrc: "id",
                fields: [
                    {label:'Name' , name:'name'},
                    {label:'Last name' , name:'lastname'},
                    {label:'City' , name:'city'},
                    {label:'Gender' , name:'gender'}
                   ]
            });

            $('#mytable').on('click', 'a.edit', function (e) {
                e.preventDefault();

                editor
                    .title( 'Edit record' )
                    .buttons( { "label": "Update", "fn": function () { editor.submit() } } )
                    .edit( $(this).closest('tr') );
            } );

            $('#mytable').on('click', 'a.remove', function (e) {
                e.preventDefault();

                editor
                    .message( 'Are you sure you wish to remove this record?' )
                    .buttons( { "label": "Delete", "fn": function () { editor.submit() } } )
                    .remove( $(this).closest('tr') );
            } );

            $('a.create').on('click', function (e) {
                e.preventDefault();

                editor
                    .title( 'Create new record' )
                    .buttons( { "label": "Add", "fn": function () { editor.submit() } } )
                    .create();
            } );
        });
    </script>
</head>
<body>
    <a href="#" class="create">New</a>
    <table id="mytable" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Last name</th>
                <th>City</th>
                <th>Gender</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tfoot>
            <tr>
                <th>Name</th>
                <th>Last name</th>
                <th>City</th>
                <th>Gender</th>
                <th>Actions</th>
            </tr>
        </tfoot>
    </table>
</body>
</html>