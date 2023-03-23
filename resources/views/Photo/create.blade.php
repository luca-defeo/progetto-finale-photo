<x-layout>
    <div class="container p-5  text-white text-center titoloHomepage ">
        <div class="row justify-content-center ">
            <div class="col-12">
                <h1 class="display-2 titleColor">Crea i tuoi album</h1>
            </div>
        </div>
    </div>
    <div class="container  ">
        <div class="row  justify-content-center">
            <div class="col-12 col-md-8  ">

                
                <form class="p-5  coloreForm shadow  " method="POST" action="{{route('album.photo')}}">
                      @csrf  <!-- IMPORTANTE!!: in un form inserire sempre @csrf altrimenti ERROR 419 -->

                    <div class="mb-3 textColor">
                        <label for="title" class="form-label ">Titolo</label>
                        <input type="text" name="title" class="form-control barreForm " id="title" >
                    </div>
                    <div class="mb-3 textColor rounded-0">
                        <label for="author" class="form-label  ">Autore</label>
                        <input type="text" name="author" class="form-control barreForm p-0" id="author" >
                    </div>
                    <div class="mb-3 textColor rounded-0">
                        <label for="messaggio " class="form-label">Descrivi i tuoi scatti  </label>
                        <textarea name="message" id="message" cols="30" rows="7" class="form-control p-0 barreForm"></textarea>
                    </div>
                    <button type="submit" class="btn bottoneForm text-white my-3">Aggiungi le tue foto</button>
                    <button type="submit" href='{{route('homepage')}}' class="btn bottoneForm text-white float-end my-3"> Torna alla home</button>
                  </form>

            </div>
        </div>
    </div>

</x-layout>