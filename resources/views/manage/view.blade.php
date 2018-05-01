

@extends('layouts.app')


@section('content')

    <div class="container" style="width:600px; margin:0 auto;font-size: 15px; text-align: center">
        <table class="table table-striped" style="width: 500px;" >

            <tr>
                <th style="text-align: center">Article Title</th>
                <th style="text-align: center" >Publisher</th>
            </tr>
            @foreach($articles as $art)

                <tr>
                    <td style="text-align: center"><a  class="btn btn-outline-primary" style="padding-left: 150px;padding-right: 150px;" href="{{ "/read/".$art->id}}">{{$art->title}}</a></td>
                    <td style="width: 50px"><a href="{{ "/read/".$art->id}}" class="btn btn-outline-warning pull-right">{{$art->name}}</a></td>
                </tr>

            @endforeach

        </table>

        <a style="text-align: center" class="btn btn-outline-danger pull-right" href="add">Add new article</a>
    </div>



@endsection


