<!-- resources/views/components/layout.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <header>
        <nav>
            <h1>ninja network</h1>
            <a href="/ninjas">all ninjas</a>
            <a href="/ninjas/create">create new ninja</a>
        </nav>
    </header>
    <div class="layout">
   
        {{ $slot }}
        
    </div>
</body>
</html>
