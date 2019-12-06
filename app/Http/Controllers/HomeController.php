<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use File;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    //BAGIAN INTI
    public function index()
    {

        $dataku = \App\siswa::all();
        $datake2 = \App\materi::orderBy('id', 'DESC')->limit(1)->get();
         $datake3 = \App\jumsis::orderBy('id','DESC')->limit(1)->get();
         $datadoc = \App\doc::all();
         $dataimg = \App\foto::all();



        return view('admin.index', ['dataku'=>$dataku, 'datake2'=>$datake2, 'datake3'=>$datake3, 'datadoc'=>$datadoc, 'dataimg'=>$dataimg]);
    }


    public function editsiswa(Request $request,$id)
    {
        $data = \App\siswa::findOrFail($id);
        return view('/admin/editsiswa', compact('data'));
    }
    public function updatesiswa(Request $request,$id)
    {
         $data = \App\siswa::findOrFail($id);
        $data->update($request->all());
        return redirect('/admin')->with('Edit', 'Data Berhasil Di Edit');
    }
        public function hapussiswa(Request $request,$id)
    {
         $data = \App\siswa::findOrFail($id);
        $data->delete($request->all());
        return redirect('/admin')->with('Hapus', 'Data Berhasil Di Hapus');
    }


// BAGIAN ABSEN
    public function abs()
    {
       return view('/admin.abs');
    }
    public function addabs(Request $request)
    {
        $dataku = \App\siswa::create($request->all());
        return redirect('/admin/abs')->with('sukses','Data Berhasil Dikirim');  
    }

    // BAGIAN FOTO
    public function foto()
    {
        return view('/admin.foto');
    }
    public function addfoto(Request $request)
    {
        request()->validate([
            'FileUpload' => 'required|image|mimes:png,jpg,jpeg,gif,svg|max:5048',
       ]);
        if($request->hasFile('FileUpload')){
            $resorce = $request->file('FileUpload');
            $name   = $resorce->getClientOriginalName();
            $resorce->move(\base_path() ."/public/images", $name);
            $save = DB::table('images')->insert(['images' => $name]);
        
            return redirect('/admin/foto')->with('images', 'Dokumen Berhasil Di Kirim!');
        }
    }
    public function lookimg()
    {
        $data = \App\foto::all();
        return view('/admin/lookimg', compact('data'));
    }
    public function downimg($images){
       // $model_file = \App\doc::findOrFail($id); //Mencari model atau objek yang dicari
     return response()->download(public_path("images/{$images}"));
  }
public function hapusimg(Request $request,$id)
{
        $data = \App\foto::findOrFail($id);
        $data->delete($request->all());
        return redirect('/admin/lookimg')->with('Hapusimg', 'Data Berhasil Di Hapus');
}



//BAGIAN DOKUMEN

    public function doc()
    {
        return view('/admin.doc');
    }
    public function adddoc(Request $request)
    {
        request()->validate([
            'FileUpload' => 'required|mimes:doc,docx,ppt,txt,xls,pdf|max:5048',
       ]);
        if($request->hasFile('FileUpload')){
            $resorce = $request->file('FileUpload');
            $name   = $resorce->getClientOriginalName();
            $resorce->move(\base_path() ."/public/doc", $name);
            $save = DB::table('docs')->insert(['doc' => $name]);
        
            return redirect('/admin/doc')->with('dokumen', 'Dokumen Berhasil Di Kirim!');
        }
    }





// BAGIAN LIHAT DOC
public function lookdoc()
{
    $data = \App\doc::all();
    return view('/admin/lookdoc', compact('data'));
}
public function download($doc){
       // $model_file = \App\doc::findOrFail($id); //Mencari model atau objek yang dicari
     return response()->download(public_path("doc/{$doc}"));
  }
public function hapusdoc(Request $request,$id)
{
        $data = \App\doc::findOrFail($id);
        $data->delete($request->all());
        return redirect('/admin/lookdoc')->with('Hapusdoc', 'Data Berhasil Di Hapus');
}




// BAGIAN MATERI

    public function materi()
    {
        return view('/admin.materi');
    }
    public function addmat(Request $request)
    {
        $data = \App\materi::create($request->all());
        return redirect('admin')->with('addmat', 'Materi Telah Di Tambah');
    }

    //jumsis

    public function jumsis()
    {
       return view('/admin.jumsis');
    }
    public function addjumsis(Request $request)
    {
        $data = \App\jumsis::create($request->all());
        return redirect('admin')->with('jumsis', 'Jumlah Siswa Berhasil Di Tambahkan');
    }
}
