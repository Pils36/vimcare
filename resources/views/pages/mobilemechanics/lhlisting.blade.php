@extends('layouts.app')


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
                <h3> Licence Holders Listing </h3>
                <ul>
                    <li>
                        <a href="{{ route('Licence Holders') }}">Home</a>
                    </li>
                    <li>
                        <i class='bx bxs-chevron-right'></i>
                    </li>
                    <li> Licence Holders Listing </li>
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
                                        <td>Business Name</td>
                                        <td>Email</td>
                                        <td>Telephone</td>
                                        <td>City</td>
                                        <td>State/Province</td>
                                        <td># of Licence Available</td>
                                        <td>Action</td>
                                    </tr>
                                </thead>
                                <tbody>

                                    @if (count($data['licenceHolderList']) > 0)
                                    @php
                                        $i = 1;
                                    @endphp
                                        @foreach ($data['licenceHolderList'] as $licenceholderList)
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td>{{ ($licenceholderList->station_name != null) ? $licenceholderList->station_name : $licenceholderList->name }}</td>
                                                <td>{{ $licenceholderList->email }}</td>
                                                <td>{{ ($licenceholderList->phone_number != null) ? $licenceholderList->phone_number : "N/A"  }}</td>
                                                <td>{{ ($licenceholderList->city != null) ? $licenceholderList->city : "N/A" }}</td>
                                                <td>{{ ($licenceholderList->state != null) ? $licenceholderList->state : "N/A" }}</td>
                                                <td>
                                                    -
                                                </td>
                                                <td>
                                                    <a href="#" type="button" class="btn btn-info">Join Team</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="8" align="center">No record</td>
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
