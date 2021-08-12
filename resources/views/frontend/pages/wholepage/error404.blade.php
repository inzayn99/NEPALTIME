@extends('frontend.master.master')

@section('content')

    <!-- partial -->
    </div>
    </header>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="error-wrap">
                    <div class="error-title">
                        404 • Page not found
                    </div>
                    <p class="fs-15">
                        Oops! The page you are looking for does not exist. It might have
                        been moved or deleted. Try a search below...
                    </p>

                    <div class="search-container">
                        <input type="text" placeholder="Search.." name="search" />
                        <button type="submit"><i class="mdi mdi-magnify"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- container-scroller ends -->
@endsection
