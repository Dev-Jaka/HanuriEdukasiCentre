@extends('layouts.base_admin.base_dashboard') @section('judul', 'Tambah Akun')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tambah Siswa</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="{{ route('home') }}">Beranda</a>
                        </li>
                        <li class="breadcrumb-item active">Tambah Siswa</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        @if (session('status'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Berhasil!</h4>
                {{ session('status') }}
            </div>
        @endif
        <form method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Informasi Data Diri</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="inputName">Nik</label>
                                <input type="text" id="inputName" name="nik"
                                    class="form-control @error('nik') is-invalid @enderror" placeholder="Masukkan nik"
                                    value="{{ old('nik') }}" required="required" autocomplete="nik">
                                @error('nik')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputEmail">nama</label>
                                <input type="text" id="inputnama" name="nama"
                                    class="form-control @error('nama') is-invalid @enderror" placeholder="Masukkan nama"
                                    value="{{ old('nama') }}" required="required" autocomplete="nama">
                                @error('nama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="inputName">sekolah</label>
                                <input type="text" id="inputName" name="sekolah"
                                    class="form-control @error('sekolah') is-invalid @enderror"
                                    placeholder="Masukkan sekolah" value="{{ old('sekolah') }}" required="required"
                                    autocomplete="sekolah">
                                @error('sekolah')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputEmail">alamat</label>
                                <input type="text" id="inputalamat" name="alamat"
                                    class="form-control @error('alamat') is-invalid @enderror" placeholder="Masukkan alamat"
                                    value="{{ old('alamat') }}" required="required" autocomplete="alamat">
                                @error('alamat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        </div>

                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>

            </div>
            <div class="row">
                <div class="col-12">
                    <a href="{{ route('home') }}" class="btn btn-secondary">Cancel</a>
                    <input type="submit" value="Tambah Akun" class="btn btn-success float-right">
                </div>
            </div>
        </form>
    </section>
    <!-- /.content -->

    @endsection @section('script_footer')
    <script>
        inputFoto.onchange = evt => {
            const [file] = inputFoto.files
            if (file) {
                prevImg.src = URL.createObjectURL(file)
            }
        }
    </script>
@endsection
