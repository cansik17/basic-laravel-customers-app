@extends('layouts.app')

@section('content')

<div class="container">
  
  <h3>Müşteri Bilgileri <a class="btn btn-primary float-right" href="{{route('home.index')}}" >Müşteri listesine geri dön</a>  </h3>
  <br><br>
  <ul class="list-group">
    <li class="list-group-item">İsim :===>  {{$customer->name}}</li>
    <li class="list-group-item">Soyisim :===> {{$customer->surname}}</li>
    <li class="list-group-item">Telefon :===> {{$customer->phone}}</li>
    <li class="list-group-item">Lokasyon :===> {{$customer->address}}</li>
    <li class="list-group-item">Mail adresi :===> {{$customer->email}}</li>
    <li class="list-group-item">Bilgi Notu :===> {{$customer->info}}</li>
    <li class="list-group-item">Oluşturulma Tarihi :===> {{$customer->created_at}}</li>
    <li class="list-group-item">Güncellenme Tarihi :===> {{$customer->updated_at}}</li>
  </ul>  
  
  
     
      
</div>

    
@endsection