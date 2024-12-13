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
    <title>Document</title>
  </head>
  <body>
    <div class="container mt-5 border p-3 mb-5" style="width: 820px">
      <h2 class="text-center mb-3">Insert Ratings</h2>
      <form class="mt-3" action="{{ route('create.rating') }}" method="get">
        <label for="author_id">Author</label>
        <select class="form-select mt-2" aria-label="Default select example" name="author_id" id="author_id" onchange="this.form.submit()">
          <option selected>Select Author</option>
          @foreach ($authors as $author)
          <option value="{{ $author->id }}" {{ $getAuthor == $author->id ? 'selected' : '' }}>{{ $author->name }}</option>
          @endforeach
        </select>
      </form>
      @if (request('author_id'))
      <form class="mt-3" action="{{ route('store.rating') }}" method="post">
        @csrf
        <label for="books">Book</label>
        <select class="form-select mt-2" aria-label="Default select example" name="book_id" id="books">
          <option selected>Select Book</option>
          @foreach ($books as $book)
          <option value="{{ $book->id }}" {{ $getBook == $book->id ? 'selected' : '' }}>{{ $book->name }}</option>
          @endforeach
        </select>
        <label class="mt-3" for="rating">Rating</label>
        <select class="form-select mt-2" aria-label="Default select example" name="rating" id="rating">
            @for ($i=1; $i <= 10; $i++)          
          <option value="{{ $i }}" {{ request('rating') == $i ? 'selected' : '' }}>{{ $i }}</option>
            @endfor
        </select>
        <button type="submit" class="btn btn-secondary mt-3" style="width: 100%">Submit</button>
      </form>
      @endif
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
