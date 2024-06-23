<x-header></x-header>
<body>
    <x-nav></x-nav>
<div class="container py-4">
 <form action=" {{Route('Mail')}} " method="post">
 @csrf
  <div class="mb-3">
   <label class="form-label">Nome</label>
   <input class="form-control" type="text" placeholder="Nome" name="nome" value="{{old('nome')}}" />
  </div>


  <div class="mb-3">
   <label class="form-label">Telefono</label>
   <input class="form-control" type="number" placeholder="Telefono " name='telefono' value="{{old('telefono')}}" />Telefono
  </div>

  <div class="mb-3">
   <label class="form-label">Email</label>
   <input class="form-control" type="email" placeholder="Email" name='email' value="{{old('email')}}" />
  </div>
  
  <div class="mb-3">
   <label class="form-label" >Messaggio</label>
   <textarea class="form-control" type="text" placeholder="Messaggio" name='textarea' value='{{old('textarea')}}' style="height: 10rem;"></textarea>
  </div>

 
  <div class="d-grid">
   <button type="submit" class="btn btn-primary btn-lg" >Invia</button>
  </div>

 </form>

</div>
</body>
<x-footer></x-footer>