<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Featured Companies</title>
</head>
<body>
    <h1>Featured Companies</h1>
    <ul>
        @foreach($featuredCompanies as $company)
            <li>{{ $company->name }}</li>
        @endforeach
    </ul>
</body>
</html>
