
<!DOCTYPE html>
<html dir="rtl">
<head>
    @include('pages.linke')
</head>
<body>
    <div id="wrapper2">
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="adjust-nav">

            <span class="logout-spn">
                <a href="#" style="color:#fff; "><h3 class="heder-newemp"> تسجيل موظف جديد </h3> </a>
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
<form   dir="rtl" method="POST"  action="{{ route('insertEmploy') }}" enctype="multipart/form-data" id="FormEmplooy">
    @csrf
 <div class="container">
      <p > <h4 class="p-titel">من فضلك املأ كل البيانات لانشاء حساب جديد </h4></p>
      <input type="text" placeholder="الاسم الاول" name="name1" class="email" value="{{ old('name1') }}" >
      <span class=" {{$errors->has('name1') ? 'text-danger':' '  }}">{{ $errors->first('name1') }}</span> {{--  asset('assets/truee.jpg')--}}
      <br>
      <input type="text" placeholder="الاسم الثاني" name="name2" class="email" value="{{ old('name2') }}"  >
      <span class=" {{$errors->has('name2') ? 'text-danger':' '  }}">{{ $errors->first('name2') }}</span>
      <br>
      <input type="number" name="numEmp" min="1" placeholder="رقم الموظف" name="numEmo" class="email" value="{{ old('numEmo') }}" >
      <span class=""</span>
      <br>

      <input type="text" placeholder="ادخل البريد" name="Email" class="email" id="email" value="{{ old('Email') }}"  >
      <span class=" {{$errors->has('Email') ? 'text-danger':' '  }}">{{ $errors->first('Email') }}</span>
  <br>

      <input type="password" placeholder="ادخل رقم الجوال" name="phone" id="psw" value="{{ old('phone') }}" >
      <span class=" {{$errors->has('phone') ? 'text-danger':' '  }}">{{ $errors->first('phone') }}</span>

      <br>
      <input type="date" class="email" id="birthday1" onclick="ageClcoleate()"  name="birthday" value="{{ old('birthday') }}">
      <label class="file88"> تاريخ الميلاد</label>
      <span class=" {{$errors->has('birthday') ? 'text-danger':' '  }}">{{ $errors->first('birthday') }}</span>
      <br>
      <label class="file3">العمر : </label>
      <span id="file44"> </span>
      <br>
      <button type="submit"  class="registerbtn">تسجيل موظف   </button>


      <label class="file2" for="file">تحميل صورة </label>
      <input type="file" id="imag"  name="photo" value="{{ old('photo') }}"  class="email file"
       onchange="loadFile(event);">

<img id="output2" style="height: 70px" class="myimage " alt="your Image"  />
<span id="myImge0" class=" {{$errors->has('photo') ? 'text-danger':' '  }}">{{ $errors->first('photo') }}</span>
      <br>

      <input type="date" class="email addresQati"  id="dateofemplooy" name="dateofemplooy" value="{{ old('dateofemplooy') }}">
      <label class="file80"> تاريخ التوظيف</label>
      <span class=" {{$errors->has('dateofemplooy') ? 'text-danger':' '  }}">{{ $errors->first('dateofemplooy') }}</span>
<br>
<select id="gender" name="gender" class="email addresQati2">
    <option disabled {{ old('gender')?'':'selected' }}>حدد الجنس </option>
    <option >ذكر</option>
    <option >انثى</option>
</select>
<br>
<select id="CityId" name="CityId" class="email addresQati3">
    <span id="myImge0" class=" {{$errors->has('CityId') ? 'text-danger':' '  }}">{{ $errors->first('CityId') }}</span>
    <option value="volvo1"disabled {{ old('CityId')?'':'selected' }}> حدد المدينة </option>


@foreach ($citys as $city )
<option value="{{ $city->id }}"> {{ $city->CityNmae }} </option>

@endforeach

</select>
<br>
<select id="area_id" name="area_id" class="email addresQati4">


</select>
<br>
<select id="qateqry" name="qateqry" class="email addresQati5">
    <span id="myImge3" class=" {{$errors->has('qateqry') ? 'text-danger':' '  }}">{{ $errors->first('qateqry') }}</span>

    <option value="volvo1"disabled {{ old('qateqry')?'':'selected' }}> حدد التخصص </option>
    @foreach ($specialty as $specialtyNmaess )
    <option value="{{ $specialtyNmaess->id }}" > {{ $specialtyNmaess->NmaeSpecialties }} </option>

    @endforeach
</select>
<select id="degree" name="degree" class="email addresQati6">
    <span id="myImge4" class=" {{$errors->has('degree') ? 'text-danger':' '  }}">{{ $errors->first('degree') }}</span>

    <option value="volvo1"disabled {{ old('degree')?'':'selected' }}>الدرجة العلمية</option>
    @foreach ($degrees as $degrees )
    <option value="{{ $degrees->id }}"> {{ $degrees->NameDegree }} </option>

    @endforeach

</select>

    </div>


  </form>
</div>
@include('pages.scripts')
<script src="{{ asset('frountend/js/jquery.min.js') }}"></script>
<script src="{{ asset('frountend/js/js.js') }}"></script>
<script>
function ageClcoleate(){
    var userinput = document.getElementById('birthday1').value;
    var birthday=new Date(userinput);
    if(userinput==null || userinput==' '){
        document.getElementById("file44"),innerHTML="حدد تاريخ الميلاد";
        return false;
    }else{
        var month_diff=Data.now()-birthday.getTime();
        var age_dt=new Data(month_diff);  /*// بنستعدي الكنستركتور تبع التاريخ*/
var year=age_dt.grtUTCFullYear();
var age=Math.abs(year-1970);
return document.getElementById("file44").innerHTML=age;
    }
}


    var loadFile=function(event){
var image=document.getElementById('output2');
image.src=URL.createObjectURL(event.target.files[0]);  /*// انشئ رابط خارجي عشان اقدر اشوفو وخود هيكل الصورة وليس رابطها*/

    };

    $('#CityId').on('change', function(e){
e.preventDefault();
if(e.target.value != ''){
    var cityid1=e.target.value;
    alert(cityid1);
    $.ajax({
type: 'get',
url: "{{ route('add.Employ') }}",
data:{
    '_token':"{{ csrf_token() }}",
    'cityid': cityid1

},
success: function(data){
    alert(cityid1);
    $('#area_id').html("data");

},
error: function(data){

}

    });
}
    });


function Swal(){
    Swal.fire(
        'تمت الاضافة',
        'لقد تم اضافة موظف بنجاح',
        'success'
      )
}

</script>

</body>
</html>
