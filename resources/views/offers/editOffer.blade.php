@extends('layouts.dashboardLayout')
@section('title' , 'PMS - Add offer')


@section('main-section')
<form action="{{ url('offer/update') }}" method="POST">

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif


    @csrf
    <div class="mb-3">
        <input type="hidden" name="offer_id" value={{ $offer->id}}>

        <label for="offerName" class="form-label">offer Name</label>
        <input type="text" name="name" value="{{ $offer->name}}" class="form-control" id="offerName" placeholder="offer Name">
    </div>

    <div class="mb-3">
        <label for="offerDescription" class="form-label">offer Description</label>
        <textarea class="form-control" name="description" id="offerDescription" rows="8">{{$offer->description}}</textarea>
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-primary"><i class="fa-solid fa-file-pen"></i> Update offer </button>
    </div>
</form>
@endsection