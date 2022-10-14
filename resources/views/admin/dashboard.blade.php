@extends('admin.layout')



@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mg-b-0 mg-lg-b-0 mg-xl-b-0">
        <div>
            <h4 class="mg-b-0 tx-spacing-1 mt-3">Dashboard</h4>
        </div>
    </div>
    <hr>
    <div class="mg-b-10 mg-t-10">
        <div class="mg-t-30 mg-b-10">
            <div class="tab-content py-2 px-0 mb-4" id="tab-kategori-content">
                <div data-kategori="person" class="py-2 px-0 tab-pane fade show active" id="person" role="tabpanel" aria-labelledby="person-tab">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-3">
                            <div data-subkategori="mobilizer" id="person-pendaftar" class="mb-4 px-4 py-2 card shadow-sm rounded-xl border-0 widget-card hoverable d-flex flex-row justify-content-between align-items-center widget-data">
                                <div class="d-flex flex-column">
                                    <span class="text-jumlah">{{ $siswa }}</span>
                                    <span class="text-nama">Siswa</span>
                                    <span class="text-keterangan">Jumlah Siswa</span>
                                </div>
                                <div>
                                    <i class="fas fa-users fa-fw fa-3x"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3">
                            <div data-subkategori="fasilitator" id="person-peserta" class="mb-4 px-4 py-2 card shadow-sm rounded-xl border-0 widget-card hoverable d-flex flex-row justify-content-between align-items-center widget-data">
                                <div class="d-flex flex-column">
                                    <span class="text-jumlah">{{ $ustadz }}</span>
                                    <span class="text-nama">Ustadz</span>
                                    <span class="text-keterangan">Jumlah Ustadz</span>
                                </div>
                                <div>
                                    <i class="fas fa-user-plus fa-fw fa-3x "></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3">
                            <div data-subkategori="fasilitator" id="person-peserta" class="mb-4 px-4 py-2 card shadow-sm rounded-xl border-0 widget-card hoverable d-flex flex-row justify-content-between align-items-center widget-data">
                                <div class="d-flex flex-column">
                                    <span class="text-jumlah">{{ $ustadzah }}</span>
                                    <span class="text-nama">Ustadzah</span>
                                    <span class="text-keterangan">Jumlah Ustadzah</span>
                                </div>
                                <div>
                                    <i class="fas fa-user-plus fa-fw fa-3x "></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3">
                            <div data-subkategori="mentor" id="person-mentor" class="mb-4 px-4 py-2 card shadow-sm rounded-xl border-0 widget-card hoverable d-flex flex-row justify-content-between align-items-center widget-data">
                                <div class="d-flex flex-column">
                                    <span class="text-jumlah">{{ $admin }}</span>
                                    <span class="text-nama">Admin</span>
                                    <span class="text-keterangan">Jumlah Admin</span>
                                </div>
                                <div>
                                    <i class="fas fa-user-tie fa-fw fa-3x "></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection