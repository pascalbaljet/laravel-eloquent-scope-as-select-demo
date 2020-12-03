<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Demo</title>
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    </head>

    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:pt-0">
            <div class="max-w-6xl w-full mx-auto sm:px-6 lg:px-8 sm:py-6 lg:py-8">
                <table class="table-auto w-full mb-6">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Published</th>
                            <th>Comments</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($posts as $post)
                            @include('postRow')
                        @endforeach
                    </tbody>
                </table>

                {!! $posts->withQueryString()->links() !!}
            </div>
        </div>
    </body>
</html>