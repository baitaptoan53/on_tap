@extends('layouts.app')

@section('title', 'students')

@section('content')
<div class="row">
               <div class="col-md-12">
                              <h2>students</h2>
                              <a href="{{ route('students.create') }}" class="btn btn-primary mb-3">Create student</a>
                              <table class="table">
                                             <thead>
                                                            <tr>
                                                                           <th>#</th>
                                                                           <th>surname</th>
                                                                           <th>givenname</th>
                                                                           <th>Data of birth</th>
                                                                           <th>Yearenrolled</th>
                                                                           <th>Program ID</th>
                                                                           <th>Actions</th>
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
                                                                           <td>{{ $student->program_id }}</td>
                                                                           <td>
                                                                                          <a href="{{ route('students.edit', $student->id) }}"
                                                                                                         class="btn btn-primary">Edit</a>
                                                                                          <form action="{{ route('students.destroy', $student->id) }}"
                                                                                                         method="POST"
                                                                                                         class="d-inline">
                                                                                                         @csrf
                                                                                                         @method('DELETE')
                                                                                                         <button type="submit"
                                                                                                                        class="btn btn-danger">Delete</button>
                                                                                          </form>
                                                                           </td>
                                                            </tr>
                                                            @endforeach
                                             </tbody>
                              </table>
               </div>
</div>
@endsection