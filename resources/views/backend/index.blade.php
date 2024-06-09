@extends('backend.app')
@section('content')
<div class="col-lg-12">
    <!--begin::Advance Table Widget 4-->
    <div class="card card-custom card-stretch gutter-b">
        <!--begin::Header-->
        <div class="card-header border-0 py-5 text-center flex-column">
            <span class="font-weight-bolder text-dark">Daftar Menu Ayam Geprek Borobudur</span>
            <span class="text-muted mt-3 font-weight-bold font-size-sm">Rincian Menu Terkini</span>
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card-body pt-0 pb-3">
            <div class="tab-content">
                <!--begin::Table-->
                <div class="table-responsive">
                    <table class="table table-head-custom table-head-bg table-bordered table-vertical-center">
                        <thead>
                            <tr class="text-left text-uppercase">
                                <th style="min-width: 250px" class="pl-7">
                                    <span class="text-dark-75">products</span>
                                </th>
                                <th style="min-width: 100px">earnings</th>
                                <th style="min-width: 100px">comission</th>
                                <th style="min-width: 100px">company</th>
                                <th style="min-width: 130px">rating</th>
                                <th style="min-width: 80px"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="pl-0 py-8">
                                    <div class="d-flex align-items-center">
                                        <div class="symbol symbol-50 symbol-light mr-4">
                                            <span class="symbol-label">
                                                <img src="assets/media/svg/avatars/001-boy.svg" class="h-75 align-self-end" alt="" />
                                            </span>
                                        </div>
                                        <div>
                                            <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Brad Simmons</a>
                                            <span class="text-muted font-weight-bold d-block">HTML, JS, ReactJS</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$8,000,000</span>
                                    <span class="text-muted font-weight-bold">In Proccess</span>
                                </td>
                                <td>
                                    <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$520</span>
                                    <span class="text-muted font-weight-bold">Paid</span>
                                </td>
                                <td>
                                    <span class="text-dark-75 font-weight-bolder d-block font-size-lg">Intertico</span>
                                    <span class="text-muted font-weight-bold">Web, UI/UX Design</span>
                                </td>
                                <td>
                                    <img src="assets/media/logos/stars.png" alt="image" style="width: 5.5rem" />
                                    <span class="text-muted font-weight-bold d-block font-size-sm">Best Rated</span>
                                </td>
                                <td class="pr-0 text-center">
                                    <a href="#" class="btn btn-light-success font-weight-bolder font-size-sm">View Offer</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!--end::Table-->
            </div>
        </div>
        <!--end::Body-->
    </div>
    <!--end::Advance Table Widget 4-->
</div>
@endsection