<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<!-- bootstrap icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            <h1><strong>
                    <center>EDITER LE TERRAIN : {{ $terrain->id }}</center>
                </strong></h1>
        </h2>
    </x-slot>

    <div class="py-12 container">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">

                    <div class="py-12 container">
                        @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif
                        <form action="{{ route('terrain.update', $terrain) }}" method="POST">
                            @csrf
                            <label class="label-control mt-3"><strong>Superficie</strong></label>
                            <input type="number" name="superficie" id="" class="form-control mt-2" value="{{ $terrain->superficie }}">
                            <label class="label-control mt-3"><strong>Description</strong></label>
                            <input type="text" name="description" id="" class="form-control mt-2" value="{{ $terrain->description }}">
                            <label class="label-control mt-3"><strong>Zone</strong></label>
                            <select name="zone_id" id="" class="form-select">
                                @foreach ($zone as $z)
                                <option value="{{$z->id}}">{{$z->nomz}}</option>
                                @endforeach
                            </select>
                            <button class="btn btn-primary mt-3">Update</button>
                        </form>
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