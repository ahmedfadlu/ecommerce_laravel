@extends('layouts.admin.main')
@section('title', 'Admin Product')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Produk</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') 
}}"> Dashboard </a></div>
                <div class="breadcrumb-item">Produk</div>
            </div>
        </div>
        <a href="{{ route('distributor.create') }}" class="btn btn-icon icon-left btn-primary"><i class="fas fa-plus"></i>
            Distributor</a>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-md">
                    <tr>
                        <th>#</th>
                        <th>Nama Distributor</th>
                        <th>Provinsi</th>
                        <th>Kota</th>
                        <th>Kontak</th>
                        <th>Email</th>
                    </tr>
                    @php
                        $no = 0
                    @endphp
                    @forelse ($distributors as $item)
                        <tr>
                            <td>{{ $no += 1 }}</td>
                            <td>{{ $item->name_distributor }}</td>
                            <td>{{ $item->provinsi }}</td>
                            <td>{{ $item->kota }}</td>
                            <td>{{ $item->kontak }}</td>
                            <td>{{ $item->email }}</td>
                            <td>
                            <a href="{{ route('distributor.edit', $item->id) }}" class="badge badge-warning"> Edit </a>
                            <a href="{{ route('distributor.delete', $item->id) }}" class="badge badge-danger"
                            data-confirm-delete="true">Hapus</a>
                            </td>
                        </tr>
                    @empty
                        <td colspan="5" class="text-center">Data Produk Kosong</td>
                    @endforelse
                </table>
            </div>
        </div>
</div>
</div>
@endsection