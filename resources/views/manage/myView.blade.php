

@extends('layouts.app')
@section('content')



    <div class="container" style="width:700px; margin:0 auto;font-size: 15px;text-align: center">
        <table class="table table-striped" style="width: 700px;" >

            <tr>
                <th style="text-align: center">Article Title</th>
                <th style="text-align: center" colspan="2">Function</th>
            </tr>
            @foreach($articles as $art)

                <tr>
                    <td style="text-align: center"><a style="padding-right: 150px;padding-left: 150px" href="{{ "/read/".$art->id}}"class="btn btn-outline-primary">{{$art->title}}</a></td>
                    <td style="width: 50px"><a href="myView/{{ $art->id }}/delete" class="btn btn-outline-warning pull-right">Delete</a></td>
                    <td style="width: 50px"><a  href="myView/{{$art->id }}/edit" class="btn btn-outline-warning pull-right">Update</a></td>
                </tr>

            @endforeach

        </table>

        <a style="text-align: center" class="btn btn-outline-danger pull-right" href="add">Add new article</a>
    </div>
@endsection


