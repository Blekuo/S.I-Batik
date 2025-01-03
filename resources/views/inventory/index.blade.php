@extends('layouts.admin')
@section('title')
Daftar Barang
@endsection
@section('content')
<div class="card card-body shadow" style="background-color: var(--card-color)">
    @livewire('inventory-admin')
</div>
@endsection
