@extends('layouts.licenceholder.app')


@section('content')

@php
    $pages = 'Sign Up';
@endphp

<style>
    #manadatory_tools{
        height: 200px;
    }
    small, .reqfield{
        font-weight: bold;
        font-size: 14px;
        color: red;
    }
    label{
        font-weight: bold;
    }
</style>


    <div class="inner-banner inner-bg8">
        <div class="container">
            <div class="inner-title text-center">
                <h3> Mobile Mechanics Listing </h3>
                <ul>
                    <li>
                        <a href="{{ route('Licence Holders') }}">Home</a>
                    </li>
                    <li>
                        <i class='bx bxs-chevron-right'></i>
                    </li>
                    <li> Mobile Mechanics Listing </li>
                </ul>
            </div>
        </div>
    </div>


    <div class="sign-up-area pt-100 pb-70">
        <div class="container">
            <div class="row pt-45">
                <div class="col-lg-12">
                    <div class="user-all-form">
                        <div class="table table-responsive">
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <td>SN</td>
                                        <td>Name</td>
                                        <td>Email</td>
                                        <td>Station</td>
                                        <td>Telephone</td>
                                        <td>Skill Profile</td>
                                        <td>Skill Rating</td>
                                        <td>City</td>
                                        <td>State/Province</td>
                                        <td>Action</td>
                                    </tr>
                                </thead>
                                <tbody>

                                    @if (count($data['mechanicList']) > 0)
                                    @php
                                        $i = 1;
                                    @endphp
                                        @foreach ($data['mechanicList'] as $mechanicList)
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td>{{ $mechanicList->name }}</td>
                                                <td>{{ $mechanicList->email }}</td>
                                                <td>{{ ($mechanicList->station_name != null) ? $mechanicList->station_name : "N/A" }}</td>
                                                <td>{{ ($mechanicList->phone_number != null) ? $mechanicList->phone_number : "N/A"  }}</td>
                                                <td>
                                                    <a href="{{ route('MM Skill Set', $mechanicList->id) }}">View Skill</a>
                                                </td>
                                                <td>
                                                    <a href="#">View Rating</a>
                                                </td>
                                                <td>{{ ($mechanicList->city != null) ? $mechanicList->city : "N/A" }}</td>
                                                <td>{{ ($mechanicList->state != null) ? $mechanicList->state : "N/A" }}</td>
                                                <td>
                                                    <a href="#" type="button" class="btn btn-info">Assign Job</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="10" align="center">No record</td>
                                        </tr>
                                    @endif

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection
