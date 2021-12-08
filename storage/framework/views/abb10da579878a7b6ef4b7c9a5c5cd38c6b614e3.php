

<?php $__env->startSection('content'); ?>

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
              <?php
                $date = Carbon\Carbon::now()->subHours(5);
                $newHour = $date->isMidday();
                $dateFormated = Carbon\Carbon::parse($date)->format('m/d/Y');
                $hour = Carbon\Carbon::parse($date)->format('H:i');
                $last_login_at = Carbon\Carbon::parse(Auth::user()->last_login_at)->format('m/d/Y - H:i');
              ?>
              <h5 style="color:black;">
              Welcome, <?php echo e(Auth::user()->name); ?>

              <br>
              <br>
              Last Login: <?php echo e($last_login_at); ?>

              <br>
              <br>
              <?php if($date->dayOfWeekIso == 1): ?>
                Monday
              <?php elseif($date->dayOfWeekIso == 2): ?>
                Tuesday
              <?php elseif($date->dayOfWeekIso == 3): ?>
                Wednesday
              <?php elseif($date->dayOfWeekIso == 4): ?>
                Thursday
              <?php elseif($date->dayOfWeekIso == 5): ?>
                Friday
              <?php elseif($date->dayOfWeekIso == 6): ?>
                Saturday
              <?php elseif($date->dayOfWeekIso == 7): ?>
                Sunday
              <?php endif; ?>
              <?php echo e($date->day); ?>,

              <?php if($date->month == 1): ?>
                January
              <?php elseif($date->month == 2): ?>
                February
              <?php elseif($date->month == 3): ?>
                March
              <?php elseif($date->month == 4): ?>
                April
              <?php elseif($date->month == 5): ?>
                May
              <?php elseif($date->month == 6): ?>
                June
              <?php elseif($date->month == 7): ?>
                July
              <?php elseif($date->month == 8): ?>
                August
              <?php elseif($date->month == 9): ?>
                September
              <?php elseif($date->month == 10): ?>
                October
              <?php elseif($date->month == 11): ?>
                November
              <?php elseif($date->month == 12): ?>
                December
              <?php endif; ?>
              <?php echo e($date->year); ?>.
              <?php echo e($hour); ?> CST.
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
                <?php echo e(count($users)); ?>

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
                <?php echo e(count($users)-1); ?>

              </div>
              <div>
                <h4>Pedidos</h4>
              </div>
            </div>
          </div>
        </div>

        

    </div>
  </div>
  </div>
</div>


<?php $__env->startPush('script'); ?>
<script>

</script>
<?php $__env->stopPush(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.styles', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Shaq\Vizius_Bazar\resources\views/admin/index.blade.php ENDPATH**/ ?>