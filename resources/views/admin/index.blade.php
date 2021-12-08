@extends('admin.styles')

@section('content')

  <ol class="breadcrumb">
    <li class="breadcrumb-item">Home</li>
    <li class="breadcrumb-item active">Dashboard</li>
  </ol>
  <div class="container-fluid">
    <div class="animated fadeIn">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-sm-5">
              <h4 class="card-title mb-0"></h4>
              <div class="small text-muted">
              @php
                $date = Carbon\Carbon::now()->subHours(5);
                $newHour = $date->isMidday();
                $dateFormated = Carbon\Carbon::parse($date)->format('m/d/Y');
                $hour = Carbon\Carbon::parse($date)->format('H:i');
                $last_login_at = Carbon\Carbon::parse(Auth::user()->last_login_at)->format('m/d/Y - H:i');
              @endphp
              <h5 style="color:black;">
              Welcome, {{ Auth::user()->name }}
              <br>
              <br>
              Last Login: {{ $last_login_at }}
              <br>
              <br>
              @if($date->dayOfWeekIso == 1)
                Monday
              @elseif($date->dayOfWeekIso == 2)
                Tuesday
              @elseif($date->dayOfWeekIso == 3)
                Wednesday
              @elseif($date->dayOfWeekIso == 4)
                Thursday
              @elseif($date->dayOfWeekIso == 5)
                Friday
              @elseif($date->dayOfWeekIso == 6)
                Saturday
              @elseif($date->dayOfWeekIso == 7)
                Sunday
              @endif
              {{$date->day}},

              @if($date->month == 1)
                January
              @elseif($date->month == 2)
                February
              @elseif($date->month == 3)
                March
              @elseif($date->month == 4)
                April
              @elseif($date->month == 5)
                May
              @elseif($date->month == 6)
                June
              @elseif($date->month == 7)
                July
              @elseif($date->month == 8)
                August
              @elseif($date->month == 9)
                September
              @elseif($date->month == 10)
                October
              @elseif($date->month == 11)
                November
              @elseif($date->month == 12)
                December
              @endif
              {{$date->year}}.
              {{ $hour }} CST.
              </h5>
          </div>
        </div>
      </div>

      <br>
      <div class="row">
        <div class="col-sm-6 col-lg-3">
          <div class="card text-white bg-info">
            <div class="card-body pb-0">
              <div class="btn-group float-right">
                  <i style="font-size: 30px;" class="nav-icon icon-people"></i>
              </div>
              <div class="text-value">
                {{ count($users) }}
              </div>
              <div>
                <h4>Total Users</h4>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-3">
          <div class="card text-white bg-info">
            <div class="card-body pb-0">
              <div class="btn-group float-right">
                <i style="font-size: 30px;" class="nav-icon fas fa-truck"></i>
              </div>
              <div class="text-value">
                {{ count($users)-1 }}
              </div>
              <div>
                <h4>Pedidos</h4>
              </div>
            </div>
          </div>
        </div>

        {{-- <div class="col-sm-6 col-lg-3">
          <div class="card text-white bg-info">
            <div class="card-body pb-0">
              <div class="btn-group float-right">
                  <i style="font-size: 30px;" class="nav-icon icon-book-open"></i>
              </div>
              <div class="text-value">
                {{ count($) }}
              </div>
              <div>
                <h4></h4>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-3">
          <div class="card text-white bg-info">
            <div class="card-body pb-0">
              <div class="btn-group float-right">
                <i style="font-size: 30px;" class="fa fa-usd"></i>
              </div>
              <div class="text-value">
                ${{number_format(round($total_invested,2),2)}}
              </div>
              <div>
                <h4>Total Invested</h4>
              </div>
            </div>
          </div>
        </div>
      </div> --}}

    </div>
  </div>
  </div>
</div>


@push('script')
<script>

</script>
@endpush

@endsection
