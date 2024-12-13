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
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <title>List Books Page</title>
  </head>
  <body>
    <div class="container mt-5" style="width: 820px">
    <h1 class="mb-4 text-center">Books Data</h1>
    <hr class="mb-4 container">
    <div class="row">
    <div class="col-6"><form  action="{{ route('index') }}" method="get" class="input-group mb-2 col-md-2 " style="width: 300px;">
        <label class="input-group-text" for="page">List Show</label>
        <select name="page" id="page" class="form-select" onchange="this.form.submit()">
          @for ($i = 10; $i <= 100; $i += 10)
              <option value="{{ $i }}" {{ $pageLimit == $i ? 'selected' : '' }}>{{ $i }}</option>
          @endfor
        </select>
      </form>
      <form action="{{ route('index') }}" method="get" class="input-group mb-3 col-md-2" style="width: 300px;">
        <label for="keyword" class="input-group-text" for="inputGroupSelect01">Search</label>
        <input type="text" class="form-control" placeholder="Search Here :)" aria-label="Search Here :)" aria-describedby="basic-addon1" name="keyword" id="keyword"  value="{{ $keyword ?? '' }}">
      </form></div>
    <div class=" col-6 mt-5 gap-3">
      <div class="d-flex justify-content-end gap-3">
      <a href="{{ route('authors') }}" class="btn btn-primary">Authors</a>
      <a href="{{ route('create.rating') }}" class="btn btn-success">Insert Rating</a>
      </div>
    </div>
  </div>
  </div>    
    </div>
      <table class="table table-bordered container mt-3" style="width: 800px">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Book Name</th>
            <th scope="col">Category Name</th>
            <th scope="col">Author Name</th>
            <th scope="col">Average Rating</th>
            <th scope="col">Voter</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $book->name }}</td>
                <td>{{ $book->category->name }}</td>
                <td>{{ $book->author->name }}</td>
                <td>{{ number_format($book->rating_avg_rating, 2) }}</td>
                <td>{{ $book->rating_count }}</td>
            </tr>
            @endforeach
        </tbody>
      </table>
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

