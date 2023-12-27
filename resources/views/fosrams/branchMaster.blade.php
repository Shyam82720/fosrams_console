@extends('/fosrams.layout.app')
@section('content')
    
    <div class="content-wrapper">
        <div class="d-flex">
        <h3>Branch Master</h3>
            <a href="{{ url('fosrams/branchForm') }}" type="button" class="create-btn btn btn-info btn-rounded btn-fw btn-sm d-flex align-items-center ml-auto"><i class="ti-plus btn-icon-append mr-2"></i><span>Create Branch</span></a>
        </div>

        <div class="row mt-3">
            <div class="col-lg-12 grid-margin stretch-card">
                
                <div class="card">
                    <div class="card-body mt-3">

                    {{-- MESSAGE --}}
                    @if (session('delete'))
                    <div class="alert alert-danger mb-2">
                        {{ session('delete') }}
                    </div>
                    @endif
                    @if (session('error'))
                    <div class="alert alert-warning mb-2">
                        {{ session('error') }}
                    </div>
                    @endif
                    @if (session('success'))
                    <div class="alert alert-success mb-2">
                        {{ session('success') }}
                    </div>
                    @endif

                    <div class="m-0 p-0">
                        <table class="table table-striped table-responsive" id="data-table">
                            <thead>
                            <tr>
                                <th style="width: 2%">
                                S.No
                                </th>
                                <th style="width: 25%">
                                Branch Name
                                </th>
                                <th style="width: 25%">
                                Branch Code
                                </th>
                                <th style="width: 25%">
                                State
                                </th>
                                <th style="width: 25%">
                                    City
                                </th>
                                <th style="width: 25%">
                                    Created On
                                </th>
                                <th style="width: 25%">
                                </th>
                                {{-- <th style="width: 25%">
                                    Address
                                </th>
                                <th style="width: 25%">
                                    Pincode
                                </th>
                                <th style="width: 25%">
                                    Zone
                                </th>
                                <th style="width: 25%">
                                    Created By
                                </th>
                                <th style="width: 25%">
                                    Modified At
                                </th>
                                <th style="width: 25%">
                                    Modified By
                                </th>
                                <th style="width: 25%">
                                </th> --}}
                            </tr>
                            </thead>
                            {{-- {{ dd($data) }} --}}
                            <tbody>
                                <tr>
                                    <td class="py-1">
                                        1
                                    </td>
                                    <td>
                                        MMM Info
                                    </td>
                                    <td>
                                        ST098
                                    </td>
                                    <td>
                                        Kerala
                                    </td>
                                    <td>
                                        Thrissur
                                    </td>
                                    <td>
                                        27-12-2023
                                    </td>
                                    <td class="d-flex justify-content-end" style="align-item:center;gap: 5%">
                                        
                                        <form action="{{ route('branchView') }}" method="post">
                                            @method('get')
                                            @csrf
                                            <button type="submit" class="btn btn-primary btn-fw btn-sm ">
                                                <i class="ti-eye btn-icon-append p-0 m-0"></i>
                                            </button>
                                        </form>

                                        <form action="{{ route('branchEdit') }}" method="post">
                                            @method('get')
                                            @csrf
                                            <button type="submit" class="btn btn-inverse-primary btn-fw btn-sm ">
                                            <i class="ti-pencil-alt btn-icon-append p-0 m-0"></i>
                                            </button>
                                        </form>

                                        <form action="#" method="post">
                                            @method('get')
                                            @csrf
                                            <button onclick="return confirm('Are you sure...')" type="submit" class="btn btn-inverse-danger btn-fw btn-sm m-0">
                                            <i class="ti-trash btn-icon-append p-0 m-0"></i>
                                            </button>
                                        </form>

                                    </td>
                                    {{-- <td>
                                        {{ $branch['address'] }}
                                    </td>
                                    <td>
                                        {{ $branch['pincode'] }}
                                    </td>
                                    <td>
                                        {{ $branch['zone'] }}
                                    </td>
                                    <td>
                                        {{ $branch['created_by'] }}
                                    </td>
                                    <td>
                                        {{ $branch['modified_at'] }}
                                    </td>
                                    <td>
                                        {{ $branch['modified_by'] }}
                                    </td>
                                    <td>
                                    </td> --}}
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection