@extends('layouts.app')

@section('content')

<div class="border border-secondary mx-3 rounded">
    <div class="">
    @foreach($fullnames as $fullname)
        <li class="list-group-item ">
            <a class="text-dark" href="{{ route('name.info', [ 'id' => $fullname['Firstname']->ID, 'type' => 'Firstname' ]) }}">
              {{$fullname['Firstname']->Firstname}}
            </a>

            <a class="text-dark" href="{{ route('name.info', [ 'id' => $fullname['Surname']->ID, 'type' => 'Surname' ]) }}">
              {{$fullname['Surname']->Surname}}
            </a>
        </li>
@endforeach  
    </div>
  </div>

<!-- Form-->
<form class="m-3 border border-secondary rounded" method= "POST" action="{{ route('names.get') }}">
@csrf

<!-- Gender -->
    <div class="form-group p-3">
        <label for="gender"> Number of names </label>
        <select class="form-control" id="gender" name="gender">
            <option> Female </option>
            <option> Male </option>
            <option> Neutral </option>
        </select>
    </div>
<!-- End of Gender -->

<!-- Amount of Names -->
    <div class="form-group p-3">
        <label for="amount"> Number of names </label>
        <select class="form-control" id="amount" name="amount">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select>
    </div>
    <!-- End of Amount of Names -->

    <!-- Submit Button -->
    <div class="d-flex justify-content-center pb-3">
      <input class="btn btn-secondary" type="submit" value="Submit">
    </div>
    <!-- End of Submit Button -->

</form>
<!-- End of Form -->

@endsection