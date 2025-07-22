<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encurtador de URL</title>
    <style>
        body { font-family: sans-serif; display: flex; justify-content: center; align-items: center; min-height: 100vh; background-color: #f0f2f5; margin: 0; }
        .container { background-color: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); text-align: center; max-width: 500px; width: 90%; }
        h1 { color: #333; margin-bottom: 20px; }
        form { display: flex; flex-direction: column; gap: 15px; }
        input[type="url"] { padding: 12px; border: 1px solid #ddd; border-radius: 5px; font-size: 16px; width: calc(100% - 24px); }
        button { background-color: #007bff; color: white; padding: 12px 20px; border: none; border-radius: 5px; cursor: pointer; font-size: 16px; transition: background-color 0.3s ease; }
        button:hover { background-color: #0056b3; }
        .alert { padding: 10px; border-radius: 5px; margin-top: 20px; font-weight: bold; }
        .alert-success { background-color: #d4edda; color: #155724; border-color: #c3e6cb; }
        .alert-danger { background-color: #f8d7da; color: #721c24; border-color: #f5c6cb; }
        .error-message { color: red; font-size: 0.9em; margin-top: -10px; margin-bottom: 10px; text-align: left; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Encurtador de URL</h1>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('shorten') }}" method="POST">
            @csrf
            <input type="url" name="long_url" placeholder="Cole sua URL longa aqui..." required>
            <button type="submit">Encurtar URL</button>
        </form>
    </div>
</body>
</html>