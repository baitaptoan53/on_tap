@extends('layouts.app')

@section('content')
<div class="row">
               <div class="col-md-6 offset-md-3">
                              <h2>Create Student</h2>
                              <form method="POST" action="{{ route('students.store') }}">
                                             @csrf
                                             <div class="form-group">
                                                            <label for="name">surname</label>
                                                            <input type="text" name="surname" class="form-control"
                                                                           id="name" placeholder="surname">
                                             </div>
                                             <div class="form-group">
                                                            <label for="name">givenname</label>
                                                            <input type="text" name="givenname" class="form-control"
                                                                           id="name" placeholder="givenname">
                                             </div>
                                             <div class="form-group">
                                                            <label for="date_of_birth">Date of birth</label>
                                                            <input type="date" name="date_of_birth" class="form-control"
                                                                           id="name" placeholder="date_of_birth">
                                             </div>
                                             <div class="form-group">
                                                            <label for="date_of_birth"> Yearenrolled
                                                            </label>
                                                            <input type="number" name="yearenrolled" min="2000"
                                                                           max="2020">
                                             </div>
                                             <div class="form-group">
                                                            <label for="date_of_birth"> program_id
                                                            </label>
                                                            <select name="program_id" id="program_id">
                                                            @foreach ($programs as $program)
                                                            <option value="{{ $program->id }}">{{ $program->id }}  {{ $program->name }}</option>
                                                            @endforeach
                                                            </select>
                                             </div>
                                             <button type="submit" class="btn btn-primary">Create</button>
                              </form>
               </div>
</div>
@endsection