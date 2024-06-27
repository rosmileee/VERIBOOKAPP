<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Confirmation</title>
    <style>
        /* resources/css/bookingconfirmation.css */
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #94a2aa;
            color: #333;
            padding: 20px;
            margin: 0;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            border: 1px solid #8b5225;
        }
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
            font-family: 'Playfair Display', serif;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        ul li {
            border: 1px solid #d7aa6e;
            padding: 10px;
            margin-bottom: 10px;
            background-color: #ffffff;
            border-radius: 4px;
        }
        ul li strong {
            display: inline-block;
            width: 150px;
        }
        .buttons {
            text-align: center;
            margin-top: 20px;
        }
        .buttons a,
        .buttons form button,
        .buttons button.submit-button {
            font-family: 'Roboto', sans-serif;
            font-size: 1em;
            text-decoration: none;
            padding: 10px 20px;
            background-color: #d98a38;
            color: #fff;
            border-radius: 4px;
            transition: background-color 0.3s ease;
            border: none;
            cursor: pointer;
            margin: 5px;
            display: inline-block;
            width: 180px;
            text-align: center;
        }
        .buttons a:hover,
        .buttons form button:hover,
        .buttons button.submit-button:hover {
            background-color: #9f5525;
        }
        .buttons form button.delete-button {
            background-color: #dc3545;
        }
        .buttons form button.delete-button:hover {
            background-color: #c82333;
        }
        .buttons button.submit-button {
            background-color: #28a745;
        }
        .buttons button.submit-button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Booking Confirmation</h1>
        
        <ul>
            <li><strong>Name:</strong> {{ $booking->name }}</li>
            <li><strong>Email:</strong> {{ $booking->email }}</li>
            <li><strong>Check-In Date:</strong> {{ $booking->checkin }}</li>
            <li><strong>Check-Out Date:</strong> {{ $booking->checkout }}</li>
            <li><strong>Room Type:</strong> {{ $booking->room }}</li>
            <li><strong>Number of Adults:</strong> {{ $booking->adults }}</li>
            <li><strong>Number of Children:</strong> {{ $booking->children }}</li>
        </ul>

        <div class="buttons">
            <a href="{{ route('booking.edit', $booking->id) }}">Edit Booking</a>

            <form action="{{ route('booking.delete', $booking->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this booking?');" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="delete-button">Delete Booking</button>
            </form>

            <form action="{{ route('booking.confirm', $booking->id) }}" method="POST" style="display:inline;">
                @csrf
                <button type="submit" class="submit-button">Confirm</button>
            </form>
        </div>
    </div>
</body>
</html>
