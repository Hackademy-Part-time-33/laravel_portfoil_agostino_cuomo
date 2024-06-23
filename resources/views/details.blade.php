<x-header></x-header>
<x-nav></x-nav>


<body>
    <section class="page-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 d-flex justify-content-center align-items-center">
                    <h1 class="p-5 mx-5">Dettagli di {{$services['name']}}</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12 d-flex justify-content-center align-items-center mt-5">
                    <div class="card" style="width: 18rem;">
                        <img src="{{--{{$services['img']}}--}}" class="card-img-top" alt="imagine">
                        <div class="card-body">
                            <p class="card-text">
                                <strong>Servizio:</strong> {{$services['name']}}<br>
                                <strong>Costo del servizio:</strong> {{$services['costo']}}<br>
                                <strong>Tempo di realizzazione:</strong> {{--$services['tempo_di_realizzazione']--}}<br>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <x-footer></x-footer>
    </body>

