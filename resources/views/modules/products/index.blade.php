@extends('layouts.default')

@section('title')
    <title>Manajemen Kategori</title>
@endsection

@section('content')
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title m-subheader__title--separator">
                    Manajemen Produk
                </h3>
                <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                    <li class="m-nav__item m-nav__item--home">
                        <a href="#" class="m-nav__link m-nav__link--icon">
                            <i class="m-nav__link-icon la la-home"></i>
                        </a>
                    </li>
                    <li class="m-nav__separator">
                        -
                    </li>
                    <li class="m-nav__item">
                        <a href="" class="m-nav__link">
                            <span class="m-nav__link-text">
                                Manajemen Produk
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="m-content">
        <div class="row">
            <div class="col-md-12">
                <div class="m-portlet m-portlet--tab">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
                                <span class="m-portlet__head-icon m--hide">
                                    <i class="la la-gear"></i>
                                </span>
                                <h3 class="m-portlet__head-text">
                                    Daftar Produk
                                </h3>
                            </div>
                        </div>
                        <div class="m-portlet__head-tools">
                            <ul class="m-portlet__nav">
                                <li class="m-portlet__nav-item">
                                    <a href="{{route('produk.create')}}" class="m-portlet__nav-link btn btn-success m-btn">
                                        Tambah
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--begin::Table-->
                    <div class="m-portlet__body">
                        <div class="m-section">
                            <div class="m-section__content">
                                @if (session('success'))
                                <div class="alert alert-success" role="alert">
                                    {!! session('success') !!}
                                </div>
                                @endif
                                <div class="table-responsive">
                                    <table class="table table-bordered m-table">
                                        <thead>
                                            <tr>
                                                <td>#</td>
                                                <td>Gambar</td>
                                                <td>Nama Produk</td>
                                                <td>Stok</td>
                                                <td>Harga</td>
                                                <td>Kategori</td>
                                                <td>Terakhir Diubah</td>
                                                <td>Aksi</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Table-->
                </div>
            </div>
        </div>
    </div>
@endsection