@extends('main')
@section('content')
<div class="col-md-12">
    <h2>Details of {{$singleData->fname}}</h2> <hr>

</div>
<div class="col-md-12">
    <table class="table table-bordered">
        <tr>
            <th>Name</th>
            <td>{{$singleData->fname}}</td>
        </tr>

        <tr>
            <th>Email</th>
            <td>{{$singleData->email}}</td>
        </tr>
    </table>
</div>
@endsection