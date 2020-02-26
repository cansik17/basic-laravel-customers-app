@extends('layouts.app')

@section('content')

<div class="container">
   <div class="col-md-8 mx-auto">
       <div>
        <h3>Müşteri bilgilerini güncelleme <a class="btn btn-primary float-right" href="{{route('home.index')}}" >Müşteri Listesine Geri Dön</a>  </h3> 
      
       <br><br><hr>
       </div>
        @foreach ($errors->all() as $message) 
        
        <li class="alert alert-danger">{{$message}}</li>
        
         @endforeach 
        
         
      <form action="{{route('home.update', $customer->id)}}" method="POST">
        @method('PUT')
          @csrf
        <div class="form-group">
          <label for="formGroupExampleInput">ad:</label>
          <input type="text" class="form-control" name="name" value="{{$customer->name}}" id="formGroupExampleInput" >
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2">soyad:</label>
          <input type="text" class="form-control" name="surname" value="{{$customer->surname}}" id="formGroupExampleInput2" >
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">telefon numarası:</label>
            <input type="tel" class="form-control" name="phone" value="{{$customer->phone}}" id="formGroupExampleInput2" >
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">adres:</label>
            <input type="text" class="form-control" name="address" value="{{$customer->address}}" id="formGroupExampleInput2" >
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">mail adresi:</label>
            <input type="email" class="form-control" name="email" value="{{$customer->email}}" id="formGroupExampleInput2" >
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">not:</label>
            <input type="text" class="form-control" name="info" value="{{$customer->info}}" id="formGroupExampleInput2" >
          </div>
          <button type="submit" class="btn btn-primary">Kaydet</button>
      </form>
    </div>
      
    

</div>

    
@endsection