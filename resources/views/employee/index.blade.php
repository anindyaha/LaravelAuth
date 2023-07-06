@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="row mb-0">
            <div class="col-lg-9 col-xl-10">
                {{-- Kode ini Mendefinisikan variabel $pageTitle yang dilewatkan dari kontroler.  --}}
                <h4 class="mb-3">{{ $pageTitle }}</h4>
            </div>
            <div class="col-lg-3 col-xl-2">
                <div class="d-grid gap-2">
                    {{-- link haref untuk mengarahkan ke route employees dan diteruskan ke kontroler lalui ke view
                        folder employees lalu ke file create --}}
                    <a href="{{ route('employees.create') }}" class="btn btn-primary">Create Employee</a>
                </div>
            </div>
        </div>
        <hr>
        <div class="table-responsive border p-3 rounded-3">
            {{-- Tabel untuk menampilkan data karyawan --}}
            <table class="table table-bordered table-hover table-striped mb-0 bg-white">
                <thead>
                    {{--  Baris header tabel --}}
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Age</th>
                        <th>Position</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    {{-- Looping melalui setiap karyawan dalam data employees  --}}
                    @foreach ($employees as $employee)
                        {{-- Kolom untuk menampilkan nama depan karyawan  --}}
                        <tr>
                            {{-- Kolom untuk menampilkan nama depan karyawan  --}}
                            <td>{{ $employee->firstname }}</td>
                            {{-- Kolom untuk menampilkan nama belakang karyawan --}}
                            <td>{{ $employee->lastname }}</td>
                            {{-- Kolom untuk menampilkan email karyawan --}}
                            <td>{{ $employee->email }}</td>
                            {{-- Kolom untuk menampilkan usia karyawan --}}
                            <td>{{ $employee->age }}</td>
                            {{-- Kolom untuk menampilkan posisi karyawan --}}
                            <td>{{ $employee->position->name }}</td>
                            <td>
                                {{-- ACTIONS SECTION --}}
                                @include('employee.actions')
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
