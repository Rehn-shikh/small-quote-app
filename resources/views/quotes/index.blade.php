<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quotes</title>
</head>
<body>
    <h1>Quotes</h1>
    <ul>
        @foreach ($quotes as $quote)
            <li>
                <strong>{{ $quote->text }}</strong>
                <em> - {{ $quote->author }}</em>
            </li>
        @endforeach
    </ul>
</body>
</html>