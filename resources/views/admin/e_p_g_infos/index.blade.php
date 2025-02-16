@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>數位節目表</h1>
                </div>
                <div class="col-sm-6 {{ count($ePGInfos) > 1 ? 'd-none' : '' }}">
                    <a class="btn btn-primary float-right"
                       href="{{ route('admin.ePGInfos.create') }}">
                        <i class="fas fa-plus"></i>
                        新增
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('flash::message')

        <div class="clearfix"></div>

        <div class="card">
            @include('admin.e_p_g_infos.table')
        </div>
    </div>

@endsection
