{{-- This file is used to store sidebar items, inside the Backpack admin panel --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>


<li class="nav-item"><a class="nav-link" href="{{ backpack_url('furniture') }}"><i class="fas fa-chair nav-icon"></i> Furniture</a></li>

<li class="nav-item"><a class="nav-link" href="{{ backpack_url('supplier') }}"><i class="fas fa-box nav-icon"></i> Suppliers</a></li>