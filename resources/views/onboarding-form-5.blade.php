@extends('layouts/master')
@section('body')
<style>
    .container {
        max-width: 800px;
        /* Adjust this value as needed */
        margin: 0 auto;
        /* Centers the container horizontally */
    }

    .form-container {
        display: flex;
        justify-content: center;
        align-items: center;
        /* height: 100vh; */
        margin-top: 20px;
    }

    /* Adjust form width for mobile */
    @media (max-width: 500px) {
        .form-container {
            padding: 0 15px;
        }

    }

    .heading {
        border-radius: 5px;
        font-size: medium;
    }
</style>
<div class="container form-container ">
    <form id="StoreForm">

    </form>
    @endsection