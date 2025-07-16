@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h1 class="mb-4">Contact Us</h1>

    {{-- رسالة نجاح --}}
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    {{-- نموذج التواصل --}}
    <form method="POST" action="{{ route('contact.submit') }}">
        @csrf

        {{-- الاسم --}}
        <div class="mb-3">
            <label for="name" class="form-label">Full Name</label>
            <input type="text" name="name" class="form-control" value="{{ old('name') }}">
            @error('name')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        {{-- البريد الإلكتروني --}}
        <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
            <input type="email" name="email" class="form-control" value="{{ old('email') }}">
            @error('email')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        {{-- العنوان --}}
        <div class="mb-3">
            <label for="subject" class="form-label">Subject</label>
            <input type="text" name="subject" class="form-control" value="{{ old('subject') }}">
            @error('subject')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        {{-- الرسالة --}}
        <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea name="message" class="form-control" rows="4">{{ old('message') }}</textarea>
            @error('message')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        {{-- زر الإرسال --}}
        <button type="submit" class="btn btn-primary">Send Message</button>
    </form>
</div>
@endsection
