<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo - Your everyday needs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body>
    

    <div class="container">
        <h1 class='text-center mt-5 pb-4'>TODO-LIST</h1>

        <div class="container d-flex justify-content-center">
            <form action="/" method="POST" >
            @csrf
                <input class='form-control' type="text" placeholder='Add your task' name='todo'>
                <button type='submit' class='btn btn-danger mt-1'>Submit</button>
            </form>
        </div>
        <table class='table table-border'>
            <tr>
            <th>ID</th>
                <th>Name</th>
                <th>Operation</th>
            </tr>
           
                @foreach($todos as $item)
                <tr>
                    <td>{{$item['id']}}</td>
                    <td>{{$item['todo']}}</td>
                    <td><a href={{"delete/".$item['id']}} class='btn btn-danger'>Delete</a></td>
                </tr>
                @endforeach
            
        </table>
    </div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>