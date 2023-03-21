<x-layout>
    <div class="container-fluid p-5 bg-primary text-white text-center">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="display-1">Contacts</h1>
            </div>
        </div>
    </div>

    <div class="container my-5 ">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">

                
                <form class="p-5 shadow">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>

            </div>
        </div>
    </div>
</x-layout>