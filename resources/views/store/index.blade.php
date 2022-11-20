<div class="container">
    <div class="row">
        <div class="col-10 mt-4">
            <h1>Tiendas</h1>
        </div>
        <div class="row">
            @foreach($stores as $store)
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{$store->name}}</h5>
                            <p class="card-text">
                            <ul>
                                <li>Dirección: {{$store->address}}</li>
                                <li>Correo: {{$store->email}}</li>

                            </ul>

                            </p>
                            <div class="row">
                                <div class="col-12 mt-12" align="center">
                                    <a href="/store/{{$store->id}}" class="btn btn-primary">View</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>