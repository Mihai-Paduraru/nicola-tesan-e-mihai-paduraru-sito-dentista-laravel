<x-layout>

    <div class="container">
        <div class="row padder-custom-card">
            @foreach ($personal as $person)
                <x-card
                    id="{{$person['id']}}"
                    name="{{$person['name']}}"
                    lastname="{{$person['lastname']}}"
                    age="{{$person['age']}}"
                />
            @endforeach
        </div>
    </div>

</x-layout>