@extends('layouts.app')
@section('content')
@if (count($students) > 0)
<h2>Kết quả tìm kiếm:</h2>
<ul>
               @foreach ($students as $student)
               <li>{{ $student->surname }}</li>
               <li>{{$student->givenname}}</li>
               @endforeach
</ul>
@else
<p>Không tìm thấy kết quả phù hợp</p>
@endif
@endsection