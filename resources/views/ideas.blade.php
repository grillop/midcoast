@extends('layouts.default')

@section('content')
    <section class="section ">
        <div class="container ">
            <div class="columns is-centered">
                <div class="column is-half ">
                    <table style="border-bottom-color: black!important" class="table has-background-sea is-bordered has-text-black">
                        <thead>
                            <td>
                                Category
                            </td>
                            <td>
                                Description
                            </td>
                        </thead>
                        <tbody>
                            @php
                                $category = 1;
                            @endphp
                            @foreach ($ideas as $idea)
                                @if ($category != $idea->category)
                                    <tr>
                                        @php
                                            $category = $idea->category;
                                        @endphp
                                        <td>{{ $category }}</td>
                                        <td>{{ $idea->description }}</td>
                                    @else
                                        <td>&nbsp;</td>
                                        <td>{{ $idea->description }}</td>
                                @endif
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endsection
