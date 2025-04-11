@extends('errors::minimal')

@section('title', __('Askes Ditolak'))
@section('code', '403')
@section('message', __($exception->getMessage() ?: 'Askes Ditolak'))
