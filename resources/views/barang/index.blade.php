@extends('template.layout')

@section('title')
Barang
@endsection

@section('content')
<section class="section-header">
    Barang
</section>

<section class="section-body">
    <div class="row">
        <!-- untuk data barang -->
        <div class="col-12 col-md-7 col-lg-7">
            <div class="card">
                <div class="card-header">
                    <h4>Data Barang</h4>
                </div>

                <div class="card-body">
                    <table class="table table-stripped">
                        <thead>
                            <tr>
                                <td style="width: 5%">#</td>
                                <td>Kode</td>
                                <td>Nama</td>
                                <td style="width: 15%">Aksi</td>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-5 col-lg-5">
            <div class="card">
                <div class="card-header">
                    <h4>Tambah Barang</h4>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection