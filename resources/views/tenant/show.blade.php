@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col cover">
            <img src="{{asset('image/profiletenant/Promo-produk-gaming-Acer-banner.jpg')}}" alt="" width="100%" height="350px">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="box box1"></div>
        </div>
    </div>
    <div class="row">
        <div class="col profile"><img src="{{asset('image/profiletenant/john-doe.jpg')}}" alt="" width="17%">
            <h3>Muhamar Arrasyid</h3>
        </div>
    </div>
    <hr>
    <h2><u> General Info</u></h2>
    <div class="row">
        <div class="col-lg-6 col-12 col-md-12 col-12 profile">
            <div class="card">
                <div class="card-header">My Profile</div>
                <div class="card-body">
                    <p class="card-text">
                        <table width="400px">
                            <tr>
                                <td>Nama</td>
                                <td>:</td>
                                <th>Muhamar</th>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td>:</td>
                                <th>Laki-Laki</th>
                            </tr>
                            <tr>
                                <td>Tempat Tanggal Lahir</td>
                                <td>:</td>
                                <th>Tangerang, 01 Januari 1994</th>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>:</td>
                                <th>Wahsington city</th>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>:</td>
                                <th>amararrasyid@gmail.com</th>
                            </tr>
                            <tr>
                                <td>Profesi saat ini</td>
                                <td>:</td>
                                <th>Pedagang (Sepatu Import)</th>
                            </tr>
                            <tr>
                                <td>Tahun Mulai Berdagang</td>
                                <td>:</td>
                                <th>1991</th>
                            </tr>
                        </table>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-12 col-md-12 col-12 description">
            <div class="card">
                <div class="card-header">Description</div>
                <div class="card-body">
                    <p class="card-text">Saya adalah seorang pedagang sepatu import, bermacam sepatu saya jual dan
                        saya mendapatkan barangnya secara import kualitas 100% ok dijamin Lorem ipsum dolor sit amet
                        consectetur adipisicing elit. Maxime ad in, voluptate quas minima sequi sapiente, nemo
                        expedita veritatis esse odit laborum reprehenderit commodi omnis dolore fugit dolor? Beatae,
                        tenetur.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col text-center">
            <!-- Large modal -->
            <button type="button" class="btn btn-primary center-block" data-toggle="modal" data-target=".bd-example-modal-lg">Update Profile</button>

            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Update Profile</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <h2><u> My Products</u></h2>
    <div class="row product text-center">
        <div class="col-lg-3 col-sm-6 text-center"><a href="{{asset('image/profiletenant/john-doe.jpg')}}" target="_blank"><img src="{{asset('image/profiletenant/john-doe.jpg')}}" alt="" width="250px" height="230"></a>
            <p>jhon doe</p>
        </div>
        <div class="col-lg-3 col-sm-6 text-center"><a href="{{asset('image/profiletenant/john-doe.jpg')}}" target="_blank"><img src="{{asset('image/profiletenant/john-doe.jpg')}}" alt="" width="250px" height="230"></a>
            <p>Produk 4G</p>
        </div>
        <div class="col-lg-3 col-sm-6 text-center"><a href="{{asset('image/profiletenant/4g-produk-banner-id.jpg')}}" target="_blank"><img src="{{asset('image/profiletenant/4g-produk-banner-id.jpg')}}" alt="" width="250px" height="230"></a>
            <p>Produk 4G</p>
        </div>
        <div class="col-lg-3 col-sm-6 text-center"><a href="{{asset('image/profiletenant/4g-produk-banner-id.jpg')}}" target="_blank"><img src="{{asset('image/profiletenant/4g-produk-banner-id.jpg')}}" alt="" width="250px" height="230"></a>
            <p>Produk 4G</p>
        </div>
    </div>
    <div class="row">
        <div class="col text-center">
            <!-- Large modal -->
            <button type="button" class="btn btn-primary center-block" data-toggle="modal" data-target=".bd-example-modal-lg">Upload Products</button>

            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Upload Products</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('css_link')
<link href="{{asset('css/tenants/profile.css')}}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
@endsection
@section('css_script')
<style>
    #header {
        background-image: url({{asset('storage/'.$data->image_banner)
    }
    }

    );
    }
</style>
@endsection
@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
<script>
    function handleRegister(id) {
        $('#registerParticipantModal').modal('show');
    }
</script>
@endsection