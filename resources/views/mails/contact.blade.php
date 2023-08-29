<!DOCTYPE html>
<html>
<head>
    <title>Contact Email</title>
</head>
<body>
    <div style="background-color: #f4f4f4; padding: 20px;">
        <div style="background-color: #ffffff; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
            <h2 style="font-size: 24px;">New Contact Enquiry</h2>
            <p style="font-size: 16px; margin-top: 10px;">You have received a new contact enquiry from: <b>{{ $contact->name }}</b></p>
        </div>

        <div style="background-color: #ffffff; padding: 20px; margin-top: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
            <p><strong>Name:</strong> {{ $contact->name }}</p>
            <p><strong>Email:</strong> {{ $contact->email }}</p>
            <p><strong>Query:</strong> {{ $contact->query_type }}</p>
            <p><strong>Message:</strong> {{ $contact->message }}</p>
        </div>

        <div style="margin-top: 20px;">
            <a href="{{ route('admin.contacts') }}" style="display: inline-block; background-color: #007bff; color: #ffffff; padding: 15px 25px; text-decoration: none; border-radius: 5px; border: 1px solid #0d2e51;">View All Contact Enquiries</a>
        </div>
    </div>
</body>
</html>