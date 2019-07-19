<?php
/**
 * Created by PhpStorm.
 * User: SOKLIM
 * Date: 7/17/2019
 * Time: 10:10 AM
 */
?>


@extends('frontend.fragement.layout')

@section('content1')

    @if(session('error'))
        <div class="alert alert-danger" role="alert">
            Something went wrong
        </div>
    @endif
    <div class="container" style="padding-bottom: 15px;padding-top: 15px">
        <div class="row">
            <div class="card">
                <div class="card-header">{{ __('Change Password') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ url('change/password') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Current Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('passwordOld') ? ' is-invalid' : '' }}" name="passwordOld" required>

                                @if ($errors->has('passwordOld'))
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('passwordOld') }}</strong>
                                </span>
                                @endif
                            </div>

                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('New Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@stop



