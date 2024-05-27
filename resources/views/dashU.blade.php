@extends('profileuser')

@section('content')
    <div class="dashboard-content">
        <div class="dashboard-content">
            @include('partials.searchResults', ['penggunas' => $penggunas])
        </div>
    </div>
@endsection
