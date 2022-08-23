<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Booking</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Booking</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('bookings.create') }}"> Create Booking</a>
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>Full name</th>
                    <th>pax</th>
                    <th>contact</th>
                    <th>Transport vehicle</th>
                    <th>Booking for</th>
                    <th>Duration</th>

                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bookings as $booking)
                    <tr>
                        <td>{{ $booking->id }}</td>
                        <td>{{ $booking->full_name }}</td>
                        <td>{{ $booking->pax }}</td>
                        <td>{{ $booking->contact }}</td>
                        <td>{{ $booking->transport_vehicle }}</td>
                        <td>{{ $booking->booking_for }}</td>
                        <td>{{ $booking->duration }}</td>

                        <td>
                            <form action="{{ route('bookings.destroy',$booking->id) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('bookings.edit',$booking->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        {!! $bookings->links() !!}
    </div>
</body>
</html>