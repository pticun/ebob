@extends('admin.layout.master')

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title ">{{$page_title}}</h3>
                <div class="tile-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover order-column" id="">
                            <thead>
                            <tr>
                                <th>Username</th>
                                <th>#TRX</th>
                                <th>Gateway</th>
                                <th>Amount</th>
                                <th>Status</th>
                                <th>Date</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($deposits as $data)
                                <tr>
                                    <td>
                                        <a href="{{route('user.single', $data->user->id)}}">
                                            {{$data->user->username}}
                                        </a>
                                    </td>

                                    <td>{{$data->trx}}</td>
                                    <td>{{$data->gateway->name}}</td>
                                    <td><strong>{{$data->amount}} {{$basic->currency}}</strong></td>
                                    <td>
                                        @if($data->status == 1)
                                            <span class="badge badge-success"> Completed </span>
                                        @else
                                            <span  class="badge badge-warning">Pending </span>
                                        @endif
                                    </td>
                                    <td>
                                        {{$data->updated_at}}
                                    </td>
                                </tr>
                            @endforeach
                            <tbody>
                        </table>

                        {!! $deposits->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection