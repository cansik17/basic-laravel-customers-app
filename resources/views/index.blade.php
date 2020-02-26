@extends('layouts.app')

@section('content')

<div class="container">
   <div>
     <h3 class="float-left ">Müşteri Listesi</h3>
      <a class="btn btn-primary float-right" href="{{route('home.create')}}" >Yeni Ekle</a>
      <br><br>
    </div> 
    <div class="table-responsive-md ">
        
            <table class="table w-100 " >
                <thead class="bg-secondary text-white font-italic  ">
                 
                  <tr  >
                    <th scope="col"><h4>#</h4></th>
                    <th scope="col"><h4>Isim</h4></th>
                    <th scope="col"><h4>Soyisim</h4></th>
                    <th scope="col"><h4>Telefon</h4></th>
                    <th scope="col"><h4>Lokasyon</h4></th>
                    <th scope="col"><h4>Mail Adresi</h4></th>
                    <th scope="col"><h4>Not</h4></th>
                    <th scope="col"><h4>Guncelleme tarihi</h4></th>
                    <th scope="col"><h4> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </h4></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($customers as $customer)
                  <tr>
                    <th scope="row">{{$customer->id}}</th>
                    <td>{{$customer->name}}</td>
                    <td>{{$customer->surname}}</td>
                    <td>{{$customer->phone}}</td>
                    <td>{{$customer->address}}</td>
                    <td>{{$customer->email}}</td>
                    <td>{{$customer->info}}</td>
                    <td>{{$customer->updated_at}}</td>
                    <td>
                      
                    {{-- <a href="home/{{$customer->id}}" title="Görüntüle" class="btn btn-sm btn-success "><i class="fa fa-eye"></i></a>
                      <a href="home/{{$customer->id}}/edit" title="Düzenle" class="btn btn-sm btn-primary "><i class="fa fa-pen"></i></a>
                      <a href="home/{{$customer->id}}" title="Sil" class="btn btn-sm btn-danger "><i class="fa fa-times"></i></a> --}}
                      
                      <a href="{{route('home.show',$customer->id)}}" title="Görüntüle" class="btn btn-sm btn-success "><i class="fa fa-eye"></i></a>
                      <a href="{{route('home.edit',$customer->id)}}" title="Düzenle" class="btn btn-sm btn-primary "><i class="fa fa-pen"></i></a>
                      <form action="{{route('home.destroy',$customer->id)}}" method="post">
                        @method('delete')
                        @csrf
                        <button type="submit"  title="Sil" class="btn btn-sm btn-danger "><i class="fa fa-times"></i></button>
                      </form>
                    </td>
                  </tr>
                  @endforeach
           
                  
                </tbody>
              </table>
        
      </div>
      
        {{ $customers->links() }}
     
      
</div>

    
@endsection