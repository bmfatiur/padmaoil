@extends('backend.layouts.master')

@section('title') Token Index @endsection

@push('admin_style')
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">

<style>
    .dataTables_length{
        padding: 20px 0;
    }
</style>
@endpush

@section('admin_content')
<div class="row">
    <h1>Token List Table</h1>
    <div class="col-12">
        <div class="d-flex justify-content-end">
            <a href="{{ route('token.create') }}" class="btn btn-primary">
                <i class="fas fa-plus-circle"></i>
                Add New Token
            </a>
        </div>
    </div>
    <div class="col-12">
        <div class="table-responsive my-2">
            <table class="table table-bordered table-striped" id="dataTable">
                <thead>
                <tr>
                    <th scope="col">Token ID</th>
                    <th scope="col">Token Amount</th>
                    <th scope="col">Token Flag</th>
                    <th scope="col">Options</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($tokens as $token)
                        <tr>
                            <th scope="row">{{ $tokens->firstItem()+$loop->index }}</th>
                            <td>{{ $token->token_name  }}</td>
                            <td>{{ $token->token_amount }}</td>
                            <td>{{ $token->token_flag }}</td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    setting
                                    </button>
                                    <ul class="dropdown-menu">
                                    {{-- <li><a class="dropdown-item" href="{{ route('coupon.edit', $token->id) }}">
                                    <i class="fas fa-edit"></i> Edit</a></li> --}}
                                    <li>
                                        <form action="{{ route('token.destroy', $token->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="dropdown-item show_confirm" type="submit"><i class="fas fa-trash"></i> Delete</a></button>
                                        </form>
                                    </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@push('admin_script')
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.20/dist/sweetalert2.all.min.js"></script>

<script>
    $(document).ready(function () {
    $('#dataTable').DataTable({
        pagingType: 'first_last_numbers',
    });

    $('.show_confirm').click(function(event){
        let form = $(this).closest('form');

        event.preventDefault();
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
            if (result.isConfirmed) {
                form.submit();
                Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
                )
            }
            })
    })
});
</script>
@endpush