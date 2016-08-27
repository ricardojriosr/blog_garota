<?php
/**
 * Created by PhpStorm.
 * User: Ricardo
 * Date: 22-08-2016
 * Time: 08:36 PM
 */
?>

@extends('front.template.main')

@section('content')
    <br>
    <div class="row-fluid fondo-contacto ">
        <img id="image" src="{{ asset('images/contact/fondo.jpg') }}" alt="Contact Image" class="img-responsive img-contact"/>

        <div class="form-contact row-fluid hidden-xs">
            <div class="row-fluid">
                <div class="col-sm-3 hr1 "><hr class="hr2 "></div>
                <div class="title text-center col-sm-6 "><h3>KEEP IN TOUCH!</h3></div>
                <div class="col-sm-3 hr1 "><hr class="hr2 "></div>
            </div>
            <div class="row-fluid form-contact-1 ">
                {!! Form::open(['route' => 'front.send-contact', 'method' => 'POST']) !!}
                <div class="form-group text-center">
                    {!! Form::text('name',null,['class' => 'form-control contact-form','required','placeholder' => 'Name*']) !!}
                </div>
                <div class="form-group text-center">
                    {!! Form::email('email',null,['class' => 'form-control contact-form','required','placeholder' => 'Email*']) !!}
                </div>
                <div class="form-group text-center">
                    {!! Form::text('subject',null,['class' => 'form-control contact-form','required','placeholder' => 'Subject*']) !!}
                </div>
                <div class="form-group text-center">
                    {!! Form::textarea('message',null,['class' => 'form-control contact-form','required','placeholder' => 'Message*']) !!}
                </div>
                <div class="form-group text-right">
                    {!! Form::submit('SUBMIT',['class' => 'contact-submit']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>

        <div class="form-contact-mobile form-contact row-fluid hidden-sm hidden-md hidden-lg">
            <div class="row-fluid">
                <div class="col-xs-3 hr1 "><hr class="hr2 "></div>
                <div class="title text-center col-xs-6 "><h3>KEEP IN TOUCH!</h3></div>
                <div class="col-xs-3 hr1 "><hr class="hr2 "></div>
            </div>
            <div class="row-fluid form-contact-1 ">
                {!! Form::open(['route' => 'front.send-contact', 'method' => 'POST']) !!}
                <div class="form-group text-center">
                    {!! Form::text('name',null,['class' => 'form-control contact-form','required','placeholder' => 'Name*']) !!}
                </div>
                <div class="form-group text-center">
                    {!! Form::email('email',null,['class' => 'form-control contact-form','required','placeholder' => 'Email*']) !!}
                </div>
                <div class="form-group text-center">
                    {!! Form::text('subject',null,['class' => 'form-control contact-form','required','placeholder' => 'Subject*']) !!}
                </div>
                <div class="form-group text-center">
                    {!! Form::textarea('message',null,['class' => 'form-control contact-form','required','placeholder' => 'Message*']) !!}
                </div>
                <div class="form-group text-right">
                    {!! Form::submit('SUBMIT',['class' => 'contact-submit']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>

    </div>
    <br>
@endsection
