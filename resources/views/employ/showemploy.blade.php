<!DOCTYPE html>
<html dir="rtl">
<head>
    @include('pages.linke')
</head>
<body>
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="adjust-nav">



            <span class="logout-spn">
                <a href="#" style="color:#fff; ">الموظفين  </a>
            </span>



        </div>
    </div>
    <nav class="navbar-default navbar-side" role="navigation">
        <div style="border-radius: 5%;" class="myul">
            <div class="sidebar-collapse">
                <ul style="border-radius:5%;" class="nav" id="main-menu">
                    <li class="active-link">
                        <a href="#"><i style="border-radius: 5%;" class="fa fa-desktop "></i> لوحة التحكم </a>
                    </li>

                    @foreach ($alllinks['data'] as $linke)
                        <li class=" nav-item start">
                            <a href="" id_link={{ $linke->id }} class="linkClickNow nav-link nav-toggle">
                                <span class="title">{{ $linke->linksName }}</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="sub-menu" style="text-align: center;">
                                <div class="resultlink" style="text-align: center;">


                                </div>
                            </ul>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </nav>
@include('pages.CallLinks')

<link href="{{ asset('frountend/css/main.css') }}"rel="stylesheet">
<link href="{{ asset('frountend/css/util.css') }}"rel="stylesheet">

<div class="limiter">
    <div class="container-table100">
        <div class="wrap-table100">
            <div class="table100">
                <table style="width: 90%">
                    <thead>
                        <tr class="table100-head">
                            <th style="width: 5%" class="column2">رقم</th>
                            <th style="padding-left: 40px;width: 15%" class="column2">الصورة</th>
                            <th style="width: 10%" class="column4">الاسم</th>
                            <th class="column4">العائلة</th>
                            <th class="column5">البريد</th>
                            <th class="column4">الهاتف</th>
                            <th class="column6">عرض  تعديل  حذف</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($employeeData as $employeeDataO )
                        <tr>
                            <th class="column2">{{ $loop->index+1 }}</th>
                            <th class="column2 patient-img"style="padding-left: 45px;">
                            <img id="Photo{{$employeeDataO->id}}"  style="height: 30%;width:30% " src="{{asset('folderimgr/'.$employeeDataO ->Photo )  }} "</th>
                            <th id="FirstName{{$employeeDataO->id}}" class="column4">{{$employeeDataO -> FirstName }} </th>
                            <th id="LastName{{$employeeDataO->id}}" class="column4">{{$employeeDataO -> LastName }}</th>
                            <th id="Email{{$employeeDataO->id}}" class="column5">{{$employeeDataO -> Email }}</th>
                            <th id="Phone{{$employeeDataO->id}}" class="column4">{{$employeeDataO -> Phone }}</th>
                            <th class="column6">

                        <button onclick="showEmolooy({{ $employeeDataO->id  }})" type="button" data-type="dialog" class="btn-sweetalert btn btn-success btn-xs">عرض</button>
                        <a href="" class="btn btn-primary btn-xs">تعديل</a>
                        <button  onclick="deleteEmplooy({{ $employeeDataO->id }})" type="submit" class="btn btn-danger btn-xs " >حذف</button>

                            </th>
                            <th id="Berthday{{$employeeDataO->id}}"  style="display: none;">{{$employeeDataO -> Berthday }}  </th>
                            <th id="DateOfEmployment{{$employeeDataO->id}}" style="display: none"> {{$employeeDataO -> DateOfEmployment }} </th>
                            <th id="Gender{{$employeeDataO->id}}" style="display: none">{{$employeeDataO -> Gender }}  </th>
                            <th id="OccupationalSpecialization{{$employeeDataO->id}}" style="display: none"> {{$employeeDataO -> OccupationalSpecialization }} </th>
                            <th id="cities_Id{{$employeeDataO->id}}" style="display: none"> {{$employeeDataO -> cities_Id }} </th>
                            <th id="area_Id{{$employeeDataO->id}}" style="display: none"> {{$employeeDataO -> area_Id }} </th>
                            <th id="degrees_Id{{$employeeDataO->id}}" style="display: none"> {{$employeeDataO -> degrees_Id }} </th>
                            <th id="specialties_Id{{$employeeDataO->id}}" style="display: none"> {{$employeeDataO -> specialties_Id }} </th>
                            <th id="created_at{{$employeeDataO->id}}" style="display: none"> {{$employeeDataO -> created_at }}  </th>
                            <th id="updated_at{{$employeeDataO->id}}" style="display: none"> {{$employeeDataO -> updated_at }} </th>
                        </tr>
                         @endforeach
                    </tbody>
                </table>

                <a  href="{{route('add.Employ') }}" style="margin-right: 10%" class="registerbtns"> تسجيل موظف جديد ؟</a>
                {{ $employeeData->links()}}

            </div>
        </div>
    </div>
</div>
<script>

    function deleteEmplooy(id){
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'btn btn-success',
                cancelButton: 'btn btn-danger'
            },
            buttonsStyling: true
        })

        swalWithBootstrapButtons.fire({
            title: 'هل تريد الحذف',                                                   //
            text: "لن تتمكن من الاسترجاع !",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'حذف',
            cancelButtonText: 'ألغاء',
            reverseButtons: true
        }).then((result) => {
        if (result.isConfirmed) {

            swalWithBootstrapButtons.fire(
            'تم الحذف ',                                                               //
            'لقد حذفت موظف',
            'success',

            )
            event.preventDefault();
            document.getElementById("deleteEmplooy" +id).submit();
        } else if (
            /* Read more about handling dismissals below */
            result.dismiss === Swal.DismissReason.cancel
        ) {
            swalWithBootstrapButtons.fire(
            'الغاء',
            'لم يتم الحذف',
            'error'
            )
        }
        })
    }


</script>

<script type="text/javascript">

function showEmolooy(id){
var photo= document.getElementById('Photo'+id).src;
var t1="اسم الموظف :"+document.getElementById('FirstName'+id).innerHTML;
var t2="اسم العائلة :"+document.getElementById('LastName'+id).innerHTML;
var t3=" البريد :"+document.getElementById('Email'+id).innerHTML;
var t4=" تاريخ الميلاد :"+document.getElementById('Berthday'+id).innerHTML;
var t5=" تاريخ التوظيف :"+document.getElementById('DateOfEmployment'+id).innerHTML;
var t6="الجنس :"+document.getElementById('Gender'+id).innerHTML;
var t7=" التخصص المهني :"+document.getElementById('OccupationalSpecialization'+id).innerHTML;
var t8=" المدينة :"+document.getElementById('cities_Id'+id).innerHTML;
var t9=" المنطقة :"+document.getElementById('area_Id'+id).innerHTML;
var t10=" الدرجة العلمية :"+document.getElementById('degrees_Id'+id).innerHTML;
var t11="اسم التخصص :"+document.getElementById('specialties_Id'+id).innerHTML;
var t12=" تم الانشاء في:"+document.getElementById('created_at'+id).innerHTML;
var t13=" تم التعديل في :"+document.getElementById('updated_at'+id).innerHTML;
var data="<img style='width: 120px; border-radius: 25%;' src='"+photo+"'>"+"<br>"+t1+"<br>"+t2+"<br>"+t3+"<br>"+t4+"<br>"+t5+"<br>"+t6+"<br>"+t7+"<br>"+t8+"<br>"+t9+"<br>"+t10+"<br>"+t11+"<br>"+t12+"<br>"+t13;
swal.fire('معلومات الشخص',data);
}
</script>
@include('pages.scripts')
</body>
</html>
