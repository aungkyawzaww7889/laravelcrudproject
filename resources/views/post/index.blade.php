<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>

    {{-- bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    {{-- fontawesome  --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style type="text/css">

        body{
            padding: 100px;
        }
    
    </style>
</head>
<body>

   <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <h4>Post Lists</h4>
                <a href="{{ URL::to('post/create') }}">
                    <button class="btn btn-primary btn-sm mb-2"> 
                       <i class="fas fa-plus"></i> Add New
                    </button>
                </a>
                @if(Session('successAltet'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{ Session('successAltet') }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Content</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($postresults as $postresult)
                            <tr>
                                {{-- <td>{{ $postresult["id"]}}</td>
                                <td>{{ $postresult["title"]}}</td>
                                <td>{{ $postresult["content"]}}</td> --}}
                                <td>{{ $postresult->id}}</td>
                                <td>{{ $postresult->title}}</td>
                                <td>{{ $postresult->content}}</td>
                                <td>
                                    <form action="{{ URL::to('postdelete/'.$postresult->id) }}" method="POST">
                                        @csrf
                                        @method("DELETE")
                                        <a href="{{ URL::to('post/edit/'.$postresult->id) }}">
                                            <button type="button" class="btn btn-success btn-sm"><i class="fas fa-edit me-1"></i>Edit</button>
                                        </a>
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm(`Are you sure you want to delete?`)"><i class="fas fa-trash me-1"></i>Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        
                    </tbody>

                </table>
                {{-- {{ $postresults->links() }}                 --}}

            </div>
            <div class="col-md-2"></div>
        </div>
   </div>



    {{-- bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>