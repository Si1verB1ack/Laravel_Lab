<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-10 mt-4">
                <h1>{{$product->Name}}</h1>
            </div>
            <div class="col-2 mt-4">

                <a href="{{route('update',$product->id)}}" class="btn btn-info" style="width:100px">Update</a>

                <form action="{{ route('delete', $product->id) }}" method="POST" onsubmit="confirmation(this)">
                    @csrf
                    <button type="submit" class="btn btn-danger mt-1" style="width:100px">Delete</button>
                </form>
            </div>
            <table class="table pl-5">
                <tbody>
                        <tr>
                            <td scope="row">Description: {{$product->Description}}</td>
                        </tr>
                        <tr>
                            <td scope="row">Price: {{$product->Price}}$</td>
                        </tr>
                        <tr>
                            <td scope="row">QuantityInStock: {{$product->QuantityInStock}}$</td>
                        </tr>
                        <tr>
                            <td scope="row">created at: {{$product->created_at}}$</td>
                        </tr>
                        <tr>
                            <td scope="row">updated at: {{$product->updated_at}}$</td>
                        </tr>
                </tbody>
            </table>
        </div>
    </div>
    <script type="text/javascript">
        function confirmation(form) {
            event.preventDefault(); // Prevent form submission

            var urlToRedirect = form.action; // Get URL from form action attribute

            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: "Deleted!",
                        text: "Your file has been deleted.",
                        icon: "success"
                    }).then(() => {
                        form.submit(); // Submit the form after the user clicks "OK"
                    });
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    Swal.fire({
                        title: "Cancelled",
                        text: "Your imaginary file is safe :)",
                        icon: "error"
                    });
                }
            });
        }
    </script>
</body>
</html>

