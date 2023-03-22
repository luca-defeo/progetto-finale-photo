<x-layout>
    <div class="container-fluid p-5 bg-primary text-white text-center">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="display-1">Contacts</h1>
            </div>
        </div>
    </div>

    @if (session('status'))                              <!-- messaggio di riuscita invio email -->
    <div class="alert alert-success text-center">  
    {{ session('status') }}
    </div>   
@endif


    <div class="container my-5 ">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">

                
                <form class="p-5 shadow " method="POST" action="{{route('contacts_submit')}}">
                    @csrf  <!-- IMPORTANTE!!: in un form inserire sempre @csrf altrimenti ERROR 419 -->

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nome completo</label>
                        <input type="text" name="name" class="form-control" id="name" >
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Indirizzo email</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="messaggio " class="form-label">Scrivi un messaggio </label>
                        <textarea name="message" id="message" cols="30" rows="7" class="form-control"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Contattaci</button>
                  </form>

            </div>
        </div>
    </div>
</x-layout>