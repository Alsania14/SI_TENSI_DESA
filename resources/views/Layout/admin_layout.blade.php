@extends('layout.main_layout')

<!-- TOP SOURCE -->
@section('topsource')
<link href="{{ asset('css/admin/admin.css') }}" rel="stylesheet"/>

<link href="{{ asset('mdb4/css/addons/datatables2.min.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
<link rel="stylesheet" href="{{ asset('leaflet-geoman.css') }}">
@endsection

@push('modal_section')
<livewire:tempat-ibadah.modal-create-tempat-ibadah></livewire:tempat-ibadah.modal-create-tempat-ibadah>
@endpush

<!-- PAGE TITLE -->
@section('page','ADMIN')

<!-- ADMIN SIDEBAR -->
@section('sidebar')
    <!-- UL NAVBAR -->
    <ul class="list-unstyled components">
        <li>
            <a href="#" class="z-depth-0 btn btn-primary btn-lg btn-block text-nowrap">BERANDA</a>
        </li>

        <li>
            
            <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle z-depth-0 btn btn-primary btn-lg btn-block text-nowrap">POTENSI</a>

            <ul class="collapse list-unstyled" id="pageSubmenu">
                
                <li class="view overlay">
                    <a href="#" class="text-nowrap btn btn-secondary btn-lg btn-block" style="font-size:15px;">Tempat Ibadah</a>
                </li>

                <li>
                    <a href="#" class="text-nowrap btn btn-secondary btn-lg btn-block" style="font-size:12px;">Sekolah</a>
                </li>

                <li>
                    <a href="#" class="text-nowrap btn btn-secondary btn-lg btn-block">Sumber Air</a>
                </li>

            </ul>

        </li>

    </ul>
    <!-- END UL NAVBAR -->
@endsection

<!-- MAIN CONTENT -->
@section('main')
    <!-- ADMIN CONTENT WRAPPER -->
    <div class="admin-content-wrapper">
        
        <!-- MAP -->
        <div class="map-wrapper">
            <!-- LIVEWIRE MAP TEMPAT IBADAH -->
            <livewire:tempat-ibadah.map-tempat-ibadah-index></livewire:tempat-ibadah.map-tempat-ibadah-index>
        </div>
        <!-- END MAP -->
        
        <!-- DATA -->
        <div class="data card m-2 mr-2 z-depth-2">
                <div class="card-body">
                    <table id="dtBasicExample" class="mt-5 table table table-striped table-responsive-md btn-table" width="100%">
                    <thead>
                        <tr>
                        <th class="th-sm">Name
                        </th>
                        <th class="th-sm">Position
                        </th>
                        <th class="th-sm">Office
                        </th>
                        <th class="th-sm">Age
                        </th>
                        <th class="th-sm">Start date
                        </th>
                        <th class="th-sm">Salary
                        </th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                    </table>
                </div>
        </div>
        <!-- END DATA -->

        <!-- FORM -->
        <div class="form">

        </div>
        <!-- END FORM -->

    </div>
    <!-- END ADMIN CONTENT WRAPPER -->
@endsection

<!-- BOTTOM SOURCE UNTUK SCRIPT HALAMAN -->
@section('bottomsource')
<!-- MDBootstrap Datatables  -->
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
<script src="{{ asset('leaflet-geoman.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('mdb4/js/addons/datatables2.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/admin/admin.js') }}"></script>
@endsection