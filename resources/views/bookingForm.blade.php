<!DOCTYPE html>
<html>
<head>
    <title>Booking</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" />
</head>
<body>
    <div class="container">
        <div class="row mt-5 mb-5">
            <div class="col-10 offset-1 mt-5">
                <div class="card">
                    <div class="card-header bg-primary">
                        <h3 class="text-white">Booking</h3>
                    </div>
                    <div class="card-body">
  
                        @if(Session::has('success'))
                            <div class="alert alert-success">
                                {{Session::get('success')}}
                            </div>
                        @endif
                     
                        <form method="POST" action="{{ route('booking.store') }}" id="bookingForm">
                            {{ csrf_field() }}
                              
                            <div class="row">
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
                            <div class="form-group text-center">
                                <button class="btn btn-success btn-submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>