<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit Bookings</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Edit Booking</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('bookings.index') }}" enctype="multipart/form-data">
                        Back</a>
                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('bookings.update',$booking->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <!-- <div class="row">


                <div class="col-md-6">
                    <div class="form-group">
                        <strong>Full Name:</strong>
                        <input type="text" name="full_name" class="form-control" placeholder="Enter Full Name" value="{{ old('full_name') }}">
                        @if ($errors->has('full_name'))
                            <span class="text-danger">{{ $errors->first('full_name') }}</span>
                        @endif
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <strong>Pax:</strong>
                        <input type="pax" name="pax" class="form-control" placeholder="pax" value="{{ old('pax') }}">
                        @if ($errors->has('pax'))
                            <span class="text-danger">{{ $errors->first('pax') }}</span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <strong>Contact:</strong>
                        <input type="text" name="contact" class="form-control" placeholder="Contact" value="{{ old('contact') }}">
                        @if ($errors->has('contact'))
                            <span class="text-danger">{{ $errors->first('contact') }}</span>
                        @endif
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <strong>Transport vehicle:</strong>
                        <input type="text" name="transport_vehicle" class="form-control" placeholder="Transport Vehicle" value="{{ old('transport_vehicle') }}">
                        @if ($errors->has('transport_vehicle'))
                            <span class="text-danger">{{ $errors->first('transport_vehicle') }}</span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-md-6">
                <div class="form-group">
                        <strong>Transport vehicle:</strong>
                        <input type="text" name="booking_for" class="form-control" placeholder="booking for" value="{{ old('booking_for') }}">
                        @if ($errors->has('booking_for'))
                            <span class="text-danger">{{ $errors->first('booking_for') }}</span>
                        @endif
                    </div> 
                </div>
                <div class="col-md-6">
                <div class="form-group">
                        <strong>Duration:</strong>
                        <input type="text" name="duration" class="form-control" placeholder="duration" value="{{ old('duration') }}">
                        @if ($errors->has('duration'))
                            <span class="text-danger">{{ $errors->first('duration') }}</span>
                        @endif
                    </div> 
                </div>
            </div>
                <button type="submit" class="btn btn-primary ml-3">Submit</button>
            </div> -->

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>full Name:</strong>
                        <input type="text" name="full_name" value="{{ $booking->full_name }}" class="form-control"
                            placeholder="full name">
                        @error('full_name')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Pax:</strong>
                        <input type="text" name="pax" class="form-control" placeholder="pax"
                            value="{{ $booking->pax }}">
                        @error('pax')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Contact:</strong>
                        <input type="text" name="contact" value="{{ $booking->contact }}" class="form-control"
                            placeholder="Contact">
                        @error('contact')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Transport vehicle:</strong>
                        <input type="text" name="transport_vehicle" value="{{ $booking->transport_vehicle }}" class="form-control"
                            placeholder="transport vehicle">
                        @error('transport_vehicle')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Booking For:</strong>
                        <input type="text" name="booking_for" value="{{ $booking->booking_for }}" class="form-control"
                            placeholder="Booking For">
                        @error('booking_for')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Duration:</strong>
                        <input type="text" name="duration" value="{{ $booking->duration }}" class="form-control"
                            placeholder="Duration">
                        @error('duration')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary ml-3">Submit</button>
            </div>
        </form>
    </div>
</body>

</html>