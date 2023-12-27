@extends('/fosrams.layout.app')
@section('content')
    {{-- {{ dd($states) }} --}}
    <div class="content-wrapper">

        <form class="form-sample" action="{{ route('branchMaster') }}" method="post" autocomplete="off">
        @method('get')
        @csrf
            <div class="row">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">

                        @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif
                        {{-- {{ dd($data) }} --}}
                            
                            <div class="row" style="margin-bottom: -20px;">
                            <div class="col-md-6">
                                <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Branch Code</label>
                                <div class="col-sm-9">
                                    <input type="text" name="branchCode" id="branchCode" value="JHS098" class="form-control @error('branchCode') is-invalid @enderror"  disabled/>
                                    @error('branchCode')
                                        <p class="invalid-feedback">{{ $message }}</p>
                                    @enderror
                                </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Branch Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="branchName" class="form-control @error('branchName') is-invalid @enderror" value="MMM Info" disabled>
                                    </div>
                                </div>
                            </div>
                            </div>
                            
                            <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                <label class="col-sm-3 col-form-label">State</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="" value="Palakkad" id="" disabled>                                    
                                </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                <label class="col-sm-3 col-form-label">City</label>
                                <div class="col-sm-9">
                                    <input type="text" name="city" class="citySelect form-control @error('city') is-invalid @enderror" value="Palakkad" disabled>
                                </div>
                                </div>
                            </div>
                            </div>

                            <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Address</label>
                                <div class="col-sm-9">
                                    <textarea name="address" rows="3" class="form-control @error('address') is-invalid @enderror" disabled>{{ old('address') }}Chalakudy muncipality</textarea>
                                </div>
                            </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Pincode</label>
                                <div class="col-sm-9">
                                    <input type="number" name="pincode" onkeypress="return isNumber(event)" value="697112" class="form-control @error('pincode') is-invalid @enderror" disabled/>
                                </div>
                                </div>
                            </div>
                            </div>
                                
                            <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Zone</label>
                                    <div class="col-sm-9">
                                    <input type="text" name="zone" value="Zone" class="form-control @error('zone') is-invalid " @enderror id="" disabled>
                                </div>
                                </div>
                            </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </form>
    </div>

@endsection