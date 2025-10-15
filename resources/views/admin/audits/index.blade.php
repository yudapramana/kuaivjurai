@extends('layouts.admin.master')
@section('title', 'Gallery List')


@section('_styles')
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.bootstrap5.min.css">

<style>
    .profile .profile-edit img {
        max-width: 120px;
    }

    #profile_photo_src {
        max-width: 120px;
    }

    .profile-edit {
        max-width: 120px;
    }

    .preserveLines {
        white-space: pre-wrap;
    }

    table {
        font-size: 0.8em !important;
    }

    .table>:not(caption)>*>* {
        padding-top: 0 !important;
        padding-right: 0.5em;
        padding-bottom: 0 !important;
        padding-left: 0.5em;
        background-color: var(--bs-table-bg);
        border-bottom-width: 1px;
        box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);
    }

</style>
@endsection





@section('content')

<main id="main" class="main">
    <div class="pagetitle">
        <h1>{{ $title }}</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">{{ $br1 }}</a></li>
                <li class="breadcrumb-item active">{{ $br2 }}</li>
            </ol>
        </nav>
    </div>
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Daftar Audit Perubahan Data</h5>

                        <table class="table" style="width:100%; font-size:11pt!important;table=layout:fixed;">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Model</th>
                                    <th scope="col">Action</th>
                                    <th scope="col">User</th>
                                    <th scope="col">Time</th>
                                    <th scope="col">Old Values</th>
                                    <th scope="col">New Values</th>
                                </tr>
                            </thead>
                            <tbody id="audits">
                                @foreach($audits as $audit)
                                <tr>
                                    <td>{{ $audit->auditable_type }} (id: {{ $audit->auditable_id }})</td>
                                    <td>{{ $audit->event }}</td>
                                    <td>{{ $audit->user->name }}</td>
                                    <td>{{ $audit->created_at }}</td>
                                    <td>
                                        @if($audit->old_values)
                                        <table class="table">
                                            @foreach($audit->old_values as $attribute => $value)
                                            <tr>
                                                <td><b>{{ $attribute }}</b></td>
                                                <td>{{ $value }}</td>
                                            </tr>
                                            @endforeach
                                        </table>
                                        @endif
                                    </td>
                                    <td>
                                        @if($audit->new_values)
                                        <table class="table">
                                            @foreach($audit->new_values as $attribute => $value)
                                            <tr>
                                                <td><b>{{ $attribute }}</b></td>
                                                <td>{{ $value }}</td>
                                            </tr>
                                            @endforeach
                                        </table>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('admin.audits._modal')


</main>




@endsection


@section('_scripts')

@endsection
