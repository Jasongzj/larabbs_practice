@extends('layouts.app')

@section('title', $user->name . '的个人中心')

@section('content')
<div class="row">
    <div class="col-log-3 col-md-3 hidden-sm hidden-xs user-info">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="media">
                    <div class="center">
                        <img class="thumbnail img-responsive" src="https://fsdhubcdn.phphub.org/uploads/images/201709/20/1/PtDKbASVcz.png?imageView2/1/w/600/h/600" width="300px" height="300px">
                    </div>
                    <div class="media-body">
                        <hr>
                        <h4><strong>个人简介</strong></h4>
                        <p>Stay Hungry. Stay Foolish.</p>
                        <hr>
                        <h4><strong>注册于</strong></h4>
                        <p>September 04 1993</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <span>
                    <h1 class="panel-title pull-left" style="font-size:30px;">
                        {{ $user->name }} <small>{{ $user->email }}</small>
                    </h1>
                </span>
            </div>
        </div>
        <hr>

        {{-- 用户发布的数据 --}}
        <div class="panel panel-default">
            <div class="panel-body">
                然鹅暂无数据-_-
            </div>
        </div>
    </div>
</div>
@stop