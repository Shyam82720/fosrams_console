@extends('/fosrams.layout.app')
@section('content')
    {{-- {{ dd($states) }} --}}
    <div class="content-wrapper">

        <form class="form-sample" action="#" method="post" autocomplete="off">
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
                            
                            <div class="row" style="margin-bottom: -20px">
                            <div class="col-md-6">
                                <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Branch Code<span class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <input type="text" name="branchCode" id="branchCode" value="{{ old('branchCode') }}" class="form-control @error('branchCode') is-invalid @enderror"  required/>
                                    @error('branchCode')
                                        <p class="invalid-feedback">{{ $message }}</p>
                                    @enderror
                                </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Branch Name<span class="text-danger">*</span></label>
                                    <div class="col-sm-9">
                                        <input type="text" name="branchName" class="form-control @error('branchName') is-invalid @enderror" value="{{old('branchName')}}" required>
                                        @error('branchName')
                                            <p class="invalid-feedback">
                                            {{ $message }}
                                            </p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            </div>
                            
                            <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                <label class="col-sm-3 col-form-label">State<span class="text-danger dark-select">*</span></label>
                                <div class="col-sm-9">
                                    <select name="state" class="stateSelect form-control dark-select search" id="stateSelect" required>
                                    @if (!empty($states))
                                        <option value="" disabled selected hidden>Choose</option>
                                        @foreach ($states as $item)
                                            <option value="{{ $item['state_id'] }}"{{ old('state') == $item['state_id'] ? 'selected' : '' }}>{{ $item['state_name'] }}</option>
                                        @endforeach
                                    @endif
                                    </select>
                                    @error('state')
                                        <p class="invalid-feedback">
                                        {{ $message }}
                                        </p>
                                    @enderror
                                </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                <label class="col-sm-3 col-form-label">City<span class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <input type="text" name="city" class="citySelect form-control @error('city') is-invalid @enderror" value="{{ old('city') }}" required>
                                    @error('city')
                                        <p class="invalid-feedback">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>
                                </div>
                            </div>
                            </div>

                            <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Address<span class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <textarea name="address" rows="3" class="form-control @error('address') is-invalid @enderror" required>{{ old('address') }}</textarea>
                                    @error('address')
                                        <p class="invalid-feedback">
                                        {{ $message }}
                                        </p>
                                    @enderror
                                </div>
                            </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Pincode<span class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <input type="number" name="pincode" onkeypress="return isNumber(event)" value="{{ old('pincode') }}" class="form-control @error('pincode') is-invalid @enderror" required/>
                                    @error('pincode')
                                        <p class="invalid-feedback">
                                        {{ $message }}
                                        </p>
                                    @enderror
                                </div>
                                </div>
                            </div>
                            </div>
                                
                            <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Zone<span class="text-danger">*</span></label>
                                    <div class="col-sm-9">
                                    <input type="text" name="zone" value="{{ old('zone') }}" class="form-control @error('zone') is-invalid " @enderror id="" required>
                                    @error('zone')
                                        <p class="invalid-feedback">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>
                                </div>
                            </div>
                            </div>

                            <div class="d-flex ">
                            <a onclick="return confirm('Are you sure you want to exit')" class="btn btn-danger d-flex ml-auto mr-4" href="{{ route('branchMaster') }}">Cancel</a>
                            <button class="btn btn-primary d-flex" type="submit">Create</button>
                            </div>
                            
                        </div>
                    </div>
                </div>

            </div>
        </form>
    </div>

@endsection