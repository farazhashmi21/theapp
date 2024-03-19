@extends("../base")
@section("content")
        <!-- Content section-->
        <section class="py-5">
            <div class="container my-5">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <form method="GET" name="contact_form" action="">
                            <!-- <div class="mb-3"> -->
                            <input type="hidden" class="form-control" id="csrftoken"aria-describedby="csrftoken" value = "{{ csrf_token() }}"/>
                        <!-- </div> -->
                            <div class="mb-3">
                                <label for="InputName" class="form-label">Your Name:</label>
                                <input type="text" class="form-control" id="name"aria-describedby="name">
                            <div class="mb-3">
                                <label for="InputEmail" class="form-label">Email:</label>
                                <input type="email" class="form-control" id="email">
                            </div>
                            <div class="mb-3">
                                <label for="InputQuery" class="form-label">Message:</label>
                                <textarea class="form-control" id="message"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        @endsection