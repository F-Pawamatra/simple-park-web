@extends('layouts.app')

@section('title', 'Table')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Monitoring Slot Parkir</h1>
            </div>

            <div class="section-body">
                <h2 class="section-title">Daftar Slot Parkir</h2>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Simple</h4>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($slots as $slot)
                                        <tr>
                                            <th scope="row">{{$slot->id}}</th>
                                            <td>{{$slot->name}}</td>
                                            <td>
                                                <div class="badge badge-{{$slot->is_occupied ? "success" : "info"}}">
                                                    {{$slot->is_occupied ? "Occupied" : "Available"}}</div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->

    <!-- Page Specific JS File -->
@endpush
