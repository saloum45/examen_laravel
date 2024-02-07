<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<!-- bootstrap icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
<style>
    .description {
        width: 320px;
    }
</style>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            <h1><strong>
                    <center>Details du promoteur {{ $promoteur->nomp }}</center>
                </strong></h1>
        </h2>
    </x-slot>

    <div class="py-12 container">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 >
                    <h1 class="text-center text-success">
                    </h1>

                    <div class="py-12 container">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <form action="{{ route('region.show', $promoteur) }}">
                            @csrf
                            <label class="label-control" for=""><strong>Nom : </strong></label>
                            <label class="label-control" for="">{{ $promoteur->nomp }}</label><br>
                            <label class="label-control" for=""><strong>Tel : </strong></label>
                            <label class="label-control" for="">{{ $promoteur->tel }}</label><br>
                            <label class="label-control"><strong>Email : </strong></label>
                            <label class="label-control" for="">{{ $promoteur->email }}</label> <br>
                            <label class="label-control"><strong>Bp : </strong></label>
                            <label class="label-control" for="">{{ $promoteur->bp }}</label>
                        </form>
                        <h3>Les terrains associés au promoteur {{ $promoteur->nomp }}</h3>
                        <div class="py-12 container">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Superficie</th>
                                        <th>Description</th>
                                        <th>Id_Zone</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>

                                <tbody>
                                    {{-- @foreach ($promoteur->lignePromoteur as $lignePromoteur) --}}
                                        {{-- @foreach ($lignePromoteur as $t) --}}
                                            {{-- <tr> --}}
                                                {{-- <td>{{ $t->id }}</td> --}}
                                                {{-- <td>{{ $t->superficie }} Km²</td>
                                                <td>{{ $t->description }}</td>
                                                <td>{{ $t->zone_id }}</td> --}}
{{--
                                                <td>
                                                    <a href="{{ route('terrain.edit', $t->id) }}"
                                                        class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                                                    <a href="{{ route('terrain.delete', $t->id) }}"
                                                        class="btn btn-danger"
                                                        onclick="return confirm('Are you sure to delete');"><i
                                                            class="bi bi-trash3-fill"></i></a>
                                                </td> --}}
                                            {{-- </tr> --}}
                                        {{-- @endforeach --}}
                                    {{-- @endforeach --}}
                                </tbody>
                            </table>
                        </div>
                    </div>




                    <!-- Optional JavaScript; choose one of the two! -->

                    <!-- Option 1: Bootstrap Bundle with Popper -->
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
                        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
                    </script>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
