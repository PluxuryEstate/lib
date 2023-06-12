<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('books.create') }}"> Create New Book</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<table class="table table-bordered">
    <tr>
        <th>Title</th>
        <th>Description</th>
    </tr>
    @foreach ($books as $book)
        <tr>
            <td>{{ $book->title }}</td>
            <td>{{ $book->description }}</td>
            <td>
                <a class="btn btn-info" href="{{ route('books.show',$book->id) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('books.edit',$book->id) }}">Edit</a>
                <form action="{{ route('books.destroy',$book->id) }}" method="POST">

                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
