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
                        <a href="{{ route('kategori.index') }}" class="m-nav__link">
                            <span class="m-nav__link-text">
                                Manajemen Kategori
                            </span>
                        </a>
                    </li>
                    <li class="m-nav__separator">
                        -
                    </li>
                    <li class="m-nav__item">
                        <a href="" class="m-nav__link">
                            <span class="m-nav__link-text">
                                Edit Kategori
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
                                    Edit Kategori
                                </h3>
                            </div>
                        </div>
                    </div>
                    <!--begin::Form-->
                    <form class="m-form m-form--fit m-form--label-align-right" action="{{route('kategori.update', $categories->id)}}" method="POST">
                        @csrf
                        <input type="hidden" name="_method" value="PUT">
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
                                <input type="text" value="{{ $categories->name }}" class="form-control m-input" name="name" id="name">
                            </div>
                            <div class="form-group m-form__group">
                                <label for="description">
                                    Deskripsi
                                </label>
                                <textarea class="form-control m-input" name="description" id="description" cols="5" rows="5">{{ $categories->description }}</textarea>
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
        </div>
    </div>
@endsection