@extends('master.master')

@section('content')
@foreach($team as $teams)
    <div class="team-section">
        <h2 class="text-center mb-4">{{$teams->name}}</h2>
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    @foreach($teams->nhansu as $nhansu)
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="{{$nhansu->gioithieu}}" alt="Ảnh của {{$nhansu->hoten}}" />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">{{$nhansu->hoten}}</h5>
                                    <!-- Product details-->
                                    <ul class="list-unstyled">
                                        <li><strong>Kỹ năng:</strong> {{$nhansu->kinang}}</li>
                                        <li><strong>Kinh nghiệm:</strong> {{$nhansu->kinhnghiem}} năm</li>
                                        <li><strong>Giới thiệu:</strong> {{$nhansu->thongtingioithieu}}</li>
                                        <li><strong>Bằng cấp:</strong> {{$nhansu->bangcap}}</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{ route('team.show', ['id' => $nhansu->id]) }}">Xem chi tiết</a></div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
@endforeach
@endsection
