@extends('layouts.adminlte')
@section('title', 'Users')
@section('content')
    <div class="container-fluid">
        <h1>Users</h1>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <a href="{{ route('users.create') }}" class="btn btn-primary mb-3">Add User</a>
        <table id="users-table" class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Created At</th>
                    <th>Action</th>
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
                $('#users-table').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: '{{ route('users.data') }}',
                    columns: [{
                            data: 'id',
                            name: 'id'
                        },
                        {
                            data: 'name',
                            name: 'name'
                        },
                        {
                            data: 'email',
                            name: 'email'
                        },
                        {
                            data: 'created_at',
                            name: 'created_at'
                        },
                        {
                            data: 'action',
                            name: 'action',
                            orderable: false,
                            searchable: false
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
