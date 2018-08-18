@extends('layouts.main')


@section('content')
    @include('layouts.search')
        <div class="container-fluid">
        <div class="row search_body">
            <div class="col-md-12">
                    <div class="col-md-3" style="position: static" >
                           <span style="position:absolute; bottom:0px;" class="pull-left">Filter your Search &emsp;&emsp;&emsp;&emsp; <a
                                       href="">Reset All</a></span>
                    </div>
                    <div class="col-md-9">
                        <span class="h3">Kathmandu  to Pokhara</span>
                        <p>60 Result Found</p>

                    </div>
            </div>
        </div>
        </div>

<div class="container-fluid searchh ">
    <div class="row">
        <div class="col-md-3 col-sm-12 col-xs-12">
            <div class="container">
                <div class="panel search_text">
                    <div class="row">
                        <div class="col-md-12 ">
                            <li>Bus Type</li>
                            <input type="checkbox"   name="bus_type" value="" size="small"> Deluxe ()<br>
                            <input type="checkbox"  name="bus_type" value=""> Deluxe Ac ()<br>

                        </div>
                    </div>
                </div>
                <div class="panel search_text">
                    <div class="row">
                        <div class="col-md-12 ">
                            <li>Arrival Time</li>
                            <input  type="checkbox"   name="arrival_time" value=""> 10:00 AM ()<br>
                            <input type="checkbox"  name="arrival_time" value=""> 6:45 PM ()<br>
                        </div>
                    </div>
                </div>
                <div class="panel search_text">
                    <div class="row">
                        <div class="col-md-12 ">
                            <li>Price Range</li>
                            <input type="checkbox"  name="price_range" value=""> $100-$500 ()<br>
                            <input type="checkbox"  name="price_range" value=""> $200-$400 ()<br>
                        </div>
                    </div>
                </div>
                <div class="panel search_text">
                    <div class="row">
                        <div class="col-md-12 ">
                            <li>Price Range</li>
                            <input type="checkbox"   name="price_range" value=""> $100-$500 ()<br>
                            <input type="checkbox"  name="price_range" value=""> $200-$400 ()<br>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-9 col-sm-12 col-xs-12 ">
            <div class="container">
                <div class="panel">
                    <div class="  row">
                        <div class=" col-md-12 col-sm-12 col-xs-12 search_text">
                            <div class="col-md-4">
                                <div class="panel-title">
                                    Bus/Buses
                                </div>

                            </div>
                            <div class="col-md-2">
                                <div class="panel-title">
                                    Departure
                                </div>

                            </div>
                            <div class="col-md-2">
                                <div class="panel-title">
                                    Arrival
                                </div>

                            </div>
                            <div class="col-md-2">
                                <div class="panel-title">
                                    Price
                                </div>

                            </div>
                            <div class="col-md-2">
                                <div class="panel-title">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12 search_text">
                            <div class="col-md-4 col-xs-4">
                                <div class="panel-title">
                                    Rapti Yatayat
                                </div>
                                <p>Ac Sleeper</p>
                            </div>
                            <div class="col-md-2 col-xs-2">
                                <div class="panel-title">
                                    8:30 PM
                                </div>
                                <p>Boarding Point</p>
                            </div>
                            <div class="col-md-2 col-xs-2">
                                <div class="panel-title">
                                    8:30 PM
                                </div>
                                <p>Boarding Point</p>
                            </div>
                            <div class="col-md-2 col-xs-2">
                                <div class="panel-title">
                                    $ 1200
                                </div>
                                <p>fare detail</p>
                                <p>48 seat(s)</p>
                            </div>
                            <div class="col-md-2 col-xs-2 ">
                                <button class="btn btn-default">Select</button>
                                <br>
                                <br>
                                <p>bus details</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12 search_text">
                            <div class="col-md-4 col-xs-4">
                                <div class="panel-title">
                                    Sahara Yatayat
                                </div>
                                <p>Delux Sleeper</p>
                            </div>
                            <div class="col-md-2 col-xs-2">
                                <div class="panel-title">
                                    12:30 PM
                                </div>
                                <p>Boarding Point</p>
                            </div>
                            <div class="col-md-2 col-xs-2">
                                <div class="panel-title">
                                    10:30 AM
                                </div>
                                <p>Boarding Point</p>
                            </div>
                            <div class="col-md-2 col-xs-2">
                                <div class="panel-title">
                                    $ 4200
                                </div>
                                <p>fare detail</p>
                                <p>28 seat(s)</p>
                            </div>
                            <div class="col-md-2 col-xs-2 ">
                                <button class="btn btn-default">Select</button>
                                <p class=" btn dropdown-toggle" type="button" data-toggle="dropdown">bus detail <span
                                            class="caret"></span></p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12 search_text">
                            <div class="col-md-4 col-xs-4">
                                <div class="panel-title">
                                    Sahara Yatayat
                                </div>
                                <p>Delux Sleeper</p>
                            </div>
                            <div class="col-md-2 col-xs-2">
                                <div class="panel-title">
                                    12:30 PM
                                </div>
                                <p>Boarding Point</p>
                            </div>
                            <div class="col-md-2 col-xs-2">
                                <div class="panel-title">
                                    10:30 AM
                                </div>
                                <p>Boarding Point</p>
                            </div>
                            <div class="col-md-2 col-xs-2">
                                <div class="panel-title">
                                    $ 4200
                                </div>
                                <p>fare detail</p>
                                <p>28 seat(s)</p>
                            </div>
                            <div class="col-md-2 col-xs-2 ">
                                <button class="btn btn-default">Select</button>

                                <p class=" btn dropdown-toggle" type="button" data-toggle="dropdown">bus detail <span
                                            class="caret"></span></p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
    @endsection



