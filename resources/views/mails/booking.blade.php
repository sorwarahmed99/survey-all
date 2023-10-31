<!DOCTYPE html>
<html>
<head>
    <title>Booking Email</title>
</head>
<body>
    <div style="background-color: #f4f4f4; padding: 20px;">
        <div style="background-color: #ffffff; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
            <h2 style="font-size: 24px;">New Booking Created</h2>
            <p style="font-size: 16px; margin-top: 10px;">New booking from: <b>{{ $booking->name }}</b></p>
        </div>

        <div style="background-color: #ffffff; padding: 20px; margin-top: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
            <p><strong>Name:</strong> {{ $booking->name }}</p>
            <p><strong>Email:</strong> {{ $booking->email }}</p>
            <p><strong>Service:</strong> {{ $booking->job_type }}</p>
            <p><strong>Message:</strong> {{ $booking->instruction }}</p>
            <p><strong>House or Flat:</strong> {{ $booking->house_or_flat }}</p>
            <p><strong>Street:</strong> {{ $booking->street }}</p>
            <p><strong>Postcode:</strong> {{ $booking->area_or_postcode }}</p>
        </div>

        <div style="margin-top: 20px;">
            <a href="{{ route('admin.booking') }}" style="display: inline-block; background-color: #007bff; color: #ffffff; padding: 15px 25px; text-decoration: none; border-radius: 5px; border: 1px solid #0d2e51;">View All Contact Enquiries</a>
        </div>
    </div>
</body>
</html>