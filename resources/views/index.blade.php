<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else

    @endif
</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">



    <a href="/create">create</a><br>




    <table>
        <thead>
            <th>name</th>
            <th>desc</th>
            <th>price</th>
            <th>delete</th>
        </thead>

        <tbody>

            @foreach ($products as $product)
                <tr>

                    <td> {{ $product->name }}</td>
                    <td> {{ $product->description  }} </td>
                    <td> {{ $product->price  }} </td>

                    <td>
                        <form action="{{ route('destroy',$product->id) }}" method="POST">
                            @csrf

                            @method('DELETE')
                            <input type="submit" name="" value="delete" id="">
                        </form>
                    </td>
                </tr>

            @endforeach

        </tbody>
    </table>



</body>
<script>

</script>

</html>