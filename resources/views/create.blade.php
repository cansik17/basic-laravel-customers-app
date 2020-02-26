@extends('layouts.app')

@section('content')

<div class="container">
   <div class="col-md-6 mx-auto">
       <div>
        <h3>Yeni Müşteri Ekleme</h3> 
       <a class="btn btn-primary float-right" href="{{route('home.index')}}" >Geri</a>  
       <br><br><hr>
       </div>
        @foreach ($errors->all() as $message) 
        
        <li class="alert alert-danger">{{$message}}</li>
        
         @endforeach 
        
         
   <form action="{{route('home.store')}}" method="POST">
          @csrf
        <div class="form-group">
          <label for="formGroupExampleInput">ad:</label>
          <input type="text" class="form-control" name="name" value="{{old('name')}}" id="formGroupExampleInput" >
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2">soyad:</label>
          <input type="text" class="form-control" name="surname" value="{{old('surname')}}" id="formGroupExampleInput2" >
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">telefon numarası:</label>
            <input type="tel" class="form-control" name="phone" value="{{old('phone')}}" id="formGroupExampleInput2" >
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">adres:</label>
            <input type="text" class="form-control" name="address" value="{{old('address')}}" id="formGroupExampleInput2" >
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">mail adresi:</label>
            <input type="email" class="form-control" name="email" value="{{old('email')}}" id="formGroupExampleInput2" >
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">not:</label>
            <input type="text" class="form-control" name="info" value="{{old('info')}}" id="formGroupExampleInput2" >
          </div>
          <button type="submit" class="btn btn-primary">Kaydet</button>
      </form>
    </div>
      
    

</div>

    
@endsection