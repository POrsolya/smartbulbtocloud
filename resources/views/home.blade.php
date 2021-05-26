@extends('layout')
@section('title', 'Home Page')
@section('content')
<div class="container">
    <div class="content">
        <!-- <div class="row">
            <button onclick="document.getElementById('myImage').src='bulb_on.jpg'">Turn on the light</button>

            <img id="myImage" src="bulb_off.jpg" style="width:100px; margin-left:100px;">

            <button onclick="document.getElementById('myImage').src='bulb_off.jpg'">Turn off the light</button>
        </div> -->

        <form action="/" method="POST">
            <div class="row">
                <!-- <button onclick="document.getElementById('myImage').src='bulb_on.jpg'">Turn on the light</button> -->
                @if($state == "OFF")
                <img id="myImage" src="bulb_off.jpg" style="width:100px; margin-top:40px;">
                @else
                <img id="myImage" src="bulb_on.jpg" style="width:100px; margin-top:40px;">
                @endif
                <!-- <button onclick="document.getElementById('myImage').src='bulb_off.jpg'">Turn off the light</button> -->
            </div>
            <div class="row" style="margin-top:20px; margin-left:-120px;">
                <div class="col-sm-6">
                    <div class="input-group">
                        <label for="switch">Switch: </label>
                        <select name="switch" id="switch" class="form-control input-lg">
                            <option value="">Turn on/off the lamp...</option>
                            <option value="{{$option->action}}">{{$option->action}}</option>
                        </select>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary" style="margin-top:20px; width:100px; margin-left:-20px;">OK</button>
            @csrf
        </form>
    </div>
</div>