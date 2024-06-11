@extends('template_backend.home')
@section('heading', 'Edit Mapel')
@section('page')
  <li class="breadcrumb-item active"><a href="{{ route('mapel.index') }}">Mapel</a></li>
  <li class="breadcrumb-item active">Edit Mapel</li>
@endsection
@section('content')
<div class="col-md-12">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Edit Data Mapel</h3>
      </div>
      <!-- <form action="{{ route('mapel.store') }}" method="post">
        @csrf
        <div class="card-body">
          <div class="row">
            <div class="col-md-12">
                <input type="hidden" name="mapel_id" value="{{ $mapel->id }}">
                <div class="form-group">
                  <label for="nama_mapel">Nama Mapel</label>
                  <input type="text" id="nama_mapel" name="nama_mapel" value="{{ $mapel->nama_mapel }}" class="form-control @error('nama_mapel') is-invalid @enderror" placeholder="{{ __('Nama Mata Pelajaran') }}">
                </div>
                <div class="form-group">
                  <label for="paket_id">Paket</label>
                  <select id="paket_id" name="paket_id" class="form-control @error('paket_id') is-invalid @enderror select2bs4">
                    <option value="">-- Pilih Paket Mapel --</option>
                    <option value="9" @if ($mapel->paket_id == '9') selected @endif> Semua</option>
                    @foreach ($paket as $data)
                      <option value="{{ $data->id }}" @if ($mapel->paket_id == $data->id) selected @endif>{{ $data->ket }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                    <label for="kelompok">Kelompok</label>
                    <select id="kelompok" name="kelompok" class="select2bs4 form-control @error('kelompok') is-invalid @enderror">
                        <option value="">-- Pilih Kelompok Mapel --</option>
                        <option value="A" @if ($mapel->kelompok == 'A') selected @endif> Pelajaran Umum</option>
                        <option value="B" @if ($mapel->kelompok == 'B') selected @endif> Pelajaran Khusus</option>
                        <option value="C" @if ($mapel->kelompok == 'C') selected @endif> Pelajaran Keahlian</option>
                    </select>
                </div>
            </div>
          </div>
        </div>
        <div class="card-footer">
          <a href="#" name="kembali" class="btn btn-default" id="back"><i class='nav-icon fas fa-arrow-left'></i> &nbsp; Kembali</a> &nbsp;
          <button name="submit" class="btn btn-primary"><i class="nav-icon fas fa-save"></i> &nbsp; Update</button>
        </div>
      </form> -->

      <form action="{{ route('mapel.store') }}" method="post">
          @csrf
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="nama_mapel">Kode Mata Kuliah</label>
                  <input type="text" id="kode_mk" name="kode_mk" class="form-control @error('nama_mapel') is-invalid @enderror" placeholder="{{ __('Nama Mata Pelajaran') }}" value="{{$mapel->kode_mk}}">
                </div>
                <div class="form-group">
                  <label for="nama_mapel">Nama Mata Kuliah</label>
                  <input type="text" id="nama_mapel" name="nama_mapel" class="form-control @error('nama_mapel') is-invalid @enderror" placeholder="{{ __('Nama Mata Pelajaran') }}" value="{{$mapel->nama_mapel}}">
                </div>
                <div class="form-group">
                    <label for="jenis_mk">Jenis Mata Kuliah</label>
                    <select id="jenis_mk" name="jenis_mk" class="select2bs4 form-control @error('kelompok') is-invalid @enderror">
                      <option value="">-- Pilih Kelompok Mapel --</option>
                      <option value="Wajib">Mata Kuliah Wajib</option>
                      <option value="pilihan">Mata Kuliah Pilihan</option>
                    </select>
                </div>
                <div class="form-group">
                  <label for="nama_mapel">Jumlah SKS</label>
                  <input type="number" id="sks" name="sks" class="form-control @error('sks') is-invalid @enderror" placeholder="{{ __('sks') }}" value="{{$mapel->sks}}">
                </div>
                <div class="form-group">
                  <label for="nama_mapel">Semester</label>
                  <input type="text" id="semester" name="semester" class="form-control @error('semester') is-invalid @enderror" placeholder="{{ __('semester') }}" value="{{$mapel->semester}}">
                </div>
                <div class="form-group">
                  <label for="nama_mapel">Tahun</label>
                  <input type="date" id="tahun" name="tahun" class="form-control @error('tahun') is-invalid @enderror" placeholder="{{ __('tahun') }}" value="{{$mapel->tahun}}">
                </div>
              </div>
            </div>
        </div>
        <div class="card-footer">
          <a href="#" name="kembali" class="btn btn-default" id="back"><i class='nav-icon fas fa-arrow-left'></i> &nbsp; Kembali</a> &nbsp;
          <button name="submit" class="btn btn-primary"><i class="nav-icon fas fa-save"></i> &nbsp; Update</button>
        </div>
        <!-- <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal"><i class='nav-icon fas fa-arrow-left'></i> &nbsp; Kembali</button>
            <button type="submit" class="btn btn-primary"><i class="nav-icon fas fa-save"></i> &nbsp; Tambahkan</button>
        </div> -->
      </form>
    </div>
</div>
@endsection
@section('script')
<script type="text/javascript">
    $(document).ready(function() {
        $('#back').click(function() {
        window.location="{{ route('mapel.index') }}";
        });
    });
    $("#MasterData").addClass("active");
    $("#liMasterData").addClass("menu-open");
    $("#DataMapel").addClass("active");
</script>
@endsection