@extends('layouts.app')


@section('content')
    <div class="container">
<h1>Article Page</h1>

        <div class="form-group">
            <label for="usr"><b>Title:</b></label>
            {{$article->title}}<br>
            <label for="usr"><b>Publish Date:</b></label>
            {{$article->created_at}}<br>
            <label for="usr"><b>Publisher Name:</b></label>
            {{$article->name}}


        </div>
        <div class="form-group">
            <label for="usr"><b>Article Content:</b></label><br>
            {{$article->body}}
        </div>

        <div class="form-group">

            <table class="table table-striped">
                <tr>
                    <td style="text-align: center"><h3><b> Comments</b></h3></td>
                </tr>

                @foreach($article->comments as $c)
                    <tr>
                        <td>
                            @if($c->name=== Auth::user()->name)
                            <h6 style="text-align: right"><a  href="{{$c->id }}/updateC" class="btn btn-outline-warning pull-right">Update</a></h6>
                            @endif
                            <h5 style=" letter-spacing: 3px;">{{$c->name}}</h5><br>

                            {{$c->comment}} <br>
                              <p style="text-align: right">{{$c->created_at}}</p>
                        </td>
                    </tr>
                @endforeach

            </table>

            <form action="/read/{{$article->id}}" method="POST">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="usr"><b>Add New Comment:</b></label>
                    <textarea rows="4" cols="50"  name="body" class="form-control">
              </textarea>
                </div>

                </br>
                <input  type="submit" value="Add Comment" class="btn btn-danger"/>
            </form>
        </div>
    </div>
@endsection