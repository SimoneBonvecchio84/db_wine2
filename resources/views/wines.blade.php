@extends('layouts.app')

@section('content')
    <h2 class="text-center py-5
    ">Lista Vini Rossi</h2>
    <div class="container">

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col"><h3>ID</h3></th>
                    <th scope="col"><h3>Winary</h3></th>
                    <th scope="col"><h3>Wine</h3></th>
                    <th scope="col"><h3>Image</h3></th>
                    <th scope="col"><h3>Rating</h3></th>
                    <th scope="col"><h3>Location</h3></th>
                </tr>
            </thead>
            @foreach ($wines as $curWine)
                <tbody>
                    <tr>
                        <th scope="row"><h3>{{$curWine->id }}</h3></th>
                        <td><h3>{{ $curWine->winery }}</h3></td>
                        <td><h3>{{ $curWine->wine }}</h3></td>
                        <td><img src="{{ $curWine->image }}" class="w-25" alt="{{ $curWine->wine }}"></td>
                        <td><h3>{{ $curWine->rating }}</h3></td>
                        <td><h3>{{ $curWine->location }}</h3></td>
                    </tr>
                </tbody>

                

               
            @endforeach

        </table>
    </div>
@endsection
