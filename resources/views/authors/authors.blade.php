<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    <title>Author Page</title>
  </head>
  <body>
    <div class="container mt-5" style="width: 820px">
      <h1 class="mb-4 text-center">Top 10 Most Famous Authors</h1>
      <hr class="mb-4 container" />
      <a href="{{ route('index') }}" class="btn btn-primary">Go Back</a>
      <table class="table table-bordered container mt-3" style="width: 800px">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Author Name</th>
            <th scope="col">Voter</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($authors as $author)
          <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $author->name }}</td>
            <td>{{ $author->total_votes }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
      integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
