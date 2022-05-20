<x-layout>

    <div class="container p-5 my-5 shadow contatti-castom">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-md-8">
                
                <form method="POST" action="{{route('contatti.submit')}}">
            
                    @csrf

                    <div class="form-group mb-2 p-3">
                        <label class="contatti-scritte" for="input-name">Nome</label>
                        <input class="form-control inserimento" type="text" name="name" id="input-name">
                    </div>
                    
                    <div class="form-group mb-2 p-3">
                        <label class="contatti-scritte" for="input-lastname">Cognome</label>
                        <input class="form-control inserimento" type="text" name="lastname" id="input-lastname">
                    </div>
            
                    <div class="form-group mb-2 p-3">
                        <label class="contatti-scritte" for="input-email">Email</label>
                        <input class="form-control inserimento" type="text" name="email" id="input-email">
                    </div>

                    <div class="form-group mb-2 p-3">
                        <label class="contatti-scritte" for="message" class="form-label">Messaggio:</label>
                        <textarea class="form-control inserimento" name="message" id="message" cols="30" rows="10"></textarea>
                    </div>

                    <div class="mb-2 p-3">
                        <button class="button-contatti" type="submit">Clicca qui</button>
                    </div>

                </form>

            </div>
        </div>
    </div>


</x-layout>