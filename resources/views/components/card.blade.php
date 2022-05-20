<div class="col-12 col-md-3 col-lg-4 my-5 col-custom">
    <div class="card-body">
        <h5 class="card-title">Nome: <strong>{{$name}}</strong></h5>
        <h5 class="card-title">Cognome: <strong>{{$lastname}}</strong></h5>
        <h5 class="card-title">Età: <strong>{{$age}}</strong></h5>

        {{-- @foreach ($personal as $person) --}}
            <x-button 
                {{-- name="{{$person['name']}}"
                info="{{$person['info']}}" --}}
            />
        {{-- @endforeach     --}}
        
    </div>
</div>