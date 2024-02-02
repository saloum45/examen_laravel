<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            <STRONG>
                <CENter>AJOUT D'UNE REGION</CENter>
            </STRONG>
        </h2>
    </x-slot>

    <div class="py-12 container ">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <div class="container">
                        @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif
                        <form action="{{ route('region.store') }}" method="POST" class="container">
                            @csrf
                            <div class="row ">
                                <dvi class="col">
                                    <label for="" class="col-form-label "><strong>Nom Region</strong></label>
                                    <input type="text" name="nomr" id="" class="form-control  " value="">
                                </dvi>
                            </div>
                            <div class="row ">
                                <dvi class="col">
                                    <label class="col-form-label" for=""><strong>Superficie</strong></label>
                                    <input type="number" name="superficie" id="" class="form-control" value="">
                                </dvi>
                            </div>
                            <button class="btn btn-outline-success mt-4">Enregistrer</button>
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