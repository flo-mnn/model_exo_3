<section class="container px-5 py-3 my-5 rounded" id="women">
    <h1 class="p-5 my-5 bg-danger text-white rounded">
        Toutes les femmes ({{count($members->where('genre','Femme'))}})
    </h1>
    <div class="row">
        @foreach ($members as $member)
        @if (($member->genre)==="Femme")
        <span class="d-none">{{$compt++}}</span>
        <div class="col-4">
                    <div class="card mx-auto my-5 border-danger" style="width: 18rem;">
                        {{-- <img src="..." class="card-img-top" alt="..."> --}}
                        <div class="card-body">
                        <h5 class="card-title">{{$member->nom}}</h5>
                        <h6 class="card-subtitle mb-2 ">{{$member->genre}}</h6>
                        <p class="card-text text-muted">{{$member->age}} ans</p>
                        </div>
                    </div>
                </div>
                @if ($compt  %  3  ==  0)

                    </div>
                    
                    <div  class="row">
                    
                @endif
            @endif
        @endforeach
    </div>

</section>