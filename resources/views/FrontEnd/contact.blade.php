@extends('FrontEnd.layout.main')
@push('title')
<title>RGU | Contact</title>
@endpush
@section('main-section')

{{-- section1 --}}
<section>
  <div class="col-12">
    <img src="{{ asset('images/rgu1.jpeg') }}" class="img-fluid w-100" alt="Descriptive text" style="height: 30vh;">
  </div>
</section>
{{-- /section1 --}}


{{-- section 2 --}}
<div class="container my-5">
    <h2 class="text-center mb-4">Contact Us</h2>
    <div class="row justify-content-center">
      <div class="col-lg-8 col-md-10">
        <form>
          <div class="mb-3">
            <label for="name" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="name" placeholder="Rupjyoti Sarma" required>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
            <input type="email" class="form-control" id="email" placeholder="example@student.edu" required>
          </div>
          <div class="mb-3">
            <label for="phone" class="form-label">Phone Number</label>
            <input type="tel" class="form-control" id="phone" placeholder="9957XXXX80" required>
          </div>
          <div class="mb-3">
            <label for="subject" class="form-label">Subject</label>
            <select id="subject" class="form-select" required>
              <option value="" disabled selected>Select a subject</option>
              <option value="admissions">Admissions</option>
              <option value="academic">Academic Inquiry</option>
              <option value="financial">Financial Aid</option>
              <option value="other">Other</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea id="message" class="form-control" rows="4" placeholder="Your message here..." required></textarea>
          </div>
          <button type="submit" class="btn btn-primary w-100">Send Message</button>
        </form>
      </div>
    </div>
  </div>
{{-- /section 2 --}}


@endsection

