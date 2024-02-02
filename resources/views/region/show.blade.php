<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            <h1><strong><center>Details Region {{ $region->nomr }}</center></strong></h1>
        </h2>
    </x-slot>

    <div class="py-12 container">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 >
                    <h1 class="text-center text-success"></h1>

                    <div class="py-12 container">
                        @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif
                        <form action="{{ route('region.show', $region) }}">
                            @csrf
                            <label class="label-control" for=""><strong>Id Region : </strong></label>
                            <label class="label-control" for="">{{ $region->id }}</label><br>
                            <label class="label-control" for=""><strong>Nom Region : </strong></label>
                            <label class="label-control" for="">{{ $region->nomr }}</label><br>
                            <label class="label-control"><strong>Superficie : </strong></label>
                            <label class="label-control" for="">{{ $region->superficie }}</label>
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