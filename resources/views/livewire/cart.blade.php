@extends('main')
@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <h2>Product List</h2>
                <div class="row">
                    @foreach ($barang as $item)
                            <div class="col-md-3 mb-2">
                                <div class="card">
                                    <div class="card-body">
                                    <img src="{{voyager::image($item->gambar)}}" alt="" class="img-fluid">
                                    </div>  
                                </div>
                                <div class="card-footer">
                                    <h6 class="text-center">{{$item->nama_barang}}</h6>
                                    
                                    <button wire:click="addItem({{$item->id}})" class="btn btn-info btn-sm btn-block">Add To Cart</button>
                                </div>
                            </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                    <h2>Cart</h2>
                    <table class="table table-sm table-bordered table-striped table-hoverd">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                </tr>
                            </thead>
                        <tbody>
                            @forelse ($carts  as $key=>$itemss)
                                <tr>
                                    <td>{{$key + 1}}</td>
                                    <td>{{$itemss['nama_barang']}} || {{$itemss['jumlah_barang']}}</td>
                                </tr>
                            @empty
                            <td colspan="3"><h6 class="text-center">Empy Cart</h6></td>
                            @endforelse
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
</div>
@endsection