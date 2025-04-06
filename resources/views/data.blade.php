@extends('layouts.adminlte')
@section('title', 'DataTables')
@section('content')
    <div class="container-fluid">
        <h1>DataTables</h1>
        <table id="dummy-table" class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Extn</th>
                    <th>Start Date</th>
                    <th>Salary</th>
                </tr>
            </thead>
        </table>
    </div>
    @push('styles')
        <link rel="stylesheet" href="{{ asset('vendor/datatables/css/dataTables.bootstrap4.min.css') }}">
    @endpush
    @push('scripts')
        <script src="{{ asset('vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('vendor/datatables/js/dataTables.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('vendor/datatables-plugins/buttons/js/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('vendor/datatables-plugins/buttons/js/buttons.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('vendor/datatables-plugins/buttons/js/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('vendor/datatables-plugins/buttons/js/buttons.print.min.js') }}"></script>
        <script src="{{ asset('vendor/datatables-plugins/pdfmake/pdfmake.min.js') }}"></script>
        <script src="{{ asset('vendor/datatables-plugins/pdfmake/vfs_fonts.js') }}"></script>
        <script>
            $(document).ready(function() {
                $('#dummy-table').DataTable({
                    ajax: '{{ asset('data.json') }}',
                    columns: [{
                            data: 'name'
                        },
                        {
                            data: 'position'
                        },
                        {
                            data: 'office'
                        },
                        {
                            data: 'extn'
                        },
                        {
                            data: 'start_date'
                        },
                        {
                            data: 'salary'
                        }
                    ],
                    dom: 'Bfrtip',
                    buttons: [
                        'copy', 'csv', 'excel', 'pdf', 'print'
                    ]
                });
            });
        </script>
    @endpush
@endsection
