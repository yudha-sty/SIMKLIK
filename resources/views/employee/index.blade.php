@extends('layouts.masterapp')
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
  <div class="row">
    <div class="col-lg-12 mb-4 order-0">
      <div class="card">
        <div class="d-flex align-items-end row">
          <div class="col-sm-7">
            <div class="card-body">
              <h5 class="card-title text-primary">Employee Area</h5>
              <p class="mb-4">
                Oriskin memiliki <span class="fw-bold">{{ $totalEmployee }}</span> karyawan yang terdaftar di <span
                  class="fw-bold">71</span>.
                Check your new badge in your profile.
              </p>

              <a href="javascript:;" class="btn btn-sm btn-outline-primary">Show Detail</a>
            </div>
          </div>
          <div class="col-sm-5 text-center text-sm-left">
            <div class="card-body pb-0 px-0 px-md-4">
              <img src="{{ url ('templates/assets/img/illustrations/man-with-laptop-light.png') }}" height="140"
                alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png"
                data-app-light-img="illustrations/man-with-laptop-light.png" />
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- CARD DATA KARYAWAN & CLINIC -->
    <div class="col-lg-12 mb-4 order-0">
      <div class="card">
        <div class="d-flex align-items-end row">
          <div class="col-sm-12">
            <div class="card-body">
              <h5 class="card-title text-primary">Data</h5>
              <div class="nav-align-top mb-4">
                <ul class="nav nav-pills mb-3 nav-fill" role="tablist">
                  <li class="nav-item">
                    <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                      data-bs-target="#navs-pills-justified-home" aria-controls="navs-pills-justified-home"
                      aria-selected="true">
                      <i class="tf-icons bx bxs-user"></i> Karyawan
                    </button>
                  </li>
                  <li class="nav-item">
                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                      data-bs-target="#navs-pills-justified-profile" aria-controls="navs-pills-justified-profile"
                      aria-selected="false">
                      <i class="tf-icons bx bxs-city"></i> Klinik
                    </button>
                  </li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane fade show active" id="navs-pills-justified-home" role="tabpanel">

                    <!-- Table Oriskin Employee-->
                    <h5 class="card-header">Karyawan Oriskin</h5>
                    <div class="table-responsive text-nowrap">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Status</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                          @forelse ($employee as $e)
                          <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $e->name }}</strong>
                            </td>
                            <td>{{ $e->address }}</td>
                            <td><span class="badge bg-label-primary me-1">{{ $e->isactive }}</span></td>
                            <td>
                              <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                  data-bs-toggle="dropdown">
                                  <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                  <a class="dropdown-item" href="javascript:void(0);"><i
                                      class="bx bx-edit-alt me-1"></i> Edit</a>
                                  <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i>
                                    Delete</a>
                                </div>
                              </div>
                            </td>
                          </tr>
                          @empty
                          <div class="alert alert-danger">
                            Data Employee belum Tersedia.
                          </div>
                          @endforelse
                        </tbody>
                      </table>
                      <div class="pagination justify-content-center">
                        {{ $employee->links('vendor.pagination.bootstrap-4') }}
                      </div>

                    </div>
                    <!--/ End Oriskin Employee -->
                  </div>


                  <div class="tab-pane fade" id="navs-pills-justified-profile" role="tabpanel">
                    <!-- Basic Bootstrap Table -->
                    <h5 class="card-header">Klinik Oriskin</h5>
                    <div class="table-responsive text-nowrap">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Status</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                          <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Sedayu</strong></td>
                            <td><span class="badge bg-label-primary me-1">Jl. Green Sedayu</span></td>
                            <td><span class="badge bg-label-primary me-1">Active</span></td>
                            <td>
                              <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                  data-bs-toggle="dropdown">
                                  <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                  <a class="dropdown-item" href="javascript:void(0);"><i
                                      class="bx bx-edit-alt me-1"></i> Edit</a>
                                  <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i>
                                    Delete</a>
                                </div>
                              </div>
                            </td>
                          </tr>

                        </tbody>
                      </table>
                    </div>
                    <!--/ Basic Bootstrap Table -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>



  </div>
</div>
<!-- / Content -->

@endsection