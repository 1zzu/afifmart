@extends ('layout/template')
@section ('content')

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-9 text-center">
                <h1>katalog</h1>
            </div>
        </div><br>

        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-sm-1 mt-2">
                        <h4 class="card-title">
                            <i class="fas fa-text-width text-center"></i>
                            Stock
                        </h4>
                    </div>
                    <div class="col-sm-1 mt-1">
                       <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        + add
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                ...
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>

                    <div class="col-sm-10 mt-1">
                        <select class="form-select" aria-label="Default select example">
                            <option value="1">bahan pokok</option>
                            <option value="2">makanan ringan</option>
                            <option value="3">makanan berat</option>
                            <option value="4">minuman</option>
                            <option value="5">alat kebersihan</option>
                        </select>
                    </div>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <?php foreach ($barang as $data): ?>
                        <div class="col-sm-3 mb-3">
                            <div class="card h-100">
                            <img src="{{asset ('gambar')}}/{{$data -> gambar}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title" style="color: orange">Rp. {{$data->harga}}</h5>
                                <p class="card-text">{{$data->nama}}</p>
                            </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                {{$barang->links()}}
            </div>
        </div>
    </div>
    
</section><!-- End Hero -->

@endsection
