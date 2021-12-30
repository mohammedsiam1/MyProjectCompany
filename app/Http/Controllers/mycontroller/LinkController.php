<?php

namespace App\Http\Controllers\mycontroller;

use App\Models\area;
use App\Models\city;
use App\Models\link;
use App\Models\degree;
use App\Models\employee;
use App\Models\specialty;
use App\Models\linkdetiles;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\triets\imagetrits;
class LinkController extends Controller
{
    use imagetrits;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alllinks ['data']=link::orderby("id","asc")->select('id','linksName')->get();
        return view("master.index")->with('alllinks',$alllinks);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showAllDetilLinks(Request $request)
    {
$parnt_id=$request->id;
$subCatihry['data']=linkdetiles::where('link_id',$parnt_id)->get();                    //// ???
if($subCatihry['data']){
    return response()->json($subCatihry);
}
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeemply(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\link  $link
     * @return \Illuminate\Http\Response
     */
    public function show(link $link)
    {
        //$links=link::find(1);
        //return $links;
        $links=link::with('linkdetiles')->find(2);
        return $links;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\link  $link
     * @return \Illuminate\Http\Response
     */
    public function showemply(link $link)
    {
        $alllinks ['data']=link::orderby("id","asc")
        ->select('id','linksName')
        ->get();
$employeeData=employee::paginate(5);
        return view('employ.showemploy',compact('employeeData'))->with('alllinks',$alllinks);

    }

    public function crite(request $request)
    {
        $alllinks ['data']=link::orderby("id","asc")
        ->select('id','linksName')
        ->get();

        $degrees=degree::all();
        $specialty=specialty::all();
        $citys=city::all();

        $id2=$request->cityid1;

        $areas = area::where('city_Id',$id2)
        ->select('id','AreaName')
        ->get();

        $output = '<option value="">' . ucfirst(" حدد المنطقة ") .'</option>';
        foreach ($areas as $row){
        $output .= '<option value="' . $row->id . '">' . $row->AreaName . '</option>';
       $output .=$output ;
        }

        echo $output;

       // dd($output);

        return view('employ.employ',compact('degrees','specialty','citys','alllinks'));
    }

    public function insert(Request $request)
    {
$request->validate(
    [
'name1'=>'required',
'name2'=>'required',
//'numEmo'=>'required',
'Email'=>'required |unique:employees',
'phone'=>'required',
'photo'=>'required',
'CityId'=>'required',
'qateqry'=>'required',
'degree'=>'required',
    ],[
        'name1.required'=>'اسم الموظف مطلوب!',
        'name2.required'=>'اسم العائلة مطلوب!',
       // 'numEmo.required'=>'رقم الموظف مطلوب !',
        'Email.required'=>'بريد الموظف مطلوب',
        'Email.unique'=>' البريد موجود بالفعل!',
       'phone.required'=>'هاتف الموظف مطلوب!',
        'photo.required'=>' صورة الموظف مطلوبة!',
        'CityId.required'=>'مدينة الموظف مطلوبة',
        'qateqry.required'=>'تخصص الموظف مطلوب',
        'degree.required'=>'الدرجة العلمية مطلوبة',
    ]);
    $filename=$this->saveimag($request->photo,'folderimgr');
    $emp=new employee();
    $emp->FirstName=$request->name1;
    $emp->LastName=$request->name2;
    $emp->Email=$request->Email;
    $emp->Phone=$request->phone;
    $emp->Photo=$filename;
    $emp->Gender=$request->gender;
    $emp->Berthday=$request->birthday;
    $emp->DateOfEmployment=$request->dateofemplooy;
    $emp->cities_Id=$request->input('CityId');      // الانبوت هاي يعني كانو بقلو بدي الفاليو تبعت الاداة
    $emp->degrees_Id=$request->input('degree');
    $emp->specialties_Id=$request->input('qateqry');

   // $emp->area_Id=$request->input('area_id');

    $emp->save();

    return redirect()->route('show.Employ');
}

protected function getMassge(){

    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\link  $link
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, link $link)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\link  $link
     * @return \Illuminate\Http\Response
     */
    public function destroy(link $link)
    {
        //
    }
}
