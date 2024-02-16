@extends('admin.parent')

@section('content')

<div class="container d-flex justify-content-end">
    <a href="{{ route('admin.create') }}" class="btn btn-primary">Create Admin</a>
</div>

{{-- Container --}}
<div class="container text-center">
    <h5 class="fw-bold">USER</h5>
    <table class="table">
        <tr>
            <td>No</td>
            <td>Nama</td>
            <td>Email</td>
            <td>Gender</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>
</div>

@endsection
