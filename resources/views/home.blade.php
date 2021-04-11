@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{ $postCount }}</h3>
                    <p>Posts</p>
                </div>
                <div class="icon">
                    <i class="fas fa-pager"></i>
                </div>
                <a href="{{ route('post.index') }}" class="small-box-footer">Mais informações <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{ $bookCount }}</h3>
                    <p>Livros</p>
                </div>
                <div class="icon">
                    <i class="fas fa-book"></i>
                </div>
                <a href="{{ route('book.index') }}" class="small-box-footer">Mais informações <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>{{ $categoryCount }}</h3>
                    <p>Categoria</p>
                </div>
                <div class="icon">
                    <i class="fas fa-tags"></i>
                </div>
                <a href="{{ route('category.index') }}" class="small-box-footer">Mais informações <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>{{ $productCount }}</h3>
                    <p>Produtos</p>
                </div>
                <div class="icon">
                    <i class="fas fa-boxes"></i>
                </div>
                <a href="{{ route('product.index') }}" class="small-box-footer">Mais informações <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header border-0">
                    <div class="d-flex justify-content-between">
                        <h3 class="card-title">Visualizações</h3>
                        <a href="{{ route('view.index') }}">Ver Todas</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="d-flex">
                        <p class="d-flex flex-column">
                            <span class="text-bold text-lg"></span>
                            <span><b>Total: </b>{{ $viewCount }}</span>
                        </p>
                    </div>
                    <!-- /.d-flex -->
                    <div class="position-relative mb-4">
                        <canvas id="sales-chart" height="200"></canvas>
                    </div>
                </div>
            </div>
        </div>
        @stop

        @section('js')
            <script src="{{ asset('js/library/Chart.js') }}"></script>
            <script>
                /* global Chart:false */

                $(function () {
                    'use strict'

                    let ticksStyle = {
                        fontColor: '#495057',
                        fontStyle: 'bold'
                    }

                    let mode = 'index'
                    let intersect = true

                    let $salesChart = $('#sales-chart')
                    // eslint-disable-next-line no-unused-lets
                    let salesChart = new Chart($salesChart, {
                        type: 'bar',
                        data: {
                            labels: [
                                @foreach($views as $view)
                                    '{{ $view->link }}',
                                @endforeach
                            ],
                            datasets: [
                                {
                                    backgroundColor: '#007bff',
                                    borderColor: '#007bff',
                                    data: [
                                        @foreach($views as $view)
                                            '{{ $view->views }}',
                                        @endforeach
                                    ]
                                },
                            ]
                        },
                        options: {
                            maintainAspectRatio: false,
                            tooltips: {
                                mode: mode,
                                intersect: intersect
                            },
                            hover: {
                                mode: mode,
                                intersect: intersect
                            },
                            legend: {
                                display: false
                            },
                            scales: {
                                yAxes: [{
                                    // display: false,
                                    gridLines: {
                                        display: true,
                                        lineWidth: '4px',
                                        color: 'rgba(0, 0, 0, .2)',
                                        zeroLineColor: 'transparent'
                                    },
                                    ticks: $.extend({
                                        beginAtZero: true,
                                    }, ticksStyle)
                                }],
                                xAxes: [{
                                    display: true,
                                    gridLines: {
                                        display: false
                                    },
                                    ticks: ticksStyle
                                }]
                            }
                        }
                    })
                })

                // lgtm [js/unused-local-variable]
            </script>
@endsection
