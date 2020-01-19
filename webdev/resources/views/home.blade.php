@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 ">
            <div class="card border-dark mb-8" style="max-width: 100rem;max-height:100rem">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs" id="bologna-list" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" href="#upload" role="tab" aria-controls="upload" aria-selected="true">Upload</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#piechart" role="tab" aria-controls="piechart" aria-selected="false">Pie Chart</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#timeline" role="tab" aria-controls="timeline" aria-selected="false">Timeline Chart</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <h4 class="card-title"></h4>
                    <h6 class="card-subtitle mb-2">Upload The CSV here.</h6>

                    <div class="tab-content mt-3">
                        <div class="tab-pane active" id="upload" role="tabpanel">
                            @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                            @endif
                            {{ Form::open(['files' => true,'method' => 'post','route' => 'upload']) }}
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile04">
                                    <label class="custom-file-label" for="inputGroupFile">Choose CSV file1</label>
                                </div>
                                <div class="input-group-append">
                                    <my-button class="btn" text="Submit File" type="submit"></my-button>
                                </div>
                            </div>
                            {{ Form::close() }}
                        </div>

                        <div class="tab-pane" id="piechart" role="tabpanel" aria-labelledby="history-tab">
                            @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                            @endif
                            {{ Form::open(['files' => true,'method' => 'post','route' => 'upload']) }}
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile04">
                                    <label class="custom-file-label" for="inputGroupFile">Choose CSV file2</label>
                                </div>
                                <div class="input-group-append">
                                    <my-button class="btn" text="Submit File" type="submit"></my-button>
                                </div>
                            </div>
                            {{ Form::close() }}
                        </div>

                        <div class="tab-pane" id="timeline" role="tabpanel" aria-labelledby="deals-tab">
                            @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                            @endif
                            {{ Form::open(['files' => true,'method' => 'post','route' => 'upload']) }}
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile04">
                                    <label class="custom-file-label" for="inputGroupFile">Choose CSV file3</label>
                                </div>
                                <div class="input-group-append">
                                    <my-button class="btn" text="Submit File" type="submit"></my-button>
                                </div>
                            </div>
                            {{ Form::close() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection