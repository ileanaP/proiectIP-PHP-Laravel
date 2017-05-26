@extends('layouts.home')
@section('content')

    @include('layouts.organizerList')

    <div class="top-content">

        <div class="inner-bg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3 form-box">
                        <div class="form-top">
                            <div class="form-top-left">
                                <h3>Adauga un alt user in categoria organizatori:</h3>
                            </div>
                        </div>
                        <div class="form-bottom">
                            <form role="form" action="{{ route('addOrganizer') }}" method="POST" class="login-form">
                                {{ csrf_field() }}

                                @include('layouts.userList')
                                <br><br>
                                <button type="submit" class="btn btn-success">
                                    Submit
                                </button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


@stop