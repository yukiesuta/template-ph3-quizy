@extends('layouts.app')

@section('content')
<div class="container">
    {{-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div> --}}

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table border="1">
                        <tr>
                          <td>東京</td>
                          <td>編集</td>
                          <td>削除</td>
                        </tr>
                        <tr>
                          <td>佐藤</td>
                          <td>編集</td>
                          <td>削除</td>
                        </tr>
                      </table>
                {{-- </div>
            </div>
        </div>
    </div> --}}
</div>
@endsection
