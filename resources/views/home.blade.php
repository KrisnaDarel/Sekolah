@extends ('layout.app')

@section ('title')
    Home
@endsection

@section ('content')
    <div class="row g-10 text-center">
        <div class="col-3">
        <div class="p-3  bg-primary mt-4"><i class="fa-solid fa-user"></i> Siswa</div>
        </div>

        <div class="col-3">
        <div class="p-3  bg-warning mt-4"><i class="fa-solid fa-chess-king"></i> Kelas</div>
        </div>

        <div class="col-3">
        <div class="p-3  bg-primary mt-4"><i class="fa-sharp fa-solid fa-user"></i> Guru</div>
        </div>

        <div class="col-3">
        <div class="p-3 bg-warning mt-4"><i class="fa-solid fa-address-book"></i> Mapel</div>
        </div>
</div>


@endsection