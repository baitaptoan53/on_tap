@extends('layouts.app')

@section('content')
<div class="container">
               <div class="row justify-content-center">
                              <div class="col-md-8">
                                             <div class="card">
                                                            <div class="card-header">{{ __('Edit student') }}</div>

                                                            <div class="card-body">
                                                                           <form method="POST"
                                                                                          action="{{ route('students.update', $student->id) }}">
                                                                                          @csrf
                                                                                          @method('PUT')

                                                                                          <div class="form-group row">
                                                                                                         <label for="surname"
                                                                                                                        class="col-md-4 col-form-label text-md-right">{{
                                                                                                                        __('Name')
                                                                                                                        }}</label>

                                                                                                         <div
                                                                                                                        class="col-md-6">
                                                                                                                        <input id="surname"
                                                                                                                                       type="text"
                                                                                                                                       class="form-control @error('surname') is-invalid @enderror"
                                                                                                                                       name="surname"
                                                                                                                                       value="{{ $student->surname }}"
                                                                                                                                       required
                                                                                                                                       autocomplete="surname"
                                                                                                                                       autofocus>

                                                                                                                        @error('surname')
                                                                                                                        <span class="invalid-feedback"
                                                                                                                                       role="alert">
                                                                                                                                       <strong>{{ $message
                                                                                                                                                      }}</strong>
                                                                                                                        </span>
                                                                                                                        @enderror
                                                                                                         </div>
                                                                                          </div>
                                                                                          <div class="form-group row">
                                                                                                         <label for="givenname"
                                                                                                                        class="col-md-4 col-form-label text-md-right">{{
                                                                                                                        __('Name')
                                                                                                                        }}</label>

                                                                                                         <div
                                                                                                                        class="col-md-6">
                                                                                                                        <input id="givenname"
                                                                                                                                       type="text"
                                                                                                                                       class="form-control @error('givenname') is-invalid @enderror"
                                                                                                                                       name="givenname"
                                                                                                                                       value="{{ $student->givenname }}"
                                                                                                                                       required
                                                                                                                                       autocomplete="givenname"
                                                                                                                                       autofocus>

                                                                                                                        @error('givenname')
                                                                                                                        <span class="invalid-feedback"
                                                                                                                                       role="alert">
                                                                                                                                       <strong>{{ $message
                                                                                                                                                      }}</strong>
                                                                                                                        </span>
                                                                                                                        @enderror
                                                                                                         </div>
                                                                                          </div>

                                                                                          <div class="form-group row">
                                                                                                         <label for="date_of_birth"
                                                                                                                        class="col-md-4 col-form-label text-md-right">{{
                                                                                                                        __('Name')
                                                                                                                        }}</label>

                                                                                                         <div
                                                                                                                        class="col-md-6">
                                                                                                                        <input id="date_of_birth"
                                                                                                                                       type="date"
                                                                                                                                       class="form-control @error('date_of_birth') is-invalid @enderror"
                                                                                                                                       name="date_of_birth"
                                                                                                                                       value="{{ $student->date_of_birth }}"
                                                                                                                                       required
                                                                                                                                       autocomplete="date_of_birth"
                                                                                                                                       autofocus>

                                                                                                                        @error('date_of_birth')
                                                                                                                        <span class="invalid-feedback"
                                                                                                                                       role="alert">
                                                                                                                                       <strong>{{ $message
                                                                                                                                                      }}</strong>
                                                                                                                        </span>
                                                                                                                        @enderror
                                                                                                         </div>
                                                                                          </div>
                                                                                          <div class="form-group row">
                                                                                                         <label for="yearenrolled"
                                                                                                                        class="col-md-4 col-form-label text-md-right">{{
                                                                                                                        __('Name')
                                                                                                                        }}</label>

                                                                                                         <div
                                                                                                                        class="col-md-6">
                                                                                                                        <input id="yearenrolled"
                                                                                                                                       type="number"
                                                                                                                                       class="form-control @error('yearenrolled') is-invalid @enderror"
                                                                                                                                       name="yearenrolled"
                                                                                                                                       value="{{ $student->yearenrolled }}"
                                                                                                                                       required
                                                                                                                                       autocomplete="yearenrolled"
                                                                                                                                       autofocus>

                                                                                                                        @error('yearenrolled')
                                                                                                                        <span class="invalid-feedback"
                                                                                                                                       role="alert">
                                                                                                                                       <strong>{{ $message
                                                                                                                                                      }}</strong>
                                                                                                                        </span>
                                                                                                                        @enderror
                                                                                                         </div>
                                                                                          </div>
                                                                                          <div class="form-group row">
                                                                                                         <label for="program_id"
                                                                                                                        class="col-md-4 col-form-label text-md-right">{{
                                                                                                                        __('Name')
                                                                                                                        }}</label>

                                                                                                         <div
                                                                                                                        class="col-md-6">
                                                                                                                        <select
                                                                                                                                       class="form-control @error('program_id') is-invalid @enderror"
                                                                                                                                       name="program_id"
                                                                                                                                       id="program_id">
                                                                                                                                       @foreach ($programs as
                                                                                                                                       $program)
                                                                                                                                       <option
                                                                                                                                                      value="{{ $program->id }}"
                                                                                                                                                      @if ($program->id ==
                                                                                                                                                      $student->program_id)
                                                                                                                                                      selected
                                                                                                                                                      @endif>{{ $program->name }}
                                                                                                                                       </option>
                                                                                                                                       @endforeach

                                                                                                                        @error('program_id')
                                                                                                                        <span class="invalid-feedback"
                                                                                                                                       role="alert">
                                                                                                                                       <strong>{{ $message
                                                                                                                                                      }}</strong>
                                                                                                                        </span>
                                                                                                                        @enderror
                                                                                                         </div>
                                                                                          </div>

                                                                                          <div
                                                                                                         class="form-group row mb-0">
                                                                                                         <div
                                                                                                                        class="col-md-6 offset-md-4">
                                                                                                                        <button type="submit"
                                                                                                                                       class="btn btn-primary">
                                                                                                                                       {{
                                                                                                                                       __('Update')
                                                                                                                                       }}
                                                                                                                        </button>
                                                                                                                        <a href="{{ route('students.index') }}"
                                                                                                                                       class="btn btn-secondary">
                                                                                                                                       {{
                                                                                                                                       __('Cancel')
                                                                                                                                       }}
                                                                                                                        </a>
                                                                                                         </div>
                                                                                          </div>
                                                                           </form>
                                                            </div>
                                             </div>
                              </div>
               </div>
</div>
@endsection