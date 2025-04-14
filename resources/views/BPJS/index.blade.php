<!DOCTYPE html>
<html>
<head>
    <title>Daftar BPJS</title>
</head>
<body>
    <h1>Daftar BPJS</h1>
    <ul>
        @foreach ($data as $item)
            <li>
                <a href="{{ url('/BPJSs/' . $item['id']) }}">
                    {{ $item['title'] }}
                </a>
            </li>
        @endforeach
    </ul>
</body>
</html>
