@include('partials.header')
@extends('partials.footer')
<style>
    body {
        position: relative;
        background-image: url('/img/back.avif');
        background-color: rgba(0, 0, 0, 0.5);
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }

    body::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-image: url('/img/back.avif');
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
        filter: blur(2px);
        z-index: -1;
    }
   
</style>

