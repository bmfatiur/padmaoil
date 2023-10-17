@extends('backend.layouts.master')

@section('title') Token Create @endsection
@push('admin_style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css" integrity="sha512-In/+MILhf6UMDJU4ZhDL0R0fEpsp4D3Le23m6+ujDWXwl3whwpucJG1PEmI3B07nyJx+875ccs+yX2CqQJUxUw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endpush

@section('admin_content')
<div class="row">
    <h1>Token Create Form</h1>
    <div class="col-12">
        <div class="d-flex justify-content-start">
            <a href="{{ route('coupon2.index') }}" class="btn btn-primary">
                <i class="fas fa-backward"></i>
                Back to Tokens
            </a>
        </div>
    </div>

    <div class="col-12 mt-5">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('coupon2.store') }}" method="post">
                    @csrf

                    <div class="mb-3">
                        <label for="coupon-name" class="form-label">Coupon Name</label>
                        <input type="text" value="{{ Str::random(10) }}" name="coupon_name" class="form-control @error('coupon_name')
                            is-invalid
                        @enderror" id="">
                        @error('coupon_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="amount" class="form-label">Amount</label>
                        <input type="number" min="1" name="amount" class="form-control @error('amount')
                            is-invalid
                        @enderror" placeholder="enter amount" id="">
                        @error('amount')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3 form-check form-switch">
                        <input class="form-check-input" name="isActive" type="checkbox" role="switch" id="activeStatus" checked>
                        <label class="form-check-label" for="activeStatus">Active or Inactive</label>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mt-5">
                        <button type="submit" class="btn btn-success">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('admin_script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js" integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $('.dropify').dropify();
</script>
@endpush
