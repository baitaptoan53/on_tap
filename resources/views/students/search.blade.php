@extends('layouts.app')
@section('content')
@if ($count > 0 )
<h2>Kết quả tìm kiếm:</h2>
<table class="table">
               <thead>
                              <tr>
                                             <th>#</th>
                                             <th>surname</th>
                                             <th>givenname</th>
                                             <th>Data of birth</th>
                                             <th>Yearenrolled</th>
                              </tr>
               </thead>
               <tbody>
                              @foreach ($students as $student)
                              <tr>
                                             <td>{{ $student->id }}</td>
                                             <td>{{ $student->surname }}</td>
                                             <td>{{ $student->givenname }}</td>
                                             <td>{{ $student->date_of_birth }}</td>
                                             <td>{{ $student->yearenrolled }}</td>
                              </tr>
                              @endforeach
               </tbody>
</table>
@else
<p>Không tìm thấy kết quả phù hợp</p>
@endif

@endsection