@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card card-default mb-5">
        <div class="card-header">
            Create Events Booth
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-6">
                <div class="card-body">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <h1>{{$eventbooth->title}}</h1>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <pre>{!! $eventbooth->description !!}</pre>
                    </div>
                    <div class="form-group">
                        <label for="start_date"> Event Time</label>
                        <div class="text-muted">{{ date('d F Y | H:i', strtotime($eventbooth->start_date))}} - {{ date('d F Y | H:i', strtotime($eventbooth->end_date))}}</div>
                    </div>
                    <div class="form-group">
                        <label for="capacity"> Capacity </label>
                        <h4>{{$eventbooth->capacity}} Booth</h4>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6">
                <div class="form-group">
                    <img src="{{asset('storage/'.$eventbooth->image)}}" alt="image event" width="100%" height="auto" style="padding: 50px">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card-body">
                    <div class="form-group">
                        <img src="{{asset('storage/'.$eventbooth->image_layout)}}" width="100%" />
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card-body">
                    <form action="{{route('addbooth')}}" method="POST">
                        @csrf

                        <table class="table table-bordered" id="dynamicTable">
                            <tr>
                                <th>Booth Name</th>
                                <th>Length</th>
                                <th>Wide</th>
                                <th>Price (Rp.)</th>
                                <th>Description</th>
                            </tr>
                            <tr>
                                <input type="hidden" name="eo_users_id" value="{{$eventbooth->eo_users_id}}">
                            </tr>
                        </table>

                        <button type="submit" class="btn btn-success">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('css_link')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.0/trix.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
@endsection
@section('script')
<!-- add field  -->

<script type="text/javascript">
    var i;
    for (i = 1; i <= <?php echo $eventbooth->capacity; ?>; i++) {
        $("#dynamicTable").append('<tr>' +
            '<input type="hidden" name="booth[' + i + '][eo_detail_id]" value="{{$eventbooth->id}}" />' +
            '<td><input type="text" name="booth[' + i + '][boothname]" placeholder="Booth Name" class="form-control" required /></td>' +
            '<td><input type="number" step="0.01"  name="booth[' + i + '][panjang]" placeholder="Length" class="form-control" required /></td>' +
            '<td><input type="number" step="0.01" name="booth[' + i + '][lebar]" placeholder="Wide" class="form-control" required /></td>' +
            '<td><input type="number" step="0.01" name="booth[' + i + '][price]" placeholder="Price" class="form-control" required /></td>' +
            '<td><input type="text" name="booth[' + i + '][description]" placeholder="Description" class="form-control" required /></td>');
    }
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.0/trix.js"></script>
@endsection