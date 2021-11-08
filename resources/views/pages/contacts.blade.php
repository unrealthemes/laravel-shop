@extends('layouts.main-layout')

@section('title', 'Contacts')

@section('content')

    @include('includes.breadcrumbs')

    <!-- Contact form -->

    <div class="container">
        <div class="contact-form medium-padding120">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="heading">
                        <h4 class="heading-title">Have You Any Questions?</h4>
                        <div class="heading-line">
                            <span class="short-line"></span>
                            <span class="long-line"></span>
                        </div>
                        <p class="heading-text">Please contact us using the form and we’ll get back to you as soon as possible.</p>
                    </div>
                </div>
            </div>

            <form class="contact-form contactsJs" method="POST" action="{{route('submitContactsForm')}}">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <input name="permalink" class="email input-standard-grey" placeholder="Website URL" type="text">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <input name="name" class="email input-standard-grey" placeholder="Your Name" type="text">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <input name="email" class="email input-standard-grey" placeholder="Email Address" type="email">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <input name="phone" class="email input-standard-grey" placeholder="Phone" type="text">
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <textarea name="message" class="email input-standard-grey" placeholder="Details"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="submit-block table">
                        <div class="col-lg-3 table-cell">
                            <button class="btn btn-small btn--primary" type="submit">
                                <span class="text">Submit Now</span>
                            </button>
                        </div>
                        <div class="col-lg-5 table-cell">
                            <div class="submit-block-text">
                                Please, let us know any particular things to check and the best time
                                to contact you by phone (if provided).
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- End Contact form -->

@endsection

@section('custom_js')
  <script>
    $(document).ready( function() {

        $('.contactsJs').submit( function(e) {
            e.preventDefault();
            var form = $(this);
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{route('submitContactsForm')}}",
                type:"POST",
                data: form.serialize(),
                success:function( response ) {

                    $('.alert').remove();

                    if ( response.success ) {
                        form.append(
                            '<div class="alert alert-success" role="alert">' +
                                '<strong>' + response.success + '</strong>' +
                            '</div>'
                        );
                    }

                    if ( response.error ) {
                        $.each( response.error, function( index, value ) {
                            form.append(
                                '<div class="alert alert-danger" role="alert">' +
                                    '<strong>' + value + '</strong>' +
                                '</div>'
                            );
                        });
                    }
                },
            });
        });

    });
  </script>
@endsection