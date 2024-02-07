<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<!-- bootstrap icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            <STRONG><CENter>LISTE DES PROMOTEURS</CENter></STRONG>
        </h2>
    </x-slot>

    <div class="py-12 container">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">


                    <div class="container">
                        @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif

                    </div>
                    <a href="{{ route('promoteur.add')}}" class="btn btn-primary"><i class="bi bi-plus-square-fill"></i></a>



                    <div class="py-12 container">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nom</th>
                                    <th>Tel</th>
                                    <th>Email</th>
                                    <th>Boite postal</th>
                                    <th>Action</th>

                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($promoteur as $p)
                                <tr>
                                    <td>{{ $p->id }}</td>
                                    <td>{{ $p->nomp }}</td>
                                    <td>{{ $p->tel }}</td>
                                    <td>{{ $p->email }}</td>
                                    <td>{{ $p->bp }}</td>

                                    <td>
                                        <!-- <a href="{{ route('promoteur.show', $p->id) }}" class="btn btn-primary"><i class="bi bi-eye-fill"></i></a> -->
                                        <a href="{{ route('promoteur.edit', $p->id) }}" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                                        <a href="{{ route('promoteur.delete', $p->id) }}" class="btn btn-danger" onclick="return confirm('Are you sure to delete');"><i class="bi bi-trash3-fill"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <!-- Optional JavaScript; choose one of the two! -->

                    <!-- Option 1: Bootstrap Bundle with Popper -->
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
                    </script>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
