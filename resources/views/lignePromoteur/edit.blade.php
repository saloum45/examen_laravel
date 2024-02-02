<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<!-- bootstrap icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            <h1><strong>
                    <center>EDITER ATTRIBUTION TERRAIN->PROMOTEUR</center>
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
                        <form action="{{ route('lignePromoteur.update', $lignePromoteur->id) }}" method="POST">
                            @csrf
                            <label for="" class="form-label "><strong>Térrain</strong></label>
                            <select id="" name="terrain_id" class="form-select form-select-md">
                                <option value="{{$lignePromoteur->terrain_id}}">{{$lignePromoteur->terrain_id}}</option>
                                @foreach ($lesTerrains as $t)
                                <option value="{{$t->id}}">{{$t->id}}-{{$t->description}}</option>
                                @endforeach
                            </select>
                            <label for="" class="form-label "><strong>Promoteur</strong></label>
                            <select id="" name="promoteur_id" class="form-select form-select-md" required>
                                <option value="{{$lignePromoteur->promoteur_id}}">{{$lignePromoteur->promoteur_id}}</option>
                                @foreach ($lesPromoteurs as $p)
                                <option value="{{$p->id}}">{{$p->id}}-{{$p->nomp}}</option>
                                @endforeach
                            </select>
                            <label class="form-label" for=""><strong>Date début</strong></label>
                            <input type="date" name="dateDebut" id="" class="form-control" value="{{ $lignePromoteur->dateDebut }}">
                            <label class="form-label" for=""><strong>Date fin</strong></label>
                            <input type="date" name="dateFin" id="" class="form-control" value="{{ $lignePromoteur->dateFin }}">
                            <label for="" class="col-form-label "><strong>Prix</strong></label>
                            <input type="number" name="prix" id="" class="form-control  " value="{{ $lignePromoteur->prix }}">
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