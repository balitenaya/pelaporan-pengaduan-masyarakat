<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Riwayat Pengaduan</h4>

                <div class="card-header-action ">
                    <form method="post" action="{{ route('riwayat.search') }}">

                        @csrf

                        <div class="input-group">
                            <input type="text" name="q" class="form-control" value="{{ old('q') }}"
                                placeholder="Cari berdasarkan isi laporan..">

                            <div class="input-group-btn">
                                <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                            </div>

                        </div>
                    </form>
                </div>

            </div>

            @if ($q != '')
                <div class="m-3">
                    {{ $q }}
                </div>
            @endif

            <div class="card-body">

            </div>
        </div>
    </div>
</div>

<div class="row justify-content-center">
    @foreach ($pengaduan as $row)
        <div class="col-md-4">

            <div class="card">
                <div class="card-header">
                    <h4>Pengaduan</h4> <span
                        class="badge badge-{{ $row->status == '0' ? 'warning' : '' }}{{ $row->status == 'proses' ? 'primary' : '' }}{{ $row->status == 'selesai' ? 'success' : '' }}{{ $row->status == 'tolak' ? 'danger' : '' }} ml-auto">
                        {{ $row->status == 'proses' ? 'sedang di proses' : '' }}
                        {{ $row->status == '0' ? 'menunggu' : '' }} {{ $row->status == 'selesai' ? 'selesai' : '' }}
                        {{ $row->status == 'tolak' ? 'diitolak' : '' }}
                    </span>
                </div>
                <div class="card-body">
                    <ul class="nav nav-pills" id="myTab3" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab3" data-toggle="tab"
                                href="#laporan{{ $row->id }}" role="tab" aria-controls="home"
                                aria-selected="true">Laporan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab3" data-toggle="tab" href="#pelapor{{ $row->id }}"
                                role="tab" aria-controls="profile" aria-selected="false">Pelapor</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent2">
                        <div class="tab-pane fade show active" role="tabpanel" id="laporan{{ $row->id }}"
                            aria-labelledby="home-tab3">
                            <div class="chocolat-parent">
                                <a href="{{ asset('public/files/' . $row->foto) }}" class="chocolat-image"
                                    title="Gambar Pengaduan">
                                    <div class="text-center">
                                        <img alt="Gambar tidak ditemukan"
                                            src="{{ asset('public/files/' . $row->foto) }}"
                                            class="img-fluid img-thumbnail mb-2"
                                            style="width: 200px; height: 200px; object-fit: cover;">
                                    </div>
                                </a>
                                <div class="text-muted text-center">
                                    {{ $row->isi_laporan }}
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" role="tabpanel" id="pelapor{{ $row->id }}"
                            aria-labelledby="profile-tab3">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">NIK : <br> {{ $row->nik }}</li>
                                <li class="list-group-item">Nama : <br> {{ $row->masyarakat->nama }}</li>
                                <li class="list-group-item">Username : <br> {{ $row->masyarakat->username }}</li>
                                <li class="list-group-item">Nomor Telepon : <br> {{ $row->masyarakat->telepon }}</li>
                            </ul>
                        </div>
                    </div>
                    <a href="{{ route('riwayat.show', $row->id) }}" class="btn btn-primary">
                        <i class="fas fa-eye"></i> Lihat Tanggapan
                    </a>
                </div>
            </div>

        </div>
    @endforeach
</div>

@if (count($pengaduan) == 0)
    <x-alert type="warning">
        Data Pengaduan tidak ditemukan
    </x-alert>
@endif
