<x-layout class="coloreContainer">
    <div class="container p-5  text-white text-center titoloHomepage ">
        <div class="row justify-content-center ">
            <div class="col-12">
                <h1 class="display-1 titleColor">Contacts</h1>
            </div>
        </div>
    </div>

        @if (session('EmailSented'))                              <!-- messaggio di riuscita invio email -->
        <div class="alert alert-success text-center container ">  
        {{ session('EmailSented') }}
        </div>   
        @endif
 
        
    <div class="container  ">
        <div class="row  mx-4">
            <div class="col-12 col-md-8  ">

                
                <form class="p-5  coloreForm " method="POST" action="{{route('contacts_submit')}}">
                    @if(session('EmailError'))                                 <!--   -->
        <div class="class alert alert-success text-center bg-warning">
        {{session('EmailError')}}
        </div>
        @endif

                    @csrf  <!-- IMPORTANTE!!: in un form inserire sempre @csrf altrimenti ERROR 419 -->

                    <div class="mb-3 textColor">
                        <label for="exampleInputEmail1" class="form-label ">Nome completo</label>
                        <input type="text" name="name" class="form-control barreForm" id="name" >
                    </div>
                    <div class="mb-3 textColor rounded-0">
                        <label for="email" class="form-label  ">Indirizzo email</label>
                        <input type="email" name="email" class="form-control barreForm" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3 textColor rounded-0">
                        <label for="messaggio " class="form-label">Scrivi un messaggio </label>
                        <textarea name="message" id="message" cols="30" rows="7" class="form-control p-0 barreForm"></textarea>
                    </div>
                    <button type="submit" class="btn bottoneForm text-white">Contattaci</button>
                  </form>

            </div>
        </div>
    </div>
</x-layout>