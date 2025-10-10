@extends('layouts.app')

@section('content')



        <div id="main">
           

            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Form Layout</h3>
                            <p class="text-subtitle text-muted">Multiple form layout you can use</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Form Layout</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>

                <!-- // Basic multiple Column Form section start -->
                <section id="multiple-column-form">
                    <div class="row match-height">
                        <div class="col-12">
                            <div class="card">
                                {{-- <div class="card-header">
                                    <h4 class="card-title">Multiple Column</h4>
                                </div> --}}
                                <div class="card-content">
                                    <div class="card-body">
                                       <form action="{{ route('authors.update', $author->id) }}" method="POST">
        @csrf
        @method('PUT')

                                            <div class="row">
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="first-name-column">First Name</label>
                                                        <input type="text" id="first-name-column" class="form-control"
                                                            placeholder="First Name" name="fname"   value="{{ old('fname', $author->fname) }}" >
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="last-name-column">Last Name</label>
                                                        <input type="text" id="last-name-column" class="form-control"
                                                            placeholder="Last Name" name="lname" value="{{ old('lname', $author->lname) }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="city-column">Sex</label>
                                                        <select type="text" id="city-column" class="form-control"
                                                            name="gender" value="{{ old('gender', $author->gender) }}">

                                                            <option>Select Gender</option>
                                                            <option>Male</option>
                                                            <option>Female</option>


                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="address">Address</label>
                                                        <input type="text" id="address" class="form-control"
                                                            name="address"value="{{ old('address', $author->address) }}">
                                                    </div>
                                                </div>


                                                 <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="category">Category</label>
                                                        <select type="text" class="form-control"
                                                            name="category" value="{{ old('category', $author->category) }}">

                                                            <option>Selete one</option>
                                                              <option>Love</option>
                                                                <option>Environment</option>
                                                                  <option>History</option>



                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="phone">Phone</label>
                                                       <input type="text" class="form-control"
                                                            name="phone" value="{{ old('phone', $author->phone) }}" >
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="email-id-column">Email</label>
                                                        <input type="email" id="email-id-column" class="form-control"
                                                            name="email" placeholder="Email" value="{{ old('email', $author->email) }}">
                                                    </div>
                                                </div>
                                                {{-- <div class="form-group col-12">
                                                    <div class='form-check'>
                                                        <div class="checkbox">
                                                            <input type="checkbox" id="checkbox5"
                                                                class='form-check-input' checked>
                                                            <label for="checkbox5">Remember Me</label>
                                                        </div>
                                                    </div>
                                                </div> --}}
                                                <div class="col-12 d-flex justify-content-end">
                                                    <button type="submit"
                                                        class="btn btn-primary me-1 mb-1">Submit</button>
                                                    <button type="reset"
                                                        class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Basic multiple Column Form section end -->
            </div>
@endsection