@extends('layouts.admin')
@section('title')
    Dashboard
@endsection
@section('content')
<div class="row">
    <!--begin::Col-->
    <div class="col">
        <!--begin::Small Box Widget 1-->
        <div class="small-box text-bg-primary">
            <div class="inner p-4">
                <h3>150</h3>
                <p>Order</p>
            </div>
            <div class="small-box-icon">
                <i class="fas fa-shopping-cart fa-lg"></i>
            </div>
        </div>
        <!--end::Small Box Widget 1-->
    </div>
    <!--end::Col-->
    <div class="col">
        <!--begin::Small Box Widget 2-->
        <div class="small-box text-bg-success">
            <div class="inner p-4">
                <h3>53</h3>
                <p>Barang</p>
            </div>
            <div class="small-box-icon">
                <i class="fas fa-box fa-lg"></i>
            </div>
        </div>
        <!--end::Small Box Widget 2-->
    </div>
    <!--end::Col-->
    <div class="col">
        <!--begin::Small Box Widget 3-->
        <div class="small-box text-bg-warning">
            <div class="inner text-white p-4">
                <h3>{{ \App\Models\User::count() }}</h3>
                <p>Users</p>
            </div>
            <div class="small-box-icon">
                <i class="fas fa-user-plus fa-lg"></i>
            </div>
        </div>
        <!--end::Small Box Widget 3-->
    </div>
    <!--end::Col-->

</div>
<!--end::Row-->
@include('layouts.session.alert')

<div class="mt-4">
    <div class="card card-body shadow" style="background-color: var(--card-color)">
        <h5 class="text-light">Selamat Malam</h5>
    </div>
</div>
@endsection
