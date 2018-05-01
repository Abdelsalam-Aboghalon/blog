@extends('layouts.app')


@section('content')



    <div class="container" style="width:700px; margin:0 auto;font-size: 15px;text-align: center">
        <form method="POST" action="update">
            {{ csrf_field() }}
        <table class="table table-striped" style="width: 700px;" >

            <tr>
                <th style="text-align: center">Edit Article</th>
                <th style="text-align: center" colspan="2">{{$art->title}}</th>
            </tr>

                <tr>
                    <td style="text-align: left">
              <textarea rows="4" cols="50"  name="body" class="form-control">
                  {{$art->body}}
              </textarea>

                    </td>
                    <td style="width: 50px">

                        <button class="btn btn-outline-danger" type="submit">Edit</button>
                    <td style="width: 50px"><a  href="#" class="btn btn-outline-warning pull-right">Cancel</a></td>
                </tr>


        </table>
        </form>

    </div>


@endsection