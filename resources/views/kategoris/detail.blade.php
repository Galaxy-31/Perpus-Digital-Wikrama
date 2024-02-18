@extends('layouts.head')
@section('content')
    <!--begin::Container-->
    <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
        <!--begin::Post-->
        <div class="content flex-row-fluid" id="kt_content">
            <!--begin::Order details page-->
            <div class="d-flex flex-column gap-7 gap-lg-10">
                <!--begin::Order summary-->
                <div class="d-flex flex-column flex-xl-row gap-7 gap-lg-10">
                    <!--begin::Order details-->
                    <div class="card card-flush py-4 flex-row-fluid">
                        <div class="card-body pt-0">
                            <div class="card-title">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h3 class="mt-2">Bank Detail</h3>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="d-flex justify-content-end">
                                            <a href="#" onclick="history.back()" class="btn btn-primary">Back</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <table class="table align-middle table-row-bordered mb-0 fs-6 gy-5 min-w-300px">
                                <!--begin::Table body-->
                                <tbody class="fw-semibold text-gray-600">
                                    <!--begin::Customer name-->
                                    <tr>
                                        <td class="text-muted">
                                            <div class="d-flex align-items-center"> Name
                                            </div>
                                            <pre>
                                            </pre>
                                            <!--begin::Name-->
                                            <a href="#"
                                                class="text-gray-600 text-hover-primary">{{ $data->idkategori }}</a>
                                            <!--end::Name-->
                                        </td>
                                        <td class="text-muted">
                                            <div class="d-flex align-items-center"> Account
                                            </div>
                                            <pre>
                                            </pre>
                                            <!--begin::Name-->
                                            <a href="#"
                                                class="text-gray-600 text-hover-primary">{{ $data->kategori }}</a>
                                            <!--end::Name-->
                                        </td>
                                    </tr>
                                </tbody>
                                <!--end::Table body-->
                            </table>
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Order details-->
                </div>
            </div>
        </div>
    </div>
@endsection
