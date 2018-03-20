@extends('emails/layouts/default')

@section('content')


<p>{{ trans('mail.hello') }} {{ $first_name }},</p>


<p>A new item has been checked out under your name, details are below.</p>

<table>
    <tr>
        <td>
            Asset name
        </td>
        <td>
            <strong>{{ $asset_name }}</strong>
        </td>
    </tr>
    <tr>
        <td>
            Asset tag
        </td>
        <td>
            <strong>{{ $asset_tag }}</strong>
        </td>
    </tr>
    <tr>
        <td>
            Serial number
        </td>
        <td>
            <strong>{{ $serial }}</strong>
        </td>
    </tr>
    <tr>
        <td>
            Checkout date
        </td>
        <td>
            <strong>{{ $checkout_date }}</strong>
        </td>
    </tr>
    <tr>
        <td>
            Expected checking
        </td>
        <td>
            <strong>{{ $expected_checking }}</strong>
        </td>
    </tr>
</table>
<p>Please ensure that the asset has been removed from your account when you check it in.</p>
    <p>Checked out by <strong>{{Auth::user()->username}}</strong></p>
