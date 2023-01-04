@php
    $title = "tabechon | 大分県最大のカレーポータルメディア";
@endphp
    <!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | {{$title}}</title>
    <link rel="stylesheet" href="{{asset('/css/common.css').'?nc='.date('YmdHis')}}">
    <x-head-meta></x-head-meta>
</head>
<body>
<x-header :title="$title"></x-header>
<x-sidebar></x-sidebar>
<div class="container">
    <div class="content_wrap bigpad">
        @yield('content')
    </div>
</div>
{{--@component('components.footer')--}}
</body>
</html>
