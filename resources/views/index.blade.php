@extends('layouts.app')

<div class="container mt-5">

    @foreach($lampadas as $lamp)
        @if($lamp->status == "OFF")
            <form action="/ligar/{{ $lamp->id }}" method="POST">
                @csrf
                    <button class="btn btn-outline-primary" type="submit" name="btnLampada" value="{{ $lamp->local }}">Ligar Lampada {{ $lamp->local }} </button>
                    <br>
                    <br>
            </form>
        @else
            <form action="/desligar/{{ $lamp->id }}" method="POST">
                @csrf
                    <button class="btn btn-outline-danger" type="submit" name="btnLampada" value="{{ $lamp->local }}">Desligar Lampada {{ $lamp->local }} </button>
                    <br>
                    <br>
            </form>
        @endif
    @endforeach
</div>

