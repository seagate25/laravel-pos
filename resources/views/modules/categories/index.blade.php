@extends('layouts.default')

@section('title')
    <title>Manajemen Kategori</title>
@endsection

@section('content')
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title m-subheader__title--separator">
                    Manajemen Kategori
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
                                Manajemen Kategori
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="m-content">
        <div class="row">
            <div class="col-md-4">
                <div class="m-portlet m-portlet--tab">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
                                <span class="m-portlet__head-icon m--hide">
                                    <i class="la la-gear"></i>
                                </span>
                                <h3 class="m-portlet__head-text">
                                    Tambah Kategori
                                </h3>
                            </div>
                        </div>
                    </div>
                    <!--begin::Form-->
                    <form class="m-form m-form--fit m-form--label-align-right" action="{{route('kategori.store')}}" method="POST">
                        @csrf
                        <div class="m-portlet__body">
                            <div class="m-section__content">
                                @if (session('error'))
                                <div class="alert alert-danger" role="alert">
                                    {!! session('error') !!}
                                </div>
                                @endif
                            </div>
                            <div class="form-group m-form__group">
                                <label for="name">
                                    Nama Kategori
                                </label>
                                <input type="text" class="form-control m-input" name="name" id="name">
                            </div>
                            <div class="form-group m-form__group">
                                <label for="description">
                                    Deskripsi
                                </label>
                                <textarea class="form-control m-input" name="description" id="description" cols="5" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="m-portlet__foot m-portlet__foot--fit">
                            <div class="m-form__actions">
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                                <button type="reset" class="btn btn-secondary">
                                    Cancel
                                </button>
                            </div>
                        </div>
                    </form>
                    <!--end::Form-->
                </div>
            </div>
            <div class="col-md-8">
                <div class="m-portlet m-portlet--tab">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
                                <span class="m-portlet__head-icon m--hide">
                                    <i class="la la-gear"></i>
                                </span>
                                <h3 class="m-portlet__head-text">
                                    Daftar Kategori
                                </h3>
                            </div>
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
                                                <td>Kategori</td>
                                                <td>Deskripsi</td>
                                                <td>Aksi</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $no = 1;
                                            @endphp
                                            @forelse ($categories as $cat)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $cat->name }}</td>
                                                <td>{{ $cat->description }}</td>
                                                <td>
                                                    <form action="{{route('kategori.destroy', $cat->id)}}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        <a href="{{ route('kategori.edit', $cat->id) }}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                                        <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                            @empty
                                            <tr>
                                                <td colspan="4" class="text-center">Tidak ada data</td>
                                            </tr>
                                            @endforelse
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